<template>
  <div class="">
    <header>
      <encabezado></encabezado>
    </header>

    <section class="row menuDeGeneros" id="inicioSecion">
        <div class="col-sm-2">
          <menulibros></menulibros>
        </div>
        <div class="col-sm-10">
          <div class="row librosTerabook">
          <h3>Nuevos lanzamientos</h3>
          <carrucel v-on:seleccionado="verLanzamiento"></carrucel>
        </div>
          <hr>
        <div class="row">
          <h3>Mi biblioteca</h3>
          <div class="">
            <carrucel v-on:seleccionado="verLanzamiento"></carrucel>
          </div>
        </div>

        <div class="modal fade modaLibro" id="modaLibro" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="col-sm-4">
                  <img src="img/yo_soy_tu_padre.jpg" alt="">
                </div>
                <div class="col-sm-8">
                  <article class="">
                    <h1>{{lanzamiento.nombre}}</h1>
                    <h2>{{lanzamiento.autor}}</h2>
                    <h3>{{lanzamiento.year}}</h3>
                    <p>{{lanzamiento.contenido}}</p>
                  </article>
                  <div class="footerModalBtn">
                    <router-link to="/read">
                      <a type="button" href="#" class="btn btn-primary">Leer</a>
                    </router-link>
                    <a type="button" href="#" class="btn btn-primary">Leer despues</a>
                    <a type="button" href="#" class="btn btn-primary">Compartir</a>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <piepag></piepag>

  </div>
</template>

<script>

import encabezado from './common/header.vue'
import piepag from './common/footer.vue'
import menulibros from './common/menu.vue'
import carrucel from './carrucel/carrucel.vue'


export default{
  components: {
    piepag, encabezado,menulibros,carrucel
    },
    data(){
    return {
      lanzamiento: {
        id: "",
        nombre: "",
        autor: "",
        year: "",
        contenido: "",
        puntuacion: ""
      },
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
  methods:{
    verLanzamiento(item){
      //si el "seleccionado" e s como quien dice click

      this.lanzamiento = item;
      console.log(this.lanzamiento);
      $('#modaLibro').modal('show')
    }
  }
}
</script>

<style media="screen">
/**/
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
/**/
.tapaLibro
{
  text-align: center;
}

.media-carousel img
{
width: 210px;
height: 280px;
}

.thumbnail
{
  width: 220px;
  margin: 0 auto;
}

.textCenter
{
  text-align: center;
}

.tituloNegra
{
  font-weight: bold;
  font-size: 16px;
}

.fa-star:before
{
  color: #EA441D;
}

.row.librosTerabook
{
  margin-top: 40px;
}

/*modal*/
.modaLibro.modal-open .modal{
  padding: 0px;
}

.modal-dialog{
  margin: 160px auto;
}

.modaLibro  article h1{
  font-weight: bold;
}

.modaLibro article h1, .modaLibro article h2 , .modaLibro article h3{
  margin: 0px;
}

.modaLibro article p{
  margin: 14px 0px;
}

.modaLibro img{
  width: 100%;
}

.modal-footer, .modal-header{
  border: none
}

.modal-body{
  padding: 10px 0px;
}

.modaLibro .btn-primary{
  width: 130px;
  color: black;
  background: #ECEAEB;
  border: none;
  outline: 0;
  margin: 0px 20px;
  -webkit-box-shadow: 4px 3px 12px 2px rgba(219,212,219,0.78);
  -moz-box-shadow: 4px 3px 12px 2px rgba(219,212,219,0.78);
  box-shadow: 4px 3px 12px 2px rgba(219,212,219,0.78);
}

.modaLibro .btn-primary:hover{
  width: 130px;
  color: black;
  background: #ECEAEB;
  border: none;
  outline: 0;
}

.modaLibro .footerModalBtn{
  width: 519px;
  margin: 0px auto;
}

/**/
</style>
