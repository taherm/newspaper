<section class="news-feed">
    <div class="container">
        <div class="row row-margin">
            <div class="col-sm-3 hidden-xs col-padding hidden">
                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                    <div class="post-thumb img-zoom-in">
                        <a href="#">
                            <img class="entry-thumb" src="{{Storage::disk('local')->url($posts[0]->image)}}" alt="">
                        </a>
                    </div>
                    <div class="post-info">
                        <span class="color-1">{{$posts[0]->category->title}}</span>
                        <h3 class="post-title post-title-size"><a href="{{ route('posts.show', ['id'=>$posts[0]->id]) }}" rel="bookmark">{{$posts[0]->title}} </a></h3>
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> {{$posts[0]->created_at->diffForHumans()}}
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            <!-- read more -->
                            <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-sm-6 col-padding">
                <div id="news-feed-carousel" class="owl-carousel owl-theme">
                    @foreach($slider as $post)
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{Storage::disk('local')->url($post->image)}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-2">{{$post->category->title}} </span>
                                <h3 class="post-title"><a href="{{ route('posts.show', ['id'=>$post->id]) }}" rel="bookmark">{{$post->title}} </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i>{{$post->created_at->diffForHumans()}}
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
          <div class="col-sm-3 hidden-xs col-padding hidden">
                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                    <div class="post-thumb img-zoom-in">
                        <a href="#">
                            <img class="entry-thumb" src="{{Storage::disk('local')->url($posts[1]->image)}}" alt="">
                        </a>
                    </div>
                    <div class="post-info">
                        <span class="color-5">{{$posts[1]->category->title}} </span>
                        <h3 class="post-title post-title-size"><a href="{{ route('posts.show', ['id'=>$posts[1]->id]) }}" rel="bookmark">{{$posts[1]->title}} </a></h3>
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> {{$posts[1]->created_at->diffForHumans()}}
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            <!-- read more -->
                            <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>