@extends('layouts.layout')


<header id="mainCarousel" class="carousel slide">

    <ol class="carousel-indicators">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <!-- <li data-target="#mainCarousel" data-slide-to="2"></li> -->
    </ol>


    <div class="carousel-inner">
        <div class="item active">
            <div class="slider_overlay"></div>

            <div class="fill">
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
            <div class="fill"     style="background-image:url('../../../public/images/fundo01.jpg');">
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
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#mainCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>
