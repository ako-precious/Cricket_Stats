<template>
    <div class="absolute w-full bg-emerald-600 dark:hidden min-h-75"></div>
    <!-- sidenav  -->
    <!-- <aside
        class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-xl dark:shadow-none xl:ml-6 dark:bg-slate-850 z-990 rounded-2xl xl:translate-x-0 ps ps--active-y max-w-24 overflow-hidden"
       
    > -->
    <aside
        mini="false"
        class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-xl dark:shadow-none xl:ml-6 dark:bg-slate-850 z-990 rounded-2xl xl:translate-x-0 ps ps--active-y max-w-64 overflow-y-auto"
        id="sidenav-main"
    >
        <div class="h-19">
            <i
                class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close
            ></i>
            <a
                class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html"
                target="_blank"
            >
                <img
                    src="../../assets/img/cricket_logo.png"
                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                    alt="main_logo"
                />
                <img
                    src="../../assets/img/cricket_logo.png"
                    class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                    alt="main_logo"
                />
                <span
                    class="ml-2 font-semibold transition-all duration-200 ease-nav-brand text-xl"
                    >Cricket Stats</span
                >
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
        />

        <div
            class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full"
        >
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a
                        class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                        href="../pages/dashboard.html"
                    >
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                        >
                            <i
                                class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                            >Dashboard</span
                        >
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="../pages/tables.html"
                    >
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                        >
                            <i
                                class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                            >Tables</span
                        >
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="../pages/billing.html"
                    >
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5"
                        >
                            <i
                                class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                            >Billing</span
                        >
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="../pages/virtual-reality.html"
                    >
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                        >
                            <i
                                class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                            >Virtual Reality</span
                        >
                    </a>
                </li>
               
                
            </ul>
        </div>
    </aside>
    
    <!-- <aside
        mini="false"
        class="fixed inset-y-0 left-0 flex-wrap items-center  justify-between block w-full p-0 my-4 transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-xl dark:shadow-none xl:ml-6 dark:bg-slate-850 z-990 rounded-2xl xl:translate-x-0 ps ps--active-y max-w-64 overflow-y-auto"
        id="sidenav-main"
    >
        <div class="h-20">
            <i
                class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden"
                aria-hidden="true"
                sidenav-close-btn=""
            ></i>
            <a
                class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white"
                href=" https://demos.creative-tim.com/argon-dashboard-pro-tailwind/pages/dashboards/default.html "
                target="_blank"
            >
                <img
                    src="../../../assets/img/cricket_logo.png"
                    class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:hidden"
                    alt="main_logo"
                />
                <img
                    src="../../../assets/img/cricket_logo.png"
                    class="hidden h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:inline-block"
                    alt="main_logo"
                />
                <span
                    class="ml-1 font-semibold transition-all duration-200 ease-in-out opacity-100"
                    >Argon Dashboard 2 PRO</span
                >
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
        />
        <div
            class="items-center block w-full h-auto grow basis-full"
            id="sidenav-collapse-main"
        >
            <ul class="flex flex-col pl-0 mb-0 list-none">
                <li class="mt-0.5 w-full">
                    <a
                        active_primary=""
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="after:ease-in-out after:font-awesome-5-free ease-in-out text-sm leading-default py-2.7 my-0 mx-2 flex items-center whitespace-nowrap rounded-lg bg-blue-500/30 px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:font-bold dark:after:text-white after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 after:text-slate-800/50 after:content-['\f107']"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal text-blue-500 ni ni-shop"
                            ></i>
                        </div>

                        <span
                            class="ml-1 duration-300 pointer-events-none ease dark:text-white text-slate-700 opacity-100"
                            >Dashboards</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="dashboardsExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/landing.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        L
                                    </span>

                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Landing
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/default.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        D
                                    </span>

                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Default
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    active_page=""
                                    active_secondary=""
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap rounded-lg bg-transparent pr-4 font-semibold text-slate-800 shadow-none transition-colors dark:text-white dark:opacity-100 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/automotive.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Automotive
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/smart-home.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Smart Home
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        V
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Virtual Reality <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="vrExamples"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/dashboards/vr/vr-default.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    V
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    VR Default
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/dashboards/vr/vr-info.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    V
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    VR Info
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/crm.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        CRM
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="w-full mt-4">
                    <h6
                        class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60 dark:text-white"
                    >
                        PAGES
                    </h6>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="pagesExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal text-orange-500 ni ni-ungroup"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Pages</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="pagesExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Profile <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="profileExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/overview.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Profile Overview
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/teams.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    T
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Teams
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/projects.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    A
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    All Projects
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        U
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Users <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="usersExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/users/reports.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    R
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Reports
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/users/new-user.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New User
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Account <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="accountExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/settings.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    S
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Settings
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/billing.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Billing
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/invoice.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Invoice
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/security.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    S
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Security
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Projects <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="projectsExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/general.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    G
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    General
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/timeline.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    T
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Timeline
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/new-project.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New Project
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/pricing-page.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Pricing Page
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/chat.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Chat
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/rtl-page.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        RTL
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/widgets.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        W
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Widgets
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/charts.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Charts
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/sweet-alerts.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sweet Alerts
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/notifications.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        N
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Notifications
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="applicationsExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-ui-04 text-cyan-500"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Applications</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="applicationsExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/kanban.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        K
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Kanban
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/wizard.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        W
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Wizard
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/datatables.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        D
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        DataTables
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/calendar.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Calendar
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/analytics.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="ecommerceExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-archive-2 text-emerald-500"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Ecommerce</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="ecommerceExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/ecommerce/overview.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        O
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Overview
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Products <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="productsExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/new-product.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New Product
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/edit-product.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Edit Product
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/product-page.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Product Page
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/products-list.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Products List
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        O
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Orders <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="ordersExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/orders/list.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    O
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Order List
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/orders/details.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    O
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Order Details
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/ecommerce/referral.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Referral
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="authExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal text-red-600 ni ni-single-copy-04"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Authentication</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="authExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sign In <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="signinExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sign Up <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="signupExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Reset Password <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="resetExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        L
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Lock <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="lockExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        2
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        2-Step Verification <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="StepExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        E
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Error <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="errorExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/error/404.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Error 404
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/error/500.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Error 500
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-0.5 w-full">
                    <hr
                        class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
                    />
                    <h6
                        class="pl-6 mb-2 ml-2 text-xs font-bold leading-tight uppercase opacity-60 dark:text-white"
                    >
                        DOCS
                    </h6>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="basicExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-spaceship text-slate-700/80"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Basic</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="basicExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        G
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Getting Started <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="gettingStartedExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/"
                                                target="_blank"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    Q
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Quick Start
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/license/argon-dashboard/"
                                                target="_blank"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    L
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    License
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/what-is-tailwind-css/argon-dashboard/"
                                                target="_blank"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Contents
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        F
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Foundation <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="foundationExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/colors/argon-dashboard/"
                                                target="_blank"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Colors
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/typography/argon-dashboard/"
                                                target="_blank"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    T
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Typography
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="componentsExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-app text-slate-700/80"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Components</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="componentsExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/alert/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Alerts
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/chip/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        B
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Badge
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/button/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        B
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Buttons
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/card/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Card
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/collapse/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Collapse
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/dropdown/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        D
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Dropdowns
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/input/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        F
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Forms
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/modal/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        M
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Modal
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/tabs/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        N
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Navs
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/navbar/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        N
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Navbar
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/progress/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Progress
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/table/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        T
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Tables
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/tooltip/argon-dashboard/"
                                    target="_blank"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        T
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Tooltips
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        class="ease-in-out text-sm leading-default py-2.7 my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors dark:text-white dark:opacity-80"
                        href="https://github.com/creativetimofficial/ct-argon-dashboard-pro-tailwind/blob/main/CHANGELOG.md"
                        target="_blank"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-align-left-2 text-slate-700/80"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Changelog</span
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div sidenav-card="" class="mx-4 my-4">
            <p
                class="invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400"
            ></p>
            <div
                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border"
                sidenav-card=""
            >
                <img class="w-3/5 mx-auto" src="../../assets/img/illustrations/icon-documentation.svg" alt="sidebar illustrations"> 
                <div class="flex-auto w-full p-4 pt-0 text-center">
                    <div class="transition-all duration-200 ease-nav-brand">
                        <h6 class="mb-0 dark:text-white text-slate-700">
                            Need help?
                        </h6>
                        <p
                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                        >
                            Please check our docs
                        </p>
                    </div>
                </div>
            </div>
            <a
                href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/"
                target="_blank"
                class="inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"
                >Documentation</a
            >
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px">
            <div
                class="ps__thumb-x"
                tabindex="0"
                style="left: 0px; width: 0px"
            ></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 532px; right: 0px">
            <div
                class="ps__thumb-y"
                tabindex="0"
                style="top: 0px; height: 324px"
            ></div>
        </div>
    </aside>  -->
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["message"]);
</script>
<script></script>
