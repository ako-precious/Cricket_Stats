<template>
    <form @submit.prevent="filter" class="w-full flex justify-evenly mb-8 mt-4">
        <div class="flex flex-col items-center">
            <label
                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-white opacity-70"
            >
                Player's Name
            </label>
            <!-- <div class="flex flex-nowrap items-center">
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg">
                    <input
                        v-model="filterForm.firstName" @input="getSuggestions" 
                        required
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Name"
                    />
                    <ul v-if="suggestions.length">
                        <li v-for="suggestion in suggestions" :key="suggestion">
                            {{ suggestion }}
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="flex flex-nowrap items-center">
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg">
                    <input
                        v-model="filterForm.firstName"
                        @input="getSuggestions('firstName')"
                        required
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Name"
                    />
                    <ul v-if="suggestions.firstName.length">
                        <li
                            v-for="suggestion in suggestions.firstName"
                            :key="suggestion"
                            @click="selectSuggestion('firstName', suggestion)"
                        >
                            {{ suggestion }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center">
            <label
                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-white opacity-70"
            >
                Match Format
            </label>

            <div
                class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28 mr-1"
            >
                <select
                    v-model="filterForm.matchFormat"
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
        </div>
        <div class="flex flex-col items-center">
            <label
                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-white opacity-70"
            >
                Player's Name
            </label>
            <!-- <div class="flex flex-nowrap items-center">
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg">
                    <input
                        v-model="filterForm.secondName"
                        required
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Name"
                    />
                </div>
            </div> -->
            <div class="flex flex-nowrap items-center">
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg">
                    <input
                        v-model="filterForm.secondName"
                        @input="getSuggestions('secondName')"
                        required
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Name"
                    />
                    <ul v-if="suggestions.secondName.length">
                        <li
                            v-for="suggestion in suggestions.secondName"
                            :key="suggestion"
                            @click="selectSuggestion('secondName', suggestion)"
                        >
                            {{ suggestion }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center">
            <label
                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-white opacity-70"
            >
                Compare
            </label>
            <button
                type="submit"
                class="btn-normal text-sm dark:bg-slate-800 dark:hover:bg-slate-850 shadow-md"
            >
                <img
                    src="../../../assets/img/compare-icon.ico"
                    class="h-6 px-4"
                    alt=""
                />
            </button>
        </div>
    </form>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";
import axios from 'axios';

const props = defineProps({ filters: Object });

const filterForm = useForm({
    firstName: props.filters.firstName ?? null,
    matchFormat: props.filters.matchFormat ?? null,
    secondName: props.filters.secondName ?? null,
});

const suggestions = {
    firstName: ref([]),
    secondName: ref([]),
};

const getSuggestions = async (field) => {
  try {
    // Make an HTTP GET request to your Laravel route that handles suggestions
    const response = await axios.get('/compare', {
      params: { query: filterForm[field], field: field },
    });

    // Assuming the response.data is an array of suggestions
    suggestions[field] = response.data;
  } catch (error) {
    console.error('Error fetching suggestions:', error);
  }
};

const selectSuggestion = (field, suggestion) => {
    filterForm[field] = suggestion;
    suggestions[field] = []; // Clear suggestions after selection
};

const filter = () => {
    filterForm.get("/compare", {
        preserveScroll: true,
        preserveState: true,
    });
};

// You may want to call getSuggestions for initial data fetching
onMounted(() => {
    getSuggestions("firstName");
    getSuggestions("secondName");
});
</script>

<!-- <script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from 'vue';
import axios from 'axios';
 
const props = defineProps({ filters: Object });

const filterForm = useForm({
    firstName: props.filters.firstName ?? null,
    matchFormat: props.filters.matchFormat ?? null,
    secondName: props.filters.secondName ?? null,
});

const filter = () => {
    filterForm.get("/compare", {
        preserveScroll: true,
        preserveState: true,
    });
};

// Add suggestions data for each input field
const suggestions = ref({
  firstName: [],
  secondName: [],
  // ... add more fields as needed
});

// Method to fetch suggestions from the server
const getSuggestions = async (field) => {
  try {
    const response = await axios.get(`/compare`, {
      params: { query: filterForm[field] }
    });
    suggestions[field] = response.data;
  } catch (error) {
    console.error(error);
  }
};

// Method to handle suggestion selection
const selectSuggestion = (field, suggestion) => {
  filterForm[field] = suggestion;
  suggestions[field] = [];
};
</script> -->
<style scoped>
/* Add some styling for the suggestions */
.suggestions {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ddd;
    max-height: 200px;
    overflow-y: auto;
}
.suggestions li {
    padding: 8px;
    cursor: pointer;
}
.suggestions li:hover {
    background-color: #f2f2f2;
}
</style>
