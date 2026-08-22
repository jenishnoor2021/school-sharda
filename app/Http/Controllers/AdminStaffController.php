<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testomonial = Staff::orderBy('id', 'DESC')->get();
        return view('admin.staffs.index', compact('testomonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'name' => 'required',
            'file' => 'required',
            // 'occupation' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $input = $request->all();
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('staffimg', $name);

            $input['file'] = "$name";

        }

        Staff::create($input);
        return redirect('/admin/staff');
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
        $testomonial = Staff::findOrFail($id);
        $view_data = [
            'header' => [
                'title' => 'Testomonial Edit',
            ],
            'body' => [
                'id' => '',
                'testomonial' => $testomonial,
            ],
            'footer' => [
                'js' => [],
            ],
        ];

        return view('admin.staffs.edit', $view_data);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'experience' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $push = Staff::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('staffimg', $name);

            $input['file'] = "$name";

            if ($push->file == "/staffimg/") {

            } else {
                if (file_exists(public_path() . $push->file)) {
                    unlink(public_path() . $push->file);
                }
            }

        }

        $push->update($input);

        return redirect('/admin/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backimg = Staff::findOrFail($id);
        if ($backimg->file == '/staffimg/') {
        } else {
            if (file_exists(public_path() . $backimg->file)) {
                unlink(public_path() . $backimg->file);
            }
        }
        $backimg->delete();

        return Redirect::back();
    }

    public function staffActive($id)
    {
        $slider = Staff::where('id', $id)->first();
        if ($slider->is_show == 1) {
            $slider->is_show = 0;
        } else {
            $slider->is_show = 1;
        }
        $slider->save();
        return redirect()->back();
    }

    public function searchStaff(Request $request)
    {
        $data = $request->quer;
        $testomonial = Staff::where('name', 'like', '%' . $data . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('admin.staffs.index', compact('testomonial'));
    }
}
