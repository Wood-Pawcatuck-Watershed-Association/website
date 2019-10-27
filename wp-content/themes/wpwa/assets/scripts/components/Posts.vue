<template lang="html">
  <div class="container">
    <div class="row">
      <div v-if="postsLoading" class="loader">
        <i class="fa-3x fas fa-circle-notch fa-spin"></i>
      </div>
      <transition name="fade">
       <post v-for="post in posts" :key="post.id" :post="post"></post>
      </transition>
    </div>
  </div>
</template>

<script>
// import Component locally rather than making it global in main.js
import Post from './Post.vue';
import axios from 'axios';

export default {
  components: {
    'post': Post
  },
  data: function() {
    return {
    }
  },
  computed:{
    posts() {
      return this.$store.state.posts;
    },
    postsLoading(){
      return this.$store.state.postsLoading;
    }
  },
  mounted() {
    this.$store.dispatch('retrievePosts');
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="css" >
.fade-enter-active, .fade-leave-active {
  transition: opacity .3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
