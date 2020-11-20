<template>
  <div class="box">
    <h6>Meus Contatos</h6>
    <Form />
    <List />
    <Edit />
    <Buttons />
  </div>
</template>

<script>
import Form from '@/components/Form.vue';
import List from '@/components/InputContact/List.vue';
import Edit from '@/components/InputContact/Edit.vue';
import Buttons from '@/components/Buttons.vue';

export default {
  name: 'Contact',
  components: {
    Buttons,
    List,
    Edit,
    Form,
  },
  data() {
    return {};
  },
};
</script>
