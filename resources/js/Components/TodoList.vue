<template>
  <div>
    <h2>Todos</h2>
    <ul>
      <li v-for="todo in todos" :key="todo.id">
        {{ todo.title }}
        {{ todo.description }}
        <button @click="editTodo(todo)">Edit</button>
        <button @click="deleteTodo(todo)">Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import { usePage } from '@inertiajs/vue3';

export default {
  setup() {
    const { data, post, destroy } = usePage().props;

    //const todos = ref(data.todos) || [];
    const todos = ref([]);

    const editTodo = (todo) => {
        console.log(data);
        console.log(post);
        console.log(destroy);
      // Navigate to the edit page using Inertia
      // You should have an 'Edit.vue' page
      //post(`/todos/${todo.id}/edit`);
      console.log('edit');
    };

    const deleteTodo = (todo) => {
      // Send a DELETE request to delete the Todo
      //destroy(`/todos/${todo.id}`);
      console.log('delete');
    };

    // Fetch data on component mount
    onMounted(() => {
      // Fetch Todos from the backend using Inertia
      // This assumes that the backend is sending 'todos' data
      //post('/todos');

      todos.value.push(
        { title: 'test one', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pellentesque leo. Donec eget sapien elementum, pharetra massa id, eleifend nulla.', completed: false },
        { title: 'test two', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pellentesque leo. Donec eget sapien elementum, pharetra massa id, eleifend nulla.', completed: false }
      );
    });

    return { todos, editTodo, deleteTodo };
  },
};
</script>