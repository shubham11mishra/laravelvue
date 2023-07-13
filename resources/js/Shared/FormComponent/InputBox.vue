<template>
    <label class="block">
        <span class="text-sm text-gray-700">
            <slot />
        </span>
        <input :type="type" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"
            class="block w-full p-2 mt-1 border">
        <span v-if="error" v-text="error" class="text-xs text-red-600"></span>
    </label>
</template>

<script setup>
defineProps({
    type: String,
    modelValue: String,
    error: String
});
defineEmits(['update:modelValue'])

</script>


