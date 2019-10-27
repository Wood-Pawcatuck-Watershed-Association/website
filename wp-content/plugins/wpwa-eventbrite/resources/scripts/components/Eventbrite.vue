<template>
  <div>
    <div v-if="!this.isCron">
      <div v-if="this.progress < 50" class="events--loading text-center">
        <i class="fa-6x fas fa-circle-notch fa-spin"></i>
      </div>
      <div class="progress" :class="{ 'fade-out': this.progress >= 100 }">
        <div
          class="progress-bar"
          role="progressbar"
          :style="{width: progress + '%'}"
          aria-valuenow="0"
          aria-valuemin="0"
          aria-valuemax="100"
        >
          <p class="mb-0 text-white">Events Added: {{this.events.length}}</p>
        </div>
      </div>
    </div>
    <div class="wpeventbrite__row">
      <div class="wpeventbrite__col">
        <div v-if="this.eventsLoading" class="wpeventbrite--loading text-center">
          <i class="fa-6x fas fa-circle-notch fa-spin"></i>
        </div>
        <!-- <section class="wpeventbrite-calendar container mx-auto px-2" v-if="events || eventSeriesIds">
      		<div class="flex flex-wrap my-10 -mx-2 justify-center">
      			<div class="w-full lg:w-1/2 px-2 mb-4 h-full" v-for="eventSeriesId in eventSeriesIds" v-if="eventSeriesId.is_series === true">
      				<event-brite-event-card-series :eventSeriesId="eventSeriesId"/>
      			</div>
      		</div>
      		<div class="flex flex-wrap my-10 -mx-2 justify-center">
      			<div class="max-w-xs w-full lg:w-1/2 px-2 mb-4 h-full" v-for="event in events" v-if="event.is_series != true">
      				<event-brite-event-card :event="event"/>
      			</div>
      		</div>
        </section>-->
        <section
          class="wpeventbrite-calendar container mx-auto px-2"
          v-if="events.length && !this.eventsLoading"
        >
          <div class="flex flex-wrap my-10 -mx-2 justify-center">
            <div class="max-w-xs w-full px-2 mb-4 h-full" v-for="event in events" :key="event.id">
              <event-brite-event-card :event="event" :isCron="isCron" />
            </div>
          </div>
        </section>
        <section
          v-show="!events.length && !this.eventsLoading"
          class="container mx-auto px-2 text-center"
        >
          <p>There are no upcoming events at this time.</p>
        </section>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
import EventBriteEventCard from "./EventBriteEventCard";
import EventBriteEventCardSeries from "./EventBriteEventCardSeries";
import "../eventbrite/widgets.js";
export default {
  name: "events-calendar",
  components: {
    "event-brite-event-card": EventBriteEventCard,
    "event-brite-event-card-series": EventBriteEventCardSeries
  },
  data() {
    return {
      isCron: WPEVENTBRITE.events ? true : false,
      events: WPEVENTBRITE.events.events ? WPEVENTBRITE.events.events : [], //[],
      eventSeriesId: "",
      eventSeriesIds: [],
      eventsLoading: WPEVENTBRITE.events.events ? false : true,
      eventSeriesLoading: WPEVENTBRITE.events.events ? false : true,
      progress: WPEVENTBRITE.events.events ? 0 : 100
    };
  },
  methods: {
    // helper function to fetch events from api with axios
    fetchEvents(endpoint) {
      //Get events and assign to this.events
      axios
        .get(endpoint, {
          params: {
            token: WPEVENTBRITE.token, //'I6HEXNTVQFQWEK2BR7AB',
            status: "live",
            //status: "draft",
            order_by: "start_asc"
          }
        })
        .then(response => {
          console.log(
            "%cEvents axios response: " + response.status,
            "color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid yellow;"
          );
          //To make this load faster, lets use the pagination to load events async
          //First we need to check if the component state of events is empty
          //If it is, update events state so we have an initial reference of state
          if (this.events === undefined || this.events.length == 0) {
            //add events to this.events state
            this.events = response.data.events;

            if (response.data.pagination.has_more_items == true) {
              this.fetchEvents(
                `https://www.eventbriteapi.com/v3/organizations/${WPEVENTBRITE.organization_id}/events/?&continuation=${response.data.pagination.continuation}`
              );
            }
            //Once the initial state is populated we can add more events and keep running the fetch request until there is no more pagination
          } else {
            //concat events to this.events state
            this.events = this.events.concat(response.data.events);

            if (response.data.pagination.has_more_items === true) {
              this.fetchEvents(
                `https://www.eventbriteapi.com/v3/organizations/${WPEVENTBRITE.organization_id}/events/?&continuation=${response.data.pagination.continuation}`
              );
            }
          }
          //if the api has pagination lets update the progress bar to show when its done loading/fetching
          if (response.data.pagination.page_count) {
            let currentPageProgress = 100 / response.data.pagination.page_count;
            this.progress = this.progress + currentPageProgress;
          }
          //turn off event loading visual when the api is done being fetched
          this.eventsLoading = false;
        })
        .catch(error => {
          console.log(
            "%cEvents axios error: " + error,
            "color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid red;"
          );
        });
    },
    // This is a visual effect for the events pagination while the api is fetching events
    addProgress: function() {
      this.progress += 100 / this.progress;
    },
    formatDate(date) {
      return moment(date).format("dddd, MMMM Do YYYY");
    }
  },
  created() {
    if (this.events === undefined || this.events.length == 0) {
      this.fetchEvents(
        `https://www.eventbriteapi.com/v3/organizations/${WPEVENTBRITE.organization_id}/events/`
      );
    }
  },
  mounted() {},
  updated() {
    this.events.forEach(event => {
      if (event.is_series === true) {
        if (this.eventSeriesId != event.series_id) {
          this.eventSeriesId = event.series_id;
          this.eventSeriesIds.push({
            event: event,
            is_series: true,
            series_id: event.series_id
          });
        }
      }
    });
    // all events have been loaded do something
    if (this.progress === 100) {
    }
  }
};
</script>
<style lang="scss">
@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}
.fade-out {
  animation-name: fadeOut;
  animation-delay: 0.5s;
  animation-duration: 0.5s;
  animation-fill-mode: both;
}
.progress {
  width: 100%;
  position: fixed;
  margin: 0 auto;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
  border-radius: 1px;
  height: 25px;
}
.progress-count {
  max-width: 500px;
  margin: 0 auto;
}
.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #333;
  transition: width 0.6s ease;
}
</style>
