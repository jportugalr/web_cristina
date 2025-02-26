@props(['testimonial'])

<div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
    <div class="flex flex-wrap mx-[-12px] testimonials-row">
        <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
            <div class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                <img src="{{ asset($testimonial->url) }}" alt="testimonials" class="w-full rounded-[30px] block">
            </div>
        </div>
        <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
            <div class="testimonials-contact h-full flex flex-col justify-end">
                <div class="user max-[767px]:flex max-[767px]:items-center">
                    <img src="{{ asset($testimonial->url) }}" alt="testimonials" class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                    <div class="detail">
                        <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">{{ $testimonial->name }}</h4>
                        <span class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#555  ]">{{ $testimonial->job }}</span>
                    </div>
                </div>
                <div class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                    <p class="font-Poppins text-[#686e7d] text-[15px] leading-[25px] tracking-[0.03rem] font-normal">{{$testimonial->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>