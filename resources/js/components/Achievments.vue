<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-6">
            Your Achievments
        </h1>

        <ul>
            <li>
                v-for="achievment in achievments"
                v-text="achievments.name"
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return { achievements: [] };
    },

    created() {
        axios.get('http://laracasts.test.api/achievments')
        .then(response => {
            this.achievements = response.data;
        })
    }

}
</script>