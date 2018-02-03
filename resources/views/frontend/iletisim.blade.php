 @extends('frontend.app') @section('icerik')

<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Bize Ulaşın</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>

                <h2 class="short">
                    <strong>Contact</strong> Us</h2>
                <form id="contactForm" action="php/contact-form.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name"
                                    id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address."
                                    maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject"
                                    id="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4>The
                    <strong>Office</strong>
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <strong>Address:</strong> {{ $ayarlar->adres . $ayarlar->ilce . $ayarlar->il }}
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Phone:</strong>{{ $ayarlar->tel }}
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Fax:</strong>{{ $ayarlar->fax }}
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <strong>Email:</strong>a
                        <a href="{{ $ayarlar->mail }}">{{ $ayarlar->mail }}</a>
                    </li>
                </ul>

                <hr />

                <h4>Social
                    <strong>Media</strong>
                </h4>
                <ul class="social-icons">
                    <li class="facebook">
                        <a href="{{ $ayarlar->facebook }}" target="_blank" title="Facebook">Facebook</a>
                    </li>
                    <li class="twitter">
                        <a href="{{ $ayarlar->twitter }}" target="_blank" title="Twitter">Twitter</a>
                    </li>
                    <li class="linkedin">
                        <a href="{{ $ayarlar->instagram }}" target="_blank" title="Linkedin">Instagram</a>
                    </li>
                    <li class="linkedin">
                        <a href="{{ $ayarlar->youtube }}" target="_blank" title="Linkedin">Youtube</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</div>


@endsection 

@section('css') 
@endsection 


@section('js')
@endsection