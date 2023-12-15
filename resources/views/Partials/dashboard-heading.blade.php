    <div class="dashboard-navigation sticky top-0 z-[1000] shadow mb-[20px] text-white flex justify-between px-[20px] items-center w-[100%] h-[50px]" style="background-color: var(--body-color)">
        <h4>{{$heading}}</h4>
        <form class="search hidden md:block">
            <input type="text" class="app h-[30px_!important]">
            <button class="app px-[10px_!important] text-sm py-[5px_!important]">Search</button>
        </form>
        <ul class="flex space-x-[20px]">
            <li title="Home"><a href="/"> <i class="bi bi-house-fill text-[16px] hover:text-[purple]"></i></a>
            </li>
            <li title="Settings"><a href=""> <i class="bi bi-gear-fill text-[16px] hover:text-[purple]"></i>
                </a></li>
            <li title="Notifications"><a href=""> <i
                        class="bi bi-bell-fill text-[16px] hover:text-[purple]"></i> </a></li>
        </ul>
    </div>
