<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/tcc-owl-wow-bootstrap-photoswipe.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
         <!--Recpatcha -->
       <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>

    <body>
        
        <nav class="navbar navtop fixed-top navbar-light navbar-expand-lg">
                <div class="container">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation" style="float:right">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/the-communication-council">
                        <img src="/assets/logo/tcc.png">
                    </a>
                        <div class="collapse navbar-collapse " id="navbarTogglerDemo03" style="flex-grow: unset;">
                        <!-- <ul class="navbar-nav  me-auto mb-2 mb-lg-0"> -->
                        <ul class=" navbar-nav  me-auto mb-2 mb-lg-0 navbar-right">
                            <li><a class="page-scroll text1" href="/the-communication-council">Home</a></li>
                            <li><a class="page-scroll text1" href="/the-communication-council/services">Services</a>
                            </li>
                            <li><a class="page-scroll text1" href="/the-communication-council/our-clients">Our
                                    Clients</a></li>
                            <li><a class="page-scroll text1" href="/the-communication-council#why-us">Why us</a></li>
                            <li><a class="page-scroll text1" href="/the-communication-council#team">Team</a></li>
                            <li><a class="page-scroll text1" href="/the-communication-council#contact">Contact</a></li>
                            <li class="touch"><a class="page-scroll text2" href="#why-us ">Get in Touch</a></li>
                        </ul>
                        <!-- </ul> -->
                    </div>

                    
                </div>
            </div>
        </nav>

        @yield('inner-banner')
        @yield('banner-section')
        @yield('content')
        @yield('tcc-brands-section')
        @yield('why-tcc-section')
        @yield('tcc-team')

        <section class="pt-50" id="contact">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6  ">
                    <div class="mb-24">
                    <h2 class="b-clor heading1">CONTACT</h2>
                    <p class="text1">We’d love to hear from you</p>
                </div>
                        <div class="contact-form">
                            <form method="Post" action="/the-communication-council/mailContact">
                                @csrf
                                <div style="padding:0px 0px">
                                    <div class="mb-3 ">
                                        <input name="name" placeholder="Name *" type="text" class="form-control text1">

                                    </div>
                                    <div class="mb-3 ">
                                        <input name="email" placeholder="Email address *" type="email"
                                            class="form-control text1">

                                    </div>
                                    <div class="mb-3">
                                        <input name="phone" type="text" placeholder="Phone *" class="form-control text1">
                                    </div>
                                    <div class="mb-3">
                                        <input name="subject" type="text" placeholder="Subject"
                                            class="form-control text1">
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="message" type="text" placeholder="Message"
                                            class="form-control text1"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                                        <br/>
                                        @if(Session::has('g-recaptcha-response'))
                                            <p class="text1 alert alert-danger">
                                             {{Session::get('g-recaptcha-response')}}
                                            </p>
                                        @endif

                                    <button type="submit" class=" btn btn-primary text2">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                        @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <p class="text1">{{ $message }}</p>
                        </div>
                        @endif

                        @if(count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <p class="text1">All * fields are required.</p>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-1 mb-4"></div>
                    <div class="col-md-5 col-sm-6">
                        <div class="contact_address ">
                            <div class="single-address">
                                <!-- <i class="fa fa-rocket"></i> -->
                                <h2 class="subheading1 b-clor">Our Location</h2>
                                <address class="text1">A-178, C-3, Ground floor
                                    Saini Bhawan, Bhisham Pitamah Marg, Kotla Mubarakpur, New Delhi – 110003, India <br>
                                </address>

                            </div>

                            <div class="footer_social social__icon2">
                                <h2 class="subheading1 b-clor">Follow Us </h2>
                                <ul>
                                    <li><a class="f_facebook" href="https://www.facebook.com/tccggdtccsocial/"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a class="f_linkedin"
                                            href="https://in.linkedin.com/company/the-communication-council"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a class="f_youtube"
                                            href="https://www.youtube.com/channel/UCFI4rk4J1eaeeY8w_egEPGw"><i
                                                class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-20">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.622482078374!2d77.22637237469007!3d28.57314624938938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3550a733f583f923!2sThe+Communication+Council!5e0!3m2!1sen!2sin!4v1503378015354"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="footer_copyright text1" style="margin:0">© <?php echo date("Y"); ?> <a href="">The Comunication Council</a>.
                            All Rights Reserved.</p>

                    </div>
                </div>
            </div>
        </footer>
</div>
        <script src="{{ URL::asset('js/tcc-jQuery-bootstrap-wow-owl.js') }}"></script>
        <script src="https://use.fontawesome.com/620667a297.js"></script>

       
        <script>
            $(function() {
                $(document).scroll(function() {
                    var $nav = $(".fixed-top");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
            });
        </script>
        <script src="{{ URL::asset('js/owl.js') }}"></script>
    </body>

</html>