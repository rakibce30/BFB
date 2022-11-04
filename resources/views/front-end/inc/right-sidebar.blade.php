<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Search</button>
        </form>
    </aside>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
        <ul class="list cat-list">
           @foreach ($sidebar_categories as $item)
                <li>
                    <a href="{{route('page.category', $item->slug)}}" class="d-flex">
                        <p>{{$item->name}}</p>
                        {{-- <p style="padding-left: 3px;"> {{ $posts->count()}}</p> --}}
                    </a>
                </li>   
           @endforeach   
        </ul>
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
        @foreach ($sidebar_posts as $item)
             <div class="media post_item">
                <img src="{{asset('Image/' . $item->image)}}" width="50px" height="50px" alt="post">
                <div class="media-body">
                    <a href="{{route('blog.single', $id = Hashids::encode($item->id))}}">
                        <h3 style="color: #2d2d2d;">{{$item->name}}</h3>
                    </a>
                    <p>{{ $item->created_at->format('M d, Y') }}</p>
                </div>
            </div>
        @endforeach  
    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                </a>
            </li>
        </ul>
    </aside>
    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Subscribe</button>
        </form>
    </aside>
</div>