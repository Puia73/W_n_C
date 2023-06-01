<template>
    <div class="container mx-5 text-center py-4 text-3xl font-serif und">
        Registration list
    </div>

    <div>
        <Applicantfilter :filters="filters" :editqualifications="editqualifications" />
    </div>


    <div class="m-3">
        <table class="w-full text-justify shadow-lg">
            <thead>
                <tr class="border bg-gradient-to-tl from-blue-100 via-blue-300 to-blue-400">
                    <th class="p-2">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Qualification</th>
                    <th>Mark in Percentage (%)</th>
                    <th>Work Experience</th>
                    <th>Date of submission</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="applicant in applicants.data" :key="applicant.id"
                    class="border text-start hover:bg-gray-100 text-sm">
                    <td class="p-2">{{ applicant.id }}</td>
                    <td>
                        <Link :href="route('admin.page.show', applicant.id)">
                        {{ applicant.name }}
                        </Link>
                    </td>
                    <td>{{ applicant.email }}</td>
                    <td>{{ applicant.contact }}</td>
                    <td>{{ applicant.qualification }}</td>
                    <td>{{ applicant.percentage }}</td>
                    <td>{{ applicant.work_experience }}</td>
                    <td>{{ useDateFormat(applicant.created_at, 'DD-MM-YYYY').value }}</td>
                    <!-- <td>{{ useDateFormat(admincategory.created_at, 'DD-MM-YYYY').value }}</td> -->
                    <td>
                        <Link :href="route('admin.page.edit', applicant.id)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 p-1 hover:bg-blue-200 hover:rounded-lg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.page.destroy', applicant.id)" method="DELETE" as="button">
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
    <div v-if="applicants.data.length" class="w-full flex justify-center mt-5 mb-8">
        <Paginate :links="applicants.links" />
    </div>
    <div v-else
        class="text-center mt-20 border border-blue-200 p-2 m-80 hover:bg-gradient-to-r from-blue-400 via-blue-100 to-blue-400 text-sm font-medium shadow-lg">
        No Applicants!
    </div>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'
import Paginate from '@/Layouts/Component/Paginate.vue';
import Applicantfilter from '@/Layouts/Component/Applicantfilter.vue';
import { useDateFormat } from '@vueuse/core'

defineProps({
    applicants: Object,
    filters: Object,
    editqualifications: Array
})
</script>