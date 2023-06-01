<template>
    <!-- {{ addjob }} -->
    <div class="min-h-screen flex flex-col items-center mb-7">
        <div class="py-3 text-lg underline">
            Job detail
        </div>
        <div class="max-w-2xl w-full mx-auto bg-gray-50 rounded-lg p-7 space-y-7 border border-gray-400">
            <div class="flex flex-row">
                <div>
                    <label class="mb-1 text-sm font-medium" for="name">Name :</label>
                    {{ addjob.job_title }}
                </div>
            </div>
            <div class="flex flex-row">
                <div>
                    <label class="mb-1 text-sm font-medium" for="email">No of Post :</label>
                    {{ addjob.No_of_post }}
                </div>
            </div>

            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="contact">Department :</label>
                    {{ addjob.department }}
                </div>
            </div>


            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="qualification">District :</label>
                    {{ addjob.district }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="aadhaar">Description :</label>
                    {{ addjob.description }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="work_experience">Minimum Qualification :</label>
                    {{ addjob.edu_qualification }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="work_experience">Salary :</label>
                    {{ addjob.salary }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="work_experience">Job Type :</label>
                    {{ addjob.job_type }}
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <label class="mb-1 text-sm font-medium" for="work_experience">Last date of submission :</label>
                    {{ addjob.date_of_sub }}
                </div>
            </div>
        </div>
        <!-- <div>
            <div>
                Job Title : {{ addjob.job_title }}
            </div>
            <div>
                No. of Post : {{ addjob.No_of_post }}
            </div>
            <div>
                Department : {{ addjob.department }}
            </div>
            <div>
                District : {{ addjob.district }}
            </div>
            <div>
                Description : {{ addjob.description }}
            </div>
            <div>
                Minimun qualification : {{ addjob.edu_qualification }}
            </div>
            <div>
                Salary : {{ addjob.salary }}
            </div>
            <div>
                Job type : {{ addjob.job_type }}
            </div>
            <div>
                Last date of Submission : {{ addjob.date_of_sub }}
            </div>
        </div> -->
    </div>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>



<script setup>
defineProps({
    addjob: Object
})
</script>