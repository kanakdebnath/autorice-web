@extends('frontend.layouts.frontMaster')
@section('title', 'Process')

@section('content')

    <div style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">
                            You are here:
                            <a href="{{ route('front.index') }}">Home</a> »
                            <span><a href="{{ route('about.us') }}">About-Us</a> » </span>
                            <span class="current text-success">Process</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section class="container process-pro"
            style="margin-top: 50px; background-color: #fff; border: 1px solid #d7d7d7; ">

            <div class="sFeatLayout">



                <div class="row section-header">
                    <div class="col">
                        <h1 class="section-title">Rice <b>Procurement & Milling Process</b></h1>
                        <img src="{{ asset('frontend/assets/images/rarm-process-icon.png') }}" class="img-responsive"
                            alt="Rice Exporter">
                    </div>
                </div>



                <div class="row">
                    <div class="col">

                        <h2><b style="font-size: 20px;">Procurement Process</b></h2>
                        <p class="mt-2">Procuring rice forms an important phase of the supply.
                            The procurement requires a thorough and an appropriate understanding
                            of the rice market. It also requires the supplier to be equipped with
                            the farmers as well as the chain of distributors. We <b>RARM</b> are
                            associated with a chain of farmers who have been farming rice since
                            decades and are hence well acquainted with rice. Marginal small paddy
                            traders in the village, traders of rural rice market and trade in
                            rice at our factory. We <b>RARM</b> are closely connected with the
                            chain of these three groups. The main objectives of these groups
                            are to collect the best quality rice from the famous and recognized
                            farmers of this region.
                        </p>
                        <p class="my-3">
                            <b>Storage: </b>Storage of the paddy is done at a particular moisture level in all the three
                            storage modes.
                        </p>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 process-heading">
                        <p><strong>Silos :</strong> Safest Storage Mode</p>
                        <img src="{{ asset('frontend/assets/images/rarm-Silos-img.jpg') }}" class="img-responsive"
                            alt="Silos SKRM ">
                    </div>
                    <div class="col-md-4 process-heading">
                        <p><strong> Ware House :</strong> Safer Storage Mode</p>
                        <img src="{{ asset('frontend/assets/images/rarm-ware-house-img.jpg') }}" class="img-responsive"
                            alt="Warehouse SKRM ">
                    </div>
                    <div class="col-md-4 process-heading">
                        <p><strong>Open Stack :</strong> Safest Storage Mode</p>
                        <img src="{{ asset('frontend/assets/images/rarm-open-stack.jpg') }}" class="img-responsive"
                            alt="Open Stack SKRM">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h2><b style="font-size: 20px;"> Processing and Milling </b></h2>
                        <p>Rice in its natural form is inedible.
                            Therefore, milling and processing of the rice is required for
                            attaining the desired quality of rice. In our rice mills, we process
                            the rice for making it polished and edible. The main goal of milling is the removal
                            of barns and hulls from the rice so that its consumption becomes possible. Rice is the basic
                            primary product obtained from paddy after paddy is processed.
                            This rice is reprocessed for obtaining varied secondary and tertiary products.
                            Here are some of the operations done to create the final product.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-heading">
                        <h2><strong style="font-size: 20px;">Drying of the Rice at Drying Plant</strong></h2>
                        <p>The exposure of paddy to gradual drying processes and controlled
                            temperatures reduce the unneeded moisture prevalent in the paddy.
                            For ensuring the drying of the paddy rice appropriately.
                            Our drying plant comprises of fully mechanized and automatic
                            gradual drying systems having on line sensors for controlling the temperatures.
                            These can dry 50 tons of paddy per hour. We ensure taking appropriate care so that none
                            of the delicate portion of the rice breaks while processing. Our technological solutions
                            make us take every measure for avoiding Bacterial infection, fermentation or fungal infection
                            so that we keep the hygiene and the natural aroma intact.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-heading">
                        <h2><strong style="font-size: 20px;">Parboiling</strong></h2>
                        <p>Exposure of rice grains to steam for removal
                            of hull and barn layer is known as parboiling.
                            Though this process appears to be a very simple
                            process yet the taste as well as the aroma gets
                            hampered if the normal water is used for steaming.
                            We RARM have a committed parboiling plant
                            furnished with soaking bins that are specially
                            designed and possess sensor based controller for
                            handling the temperature of the water.
                            Clarity required-taste and aroma get hampered
                            because of the usage of the normal water-should
                            it be usage of the water with proper temperature
                            because the next point talks about the
                            temperature of the water.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-heading">
                        <h2><strong style="font-size: 20px;">Milling</strong></h2>
                        <p>The last and the final step of the overall procedure is the milling.
                            In this step the seed grains are made to get exposed to varied sophisticated
                            machines like magnets, Paddy Separators, De-Huskers, Graders, Precision Sizers,
                            De-Stoners, Pre-Cleaners, etc. Our aim is to provide
                            you with the rice of exceptional quality, well refined
                            and nutritious having perfect aroma.
                            This further makes us ensure having environmental
                            friendly environment that is completely protected against
                            unexpected and unforeseen elements.
                        </p>
                    </div>
                </div>

                <div class="row ">
                    <div class="no-margin none-mobile-process">
                        <div class="col">
                            <p class="mt-4 mb-4"><strong>The Basic Processes of Rice Milling Are</strong></p>
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-pre-cleaner.jpg') }}" width="100%"
                                class="img-responsive" alt="pre cleaner Skrm">
                            <h4>Pre-Cleaning</h4>
                            <p>Removal of all the impurities and unfilled grains from the paddy</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow.png') }}">
                        </div>

                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-paraboiling.jpg') }}" width="100%"
                                class="img-responsive" alt="paraboiling Skrm">
                            <h4>Parboiling (Optional)</h4>
                            <p>Helps in improving the nutritional quality by gelatinization of starch inside the rice grain
                            </p>
                        </div>

                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-De-stone.jpg') }}" width="100%"
                                class="img-responsive" alt="Destoner Skrm">
                            <h4>De-Stone</h4>
                            <p>Process to separate small stones from paddy</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-husker.jpg') }}" width="100%"
                                class="img-responsive" alt="husker Skrm">
                            <h4>Husking</h4>
                            <p>Process to remove husk from paddy</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-Husk-Aspiration.jpg') }}" width="100%"
                                class="img-responsive" alt="Husk Aspiration Skrm">
                            <h4>Husk Aspiration</h4>
                            <p>Separating the husk from brown rice/ unhusked paddy</p>
                        </div>

                        <div class="col">
                            <div class="col-md-15 flr">
                                <img src="{{ asset('frontend/assets/img/arrow1.png') }}">
                            </div>
                        </div>

                        <div class="space"></div>



                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-weighing-bagging.jpg') }}" width="100%"
                                class="img-responsive" alt="weighing bagging Skrm">
                            <h4>Weighing &amp; Bagging</h4>
                            <p>Preparation of the milled Rice for transporting to the customer</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow2.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-sorting-grading.jpg') }}" width="100%"
                                class="img-responsive" alt="Rice sortex Skrm">
                            <h4>Sorting &amp; Grading</h4>
                            <p>Separation of discolored and large and small breaks from the head rice concept clarity is
                                required</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow2.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-polishing.jpg') }}" width="100%"
                                class="img-responsive" alt="Rice polishing Skrm">
                            <h4>Polishing</h4>
                            <p>Improvement of the appearance of the milled rice through removal of the remaining Barn
                                particles and polishing of the exterior of the milled kernel</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow2.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-whitening.jpg') }}" width="100%"
                                class="img-responsive" alt="Rice whitening Skrm">
                            <h4>Whitening</h4>
                            <p>Removing all or part of the bran layer and germ from brown rice</p>
                        </div>
                        <div class="col-md-15">
                            <img src="{{ asset('frontend/assets/img/arrow2.png') }}">
                        </div>
                        <div class="col-md-2 process">
                            <img src="{{ asset('frontend/assets/img/rarm-paddy-seperation.jpg') }}" width="100%"
                                class="img-responsive" alt="paddy seperation Skrm">
                            <h4>Paddy Separation</h4>
                            <p>Separating the unhusked paddy from brown rice</p>
                        </div>

                    </div> <!-- /.no-margin /.none-mobile-process -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col">
                        <div class="accordion_in acc_active fdg">
                            <p><strong>Milling Process in Different Forms of Rice</strong></p>
                            <p>Rice in its basic form is known as "rough
                                rice" and is still covered by a non-edible hull or
                                husk. At the mill, rough rice is processed differently
                                to get the desired form of rice.
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->


                <div class="row text-center">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="figure-light"
                            style="width: 100%;border: 3px solid rgb(21, 149, 133);background: #FCFBE3;margin: 15px 0px 15px 0px;">
                            <div class="fig-captions">

                                <div class="imgcaption">
                                    <h6>RAW</h6>
                                </div>
                                <div class="details">
                                    <ul class="rice-details">
                                        <li title="">
                                            <p>Pre Cleaning</p>
                                        </li>
                                        <li title="">
                                            <p>-</p>
                                        </li>
                                        <li title="">
                                            <p>-</p>
                                        </li>
                                        <li title="">
                                            <p>Drying</p>
                                        </li>
                                        <li title="">
                                            <p>De-stoner</p>
                                        </li>
                                        <li title="">
                                            <p>Husking</p>
                                        </li>
                                        <li title="">
                                            <p>Seprartor</p>
                                        </li>
                                        <li title="">
                                            <p>Polish</p>
                                        </li>
                                        <li title="">
                                            <p>Silky</p>
                                        </li>
                                        <li title="">
                                            <p>Sorting</p>
                                        </li>
                                        <li title="">
                                            <p>Grading</p>
                                        </li>
                                        <li title="">
                                            <p>Packing</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="figure-light"
                            style="width: 100%;border: 3px solid rgb(21, 149, 133);background: #FCFBE3;margin: 15px 0px 15px 0px;">
                            <div class="fig-captions">


                                <div class="imgcaption">
                                    <h6>STEAM</h6>
                                </div>
                                <div class="details">
                                    <ul class="rice-details" title="">
                                        <li title="">
                                            <p>Pre Cleaning</p>
                                        </li>
                                        <li title="">
                                            <p>Steam</p>
                                        </li>
                                        <li title="">
                                            <p>-</p>
                                        </li>
                                        <li title="">
                                            <p>Drying</p>
                                        </li>
                                        <li title="">
                                            <p>De-stoner</p>
                                        </li>
                                        <li title="">
                                            <p>Husking</p>
                                        </li>
                                        <li title="">
                                            <p>Seprartor</p>
                                        </li>
                                        <li title="">
                                            <p>Polish</p>
                                        </li>
                                        <li title="">
                                            <p>Silky</p>
                                        </li>
                                        <li title="">
                                            <p>Sorting</p>
                                        </li>
                                        <li title="">
                                            <p>Grading</p>
                                        </li>
                                        <li title="">
                                            <p>Packing</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">


                        <div class="figure-light"
                            style="width: 100%;border: 3px solid rgb(21, 149, 133);background: #FCFBE3;margin: 15px 0px 15px 0px;">
                            <div class="fig-captions">


                                <div class="imgcaption">
                                    <h6>WHITE/ CREAMY SELLA</h6>
                                </div>
                                <div class="details">
                                    <ul class="rice-details" title="">
                                        <li title="">
                                            <p>Pre Cleaning</p>
                                        </li>
                                        <li title="">
                                            <p>Steam (45 mins)</p>
                                        </li>
                                        <li title="">
                                            <p>Soaking (10-12 hrs)</p>
                                        </li>
                                        <li title="">
                                            <p>Drying</p>
                                        </li>
                                        <li title="">
                                            <p>De-stoner</p>
                                        </li>
                                        <li title="">
                                            <p>Husking</p>
                                        </li>
                                        <li title="">
                                            <p>Seprartor</p>
                                        </li>
                                        <li title="">
                                            <p>Polish</p>
                                        </li>
                                        <li title="">
                                            <p>Silky</p>
                                        </li>
                                        <li title="">
                                            <p>Sorting</p>
                                        </li>
                                        <li title="">
                                            <p>Grading</p>
                                        </li>
                                        <li title="">
                                            <p>Packing</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="figure-light"
                            style="width: 100%;border: 3px solid rgb(21, 149, 133);background: #FCFBE3;margin: 15px 0px 15px 0px;">
                            <div class="fig-captions">

                                <div class="imgcaption">
                                    <h6>GOLDEN SELLA</h6>
                                </div>
                                <div class="details">
                                    <ul class="rice-details" title="">
                                        <li title="">
                                            <p>Pre Cleaning</p>
                                        </li>
                                        <li title="">
                                            <p>Steam (6-8 hrs)</p>
                                        </li>
                                        <li title="">
                                            <p>Soaking (10-12 hrs)</p>
                                        </li>
                                        <li title="">
                                            <p>Drying</p>
                                        </li>
                                        <li title="">
                                            <p>De-stoner</p>
                                        </li>
                                        <li title="">
                                            <p>Husking</p>
                                        </li>
                                        <li title="">
                                            <p>Seprartor</p>
                                        </li>
                                        <li title="">
                                            <p>Polish</p>
                                        </li>
                                        <li title="">
                                            <p>Silky</p>
                                        </li>
                                        <li title="">
                                            <p>Sorting</p>
                                        </li>
                                        <li title="">
                                            <p>Grading</p>
                                        </li>
                                        <li title="">
                                            <p>Packing</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div> <!-- /.row -->



            </div> <!-- /.sFeatLayout -->

        </section>

        <div style="height: 50px; background-color: none;"></div>

    </div>


@endsection
