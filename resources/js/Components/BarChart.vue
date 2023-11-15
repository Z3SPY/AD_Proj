<template>
    <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
</template>

<script>
import { Bar } from "vue-chartjs";
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
                labels: ["1", "1", "1", "1", "1", "1"],
                datasets: [
                    {
                        label: "Most Purchased Bus",
                        data: [40, 20, 12, 66, 5, 20],
                        borderColor: "#36A2EB",
                        borderWidth: 1,
                        backgroundColor: "cyan",
                        hoverBackgroundColor: "rgba(232,105,90,0.8)",
                        hoverBorderColor: "orange",
                    },
                    {
                        label: "2nd Most Purchased Bus",
                        data: [10, 23, 22, 26, 15, 5],
                        borderColor: "#36A2EB",
                        borderWidth: 1,
                        backgroundColor: "white",
                        hoverBackgroundColor: "rgba(232,105,90,0.8)",
                        hoverBorderColor: "orange",
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                lineTension: 1,
                plugins: {
                    legend: {
                        labels: {
                            color: "white",
                            font: {
                                size: 14,
                            },
                        },
                    },
                },
                scales: {
                    y: {
                        ticks: {
                            color: "white",
                            font: {
                                size: 14,
                            },
                            stepSize: 1,
                            beginAtZero: true,
                        },
                    },
                    x: {
                        ticks: {
                            color: "white",

                            font: {
                                size: 14,
                            },
                            stepSize: 1,
                            beginAtZero: true,
                        },
                    },
                },
            },
        };
    },
};
</script>

<!--https://vue-chartjs.org/guide/#updating-charts-->
<!--https://www.chartjs.org/docs/latest/general/colors.html-->
