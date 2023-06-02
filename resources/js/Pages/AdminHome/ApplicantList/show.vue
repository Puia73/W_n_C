<template>
    <!-- <pre>
        {{ applicants }}
    </pre> -->

    <div class="mt-5 mb-8 text-lg text-center underline uppercase">
        Application Status
    </div>

    <!-- <div>
        <Applicantfilter :filters="filters" :editqualifications="editqualifications" />
    </div> -->

    <div class="m-3">
        <table class="w-full text-justify shadow-lg">
            <thead>
                <tr class="border bg-gray-200">
                    <th class="p-2">Id</th>
                    <th>Applicant Name</th>
                    <th></th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Qualification</th>
                    <th class="border border-gray-400 text-center">HSLC (%)</th>
                    <th class="border border-gray-400 text-center">
                        HSSLC (%)
                    </th>
                    <th class="border border-gray-400 text-center">
                        Graduate (%)
                    </th>
                    <th class="border border-gray-400 text-center">
                        Post Graduate (%)
                    </th>
                    <th class="text-center">Aadhaar</th>
                    <th>Work Experience</th>
                    <th>Submitted at</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="applicant in applicants"
                    class="border text-start hover:bg-gray-100 text-sm"
                >
                    <td class="p-2">{{ applicant.id }}</td>
                    <td>{{ applicant.name }}</td>
                    <td>
                        <img
                            :src="`/storage/${applicant.passport_photo}`"
                            alt="Applicant's photo"
                            class="rounded-lg p-2 w-24 h-24 mx-auto"
                        />
                    </td>
                    <td>{{ applicant.email }}</td>
                    <td>{{ applicant.contact }}</td>
                    <td>{{ applicant.qualification }}</td>
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
                    <td>{{ applicant.aadhaar }}</td>
                    <td>{{ applicant.work_experience }}</td>
                    <td>
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
    <!-- <div v-if="applicants.data.length" class="w-full flex justify-center mt-5 mb-8">
        <Paginate :links="applicants.links" />
    </div>
    <div v-else
        class="text-center mt-20 border border-gray-200 p-2 m-80 hover:bg-gradient-to-r from-gray-400 via-gray-100 to-gray-400 text-sm font-medium shadow-lg">
        No Applicants!
    </div> -->

    <!-- <div>
        <div v-for="applicant in applicants">
            {{ applicant.name }}
            {{ applicant.email }}
            {{ applicant.contact }}
        </div>
    </div> -->
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout,
};
</script>

<script setup>
import { useDateFormat } from "@vueuse/core";

defineProps({
    // addjob: Object,
    applicants: Object,
});
</script>
