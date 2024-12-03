<template>
  <div>
    <h1>Predict Runs</h1>
    <input v-model="inputData" type="text" placeholder="Enter input data (comma-separated)" />
    <button @click="getPrediction">Predict</button>
    <p v-if="prediction">Prediction: {{ prediction }}</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      inputData: '', // Input from the user
      prediction: null,
    };
  },
  methods: {
    async getPrediction() {
      const inputArray = this.inputData.split(',').map(Number); // Convert input to an array of numbers
      try {
        const response = await axios.post('http://127.0.0.1:5000/predict', { input: inputArray });
        this.prediction = response.data.predicted_runs; // Set prediction
      } catch (error) {
        console.error('Error getting prediction:', error);
      }
    },
  },
};
</script>
