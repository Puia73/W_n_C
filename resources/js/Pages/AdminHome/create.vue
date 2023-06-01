<template>
    <form @submit.prevent="submit">



        <div class="min-h-screen flex flex-col items-center">
            <div class="py-3 text-lg">
                Add job
            </div>
            <div class="max-w-2xl w-full mx-auto bg-gray-50 rounded-lg p-7 space-y-7">
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="job_title">Job title</label>
                    <input v-model="form.job_title" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.job_title" class="text-sm text-red-400">
                        {{ form.errors.job_title }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="No_of_post">No. of Post</label>
                    <input v-model="form.No_of_post" class="border border-gray-300 rounded-lg" type="number">
                    <div v-if="form.errors.No_of_post" class="text-sm text-red-400">
                        {{ form.errors.No_of_post }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="department">Department</label>
                    <input v-model="form.department" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.department" class="text-sm text-red-400">
                        {{ form.errors.department }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="district">District</label>
                    <!-- <input v-model="form.district" class="border border-gray-300 rounded-lg" type="text"> -->
                    <select v-model="form.district" class="border border-gray-300 rounded-lg text-center" type="text"
                        name="" id="">
                        <option value="null">-- select district --</option>
                        <option v-for="edit_district in edit_districts" :value="edit_district.district">{{
                            edit_district.district }}</option>
                    </select>
                    <div v-if="form.errors.district" class="text-sm text-red-400">
                        {{ form.errors.district }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="description">Description</label>
                    <input v-model="form.description" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.description" class="text-sm text-red-400">
                        {{ form.errors.description }}
                    </div>
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="edu_qualification">Minimum Qualification</label>
                    <input v-model="form.edu_qualification" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.edu_qualification" class="text-sm text-red-400">
                        {{ form.errors.edu_qualification }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="salary">Salary</label>
                    <input v-model="form.salary" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.salary" class="text-sm text-red-400">
                        {{ form.errors.salary }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="job_type">Job type</label>
                    <input v-model="form.job_type" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.job_type" class="text-sm text-red-400">
                        {{ form.errors.job_type }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="date_of_sub">Last date of Submission</label>
                    <input v-model="form.date_of_sub" class="border border-gray-300 rounded-lg" type="text">
                    <div v-if="form.errors.date_of_sub" class="text-sm text-red-400">
                        {{ form.errors.date_of_sub }}
                    </div>
                </div>
                <div>
                    <button class="w-full bg-green-300 py-2 text-center rounded-lg">Apply</button>
                </div>
            </div>
        </div>







        <!-- <div class="text-center container mx-auto md:grid-cols-1">
            <div class="py-2 text-lg text-center underline uppercase">
                Add job
            </div>

            <div class="w-1/2 mx-auto border md:grid-cols-1">
                <div class="py-2 grid grid-cols-2">
                    <label for="" class="">Job title</label>
                    <input v-model="form.job_title" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.job_title" class="text-sm text-red-400">
                        ( {{ form.errors.job_title }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Number of post</label>
                    <input v-model="form.No_of_post" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.No_of_post" class="text-sm text-red-400">
                        ( {{ form.errors.No_of_post }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Department</label>
                    <input v-model="form.department" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.department" class="text-sm text-red-400">
                        ( {{ form.errors.department }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">District</label>
                    <input v-model="form.district" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.district" class="text-sm text-red-400">
                        ( {{ form.errors.district }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Description</label>
                    <textarea v-model="form.description" name="description" id="description" cols="5" rows="3"
                        class="border border-gray-300 rounded-lg shadow-sm"></textarea>
                    <div v-if="form.errors.description" class="text-sm text-red-400">
                        ({{ form.errors.description }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Minimum Educational Qualification</label>
                    <input v-model="form.edu_qualification" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.edu_qualification" class="text-sm text-red-400">
                        ( {{ form.errors.edu_qualification }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Salary</label>
                    <input v-model="form.salary" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.salary" class="text-sm text-red-400">
                        ( {{ form.errors.salary }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Job type</label>
                    <input v-model="form.job_type" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.job_type" class="text-sm text-red-400">
                        ( {{ form.errors.job_type }} )
                    </div>
                </div>
                <div class="py-2 grid grid-cols-2">
                    <label for="">Last date of Submission</label>
                    <input v-model="form.date_of_sub" type="text" class="border border-gray-300 rounded-lg shadow-sm">
                    <div v-if="form.errors.date_of_sub" class="text-sm text-red-400">
                        ( {{ form.errors.date_of_sub }} )
                    </div>
                </div>
                <div class="py-3">
                    <button type="submit" class="bg-blue-300 p-2 w-full rounded-lg">Add</button>
                </div>
            </div>

        </div> -->
    </form>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>



<script setup>
import { useForm } from '@inertiajs/vue3';

defineProps({
    edit_districts: Array
})

const form = useForm({
    'job_title': null,
    'No_of_post': null,
    'department': null,
    'district': null,
    'description': null,
    'edu_qualification': null,
    // 'experience': null,
    'salary': null,
    'job_type': null,
    'date_of_sub': null,
})

const submit = () => {
    form.post(route('admin.home.store'))
}

</script>