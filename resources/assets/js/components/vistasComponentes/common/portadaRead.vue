<template>
  <div id="">

    <div class="headerRead">
      <figure class="logo">
        <router-link to="/">
          <a href="#"><img class="logoTerabook" src = "img/terabookColor.png" alt="Terabook"></a>
        </router-link>
      </figure>
      <section class="tituloLibroRead">
        <h3 class="negritas">{{nombreLibro}}</h3>
      </section>
      <section class="opcinesRead">
        <button type="button" name="button">
          <img src="img/Indice.png" title="índice">
        </button>
        <button type="button" name="button">
          <img src="img/Aa.png" title="Visualización">
        </button>
        <button type="button" name="button">
          <img src="img/herramientas.png" title="Herramientas">
        </button>
        <button type="button" name="button">
          <img src="img/marcador.png" title="Marcador">
        </button>
      </section>
    </div>

  </div>
</template>
<script>
export default {
  data (){
    return{
      nombreLibro:"Soy un titulo de un libro comun"
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
