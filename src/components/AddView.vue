<template>
    <div>
        <form v-on:submit.prevent="Add()">
            <input type="text" name="name" v-model="name" >
            <button>get categories</button>
        </form>
         
    </div>
</template>
<script>

import axios from "axios";

export default ({
    name : 'AddView',
    data() {
        return{
            name :''
        }
    },
    methods :{
        Add(){
            const formData = new FormData()
            formData.append('name',this.name)
            axios.post("http://127.0.0.1:80/src/php/controller/Calls.php",formData)
            .then(Response=>{
                console.log(Response.status);
                console.log(Response.data);
            })
        }
    }
})
</script>