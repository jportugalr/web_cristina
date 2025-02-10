<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Faq;
use App\Models\Leader;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Tag;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        //$products = Product::inRandomOrder()->limit(8)->get(); 
        $products = Product::with('category','tags','images')
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        $catalogs = Catalog::with('promotions','promotions.details','promotions.details.product.tags','promotions.details.product.images','images')
            ->where('status', 1)
            ->get();
         
        //$testimonials= Testimonial::all()->where('status', 1);
        $testimonials = Testimonial::where('status', 1)->get();
        
        //$tags = Tag::inRandomOrder()->get();      
        $tags = Tag::where('status', 1)->get();
        
        
        

        return view('index', ['products' => $products, 'tags' => $tags, 'catalogs' => $catalogs,  'testimonials' => $testimonials]);
    }

    public function comingsoon() {

        return view('pages-coming-soon');
    }

    public function routes(Request $request) {
        if(view()->exists($request->path())) {
            return view($request->path());
        } else {
            return abort(404);
        }
    }

    public function about(){
        $tags = Tag::inRandomOrder()->get();   
        $testimonials= Testimonial::all()->where('status', 1);
        $leaders = Leader::all()->where('status', 1);

        return view('about-us',['tags' => $tags, 'testimonials' => $testimonials, 'leaders' => $leaders]);
    }

    public function faq(){
        $faqs = Faq::all();
        $tags = Tag::inRandomOrder()->get();   
        $testimonials= Testimonial::all()->where('status', 1);

        return view('faq',['tags' => $tags, 'testimonials' => $testimonials, 'faqs' => $faqs]);
    }

    public function contact(){
        $tags = Tag::inRandomOrder()->get();           

        return view('contact-us',['tags' => $tags]);
    }
  
    public function whatsapp($id, $text=null) {
        
        if($id==1){
            $mensaje = "Hola, me interesa el producto ". urlencode($text). " pero quiero asegurarme de que sea el adecuado para mí. ¿Podrían ayudarme con más detalles y asesoría personalizada?";
        } else if($id==2){
            $mensaje = "¡Hola! Vi que hay promociones especiales en su página. Me gustaría conocer los detalles de  ". urlencode($text). " y saber cómo puedo aprovecharlos antes de que se acaben.";
        } else if($id==3){
            $mensaje = "¡Hola! He escuchado cosas muy buenas sobre Rena Ware y su modelo de negocio. ¿Me podrían explicar cómo puedo empezar y qué apoyo ofrecen a los nuevos asesores?";
        } else if($id==4){
            $mensaje = "¡Hola! Quisiera recibir más información sobre Rena Ware. Estoy explorando opciones y me interesa saber qué los hace diferentes.";
        } else if($id==5){
            $mensaje = "¡Hola! Estuve revisando la información de sus preguntas frecuentes, pero tengo algunas dudas y me gustaría recibir su ayuda para aclararlas. ¿Podrían asesorarme, por favor?";
        } else{
            $mensaje = "¡Hola! Vi que puedo llevarme estos productos Rena Ware GRATIS y quiero saber más sobre el programa. ✨ 👉 ¡Estoy listo para comenzar!";
        }    

        return redirect("https://wa.me/51990009542?text=$mensaje");
    }
        
}
