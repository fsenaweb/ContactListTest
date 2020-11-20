<template>
  <div class="content">
    <h2 class="py-4 font-weight-bold">Meus Contatos</h2>
    <TableList />
  </div>
</template>

<script>
import TableList from '@/components/TableList.vue';

export default {
  name: 'Home',
  components: {
    TableList,
  },
};
</script>
