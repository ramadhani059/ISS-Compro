<nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3 nav-menu">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="{{asset('assets/logo/02.png')}}" class="object-contain w-full h-full" alt="logo">
        </div>
        <div class="flex flex-col">
          <p id="CompanyName" class="font-extrabold text-xl leading-[30px] companyName">Irawan Sinergi Sejahtera</p>
          <p id="CompanyTagline" class="text-sm text-cp-light-grey companyTagline">Better Health Through Innovation</p>
        </div>
    </div>
    <div id="menu-icon" class="menu-icon">
        <i class="ph ph-list"></i>
    </div>
    <ul id="menu-list" class="flex flex-wrap items-center gap-[30px] ul-menu menu-hidden">
      <li class="{{ request()->routeIs('front.index') ? 'text-cp-dark-red' : ''}} font-semibold hover:text-cp-dark-red transition-all duration-300">
        <a href="{{ route('front.index') }}">Home</a>
      </li>
      <li class="{{ request()->routeIs('front.product') ? 'text-cp-dark-red' : ''}} font-semibold hover:text-cp-dark-red transition-all duration-300">
        <a href=" /#Products ">Products</a>
      </li>
      <li class="{{ request()->routeIs('front.team') ? 'text-cp-dark-red' : ''}} font-semibold hover:text-cp-dark-red transition-all duration-300">
        <a href="/#Teams">Company</a>
      </li>
      <li class="{{ request()->routeIs('front.about') ? 'text-cp-dark-red' : ''}} font-semibold hover:text-cp-dark-red transition-all duration-300">
        <a href="/#About">About</a>
      </li>
    </ul>

</nav>
