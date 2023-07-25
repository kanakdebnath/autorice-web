@extends('frontend.layouts.frontMaster')

@section('title', 'Contact Us')
@section('content')


    <div style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">
                            You are here:
                            <a href="index.html">Home</a> »
                            <a class="text-success">Contact-Us</a>
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
                        <h1 class="section-title"><b>Contact-Us</b></h1>
                        <img src="{{ asset('frontend/assets/images/rarm-about-icon.png') }}" class="img-responsive"
                            alt="Rice Exporter">
                    </div>
                </div>





                <div class="map" style="padding: 35px; ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14391.685353241079!2d88.695169!3d25.60753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4dd55a50040e7a2!2sRaipur+Auto+Rice+Mills+-+Rafusoft!5e0!3m2!1sen!2sbd!4v1547209683292"
                        style="width: 100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <hr>

                <div class="container forms">




                    <form id="contactForm" action="https://www.raipurautoricemills.com/contact-form" method="post"
                        style="padding: 35px; margin-bottom: 50px; overflow: hidden;">
                        <input type="hidden" name="_token" value="MDh9qoVk0DFXFfrAk17dXecnnHZkBVzQQzG2b5VP">
                        <table class="tab">

                            <tbody class="tb">
                                <tr class="ttr">
                                    <th class="tth"><label for="contactName">Name <span class="required">*</span></label>
                                    </th>
                                    <td class="ttd">
                                        <input type="text" name="name" id="contactName"
                                            class="required requiredField">
                                    </td>
                                </tr>

                                <tr class="ttr">
                                    <th class="tth"><label for="email">Email <span class="required">*</span></label>
                                    </th>
                                    <td class="ttd">
                                        <input type="email" name="email" id="email"
                                            class="required requiredField email">
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="phone">Phone <span class="required">*</span></label></th>
                                    <td style="padding: 0px !important; border: 0px solid #e9ecef !important;">
                                        <input type="text" name="phone" id="phone"
                                            class="required requiredField phone">
                                    </td>
                                </tr>

                                <tr class="ttr">
                                    <th class="tth"><label for="commentsText">Message <span
                                                class="required">*</span></label></th>
                                    <td class="ttd">
                                        <textarea name="comments" id="commentsText" rows="20" cols="30" class="required requiredField"
                                            style="height: 120px;"></textarea>
                                    </td>
                                </tr>

                                <tr class="ttr">
                                    <th class="tth"></th>
                                    <td class="ttd">
                                        <input class="submit" type="submit" value="Send Message">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="submitted" id="submitted" value="true" style="margin-bottom: 50px;">
                    </form>

                </div> <!-- /.container -->





            </div> <!-- /.sFeatLayout -->

        </section>

        <div style="height: 50px; background-color: none;"></div>

    </div>

@endsection
