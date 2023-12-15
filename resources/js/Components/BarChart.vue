<template>
    <div class="container">
      <Bar v-if="loaded" :data="chartData" />
    </div>
  </template>
  
  <script>
  import { Bar } from 'vue-chartjs'
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
  
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
  
  export default {
    name: 'BarChart',
    components: { Bar },
    data: () => ({
      loaded: false,
      chartData: null
    }),
    async mounted() {   
    this.loaded = false;

    try {
        const response = await fetch('/api/chart-data');
        const { busData } = await response.json();

        console.log(busData);

        const labels = busData.map(item => `${item.type} - ${item.capacity}`);
        const datasets = [
            {
                label: 'Bus Count',
                backgroundColor: '#FFECD6',
                data: busData.map(item => item.count),
            },
        ];

        this.chartData = {
            labels,
            datasets,
        };

        this.loaded = true;
    } catch (e) {
        console.error(e);
    }
    
}
  }
  </script>
    