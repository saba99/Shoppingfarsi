 
@extends('main.scripts')
@extends('main.linkcss')


  <body class=" checkout-page">
    
    <div class="master-wrapper">
        <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
     @include('main.header')
    
    
    
    
    <div class="container">
        <div class="row">
            
            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12">
                
                <div class="checkout-container">
                    <div class="row">
                    	<div class="span10 offset1">
                    	    
                    	    <!--  ==========  -->
							<!--  = Header =  -->
							<!--  ==========  -->
                    		<header>
                    		    <div class="row">
                    		    	<div class="span2">
                    		    		<a href="index.html"><img src="{{asset('webmarket/images/logo-bw.png')}}" alt="Webmarket Logo" width="48" height="48" /></a>
                    		    	</div>
                    		    	<div class="span6">
                    		    	    <div class="center-align">
                    		    	        <h1><span class="light">تاييد</span> و پرداخت</h1>
                    		    	    </div>
                    		    	</div>
                    		    	<div class="span2">
                    		    	    <div class="right-align">
                    		    	    	<img src="{{asset('webmarket/images/buttons/security.jpg')}}" alt="Security Sign" width="92" height="65" />
                    		    	    </div>
                    		    	</div>
                    		    </div>
                    		</header>
                    		<!--  ==========  -->
							<!--  = Steps =  -->
							<!--  ==========  -->
                    		<div class="checkout-steps">
                    		    <div class="clearfix">
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-1.html">سبد خرید</a>
                    		    	</div>
                    		    	<div class="step active">
                    		    	    <div class="step-badge">2</div>
                    		    	    آدرس ارسال
                    		    	</div>
                    		    	<div class="step">
                                        <div class="step-badge">2</div>
                                        شیوه پرداخت
                                    </div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">4</div>
                    		    	    تایید و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
						    <!--  ==========  -->
							<!--  = Shipping addr form =  -->
							<!--  ==========  -->
							    
						    <form action="#" method="post" class="form-horizontal form-checkout">
                                <div class="control-group">
                                    <label class="control-label" for="firstName">نام<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="firstName" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="lastName">نام خانوادگی<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="lastName" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telephone">تلفن<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="tel" id="telephone" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">ایمیل<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="email" id="email" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="addr1">ادرس 1<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="addr1" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="addr2">آدرس 2</label>
                                    <div class="controls">
                                        <input type="text" id="addr2" class="span4" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="city">شهر<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="city" class="span4" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="zip">کد پستی<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="zip" class="span4" >
                                    </div>
                                </div>
                                
                                <!--  ==========  -->
                                <!--  = Countries =  -->
                                <!--  ==========  -->
                                <div class="control-group">
                                    <label class="control-label" for="country">کشور<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <select id="country" class="as-span4">
                                            <option value="AC">Ascension Island</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AL">Albania</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="AO">Angola</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AS">American Samoa</option><
                                            option value="AT">Austria</option>
                                            <option value="AU">Australia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BA">Bosnia and Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BL">Saint Barthélemy</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BQ">British Antarctic Territory</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CA">Canada</option><option value="CC">Cocos [Keeling] Islands</option><option value="CD">Congo - Kinshasa</option><option value="CF">Central African Republic</option><option value="CG">Congo - Brazzaville</option><option value="CH">Switzerland</option><option value="CI">Côte d’Ivoire</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CP">Clipperton Island</option><option value="CR">Costa Rica</option><option value="CS">Serbia and Montenegro</option><option value="CT">Canton and Enderbury Islands</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DD">East Germany</option><option value="DE">Germany</option><option value="DG">Diego Garcia</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EA">Ceuta and Melilla</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="EU">European Union</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FQ">French Southern and Antarctic Territories</option><option value="FR">France</option><option value="FX">Metropolitan France</option><option value="GA">Gabon</option><option value="GB">United Kingdom</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guiana</option><option value="GG">Guernsey</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong SAR China</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="IC">Canary Islands</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IM">Isle of Man</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JE">Jersey</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="JT">Johnston Island</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts and Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MF">Saint Martin</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MI">Midway Islands</option><option value="MK">Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar [Burma]</option><option value="MN">Mongolia</option><option value="MO">Macau SAR China</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NQ">Dronning Maud Land</option><option value="NR">Nauru</option><option value="NT">Neutral Zone</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PC">Pacific Islands Trust Territory</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre and Miquelon</option><option value="PN">Pitcairn Islands</option><option value="PR">Puerto Rico</option><option value="PS">Palestinian Territories</option><option value="PT">Portugal</option><option value="PU">U.S. Miscellaneous Pacific Islands</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="PZ">Panama Canal Zone</option><option value="QA">Qatar</option><option value="QO">Outlying Oceania</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SK">Slovakia</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">São Tomé and Príncipe</option><option value="SU">Union of Soviet Socialist Republics</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TA">Tristan da Cunha</option><option value="TC">Turks and Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TL">Timor-Leste</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TR">Turkey</option><option value="TT">Trinidad and Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UM">U.S. Minor Outlying Islands</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City</option><option value="VC">Saint Vincent and the Grenadines</option><option value="VD">North Vietnam</option><option value="VE">Venezuela</option><option value="VG">British Virgin Islands</option><option value="VI">U.S. Virgin Islands</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis and Futuna</option><option value="WK">Wake Island</option><option value="WS">Samoa</option><option value="YD">
                                                </option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="ZZ">ناحیه ناشناخته</option></select>
                                    </div>
                                </div> <!-- /countries -->
                                
                            </form>
							
                            <hr />
						    
						    <p class="right-align">
						        در مرحله بعدی شما شیوه پرداخت را انتخاب میکنید &nbsp; &nbsp;
						        <a href="checkout-step-3.html " class="btn btn-primary higher bold">ادامه</a>
						    </p>
							    
							    
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    
     
    
     
    </div> <!-- end of master-wrapper -->

    
    <!--  = FB =  -->
    @include('main.footer')

    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->
    
    <!--  = FB =  -->
    
    @section('scripts')
       
    @endsection
  </body>

  </body>
</html>

    
    