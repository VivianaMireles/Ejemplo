<template>
  <div class="">
    <section id="portada" class="portada background">
      <portadaindex></portadaindex>
    </section>

    <section id="txtInformativo" class="row ">
      <article class="col-sm-6 col-md-4 col-lg-4 align center">
        <h1 class="negritas">Lec</h1>
        <p>.....................</p>
      </article>
      <article class="col-sm-6 col-md-4 col-lg-4 align center">
        <h1 class="negritas">Recomendaciones</h1>
        <p>......................</p>
      </article>
      <article class="col-sm-12 col-md-4 col-lg-4 align center">
        <h1 class="negritas">Cura</h1>
        <p>..............................</p>
      </article>
    </section>

    <div id="librosMasVistos">
      <h1 class="textCenter">Los más ....</h1>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3 col-md-auto" v-for="(libroMasLeido, index) in librosMasLeidos" v-if="index <= 3">
            {{libroMasLeido.name}}
          </div>
        </div>
      </div>
    </div>

    <div id="precio" class="portadaBaja background">
      <div class="container">
        <p class="negritas txtBlanco">................./p>
        <p class="negritas txtBlanco">...............</p>
        <p class="negritas txtBlanco">.................</p>
        <a class="btn btn-primary fondoNaranja">Comenzar</a>
      </div>
    </div>
    <section>
      <piepag></piepag>
    </section>
  </div>
</template>

<script>

$(document).ready(function(){

  $("#formularioInicio").bootstrapValidator({
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields:{
      "form[emailConfirmar]":{
        validators: {
          notEmpty: {
              message: 'El campo de correo esta vacio.'
          },emailAddress: {
              message: 'El correo no es valido.'
          }
        }
      },
      "form[passwordConfirmar]":{
        validators: {
          notEmpty: {
              message: 'El password no es valido.'
          }
        }
      }
    }
  })

  $("#formularioRegistro").bootstrapValidator({
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields:{
      "form[nombreUsuario]":{
        validators: {
          notEmpty: {
              message: 'El nombre no es valido'
          }
        }
      },
      "form[emailUsuario]":{
        validators: {
          notEmpty: {
              message: 'El campo de correo esta vacio'
          },emailAddress: {
              message: 'El correo no es valido'
          }
        }
      },
      "form[passwordUsuario]":{
        validators: {
          notEmpty: {
              message: 'La contraseña esta vacio'
          }
        }
      },
      "form[confirmarPasswordUsuario]":{
        validators: {
          identical:{
            field: "form[passwordUsuario]",
            message: 'La contraseña no coincide.'
          },
          notEmpty: {
            message: "La contraseña esta vacio"
          }
        }
      }
    }
  })

})

/*vue*/
import piepag from './common/footer.vue';
import portadaindex from './common/portadaIndex.vue';

export default{
  components: {
    portadaindex,piepag
  },
  data(){
    return{
      librosMasLeidos: [
        {
          name: "Curso de Vue.js1"
        },{
          name: "Curso de Vue.js2"
        },{
          name: "Curso de Vue.js3"
        },{
          name: "Curso de Vue.js4"
        },{
          name: "Curso de Vue.js5"
        },{
          name: "Curso de Vue.js6"
        },{
          name: "Curso de Vue.js7"
        },{
          name: "Curso de Vue.js8"
        },{
          name: "Curso de Vue.js9"
        },{
          name: "Curso de Vue.js10"
        },{
          name: "Curso de Vue.js11"
        },{
          name: "Curso de Vue.js12"
        }
      ]
    }
  },
  methods: {
    registrarCuenta(){
      /*const frm = document.forms.namedItem("formularioRegistro");
      const data = new FormData(frm);

      if ( data.get("form[nombreUsuario]") == null){
        alert()
        return;
      }

      if ( data.get("form[emailUsuario]") == null){
        alert()
        return;
      }

      if ( data.get("form[passwordUsuario]") == null){
        alert()
        return;
      }

      if ( data.get("form[confirmarPasswordUsuario]") == null){
        alert()
        return;
      }

      if ( data.get("form[emailConfirmar]") == null){
        alert()
        return;
      }

      if ( data.get("form[passwordConfirmar]") == null){
        alert()
        return;
      }


      axios.post("url-de-controller", data)
        .then( response =>{

        })
      .fail( error =>{

      });*/

    }
  }
}
</script>

<style media="screen">

/*modal*/

/*divisor*/
.bootstrap.horizontal.divider
{
  padding-bottom: 30px;
  display: table;
  /*margin: 1rem 0;*/
  height: 0;
  font-weight: 700;
  /*text-transform: uppercase;*//*mayuscula text*/
  letter-spacing: .05em;
  color: black;
  padding-top: 24px;
  margin: 0 auto;
}

.bootstrap.horizontal.divider:after, .bootstrap.horizontal.divider:before
{
  background-image: url('C:/Users/USUARIO/proyecto/blog/public/img/linea.png');
}

.bootstrap.horizontal.divider:before
{
  background-position: right 1em top 50%;
}
.bootstrap.horizontal.divider:after
{
  background-position: left 1em top 50%;
}

.bootstrap.horizontal.divider:after, .bootstrap.horizontal.divider:before
{
  content: '';
  display: table-cell;
  position: relative;
  top: 50%;
  width: 30%;
  background-repeat: no-repeat;
}
</style>
