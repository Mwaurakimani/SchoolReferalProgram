<style>
    nav a {
        font-weight: 300;
    }

    .mobile-menu {
        background-color: rgb(51, 51, 51);
        position: relative;
        left: -80%;
    }

    .mobile-menu a {
        height: 40px;
        width: 90%;
        margin: auto auto 10px;
        display: flex;
        padding: 0 30px;
        align-items: center;
        color: white;
    }

    .mobile-menu a.active {
        background-color: var(--primary-purple);
    }
</style>
<div class="sticky top-0 left-0">
    <nav class="flex md:hidden h-[50px] justify-between px-[10px] bg-[var(--container-grey)]">
        <div id="menu-open" class="flex justify-between items-center">
            <i class="bi bi-list mr-[20px] text-[25px] text-gray-100"></i>
        </div>
        <div class="flex justify-between items-center">
            <h6 class="text-gray-100">LOGO</h6>
        </div>
        <div class="flex items-center justify-center">
            <a href="/dashboard">
                <i class="bi bi-person-fill mr-[10px] text-[25px] text-gray-100"></i>
            </a>
        </div>
    </nav>
    <nav class="hidden {{ isset($desktop_menu) && ($desktop_menu == false) ? '' : 'md:flex' }} h-[50px] justify-between px-[10px] bg-[var(--container-grey)]">
        <div class="flex justify-between items-center">
            <h6 class="text-gray-100">LOGO</h6>
        </div>
        <ul class="flex space-x-2 items-center">
            <li><a class="app {{Route::currentRouteName() == 'home'?'active':''}} px-[10px] py-[8px]" href="/">Home</a>
            </li>
            <li><a class="app {{in_array(Route::currentRouteName(),['blog','article'])?'active':''}} px-[10px] py-[8px]"
                   href="/blog">Blog</a></li>
            <li><a class="app {{Route::currentRouteName() == 'about'?'active':''}} px-[10px] py-[8px]" href="/about">About
                    Us</a></li>
            <li><a class="app {{Route::currentRouteName() == 'contact'?'active':''}} px-[10px] py-[8px]"
                   href="/contact">Contact Us</a></li>
        </ul>
        <div class="flex space-x-2 items-center">

            @if(\Illuminate\Support\Facades\Auth::check())
                <a class="app
                {{Route::currentRouteName() == 'login'?'active':''}}
                 px-[10px] py-[8px]" href="/login">Dashboard</a>
            @else
                <a class="app {{Route::currentRouteName() == 'login'?'active':''}} px-[10px] py-[8px]" href="/login">Sign
                    In</a>
                <a class="app {{Route::currentRouteName() == 'register'?'active':''}} px-[10px] py-[8px]"
                   href="/register">Sign
                    Up</a>
            @endif
        </div>
    </nav>
</div>
<div id="menu_overlay" class="overlay fixed top-0 left-0 w-[100vw] h-[100vh]">
    <div id="mobile-menu" class="mobile-menu w-[80%] h-[100%]">
        <div class="flex justify-between">
            <div class="flex items-center px-[20px] w-[calc(100%-50px)]">
                <h6 class="text-gray-100">LOGO</h6>
            </div>
            <div id="menu-close" class="w-[30px] h-[50px] flex items-center justify-center">
                <i class="bi bi-x-lg mr-[20px] text-[20px] text-gray-100"></i>
            </div>
        </div>
        <ul>
            <li><a href="/" class="rounded {{Route::currentRouteName() == 'home'?'active':''}}">Home</a></li>
            <li><a href="/blog" class="rounded {{in_array(Route::currentRouteName(),['blog','article'])?'active':''}}">Blog</a>
            </li>
            <li><a href="/about" class="rounded {{Route::currentRouteName() == 'about'?'active':''}}">About Us</a></li>
            <li><a href="/contact" class="rounded {{Route::currentRouteName() == 'contact'?'active':''}}">Contact Us</a>
            </li>
        </ul>
    </div>
</div>


<script>
    let menu_close = $('#menu-close')
    let menu_open = $('#menu-open')

    menu_close.on('click', () => {
        $('#menu_overlay')
            .addClass('z-elevate-3')
            .fadeOut('fast')

        $('#mobile-menu').animate({
            "left": "-80%"
        })
    })

    menu_open.on('click', () => {
        $('#menu_overlay').fadeIn('fast', () => {
            $('#menu_overlay').removeClass('z-elevate-3')
        })

        $('#mobile-menu').animate({
            "left": "0%"
        })
    })
</script>
