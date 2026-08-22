<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Enquirey;
use App\Models\Event;
use App\Models\Galleryimage;
use App\Models\Mediagalleryimage;
use App\Models\Planner;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Staff;
use App\Models\Sylabus;
use App\Models\Testomonial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function login(Request $req)
    {
        // return $req->input();
        $user = User::where(['username' => $req->username])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('alert', 'Username or password is not matched');
            // return "Username or password is not matched";
        } else {
            Auth::loginUsingId($user->id);
            $req->session()->put('user', $user);
            return redirect('/admin/dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $slider = Slider::count();
        $testomonial = Testomonial::count();
        $staff = Staff::count();
        $gallery = Galleryimage::count();
        $video = Video::count();
        $mediagallery = Mediagalleryimage::count();
        $event = Event::count();
        $achivement = Product::count();
        $contact = Contact::count();
        $contactunshow = Contact::where('is_show', 0)->count();
        $enauiry = Enquirey::count();
        $enauiryunshow = Enquirey::where('is_show', 0)->count();
        $admission = Admission::count();
        $admissionunshow = Admission::where('is_show', 0)->count();
        $career = Career::count();
        $careerunshow = Career::where('is_show', 0)->count();
        return view('admin.index', compact('gallery', 'contact', 'enauiry', 'testomonial', 'slider', 'mediagallery', 'contactunshow', 'enauiryunshow', 'career', 'video', 'admissionunshow', 'careerunshow', 'staff', 'event', 'achivement', 'admission'));
    }

    public function profiledit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        // $user = User::where('id',1)->first();
        // $user->password = Hash::make($request->new_password);
        // $user->save();
        // return redirect()->back()->with("success","Password changed successfully !");
        // return $request;
        $user = Session::get('user');
        if (!(Hash::check($request->get('current_password'), $user->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Session::get('user');
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function homePage(Request $request)
    {
        return view('frontend.index');
    }

    public function about(Request $request)
    {
        return view('frontend.about');
    }

    public function curriculum(Request $request)
    {
        return view('frontend.curriculum');
    }

    public function facility(Request $request)
    {
        return view('frontend.facility');
    }

    public function branches(Request $request)
    {
        $response = Http::post('https://sunrisegroupofschools.org/api/get_branch_data/godadara');
        $allbranches = $response['data'];
        return view('frontend.branches', compact('allbranches'));
    }

    public function director(Request $request)
    {
        return view('frontend.director');
    }

    public function branchHead(Request $request)
    {
        return view('frontend.branch-head');
    }

    public function principal(Request $request)
    {
        return view('frontend.principle');
    }

    public function coOrdinator(Request $request)
    {
        return view('frontend.co_ordinator');
    }

    public function incharge(Request $request)
    {
        return view('frontend.incharge');
    }

    public function supervisor(Request $request)
    {
        return view('frontend.supervisor');
    }

    public function teachingStaff(Request $request)
    {
        $teachings = Staff::where('category', 'teaching')->where('is_show', 1)->get();
        return view('frontend.teaching_staff', compact('teachings'));
    }

    public function officeStaff(Request $request)
    {
        $offices = Staff::where('category', 'office')->where('is_show', 1)->get();
        return view('frontend.office_staff', compact('offices'));
    }

    public function nonTeachingStaff(Request $request)
    {
        $nonteachings = Staff::where('category', 'nonteaching')->where('is_show', 1)->get();
        return view('frontend.non_teaching_staff', compact('nonteachings'));
    }

    public function transport(Request $request)
    {
        return view('frontend.transport');
    }

    public function schoolUniform(Request $request)
    {
        $english = Galleryimage::where('category', 'english')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        $gujrati = Galleryimage::where('category', 'gujrati')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        $festival = Galleryimage::where('category', 'festival')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.school_uniform', compact('english', 'gujrati', 'festival'));
    }

    public function syllabus(Request $request)
    {
        $sylabuengs = Sylabus::where('medium', 'english')->get();
        $sylabugujs = Sylabus::where('medium', 'gujrati')->get();
        return view('frontend.syllabus', compact('sylabugujs', 'sylabuengs'));
    }

    public function infrastructure(Request $request)
    {
        return view('frontend.infrastructure');
    }

    public function guidelinesToparents(Request $request)
    {
        return view('frontend.guidelines_toparents');
    }

    public function parentRoleinEducation(Request $request)
    {
        return view('frontend.parent_rolein_education');
    }

    public function planner(Request $request)
    {
        $english = Planner::where('medium', 'english')->orderBy('id', 'DESC')->first();
        $gujrati = Planner::where('medium', 'gujrati')->orderBy('id', 'DESC')->first();
        return view('frontend.planner', compact('english', 'gujrati'));
    }

    public function admissionCriteria(Request $request)
    {
        return view('frontend.admissions');
    }

    public function admissionForm(Request $request)
    {
        return view('frontend.admission_form');
    }

    public function inquiry(Request $request)
    {
        return view('frontend.inquiry');
    }

    public function payNow(Request $request)
    {
        return view('frontend.Pay_Now');
    }

    public function refundAndCancelPolicy(Request $request)
    {
        return view('frontend.Refund_And_Cancel_Policy');
    }

    public function career(Request $request)
    {
        return view('frontend.career');
    }

    public function academicActivity(Request $request)
    {
        return view('frontend.academic_activity');
    }

    public function extraActivity(Request $request)
    {
        return view('frontend.extra_activity');
    }

    public function photoGallery(Request $request)
    {
        $english = Galleryimage::where('category', 'english')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        $gujrati = Galleryimage::where('category', 'gujrati')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        $festival = Galleryimage::where('category', 'festival')->where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.photo_gallery', compact('english', 'gujrati', 'festival'));
    }

    public function mediaGallery(Request $request)
    {
        $medias = Mediagalleryimage::where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.media_gallery', compact('medias'));
    }

    public function videoGallery(Request $request)
    {
        $videos = Video::where('file', '!=', null)->where('is_show', 1)->orderBy('id', 'DESC')->get();
        $videourls = Video::where('link', '!=', null)->where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.video_gallery', compact('videos', 'videourls'));
    }

    public function event(Request $request)
    {
        $events = Event::where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.event', compact('events'));
    }

    public function achievements(Request $request)
    {
        $achivments = Product::where('is_show', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.achievements', compact('achivments'));
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect()->back()->with('alert', 'Messange send Successfully');
    }

    public function storeInquiry(Request $request)
    {
        $input = $request->all();
        Enquirey::create($input);
        return redirect()->back()->with('alert', 'Inqiry Message send Successfully');
    }

    public function storeAdmission(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('dobcertificate', $name);

            $input['file'] = "$name";
        }
        Admission::create($input);
        return redirect()->back()->with('alert', 'Admission Message send Successfully');
    }

    public function storeCareer(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('careerimg', $name);

            $input['file'] = "$name";
        }
        Career::create($input);
        return redirect()->back()->with('alert', 'Career Message send Successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

    public function showEmployee(Request $request) {}

    public function search(Request $request) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {}

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
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}

    public function deleteAll(Request $request) {}
}
