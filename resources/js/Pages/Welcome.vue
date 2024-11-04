<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { route } from "ziggy-js";
defineProps({
    user:{
        type: Object
    },
    // canLogin: {
    //     type: Boolean,
    // },
    // canRegister: {
    //     type: Boolean,
    // },
    // laravelVersion: {
    //     type: String,
    //     required: true,
    // },
    // phpVersion: {
    //     type: String,
    //     required: true,
    // },
});

// function handleImageError() {
//     document.getElementById("screenshot-container")?.classList.add("!hidden");
//     document.getElementById("docs-card")?.classList.add("!row-span-1");
//     document.getElementById("docs-card-content")?.classList.add("!flex-row");
//     document.getElementById("background")?.classList.add("!hidden");
// }
</script>

<template>
    <Head title="Welcome" />
    <header class='shadow-md font-[sans-serif] tracking-wide relative z-50'>
  <section
    class='md:flex lg:items-center relative py-3 lg:px-10 px-4 border-gray-200 border-b bg-transparent lg:min-h-[80px] max-lg:min-h-[60px]'>
    <!-- <a href="javascript:void(0)" class="max-sm:w-full max-sm:mb-3 shrink-0"><img
        src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-[160px]' />
    </a> -->

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
            <button
              class='px-4 py-2 text-sm rounded font-semibold text-[#333] border-2 border-[#333] bg-transparent'>Sign
              Up</button>
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
                    <div
                        class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28"
                    >
                        <div class="mr-auto place-self-center lg:col-span-7">
                            <h1
                                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white"
                            >
                                Building Data Science <br />Challenges .
                            </h1>

                            <p
                                class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"
                            >
                                Empower your skills and creativity by
                                participating in exciting data science
                                challenges designed for students. Learn,
                                compete, and improve your talent in the world
                                of data science!
                            </p>

                            <div
                                class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4"
                            >
                                <a
                                    href=""
                                    target="_blank"
                                    class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                                >
                                   
                                   Data Science Quiz
                                </a>

                                <a
                                    href=""
                                    target="_blank"
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                >
                                   
                                    Sport Prediction
                                </a>
                                <a
                                    href=""
                                    target="_blank"
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                >
                                   
                                    Case Study Challenge
                                </a>
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
                </section>
                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                  
                </footer>
            </div>
        </div>
    </div>
</template>
