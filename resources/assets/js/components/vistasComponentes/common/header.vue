<template>
  <div id="headerMenu">
    <figure class="logo">
      <router-link to="/">
        <a href="#"><img class="logoTerabook" src = "img/terabookColor.png" alt="Terabook"></a>
      </router-link>
    </figure>
    <nav>
      <form class="" action="index.html" method="post">
        <div class="col-2 col-sm-8 buscador">
          <i class="glyphicon glyphicon-search"></i>
          <input type="text" class="form-control buscador" placeholder="Busca tú libro..." />
        </div>

        <div id="usuario">
          <button class="botonUsuario dropdown-toggle" data-toggle="dropdown" type="button" name="button">
            <figure class="imgUsuario">
              <img class="imgUsuario" src = "img/imgUsuario.jpg">
            </figure>
            <article class="nombreUsuario">
              <div class="">
                <p class="nombreCuenta">{{ nombre | capitalize}}</p>
              </div>
              <div class="">
                <span class="caret"></span>
              </div>
            </article>
          </button>
          <ul class="dropdown-menu">
            <p class="nombreUsuarioCuenta">¡ {{ nombre | capitalize}} !</p>
            <hr class="espacio">
            <li><a href="#">Tu biblioteca</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Cuenta</a></li>
            <hr class="espacio">
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Cerrar sesión</a></li>
          </ul>
        </div>
      </form>
    </nav>
  </div>
</template>
<script>


export default{
  data(){
    return{
      nombre : "cosa",
      mostrar: true
    }
  },
  filters:{
    capitalize: function(str){ return  str.charAt(0).toUpperCase() + str.slice(1)}
  }
}
</script>
<style lang="scss" scoped>
  #headerMenu{
    background-color: #ECEAEB;
    height: 82px;
  }

  .logo{
    position: absolute;
  }

  .logoTerabook{
    width: 126px;
    margin-left: 42px;
    margin-top: 14px;
    margin-bottom: 14px;
  }

  #headerMenu nav{
    margin: 0 auto;
    width: 74%
  }

  #headerMenu .buscador{
    width: 100%;
  }

  #headerMenu .buscador input{
    margin: 23px 0px;
  }

  //buscador
  .glyphicon{
    position: absolute;
    top: 34px;
    right: 30px;
    pointer-events: none;
  }
  //

    #usuario{
      display: inline-block;
      position: absolute;
      right: 0;
    }

    .botonUsuario{
      margin: 8px 10px;
      background: none;
      border: none;
      width: 197px;
    }

    .nombreUsuario p{
      margin: 0px 10px;
    }

    .botonUsuario , .imgUsuario {
      display: inline-block;
    }

    .nombreUsuario{
      display: inline-flex;
    }

  .imgUsuario{
    height: 60px;
    border-radius: 50px;
    position: relative;
  }

  .dropdown-menu
  {
    left: inherit;
    right: 0;
    min-width:190px;
    margin: 6px 6px 0px;
  }

  .nombreUsuarioCuenta{
    margin-left: 20px;
  }

  .espacio
  {
    margin: 8px 0px;
  }

  @media (max-width: 1360px){
    #headerMenu{
      background: red;
    }

    #headerMenu nav{
      width: 60%;
    }
  }

  @media (max-width: 900px){
    #headerMenu{
      background: blue;
    }

    #headerMenu nav{
      width: 40%;
    }
  }



</style>
