<template>
    <avatar
        :rounded="this.rounded"
        :size="this.size"
        :username="this.name"
    ></avatar>
</template>

<script>
import Avatar from "vue-avatar";

export default {
    // props: ["name", "size", "rounded"],
    props: {
        name: {
            type: String
        },
        size: {
            type: Number
        },
        rounded: {
            type: Boolean
        }
    },
    components: {
        Avatar
    }
};
</script>

<style></style>
