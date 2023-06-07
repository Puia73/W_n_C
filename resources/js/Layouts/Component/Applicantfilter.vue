<template>
    <form @submit.prevent="filter">
        <div class="m-3 grid grid-rows-1">
            <div class="mt-2 flex flex-wrap gap-2 justify-start mr-3">
                <div class="xl:flex items-center gap-1 lg:grid grid-rows-1 md:gap-2 w-full xl:w-auto md:w-auto">
                    <!-- <select
                        v-model="filterForm.qualification"
                        name="qualification"
                        id="qualification"
                        class="block rounded-tl-lg rounded-bl-lg shadow-sm border-gray-300 text-gray-500 text-sm"
                    >
                        <option value="null">-- Qualification --</option>
                        <option
                            v-for="editqualification in editqualifications"
                            :value="editqualification.qualification"
                        >
                            {{ editqualification.qualification }}
                        </option>
                    </select> -->

                    <input v-model="filterForm.name" type="text" placeholder="Applicant Name"
                        class="border border-gray-300 rounded-lg w-full mb-2 lg:border-gray-300 text-sm md:border-gray-300 sm:border-gray-300 sm:mb-2" />
                </div>
                <button type="submit"
                    class="w-24 bg-gray-200 p-2 mb-2 rounded-md hover:bg-gray-400 text-sm flex flex-row justify-evenly items-center text-center">
                    Search
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
                <button @click="clear" type="reset"
                    class="w-20 bg-red-500 text-white p-2 mb-2 rounded-md hover:bg-red-600 text-sm">
                    Clear
                </button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm, router } from "@inertiajs/vue3";
import { onMounted } from "vue";

// onMounted(() => {
//     console.log("router on mounted: ", router.page);
// });

const props = defineProps({
    filters: Object,
    // job_id: String,
    id: String,

    // editqualifications: Array,
});

const filterForm = useForm({
    name: props.filters.name ?? null,
    // qualification: props.filters.qualification ?? null,
    // job_title: props.filters.job_title ?? null
});

const filter = () => {
    filterForm.get(
        route("admin.applicant-list.show", {
            applicant_list: props.id,
        })
    );
    // router.get("admin.applicant-list", 2);
    // emit("emit-data", filterForm.name);
    // filterForm.get(route("admin.app-status.index"), {
    // filterForm.get(route("admin.applicant-list.show", applicant - list), {
    //     preserveScroll: true,
    //     preserveState: true,
    // });
};

const clear = () => {
    (filterForm.name = null),
        // (filterForm.qualification = null),
        // filterForm.job_title = null
        filter();
};
</script>
