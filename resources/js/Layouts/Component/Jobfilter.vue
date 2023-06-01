<template>
    <form @submit.prevent="filter">
        <div class="m-3">
            <div class="mt-2 flex flex-wrap gap-2 justify-start mr-3">
                <div class="flex flex-nowrap items-center gap-2">

                    <!-- <select name="Category" id="Category"
                        class="block rounded-tl-lg rounded-bl-lg shadow-sm border-gray-300 text-gray-500 text-sm">
                        <option value="null">-- Qualification --</option>
                       </select>

                    <input type="text" placeholder="Applicant Name" class="border border-gray-300 text-sm"> -->
                    <input v-model="filterForm.job_title" type="text" placeholder="Job title"
                        class="rounded-tl-lg rounded-bl-lg border border-gray-300 text-sm">
                    <input v-model="filterForm.department" type="text" placeholder="Department"
                        class="rounded-tr-lg rounded-br-lg border border-gray-300 text-sm">
                </div>
                <button type="submit" class="w-20 bg-gray-200 p-2 rounded-md hover:bg-gray-400 text-sm">Search</button>
                <button @click="clear" type="reset"
                    class="w-20 bg-red-500 text-white p-2 rounded-md hover:bg-red-600 text-sm">Clear</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    filters: Object,
    // editqualifications: Array
})

const filterForm = useForm({
    job_title: props.filters.job_title ?? null,
    department: props.filters.department ?? null,
    // qualification: props.filters.qualification ?? null
})

const filter = () => {
    filterForm.get(route('admin.jobs.index'), {
        preserveScroll: true,
        preserveState: true
    })
}

const clear = () => {
    filterForm.job_title = null,
        filterForm.department = null,
        // filterForm.qualification = null,
        filter()
}
</script>