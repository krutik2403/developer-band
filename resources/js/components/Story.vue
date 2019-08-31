<template>
    <div v-html="story" class="container">

    </div>
</template>

<script>
export default {
    data() {
        return {
            story: ''
        }
    },

    created() {
        this.fetchStory();
    },

    methods: {
        fetchStory() {
            axios
            .get('/api/story')
            .then(res => res.data)
            .then(res => {
                if(res.status == 1) {
                    this.story = res.data.story;
                    console.log(this.story);
                }                
            })
            .catch(error => console.log(error));
        }
    },
}
</script>

