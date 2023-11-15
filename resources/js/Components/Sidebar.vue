<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const isDropdownVisible = ref(false);

function greet() {
    isDropdownVisible.value = !isDropdownVisible.value;
    console.log("yo");
    // ... your other logic
}
</script>
<template>
    <aside
        id="logo-sidebar"
        class="rounded-sm fixed top-0 left-0 z-40 w-64 h-screen pt-10 transition-transform-translate-x-full bg-dark border-r sm:translate-x-0 dark:bg-blue-400 border-gray-800"
        aria-label="Sidebar"
    >
        <a href="#" class="flex items-center p-5 space-x-3 rtl:space-x-reverse">
            <img
                src="https://flowbite.com/docs/images/logo.svg"
                class="h-8"
                alt="Flowbite Logo"
            />
            <Link href="/dashboard">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap text-primary"
                    >Partas Bus Inc.</span
                >
            </Link>
        </a>

        <div class="h-full px-3 pb-4 overflow-y-auto bg-dark mt-5">
            <ul class="space-y-2 font-medium mt-6">
                <li>
                    <Link
                        href="/dashboard"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 22 21"
                        >
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                            />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                            />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/buses"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 18 18"
                            stroke="currentColor"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                        >
                            <path
                                d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"
                            />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Bus Management</span
                        >
                    </Link>
                </li>
                <li>
                    <Link
                        href="/busroutes"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 18 18"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                        >
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
                            />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Routes</span
                        >
                    </Link>
                </li>
                <li>
                    <Link
                        href="/schedules"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                            />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Schedules</span
                        >
                    </Link>
                </li>

                <li>
                    <Link
                        href="/locations"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                            />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Locations</span
                        >
                    </Link>
                </li>
                <li>
                    <Link
                        href="/payments"
                        class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                            />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap"
                            >Payments</span
                        >
                    </Link>
                </li>
                <li>
                    <div class="border-b-4 pb-60 border-gray-500">
                        <Link
                            href="#"
                            class="flex items-center p-3 text-white rounded-lg hover:bg-white hover:text-black dark:hover:bg-blue-300 group"
                        >
                            <svg
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"
                                />
                            </svg>

                            <span class="flex-1 ml-3 whitespace-nowrap"
                                >Inbox</span
                            >
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"
                                >3</span
                            >
                        </Link>
                    </div>
                </li>

                <li class="absolute bottom-10">
                    <!--Profile Button-->
                    <div>
                        <button
                            @click="greet"
                            id="dropdownDefaultButton"
                            data-dropdown-toggle="dropdown"
                            class="w-full bg-primary text-dark hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-6 text-center inline-flex items-center"
                            type="button"
                        >
                            <span class="px-10 py-2">{{
                                $page.props.auth.user.name.toUpperCase()
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

                        <!--Dropdown Comp-->
                        <div
                            v-show="isDropdownVisible"
                            class="absolute shadow-2xl p-2 right-[-0.2rem] z-50 text-base top-[-10rem] list-none bg-white divide-y divide-gray-100 rounded dark:bg-gray-700 dark:divide-gray-600"
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
                                        class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
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
                                        class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
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
                    </div>
                    <!--Profile Button END-->
                </li>
            </ul>
        </div>
    </aside>
</template>
