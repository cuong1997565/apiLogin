<template>
        <form v-on:submit.prevent = "formSubmit">
             <div class="form-group">
                <label for="add-title">Title</label>
                <input  id="add-title"  v-model="post.title " class="form-control" required />
              </div>

              <div class="form-group">
                <label for="add-body">Body</label>
                <textarea class="form-control" rows="10" v-model="post.body"></textarea>
              </div>
            <button class="btn btn-xs btn-default" type="submit"><span v-if="this.type === 'create'">Tạo bài viết</span><span v-else>Lưu lại</span></button>
         <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
            </form>
</template>


<script>
    export default {
        data:function(){
            return {
                post:{
                      title: '',
                      body : ''
                }
             }


        },
    props: {
        type: {
            type: String,
            default: 'create'
        },
        dataPost: {
            type: Object,
            default: () => {
                return {
                 title: '',
                 body : ''
                }
            }
        }
    },

        methods:{
            formSubmit:function(){
                let blog = Object.assign({}, this.post)
                this.$emit('submit',blog);
            },

        },

        created(){
            this.post =Object.assign({},this.post,this.dataPost)
        }

    }
</script>
