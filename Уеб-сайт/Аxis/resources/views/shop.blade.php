@extends('common_template')

@section('content')
<!-- Filament calc -->

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
<div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl">
 <div class="max-w-screen-xl mx-auto p-8">
    <h2 class="text-3xl font-extrabold leading-9 border-b-2 border-gray-100 text-gray-900 mb-12 pb-2">
        Калкулатор за филамент 
    </h2>
    
    <form class=" ">
        <div class="space-y-6 bg-white">

            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Тегло в килограми
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Тегло"/>
                        </div>
                    </div>
                </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Материал
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                  <option value="">ABS - 1.08 g/cm3</option>
                                  <option value="">PLA - 1.3 g/cm3</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Плътност
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Плътност (g/cm3)"/>
                                    </div>
                                </div>
                            </div>

                        <hr/>    
                        
                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Цена на пакет
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Цена"/>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                            <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                                Изчисли
                            </button>
                            </div>
                        </div>
                    </form>

</div>
</div>
</div>

<!-- Steps per millimeter-belt driven systems calc -->

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
<div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl">
 <div class="max-w-screen-xl mx-auto p-8">
    <h2 class="text-3xl font-extrabold leading-9 border-b-2 border-gray-100 text-gray-900 mb-12 pb-2">
        Steps per millimeter-belt driven systems
    </h2>
    
    <form class=" ">
        <div class="space-y-6 bg-white">

        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto md:w-1/3">
                Motor step angle
            </h2>
            <div class="max-w-sm mx-auto md:w-2/3">
            <div class=" relative ">
                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                  <option value="">1.8° (200 per revolution)</option>
                  <option value="">0.9° (400 per revolution)</option>
                  <option value="">7.5° (48 per revolution)</option>
                </select>
            </div>
            </div>
            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Driver microstepping
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                  <option value="">1 - full step</option>
                                  <option value="">1/2 - half step</option>
                                  <option value="">1/4 - quater step</option>
                                  <option value="">1/8 - uStep (mostly Gen6)</option>
                                  <option value="">1/16 - uStep (mostly Pololu)</option>
                                  <option value="">1/16- uStep (Smoothieboard)</option>
                                  <option value="">1/32- uStep (Crazy Smoothieboard)</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Belt presets
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                  <option value="">2mm Pitch (GT2 mainly)</option>
                                  <option value="">MXL belt (2.03mm)</option>
                                  <option value="">T2.5 (2.5mm)</option>
                                  <option value="">3mm Pitch (GT2, HTD)</option>
                                  <option value="">5mm Pitch (T5, GT2, HTD)</option>
                                  <option value="">0.2" XL belt (5.08mm)</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Belt pitch (in mm)
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Belt pitch"/>
                                    </div>
                                </div>
                            </div>

                        <hr/>    
                        
                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Pulley tooth count
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Pulley tooth count"/>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                            <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                                Изчисли
                            </button>
                            </div>
                        </div>
                    </form>

</div>
</div>
</div>


<!-- Steps per millimeter - leadscrew driven systems -->

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
<div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl">
 <div class="max-w-screen-xl mx-auto p-8">
    <h2 class="text-3xl font-extrabold leading-9 border-b-2 border-gray-100 text-gray-900 mb-12 pb-2">
        Steps per millimeter - leadscrew driven systems 
    </h2>
    
    <form class=" ">
        <div class="space-y-6 bg-white">

        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto md:w-1/3">
                Motor step angle
            </h2>
            <div class="max-w-sm mx-auto md:w-2/3">
            <div class=" relative ">
                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                  <option value="">1.8° (200 per revolution)</option>
                  <option value="">0.9° (400 per revolution)</option>
                  <option value="">7.5° (48 per revolution)</option>
                </select>
            </div>
            </div>
            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Driver microstepping
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                  <option value="">1 - full step</option>
                                  <option value="">1/2 - half step</option>
                                  <option value="">1/4 - quater step</option>
                                  <option value="">1/8 - uStep (mostly Gen6)</option>
                                  <option value="">1/16 - uStep (mostly Pololu)</option>
                                  <option value="">1/16- uStep (Smoothieboard)</option>
                                  <option value="">1/32- uStep (Crazy Smoothieboard)</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Pitch presets
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                <option value="">M8 - metric (1.25mm per rotation)</option>
                                <option value="">M6 - metric (1mm per rotation)</option>
                                <option value="">M5 - metric (0.8mm per rotation)</option>
                                <option value="">12 (12mm per rotation)</option>
                                <option value="">16 (16mm per rotation)</option>
                                <option value="">25 (25mm per rotation)</option>
                                <option value="">5/16"-18 imperial coarse (1.41111mm per rotation)</option>
                                <option value="">3/16"-20 imperial (1.270mm per rotation)</option>
                                <option value="">1/4"-16 Acme (1.5875mm per rotation)</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Leadscrew pitch
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="(mm/revolution)"/>
                                    </div>
                                </div>
                            </div>

                        <hr/>    
                        
                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Gear ratio
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="(1:1; 1:2, 2:2...)"/>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                            <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                                Изчисли
                            </button>
                            </div>
                        </div>
                    </form>

</div>
</div>
</div>

<!-- Optimal layer height for your Z axis -->

<div class="w-full bg-gray-100 text-gray-800 font-light pb-6 pt-6">
<div class="w-full max-w-6xl mx-auto pb-5 bg-white p-6 rounded-xl">
 <div class="max-w-screen-xl mx-auto p-8">
    <h2 class="text-3xl font-extrabold leading-9 border-b-2 border-gray-100 text-gray-900 mb-12 pb-2">
        Optimal layer height for your Z axis
    </h2>
    
    <form class=" ">
        <div class="space-y-6 bg-white">

        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto md:w-1/3">
                Motor step angle
            </h2>
            <div class="max-w-sm mx-auto md:w-2/3">
            <div class=" relative ">
                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                  <option value="">1.8° (200 per revolution)</option>
                  <option value="">0.9° (400 per revolution)</option>
                  <option value="">7.5° (48 per revolution)</option>
                </select>
            </div>
            </div>
            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Desired layer height
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="(mm)"/>
                                    </div>
                                </div>
                            </div>

                        <hr/>

                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Pitch presets
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <select class=" rounded-lg border-transparent flex-1 border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base " name="materials" id="materials">
                                <option value="">M8 - metric (1.25mm per rotation)</option>
                                <option value="">M6 - metric (1mm per rotation)</option>
                                <option value="">M5 - metric (0.8mm per rotation)</option>
                                <option value="">12 (12mm per rotation)</option>
                                <option value="">16 (16mm per rotation)</option>
                                <option value="">25 (25mm per rotation)</option>
                                <option value="">5/16"-18 imperial coarse (1.41111mm per rotation)</option>
                                <option value="">3/16"-20 imperial (1.270mm per rotation)</option>
                                <option value="">1/4"-16 Acme (1.5875mm per rotation)</option>
                                </select>
                            </div>
                            </div>
                            </div>

                        <hr/>

                            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Leadscrew pitch
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="(mm/revolution)"/>
                                    </div>
                                </div>
                            </div>

                        <hr/>    
                        
                        <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-1/3">
                                Gear ratio
                            </h2>
                            <div class="max-w-sm mx-auto md:w-2/3">
                                <div class=" relative ">
                                    <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="(1:1; 1:2, 2:2...)"/>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                            <button type="button" class="py-2 px-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                            hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                                Изчисли
                            </button>
                            </div>
                        </div>
                    </form>

</div>
</div>
</div>
@endsection 