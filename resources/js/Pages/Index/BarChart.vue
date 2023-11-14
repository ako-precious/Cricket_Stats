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
//     mounted(){
//     const data = {
//     labels: [
//       'January',
//       'February',
//       'March',
//       'April',
//       'May',
//       'June',
//       'July',
//       'August',
//       'September',
//       'October',
//       'November',
//       'December'
//     ],
//     datasets: [
//       {
//         label: 'Data One',
//         backgroundColor: '#f87979',
//         data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11],
//       },  {
//         label: 'Data Two',
//         backgroundColor: '#f88170',
//         data: [10, 40, 12, 39, 10, 40, 39, 80, 40, 20, 22, 11],
//       }
//     ]
//   }
  
//     const options = {
//     responsive: true,
//     maintainAspectRatio: false
//   }
  
//     }
  }
  </script>
  