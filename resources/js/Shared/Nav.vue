<template>
    <nav class="flex justify-between p-4 align-middle">

        <div>
            <h1>LaravelVue</h1>
        </div>

        <ul class="flex justify-around align-middle">

            <li class="mr-3">
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>

            <li class="mr-3">
                <NavLink href="/about">About</NavLink>
            </li>

            <li class="mr-3">
                <NavLink href="/testing">Testing</NavLink>
            </li>

            <li class="mr-3">
                <!-- method post  -->
                <!-- render as button -->
                <!-- pass data -->
                <!-- :class="{ 'font-bold underline': $page.url.startsWith('/about') }" -->
                <NavLink href="/logout" method="post" as="button" :data="{ foo: 'bar' }">Logout</NavLink>
            </li>

        </ul>
    </nav>
</template>

<script setup>
import NavLink from './NavLink.vue';

</script>
