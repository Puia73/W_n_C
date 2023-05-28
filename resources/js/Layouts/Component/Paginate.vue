<template>
    <div class="flex gap-1">
        <Link v-for="(link, index) in links" :key="index" :href="link.url" v-html="link.label" class="py-2 px-4 rounded-md"
            :class="{ 'bg-blue-200': link.active }">
        </Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    links: Array
})
</script>