<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Carousel from "@/Components/Carousel.vue";
import { defineProps, ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";

const busvalues = defineProps({
    busroutes: Object,
    bus: Object,
    busschedule: Object,
});

const squares = ref(null);

onMounted(() => {
    //Place HOLDER Might Reduce to JUST 1-3 month
    const squaresElement = document.querySelector(".squares");
    for (let i = 1; i < 365; i++) {
        const level = Math.floor(Math.random() * 3);
        squaresElement.insertAdjacentHTML(
            "beforeend",
            `<li data-level="${level}"></li>`
        );
    }
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div>
            <h1
                class="text-white w-[40%] md:text-2xl lg:text-6xl break-words italic tracking-wide leading-snug"
            >
                PARTAS ADMIN MANAGER
            </h1>
        </div>

        <div
            class="flex justify-center flex-wrap [&>div]:m-2 pt-5 [&>div]:max-h-[30rem]"
        >
            <div
                class="bg-gray-700 rounded-2xl w-[25rem] h-auto flex-grow"
            ></div>

            <!--BAR CHART NOT FINAL-->
            <div
                class="bg-gray-700 rounded-2xl max-w-[45rem] max-h-[30rem] w-auto h-auto flex-grow"
            >
                <h1 class="p-2 text-xl text-white">
                    MONTHLY PERFORMANCE OF BUSSES (NOT ACCURATE)
                </h1>
                <BarChart class="p-3" />
            </div>
            <!--BAR CHART END-->

            <div class="bg-gray-700 rounded-2xl w-[20rem] h-auto"></div>

            <div class="bg-gray-700 rounded-2xl w-[40rem] h-auto flex-grow">
                <div class="graph">
                    <ul class="months">
                        <li>Jan</li>
                        <li>Feb</li>
                        <li>Mar</li>
                        <li>Apr</li>
                        <li>May</li>
                        <li>Jun</li>
                        <li>Jul</li>
                        <li>Aug</li>
                        <li>Sep</li>
                        <li>Oct</li>
                        <li>Nov</li>
                        <li>Dec</li>
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
            <div class="bg-gray-700 rounded-2xl w-[20rem] h-auto"></div>
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
