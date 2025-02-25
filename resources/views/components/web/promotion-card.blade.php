@props(['promotion'])

<div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
        
                
        <!-- Imagen del producto -->
        <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
            
            <!-- boton comprar -->
            <ul class="bb-pro-actions transition-all duration-[0.3s] my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[1]">
                <li class="bb-btn-group transition-all duration-[0.3s]  h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#25D366] border-[1px] border-solid border-[#eee] rounded-[10px]">
                    <a href="{{ route('whatsapp',['id'=>2, 'producto'=>$promotion->name]) }}" target="_blank" title="Wishlist" class="text-lg h-[35px] flex items-center justify-center ml-1 mr-1">
                        <i class="ri-whatsapp-line transition-all duration-[0.3s]  text-[20px] text-[#fff] leading-[10px] mr-2"></i> Consulta disponibilidad
                    </a>
                </li>
            </ul>

            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">   
                     
                <span class="text-xs text-[#555] font-medium uppercase">{{ $promotion->details->first()->product->category->name }}</span>
            </span>
                        

            <a href="{{ route('promociones.mostrar',['catalogo'=>$promotion->catalog->slug,'slug'=>$promotion->slug])}}">
               
                <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">                   
                     
                    <img loading="lazy" class=" transition-all duration-[0.3s] ease-in-out w-full" src="{{ asset($promotion->images->first()->url) }}"
                        alt="product-1">
                        
                    <div class="bb-offers py-[5px] px-[15px] absolute top-[20px] right-[20px] bg-[#ff2525] opacity-[0.8] rounded-[15px]">
                        <span class="text-[14px] font-bold text-[#fff]">Descuento {{ $promotion->discount }}%</span>
                    </div>

                    <img loading="lazy" class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="{{ asset($promotion->images->first()->url) }}"
                        alt="product-1"> 

                   
                </div>
            </a>
            <!-- Imagen regalo -->
            <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20x] pl-[10px] rounded-tl-[30px]">                          
                <img loading="lazy" src="{{asset($promotion->catalog->complement)}}" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
            </div>


        </div>

        <!-- Detalles del producto -->
        <div class="bb-pro-contact p-[20px]">
            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-start">  

                    @foreach ($promotion->details->first()->product->tags as $tag)
                        <a href="#pendiente" class="text-xs text-gray-300 font-extralight">  {{ $tag->tag->tag }}</a>
                        <a href="#pendiente" class="text-xs text-gray-300 font-extralight ml-1 mr-1"> | </a>
                    @endforeach               
            </div>

            <h4 class="bb-pro-title mb-[8px] leading-[18px]">
            <a href="{{ route('promociones.mostrar',['catalogo'=>$promotion->catalog->slug,'slug'=>$promotion->slug]) }}" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-xl leading-[18px] text-[#162c48] font-bold tracking-[0.03rem]">{{ $promotion->name }}</a></h4>

            <div class="bb-price flex flex-wrap justify-between">
                <div class="inner-price mx-[-3px]">                    
                    <span class="px-[3px] text-ellipsis line-clamp-2  text-sm text-[#686e7d] font-light"> {{ $promotion->description }}</span>                    
                </div>
            </div>
        </div>
        
    </div>
</div>