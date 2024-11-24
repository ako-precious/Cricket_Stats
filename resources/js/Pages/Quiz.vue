<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { route } from "ziggy-js";
defineProps({
    user:{
        type: Object
    },
   
});

</script>

<template>
    <Head title="Welcome" />
    <header class='shadow-md font-[sans-serif] tracking-wide relative z-50'>
  <section
    class='md:flex lg:items-center relative py-3 lg:px-10 px-4 border-gray-200 border-b bg-transparent lg:min-h-[80px] max-lg:min-h-[60px]'>
   

    <div class='flex flex-wrap w-full items-center'>
      <input type='text' placeholder='Search something...'
        class='xl:w-96 max-lg:w-full lg:ml-10 max-md:mt-4 max-lg:ml-4 bg-gray-100 focus:bg-transparent px-6 rounded h-11  text-sm transition-all' />
      <div class="ml-auto max-lg:mt-4">

        <ul v-if="user" class='flex items-center'>
         
          

          <li class='flex text-[15px] max-lg:py-2 px-3 hover:text-[#007bff] hover:fill-[#007bff]'>
            <button
              class='px-4 py-2 text-sm rounded font-semibold text-[#333] border-2  bg-transparent'>{{ user.name }}</button>
          </li>
          <li class='flex text-[15px] max-lg:py-2 px-3 hover:text-[#007bff] hover:fill-[#007bff]'>
            <Link :href="route('logout')" method="delete" as="button"
              class='px-4 py-2 text-sm rounded font-semibold text-[#333] border-2 border-[#333] bg-transparent'>Sign
              Out</Link>
          </li>
        
        </ul>
        <ul v-else class='flex items-center'>
         
          

          <li class='flex text-[15px] max-lg:py-2 px-3 hover:text-[#007bff] hover:fill-[#007bff]'> 
            <Link :href="route('login')"
              class='px-4 py-2 text-sm rounded font-semibold text-[#333] border-2 border-[#333] bg-transparent'>Sign
              In</Link>
          </li>
          <li class='flex text-[15px] max-lg:py-2 px-3 hover:text-[#007bff] hover:fill-[#007bff]'>
          <Link :href="route('register')"
              class='px-4 py-2 text-sm rounded font-semibold text-[#333] border-2 border-[#333] bg-transparent'>Sign
              Up</Link>
          </li>
        
        </ul>
      </div>
    </div>
  </section>


</header>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img
            id="background"
            class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg"
        />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
               

                <section class="">
                    <div v-if="showDiv1"
                        class="grid max-w-screen-xl px-4 pt-20 items-center justify-center pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28"
                    >
                        <div class="mr-auto place-self-center  items-center lg:col-span-7">
                            <h1
                                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white"
                            >
                                 Data Science Quiz.
                            </h1>

                            <p
                                class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"
                            >
                                To answer the quiz challenge click on the button below
                            </p>

                            <div
                                class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4"
                            >
                                
                                <button  @click="toggleDivs"
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                > Start Quiz
                        </button>
                            </div>
                        </div>

                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img
                                src="/images/hero.png"
                                loading="lazy"
                                alt="Photo by Minh Pham"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                            />
                        </div>
                    </div>
                    <div v-else  class="flex flex-col max-w-screen-xl px-4 pt-20 items-center justify-center pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
    <!-- Display Question -->
    <div v-if="currentQuiz">
      <h2>Question {{ progress }} of 30</h2>
      <p>{{ currentQuiz.question }}</p>

      <!-- Display Options -->
      <div v-for="(option, index) in options" :key="index">
        <button @click="submitAnswer(option)">
          {{ option }}
        </button>
      </div>
    </div>

    <!-- Progress -->
    <div v-else-if="loading">
      <p>Loading...</p>
    </div>
    <div v-else>
      <p>You've completed the test!</p>
      <button @click="viewResults">View Results</button>
    </div>

    <!-- Feedback -->
    <p v-if="feedback">{{ feedback }}</p>

    <!-- Progress Bar -->
    <progress :value="progress" max="30"></progress>
  </div>
                </section>
                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                  
                </footer>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      showDiv1: true,
      currentQuiz: null,
      options: [],
      progress: 0,
      remaining: 30,
      feedback: "",
      loading: true,
    };
  },
  methods: {
    toggleDivs() {
      this.showDiv1 = !this.showDiv1;
    },
    // Fetch a new quiz question
    async fetchQuestion() {
      try {
        this.loading = true;
        const response = await axios.get("/api/fetch-random-quiz");
        const { quiz, progress, remaining, message } = response.data;

        if (message) {
          this.currentQuiz = null; // No more questions
        } else {
          this.currentQuiz = quiz;
          this.options = JSON.parse(quiz.options);
          this.progress = progress;
          this.remaining = remaining;
        }
      } catch (error) {
        console.error("Error fetching question:", error);
      } finally {
        this.loading = false;
      }
    },

    // Submit the selected answer
    async submitAnswer(selectedOption) {
      try {
        const response = await axios.post("/api/submit-answer", {
          quiz_id: this.currentQuiz.id,
          user_answer: selectedOption,
        });

        this.feedback = response.data.is_correct
          ? "Correct!"
          : "Incorrect. Try the next question.";
        setTimeout(() => {
          this.feedback = ""; // Clear feedback after 2 seconds
          this.fetchQuestion(); // Load the next question
        }, 2000);
      } catch (error) {
        console.error("Error submitting answer:", error);
      }
    },

    // View final results
    async viewResults() {
      try {
        const response = await axios.get("/api/calculate-results");
        const { percentage, comparison } = response.data;

        // Redirect to a result component or show results inline
        this.$emit("show-results", { percentage, comparison });
      } catch (error) {
        console.error("Error fetching results:", error);
      }
    },
  },
  mounted() {
    this.fetchQuestion(); // Fetch the first question on load
  },
};
</script>