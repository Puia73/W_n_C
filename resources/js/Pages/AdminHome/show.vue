<template>
    Show page

    <div>
        {{ addjobs }}
    </div>

    <!-- <div v-for="addjob in addjobs">
        {{ addjob }}
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
    addjobs: Array
})
</script>