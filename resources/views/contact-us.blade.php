@extends('layouts.web.master')

@section('meta')
    <title>Contáctanos | Rena Ware Perú - Atención Personalizada</title>
    <meta name="description" content="¿Tienes dudas sobre nuestros productos o promociones? Contáctanos para recibir asesoría personalizada sobre Rena Ware en Perú.">
    <meta name="keywords" content="Contacto Rena Ware Perú, Atención al Cliente, Consultas Rena Ware, Asesoría Personalizada, Servicio al Cliente Rena Ware">

    <meta property="og:title" content="Contáctanos | Rena Ware Perú">
    <meta property="og:description" content="Comunícate con nosotros para resolver tus dudas sobre productos, promociones y oportunidades de negocio con Rena Ware.">
    <meta property="og:image" content="{{ asset('images/og-image-contact.jpg') }}">    
@endsection

@section('content')
    <!-- Breadcrumb --> 
    <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Contáctanos</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active "><a href="javascript:void(0)">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us -->
    <section class="section-contact py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]"> <span class="text-[#6c7fd8]">Contáctanos</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Envía tus datos y te contactaremos pronto!</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="bb-contact-form border-[1px] border-solid border-[#eee] rounded-[20px] p-[30px]">
                        <form method="POST" action="{{ route('contacto') }}">
                            @csrf
                            <div class="bb-contact-wrap mb-[24px]">
                                <input type="text" name="fullname" placeholder="Nombre completo" 
                                       class="w-full h-[50px] border border-gray-300 rounded-lg px-4 @error('fullname') border-red-500 @enderror"
                                       value="{{ old('fullname') }}">
                                @error('fullname')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="bb-contact-wrap mb-[24px]">
                                <input type="email" name="email" placeholder="Ingresa tu correo"
                                       class="w-full h-[50px] border border-gray-300 rounded-lg px-4 @error('email') border-red-500 @enderror"
                                       value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="bb-contact-wrap mb-[24px]">
                                <input type="text" name="phone" placeholder="Ingresa tu celular" 
                                       class="w-full h-[50px] border border-gray-300 rounded-lg px-4 @error('phone') border-red-500 @enderror"
                                       value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="bb-contact-wrap mb-[24px]">
                                <textarea name="comment" placeholder="Déjanos un comentario aquí..." 
                                          class="w-full h-[150px] border border-gray-300 rounded-lg px-4 @error('comment') border-red-500 @enderror">{{ old('comment') }}</textarea>
                                @error('comment')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="bb-contact-button">
                                <button type="submit" 
                                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                                    Enviar
                                </button>
                            </div>
                        
                            @if (session('success'))
                                <p class="text-green-500 text-sm mt-4">{{ session('success') }}</p>
                            @endif
                        </form>

                        @if (session('success'))
                            <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                    <h2 class="text-2xl font-bold text-green-500 mb-4">¡Mensaje Enviado! ✅</h2>
                                    <p>{{ session('success') }}</p>
                                    <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Cerrar</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="bb-contact-maps sticky top-[0]">
                        <img src="assets/img/contact-us/contact-us.png" alt="faq-img" class="w-full h-[577px] mb-[-10px] rounded-[20px] border-[0]">                 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('successModal');
            if (modal) {
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 5000); // Se cierra después de 5 segundos
            }
        });
    </script>

@endsection