
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<div class="" v-html="$t('ibmcloud.finishtxt', { stage: $t('ibmcloud.'+rating)})"></div>
					<!-- <div v-for="sec, key in theResult">
						<div class="font-bold">{{ key }}</div>
						<div class="">score: {{ sec.score }}</div>
						<div class="mb-4">rating: {{ sec.rating }}</div>
					</div>
					<div class="flex font-bold">
						<span class="inline-block mr-2">question;</span>
						<span class="inline-block mr-2">section;</span>
						<span class="inline-block mr-2">calc;</span>
						<span class="inline-block mr-2">answers;</span>
						<span class="inline-block mr-2">values;</span>
						<span class="inline-block mr-2">score</span>
					</div>
					<div class="flex mb-8" v-for="(scores, res) in theScores">
						<span class="inline-block mr-2">{{res}};</span>
						<span class="inline-block mr-2" v-html="scores.section+';'"></span>
						<span class="inline-block mr-2">{{ scores.calc }};</span>
						<span class="inline-block mr-2" v-if="scores.answers">{{ scores.answers.join(",\n") }};</span>
						<span class="inline-block mr-2" v-if="scores.ave">{{ scores.ave.join() }};</span>
						<span class="inline-block mr-2" v-else-if="scores.norm">{{ scores.norm.join() }};</span>
						<span class="inline-block mr-2" v-else-if="scores.sum">{{ scores.sum.join() }};</span>
						<span class="inline-block mr-2" v-else>{{ scores.val }};</span>
						<span class="inline-block mr-2">{{ scores.val }}</span>
					</div> -->
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-blackblack text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('ibmcloud.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-black px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="fname">
											{{ $t('ibmcloud.leadgen.fname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('ibmcloud.leadgen.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="sname">
											{{ $t('ibmcloud.leadgen.sname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('ibmcloud.leadgen.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="email">
											{{ $t('ibmcloud.leadgen.email') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('ibmcloud.leadgen.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="position">
											{{ $t('ibmcloud.leadgen.title') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.title ? 'border-red' : '']" id="title" name="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.title" v-html="$t('ibmcloud.leadgen.errorTitle')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<input type="hidden" id="tel" name="phone" :value="completeNumber">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="tel">
											{{ $t('ibmcloud.leadgen.phone_code') }}
										</label>
										<div class="inline-block relative">
											<select class="block appearance-none w-full bg-grey-dark border text-black border py-3 px-4 mb-2" :class="[errors.phone_code ? 'border-red' : '']" v-model="phone_code" ref="phone_code" id="phone_code" name="phone_code" @blur="hasError">
												<option value="" v-html="$t('ibmcloud.leadgen.pleaseselect')"></option>
												<option data-countryCode="DK" value="45">Denmark (+45)</option>
												<option data-countryCode="FI" value="358">Finland (+358)</option>
												<option data-countryCode="NO" value="47">Norway (+47)</option>
												<option data-countryCode="SE" value="46">Sweden (+46)</option>
												<option value="">-----</option>
												<option data-countryCode="DZ" value="213">Algeria (+213)</option>
												<option data-countryCode="AD" value="376">Andorra (+376)</option>
												<option data-countryCode="AO" value="244">Angola (+244)</option>
												<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
												<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
												<option data-countryCode="AR" value="54">Argentina (+54)</option>
												<option data-countryCode="AM" value="374">Armenia (+374)</option>
												<option data-countryCode="AW" value="297">Aruba (+297)</option>
												<option data-countryCode="AU" value="61">Australia (+61)</option>
												<option data-countryCode="AT" value="43">Austria (+43)</option>
												<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
												<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
												<option data-countryCode="BH" value="973">Bahrain (+973)</option>
												<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
												<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
												<option data-countryCode="BY" value="375">Belarus (+375)</option>
												<option data-countryCode="BE" value="32">Belgium (+32)</option>
												<option data-countryCode="BZ" value="501">Belize (+501)</option>
												<option data-countryCode="BJ" value="229">Benin (+229)</option>
												<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
												<option data-countryCode="BT" value="975">Bhutan (+975)</option>
												<option data-countryCode="BO" value="591">Bolivia (+591)</option>
												<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
												<option data-countryCode="BW" value="267">Botswana (+267)</option>
												<option data-countryCode="BR" value="55">Brazil (+55)</option>
												<option data-countryCode="BN" value="673">Brunei (+673)</option>
												<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
												<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
												<option data-countryCode="BI" value="257">Burundi (+257)</option>
												<option data-countryCode="KH" value="855">Cambodia (+855)</option>
												<option data-countryCode="CM" value="237">Cameroon (+237)</option>
												<option data-countryCode="CA" value="1">Canada (+1)</option>
												<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
												<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
												<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
												<option data-countryCode="CL" value="56">Chile (+56)</option>
												<option data-countryCode="CN" value="86">China (+86)</option>
												<option data-countryCode="CO" value="57">Colombia (+57)</option>
												<option data-countryCode="KM" value="269">Comoros (+269)</option>
												<option data-countryCode="CG" value="242">Congo (+242)</option>
												<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
												<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
												<option data-countryCode="HR" value="385">Croatia (+385)</option>
												<option data-countryCode="CU" value="53">Cuba (+53)</option>
												<option data-countryCode="CY" value="90">Cyprus - North (+90)</option>
												<option data-countryCode="CY" value="357">Cyprus - South (+357)</option>
												<option data-countryCode="CZ" value="420">Czech Republic (+420)</option>
												<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
												<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
												<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
												<option data-countryCode="EC" value="593">Ecuador (+593)</option>
												<option data-countryCode="EG" value="20">Egypt (+20)</option>
												<option data-countryCode="SV" value="503">El Salvador (+503)</option>
												<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
												<option data-countryCode="ER" value="291">Eritrea (+291)</option>
												<option data-countryCode="EE" value="372">Estonia (+372)</option>
												<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
												<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
												<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
												<option data-countryCode="FJ" value="679">Fiji (+679)</option>
												<option data-countryCode="FR" value="33">France (+33)</option>
												<option data-countryCode="GF" value="594">French Guiana (+594)</option>
												<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
												<option data-countryCode="GA" value="241">Gabon (+241)</option>
												<option data-countryCode="GM" value="220">Gambia (+220)</option>
												<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
												<option data-countryCode="DE" value="49">Germany (+49)</option>
												<option data-countryCode="GH" value="233">Ghana (+233)</option>
												<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
												<option data-countryCode="GR" value="30">Greece (+30)</option>
												<option data-countryCode="GL" value="299">Greenland (+299)</option>
												<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
												<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
												<option data-countryCode="GU" value="671">Guam (+671)</option>
												<option data-countryCode="GT" value="502">Guatemala (+502)</option>
												<option data-countryCode="GN" value="224">Guinea (+224)</option>
												<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
												<option data-countryCode="GY" value="592">Guyana (+592)</option>
												<option data-countryCode="HT" value="509">Haiti (+509)</option>
												<option data-countryCode="HN" value="504">Honduras (+504)</option>
												<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
												<option data-countryCode="HU" value="36">Hungary (+36)</option>
												<option data-countryCode="IS" value="354">Iceland (+354)</option>
												<option data-countryCode="IN" value="91">India (+91)</option>
												<option data-countryCode="ID" value="62">Indonesia (+62)</option>
												<option data-countryCode="IQ" value="964">Iraq (+964)</option>
												<!-- <option data-countryCode="IR" value="98">Iran (+98)</option> -->
												<option data-countryCode="IE" value="353">Ireland (+353)</option>
												<option data-countryCode="IL" value="972">Israel (+972)</option>
												<option data-countryCode="IT" value="39">Italy (+39)</option>
												<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
												<option data-countryCode="JP" value="81">Japan (+81)</option>
												<option data-countryCode="JO" value="962">Jordan (+962)</option>
												<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
												<option data-countryCode="KE" value="254">Kenya (+254)</option>
												<option data-countryCode="KI" value="686">Kiribati (+686)</option>
												<!-- <option data-countryCode="KP" value="850">Korea - North (+850)</option> -->
												<option data-countryCode="KR" value="82">Korea - South (+82)</option>
												<option data-countryCode="KW" value="965">Kuwait (+965)</option>
												<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
												<option data-countryCode="LA" value="856">Laos (+856)</option>
												<option data-countryCode="LV" value="371">Latvia (+371)</option>
												<option data-countryCode="LB" value="961">Lebanon (+961)</option>
												<option data-countryCode="LS" value="266">Lesotho (+266)</option>
												<option data-countryCode="LR" value="231">Liberia (+231)</option>
												<option data-countryCode="LY" value="218">Libya (+218)</option>
												<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
												<option data-countryCode="LT" value="370">Lithuania (+370)</option>
												<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
												<option data-countryCode="MO" value="853">Macao (+853)</option>
												<option data-countryCode="MK" value="389">Macedonia (+389)</option>
												<option data-countryCode="MG" value="261">Madagascar (+261)</option>
												<option data-countryCode="MW" value="265">Malawi (+265)</option>
												<option data-countryCode="MY" value="60">Malaysia (+60)</option>
												<option data-countryCode="MV" value="960">Maldives (+960)</option>
												<option data-countryCode="ML" value="223">Mali (+223)</option>
												<option data-countryCode="MT" value="356">Malta (+356)</option>
												<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
												<option data-countryCode="MQ" value="596">Martinique (+596)</option>
												<option data-countryCode="MR" value="222">Mauritania (+222)</option>
												<option data-countryCode="YT" value="269">Mayotte (+269)</option>
												<option data-countryCode="MX" value="52">Mexico (+52)</option>
												<option data-countryCode="FM" value="691">Micronesia (+691)</option>
												<option data-countryCode="MD" value="373">Moldova (+373)</option>
												<option data-countryCode="MC" value="377">Monaco (+377)</option>
												<option data-countryCode="MN" value="976">Mongolia (+976)</option>
												<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
												<option data-countryCode="MA" value="212">Morocco (+212)</option>
												<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
												<option data-countryCode="MN" value="95">Myanmar (+95)</option>
												<option data-countryCode="NA" value="264">Namibia (+264)</option>
												<option data-countryCode="NR" value="674">Nauru (+674)</option>
												<option data-countryCode="NP" value="977">Nepal (+977)</option>
												<option data-countryCode="NL" value="31">Netherlands (+31)</option>
												<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
												<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
												<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
												<option data-countryCode="NE" value="227">Niger (+227)</option>
												<option data-countryCode="NG" value="234">Nigeria (+234)</option>
												<option data-countryCode="NU" value="683">Niue (+683)</option>
												<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
												<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
												<option data-countryCode="OM" value="968">Oman (+968)</option>
												<option data-countryCode="PK" value="92">Pakistan (+92)</option>
												<option data-countryCode="PW" value="680">Palau (+680)</option>
												<option data-countryCode="PA" value="507">Panama (+507)</option>
												<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
												<option data-countryCode="PY" value="595">Paraguay (+595)</option>
												<option data-countryCode="PE" value="51">Peru (+51)</option>
												<option data-countryCode="PH" value="63">Philippines (+63)</option>
												<option data-countryCode="PL" value="48">Poland (+48)</option>
												<option data-countryCode="PT" value="351">Portugal (+351)</option>
												<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
												<option data-countryCode="QA" value="974">Qatar (+974)</option>
												<option data-countryCode="RE" value="262">Reunion (+262)</option>
												<option data-countryCode="RO" value="40">Romania (+40)</option>
												<option data-countryCode="RU" value="7">Russia (+7)</option>
												<option data-countryCode="RW" value="250">Rwanda (+250)</option>
												<option data-countryCode="SM" value="378">San Marino (+378)</option>
												<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
												<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
												<option data-countryCode="SN" value="221">Senegal (+221)</option>
												<option data-countryCode="CS" value="381">Serbia (+381)</option>
												<option data-countryCode="SC" value="248">Seychelles (+248)</option>
												<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
												<option data-countryCode="SG" value="65">Singapore (+65)</option>
												<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
												<option data-countryCode="SI" value="386">Slovenia (+386)</option>
												<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
												<option data-countryCode="SO" value="252">Somalia (+252)</option>
												<option data-countryCode="ZA" value="27">South Africa (+27)</option>
												<option data-countryCode="ES" value="34">Spain (+34)</option>
												<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
												<option data-countryCode="SH" value="290">St. Helena (+290)</option>
												<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
												<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
												<option data-countryCode="SR" value="597">Suriname (+597)</option>
												<option data-countryCode="SD" value="249">Sudan (+249)</option>
												<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
												<option data-countryCode="CH" value="41">Switzerland (+41)</option>
												<option data-countryCode="TW" value="886">Taiwan (+886)</option>
												<option data-countryCode="TJ" value="992">Tajikistan (+992)</option>
												<option data-countryCode="TH" value="66">Thailand (+66)</option>
												<option data-countryCode="TG" value="228">Togo (+228)</option>
												<option data-countryCode="TO" value="676">Tonga (+676)</option>
												<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
												<option data-countryCode="TN" value="216">Tunisia (+216)</option>
												<option data-countryCode="TR" value="90">Turkey (+90)</option>
												<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
												<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
												<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
												<option data-countryCode="UG" value="256">Uganda (+256)</option>
												<option data-countryCode="UA" value="380">Ukraine (+380)</option>
												<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
												<option data-countryCode="GB" value="44">United Kingdom (+44)</option>
												<option data-countryCode="UY" value="598">Uruguay (+598)</option>
												<option data-countryCode="US" value="1">USA (+1)</option>
												<option data-countryCode="UZ" value="998">Uzbekistan (+998)</option>
												<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
												<option data-countryCode="VA" value="379">Vatican City (+379)</option>
												<option data-countryCode="VE" value="58">Venezuela (+58)</option>
												<option data-countryCode="VN" value="84">Vietnam (+84)</option>
												<option data-countryCode="VG" value="1">Virgin Islands - British (+1)</option>
												<option data-countryCode="VI" value="1">Virgin Islands - US (+1)</option>
												<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
												<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
												<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
												<option data-countryCode="ZM" value="260">Zambia (+260)</option>
												<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.phone_code" v-html="$t('ibmcloud.leadgen.errorPhoneCode')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="phone_number">
											{{ $t('ibmcloud.leadgen.phone') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.phone_number ? 'border-red' : '']" v-model="phone_number" ref="phone_number" id="phone_number" name="phone_number" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.phone_number" v-html="$t('ibmcloud.leadgen.errorPhone')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="company">
											{{ $t('ibmcloud.leadgen.company') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="company" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company" v-html="$t('ibmcloud.leadgen.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="country">
											{{ $t('ibmcloud.leadgen.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-black py-3 px-4 pr-8" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option value="" v-html="$t('ibmcloud.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('ibmcloud.leadgen.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 w-full p-2 bg-white leading-tight">
									<p v-html="$t('ibmcloud.marketing')"></p>
									<label class="my-2" :class="[marketingPhone ? activeClass : normalClass, errors.marketingPhone ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" >
										<input class="hidden" type="checkbox" id="marketingPhone" name="extra[marketing_phone]" v-model="marketingPhone">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!marketingPhone" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('ibmcloud.marketing-phone')"></div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.marketingPhone" v-html="$t('general.errorMarketingPhone')"></p>
									</label>
									<label class="my-2" :class="[marketingEmail ? activeClass : normalClass, errors.marketingEmail ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" >
										<input class="hidden" type="checkbox" id="marketingEmail" name="extra[marketing_email]" v-model="marketingEmail">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!marketingEmail" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('ibmcloud.marketing-email')"></div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.marketingEmail" v-html="$t('general.errorMarketingEmail')"></p>
									</label>
									<p class="text-sm mt-2" v-html="$t('ibmcloud.marketing-1')"></p>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" name="terms" black value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('ibmcloud.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('ibmcloud.leadgen.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-ibm-blue hover:bg-white text-white hover:text-blackblack py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('ibmcloud.leadgen.send') }}</button>
									<!-- <a href="#" disabled class="text-center block bg-ibm-blue hover:bg-white text-white hover:text-blackblack py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent=""><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('ibmcloud.leadgen.send') }}</a> -->
								</div>
							</div>
						</form>
					</div>
						
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faEnvelope from '@fortawesome/fontawesome-pro-regular/faEnvelope';
import faSquare from '@fortawesome/fontawesome-pro-regular/faSquare';
import faCheckSquare from '@fortawesome/fontawesome-pro-regular/faCheckSquare';
import faSyncAlt from '@fortawesome/fontawesome-pro-regular/faSyncAlt';
export default{
	props: ['result','scores'],
	data () {
		return {
			assessment: laravel,
			icons: {
				faEnvelope: faEnvelope,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
				faSyncAlt: faSyncAlt,
			},
			marketing: false,
			marketingPhone: false,
			marketingEmail: false,
			phone_code: '',
			phone_number: '',
			terms: false,
			normalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'bg-white': true,
				'border': true,
				'shadow': true,
				'hover:bg-grey-dark': true,
				'hover:text-white': true,
				'py-2': true,
				'px-3': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-white': true,
				'bg-grey-dark': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			errors: {
				fname: false,
				sname: false,
				email: false,
				tel: false,
				phone_number: false,
				phone_code: false,
				company: false,
				title: false,
				country: false,
				terms: false,
				marketing: false
			},
			theResult: this.result ? this.result : laravel.result,
			theScores: this.scores ? this.scores : laravel.scores,
			isSubmitting: false,
		}
	},
	computed: {
		rating: function(){
			return this.theResult ? this.theResult.overall.rating : 'none';
		},
		getToken: function(){
			return this.$cookies.get('XSRF-TOKEN');
		},
		completeNumber: function(){
			return this.phone_code +' '+this.phone_number;
		}
	},
	methods: {
		hasError: function(event){
			if(event.target.type == "text" || event.target.type == "email"){
				if(event.target.value == ''){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
			if(event.target.type == "tel"){
				var numIntegers = event.target.value.replace(/[^0-9]/g,"").length;
				if(event.target.value == '' || numIntegers < 5){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
			
			if(event.target.type == "select-one"){
				if(event.target.options[event.target.selectedIndex].value == '' || event.target.options[event.target.selectedIndex].value == null || event.target.options[event.target.selectedIndex].value == "null"){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}

			if(event.target.type == "checkbox"){
				console.log(event.target.checked);
				if(event.target.checked === false){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
		},
		checkTerms: function(){
			console.log(document.getElementById('terms').checked);
			this.errors.terms = !document.getElementById('terms').checked;
		},
		checkMarketing: function(){
			this.errors.marketing = !document.getElementById('marketing').checked;
		},
		checkForErrors: function(){

			var errors = false;
			for (var key in this.errors) {
		        var element = document.getElementById(key);
		        if(element !== null){
		        	var event = {
		        		target: element
		        	}
		        	this.hasError(event);
		        }
			}
			for (var key in this.errors) {
				if(this.errors[key]===true){
					errors = true;
					break;
				}
			}
			if(errors == false){
				this.isSubmitting = true;
				document.getElementById('leadForm').submit();
			}
		}
	},
	components: {
		FontAwesomeIcon,
	},
	created: function(){}
}
</script>