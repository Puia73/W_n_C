<template>
    <!-- <div>
        {{ addjobs }}
    </div> -->

    <div class="mt-3 mb-8 text-lg text-center underline uppercase">
        Job opening
    </div>

    <div>
        <Jobfilter :filters="filters" />
    </div>

    <div class="m-3">
        <table class="w-full text-justify shadow-lg">
            <thead>
                <tr class="border bg-gray-200">
                    <th class="p-2">Id</th>
                    <th>Job Title</th>
                    <th>No. of Post</th>
                    <th>Department</th>
                    <th>District</th>
                    <th>Job type</th>
                    <th>Date of Submission</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="addjob in addjobs.data"
                    :key="addjob.id"
                    class="border text-start hover:bg-gray-100 text-sm"
                >
                    <td class="p-2">{{ addjob.id }}</td>
                    <td>{{ addjob.job_title }}</td>
                    <td>{{ addjob.No_of_post }}</td>
                    <td>{{ addjob.department }}</td>
                    <td>{{ addjob.district }}</td>
                    <td>{{ addjob.job_type }}</td>
                    <td>{{ addjob.date_of_sub }}</td>
                    <td>
                        <Link
                            :href="
                                route('admin.applicant-list.show', addjob.id)
                            "
                        >
                            <button class="hover:bg-gray-300 p-2 rounded-lg">
                                Applicant list
                            </button>
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.jobs.show', addjob.id)">
                            <button
                                class="hover:bg-gray-300 my-3 p-2 rounded-lg"
                            >
                                Job details
                            </button>
                        </Link>
                    </td>
                    <td>
                        <Link :href="route('admin.jobs.edit', addjob.id)">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-4 h-4"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                />
                            </svg>
                        </Link>
                    </td>
                    <td>
                        <Link
                            :href="route('admin.jobs.destroy', addjob.id)"
                            method="delete"
                            as="button"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-4 h-4"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        v-if="addjobs.data.length"
        class="w-full flex justify-center mt-5 mb-8"
    >
        <Paginate :links="addjobs.links" />
    </div>
    <div
        v-else
        class="text-center mt-20 border border-gray-200 p-2 m-80 hover:bg-gradient-to-r from-gray-400 via-gray-100 to-gray-400 text-sm font-medium shadow-lg"
    >
        No result!
    </div>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Jobfilter from "@/Layouts/Component/Jobfilter.vue";

export default {
    layout: AdminLayout,
    components: { Jobfilter },
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";
import Paginate from "@/Layouts/Component/Paginate.vue";

defineProps({
    addjobs: Object,
    filters: Object,
});
</script>
