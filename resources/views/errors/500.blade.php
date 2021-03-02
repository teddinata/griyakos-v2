{{-- @extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error')) --}}


{{-- @extends('errors::minimal') --}}
{{--
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Elements by BuildWith Angga</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" /> <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> </head><body> <section
    class="h-full w-full border-box lg:px-24 md:px-16 sm:px-8 px-8  transition-all duration-500 linear" style="background-color: #141432;"
    >
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .box-shadow-empty-2-3:hover{
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      @media(min-width: 425px){
        .title-text-empty-2-3{
          font-size: 40px;
        }
      }
      @media(min-width: 640px){
        .lg-show-empty-2-3{
          display: block;
        }
        .lg-hide-empty-2-3{
          display: none;
        }
      }
      @media(max-width: 640px){
        .lg-show-empty-2-3{
          display: none;
        }
        .lg-hide-empty-2-3{
          display: block;
        }
      }
    </style>
    <div style="font-family: 'Poppins', sans-serif;">
      <div class="container mx-auto flex sm:pt-20 pt-16 sm:pb-16 pb-8 items-center justify-center flex-col">
        <img class="sm:w-auto w-5/6 sm:mb-16 mb-12 object-cover object-center" style="max-width: 300px" src="{{ url('images/500.png') }}" alt="">
        <div class="text-center  w-full">
          <h1 class="title-text-empty-2-3 text-3xl mb-5 font-semibold text-white"
          >500 | Server Error</h1>
          <p class="lg-show-empty-2-3 mb-16 tracking-wide leading-7"
          style="color: #707092;"> </p>
          <p class="lg-hide-empty-2-3 mb-12 tracking-wide leading-7"
          style="color: #707092;"></p>
          <div class="flex justify-center">
            <form action="{{ route('home') }}">
                <button class="inline-flex font-semibold text-white text-lg leading-7 py-4 px-6 rounded-xl focus:outline-none box-shadow-empty-2-3"
                style="background: #524EEE;font-family: 'Poppins', sans-serif;" >Back to Homepage</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> </body></html>
