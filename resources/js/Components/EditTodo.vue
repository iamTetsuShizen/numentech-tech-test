<template>
  <div>
    <h2>Edit Todo</h2>
    <form @submit.prevent="updateTodo">
      <label>Title:</label>
      <input v-model="todo.title" required />
      <label>Description:</label>
      <textarea v-model="todo.description"></textarea>
      <button type="submit">Update Todo</button>
    </form>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

export default {
  setup() {
    const { data, put } = usePage().props;

    const todo = ref(data.todo);

    const updateTodo = () => {
      // Send a PUT request to update the Todo
      put(`/todos/${todo.value.id}`, { title: todo.value.title, description: todo.value.description });
    };

    // Fetch data on component mount
    onMounted(() => {
      // Fetch the specific Todo from the backend using Inertia
      // This assumes that the backend is sending 'todo' data
      put(`/todos/${todo.value.id}`);
    });

    return { todo, updateTodo };
  },
};
</script>