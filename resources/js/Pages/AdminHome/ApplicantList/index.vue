<template>
    Applicant list

    {{ applicants }}
</template>


<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>



<script setup>
defineProps({
    applicants: Object
})
</script>