<!DOCTYPE html>
<html lang="es">

<head>
    
    @yield('meta')
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta SEO -->       
    <meta name="author" content="Rena Ware Perú - Excelencia Peruana">

    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph para Redes Sociales -->    
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PE">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rena Ware Perú | Cocina Saludable y Oportunidades de Negocio">
    <meta name="twitter:description" content="Descubre la innovación en cocina saludable con Rena Ware. Filtros de agua, utensilios premium y oportunidades de negocio en Perú.">
    <meta name="twitter:image" content="{{ url()->current() }}">
    <meta name="twitter:site" content="@renawareperu">
    
    <!-- Site Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.png') }}" type="image/x-icon">

    @include('layouts.web.head-css')
    
    @include('layouts.web.modal')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JH6W8ZEH5W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JH6W8ZEH5W');
    </script>
            

</head>
<body>
    @include('layouts.web.header') 

    @include('layouts.web.loader')

    @yield('content')

    @include('layouts.web.footer')    
    @include('layouts.web.whatsapp')
    @include('layouts.web.plugins')
    @include('layouts.web.backtop')
    
</body>
</html>
