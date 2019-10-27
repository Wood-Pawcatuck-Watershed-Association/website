<template lang="html">
	<div class=" col-md-4 mb-4" v-if="post">
		<div class="post__inner">
			<div class="post__image--wrapper" v-if="hasThumbnail(post)">
				<img class="post__image img-fluid" :src="hasThumbnail(post)" alt="" />
			</div>
			<div class="post__meta">
				<div class="post__meta--left">
					<h4 class="post__meta--name">{{post.title.rendered}}</h4>
					<div class="post__content" v-html="post.content.rendered"></div>
				</div>
			</div>
		</div>
	</div>	
</template>


<script>

export default {

	props: ['post'],

	computed: {
		//
	},
	data(){
		return {
			//
		}
	},
	methods: {
		hasThumbnail: function(post) {
       if (post && post._embedded['wp:featuredmedia'] && post._embedded['wp:featuredmedia'][0].media_details && post._embedded['wp:featuredmedia'][0].media_details.sizes)
       {
         return  post._embedded['wp:featuredmedia'][0].source_url;
       }
    },
	}
}
</script>

<style lang="css">
</style>