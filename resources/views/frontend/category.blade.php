@extends('frontend.layouts.master')
@section('content')
<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$current_category->title}}</h1>
                <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="/" title="">Home</a></li>
                        <li><a href="{{ route('category.posts', ['id'=>$current_category->id]) }}" title="">{{$current_category->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <!--Post list-->
            @foreach($posts as $post)
            <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                <a href="{{ route('posts.show', ['id'=>$post->id]) }}"><img src="{{Storage::disk('local')->url($post->image)}}" with="250px" height="205px" alt=""></a>
                <div class="post-style2-detail">
                    <h3><a href="{{ route('posts.show', ['id'=>$post->id]) }}" title="">{{$post->title}}</a></h3>
                    <div class="date">
                        <ul>
                            {{-- <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>--}}
                            <li>By <a title="" href="#"><span>{{$post->user->name}}</span></a> --</li>
                            <li><a title="" href="#">{{$post->created_at->diffForHumans()}}</a> --</li>
                            {{-- <li><a title="" href="#"><span>275 Comments</span></a></li>--}}
                        </ul>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                    {{-- <button type="button" class="btn btn-style">Reade more</button>--}}
                </div>
            </div>
            @endforeach
            <!--Post list-->
            <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                <a href="#"><img src="images/category/category-post-12.jpg" alt=""></a>
                <div class="post-style2-detail">
                    <h3><a href="#" title="">Lorem Ipsum is simply dummy text of the printing .</a></h3>
                    <div class="date">
                        <ul>
                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                            <li><a title="" href="#">11 Nov 2015</a> --</li>
                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                        </ul>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                    <button type="button" class="btn btn-style">Reade more</button>
                </div>
            </div>
            <!-- Post list -->
            <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#"><img src="images/category/category-post-13.jpg" alt=""></a>
                <div class="post-style2-detail">
                    <h3><a href="#" title="">If you are going to use a passage of Lorem Ipsum .</a></h3>
                    <div class="date">
                        <ul>
                            <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                            <li><a title="" href="#">11 Nov 2015</a> --</li>
                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                        </ul>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                    <button type="button" class="btn btn-style">Reade more</button>
                </div>
            </div>
            <!-- Post list -->
            <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <a href="#"><img src="images/category/category-post-14.jpg" alt=""></a>
                <div class="post-style2-detail">
                    <h3><a href="#" title="">Check Out the Amazing Photos of Lauren Conradâ€™s Trip</a></h3>
                    <div class="date">
                        <ul>
                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                            <li><a title="" href="#">11 Nov 2015</a> --</li>
                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                        </ul>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                    <button type="button" class="btn btn-style">Reade more</button>
                </div>
            </div>
            <!-- Post list -->
            <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <a href="#"><img src="images/category/category-post-15.jpg" alt=""></a>
                <div class="post-style2-detail">
                    <h3><a href="#" title="">Many desktop publishing packages and web page.</a></h3>
                    <div class="date">
                        <ul>
                            <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                            <li><a title="" href="#">11 Nov 2015</a> --</li>
                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                        </ul>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                    <button type="button" class="btn btn-style">Reade more</button>
                </div>
            </div>
        </div>
        <aside class="col-sm-4 left-padding">
            <div class="input-group search-area">
                <!-- search area -->
                <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                <div class="input-group-btn">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            <!-- social icon -->
            <h3 class="category-headding ">SOCIAL PIXEL</h3>
            <div class="headding-border"></div>
            <div class="social">
                <ul>
                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                    <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                </ul>
            </div>
            <!-- /.social icon -->
            <div class="tab-inner">
                <ul class="tabs">
                    <li><a href="#">POPULAR</a></li>
                    <li><a href="#">MOST VIEWED</a></li>
                </ul>
                <hr>
                <!-- tabs -->
                <div class="tab_content">
                    <div class="tab-item-inner">
                        <div class="box-item wow fadeIn" data-wow-duration="1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-1">
                                    <a href="#">SPORTS</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                    <a href="#">TECHNOLOGY </a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-3">
                                    <a href="#">HEALTH</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-4">
                                    <a href="#">FASHION</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / tab item -->
                    <div class="tab-item-inner">
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-5">
                                    <a href="#">BUSINESS</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                    <a href="#">TECHNOLOGY </a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-3">
                                    <a href="#">HEALTH</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-4">
                                    <a href="#">FASHION</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / tab item -->
                </div>
                <!-- / tab_content -->
            </div>
            <!-- / tab -->
            <div class="banner-add">
                <!-- add -->
                <span class="add-title">- Advertisement -</span>
                <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
            </div>
        </aside>
    </div>
    <!-- pagination -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="pagination">
                    <li>
                        <a href="#" class="prev">
                            <i class="pe-7s-angle-left"></i>
                        </a>
                    </li>
                    <li> <a href="#">1</a></li>
                    <li> <a href="#" class="active">2</a></li>
                    <li> <a href="#">3</a></li>
                    <li> <a href="#">4</a></li>
                    <li> ... </li>
                    <li> <a href="#">15</a></li>
                    <li>
                        <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class="banner">
                    <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection