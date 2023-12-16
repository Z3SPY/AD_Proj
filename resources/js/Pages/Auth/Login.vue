<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import vueRecaptcha from "vue3-recaptcha2";


defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});


const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    if (isRecaptchaCompleted.value === true)
    {
        form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
    }else {
        alert("Please answer the Recaptcha")
    }
    
};

const isRecaptchaCompleted = ref(false);
const onRecaptchaSuccess = (response) => {
    console.log(!isRecaptchaCompleted)
    isRecaptchaCompleted.value = true;
    console.log("reCAPTCHA success:", response, isRecaptchaCompleted);
    console.log(isRecaptchaCompleted.value)
};

</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 justify-center items-center flex">
                <vueRecaptcha
                    ref="recaptcha"
                    sitekey="6LdvlzIpAAAAAJRKwI-Cc4uTOZ-zzNpWeRuOxFVP"
                    @verify="onRecaptchaSuccess"
                >
                </vueRecaptcha>
                <InputError class="mt-2" :message="form.errors.recaptcha" />
            </div>  

            <div class="block mt-10">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-white">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-white hover:underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing  "
                >
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
