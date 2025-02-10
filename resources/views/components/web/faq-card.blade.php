@props(['faq'])

<div class="bb-accordion-item overflow-hidden mb-[24px]">
    <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#162c48] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
        {{ $faq->question }}
    </h4>
    <div class="accordion-body px-[15px] pt-[15px] hidden">
        <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">{!! $faq->answer !!}</p>
    </div>
</div>