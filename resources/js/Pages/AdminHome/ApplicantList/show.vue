<template>
    <!-- <pre>
        {{ applicants }}
    </pre> -->

    <div class="mt-5 mb-8 text-lg text-center underline uppercase">
        Application Status
    </div>

    <!-- <div>
        <Applicantfilter :filters="filters" />
    </div> -->

    <div class="m-3">
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
                <tr
                    v-for="applicant in applicants.data"
                    class="border text-start hover:bg-gray-100 text-sm"
                >
                    <td class="p-2">{{ applicant.id }}</td>
                    <td class="">{{ applicant.name }}</td>
                    <td>
                        <img
                            :src="`/storage/${applicant.passport_photo}`"
                            alt="Applicant's photo"
                            class="rounded-full w-28 h-28 mx-auto my-2"
                        />
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
                    <!-- <td class="text-center">{{ useDateFormat(applicant.created_at, 'DD-MM-YYYY').value }}</td> -->
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
                    <!-- <td>
                        <Link :href="route('admin.app-status.show', applicant.id)">
                        Details
                        </Link>
                    </td> -->
                    <!-- <td>
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
                    </td> -->
                </tr>
            </tbody>
        </table>
    </div>
    <div
        v-if="applicants.data.length"
        class="w-full flex justify-center mt-5 mb-8"
    >
        <Paginate :links="applicants.links" />
    </div>
    <div
        v-else
        class="text-center mt-20 border border-gray-200 p-2 m-80 hover:bg-gradient-to-r from-gray-400 via-gray-100 to-gray-400 text-sm font-medium shadow-lg"
    >
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
