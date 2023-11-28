<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Carousel from "@/Components/Carousel.vue";
import "../../css/general.css";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <nav class="fixed top-0 z-50 w-full bg-gray-50 border-gray-200">
        <div
            class="max-w-[95%] flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <Link href="/dashboard">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                        >Partas Bus Inc</span
                    >
                </Link>
            </a>

            <button
                data-collapse-toggle="navbar-solid-bg"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>

            <h1
                class="text-2xl absolute left-[40%] font-semibold whitespace-nowrap"
            >
                TICKET RESERVATION SYSTEM
            </h1>

            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700"
                >
                    <div class="flex items-center">
                        <div
                            v-if="canLogin"
                            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
                        >
                            <Link
                                v-if="$page.props.auth.user"
                                :href="route('dashboard')"
                                class="font-semibold text-2xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >
                                Dashboard</Link
                            >

                            <template v-else>
                                <div
                                    class="flex justify-between [&>*]:mx-2 [&>*]:bg-orange-400 [&>*]:px-10 [&>*]:h-[1.9rem]"
                                >
                                    <Link
                                        :href="route('login')"
                                        class="flex font-semibold text-xl text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"
                                            />
                                        </svg>
                                        Log in
                                    </Link>

                                    <Link
                                        v-if="canRegister"
                                        :href="route('register')"
                                        class="flex ml-4 font-semibold text-xl text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                            />
                                        </svg>

                                        Register</Link
                                    >
                                </div>
                            </template>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div
        class="p-6 dark:border-gray-700 mt-14 bg-black min-h-screen max-h-screen"
    >
        <div class="container-fluid main">
            <div
                id="myCarousel"
                class="carousel carousel-fade slide"
                data-ride="carousel"
                data-interval="3000"
            >
                <div class="carousel-inner" role="listbox">
                    <div class="item active background a"></div>
                </div>
            </div>

            <div class="covertext">
                <div class="col-lg-10" style="float: none; margin: 0 auto">
                    <h1 class="title">PARTAS BUS INC</h1>
                    <h3 class="subtitle">
                        Journey Beyond Boundaries, Connecting Dreams and
                        Destinations.
                    </h3>
                </div>
                <div class="col-xs-12 explore">
                    <a href="#"
                        ><button
                            type="button"
                            class="btn btn-landing btn-lg explorebtn"
                        >
                            EXPLORE
                        </button></a
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>
