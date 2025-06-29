@extends('component.main')
@section('content')


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Privacy Policy</h5>

                </div>


{{--<p>At Cybrexus, accessible from https://cybrexus.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Cybrexus and how we use it.</p>--}}

{{--<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us at email support@cybrexus.com.</p>--}}

{{--<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Cybrexus. This policy is not applicable to any information collected offline or via channels other than this website.</p>--}}

@php
    $policies = \App\Models\PrivacyPolicy::all();
@endphp
                @foreach($policies as $policy)
                    <h2>{{$policy->heading}}</h2>

                    <p>{!! $policy->content !!}</p>
                @endforeach

{{--<h2>Information we collect</h2>--}}

{{--<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>--}}
{{--<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>--}}
{{--<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>--}}

{{--<h2>How we use your information</h2>--}}

{{--<p>We use the information we collect in various ways, including to:</p>--}}

{{--<ul>--}}
{{--<li>Provide, operate, and maintain our website</li>--}}
{{--<li>Improve, personalize, and expand our website</li>--}}
{{--<li>Understand and analyze how you use our website</li>--}}
{{--<li>Develop new products, services, features, and functionality</li>--}}
{{--<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>--}}
{{--<li>Send you emails</li>--}}
{{--<li>Find and prevent fraud</li>--}}
{{--</ul>--}}

{{--<h2>Log Files</h2>--}}

{{--<p>Cybrexus follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>--}}

{{--<h2>Cookies and Web Beacons</h2>--}}

{{--<p>Like any other website, Cybrexus uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>--}}



{{--<h2>Advertising Partners Privacy Policies</h2>--}}

{{--<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Cybrexus.</p>--}}

{{--<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Cybrexus, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>--}}

{{--<p>Note that Cybrexus has no access to or control over these cookies that are used by third-party advertisers.</p>--}}

{{--<h2>Third Party Privacy Policies</h2>--}}

{{--<p>Cybrexus's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>--}}

{{--<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>--}}

{{--<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>--}}

{{--<p>Under the CCPA, among other rights, California consumers have the right to:</p>--}}
{{--<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>--}}
{{--<p>Request that a business delete any personal data about the consumer that a business has collected.</p>--}}
{{--<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>--}}
{{--<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>--}}

{{--<h2>GDPR Data Protection Rights</h2>--}}

{{--<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>--}}
{{--<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>--}}
{{--<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>--}}
{{--<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>--}}
{{--<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>--}}
{{--<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>--}}
{{--<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>--}}
{{--<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>--}}

{{--<h2>Children's Information</h2>--}}

{{--<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>--}}

{{--<p>Cybrexus does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>--}}

{{--<h2>Changes to This Privacy Policy</h2>--}}

{{--<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>--}}



{{--<h2>Contact Us</h2>--}}

{{--<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>--}}
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">

                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">

                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div  style="width: 60px; height: 60px;">

                    </div>
                    <div class="ps-4">

                    </div>
                </div>

            </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
