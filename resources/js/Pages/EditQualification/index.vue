<template>
    <div class="grid grid-cols-6">
        <div class="m-3 col-span-3">
            <!-- <div class="bg-blue-300 p-1 m-3 w-32 text-center rounded-lg shadow-lg">
                <Link :href="route('admin.qualification.create')">
                Add new
                </Link>
            </div> -->
            <!-- <div v-for="editqualification in editqualifications">
            {{ editqualification.qualification }}
        </div> -->

            <div class="mx-56 py-5">
                <table class="w-96 text-justify shadow-lg">
                    <thead>
                        <tr class="border bg-gradient-to-tl from-blue-100 via-blue-300 to-blue-400">
                            <th class="p-2">Id</th>
                            <th>Qualification</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="editqualification in editqualifications" :key="editqualification.id"
                            class="border text-start hover:bg-gray-100 text-sm">
                            <td class="p-2">{{ editqualification.id }}</td>
                            <td>
                                <Link :href="route('admin.qualification.show', editqualification.id)">
                                {{ editqualification.qualification }}
                                </Link>
                            </td>

                            <td>
                                <Link :href="route('admin.qualification.edit', editqualification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 p-1 hover:bg-blue-200 hover:rounded-lg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                                </Link>
                            </td>
                            <td>
                                <Link :href="route('admin.qualification.destroy', editqualification.id)" method="DELETE"
                                    as="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 p-1 hover:bg-red-300 hover:rounded-lg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-10 m-3 mt-10 col-span-3">
            <form @submit.prevent="add">
                <div class="m-8 border p-10">
                    <div class="justify-center flex gap-5 items-center">
                        <label for="" class="text-sm items-center">Educational Qualification</label>
                        <input v-model="form.qualification" type="text" class="border border-gray-300 rounded-lg shadow-lg">
                        <div v-if="form.errors.qualification" class="text-red-400 text-sm">
                            {{ form.errors.qualification }}
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <button type="submit" class="bg-blue-300 p-1 m-6 w-96 rounded-lg shadow-lg">Add</button>
                    </div>
                </div>
            </form>
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
import { useForm } from '@inertiajs/vue3';


defineProps({
    editqualifications: Object
})


const form = useForm({
    qualification: null
})

const add = () => {
    form.post(route('admin.qualification.store'))
    form.qualification = ''
}

</script>