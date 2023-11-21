
<template>
  <div>
    <div
                        style="backdrop-filter: blur(20px)"
                        class="border-black/12.5 dark:shadow-dark-xl shadow-3xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border dark:bg-slate-850"
                    >
                        <div
                            class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0 flex justify-between"
                        >
                            <h6
                                class="mb-0  leading-normal dark:text-white dark:opacity-60"
                            > </h6>
                            <p
                                class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60"
                            > <div class="flex flex-col items-center">
            

            <div
                class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28 mr-1"
            >
            <select
        @input="fetchData($event.target.value)"
        required
        class="outline-none border-none bg-transparent text-white dark:text-white text-xs w-full p-1"
      >
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        :value="null"
                    >
                        Match Format
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="T20I"
                    >
                        T20I
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="Tests"
                    >
                        Tests
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="List A"
                    >
                        List A
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="T20"
                    >
                        T20
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="First-Class"
                    >
                        First-Class
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="ODI"
                    >
                        ODI
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="Women's T20I"
                    >
                        Women's T20I
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="Women's ODI"
                    >
                        Women's ODI
                    </option>
                    <option
                        class="bg-green-400 p-2 dark:bg-slate-850"
                        value="Women's Tests"
                    >
                        Women's Tests
                    </option>
                </select>
            </div>
        </div></p>
                        </div>
                        <div class="flex-auto p-4">
                            <div>
                              
                                <canvas id="battingChart" class="w-full transition-all duration-200 ease-in-out" height="220"></canvas>
                            </div>
                        </div>
                    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      battingData: [],
    };
  },
  mounted() {
    this.fetchData('');
  },
  methods: {
    fetchData(matchFormat) {
      axios.get(`/top-batting-players?query=${matchFormat}`)
        .then(response => {
          this.battingData = response.data;
          this.renderChart();
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    },
   
    renderChart() {
  const playerNames = this.battingData.map(entry => entry.label);
  const runs = this.battingData.map(entry => entry.value);

  // Get the canvas element
  const canvas = document.getElementById('battingChart');
  const ctx = canvas.getContext('2d');

  // Check if there's an existing Chart instance and destroy it
  if (this.chartInstance) {
    this.chartInstance.destroy();
  }

  // Create a new Chart instance
  this.chartInstance = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: playerNames,
      datasets: [{
        label: 'Top Ten Batting Players',
        data: runs,
        backgroundColor: '#2BB37B',
        borderColor: '#2BB37B',
        borderWidth: 1,
      }],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
},

  },
};
</script>

<style scoped>
/* Add any custom styles here */
</style>


<!-- <template>
  <div>
    <Bar :data="chartData" :options="options" />
  </div>
</template>

<script lang="ts">
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend } from 'chart.js';
ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend);

import axios from "axios";

export default {
  props: ["chartData"],
  data() {
    return {
      options: {
        responsive: true,
        maintainAspectRatio: false,
      },
    };
  },
  watch: {
    chartData() {
      this.$data._chart.destroy(); // Destroy the existing chart
      this.renderChart(this.chartData);
    },
  },
  mounted() {
    this.fetchChartData();
  },
  methods: {
    fetchChartData() {
      axios.get("/top-batting-players").then((response) => {
        this.chartData = {
          labels: response.data.map((item) => item.label),
          datasets: [
            {
              label: "Top 10 Batting Players",
              backgroundColor: "rgba(75,192,192,0.4)",
              borderColor: "rgba(75,192,192,1)",
              borderWidth: 1,
              data: response.data.map((item) => item.value),
            },
          ],
        };
      });
    },
  },
};
</script> -->

<!-- <template>
  <div>
    <Bar :data="localChartData" :options="options" />
  </div>
</template>

<script lang="ts">
import { Bar } from 'vue-chartjs';
import axios from "axios";
import Vue from "vue";

// const { reactiveProp } = mixins;

export default {
  extends: Bar,
  // mixins: [reactiveProp],
  props: ["chartData", "options"],
  data() {
    return {
      localChartData: {},
      localOptions: {}, // You might want to make localOptions reactive if needed
    };
  },
  watch: {
    chartData: "updateChartData",
  },
  mounted() {
    this.fetchChartData();
  },
  methods: {
    fetchChartData() {
      axios.get("/top-batting-players").then((response) => {
        this.localChartData = {
          labels: response.data.map((item) => item.label),
          datasets: [
            {
              label: "Top 10 Batting Players",
              backgroundColor: "rgba(75,192,192,0.4)",
              borderColor: "rgba(75,192,192,1)",
              borderWidth: 1,
              data: response.data.map((item) => item.value),
            },
          ],
        };
        this.localOptions = {
          responsive: true,
          maintainAspectRatio: false,
        };
      });
    },
    updateChartData() {
      // You can update localChartData when chartData changes
      this.localChartData = this.chartData;
    },
  },
};
</script> -->
<!-- <template>
  <div>
    <Bar :data="ChartData" :options="chartOptions" />
  </div>
</template>

<script lang="ts">
// Import the 'vue-chartjs' library
import { Bar } from 'vue-chartjs';
import axios from "axios";

// Create a new mixin with the desired functionality
const reactiveProp = {
  data() {
    return {
      chartData: null,
      chartOptions: null,
    };
  },
  watch: {
    chartData(newData, oldData) {
      if (oldData) {
        this.$data._chart.destroy(); // Destroy the existing chart
        this.renderChart(newData, this.chartOptions); // Render the chart with new data
      }
    },
  },
  mounted() {
    // Fetch initial chart data
    this.fetchChartData();
  },
  methods: {
    fetchChartData() {
      axios.get('/top-batting-players').then((response) => {
        this.chartData = {
          labels: response.data.map((item) => item.label),
          datasets: [
            {
              label: 'Top 10 Batting Players',
              backgroundColor: 'rgba(75,192,192,0.4)',
              borderColor: 'rgba(75,192,192,1)',
              borderWidth: 1,
              data: response.data.map((item) => item.value),
            },
          ],
        };
        this.chartOptions = {
          responsive: true,
          maintainAspectRatio: false,
        };
      });
    },
  },
};

export default {
  extends: Bar,
  mixins: [reactiveProp],
};

</script> -->

<!-- select the top 10 batting players as the label of the chart and the runs as the value in Laravel from the database tables (batting and players), where players table has the foreign key player_id in batting table. create a chart using vue-chartjs in a Laravel Vue application  -->

<!-- resources/js/components/ChartComponent.vue -->

<!-- <template>
  <div>
    <Bar :data="chartData" :options="chartOptions" />
  </div>
</template>

<script>
import { Bar } from 'vue-chartjs';
import axios from "axios";

export default {
  extends: Bar,
  data() {
    return {
      chartData: {},
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        // Add other chart options as needed
      },
    };
  },
  mounted() {
    this.fetchChartData();
  },
  methods: {
    async fetchChartData() {
      try {
        // const response = await axios.get('/chart-data');
       await axios.get("/top-batting-players").then((response) => {
      this.localChartData = {
        labels: response.data.map((item) => item.label),
        datasets: [
          {
            label: "Top 10 Batting Players",
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderWidth: 1,
            data: response.data.map((item) => item.value),
          },
        ],
        };})
        
      } catch (error) {
        console.error('Error fetching chart data:', error);
      }
    },
  },
};
</script> -->
<!-- methods: {
  fetchChartData() {
    axios.get("/top-batting-players").then((response) => {
      this.localChartData = {
        labels: response.data.map((item) => item.label),
        datasets: [
          {
            label: "Top 10 Batting Players",
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderWidth: 1,
            data: response.data.map((item) => item.value),
          },
        ],
      };
      this.localOptions = {
        responsive: true,
        maintainAspectRatio: false,
      };
    });
  },
  updateChartData() {
    // You can update localChartData when chartData changes
    this.localChartData = this.chartData;
  },
}, -->
<!-- <style scoped>
/* Add styles as needed */
</style> -->
