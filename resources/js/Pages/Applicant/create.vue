<template>
    <form>
        <div class="container grid grid-cols-12 gap-4 mx-auto">
            <div class="col-span-12 text-center py-8">
                Fill up your profiles
            </div>
            <div class="col-span-4 mb-5 mx-4">
                <label for="" class="block w-full">Name</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <div class="col-span-4 mb-5 mx-4">
                <label for="" class="block w-full">Email</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <div class="col-span-4 mb-5 mx-4">
                <label for="" class="block w-full">Contact</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <div class="col-span-6 mb-5 mx-4">
                <label for="" class="block w-full">Qualification</label>
                <!-- <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id=""> -->
                <select class="block w-full border border-gray-300 rounded-lg text-center" name="" id="">
                    <option value="null">-- select --</option>
                    <option value="Master of Arts">Master of Arts</option>
                    <option value="Master of Social Works">Master of Social Works</option>
                    <option value="Master of Science">Master of Science</option>
                    <option value="Bachelor of Arts">Bachelor of Arts</option>
                    <option value="Bachelor of Social Works">Bachelor of Social Works</option>
                </select>
            </div>
            <div class="col-span-6 mb-5 mx-4">
                <label for="" class="block w-full">Percentage Obtained</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <div class="col-span-6 mb-5 mx-4">
                <label for="" class="block w-full">Aadhaar No.</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <!-- <div class="col-span-6 mb-5 mx-4">
                <label for="" class="block w-full">Passport Photo</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div> -->
            <div class="col-span-12 mb-5 mx-4">
                <label for="" class="block w-full">Resume / CV</label>
                <input class="block w-full border border-gray-300 rounded-lg" type="text" name="" id="">
            </div>
            <div class="col-span-12 mx-auto">
                <button type="submit" class="w-full bg-gray-300 p-2 mx-5 rounded-lg">Apply</button>
            </div>
        </div>
    </form>
</template>

























<!-- User registration page  -->

<!-- <template>
    <div class="container mx-auto flex items-center justify-center">
        <form @submit.prevent="register">
            <div class="text-center py-3 text-3xl">
                Registration Page
            </div>
            <div class="container m-3">
                <div class="mb-3">
                    <label class="block w-full" for="name">Name</label>
                    <input v-model="form.name" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.name" class="text-red-400 text-sm">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label class="block w-full" for="email">Email</label>
                    <input v-model="form.email" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.email" class="text-red-400 text-sm">
                        {{ form.errors.email }}
                    </div>
                </div>
                <div class="mb-3">
                    <label class="block w-full" for="contact">Contact</label>
                    <input v-model="form.contact" class="block w-96 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.contact" class="text-red-400 text-sm">
                        {{ form.errors.contact }}
                    </div>
                </div>
                <div class="mb-5">
                    <label class="block w-full" for="qualification">Educational Qualification</label>
                    <select v-model="form.qualification" name="qualification" id="qualification"
                        class="block w-96 border-gray-300 shadow-lg rounded-lg text-center">
                        <option value="null">-- Please select --</option>
                        <option v-for="editqualification in editqualifications" :value="editqualification.qualification">{{
                            editqualification.qualification }}</option>
                    </select>
                    <div v-if="form.errors.qualification" class="text-red-400 text-sm">
                        {{ form.errors.qualification }}
                    </div>
                </div>



                <div class="mb-3 flex flex-row items-center">
                    <label class="w-72" for="text">Mark in Percentage (%)</label>
                    <input v-model="form.percentage" class="w-24 border-gray-300 shadow-lg rounded-lg" type="text">
                    <div v-if="form.errors.percentage" class="text-red-400 text-sm">
                        {{ form.errors.percentage }}
                    </div>
                </div>



                <div class="mb-3">
                    <label class="block w-full" for="work_experience">Work Experience (if any)</label>
                    <textarea v-model="form.work_experience" name="form.work_experience" id="form.work_experience" cols="46"
                        rows="4" class="block w-96 border-gray-300 shadow-lg rounded-lg"></textarea>
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

<script setup>
import { useForm } from '@inertiajs/vue3'

defineProps({
    editqualifications: Array
})

const form = useForm({
    name: null,
    email: null,
    contact: null,
    qualification: null,
    percentage: null,
    work_experience: null
})

const register = () => {
    form.post(route('user.applicant.store'))
    form.name = '',
        form.email = '',
        form.contact = '',
        form.qualification = '',
        form.percentage = '',
        form.work_experience = ''
}

</script> -->