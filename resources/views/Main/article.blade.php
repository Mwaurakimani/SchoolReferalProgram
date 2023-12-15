@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
    @include('Partials.main-navigation')
    <style>
        .breadcrumb .breadcrumb-item:not(.breadcrumb-item:first-of-type)::before {
            content: "/";
            font-weight: 600;
            color: white;
        }

        .breadcrumb-item:hover {
            color: #718096;
        }
    </style>
    <div class="bg-gray-900 mt-[20px] mb-[10px] px-[20px] py-[5px]">
        <nav class="continer" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="/">Home</a></li>
                <li class="breadcrumb-item "><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item !text-gray-50 active" aria-current="page">{{$article->slug}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-[20px] mb-[10px] px-[20px] py-[5px]">
    </div>
    <div class="flex space-x-2 h-[600px] container">
        <div class="w-[100%] md:w-[70%] rounded mb-[30px]">
            <div class="w-[100%] bg-gray-700 bg-opacity-5 p-[10px] rounded mb-[10px]">
                @if($article->banner)
                    <img class="max-w-[100%] mx-[auto] mb-[10px]" src="/ArticleBanners/{{$article->banner}}">
                @endif
                <ul class="flex space-x-2 w-[fit-content] mb-[20px]">
                    <li title="Published By" class="h-[20px] mx-[5px] flex items-center justify-center">
                        <i class="bi bi-person-fill text-[23px] text-[gray] mx-[5px]"></i>
                        <p class="text-sm font-thin">{{ $article->user ? $article->user->username : ""   }}</p>
                    </li>
                    <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                        <i class="bi bi-calendar-fill text-[18px] text-[gray] mx-[5px]"></i>
                        <p class="text-sm font-thin">{{ $article->updated_at  }}</p>
                    </li>
                    <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                        <i class="bi bi-clock-fill text-[16px] text-[gray] mx-[5px]"></i>
                        <p class="text-sm font-thin">5 min read</p>
                    </li>
                </ul>
                <h1 class="mb-[20px] font-bold">{{$article->title}}</h1>
                <div class="container-content px-[10px]">
                    {!! $markdown !!}
                </div>
            </div>
            <div class="w-[100%] md:hidden bg-gray-700 bg-opacity-5 p-[10px] rounded mb-[10px]">
                @include('Partials.related-articles')
            </div>
            <div class="w-[100%] h-[600px] px-[20px] pt-[10px] bg-gray-900 rounded">
                <div id="disqus_thread"></div>
                <script>
                    // RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    // LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables

                    // var disqus_config = function () {
                    //     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    //     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    // };

                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://nexusgaming-1.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
        </div>
        <div class="w-[30%] hidden md:block rounded">
            <div class="hidden md:block w-[100%] mb-[10px]">
                @include('Partials.related-articles')
            </div>
            <div class="hidden md:block w-[100%] h-[400px] bg-green-300 mb-[10px]">
                latest
            </div>
        </div>
    </div>
@endsection
