@props(['product'])

<div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">

    <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
     
        <!-- Product Image -->
        <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
            
            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">   
                      
                <span class="text-xs text-[#555] font-medium uppercase">{{ $product->category->name }}</span>
            </span>
            
            <a href="{{ route('productos.mostrar',['slug'=>$product->slug]) }}">
                <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                     
                    <img loading="lazy" class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="{{ asset($product->images->first()->url) }}"
                        alt="product-1">
                </div>
            </a>

            <!-- boton comprar -->
            <ul class="bb-pro-actions transition-all duration-[0.3s] my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[1]">
                <li class="bb-btn-group transition-all duration-[0.3s]  h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#25D366] border-[1px] border-solid border-[#eee] rounded-[10px]">
                    <a href="{{ route('whatsapp',['id'=>2, 'producto'=>$product->name]) }}" target="_blank" title="Wishlist" class="text-lg h-[35px] flex items-center justify-center ml-1 mr-1">
                        <i class="ri-whatsapp-line transition-all duration-[0.3s]  text-[20px] text-[#fff] leading-[10px] mr-2"></i> 
                        <span>Consulta</span>
                    </a>
                </li>
            </ul>
       
        </div>
     

        <!-- Product Details -->
        <div class="bb-pro-contact p-[20px]">
            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-start">                                
                @foreach ($product->tags as $tag)
                    <span href="#pendiente" aria-hidden="true" class="text-xs">  {{ $tag->tag->tag }}</span>
                    <span href="#pendiente" aria-hidden="true" class="text-xs ml-1 mr-1"> | </span>
                @endforeach               
            </div>

            <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
            <a href="{{ route('productos.mostrar',['slug'=>$product->slug]) }}" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#162c48] font-bold tracking-[0.03rem]">{{ $product->name }}</a></h4>

            <div class="bb-price flex flex-wrap justify-between">
                <div class="inner-price mx-[-3px]">
                    <span class="px-[3px] text-ellipsis line-clamp-2  text-xs text-[#686e7d] font-light"> {{ $product->description }}</span>                    
                </div>
            </div>
        </div>
        
    </div>
</div>