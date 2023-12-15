<template>
    <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
</template>

<script>
import { Bar } from "vue-chartjs";
import axios from "axios";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
);


export default {
    name: "BusChartsExample",
    components: { Bar },
    data() {
        return {
            chartData: {
                labels: [],
                datasets: [],
            },
            chartOptions: {
                // Your existing options
            },
        };
    },
    methods: {
        fetchData() {
            axios.get("/api/chart-data")
                .then(response => {
                    this.chartData = response.data;
                    // You might need to adjust the data structure based on your API response
                })
                .catch(error => {
                    console.error("Error fetching chart data:", error);
                });
        },
    },
    mounted() {
        this.fetchData();
    },
};

</script>

<!--https://vue-chartjs.org/guide/#updating-charts-->
<!--https://www.chartjs.org/docs/latest/general/colors.html-->
