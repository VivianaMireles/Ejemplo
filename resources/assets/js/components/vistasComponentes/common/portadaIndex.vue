<template>
  <div id="">
    <nav class="navbar navbar-light bg-faded">
      <form class="form-inline">
      <a href="#" class="btn btn-dark-borderWhite" data-toggle="modal" data-target="#modalSesion">Iniciar sesión</a>
      </form>
    </nav>

    <div class="modal fade" id="modalSesion" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-body">
        <modaliniciosecion></modaliniciosecion>
      </div>
      </div>
    </div>
    </div>

    <div id="jumbotron" class="jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">
          <img class="logoTerabook" src="img/terabookColor.png" alt="">
        </h1>
        <p class="lead">En cualquier momento,en cualquier lugar</p>
        <a class="btn btn-primary fondoNaranja">Registrarse</a>
      </div>
    </div>
  </div>
</template>
<script>

import modaliniciosecion from '../modales/modalSecesion.vue'

export default {
  components: {
    modaliniciosecion
  },data(){
    return{}

  }
}
</script>
<style lang="scss" scoped>
</style>
