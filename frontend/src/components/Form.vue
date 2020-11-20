<template>
  <div class="row mb-4">
    <div class="col-12 col-md-6">
      <div class="form-group">
        <label for="name">Nome</label>
        <input :value="$store.state.user.name"
               type="text"
               class="form-control-file"
               id="name">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="form-group">
        <label for="surname">Sobrenome</label>
        <input :value="$store.state.user.surname"
               type="text"
               class="form-control-file"
               id="surname">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Form',
  data() {
    return {
    };
  },

};
</script>
