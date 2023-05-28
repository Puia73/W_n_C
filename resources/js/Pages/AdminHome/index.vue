<template>
    <div class="py-5 text-3xl font-medium ml-5">
        Admin Dashboard
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-6 h-56 gap-5 m-4">
        <!-- <div class="col-span-2 bg-gradient-to-br from-blue-600 to-blue-200 text-white rounded-lg"> -->
        <div class="col-span-2 border border-gray-400 rounded-lg">
            <div>

                <!-- <div class="grid grid-cols-2 gap-2"> -->
                <div class="">
                    <div class="mt-10 text-start m-3 text-xl font-serif">
                        Job opening
                        <div class="text-4xl text-start py-2">
                            {{ jobsOpening }}
                        </div>
                        <Link :href="route('admin.jobs.index')">
                        <div class="text-sm text-start mt-1 hover:text-blue-400">
                            Click for details
                        </div>
                        </Link>
                    </div>
                    <!-- <div class="mt-10 text-end m-3 text-xl font-serif">
                        Job opening
                        <div class="text-4xl text-end py-2">
                            {{ jobsOpening }}
                        </div>
                        <Link :href="route('admin.jobs.index')">
                        <div class="text-sm text-end mt-1">
                            Click for details
                        </div>
                        </Link>
                    </div> -->
                </div>



                <br><br>
                <hr>
                <Link :href="route('admin.home.create')">
                <div class="flex justify-between font-medium text-start m-3">
                    Add new job
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
                </Link>
            </div>
        </div>
        <div class="col-span-2 border border-gray-400 rounded-lg">
            <Link>
            <div>
                <div class="mt-10 text-start m-3 text-xl font-serif">
                    Application status
                </div>
                <div class="text-4xl text-start m-3">
                    0
                </div>
                <div>
                    <Link :href="route('admin.app-status.index')">
                    <div class="text-sm text-start mt-1 m-3 hover:text-blue-400">
                        Click for details
                    </div>
                    </Link>
                </div>
                <br><br>
                <hr>
                <div class="flex justify-between font-medium text-start m-3">
                    View details
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </div>
            </Link>
        </div>
        <div class="col-span-2 border border-gray-400 rounded-lg">
            <Link>
            <div>
                <div class="mt-10 text-start m-3 text-xl font-serif">
                    Registered User
                </div>
                <div class="text-4xl text-start m-3">
                    asdf
                </div>
                <br><br>
                <hr>
                <div class="flex justify-between font-medium text-start m-3">
                    View details
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </div>
            </Link>
        </div>
    </div>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    addjob: Object,
    jobsOpening: Array
})
</script>