<template>
    <form @submit.prevent="apply">
        <div class="min-h-screen flex flex-col items-center">
            <div class="py-3 text-lg">Fill up your profile</div>
            <div
                class="max-w-2xl w-full mx-auto bg-gray-50 rounded-lg p-7 space-y-7"
            >
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="name">Name</label>
                    <input
                        v-model="form.name"
                        class="border border-gray-300 rounded-lg"
                        type="text"
                    />
                    <div v-if="form.errors.name" class="text-sm text-red-400">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="email">Email</label>
                    <input
                        v-model="form.email"
                        class="border border-gray-300 rounded-lg"
                        type="email"
                    />
                    <div v-if="form.errors.email" class="text-sm text-red-400">
                        {{ form.errors.email }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="contact">Contact</label>
                    <input
                        v-model="form.contact"
                        class="border border-gray-300 rounded-lg"
                        type="number"
                    />
                    <div
                        v-if="form.errors.contact"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.contact }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="qualification"
                        >Qualification</label
                    >
                    <!-- <input v-model="form.qualification" class="border border-gray-300 rounded-lg" type="text"> -->
                    <select
                        v-model="form.qualification"
                        class="block w-full border border-gray-300 rounded-lg text-center"
                        name=""
                        id=""
                    >
                        <option value="null">-- select --</option>
                        <option
                            v-for="editqualification in editqualifications"
                            :value="editqualification.qualification"
                        >
                            {{ editqualification.qualification }}
                        </option>
                    </select>
                    <div
                        v-if="form.errors.qualification"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.qualification }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="percentage"
                        >Percentage</label
                    >
                    <input
                        v-model="form.hslc_mark_percent"
                        class="border border-gray-300 rounded-lg text-sm"
                        type="text"
                        placeholder="HSLC mark percentage (%)"
                    />
                    <div
                        v-if="form.errors.hslc_mark_percent"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.hslc_mark_percent }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <!-- <label class="mb-1 text-sm" for="percentage">Percentage</label> -->
                    <input
                        v-model="form.hsslc_mark_percent"
                        class="border border-gray-300 rounded-lg text-sm"
                        type="text"
                        placeholder="HSSLC mark percentage (%)"
                    />
                    <div
                        v-if="form.errors.hsslc_mark_percent"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.hsslc_mark_percent }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <!-- <label class="mb-1 text-sm" for="percentage">Percentage</label> -->
                    <input
                        v-model="form.graduate_mark_percent"
                        class="border border-gray-300 rounded-lg text-sm"
                        type="text"
                        placeholder="Graduate mark percentage (%)"
                    />
                    <div
                        v-if="form.errors.graduate_mark_percent"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.graduate_mark_percent }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <!-- <label class="mb-1 text-sm" for="percentage">Percentage</label> -->
                    <input
                        v-model="form.post_graduate_mark_percent"
                        class="border border-gray-300 rounded-lg text-sm"
                        type="text"
                        placeholder="Post-Graduate mark percentage (%)"
                    />
                    <div
                        v-if="form.errors.post_graduate_mark_percent"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.post_graduate_mark_percent }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="aadhaar"
                        >Aadhaar no.</label
                    >
                    <input
                        v-model="form.aadhaar"
                        class="border border-gray-300 rounded-lg"
                        type="text"
                    />
                    <div
                        v-if="form.errors.aadhaar"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.aadhaar }}
                    </div>
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="passport_photo"
                        >Passport Photo</label
                    >
                    <!-- <input v-model="form.passport_photo" class="border border-gray-300 rounded-lg" type="text"> -->
                    <input
                        type="file"
                        name="passport_photo"
                        id="passport_photo"
                        multiple
                        @input="form.passport_photo = $event.target.files[0]"
                    />
                    <div
                        v-if="form.errors.passport_photo"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.passport_photo }}
                    </div>
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 text-sm" for="work_experience"
                        >Work Experience</label
                    >
                    <!-- <input v-model="form.work_experience" class="border border-gray-300 rounded-lg" type="text"> -->
                    <textarea
                        v-model="form.work_experience"
                        class="border border-gray-300 rounded-lg"
                        name=""
                        id=""
                        cols="93"
                        rows="3"
                    ></textarea>
                    <div
                        v-if="form.errors.work_experience"
                        class="text-sm text-red-400"
                    >
                        {{ form.errors.work_experience }}
                    </div>
                </div>
                <div>
                    <button
                        class="w-full bg-gray-300 hover:bg-gray-400 hover:text-white py-2 text-center rounded-lg"
                    >
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm, router } from "@inertiajs/vue3";

defineProps({
    editqualifications: Array,
});

const form = useForm({
    name: null,
    email: null,
    contact: null,
    qualification: null,
    hslc_mark_percent: null,
    hsslc_mark_percent: null,
    graduate_mark_percent: null,
    post_graduate_mark_percent: null,
    aadhaar: null,
    passport_photo: null,
    // resume: null,
    work_experience: null,
    job_title: null,
    // job_id: null,
});

const apply = () => {
    // router?.page?.props?.job_id

    form.job_title = route().params.job_title;
    // form.job_id = route().params.job_id;

    form.post(route("user.applicant.store"), {
        forceFormData: true,
    });
    // form.job_id = ''
    form.name = "";
    form.email = "";
    form.contact = "";
    form.qualification = "";
    form.hslc_mark_percent = "";
    form.hsslc_mark_percent = "";
    form.graduate_mark_percent = "";
    form.post_graduate_mark_percent = "";
    form.aadhaar = "";
    form.passport_photo = "";
    form.work_experience = "";
    // form.resume = ''
};
</script>
