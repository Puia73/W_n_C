<template>
    <!-- <div v-for="applicant in applicants" :key="applicant.id"> -->
    <div class="m-5">
        <div>
            {{ applicant.name }}
        </div>
        <div>
            {{ applicant.email }}
        </div>
        <div>
            {{ applicant.contact }}
        </div>
        <div>
            {{ applicant.qualification }}
        </div>
    </div>
    <!-- </div>  -->
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout,
}
</script>

<script setup>
// import UsersData from '../Component/UsersData.vue';

defineProps({
    applicant: Object
})
</script>