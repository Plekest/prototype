@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Eventos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Eventos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Eventos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://confirp.com.br/wp-content/uploads/2022/04/Setor-de-Evento.jpg'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        The Noite Love<br />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://agendor-blog-uploads.s3.sa-east-1.amazonaws.com/2021/07/29161146/como-vender-eventos-corporativos.jpg'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        O Conceito da Arte Moderna <br />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://www.revistaadnormas.com.br/uploads/2018/05/espa%C3%A7o-para-eventos-corporativos.png'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        Congresso como uma Cúpula<br />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://veja.abril.com.br/wp-content/uploads/2023/03/image002.jpg?quality=90&strip=info&w=720&h=440&crop=1'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        VideoGamesShow <br />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://images.sympla.com.br/63dae571acbe6.jpg'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        Festival do Japão<br />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px; background-image: url('https://foradazonadeconforto.com/wp-content/uploads/2019/10/tomorrowland-1024x576.jpg'); background-size: cover; background-position: center;">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-primary">
                                                Novidade
                                            </div>
                                        </div>
                                        The Cronks La Ventura <br />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <div class="position-relative">
                                        <img src="https://educacao.sme.prefeitura.sp.gov.br/wp-content/uploads/Portals/1/Images/noticias_outubro_2015/21208.jpg" alt="Photo 1" class="img-fluid">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success text-lg">
                                                Em Breve
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative">
                                        <img src="https://gpsbrasilia.com.br/wp-content/uploads/2024/05/nicolandia_foto02-1024x683.jpg" alt="Photo 2" class="img-fluid">
                                        <div class="ribbon-wrapper ribbon-xl">
                                            <div class="ribbon bg-warning text-lg">
                                                Em Breve
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative" style="min-height: 180px;">
                                        <img src="https://zffprda1apista001.blob.core.windows.net/moinhosshopping-wp-uploads/2022/05/AF_MOSH_2022_Namorados_Web_Site_Banner_Horizontal-1-1024x580.jpg" alt="Photo 3" class="img-fluid">
                                        <div class="ribbon-wrapper ribbon-xl">
                                            <div class="ribbon bg-danger text-xl">
                                                Em Breve
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@stop

@section('js')

@stop
