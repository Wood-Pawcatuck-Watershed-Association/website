<template>
	<div class="event__single" v-if="!eventSeriesLoading">
	  <div v-if="eventSeries.logo.original.url" class="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden" :style="{ backgroundImage: 'url(' + eventSeries.logo.original.url + ')' }">
	  </div>
	  <div v-else class="h-32 flex-none bg-cover rounded-t text-center overflow-hidden" style="background-image: url('https://staging.wpwa.org/wp-content/uploads/2018/04/jaw-canoe.jpg')" title="Woman holding a mug">
	  </div>
	  <div class="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md">
	    <div class="event__details flex">
	    	<div class="event__details--right ml-2 ">
	    		<div class="event__details--top">
		    		<div class="event__details--dateWrapper text-center">
		    				<p class="event__details--dateMonth text-sm text-red uppercase my-0 font-sans">
		    					<time>{{formatDateMonth(eventSeries.start.local)}}</time>
		    					<time>{{formatDateMonth(eventSeries.end.local)}}</time>
		    				</p>
		    				<p class="event__details--dateDay text-xl text-grey-dark my-0 font-sans">
		    					<time>{{formatDateDay(eventSeries.start.local)}}</time>&ndash;
		    					<time>{{formatDateDay(eventSeries.end.local)}}</time>
		    				</p>
						</div>
		    	</div>
	    		<div class="event__details--rightInnerTop">
	    			<h3 class="my-0 text-black font-semibold text-sm text-center">{{this.eventSeries.name.text}}</h3>
			    		<div class="event__details--dateWrapper text-center">
								<time class="event__details--date font-sans text-grey-dark text-xs">
								{{formatDate(this.eventSeries.start.local)}}
								</time>
								&ndash;
								<time class="event__details--date font-sans text-grey-dark text-xs">
								{{formatDate(this.eventSeries.end.local)}}
								</time>
							</div>
			      	<p class="text-sm text-grey-dark flex items-center font-sans mb-2">
								<span>
									{{this.cost}}
								</span>
							</p>
							<div class="event__details--descriptionWrapper">
								<div class="event__details--description">
									<span v-html="eventSeries.description.html"></span>
								</div>
							</div>
	    		</div>
	    		<div class="event__details--rightInnerBottom">
	    			<div class="event__details--buttonWrapper flex justify-between">
	    				<a :href="eventSeries.url" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded no-underline hover:no-underline" target="_blank">info</a>
							<a :href="eventSeries.url" class="bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded no-underline hover:no-underline" target="_blank">Sign up</a>
						</div>
	    		</div>
	    	</div>
	    </div>
	  </div>
	</div>
</template>
<script>
	import axios from 'axios';
	import moment from 'moment';
	import '../eventbrite/widgets.js';
	import tippy from 'tippy.js';
	export default {
		props: ['eventSeriesId'],
		data(){
			return {
				cost: '',
				eventSeries: [],
				eventSeriesLoading: true,
				ticketsLoading: true,
			}
		},
		methods: {
			formatDate(date){
	  		return moment(date).format("ddd, MMM Do YYYY");
	  	},
	  	formatDateMonth(date){
	  		return moment(date).format("MMM");
	  	},
	  	formatDateDay(date){
	  		return moment(date).format("D");
	  	},
	  	fetchEventSeries(endpoint){
				console.log('%cEvent Series Fetched',"color: green; border: 1px solid yellow;padding: 2px; font-weight: 700;");
				//Get events and assign to this.events to populate fullcalendar
				axios.get(endpoint, {
					params: {
						token: WPEVENTBRITE.token,//'I6HEXNTVQFQWEK2BR7AB',
					}
				})
				.then(response => {
							console.log('%cEvent series axios response: ' + response.status,"color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid yellow;");
							if (this.eventSeries === undefined || this.eventSeries.length == 0) {
								console.log(response.data);
								this.eventSeries = response.data;
							} else {
								//concat events to this.events state
								this.eventSeries = this.eventSeries.concat(response.data.eventSeries);
							}
							this.eventSeriesLoading = false;
	        })
	        .catch(error => {
	          console.log('%cEvent ticket axios error: ' + error,"color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid red;");
	        })

			},
		},
		created(){
			if (this.eventSeries === undefined || this.eventSeries.length == 0) {
				this.fetchEventSeries(`https://www.eventbriteapi.com/v3/series/${this.eventSeriesId.series_id}/`);
			}
		},
		mounted(){

		},
		updated(){
			//console.log(this.ticketsLoading);
		}
	}
</script>
<style lang="scss">

</style>
