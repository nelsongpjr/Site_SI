@extends('layouts.layout')

@section('title', 'content')

@include('site.header')
@section('content')


<div id="portfolio">
    <div class="container">
        <h2>Galeria de Imagens</h2>
        <p></p>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current" >Todos</a></li>
                <li><a href="#" data-filter=".docentes" >Docentes</a></li>
                <li><a href="#" data-filter=".egressos" >Egressos</a></li>
                <li><a href="#" data-filter=".laboratorios" >Laboratórios</a></li>
            </ul>
        </div>
    </div>

    <div class="portfolioContainer">
        <div class=" Portfolio-box egressos">
            <a href="#"><img src="images/Docentes/professor02.jpg" class="img-responsive" alt="gallery"></a>
        </div>
        <div class="Portfolio-box docentes">
            <a href="#"><img src="images/Docentes/professor02.jpg" alt=""></a>
        </div>
        <div class=" Portfolio-box egressos">
            <a href="#"><img src="images/Egressos/aluno08.jpg" alt=""></a>
        </div>
        <div class=" Portfolio-box docentes" >
            <a href="#"><img src="images/Docentes/professor01.jpg" alt=""></a>
        </div>
        <div class=" Portfolio-box laboratorios">
            <a href="#"><img src="images/placeholder2.png" alt=""></a>
        </div>
        <div class=" Portfolio-box laboratorios">
            <a href="#"><img src="images/placeholder2.png" alt=""></a>
        </div>
    </div>

</div>
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


<div id="blog">
    <div class="container">
        <h2>Blog Sistemas de <span>Informação</span></h2>
        <hr>
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 01</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 02</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 03</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /Slide1 -->
                <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 04</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 05</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Notícia 06</h4>
                                    <p>Conteúdo da notícia</p>
                                    <a class="btn btn-mini" href="#">Ler mais... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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


<div id="contact">
    <div class="container">
        <h2>Contato</h2>
        <p>Para alguma informação ou dica, envia uma mensagem para nós.</p>
        <div class="col-md-6">
            <div class="contact-form">
                <form action="#" method="post">
                    <input id="name" name="name" type="text" placeholder="Nome:" required>
                    <input id="email" name="email" type="text" placeholder="Email:" required>
                    <input id="subject" name="subject" type="subject" placeholder="Assunto:" required>
                    <textarea id="message" name="message" placeholder="Sua Mensagem:" rows="5" required></textarea>
                    <br>
                    <button name="submit" id="submit" type="submit">Enviar mensagem</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image">
                <img src="images/campus.fw.02.jpg" class="img-responsive">
            </div>
        </div>
    </div>

    <iframe width="100%;" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events: none; margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3542.3903330862067!2d-53.43040758494463!3d-27.394749482922457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fb9db67ed47759%3A0xb194bc9a6b1b44d3!2sUFSM+Campus+Frederico+Westphalen!5e0!3m2!1spt-BR!2sbr!4v1477844561648"></iframe>

</div>



<div class="footer">
    <div class="container">
        <p class="text-muted">Sistemas de informação <a href="http://w3.ufsm.br/frederico">UFSM-FW</a></p>
    </div>
</div>

@endsection