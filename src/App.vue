<template>
  <div class="app">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="nav-brand">
          <router-link to="/">
            <img src="/img/logo.png" alt="">
          </router-link>
        </div>
        <button id="btn-close" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav navbar-right">
            <router-link class="nav-item" tag="li" to="/" v-on:click.native="cerrar">
              <a class="nav-link"><i class="fa fa-home" aria-hidden="true"></i></a>
            </router-link>
            <router-link class="nav-item" tag="li" to="/nosotros" v-on:click.native="cerrar">
              <a class="nav-link">Proserla</a>
            </router-link>
            <router-link class="nav-item" tag="li" to="/productos" v-on:click.native="cerrar">
              <a class="nav-link">Productos</a>
            </router-link>
            <!-- <router-link class="nav-item" tag="li" to="/estacionalidad" v-on:click.native="cerrar">
              <a class="nav-link">Estacionalidad</a>
            </router-link>
            <router-link class="nav-item" tag="li" to="/galeria" v-on:click.native="cerrar">
              <a class="nav-link">Galería</a>
            </router-link> -->
            <router-link class="nav-item" tag="li" to="/certificaciones" v-on:click.native="cerrar">
              <a class="nav-link">Certificaciones</a>
            </router-link>
            <router-link class="nav-item" tag="li" to="/contacto" v-on:click.native="cerrar">
              <a class="nav-link">Contacto</a>
            </router-link>
          </ul>
        </div>
    </nav>
    <transition name="fade" mode="out-in">
      <router-view></router-view>
    </transition>
    <div class="bg-green footer">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="row">
              <div class="col-md-8  text-center-sm">
                <img src="/img/logo-white.png" width="200px" class="mb-5" alt="Logo Blanco">
                <div class="row">
                  <div class="col-sm-4">
                    <router-link class="btn-border-white mb-3 hidden-sm" to="/nosotros">Nosotros</router-link>
                    <a href="" class="btn-border-white mb-3 hidden-sm">Nuestra Producción</a>
                    <a href="" class="btn-border-white mb-3 hidden-sm">Resp. Social</a>
                  </div>
                  <div class="col-sm-4">
                    <router-link class="btn-border-white mb-3 hidden-sm" to="/contacto#mapa" v-scroll-to="'#mapa'">Ubícanos</router-link>
                    <!-- <a href="" class="btn-border-white mb-3 hidden-sm">Ubícanos</a> -->
                    <a href="" class="btn-border-white mb-3 hidden-sm">Convenios</a>
                    <a href="" class="btn-border-white mb-3 hidden-sm">Brochure</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <router-link to="/contacto#e-mail" v-scroll-to="'#e-mail'" class="btn btn-purple hidden-sm mb-5">
                  Contáctanos <label class="oval-half-white"></label>
                </router-link>
                <p class="mb-0 text-center-sm">Calle Antolin Flores 1580</p>
                <p class="text-center-sm">CP Villa San Juan, Jayanca - Perú</p>
                <!-- <p class="text-center-sm">T. (+51 74) 607709</p> -->
                <p class="text-center-sm">Síguenos también en:</p>
                <div class="social text-center-sm">
                  <a href="https://www.facebook.com/proserla" target="_blank" rel="noopener noreferrer" class="facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="" class="youtube">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <hr>
            <p class="text-right mb-0 text-center-sm">PROSERLA © 2020 - Todos los derechos reservados</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
</style>
<script>
export default {
  data() {
    return {
      scrollY: 0
    }
  },
  methods: {
    cerrar(){
      if (screen.width<992) {
        $('#btn-close').click();
      }
    }
  }
}
</script>