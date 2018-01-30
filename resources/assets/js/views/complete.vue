<template>
	<div class="flex-grow">
		<div class="container mx-auto bg-white border-t border-b mt-6 mb-4 py-4 px-4 sm:border sm:rounded shadow text-grey-darker">
			<h1 class="font-light leading-tight">{{assessment.tool.title}}</h1>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<h2 class="font-light leading-tight mb-4">Thank you for completing the network maturity assessment.</h2>
					<h4 class="font-light leading-tight mb-2">How you scored</h4>
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/graph2.png'" alt="">
					<p class="font-semibold mb-4">Please tell us a little about yourself and immediately receive your personalized report including:</p>
					<ul class="mb-4">
						<li>How you compare against your peers based on industry, organizational size, and geographic region</li>
						<li>Where to focus your network readiness efforts with essential guidance</li>
						<li>Why the associated business benefits will make this a business priority today</li>
					</ul>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<div>
							<h2 class="flex justify-start p-2 bg-ntt-blue text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div>Register now to receive your personalized report</div>
							</h2>
							<div class="flex flex-wrap bg-white shadow-md rounded rounded-t-none px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
											First Name
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
										<p class="text-red text-xs italic">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
											Last Name
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
											Email
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="email" placeholder="">
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
											Phone
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="tel" placeholder="">
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
											Company
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-company" type="text" placeholder="">
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
											Position
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-position" type="text" placeholder="">
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
											Company Business
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
												<option>Banking and other financial services (brokers, asset managers, stock exchanges, etc)</option>
												<option>Insurance (life, healthcare, property and casualty, other insurance) </option>
												<option>Retail Trade (includes food and non-food retailers. Apparel, Consumer Electronics, DIY, Eating/drinking establishments, drug stores, automotive dealers, online retailers, etc..)</option>
												<option>...</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
											Company Size
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
												<option>Fewer than 500 </option>
												<option>500 to 999</option>
												<option>1,000 to 4,999</option>
												<option>5,000 or more</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-6 w-full">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
											Country
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
												<option>United Kingdom</option>
												<option>Germany</option>
												<option>France</option>
												<option>...</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="terms ? activeClass : normalClass" tabindex="0" @keyup.space="$event.target.click()">
										<input class="hidden" type="checkbox" name="terms" value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
													<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
													<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow">
												By registering with IDC, you accept our Privacy Policy and NTT Communications Privacy Policy.
											</div>
										</div>
									</label>
								</div>
								<div class="mb-6 w-full">
									<a href="/downloads/NTT-output-report.pdf" target="_blank" class="text-center block bg-ntt-blue hover:text-ntt-gold shadow-md text-white py-4 px-6 rounded no-underline"><font-awesome-icon class="ml-2" :icon="icons.faEnvelope"></font-awesome-icon> Send</a>
								</div>
							</div>
						</div>
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
export default{
	data() {
		return {
			assessment: laravel,
			icons: {
				faEnvelope: faEnvelope,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
			},
			terms: false,
			normalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'bg-white': true,
				'border': true,
				'shadow': true,
				'hover:bg-grey-lighter': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-ntt-blue': true,
				'bg-yellow-lighter': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			}
		}
	},
	computed: {
		
	},
	components: {
		FontAwesomeIcon,
	},
	created: function(){
		
	}
}
</script>