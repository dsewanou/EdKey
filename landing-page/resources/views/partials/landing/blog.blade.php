<section class="blog blog-home mega-section  " id="blog">
    <div class="container ">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">blog</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span>
                </h2>
            </div>
            <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a
                    class="cta-btn btn-solid   cta-btn btn-solid  " href="#">see all posts<i
                        class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="row ">
            <div class="col-12 ">
                <div class="posts-grid ">
                    <div class="row">
                        @foreach($blogPosts as $post)
                            <div class="col-12 col-lg-4 ">
                                <div class="post-box"> <a class="post-link" href="#" title="{{ $post['title'] }}">
                                        <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy"
                                                src="{{ asset($post['image']) }}" alt="" /><span class="post-date"><span
                                                    class="day">{{ $post['day'] }} </span>{{ $post['month_year'] }} </span>
                                        </div>
                                    </a>
                                    <div class="post-summary">
                                        <div class="post-info"><a class="info post-cat" href="#"> <i
                                                    class="bi bi-bookmark icon"></i>{{ $post['category'] }}</a><a
                                                class="info post-author" href="#"> <i
                                                    class=" bi bi-person icon"></i>{{ $post['author'] }}</a></div>
                                        <div class="post-text"><a class="post-link" href="#">
                                                <h2 class="post-title"> {{ $post['title'] }} </h2>
                                            </a>
                                            <p class="post-excerpt">{{ $post['excerpt'] }}</p><a class="read-more"
                                                href="#">read more<i class="bi bi-arrow-right icon "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>