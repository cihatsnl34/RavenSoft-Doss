@extends('layouts.layout')


@section("content")
<!-----SLIDER-------->
<div class="swiper w-full h-max">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container px-4 mx-auto pt-10">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                        <span class="font-semibold text-xs text-blue-400">Lorm ipsum dolor sit amet, consectetur
                            adispcis</span>
                        <h2 class="mt-8 mb-6 lg:mb-12 text-4xl lg:text-5xl font-semibold">Dosya Fabrikası
                            Toptan Klasör ve Ambalaj ürünleri</h2>
                        <div class="max-w-lg mb-6 lg:mb-12">
                            <p class="text-xl text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Mauris tincidunt malesuada leo, ac imperdiet neque ultrices at aliquam.</p>
                        </div>
                        <div class="flex flex-wrap"><a
                                class="inline-block px-6 py-4 mb-3 mr-4 text-sm font-medium leading-normal border border-green-500 text-green-500 bg-transparent hover:bg-green-500 hover:text-white hover:duration-200 text-white rounded-full transition duration-200"
                                href="#">Klasör ve Etiketler</a></div>
                    </div>
                    <div class="relative w-full md:w-1/2 px-4">
                        <img class="hidden lg:block lg:absolute top-0 right-0 z-10 lg:mt-28"
                            src="https://shuffle.dev/zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
                        <img class="relative" src="https://shuffle.dev/zeus-assets/images/z-picture.png" alt="">
                        <img class="hidden lg:block lg:absolute bottom-0 lg:left-0 lg:ml-6 lg:mb-20"
                            src="https://shuffle.dev/zeus-assets/icons/dots/blue-dot-left-bars.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="container px-4 mx-auto pt-10">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                        <span class="font-semibold text-xs text-blue-400">Lorm ipsum dolor sit amet, consectetur
                            adispcis</span>
                        <h2 class="mt-8 mb-6 lg:mb-12 text-4xl lg:text-5xl font-semibold">Dosya Fabrikası
                            Toptan Klasör ve Ambalaj ürünleri</h2>
                        <div class="max-w-lg mb-6 lg:mb-12">
                            <p class="text-xl text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Mauris tincidunt malesuada leo, ac imperdiet neque ultrices at aliquam.</p>
                        </div>
                        <div class="flex flex-wrap"><a
                                class="inline-block px-6 py-4 mb-3 mr-4 text-sm font-medium leading-normal border border-green-500 text-green-500 bg-transparent hover:bg-green-500 hover:text-white hover:duration-200 text-white rounded-full transition duration-200"
                                href="#">Klasör ve Etiketler</a></div>
                    </div>
                    <div class="relative w-full md:w-1/2 px-4">
                        <img class="hidden lg:block lg:absolute top-0 right-0 z-10 lg:mt-28"
                            src="https://shuffle.dev/zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
                        <img class="relative" src="https://shuffle.dev/zeus-assets/images/z-picture.png" alt="">
                        <img class="hidden lg:block lg:absolute bottom-0 lg:left-0 lg:ml-6 lg:mb-20"
                            src="https://shuffle.dev/zeus-assets/icons/dots/blue-dot-left-bars.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="container px-4 mx-auto pt-10">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                        <span class="font-semibold text-xs text-blue-400">Lorm ipsum dolor sit amet, consectetur
                            adispcis</span>
                        <h2 class="mt-8 mb-6 lg:mb-12 text-4xl lg:text-5xl font-semibold">Dosya Fabrikası
                            Toptan Klasör ve Ambalaj ürünleri</h2>
                        <div class="max-w-lg mb-6 lg:mb-12">
                            <p class="text-xl text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Mauris tincidunt malesuada leo, ac imperdiet neque ultrices at aliquam.</p>
                        </div>
                        <div class="flex flex-wrap"><a
                                class="inline-block px-6 py-4 mb-3 mr-4 text-sm font-medium leading-normal border border-green-500 text-green-500 bg-transparent hover:bg-green-500 hover:text-white hover:duration-200 text-white rounded-full transition duration-200"
                                href="#">Klasör ve Etiketler</a></div>
                    </div>
                    <div class="relative w-full md:w-1/2 px-4">
                        <img class="hidden lg:block lg:absolute top-0 right-0 z-10 lg:mt-28"
                            src="https://shuffle.dev/zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
                        <img class="relative" src="https://shuffle.dev/zeus-assets/images/z-picture.png" alt="">
                        <img class="hidden lg:block lg:absolute bottom-0 lg:left-0 lg:ml-6 lg:mb-20"
                            src="https://shuffle.dev/zeus-assets/icons/dots/blue-dot-left-bars.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>

</div>

<!-----CARDS VIEW----->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center">
            <h2 class="mb-8 text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter">Tercih
                eden müşteriler</h2>

        </div>
        <div class="flex flex-wrap -mx-4 justify-between mt-20">
            @foreach($referance as $rf)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
                <div class="py-12 px-2 rounded-md shadow-2xl">
                    <img class="mx-auto" src="{{asset('storage/company/'.$rf->CompanyLogo)}}" alt="{{$rf->CompanyName}}">
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!------CANTA VIEW----->
<section class="pt-12 pb-2 bg-blueGray-50">
    <div class="container px-4 mx-auto">
        <div class="flex flex-col justify-center items-center relative">
            <h2 class="my-12 text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter">Karton
                Çanta İmalatı</h2>
            <h4 class="pb-20 text-center text-gray-500 ">Pellentesque vehicula fermentum turpis eu cursus.<br> Cras
                convallis tellus et elit aliquet, vitae dignissim ligula sodales. </h4>
            <img src="./assets/text.svg" class="absolute top-13 left-18 z-0" />
            <img src="{{asset('storage/image/'.$image->file)}}" class="z-20 my-12" />

        </div>

        <div class="flex flex-wrap -mx-3 mt-20">
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div
                    class="p-8 bg-white text-center  rounded flex items-center flex-col justify-between hover:shadow-2xl hover:scale-110 hover:ease-out duration-300 hover:cursor-pointer ">
                    <img class="py-4" src="./assets/temsilci.svg" />
                    <p class="mb-2 text-xs md:text-base text-blueGray-400">Online Temsilci</p>
                    <span class="text-3xl lg:text-sm text-gray-500">Pellentesque vestibulum orci, id eleifend ante
                        cursus vitae. In eget enim </span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div
                    class="p-8 bg-white text-center  rounded flex items-center flex-col justify-between hover:shadow-2xl hover:scale-110 hover:ease-out duration-300 hover:cursor-pointer ">
                    <img class="py-4" src="./assets/tuy.svg" />
                    <p class="mb-2 text-xs md:text-base text-blueGray-400">Özel Tasarım</p>
                    <span class="text-3xl lg:text-sm text-gray-500">Pellentesque vestibulum orci, id eleifend ante
                        cursus vitae. In eget enim </span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div
                    class="p-8 bg-white text-center  rounded flex items-center flex-col justify-between hover:shadow-2xl hover:scale-110 hover:ease-out duration-300 hover:cursor-pointer ">
                    <img class="py-4" src="./assets/dart.svg" />
                    <p class="mb-2 text-xs md:text-base text-blueGray-400">Kaliteli Kayıt</p>
                    <span class="text-3xl lg:text-sm text-gray-500">Pellentesque vestibulum orci, id eleifend ante
                        cursus vitae. In eget enim </span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div
                    class="p-8 bg-white text-center  rounded flex items-center flex-col justify-between hover:shadow-2xl hover:scale-110 hover:ease-out duration-300 hover:cursor-pointer ">
                    <img class="py-4" src="./assets/phone.svg" />
                    <p class="mb-2 text-xs md:text-base text-blueGray-400">Telefon Sipariş</p>
                    <span class="text-3xl lg:text-sm text-gray-500">Pellentesque vestibulum orci, id eleifend ante
                        cursus vitae. In eget enim </span>
                </div>
            </div>

        </div>
    </div>
</section>
@include('_footer')
@endsection
