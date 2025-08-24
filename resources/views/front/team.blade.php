@extends('front.layouts.app')
@section('content')
<div id="header" class="bg-[#F6F7FA] relative h-[600px] -mb-[388px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar/>
    </div>
  </div>
  <div id="Teams" class="w-full px-[10px] relative z-10">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[50px] items-center">
      <div class="flex flex-col gap-[50px] items-center">
        <div class="breadcrumb flex items-center justify-center gap-[30px]">
          <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
          <span class="text-cp-light-grey">/</span>
          <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Team</p>
        </div>
        <h2 class="font-bold text-4xl leading-[45px] text-center">We’re Here to Build <br> Your Awesome Projects</h2>
      </div>
      <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
        @forelse($teams as $team)
        <div class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
          <div class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
            <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
              <img src="{{ Storage::url($team->avatar) }}" class="object-cover w-full h-full object-center" alt="photo">
            </div>
          </div>
          <div class="flex flex-col gap-1 text-center">
            <p class="font-bold text-xl leading-[30px]">{{ $team->name }}</p>
            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
          </div>
          <div class="flex items-center justify-center gap-[10px]">
            <div class="w-6 h-6 flex shrink-0">
              <img src="{{asset('assets/icons/global.svg') }}" alt="icon">
            </div>
            <p class="text-cp-dark-blue font-semibold">{{ $team->location }}</p>
          </div>
        </div>
         @empty
        <p>Belum ada data terbaru</p>
         @endforelse
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
@endsection
