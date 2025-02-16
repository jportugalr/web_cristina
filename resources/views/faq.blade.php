@extends('layouts.web.master')

@section('meta')
    <title>Preguntas Frecuentes | Rena Ware Perú - Encuentra Respuestas Rápidas</title>
    <meta name="description" content="Resuelve tus dudas sobre productos, garantías, envíos y oportunidades de negocio con Rena Ware en Perú. Aquí encontrarás las respuestas más comunes.">
    <meta name="keywords" content="Preguntas Frecuentes Rena Ware, FAQ Rena Ware Perú, Garantía Rena Ware, Envíos, Asesoría, Oportunidades de Negocio">

    <meta property="og:title" content="FAQ Rena Ware Perú | Responde tus Dudas">
    <meta property="og:description" content="Consulta las preguntas más frecuentes sobre nuestros productos, políticas de garantía, métodos de pago y más.">
    <meta property="og:image" content="{{ asset('images/og-image-faq.jpg') }}">    
@endsection

@section('content')



    <!-- Faq -->

    <section class="section-faq py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center  max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Preguntas <span class="text-[#6c7fd8]">Frecuentes</span></h2>
                            <h3 class="mb-3 mt-4">📖 Índice de Preguntas Frecuentes</h3>
                            <ul>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#sobre-rena-ware"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Sobre Rena Ware</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#compra-y-pedidos"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Sobre la Compra y Pedidos</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#envios"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Envíos y Entregas</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#garantia"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Garantía y Servicio Técnico</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#uso-y-cuidado"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Uso y Cuidado de los Productos</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#promociones"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Promociones y Beneficios</a></li>
                                <li class="mb-2 hover:text-[#6c7fd8]"><a href="#negocio"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> Oportunidad de Negocio</a></li>
                            </ul>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-semibold tracking-[0.03rem] max-[991px]:mx-[auto]">Contactanos para una atención personalizada</p>
                        </div>
                    </div>
                </div>

                <div class="min-[992px]:w-[100%] w-full px-[12px] mb-[24px]">
                    <div class="bb-faq-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="bb-accordion style-1 mb-[-24px]">

                            <h2 id="sobre-rena-ware" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 1. Sobre Rena Ware</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 0)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach
                                
                            <h2 id="compra-y-pedidos" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 2. Sobre la Compra y Pedidos</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 1)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                            <h2 id="envios" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 3. Envíos y Entregas</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 2)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                            <h2 id="garantia" class="font-semibold text-lg mb-4">><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 4. Garantía y Servicio Técnico</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 3)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                            <h2 id="uso-y-cuidado" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 5. Uso y Cuidado de los Productos</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 4)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                            <h2 id="promociones" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 6. Promociones y Beneficios</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 5)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                            <h2 id="negocio" class="font-semibold text-lg mb-4"><img src="{{ asset('assets/img/icons/pot.svg') }}" alt="Olla Rena Ware" class="w-6 h-6 inline-block"> 7. Oportunidad de Negocio</h2>
                            @foreach ($faqs as $faq)
                                @if ($faq->category == 6)
                                    <x-web.faq-card :faq="$faq"/>                                    
                                @endif                                    
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            @foreach ($faqs as $faq)
            {
              "@type": "Question",
              "name": "{{ $faq->question }}",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ strip_tags($faq->answer) }}"
              }
            }@if(!$loop->last),@endif
            @endforeach
          ]
        }
    </script>
@endsection