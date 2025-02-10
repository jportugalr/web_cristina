
    <!-- Newsletter Modal -->
    <div class="bb-popnews-box w-full max-w-[600px] p-[24px] fixed left-[50%] top-[50%] bg-[#fff] hidden z-[25] text-center rounded-[15px] overflow-hidden max-[767px]:w-[90%]">
        <div class="bb-popnews-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]" title="Close"></div>
        <div class="flex flex-wrap mx-[-12px]">
            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                <img src="assets/img/newsletter/newsletter.jpg" alt="newsletter" class="w-full rounded-[15px] ">
            </div>
            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                <div class="bb-popnews-box-content h-full flex flex-col items-center justify-center">
                    <h2 class="font-quicksand text-[#3d4750] block text-[22px] leading-[33px] font-semibold mt-[0] mx-[auto] mb-[10px] tracking-[0] capitalize"> 🔥 ¡Llévatelo GRATIS! 🔥 </h2>
                    <p class="font-Poppins font-light tracking-[0.03rem] mb-[8px] text-[14px] leading-[22px] text-[#686e7d]">Sí, así como lo lees. Estos productos Rena Ware pueden ser tuyos sin pagar un solo sol.

                        💥 No pierdas esta oportunidad única</p>
                    <a href="{{ route('whatsapp', ['id' => 6]) }}" target="_blank">
                        <button type="button" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]" name="subscribe">¡Si quiero!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
