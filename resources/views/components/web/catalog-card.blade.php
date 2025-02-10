@props(['catalog'])


<div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
    <a href="{{ route('promociones.index',['slug'=>$catalog->slug]) }}">                         
        <div class="bb-bnr-details relative">
            <div class="bb-image">
                <img src="{{ asset($catalog->images->first()->url) }}" loading="lazy" alt="one" class="w-full rounded-[20px]">
            </div>                                
            <div class="inner-contact w-full h-full p-[30px] absolute top-[0] right-[0] z-[1] flex flex-col justify-between items-end max-[480px]:p-[20px]">
                
                <h4 class="font-Poppins text-[38px] font-extrabold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] text-[#ffffff] leading-[1.2] tracking-[0.03rem] max-[480px]:text-[26px]">{{ $catalog->discount }}%</h4>
                <p class="font-Poppins text-[28px] font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] leading-[32px] text-right text-[#ffffff] tracking-[0.03rem] max-[480px]:text-[16px] max-[480px]:leading-[20px]"> Hasta el {{ $catalog->discount }}% <br> de Descuento</p>
            </div>
        </div>
    </a>
</div>
