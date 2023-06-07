<template>
    <!-- <pre>
        {{ applicants }}
    </pre> -->

    <div class="mt-5 mb-8 text-lg text-center underline uppercase">
        Application Status
    </div>

    <div>
        <Applicantfilter :filters="filters" :id="job_id" />
    </div>


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Image</th>
                                <th scope="col" class="px-6 py-4">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    Contact
                                </th>
                                <th scope="col" class="px-6 py-4">Qualification</th>
                                <th scope="col" class="px-6 py-4 border border-black">HSLC (%)</th>
                                <th scope="col" class="px-6 py-4 border border-black">
                                    HSSLC (%)
                                </th>
                                <th scope="col" class="px-6 py-4 border border-black">Graduate (%)</th>
                                <th scope="col" class="px-6 py-4 border border-black">PostGraduate (%)</th>
                                <th scope="col" class="px-6 py-4">Aadhaar</th>
                                <th scope="col" class="px-6 py-4 text-center">Work Experience</th>
                                <th scope="col" class="px-6 py-4">Submitted at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="applicant in applicants.data" :key="applicant.id"
                                class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">
                                    {{ applicant.id }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ applicant.name }}
                                </td>
                                <td class="py-4">
                                    <img :src="`/storage/${applicant.passport_photo}`" alt="Applicant's pic" class="w-full">
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ applicant.email }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ applicant.contact }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ applicant.qualification }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 border border-black">
                                    {{ applicant.hslc_mark_percent }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 border border-black">
                                    {{ applicant.hsslc_mark_percent }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 border border-black">
                                    {{ applicant.graduate_mark_percent }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 border border-black">
                                    {{ applicant.post_graduate_mark_percent }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ applicant.aadhaar }}
                                </td>
                                <td class="py-4 w-full">
                                    {{ applicant.work_experience }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ useDateFormat(applicant.created_at, 'DD-MM-YYYY').value }}
                                </td>
                                <!-- <td class="whitespace-nowrap px-6 py-4">
                                    <Link :href="route(
                                        'admin.applicant-list.show',
                                        addjob.id
                                    )
                                        ">
                                    <button class="hover:bg-gray-300 p-2 rounded-lg">
                                        Applicant list
                                    </button>
                                    </Link>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <Link :href="route('admin.jobs.show', addjob.id)
                                        ">
                                    <button class="hover:bg-gray-300 my-3 p-2 rounded-lg">
                                        Job details
                                    </button>
                                    </Link>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <Link :href="route('admin.jobs.edit', addjob.id)
                                        ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                    </Link>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <Link :href="route(
                                        'admin.jobs.destroy',
                                        addjob.id
                                    )
                                        " method="delete" as="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    </Link>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
























    <!-- Table -->

    <!-- <div class="m-3">
        <Applicantfilter :filters="filters" :id="job_id" />

        <table class="w-full text-justify shadow-lg">
            <thead>
                <tr class="border bg-gray-200 text-sm">
                    <th class="px-2 py-2">Id</th>
                    <th class="">Applicant Name</th>
                    <th class="px-10"></th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Qualification</th>
                    <th class="border border-gray-400 text-center text-xs">
                        HSLC (%)
                    </th>
                    <th class="border border-gray-400 text-center text-xs">
                        HSSLC (%)
                    </th>
                    <th class="border border-gray-400 text-center text-xs">
                        Graduate (%)
                    </th>
                    <th class="border border-gray-400 text-center text-xs">
                        Post Graduate (%)
                    </th>
                    <th class="text-center">Aadhaar</th>
                    <th class="text-center">Work Experience</th>
                    <th class="text-center">Submitted at</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="applicant in applicants.data" class="border text-start hover:bg-gray-100 text-sm">
                    <td class="p-2">{{ applicant.id }}</td>
                    <td class="">{{ applicant.name }}</td>
                    <td>
                        <img :src="`/storage/${applicant.passport_photo}`" alt="Applicant's photo"
                            class="rounded-full w-28 h-28 mx-auto my-2" />
                    </td>
                    <td class="px-2">{{ applicant.email }}</td>
                    <td>{{ applicant.contact }}</td>
                    <td class="">{{ applicant.qualification }}</td>
                    <td class="border border-gray-400 text-center">
                        {{ applicant.hslc_mark_percent }}
                    </td>
                    <td class="border border-gray-400 text-center">
                        {{ applicant.hsslc_mark_percent }}
                    </td>
                    <td class="border border-gray-400 text-center">
                        {{ applicant.graduate_mark_percent }}
                    </td>
                    <td class="border border-gray-400 text-center">
                        {{ applicant.post_graduate_mark_percent }}
                    </td>
                    <td class="text-center px-1">{{ applicant.aadhaar }}</td>
                    <td class="px-5 py-2 w-80 text-center">
                        {{ applicant.work_experience }}
                    </td>
                    <td class="text-center">
                        {{
                            useDateFormat(applicant.created_at, "DD-MM-YYYY")
                                .value
                        }}
                    </td>
                    <td>
                        <Link :href="route('admin.app-status.show', applicant.id)">
                        Details
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.jobs.show', addjob.id)">
                        Details
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.jobs.edit', addjob.id)">
                        Edit
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.jobs.destroy', addjob.id)" method="delete" as="button">
                        Delete
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <div v-if="applicants.data.length" class="w-full flex justify-center mt-5 mb-8">
        <Paginate :links="applicants.links" />
    </div>
    <div v-else
        class="text-center mt-20 border border-gray-200 p-2 m-80 hover:bg-gradient-to-r from-gray-400 via-gray-100 to-gray-400 text-sm font-medium shadow-lg">
        No Applicants!
    </div>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { onMounted } from "vue";
import axios from "axios";

export default {
    layout: AdminLayout,
};
</script>

<script setup>
import { useDateFormat } from "@vueuse/core";
// import Applicantfilter from "@/Layouts/Component/Applicantfilter";
import Applicantfilter from "@/Layouts/Component/Applicantfilter.vue";
import Paginate from "@/Layouts/Component/Paginate.vue";
// import axios from "axios";

const props = defineProps({
    // addjob: Object,
    applicants: Object,
    filters: Object,
    job_id: String,
});
// onMounted(() => {
// console.log("props are: ", props);
// props.applicants.data[0].name = "asdf";
// console.log("test logging: ", ());
// });
// function onEmitData(data) {
// console.log("from emit page: ", data);
// axios.get(`admin/applicant-list/${props.job_id}`, {
//     params: {
//         name: data,
//     },
// });
// }
</script>
