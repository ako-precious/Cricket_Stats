<template>
    <div>
      <h3>Predict Player Runs</h3>
      <form @submit.prevent="predictRuns">
        <label v-for="(feature, index) in features" :key="index">
          {{ feature.label }}
          <input v-model="feature.value" type="number" required />
        </label>
        <button type="submit">Predict Runs</button>
      </form>
      <div v-if="predictedRuns !== null">
        Predicted Runs: {{ predictedRuns }}
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        features: [
          { label: 'Innings', value: null },
          { label: 'Strike Rate', value: null },
          // Add other features as needed
        ],
        predictedRuns: null
      };
    },
    methods: {
      async predictRuns() {
        try {
          const data = this.features.map((feature) => feature.value);
          const response = await axios.post('/api/predict-runs', { data });
          this.predictedRuns = response.data.predicted_runs;
        } catch (error) {
          console.error('Error predicting runs:', error);
        }
      }
    }
  };
  </script>
  