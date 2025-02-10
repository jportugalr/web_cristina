    <!-- Testimonials -->
    <section class="section-testimonials overflow-hidden py-[100px] max-[1199px]:py-[70px] max-[991px]:p-[0]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-testimonials relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <img src="assets/img/testimonials/img-1.png" alt="testimonials-1" class="testimonials-img-1 z-[-1] h-[70px] w-[70px] absolute top-[0] left-[25px] rounded-[20px] rotate-[-10deg] max-[1399px]:h-[60px] max-[1399px]:w-[60px] max-[1399px]:left-[10px] max-[1199px]:hidden">
                        <img src="assets/img/testimonials/img-2.png" alt="testimonials-2" class="testimonials-img-2 z-[-1] h-[50px] w-[50px] absolute bottom-[0] left-[0] rounded-[15px] rotate-[15deg] blur-[3px] max-[1199px]:hidden">
                        <img src="assets/img/testimonials/img-3.png" alt="testimonials-3" class="testimonials-img-3 z-[-1] h-[60px] w-[60px] absolute top-[-50px] right-[500px] rounded-[20px] rotate-[-30deg] blur-[3px] max-[991px]:hidden">
                        <img src="assets/img/testimonials/img-4.png" alt="testimonials-4" class="testimonials-img-4 z-[-1] h-[60px] w-[60px] absolute top-[50px] right-[250px] rounded-[20px] rotate-[15deg] max-[1399px]:top-[20px] max-[991px]:hidden">
                        <img src="assets/img/testimonials/img-5.png" alt="testimonials-5" class="testimonials-img-5 z-[-1] h-[70px] w-[70px] absolute top-[0] right-[20px] rounded-[20px] blur-[3px] max-[991px]:hidden">
                        <img src="assets/img/testimonials/img-6.png" alt="testimonials-6" class="testimonials-img-6 z-[-1] h-[60px] w-[60px] absolute bottom-[30px] right-[100px] rounded-[20px] rotate-[-25deg] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1399px]:right-[50px] max-[1199px]:right-[0] max-[991px]:hidden">
                        <div class="inner-banner rotate-[270deg] absolute top-[0] z-[-1] left-[150px] bottom-[0] max-[1399px]:left-[110px] max-[1199px]:left-[30px] max-[991px]:hidden">
                            <h4 class="font-quicksand text-[#fff] tracking-[0.03rem] opacity-[0.15] text-[42px] font-bold leading-[1.2] max-[1399px]:text-[38px] max-[1199px]:text-[34px]">Testimonios</h4>
                        </div>
                        
                        <div class="owl-carousel testimonials-slider">
                            
                        @foreach ($testimonials as $testimonial)
                            <x-web.testimonial-card :testimonial="$testimonial" />                            
                        @endforeach
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>