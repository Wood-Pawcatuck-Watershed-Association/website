<template>
  <div class="event__single">
    <div
      v-if="event.logo"
      class="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden"
      :style="{ backgroundImage: 'url(' + event.logo.original.url + ')' }"
    ></div>
    <div
      v-else
      class="h-32 flex-none bg-cover rounded-t text-center overflow-hidden"
      style="background-image: url('https://staging.wpwa.org/wp-content/uploads/2018/04/jaw-canoe.jpg')"
      title="WPWA Event"
    ></div>
    <div
      class="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md"
    >
      <div class="event__details flex">
        <div class="event__details--left">
          <div class="event__details--dateWrapper text-center">
            <p class="event__details--dateMonth text-sm text-red uppercase my-0 font-sans">
              <time>{{formatDateMonth(event.start.local)}}</time>
            </p>
            <p class="event__details--dateDay text-xl text-grey-dark my-0 font-sans">
              <time>{{formatDateDay(event.start.local)}}</time>
            </p>
          </div>
        </div>
        <div class="event__details--right ml-2">
          <div class="event__details--rightInnerTop">
            <h3 class="my-0 text-black font-semibold text-sm">{{event.name.text}}</h3>
            <div class="event__details--dateWrapper">
              <time
                class="event__details--date font-sans text-grey-dark text-xs"
              >{{formatDate(event.start.local)}}</time>
            </div>
            <p class="text-sm text-grey-dark flex items-center font-sans mb-2">
              <span
                v-if="this.eventTickets.ticket_classes && this.eventTickets.ticket_classes[0].cost && this.eventTickets.ticket_classes[0].cost.display"
              >{{this.eventTickets.ticket_classes[0].cost.display}}</span>
              <span v-else>{{this.cost}}</span>
            </p>
          </div>
          <div class="event__details--rightInnerBottom">
            <div class="event__details--buttonWrapper flex justify-between">
              <button
                :data-tippy-content="event.description.html"
                v-if="event.description.html"
                class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded"
              >info</button>
              <button
                :id="eventBriteModalId(event.id)"
                type="button"
                class="bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded"
                v-show="event.status === 'live'"
              >Sign up</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
import "../eventbrite/widgets.js";
import tippy from "tippy.js";
export default {
  props: ["event", "isCron"],
  data() {
    return {
      cost: "",
      eventTickets: WPEVENTBRITE.ticket_classes
        ? WPEVENTBRITE.ticket_classes
        : [],
      ticketsLoading: true
    };
  },
  methods: {
    formatDate(date) {
      return moment(date).format("ddd, MMM Do YYYY, hha");
    },
    formatDateMonth(date) {
      return moment(date).format("MMM");
    },
    formatDateDay(date) {
      return moment(date).format("D");
    },
    getEventTicketPrice(eventID) {
      if (this.eventTickets) {
        if (this.eventTickets.ticket_classes) {
          var filteredEventPrice = this.eventTickets.ticket_classes.filter(
            ticket => {
              return ticket.event_id === eventID;
            }
          );
        } else {
          var filteredEventPrice = this.eventTickets.filter(ticket => {
            return ticket.event_id === eventID;
          });
        }
        if (
          filteredEventPrice &&
          filteredEventPrice[0] &&
          filteredEventPrice[0].cost
        ) {
          this.cost = filteredEventPrice[0].cost.display;
        }
      }
    },
    eventBriteCheckout(eventId) {
      var exampleCallback = function() {
        console.log("Order complete!");
      };
      return EBWidgets.createWidget({
        widgetType: "checkout",
        eventId: eventId,
        modal: true,
        modalTriggerElementId: `eventbrite-widget-modal-trigger-${eventId}`,
        onOrderComplete: exampleCallback
      });
    },
    eventBriteModalId(eventId) {
      return `eventbrite-widget-modal-trigger-${eventId}`;
    },
    fetchEventTickets(endpoint) {
      //Get events and assign to this.events
      axios
        .get(endpoint, {
          params: {
            token: WPEVENTBRITE.token //'I6HEXNTVQFQWEK2BR7AB',
          }
        })
        .then(response => {
          console.log(
            "%cEvent ticket axios response: " + response.status,
            "color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid yellow;"
          );
          if (
            this.eventTickets === undefined ||
            this.eventTickets.length == 0
          ) {
            this.eventTickets = response.data;
          } else {
            //concat events to this.events state
            this.eventTickets.ticket_classes = this.eventTickets.ticket_classes.concat(
              response.data.ticket_classes
            );
          }
          this.ticketsLoading = false;
        })
        .catch(error => {
          console.log(
            "%cEvent ticket axios error: " + error,
            "color: yellow; font-style: italic; font-weight: 500;padding: 2px; border: 1px solid red;"
          );
        });
    }
  },
  created() {
    if (this.eventTickets === undefined || this.eventTickets.length == 0) {
      this.fetchEventTickets(
        `https://www.eventbriteapi.com/v3/events/${this.event.id}/ticket_classes/`
      );
    }
  },
  mounted() {
    this.eventBriteCheckout(this.event.id);
    this.getEventTicketPrice(this.event.id);
    tippy("[data-tippy-content]", {
      theme: "light",
      trigger: "click"
    });
  },
  updated() {}
};
</script>
<style lang="scss">
</style>
