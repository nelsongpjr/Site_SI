<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistemas de  <span>Informação</span></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#mainCarousel">Home</a>
                </li>
                <li>
                    <a href="#about">Sobre</a>
                </li>
                <li>
                    <a href="#portfolio">Imagens</a>
                </li>
                <li>
                    <a href="#docentes">Docentes</a>
                </li>
                <li>
                    <a href="#blog">Notícias</a>
                </li>
                <li>
                    <a href="#contact">Contato</a>
                </li>

            </ul>
        </div>

    </div>

</nav>


<header id="mainCarousel" class="carousel slide">

    <ol class="carousel-indicators">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <!-- <li data-target="#mainCarousel" data-slide-to="2"></li> -->
    </ol>


    <div class="carousel-inner">
        <div class="item active">
            <div class="slider_overlay"></div>

            <div class="fill" style="background-image:url('images/fundo01.jpg');">
                <div class="hero">
                    <hgroup>
                        <h1>Sistemas de Informação</h1>
                        <h3>Bem vindo ao site do curso</h3>
                    </hgroup>
                    <button onclick="location.href='http://w3.ufsm.br/frederico/index.php?option=com_content&view=article&id=158&Itemid=260'" class="btn btn-hero btn-lg" role="button">Mais...</button>
                </div>
            </div>
        </div>
        <div class="item">

            <div class="slider_overlay"></div>
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/campus.fw.jpg');">
                <div class="hero">
                    <hgroup>
                        <h1>UFSM Frederico Westphalen</h1>
                        <h3>A unidade da UFSM, em Frederico Westphalen</h3>
                    </hgroup>
                    <button onclick="location.href='http://w3.ufsm.br/frederico/'" class="btn btn-hero btn-lg" role="button">Mais...</button>
                </div>
            </div>
        </div>
        <!--<div class="item">
           <div class="slider_overlay"></div>

           <div class="fill" style="background-image:url('images/slide3.jpg');">
               <div class="hero">
                   <hgroup>
                       <h1>Per ei prima ridens oblique</h1>
                       <h3>Lorem ipsum dolor sit amet, summo populo menandri</h3>
                   </hgroup>
               </div>
           </div>
       </div>
   </div>-->

        <!-- Controls -->
        <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mainCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>

<div id="about">
    <div class="container">
        <div class="text">
            <h2>Sobre o curso</h2>
            <hr>
            <p>O Bacharel em Sistemas de Informação é o profissional que usa conceitos e
                técnicas de informática e teoria de sistemas para contribuir na solução de problemas
                de tratamento da informação nas organizações por meio da construção de modelos de
                automação corporativa. Ele deve ter espírito empreendedor que lhe permita conceber,
                criar e concretizar projetos de tratamento d</p>
        </div>

        <div class="col-md-6">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">Missão</h4>
                        </div>
                    </span>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <!-- Tab content goes here -->
                            <p>O Curso de Sistemas de Informação da UFSM campus Frederico Westphalen possui módulo semestral, com modalidade presencial, turno noturno, com disponibilidade de 40 vagas anuais. O Curso possui carga horária de 3000 horas, de 10 a 15 semestres (no máximo). O objetivo geral do Curso é formar profissionais de nível superior com domínio e capacidade para trabalhar na área da Computação, desenvolvendo projetos de software e serviços de computação e informação, atentos ao caráter ecológico, social, ético e responsável no exercício de suas atividades na sociedade.
                        </div>
                    </div>
                </div>
                <!-- / panel 1 -->

                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">Perfil do Egresso</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <!-- Tab content goes here -->
                            <p>Os profissionais formados no Curso de Sistemas de Informação pela UFSM campus Frederico Westphalen possuirão as capacidades de resolver as seguintes classes de problemas: desenvolvimento de software como produto ou serviço usando ambientes de desenvolvimento de sistemas; projeto e desenvolvimento de sistemas de estruturação de informação; projeto e desenvolvimento de redes de comunicação da informação; direção, assessoria, consultoria, planejamento, coordenação e treinamento na área de informática nas organizações; interação com especialistas em outras áreas de modo a desenvolver projetos interdisciplinares; reconhecimento do setor produtivo de sua especialidade no que tange ao mercado, processos produtivos, tecnologias empregadas e potencialidades de seu desenvolvimento, principalmente no contexto regional.
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->

                <!--  panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">Atuação Profissional</h4>
                        </div>
                    </span>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <!-- tab content goes here -->
                            <p>A atuação do bacharel em sistemas de informação desenvolve-se nas seguintes dimensões:
                            <p>Desenvolvimento de sistemas de informação: poderá desempenhar os papéis de analista de sistemas, programador de sistemas, gerente de desenvolvimento de sistemas de informação, gerente de projetos de sistemas de informação, consultor/auditor em desenvolvimento de sistemas de informação e outras relacionadas com o desenvolvimento de software;</p>
                            <p> Infraestrutura de tecnologia da informação: poderá desempenhar funções como a de analista de suporte, administrador de banco de dados, gerente de redes de computadores, gerente de tecnologia da informação, consultor/auditor na área de infraestrutura; </p>
                            <p>Gestão de sistemas de informação: poderá atuar como gerente de sistemas de informação, consultor/auditor em gestão de sistemas de informação, etc, bem como em áreas como database marketing, mineração de dados, comércio eletrônico, marketing digital, business intelligence e outras funções de negócios dependentes da aplicação da tecnologia de informação e comunicação. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                       
                        <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                            <div class="panel-heading" role="tab" id="headingFour"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h4 class="panel-title">Grade currícular</h4>
                            </div>
                        </span>

                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">

                            <p>A grade currícular do curso de sistemas de informação UFSM campus Frederico Wesphalen é composta por:
                            <p> <A href="http://w3.ufsm.br/frederico/images/Sistemas_de_Informa%C3%A7%C3%A3o_-_Grade_para_o_Site.pdf" title="Grade completa">Grade currícular completa</A> </p>
                            <p><A href="http://w3.ufsm.br/frederico/images/Grade_curricular_de_SI_-_UFSM2.jpg" title="Grade Simplificada">Grade currícular Simplificada</A> </p></p>
                            <p><A href="http://w3.ufsm.br/frederico/images/Pr%C3%A9-requisitos_das_disciplinas_do_curso_de_SI.pdf" title="Grade Simplificada">Pré Requisitos</A> </p></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div id="carousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/placeholder.png" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="images/placeholder.png" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="images/placeholder.png" alt="Third slide">
                    </div>
                    <div class="item">
                        <img src="images/placeholder.png" alt="Third slide">
                    </div>
                    <div class="item">
                        <img src="images/placeholder.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


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




<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.isotope.js"></script>

<script src="js/jquery.scrollUp.min.js"></script>


<script type="text/javascript">

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

</script>



<script type="text/javascript">
    $(function(){
        var shrinkHeader = 100;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.navbar-default').addClass('shrink');
            }
            else {
                $('.navbar-default').removeClass('shrink');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });

</script>



<script type="text/javascript">

    $(window).load(function(){


        var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


        $container.isotope({

            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function(){

            var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
            if ( currentColumns !== columns ) {

                columns = currentColumns;

                $container.width( columns * colW )
                        .isotope('reLayout');
            }

        }).smartresize();
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });

</script>



<script type="text/javascript">

    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp',
            topDistance: '300',
            topSpeed: 600,
            animation: 'fade',
            animationInSpeed: 200,
            animationOutSpeed: 200,
            activeOverlay: false,
            scrollImg: true,
        });
    });

</script>


</body>

</html>
