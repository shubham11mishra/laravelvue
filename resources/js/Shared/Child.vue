<template>
    <div>
       <h1> {{ staticProp }}</h1>
       <h1> {{ dynamicProp }}</h1>


        <slot />
    </div>
</template>

<script setup>
defineProps({
    staticProp : String,
    dynamicProp: String
})
</script>

<style lang="scss" scoped>

</style>
