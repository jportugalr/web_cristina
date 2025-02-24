@props(['article'])



<div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="blog-img">
        <img src="{{ asset($article->images->first()->url) }}" alt="{{ $article->slug }}" class="transition-all duration-[0.3s] ease-in-out w-full block">
    </div>
    <div class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
        <span class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">{{$article->updated_at}}</span>
        <h4 class="text-[16px] leading-[1.2]"><a href="{{ route('blog.articulos.mostrar',['slug'=>$article->slug]) }}" class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">{{ $article->title }}</a></h4>
    </div>
</div>