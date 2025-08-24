@extends('front.layouts.app')
@section('content')
  <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar/>
        @forelse($hero_sections as $hero)
        <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
          {{-- <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit">
            <div class="w-5 h-5 flex shrink-0 overflow-hidden">
              <img src="{{asset('assets/icons/crown.svg')}}" class="object-contain" alt="icon">
            </div>
            <p class="font-semibold text-sm">We reached 10,000 huge buildings in 2024</p>
          </div> --}}
          <div class="flex flex-col gap-[10px]">
            <h1 class="font-extrabold text-[50px] leading-[65px] max-w-[536px]">{{ $hero->heading }}</h1>
            <p class="text-cp-light-grey leading-[30px] max-w-[437px]">{{ $hero->subheading }}</p>
          </div>
          <div class="flex items-center gap-4">
            <a href="" class="bg-cp-dark-red p-5 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#f5cc14] transition-all duration-300 font-bold text-white">Explore Now</a>
            {{-- <button class="bg-cp-black p-5 w-fit rounded-xl font-bold text-white flex items-center gap-[10px]" onclick="{modal.show()}">
              <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/icons/play-circle.svg')}}" class="w-full h-full object-contain" alt="icon">
              </div>
              <span>Watch Video</span>
            </button> --}}
          </div>
        </div>
    </div>
    <div class="absolute w-[43%] h-full top-0 right-0 overflow-hidden z-0">
        <img src="{{Storage::url($hero->banner)}}" class="object-cover w-full h-full" alt="banner">
    </div>
    @empty
    <p>Belum ada data terbaru</p>
    @endforelse
  </div>
  {{-- <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-54.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-52.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-55.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-44.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-51.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-55.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-52.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-54.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="my-custom-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-51.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div> --}}
  <div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center justify-between">
      <div class="flex flex-col gap-[14px]">
        <p class="badge w-fit bg-cp-light-red text-cp-bright-red p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR PRINCIPLES</p>
        <h2 class="font-bold text-4xl leading-[45px]">We Might Best Choice <br> For Your Company</h2>
      </div>
      <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
    </div>
    <div class="flex flex-wrap items-center gap-[30px] justify-center">

    @forelse ($principles as $principle)
      <div class="my-custom-card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
        <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
          <img src="{{Storage::url($principle->thumbnail)}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($principle->icon)}}" class="w-full h-full object-contain" alt="icon">
          </div>
          <div class="flex flex-col gap-1">
            <p class="title font-bold text-xl leading-[30px]">{{ $principle->name }}</p>
            <p class="leading-[30px] text-cp-light-grey">{{ $principle->subtitle }}</p>
          </div>
          {{-- <a href="" class="font-semibold text-cp-dark-red">Learn More</a> --}}
        </div>
      </div>
    @empty
    <p>Belum ada data terbaru</p>
    @endforelse


    </div>
  </div>
  {{-- <div id="Stats" class="bg-cp-black w-full mt-20">
    <div class="container max-w-[1000px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">

        @forelse ($statistics as $statistic)
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($statistic->icon)}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-white font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
          <p class="text-white">{{ $statistic->name }}</p>
        </div>
        @empty
        <p>Belum ada data terbaru</p>
        @endforelse

      </div>
    </div>
  </div> --}}
  <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
    <div class="flex flex-col gap-[14px] items-center mt-20">
        <p class="badge w-fit bg-cp-light-red text-cp-bright-red p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR INNOVATIVE PRODUCT</p>
        <h2 class="font-bold text-4xl leading-[45px] text-center">From Innovation to Application <br> Always for Better Healing</h2>
      </div>

    @forelse ($products as $product)
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="{{Storage::url($product->thumbnail)}}" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-4xl leading-[45px]">{{$product->name}}</h2>
          <p class="badge w-fit bg-cp-light-red text-cp-bright-red p-[8px_16px] rounded-full uppercase font-bold text-sm">{{ $product->tagline }}</p>
          <p class="leading-[30px] text-cp-light-grey">{{ $product->about }}</p>
        </div>
        {{-- <a href="" class="bg-cp-dark-red p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#f5cc14] transition-all duration-300 font-bold text-white">Book Appointment</a> --}}
      </div>
    </div>
    @empty
    <p>Belum ada data terbaru</p>
    @endforelse
  </div>
  <div id="Teams" class="w-full py-20 px-[10px] mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] items-center">
      <div class="flex flex-col gap-[14px] items-center">
        <p class="badge w-fit bg-cp-light-red text-cp-bright-red p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR POWERFUL TEAM</p>
        <h2 class="font-bold text-4xl leading-[45px] text-center">We Share Same Dreams <br> Change The World</h2>
      </div>
      <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
        @forelse($teams as $team)
        <div class="my-custom-card
         bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] transition-all duration-300">
          <div class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#FF0000_8.72%,_#8B0000_87.11%)]">
            <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
              <img src="{{Storage::url($team->avatar)}}" class="object-cover w-full h-full object-center" alt="photo">
            </div>
          </div>
          <div class="flex flex-col gap-1 text-center">
            <p class="font-bold text-xl leading-[30px]">{{ $team->name }}</p>
            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
          </div>
          <div class="flex items-center justify-center gap-[10px]">
            <div class="w-6 h-6 flex shrink-0">
              <img src="{{asset('assets/icons/global.svg')}}" alt="icon">
            </div>
            <p class="text-cp-black font-semibold">{{ $team->location }}</p>
          </div>
        </div>
        @empty
        <p>Belum ada data terbaru</p>
        @endforelse
        <a href="{{route('front.team')}}" class="view-all-card">
          <div class="my-custom-card bg-white flex flex-col h-full justify-center items-center p-[30px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
            <div class="w-[60px] h-[60px] flex shrink-0">
              <img src="{{asset('assets/icons/profile-2user1.svg')}}" alt="icon">
            </div>
            <div class="flex flex-col gap-1 text-center">
              <p class="font-bold text-xl leading-[30px]">View All</p>
              <p class="text-cp-light-grey">Our Great People</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <div class="flex flex-col gap-[50px] items-center py-20">
          <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World Better</h2>
        </div>
  </div>
  </div>
  <div id="About" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="assets/thumbnails/product cover three.png" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR VISIONS</p>
        <div class="flex flex-col gap-[10px]">
          <h3 class="font-semibold text-xl leading-[5px]">Menjadi perusahaan terdepan dalam pengembangan dan penyediaan alat kesehatan berkualitas tinggi yang memenuhi kebutuhan masyarakat dan meningkatkan kualitas hidup manusia.</h3>
        </div>
      </div>
    </div>
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="assets/thumbnails/product cover one.png" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR MISSIONS</p>
        <div class="flex flex-col gap-[10px]">
          <div class="flex flex-col gap-5">
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Mengembangkan dan menyediakan alat kesehatan inovatif dan efektif untuk meningkatkan kualitas pelayanan kesehatan.</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Meningkatkan kesadaran dan aksesibilitas masyarakat terhadap teknologi kesehatan mutakhir.</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Membangun kerjasama strategis dengan lembaga kesehatan dan organisasi profesional untuk meningkatkan kualitas produk dan layanan.</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Mengutamakan kepuasan pelanggan melalui pelayanan yang ramah, profesional, dan responsif</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Meningkatkan kemampuan dan kesejahteraan karyawan untuk mencapai tujuan perusahaan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="Stats" class="bg-cp-black w-full mt-20">
    <div class="container max-w-[1000px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">

        @forelse ($statistics as $statistic)
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($statistic->icon)}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-white font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
          <p class="text-white">{{ $statistic->name }}</p>
        </div>
        @empty
        <p>Belum ada data terbaru</p>
        @endforelse

      </div>
    </div>
  </div>
  <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="flex flex-col gap-[14px] items-center">
      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">SUCCESS CLIENTS</p>
      <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company</h2>
    </div>
    <div class="main-carousel w-full">
      @forelse ($testimoni as $testimoni)
      <div class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
        <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
          <div class="flex flex-col gap-[30px]">
            <div class="h-9 overflow-hidden">
              <img src="{{Storage::url($testimoni->client->logo)}}" class="object-contain" alt="icon">
            </div>
            <div class="relative pt-[27px] pl-[30px]">
              <div class="absolute top-0 left-0">
                <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
              </div>
              <p class="font-semibold text-2xl leading-[46px] relative z-10">{{$testimoni->message}}</p>
            </div>
            <div class="flex items-center justify-between pl-[30px]">
              <div class="flex items-center gap-6">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{Storage::url($testimoni->client->avatar)}}" class="w-full h-full object-cover" alt="photo">
                </div>
                <div class="flex flex-col justify-center gap-1">
                  <p class="font-bold">{{$testimoni->client->name}}</p>
                  <p class="text-sm text-cp-light-grey">{{$testimoni->client->occupation}}</p>
                </div>
              </div>
              <div class="flex flex-nowrap">
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
          </div>
        </div>
        <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
          <img src="{{Storage::url($testimoni->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
  <div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-[10px] mt-20 -mb-20">
    <div class="container max-w-[1000px] mx-auto">
      <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-center">
          <div class="flex flex-col gap-[30px]">
              <div class="flex flex-col gap-[10px]">
                  <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>
              </div>
              <a href="#" class="p-5 bg-cp-black rounded-xl text-white w-fit font-bold">Contact Us</a>
          </div>
          <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-1">
                      <span class="font-bold text-lg leading-[27px] text-left">What medical device products do you offer?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-1" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">We offer a wide range of medical devices, including [mention main categories, e.g., diagnostic equipment, surgical instruments, therapeutic devices, etc.], as well as [mention specific flagship products]. You can view our complete catalog on [link to catalog].</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-2">
                      <span class="font-bold text-lg leading-[27px] text-left">Are your products approved by the relevant regulatory authorities?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-2" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">Yes, all our products comply with the necessary regulations and have received approval from the appropriate authorities. We guarantee the quality and safety of our products..</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-3">
                      <span class="font-bold text-lg leading-[27px] text-left">Do you provide after-sales service or warranties for your products?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-3" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">Absolutely, we provide comprehensive after-sales service, including product warranties, repairs, and maintenance. Warranty details and after-sales service information can be found on [link to warranty/service page].</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-4">
                      <span class="font-bold text-lg leading-[27px] text-left">Does your company sell products directly to consumers?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-4" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">Our primary sales focus is on hospitals, clinics, and other healthcare institutions, however we do sell select products to individual consumers</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <footer class="bg-cp-black w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] relative z-10" style="padding-bottom: 100px">
      <div class="flex flex-col gap-10">
        <div class="flex items-center gap-3">
          <div class="flex shrink-0 h-[100px] overflow-hidden">
              <img src="{{asset('assets/logo/02.png')}}" class="object-contain w-full h-full" alt="logo">
          </div>
          <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">Irawan Sinergi Sejahtera</p>
            <p id="CompanyTagline" class="text-sm text-white">Build Futuristic Dreams</p>
          </div>
        </div>
        <div class="flex flex-col gap-1">
          <p id="CompanyTagline" class="text-sm text-white">Jl.Delima Tengah II No.29, Tambaksari, Tambakrejo,</p>
          <p id="CompanyTagline" class="text-sm text-white">Kec.Waru, Kab.Sidoarjo, Jawa Timur</p>
        </div>
        <div class="flex items-center gap-1">
          <p id="CompanyTagline" class="text-sm text-white">(+62) 8123060995 </p>
        </div>
        <div class="flex items-center gap-4">
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="{{asset('assets/icons/youtube.svg')}}" class="w-full h-full object-contain" alt="youtube">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="{{asset('assets/icons/whatsapp.svg')}}" class="w-full h-full object-contain" alt="whatsapp">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="{{asset('assets/icons/facebook.svg')}}" class="w-full h-full object-contain" alt="facebook">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="{{asset('assets/icons/instagram.svg')}}" class="w-full h-full object-contain" alt="instagram">
            </div>
          </a>
        </div>
      </div>
      <div class="flex flex-wrap gap-[50px]">
        <div class="flex flex-col w-[600px] gap-3">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9965537245835!2d112.78048947500065!3d-7.354280992654667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e51019225487%3A0x748f020fc35343d3!2sTOPAZ%20Residence%2C%20DELIMA%20Residences!5e0!3m2!1sid!2sid!4v1739435581627!5m2!1sid!2sid"
            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </footer>
  <div id="video-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full lg:w-1/2 max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-[20px] overflow-hidden shadow">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                  <h3 class="text-xl font-semibold text-cp-black">
                      Company Profile Video
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" onclick="{modal.hide()}">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="">
                <!-- video src added from the js script (modal-video.js) to prevent video running in the backgroud -->
                <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src="" title="Demo Project Laravel Portfolio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
          </div>
      </div>
  </div>


@endsection


  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@push('after-scripts')
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/accordion.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="{{ asset('js/modal-video.js') }}"></script>
@endpush
