<template id="post-delete">
  <div>
    <h3>Delete post {{ post.title  }}</h3>
    <form v-on:submit.prevent = "deletePost">
      <p>The action cannot be undone</p>
      <button class="btn btn-xs btn-danger" type="submit" name="button">Delete</button>
      <router-link class="btn btn-xs btn-primary" v-bind:to="'/'">Back</router-link>
    </form>
  </div>
</template>
<script>
    export default{
          data: function(){
              return { post: {title:'',body:''}}
          },
          created: function(){
            let url ='http://localhost:8000/posts/'+ this.$route.params.id + '/edit';
            Axios.get(url).then((response)=>{
                    this.post = response.data;
            });
          },

          methods:{
              deletePost: function(){
                  let url ='http://localhost:8000/posts/'+ this.$route.params.id;
                  Axios.delete(url, this.post).then((response)=>{
                        this.$router.push({ name: 'Listposts' });
                  });
              }
          }


    }
</script>
