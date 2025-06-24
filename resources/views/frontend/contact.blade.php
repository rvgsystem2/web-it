@extends('component.main')
@section('content')


<!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">


        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/carousel-11.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Contact us</h1>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <br />
    <br />
    <!-- Navbar & Carousel End -->





<!--========================
    CONTACT DETAILS START
  ========================-->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
           <!-- <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <!--<div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91 8035910904</h4>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <!--<div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">Support@cybrexus.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <!--<div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">92,Meenakshi Layout, Bengaluru, KA, IND</h4>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <!-- FormSPark to collect the information -->

                     <form action="{{route('contact.store')}}" method="POST">
                         @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <select id="country" name="country" class="form-control border-0 bg-light px-2" style="height: 55px; background-color: #eafafa;">
                                    <option value="+91 (India)">+91 (India)</option>
                                    <option value="+93 (Afghanistan)">+93 (Afghanistan)</option>
                                    <option value="+355 (Albania)">+355 (Albania)</option>
                                    <option value="+213 (Algeria)">+213 (Algeria)</option>
                                    <option value="+1-684 (American Samoa)">+1-684 (American Samoa)</option>
                                    <option value="+376 (Andorra)">+376 (Andorra)</option>
                                    <option value="+244 (Angola)">+244 (Angola)</option>
                                    <option value="+1-264 (Anguilla)">+1-264 (Anguilla)</option>
                                    <option value="+1-268 (Antigua and Barbuda)">+1-268 (Antigua and Barbuda)</option>
                                    <option value="+54 (Argentina)">+54 (Argentina)</option>
                                    <option value="+374 (Armenia)">+374 (Armenia)</option>
                                    <option value="+297 (Aruba)">+297 (Aruba)</option>
                                    <option value="+61 (Australia)">+61 (Australia)</option>
                                    <option value="+43 (Austria)">+43 (Austria)</option>
                                    <option value="+994 (Azerbaijan)">+994 (Azerbaijan)</option>
                                    <option value="+1-242 (Bahamas)">+1-242 (Bahamas)</option>
                                    <option value="+973 (Bahrain)">+973 (Bahrain)</option>
                                    <option value="+880 (Bangladesh)">+880 (Bangladesh)</option>
                                    <option value="+1-246 (Barbados)">+1-246 (Barbados)</option>
                                    <option value="+375 (Belarus)">+375 (Belarus)</option>
                                    <option value="+32 (Belgium)">+32 (Belgium)</option>
                                    <option value="+501 (Belize)">+501 (Belize)</option>
                                    <option value="+229 (Benin)">+229 (Benin)</option>
                                    <option value="+1-441 (Bermuda)">+1-441 (Bermuda)</option>
                                    <option value="+975 (Bhutan)">+975 (Bhutan)</option>
                                    <option value="+591 (Bolivia)">+591 (Bolivia)</option>
                                    <option value="+387 (Bosnia and Herzegovina)">+387 (Bosnia and Herzegovina)</option>
                                    <option value="+267 (Botswana)">+267 (Botswana)</option>
                                    <option value="+55 (Brazil)">+55 (Brazil)</option>
                                    <option value="+1-284 (British Virgin Islands)">+1-284 (British Virgin Islands)</option>
                                    <option value="+673 (Brunei)">+673 (Brunei)</option>
                                    <option value="+359 (Bulgaria)">+359 (Bulgaria)</option>
                                    <option value="+226 (Burkina Faso)">+226 (Burkina Faso)</option>
                                    <option value="+257 (Burundi)">+257 (Burundi)</option>
                                    <option value="+855 (Cambodia)">+855 (Cambodia)</option>
                                    <option value="+237 (Cameroon)">+237 (Cameroon)</option>
                                    <option value="+1 (Canada)">+1 (Canada)</option>
                                    <option value="+238 (Cape Verde)">+238 (Cape Verde)</option>
                                    <option value="+1-345 (Cayman Islands)">+1-345 (Cayman Islands)</option>
                                    <option value="+236 (Central African Republic)">+236 (Central African Republic)</option>
                                    <option value="+235 (Chad)">+235 (Chad)</option>
                                    <option value="+56 (Chile)">+56 (Chile)</option>
                                    <option value="+86 (China)">+86 (China)</option>
                                    <option value="+57 (Colombia)">+57 (Colombia)</option>
                                    <option value="+269 (Comoros)">+269 (Comoros)</option>
                                    <option value="+242 (Congo)">+242 (Congo)</option>
                                    <option value="+506 (Costa Rica)">+506 (Costa Rica)</option>
                                    <option value="+385 (Croatia)">+385 (Croatia)</option>
                                    <option value="+53 (Cuba)">+53 (Cuba)</option>
                                    <option value="+357 (Cyprus)">+357 (Cyprus)</option>
                                    <option value="+420 (Czech Republic)">+420 (Czech Republic)</option>
                                    <option value="+45 (Denmark)">+45 (Denmark)</option>
                                    <option value="+253 (Djibouti)">+253 (Djibouti)</option>
                                    <option value="+1-767 (Dominica)">+1-767 (Dominica)</option>
                                    <option value="+1-809 (Dominican Republic)">+1-809 (Dominican Republic)</option>
                                    <option value="+243 (DR Congo)">+243 (DR Congo)</option>
                                    <option value="+670 (East Timor)">+670 (East Timor)</option>
                                    <option value="+593 (Ecuador)">+593 (Ecuador)</option>
                                    <option value="+20 (Egypt)">+20 (Egypt)</option>
                                    <option value="+503 (El Salvador)">+503 (El Salvador)</option>
                                    <option value="+240 (Equatorial Guinea)">+240 (Equatorial Guinea)</option>
                                    <option value="+291 (Eritrea)">+291 (Eritrea)</option>
                                    <option value="+372 (Estonia)">+372 (Estonia)</option>
                                    <option value="+268 (Eswatini)">+268 (Eswatini)</option>
                                    <option value="+251 (Ethiopia)">+251 (Ethiopia)</option>
                                    <option value="+679 (Fiji)">+679 (Fiji)</option>
                                    <option value="+358 (Finland)">+358 (Finland)</option>
                                    <option value="+33 (France)">+33 (France)</option>
                                    <option value="+241 (Gabon)">+241 (Gabon)</option>
                                    <option value="+220 (Gambia)">+220 (Gambia)</option>
                                    <option value="+995 (Georgia)">+995 (Georgia)</option>
                                    <option value="+49 (Germany)">+49 (Germany)</option>
                                    <option value="+233 (Ghana)">+233 (Ghana)</option>
                                    <option value="+30 (Greece)">+30 (Greece)</option>
                                    <option value="+1-473 (Grenada)">+1-473 (Grenada)</option>
                                    <option value="+502 (Guatemala)">+502 (Guatemala)</option>
                                    <option value="+224 (Guinea)">+224 (Guinea)</option>
                                    <option value="+245 (Guinea-Bissau)">+245 (Guinea-Bissau)</option>
                                    <option value="+592 (Guyana)">+592 (Guyana)</option>
                                    <option value="+509 (Haiti)">+509 (Haiti)</option>
                                    <option value="+504 (Honduras)">+504 (Honduras)</option>
                                    <option value="+852 (Hong Kong)">+852 (Hong Kong)</option>
                                    <option value="+36 (Hungary)">+36 (Hungary)</option>
                                    <option value="+354 (Iceland)">+354 (Iceland)</option>
                                    <option value="+91 (India)">+91 (India)</option>
                                    <option value="+62 (Indonesia)">+62 (Indonesia)</option>
                                    <option value="+98 (Iran)">+98 (Iran)</option>
                                    <option value="+964 (Iraq)">+964 (Iraq)</option>
                                    <option value="+353 (Ireland)">+353 (Ireland)</option>
                                    <option value="+972 (Israel)">+972 (Israel)</option>
                                    <option value="+39 (Italy)">+39 (Italy)</option>
                                    <option value="+225 (Ivory Coast)">+225 (Ivory Coast)</option>
                                    <option value="+1-876 (Jamaica)">+1-876 (Jamaica)</option>
                                    <option value="+81 (Japan)">+81 (Japan)</option>
                                    <option value="+962 (Jordan)">+962 (Jordan)</option>
                                    <option value="+7 (Kazakhstan)">+7 (Kazakhstan)</option>
                                    <option value="+254 (Kenya)">+254 (Kenya)</option>
                                    <option value="+686 (Kiribati)">+686 (Kiribati)</option>
                                    <option value="+965 (Kuwait)">+965 (Kuwait)</option>
                                    <option value="+996 (Kyrgyzstan)">+996 (Kyrgyzstan)</option>
                                    <option value="+856 (Laos)">+856 (Laos)</option>
                                    <option value="+371 (Latvia)">+371 (Latvia)</option>
                                    <option value="+961 (Lebanon)">+961 (Lebanon)</option>
                                    <option value="+266 (Lesotho)">+266 (Lesotho)</option>
                                    <option value="+231 (Liberia)">+231 (Liberia)</option>
                                    <option value="+218 (Libya)">+218 (Libya)</option>
                                    <option value="+423 (Liechtenstein)">+423 (Liechtenstein)</option>
                                    <option value="+370 (Lithuania)">+370 (Lithuania)</option>
                                    <option value="+352 (Luxembourg)">+352 (Luxembourg)</option>
                                    <option value="+853 (Macau)">+853 (Macau)</option>
                                    <option value="+261 (Madagascar)">+261 (Madagascar)</option>
                                    <option value="+265 (Malawi)">+265 (Malawi)</option>
                                    <option value="+60 (Malaysia)">+60 (Malaysia)</option>
                                    <option value="+960 (Maldives)">+960 (Maldives)</option>
                                    <option value="+223 (Mali)">+223 (Mali)</option>
                                    <option value="+356 (Malta)">+356 (Malta)</option>
                                    <option value="+692 (Marshall Islands)">+692 (Marshall Islands)</option>
                                    <option value="+222 (Mauritania)">+222 (Mauritania)</option>
                                    <option value="+230 (Mauritius)">+230 (Mauritius)</option>
                                    <option value="+52 (Mexico)">+52 (Mexico)</option>
                                    <option value="+691 (Micronesia)">+691 (Micronesia)</option>
                                    <option value="+373 (Moldova)">+373 (Moldova)</option>
                                    <option value="+377 (Monaco)">+377 (Monaco)</option>
                                    <option value="+976 (Mongolia)">+976 (Mongolia)</option>
                                    <option value="+382 (Montenegro)">+382 (Montenegro)</option>
                                    <option value="+1-664 (Montserrat)">+1-664 (Montserrat)</option>
                                    <option value="+212 (Morocco)">+212 (Morocco)</option>
                                    <option value="+258 (Mozambique)">+258 (Mozambique)</option>
                                    <option value="+95 (Myanmar)">+95 (Myanmar)</option>
                                    <option value="+264 (Namibia)">+264 (Namibia)</option>
                                    <option value="+674 (Nauru)">+674 (Nauru)</option>
                                    <option value="+977 (Nepal)">+977 (Nepal)</option>
                                    <option value="+31 (Netherlands)">+31 (Netherlands)</option>
                                    <option value="+64 (New Zealand)">+64 (New Zealand)</option>
                                    <option value="+505 (Nicaragua)">+505 (Nicaragua)</option>
                                    <option value="+227 (Niger)">+227 (Niger)</option>
                                    <option value="+234 (Nigeria)">+234 (Nigeria)</option>
                                    <option value="+683 (Niue)">+683 (Niue)</option>
                                    <option value="+850 (North Korea)">+850 (North Korea)</option>
                                    <option value="+389 (North Macedonia)">+389 (North Macedonia)</option>
                                    <option value="+47 (Norway)">+47 (Norway)</option>
                                    <option value="+968 (Oman)">+968 (Oman)</option>
                                    <option value="+92 (Pakistan)">+92 (Pakistan)</option>
                                    <option value="+680 (Palau)">+680 (Palau)</option>
                                    <option value="+970 (Palestine)">+970 (Palestine)</option>
                                    <option value="+507 (Panama)">+507 (Panama)</option>
                                    <option value="+675 (Papua New Guinea)">+675 (Papua New Guinea)</option>
                                    <option value="+595 (Paraguay)">+595 (Paraguay)</option>
                                    <option value="+51 (Peru)">+51 (Peru)</option>
                                    <option value="+63 (Philippines)">+63 (Philippines)</option>
                                    <option value="+48 (Poland)">+48 (Poland)</option>
                                    <option value="+351 (Portugal)">+351 (Portugal)</option>
                                    <option value="+974 (Qatar)">+974 (Qatar)</option>
                                    <option value="+40 (Romania)">+40 (Romania)</option>
                                    <option value="+7 (Russia)">+7 (Russia)</option>
                                    <option value="+250 (Rwanda)">+250 (Rwanda)</option>
                                    <option value="+1-869 (Saint Kitts and Nevis)">+1-869 (Saint Kitts and Nevis)</option>
                                    <option value="+1-758 (Saint Lucia)">+1-758 (Saint Lucia)</option>
                                    <option value="+1-784 (Saint Vincent and the Grenadines)">+1-784 (Saint Vincent and the Grenadines)</option>
                                    <option value="+685 (Samoa)">+685 (Samoa)</option>
                                    <option value="+378 (San Marino)">+378 (San Marino)</option>
                                    <option value="+966 (Saudi Arabia)">+966 (Saudi Arabia)</option>
                                    <option value="+221 (Senegal)">+221 (Senegal)</option>
                                    <option value="+381 (Serbia)">+381 (Serbia)</option>
                                    <option value="+248 (Seychelles)">+248 (Seychelles)</option>
                                    <option value="+232 (Sierra Leone)">+232 (Sierra Leone)</option>
                                    <option value="+65 (Singapore)">+65 (Singapore)</option>
                                    <option value="+421 (Slovakia)">+421 (Slovakia)</option>
                                    <option value="+386 (Slovenia)">+386 (Slovenia)</option>
                                    <option value="+677 (Solomon Islands)">+677 (Solomon Islands)</option>
                                    <option value="+252 (Somalia)">+252 (Somalia)</option>
                                    <option value="+27 (South Africa)">+27 (South Africa)</option>
                                    <option value="+82 (South Korea)">+82 (South Korea)</option>
                                    <option value="+211 (South Sudan)">+211 (South Sudan)</option>
                                    <option value="+34 (Spain)">+34 (Spain)</option>
                                    <option value="+94 (Sri Lanka)">+94 (Sri Lanka)</option>
                                    <option value="+249 (Sudan)">+249 (Sudan)</option>
                                    <option value="+597 (Suriname)">+597 (Suriname)</option>
                                    <option value="+46 (Sweden)">+46 (Sweden)</option>
                                    <option value="+41 (Switzerland)">+41 (Switzerland)</option>
                                    <option value="+963 (Syria)">+963 (Syria)</option>
                                    <option value="+886 (Taiwan)">+886 (Taiwan)</option>
                                    <option value="+992 (Tajikistan)">+992 (Tajikistan)</option>
                                    <option value="+255 (Tanzania)">+255 (Tanzania)</option>
                                    <option value="+66 (Thailand)">+66 (Thailand)</option>
                                    <option value="+228 (Togo)">+228 (Togo)</option>
                                    <option value="+676 (Tonga)">+676 (Tonga)</option>
                                    <option value="+1-868 (Trinidad and Tobago)">+1-868 (Trinidad and Tobago)</option>
                                    <option value="+216 (Tunisia)">+216 (Tunisia)</option>
                                    <option value="+90 (Turkey)">+90 (Turkey)</option>
                                    <option value="+993 (Turkmenistan)">+993 (Turkmenistan)</option>
                                    <option value="+688 (Tuvalu)">+688 (Tuvalu)</option>
                                    <option value="+256 (Uganda)">+256 (Uganda)</option>
                                    <option value="+380 (Ukraine)">+380 (Ukraine)</option>
                                    <option value="+971 (United Arab Emirates)">+971 (United Arab Emirates)</option>
                                    <option value="+44 (United Kingdom)">+44 (United Kingdom)</option>
                                    <option value="+1 (United States)">+1 (United States)</option>
                                    <option value="+598 (Uruguay)">+598 (Uruguay)</option>
                                    <option value="+998 (Uzbekistan)">+998 (Uzbekistan)</option>
                                    <option value="+678 (Vanuatu)">+678 (Vanuatu)</option>
                                    <option value="+379 (Vatican City)">+379 (Vatican City)</option>
                                    <option value="+58 (Venezuela)">+58 (Venezuela)</option>
                                    <option value="+84 (Vietnam)">+84 (Vietnam)</option>
                                    <option value="+967 (Yemen)">+967 (Yemen)</option>
                                    <option value="+260 (Zambia)">+260 (Zambia)</option>
                                    <option value="+263 (Zimbabwe)">+263 (Zimbabwe)</option>
                                    <option value="+000 (Others)">+000 (Others)</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <input type="phone" name="phone" class="form-control border-0 bg-light px-4" placeholder="Your Phone" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14024.894949380145!2d77.5159182421397!3d28.502915518754175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceaf0745fbab5%3A0xe3924393abd08d39!2sZeta%20I%2C%20Greater%20Noida%2C%20Uttar%20Pradesh%20201306!5e0!3m2!1sen!2sin!4v1717775638315!5m2!1sen!2sin"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>




  <!--========================
    CONTACT DETAILS END

@endsection
