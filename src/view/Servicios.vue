<template>
    <div>
        <div class="portada">
            <img src="/img/hoja-servicios.png" alt="" class="img-fluid hoja">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-6 col-sm-8  col-11 padding-1">
                        <h1 class="title">Nuestros</h1>
                        <h1 class="title text-secondary mas1"><b>Servicios</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content-servicios">
                            <div class="card-servicio">
                                <h5 class="mb-0">Servicio de recepción</h5>
                                <div class="icono">
                                    <img src="/img/iconos/recepcion.svg" alt="">
                                </div>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/enfriamiento.svg" alt="">
                                </div>
                                <h5 class="mb-0">Enfriamiento</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/gasificado.svg" alt="">
                                </div>
                                <h5 class="mb-0">Gasificación</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/tratamiento.svg" alt="">
                                </div>
                                <h5 class="mb-0">Tratamiento hidrotérmico</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/pesado.svg" alt="">
                                </div>
                                <h5 class="mb-0">Pesado</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/uva.svg" alt="">
                                </div>
                                <h5 class="mb-0">Almacenamiento y despacho de uva fresca</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/seleccion.svg" alt="">
                                </div>
                                <h5 class="mb-0">Selección</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/mango.svg" alt="">
                                </div>
                                <h5 class="mb-0">Almacenamiento y despacho de mango fresco</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/empaque.svg" alt="">
                                </div>
                                <h5 class="mb-0">Empaque</h5>
                            </div>
                            <div class="card-servicio">
                                <div class="icono">
                                    <img src="/img/iconos/palta.svg" alt="">
                                </div>
                                <h5 class="mb-0">Almacenamiento y despacho de palta fresca</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .content-servicios{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 2rem 5rem;
    }
    
    .card-servicio{
        border: 2px solid #dedede;
        border-radius: 40px;
        height: 80px;
        display: flex;
        align-items: center;
        position: relative;
    }
    .card-servicio:nth-child(2n) {
        padding: 0 20px 0 80px;
    }
    .card-servicio:nth-child(2n) .icono{
        left: 3px;
    }
    .card-servicio:nth-child(2n+1) {
        padding: 0 80px 0 20px;
    }
    .card-servicio:nth-child(2n+1)>*{
        text-align: right;
        width: 100%;
    }
    .card-servicio:nth-child(2n+1) .icono{
        right: 3px;
    }
    .card-servicio .icono{
        position: absolute;
        top: 3px;
        height: 70px;
        width: 70px;
        border-radius: 50%;
        text-align: center;
        background-color: #dedede;
        display: flex;
        align-items: center;
    }
    .card-servicio .icono img{
        height: 35px;
        margin: 0 auto;
    }
    @media (max-width: 992px){
        .content-servicios{
            grid-template-columns: repeat(1,1fr);   
        }
        .card-servicio:nth-child(n){
            padding: 0 20px 0 80px;
        }
        .card-servicio:nth-child(n)>*{
            text-align: left;
        }
        .card-servicio:nth-child(n) .icono{
            left: 3px;
        }
    }
</style>
<script>
export default {
    data() {
        return {
        }
    }
}
</script>