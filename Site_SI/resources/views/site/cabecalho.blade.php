@extends('layouts.layout')

<div id="galeria">
    <div class="container">
        <h2>Galeria de Imagens</h2>
        <p></p>
        <div class="galeriaFilter">
            <ul class="Galeria-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current" >Todos</a></li>
                <li><a href="#" data-filter=".docentes" >Docentes</a></li>
                <li><a href="#" data-filter=".egressos" >Egressos</a></li>
                <li><a href="#" data-filter=".laboratorios" >Laboratórios</a></li>
            </ul>
        </div>
    </div>

    <div class="galeriaContainer">
        <div class=" Galeria-box egressos">
            <a href="#"><img src="images/Docentes/professor02.jpg" class="img-responsive" alt="gallery"></a>
        </div>
        <div class="Galeria-box docentes">
            <a href="#"><img src="images/Docentes/professor02.jpg" alt=""></a>
        </div>
        <div class=" Galeria-box egressos">
            <a href="#"><img src="images/Egressos/aluno08.jpg" alt=""></a>
        </div>
        <div class=" Galeria-box docentes" >
            <a href="#"><img src="images/Docentes/professor01.jpg" alt=""></a>
        </div>
        <div class=" Galeria-box laboratorios">
            <a href="#"><img src="images/placeholder2.png" alt=""></a>
        </div>
        <div class=" Galeria-box laboratorios">
            <a href="#"><img src="images/placeholder2.png" alt=""></a>
        </div>
    </div>

</div>