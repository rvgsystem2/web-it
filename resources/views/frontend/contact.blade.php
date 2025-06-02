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

                     <form action="#" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">

<a  data-bs-toggle="dropdown">Select Country</a>

<select id="country" name="country" class="advanced_box_select" class="form-control border-0 bg-light px-4" placeholder="Country" style="height: 55px; width: 50%; background-color: #eafafa;">
<option value="Bharat(India)">Bharat(India)</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa (US)">American Samoa (US)</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla (BOT)">Anguilla (BOT)</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Artsakh">Artsakh</option>
<option value="Aruba (Netherlands)">Aruba (Netherlands)</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda (BOT)">Bermuda (BOT)</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire (Netherlands)">Bonaire (Netherlands)</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Virgin Islands (BOT)">British Virgin Islands (BOT)</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands (BOT)">Cayman Islands (BOT)</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island (Australia)">Christmas Island (Australia)</option>
<option value="Cocos (Keeling) Islands (Australia)">Cocos (Keeling) Islands (Australia)</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaçao (Netherlands)">Curaçao (Netherlands)</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="DR Congo">DR Congo</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Eswatini">Eswatini</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (BOT)">Falkland Islands (BOT)</option>
<option value="Faroe Islands (Denmark)">Faroe Islands (Denmark)</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana (France)">French Guiana (France)</option>
<option value="French Polynesia (France)">French Polynesia (France)</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar (BOT)">Gibraltar (BOT)</option>
<option value="Greece">Greece</option>
<option value="Greenland (Denmark)">Greenland (Denmark)</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe (France)">Guadeloupe (France)</option>
<option value="Guam (US)">Guam (US)</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey (Crown Dependency)">Guernsey (Crown Dependency)</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>

<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man (Crown Dependency)">Isle of Man (Crown Dependency)</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey (Crown Dependency)">Jersey (Crown Dependency)</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kosovo">Kosovo</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique (France)">Martinique (France)</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte (France)">Mayotte (France)</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat (BOT)">Montserrat (BOT)</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Caledonia (France)">New Caledonia (France)</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island (Australia)">Norfolk Island (Australia)</option>
<option value="North Korea">North Korea</option>
<option value="North Macedonia">North Macedonia</option>
<option value="Northern Cyprus">Northern Cyprus</option>
<option value="Northern Mariana Islands (US)">Northern Mariana Islands (US)</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn Islands (BOT)">Pitcairn Islands (BOT)</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico (US)">Puerto Rico (US)</option>
<option value="Qatar">Qatar</option>
<option value="Réunion (France)">Réunion (France)</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saba (Netherlands)">Saba (Netherlands)</option>
<option value="Saint Barthélemy (France)">Saint Barthélemy (France)</option>
<option value="Saint Helena, Ascension and Tristan da Cunha (BOT)">Saint Helena, Ascension and Tristan da Cunha (BOT)</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Martin (France)">Saint Martin (France)</option>
<option value="Saint Pierre and Miquelon (France)">Saint Pierre and Miquelon (France)</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Sint Eustatius (Netherlands)">Sint Eustatius (Netherlands)</option>
<option value="Sint Maarten (Netherlands)">Sint Maarten (Netherlands)</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen (Norway)">Svalbard and Jan Mayen (Norway)</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau (NZ)">Tokelau (NZ)</option>
<option value="Tonga">Tonga</option>
<option value="Transnistria">Transnistria</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands (BOT)">Turks and Caicos Islands (BOT)</option>
<option value="Tuvalu">Tuvalu</option>
<option value="U.S. Virgin Islands (US)">U.S. Virgin Islands (US)</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wallis and Futuna (France)">Wallis and Futuna (France)</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
<option value="Others">Others</option>

     </select>
                            </div>
                            <div class="col-12">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14024.894949380145!2d77.5159182421397!3d28.502915518754175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceaf0745fbab5%3A0xe3924393abd08d39!2sZeta%20I%2C%20Greater%20Noida%2C%20Uttar%20Pradesh%20201306!5e0!3m2!1sen!2sin!4v1717775638315!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>




  <!--========================
    CONTACT DETAILS END

@endsection
