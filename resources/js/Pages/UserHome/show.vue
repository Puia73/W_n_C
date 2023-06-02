<template>
    <!-- {{ addjob }} -->
    <form>
        <div class="grid grid-cols-3 gap-5 mx-10 py-7">
            <div class="col-span-3 border py-7">
                <div class="flex justify-between mx-3">
                    {{ addjob.job_title }}
                    <div>
                        Job Id : {{ addjob.id }}
                    </div>
                </div>
                <div class="mx-3 text-gray-500">
                    {{ addjob.department }}, {{ addjob.district }}
                </div>
                <div class="mx-3">
                    Number of post : {{ addjob.No_of_post }}
                </div>
                <div class="flex justify-between mx-3">
                    <div>
                        Posted on : {{ useDateFormat(addjob.created_at, 'DD-MM-YYYY').value }}
                    </div>
                    <Link :href="route('user.applicant.create', {
                        job_title: addjob.job_title, job_id: addjob.id
                    })">
                    <div class="bg-gray-300 p-1 w-16 mx-2 rounded-lg  text-center hover:bg-gray-400 hover:text-white">
                        <Button class="text-sm">
                            Apply
                        </Button>
                    </div>
                    </Link>
                </div>

                <!-- For id -->
                <!-- <div class="flex justify-between mx-3">
                    <div>
                        Posted on : {{ useDateFormat(addjob.created_at, 'DD-MM-YYYY').value }}
                    </div>
                    <Link :href="route('user.applicant.create', {
                        job_id: addjob.id
                    })">
                    <div class="bg-green-300 p-1 w-16 rounded-lg  text-center mb-2 hover:bg-green-400">
                        <Button class="text-sm">
                            Apply
                        </Button>
                    </div>
                    </Link>
                </div> -->


            </div>
            <!-- <div class="bg-yellow-300">

        </div> -->

            <!-- <div class="text-end mx-3 border">
                Job Id : {{ addjob.id }}
                <Link>
                <div class="bg-green-300 p-1 w-16 rounded-lg  text-center hover:bg-green-400">
                    <Button class="text-sm">
                        Apply
                    </Button>
                </div>
                </Link>
            </div> -->

            <div class="col-span-2 border py-7">
                <div class="mx-3">
                    <div class="mb-7">
                        Job description : <br>
                        {{ addjob.description }}
                    </div>
                    <div>
                        Qualification required : {{ addjob.edu_qualification }} and above
                    </div>
                    <div>
                        Salary : {{ addjob.salary }}
                    </div>
                    <div>
                        Job Type : {{ addjob.job_type }}
                    </div>
                    <div class="font-medium">
                        Last date of submission : {{ addjob.date_of_sub }}
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useDateFormat } from '@vueuse/core';
import { Link } from '@inertiajs/vue3';

defineProps({
    addjob: Object
})
</script>