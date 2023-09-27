<template>
    <div class="flex items-center">
        <a
            mini-sidenav-burger=""
            href="javascript:;"
            class="hidden p-0 text-sm text-white transition-all ease-nav-brand xl:block"
            aria-expanded="false"
        >
            <div class="w-4.5 overflow-hidden">
                <i
                    class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                ></i>
                <i
                    class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                ></i>
                <i
                    class="ease relative block h-0.5 rounded-sm bg-white transition-all"
                ></i>
            </div>
        </a>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["message"]);
</script>
<script></script>
