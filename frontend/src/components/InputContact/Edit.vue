<template>
  <div>
    <div :class="showInput ? 'editForm' : 'initialForm'">
      <div class="bullet">
        <img src="@/assets/images/bullet-input.svg" alt="">
      </div>
      <div class="text-input">
        <input v-show="showInput" v-model="info" ref="input" type="text" class="input-contact"/>
        <span @click="hideDescription" v-show="showText">
        Adicionar Contato (Telefone, email, twitter, facebook)
      </span>
      </div>
      <div class="arrow">
        <img class="grow"
             src="@/assets/images/arrow_enter.svg" alt="Botão de cadastrar"
             @click="add">
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex';

export default {
  name: 'InputContact',
  data() {
    return {
      info: '',
      showInput: false,
      showText: true,
    };
  },
  methods: {
    ...mapActions([
      'addContact',
    ]),
    add() {
      if (this.info === '') return;
      const data = {
        contact: this.info,
        id: this.$store.state.user.id,
      };
      this.addContact(data);
      this.hideDescription();
    },
    hideDescription() {
      this.showInput = !this.showInput;
      this.showText = !this.showInput;
      this.info = '';
      this.$nextTick(() => this.$refs.input.focus());
    },
  },
};
</script>
