<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

import { onMounted } from "vue";

onMounted(() => {
    // Dynamically add the reCAPTCHA script to the document
    const script = document.createElement("script");
    script.src = "https://www.google.com/recaptcha/api.js";
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
});
</script>

<template>
    
    <div
        class="min-h-screen bg-gradient-to-b from-purple-400 to-blue-400 py-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
    >
        <div class="flex flex-row">
            <div class="flex flex-row">
                <Link href="/">
                    <ApplicationLogo class="w-64 h-64 text-gray-500" />
                </Link>
            </div>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-indigo-700 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
