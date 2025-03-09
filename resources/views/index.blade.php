@extends('layouts.web.master')

@section('meta')

    <title>Rena Ware Perú | Cocina Saludable y Oportunidades de Negocio</title>
    <meta name="description" content="Descubre Rena Ware en Perú: productos de cocina saludable, sistemas de filtración de agua y oportunidades para tu crecimiento personal y financiero.">
    <meta name="keywords" content="Rena Ware Perú, Cocina Saludable, Oportunidad de Negocio, Filtros de Agua, Productos de Cocina, Bienestar, Nutri-Plex">
    <meta property="og:title" content="Rena Ware Perú | Cocina Saludable y Oportunidades de Negocio">
    <meta property="og:description" content="Explora productos innovadores para una vida saludable y descubre cómo unirte a Rena Ware en Perú. ¡Mejora tu salud y tus finanzas!">
    <meta property="og:image" content="{{ asset('images/og-image-home.webp') }}">
    
@endsection

@section('content')

    <!-- Hero -->
    <section class="section-hero mb-[50px] max-[1199px]:mb-[35px] py-[50px] relative bg-[#f8f8fb] overflow-hidden">

        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full">
                    <div class="hero-slider swiper-container">
                        <div class="swiper-wrapper">
                         
                            <!-- Slide-1 -->
                            <div class="swiper-slide slide-1">
                                <div class="flex flex-wrap w-full mb-[-24px]">
                                    <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                        <div class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                            <p class="mb-[20px] font-Poppins text-[18px] text-[#162c48] font-semibold leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">RENA WARE</p>
                                            <h1 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">Productos que pasan <span class="relative text-[#6c7fd8]"></br>la prueba del tiempo</span><br> </h1>
                                            <a href="{{ route('whatsapp', ['id' => 4,]) }}" target="_blank" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-semibold text-[#fff] bg-[#162c48] rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#e36a53] hover:border-[#e36a53] hover:text-[#fff] capitalize">Conoce nuestra historia</a>
                                        </div>
                                    </div>
                                    <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                        <div class="video-container hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                            
                                            <script src="{{ asset('assets/js/vendor/player.js')}}" defer></script>
                                            <script src="{{ asset('assets/js/vendor/zaxon6nvmv.js')}}" defer type="module"></script>
                                            <style>wistia-player[media-id='zaxon6nvmv']:not(:defined) { background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/zaxon6nvmv/swatch'); display: block; filter: blur(5px); padding-top:56.25%; }</style> 
                                            <wistia-player autoplay="false" media-id="zaxon6nvmv" seo="false" aspect="1.7777777777777777"></wistia-player>
                                            
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                                <linearGradient id="shape_1" x1="100%" x2="0%" y1="100%" y2="0%"></linearGradient>
                                                <path d="">
                                                    <animate repeatCount="indefinite" attributeName="d" dur="15s" values="" />
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                            {{-- 
                            <!-- Slide-3 -->
                            <div class="swiper-slide slide-3">
                                <div class="flex flex-wrap w-full mb-[-24px]">
                                    <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                        <div class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                            <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">Agua pura</p>
                                            <h2 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">Esencial para cuidar <span class="relative text-[#6c7fd8]">tu salud</span><br></h2>
                                            <a href="{{ route('whatsapp', ['id' => 4,]) }}" target="_blank" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Conoce más</a>
                                        </div>
                                    </div>
                                    <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                        <div class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                            <img src="{{ asset('assets/img/hero/hero-3.png') }}" alt="hero" class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                                <linearGradient id="shape_3" x1="80%" x2="0%" y1="80%" y2="0%">
                                                </linearGradient>
                                                <path d="">
                                                    <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                        values="" />
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            

                        </div>
                        <div class="swiper-pagination swiper-pagination-white"></div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nsf-certification">
        <div class="container">
            <div class="certification-header">
                <img src="{{ asset('assets/img/category/category.webp') }}" alt="Certificación NSF P-390" class="certification-image w-[30%] max-[1280px]:w-[40%] max-[992px]:w-[50%] max-[767px]:w-[70%] ">
                <div class="certification-text">
                    <h2>Certificación NSF P-390</h2>
                    <p>La certificación NSF P-390 garantiza que los productos Rena Ware cumplen con los más altos estándares de seguridad, durabilidad y calidad en la cocina.</p>
                </div>
            </div>
            
            <div class="certification-benefits max-[1025px]:hidden">
                <div class="benefit-card">
                    <img src="{{ asset('assets/img/category/construccion.webp') }}" alt="Construcción y Diseño" class="benefit-image w-[60%]">
                    <h3>Construcción y Diseño</h3>
                </div>
                <div class="benefit-card">
                    <img src="{{ asset('assets/img/category/superior.webp') }}" alt="Rendimiento Superior" class="benefit-image w-[60%]">
                    <h3>Rendimiento Superior</h3>
                </div>
                <div class="benefit-card">
                    <img src="{{ asset('assets/img/category/seguridad.webp') }}" alt="Seguridad en Materiales" class="benefit-image w-[60%]">
                    <h3>Seguridad en Materiales</h3>
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
                                <li class="nav-item relative leading-[28px] ">
                                    <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#all">Productos</a>
                                </li>
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
                        <!-- 1st Product tab start -->
                        <div class="tab-product-pane" id="all">
                            <div class="flex flex-wrap w-full">   
                                @foreach ($products as $product)                            
                                    <x-web.product-card :product="$product" />
                                @endforeach
                            </div>
                            <div class="w-full px-[12px]">
                                <a href="{{ route('inicio') }}">
                                    <div class="bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between">
                                        <div class="flex flex-wrap w-full">
                                            <div class="rounded-[20px] w-[100%] px-[12px] max-[420px]:w-full bg-[#162c48] hover:bg-[#e36a53]">
                                                <div class="bb-bl-btn py-[10px] flex justify-center">
                                                    <h3 class="text-white font-bold uppercase">Ver Todos los productos</h3>
                                                </div>
                                            </div>                                      
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @foreach ($catalogs as $catalog)
                        <div class="tab-product-pane" id="{{ $catalog->id }}">
                            
                            <div class="flex flex-wrap w-full">
                                
                                @foreach ($catalog->promotions->take(6) as $promotion)  
                                             
                                    <x-web.promotion-card :promotion="$promotion" /> 
                                @endforeach                                
                            </div>
                            <div class="w-full px-[12px]">
                                <a href="{{ route('promociones.index',['slug'=>$catalog->slug])}}">
                                    <div class="bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between">
                                        <div class="flex flex-wrap w-full">
                                            <div class="rounded-[20px] w-[100%] px-[12px] max-[420px]:w-full bg-[#162c48] hover:bg-[#e36a53]">
                                                <div class="bb-bl-btn py-[10px] flex justify-center">
                                                    <h3 class="text-white font-bold uppercase">Ver Todos los {{ $catalog->name }}</h3>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        @endforeach
                        
                       

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner-two -->
    <section class="section-banner-two my-[50px] max-[1199px]:my-[35px] bg-[url('{{ asset('assets/img/banner-two/banner.webp') }}')] min-h-[600px] overflow-hidden bg-no-repeat bg-cover bg-center max-[991px]:max-h-[400px] max-[991px]:min-h-[auto]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px] banner-justify-box-contact h-[600px] flex justify-end items-end max-[991px]:h-[400px]">
                    <div class="banner-two-box bg-[#fff] rounded-t-[30px] max-w-[400px] pt-[30px] px-[30px] flex flex-col items-start relative max-[991px]:max-w-[250px] max-[575px]:my-[0] max-[575px]:mx-[auto]">
                        <span class="text-[20px] font-semibold text-[#162c48] leading-[26px] max-[991px]:text-[16px]">Complemento perfecto</span>
                        <h4 class="font-quicksand mb-[20px] text-[40px] font-bold text-[#162c48] tracking-[0.03rem] leading-[1.2] max-[991px]:text-[22px]">¡Llevatela gratis!</h4>
                        <a href="/whatsapp/4/" target="_blank" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] max-[1199px]:py-[3px] max-[1199px]:px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">¡La Quiero!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendors -->
    <section class="section-vendors overflow-hidden pt-[50px] max-[1199px]:pt-[35px] pb-[100px] max-[1199px]:pb-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">La <span class="text-[#6c7fd8]">Oportunidad</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">En Rena Ware eres dueño de tu tiempo. Alcanza tus metas y marca la diferencia en tu vida y lade otros</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bb-vendors-img sticky top-[0]">
                        <div class="tab-content">
                            <div class="tab-vendors-pane" id="vendors_tab_one">
                                <span href="#pendiente" aria-hidden="true" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                    <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                                </span>
                                <img src="{{asset('assets/img/vendors/img-1.webp')}}" alt="vendors-img-1" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                                <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                    <div class="inner-shape relative"></div>
                                    <img src="{{asset('assets/img/vendors/vendor-1.webp')}}" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                                </div>
                            </div>
                            <div class="tab-vendors-pane" id="vendors_tab_two">
                                <span href="#pendiente" aria-hidden="true" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                    <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                                </span>
                                <img src="{{asset('assets/img/vendors/img-2')}}.webp" alt="vendors-img-2" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                                <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                    <div class="inner-shape relative"></div>
                                    <img src="{{asset('assets/img/vendors/vendor-2.webp')}}" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                                </div>
                            </div>
                            <div class="tab-vendors-pane" id="vendors_tab_three">
                                <span href="#pendiente" aria-hidden="true" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                    <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                                </span>
                                <img src="{{asset('assets/img/vendors/img-3')}}.webp" alt="vendors-img-3" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                                <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                    <div class="inner-shape relative"></div>
                                    <img src="{{asset('assets/img/vendors/vendor-3.webp')}}" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                                </div>
                            </div>
                            <div class="tab-vendors-pane" id="vendors_tab_four">
                                <span href="#pendiente" aria-hidden="true" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                    <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                                </span>
                                <img src="{{asset('assets/img/vendors/img-4')}}.webp" alt="vendors-img-4" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                                <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                    <div class="inner-shape relative"></div>
                                    <img src="{{asset('assets/img/vendors/vendor-4.webp')}}" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                    <ul class="bb-vendors-tab-nav flex flex-wrap mb-[-24px]" id="vendorstab">
                        <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_one">
                                <div class="bb-vendors-box">
                                    <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                        <h3 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Nuestra visión</h3>
                                        <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]"></span>
                                    </div>
                                    <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Ayuda a los demas a alcanzar tus sueños y alcanzaras los tuyos </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_two">
                                <div class="bb-vendors-box">
                                    <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                        <h3 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">¿Qué hace a Rena Ware diferente?</h3>
                                        <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]"></span>
                                    </div>
                                    <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Oportunidad única que transforma vidas, asumiendo los riesgos asociados a iniciar un negocio </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_three">
                                <div class="bb-vendors-box">
                                    <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                        <h3 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">El mejor plan de compensación del mercado</h3>
                                        <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]"></span>
                                    </div>
                                    <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Gana más, crece más y alcanza el éxito con el plan que realmente recompensa tu esfuerzo </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_four">
                                <div class="bb-vendors-box">
                                    <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                        <h3 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">¡Empieza Hoy!</h3>
                                        <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]"></span>
                                    </div>
                                    <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Con nuestro programa ¡empieza Ya!, califica y gana grandes premios. </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Preguntas Frecuentes -->
    <section class="section-faq py-[50px] max-[1199px]:py-[35px] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            
            <!-- Título y Descripción -->
            <div class="w-full text-center mb-[40px]">
                <h2 class="font-quicksand text-[30px] font-bold text-[#3d4750] leading-[1.2]">Preguntas Frecuentes</h2>
                <p class="font-Poppins text-[16px] text-[#686e7d] leading-[22px] max-w-[600px] mx-auto">
                    Resuelve tus dudas sobre nuestros productos, certificaciones y beneficios.
                </p>
            </div>

            <!-- Acordeón de Preguntas Frecuentes -->
            <div class="w-full">
                <div class="faq-accordion">                
                    @foreach ($faqs as $faq)                  
                            <x-web.faq-card :faq="$faq"/>                                                                              
                    @endforeach
                    

                </div>
            </div>

            <div class="text-center mt-[20px]">
                <a href="{{ route('faq') }}" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] px-[25px] text-[16px] font-semibold text-[#fff] bg-[#162c48] rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#e36a53] hover:border-[#e36a53]">
                    Lee todas las preguntas frecuentes →
                </a>
            </div>
        </div>
    </section>



    @include('layouts.testimonials')

    <!-- Blog -->
    <section class="section-blog overflow-hidden pb-[50px] max-[1199px]:pb-[35px] pt-[100px] max-[1199px]:pt-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="blog-2-slider owl-carousel">

                        @foreach ($articles as $article)
                           <x-web.article-short-card :article="$article" />                            
                        @endforeach

                    </div>
                </div>                
            </div>
        </div>
        <div class="text-center mt-[20px]">
            <a href="{{ route('blog.index') }}" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] px-[25px] text-[16px] font-semibold text-[#fff] bg-[#162c48] rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#e36a53] hover:border-[#e36a53]">
                Visita nuestro Blog →
            </a>
        </div>
    </section>




    @include('layouts.web.modal')

@endsection

