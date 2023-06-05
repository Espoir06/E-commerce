@extends('layouts.masteracceuil')

@section('contenu')
    <section class="contact-area section-padding">
        <div class="container">
            <div class="contact-header section-heading">
                <h2>Contact</h2>
                <p>vous pouvez nous conatcter si vous avez des questions ou si vous voulez avoir un compte proprietaire et vendre vos produits </p>
            </div>
            <div class="contact row">
                <!-- Single Contact Area -->
                <div class="col-md-4 col-sm-12 single-contact contact-left">
                    <!-- Single Contact Info -->
                    <div class="single-info">
                        <div class="contact-info-head">
                            <i class="fa fa-location-arrow"></i>
                            <h5>Notre adresse :</h5>
                        </div>
                        <p class="ms-2">Togo, lome agoe 2lion</p>
                        <p class="ms-2">Togo,lome Zanguera</p>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="single-info">
                        <div class="contact-info-head">
                            <i class="fa fa-phone-alt"></i>
                            <h5>Appelez nous :</h5>
                        </div>
                        <p><a href="tell::8801234567890">+228 91 34 05 87 </a></p>

                    </div>
                    <!-- Single Contact Info -->
                    <div class="single-info">
                        <div class="contact-info-head">
                            <i class="fa fa-envelope"></i>
                            <h5>Email :</h5>
                        </div>
                        <p><a href="mailto::admin@gmail.com">agamazenovia2@gmail.com</a></p>
                        <p><a href="mailto::admin@gmail.com">admin@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 single-contact ">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h5 class="border-bottom-5px">Contactez-nous</h5>
                        </div>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mt-3">
                                        <label for="Entername">Name <sub>*</sub></label>
                                        <input type="text" name="name" placeholder="Enter Your Name"
                                            class="form-control" id="Entername">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mt-3">
                                        <label for="Entersubject">Subject <sub>*</sub></label>
                                        <input type="text" name="email" placeholder="Enter Your Email"
                                            class="form-control" id="Entersubject">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mt-3">
                                        <label for="Enteremail">Email <sub>*</sub></label>
                                        <input type="text" name="email" placeholder="Enter Your Email"
                                            class="form-control" id="Enteremail">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mt-3">
                                        <label for="Enterphone">Phone <sub>*</sub></label>
                                        <input type="text" name="phone" placeholder="Enter Your Phone"
                                            class="form-control" id="Enterphone">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group mt-3">
                                        <label for="Entermsg">Message <sub>*</sub></label>
                                        <textarea name="msg" placeholder="Enter Your Message" class="form-control" id="Entermsg"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" name="msg_submit" class="btn color_1_bg" value="Send Message"  >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area -->
    <section class="map-area section-padding">
        <div id="googleMap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.2427807232175!2d88.94823331438458!3d25.49694842573221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcb0232fd78783%3A0x9df3601fdd304d76!2sCoder%20IT%20Solution!5e0!3m2!1sen!2sbd!4v1640899534003!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    @endsection
