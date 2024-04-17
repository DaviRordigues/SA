@extends('layouts.app')
@section('content')
<main class="hero">
    <section class="wrapper">
        <div class="hero_content">
            <div class="hero_img_wrapper">
                <div class="hero_img">
                    <img src="{{ Vite::asset('resources/images/imagemlanding.jpg') }}">
                </div>
            </div>
            <div class="hero_about_wrapper">
                <div class="hero_about">
                    <h4 class="title">Inovação em Tecnologia para um Futuro Sustentável</h4>
                    <div class="main_title">
                        <h3>“A tecnologia é a ponte entre o presente e o futuro. Na TechStore, estamos comprometidos em oferecer as últimas inovações para impulsionar o progresso e proteger o meio ambiente.”
                            <br> <span class="author_name">Equipe TechStore</span>
                        </h3>
                    </div>
                    <div class="tagline">
                        <p>Construa um futuro melhor e conectado com os produtos e serviços da TechStore.</p>
                    </div>
                    <div class="btn_wrapper">
                        <a href="{{ route('login') }}"><button class="btn_contact">Iniciar Sessão</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
