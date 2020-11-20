<template>
  <div v-if="$store.state.loading" class="loading">
    <span class="material-icons">
      cloud_download
    </span>
    <div>Carregando dados...</div>
  </div>
  <div v-else>
    <div class="table-list">
      <table>
        <thead>
        <tr>
          <th>#</th>
          <th>Contatos</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(contact, index) in usersList" :key="index">
          <th>{{ index + 1 }}</th>
          <td>{{ contact.name }} {{ contact.surname }}</td>
          <td>
            <span class="material-icons" @click="setUser(contact.id)">
              play_arrow
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
  name: 'TableList',
  data() {
    return {};
  },
  computed: {
    ...mapGetters([
      'usersList',
    ]),
  },
  methods: {
    ...mapActions([
      'selectUser',
    ]),
    async setUser(value) {
      await this.selectUser(value);
      await this.$router.push('/contact');
    },
  },
};
</script>

<style scoped>

</style>
