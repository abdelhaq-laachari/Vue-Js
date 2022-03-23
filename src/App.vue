<template>

  <div>
    <AddView/>
    <button v-on:click="get" >get categories</button></div>
  <ul v-for="cat in categories" :key="cat">
    <li> id : {{cat.idCat}} </li>
    <li>  name : {{cat.Nomcat}} </li>
  </ul>
</template>

<script>

import axios from 'axios';
import AddView from './components/AddView.vue';

export default {
  name: 'App',
  data()
  {
    return{
      categories : []
    }
  },
  components : {
    AddView

    },
  methods :{
    get(){
      axios.get("http://127.0.0.1:80/src/php/controller/Calls.php")
      .then(Response=>{
        console.log(Response)
        this.categories = Response.data;
      }).catch(e=>{
        console.log(e);
      })
    }
  }
  
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
