<template>
    <div class="container mx-auto flex items-center justify-center">
        <form @submit.prevent="update">
            <div class="text-center py-6 text-3xl">
                Registration Page
            </div>
            <div class="container m-3">
                <div class="mb-4">
                    <label class="block w-full" for="name">Name</label>
                    <input v-model="form.name" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.name" class="text-red-400 text-sm">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block w-full" for="email">Email</label>
                    <input v-model="form.email" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.email" class="text-red-400 text-sm">
                        {{ form.errors.email }}
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block w-full" for="contact">Contact</label>
                    <input v-model="form.contact" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.contact" class="text-red-400 text-sm">
                        {{ form.errors.contact }}
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block w-full" for="qualification">Education Qualification</label>
                    <select v-model="form.qualification" name="qualification" id="qualification"
                        class="block w-96 border-gray-300 shadow-lg rounded-lg text-center">
                        <!-- <option value="null">-- Please select --</option> -->
                        <option value="HSLC">HSLC</option>
                        <option value="HSSLC">HSSLC</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Post_Graduate">Post Graduate</option>
                    </select>
                    <!-- <input v-model="form.qualification" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text"> -->
                    <div v-if="form.errors.qualification" class="text-red-400 text-sm">
                        {{ form.errors.qualification }}
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block w-full" for="work_experience">Work Experience (if any)</label>
                    <textarea v-model="form.work_experience" name="form.work_experience" id="form.work_experience" cols="46"
                        rows="4" class="block w-96 border-gray-300 shadow-lg rounded-lg"></textarea>
                    <!-- <input v-model="form.work_experience" class="block w-96 border-gray-300 shadow-lg rounded-lg"
                        type="text"> -->
                    <div v-if="form.errors.work_experience" class="text-red-400 text-sm">
                        {{ form.errors.work_experience }}
                    </div>
                </div>
                <div class="mb-2 mt-12">
                    <button class="block w-96 bg-blue-300 py-2 rounded-lg shadow-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>


<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>


<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    applicant: Object,
})

const form = useForm({
    name: props.applicant.name,
    email: props.applicant.email,
    contact: props.applicant.contact,
    qualification: props.applicant.qualification,
    work_experience: props.applicant.work_experience
})

const update = () => form.put(route('admin.page.update', {applicant: props.applicant.id}))
// const register = () => form.post(route('applicant.store'))

</script>