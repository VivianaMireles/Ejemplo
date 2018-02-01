<template>
  <div class="">
    <section class="regular slider">
      <div v-for="nuevosLanzamiento in nuevosLanzamientos">
        <a class="thumbnail" href="#" v-on:click="ver(nuevosLanzamiento)">
          <div class="tapaLibro">
            <img alt="" src="img/yo_soy_tu_padre.jpg">
          </div>
          <div class="">
            <p class="textCenter tituloNegra">{{nuevosLanzamiento.nombre}}</p>
            <p>{{nuevosLanzamiento.autor}}</p>
            <p><i class="fa fa-star fa-lg" aria-hidden="true"></i> {{nuevosLanzamiento.puntuacion}}</p>
          </div>
        </a>
      </div>
    </section>
  </div>
</template>
<script>

$(document).ready(function() {
  $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
});

import slick from 'slick-carousel'

export default {

  data(){
    return{
      nuevosLanzamientos:[
        {
          id: "1",

          nombre: "sdadada1",
          autor: "dfsafasfas",
          year: "2016",
          contenido: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          puntuacion: "3"
        },{
          id: "2",

          nombre: "sdadada2",
          autor: "dfsafasfas",
          year: "2016",
          contenido: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          puntuacion: "3"
        },{
          id: "3",

          nombre: "sdadada3",
          autor: "dfsafasfas",
          year: "2016",
          contenido: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          puntuacion: "3"
        },{
          id: "4",

          nombre: "sdadada",
          autor: "dfsafasfas",
          year: "2016",
          contenido: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          puntuacion: "3"
        }
      ]
    }
  },
  methods: {
    ver(item) {
      /*asi que aqui llamas a esta funcion ver y ejecutas eso de $emit
      eso lo que hace es como indicar al parent que hubo un evento
      si
      entonces le envias el nombre del "evento" y la data
      el arroba es opcional podrias poner v-onm*/

      this.$emit('seleccionado', item);
      //this.$parent.$options.methods.verLanzamiento(item);
    }
  }
}
</script>
<!--<style src="../../../../sass/slick.css"> </style>
<style src="../../../../sass/slick-theme.css"> </style>-->
<style lang="scss" scoped>

.slider {
    width: 80%;
    margin: 40px auto;
}

.slick-slide {
  margin: 0px 20px;
}

.slick-slide img {
  width: 210px;
}

.slick-prev:before,
.slick-next:before {
  color: black;
}

.slick-slide {
  transition: all ease-in-out .3s;
  opacity: 1;
}

.slick-active {
  opacity: 1;
}

.slick-current {
  opacity: 1;
}

</style>
