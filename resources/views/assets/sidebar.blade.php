<div class="flex flex-col gap-1">
    <a href="/" class="flex items-center mt-5">
        <img src="{{ asset('storage/images/logo.svg') }}" alt="logo" width="180" height="36" class="p-2">
    </a>

    <div class="flex flex-col gap-11 h-6">
        <!-- Loader component -->
        <div class="loader"></div>
    </div>

    <a href="edit" class="flex gap-3 items-center m-3">
        <img src="{{ asset('storage/users/'.Auth::user()->image ) }}" alt="profile" class="h-14 w-14 rounded-full">
        <div class="flex flex-col">
            <p class="font-semibold text-lg">{{ Auth::user()->Fname }} {{Auth::user()->Lname}}</p> <!-- Display user's name -->
            <p class="text-light-3">@ {{ Auth::user()->username }}</p>
        </div>
    </a>

    <ul class="flex flex-col gap-6">
        <!-- Sidebar links -->
        <li class="leftsidebar-link group">
            <a href="home" class="flex gap-4 items-center p-4 font-bold">
                <img src="{{ asset('storage/icons/home.svg') }}" alt="" class="group-hover:invert-white" />
                Home
            </a>
        </li>
        <li class="leftsidebar-link group false">
            <a href="explore" class="flex gap-4 items-center p-4 font-bold">
                <img src="{{ asset('storage/icons/wallpaper.svg') }}" alt="" class="group-hover:invert-white" />
                Explore
            </a>
        </li>
        <li class="leftsidebar-link group false">
            <a href="message" class="flex gap-4 items-center p-4 font-bold">
                <img src="{{ asset('storage/icons/people.svg') }}" alt="" class="group-hover:invert-white" />
                Messages
            </a>
        </li>
        <li class="leftsidebar-link group false">
            <a href="createPost" class="flex gap-4 items-center p-4 font-bold">
                <img src="{{ asset('storage/icons/gallery-add.svg') }}" alt="" class="group-hover:invert-white" />
                Create Post
            </a>
        </li>
    </ul>
</div>

<div class="absolute bottom-0 mt-auto left-0 ml-5 mb-5">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="shad-button_ghost inline-flex items-center justify-center rounded-md text-base font-semibold ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:ring-offset-slate-950 dark:focus-visible:ring-slate-300 hover:bg-slate-100 hover:text-slate-900 dark:hover:bg-slate-800 dark:hover:text-slate-50 h-10 px-6 py-2">
            <img src="{{ asset('storage/icons/logout.svg') }}" alt="logout" class="mr-3">
            <p class="small-medium lg:base-medium">Logout</p>
        </button>
    </form>
</div>