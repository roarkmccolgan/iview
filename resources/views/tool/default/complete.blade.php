@extends('tool.default._layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-1">
                    <h1>{{Lang::get('general.'.session('product.id').'title')}} <small>{{Lang::get('general.'.session('product.id').'sub-title')}}</small></h1>
                </div>
                <div class="col-xs-2" style="text-align: right">
                    <img src="/css/templates/default/img/idclogo.png" alt="">
                </div>
            </div>
        </div>
    </nav>
    <div class="trans">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <h2>The Results are in, your Organization is at:</h2>
                    <h1>{{$heading}}</h2>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="marker" style="left: {{$marker}}%"><i class="fa fa-arrow-down"></i> </div>
                            <div class="progress" style="">
                                <div class="progress-bar progress-bar-act" style="width: 20%">
                                    <span>Time to Act</span>
                                </div>
                                <div class="progress-bar progress-bar-commit" style="width: 20%">
                                    <span>Time to Commit</span>
                                </div>
                                <div class="progress-bar progress-bar-invest" style="width: 20%">
                                    <span>Time to Invest</span>
                                </div>
                                <div class="progress-bar progress-bar-refine" style="width: 20%">
                                    <span>Time to Refine</span>
                                </div>
                                <div class="progress-bar progress-bar-accelerate" style="width: 20%">
                                    <span>Time to Accelerate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="results">
        <div class="container">
            <div class="col-xs-10 col-xs-offset-1">
                <h3>Summary</h3>
                <p>{{$sub1}}</p>
                <strong>
                    {!!trans('general.'.session('product.id').'fullreport')!!}
                </strong><br/>
                <strong>
                    {!!trans('general.'.session('product.id').'provide')!!}
                </strong>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div style="padding: 20px; border:1px solid #EFEFEF; padding-top: 40px; margin-top: 20px;">
                            <div class="row">
                            {{ Form::open(array('url' => '/quiz/complete','id'=>'form-email-report','class'=>'clearfix')) }}
                                <fieldset>
                                    <input type="hidden" value="{{$source['form_source']}}" name="form_source">
                                    
                                    <div class="col-xs-6 form-group{{$errors->has('fname')?' error':''}}">
                                        <label>{!!trans('general.fname')!!}*</label>
                                        <input type="text" class="form-control req" value="{{$source['C_FirstName']?$source['C_FirstName']:''}}" name="fname">
                                        <span>{!!trans('general.errorFname')!!}</span>
                                    </div>
                                    <div class="col-xs-6 form-group{{$errors->has('sname')?' error':''}}">
                                        <label>{!!trans('general.sname')!!}*</label>
                                        <input type="text" class="form-control req" value="{{$source['C_LastName']?$source['C_LastName']:''}}" name="sname">
                                        <span>{!!trans('general.errorSname')!!}</span>
                                    </div>
                                    <div class="col-xs-6 form-group{{$errors->has('email')?' error':''}}">
                                        <label>{!!trans('general.email')!!}*</label>
                                        <input type="text" class="form-control req email" value="{{$source['C_emailAddress']?$source['C_emailAddress']:''}}" name="email">
                                        <span>{!!trans('general.errorEmail')!!}</span>
                                    </div>
                                    <div class="col-xs-6 form-group{{$errors->has('company')?' error':''}}">
                                        <label>{!!trans('general.company')!!}*</label>
                                        <input type="text" value="{{$source['C_Company']?$source['C_Company']:''}}" name="company" class="form-control req">
                                        <span>{!!trans('general.errorCompany')!!}</span>
                                    </div>
                                    <div class="col-xs-12 form-group{{$errors->has('country')?' error':''}}">
                                        <label>{!!trans('general.country')!!}*</label>
                                        <select id="country" name="country" class="form-control sel req">
                                            <option value="">Please select</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
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
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verdian">Cape Verdian</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo Democratic Republic">Congo Democratic Republic</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="CÃ´te d Ivoire">CÃ´te d Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands Malvinas">Falkland Islands Malvinas</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
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
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and McDonald">Heard and McDonald</option>
                                            <option value="Holy See Vatican City State">Holy See Vatican City State</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea Democratic Peoples Rep">Korea Democratic Peoples Rep</option>
                                            <option value="Korea Republic">Korea Republic</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia Federated States">Micronesia Federated States</option>
                                            <option value="Moldavia">Moldavia</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="North Mariana">North Mariana</option>
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
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                            <option value="Saint Vincent and Grenadines">Saint Vincent and Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and Sandwich IS">South Georgia and Sandwich IS</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania United Republic">Tanzania United Republic</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor Leste">Timor Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands British">Virgin Islands British</option>
                                            <option value="Virgin Islands US">Virgin Islands US</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        @if($source['C_Country'])
                                        <script>
                                        var element = document.getElementById('country');
                                        element.value = '{{$source['C_Country']}}';
                                        </script>
                                        @endif
                                        <span>{!!trans('general.errorCountry')!!}</span>
                                    </div>
                                    <div class="col-xs-6 form-group">
                                        <label>{!!trans('general.phone')!!}</label>
                                        <input class="form-control" type="text" value="{{$source['C_BusPhone']?$source['C_BusPhone']:''}}" name="phone">
                                        <span>{!!trans('general.errorNumber')!!}</span>
                                    </div>
                                    <div class="col-xs-12 checkbox">
                                        <label class="checkbox{{$errors->has('terms')?' error':''}}">
                                            <input type="checkbox" class="req" name="terms">
                                            {!!trans('general.accept')!!} 
                                        </label>
                                        <p class="help-block" style="margin-top: 10px;">
                                            <strong>{!!trans('general.terms')!!} *</strong><br/>
                                            {!!trans('general.'.session('product.id').'byreg')!!}
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <em>* {!!trans('general.required')!!}</em>
                                    </div>
                                    <div class="col-xs-12">
                                        <a class="btn btn-lg btn-primary pull-right {{$btnclass}}" href="download"><i class="icon-email"></i> {!!trans('general.emailreport')!!}</a>
                                    </div>
                                </fieldset>
                            {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pagescript')
@parent

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@if (isset($script))
<script>
$(function() {
    @foreach ($script as $s)
       {{ $s }}
    @endforeach
});
</script>
@endif
@stop
