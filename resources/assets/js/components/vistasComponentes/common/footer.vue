<template>
  <footer>
    <div class="container">
      <div class="col-sm-4">
        <p>
          <router-link to="/acercaDeNosotros">
            <a href="#">Acerca de Teraboo</a>
          </router-link>
          <br>
          <a href="#">Contacto</a>
          <br>
          <a href="#">Trabaja con nosotros</a>
          <br>
          <a href="#">Soporte / Preguntas frecuentes</a>
          <br>
          <a href="#">Editores</a>
        </p>
      </div>
      <div class="col-sm-4">
        <router-link to="/terminosYCondiciones">
          <p class="txtFijo"> <a href="#">Términos y condiciones</a> </p>
        </router-link>
        <router-link to="/politicasYPrivacidad">
          <p class="txtFijo"> <a href="#">Politicas y privacidad</a></p>
        </router-link>
        <router-link to="/login">
          <p class="txtFijo">Copyright © 2017 Terabook</p>
        </router-link>
        <router-link to="/read">
        <p class="txtFijo">Todos los derechos reservados</p>
        </router-link>
      </div>
      <div class="col-sm-4 redesSociales">
        <div class="row ">
          <div class="col-sm-2">
            <a href="https://twitter.com/TerabookApp" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
          </div>
          <div class="col-sm-2">
            <a href="https://www.facebook.com/TerabookAPP/" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
          </div>
          <div class="col-sm-2">
            <a href="https://www.instagram.com/terabook/?hl=es-la" target="_blank"><i class="instagram"><img src="img/instagram24.png"></i></a>
          </div>
          <div class="col-sm-6">
            <a href="https://play.google.com/store/apps/details?id=com.artesaniadigital.terabook" target="_blank">
              <img class="appGoogle" src="img/google-play32.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
import axios from 'axios'

export default {
  data(){
    return{

    }
  }
}
</script>
