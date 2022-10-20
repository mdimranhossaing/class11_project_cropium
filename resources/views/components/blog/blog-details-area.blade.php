<div class="blog-area blog-details-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="cropium-blog-item">
                        <div class="blog-image">
                            <img src="{{$post->thumbnail}}" alt="">
                            <div class="blog-date">
                                <h5 class="title">{{ date('d', strtotime($post->created_at)) }}</h5>
                                <span>{{ date('M', strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="/blog-details/{{$post->username}}"><i class="fa fa-user-o"></i>{{$post->username}}</a></li>
                                    <li><a href="/blog-details/{{$post->category_slug}}"><i class="fa fa-bookmark-o"></i>{{$post->category_name}}</a></li>
                                </ul>
                            </div>
                            <h3 class="title">{{$post->title}}</h3>
                            <p>{{$post->contents}}</p>
                        </div>
                    </article>

                    <div class="area-separator"></div>

                    <!-- Blog Comments Starts -->
                    @include('components.blog.blog-comments-starts')

                    <div class="area-separator"></div>

                    <!-- Blog Comments Form -->
                    @include('components.blog.blog-comments-form')
                </div>
                <!-- Blog Sidebar Starts -->
                @include('components.blog.blog-sidebar')
            </div>
        </div>
    </div>