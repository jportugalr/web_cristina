@extends('layouts.web.master')

@section('meta')
    <title>Resultados de búsqueda para "{{ request('q') }}" | Rena Ware Perú</title>
    <meta name="description" content="Resultados de búsqueda para '{{ request('q') }}' en Rena Ware Perú. Descubre productos, promociones y artículos relacionados.">
    <meta name="keywords" content="Buscar {{ request('q') }}, Resultados de Búsqueda Rena Ware, Productos de Cocina, Filtros de Agua, Promociones Saludables">

    <meta property="og:title" content="Resultados para '{{ request('q') }}' | Rena Ware Perú">
    <meta property="og:description" content="Encuentra los mejores productos y artículos relacionados con '{{ request('q') }}' en Rena Ware Perú.">
    <meta property="og:image" content="{{ asset('images/og-image-search.jpg') }}">  
    <meta name="robots" content="noindex, follow">  
@endsection

@section('content')


    <!-- Productos -->
    <section class="section-offer py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Lista<span class="text-[#6c7fd8]"> general</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-bold tracking-[0.03rem] max-[991px]:mx-[auto]">Continua bajando para ver nuestros descuentos</p>
                        </div>
                    </div>
                </div>

                @foreach ($products as $product )
                    <x-web.product-card :product="$product" />
                @endforeach
             
            </div>
        </div>
    </section>

    <!-- Promotions -->
    <section class="section-offer py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Descuentos<span class="text-[#6c7fd8]"> Especiales</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Pide tu regalo "El Complemento Perfecto"</p>
                        </div>
                    </div>
                </div>

                @foreach ($promotions as $promotion )
                    <x-web.promotion-card :promotion="$promotion" />
                @endforeach
             
            </div>
        </div>
    </section>

    @include('layouts.web.modal')

@endsection