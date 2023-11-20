<template>
  <div>
    <Line :data="chartData" :options="options" />
  </div>
</template>

<script lang="ts">
import { Chart as ChartJS,  CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend } from "chart.js";
import { Line } from "vue-chartjs";
import axios from "axios";
ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend);

export default {
  // extends: LineChart,
  components: {
    Line,
  },
  props: ["chartData", "options"],
  watch: {
    chartData() {
      this.$data._chart.destroy(); // Destroy the existing chart
      this.renderChart(this.chartData, this.options);
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
        this.options = {
          responsive: true,
          maintainAspectRatio: false,
        };
      });
    },
  },
};
</script>
