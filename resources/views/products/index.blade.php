@extends('layouts.web.master')

@section('meta')

    <title>Productos Rena Ware Perú | Utensilios de Cocina Saludables</title>
    <meta name="description" content="Explora la variedad de productos Rena Ware en Perú: utensilios de cocina de acero inoxidable, filtros de agua, extractores de jugo y más. Diseñados para una vida saludable.">
    <meta name="keywords" content="Utensilios de Cocina, Rena Ware Perú, Productos Saludables, Filtros de Agua, Nutrex Press, Cocina de Inducción">
    <meta property="og:title" content="Productos Rena Ware Perú | Innovación para Tu Cocina">
    <meta property="og:description" content="Descubre productos de cocina de alta calidad con tecnología Nutri-Plex™ y sistemas avanzados de filtración de agua.">
    <meta property="og:image" content="{{ asset('images/og-image-products.jpg') }}">
    

@endsection

@section('content')


@section('content')

    <!-- Breadcrumb --> 
    <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Todos los Products</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="javascript:void(0)">Todos los Products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail section -->
    <section class="section-bnr-details pt-[50px] max-[1199px]:pt-[35px] mb-[24px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full px-[12px]">
                <div class="bnr-details-bg w-full bg-[#f8f8fb] p-[24px] rounded-[20px] border-[1px] border-solid border-[#eee] max-[767px]:p-[15px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="flex flex-wrap mx-[-12px]">                            
                        @foreach ($catalogs as $catalog )                              
                            <x-web.catalog-card :catalog="$catalog" />                            
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Shop section -->
    <section class="section-shop pb-[50px] max-[1199px]:pb-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="bb-shop-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[17]"></div>


                <div class="w-full">
                    <div class="bb-shop-pro-inner">
                        <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                            <div class="w-full px-[12px]">
                                <div class="bb-pro-list-top mb-[24px] rounded-[20px] flex justify-between">
                                    <div class="flex flex-wrap w-full justify-center">
                                        <div class="bb-btn-group transition-all duration-[0.3s] ease-in-out h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#25D366] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="{{ route('whatsapp', ['id' => 4]) }}" target="_blank" title="Wishlist" class=" h-[35px] flex items-center justify-center ml-1 mr-1">
                                                <i class="ri-whatsapp-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px] mr-1"></i> Quiero saber más
                                            </a>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            
                            @foreach ($products as $product)
                                <x-web.product-card :product="$product" />
                            @endforeach                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection