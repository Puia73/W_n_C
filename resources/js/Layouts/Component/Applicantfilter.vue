<template>
    <form @submit.prevent="filter">
        <div class="">
            <div class="mt-2 flex flex-wrap gap-2 justify-end mr-3">
                <div class="flex flex-nowrap items-center gap-2">

                    <select v-model="filterForm.qualification" name="Category" id="Category"
                        class="block rounded-md shadow-sm border-gray-300 text-gray-500 text-sm">
                        <option value="null">-- Qualification --</option>
                        <option v-for="editqualification in editqualifications" :value="editqualification.qualification">
                            {{ editqualification.qualification }}</option>
                    </select>

                    <input v-model="filterForm.name" type="text" placeholder="Name"
                        class="rounded-md border border-gray-300 text-sm">
                </div>
                <button type="submit" class="w-20 bg-blue-200 p-2 rounded-md hover:bg-blue-400 text-sm">Search</button>
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
    editqualifications: Array
})

const filterForm = useForm({
    name: props.filters.name ?? null,
    qualification: props.filters.qualification ?? null
})

const filter = () => {
    filterForm.get(route('admin.page.index'), {
        preserveScroll: true,
        preserveState: true
    })
}

const clear = () => {
    filterForm.name = null,
        filterForm.qualification = null,
        filter()
}
</script>