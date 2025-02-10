@props(['article'])

<div class="min-[992px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="bb-blog-card bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
        <a href="{{ route('blog.articulos.mostrar',['slug'=>$article->slug]) }}">
            <div class="blog-image">
                
                <img src="{{ asset($article->images->first()->url) }}" alt="blog-1" class="w-full rounded-tl-[20px] rounded-tr-[20px]">
            </div>
        </a>
        <div class="blog-contact p-[20px]">
            <h5 class="mb-[12px] text-[18px] leading-[1.2]"><a href="javascript:void(0)" class="font-Poppins leading-[28px] tracking-[0.03rem] text-[18px] font-medium text-[#3d4750]">{{ $article->title }}</a></h5>
            <p class="font-Poppins tracking-[0.03rem] text-ellipsis  line-clamp-3 mb-[12px] text-[14px] leading-[26px] font-light">{{$article->intro}}</p>
            <div class="blog-btn flex">
                <a href="{{ route('blog.articulos.mostrar',['slug'=>$article->slug]) }}" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[14px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Leer más...</a>
            </div>
        </div>
    </div>
</div>