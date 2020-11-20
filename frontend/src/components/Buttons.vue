<template>
  <div class="buttons">
    <button type="button" class="save">Salvar</button>
    <button @click="$router.push('/')" type="button" class="cancel">Cancelar</button>
  </div>
</template>

<script>
export default {
  name: 'buttons',
};
</script>
