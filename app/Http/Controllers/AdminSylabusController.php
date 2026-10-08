<?php

namespace App\Http\Controllers;

use App\Models\Sylabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminSylabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sylabuengs = Sylabus::where('medium', 'english')->orderBy('id', 'ASC')->get();
        $sylabugujs = Sylabus::where('medium', 'gujrati')->orderBy('id', 'ASC')->get();
        $sylabuhins = Sylabus::where('medium', 'hindi')->orderBy('id', 'ASC')->get();
        return view('admin.sylabus.index', compact('sylabugujs', 'sylabuengs', 'sylabuhins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $push = Sylabus::findOrFail($id);

            if (!$request->hasFile('file')) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Please select a PDF file to upload.',
                    ], 422);
                }
                return Redirect::back()->with('alert', 'Please select a PDF file to upload.');
            }

            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'file' => 'required|mimes:pdf|max:25600',
            ], [
                'file.mimes' => 'The uploaded file must be a valid PDF (.pdf only).',
                'file.max' => 'The PDF file size must not exceed 25 MB.',
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first('file');
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMsg,
                        'errors' => $validator->errors(),
                    ], 422);
                }
                return Redirect::back()->with('alert', $errorMsg);
            }

            $file = $request->file('file');
            $destination = public_path('sylabuspdf');
            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . '_' . $str;

            $file->move($destination, $name);

            if ($push->file != '/sylabuspdf/' && !empty($push->getRawOriginal('file'))) {
                $oldPath = public_path() . $push->file;
                if (file_exists($oldPath) && is_file($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $push->update([
                'file' => $name,
            ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Syllabus PDF updated successfully!',
                    'file_url' => asset($push->file),
                    'std' => $push->std,
                    'medium' => $push->medium,
                ]);
            }

            return Redirect::back()->with('alert', 'Syllabus PDF updated successfully');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Syllabus upload error: ' . $e->getMessage());
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Upload processing error: ' . $e->getMessage(),
                ], 500);
            }
            return Redirect::back()->with('alert', 'Upload processing error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sylabu = Sylabus::findOrFail($id);
        if ($sylabu->file != '/sylabuspdf/' && !empty($sylabu->getRawOriginal('file'))) {
            if (file_exists(public_path() . $sylabu->file)) {
                unlink(public_path() . $sylabu->file);
            }
        }
        $sylabu->update([
            'file' => null,
        ]);
        return Redirect::back()->with('alert', 'Syllabus PDF removed successfully');
    }
}
