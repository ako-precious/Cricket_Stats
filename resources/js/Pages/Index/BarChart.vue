<template>
    <Line :data="data" :options="options" />
</template>

<script lang="ts">
import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
} from 'chart.js'
import { Line } from 'vue-chartjs'
import * as chartConfig from './chartConfig.js'
import axios from 'axios';
ChartJS.register(
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
)

export default {
  name: 'App',
  components: {
    Line
  },
  data() {

    return chartConfig
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
    });
  },
}
}
</script>
