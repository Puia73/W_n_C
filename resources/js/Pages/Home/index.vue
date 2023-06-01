<template>
    <div class="mx-10 mt-20">
        <div>
            <!-- Home -->
        </div>
        <div class="flex justify-center py-20 border border-gray-300 mx-20 rounded-lg bg-gradient-to-tr from-purple-200 via-blue-500 to-purple-100 hover:bg-blue-400 text-white text-3xl">
            <Link :href="route('applicant.create')">
            Registration Page
            </Link>
        </div>
    </div>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';

</script>