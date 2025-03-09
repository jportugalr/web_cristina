    <!-- Header -->
    <header class="bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]">
        
        <!-- top bar-->
        <div class="top-header bg-[#3d4750] py-[6px] ">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <div class="inner-top-header flex justify-between max-[768px]:justify-center">
                            <!--barra izquierda-->
                            <div class="col-left-bar max-[768px]:hidden">
                                <a href="{{ route('whatsapp', ['id' =>4]) }}" target="_blank"class="transition-all duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]">Escribenos al WhatsApp</a>
                            </div>
                            
                            <!--barra derecha-->
                            <div class="col-right-bar flex">
                                <div class="cols px-[12px]">
                                    <a href="{{ route('faq') }}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem] max-[768px]:font-medium">Preguntas Frecuentes</a>
                                </div>
                                <div class="cols px-[12px] max-[768px]:hidden">                                    
                                    <a href="{{ route('contacto') }}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Contacto</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bottom-header py-[20px] max-[991px]:py-[15px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <div class="inner-bottom-header flex justify-between max-[767px]:flex-col">
                            <div class="cols bb-logo-detail flex max-[767px]:justify-between">
                                <!-- Header Logo Start -->
                                <div class="header-logo flex items-center max-[575px]:justify-center">
                                    <a href="{{ route('inicio') }}">
                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" class="light w-[125px] max-[991px]:w-[115px] block">                                        
                                    </a>
                                </div>
                                <!-- Header Logo End -->

                            </div>

                            <!-- Buscador -->
                            <div class="cols flex justify-center">
                                <div class="header-search w-[600px] max-[1399px]:w-[500px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]">
                                    <form class="bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]" action="/buscar" method="get">
                                        <div class="inner-select border-r-[1px] border-solid border-[#eee] h-full px-[20px] flex items-center absolute top-[0] left-[0] max-[991px]:hidden">
                                            <div class="custom-select w-[100px] capitalize text-[#555] flex items-center justify-between transition-all duration-[0.2s] ease-in text-[14px] relative">
                                                <span aria-hidden="true" href="#pendiente">Productos</span>
                                            </div>
                                        </div>
                                        <input class="form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[160px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#555] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]" placeholder="Busca aqui..." type="text"name="q">
                                        <button name="search" aria-label="buscar" class="submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]" type="submit">
                                            <i class="ri-search-line text-[18px] leading-[12px] text-[#555]"></i>
                                        </button>
                                    </form>
                                </div>                            
                            </div>
                            
                            <div class="cols bb-icons flex justify-center">
                                <div class="bb-flex-justify max-[575px]:flex max-[575px]:justify-between">
                                    <div class="bb-header-buttons h-full flex justify-end items-center">
                                        <div class="bb-acc-drop relative">

                                        
                                        </div>

                                       
                                        <span aria-hidden="true" href="#pendiente" class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                            <div class="header-icon">
                                                <i class="ri-menu-3-fill text-[22px] text-[#6c7fd8]"></i>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.navbar')


    </header>