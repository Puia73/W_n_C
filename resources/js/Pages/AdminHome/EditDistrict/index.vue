<template>
    <div>
        <form @submit.prevent="add">
            <div class="min-h-screen flex flex-col gap-10 items-center">
                <div class="py-3 mt-5 text-lg">Edit District</div>
                <div class="max-w-2xl w-full mx-auto bg-gray-50 rounded-lg p-7 space-y-7">
                    <div class="flex flex-col">
                        <label class="mb-1 text-sm" for="name">District Name</label>
                        <input v-model="form.district" class="border border-gray-300 rounded-lg" type="text" />
                        <div v-if="form.errors.district" class="text-sm text-red-400">
                            {{ form.errors.district }}
                        </div>
                    </div>
                    <div>
                        <button class="w-full bg-gray-300 py-2 text-center rounded-lg hover:bg-gray-400 hover:text-white">
                            Add
                        </button>
                    </div>
                </div>
                <div class="border">
                    <table class="w-96 text-justify">
                        <thead class="border">
                            <tr>
                                <th class="p-2 border text-center">Id</th>
                                <th class="text-center">District</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="edit_district in edit_districts">
                                <td class="p-2 border text-center">
                                    {{ edit_district.id }}
                                </td>
                                <td class="text-center border">
                                    {{ edit_district.district }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout,
};
</script>

<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    edit_districts: Object,
});

const form = useForm({
    district: null,
});

const add = () => {
    form.post(route("admin.edit-district.store"));
    form.district = "";
};
</script>
