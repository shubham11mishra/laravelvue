<template>
  <Link :class="{ 'font-bold underline': active }" class="hover:underline">
  <slot />
  </Link>
</template>

<script setup>

import { Link } from '@inertiajs/vue3';

defineProps({
  active: Boolean
})

</script>

