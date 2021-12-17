<template>
  <div class="text-center">
    <h1>SEE CONSOLE LOG</h1>
  </div>
</template>

<script>

export default {
  name: "App",
  mounted() {
    window.Echo.channel("EveryoneChannel").listen(".EveryoneMessage", function(
      e
    ) {
      console.log(e);
    });
  }
};
</script>
