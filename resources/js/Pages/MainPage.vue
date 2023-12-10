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
    <nav
        class="fixed top-0 z-50 w-full bg-transparent text-white navbar-background"
    >
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

            <div
                class="hidden w-full md:block md:w-auto p-0 m-0 mb-14"
                id="navbar-solid-bg"
            >
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
                                    class="flex justify-between [&>*]:mx-2 [&>*]:p-5 [&>*]:rounded-xl [&>*]:h-[1.9rem]"
                                >
                                    <Link
                                        :href="route('login')"
                                        class="flex items-center font-semibold text-xl text-white border-2 border-gray-500 hover:text-orange-400 hover:border-orange-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
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
                                        class="flex ml-4 items-center font-semibold text-xl text-white border-2 border-white hover:text-orange-400 hover:border-orange-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
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

    <div class="dark:border-gray-700 min-h-screen max-h-screen">
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
                    <a href="#Testimonies"
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

    <div
        id="Testimonies"
        class="flex flex-col items-center justify-center w-full"
    >
        <h1 class="text-7xl m-0 p-0 italic">TESTIMONIES</h1>
        <h2 class="text-2xl text-center w-[50vw] mt-5 text-gray-400">
            Our customers love us! Read what they have to say below. Aliquam sed
            justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.
        </h2>
        <div class="card-container w-[100vw] p-5 text-white mt-12 py-10">
            <div
                class="cards flex [&>*]:text-center [&>*]:p-5 [&>*]:pb-[10rem] [&>*]:rounded-3xl"
            >
                <div
                    class="inner-card w-[25vw] bg-black flex flex-col items-center"
                >
                    <div
                        class="pic w-[10rem] h-[10rem] bg-red-100 bg-cover mt-10"
                        style="background-image: url('pic4.jpg')"
                    ></div>
                    <h1 class="text-2xl mt-10">John Doe</h1>
                    <h2 class="text-xl">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit."
                    </h2>
                </div>

                <!-- Testimony 2 -->
                <div
                    class="inner-card w-[25vw] bg-black flex flex-col items-center"
                >
                    <div
                        class="pic w-[10rem] h-[10rem] bg-red-100 bg-cover mt-10"
                        style="background-image: url('pic2.jpg')"
                    ></div>
                    <h1 class="text-2xl mt-10">Jane Smith</h1>
                    <h2 class="text-xl">
                        "Sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua."
                    </h2>
                </div>

                <!-- Testimony 3 -->
                <div
                    class="inner-card w-[25vw] bg-black flex flex-col items-center"
                >
                    <div
                        class="pic w-[10rem] h-[10rem] bg-red-100 bg-cover mt-10"
                        style="background-image: url('pic3.jpg')"
                    ></div>
                    <h1 class="text-2xl mt-10">Alice Johnson</h1>
                    <h2 class="text-xl">
                        "Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris."
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div
        id="Display"
        class="flex flex-col items-center w-screen h-[80vh] text-center mt-[50px] mx-auto"
    >
        <!--CAROUSEL ABOUT DESTINATION-->
        <h1 class="text-7xl italic mb-10">VISIT DESTINATIONS</h1>
        <h2 class="text-2xl text-center w-[50vw] mb-10 text-gray-400">
            Explore the Unseen, Discover the Unforgettable: Visit Destinations
        </h2>
        <div>
            <input checked id="one" name="multiples" type="radio" value="1" />
            <label for="one">1</label>

            <input id="two" name="multiples" type="radio" value="2" />
            <label for="two">2</label>

            <input id="three" name="multiples" type="radio" value="3" />
            <label for="three">3</label>

            <input id="four" name="multiples" type="radio" value="4" />
            <label for="four">4</label>

            <input id="five" name="multiples" type="radio" value="5" />
            <label for="five">5</label>

            <input id="six" name="multiples" type="radio" value="6" />
            <label for="six">6</label>

            <input id="seven" name="multiples" type="radio" value="7" />
            <label for="seven">7</label>

            <input id="eight" name="multiples" type="radio" value="8" />
            <label for="eight">8</label>

            <div class="container">
                <div class="carousel-3D">
                    <div
                        class="card-img"
                        style="background-image: url('1.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            IFUGAO
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('2.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            PINATUBO
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('3.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            TAAL
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('4.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            BANGUI
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('5.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            MT PULAG
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('6.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            MAYON
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('7.jpg')"
                    >
                        <div
                            class="text-8xl text-white items-center flex justify-center"
                        >
                            EL NIDO
                        </div>
                    </div>
                    <div
                        class="card-img"
                        style="background-image: url('8.jpg')"
                    >
                        <div
                            class="text-7xl text-white items-center flex justify-center"
                        >
                            INTRAMUROS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        id="AboutUs"
        class="about-div flex flex-col items-center w-screen text-center my-[50px] mx-auto relative"
    >
        <div class="[&>p]:text-xl [&>h2]:text-7xl">
            <div class="flex">
                <div
                    class="h-[50rem] w-[30vw] bg-red-50 bg-no-repeat bg-cover rounded-3xl"
                    style="background-image: url('bus.jpg')"
                ></div>
                <div class="h-[50rem] w-auto">
                    <h1 class="text-6xl italic mb-5">ABOUT US</h1>
                    <h1 class="text-xl break-all px-40 w-[45vw]">
                        Partas Bus Inc stands as a beacon of reliability and
                        comfort in the realm of transportation. With a legacy
                        built on safety and punctuality, we take pride in
                        connecting communities and providing passengers with
                        unparalleled travel experiences. Our commitment to
                        excellence ensures that every journey with Partas Bus
                        Inc is not just a ride but a seamless exploration of
                        destinations.
                    </h1>

                    <h1 class="text-6xl italic mb-5 mt-11">OUR VISION</h1>
                    <h1 class="text-xl break-all px-40 w-[45vw]">
                        To be the preferred and most trusted bus company,
                        providing exceptional travel experiences and setting the
                        standard for excellence in the industry.
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="ContactU"></div>
</template>

<style></style>
