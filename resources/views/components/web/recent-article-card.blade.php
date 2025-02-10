@props(['article_'])

<div class="blog-sidebar-card mb-[24px] p-[15px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] flex max-[991px]:flex-row max-[360px]:flex-col">
    <a href="{{ route('blog.articulos.mostrar',['slug'=>$article_->slug])}}">
        <div class="inner-image mr-[15px] max-[991px]:mr-[20px] max-[991px]:mb-[0] max-[360px]:mr-[0] max-[360px]:mb-[15px]">
            <img src={{ asset($article_->images->first()->url)}} alt="blog" class="max-w-[80px] rounded-[20px] max-[360px]:max-w-full">
        </div>
    </a>
    <div class="blog-sidebar-contact">
        <span class="font-Poppins text-[13px] font-normal leading-[26px] tracking-[0.02rem] text-[#6c7fd8]"></span>
        
        <h4 class="text-[15px] mb-[8px] leading-[1.2]"><a href="{{ route('blog.articulos.mostrar',['slug'=>$article_->slug])}}" class="font-Poppins tracking-[0.03rem] text-[15px] font-medium leading-[18px] text-[#3d4750]">{{ $article_->title }}</a></h4>
        <p class="font-Poppins tracking-[0.03rem] text-[13px] leading-[16px] font-light text-[#686e7d]">{{ $article_->created_at }}</p>
    </div>
</div>