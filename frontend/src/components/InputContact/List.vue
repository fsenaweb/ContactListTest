<template>
  <div v-if="$store.state.user.contacts">
    <div class="listForm" v-for="(contact, index) in user.contacts" :key="index">
      <div class="text-input">
        <span class="contact">{{ contact.contact }}</span>
      </div>
      <div class="arrow">
        <span class="material-icons delete" @click="removeContact(contact.id)">
          cancel
        </span>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
  name: 'listContact',
  data() {
    return {};
  },
  computed: {
    ...mapGetters([
      'user',
    ]),
  },
  methods: {
    ...mapActions([
      'deleteContact',
    ]),
    removeContact(value) {
      this.deleteContact(value);
    },
  },
};
</script>

<style scoped>

</style>
