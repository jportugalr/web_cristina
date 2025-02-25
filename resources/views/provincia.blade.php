@extends('layouts.web.master')

@section('meta')

<title>Rena Ware en {{$provincia->nombre}}, {{$provincia->departamento->nombre}} | Beneficios y Productos</title>
<meta name="description" content="Descubre los beneficios de Rena Ware en {{$provincia->nombre}}, {{$provincia->departamento->nombre}}. Encuentra productos exclusivos y promociones.">
<meta name="keywords" content="Rena Ware {{$provincia->nombre}}, ollas saludables {{$provincia->nombre}}, filtros de agua {{$provincia->nombre}}, promociones Rena Ware {{$provincia->nombre}}">
<link rel="canonical" href="{{ route('location.provincia', ['departamentoSlug' => $provincia->departamento->slug, 'provinciaSlug' => $provincia->slug]) }}">

<!-- Open Graph / Facebook -->
<meta property="og:title" content="Rena Ware en {{$provincia->nombre}}, {{$provincia->departamento->nombre}} | Beneficios y Productos">
<meta property="og:description" content="Descubre los beneficios de Rena Ware en {{$provincia->nombre}}, {{$provincia->departamento->nombre}}. Encuentra productos exclusivos y promociones.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('images/og-image-location.jpg') }}">
    
    
@endsection

@section('content')

   <!-- Breadcrumb --> 
   <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">{{ $provincia->nombre }}</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="{{ route('location.departamento',['slug' => $provincia->departamento->nombre]) }}">{{ $provincia->departamento->nombre }}</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="#pendiente">{{ $provincia->nombre }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog-Detail -->
    <section class="section-blog-details py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-blog-details-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        
                        <!-- Imagen Superior -->
                        <div class="inner-blog-details-image mb-[24px] relative w-full h-64 md:h-96 bg-cover bg-center rounded-[15px]" style="background-image: url('{{ asset("assets/img/locations/general.jpg") }}');">
                            <div class="rounded-[15px] absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                                <h1 class="text-white text-3xl md:text-5xl font-bold">{{ $provincia->nombre }}</h1>
                            </div>
                        </div>
                        

                        <!-- Contenido Principal -->
                        <div class="inner-blog-details-contact mb-[30px]">                            
                            <h4 class="sub-title text-center font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[22px] font-bold text-[#3d4750] max-[575px]:text-[20px]">Descubre <strong> Rena Ware en {{ $provincia->nombre }}</strong></h4>
                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Vive la mejor experiencia culinaria con <strong>Rena Ware en {{ $provincia->nombre }}</strong>. Nuestros productos están diseñados para mejorar tu calidad de vida, permitiéndote cocinar de manera saludable, eficiente y con el mejor sabor. Descubre una línea completa de ollas de acero inoxidable, filtros de agua de alta tecnología y accesorios que transformarán tu cocina.</p>
                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">En Rena Ware, nos preocupamos por tu bienestar y el de tu familia. Con nuestra tecnología avanzada, reducimos el uso de grasas y conservamos los nutrientes esenciales en cada comida. Además, nuestros sistemas de filtración de agua garantizan un consumo más puro y saludable, eliminando hasta el <strong>99.99% de impurezas</strong>.</p>
                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Si estás en <strong>{{ $provincia->nombre }}</strong>, aprovecha nuestras <strong>promociones y especiales</strong>, y accede a descuentos exclusivos. <a href="{{ route('whatsapp',['id'=>4])}}" target="_blank"><strong>Contáctanos</strong></a> para conocer más sobre nuestros productos y cómo puedes adquirirlos de manera rápida y sencilla.</p>
                            
                        </div>

                        <!-- Clientes de la ciudad, proximamente 
                        <div class="bb-blog-details-comment mb-[30px]">
                            <div class="main-title mb-[12px]">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Comments</h4>
                            </div>
                            <div class="bb-comment-box flex mb-[24px] max-[575px]:flex-col">
                                <div class="inner-image mr-[15px] max-[575px]:mr-[0] max-[575px]:mb-[15px]">
                                    <img src="assets/img/reviews/1.jpg" alt="reviews-1" class="w-[50px] rounded-[15px]">
                                </div>
                                <div class="inner-contact flex flex-col justify-center">
                                    <h5 class="sub-title font-quicksand tracking-[0.03rem] leading-[1.2] mb-[4px] text-[16px] font-bold text-[#3d4750]">Mariya Lykra</h5>
                                    <span class="font-Poppins leading-[26px] tracking-[0.02rem] mb-[4px] text-[14px] font-light text-[#777]">May 14,2020</span>
                                    <p class="font-Poppins mb-[6px] text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, et? Quam eius
                                        facere optio explicabo consequatur aut ad. Magnam, aspernatur!</p>
                                    <a href="javascript:void(0)" class="bb-details-btn transition-all duration-[0.3s] ease-in-out text-[13px] font-semibold leading-[28px] tracking-[0.03rem] uppercase text-[#6c7fd8]">Reply <i class="ri-arrow-right-line transition-all duration-[0.3s] ease-in-out text-[15px] font-semibold text-[#6c7fd8]"></i></a>
                                </div>
                            </div>
                            <div class="bb-comment-box second flex mb-[24px] max-[575px]:flex-col pl-[50px]">
                                <div class="inner-image mr-[15px] max-[575px]:mr-[0] max-[575px]:mb-[15px]">
                                    <img src="assets/img/reviews/2.jpg" alt="reviews-1" class="w-[50px] rounded-[15px]">
                                </div>
                                <div class="inner-contact flex flex-col justify-center">
                                    <h5 class="sub-title font-quicksand tracking-[0.03rem] leading-[1.2] mb-[4px] text-[16px] font-bold text-[#3d4750]">Saddika Alard</h5>
                                    <span class="font-Poppins leading-[26px] tracking-[0.02rem] mb-[4px] text-[14px] font-light text-[#777]">May 14,2020</span>
                                    <p class="font-Poppins mb-[6px] text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, et? Quam eius
                                        facere optio explicabo consequatur aut ad. Magnam, aspernatur!</p>
                                    <a href="javascript:void(0)" class="bb-details-btn transition-all duration-[0.3s] ease-in-out text-[13px] font-semibold leading-[28px] tracking-[0.03rem] uppercase text-[#6c7fd8]">Reply <i class="ri-arrow-right-line transition-all duration-[0.3s] ease-in-out text-[15px] font-semibold text-[#6c7fd8]"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bb-blog-details-comment">
                            <div class="main-title mb-[12px]">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Leave A Reply</h4>
                            </div>
                            <form method="post">
                                <div class="flex flex-wrap mx-[-12px]">
                                    <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                        <div class="bb-details-input mb-[24px]">
                                            <input type="text" placeholder="Enter Your Name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]">
                                        </div>
                                    </div>
                                    <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                        <div class="bb-details-input mb-[24px]">
                                            <input type="email" placeholder="Enter Your Email" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]">
                                        </div>
                                    </div>
                                    <div class="w-full px-[12px]">
                                        <div class="bb-details-input mb-[24px]">
                                            <textarea placeholder="Message" class="w-full h-[200px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"></textarea>
                                        </div>
                                    </div>
                                    <div class="w-full px-[12px]">
                                        <div class="bb-details-buttons flex">
                                            <a href="javascript:void(0)" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[18px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        --->
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Lista de Provincias (Si es una página de departamento) -->
     <section class="section-blog-details py-[10px] max-[1199px]:py-[5px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-blog-details-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        @if(isset($departamento->provincias) && count($departamento->provincias) > 0)                        
                            <h3 class="text-lg font-semibold text-center  mb-5">Encuéntranos en estas provincias de {{ $departamento->nombre }}:</h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($departamento->provincias as $provincia)
                                    <li class="text-center">
                                        <a href="{{ route('location.provincia', ['departamentoSlug' => $departamento->slug, 'provinciaSlug' => $provincia->slug]) }}" 
                                            class="font-medium text-sm py-3 px-6 rounded-lg  hover:text-blue-600 transition">
                                            {{ $provincia->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>                    
                        @else
                            <h3 class="text-lg font-semibold text-center  mb-5"><a href="{{ route('location.departamento', ['slug' => $provincia->departamento->slug]) }}" 
                                class="font-medium text-xl py-3 px-6 rounded-lg  hover:text-blue-600 transition">Regresa a {{ $provincia->departamento->nombre }}</a></h3>                            
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
     </section>

     <!-- New Product tab Area -->
    <section class="section-product-tabs overflow-hidden py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Nuevos <span class="text-[#6c7fd8]">Especiales</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">¡Hoy es el día para elegir lo mejor para ti!.</p>
                        </div>
                        <div class="bb-pro-tab">
                            <ul class="bb-pro-tab-nav flex flex-wrap mx-[-20px] max-[991px]:justify-center" id="ProductTab">                                
                                @foreach ($catalogs as $catalog)                               
                                <li class="nav-item relative leading-[28px] ">
                                    <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#{{ $catalog->id }}" >{{ $catalog->name }}</a>
                                </li>
                                @endforeach                                                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full">
                    <div class="tab-content">
                        <!-- Product tab start -->                      

                        @foreach ($catalogs as $catalog)
                        <div class="tab-product-pane" id="{{ $catalog->id }}">
                            
                            <div class="flex flex-wrap w-full">
                                
                                @foreach ($catalog->promotions as $promotion)  
                                             
                                    <x-web.location-promotion-card :promotion="$promotion" /> 
                                @endforeach                                
                            </div>
         
                        </div> 
                        @endforeach
                        
                       

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection