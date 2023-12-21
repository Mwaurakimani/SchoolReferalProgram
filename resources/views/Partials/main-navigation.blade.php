<div class="container bg-white flex flex-col md:flex-row items-center justify-center md:justify-between">
    <ul class="h-[50px] py-[15px] flex space-x-[10px]">
        <li class="px-[5px]"><i class="bi bi-facebook text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
        <li class="px-[5px]"><i class="bi bi-twitter text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
        <li class="px-[5px]"><i class="bi bi-linkedin text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
        <li class="px-[5px]"><i class="bi bi-instagram text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
        <li class="px-[5px]"><i class="bi bi-youtube text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
    </ul>
    <div class="h-[50px] flex items-center space-x-2">
        <div class="dropdown">
            <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-bs-toggle="dropdown" aria-expanded="false">
                Call/Whatsapp
            </a>

            <ul id="country-select" class="dropdown-menu px-[10px]" aria-labelledby="dropdownMenuLink">
                <li class="flex space-x-2"><span class="fi fi-us"></span>
                    <p>USA</p></li>
                <li class="flex space-x-2"><span class="fi fi-ca"></span>
                    <p>Canada</p></li>
                <li class="flex space-x-2"><span class="fi fi-au"></span>
                    <p>Australia</p></li>
            </ul>
        </div>
        <ul id="tel-list" class="w-[100%] h-[100%] flex items-center justify-around space-x-2">
            <li class="items-center text-blue-500 flex"><span class="fi fi-us mx-[5px]"></span>
                <p>+1 719 445 697</p></li>
            <li class="items-center text-blue-500 hidden"><span class="fi fi-ca mx-[5px]"></span>
                <p>+2 719 445 697</p></li>
            <li class="items-center text-blue-500 hidden"><span class="fi fi-au mx-[5px]"></span>
                <p>+3 719 445 697</p></li>
        </ul>
    </div>
    <div class="h-[50px] flex items-center justify-center">
        <button onclick="window.location.href='/enquiry'" class="bg-pink-700 px-[10px] py-[4px] rounded-[3px] text-white text-[0.8em]">ENQUIRE NOW<i
                class="bi bi-chat-fill mx-[3px]"></i></button>
    </div>
</div>
<div class="container main-home-navigation shadow bg-white flex flex-col md:flex-row items-center justify-center md:justify-between">
    <div class="w-[150px] h-[60px] bg-red-900 text-purple-50">Logo</div>
    <div class="w-[100%] md:w-[calc(100%-200px)]">
        <div id="searchSection" class="w-[100%] hidden">
            <div class="w-[100%] py-[10px] flex">
                <input class="search mx-[20px] shadow-none w-[calc(100%-30px)] rounded" placeholder="Search..."
                       style="border: none !important;outline: none!important;" type="search">
                <button onclick="hideSearch()" type="button"><i class="bi text-[22px] bi-x-lg text-gray-500"></i>
                </button>
            </div>
        </div>
        <div id="menuSection">
            <div class="flex desktop-menu justify-center py-[10px] md:justify-end">
                <ul class="hidden md:flex">
                    <li><a href="/" class="{{ isset($active_page) && $active_page == 'Home' ?'active':''}}">Home</a>
                    </li>
                    <li><a href="/services" class="{{ isset($active_page) && $active_page == 'services' ?'active':''}}">Our
                            Services</a></li>
                    <li><a href="/registration"
                           class="{{ isset($active_page) && $active_page == 'registration' ?'active':''}}">Registration</a>
                    </li>
                </ul>
                <button onclick="displaySearch()" type="button" class="mx-[10px]"><i class="bi bi-search"></i></button>
                <button onclick="toggleMenu()" type="button" class="mx-[10px] md:hidden"><i class="bi bi-list"></i>
                </button>
            </div>
            <ul id="mobile-menu-dropdown" class="md:hidden w-[250px] h-[0px] mx-[auto] shadow" data-open=false>
                <li><a href="/"
                       class="h-[35px] block px-[10px] {{ isset($active_page) && $active_page == 'Home' ?'active':''}}">Home</a>
                </li>
                <li><a href="/services"
                       class="h-[35px] block px-[10px] {{ isset($active_page) && $active_page == 'services' ?'active':''}}">Our
                        Services</a></li>
                <li><a href="/registration"
                       class="h-[35px] block px-[10px] {{ isset($active_page) && $active_page == 'registration' ?'active':''}}">Registration</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    function displaySearch() {
        let searchSection = $("#searchSection")

        let mobile_menu_dropdown = $("#mobile-menu-dropdown")
        mobile_menu_dropdown.css('height', '0px')
        mobile_menu_dropdown.data('open', false)


        let menuSection = $("#menuSection")
        menuSection.fadeOut('fast', () => {
            searchSection.fadeIn()
        })
    }

    function hideSearch() {
        let searchSection = $("#searchSection")

        let mobile_menu_dropdown = $("#mobile-menu-dropdown")
        mobile_menu_dropdown.css('height', '0px')
        mobile_menu_dropdown.data('open', false)


        let menuSection = $("#menuSection")
        searchSection.fadeOut('fast', () => {
            menuSection.fadeIn()
        })
    }

    function toggleMenu() {
        let mobile_menu_dropdown = $("#mobile-menu-dropdown")
        let status = mobile_menu_dropdown.data('open')

        if (status) {
            mobile_menu_dropdown.css('height', '0px')
        } else {
            mobile_menu_dropdown.css('height', '110px')
        }

        mobile_menu_dropdown.data('open', !status)
    }


    $('#country-select li').on('click', () => {
        let country = $(event.currentTarget).find('p').text()

        switch (country) {
            case 'USA':
                hideAllSubs(0)
                break;
            case 'Canada':
                hideAllSubs(1)
                break;
            case 'Australia':
                hideAllSubs(2)
                break;
        }
    })
    let hideAllSubs = (idx) => {
        let elem = $("#tel-list")
        let children = elem.find('li');

        Object.entries(children).forEach((item, index) => {

            $(item).addClass('hidden')

            if (index == idx) {
                $(item).removeClass('hidden')
                $(item).addClass('flex')
            }

        })
    }

</script>

<style>
    .main-home-navigation {
        position: sticky;
        z-index: 10000;
        top: 0;
    }


    .desktop-menu ul a, #mobile-menu-dropdown a {
        font-weight: 600;
        margin: 0 10px;
        color: grey;
    }

    .desktop-menu ul a:hover, #mobile-menu-dropdown a:hover {
        color: #4d4d4d;
    }

    .desktop-menu ul a.active, #mobile-menu-dropdown a.active {
        color: lightseagreen;
    }

    #mobile-menu-dropdown {
        overflow: hidden;
        transition: all linear 250ms;
    }

    input[type='search'].search:focus {
        outline: none !important;
    }
</style>
