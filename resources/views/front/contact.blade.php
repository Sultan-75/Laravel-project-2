@extends('front/layout')
@section('page_title', 'Contact')
@section('container')

    <!--Section: Contact -->
    <section class="contact">
        <div class="container">
            <div class="text-center my-2">
                <h2 class="font-weight-bold">Contact Us</h2>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mt-5 mt-lg-0 d-flex">
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
                            <p>Dubai</p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa fa fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Al%20Jerf%202%20-%20Ajman%20-%20United%20Arab%20Emirates+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Contact -->

@endsection
