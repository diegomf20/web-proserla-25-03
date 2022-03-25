<template>
    <div>
        <div class="portada">
            <img src="/img/hoja-produccion.png" alt="" class="img-fluid hoja">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-6 col-sm-8  col-11 padding-1">
                        <h1 class="title">Nuestros</h1>
                        <h1 class="title text-secondary mas1"><b>Productos</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h4 class="mb-5">
                            Uvas de mesa de buen sabor, muy crujientes, con semilla y sin semilla.
                            Nuestros principales productos dirigidos al mercado nacional e internacional son la siguientes:
                        </h4>
                    </div>
                    <div class="col-lg-10">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/sweet-celebration.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Sweet Celebration™</b></h4>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/sweet-globe.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Sweet Globe™</b></h4>
                                
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/sweet-nectar.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Sweet Nectar™</b></h4>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/scarlotta.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Scarlotta Seedless™</b></h4>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/palta.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Palta Hass</b></h4>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card-produccion-imagen">
                                    <img src="/img/produccion/limon-tahiti.png" alt="" class="img-fluid">
                                </div>
                                <h4 class="text-secondary text-center mb-3"><b>Lima Tahití</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <img src="/img/calendario.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <agile class="thumbnails" :options="option">
                            <div class="slide">
                                <img src="/img/slide/produccion/slide-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/slide/produccion/slide-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/slide/produccion/slide-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/slide/produccion/slide-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/slide/produccion/slide-5.png" class="img-fluid" alt="">
                            </div>
                            <template slot="prevButton">
			                    <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                            </template>
                            <template slot="nextButton">
			                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                            </template>
                        </agile>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .card-produccion-imagen{
        background-image: url('/img/produccion/fondo-2.png');
        background-repeat: no-repeat;
        background-size: 100% auto;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    .card-produccion:nth-child(2n) .card-produccion-imagen{
        background-image: url('/img/produccion/fondo-1.png');

    }
    .card-produccion{
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .card-produccion:not(:last-child){
        border-bottom: 5px solid #dedede;
    }

    @media (max-width: 576px){
        .card-produccion-imagen{
            margin: 0 auto;
            width: 200px;
            margin-bottom: 20px;
        }
    }
    @media (max-width: 992px){
        .card-produccion:nth-child(2n){
            background: #dedede;
        }
    }
    .card-produccion p{
        padding-left: 1rem;
        position: relative;
    }
    .card-produccion p::before{
        background-image: url('/img/iconos/arrow.svg');
        position: absolute;
        top: 5px;
        left: 0;
        content: " ";
        width: 0.5rem;
        height: 1rem;
        background-repeat: no-repeat;
        background-size: 100% auto;
        z-index: 1;
    }
</style>
<script>
import { VueAgile } from 'vue-agile'

export default {
    components: {
        agile: VueAgile 
    },
    data() {
        return {
            option:{
                dots:false,
                // navButtons: false,
                responsive: [
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 5,
                        }
                    },
                ]
            }
        }
    },
}
</script>
