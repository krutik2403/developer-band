<template>
    <div>
        
        <!-- Our Team-->
        <section id="our-team-two" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                        <div class="heading-title">
                            <h2 class="darkcolor bottom20">Creative Bands</h2>
                            <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div v-for="band in bands" v-bind:key="band.id" class="col-lg-3 col-md-6">
                        <div class="team-box no-hover top60">
                            <div class="image">
                                <img v-bind:src="band.logo_url">
                            </div>
                            <div class="team-content gradient_bg">
                                <h4>{{ band.name }}</h4>
                                <p>{{ band.about }}</p>
                                <ul class="social-icons">
                                    <li><a v-bind:href="band.linkedin" target="_blank"><i class="fa fa-linkedin"></i> </a> </li>
                                    <li><a v-bind:href="band.facebook" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a v-bind:href="band.twitter" target="_blank"><i class="fa fa-twitter"></i> </a> </li>
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
            bands: {} 
        }
    },

    components: {
        bbContact: Contact
    },

    created() {
        this.fetchbands();
    },

    methods: {
        fetchbands() {
            axios
            .get('/api/bands')
            .then(res => res.data)
            .then(res => {
                if(res.status == 1) {
                    this.bands = res.data.bands;
                }                
            })
            .catch(error => console.log(error));
        }
    }
}
</script>

