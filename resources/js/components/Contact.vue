<template>
    <!-- Contact US -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeIn" data-wow-delay="300ms">
                        <span>Lets Get In Touch</span>
                        <h2 class="darkcolor">Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                    <p>West is not just about graphic design; it's more than that. We offer integral communication services, and we're responsible for our process and results. We thank each client and their projects.</p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 our-address top40">
                            <h5 class="bottom25">Our Address</h5>
                            <p class="bottom15">910 iSQUARE Corporate Park, Near Shukan Mall Cross Roads, Science City Rd Sola, Ahmedabad - 380060, Gujarat,India</p>
                            <!-- <a class="pickus" href="#." data-text="Get Directions">Get Directions</a> -->
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Phone</h5>
                            <p class="bottom15">Office Telephone : +91 97246-75072 <span class="block">
                                    Mobile : +91 97246-75072
                                </span> </p>
                            <a class="pickus" href="tel:919724675072" data-text="Call Us">Call Us</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Email</h5>
                            <p class="bottom15">Main Email : info@infynno.com <span class="block">Inquiries : sales@infynno.com</span> </p>
                            <a class="pickus" href="mailto:sales@infynno.com" data-text="Send a Message">Send a Message</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" @submit.prevent="sendInquiry" action="">
                        <div class="row">
                            <div class="col-sm-12" id="result"></div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" v-model="contactForm.first_name" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" v-model="contactForm.last_name" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" v-model="contactForm.email" type="email" placeholder="Email:" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" v-model="contactForm.phone" type="tel" placeholder="Phone:" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" v-model="contactForm.message" placeholder="Message" id="message" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button btnprimary" id="submit_btn">submit request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>	    
    </section>
</template>

<script>

export default {
    data() {
        return {
            contactForm: {
                first_name: '',
                last_name: '',
                email: '',
                phone: '',
                message: ''
            }
        }
    },

    methods: {
        sendInquiry() {
            console.log(this.contactForm);

            axios
            .post('/api/send/contact/inquiry', this.contactForm)
            .then(response => response.data)
            .then(response => {
                if(response.status == 1) {
                    this.$toast.open({
                        type: 'success',
                        message: response.message,
                        position: 'top-right'            
                    });

                    this.contactForm.first_name = '';
                    this.contactForm.last_name = '';
                    this.contactForm.email = '';
                    this.contactForm.phone = '';
                    this.contactForm.message = '';
                } else {
                    this.$toast.open({
                        type: 'error',
                        message: response.message,
                        position: 'top-right'            
                    });
                }
            })
            .catch(error => console.log(error));
        }
    }
}
</script>

