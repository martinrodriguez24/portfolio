@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('title')
martinrr.dev
@endsection

@section('content')
<section class="landing flex-start flex-column">
    <div class="content flex-start flex-column" data-aos="fade-up" data-aos-duration="2000">
        <h1>Martin Rodriguez<br>Desarrollador Web</h1>
        <p>Pontencia tu negocio con un sitio web que genere resultados.
            <br>Establece tu presencia online y cautiva a tus clientes con un sitio web adaptable a cualquier dispositivo.<br>
            Optimiza tu web para motores de busqueda, dispositivos moviles y redes sociales.<br>
            Logra tus objetivos comerciales con mis conocimientos en desarrollo web.
        </p>
        <div class="action flex-row">
            <a href="#footer"><button class="button button-dark">Contacto</button></a>
            <a href="#services"><button class="button button-light">Servicios</button></a>
        </div>
    </div>
</section>

<section id="services" class="services-i-offer flex-row flex-start flex-space-between">
    <div class="text flex-column flex-space-between" data-aos="fade-up" data-aos-anchor=".services-i-offer" data-aos-duration="3000">
        <h2>servicios</h2>
        <a href=""><button class="button button-light">Como puedo ayudarte?</button></a>
    </div>
    <div class="services flex-column flex-start">
        <div class="service flex-column flex-start" data-aos="fade-left" data-aos-anchor=".services-i-offer" data-aos-duration="2000">
            <h3>Diseño Web</h3>
            <p>Diseño de paginas web para reflejar tu identidad y generar confianza en tus potenciales clientes. Diseño tu web en base a tus necesidades, valores, productos y servicios para atraer a mas clientes y establecer tu marca en linea</p>
        </div>

        <div class="service flex-column flex-start" data-aos="fade-left" data-aos-anchor=".services-i-offer" data-aos-duration="2000">
            <h3>Desarrollo web</h3>
            <p>Desarrollo soluciones que se alinean a tu marca y objetivos comerciales. Tu sitio web es un activo estrategico para posicionarte sobre la competencia.
                Desarrollo webs que estan optimizadas para los motores de busqueda y redes sociales, aumentando el flujo de clientes y ahorrando tiempo y dinero en estrategias de marketing</p>
        </div>

        <div class="service flex-column flex-start" data-aos="fade-left" data-aos-anchor=".services-i-offer" data-aos-duration="2000">
            <h3>Mantenimiento</h3>
            <p>Mantengo tu web actualizada con las ultimas tendencias y nuevas funcionalidades. Mejorando el alcance de tu web y puliendo cada aspecto para la mejor experiencia del usuario. Podras concentrarte en tus operaciones principales mientras garantizo que tu web sigue siendo un faro de innovacion y satisfaccion al cliente</p>
        </div>

    </div>
    <a href="" class="bottom-button"><button class="button button-light">Como puedo ayudarte?</button></a>
</section>

<section class="my-work flex-column">
    <h2>Mis trabajos</h2>

    <div class="work flex-row flex-start" data-aos="fade-up" data-aos-anchor-placement="bottom" data-aos-duration="2000">
        <img src="{{ asset('media/autonea.png') }}" alt="image">
        <div class="content flex-column flex-center">
            <div class="flex-column flex-start">
                <h3>autonea.com</h3>
                <p>Entiendo el poder de un sitio bien diseñado y posicionado en buscadores. Junto a un equipo de desarrolladores creamos un sitio que muestra a la perfeccion los servicios y modelos disponibles, posicionandolos sobre la competencia en internet y aumentando la cantidad de clientes.</p>
                <a href="https://autonea.com" target="_blank"><button class="button button-transparent button-dark">Visitar sitio</button></a>
            </div>
        </div>
    </div>

    <div class="work flex-row flex-start" data-aos="fade-up" data-aos-anchor-placement="bottom" data-aos-duration="2000">
        <img src="{{ asset('media/misplantas.png') }}" alt="image">
        <div class="content flex-column flex-center">
            <div class="flex-column flex-start">
                <h3>misplantas.online</h3>
                <p>Converti una pasion por las plantas en una tienda y blog online, centrandome en la navegacion intuitiva y capacidad de respuesta en celulares, construi un sitio completo desde 0 en el que los usuarios pueden ver facilmente el catalogo de plantas e informarse de tips y cuidados.</p>
                <a href="https://www.misplantas.online" target="_blank"><button class="button button-transparent  button-dark">Visitar sitio</button></a>
            </div>
        </div>
    </div>

    <div class="work flex-row flex-start" data-aos="fade-up" data-aos-anchor-placement="bottom" data-aos-duration="2000">
        <img src="{{ asset('media/zudael.png') }}" alt="image">
        <div class="content flex-column flex-center">
            <div class="flex-column flex-start">
                <h3>zudaelviajes.tur.ar</h3>
                <p>Un sitio web que muestra los valores y el cuidado excepcional en zudael viajes, reflejando perfectamente su identidad, he creado un diseño atractivo y centrado en el usuario para una experiencia positiva e invitar a los visitantes a disfrutar de los viajes desde Chaco al mundo.</p>
                <a href="https://zudaelviajes.tur.ar" target="_blank"><button class="button button-transparent  button-dark">Visitar sitio</button></a>
            </div>
        </div>
    </div>

    <!-- <div class="action flex-column flex-center">
        <a href=""><button class="button button-light">See all</button></a>
    </div> -->
</section>

<section class="call-to-action flex-column flex-center" data-aos="fade-down" data-aos-anchor=".work:nth-child(3)" data-aos-duration="3000">
    <h2>¿Necesitas un sitio web que convierta visitantes en clientes?</h2>
    <p>Déjame ayudarte a alcanzar tus objetivos online, contácteme hoy</p>
    <div class="action flex-column flex-start">
        <a href=""><button class="button button-dark">Presupuesto sin Costo</button></a>
    </div>
</section>

@endsection