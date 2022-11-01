<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Hashids\Hashids;
use Vinkla\Hashids\Facades\Hashids;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $_id = Hashids::decode($id);

        $userData = User::where('id', $_id)->first();        

        // return json_encode(array('data'=>$userData));

        return view('admin.User-Details.profile', compact('userData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $_id = Hashids::decode($id);
        $userData  = User::where('id', $_id)->first();

        // dd($userData);
        return view('admin.User-Details.edit', compact('userData'));
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
        // Hash Decode
        $_id = Hashids::decode($id);
        
        // Fatch Data
        $Data = User::where('id', $_id)->first();

        $Data->name           =      $request->name;
        $Data->about          =      $request->user_about;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $Data['image']= $filename;
        }
        $Data->phone          =      $request->user_number;
        $Data->dob            =      $request->user_dob;
        $Data->gender         =      $request->user_gender;
        $Data->address        =      $request->user_address;
        $Data->postal_code    =      $request->user_postcode;
        $Data->city           =      $request->user_city;
        $Data->country        =      $request->user_country;
        $Data->update();

        return redirect()->route('UserDetail.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
