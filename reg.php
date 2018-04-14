<!doctype html>
<html>
<head>
    <title>Login / Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/regStyle.css" type="text/css">

</head>
<body>
    <div class="row">
      <center><h1>LOGIN & REGISTER RADIUS</h1></center>

        <div class="container" style="margin-top:40px;">
            <div class="login-register-form-section">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#register" data-toggle="tab">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                        <form class="form-horizontal" method="post" action="loginCheck.php">
                            <div class="form-group " >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="login_email" class="form-control" placeholder="Username" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" name="login_password" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="rememberMe">
                                <label for="rememberMe">Remember Me</label>
                                <a href="#" class="pull-right">Forgot password?</a>
                            </div>
                            <input type="submit" value="Login" class="btn btn-success btn-custom">

                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="register">
                        <form class="form-horizontal" method="post" action="input_reg.php">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="username" class="form-control" placeholder="Username (4-32 characters)" maxlength="32" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="email" class="form-control" placeholder="Email" maxlength="50" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="text" name="firstname" class="form-control" placeholder="First name" maxlength="30" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="text" name="lastname" class="form-control" placeholder="Last name" maxlength="30" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                    <input type="text" name="address" class="form-control" placeholder="Address" maxlength="50" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                    <input type="text" name="city" class="form-control" placeholder="City" maxlength="15" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                    <input type="text" name="zip" class="form-control" placeholder="Zip Code" maxlength="8" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-flag"></i></div>
                                <select name="country" class="form-control" id="sel1">
                                  <option style="color:gray;" value="" disabled selected>Country</option><OPTION value='Afghanistan'>Afghanistan</OPTION><OPTION value='Albania'>Albania</OPTION><OPTION value='Algeria'>Algeria</OPTION><OPTION value='American Samoa'>American Samoa</OPTION><OPTION value='Andorra'>Andorra</OPTION><OPTION value='Angola'>Angola</OPTION><OPTION value='Anguilla'>Anguilla</OPTION><OPTION value='Antarctica'>Antarctica</OPTION><OPTION value='Antigua and Barbuda'>Antigua and Barbuda</OPTION><OPTION value='Argentina'>Argentina</OPTION><OPTION value='Armenia'>Armenia</OPTION><OPTION value='Aruba'>Aruba</OPTION><OPTION value='Australia'>Australia</OPTION><OPTION value='Austria'>Austria</OPTION><OPTION value='Azerbaijan'>Azerbaijan</OPTION><OPTION value='Bahamas'>Bahamas</OPTION><OPTION value='Bahrain'>Bahrain</OPTION><OPTION value='Bangladesh'>Bangladesh</OPTION><OPTION value='Barbados'>Barbados</OPTION><OPTION value='Belarus'>Belarus</OPTION><OPTION value='Belgium'>Belgium</OPTION><OPTION value='Belize'>Belize</OPTION><OPTION value='Benin'>Benin</OPTION><OPTION value='Bermuda'>Bermuda</OPTION><OPTION value='Bhutan'>Bhutan</OPTION><OPTION value='Bolivia'>Bolivia</OPTION><OPTION value='Bosnia and Herzegovina'>Bosnia and Herzegovina</OPTION><OPTION value='Botswana'>Botswana</OPTION><OPTION value='Bouvet Island'>Bouvet Island</OPTION><OPTION value='Brazil'>Brazil</OPTION><OPTION value='British Indian Ocean Territory'>British Indian Ocean Territory</OPTION><OPTION value='Brunei Darussalam'>Brunei Darussalam</OPTION><OPTION value='Bulgaria'>Bulgaria</OPTION><OPTION value='Burkina Faso'>Burkina Faso</OPTION><OPTION value='Burundi'>Burundi</OPTION><OPTION value='Cambodia'>Cambodia</OPTION><OPTION value='Cameroon'>Cameroon</OPTION><OPTION value='Canada'>Canada</OPTION><OPTION value='Cape Verde'>Cape Verde</OPTION><OPTION value='Cayman Islands'>Cayman Islands</OPTION><OPTION value='Central African Republic'>Central African Republic</OPTION><OPTION value='Chad'>Chad</OPTION><OPTION value='Chile'>Chile</OPTION><OPTION value='China'>China</OPTION><OPTION value='Christmas Island'>Christmas Island</OPTION><OPTION value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</OPTION><OPTION value='Colombia'>Colombia</OPTION><OPTION value='Comoros'>Comoros</OPTION><OPTION value='Congo'>Congo</OPTION><OPTION value='Congo, the Democratic Republic of the'>Congo, the Democratic Republic of the</OPTION><OPTION value='Cook Islands'>Cook Islands</OPTION><OPTION value='Costa Rica'>Costa Rica</OPTION><OPTION value='Cote D'ivoire'>Cote D'ivoire</OPTION><OPTION value='Croatia (Hrvatska)'>Croatia (Hrvatska)</OPTION><OPTION value='Cyprus'>Cyprus</OPTION><OPTION value='Czech Republic'>Czech Republic</OPTION><OPTION value='Denmark'>Denmark</OPTION><OPTION value='Djibouti'>Djibouti</OPTION><OPTION value='Dominica'>Dominica</OPTION><OPTION value='Dominican Republic'>Dominican Republic</OPTION><OPTION value='Ecuador'>Ecuador</OPTION><OPTION value='Egypt'>Egypt</OPTION><OPTION value='El Salvador'>El Salvador</OPTION><OPTION value='Equatorial Guinea'>Equatorial Guinea</OPTION><OPTION value='Eritrea'>Eritrea</OPTION><OPTION value='Estonia'>Estonia</OPTION><OPTION value='Ethiopia'>Ethiopia</OPTION><OPTION value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas)</OPTION><OPTION value='Faroe Islands'>Faroe Islands</OPTION><OPTION value='Fiji'>Fiji</OPTION><OPTION value='Finland'>Finland</OPTION><OPTION value='France'>France</OPTION><OPTION value='France, Metropolitan'>France, Metropolitan</OPTION><OPTION value='French Guiana'>French Guiana</OPTION><OPTION value='French Polynesia'>French Polynesia</OPTION><OPTION value='French Southern Territories'>French Southern Territories</OPTION><OPTION value='Gabon'>Gabon</OPTION><OPTION value='Gambia'>Gambia</OPTION><OPTION value='Georgia'>Georgia</OPTION><OPTION value='Germany'>Germany</OPTION><OPTION value='Ghana'>Ghana</OPTION><OPTION value='Gibraltar'>Gibraltar</OPTION><OPTION value='Greece'>Greece</OPTION><OPTION value='Greenland'>Greenland</OPTION><OPTION value='Grenada'>Grenada</OPTION><OPTION value='Guadeloupe'>Guadeloupe</OPTION><OPTION value='Guam'>Guam</OPTION><OPTION value='Guatemala'>Guatemala</OPTION><OPTION value='Guinea'>Guinea</OPTION><OPTION value='Guinea'>Guinea</OPTION><OPTION value='Guyana'>Guyana</OPTION><OPTION value='Haiti'>Haiti</OPTION><OPTION value='Heard Island and Mcdonald Islands'>Heard Island and Mcdonald Islands</OPTION><OPTION value='Honduras'>Honduras</OPTION><OPTION value='Hong Kong'>Hong Kong</OPTION><OPTION value='Hungary'>Hungary</OPTION><OPTION value='Iceland'>Iceland</OPTION><OPTION value='India'>India</OPTION><OPTION value='Indonesia'>Indonesia</OPTION><OPTION value='Iraq'>Iraq</OPTION><OPTION value='Ireland'>Ireland</OPTION><OPTION value='Israel'>Israel</OPTION><OPTION value='Italy'>Italy</OPTION><OPTION value='Jamaica'>Jamaica</OPTION><OPTION value='Japan'>Japan</OPTION><OPTION value='Jordan'>Jordan</OPTION><OPTION value='Kazakhstan'>Kazakhstan</OPTION><OPTION value='Kenya'>Kenya</OPTION><OPTION value='Kiribati'>Kiribati</OPTION><OPTION value='Korea, Republic of'>Korea, Republic of</OPTION><OPTION value='Kuwait'>Kuwait</OPTION><OPTION value='Kyrgyzstan'>Kyrgyzstan</OPTION><OPTION value='Lao People's Democratic Republic'>Lao People's Democratic Republic</OPTION><OPTION value='Latvia'>Latvia</OPTION><OPTION value='Lebanon'>Lebanon</OPTION><OPTION value='Lesotho'>Lesotho</OPTION><OPTION value='Liberia'>Liberia</OPTION><OPTION value='Libyan Arab Jamahiriya'>Libyan Arab Jamahiriya</OPTION><OPTION value='Liechtenstein'>Liechtenstein</OPTION><OPTION value='Lithuania'>Lithuania</OPTION><OPTION value='Luxembourg'>Luxembourg</OPTION><OPTION value='Macao'>Macao</OPTION><OPTION value='Macedonia, the Former Yugoslav Republic of'>Macedonia, the Former Yugoslav Republic of</OPTION><OPTION value='Madagascar'>Madagascar</OPTION><OPTION value='Malawi'>Malawi</OPTION><OPTION value='Malaysia'>Malaysia</OPTION><OPTION value='Maldives'>Maldives</OPTION><OPTION value='Mali'>Mali</OPTION><OPTION value='Malta'>Malta</OPTION><OPTION value='Marshall Islands'>Marshall Islands</OPTION><OPTION value='Martinique'>Martinique</OPTION><OPTION value='Mauritania'>Mauritania</OPTION><OPTION value='Mauritius'>Mauritius</OPTION><OPTION value='Mayotte'>Mayotte</OPTION><OPTION value='Mexico'>Mexico</OPTION><OPTION value='Micronesia, Federated States of'>Micronesia, Federated States of</OPTION><OPTION value='Moldova, Republic of'>Moldova, Republic of</OPTION><OPTION value='Monaco'>Monaco</OPTION><OPTION value='Mongolia'>Mongolia</OPTION><OPTION value='Montenegro'>Montenegro</OPTION><OPTION value='Montserrat'>Montserrat</OPTION><OPTION value='Morocco'>Morocco</OPTION><OPTION value='Mozambique'>Mozambique</OPTION><OPTION value='Namibia'>Namibia</OPTION><OPTION value='Nauru'>Nauru</OPTION><OPTION value='Nepal'>Nepal</OPTION><OPTION value='Netherlands'>Netherlands</OPTION><OPTION value='Netherlands Antilles'>Netherlands Antilles</OPTION><OPTION value='New Caledonia'>New Caledonia</OPTION><OPTION value='New Zealand'>New Zealand</OPTION><OPTION value='Nicaragua'>Nicaragua</OPTION><OPTION value='Niger'>Niger</OPTION><OPTION value='Nigeria'>Nigeria</OPTION><OPTION value='Niue'>Niue</OPTION><OPTION value='Norfolk Island'>Norfolk Island</OPTION><OPTION value='Northern Mariana Islands'>Northern Mariana Islands</OPTION><OPTION value='Norway'>Norway</OPTION><OPTION value='Oman'>Oman</OPTION><OPTION value='Pakistan'>Pakistan</OPTION><OPTION value='Palau'>Palau</OPTION><OPTION value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</OPTION><OPTION value='Panama'>Panama</OPTION><OPTION value='Papua New Guinea'>Papua New Guinea</OPTION><OPTION value='Paraguay'>Paraguay</OPTION><OPTION value='Peru'>Peru</OPTION><OPTION value='Philippines'>Philippines</OPTION><OPTION value='Pitcairn'>Pitcairn</OPTION><OPTION value='Poland'>Poland</OPTION><OPTION value='Portugal'>Portugal</OPTION><OPTION value='Puerto Rico'>Puerto Rico</OPTION><OPTION value='Qatar'>Qatar</OPTION><OPTION value='Reunion'>Reunion</OPTION><OPTION value='Romania'>Romania</OPTION><OPTION value='Russian Federation'>Russian Federation</OPTION><OPTION value='Rwanda'>Rwanda</OPTION><OPTION value='Saint Helena'>Saint Helena</OPTION><OPTION value='Saint Kitts and Nevis'>Saint Kitts and Nevis</OPTION><OPTION value='Saint Lucia'>Saint Lucia</OPTION><OPTION value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon</OPTION><OPTION value='Saint Vincent and the Grenadines'>Saint Vincent and the Grenadines</OPTION><OPTION value='Samoa'>Samoa</OPTION><OPTION value='San Marino'>San Marino</OPTION><OPTION value='Sao Tome and Principe'>Sao Tome and Principe</OPTION><OPTION value='Saudi Arabia'>Saudi Arabia</OPTION><OPTION value='Senegal'>Senegal</OPTION><OPTION value='Serbia'>Serbia</OPTION><OPTION value='Seychelles'>Seychelles</OPTION><OPTION value='Sierra Leone'>Sierra Leone</OPTION><OPTION value='Singapore'>Singapore</OPTION><OPTION value='Slovakia'>Slovakia</OPTION><OPTION value='Slovenia'>Slovenia</OPTION><OPTION value='Solomon Islands'>Solomon Islands</OPTION><OPTION value='Somalia'>Somalia</OPTION><OPTION value='South Africa'>South Africa</OPTION><OPTION value='South Georgia and the South Sandwich Islands'>South Georgia and the South Sandwich Islands</OPTION><OPTION value='Spain'>Spain</OPTION><OPTION value='Sri Lanka'>Sri Lanka</OPTION><OPTION value='Suriname'>Suriname</OPTION><OPTION value='Svalbard and Jan Mayen Islands'>Svalbard and Jan Mayen Islands</OPTION><OPTION value='Swaziland'>Swaziland</OPTION><OPTION value='Sweden'>Sweden</OPTION><OPTION value='Switzerland'>Switzerland</OPTION><OPTION value='Taiwan'>Taiwan</OPTION><OPTION value='Tajikistan'>Tajikistan</OPTION><OPTION value='Tanzania, United Republic of'>Tanzania, United Republic of</OPTION><OPTION value='Thailand'>Thailand</OPTION><OPTION value='Timor'>Timor</OPTION><OPTION value='Togo'>Togo</OPTION><OPTION value='Tokelau'>Tokelau</OPTION><OPTION value='Tonga'>Tonga</OPTION><OPTION value='Trinidad and Tobago'>Trinidad and Tobago</OPTION><OPTION value='Tunisia'>Tunisia</OPTION><OPTION value='Turkey'>Turkey</OPTION><OPTION value='Turkmenistan'>Turkmenistan</OPTION><OPTION value='Turks and Caicos Islands'>Turks and Caicos Islands</OPTION><OPTION value='Tuvalu'>Tuvalu</OPTION><OPTION value='Uganda'>Uganda</OPTION><OPTION value='Ukraine'>Ukraine</OPTION><OPTION value='United Arab Emirates'>United Arab Emirates</OPTION><OPTION value='United Kingdom'>United Kingdom</OPTION><OPTION value='United States'>United States</OPTION><OPTION value='United States Minor Outlying Islands'>United States Minor Outlying Islands</OPTION><OPTION value='Uruguay'>Uruguay</OPTION><OPTION value='Uzbekistan'>Uzbekistan</OPTION><OPTION value='Vanuatu'>Vanuatu</OPTION><OPTION value='Vatican City State (Holy See)'>Vatican City State (Holy See)</OPTION><OPTION value='Venezuela'>Venezuela</OPTION><OPTION value='Viet Nam'>Viet Nam</OPTION><OPTION value='Virgin Islands, British'>Virgin Islands, British</OPTION><OPTION value='Virgin Islands, U.S.'>Virgin Islands, U.S.</OPTION><OPTION value='Wallis and Futuna Islands'>Wallis and Futuna Islands</OPTION><OPTION value='Western Sahara'>Western Sahara</OPTION><OPTION value='Yemen'>Yemen</OPTION><OPTION value='Zaire'>Zaire</OPTION><OPTION value='Zambia'>Zambia</OPTION><OPTION value='Zimbabwe'>Zimbabwe
                                  </OPTION>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-flag"></i></div>
                                <select name="state" class="form-control" id="sel1">
                                  <option style="color:gray;" value="" disabled selected>State or Province</option>
                                  <OPTION value='-- UNITED STATES --'>-- UNITED STATES --</OPTION><OPTION value='Alabama'>Alabama</OPTION><OPTION value='Alaska'>Alaska</OPTION><OPTION value='Arizona'>Arizona</OPTION><OPTION value='Arkansas'>Arkansas</OPTION><OPTION value='California'>California</OPTION><OPTION value='Colorado'>Colorado</OPTION><OPTION value='Connecticut'>Connecticut</OPTION><OPTION value='Delaware'>Delaware</OPTION><OPTION value='Florida'>Florida</OPTION><OPTION value='Georgia'>Georgia</OPTION><OPTION value='Hawaii'>Hawaii</OPTION><OPTION value='Idaho'>Idaho</OPTION><OPTION value='Illinois'>Illinois</OPTION><OPTION value='Indiana'>Indiana</OPTION><OPTION value='Iowa'>Iowa</OPTION><OPTION value='Kansas'>Kansas</OPTION><OPTION value='Kentucky'>Kentucky</OPTION><OPTION value='Louisiana'>Louisiana</OPTION><OPTION value='Maine'>Maine</OPTION><OPTION value='Maryland'>Maryland</OPTION><OPTION value='Massachusetts'>Massachusetts</OPTION><OPTION value='Michigan'>Michigan</OPTION><OPTION value='Minnesota'>Minnesota</OPTION><OPTION value='Mississippi'>Mississippi</OPTION><OPTION value='Missouri'>Missouri</OPTION><OPTION value='Montana'>Montana</OPTION><OPTION value='Nebraska'>Nebraska</OPTION><OPTION value='Nevada'>Nevada</OPTION><OPTION value='New Hampshire'>New Hampshire</OPTION><OPTION value='New Jersey'>New Jersey</OPTION><OPTION value='New Mexico'>New Mexico</OPTION><OPTION value='New York'>New York</OPTION><OPTION value='North Carolina'>North Carolina</OPTION><OPTION value='North Dakota'>North Dakota</OPTION><OPTION value='Ohio'>Ohio</OPTION><OPTION value='Oklahoma'>Oklahoma</OPTION><OPTION value='Oregon'>Oregon</OPTION><OPTION value='Pennsylvania'>Pennsylvania</OPTION><OPTION value='Rhode Island'>Rhode Island</OPTION><OPTION value='South Carolina'>South Carolina</OPTION><OPTION value='South Dakota'>South Dakota</OPTION><OPTION value='Tennessee'>Tennessee</OPTION><OPTION value='Texas'>Texas</OPTION><OPTION value='Utah'>Utah</OPTION><OPTION value='Vermont'>Vermont</OPTION><OPTION value='Virginia'>Virginia</OPTION><OPTION value='Washington'>Washington</OPTION><OPTION value='West Virginia'>West Virginia</OPTION><OPTION value='Wisconsin'>Wisconsin</OPTION><OPTION value='Wyoming'>Wyoming</OPTION><OPTION value='-- CANADA --'>-- CANADA --</OPTION><OPTION value='Alberta'>Alberta</OPTION><OPTION value='British Columbia'>British Columbia</OPTION><OPTION value='Manitoba'>Manitoba</OPTION><OPTION value='New Brunswick'>New Brunswick</OPTION><OPTION value='Newfoundland and Labrador'>Newfoundland and Labrador</OPTION><OPTION value='Northwest Territories'>Northwest Territories</OPTION><OPTION value='Nova Scotia'>Nova Scotia</OPTION><OPTION value='Nunavut'>Nunavut</OPTION><OPTION value='Ontario'>Ontario</OPTION><OPTION value='Prince Edward Island'>Prince Edward Island</OPTION><OPTION value='Quebec'>Quebec</OPTION><OPTION value='Saskatchewan'>Saskatchewan</OPTION><OPTION value='Yukon Territory'>Yukon Territory</OPTION><OPTION value='-- AUSTRALIA --'>-- AUSTRALIA --</OPTION><OPTION value='Australian Capital Territory'>Australian Capital Territory</OPTION><OPTION value='New South Wales'>New South Wales</OPTION><OPTION value='Northern Territory'>Northern Territory</OPTION><OPTION value='Queensland'>Queensland</OPTION><OPTION value='South Australia'>South Australia</OPTION><OPTION value='Tasmania'>Tasmania</OPTION><OPTION value='Victoria'>Victoria</OPTION><OPTION value='Western Australia'>Western Australia
                                  </OPTION>
                                </select>
                              </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number (International form, e.g. 496548156875)" maxlength="8" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile Number (International form, e.g. 496548156875)" maxlength="8" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="text" name="vatid" class="form-control" placeholder="VAT ID" maxlength="40" required="required" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                                <select name="srvid" class="form-control" id="sel1">
                                  <option style="color:gray;" value="" disabled selected>Initial prepaid service</option>
                                  <OPTION value=17>Prepaid expiration &amp; online time</OPTION><OPTION value=16>Prepaid MB download</OPTION><OPTION value=19>Prepaid monthly</OPTION><OPTION value=5>Prepaid monthly 1 GB download</OPTION><OPTION value=7>Prepaid monthly flat + quotas</OPTION><OPTION value=21>Prepaid online time</OPTION><OPTION value=4>Prepaid total MB</OPTION>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" readonly>ATTENTION: PLEASE READ THESE TERMS CAREFULLY BEFORE USING THIS WEBSITE. BY USING THIS SITE YOU AGREE TO BE BOUND BY THESE TERMS AND CONDITIONS. IF YOU DO NOT ACCEPT THESE TERMS ("TERMS"), DO NOT USE THIS WEBSITE.</textarea>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              I accept the Terms & Conditions
                            </label>
                          </div>
                          <br>
                            <input type="submit" value="Register" class="btn btn-success btn-custom">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
