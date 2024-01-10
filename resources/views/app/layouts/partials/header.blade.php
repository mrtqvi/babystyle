<nav id="navBar" class="relative w-full bg-primary px -20 pt-5">
    <div class="container">
        <div class="absolute left-0 -bottom-1 w-full">
            <svg width="100%" height="100%" viewBox="0 0 1440 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
                    <g class="styles__header-bg-wave-complement___2Ndke" transform="translate(0.000000, -39.000000)"
                        fill-rule="nonzero">
                        <path
                            d="M1.25055521e-12,57 C284.679475,33 524.867531,33 720.564169,57 C916.260807,81 1156.11553,81 1440.12834,57 L1440.12834,82 L1.25055521e-12,82 L1.25055521e-12,57 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
        <div
            class="flex mx-auto bg-white rounded-xl shadow-[0_0_30px_rgb(0,0,0,0.5)] w-full items-center z-10 relative">
            <!-- side Bar -->
            <div class="flex lg:hidden items-center justify-start p-4 text-2xl z-40">
                <button id="openSideBar">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                </button>
                <div id="sideBar"
                    class="fixed z-50 flex top-0 right-0 w-0 h-full overflow-hidden bg-black bg-opacity-20 transition-all duration-300">
                    <div class="w-4/5 sm:w-1/2 h-full bg-white overflow-scroll px-4">
                        <!-- logo -->
                        <a href="{{ route('home') }}" class="w-full my-5 flex justify-center !z-50">
                            <img class="w-24" src="{{ asset('assets/app/images/logo-home.png') }}"
                                alt="لوگوی بیبی استایل" />
                        </a>
                        <div class="flex items-center text-base justify-center">
                            <button class="px-3 text-end h-10">عضویت</button>
                            <div class="border-l border-gray-600 h-4"></div>
                            <button class="px-3 h-10">وارد شوید</button>
                        </div>
                        <!-- Menu bar -->
                        <ul dir="ltr" class="menu lg:flex hidden space-x-5">
                            <li class="group">
                                <a href="#"> 🥳تخفیفات🥳</a>
                            </li>
                            <li class="group">
                                <a href="#"> تماس با ما</a>
                            </li>
                            <li class="group">
                                <a href="#"> اکسسوری</a>
                            </li>
                            <li class="group">
                                <a href="#"> پسرانه</a>
                            </li>
                            <li class="group">
                                <a href="#"> دخترانه</a>
                            </li>
                        </ul>
                        <ul class="menu flex flex-col-reverse font-bold text-base">
                            <!--
                  to create sub menu add class relative group to parent li
                 -->
                            <li class="relative group">
                                <a href="#"> 🥳تخفیفات🥳</a>
                            </li>
                            <li class="relative group">
                                <a href="#"> تماس با ما</a>
                            </li>
                            <li class="relative group">
                                <a href="#"> اکسسوری</a>
                            </li>
                            <li class="relative group">
                                <a href="#"> پسرانه</a>
                            </li>
                            <li class="relative group">
                                <a href="#"> دخترانه</a>
                            </li>
                        </ul>
                    </div>
                    <button id="closeSideBar" class="w-1/5 sm:w-1/2 h-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- logo -->
            <a href="{{route('home')}}" class="w-10 lg:w-20 m-3">
                <img src="{{ asset('assets/app/images/logo-home.png') }}" alt="" />
            </a>

            <div class="lg:w-full flex w-full justify-between">
                <!-- topbar -->
                <div id="topBar"
                    class="flex w-full justify-end lg:justify-between items-center px-8 py-2 z-40 font-kalameh font-bold">
                    <ul dir="ltr" class="menu lg:flex hidden space-x-3">
                        <li class="group">
                            <a href="#"> 🥳تخفیفات🥳</a>
                        </li>
                        <li class="group">
                            <a href="#"> اکسسوری</a>
                        </li>
                        <li class="group">
                            <a href="#"> پسرانه</a>
                        </li>
                        <li class="group">
                            <a href="#"> دخترانه</a>
                        </li>
                        <li class="group">
                            <svg class="mr-1" width="15" height="15" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.92 8.95001L13.4 15.47C12.63 16.24 11.37 16.24 10.6 15.47L4.07996 8.95001"
                                    stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <a href="#"> دسته بندی ها</a>
                            <ul class="sub-menu z-50">
                                <li class="group/sub relative flex flex-row-reverse justify-between items-center">
                                    <a href="#">دخترانه</a>
                                    <svg class="mr-1" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.92 8.95001L13.4 15.47C12.63 16.24 11.37 16.24 10.6 15.47L4.07996 8.95001"
                                            stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <ul class="group-hover/sub:block">
                                        <li><a href="#">دخترانه</a></li>
                                        <li><a href="#">پسرانه</a></li>
                                        <li><a href="#">اکسسوری</a></li>
                                    </ul>
                                </li>
                                <li class="group/sub relative flex flex-row-reverse justify-between items-center">
                                    <a href="#">پسرانه</a>
                                </li>
                                <li class="group/sub relative flex flex-row-reverse justify-between items-center">
                                    <a href="#">اکسسوری</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="flex items-center font-normal">
                        <button id="searchIcon" class="px-3 text-end h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>

                        <!-- search Box -->

                        <div id="searchBox"
                            class="absolute left-0 px-2 z-40 md:w-max bg-white overflow-hidden opacity-0 !w-0 transition-all">
                            <form action="" method="get" class="flex gap-2 border shadow rounded-md p-1">
                                <button id="hiddenSearchBox">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>

                                </button>
                                <input type="text" id="search" value="{{ request()->search }}" name="search"
                                    class="outline-none w-full" placeholder="نام محصول یا دسته" />
                                <button class="bg-primary text-white p-1 px-3 m-1 rounded-md disabled:bg-gray-300">
                                    جسنجو
                                </button>

                            </form>
                        </div>
                        @auth
                        <div class="mx-3 px-3 relative">
                            <a href="{{ route('shopping-cart.index') }}" id="cardBarIcon" class="text-end w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </a>
                            <a href="{{ route('shopping-cart.index') }}" class="px-2 bg-red-500 text-white rounded-full absolute -bottom-3 left-1 " id="shopping_items_count">{{ $shoppingCartCount }}</a>
                        </div>
                        @endauth
                        @guest
                            <a href="{{ route('login.form', ['backUrl' => request()->getRequestUri()]) }}"
                                class="hidden lg:block px-3 py-1.5 text-end h-10">
                                عضویت
                            </a>
                            <div class="hidden lg:block border border-gray-600 h-4"></div>
                            <a href="{{ route('login.form', ['backUrl' => request()->getRequestUri()]) }}"
                                class="hidden lg:block px-3 py-1.5 h-10">ورود</a>
                        @endguest

                        @auth
                            <div class="relative">
                                <div class="relative flex">
                                    <button id="profileMenuBarBTN" class="absolute top-0 left-0 w-full h-full"></button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 stroke-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div id="profileMenuBarContainer"
                                    class="absolute top-full left-0 bg-white rounded-md w-56 border p-4 pb-2 hidden">
                                    <div class="divide-y">
                                        <div class="flex justify-between items-center pb-3">
                                            <a href="{{ route('profile.index') }}" class="flex flex-col font-medium items-center">
                                                <span>{{ auth()->user()->fullName ?? auth()->user()->phone_number }}</span>
                                            </a>

                                            <a href="{{ route('profile.index') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                                                </svg>
                                            </a>

                                        </div>

                                        <a href="#" class="flex items-center py-3 text-sm gap-2 text-gray-600">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class=" "> سفارش‌ها</span>
                                        </a>
                                        <a href="#" class="flex items-center py-3 text-sm gap-2 text-gray-600">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span> لیست‌های من</span>
                                        </a>
                                        <a href="#" class="flex items-center py-3 text-sm gap-2 text-gray-600">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span> دیدگاه‌ها</span>
                                        </a>

                                        <a href="#" class="flex items-center py-3 text-sm gap-2 text-gray-600">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span> پیغام‌ها</span>
                                        </a>

                                        <a href="{{ route('logout') }}"
                                            class="flex items-center py-3 text-sm gap-2 text-gray-600">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span> خروج</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
