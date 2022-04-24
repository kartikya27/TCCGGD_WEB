
@section('why-tcc-section')
<style>
    .all-expertise ul li{background-image: url(/assets/img/right.png);}
</style>

<section class="common-form-section" id="why-us">
        <div class="pt-50 ">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-12">
                        <div class="mb-24">
                    <h2 class="b-clor heading1">WHY TCC?</h2>
                </div>
                        <div class="why-choosing">
                            <ul style="margin-bottom:0">

                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/1.png"
                                            alt="Client Loyalty"></span>
                                    <p class="choosing-details text1"><b>Global Network:</b> SERMO is the first worldwide
                                        network of communication consultancies with a shared expertise in luxury and
                                        lifestyle. It consists of 15 local communication consultancies with offices in
                                        20 cities across 17 countries. TCC is their sole India partner and joined the
                                        network in 2012.</p>
                                </li>
                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/1.png"
                                            alt="Client Loyalty"></span>
                                    <p class="choosing-details text1"><b>Full Service Brand Consultancy:</b> Our core
                                        competency lies in Luxury, Lifestyle and Corporate PR. For a decade we were the
                                        nodal agency for LVMH and worked with some of their key brands: TAG Heuer, Dior,
                                        Zenith, Fendi, Sephora, Bulgari and L Capital.</p>
                                </li>

                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/1.png"
                                            alt="Client Loyalty"></span>
                                    <p class="choosing-details text1"><b>Brand Loyalty:</b> The building of genuine,
                                        long-standing partnerships is at the core of what we do. The brand loyalty we
                                        have built is a testimony to the precise strategy and execution of each idea,
                                        whether big or small. </p>
                                </li>
                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/2.png"
                                            alt="Our Expert Team"></span>
                                    <p class="choosing-details text1"><b>Experienced Team:</b> We leverage the knowledge,
                                        skills and creativity of our growing team of talented professionals across all
                                        markets in which we operate. From PR to digital marketing, our truly integrated
                                        teams collaborate with each other to provide a bespoke set of services to every
                                        client. </p>
                                </li>
                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/3.png"
                                            alt="Results Oriented"></span>
                                    <p class="choosing-details text1"><b>Pan-India Outreach:</b> While we are headquartered in
                                        Delhi, we have very able partners in Mumbai, Bangalore, Kolkata and Hyderabad.
                                        All strategy is created and initiated at our headquarters and then shared and
                                        executed according to the specific geography. </p>
                                </li>

                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/4.png"
                                            alt="Brand Building"></span>
                                    <p class="choosing-details text1"> <b>Result-Oriented Approach:</b> We design strategies
                                        with careful planning and execution to maximize tangible results. </p>
                                </li>
                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/5.png"
                                            alt="Digital Marketing"></span>
                                    <p class="choosing-details text1"><b>Digital Marketing: </b> Through creative thinking and
                                        innovation, our digital marketing team can support all stages of a brand’s
                                        development. From website design and e-commerce to content marketing and SEO,
                                        our services are supported by intelligent data analysis. </p>
                                </li>

                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/6.png"
                                            alt="Design Expertise"></span>
                                    <p class="choosing-details text1"> <b>Social Media:</b> As a one-stop solution for all
                                        communication needs, we craft narratives with data-based, incisive strategy to
                                        launch, revitalize or enhance businesses. From global leaders to start-ups, we
                                        have a stellar reputation for connecting brands to influential media and
                                        personalities.</p>
                                </li>

                                <li>
                                    <span class="choosing-icon"> <img src="/assets/img/choosing/6.png"
                                            alt="Design Expertise"></span>
                                    <p class="choosing-details text1"> <b>Design Expertise:</b> We help our brands look good
                                        and communicate their stories more effectively. Our design studio offers
                                        branding, packaging and advertising services. </p>
                                </li>

                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 col-sm-12 col-12 sidebar">
                        <div class="mb-24">
                            <h2 class="b-clor heading1">Get in Touch</h2>
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

                </div>

                <div class="row">
                <div class="clearfix mb-24"></div>
                        <div class="all-expertise" style="position:relative;">

                            <div class="mb-24">
                                <h2 class="b-clor heading1">WHY TCC?</h2>
                            </div>
                            
                            <ul class="columns-3">
                                <li>
                                    <p class="text1">FASHION, LUXURY &amp; RETAIL</p>
                                </li>
                                <li>
                                    <p class="text1">HOSPITALITY &amp; F&amp;B </p>
                                </li>
                                <li>
                                    <p class="text1">BEAUTY &amp; WELLNESS</p>
                                </li>
                                <li>
                                    <p class="text1">BOOK LAUNCHES </p>
                                </li>
                                <li>
                                    <p class="text1">ART &amp; CULTURE</p>
                                </li>
                                <li>
                                    <p class="text1">REAL ESTATE </p>
                                </li>
                                <li>
                                    <p class="text1">START-UP BUSINESS DEVELOPMENT</p>
                                </li>
                                <li>
                                    <p class="text1">AUTOMOTIVE</p>
                                </li>
                                <li>
                                    <p class="text1">CSR</p>
                                </li>


                            </ul>

                        </div>
                </div>

            </div>
        </div>
    </section>
    @endsection