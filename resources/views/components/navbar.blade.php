<nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="{{asset('assets/logo/02.png')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                  <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">Irawan Sinergi Sejahtera</p>
                  <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
                </div>
            </div>
            <ul class="flex flex-wrap items-center gap-[30px]">
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
