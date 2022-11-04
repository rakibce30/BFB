<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::all();
        
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated =  $request->validate([
            'cat_name'          =>      'required|string|max:20',
            'cat_des'           =>      'nullable',
            'image'             =>      'nullable|image',
            'meta_title'        =>      'nullable|string|max:20',
            'meta_des'          =>      'nullable',
            'meta_key'          =>      'nullable|string',
            'navbar_status'     =>      'nullable|boolean',
            'meta_keyword'      =>      'nullable|boolean',
        ]);
        

        $data = new category();

        $data->name           = $request->cat_name;
        $data->slug           = Str::of($request->cat_name)->slug('-');
        $data->description    = $request->cat_des;
        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $data['image']= $filename;
        }

        $data->meta_title          = $request->meta_title;
        $data->meta_description    = $request->meta_des;
        $data->meta_keyword        = $request->meta_key;
        $data->navbar_status       = $request->navbar_status == true ? '1':'0';
        $data->status              = $request->status == true ? '1':'0';
        $data->created_by          = Auth::user()->id;
        
        $data->save();

        return redirect()->back()->with('message','Category created successfully');

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
        $_id = Hashids::decode($id);

        $data = category::where('id', $_id)->first();

        return view('admin.category.edit', compact('data'));
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
        $_id = Hashids::decode($id);

        $data = category::where('id', $_id)->first();

        $data->name           = $request->cat_name;
        $data->slug           = Str::of($request->cat_name)->slug('-');
        $data->description    = $request->cat_des;   
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $data['image']= $filename;
        }
        $data->meta_title          = $request->meta_title;
        $data->meta_description    = $request->meta_des;
        $data->meta_keyword        = $request->meta_key;
        $data->navbar_status       = $request->navbar_status == true ? '1':'0';
        $data->status              = $request->status == true ? '1':'0';
        $data->created_by          = Auth::user()->id;

        $data->update();  

        return redirect()->route('category.index')->with('message', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $_id = Hashids::decode($id);
        $data = category::where('id', $_id)->first();

        $image_path         = public_path("\Image\\") .$data->image;
        if(File::exists($image_path)){
            File::delete($image_path);;
        }
        $data->delete();
        $data->post()->delete();
        return redirect()->back()->with('message', 'Category deleted successfully!');
    }
}
