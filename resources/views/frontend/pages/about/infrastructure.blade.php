@extends('frontend.layouts.frontMaster')

@section('title', 'Infrastructure')

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
                            <span class="current text-success">Infrastructure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section class="container about" style=" margin-top: 50px; background-color: #fff; border: 1px solid #d7d7d7; ">


            <div class="row section-header">
                <div class="col">
                    <h1 class="section-title"><b>Infrastructure</b></h1>
                    <img src="{{ asset('frontend/assets/images/rarm-about-icon.png') }}" class="img-responsive"
                        alt="Rice Exporter">
                </div>
            </div>


            <div class="row no-margin el">
                <div class="col-md-6 infra-img">
                    <img src="{{ asset('frontend/assets/images/Rice-Mill-Infrastructure.png') }}" class="img-responsive"
                        alt="Infrastructure rarm">
                </div>
                <div class="col-md-6">
                    <h5 class="about-heading"><b>Infrastructure</b></h5>
                    <p>Our organization is one of the hi-tech and leading rice mill in Bangladesh.
                        Because we have upgraded our paddy and rice processing unit with all advanced
                        imported machineries from different countries.
                        This facility is equipped with the latest technology BUHLER Paddy
                        Processing unit from GERMANY. Every aspect of processing of paddy-right
                        from destoning, cleaning, drying, de-husking, bran-removal, polishing and
                        finally sorting. Although the plant is fully automatic our persons keep a
                        close watch on the whole process.
                    </p>
                    <p>We use advanced technology of online cooking of paddy called COOKER where
                        the sterile steam is used for controlled cooking of the paddy to get our
                        traditional taste and aroma in rice.
                        We are first to import in Bangladesh a High end technology,
                        Fluidized Bed Dryer from Thailand.When the paddy proceeds
                        to the Fluidized Bed Dryer it is rapidly dried from a range
                        of 30% M.C. to 21% M.C. within 2-3 mins.This highly efficient
                        process produces a partial gelatinization of the grain reducing
                        the instance of grain surface cracks and resulting in good cooking
                        characteristics.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="row no-margin el">
                <div class="col-md-6">
                    <h5 class="about-heading"><b>Supply Procedure</b></h5>
                    <ul class="why-us-arrow-p" style="margin-top: 15px;">
                        <li><b style="">Send us query </b> - Use inquiry form on our website contact details or e-mail
                            us at: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                data-cfemail="20494e464f605241495055524155544f524943454d494c4c530e434f4d">[email&#160;protected]</a>
                        </li>
                        <li><b>We will send you the estimate </b> - We shall send you the best quotation based on the market
                            price and practice . </li>
                        <li><b>Verbal communication </b> - A formal verbal session is arranged either on phone, in person or
                            through chat to confirm and finalise the order.</li>
                        <li><b>Payment</b> - The payment mode is dependent on both party agreement</li>
                        <li><b>Processing/ Packing</b> - As soon as the payment is processed or advance is received our
                            staff starts working on the order.</li>
                        <li><b>Dispatch</b> - Dependent on both party agreement.</li>
                        <li><b>Documents and certificates</b> - We provide the official documents and certificates copy to
                            the buyer, if required.</li>
                    </ul>
                </div>
                <br>
                <div class="col-md-6 export-img-b">
                    <img src="{{ asset('frontend/assets/images/rarm-export-procedure.jpg') }}" class="img-responsive"
                        alt="Export Procedure rarm">
                </div>
            </div>
            <br>




        </section>

        <div style="height: 50px; background-color: none;"></div>


    </div>

@endsection
