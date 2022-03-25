<template>
    <div>
        <div class="portada">
            <img src="/img/hoja-produccion.png" alt="" class="img-fluid hoja">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-6 col-sm-8  col-11 padding-1">
                        <h1 class="title text-secondary mas1"><b>Contáctenos</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="e-mail" class="bg-white">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>PROSERLA</h6>
                                <p>Promotora y Servicios Lambayeque S.A.C.</p>
                                <div class="card-contacto">
                                    <div class="card-contacto-icono">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-contacto-content">
                                        <p class="mb-0">Car. Fernando Belaúnde Terry  N°175</p>
                                        <p class="mb-0">Lambayeque</p>
                                    </div>
                                </div>
                                <!-- <div class="card-contacto">
                                    <div class="card-contacto-icono">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div> 
                                    <div class="card-contacto-content">
                                        <p class="mb-0">Telf. (074) 200 001</p>
                                    </div>   
                                </div> -->
                                <div class="card-contacto">
                                    <div class="card-contacto-icono">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div> 
                                    <div class="card-contacto-content">
                                        <p class="mb-0">dneira@proserla.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="">Tu nombre*</label>
                                        <input type="text" class="form-control" v-model="mail.nombres">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Empresa</label>
                                        <input type="text" class="form-control" v-model="mail.empresa">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Correo electrónico*</label>
                                        <input type="text" class="form-control" v-model="mail.email">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Tu mensaje*</label>
                                        <textarea cols="30" rows="5" class="form-control" v-model="mail.mensaje"></textarea>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button v-if="respuesta.status=='STOP'||respuesta.status=='VALIDATE'" 
                                            @click="enviar()" class="btn btn-purple btn-sm">
                                            Enviar <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        </button>
                                        <button v-else-if="respuesta.status=='ready'" class="btn btn-purple btn-sm">
                                            Enviando <i class="fa fa-spinner fa-pulse  fa-fw"></i>
                                        </button>
                                        <h6>{{ respuesta.data }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mapa" class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.148220940568!2d-79.8037881856883!3d-6.374858564131049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904c9ec1596b8ec1%3A0xeb84f9dc7ef287c!2sProserla!5e0!3m2!1ses!2spe!4v1596835216204!5m2!1ses!2spe"  height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        var section=this.$router.currentRoute.hash.replace("#", "");
            if (section)
                this.$nextTick(()=> window.document.getElementById(section).scrollIntoView());
    },
    data() {
        return {
            mail:{
                nombres: '',
                empresa: '',
                email: '',
                mensaje: ''
            },
            respuesta:{
                status: 'STOP'
            }
        }
    },
    methods: {
        enviar(){
            this.respuesta.status="ready";
            console.log(this.mail);
            axios.post('/mail.php',this.mail)
            .then(response => {
                this.respuesta=response.data;
                console.log(response.data);
            });
        }
    },
}
</script>
<style>
    .mapa{
        padding: 0;
        display: flex
    }
    .mapa iframe{
        width: 100%;
        height: 90vh;
        margin: 0;
    }
    .card-contacto{
        padding-left: 40px;
        margin-bottom: 1rem;
        position: relative;
        min-height: 35px;
        display: flex;
        align-items: center;
    }
    .card-contacto>.card-contacto-content{
        width: 100%;
    }
    .card-contacto-icono{
        position: absolute;
        background-color: #46B46B;
        top: 0;
        left: 0;
        padding: 5px;
        width: 35px;
        height: 35px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
    }
</style>