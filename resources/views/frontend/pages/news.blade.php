@extends('frontend.master')
@section('meta_content')
    <meta name="keywords" content="{{ seooptimization()->keywords }}">
    <meta name="title" content="{{ seooptimization()->meta_title }}">
    <meta name="description" content="{{ seooptimization()->meta_description }}">
    <meta name="author" content="{{ seooptimization()->author }}">

    <meta property="og:keywords" content="{{ seooptimization()->keywords }}">
    <meta property="og:title" content="{{ seooptimization()->meta_title }}">
    <meta property="og:description" content="{{ seooptimization()->meta_description }}">
    <meta property="og:author" content="{{ seooptimization()->author }}">
    <meta property="og:image" content="{{ asset(settings()->logo) }}" />
@endsection
@section('main_content')
    @php
        use Rajurayhan\Bndatetime\BnDateTimeConverter;
        $dateConverter = new BnDateTimeConverter();
        $mytime = Carbon\Carbon::now();
        $date = $mytime->toDateTimeString();
    @endphp

    <!-- Maan Breadcrumb Start -->
    {{-- <nav aria-label="breadcrumb" class="maan-breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL('/') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $newscategorysingle->name }}</li>
            </ol>
        </div>
    </nav> --}}
    <!-- Maan Breadcrumb End -->
    <!-- Maan Business Start -->


    <div class="home_page_part_one_bg ">
        <div class="custom_container home_page_part_one">
            <div class="home_page_part_one_left">
                <div class="archieve_top_cat">
                    <div class="cat-header py-2">
                        <h2 class="fs-2"><b>{{ $newscategorysingle->name }}</b></h2>
                    </div>

                </div>
                <div class="archive_page_post leatest_posts sunset-posts-container">


                    @foreach ($allnews as $allnewsvalue)
                        <div class="leatest_twelve_post">
                            @if ($allnewsvalue->image)
                                @php
                                    $images = json_decode($allnewsvalue->image);
                                @endphp
                                @if ($images != '')
                                    @foreach ($images as $image)
                                        @if (File::exists($image))
                                            <a href="{{ route(strtolower($allnewsvalue->news_categoryslug) . '.details', ['id' => $allnewsvalue->id, 'slug' => \Illuminate\Support\Str::slug($allnewsvalue->title)]) }}"
                                                title="{{ $allnewsvalue->title }}">
                                                <img class="attachment-custom-size size-custom-size wp-post-image"
                                                    src="{{ asset($image) }}" alt="{{ $allnewsvalue->title }}">
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                            <h2 class="title"> <a
                                    href="{{ route(strtolower($allnewsvalue->news_categoryslug) . '.details', ['id' => $allnewsvalue->id, 'slug' => \Illuminate\Support\Str::slug($allnewsvalue->title)]) }}">{{ $allnewsvalue->title }}</a>
                            </h2>
                        </div>
                    @endforeach







                </div>
                <div class="d-flex">
                    <nav class="maan-pagination" aria-label="Page navigation example">
                        <div class="container">
                            {{ $allnews->links() }}
                        </div>
                    </nav>
                </div>
            </div>
            <div class="home_page_part_one_right">
                @if ($ads->isNotEmpty())
                    @foreach ($ads as $ad)
                        @if ($ad->before_post_ads !== '' && !empty($ad->before_post_ads))
                            <div class="custom_container home_page_ad">
                                <img class="alignnone size-full wp-image-130312"
                                    src="{{ asset('public/public/before_post_ads/' . $ad->before_post_ads) }}"
                                    alt="Header Ads" width="100%" height="100%" />
                            </div>
                        @endif
                    @endforeach
                @endif

                @if ($ads->isNotEmpty())
                    @foreach ($ads as $ad)
                        @if ($ad->sidebar_ads !== '' && !empty($ad->sidebar_ads))
                            <div class="custom_container home_page_ad">
                                <img class="alignnone size-full wp-image-130312"
                                    src="{{ asset('public/public/sidebar_ads/' . $ad->sidebar_ads) }}" alt="Header Ads"
                                    width="878" height="476" />
                            </div>
                        @endif
                    @endforeach
                @endif
                <div class="most_read_in_a_cat">
                    <div class="category-header d-flex justify-content-between align-items-center mt-2">
                        <div class="heading photo-heading">
                            <span class="title"><b>পাঠকপ্রিয় - {{ $newscategorysingle->name }}</b> </span>
                        </div>
                    </div>
                    <ul class="archive_leatest_in_a_cat_postlopp">
                        @if ($popularallnews != '' && $popularallnews != null)
                            @foreach ($popularallnews as $catpost4)
                                @if ($catpost4->image)
                                    @php
                                        $images = json_decode($catpost4->image);
                                    @endphp
                                    @if ($images != '')
                                        @foreach ($images as $image)
                                            <ul class="single_right_item">
                                                <a
                                                    href="@if ($catpost4->news_categoryslug) {{ route(strtolower($catpost4->news_categoryslug) . '.details', ['id' => $catpost4->id, 'slug' => \Illuminate\Support\Str::slug($catpost4->title)]) }} @endif">
                                                    <img width="500" height="280" src="{{ asset($image) }}"
                                                        class="attachment-custom-size size-custom-size wp-post-image"
                                                        alt="{{ \Illuminate\Support\Str::limit($catpost4->title, 40) }}" />

                                                </a>
                                                <li class="tab_post ml-2"><a
                                                        href="@if ($catpost4->news_categoryslug) {{ route(strtolower($catpost4->news_categoryslug) . '.details', ['id' => $catpost4->id, 'slug' => \Illuminate\Support\Str::slug($catpost4->title)]) }} @endif">{{ \Illuminate\Support\Str::limit($catpost4->title, 40) }}</a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- <section class="business maan-slide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="maan-title">
                        <div class="maan-title-text">
                            <h2>{{ $newscategorysingle->name }}</h2>
                        </div>
                    </div>
                    <div class="maan-news-post">
                        <div class="maan-slide">
                            @foreach ($allnews as $allnewsvalue)
                                <div class="card maan-default-post">
                                    <div class="maan-post-img">
                                        @if ($allnewsvalue->image)
                                            @php
                                                $images = json_decode($allnewsvalue->image);
                                            @endphp
                                            @if ($images != '')
                                                @foreach ($images as $image)
                                                    @if (File::exists($image))
                                                        <a
                                                            href="{{ route(strtolower($allnewsvalue->news_categoryslug) . '.details', ['id' => $allnewsvalue->id, 'slug' => \Illuminate\Support\Str::slug($allnewsvalue->title)]) }}">
                                                            <img src="{{ asset($image) }}" alt="top-news">
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif

                                    </div>
                                    <div class="card-body maan-card-body">
                                        <div class="maan-text">
                                            <h4><a
                                                    href="{{ route(strtolower($allnewsvalue->news_categoryslug) . '.details', ['id' => $allnewsvalue->id, 'slug' => \Illuminate\Support\Str::slug($allnewsvalue->title)]) }}">{{ $allnewsvalue->title }}</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <span class="maan-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.007"
                                                            height="13.414" viewBox="0 0 12.007 13.414">
                                                            <g transform="translate(-24.165)">
                                                                <g data-name="Group 466" transform="translate(26.687)">
                                                                    <g data-name="Group 465" transform="translate(0)">
                                                                        <path data-name="Path 845"
                                                                            d="M114.274,0a3.483,3.483,0,1,0,3.483,3.483A3.492,3.492,0,0,0,114.274,0Z"
                                                                            transform="translate(-110.791)"
                                                                            fill="#888" />
                                                                    </g>
                                                                </g>
                                                                <g data-name="Group 468"
                                                                    transform="translate(24.165 7.215)">
                                                                    <g data-name="Group 467" transform="translate(0)">
                                                                        <path data-name="Path 846"
                                                                            d="M36.147,250.375a3.247,3.247,0,0,0-.35-.639,4.329,4.329,0,0,0-3-1.886.641.641,0,0,0-.441.106,3.712,3.712,0,0,1-4.38,0,.571.571,0,0,0-.441-.106,4.3,4.3,0,0,0-3,1.886,3.743,3.743,0,0,0-.35.639.323.323,0,0,0,.015.289,6.067,6.067,0,0,0,.411.608,5.778,5.778,0,0,0,.7.791,9.112,9.112,0,0,0,.7.608,6.936,6.936,0,0,0,8.274,0,6.685,6.685,0,0,0,.7-.608,7.021,7.021,0,0,0,.7-.791,5.329,5.329,0,0,0,.411-.608A.26.26,0,0,0,36.147,250.375Z"
                                                                            transform="translate(-24.165 -247.841)"
                                                                            fill="#888" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                    </span>
                                                    <span class="maan-item-text"><a
                                                            href="#">{{ $allnewsvalue->reporter_name }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="maan-icon"><svg viewBox="0 0 512 512">
                                                            <path
                                                                d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z">
                                                            </path>
                                                            <path
                                                                d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z">
                                                            </path>
                                                        </svg></span>
                                                    <span
                                                        class="maan-item-text">{{ $dateConverter->getConvertedDateTime(date('d M, Y', strtotime($allnewsvalue->date)), 'BnEn', '') }}</span>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        @foreach ($allnews as $allnewsall)
                            <div class="card maan-default-post">
                                <div class="maan-post-img">
                                    @if ($allnewsall->image)
                                        @php
                                            $images = json_decode($allnewsall->image);
                                        @endphp
                                        @if ($images != '')
                                            @foreach ($images as $image)
                                                @if (File::exists($image))
                                                    <a
                                                        href="{{ route(strtolower($allnewsall->news_categoryslug) . '.details', ['id' => $allnewsall->id, 'slug' => \Illuminate\Support\Str::slug($allnewsall->title)]) }}">
                                                        <img src="{{ asset($image) }}" alt="top-news">
                                                    </a>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif

                                </div>
                                <div class="card-body maan-card-body">
                                    <div class="maan-text">
                                        <h4><a
                                                href="{{ route(strtolower($allnewsall->news_categoryslug) . '.details', ['id' => $allnewsall->id, 'slug' => \Illuminate\Support\Str::slug($allnewsall->title)]) }}">{{ $allnewsall->title }}</a>
                                        </h4>
                                        <p class="mt-0">{{ $allnewsall->summary }}</p>
                                        <ul>
                                            <li>
                                                <span class="maan-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.007"
                                                        height="13.414" viewBox="0 0 12.007 13.414">
                                                        <g transform="translate(-24.165)">
                                                            <g data-name="Group 466" transform="translate(26.687)">
                                                                <g data-name="Group 465" transform="translate(0)">
                                                                    <path data-name="Path 845"
                                                                        d="M114.274,0a3.483,3.483,0,1,0,3.483,3.483A3.492,3.492,0,0,0,114.274,0Z"
                                                                        transform="translate(-110.791)" fill="#888" />
                                                                </g>
                                                            </g>
                                                            <g data-name="Group 468" transform="translate(24.165 7.215)">
                                                                <g data-name="Group 467" transform="translate(0)">
                                                                    <path data-name="Path 846"
                                                                        d="M36.147,250.375a3.247,3.247,0,0,0-.35-.639,4.329,4.329,0,0,0-3-1.886.641.641,0,0,0-.441.106,3.712,3.712,0,0,1-4.38,0,.571.571,0,0,0-.441-.106,4.3,4.3,0,0,0-3,1.886,3.743,3.743,0,0,0-.35.639.323.323,0,0,0,.015.289,6.067,6.067,0,0,0,.411.608,5.778,5.778,0,0,0,.7.791,9.112,9.112,0,0,0,.7.608,6.936,6.936,0,0,0,8.274,0,6.685,6.685,0,0,0,.7-.608,7.021,7.021,0,0,0,.7-.791,5.329,5.329,0,0,0,.411-.608A.26.26,0,0,0,36.147,250.375Z"
                                                                        transform="translate(-24.165 -247.841)"
                                                                        fill="#888" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <span class="maan-item-text"><a
                                                        href="#">{{ $allnewsall->reporter_name }}</a></span>
                                            </li>
                                            <li>
                                                <span class="maan-icon"><svg viewBox="0 0 512 512">
                                                        <path
                                                            d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z">
                                                        </path>
                                                        <path
                                                            d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z">
                                                        </path>
                                                    </svg></span>
                                                <span
                                                    class="maan-item-text">{{ $dateConverter->getConvertedDateTime((new \Illuminate\Support\Carbon($allnewsall->date))->format('d M, Y'), 'BnEn', '') }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="maan-title">
                        <div class="maan-title-text">
                            <h2>{{ __('পাঠক প্রিয়') }}</h2>
                        </div>
                    </div>
                    <div class="maan-widgets maan-bg-tr">
                        <div class="popular-post">
                            @foreach ($popularallnews as $popularnews)
                                <div class="card maan-default-post">
                                    <div class="maan-post-img">
                                        @if ($popularnews->image)
                                            @php
                                                $images = json_decode($popularnews->image);
                                            @endphp
                                            @if ($images != '')
                                                @foreach ($images as $image)
                                                    @if (File::exists($image))
                                                        <a
                                                            href="{{ route($popularnews->news_categoryslug . '.details', ['id' => $popularnews->id, 'slug' => \Illuminate\Support\Str::slug($popularnews->title)]) }}">
                                                            <img src="{{ asset($image) }}" alt="top-news">
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                    <div class="card-body maan-card-body">
                                        <div class="maan-text">
                                            <h4><a
                                                    href="{{ route($popularnews->news_categoryslug . '.details', ['id' => $popularnews->id, 'slug' => \Illuminate\Support\Str::slug($popularnews->title)]) }}">{{ $popularnews->title }}</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <span class="maan-icon"><svg viewBox="0 0 512 512">
                                                            <path
                                                                d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z">
                                                            </path>
                                                            <path
                                                                d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z">
                                                            </path>
                                                        </svg></span>
                                                    <span
                                                        class="maan-item-text">{{ $dateConverter->getConvertedDateTime((new \Illuminate\Support\Carbon($popularnews->date))->format('d M, Y'), 'BnEn', '') }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="maan-title">
                        <div class="maan-title-text">
                            <h2>{{ __('গ্যালারী') }}</h2>
                        </div>
                    </div>
                    <div class="maan-widgets">
                        <div class="widgets-gallery">
                            <ul>
                                @php
                                    $photogalleries = photogalleries();
                                @endphp
                                @foreach ($photogalleries as $photogallery)
                                    <li>
                                        <a
                                            href="{{ route('photogallery.details', ['id' => $photogallery->id, 'slug' => \Illuminate\Support\Str::slug($photogallery->title)]) }}"><img
                                                src="{{ asset($photogallery->image) }}" alt="gallery"></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="maan-title">
                        <div class="maan-title-text">
                            <h2>{{ __('সম্প্রতি') }}</h2>
                        </div>
                    </div>
                    <div class="maan-widgets maan-bg-tr">
                        <div class="maan-news-list recent-post">
                            <ul>
                                @foreach ($recentallnews as $recentallnews)
                                    <li>
                                        <div class="maan-list-img">
                                            @if ($recentallnews->image)
                                                @php
                                                    $images = json_decode($recentallnews->image);
                                                @endphp
                                                @if ($images != '')
                                                    @foreach ($images as $image)
                                                        @if (File::exists($image))
                                                            <a
                                                                href="{{ route($recentallnews->news_categoryslug . '.details', ['id' => $recentallnews->id, 'slug' => \Illuminate\Support\Str::slug($recentallnews->title)]) }}">
                                                                <img src="{{ asset($image) }}" alt="list-news-img">
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endif

                                        </div>
                                        <div class="maan-list-text">
                                            <h4><a
                                                    href="{{ route($recentallnews->news_categoryslug . '.details', ['id' => $recentallnews->id, 'slug' => \Illuminate\Support\Str::slug($recentallnews->title)]) }}">{{ $recentallnews->title }}</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <span class="maan-icon"><svg viewBox="0 0 512 512">
                                                            <path
                                                                d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z">
                                                            </path>
                                                            <path
                                                                d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z">
                                                            </path>
                                                        </svg></span>
                                                    <span
                                                        class="maan-item-text">{{ $dateConverter->getConvertedDateTime((new \Illuminate\Support\Carbon($recentallnews->date))->format('d M, Y'), 'BnEn', '') }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="maan-title">
                        <div class="maan-title-text">
                            <h2>{{ __('ট্যাগস') }}</h2>
                        </div>
                    </div>
                    <div class="maan-widgets">
                        <div class="widgets-tags">
                            <ul>
                                @foreach (newscategories() as $newscategory)
                                    <li><a
                                            href="{{ route($newscategory->slug, strtolower($newscategory->name)) }}">{{ $newscategory->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Maan Business End -->
    <!-- Maan Pagination Start -->
    {{-- <nav class="maan-pagination" aria-label="Page navigation example">
        <div class="container">
            {{ $allnews->links() }}
        </div>
    </nav> --}}
    <!-- Maan Pagination End -->
@endsection
