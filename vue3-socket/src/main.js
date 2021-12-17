import { createApp } from "vue";
import App from "./App.vue";

import Echo from "laravel-echo";

window.Echo = new Echo({
  broadcaster: "socket.io",
  client: require("socket.io-client"),
  host: "http://localhost:6001"
});

import "./assets/css/index.css";

createApp(App).mount("#app");
