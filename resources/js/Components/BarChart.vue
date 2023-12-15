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

import axios from 'axios';

export default {
    
    name: "BusChartsExample",
    components: { Bar },
    data() {
        return {
            chartData: {
                labels: [],
                datasets: [
                    {
                        label: 'luxury',
                        data: [],
                        // ... other dataset properties
                    },
                    {
                        label: 'De Luxe',
                        data: [],
                        // ... other dataset properties
                    },
                ],
            },
            // ... other data properties
        };
    },

    mounted() {
        this.fetchBusData();
    },

    methods: {
        async fetchBusData() {
            try {
                const response = await axios.get('/api/buses'); // Adjust the endpoint based on your routes
                const buses = response.data;

                // Process the data and update your chartData
                // For example, assuming buses is an array of bus objects with 'type' and 'capacity' properties:
                this.chartData.labels = buses.map(bus => bus.type);
                this.chartData.datasets[0].data = buses.map(bus => bus.capacity);

                // ... similar processing for other datasets

                // Update other data properties or options as needed
            } catch (error) {
                console.error('Error fetching bus data', error);
            }
        },
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
