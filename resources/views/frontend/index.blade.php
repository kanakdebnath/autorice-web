@extends('frontend.layouts.frontMaster')
@section('title', 'Quality Rice')
@section('content')
    <section class="first-slider">
        <div class="container-fluid" style="width: 100%; margin: 0; padding: 0;">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#" data-slide-to="0" class="active"></li>
                    <li data-target="#" data-slide-to="1"></li>
                    <li data-target="#" data-slide-to="2"></li>
                    <li data-target="#" data-slide-to="3"></li>
                    <li data-target="#" data-slide-to="4"></li>
                    <li data-target="#" data-slide-to="5"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/assets/images/Slider-01.jpg') }}" alt="Raipur auto rice mill gate"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Welcome To Raipur Auto Rice Mills</h1><br>
                                        <p>
                                            Raipur Auto Rice Mills is the best mills in Dinajpur.
                                            Miss. Salina Haque is the founder of the company
                                            who has come a very long way by dedicating 20 years
                                            of her life to the rice business and still continuing.
                                            Her belief is kept alive by her successors..</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/images/Slider-05.jpg') }}" alt="Slider-05.jpg"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Raipur Auto Rice Mills</h1><br>
                                        <p>
                                            The basic objective of a rice milling system
                                            is to remove the husk & the bran layers & produce an edible, white rice.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/images/Slider-02.jpg') }}" alt="Slider-02.jpg"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Rice Harvesting</h1><br>
                                        <p>
                                            We have four Kinds of rice Harvester from Hand-portable
                                            harvester, Walking harvester, Combine harvester, Mini-combine harvester.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/images/Slider-04.jpg') }}" alt="Slider-04.jpg"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Experience Milling Rice</h1><br>
                                        <p>
                                            Raipur auto has years of experience milling rice
                                            for parched Rice, Boiled Rice, Pressure Rice. Our staff
                                            has a deep knowledge of quality control and numerous Rice manufacturing
                                            experience.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/images/Slider-03.jpg') }}" alt="Slider-03.jpg"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Rice Processing Technology</h1><br>
                                        <p>
                                            We have various rice processing machines: Rice Whitener Machine,
                                            Rice Silky Machine, Rice Color Sorting Machine and many other
                                            useful machines to guarantee. The Rice Quality With compact nutrition.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/images/Slider-06.jpg') }}" alt="Slider-06.jpg"
                            style="width: 100%; height: auto;">

                        <div class="container_24">
                            <div class="grid_24">
                                <div class="flex-caption-wrapper">
                                    <div class="flex-caption">
                                        <h1>Quality Control</h1><br>
                                        <p>
                                            We have the state-of-the-art technology Milling Plant
                                            imported from China & India and also self designed to preserve the
                                            aroma and taste of Rice, at the same time enhancing its beauty & lustre.
                                            Raipur Auto Rice Mills has long-experienced and well trained production
                                            team.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Left and right controls -->
                <a class="carousel-control-prev flex-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon flexslider-prev"></span>
                </a>
                <a class="carousel-control-next flex-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon flexslider-next"></span>
                </a>
            </div>
        </div>
    </section>

    <!--end slider-->



    <div class="container first" style="margin-top: 50px;">
        <section class="owner-section">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-bottom: 50px;">
                    <div class="for-you" style="text-align: justify;">
                        <h1 style="color: #000; font-size: 20px; font-weight: 500;"> We are <b>for you !!</b></h1>
                        <p style="color: #000000c7;">Since you’re here, we’re sure you’re in necessity and love about
                            Puffed
                            rice
                            and Parboiled rice too. What's not to love about them right? Puffed rice and Parboiled
                            rice is the purest uncontaminated form of rich on earth. We strive to bring this power
                            pack of nutrients to you. At Puffed rice and Parboiled rice, we Raipur Auto Rice Mills
                            manufacture some of the best product to ensure you get the finest, natural quality
                            straight from us. We put in 8 good years in R&D, with assistance from a food science
                            major from university food nutritionist. To create a patentable processing method to
                            preserve the nutrients in the packs of Puffed rice and Parboiled rice that reach you.
                            We are fully automated rice mills in Dinajpur which is powered by Rafusoft.
                            <a class="slider-readmore" href="#" style="color: #0c294c;"><b>Read More</b></a>
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-bottom: 50px;">
                    <div class="x" style="display:inline-block; float:left; text-align: justify;">
                        <img src="{{ asset('frontend/assets/images/Salina-Haque.jpg') }}" width="100" height="100"
                            alt="Selina_Haque">
                    </div>
                    <div class="y">
                        <h1 style="color: #000; font-size: 20px; font-weight: 500;"> <b>Hello !!</b></h1>
                        <p style="text-align: justify; color: #000000c7;">I am <strong>Mst. Salina Haque </strong>
                            owner
                            of Raipur Auto Rice Mills and one of the women entrepreneurs in Dinajpur. It is with great
                            pleasure that I welcome you to the
                            Raipur Auto Rice Mills website. Our goal is to build a strong business relationship
                            based on belief to ensure customer’s reliability and business skills with prope
                            r attention and find the right ways to meet your needs. We insure you the best
                            quality of Bangladeshi rice is delivered here. I felt happy when I serve the people
                            good food. We are using latest technologies, machinery with in Bangladesh. Really
                            i recommend quality Rice Mill to All.Enjoy our website and feel free to contact
                            our office for any additional information. </p>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="clear"></div>


    <div class="container sim">
        <div>
            <section>
                <div>
                    <div class="container ">
                        <div class="text-center">
                            <h5 class="feature_main_heading"
                                style="font: 20px/1.7 'Raleway', sans-serif; margin-top: 50px; margin-bottom: 75px;">
                                Our
                                <b>Products !!</b>
                            </h5>
                        </div>
                        <div class="slider autoplay ">
                            <div class="s-b text-center">
                                <img src="{{ asset('frontend/assets/images/r1.jpg') }}" alt="r1.jpg">
                                <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>Katari Bhog Rice</b></h3>
                                <a href="tel:+8801733138179" class="btn btn-primary"
                                    style="padding: 5px; background: #0c294ce8">
                                    <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                    <span class="btn-text"> Cart</span>
                                </a>
                            </div>

                            <div class="s-b text-center">
                                <img src="{{ asset('frontend/assets/images/r5.jpg') }}" alt="r5.jpg">
                                <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>Miniket Rice</b></h3>
                                <a href="tel:+8801733138179" class="btn btn-primary"
                                    style="padding: 5px; background: #0c294ce8">
                                    <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                    <span class="btn-text"> Cart</span>
                                </a>
                            </div>
                            <div class="s-b text-center">
                                <img src="{{ asset('frontend/assets/images/r2.jpg') }}" alt="r2.jpg">
                                <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>Chinigura Rice</b></h3>
                                <a href="tel:+8801733138179" class="btn btn-primary"
                                    style="padding: 5px; background: #0c294ce8">
                                    <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                    <span class="btn-text"> Cart</span>
                                </a>
                            </div>
                            <div class="s-b text-center">
                                <img src="{{ asset('frontend/assets/images/r4.jpg') }}" alt="r4.jpg">
                                <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>Kalijira Rice</b></h3>
                                <a href="tel:+8801733138179" class="btn btn-primary"
                                    style="padding: 5px; background: #0c294ce8">
                                    <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                    <span class="btn-text"> Cart</span>
                                </a>
                            </div>
                            <div class="s-b text-center">
                                <img src="{{ asset('frontend/assets/images/r2.jpg') }}" alt="r2.jpg">
                                <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>Custom Mix Rice</b></h3>
                                <a href="tel:+8801733138179" class="btn btn-primary"
                                    style="padding: 5px; background: #0c294ce8">
                                    <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                    <span class="btn-text"> Cart</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>


    <div class="clear"></div>

    <section>
        <div class="clear"></div>
        <section id="prim" class="content-full-width nim" style="margin: 0px 0px 0px!important;">
            <div class="container third">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-12"
                        style="margin-bottom: 50px;margin-top: 50px; padding: 0;">
                        <div class="border-title">
                            <h2 style="color: #000; font-size: 20px; font-weight: 500;"> Our <b>Services</b> </h2>
                        </div>
                        <div class="collapse-one" style=" height: 544px; overflow: auto; ">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            PADDY FREE
                                            CLEANING
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> We have paddy free cleaning machines. For an hour each machine can
                                                separate
                                                quintals of grains in terms of their quality.
                                            </p><br>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            SOAKING
                                            PROCESS
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>We have large tanks for soaking process.
                                                The grains are soaked meticulously and then dried thoroughly.
                                                Each tank is of the following dimension to ascertain the quality of the
                                                process:
                                                <br>
                                            <ul>
                                                <li>4 feet Depth</li>
                                                <li>10 feet Length</li>
                                            </ul>
                                            </p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            BOILER
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>After 10 percent moisture is reduced the grains are put into the boiler.
                                                The boiler is heated using steam and the grains are made to reduce the
                                                moisture.
                                                After 10 minutes of boiling, the grains are spread out in a dry place.
                                            </p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            DRYING PROCESS
                                        </a>
                                    </div>
                                    <div id="collapsefour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>The grains are made to dry under direct sunlight for at least three
                                                hours. Then the moisture free grains are taken to paddy dryer.</p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            HULLING
                                        </a>
                                    </div>
                                    <div id="collapsefive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Paddy is converted to Rice. It cleans the paddy and converts into quality
                                                rice. It is used for silky polishing. We are having "SATAKE" make
                                                machines
                                                for this process.</p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapsesix">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            PADDY DRYER
                                        </a>
                                    </div>
                                    <div id="collapsesix" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> The paddy dryer removes the moisture of the paddy.
                                                <br>
                                                <strong>Features :</strong>
                                            <ul>
                                                <li>LSU Type to ensure uniform and efficient drying</li>
                                                <li> Faultless dust collection</li>
                                                <li>Flexible discharge</li>
                                            </ul>

                                            <strong style="color:#000;">Applications :</strong>
                                            <br>
                                            <ul>
                                                <li>Burner & heat exchanger: Guarantees the supply of hot-air to wet
                                                    paddy </li>
                                                <li>Drying Section: LSU Type drying & uniform drying </li>
                                                <li>Cooling Section: Maintain the paddy condition </li>
                                                <li>Uniform Drying: Best Quality</li>
                                            </ul>
                                            </p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseseven">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            COLOR SORTER
                                        </a>
                                    </div>
                                    <div id="collapseseven" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> Color sorters are imported from Korea. Color sorter sorts impurities,
                                                paddy,
                                                colored-rice, and stone from white rice.
                                                <br>
                                                <strong>Features :</strong>
                                            <ul>
                                                <li>Advanced method of sorting-both digital and sensors.
                                                </li>
                                                <li>It has a fully automatic sense function and control. </li>
                                                <li>Adopted by high speed ejectors, reduction of good rice from
                                                    impurities will be sorted. </li>
                                                <li>Easy change modes for brown rice, sticky rice, black rice and
                                                    others.</li>
                                            </ul>
                                            </p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseeight">
                                            <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                alt="CASE-STUDIES.png">
                                            PACKING
                                        </a>
                                    </div>
                                    <div id="collapseeight" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> We have Rice Packing Machines for packing of our brands. Our packing
                                                features are mentioned below:
                                                <br>
                                                <strong>Features :</strong>
                                            <ul>
                                                <li><strong>Cloth bags</strong> - 5 Kgs., 10 Kgs., 20 Kgs., 25 Kgs and
                                                    75 Kgs.
                                                </li>
                                                <li><strong>HDPE, LDPE bags </strong> - 25 Kgs., 50 Kgs., 75 Kgs and 100
                                                    Kgs. </li>
                                                <li><strong>LD Packing & PP bags</strong> - 1 Kg, 2 Kgs., 5 Kgs and 10
                                                    Kgs. </li>
                                                <li><strong>Gunny bags </strong> - 20 Kgs, 25 Kgs, 50 Kgs and 75 Kgs.
                                                </li>
                                                <li><strong>Carton boxes </strong> - 1Kgs, 2Kgs and 5 Kgs. Can be bulk
                                                    packed in carton box.</li>
                                            </ul>
                                            </p>
                                            <a href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-12" style="padding: 0; margin-top: 50px;">
                        <div class="column one-half last">
                            <div class="border-title">
                                <h2 style="color: #000; font-size: 20px; font-weight: 500;"> Why <b>With Us </b> </h2>
                            </div>
                            <div class="testimonial">
                                <blockquote style=" margin-top: 0; height: auto; min-height: 516px;">
                                    <ol style="list-style-type:circle;">
                                        <li>Our traditional and modern work experience and specialized
                                            technical advantages of Raipur Auto Rice creates the Unsurpassed Rice
                                            Quality.
                                        </li>
                                        <li>Raipur Auto Rice is located in Dinajpur ( the country of rice).
                                            As a result, we are committed to managing the supply of goods in every part
                                            of
                                            the country.</li>
                                        <li>Our modern automation technology ensures that your orders
                                            arrive as specified on time, every time .</li>
                                        <li>We give full assurance of the quality of rice according to your needs
                                            or compromise.</li>
                                        <li>We provide full assurance of production and delivery as per customer's
                                            demand
                                        </li>
                                        <li>Raipur Auto Rice guarantees you a fully equipped raf rice grading scale
                                            house to ensure the top quality of the rice products</li>
                                        <li>Considering the satisfaction of the customer's expectation, we are always
                                            aware
                                            of product quality standards starting from the tenure of the commodity. The
                                            proficiency
                                            and ability of our staff to gain knowledge and expertise in quality control
                                            ensure
                                            the availability of your desired product.</li>
                                    </ol>
                                </blockquote>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </section>




        <section>
            <div class="main-page-wrapper">
                <div class="latest-news wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="feature_main_heading_wrapper">
                        <h1 class="feature_main_heading" style=" padding: 52px 0 0px 0;margin-bottom: 0px; color: #000;">
                            For
                            <b>Communication !!</b>
                        </h1>
                    </div>
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s"
                                data-wow-duration=".5s"
                                style="visibility: visible; animation-duration: 0.5s; animation-delay: 1.1s; animation-name: fadeInLeft;">

                                <div class="single-post">

                                    <figure class="effect-winston"> <img
                                            src="{{ asset('frontend/assets/images/3.jpg') }}" alt="3.jpg">

                                        <figcaption>

                                            <p>
                                                <a href="https://www.facebook.com/rafu5418" target="_blank"><i
                                                        class="fab fa-facebook" alt="Rafaet Hossain"></i></a>
                                                <a href="https://www.linkedin.com/in/rafaethossain" target="_blank"
                                                    alt="Rafaet Hossain"><i class="fab fa-linkedin"></i></a>
                                            </p>

                                        </figcaption>

                                    </figure>

                                    <div class="post"><a href="#"><span>S.M.Rafaet Hossain Rafu
                                                (Mandate)</span></a>
                                        <br>


                                        <div class="num" style="color: #000000c7;">Mr. Rafu is Graduate in Computer
                                            Science.
                                            All the activities
                                            of this organization are managed by his direction. His wisdom and
                                            intellectual
                                            strength gave the organization the latest and digital image.
                                        </div>

                                        <a href="tel:+8801712552009"
                                            style="width: 100%;text-align:center;font-family: arial; background: -webkit-linear-gradient(#014ba2, #0b2748);  padding: 5px 18px;background: linear-gradient(#014ba2, #0b2748);border: 2px solid #003779;font-size: 24px;font-weight: 700;border-radius: 27px;color: #f4f4f4;text-shadow: 3px 1px 2px black;    display: block;">Call
                                            +880 1712552009</a>
                                        <br><br>
                                        <br>

                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.1s"
                                data-wow-duration=".5s"
                                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInLeft;">

                                <div class="single-post">

                                    <figure class="effect-winston"> <img
                                            src="{{ asset('frontend/assets/images/1.jpg') }}" alt="1.jpg">
                                        <figcaption>

                                            <p> <a href="https://www.facebook.com/murshidul.alam.5492" target="_blank"
                                                    alt="Murshidul Alam"><i class="fab fa-facebook"></i></a>
                                                <a href="javascript:void()" alt="Murshidul Alam"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </p>

                                        </figcaption>

                                    </figure>

                                    <div class="post"> <a href="#">Murshidul Alam (Operation Manager)</a>
                                        <br>

                                        <div class="num" style="color: #000000c7;">Mr.Murshidul Alam is directly
                                            involved in
                                            the direct management
                                            of this organization. The long-term experience and professionalism of this
                                            person improves the order of the organization valuable supportive stability.
                                        </div>
                                        <!--<br><br>-->

                                        <a href="tel:+8801733138179"
                                            style="width: 100%;text-align:center;font-family: arial; background: -webkit-linear-gradient(#014ba2, #0b2748); padding: 5px 18px;background: linear-gradient(#014ba2, #0b2748);border: 2px solid #003779;font-size: 24px;font-weight: 700;border-radius: 27px;color: #f4f4f4;text-shadow: 3px 1px 2px black;    display: block;">Call
                                            +880 1733138179</a>

                                        <br><br>
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.6s"
                                data-wow-duration=".5s"
                                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInLeft;">

                                <div class="single-post">

                                    <figure class="effect-winston"> <img
                                            src="{{ asset('frontend/assets/images/2.jpg') }}" alt="2.jpg">
                                    </figure>

                                    <div class="post"><a href="#">Mr. Kamruzzaman ( Manager) </a>
                                        <br>

                                        <div class="num" style="color: #000000c7;">Mr. Zaman oversees the
                                            accounting and
                                            management of this organization.
                                            This person has been carrying out his duties with his professional attitude
                                            from
                                            the
                                            very beginning of this organization.
                                        </div>
                                        <a href="tel:+8801718626634"
                                            style="width: 100%;text-align:center;font-family: arial; background: -webkit-linear-gradient(#014ba2, #0b2748);  padding: 5px 18px;background: linear-gradient(#014ba2, #0b2748);border: 2px solid #003779;font-size: 24px;font-weight: 700;border-radius: 27px;color: #f4f4f4;text-shadow: 3px 1px 2px black;    display: block;">Call
                                            +880 1718626634</a>
                                        <br><br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
