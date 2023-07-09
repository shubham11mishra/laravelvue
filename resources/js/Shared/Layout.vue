<template>
  <head>
    <title>My app</title>
  </head>
  <header>

    <Nav />
  </header>

  <section class="p-4">
    <slot />
  </section>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from './Nav.vue';

</script>

