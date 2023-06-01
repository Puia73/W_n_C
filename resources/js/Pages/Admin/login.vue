<template>
    <form @submit.prevent="login">
        <div class="w-1/2 mx-auto mt-10 p-5">
            <div class="font-serif text-2xl shadow-lg mb-12 text-center">
                Admin Panel
            </div>
            <div class="mt-4">
                <label class="block w-full text-start font-medium" for="email">Email</label>
                <input v-model="form.email" type="text" id="email"
                    class="block w-full rounded-md shadow-md border-gray-300">
                <div v-if="form.errors.email" class="text-red-400 dark:text-red-400">
                    {{ form.errors.email }}
                </div>
            </div>
            <div class="mt-4">
                <label class="block w-full text-start font-medium" for="password">Password</label>
                <input v-model="form.password" type="password" id="password"
                    class="block w-full rounded-md shadow-md border-gray-300">
                <div v-if="form.errors.password" class="text-red-400 dark:text-red-400">
                    {{ form.errors.password }}
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-200 p-1 mt-10 text-center rounded-md shadow-md border cursor-pointer hover:bg-blue-300 hover:border">
                    Login
                </button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    email: null,
    password: null
})

const login = () => form.post(route('login.store'))

</script>