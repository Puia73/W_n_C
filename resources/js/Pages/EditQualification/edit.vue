<template>
    <form @submit.prevent="update">
        <div class="py-36">
            <div class="justify-center flex gap-5 items-center">
                <label for="" class="text-sm items-center">Educational Qualification</label>
                <input v-model="form.qualification" type="text" class="border border-gray-300 rounded-lg shadow-lg text-sm">
            </div>
            <div class="text-center py-5">
                <button type="submit" class="bg-blue-300 p-1 m-6 w-96 rounded-lg shadow-lg">Update</button>
            </div>
        </div>
    </form>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';

export default {
    layout: AdminLayout
}
</script>


<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    editqualification: Object
})

const form = useForm({
    qualification: props.editqualification.qualification
})

const update = () => {
    form.put(route('admin.qualification.update', {editqualification: props.editqualification.id}))
}

</script>