@extends('layouts.web.master')

@section('meta')
    <title>{{ $article->title }} | Rena Ware Perú</title>
    <meta name="description" content="{{ Str::limit($article->content, 150) }}">
    <meta name="keywords" content="Rena Ware, {{ $article->title }}, Cocina Saludable, Blog de Salud, Estilo de Vida, Nutrición, Recetas Saludables">

    <meta property="og:title" content="{{ $article->title }} | Blog Rena Ware Perú">
    <meta property="og:description" content="{{ Str::limit($article->content, 150) }}">
    <meta property="og:image" content="{{ asset($article->images->first()->url) }}">    
@endsection

@section('content')

    <!-- Breadcrumb --> 
    <section class="section-breadcrumb mb-[25px] max-[1199px]:mb-[10px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px] ">{{($article->title) }}</h2>
                            
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{ route('inicio') }}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Inicio</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px]  "><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active line-clamp-1">{{ $article->slug }}</li>
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
            <div class="flex flex-wrap mb-[-24px]">
                <div class="min-[1200px]:w-[33.33%] min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                    <div class="bb-blog-sidebar mb-[-24px]">
                        <div class="blog-inner-contact p-[30px] border-[1px] border-solid border-[#eee] mb-[24px] rounded-[20px] max-[575px]:p-[15px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            
                           
                            <div class="blog-sidebar-title mb-[20px]">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] max-[575px]:text-[18px]">Articulos Recientes</h4>
                            </div>

                            @foreach($articles as $article_)
                                <x-web.recent-article-card :article_="$article_" />
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="min-[1200px]:w-[66.66%] min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                    <div class="bb-blog-details-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="inner-blog-details-image mb-[24px]">
                            <img src={{ asset($article->images->first()->url)}} alt="details-one" class="w-full rounded-[15px]">
                        </div>
                        <div class="inner-blog-details-contact mb-[30px]">
                            <span class="font-Poppins mb-[6px] text-[15px] leading-[26px] font-light tracking-[0.02rem] text-[#555]"><!--Fecha--></span>
                            <h4 class="sub-title font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[22px] font-bold text-[#3d4750] max-[575px]:text-[20px]">{{ $article->title }}</h4>

                    
                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">{{$article->intro}}</p>
                            {!! $article->content !!}
                                                        
                            
                            <!-- extra imagenes-->
                            <!--
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="blog-inner-image mb-[24px]">
                                        <img src="assets/img/blog/1.jpg" alt="blog-1" class="w-full rounded-[15px]">
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="blog-inner-image mb-[24px]">
                                        <img src="assets/img/blog/2.jpg" alt="blog-2" class="w-full rounded-[15px]">
                                    </div>
                                </div>
                            </div>
                            -->
                            <!-- extra imagenes-->
                            
                        </div>
                        
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                Fuentes del artículo
                            </h4>
                            <div class="accordion-body p-[1.25rem] hidden">
                                <div class="information">
                                    {!! $article->source !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.web.modal')

@endsection