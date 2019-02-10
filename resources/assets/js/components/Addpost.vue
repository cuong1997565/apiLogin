<template id="add-post">
  <div>
    <h3>Add new Post</h3>
        <formAdd @submit="formSubmit"></formAdd>
  </div>
</template>

<script>
import formAdd from './form-data'
 export default {
     components: {
       formAdd
     },
     data: function(){
        return {

         }
     },

     methods:{
          formSubmit: function(blog){
                let url = "http://localhost:8000/posts";
                Axios.post( url , blog).then((response)=>{
                      this.$router.push({name: 'Listposts'});
                });
          }
     }

 }
</script>
