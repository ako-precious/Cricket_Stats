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
               

                <section class="mt-24">
                    <!-- <div
                        class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28"
                    >
                        <div class="mr-auto place-self-center items-center lg:col-span-7">
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
                                <link
                                    :href="route('case-study')"
                                    target="_blank"
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                >
                                   
                                    Case Study Challenge
                            </link>
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
                    </div> -->
                   
                

                
    
               
<div class="grid grid-cols-6 grid-rows-4 gap-7">
    <div class="col-span-2 row-span-2"> 
        <div class="ag-courses_item">
                <a class="ag-courses-item_link" href="https://psridhar1996.medium.com/e-surveillance-alert-classification-8cc5d1a6d1d0">
                  <div class="ag-courses-item_bg"></div>
                  <div class="ag-courses-item_title">First Case Study</div>
                  <div class="ag-courses-item_date-box">
                    
                    <span class="ag-courses-item_date"> E surveillance Alert classification </span>
                  </div>
                </a>
                </div>
    </div>
    <div class="col-span-2 row-span-4 col-start-3"><div class="outer w-full h-full">
    <div class="dot"></div>
    <div class="card">
      <div class="ray"></div>
      <div class="text uppercase">Case</div>
      <div class="text uppercase">Study</div>
     
      <div class="line topl"></div>
      <div class="line leftl"></div>
      <div class="line bottoml"></div>
      <div class="line rightl"></div>
    </div>
  </div></div>
    <div class="col-span-2 row-span-2 col-start-1 row-start-3">
        <div class="ag-courses_item">
                <a class="ag-courses-item_link" href="https://psridhar1996.medium.com/kane-williamson-vs-joe-root-47876e9fa1c8">
                  <div class="ag-courses-item_bg"></div>
                  <div class="ag-courses-item_title">Second Case Study</div>
                  <div class="ag-courses-item_date-box">
                    
                    <span class="ag-courses-item_date"> Batsman comparison analysis </span>
                  </div>
                </a>
                </div>
    </div>
    <div class="col-span-2 row-span-2 col-start-5 row-start-1"> <div class="col-span-2 row-span-2 col-start-1 row-start-3">
        <div class="ag-courses_item">
                <a class="ag-courses-item_link" href="https://psridhar1996.medium.com/batsman-dismissal-classification-cricket-02f0607b9272">
                  <div class="ag-courses-item_bg"></div>
                  <div class="ag-courses-item_title"> Third Case Study</div>
                  <div class="ag-courses-item_date-box">
                    
                    <span class="ag-courses-item_date">Batsman dismissal classification</span>
                  </div>
                </a>
                </div>
    </div>
</div>
<div class="col-span-2 row-span-2 col-start-5 row-start-3">
        <div class="ag-courses_item">
                <a class="ag-courses-item_link" href="https://psridhar1996.medium.com/match-up-maxwell-vs-ashwin-3da3088970e1">
                  <div class="ag-courses-item_bg"></div>
                  <div class="ag-courses-item_title"> Forth Case Study</div>
                  <div class="ag-courses-item_date-box">
                    
                    <span class="ag-courses-item_date">Player comparison analysis</span>
                  </div>
                </a>
                </div>
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
<style scoped>
  .ag-courses_item {
    margin: auto;
    overflow: hidden;
    border-radius: 28px;
  }
  .ag-courses-item_link {
    display: block;
    padding: 30px 20px;
    background-color: #6e1e1e92;
    overflow: hidden;
    position: relative;
    text-decoration: none;
  }

  .ag-courses-item_link:hover,
  .ag-courses-item_link:hover .ag-courses-item_date {
    color: #121212;
  }
  .ag-courses-item_link:hover .ag-courses-item_bg {
    -webkit-transform: scale(10);
    -ms-transform: scale(10);
    transform: scale(10);
  }
  .ag-courses-item_title {
    min-height: 57px;
    margin: 0 0 30px;
    overflow: hidden;
    font-weight: bold;
    font-size: 20px;
    color: rgb(255, 255, 255);
    z-index: 2;
    position: relative;
  }
  .ag-courses-item_date-box {
    font-size: 18px;
    color: #fff;
    z-index: 2;
    position: relative;
  }
  .ag-courses-item_date {
    font-weight: bold;
    color: #f9e534;
    -webkit-transition: color 0.5s ease;
    -o-transition: color 0.5s ease;
    transition: color 0.5s ease;
  }
  .ag-courses-item_bg {
    height: 130px;
    width: 100px;
    background-color: #f9b234;
    z-index: 1;
    position: absolute;
    top: -75px;
    right: -75px;
    border-radius: 50%;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }



  
  .outer {
    /* width: 300px;
    height: 250px; */
    border-radius: 10px;
    padding: 1px;
    background: radial-gradient(circle 230px at 0% 0%, #ffffff, #b13458);
    position: relative;
  }

  .dot {
    width: 5px;
    aspect-ratio: 1;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 0 10px #ffffff;
    border-radius: 100px;
    z-index: 2;
    right: 10%;
    top: 10%;
    animation: moveDot 6s linear infinite;
  }

  @keyframes moveDot {
    0%,
    100% {
      top: 10%;
      right: 10%;
    }
    25% {
      top: 10%;
      right: calc(100% - 35px);
    }
    50% {
      top: calc(100% - 30px);
      right: calc(100% - 35px);
    }
    75% {
      top: calc(100% - 30px);
      right: 10%;
    }
  }

  .card {
    z-index: 1;
    width: 100%;
    height: 100%;
    border-radius: 9px;
    border: solid 1px #983c5c;
    background-size: 20px 20px;
    background: radial-gradient(circle 280px at 0% 0%, #444444, #0c0d0d);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    flex-direction: column;
    color: #fff;
  }
  .ray {
    width: 220px;
    height: 45px;
    border-radius: 100px;
    position: absolute;
    background-color: #c7c7c7;
    opacity: 0.4;
    box-shadow: 0 0 50px #fff;
    filter: blur(10px);
    transform-origin: 10%;
    top: 0%;
    left: 0;
    transform: rotate(40deg);
  }

  .card .text {
    font-weight: bolder;
    font-size: 4rem;
    background: linear-gradient(45deg, #865858 4%, #fff, #975353);
    background-clip: text;
    color: transparent;
  }

  .line {
    width: 100%;
    height: 1px;
    position: absolute;
    background-color: #2c2c2c;
  }
  .topl {
    top: 10%;
    background: linear-gradient(90deg, #888888 30%, #1d1f1f 70%);
  }
  .bottoml {
    bottom: 10%;
  }
  .leftl {
    left: 10%;
    width: 1px;
    height: 100%;
    background: linear-gradient(180deg, #747474 30%, #222424 70%);
  }
  .rightl {
    right: 10%;
    width: 1px;
    height: 100%;
  }
</style>
