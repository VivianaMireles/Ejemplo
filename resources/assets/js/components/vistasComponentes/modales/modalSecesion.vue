<template>
  <div class="row">
    <div class="col-sm-6">
      <!--<h2>Inicio de sesión</h2>-->
      <div class="">
        <form id="formularioInicio" >
          <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="e-mail" placeholder="Email" name="form[emailConfirmar]">
          </div>
          <div class="form-group">
            <label for="password1">Contraseña</label>
            <input type="password" class="form-control" id="password1" placeholder="Password" name="form[passwordConfirmar]">
          </div>

            <button  type="submit" class="btn btn-default-orange">
              <router-link to="/login">Ingresar
              </router-link>
            </button>

          <div class="bootstrap horizontal divider">
            Crear tú cuenta
          </div>
          <div class="">
            <div class="">
              <a type="submit" class="btn btn-default-blue btnCuenta"><i class="fa fa-facebook-official fa-2x"></i>Registrarse con Facebook</a>
            </div>
            <div class="">
              <a type="submit" class="btn btn-default-white btnCuenta" ><img class="google" src="img/google24.png">Registrate con Google</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-6">
      <!--<h1>Registrate</h1>-->
      <div class="">
        <form id="formularioRegistro" name="formularioRegistro" v-on:submit.prevent="registrarCuenta" >
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="form[nombreUsuario]">
          </div>
          <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="form[emailUsuario]">
          </div>
          <div class="form-group">
            <label for="password2">Contraseña</label>
            <input type="password" class="form-control" id="password2" placeholder="Password" name="form[passwordUsuario]">
          </div>
          <div class="form-group">
            <label for="password3">Confirmar contraseña</label>
            <input type="password" class="form-control" id="password3" placeholder="Password" name="form[confirmarPasswordUsuario]">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="checkboxTerabook"/>Enviarme actualizaciones de Terabook
            </label>
          </div>
          <button type="submit" class="btn btn-default-orange">Registrarse</button>
          <p class="textCenter">Al registrar una cuenta Terabook, aceptas nuetros</p>
          <p class="textCenter"><a class="txtNaranja">Términos de servicios</a> y <a class="txtNaranja">Politicas de privacidad</a></p>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "",
  data: () => ({

  })
}
</script>
<style lang="scss" scoped>
</style>
