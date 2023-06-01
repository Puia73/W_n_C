<template>
    {{
        editqualification }}
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>


<script setup>
defineProps({
    editqualification: Object
})
</script>