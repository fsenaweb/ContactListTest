import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    users: [],
    user: null,
    loading: true,
  },
  getters: {
    user(state) {
      return state.user;
    },
    usersList(state) {
      return state.users;
    },
  },
  mutations: {
    GET_USERS(state, payload) {
      state.users = payload;
    },
    USER(state, payload) {
      state.user = payload;
    },
    ADD_CONTACT(state, payload) {
      state.user.contacts.push(payload);
    },
    REMOVE_CONTACT(state, payload) {
      state.user.contacts.splice(
        state.user.contacts.findIndex(
          (contact) => contact.id === payload,
        ), 1,
      );
    },
    SET_LOADING(state, value) {
      state.loading = value;
    },
  },
  actions: {
    getData({ dispatch, commit }) {
      dispatch('setLoading', true);
      return axios.get(`${process.env.VUE_APP_URL_API}/contact-book`)
        .then((response) => {
          commit('GET_USERS', response.data.data);
          dispatch('setLoading', false);
        });
    },
    selectUser({ commit }, value) {
      return axios.get(`${process.env.VUE_APP_URL_API}/contact-book/${value}`)
        .then((response) => {
          commit('USER', response.data.data);
        });
    },
    addContact({ commit }, value) {
      axios.post(`${process.env.VUE_APP_URL_API}/contacts`, {
        contact: value.contact,
        contact_book_id: value.id,
      });
      commit('ADD_CONTACT', value);
    },
    deleteContact({ commit }, value) {
      axios.delete(`${process.env.VUE_APP_URL_API}/contacts/${value}`);
      commit('REMOVE_CONTACT', value);
    },
    setLoading({ commit }, value) {
      commit('SET_LOADING', value);
    },
  },
});
