<div class="blog-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @foreach($posts as $post)
                    <article class="cropium-blog-item">
                        <div class="blog-image">
                            <img src="{{ $post->thumbnail }}" alt="">
                            <div class="blog-date">
                                <h5 class="title">{{ date('d', strtotime($post->created_at)) }}</h5>
                                <span>{{ date('M', strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i>{{ $post->username }}</a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o"></i>{{ $post->category_name }}</a></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="/blog-details/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->contents }}</p>
                        </div>
                    </article>
                    @endforeach

                </div>
                <!-- Blog Sidebar Starts -->
                @include('components.blog.blog-sidebar')
            </div>
            <!-- Blog Pagination Starts -->
            @include('components.blog.blog-pagination')
        </div>
    </div>