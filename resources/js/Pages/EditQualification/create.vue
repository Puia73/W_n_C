<template>
    <form @submit.prevent="add">
        <div class="py-36">
            <div class="justify-center flex gap-5 items-center">
                <label for="" class="text-sm items-center">Educational Qualification</label>
                <input v-model="qualification" type="text" class="border border-gray-300 rounded-lg shadow-lg">
            </div>
            <div class="text-center py-5">
                <button type="submit" class="bg-blue-300 p-1 m-6 w-96 rounded-lg shadow-lg">Add</button>
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
import { ref } from 'vue';

const qualification = ref('')

const add = () => {
    // console.log('asdf')
    // // const form = useForm({
    // //     qualification: qualification.value
    // // })
    // // form.post(route('admin.qualification.store'))
    // // qualification.value = ''
    // qualification.value = 'jkh'
}

</script>