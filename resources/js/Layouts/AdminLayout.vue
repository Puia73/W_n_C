<template>
    <!-- <div class="bg-gradient-to-tl from-blue-100 via-blue-300 to-blue-400 py-5"> -->
    <div class="border bg-neutral-50 py-5">
        <nav class="flex flex-row justify-between mx-5">
            <div>Main nav/Side bar</div>
            <!-- <div class="flex md:flex-row flex-col gap-5 mx-2"> -->
            <div class="hidden md:flex md:gap-5 md:mx-2">
                <Link :href="route('user.home.index')">
                    <ul>
                        User Home
                    </ul>
                </Link>
                <!-- <Link :href="route('user.applicant.create')">
                <ul>
                    User Registration
                </ul>
                </Link> -->
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
                <Link :href="route('admin.edit-district.index')">
                    <ul>
                        Edit District
                    </ul>
                </Link>
                <!-- <Link :href="route('admin.page.index')">
                <ul>
                    Registered User
                </ul>
                </Link> -->
                <ul>
                    <Link>
                        <div v-if="user" class="flex gap-5">
                            {{ user.name }}
                            <Link
                                :href="route('logout')"
                                method="delete"
                                as="button"
                            >
                                <div>Logout</div>
                            </Link>
                        </div>
                        <div v-else>
                            <Link :href="route('login')">
                                <ul>
                                    Admin Panel
                                </ul>
                            </Link>
                        </div>
                    </Link>
                </ul>
            </div>

            <!-- Show mobile view -->
            <div class="md:hidden flex items-center">
                <button @click="toggleNavbar = !toggleNavbar">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div class="md:hidden py-6 px-2" v-show="toggleNavbar">
            <Link :href="route('user.home.index')" class="block py-2 px-4">
                <ul>
                    User Home
                </ul>
            </Link>
            <!-- <Link :href="route('user.applicant.create')">
                <ul>
                    User Registration
                </ul>
                </Link> -->
            <Link :href="route('admin.home.index')" class="block py-2 px-4">
                <ul>
                    Admin Home
                </ul>
            </Link>
            <Link
                :href="route('admin.qualification.index')"
                class="block py-2 px-4"
            >
                <ul>
                    Edit Qualification
                </ul>
            </Link>
            <Link :href="route('admin.page.index')" class="block py-2 px-4">
                <ul>
                    Registered User
                </ul>
            </Link>
            <ul>
                <Link class="block py-2 px-4">
                    <div v-if="user" class="flex gap-5">
                        {{ user.name }}
                        <Link
                            :href="route('logout')"
                            method="delete"
                            as="button"
                        >
                            <div>Logout</div>
                        </Link>
                    </div>
                    <div v-else>
                        <Link :href="route('login')" class="block py-2 px-4">
                            <ul>
                                Admin Panel
                            </ul>
                        </Link>
                    </div>
                </Link>
            </ul>
        </div>
    </div>

    <div v-if="flashMsg" class="bg-green-300 w-full">
        {{ flashMsg }}
    </div>
    <slot></slot>
</template>

<script setup>
import { computed, ref } from "vue";
import { usePage, Link } from "@inertiajs/vue3";

const flashMsg = computed(() => {
    return usePage().props.flash.msg;
});

const user = computed(() => {
    return usePage().props.user;
});

const toggleNavbar = ref(false);
</script>
