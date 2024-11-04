<template>
    <img
        id="background"
        class="absolute -left-20 top-0 max-w-[877px] -z-10"
        src="https://laravel.com/assets/img/welcome/background.svg"
    />
    <div
        class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8"
    >
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <!-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" /> -->
            <h2
                class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900"
            >
                Sign Up
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form @submit.prevent="register" class="space-y-6">
                <div>
                    <label
                        for="name"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Name</label
                    >
                    <div class="mt-2">
                        <input
                            id="name"
                            v-model="form.name"
                            name="name"
                            type="name"
                            autocomplete="name"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                        />
                        <!-- required="" -->
                        <ErrorMessage v-if="form.errors.name">
                            <span class="block sm:inline">{{
                                form.errors.name
                            }}</span>
                        </ErrorMessage>
                    </div>
                </div>
                <div>
                    <label
                        for="email"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Email address</label
                    >
                    <div class="mt-2">
                        <input
                            id="email"
                            v-model="form.email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                        />
                        <!-- required="" -->
                        <ErrorMessage v-if="form.errors.email">
                            <span class="block sm:inline">{{
                                form.errors.email
                            }}</span>
                        </ErrorMessage>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password"
                            class="block text-sm/6 font-medium text-gray-900"
                            >Password</label
                        >
                    </div>
                    <div class="mt-2">
                        <input
                            id="password"
                            v-model="form.password"
                            name="password"
                            type="password"
                            autocomplete="current-password"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                        />
                        <ErrorMessage v-if="form.errors.password">
                            <span class="block sm:inline">{{
                                form.errors.password
                            }}</span>
                        </ErrorMessage>
                        <!-- required="" -->
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password_confirmation"
                            class="block text-sm/6 font-medium capitalize text-gray-900"
                            >password confirmation</label
                        >
                    </div>
                    <div class="mt-2">
                        <input
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            name="password_confirmation"
                            type="password"
                            autocomplete="current-password_confirmation"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                        />
                        <ErrorMessage v-if="form.errors.password_confirmation">
                            <span class="block sm:inline">{{
                                form.errors.password_confirmation
                            }}</span>
                        </ErrorMessage>
                        <!-- required="" -->
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Create Account
                    </button>
                </div>

                <p class="my-1">

                    Already have an account
                    <Link
                        :href="route('login')"
                        class="px-4 py-2 text-sm rounded font-semibold text-[#333] bg-transparent"
                        >Click here
                    </Link>
                </p>
            </form>
        </div>
    </div>
</template>

<script setup>
import { route } from "ziggy-js";
import { Head, Link } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
import ErrorMessage from "@/Layout/Component/ErrorMessage.vue";
const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});
const register = () => form.post(route("register.store"));
</script>
