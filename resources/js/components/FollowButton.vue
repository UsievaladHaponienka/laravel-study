<template>
   <div> <!--All code msut be be inside one div -->
       <button class="btn btn-primary" style="margin-left: 6px" @click="followUser">Follow</button>
   </div>
</template>

<script>
    export default {
        props: ['userId'], //Accept arguments

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        console.log(response)
                    });
            }
        }
    }
</script>
