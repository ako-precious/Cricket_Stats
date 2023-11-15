<template>
    <form @submit.prevent="filter">
        <div class="mb-8 mt-4 flex flex-wrap gap-2">
            <div class="flex flex-nowrap items-center">
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg">
                    <input v-model="filterForm.name"
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Name"
                    />
                </div>
            </div>

            <div class="flex flex-nowrap items-center">
                <div
                    class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28 mr-1"
                >
                    <select v-model="filterForm.matchFormat"
                        class="outline-none border-none bg-transparent text-white text-sm"
                    >
                       <option class="bg-green-400 p-2 dark:bg-slate-850" :value="null">
                            Match Format
                        </option>
                        <!-- <option class="bg-green-400 p-2 dark:bg-slate-850" :value="null">
                            Match Format
                        </option> -->
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="T20I">
                            T20I
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="Tests">
                            Tests
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="List A">
                            List A
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="T20">
                            T20
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="First-Class">
                            First-Class
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="ODI">
                            ODI
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="Women's T20I">
                            Women's T20I
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="Women's ODI">
                            Women's ODI
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="Women's Tests">
                            Women's Tests
                        </option>
                    </select>
                </div>
                <div
                    class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28"
                >
                    <select v-model="filterForm.gender"
                        class="outline-none border-none bg-transparent text-white text-sm w-full"
                    >
                        <option class="bg-green-400 p-2 dark:bg-slate-850" :value="null">
                             Gender
                        </option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="M">Male</option>
                        <option class="bg-green-400 p-2 dark:bg-slate-850" value="F">
                            Female
                        </option>
                    </select>
                </div>
            </div>

            <div class="flex flex-nowrap items-center">
              <div class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28 mr-1">
                    <input v-model.number="filterForm.runsFrom"
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Runs From"
                    />
                </div>
                <div class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28">
                    <input v-model.number="filterForm.runsTo"
                        class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                        type="text"
                        name=""
                        id=""
                        placeholder="Runs To"
                    />
                </div>
            </div>

            <button type="submit" class="btn-normal text-sm dark:bg-slate-800 dark:hover:bg-slate-850 shadow-md">Filter</button>
            <button type="reset" class="text-sm text-white" @click="clear">Clear</button>
        </div>
    </form>
</template>
 <script setup>
import { useForm } from '@inertiajs/vue3';

import {createRouter, createWebHistory} from 'vue-router';



import BattingIndex from '@/Pages/Battings/Index.vue';

// const props = defineProps({filters: Object})

const routes = [
    {
        path: '/battings',
        name: 'battings.index',
        component: BattingIndex,
        // component:()=>import('./pages/Home.vue')
    }
   
]

const router = createRouter({
    history:createWebHistory(),
    routes
})

// const targetRoute = this.$router.resolve({ name: 'batting.index' }).href;

console.log('Route of another page:', router);

const filterForm = useForm({
  name: props.filters.name ?? null,
  matchFormat:  props.filters.matchFormat ?? null,
  gender:  props.filters.gender ?? null,
  runsFrom:  props.filters.runsFrom ?? null,
  runsTo:  props.filters.runsTo ?? null,
})

const filter = () => {
  filterForm.get('/battings/index', {
    preserveScroll: true,
    preserveState: true,
  });
}
// const filter = () => {
//   const routeData = filterForm.get(); // Get data from filter form

//   router.push({
//     name: 'battings.index', // Route name
//     query: routeData, // Pass data as query params
//   }, {
//     preserveScroll: true, // Preserve scroll position
//     preserveState: true, // Preserve state
//   });
// };

const clear = () => {
  
  filterForm.name = null
  filterForm.matchFormat = null
  filterForm.gender = null
  filterForm.runsFrom = null
  filterForm.runsTo = null
}
</script>
<style>
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
</style>
