<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Carousel from "@/Components/Carousel.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div>
            <h1
                class="text-white text-6xl w-[25vw] break-words italic tracking-wide leading-snug"
            >
                PARTAS ADMIN MANAGER
            </h1>
        </div>

        <div
            class="flex justify-center flex-wrap [&>div]:m-2 pt-5 [&>div]:max-h-[30rem]"
        >
            <div
                class="bg-gray-700 rounded-2xl w-[40rem] h-[20rem] flex-grow"
            ></div>
            <div class="bg-gray-700 rounded-2xl w-[20rem] h-[20rem]"></div>
            <div class="bg-gray-700 rounded-2xl w-[20rem] h-[20rem]"></div>

            <div
                class="bg-gray-700 rounded-2xl w-[40rem] h-[20rem] flex-grow"
            ></div>
            <div class="bg-gray-700 rounded-2xl w-[20rem] h-[20rem]"></div>
        </div>
    </AuthenticatedLayout>
</template>
