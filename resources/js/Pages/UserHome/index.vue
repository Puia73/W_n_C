<template>
    <!-- <div v-for="addjob in addjobs">
        <div class="border py-5 m-5">
            {{ addjob.job_title }}
            <div>
            {{ addjob.department }}
            </div>
        </div>
    </div> -->

    <div class="mt-3 mb-5 text-lg text-center underline uppercase">
        Job opening
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-3">
        <div v-for="addjob in addjobs" class="">
            <div class="row-span-6 border border-gray-300 rounded-lg">
                <div class="mt-8 text-start m-3 font-medium">
                    <div class="text-lg my-1">
                        {{ addjob.job_title }}
                        <div class="text-gray-500 text-sm">
                            {{ addjob.department }}, {{ addjob.district }}
                        </div>
                    </div>
                    <div class="text-lg text-start font-medium py-3">
                        No. of Post - {{ addjob.No_of_post }}
                    </div>
                    <Link>
                    <div class="flex justify-between">
                        <div class="text-sm text-start mt-1 hover:text-blue-400">
                            Last date of submission {{ addjob.date_of_sub }}
                        </div>
                        <Link :href="route('user.home.show', addjob.id)">
                        <div class="bg-gray-300 p-1 w-16 mx-2 rounded-lg  text-center hover:bg-gray-400 hover:text-white">
                            <Button class="text-sm">
                                Apply
                            </Button>
                        </div>
                        </Link>
                    </div>
                    </Link>
                </div>
                <hr>
                <Link :href="route('user.home.show', addjob.id)">
                <div class="flex justify-between font-medium text-start m-3 text-sm">
                    Click for details
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
    </div>















    <!-- <div v-for="addjob in addjobs" class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-6 h-56 gap-5 py-4 m-4 mb-10">
        <div class="col-span-2 border border-gray-300 rounded-lg">
            <div class="">
                <div class="mt-8 text-start m-3 font-medium">
                    <div class="text-lg my-1">
                        {{ addjob.job_title }}
                        <div class="text-gray-500 text-base">
                            {{ addjob.department }}, {{ addjob.district }}
                        </div>
                    </div>
                    <div class="text-2xl text-start font-medium py-3">
                        No. of Post - {{ addjob.No_of_post }}
                    </div>
                    <Link>
                    <div class="flex justify-between">
                        <div class="text-sm text-start mt-1 hover:text-blue-400">
                            Last date of submission {{ addjob.date_of_sub }}
                        </div>
                        <Link :href="route('user.home.show', addjob.id)">
                        <div class="bg-green-300 p-1 w-16 mx-2 rounded-lg  text-center hover:bg-green-400">
                            <Button class="text-sm">
                                Apply
                            </Button>
                        </div>
                        </Link>
                    </div>
                    </Link>
                </div>
            </div>
            <hr>
            <Link :href="route('user.home.show', addjob.id)">
            <div class="flex justify-between font-medium text-start m-3">
                Click for details
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
            </Link>
        </div>
    </div> -->
</template>


<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    addjobs: Object
})
</script>