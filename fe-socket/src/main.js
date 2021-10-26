import Vue from "vue";
import App from "./App.vue";
import store from "./store";

Vue.config.productionTip = false;

import "./assets/index.css";

import Echo from "laravel-echo";

window.Echo = new Echo({
  broadcaster: "socket.io",
  client: require("socket.io-client"),
  host: "http://localhost:6001"
});

import VueCompositionAPI from "@vue/composition-api";
Vue.use(VueCompositionAPI);

// import axios from "axios";
// import VueAxios from "vue-axios";
// Vue.use(VueAxios, axios);

new Vue({
  store,
  render: h => h(App)
}).$mount("#app");
