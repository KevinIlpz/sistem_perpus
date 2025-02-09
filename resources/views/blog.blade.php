@extends('layouts.template')

@section('content')
<div class="relative flex flex-col min-h-screen bg-[#fbf9f8] overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="layout-container flex flex-col flex-grow w-full px-8 md:px-16 lg:px-40">
    <div class="flex flex-col flex-1 py-5">
      <div class="flex flex-col flex-1">
        <!-- Search Bar -->
        <div class="px-4 py-3">
          <form method="GET" action="{{ route('blog') }}">
            <label class="flex flex-col">
              <div class="flex items-stretch rounded-lg overflow-hidden shadow-sm">
                <div class="flex items-center justify-center px-4 bg-[#f3ebe8] text-[#96684f]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                  </svg>
                </div>
                <input
                  type="text"
                  name="search"
                  placeholder="Search for blogs"
                  value="{{ request('search') }}"
                  class="w-full bg-[#f3ebe8] text-[#1b130e] px-4 py-3 focus:outline-none focus:ring-0 border-none text-base font-normal"
                />
              </div>
            </label>
          </form>
        </div>

        <!-- Blog Posts -->
        @if($blogs->isEmpty())
          <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800">No blogs available.</h2>
            <p class="mt-2 text-gray-600">Check back later or add a new blog post.</p>
          </div>
        @else
          <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Latest Blogs</h2>
          <div class="grid gap-8 p-4 grid-cols-1 md:grid-cols-2">
            @foreach ($blogs as $blog)
              <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 animate__animated animate__fadeIn">
                <div class="h-60 bg-center bg-cover rounded-t-lg" style="background-image: url('{{ asset('storage/' . $blog->image) }}');"></div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-[#201A09]">{{ $blog->judul }}</h3>
                  <p class="mt-2 text-gray-600">{{ Str::limit($blog->isi, 100) }}</p>
                  <a href="{{ route('show-blog', $blog->id) }}" class="inline-block mt-4 bg-[#A07D1C] text-white px-4 py-2 rounded-lg font-bold hover:bg-[#A07D1C]/80 transition-colors">
                    Read More
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
