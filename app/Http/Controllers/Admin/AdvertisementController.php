<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Googleanalytic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{
    public function maanAdvertisementIndex()
    {
        $googleanalytics = Googleanalytic::all();
        $advertisements = Advertisement::all();
        return view('admin.pages.ads.index',compact('advertisements','googleanalytics'));
    }

    public function maanAdvertisementStore(Request $request)
    {


        if ($request->header_ads!=''){
            $request->validate([
                    'header_ads'=> 'required',
            ]);
        }
        if ($request->sidebar_ads!=''){
            $request->validate([
                    'sidebar_ads'=> 'required',
            ]);
        }
        if ($request->before_post_ads!=''){
            $request->validate([
                    'before_post_ads'=> 'required',
            ]);
        }
        if ($request->before_post_ads!=''){
            $request->validate([
                    'before_post_ads'=> 'required',
            ]);
        }

        $advertisements                             = new Advertisement();

        if($request->file('header_ads')){
            $file= $request->file('header_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/header_ads'), $filename);
            $advertisements->header_ads = $filename;
        }
        if($request->file('sidebar_ads')){
            $file= $request->file('sidebar_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/sidebar_ads'), $filename);
            $advertisements->sidebar_ads = $filename;
        }
       if($request->file('before_post_ads')){
            $file= $request->file('before_post_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/before_post_ads'), $filename);
            $advertisements->before_post_ads = $filename;
        }
        if($request->file('after_post_ads')){
            $file= $request->file('after_post_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/after_post_ads'), $filename);
            $advertisements->after_post_ads = $filename;
        }
       
       
       
    
      
      
        $advertisements->status                     = 1 ;
        $advertisements->save();

        //message..
        $this->setSuccess('Inserted');
        //redirect route..
        return redirect()->route('admin.ads.index');
    }

    public function maanAdvertisementUpdate (Request $request,Advertisement $advertisement)
    {

        if ($request->header_ads!=''){
            $request->validate([
                'header_ads'=> 'required',
            ]);
        }
        if ($request->sidebar_ads!=''){
            $request->validate([
                'sidebar_ads'=> 'required',
            ]);
        }
        if ($request->before_post_ads!=''){
            $request->validate([
                'before_post_ads'=> 'required',
            ]);
        }
        if ($request->before_post_ads!=''){
            $request->validate([
                'before_post_ads'=> 'required',
            ]);
        }

        if($request->file('header_ads')){
            $file= $request->file('header_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/header_ads'), $filename);
            $advertisement->header_ads = $filename;
        }
        if($request->file('sidebar_ads')){
            $file= $request->file('sidebar_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/sidebar_ads'), $filename);
            $advertisement->sidebar_ads = $filename;
        }
        if($request->file('before_post_ads')){
            $file= $request->file('before_post_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/before_post_ads'), $filename);
            $advertisement->before_post_ads = $filename;
        }
        if($request->file('after_post_ads')){
            $file= $request->file('after_post_ads');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/after_post_ads'), $filename);
            $advertisement->after_post_ads = $filename;
        }
       
        $advertisement->save();
        $this->setSuccess('Updated');
        return redirect()->route('admin.ads.index');
    }

    public function maanAdvertisementDestroy(Advertisement $advertisement)
    {
        if (File::exists($advertisement->befor_post_ads)){
            unlink($advertisement->befor_post_ads);
        }
        if (File::exists($advertisement->after_post_ads)){
            unlink($advertisement->after_post_ads);
        }
        $advertisement->delete();
        return redirect()->route('admin.ads.index');
    }
//google analytics ..
    public function maanAdvertisementGoogleAnalyticsStore(Request $request)
    {

        $request->validate([
            'google_analytics'=> 'required'
        ]);

        $googleanalytics = new Googleanalytic();
        $googleanalytics->google_analytics = $request->google_analytics ;
        $googleanalytics->save();

        $this->setSuccess('Inserted');
        return redirect()->route('admin.ads.index');

    }

    public function maanAdvertisementGoogleAnalyticsUpdate (Request $request,Googleanalytic $googleanalytic)
    {
        $request->validate([
            'google_analytics'=> 'required'
        ]);

        $googleanalytic->google_analytics = $request->google_analytics ;
        $googleanalytic->save();
        $this->setSuccess('Updated');
        return redirect()->route('admin.ads.index');
    }

    public function maanAdvertisementGoogleAnalyticsDestroy(Googleanalytic $googleanalytic)
    {
        $googleanalytic->delete();
        return redirect()->route('admin.ads.index');
    }


}
