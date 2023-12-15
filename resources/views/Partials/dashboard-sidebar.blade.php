@php use Illuminate\Support\Facades\Auth; @endphp
<style>
    i {
        transition: all linear 300ms;
    }

    .side-bar {
        transition: all cubic-bezier(0.14, 0.6, 0.32, 1.33) 700ms;
    }

    .collapse-sidebar {
        overflow: hidden;
        width: 0;
    }

    .collapse-sidebar > .bottom-section {
        overflow: hidden;
        width: 250px;
        opacity: 0;
    }
</style>

<div class="w-[250px] side-bar relative flex flex-col h-[100vh] z-[1500] items-stretch">
    <div class="overflow-y-auto overflow-x-hidden middle flex-grow items-stretch bg-gray-900">
        <div class="mx-[auto] mt-[10px] w-[230px] mb-[40px] pt-[10px] pb-[10px] bg-gray-800 rounded">
            <div class="w-[80px] mb-[5px] h-[80px] bg-gray-600 flex items-center justify-center overflow-hidden mx-[auto] rounded-[50%]">
                @if(Auth::user()->profile_photo_path)
                    <img class="w-[100%] h-[100%] object-cover" src="/ProfilePictures/{{Auth::user()->profile_photo_path}}">
                @else
                    <i class="bi bi-person-fill text-[70px] text-gray-400"></i>
                @endif
            </div>
            <p class="text-center text-white line-clamp-1">{{ Auth::user()->email }}</p>
            <p class="text-center text-sm mb-[20px] text-gray-400 line-clamp-1">{{ Auth::user()->username }}</p>
            <div class="flex justify-between px-[10px]">
                <a class="app px-[10px_!important] bg-gray-700 hover:!bg-gray-600 py-[2px_!important] text-sm"
                   href="/dashboard/account/{{Auth::User()->username}}">View</a>
                <a class="app px-[10px_!important] bg-gray-700 hover:!bg-gray-600 py-[2px_!important] text-sm"
                   href="/dashboard/account/{{Auth::User()->username}}/edit">Edit</a>
            </div>
        </div>
        <section class="px-[10px] w-[250px]">
            {{--            <h6 class="text-gray-500 mb-[10px]">Section One</h6>--}}
            <div class="px-[10px] flex flex-col space-y-2">
                <a href="/dashboard" class="flex hover:bg-gray-700 py-[5px] px-5px rounded">
                    <i class="bi bi-speedometer text-gray-300 mx-[10px]"></i>
                    <p class="text-gray-300">Dashboard</p>
                </a>
                <a href="/dashboard/blog" class="flex hover:bg-gray-700 py-[5px] px-5px rounded">
                    <i class="bi bi-bookmark-fill text-gray-300 mx-[10px]"></i>
                    <p class="text-gray-300">Blog</p>
                </a>
                <a href="/dashboard/match" class="flex hover:bg-gray-700 py-[5px] px-2px rounded">
                    <i class="bi bi-controller text-gray-300 mx-[10px]"></i>
                    <p class="text-gray-300">Match</p>
                </a>
                <a href="/dashboard/account" class="flex hover:bg-gray-700 py-[5px] px-2px rounded">
                    <i class="bi bi-person-fill text-gray-300 mx-[10px]"></i>
                    <p class="text-gray-300">Account</p>
                </a>
                <a href="/dashboard/credits" class="flex hover:bg-gray-700 py-[5px] px-2px rounded">
                    <i class="bi bi-cash text-gray-300 mx-[10px]"></i>
                    <p class="text-gray-300">Credits</p>
                </a>
            </div>
        </section>
    </div>
    <div class="h-[60px] bottom-section  overflow-hidden justify-self-end">
        <ul class="flex h-[100%] w-[250px] overflow-hidden px-[20px] justify-end items-center space-x-2">
            <li class="overflow-hidden">
                <form class="overflow-hidden" action="/logout" method="POST">
                    @csrf
                    <button class="app text-sm px-[10px_!important] py-[3px_!important]">Log Out</button>
                </form>
            </li>
        </ul>
    </div>
</div>
<div class="absolute top-50 z-[1000]" style="right:calc(-18px)">
    <div onclick="toggle_menu()"
         class="w-[40px] pitch rounded-full h-[40px] bg-gray-900 hover:bg-gray-600 flex items-center justify-center">
        <i class="bi bi-caret-left-fill ml-[18px] text-[15px] text-white"></i>
    </div>
</div>

<script>
    function toggle_menu() {
        let elem = $(event.currentTarget)

        if (elem.hasClass('close') || elem.hasClass('open')) {
            if (elem.hasClass('close')) {
                //opening
                $('.side-bar').addClass('collapse-sidebar')

                elem.removeClass('close')
                elem.addClass('open')

                elem.find('i').css({
                    transform: 'rotateZ(180deg)'
                })

            } else {
                //closing
                $('.side-bar').removeClass('collapse-sidebar')
                elem.removeClass('open')
                elem.addClass('close')

                elem.find('i').css({
                    transform: 'rotateZ(0deg)'
                })
            }
        } else {
            //closing
            $('.side-bar').addClass('collapse-sidebar')
            elem.addClass('open')

            elem.find('i').css({
                transform: 'rotateZ(180deg)'
            })
        }
    }
</script>
