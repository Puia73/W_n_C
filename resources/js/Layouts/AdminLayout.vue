<template>
    <!-- <div class="bg-gradient-to-tl from-blue-100 via-blue-300 to-blue-400 py-5"> -->
    <div class="border bg-neutral-50 py-5">
        <nav class="flex flex-row justify-between mx-5">
            <div>
                Main nav/Side bar
            </div>
            <div class="flex gap-5 mx-2">
                <Link :href="route('user.home.index')">
                <ul>
                    User Home
                </ul>
                </Link>
                <Link :href="route('user.applicant.create')">
                <ul>
                    User Registration
                </ul>
                </Link>
                <Link :href="route('admin.home.index')">
                <ul>
                    Admin Home
                </ul>
                </Link>
                <Link :href="route('admin.qualification.index')">
                <ul>
                    Edit Qualification
                </ul>
                </Link>
                <Link :href="route('admin.page.index')">
                <ul>
                    Registered User
                </ul>
                </Link>
                <ul>
                    <div v-if="user" class="flex gap-5">
                        {{ user.name }}
                        <Link :href="route('logout')" method="delete" as="button">
                        <div>
                            Logout
                        </div>
                        </Link>
                    </div>
                    <div v-else>
                        <Link :href="route('login')">
                        <ul>
                            Admin Panel
                        </ul>
                        </Link>
                    </div>
                </ul>
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

const user = computed(() => {
    return usePage().props.user
})

</script>