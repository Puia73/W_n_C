<template>
    <div class="min-h-screen flex flex-col items-center mb-7">
        <div class="py-3 text-lg underline">
            Applicant details
        </div>
        <div class="max-w-2xl w-full mx-auto bg-gray-50 rounded-lg p-7 space-y-7 border border-gray-400">
            <div class="flex flex-col">
                <div>
                    <img :src="`/storage/${applicant.passport_photo}`" alt="Applicant's photo"
                        class="rounded-full w-48 h-48 mx-auto">
                </div>
            </div>
            <div class="flex flex-row">
                <div>
                    <label class="mb-1 text-sm font-medium" for="name">Name :</label>
                    {{ applicant.name }}
                </div>
            </div>
            <div class="flex flex-row">
                <div>
                    <label class="mb-1 text-sm font-medium" for="email">Email :</label>
                    {{ applicant.email }}
                </div>
            </div>

            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="contact">Contact :</label>
                    {{ applicant.contact }}
                </div>
            </div>


            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="qualification">Qualification :</label>
                    {{ applicant.qualification }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="">Mark Percentage scored :</label>
                </div>
                <table class="mt-2">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 text-center">Name</th>
                            <th class="border border-gray-400 text-center">Percentage Scored</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 text-center">HSLC</td>
                            <td class="border border-gray-400 text-center">{{ applicant.hslc_mark_percent }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 text-center">HSSLC</td>
                            <td class="border border-gray-400 text-center">{{ applicant.hsslc_mark_percent }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 text-center">Graduate</td>
                            <td class="border border-gray-400 text-center">{{ applicant.graduate_mark_percent }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 text-center">Post Graduate</td>
                            <td class="border border-gray-400 text-center">{{
                                applicant.post_graduate_mark_percent }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="aadhaar">Aadhaar no. :</label>
                    {{ applicant.aadhaar }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="work_experience">Work Experience (if any) :</label>
                    {{ applicant.work_experience }}
                </div>
            </div>
        </div>
    </div>


    <!-- <div>
        <img :src="`/storage/${applicant.passport_photo}`" alt="" class="w-20 h-20">
        {{ applicant.passport_photo }}
    </div> -->
</template>


<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>

<script setup>
defineProps({
    applicant: Object
})
</script>