<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>「Yugere」悦己服装定制 | 提供你最满意的定制服务</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timfan">
    <meta name="keywords" content="服装定制,悦己,来图定制,打版定制,量身定制,一对一定制">
    <meta name="description" content="来图来样定制，量身定制，提供一对一精致的定制服务" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">

    <!-- Style CSS -->
    <link href="<?=base_url('css/bootstrap.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/font-awesome.css')?>" media="screen" rel="stylesheet">
    <!-- Selectize -->
    <link href="<?=base_url('css/selectize.css')?>" media="screen" rel="stylesheet">
    <!-- Style -->
    <link href="<?=base_url('css/style.css')?>" media="screen" rel="stylesheet">
</head>
<body class="shop-page shop-page-checkout">
     

<?php include "common/header.php" ?>
    <!--Checkout Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="shop-checkout">
                    <div class="col-sm-12">
                        <div class="shop-checkout-info">
                            Returning customer?
                            <a href="#logInForm" class="showlogin" data-toggle="collapse" aria-expanded="false" aria-controls="logInForm">Click here to login</a>
                        </div>
                        <div class="collapse" id="logInForm">
                            <div class="wrap-login-forms other-page">
                                <!--Title-->
                                <h3 class="page-title">customer login</h3>
                                <!--End Title-->
                                <!--Form-->
                                <form action="#" class="login-forms">
                                    <p class="form-row">
                                        <input type="text" class="input-text required" placeholder="name"/>
                                    </p>
                                    <p class="form-row">
                                        <input type="text" class="input-text required" placeholder="email"/>
                                    </p>
                                    <p class="lost_password">
                                        <a href="#">forgot your password?</a>
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" class="button" value="sign in"/>
                                    </p>
                                    <p class="create-account">
                                        <a href="create-account.html">create account</a>
                                    </p>
                                </form>
                                <!--End Form-->
                            </div>
                        </div>
                        <div class="shop-checkout-info">
                            Have a coupon?
                            <a href="#cuponForm" class="showlogin" data-toggle="collapse" aria-expanded="false" aria-controls="cuponForm">Click here to enter your code</a>
                        </div>
                        <div class="collapse" id="cuponForm">
                            <div class="wrap-login-forms other-page">
                                <!--Form-->
                                <form action="#" class="checkout_coupon">
                                    <p class="form-row form-row-first">
                                        <input type="text" class="input-text required" placeholder="Cupon code"/>
                                    </p>
                                    <p class="form-row form-row-last">
                                        <input type="submit" class="button" value="sign in"/>
                                    </p>
                                </form>
                                <!--End Form-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <form action="#" class="checkout">
                            <div class="col2-set" id="customer_details">
                                <div class="col-1 ">
                                    <div class="billing-fields">
                                        <h3>Billing details</h3>
                                        <p class="form-row">
                                            <label for="billing_first_name">
                                                First Name
                                            </label>
                                            <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder=" First Name"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_last_name">
                                                Last Name
                                            </label>
                                            <input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder="Last Name"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Company">
                                                Company
                                            </label>
                                            <input type="text" class="input-text" name="billing_Company" id="billing_Company" placeholder=" Company(optional)"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Email_Address">
                                                Email Address
                                            </label>
                                            <input type="email" class="input-text" name="billing_Email_Address" id="billing_Email_Address" placeholder=" Email Address"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Phone">
                                                Phone
                                            </label>
                                            <input type="number" class="input-text" name="billing_Phone" id="billing_Phone" placeholder=" Phone"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="select-country">
                                                Country
                                            </label>
                                            <select name="select-country" class="select-country" id="select-country">
                                                <option value="" disabled selected>Select your option</option>
                                                <option value="AFG">Afghanistan</option>
                                                <option value="ALA">Åland Islands</option>
                                                <option value="ALB">Albania</option>
                                                <option value="DZA">Algeria</option>
                                                <option value="ASM">American Samoa</option>
                                                <option value="AND">Andorra</option>
                                                <option value="AGO">Angola</option>
                                                <option value="AIA">Anguilla</option>
                                                <option value="ATA">Antarctica</option>
                                                <option value="ATG">Antigua and Barbuda</option>
                                                <option value="ARG">Argentina</option>
                                                <option value="ARM">Armenia</option>
                                                <option value="ABW">Aruba</option>
                                                <option value="AUS">Australia</option>
                                                <option value="AUT">Austria</option>
                                                <option value="AZE">Azerbaijan</option>
                                                <option value="BHS">Bahamas</option>
                                                <option value="BHR">Bahrain</option>
                                                <option value="BGD">Bangladesh</option>
                                                <option value="BRB">Barbados</option>
                                                <option value="BLR">Belarus</option>
                                                <option value="BEL">Belgium</option>
                                                <option value="BLZ">Belize</option>
                                                <option value="BEN">Benin</option>
                                                <option value="BMU">Bermuda</option>
                                                <option value="BTN">Bhutan</option>
                                                <option value="BOL">Bolivia, Plurinational State of</option>
                                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BIH">Bosnia and Herzegovina</option>
                                                <option value="BWA">Botswana</option>
                                                <option value="BVT">Bouvet Island</option>
                                                <option value="BRA">Brazil</option>
                                                <option value="IOT">British Indian Ocean Territory</option>
                                                <option value="BRN">Brunei Darussalam</option>
                                                <option value="BGR">Bulgaria</option>
                                                <option value="BFA">Burkina Faso</option>
                                                <option value="BDI">Burundi</option>
                                                <option value="KHM">Cambodia</option>
                                                <option value="CMR">Cameroon</option>
                                                <option value="CAN">Canada</option>
                                                <option value="CPV">Cape Verde</option>
                                                <option value="CYM">Cayman Islands</option>
                                                <option value="CAF">Central African Republic</option>
                                                <option value="TCD">Chad</option>
                                                <option value="CHL">Chile</option>
                                                <option value="CHN">China</option>
                                                <option value="CXR">Christmas Island</option>
                                                <option value="CCK">Cocos (Keeling) Islands</option>
                                                <option value="COL">Colombia</option>
                                                <option value="COM">Comoros</option>
                                                <option value="COG">Congo</option>
                                                <option value="COD">Congo, the Democratic Republic of the</option>
                                                <option value="COK">Cook Islands</option>
                                                <option value="CRI">Costa Rica</option>
                                                <option value="CIV">Côte d'Ivoire</option>
                                                <option value="HRV">Croatia</option>
                                                <option value="CUB">Cuba</option>
                                                <option value="CUW">Curaçao</option>
                                                <option value="CYP">Cyprus</option>
                                                <option value="CZE">Czech Republic</option>
                                                <option value="DNK">Denmark</option>
                                                <option value="DJI">Djibouti</option>
                                                <option value="DMA">Dominica</option>
                                                <option value="DOM">Dominican Republic</option>
                                                <option value="ECU">Ecuador</option>
                                                <option value="EGY">Egypt</option>
                                                <option value="SLV">El Salvador</option>
                                                <option value="GNQ">Equatorial Guinea</option>
                                                <option value="ERI">Eritrea</option>
                                                <option value="EST">Estonia</option>
                                                <option value="ETH">Ethiopia</option>
                                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                                <option value="FRO">Faroe Islands</option>
                                                <option value="FJI">Fiji</option>
                                                <option value="FIN">Finland</option>
                                                <option value="FRA">France</option>
                                                <option value="GUF">French Guiana</option>
                                                <option value="PYF">French Polynesia</option>
                                                <option value="ATF">French Southern Territories</option>
                                                <option value="GAB">Gabon</option>
                                                <option value="GMB">Gambia</option>
                                                <option value="GEO">Georgia</option>
                                                <option value="DEU">Germany</option>
                                                <option value="GHA">Ghana</option>
                                                <option value="GIB">Gibraltar</option>
                                                <option value="GRC">Greece</option>
                                                <option value="GRL">Greenland</option>
                                                <option value="GRD">Grenada</option>
                                                <option value="GLP">Guadeloupe</option>
                                                <option value="GUM">Guam</option>
                                                <option value="GTM">Guatemala</option>
                                                <option value="GGY">Guernsey</option>
                                                <option value="GIN">Guinea</option>
                                                <option value="GNB">Guinea-Bissau</option>
                                                <option value="GUY">Guyana</option>
                                                <option value="HTI">Haiti</option>
                                                <option value="HMD">Heard Island and McDonald Islands</option>
                                                <option value="VAT">Holy See (Vatican City State)</option>
                                                <option value="HND">Honduras</option>
                                                <option value="HKG">Hong Kong</option>
                                                <option value="HUN">Hungary</option>
                                                <option value="ISL">Iceland</option>
                                                <option value="IND">India</option>
                                                <option value="IDN">Indonesia</option>
                                                <option value="IRN">Iran, Islamic Republic of</option>
                                                <option value="IRQ">Iraq</option>
                                                <option value="IRL">Ireland</option>
                                                <option value="IMN">Isle of Man</option>
                                                <option value="ISR">Israel</option>
                                                <option value="ITA">Italy</option>
                                                <option value="JAM">Jamaica</option>
                                                <option value="JPN">Japan</option>
                                                <option value="JEY">Jersey</option>
                                                <option value="JOR">Jordan</option>
                                                <option value="KAZ">Kazakhstan</option>
                                                <option value="KEN">Kenya</option>
                                                <option value="KIR">Kiribati</option>
                                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                                <option value="KOR">Korea, Republic of</option>
                                                <option value="KWT">Kuwait</option>
                                                <option value="KGZ">Kyrgyzstan</option>
                                                <option value="LAO">Lao People's Democratic Republic</option>
                                                <option value="LVA">Latvia</option>
                                                <option value="LBN">Lebanon</option>
                                                <option value="LSO">Lesotho</option>
                                                <option value="LBR">Liberia</option>
                                                <option value="LBY">Libya</option>
                                                <option value="LIE">Liechtenstein</option>
                                                <option value="LTU">Lithuania</option>
                                                <option value="LUX">Luxembourg</option>
                                                <option value="MAC">Macao</option>
                                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MDG">Madagascar</option>
                                                <option value="MWI">Malawi</option>
                                                <option value="MYS">Malaysia</option>
                                                <option value="MDV">Maldives</option>
                                                <option value="MLI">Mali</option>
                                                <option value="MLT">Malta</option>
                                                <option value="MHL">Marshall Islands</option>
                                                <option value="MTQ">Martinique</option>
                                                <option value="MRT">Mauritania</option>
                                                <option value="MUS">Mauritius</option>
                                                <option value="MYT">Mayotte</option>
                                                <option value="MEX">Mexico</option>
                                                <option value="FSM">Micronesia, Federated States of</option>
                                                <option value="MDA">Moldova, Republic of</option>
                                                <option value="MCO">Monaco</option>
                                                <option value="MNG">Mongolia</option>
                                                <option value="MNE">Montenegro</option>
                                                <option value="MSR">Montserrat</option>
                                                <option value="MAR">Morocco</option>
                                                <option value="MOZ">Mozambique</option>
                                                <option value="MMR">Myanmar</option>
                                                <option value="NAM">Namibia</option>
                                                <option value="NRU">Nauru</option>
                                                <option value="NPL">Nepal</option>
                                                <option value="NLD">Netherlands</option>
                                                <option value="NCL">New Caledonia</option>
                                                <option value="NZL">New Zealand</option>
                                                <option value="NIC">Nicaragua</option>
                                                <option value="NER">Niger</option>
                                                <option value="NGA">Nigeria</option>
                                                <option value="NIU">Niue</option>
                                                <option value="NFK">Norfolk Island</option>
                                                <option value="MNP">Northern Mariana Islands</option>
                                                <option value="NOR">Norway</option>
                                                <option value="OMN">Oman</option>
                                                <option value="PAK">Pakistan</option>
                                                <option value="PLW">Palau</option>
                                                <option value="PSE">Palestinian Territory, Occupied</option>
                                                <option value="PAN">Panama</option>
                                                <option value="PNG">Papua New Guinea</option>
                                                <option value="PRY">Paraguay</option>
                                                <option value="PER">Peru</option>
                                                <option value="PHL">Philippines</option>
                                                <option value="PCN">Pitcairn</option>
                                                <option value="POL">Poland</option>
                                                <option value="PRT">Portugal</option>
                                                <option value="PRI">Puerto Rico</option>
                                                <option value="QAT">Qatar</option>
                                                <option value="REU">Réunion</option>
                                                <option value="ROU">Romania</option>
                                                <option value="RUS">Russian Federation</option>
                                                <option value="RWA">Rwanda</option>
                                                <option value="BLM">Saint Barthélemy</option>
                                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KNA">Saint Kitts and Nevis</option>
                                                <option value="LCA">Saint Lucia</option>
                                                <option value="MAF">Saint Martin (French part)</option>
                                                <option value="SPM">Saint Pierre and Miquelon</option>
                                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                                <option value="WSM">Samoa</option>
                                                <option value="SMR">San Marino</option>
                                                <option value="STP">Sao Tome and Principe</option>
                                                <option value="SAU">Saudi Arabia</option>
                                                <option value="SEN">Senegal</option>
                                                <option value="SRB">Serbia</option>
                                                <option value="SYC">Seychelles</option>
                                                <option value="SLE">Sierra Leone</option>
                                                <option value="SGP">Singapore</option>
                                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                                <option value="SVK">Slovakia</option>
                                                <option value="SVN">Slovenia</option>
                                                <option value="SLB">Solomon Islands</option>
                                                <option value="SOM">Somalia</option>
                                                <option value="ZAF">South Africa</option>
                                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SSD">South Sudan</option>
                                                <option value="ESP">Spain</option>
                                                <option value="LKA">Sri Lanka</option>
                                                <option value="SDN">Sudan</option>
                                                <option value="SUR">Suriname</option>
                                                <option value="SJM">Svalbard and Jan Mayen</option>
                                                <option value="SWZ">Swaziland</option>
                                                <option value="SWE">Sweden</option>
                                                <option value="CHE">Switzerland</option>
                                                <option value="SYR">Syrian Arab Republic</option>
                                                <option value="TWN">Taiwan, Province of China</option>
                                                <option value="TJK">Tajikistan</option>
                                                <option value="TZA">Tanzania, United Republic of</option>
                                                <option value="THA">Thailand</option>
                                                <option value="TLS">Timor-Leste</option>
                                                <option value="TGO">Togo</option>
                                                <option value="TKL">Tokelau</option>
                                                <option value="TON">Tonga</option>
                                                <option value="TTO">Trinidad and Tobago</option>
                                                <option value="TUN">Tunisia</option>
                                                <option value="TUR">Turkey</option>
                                                <option value="TKM">Turkmenistan</option>
                                                <option value="TCA">Turks and Caicos Islands</option>
                                                <option value="TUV">Tuvalu</option>
                                                <option value="UGA">Uganda</option>
                                                <option value="UKR">Ukraine</option>
                                                <option value="ARE">United Arab Emirates</option>
                                                <option value="GBR">United Kingdom</option>
                                                <option value="USA">United States</option>
                                                <option value="UMI">United States Minor Outlying Islands</option>
                                                <option value="URY">Uruguay</option>
                                                <option value="UZB">Uzbekistan</option>
                                                <option value="VUT">Vanuatu</option>
                                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                <option value="VNM">Viet Nam</option>
                                                <option value="VGB">Virgin Islands, British</option>
                                                <option value="VIR">Virgin Islands, U.S.</option>
                                                <option value="WLF">Wallis and Futuna</option>
                                                <option value="ESH">Western Sahara</option>
                                                <option value="YEM">Yemen</option>
                                                <option value="ZMB">Zambia</option>
                                                <option value="ZWE">Zimbabwe</option>
                                            </select>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Address">
                                                Address
                                            </label>
                                            <input type="text" class="input-text" name="billing_Address" id="billing_Address" placeholder=" Address"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Town_City">
                                                Town / City
                                            </label>
                                            <input type="text" class="input-text" name="billing_Town_City" id="billing_Town_City" placeholder=" Town / City"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_County">
                                                County
                                            </label>
                                            <input type="text" class="input-text" name="billing_County" id="billing_County" placeholder=" County"/>
                                        </p>
                                        <p class="form-row">
                                            <label for="billing_Postcode">
                                                Postcode
                                            </label>
                                            <input type="text" class="input-text" name="billing_Postcode" id="billing_Postcode" placeholder=" Postcode"/>
                                        </p>
                                    </div>
                                    <div class="form-row create-account">
                                        <input type="checkbox" class="input-checkbox" id="createaccount" name="createaccount"/>
                                        <label for="createaccount">Create an account?</label>
                                    </div>
                                    <div class="create-account-form">
                                        <p>Create an account by entering the information below. If you are a
                                            returning customer please login at the top of the page.
                                        </p>
                                        <p class="form-row">
                                            <label for="account_password">ACCOUNT PASSWORD</label>
                                            <input type="password" class="input-text" name="account_password" id="account_password" placeholder="Password"/>
                                            <small class="password-hint">
                                                The password should be at least seven characters long. To make
                                                it stronger, use upper and lower case letters, numbers and
                                                symbols like ! " ? $ % ^ & ).
                                            </small>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-2 ">
                                    <div class="shipping-fields">
                                        <h3>Ship to a different address?</h3>

                                        <p class="form-row">
                                            <label for="Ship_Order_Notes">
                                                Order Notes
                                            </label>
                                            <textarea type="text" class="input-text" name="Ship_Order_Notes" id="Ship_Order_Notes" placeholder=" Order Notes"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <h3 class="table-title">Your order</h3>
                                <div class="checkout-review-order">
                                    <table class="checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product">
                                                    <div class="product-thumbnail">
                                                        <a href="shop-details.html"><img src="images/Shop/cart-product-thumb-1.jpg" alt="Product 1"/></a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-name">
                                                            <a href="shop-details.html">The Skinny x 1</a>
                                                        </div>
                                                        <div class="product-size-color">
                                                            <span>Small/Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">$</span>
                                                        175.00
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product">
                                                    <div class="product-thumbnail">
                                                        <a href="shop-details.html"><img src="images/Shop/cart-product-thumb-2.jpg" alt="Product 2"/></a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-name">
                                                            <a href="shop-details.html">The Slouchy x 1</a>
                                                        </div>
                                                        <div class="product-size-color">
                                                            <span>Small/Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">$</span>
                                                        150.00
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">$</span>
                                                        325.00
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="cart-shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    There are no shipping methods available. Please double check
                                                    your address,or contact us if you need any help.
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">$</span>
                                                        325.00
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="checkout-payment">
                                        <ul class="payment_methods">
                                            <li class="payment_method payment_method_transfer_banck">
                                                <input type="radio" class="input-checkbox" checked name="payment-method" id="payment_method_transfer_banck"/>
                                                <label for="payment_method_transfer_banck">
                                                        Direct bank Transfer
                                                </label>
                                            </li>
                                            <li class="payment_method payment_method-cheque">
                                                <input type="radio" class="input-radio" name="payment-method" id="payment_method-cheque"/>
                                                <label for="payment_method-cheque">
                                                    Cheque Payment
                                                </label>
                                            </li>
                                            <li class="payment_method payment_method-paypal">
                                                <input type="radio" class="input-radio" name="payment-method" id="payment_method-paypal"/>
                                                <label for="payment_method-paypal">
                                                    Paypal
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="submit" class="button"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>All rights reserved LOLA</p>
                    <div class="footer-right-div">
                        <a href="returns-exchanges.html">Returns + Exchanges</a>
                        <a href="terms-of-services.html">Terms of service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Shop Cart -->
<div class="cart-wrapper">
    <a href="#" class="shop-cart-close"></a>
    <div class="cart-header">
        <h3 class="shop-cart-title">SHOPPING CART</h3>
        <ul class="shop_table shop_table_cart">
            <li class="cart_item clearfix">
                <div class="product-thumbnail">
                    <a href="shop-details.html"><img src="/simages/Shop/cart-product-thumb-1.jpg" alt="Product 1"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="shop-details.html">the skinny</a>
                    </div>
                    <div class="product-size-color">
                        <span>Small/Blue</span>
                    </div>
                    <div class="product-quantity spinner" data-trigger="spinner">
                        <input type="text" class="qty" value="1" data-rule="quantity"/>
                        <div class="spinner-controls">
                            <a href="javascript:;" data-spin="up" class="spin-up">+</a>
                            <a href="javascript:;" data-spin="down" class="spin-down">-</a>
                        </div>
                    </div>
                    <div class="product-subtotal">
                        <span>$175.00</span>
                    </div>
                </div>
            </li>
            <li class="cart_item clearfix">
                <div class="product-thumbnail">
                    <a href="shop-details.html"><img src="/images/Shop/cart-product-thumb-2.jpg" alt="Product 2"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="shop-details.html">the slouchy</a>
                    </div>
                    <div class="product-size-color">
                        <span>Small/Blue</span>
                    </div>
                    <div class="product-quantity spinner" data-trigger="spinner">
                        <input type="text" class="qty" value="1" data-rule="quantity"/>
                        <div class="spinner-controls">
                            <a href="javascript:;" data-spin="up" class="spin-up">+</a>
                            <a href="javascript:;" data-spin="down" class="spin-down">-</a>
                        </div>
                    </div>
                    <div class="product-subtotal">
                        <span>$150.00</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="cart-footer">
        <div class="cart-wrap-total-checkout clearfix">
            <div class="cart_total clearfix">
                <span class="cart-total-text">Subtotal</span>
                <span class="cart-total">$325.00</span>
            </div>
            <div class="proceed-to-checkout">
                <a href="/checkout" class="checkout-button"><span>Check Out</span></a>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Cart -->

<!-- main JS libs  -->
<script src="<?=base_url('js/lib/jquery-1.12.2.min.js')?>"></script>
<script src="<?=base_url('js/lib/bootstrap.min.js')?>"></script>
<!-- Modernizr Library -->
<script src="<?=base_url('js/lib/modernizr.min.js')?>"></script>

<!--[if lt IE 9]>
<script src="<?=base_url('js/lib/html5shiv.js')?>"></script>
<script src="<?=base_url('js/lib/respond.min.js')?>"></script>
<![endif]-->

<!-- Input Numer 'Spinner' -->
<script src="<?=base_url('js/jquery.spinner.js')?>"></script>
<!-- Selectize plugin -->
<script src="<?=base_url('js/selectize.min.js')?>"></script>
<!-- Check plugin-->
<script src="<?=base_url('js/jquery.customInput.js')?>"></script>
<!--General JS-->
<script src="<?=base_url('js/general.js')?>"></script>
</body>
</html>
