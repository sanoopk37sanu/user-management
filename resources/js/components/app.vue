<template>
  <div id="app">
    <HeaderComponent />
    <main class="container" >
      <router-view />
    </main>
    <FooterComponent />
  </div>
</template>

<script>
import HeaderComponent from './HeaderComponent.vue';
import FooterComponent from './FooterComponent.vue';
export default {
  components: {
    HeaderComponent,
    FooterComponent,
  },
};
</script>

<style>
/* Global styles */
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  background-color: #f8f9fa;
}

main {
  min-height: 80vh; /* Adjust this value as needed */
}
</style>
