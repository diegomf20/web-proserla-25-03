<template>
    <div class="nosotros">
        <div class="portada">
            <img src="/img/hoja.png" alt="" class="img-fluid hoja">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-6 col-sm-8  col-11 padding-1">
                        <h1 class="title">Quiénes</h1>
                        <h1 class="title text-primary mas1"><b>Somos</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <!-- <div class="col-md-1"></div> -->
                    <div class="col-8 show-sm mb-3">
                        <img src="/img/logo.png" alt="" class="img-fluid">
                        <!-- <div class="card-fruta-horizontal card-left">
                            <div class="row">
                                <div class="col-sm-8 col-7">
                                    <div class="card-horizontal-content">
                                        <div class="card-hoja">
                                            <img src="/img/hoja-purple.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <div class="card-fruta-img">
                                         <img src="/img/circle-jayanca.png" alt="" class="img-fluid">
                                     </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-3 col-6 mb-3 hidden-sm">
                        <img src="/img/logotipo.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7 mb-3">
                        <p class="text-justify">Somos una empresa agrícola fundada en el año 2003, nos ubicamos en el distrito de Jayanca a 50km al noreste de Chiclayo en el departamento de Lambayeque.</p>
                        <p class="text-justify">Contando con 5 centros de producción: Fundo Tarata, Fundo Santa Lucía, Fundo Carmelo, Fundo La Viña y Fundo Masaris.</p>
                        <!-- <p class="text-justify">Con sus primeras 10 hectáreas de uva de mesa instaladas en el año 2003, PROSERLA es la empresa pionera del manejo de este cultivo en el norte del Perú.</p> -->
                        <p class="text-justify">Actualmente tiene instaladas 200 hectáreas de uva de mesa, de las cuales destacan con semilla la variedad Red Globe y sin semilla las variedades Crimson Seedless, Thompson Seedless y las licenciadas Sweet Celebration™, Sweet Globe™, Sweet Nectar™, Scarlotta Seedless™ y Autumn Crisp™.</p>
                        <p class="text-justify">PROSERLA tiene además 10 hectáreas de mango 'Kent', 80 hectáreas de Lima Tahiti y 150 hectáreas de palta 'Hass'.</p>
                        <p class="text-justify">
                            Todos sus cultivos cuentan con tecnología de riego presurizado y técnicas de producción de última generación, cumpliendo con los estándares de calidad de la certificación GLOBAL GAP para una producción responsable con la sociedad y el medio ambiente.</p>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <agile class="thumbnails" :options="option">
                            <div class="slide">
                                <img src="/img/campo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/campo2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/campo3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/campo4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/campo5.png" class="img-fluid" alt="">
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
        <div class="bg-gris">
            <div class="container">
                <div class="row mb-3 justify-content-center align-items-center">
                    <div class="col-md-3">
                        <!-- <div class="mb-3 card-fruta-horizontal card-right">
                            <div class="row">
                                <div class="col-sm-4 col-5">
                                    <div class="card-fruta-img">
                                        <img src="/img/circle-jayanca.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-7">
                                    <div class="card-horizontal-content">
                                        <div class="card-hoja">
                                            <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                        </div>
                                        <h2><b>JAYANCA FRUITS</b></h2>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row align-items-center justify-content-center">
                            <div class="col-8">
                                <img src="/img/jayanca.png" class="img-fluid" style="max-width=90%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="text-justify">JAYANCA FRUITS  es una empresa filial de PROSERLA creada para tratar y empacar frutas para que puedan ser exportadas a los principales mercados del mundo.  Fue inaugurada el 06 de octubre del año 2014. Cuenta con modernas instalaciones que permiten el empaque de uva de mesa,  mango, palta y otros frutales.</p>
                                <p class="text-justify">Brinda servicio de empaque tanto a PROSERLA como a otros clientes. Para garantizar el mejor servicio, JAYANCA FRUITS cuenta con las certificaciones que los mercados más exigentes requieren. Genera alrededor de 400 puestos de trabajo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 hidden-sm">
                        <!-- <div class="card-fruta mb-5">
                            <div class="card-content">
                                <div class="card-hoja">
                                    <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                </div>
                            <!-- </div>
                            <div class="card-fruta-img">
                                <img src="/img/circle-jayanca.png" alt="" class="img-fluid">
                            </div>
                        </div> --> 
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <agile class="thumbnails" :options="option">
                            <div class="slide">
                                <img src="/img/jayanca1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/jayanca2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/jayanca3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/jayanca4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide">
                                <img src="/img/jayanca5.png" class="img-fluid" alt="">
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