<!-- resources/views/components/navbar.blade.php -->
@php
    $navLinks = [
        ['url' => route('inicio'), 'label' => 'Inicio','pattern'=>'inicio'],
        ['url' => route('productos.index'), 'label' => 'Productos', 'pattern' => 'productos*'],
        ['url' => '/promociones/especiales-bienvenido-2025', 'label' => 'Descuentos Especiales', 'pattern'=>'promociones/especiales-bienvenido-2025*'],
        ['url' => '/promociones/flash-verano', 'label' => '6 Meses sin Intereses', 'pattern'=>'promociones/flash-verano*'],
        ['url' => route('blog.index'), 'label' => 'Blog', 'pattern' => 'blog*'],
        ['url' => route('nosotros'), 'label' => 'Nosotros', 'pattern' => 'nosotros*'],
    ];
@endphp

<div class="bb-main-menu-desk bg-[#fff] py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-inner-menu-desk flex max-[1199px]:relative max-[991px]:justify-between">
                    <div class="bb-main-menu relative flex flex-[auto] justify-start max-[991px]:hidden" id="navbarSupportedContent">                        
                        <ul class="navbar-nav flex flex-wrap flex-row ">
                            @foreach ($navLinks as $link)                               

                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class=" {{ Request::is($link['pattern']) ? 'text-decoration-line: underline text-[#113555] font-extrabold bg-gray-100' : 'text-[#3d4750] hover:text-white' }} nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium  block tracking-[0.03rem]" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>                           
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]"></div>

<div id="bb-mobile-menu" class="bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]">
    <div class="bb-menu-title w-full pb-[10px] flex flex-wrap justify-between">
        <span class="menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]">Rena Ware</span>
        <button type="button" class="bb-close-menu relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent">×</button>
    </div>
    <div class="bb-menu-inner">
        <div class="bb-menu-content">
            <ul>

                @foreach ($navLinks as $link)                               

                                <li class="relative">
                                    <a class=" {{ Request::is($link['pattern']) ? 'text-decoration-line: underline text-[#113555] font-extrabold bg-gray-100' : 'text-[#3d4750] hover:text-white' }} nav-link transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
 
            </ul>
        </div>
        <div class="header-res-lan-curr">
            <!-- Social Start -->
            <div class="header-res-social mt-[30px]">
                <div class="header-top-social">
                    <ul class="flex flex-row justify-center mb-[0]">
                        <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                            <a aria-hidden="true" href="#pendiente" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-facebook-fill text-[#fff] text-[15px]"></i></a>
                        </li>
                        <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                            <a aria-hidden="true" href="#pendiente" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-twitter-fill text-[#fff] text-[15px]"></i></a>
                        </li>
                        <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                            <a aria-hidden="true" href="#pendiente" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-instagram-line text-[#fff] text-[15px]"></i></a>
                        </li>
                        <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px]">
                            <a aria-hidden="true" href="#pendiente" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-linkedin-fill text-[#fff] text-[15px]"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Social End -->
        </div>
    </div>
</div>