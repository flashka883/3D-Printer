@extends('common_template')

@section('content')
    <div class="bg-white">
        <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
            <h2 class="text-3xl font-extrabold text-black sm:text-4xl">
                <span class="block">
                    Благодарим ви за покупката!
                </span>
                <span class="block text-blue-500">
                    Поръчката ви е на път.
                </span>
            </h2>
            <div class="lg:mt-0 lg:flex-shrink-0">
                <button type="button"
                    class="py-2 px-4 mt-5 mr-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
            hover:text-blue transition ease-in duration-200 text-center text-base font-semibold focus:outline-none rounded-lg ">
                    <a href="{{ route('home') }}">Обратно към начало </a>
                </button>
            </div>
        </div>
    </div>
@endsection
