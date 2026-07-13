@extends('frontend.layouts.app')
@section('content')
@php
        $display = '1'; // Default: desktop

$useragent = $_SERVER['HTTP_USER_AGENT'];

// Tablet check first
if (
    preg_match('/ipad|tablet|playbook|silk|kindle|(android(?!.*mobile))/i', $useragent)
) {
    $display = '2'; // Tablet
}
// Then mobile phone check
elseif (
    preg_match('/android|bb\d+|meego.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|iphone|ipod|iris|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent)
) {
    $display = '0'; // Mobile
}
  
    @endphp
<style>
    #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
.wpb_wrapper {
    border: 6px solid #f3f3f3;
    padding: 10px 5px;
    text-align: center;
    min-height: 275px;
}

.explore_now, .category_name{
    color: #0530AD;
    margin-top:10px;
}
.support_team{
    background-color: #0046AE;
    color: #FFFFFF;
    padding: 50px;
}
.tenders{
    background-color: #00398E;
    color: #FFFFFF;
    padding: 50px;
}
.dealership{
    background-color: #002761;
    color: #FFFFFF;
    padding: 50px;
}
.contact_us{
    background-color: #01193D;
    color: #FFFFFF;
    padding: 50px;
}
.ref_icons {
    border-radius: 50%;
    border: 1px solid #E8E8E8;
    width: 80px;
    height: 80px;
    padding: 6px;
    position: absolute;
    margin-top: -15px;
    margin-left: 70px;
}
#contact_details{
    margin-top: 30px;
}
#arrows{
    margin-top:30px;
}
.aboutus{
    display: inline-grid;
    margin-left: 16px;
    vertical-align: middle;
}
.li-icon{
    list-style-image: url({{ asset('assets/images/li.png') }})
}
.info {
    border: 1px solid #D0D0D0;
    padding: 10px;
    margin-top: 30px;
}
.brd-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 501px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 590px;
}
.desktop_view{
        display: none;
    }
    .related_product{
           text-align: center;
            
        }
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {
   .brd-heading{
    margin-top: 120px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 80px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 90px;
}
    .mobile_view{
        display: none;
    }
    .desktop_view{
        display: contents;
    }
    .product_name{
        text-align:left !important;
    }
    .related_product{
           text-align: center;
            flex:40%;
            
        }         
}    

@media only screen and (max-width: 600px) {
    .brd-heading{
    margin-top: 120px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 80px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 90px;
}
    .mobile_view{
        display: none;
    }
    .desktop_view{
        display: contents;
    }
    .product_name{
        text-align:left !important;
    }
    .related_product{
           text-align: center;
            flex:40%;
            
        }
}
.about_scientific.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg.png') }});
    min-height:300px;
    background-color:#000;
}
.contactus{
    margin-left: 50px;
}
@media only screen and (max-width: 600px) {
.contactus{
    margin-left: 10px;
}
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg_mob.png') }}) no-repeat;
    min-height:300px;
    background-color:#000;
    background-size: cover;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: baseline;
     text-align: unset; 
    letter-spacing: 0.01em;
    color: #515151;
}
}
</style>

<div class="breadcrumb-wrapper" >
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Home / Contact US</span></a></span>
                                    
                                </div>
                            </div>
                        </div>
<div class="container mt-5 p-3">
    <div class="row">
        <div class="<?php if($display==2) echo 'col-md-12'; else echo 'col-md-6'; ?>">
            <h2 class="anek-bangla category_name">GET IN TOUCH</h2>
            <div style="display: <?php if( $display==1) echo "flex"; else echo "flex"; ?>;">
            <div class="col-md-6">
                <div style="float: left;">
                    <img src="{{ asset('assets/images/footer_loc.png') }}">
                </div> <div class="contactus "><h4 class="about_scientific inter">Head Office:</h4> #5309, Grain Market,<br> Ambala Cantt,<br> 133001, HR, India</div>
            </div>
            <div class="col-md-6">
                <div style="float: left;">
                    <img src="{{ asset('assets/images/footer_loc.png') }}">
                </div> <div class="contactus">
                <h4 class="about_scientific inter">Factory Address:</h4> 274, Sector-II,<br> Industrial Growth Center,<br>HSIIDC, Saha,<br> HR, India
                </div>
            </div>
            </div>
            <div style="display: flex;" class="mt-4">
            <div class="col-md-6">
                <div style="float: left;">
                    <img src="{{ asset('assets/images/footer_mail.png') }}">
                </div> <div class="contactus">
                <h4 class="about_scientific inter">Email Address:</h4> <a  href="mailto:sales@aticoscientific.com" style="font-weight: 600;font-size: 13px;">sales@aticoscientific.com</a>
                </div>
            </div>
            <div class="col-md-6">
                <div style="float: left;">
                    <img src="{{ asset('assets/images/footer_call.png') }}">
                </div> <div class="contactus">
                <h4 class="about_scientific inter">Phone Number:</h4>  <p>Technical Support:<br> <a href="tel:+919996186555">+91-999-618-6555</a></p>
            <p>Business Development Inquiries:<br> <a href="tel:+919896783832">+91-989-678-3832</a></p>
        </div>
            </div>
            </div>
           
        </div>
        <div class="<?php if($display==2) echo 'col-md-12'; else echo 'col-md-6'; ?>">
            <div class="row">
          <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
          </div>
        </div>
            <form method="post" enctype="multipart/form-data" action="{{route('enquiry.store')}}">
                @csrf
            <h2 class="anek-bangla category_name">DROP US A MESSAGE</h2>
            <div class="row" >
                <div class="col-md-12" style="display: flex;">
                <div class="col-md-6">
                    <input type="text" placeholder="First Name*" name="name"    required class="form-control" style="width:90%">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Email*" name="email" required class="form-control" style="width:90%">
                </div>
            </div>
            </div>
             <div class="row mt-4" >
                <div class="col-md-12" style="display: flex;">
                <div class="col-md-6" >
                    <input type="text" placeholder="Mobile Number*" name="mobile_no" required class="form-control" style="width:90%">
                </div>
                <div class="col-md-6">
                    @if($display==1)
                    <select required="true" name="country" style="width:90%" class="form-control" >
                    <option value="" >Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas The">Bahamas The</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo The Democratic Republic Of The">Congo The Democratic Republic Of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="External Territories of Australia">External Territories of Australia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji Islands">Fiji Islands</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia The">Gambia The</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey and Alderney">Guernsey and Alderney</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong S.A.R.">Hong Kong S.A.R.</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea South">Korea South</option>
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
                                        <option value="Macau S.A.R.">Macau S.A.R.</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Man (Isle of)">Man (Isle of)</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="Netherlands The">Netherlands The</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua new Guinea">Papua new Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Smaller Territories of the UK">Smaller Territories of the UK</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                                        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                      </select>

                                      @else
                                      <input type="text" name="country" class="form-control" required style="width: 90%;" placeholder="Enter Country *">

                                      @endif    
                </div>
            </div>
            </div>
            <div class="mt-4">
                <div class="col-md-12">
                   <textarea class="form-control" name="message" required rows="5" style="width:95%" placeholder="How Can we Help?"></textarea>
                </div>
               
            </div>
             <div style="display: flex;" class="mt-4">
                <div class="col-md-12">
                   <input type="file" name="file_name" class="form-control" style="width:95%">
                </div>
               
            </div>
            <div style="display: flex;" class="mt-4">
                <div class="col-md-12">
                   <input type="submit" class="btn btn-primary" value="Send Message" style="background: #0530AD;">
                </div>
               
            </div>
        </form>
        </div>
    </div>
</div>                     
<script>
    $(".toggle").click(function(){
        if($(".accordion").hasClass("mobile_view"))
            $(".accordion").removeClass("mobile_view");
        else
            $(".accordion").addClass("mobile_view")
    });
</script>
@endsection