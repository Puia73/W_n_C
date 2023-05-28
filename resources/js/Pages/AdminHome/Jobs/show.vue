<template>
    <!-- {{ addjob }} -->
    <div>
        <div class="py-2 mb-2">
            Job detail
        </div>
        <div>
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
        </div>
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