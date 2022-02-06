@extends('common_template')

@section('content')

    <!-- <form class="flex w-full space-x-3 bg-gray-100 pb-10">
    <div class="w-full max-w-2xl px-5 py-10 m-auto mt-10 bg-white rounded-lg shadow ">
        <div class="mb-6 text-3xl font-light text-center text-gray-800 ">
            Свържете се с нас!
        </div>
        <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
            <div class="col-span-2 lg:col-span-1">
                <div class="relative ">
                    <input type="text" id="contact-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Име"/>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <div class=" relative ">
                        <input type="text" id="contact-form-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Е-mail"/>
                        </div>
                    </div>
                    <div class="col-span-2"> 
                        <p>Вашето съобщение:</p>                      
                        <textarea id="comment" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-black placeholder-black shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="comment" rows="7" cols="40">
                        </textarea>
                    </div>
                    <div class="col-span-2 text-right">
                        <button type="submit" class="py-2 px-4 border-2 border-blue-500 hover:bg-blue-500  focus:ring-indigo-500 focus:ring-offset-blue-200 text-blue-500 hover:text-white w-full transition ease-in duration-300 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Изпрати
                        </button>
                    </div>
                </div>
            </div>
        </form>  -->

<!-- <div class="sections"> -->
<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
 <div class="w-full max-w-6xl mx-auto pb-8 bg-white p-6 rounded-xl mb-4">

    <div class="contact-form">
        <div class="title-holder">
            <h2 class="title">Свържете се с нас</h2>
        </div>
        <form action="{{ route('contact')}}" method="POST" id="contact-form">
            <div class="row first-row">
                <div class="col">
                    <label for="name">Име</label>
                    <input class="contact-input" type="text" id="name" placeholder="Въведете вашето име...">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="email">E-mail</label>
                    <input class="contact-input" type="email" id="email-field" placeholder="Въведете вашият Е-mail...">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row middle-row">
                <label for="message">Съобщение</label>
                <textarea class="contact-input" name="message" id="message" cols="30" rows="4" placeholder="Въведете вашето съобщение..."></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row last-row">
            <button type="button" data-url="{{ route('contact') }}" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
             Изпрати
            </button>
            </div>
        </form>
    </div>    
 </div>
</div>

<!-- </div> -->


@endsection 