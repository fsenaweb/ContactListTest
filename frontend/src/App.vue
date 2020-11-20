<template>
  <div id="app">
    <transition
      name="fade"
      mode="out-in"
    >
      <router-view/>
    </transition>
  </div>
</template>

<script>

export default {
  name: 'App',
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch('getData');
  },
};
</script>

<style lang="scss" src="@/assets/styles/_main.scss"/>
