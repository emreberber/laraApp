  <?php $__env->startSection('icerik'); ?>

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
                        <strong>Address:</strong> <?php echo e($ayarlar->adres . $ayarlar->ilce . $ayarlar->il); ?>

                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Phone:</strong><?php echo e($ayarlar->tel); ?>

                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Fax:</strong><?php echo e($ayarlar->fax); ?>

                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <strong>Email:</strong>a
                        <a href="<?php echo e($ayarlar->mail); ?>"><?php echo e($ayarlar->mail); ?></a>
                    </li>
                </ul>

                <hr />

                <h4>Social
                    <strong>Media</strong>
                </h4>
                <ul class="social-icons">
                    <li class="facebook">
                        <a href="<?php echo e($ayarlar->facebook); ?>" target="_blank" title="Facebook">Facebook</a>
                    </li>
                    <li class="twitter">
                        <a href="<?php echo e($ayarlar->twitter); ?>" target="_blank" title="Twitter">Twitter</a>
                    </li>
                    <li class="linkedin">
                        <a href="<?php echo e($ayarlar->instagram); ?>" target="_blank" title="Linkedin">Instagram</a>
                    </li>
                    <li class="linkedin">
                        <a href="<?php echo e($ayarlar->youtube); ?>" target="_blank" title="Linkedin">Youtube</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</div>

<section class="call-to-action featured footer">
    <div class="container">
        <div class="row">
            <div class="center">
                <h3>Porto is
                    <strong>everything</strong> you need to create an
                    <strong>awesome</strong> website!
                    <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary"
                        data-appear-animation="bounceIn">Buy Now!</a>
                    <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span>
                </h3>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?> <?php $__env->startSection('js'); ?>
<script>
    /*
            Map Settings

                Find the Latitude and Longitude of your address:
                    - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                    - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

            */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: true,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $("#googlemaps").gMap(mapSettings);

    // Map Center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $("#googlemaps").gMap("centerAt", options);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>