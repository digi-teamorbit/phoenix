<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get();   

        $cms_home5 = DB::table('pages')->where('id', 5)->first();
        $cms_home6 = DB::table('pages')->where('id', 6)->first();
        $cms_home7 = DB::table('pages')->where('id', 7)->first();
        $cms_home8 = DB::table('pages')->where('id', 8)->first();
        $cms_home9 = DB::table('pages')->where('id', 23)->first();

        $videos=DB::table('videos')->get()->take(3);
        $recent_videos=DB::table('videos')->orderBy('id', 'DESC')->get()->take(5);


        //search bar
        if(isset($_GET['q']) && ($_GET['q']!='')){
            $keyword=$_GET['q'];
            $coaches=DB::table('coaches')->where('name', 'like', '%'.$keyword.'%')->get();
        }
        else{
            $coaches=DB::table('coaches')->get();
        }

        return view('welcome', compact('banner', 'cms_home5', 'cms_home6', 'cms_home7', 'cms_home8', 'videos', 'recent_videos', 'cms_home9'));
    }

    public function aboutUs()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 1)->first();

        $cms_about=DB::table('pages')->where('id', 10)->first();

        return view('aboutus', compact('inner_banner', 'cms_about'));
    }

    public function becomeAcoach()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 5)->first();

        $cms_coach1=DB::table('pages')->where('id', 11)->first();
        $cms_coach2=DB::table('pages')->where('id', 12)->first();

        return view('become_a_coach', compact('inner_banner', 'cms_coach1', 'cms_coach2'));
    }

    public function contactUs()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 2)->first();

        $cms_contact=DB::table('pages')->where('id', 13)->first();
        $cms_contact1=DB::table('pages')->where('id', 14)->first();

        return view('contactus', compact('inner_banner', 'cms_contact', 'cms_contact1'));
    }

    public function findYourCoach()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 3)->first();

        //search bar
        if(isset($_GET['q']) && ($_GET['q']!='')){
            $keyword=$_GET['q'];
            $coaches=DB::table('coaches')->where('name', 'like', '%'.$keyword.'%')->get();
        }
        else{
            $coaches=DB::table('coaches')->get();
        }

        return view('find-your-coach', compact('inner_banner', 'coaches'));
    }

    public function findYourCoachDetail($id)
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 4)->first();

        $coach_detail=DB::table('coaches')->where('id',$id)->first();

        return view('find-your-coach-detail', compact('inner_banner', 'coach_detail'));
    }

    public function privacyPolicy()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 9)->first();

        $cms_privacy=DB::table('pages')->where('id', 15)->first();

        return view('privacy-policy', compact('inner_banner', 'cms_privacy'));
    }

    public function purchasingMembership()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 6)->first();

        $packages=DB::table('packages')->get();
        return view('purchasing-membership', compact('inner_banner', 'packages'));
    }

    public function termsAndCondition()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 7)->first();

        $cms_terms=DB::table('pages')->where('id', 16)->first();

        return view('terms-and-condition', compact('inner_banner', 'cms_terms'));
    }

    public function videos()
    { 
        $inner_banner=DB::table('inner_banners')->where('id', 8)->first();

        $cms_video1=DB::table('pages')->where('id', 17)->first();
        $cms_video2=DB::table('pages')->where('id', 18)->first();

        $videos=DB::table('videos')->get();

        return view('videos', compact('inner_banner', 'cms_video1', 'cms_video2', 'videos'));
    }
    

    public function contactUsSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);


        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        $inquiry->inquiries_email = $request->email;
       $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
        ]);

        $is_email = newsletter::where(['newsletter_email' => $request->email, 'section' => $request->section])->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        $inquiry->section = $request->section;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for subscribing for newsletter. We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

    public function weightlosstipsSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $is_email = newsletter::where(['newsletter_email' => $request->email, 'section' => $request->section])->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        $inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        $inquiry->section = $request->section;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'You have successfully subscribed for weightloss tips!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists!'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

    public function freetrialSubmit(Request $request)
    {

        $this->validate($request, [
            'email' => 'required'
        ]);

        $is_email = newsletter::where(['newsletter_email' => $request->email, 'section' => $request->section])->count();
        
        
            if($is_email == 0) {

        $inquiry = new newsletter;
        // $inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        $inquiry->section = $request->section;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'You have successfully subscribed for 14 days trial!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists!'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
