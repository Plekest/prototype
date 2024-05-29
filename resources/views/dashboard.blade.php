{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalhes do Evento</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detalhes do Evento</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detalhes do Evento</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Ingressos Disponíveis</span>
                                        <span class="info-box-number text-center text-muted mb-0">1254</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Ingressos Vendidos</span>
                                        <span class="info-box-number text-center text-muted mb-0">873</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>Convidados</h4>
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F1102341%2Fpexels-photo-1102341.jpeg%3Fcs%3Dsrgb%26dl%3Dpexels-daniel-xavier-1102341.jpg%26fm%3Djpg&f=1&nofb=1&ipt=fe7fc032f543ff1b7a6d3227dc58aa07cf68a58d0d538421c9bf7695e08a538e&ipo=images"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">Luísa Monteiro</a>
                                        </span>
                                        <span class="description">A Estrela do Pop Nacional</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Prepare-se para uma noite inesquecível com Luísa Monteiro, a diva do pop que
                                        conquistou o país com seu carisma e talento inigualáveis. Conhecida por seus
                                        sucessos estrondosos e performances eletrizantes, Luísa trará para o palco um
                                        espetáculo recheado de coreografias incríveis, cenários deslumbrantes e, claro, seus
                                        maiores hits. Não perca a chance de ver essa superestrela em ação, num show que
                                        promete encantar e emocionar!
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo
                                            File 1 v2</a>
                                    </p>
                                </div>

                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F4559763%2Fpexels-photo-4559763.jpeg%3Fauto%3Dcompress%26cs%3Dtinysrgb%26h%3D750%26w%3D1260&f=1&nofb=1&ipt=4d5bf8619e52b3db8a34cb3d6844100265b5e207901a9ac18f4d014036f545ef&ipo=images"
                                            alt="User Image">
                                        <span class="username">
                                            <a href="#">Ricardo Valente</a>
                                        </span>
                                        <span class="description">O Humorista do Momento</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Ricardo Valente, o comediante que vem arrancando risadas por onde passa, está de
                                        volta para um show especial. Com seu estilo único de humor inteligente e observações
                                        hilárias sobre o cotidiano, Ricardo promete uma noite de gargalhadas e diversão sem
                                        fim. Seus shows são um verdadeiro fenômeno, sempre lotados e cheios de energia.
                                        Venha se divertir com as piadas e histórias que só ele sabe contar!
                                    </p>
                                    <p>
                                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo
                                            File 2</a>
                                    </p>
                                </div>

                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fget.pxhere.com%2Fphoto%2Fperson-people-smile-udgagora-endurance-sports-346590.jpg&f=1&nofb=1&ipt=28ce8430b860f210a2d8333d3719c8118b0620634a9db4a0c48d33040b5702d1&ipo=images"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">Catarina Braga</a>
                                        </span>
                                        <span class="description">A Autora Revelação</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        A autora best-seller Catarina Braga estará presente para uma sessão de autógrafos e
                                        bate-papo exclusivo sobre seu mais novo livro, "Entre o Amor e a Tempestade".
                                        Conhecida por suas narrativas envolventes e personagens cativantes, Catarina
                                        conquistou uma legião de fãs com suas obras emocionantes. Este evento é uma
                                        oportunidade imperdível para conhecer de perto a mente brilhante por trás das
                                        histórias que tanto amamos e garantir um autógrafo pessoalmente!
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo
                                            File 1 v1</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-map"></i> Local / Horário</h3>
                        <p class="text-muted">Local: Estádio Mané Garrincha - Brasília DF</p>
                        <p class="text-muted">Horário: 19:00</p>
                        <div class="text-muted">
                            <p class="text-sm">Google Maps
                                <a href=""><b class="d-block">https://google.com.br/CxXyc</b></a>
                            </p>
                        </div>

                        <h5 class="mt-5 text-muted">Documentos do evento</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                    Edital de Abertura</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                    Documentos Necessários</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                    Informações para Menores</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                                    Email: EventeX@eventos.df.com.br</a>
                            </li>
                        </ul>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm btn-primary">Adicionar Arquivos</a>
                            <a href="#" class="btn btn-sm btn-warning">Reportar Erro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
@stop
