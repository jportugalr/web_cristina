@extends('layouts.web.master')

@section('meta')
    <title>Blog de Rena Ware Perú | Consejos de Cocina Saludable y Estilo de Vida</title>
    <meta name="description" content="Explora nuestro blog para descubrir recetas saludables, tips de cocina, beneficios de la alimentación balanceada y el uso de productos Rena Ware.">
    <meta name="keywords" content="Blog Rena Ware, Cocina Saludable, Tips de Cocina, Recetas Saludables, Filtros de Agua, Estilo de Vida Saludable">

    <meta property="og:title" content="Blog Rena Ware Perú | Cocina Saludable y Estilo de Vida">
    <meta property="og:description" content="Encuentra artículos inspiradores sobre salud, cocina sin aceite, recetas nutritivas y más con los productos Rena Ware.">
    <meta property="og:image" content="{{ asset('images/og-image-blog.jpg') }}">
    
@endsection

@section('content')

    <!-- Breadcrumb --> 
    <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Blog</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="javascript:void(0)">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Blog -->
    <section class="section-blog py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                @foreach ($articles as $article )
                    <x-web.article-card :article="$article" />                    
                @endforeach                
            </div>
        </div>
    </section>

    @include('layouts.web.modal')

@endsection