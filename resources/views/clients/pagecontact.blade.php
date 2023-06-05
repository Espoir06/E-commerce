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
        <div class="google-map">
            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.427928090073!2d1.0994393139929652!3d6.230827369729757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10215a7ea5069dc9%3A0xa190c63b2cb31d4a!2sUCAO-UUT!5e1!3m2!1sfr!2stg!4v1685996763788!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endsection
