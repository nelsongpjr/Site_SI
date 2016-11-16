@extends('layouts.layout')

<div id="docentes">
    <div class="container">
        <h2>Corpo Docente Sistemas de <span>Informação</span></h2>
        <hr>

        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                @foreach($docentes as $docente)
                    <div class="item active">
                        <ul class="thumbnails">
                            <li class="col-sm-4">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{asset($docente->caminho)}}"></a>
                                    </div>
                                    <div class="caption">
                                        <h4>{{$docente->nome}}</h4>
                                    {!! $docente->descricao !!}<!--Executa html -->
                                        <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Docentes -->
                @endforeach
                @foreach($egressos as $egresso)
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-sm-4">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{asset($egresso->caminho)}}" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>NOME</h4>
                                        <p>Duvida</p>
                                        <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- egresso-->
                @endforeach
            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>


        </div>
    </div>
</div>
