<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\category;
use App\Models\User;
use App\Models\Setting;
use Vinkla\Hashids\Facades\Hashids;

class AdminController extends Controller
{
    public function index()
    {
        $settings   =   Setting::all();
        return view('admin.page.dashboard', compact('settings'));
    }

    public function settings()
    {
        $settings   =   Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function edit(Request $request, $id)
    {
        $_id        =   Hashids::decode($id);
        $data       =   Setting::where('id', $_id)->first();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $data['logo']= $filename;
        }
        $data->site_name            =       $request->name;
        $data->site_address         =       $request->address;
        $data->site_phone           =       $request->phone;
        $data->site_email           =       $request->email;
        $data->site_facebook        =       $request->facebook;
        $data->site_googleplus      =       $request->google;
        $data->site_linkedin        =       $request->linkedin;
        $data->site_twitter         =       $request->twitter;
        $data->update();

        return redirect()->back();
    }

}
