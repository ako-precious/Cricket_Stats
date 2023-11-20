
<template>
  <div>
    <canvas id="battingChart" class="w-full" height="250"></canvas>
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
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('/top-batting-players')
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

      // Use Chart.js to render the chart
      const ctx = document.getElementById('battingChart').getContext('2d');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: playerNames,
          datasets: [{
            label: 'Top Ten Batting Players ',
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
