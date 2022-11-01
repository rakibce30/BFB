<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\category;
use App\Models\Setting;
use App\Models\Frontend\Comment;
use Vinkla\Hashids\Facades\Hashids;

class FrontEndController extends Controller
{
    public function home()
    {
        $settings   =   Setting::all();
        return view('front-end.page.home', compact('settings'));
    }

    public function about()
    {
        $settings   =   Setting::all();
        return view('front-end.page.about', compact('settings'));
    }

    public function package()
    {
        $settings   =   Setting::all();
        return view('front-end.page.package', compact('settings'));
    }

    public function blogs()
    {
        $settings   =   Setting::all();
        $posts                  =   Post::orderBy('id', 'Desc')->paginate(2);
        $sidebar_posts          =   Post::all()->sortDesc()->take(3);
        $sidebar_categories     =   category::all()->sortDesc();
        return view('front-end.page.blogs', compact('posts', 'sidebar_categories', 'sidebar_posts', 'settings'));
    }

    public function contact()
    {
        $settings   =   Setting::all();
        return view('front-end.page.contact', compact('settings'));
    }
    public function archive($id)
    {
        $settings   =   Setting::all();
        $_id                 =   Hashids::decode($id);
        $sidebar_posts       =   Post::all()->sortDesc()->take(3);
        $sidebar_categories  =   category::all()->sortDesc();
        $cat_posts           =   Post::where('category_id', $_id)->get()->sortDesc();

        // dd($cat_posts);
        return view('front-end.page.archive', compact('sidebar_posts', 'sidebar_categories', 'cat_posts', 'settings'));
    }

    public function SinglePost($id)
    {
        $settings   =   Setting::all();
        $_id                    =   Hashids::decode($id);
        $sidebar_posts          =   Post::all()->sortDesc()->take(4);
        $sidebar_categories     =   category::all()->sortDesc();
        $post                   =   Post::where('id', $_id)->first();

        return view('front-end.page.post', compact('post', 'sidebar_categories', 'sidebar_posts', 'settings'));
    }
}
