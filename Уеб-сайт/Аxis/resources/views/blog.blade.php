@extends('common_template')

@section('content')

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
 <div class="w-full max-w-6xl mx-auto pb-8 bg-white p-6 rounded-xl mb-4">

    <div class="header flex items-end justify-between mb-12">
        <div class="title">
            <p class="text-4xl font-bold text-gray-800 mb-4">
                Последни статии
            </p>
            <p class="text-2xl font-light text-gray-400">
                Всички статии са проверени от екипа на Axis.
            </p>
        </div>
        <div class="text-end">
            <div class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                <div class=" relative ">
                    <input type="text" id="blog-search" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base" placeholder="Въведи заглавие"/>
                    </div>
                    <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white focus:ring-blue-500 focus:ring-offset-blue-200 text-white hover:text-blue-500
                    hover:text-blue transition ease-in duration-200 text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg" id="search-btn">
                    търси
                    </button>
            </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-one">
    <a href="{{route('blog.post.number', ['id' => 1])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog1-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-one">Потенциалът на 3D принтирането</p>
            <p class="text-gray-400 font-light text-md">
            Точният дял на 3D принтираните стоки в световното производство...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #3D принтиране
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Икономика
                </div>
            </div>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-two">
    <a href="{{route('blog.post.number', ['id' => 2])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog2-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-two">3D принтиран ракетен двигател</p>
            <p class="text-gray-400 font-light text-md">
            Може и да е далеч от успехите на Blue Origin и SpaceX, но...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Ракета
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #3D принтиране
                </div>
            </div>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-three">
    <a href="{{route('blog.post.number', ['id' => 3])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog3-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-three">Lockheed Martin създаде 3D принтирани космически елементи</p>
            <p class="text-gray-400 font-light text-md">
            Военният гигант Lockheed Martin...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Lockheed Martin
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Космос
                </div>
            </div>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-four">
    <a href="{{route('blog.post.number', ['id' => 4])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog4-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия 
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-four">Ръководство за материали за 3D принтиране</p>
            <p class="text-gray-400 font-light text-md">
            Пластмасата е материал, изработен от...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Материали
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Пластмаса
                </div>
            </div>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-five">
    <a href="{{route('blog.post.number', ['id' => 5])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog5-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-five">3D принтиране в индустрията</p>
            <p class="text-gray-400 font-light text-md">
            Pазглеждано доскоро само като инструмент за проектиране...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Проектиране
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #3D принтиране
                </div>
            </div>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto blog-six">
    <a href="{{route('blog.post.number', ['id' => 6])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog6-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-six">Made In Space принтира 3D турбина в Космоса</p>
            <p class="text-gray-400 font-light text-md">
            Made In Space продължава да постига извънземни постижения...
            </p>
            <div class="flex flex-wrap justify-starts items-center mt-4">
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #Космос
                </div>
                <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                    #3D принтиране
                </div>
            </div>
        </div>
    </a>
</div>
</div>

<div class="rounded-md flex items-center jusitfy-between px-5 py-8 mb-2 border border-blue-500 text-blue-500 hidden blog-err-msg">
    <div class="w-full flex items-center">
    <i class="fas fa-exclamation-circle text-2xl mr-4"></i>
        Това което търсите не съществува. Моля опитайте отново.
    </div>
</div>

 </div>
</div>
@endsection 