<template>
  <div class="home">
    <div class="product-card bg-yellow-300 items-center h-screen">
      <div class="flex justify-center p-5">
        <!-- <div class="mr-3" v-if="user">
          <img width="50" height="50" :src="user.photoURL" alt="fotoGmail" />
        </div> -->
        <!-- <button
          v-if="!isLogin"
          @click="signIn"
          class="
            px-10
            py-4
            bg-blue-400
            text-white text-xs
            font-bold
            uppercase
            rounded
          "
        >
          Sign In
        </button>
        <button
          v-else
          @click="signOut"
          class="
            px-10
            py-4
            bg-blue-400
            text-white text-xs
            font-bold
            uppercase
            rounded
          "
        >
          Sign Out
        </button> -->
      </div>
      <div class="flex p-1 justify-around">
        <!-- <template v-for="data in data.cars" :key="data.id"> -->
        <ProductCard />
        <!-- </template> -->
      </div>
    </div>
  </div>
</template>

<script>
// import HelloWorld from "./components/HelloWorld.vue";
import ProductCard from "@/components/ProductCard.vue";

import axios from "axios";

export default {
  name: "App",
  components: {
    // HelloWorld
    ProductCard
  },
  data() {
    return {
      msg: ""
    };
  },
  methods: {
    getData() {
      axios.get("http://127.0.0.1:8000/api/show").then(response => {
        console.log(response.data);
      });
    }
  },
  mounted() {
    this.getData;

    window.Echo.channel("EveryoneChannel").listen(".EveryoneMessage", function(
      e
    ) {
      console.log(e);
    });
  }
};
</script>
