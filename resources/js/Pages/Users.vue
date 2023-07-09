<template>
    <Head>
        <title>Users</title>
        <meta name="description" content="Home page">
    </Head>
    <Layout>
        <div class="w-2/4 mx-auto">
            <h1 class="text-lg text-center">Users </h1>
            <ul class="border divide-y divide-gray-100 border-spacing-0">

                <li v-for="user in users.data" :key="user.id" class="flex justify-between p-2 align-middle">
                    <div>{{ user.name }}</div>
                    <div>{{ user.email }}</div>
                    <div>Edit</div>
                </li>

            </ul>
            <div>

                <Link type="button" v-for="link in users.links" :href="link.url" v-html="link.label" :class="{'underline' : $page}" class="p-2">

                </Link>

            </div>
        </div>


    </Layout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
// import Layout from '../Shared/Layout.vue';
defineProps({
    users: Object
});

</script> 