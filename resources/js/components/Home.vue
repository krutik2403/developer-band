<template>
    <div>
        
        <!-- Our Team-->
        <section id="our-team-two" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                        <div class="heading-title">
                            <span>Heros Behind the Success</span>
                            <h2 class="darkcolor bottom20">Creative Team</h2>
                            <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div v-for="developer in developers" v-bind:key="developer.id" class="col-lg-3 col-md-6">
                        <div class="team-box no-hover top60">
                            <div class="image">
                                <img v-bind:src="developer.photo_url">
                            </div>
                            <div class="team-content gradient_bg">
                                <h3>{{ developer.name }}</h3>
                                <p>{{ developer.title }}</p>
                                <ul class="social-icons">
                                    <li><a v-bind:href="developer.linkedin" target="_blank"><i class="fa fa-linkedin"></i> </a> </li>
                                    <li><a v-bind:href="developer.facebook" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a v-bind:href="developer.twitter" target="_blank"><i class="fa fa-twitter"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </section>
        <!-- Our Team ends-->

        <!-- Contact US -->
        <bb-contact></bb-contact>
    </div>
</template>

<script>
import Contact from './Contact.vue'

export default {
    data() {
        return {
            developers: {} 
        }
    },

    components: {
        bbContact: Contact
    },

    created() {
        this.fetchDevelopers();
    },

    methods: {
        fetchDevelopers() {
            axios
            .get('/api/developers')
            .then(res => res.data)
            .then(res => {
                if(res.status == 1) {
                    this.developers = res.data.developers;
                }                
            })
            .catch(error => console.log(error));
        }
    }
}
</script>

