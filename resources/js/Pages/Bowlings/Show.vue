<!-- <template>
  <BarChart></BarChart>
</template>

<script>
import BarChart from '@/Pages/Bowlings/BarChart.vue'

export default {
  name: 'App',
  components: { BarChart }
}
</script> -->

<template>
  <div>
      <canvas id="myChart" width="400" height="400"></canvas>
  </div>
</template>

<script>
import Chart from "chart.js/auto";

export default {
  mounted() {
      const ctx = document.getElementById("myChart");

      new Chart(ctx, {
          type: "bar",
          data: {
              labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
              datasets: [
                  {
                      label: "# of Votes",
                      data: [12, 19, 3, 5, 2, 3],
                      borderWidth: 1,
                  },
              ],
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

  // ChartJS.register(
  //     Title,
  //     Tooltip,
  //     Legend,
  //     BarElement,
  //     CategoryScale,
  //     LinearScale
  // );
  //   new Chart(ctx, {
  //     type: 'bar',
  //     data: {
  //       labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  //       datasets: [{
  //         label: '# of Votes',
  //         data: [12, 19, 3, 5, 2, 3],
  //         borderWidth: 1
  //       }]
  //     },
  //     options: {
  //       scales: {
  //         y: {
  //           beginAtZero: true
  //         }
  //       }
  //     }
  //   });

  // name: "BarChart",
  // components: { Bar },
  // data() {
  //     return {
  //         chartData: {
  //             labels: ["January", "February", "March"],
  //             datasets: [{ data: [40, 20, 12] }],
  //         },
  //         chartOptions: {
  //             responsive: true,
  //         },
  //     };
  // },
};
</script>
