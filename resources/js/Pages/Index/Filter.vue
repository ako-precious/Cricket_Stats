<template>
    <form @submit.prevent="filter" class="w-full flex justify-evenly mb-8 mt-4">
        <div class="flex flex-col items-center">
            <label
                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-white opacity-70"
            >
                Player's Name
            </label>
            <div class="flex flex-nowrap items-center">
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
            <div class="flex flex-nowrap items-center">
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
import { useForm } from "@inertiajs/vue3";

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
</script>
<script>
export default {
    data() {
        return {
            firstName: "",
            suggestions: [],
        };
    },
    methods: {
        async getSuggestions() {
            try {
                const response = await axios.get("/compare", {
                    params: {  firstName: this. firstName },
                });
                this.suggestions = response.data;
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
