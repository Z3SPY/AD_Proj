<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Carousel from "@/Components/Carousel.vue";
import { defineProps, ref, onMounted, reactive } from "vue";
import { Head, router } from "@inertiajs/vue3";

const busvalues = defineProps({
    busroutes: Object,
    bus: Object,
    busSchedule: Object,
});

const squares = ref(null);

onMounted(() => {
    //Place HOLDER Might Reduce to JUST 1-3 month
    const squaresElement = document.querySelector(".squares");
    for (let i = 1; i < 90; i++) {
        const level = Math.floor(Math.random() * 3);
        squaresElement.insertAdjacentHTML(
            "beforeend",
            `<li data-level="${level}"></li>`
        );
    }

    console.log(busvalues.busroutes.length);
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="flex text-white">
            <h1
                class="ml-10 lg:w-[40%] md:w-[43%] md:text-4xl lg:text-6xl break-words italic tracking-wide leading-snug"
            >
                PARTAS ADMIN MANAGER
            </h1>

            <div
                class="bg-indigo-700 w-[15%] mx-1 rounded-3xl flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <h1 class="p-3 text-xl font-bold">AVAILABLE ROUTES</h1>
                <h1 class="text-4xl italic pr-10 text-right">
                    {{ busvalues.busSchedule.length }}
                </h1>
            </div>
            <div
                class="bg-indigo-700 w-[15%] mx-1 rounded-3xl flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <h1 class="p-3 text-xl font-bold">ACTIVE BUSES</h1>
                <h1 class="text-4xl italic pr-10 text-right">
                    {{ busvalues.bus.length }}
                </h1>
            </div>
            <div
                class="bg-indigo-700 w-[15%] mx-1 rounded-3xl flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <h1 class="p-3 text-xl font-bold">ESTABLISHED STATIONS</h1>
                <h1 class="text-4xl italic pr-10 text-right">
                    {{ busvalues.busroutes.length }}
                </h1>
            </div>
        </div>

        <div
            class="flex justify-center flex-wrap [&>div]:m-2 pt-5 [&>div]:max-h-[30rem]"
        >
            <div
                class="bg-indigo-700 rounded-2xl w-[25rem] h-auto flex-col text-white flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <div class="flex p-5 border-b-4 border-yellow-300 shadow-2xl">
                    <div class="rounded-xl bg-yellow-300 w-10 h-10"></div>
                    <h1 class="ml-5 text-3xl">DEPARTURES</h1>
                </div>

                <div class="overflow-y-auto max-h-[75%] p-1 text-gray-600">
                    <div
                        v-for="schedule in busSchedule"
                        :key="schedule.id"
                        class="flex flex-col"
                    >
                        <div class="flex">
                            <div
                                class="grid grid-cols-2 gap-x-[1rem] border-indigo-700 rounded-xl border-2 p-2 min-w-[12rem] max-w-[12rem] hover:bg-gray-200 hover:text-red-500 hover:font-bold bg-red-50 [&>*]:uppercase"
                            >
                                <div class="">
                                    <h1 class="text-gray-900 font-bold">
                                        FROM
                                    </h1>
                                    <h1 class=" ">{{ schedule.origin }}</h1>
                                </div>

                                <div>
                                    <h1 class="text-gray-900 font-bold">
                                        TICKET TYPE
                                    </h1>
                                    <h1 class=" ">{{ schedule.type }}</h1>
                                </div>
                                <div>
                                    <h1 class="text-gray-900 font-bold">TO</h1>
                                    <h1 class=" ">
                                        {{ schedule.destination }}
                                    </h1>
                                </div>
                                <div>
                                    <img
                                        src="bus-side-view.svg"
                                        alt="bus"
                                        class="w-[3rem] h-[3rem]"
                                        :style="{
                                            filter: 'invert(67%) sepia(95%) saturate(3121%) hue-rotate(0deg) brightness(101%) contrast(102%)',
                                        }"
                                    />
                                </div>
                            </div>

                            <div
                                class="border-2 border-indigo-700 rounded-xl p-2 flex-grow hover:bg-gray-100 bg-white"
                            >
                                <h1 class="text-gray-900 font-bold">
                                    DEPARTURE
                                </h1>
                                <h1
                                    class="min-w-[10rem] max-w-[10rem] text-green-500 font-bold"
                                >
                                    {{ schedule.departure_time }}
                                </h1>
                                <h1 class="text-gray-900 font-bold mt-2">
                                    ARRIVAL
                                </h1>
                                <h1
                                    class="min-w-[10rem] max-w-[10rem] text-red-500 font-bold"
                                >
                                    {{ schedule.arrival_time }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--BAR CHART NOT FINAL-->
            <div
                class="bg-indigo-700 rounded-2xl max-w-[55rem] max-h-[30rem] w-auto h-auto flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <h1 class="p-2 text-xl text-white">
                    MONTHLY PERFORMANCE OF BUSSES (NOT ACCURATE)
                </h1>
                <BarChart class="p-3" />
            </div>
            <!--BAR CHART END-->

            <div
                class="bg-indigo-700 text-white rounded-2xl w-[40rem] h-auto flex-grow hover:bg-black transition duration-100 ease-in-out"
            >
                <div class="graph">
                    <ul class="months">
                        <li>Jan</li>
                        <li>Feb</li>
                        <li>Mar</li>
                    </ul>
                    <ul class="days">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="squares">
                        <!-- added via javascript -->
                    </ul>
                </div>
            </div>
            <div
                class="bg-indigo-700 rounded-2xl w-[20rem] h-auto hover:bg-black transition duration-100 ease-in-out"
            ></div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import BarChart from "../Components/BarChart.vue";

export default {
    name: "App",
    components: { BarChart },
};
</script>
