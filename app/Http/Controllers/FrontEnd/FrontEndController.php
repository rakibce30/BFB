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
        return view('front-end.page.home');
    }

    public function about()
    {
        return view('front-end.page.about');
    }

    public function package()
    {
        return view('front-end.page.package');
    }

    public function blogs()
    {
        $posts                  =   Post::orderBy('id', 'Desc')->paginate(2);
        $sidebar_posts          =   Post::all()->sortDesc()->take(3);
        $sidebar_categories     =   category::all()->sortDesc();
        return view('front-end.page.blogs', compact('posts', 'sidebar_categories', 'sidebar_posts'));
    }

    public function contact()
    {
        return view('front-end.page.contact');
    }
    public function archive($item_slug)
    {
        $sidebar_posts       =   Post::all()->sortDesc()->take(3);
        $sidebar_categories  =   category::all()->sortDesc();
        $cat_posts           =   Post::where('slug', $item_slug)->get()->sortDesc();

        // dd($cat_posts);
        return view('front-end.page.archive', compact('sidebar_posts', 'sidebar_categories', 'cat_posts'));
    }

    public function SinglePost($item_slug)
    {
        $sidebar_posts          =   Post::all()->sortDesc()->take(4);
        $sidebar_categories     =   category::all()->sortDesc();
        $post                   =   Post::where('slug', $item_slug)->first();

        return view('front-end.page.post', compact('post', 'sidebar_categories', 'sidebar_posts'));
    }
}
