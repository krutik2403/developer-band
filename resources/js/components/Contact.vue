<template>
    <!-- Contact US -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeIn" data-wow-delay="300ms">
                        <span>Lets Get In Touch</span>
                        <h2 class="darkcolor">Contact XeOne</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                    <p>West is not just about graphic design; it's more than that. We offer integral communication services, and we're responsible for our process and results. We thank each client and their projects.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Address</h5>
                            <p class="bottom15">123 Stree New York City , United States Of America. </p>
                            <a class="pickus" href="#." data-text="Get Directions">Get Directions</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Phone</h5>
                            <p class="bottom15">Office Telephone : 001 01085379709 <span class="block">
                                    Mobile : 001 63165370895
                                </span> </p>
                            <a class="pickus" href="#." data-text="Call Us">Call Us</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Email</h5>
                            <p class="bottom15">Main Email : admin@website.com <span class="block">Inquiries : email@website.com</span> </p>
                            <a class="pickus" href="#." data-text="Send a Message">Send a Message</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Our Support</h5>
                            <p class="bottom15">Main Support : info@website.com <span>Sales : support@website</span> </p>
                            <a class="pickus" href="#." data-text="Open a Ticket">Open a Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-12" id="result"></div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
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
    
}
</script>

