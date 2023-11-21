<template>
      {{ batting }}
      <tr>
                                    <!-- First Player Batting stumps -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.stumps >
                                                secondPlayerBatting.stumps,
                                            'text-red-600':
                                                firstPlayerBatting.stumps <
                                                secondPlayerBatting.stumps,
                                            'text-gray-500':
                                                firstPlayerBatting.stumps ===
                                                secondPlayerBatting.stumps,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.stumps }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- stumps label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        stumps
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling stumps -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.stumps <
                                                secondPlayerBatting.stumps,
                                            'text-red-600':
                                                firstPlayerBatting.stumps >
                                                secondPlayerBatting.stumps,
                                            'text-gray-500':
                                                firstPlayerBatting.stumps ===
                                                secondPlayerBatting.stumps,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.stumps
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";

// defineProps(["message"]);
</script>
<script>
export default {
    props: [ "batting"],

    // Other Vue component logic
};
</script>
