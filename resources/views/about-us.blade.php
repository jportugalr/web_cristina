@extends('layouts.web.master')

@section('meta')
    <title>Acerca de Nosotros | Rena Ware Perú - Comprometidos con tu Bienestar</title>
    <meta name="description" content="Conoce la historia de Rena Ware en Perú. Descubre nuestra misión de promover un estilo de vida saludable con productos de alta calidad y oportunidades de negocio.">
    <meta name="keywords" content="Acerca de Rena Ware, Historia Rena Ware Perú, Estilo de Vida Saludable, Oportunidad de Negocio, Cocina Saludable, Misión Rena Ware">

    <meta property="og:title" content="Acerca de Nosotros | Rena Ware Perú">
    <meta property="og:description" content="Rena Ware, más de 75 años promoviendo el bienestar a través de productos innovadores y oportunidades de crecimiento personal. Conoce más sobre nosotros.">
    <meta property="og:image" content="{{ asset('images/og-image-about.webp') }}">
    
@endsection

@section('content')
    
    <!-- Breadcrumb --> 
    <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Nosotros</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active ">Nosotros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About -->
    <section class="section-about py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                    <div class="bb-about-img sticky top-[0]">
                        <img src="assets/img/about/one.webp" alt="about-one" class="w-full">
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full mb-[24px]">
                    <div class="bb-about-contact h-full flex flex-col justify-center">
                        <div class="section-title pb-[12px] px-[12px] flex justify-start max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="section-detail max-[991px]:mb-[12px]">
                                <h2 class="bb-title font-quicksand tracking-[0.03rem] mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] inline capitalize leading-[1] max-[767px]:text-[23px]">Acerca de <span class="text-[#6c7fd8]">Nosotros</span></h2>
                            </div>
                        </div>
                        <div class="about-inner-contact px-[12px] mb-[14px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[20px] text-[18px] text-[#3d4750] font-bold italic">Bienvenidos a Excelencia Peruana</h4>
                            <p class="font-Poppins mb-[16px] text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Soy <strong class="font-bold">Cristina Román, Líder Gold</strong>, con <strong class="font-bold">25 años de trayectoria en la compañía</strong> y ganadora de dos Medallas de Honor. A lo largo de este camino, he aprendido que el éxito no es solo una meta personal, sino el resultado del esfuerzo colectivo, del trabajo en equipo y del deseo genuino de ayudar a otros a alcanzar sus propios logros.</p>
                            <p class="font-Poppins mb-[16px] text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Cuando inicié en este negocio, no imaginaba cuánto transformaría mi vida. Con el tiempo, entendí que más allá de los reconocimientos y las metas alcanzadas, lo más valioso es el impacto que podemos generar en las personas que confían en nosotros. Así nació <strong class="font-bold">Excelencia Peruana</strong>, una organización que no se define solo por resultados, sino por el compromiso de quienes la conformamos, por los valores que compartimos y por la pasión con la que trabajamos día a día.</p>
                            <p class="font-Poppins mb-[16px] text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Nada de esto sería posible sin los líderes que hacen de Excelencia Peruana lo que es hoy. He tenido el honor de acompañar a personas increíbles en su crecimiento, viendo cómo cada uno, con su propio esfuerzo y determinación, ha construido su propio camino al éxito. Aquí no hay logros individuales, todo es parte de un esfuerzo en conjunto, de una comunidad que avanza unida y que se apoya mutuamente.</p>
                            <p class="font-Poppins mb-[16px] text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Si estás aquí, quiero que sepas que <strong class="font-bold">esta oportunidad también puede ser para ti</strong>. No importa cuál sea tu punto de partida, lo importante es tener la voluntad de crecer y rodearte de personas que crean en ti.<strong class="font-bold"> En Excelencia Peruana, estamos aquí para acompañarte, guiarte y celebrar cada paso que des hacia un futuro mejor.</strong></p>
                            <p class="font-Poppins mb-[16px] text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Bienvenido. Tu historia de éxito comienza hoy.</p>
                        </div>
                        <div class="bb-vendor-rows flex flex-wrap w-full mb-[-24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="min-[576px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-vendor-box p-[20px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-count mb-[12px] max-[1399px]:mb-[8px]">
                                        <h5 class="counter font-quicksand tracking-[0.03rem] text-[32px] leading-[24px] text-[#3d4750] font-bold max-[1399px]:text-[28px] text-center">25 +</h5>
                                    </div>
                                    <div class="inner-text">
                                        <p class="font-Poppins font-light tracking-[0.03rem] text-[14px] leading-[18px] text-[#686e7d] mb-[0] text-center">Años</p>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[576px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-vendor-box p-[20px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-count mb-[12px] max-[1399px]:mb-[8px]">
                                        <h5 class="counter font-quicksand tracking-[0.03rem] text-[32px] leading-[24px] text-[#3d4750] font-bold max-[1399px]:text-[28px] text-center">1400 +</h5>
                                    </div>
                                    <div class="inner-text">
                                        <p class="font-Poppins font-light tracking-[0.03rem] text-[14px] leading-[18px] text-[#686e7d] mb-[0] text-center">Asesores</p>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[576px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-vendor-box p-[20px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-count mb-[12px] max-[1399px]:mb-[8px]">
                                        <h5 class="counter font-quicksand tracking-[0.03rem] text-[32px] leading-[24px] text-[#3d4750] font-bold max-[1399px]:text-[28px] text-center">20 +</h5>
                                    </div>
                                    <div class="inner-text">
                                        <p class="font-Poppins font-light tracking-[0.03rem] text-[14px] leading-[18px] text-[#686e7d] mb-[0] text-center">Líderes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.testimonials')

    <!-- Team -->
    <section class="section-team py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="section-title text-center mb-[20px] pb-[20px] z-[5] relative flex justify-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Nuestro <span class="text-[#6c7fd8]">Equipo</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Conoce a nuestros emprendedores.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-[12px]">
                    <div class="bb-team owl-carousel">
                        @foreach ($leaders as $leader )
                            <x-web.leader-card :leader="$leader" />    
                        @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Back to top  -->
    <a href="#Top" class=" back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
        <i class="ri-arrow-up-line text-[20px]"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-transparent stroke-[5px] stroke-[#6c7fd8]"></path>
            </svg>
        </div>
    </a>
    
@endsection