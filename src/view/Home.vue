<template>
    <div>
        <div class="portada">
            <img src="/img/hoja.png" alt="" class="img-fluid hoja animate__animated">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-11 padding-1">
                        <h1 class="title">Sembramos <b>esperanza</b> cosechamos <b>Vida</b></h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-1">
                            </div>
                            <div class="col-lg-9 col-md-11 col-9">
                                <p>Nuestra producción provee calidad de vida a más de 2 mil familias en todo Lambayeque.</p>
                            </div>
                            <div class="col-12">
                                <router-link to="nosotros" class="btn btn-purple mb-4 mt-3">
                                    Ver más <label class="oval-half-white"></label>
                                </router-link>
                            </div>
                            <div class="col-sm-12 col-8 hidden-sm">
                                <img src="/img/cadena.png" class="img-fluid" alt="cadena de suministro">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="/img/hoja-green.png" alt="" class="hoja-title mb-3">
                        <h2 class="text-center text-title">Lo mejor de nosotros</h2>
                        <hr class="hr-title mb-5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-6">
                        <div class="mb-3 card-fruta">
                            <div class="card-content">
                                <div class="card-hoja">
                                <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                </div>
                                <h3><b>Uva</b></h3>
                            </div>
                            <div class="card-fruta-img">
                                <img src="/img/uva.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-3 card-fruta-2">
                            <div class="card-content">
                                <div class="card-hoja">
                                <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                </div>
                                <h3><b>Palta</b></h3>
                            </div>
                            <div class="card-fruta-img">
                                <img src="/img/palta.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-3 card-fruta">
                            <div class="card-content">
                                <div class="card-hoja">
                                <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                </div>
                                <h3><b>Mango</b></h3>
                            </div>
                            <div class="card-fruta-img">
                                <img src="/img/mango.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-3 card-fruta-2">
                            <div class="card-content">
                                <div class="card-hoja">
                                <img src="/img/hoja-green.png" alt="" class="img-fluid">
                                </div>
                                <h3><b>Lima Tahiti</b></h3>
                            </div>
                            <div class="card-fruta-img">
                                <img src="/img/limon.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-campo">
            <div class="container-lg text-center">
                <h1 class="mb-3"><b>Producción agrícola de calidad</b></h1>
                <img class="mb-3 cadena" src="/img/cadena-white.png" alt="">
            </div>
        </div>
        <div class="bg-amber onda-amber">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4 col-md-5">
                        <h2 class="text-center-sm"><b>Certificaciones</b></h2>
                        <p class="mb-3 text-center-sm">PRODUCTOS DE EXPORTACIÓN</p>
                        <router-link to="/certificaciones" class="btn btn-purple mb-4 mt-3 hidden-sm">
                            Ver más <label class="oval-half-white"></label>
                        </router-link>
                        
                    </div>
                    <div class="col-lg-6 col-md-7 text-center-sm">
                        <div class="row">
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/global.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/grasp.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/spring.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/sedex.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/smeta.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 col-6">
                            <img src="/img/fda.png" class="img-fluid" alt="">
                        </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <router-link to="/certificaciones" class="btn btn-purple mb-4 mt-3 show-sm">
                            Ver más <label class="oval-half-white"></label>
                        </router-link>
                    </div>
                </div>  
            </div>
        </div>
        <div class="bg-gris">
            <div class="container-lg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="/img/hoja-green.png" alt="" class="hoja-title mb-3">
                        <h2 class="text-center text-title">Una empresa del grupo Costa del Sol</h2>
                        <hr class="hr-title mb-5">
                    </div>
                    <div class="col-12">
                        <agile class="thumbnails" :options="option">
                            <div class="slide logo">
                                <a href="https://www.ecosac.com.pe/" target="_blank">
                                    <img src="/img/empresas/logo-ecosac.png" alt="">
                                </a>
                            </div>
                            <div class="slide logo">
                                <a href="https://www.costadelsolperu.com/" target="_blank">
                                    <img src="/img/empresas/logo-costa.png" alt="">
                                </a>
                            </div>
                            <div class="slide logo">
                                <a href="https://alsurperu.com/" target="_blank">
                                    <img src="/img/empresas/logo-alsur.png" alt="">
                                </a>
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
        <div id="comunicado-2" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <iframe id="iframe-comunicado" src="https://drive.google.com/file/d/1eApfdarYutnqbjplTKcVslgGU72HS2Ns/preview" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="comunicado" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <iframe id="iframe-comunicado" src="https://drive.google.com/file/d/1YCh0mHXEhcEIsze5JfSPmmRZLAB8EqAk/preview" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .modal-dialog {
        max-width: 600px;
    }
    #comunicado .modal-dialog,#comunicado-2 .modal-dialog{
        height: calc(100% - 3.5rem);
    }
    #comunicado .modal-dialog .modal-content, #comunicado-2 .modal-dialog .modal-content{
        height: 100%;
    }
    #comunicado .row, #comunicado-2 .row{
        height: 100%;
    }
    #comunicado .close,#comunicado-2 .close{
        position: absolute;
        top: 10px;
        right: 10px;
    }
    #comunicado .modal-body, #comunicado-2 .modal-body{
        padding: 2rem 1rem;
    }

    #iframe-comunicado{
        width: 100%;
        height: 100%;
    }
    .slide.logo img{
        max-width: 100%;
        max-height: 230px;
    }
 
</style>
<script>
import { VueAgile } from 'vue-agile';
export default {
    data() {
        return {
            option:{
                autoplay: true,
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
                            slidesToShow: 3,
                        }
                    },
                ]
            }
        }
    },
    components: {
        agile: VueAgile 
    }
}
</script>