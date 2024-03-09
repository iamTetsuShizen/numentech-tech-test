<template>
  <div>
    <h2>Create Todo</h2>
    <form @submit.prevent="createTodo">
      <label>Title:</label>
      <input v-model="form.title"/>
      <label>Description:</label>
      <textarea v-model="form.description"></textarea>
      <button type="submit">Create Todo</button>
    </form>
  </div>
</template>

<script>
import { reactive, ref } from 'vue';
import { router } from '@inertiajs/vue3'

export default {
  setup() {

    const form = reactive({
        title: null,
        description: null,
        completed: false
    });

    const createTodo = () => {
      router.post('/todos', form);
    };

    return {form, completed, createTodo };
  },
};
</script>