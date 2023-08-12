<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/Twitter.vue';
import Tweet from '@/Components/Tweet.vue';


defineProps({ tweets: Array })

</script>

<template>
    <Head title="Twitter" />
    <TwitterLayout>
        <div class="text-white" v-for="tweet in tweets" :key="tweet">
                <Tweet :tweet="tweet"/>
            <div class="border-b border-b-gray-800 mt-2"></div>
        </div>

    </TwitterLayout>
</template>

<style>
body {
    background-color: black;
}
</style>


