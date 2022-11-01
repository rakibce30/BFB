<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post       =   Post::all();
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = category::all();
        return view('admin.post.create', compact('category'));
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
            'post_title'        =>  'required|string|max:200',
            'post_category'     =>  'required|string|max:200',
            'image'             =>  'nullable|image',
            'post_description'  =>  'nullable|string',
            'meta_title'        =>  'nullable|max:200',
            'meta_keyword'      =>  'nullable|string|max:255',
            'meta_description'  =>  'nullable|string',
            'status'            =>  'nullable',
        ]);
        
        $post = new Post();
        $post->category_id      =   $request->post_category;
        $post->name             =   $request->post_title;
        $post->slug             =   Str::of($request->post_title)->slug('-');
        if($request->file('image')){
            $file           =   $request->file('image');
            $filename       =   date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $post['image']  =   $filename;
        }
        $post->description      =   $request->post_description;
        $post->meta_title       =   $request->meta_title;
        $post->meta_description =   $request->meta_description;
        $post->meta_keyword     =   $request->meta_keyword;
        $post->status           =   $request->status == true ? '1':'0';
        $post->user_id          =   Auth::user()->id;
        $post->save();

        return redirect()->back()->with('message', 'Post created successful');
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
        $category = category::all();
        $post = Post::where('id', $_id)->first();
        return view('admin.post.edit', compact('post', 'category'));
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
        $post = Post::where('id', $_id)->first();
        $post->category_id      =   $request->post_category;
        $post->name             =   $request->post_title;
        $post->slug             =   Str::of($request->post_title)->slug('-');
        if($request->file('image')){
            $file           =   $request->file('image');
            $filename       =   date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $post['image']  =   $filename;
        }
        $post->description      =   $request->post_description;
        $post->meta_title       =   $request->meta_title;
        $post->meta_description =   $request->meta_description;
        $post->meta_keyword     =   $request->meta_keyword;
        $post->status           =   $request->status == true ? '1':'0';
        $post->user_id          =   Auth::user()->id;
        $post->update();

        return redirect()->route('post.index')->with('message', 'Post updated successfully');
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
        $data = Post::where('id', $_id)->first();

        $image_path         = public_path("\Image\\") .$data->image;
        if(File::exists($image_path)){
            File::delete($image_path);;
        }
        $data->delete();
        return redirect()->back()->with('message', 'Post deleted successful');
    }
}
