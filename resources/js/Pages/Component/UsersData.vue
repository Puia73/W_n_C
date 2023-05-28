<template>
    <span>
        {{ applicant.name }}
        {{ applicant.contact }}
    </span>
</template>

<script setup>
defineProps({
    applicant: Object
})
</script>