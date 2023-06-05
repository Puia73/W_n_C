<template>
    asdf
    <!-- <div v-for="applicant in applicants">
        {{ applicant.name }}
    </div> -->
    <pre>
        {{ applicants }}
    </pre>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout,
};
</script>

<script setup>
import { useDateFormat } from "@vueuse/core";

defineProps({
    // addjob: Object,
    applicants: Object,
});
</script>
