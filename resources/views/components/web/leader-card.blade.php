@props(['leader'])

<div class="bb-team-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="bb-team-img mb-[20px] relative h-full flex items-center overflow-hidden">
        <div class="bb-team-socials transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-tl-[20px] rounded-bl-[20px] absolute right-[-38px]">
            <div class="inner-shape relative"></div>
            <ul class="mb-[0] py-[20px] px-[10px]">
                <li class="bb-social-link leading-[28px] pb-[10px]">
                    <span href="#pendiente" aria-hidden="true"><i class="ri-facebook-fill text-[16px] hover:text-[#6c7fd8]"></i></span>
                </li>
                <li class="bb-social-link leading-[28px] pb-[10px]">
                    <span href="#pendiente" aria-hidden="true"><i class="ri-twitter-x-fill text-[16px] hover:text-[#6c7fd8]"></i></span>
                </li>
                <li class="bb-social-link leading-[28px]">
                    <span href="#pendiente" aria-hidden="true"><i class="ri-linkedin-fill text-[16px] hover:text-[#6c7fd8]"></i></span>
                </li>
            </ul>
        </div>
        <img src={{ asset($leader->image) }} alt="team-1" class="w-full rounded-[20px]">
    </div>
    <div class="bb-team-contact text-center">
        <h5 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[18px] font-bold text-[#3d4750]">{{ $leader->name }}</h5>
        <p class="font-Poppins font-light leading-[28px] tracking-[0.03rem] text-[15px] text-[#686e7d]">{{ $leader->position }}</p>
    </div>
</div>