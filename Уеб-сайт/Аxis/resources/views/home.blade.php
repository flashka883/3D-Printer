@extends('common_template')

@section('content')
<div class="bg-gray-100 ">

<!-- Hero section -->
<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
 <div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl" >
 <div class="bg-white flex relative items-center mt-6 mb-14">
        <div class="container mx-auto px-6 flex flex-col justify-between items-center relative py-8">
            <div class="flex flex-col">
                <h1 class=" font-sans w-full uppercase text-center text-4xl sm:text-5xl text-gray-800">
                    Axis 3D-Принтер
                </h1>
                <h2 class="font-light max-w-2xl mx-auto w-full text-xl text-gray-500 text-center py-8">
                        „Аxis“ представлява решение за 3D-принтер. Той e "open sourced". В сайта може да бъде намерена информация за това как се използва принтера, както и обща информация за 3D принтирането.
                </h2>
                <div class="flex items-center justify-center mt-4">
                    <button type="button" class="py-2 px-4 mr-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white focus:ring-blue-500 focus:ring-offset-blue-200 text-white hover:text-blue-500
                    hover:text-blue transition ease-in duration-200 text-center text-base font-semibold  rounded-lg ">
                     Виж повече
                    </button>
                    <a href="#" class="rounded-lg e py-2 px-4 bg-transparent border-2 border-blue-600 text-blue-500 hover:bg-blue-500 hover:text-white transition ease-in duration-200 text-md font-semibold ">
                        Контакти
                    </a>
                </div>
            </div>
            <div class="block w-full mx-auto mt-6 md:mt-0 relative">
                <img src="{{ asset('./images/iphone.jpg') }}" alt="3d-printer" class="md:max-w-2xl m-auto mt-4">
            </div>
        </div>
    </div>
 </div>
</div>

    <!-- Information section -->
<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
<div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl">
 <div class="max-w-screen-xl mx-auto p-8">
    <h2 class="text-3xl font-extrabold leading-9 border-b-2 border-gray-100 text-gray-900 mb-12 pb-2">
        Информация за Axis
    </h2>
    <ul class="flex items-start gap-8 flex-wrap">
        <li class="w-2/5">
            <p class="text-lg leading-6 text-gray-900 font-semibold">
                What is a home energy rating?
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    A home energy rating is an estimated calculation into a homes potential energy usage, which will determine the amount of heating and cooling required to make its occupants comfortable. It produces a star rating dependant on the amount of heating and cooling loads which will be required, from 0 to 10 stars.
                </p>
            </p>
        </li>
        <li class="w-2/5">
            <p class="text-lg leading-6 text-gray-900 font-semibold">
                Why do I need a 6 Star energy rating?
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    In most Australian states the government requires that all new homes and apartments (along with certain types of building extensions) built since 2010 be energy rated and achieve a minimum of 6 Stars.
                </p>
            </p>
        </li>
        <li class="w-2/5">
            <p class="text-lg leading-6 text-gray-900 font-semibold">
                What is the general cost of an energy rating?
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    Simple energy rating prices vary greatly on the size and type of building, generally an energy rating will cost somewhere between $130 to $700+.
                </p>
            </p>
        </li>
        <li class="w-2/5">
            <p class="text-lg  leading-6 text-gray-900 font-semibold">
                What information do I need to supply for an energy rating to be completed??
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    The information required to complete a full and comprehensive energy report are the following final working drawings: Site Plan, Floor Plan, Elevations, Sections, Lighting layout and window schedule (including sizes of the existing windows).
                </p>
            </p>
        </li>
        <li class="w-2/5">
            <p class="text-lg  leading-6 text-gray-900 font-semibold">
                Does building an extension need an energy rating?
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    Depended on the size of the extension you are building there is a chance that it too will need to be energy rated. It&#x27;s always best to check first before going ahead with construction.
                </p>
            </p>
        </li>
        <li class="w-2/5">
            <p class="text-lg leading-6 text-gray-900 font-semibold">
                What is the general cost of an energy rating?
            </p>
            <p class="mt-2">
                <p class="text-base leading-6 text-gray-500">
                    Depended on the size of the extension you are building there is a chance that it too will need to be energy rated. It&#x27;s always best to check first before going ahead with construction.
                </p>
            </p>
        </li>
    </ul>
</div>
</div>
</div>

    <!-- Gallery (Photos & Videos) -->
<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
 <div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl" >
    <!-- <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
    </div> -->
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('./images/iphone.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Blog add -->

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 mt-14">
 <div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl" >
 <div class="w-full py-6 px-4 sm:px-6 lg:py-4 lg:px-10">
        <h2 class="text-3xl font-extrabold text-black sm:text-4xl">
            <span class="block">
               Разгледайте нашия блог:
            </span>
        </h2>
        <p class="text-md mt-4 text-gray-400 ">
            Тук може да намерите информация свързана с Axis и 3D принтирането!
        </p>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <div class="mt-12 inline-flex rounded-md shadow">
            <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white focus:ring-blue-500 focus:ring-offset-blue-200 text-white hover:text-blue-500
            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
             Виж повече
            </button>
            </div>
        </div>
    </div>

    <div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto  blog-one">
    <a href="{{route('blog.post.number', ['id' => 1])}}" class="w-full block h-full">
        <img alt="blog photo" src="{{ asset('./images/blog1-img.jpg') }}" class="max-h-40 w-full object-cover"/>
        <div class="bg-white w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Статия
            </p>
            <p class="text-gray-800 text-xl font-medium mb-2" id="title-one">Потенциалът на 3D принтирането</p>
            <p class="text-gray-400 font-light text-md">
            Точният дял на 3D принтираните стоки...
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
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto mt-4 mb-4 blog-four">
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
            Pазглеждано доскоро само като инструмент...
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
</div>
    </div>
 </div>

    <!-- FAQ -->
<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 mt-14">
 <div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl" >
 <div class="bg-white py-20 px-4">
    <div class="mx-auto max-w-6xl flex flex-col md:flex-row">
        <h2 class="mr-8 w-full md:w-1/3 text-3xl font-extrabold leading-9">
            Често задавани въпроси:
        </h2>
        <dl class="w-full md:w-2/3">
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                   Какво прави Axis по-добрата алтернатива?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                    “Axis” е „open source“ проект, което го прави значително по-достъпен от конкурентите му, като едновременно непрекъснато подобрява качеството си, чрез възможността всеки да допринася за към него.
                </p>
            </dd>
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                Какъв софтуер и хардуер използва Axis?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                Основният хардуер, който управлява принтера е Arduino Mega 2560, RAMPS 1.4, a4988 driver. 
                Софтуерът инсталиран е Marlin версия 1.1, като конфогурацията за принтера може да бъде разгледана в нашия github - https://github.com/flashka883/3D-Printer .

                </p>
            </dd>
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                За какво мога да използвам Axis?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                    Axis може да бъде използван за принтирането на елементи, детайли, резевни части и всичко друго което въображенито ви си представи!
                </p>
            </dd>
        </dl>
    </div>
</div>
 </div>
</div>

   <!-- E-mail subscribtion -->

    <div class="w-full bg-gray-100 text-gray-800 font-light mt-14 pb-6">
        <div class="w-full max-w-6xl mx-auto pb-5 bg-white p-10 rounded-xl" >
            <div class="-mx-3 md:flex items-center">
                <div class="px-3 md:w-2/3 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-4xl font-bold mb-5 leading-tight">Бъдете в крак с <br class="hidden md:block">новостите.</h1>
                    <h3 class="text-gray-600 mb-7 leading-tight">Абонирайте се сега и получавайте най-новите новини.</h3>
                    <div>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <form>
                        <div class="flex mb-3">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                            <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="email@example.com">
                        </div>
                        <div>
                        <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                        hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                         Виж повече
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>

</div>

@endsection 
