<template>
  <div class="generos">
    <div class="row">
      <p>Generos de lectura</p>
      <ul v-for="generoDeLectura in generosDeLecturas">
        <li><a>{{generoDeLectura.genero}}</a></li>
      </ul>
    </div>
    <div class="row">
      <p>Recomendaciones</p>
      <ul v-for ="generoRecomendado in generosRecomendados">
        <li><a>{{generoRecomendado.generoRecomedado}}</a></li>
      </ul>
    </div>
  </div>
</template>
<script>
import axios from 'axios'

export default {
  data(){
    return{
      generosDeLecturas:[
        {
          genero:"Novela"
        },{
          genero:"Lírico"
        },{
          genero:"Épico"
        },{
          genero:"Dramático"
        },{
          genero:"Oda"
        },{
          genero:"Elegía"
        },{
          genero:"Égloga"
        },{
          genero:"Sátira"
        },{
          genero:"Canción"
        },{
          genero:"Epopeya"
        },{
          genero:"Poema épico"
        },{
          genero:"Romance"
        },{
          genero:"Cuento"
        },{
          genero:"Novela"
        },{
          genero:"Dramáticos "
        },{
          genero:"Zarzuela"
        }
      ],
      generosRecomendados:[
        {
          generoRecomedado:"Marketing"
        },{
          generoRecomedado:"Administración"
        },{
          generoRecomedado:"Contaduria"
        },{
          generoRecomedado:"Recursos Humanos"
        }
      ]
    }
  }
}
</script>

<style media="screen">

.row.menuDeGeneros
{
  background-color: white;
}

.generos
{
  margin-left: 36px;
  font-size: 16px;
}

.generos .row
{
  margin-top: 70px;
}

.generos p
{
  margin-left: 20px;
  font-weight: bolder;
}



li{
  list-style: none;
}
</style>
