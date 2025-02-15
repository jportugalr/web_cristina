<!-- Footer -->
<footer class="bb-footer mt-[50px] max-[1199px]:mt-[35px] bg-[#f8f8fb] text-[#fff]">
    <div class="footer-directory py-[50px] max-[1199px]:py-[35px] border-[1px] border-solid">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="directory-title mb-[24px] text-center">
                        <h4 class="font-quicksand leading-[1.2] text-[16px] font-bold text-[#3d4750] tracking-[0] uppercase">Etiquetas</h4>
                    </div>

                    <!--Etiquetas-->
                    <div class="directory-contact mb-[-24px]">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[992px]:w-[100%] w-full px-[12px] ">
                                <div class="inner-contact mb-[24px]">
                                    <ul class="flex flex-wrap">
                                        <li>
                                            <a href="" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize"></a>
                                        </li>
                              
                                        @foreach ( $tags as $tag )
                                            <li>                                               
                                                <a href="" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">{{ $tag->tag }}</a>
                                            </li>  
                                        @endforeach
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="footer-container border-t-[1px] border-solid border-[#eee]">
        <div class="footer-top py-[50px] max-[1199px]:py-[35px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full max-[991px]:mb-[-30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cat">
                        <div class="bb-footer-widget bb-footer-company flex flex-col max-[991px]:mb-[24px]">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" class="bb-footer-logo max-w-[144px] mb-[5px] max-[767px]:max-w-[130px]">
                                                                                
                            <p class="bb-footer-detail max-w-[400px] mb-[30px] p-[0] font-Poppins text-[14px] leading-[27px] font-normal text-[#686e7d] inline-block relative max-[1399px]:text-[15px] max-[1199px]:text-[14px]">Rena Ware, líder en innovación y bienestar, transforma vidas y hogares peruanos con productos de calidad que trascienden generaciones</p>

                        </div>
                    </div>
                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-info">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Encuentranos en</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="3" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Amazonas</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="{{ route('location.departamento',['slug'=>'piura']) }}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Áncash</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="{{ url('/peru/piura') }}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Apurímac</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Arequipa</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Ayacucho</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Cajamarca</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Cusco</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Huancavelica</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-account">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Todo</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Huánuco</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Ica</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Junín</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware La Libertad</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Lambayeque</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Lima</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Loreto</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Madre de Dios</a>
                                    </li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-service">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Perú</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Moquegua</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Pasco</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Piura</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Puno</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware San Martín</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Tacna</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Tumbes</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Rena Ware Ucayali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cont-social">
                        <div class="bb-footer-contact mb-[30px]">
                            <div class="bb-footer-widget">
                                <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Contacto</h4>
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center">
                                        <li class="bb-footer-link bb-foo-call flex items-center max-[991px]:mb-[15px] mb-[16px]">
                                            <a href="{{ route('whatsapp', ['id' => 4]) }}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">
                                                <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i class="ri-whatsapp-line leading-[0] text-[18px] text-[#f35034]"></i>
                                                </span>
                                           
                                            990 009 542</a>
                                        </li>
                                        <li class="bb-footer-link bb-foo-mail  items-center">
                                            <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                <i class="ri-mail-line leading-[0] text-[18px] text-[#f35034]"></i>
                                            </span>
                                            <a href="mailto:maria_roman58@hotmail.com" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">maria_roman58@hotmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Social -->
                        <div class="bb-footer-social">
                            <div class="bb-footer-widget">
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center flex flex-wrap items-center">
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#f35034] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-facebook-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#f35034] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-twitter-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#f35034] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-linkedin-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#f35034] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-instagram-line text-[16px] text-[#fff]"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social -->
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-[10px] border-t-[1px] border-solid border-[#eee] max-[991px]:py-[15px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="bb-bottom-info w-full flex flex-row items-center justify-center max-[991px]:flex-col px-[12px]">
                        <div class="footer-copy max-[991px]:mb-[15px]">
                            <div class="footer-bottom-copy max-[991px]:text-center">
                                <div class="bb-copy text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal leading-[2]">Organización <span class="text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal" id="copyright_year"></span>
                                    <a class="site-name transition-all duration-[0.3s] ease-in-out font-medium text-[#6c7fd8] hover:text-[#3d4750] font-Poppins text-[15px] leading-[28px] tracking-[0.03rem]" href="javascript:void(0)">Excelencia Peruana</a> derechos reservados.
                                </div>                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>