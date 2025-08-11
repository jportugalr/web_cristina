<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DataRepository;

class RouteController extends Controller
{

    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index() {
        $products = $this->repository->getActiveProducts(8);

        $catalogs = $this->repository->getActiveCatalogs();

        $testimonials = $this->repository->getActiveTestimonials();
        
        $faqs = $this->repository->getFaqs([1, 25, 26, 3, 27]);

        $articles = $this->repository->getArticles(5);

        return view('index', [
            'products' => $products,
            'catalogs' => $catalogs,
            'testimonials' => $testimonials,
            'faqs' => $faqs,
            'articles' => $articles
        ]);
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
        $testimonials =  $this->repository->getActiveTestimonials();
        $leaders = $this->repository->getActiveLeaders();

        return view('about-us', [
            'testimonials' => $testimonials,
            'leaders' => $leaders
        ]);
    }

    public function faq(){
        $faqs = $this->repository->getFaqs(); 

        $tags = $this->repository->getTags(true);

        $testimonials = $this->repository->getActiveTestimonials();
        
        return view('faq', [
            'testimonials' => $testimonials,
            'faqs' => $faqs,
            'tags' => $tags
        ]);
    }

    public function contact(){
        return view('contact-us');
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
