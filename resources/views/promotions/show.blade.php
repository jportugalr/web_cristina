@extends('layouts.web.master')

@section('meta')
    <title>Tienda Rena Ware - {{ $promotion->name }}</title>    
    <meta name="description" content="{{ Str::limit($promotion->description, 150) }}">
    <meta name="keywords" content="Rena Ware, {{ $promotion->name }}, promocion, Cocina Saludable, Filtros de Agua ,Rena Ware Peru, ollas, filtros, ingresos, garantia">
    <meta property="og:title" content="{{ $promotion->name }}">
    <meta property="og:description" content="{{ Str::limit($promotion->description, 150) }}">
    <meta property="og:image" content="{{ asset($promotion->images->first()->url) }}"> 
    
    
@endsection

@section('content')

    <!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px] uppercase">{{ $promotion->name }}</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="{{ route('promociones.index',['slug'=>$promotion->catalog->slug]) }}">{{ $promotion->catalog->name }}</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a aria-hidden="true" href="#pendiente">{{ $promotion->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product page -->
    <section class="section-product py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-single-pro mb-[24px]">
                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                                <div class="single-pro-slider sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto">
                                    <div class="single-product-cover">

                                        @foreach ($promotion->images as $image )
                                        <div class="single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]">
                                            <img class="img-responsive rounded-tl-[15px] rounded-tr-[15px]" src="{{ asset($image->url) }}" alt="product-1">
                                        </div>
                                        @endforeach
                                                                               
                                    </div>
                                    <div class="single-nav-thumb w-full overflow-hidden">
                                        @foreach ($promotion->images as $image)
                                        <div class="single-slide px-[10px] block">
                                            <img class="img-responsive border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[15px]" src="{{ asset($image->url) }}" alt="product-1">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-single-pro-contact">
                                    <div class="bb-sub-title mb-[20px]">
                                        <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">{{ $promotion->name }}</h4>
                                    </div>

                                    <p class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem]">{{$promotion->description}}
                                    </p>

                                    <div class="bb-single-pro-weight mt-[24px] mb-[24px]">
                                        <ul class="list-disc pl-[20px] mb-[0]">
                                            <li class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light"><span class="inline-flex font-medium min-w-[150px]">Catalogo</span> {{ $promotion->catalog->name }}</li>                                            
                                            <li class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light"><span class="inline-flex font-medium min-w-[150px]">Etiquetas</span>
                                                                                                
                                                    @foreach($promotion->details->first()->product->tags as $tag)
                                                        {{$tag->tag->tag}},                                                  
                                                    @endforeach      
                                                
                                            </li>                                            
                                        </ul>
                                    </div>

                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-start">   
                                                                     
                                                 
                                    </div>

                                    <div class="bb-single-qty flex flex-wrap m-[-2px]">

                                        <div class="buttons m-[2px]">
                                            <a href="{{ route('whatsapp',['id'=>2,'producto'=>$promotion->name]) }}" target="_blank">
                                                <div class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] flex font-Poppins leading-[28px] tracking-[0.03rem] py-[6px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#25D366] rounded-[10px] border-[1px] border-solid 25D366-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"> <i class="fa fa-whatsapp mr-1 align-middle text-xl text-center"></i>Comprar</div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb-single-pro-tab">
                        <div class="bb-pro-tab mb-[24px]">
                            <ul class="bb-pro-tab-nav flex flex-wrap mx-[-20px] max-[991px]:justify-center" id="ProTab">
                                <li class="nav-item relative leading-[28px]">
                                    <a aria-hidden="true" href="#pendiente" class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block active" href="#detail">Detalle de la promoción</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pro-pane" id="detail">
                                <div class="bb-inner-tabs border-[1px] border-solid border-[#eee] p-[15px] rounded-[20px]">
                                    <div class="bb-details">


                                        @foreach ( $promotion->details as $product)
                                            <div class="details-info">
                                                <ul class="list-disc pl-[20px] mb-[0]">
                                                    <li class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light"><span class="inline-flex font-medium min-w-[150px]">{{ $product->product->name }}</span></li>
                                                </ul>
                                                <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">{{ $product->product->description }}</p>

                                            
                                            </div>
                                        @endforeach
  

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related product section -->
    <section class="section-related-product py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Otras <span class="text-[#6c7fd8]">Promociones</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Explora diferentes beneficios</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-[12px]">
                    <div class="bb-deal-slider m-[-12px]">
                        <div class="bb-deal-block owl-carousel">
                            @foreach ($promotions as $promotion)
                            <x-web.related-promotion-card :promotion="$promotion" />
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection