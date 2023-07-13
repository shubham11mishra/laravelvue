<template>
    <Layout>
        <h1>Testing {{date}}</h1>
        <Child staticProp="static prop" :dynamicProp="obj.dProp"  >slot value</Child>
        <img :src="`https://ui-avatars.com/api/?name=${obj.name}`" :alt="obj.name" class="rounded" >
        <input class="border" type="text" v-model="obj.name">
    </Layout>
</template>

<script setup>

import Child from '@/Shared/Child.vue';
import { ref,reactive } from 'vue';
// const dProp = ref('dynamic prop')
// const name = ref('shubham')
const date = ref(Date.now())
const obj = reactive({
    dProp :'dynamic prop',
    name : 'shubham'
})
</script>
