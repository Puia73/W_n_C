<template>
    <div class="border bg-neutral-50 py-5">
        <nav class="flex flex-row justify-between mx-5">
            <div>
                Main nav/Side bar
            </div>
            <div class="flex gap-5 mx-2">
                <Link :href="route('user.home.index')">
                <ul>
                    Home
                </ul>
                </Link>
                <!-- <Link :href="route('admin.home.index')">
                <ul>
                    Admin Home
                </ul>
                </Link> -->
                <!-- <Link :href="route('login')">
                <ul>
                    Admin Panel
                </ul>
                </Link> -->
            </div>
        </nav>
    </div>

    <div v-if="flashMsg" class="bg-green-300 w-full">
        {{ flashMsg }}</div>
    <slot></slot>
</template>


<script setup>
import { computed } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'

const flashMsg = computed(() => {
    return usePage().props.flash.msg
});

</script>