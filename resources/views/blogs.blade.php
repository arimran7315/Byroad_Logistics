@extends('layout.master')
@section('content')
    <div class="container-fluid no-padding page-content">
        <div class="section-padding"></div>
        <div class="container">
            <div class="col-md-9 blog-area">
                <div class="section-header">
                    <h3>Recent Updates From Our Blog</h3>
                </div>
                @foreach ($blogs as $value)
                    <article class="blog-post-list">
                        <div class="entry-cover"><a href="#"><img src="{{ asset('/storage/' . $value->image) }}"
                                    alt="blog-1"></a>
                            <div class="post-meta"><img src="{{ asset('images/icon/photo.png') }}" alt="photo"></div>
                            <div class="entry-meta">
                                <div class="meta-inner">
                                    <div class="by-line pull-left">Posted By <a href="#">{{ $value->addBy }}</a></div>
                                    <div class="post-comment pull-right"><a href="#"><i
                                                class="fa fa-heart-o"></i>Favorite<span>18</span></a><a href="#"><i
                                                class="fa fa-comment"></i>Comments<span>14</span></a></div>
                                </div>
                                <div class="meta-inner">
                                    <div class="post-date pull-left"><span>
                                            {{ $value->created_at }}</span></div>
                                    <div class="tags pull-right"><i class="fa fa-tag"></i><a
                                            href="#">{{ $value->tag }}</a>
                                    </div>
                                    <div class="categories pull-right"><img src="{{ asset('/images/icon/category.png') }}"
                                            alt="category">Category: <a
                                            href="#"><span>{{ $value->category }}</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="entry-title">{{ $value->title }}</h3>
                            <div class="entry-content">
                                <p> {{ $value->description }}</p><a title="Read More" class="pull-right"
                                    href="{{ asset('/images/single-blog/5') }}">Read More</a>
                            </div>
                        </div>
                    </article>
                @endforeach

                {{ $blogs->links('pagination::bootstrap-4') }}

            </div>
            <div class="col-md-3 widget-area">
                <aside class="widget categories-widget">
                    <div class="widget-title">
                        <h3>Categories</h3>
                    </div>
                    <ul class="categories-type">
                        <li>Auto Transport <span>5</span></li>
                        <li>Tips <span>5</span></li>
                        <li>Auto Transport Debunked <span>5</span></li>
                        <li>Auto Shipments <span>5</span></li>
                    </ul>
                </aside>
                <aside class="widget recent-post">
                    <div class="widget-title">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="recent-post-box">
                        <div class="recent-title col-md-8 col-sm-10 col-xs-8 no-padding"><a href="#">The Ultimate
                                Guide to Choosing the Right Auto Transport Company</a>
                            <p>2024-04-20</p>
                        </div>
                        <div class="recent-img col-md-4 col-sm-2 col-xs-4 no-padding">
                            <a href="#">
                                <img src="https://firebasestorage.googleapis.com/v0/b/byroad-c1726.appspot.com/o/files%2F43626.jpg?alt=media&amp;token=78f824f9-d69d-4a5c-bf86-14cb3364a6ad"
                                    alt="recent-1">
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
@endsection
