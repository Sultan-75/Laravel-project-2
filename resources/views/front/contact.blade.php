@extends('front/layout')
@section('page_title', 'Contact')
@section('container')

    <!--Section: Contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="my-5 font-weight-bold text-center">Contact Us</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mt-2 mt-lg-0 mt-md-0">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="alert __alert-accent" role="alert">
                            Do you have any questions? Please do not hesitate to contact us
                            directly.
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="text-center">
                            <button class="btn __btn-accent btn-lg" type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="fa fa-map-marker"></i>
                            <h4>Location:</h4>
                            <p>SHED NO.-05 Al JURF -2 BEHIND AJMAN FIRE STATIONS , AJMAN . UAE</p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <h4>Email:</h4>
                            <p class="mb-0">info@rosemountperfumes.com</p>
                            <p class="mb-0">habib@rosemountperfumes.com</p>
                            <p class="mb-0">info.jabalalward@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa fa fa-phone"></i>
                            <h4>Call:</h4>
                            <p class="mb-0">+971566724444 | +971547393287</p>
                            <p>+97160000000 |</i> +971-56-6724444 (whatsapp)</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3602.8834445791476!2d55.53695431501445!3d25.44215998378289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDI2JzMxLjgiTiA1NcKwMzInMjAuOSJF!5e0!3m2!1sen!2sbd!4v1684092481996!5m2!1sen!2sbd"
                            style="border:0;width: 100%; height: 290px" frameborder="0" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Contact -->

@endsection
