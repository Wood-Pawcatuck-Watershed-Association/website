import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)
axios.defaults.baseURL = WPREST.root

export const store = new Vuex.Store({
  state: {
  	posts: [],
  	postsLoading: true,
  },
	actions: {
		retrievePosts(context) {
      axios.get('wp/v2/posts?_embed')
        .then(response => {
          context.commit('retrievePosts', {
          	posts: response.data,
          	postsLoading: false	
          })
          console.log('WordPress Rest API Status: ' + response.status);
        })
        .catch(error => {
          console.log(error)
        })
    }
  },
  mutations: {
    retrievePosts(state, {posts, postsLoading}) {
      state.posts = posts,
      state.postsLoading = postsLoading
    },
  },
  getters: {

  },  
  modules: {
    
  },
});