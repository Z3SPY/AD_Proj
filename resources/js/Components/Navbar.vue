<script setup>
import { Link } from "@inertiajs/vue3";
import "flowbite";
import { ref } from "vue";
import "../../css/general.css";

const isDropdownVisible = ref(false);

function greet() {
    isDropdownVisible.value = !isDropdownVisible.value;
    console.log("yo");
}
</script>

<template>
    <nav class="fixed top-0 z-50 w-full bg-dark border-gray-200">
        <div
            class="max-w-[95%] flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img
                    src="https://flowbite.com/docs/images/logo.svg"
                    class="h-8"
                    alt="Flowbite Logo"
                />
                <Link href="/dashboard">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap text-primary"
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

            <div
                class="text-dark NavBar self-center whitespace-nowrap bg-primary p-3 rounded-2xl"
            >
                <ul
                    class="overflow-hidden m-0 p-0 list-none [&>*]:float-left [&>*]:cursor-pointer [&>li]:py-2"
                >
                    <li>
                        <a class="p-5">Management</a>
                    </li>
                    <li>
                        <a class="p-5">Routes</a>
                    </li>
                    <li>
                        <a class="p-10 selected text-primary">Dashboard</a>
                    </li>
                    <li>
                        <a class="p-5">Schedules</a>
                    </li>
                    <li>
                        <a class="p-5">Locations</a>
                    </li>
                </ul>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700"
                >
                    <div class="flex items-center">
                        <div>
                            <!--Profile Button-->
                            <div>
                                <button
                                    @click="greet"
                                    id="dropdownDefaultButton"
                                    data-dropdown-toggle="dropdown"
                                    class="bg-primary text-dark hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center inline-flex items-center"
                                    type="button"
                                >
                                    <span>{{
                                        $page.props.auth.user.name
                                    }}</span>
                                    <svg
                                        class="w-2.5 h-2.5 ms-3"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 10 6"
                                    >
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m1 1 4 4 4-4"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <!--END-->

                            <!--Dropdown Comp-->
                            <div
                                v-show="isDropdownVisible"
                                class="absolute shadow-2xl p-2 right-10 top-13 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded dark:bg-gray-700 dark:divide-gray-600"
                            >
                                <div class="px-4 py-3" role="none">
                                    <p
                                        class="text-sm font-medium text-gray-900 truncate dark:text-gray-300"
                                        role="none"
                                    >
                                        Email: {{ $page.props.auth.user.email }}
                                    </p>
                                </div>

                                <!--Components-->
                                <ul class="py-1" role="none">
                                    <li>
                                        <Link
                                            href="/profile"
                                            class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem"
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
                                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                                                />
                                            </svg>
                                            <span class="px-2"> Profile </span>
                                        </Link>
                                    </li>

                                    <li>
                                        <Link
                                            :href="route('logout')"
                                            method="post"
                                            class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem"
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
                                                    d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                                />
                                            </svg>

                                            <span class="px-2"> Sign out </span>
                                        </Link>
                                    </li>
                                </ul>
                                <!--Components End-->
                            </div>
                            <!--Dropdown Comp END-->
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</template>
