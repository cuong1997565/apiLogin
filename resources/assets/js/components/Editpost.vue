<template id="edit-post">
  <div>
    <h3>Edit Post</h3>
     <formEdit v-if="post.id"  type="edit"  @submit="formUpdate" :dataPost="post" ></formEdit>
  </div>
</template>

<script type="text/javascript">

import formEdit from './form-data'
    export default{
         components: {
            formEdit
         },
        data: function(){
                 return {
            post: {}
        }

         },

         created: function(){
            let url = 'http://localhost:8000/posts/'+this.$route.params.id+'/edit';

             Axios.get(url).then((response) =>{

             this.post = response.data;
            });
         },

        methods:{
               formUpdate: function(blog) {
              let url = 'http://localhost:8000/posts/'+this.$route.params.id;
              Axios.patch(url, blog).then((response) => {
              this.$router.push({name: 'Listposts'})
         })
            }
        }
    }
</script>
