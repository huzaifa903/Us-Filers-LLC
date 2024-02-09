@extends('usfiler_layout.master')
@section('content')

<main class="content bg-top-center bg-cover" id="lqd-site-content"
			style="background-image: url(./asset/images/demo/modern-agency/bg.jpg);">
			<div id="lqd-contents-wrap">

				<!-- Start Banner Image -->
				<section class="lqd-section banner-image z-1" id="banner">
					<div class="flex relative">
						<div class="module-img absolute ltr-right-0 top-100 w-710">
							<div class="lqd-imggrp-single block relative">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
									<figure class="w-full relative">
										<img width="2036" height="2018" src="{{ url('asset/images/llc/LLC.webp')}}"
											alt="banner image">
									</figure>
								</div>
							</div>
						</div>
						<div class="module-btn absolute w-auto">
							<a href="#"
								class="text-14 btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-icon-block btn-icon-top btn-icon-circle btn-icon-xl btn-icon-shaped btn-icon-bordered btn-icon-border-thickest btn-icon-ripple btn-no-label"
								target="_blank" rel="nofollow">
								<span class="btn-icon text-white">
									<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-play"></i>
								</span>
							</a>
						</div>
					</div>
				</section>
				<!-- End Banner Image -->

				<!-- Start Banner -->
				<section class="lqd-section banner">
					<div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
						<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner"
							data-particles="true"
							data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#ef6b16", "#16588e", "#ef6b16", "#ef6b16"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'>
						</div>
					</div>
					<div class="container">
						<div class="row h-vh-100 items-center sm:h-auto">
							<div class="w-50percent lg:w-70percent sm:w-full p-0">
								<div class="w-full flex flex-col items-start bg-no-repeat pt-75 px-15 pb-50 module-bg"
									style="background-image: url('./asset/images/demo/modern-agency/shape-lines-circle.svg');">
									<div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100"
										data-custom-animations="true"
										data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
										<h6 class="ld-fh-element relative lqd-split-lines text-capitalize m-0 py-10 px-20"
											data-split-text="true" data-split-options='{"type":"lines"}'> Free LLC
											Filing + State Fee</h6>
									</div>
									<div class="ld-fancy-heading relative" data-custom-animations="true"
										data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 250, "delay" : 180, "ease": "power4.out", "initValues": {"y": "30px", "z": "-130px", "rotationX" : -75, "opacity" : 0} , "animations": {"y": "0px", "z": "0px", "rotationX" : 0, "opacity" : 1}}'>
										<h1 class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines -tracking-1"
											data-inview="true" data-transition-delay="true"
											data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
											data-split-text="true" data-split-options='{"type": "lines"}'>
											<span>We’ll help you set up</span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">Your LLC</span>
												<span class="lqd-highlight-inner"></span>
											</mark> in just a few minutes
										</h1>
									</div>
									<div class="w-full">
										<div class="ld-fancy-heading relative mask-text module-text"
											data-custom-animations="true"
											data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 850, "delay" : 180, "ease": "power4.out", "initValues": {"y": "65px"} , "animations": {"y": "0px"}}'>
											<p class="ld-fh-element mb-0/5em inline-block relative text-20 leading-1/5em lqd-split-lines"
												data-split-text="true" data-split-options='{"type": "lines"}'>Join Over
												1,000,000 Businesses Launched With Bizee Since 2004<br> No Commitment
												Until You Are Ready</p>
										</div>

									</div>
									<div class="spacer w-full">
										<div class="w-full h-10"></div>
									</div>
									<div class="pt-35 flex items-center" data-custom-animations="true"
										data-ca-options='{"animationTarget": ".banner .module-btn", "duration" : 1800, "startDelay" : 1200, "delay" : 180, "ease": "power4.out", "initValues": {"z": "-70px", "rotationX" : -90, "opacity" : 0} , "animations": {"z": "0px", "rotationX" : 0, "opacity" : 1}}'>
										<div class="w-full flex items-center module-btn sm:flex-wrap">
											<a href="{{ url('/select-package') }}"
												class="btn font-bold text-14 uppercase tracking-1/5 whitespace-nowrap btn-solid btn-xl btn-icon-right btn-hover-reveal mr-40 rounded-100 text-white bg-primary hover:bg-accent"
												data-localscroll="true">
												<span class="btn-txt" data-text="Get Started">Get Started</span>
												<span class="btn-icon">
													<i aria-hidden="true"
														class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
												</span>
											</a>
											<div class="ld-fancy-heading relative">
												<p class="text-14 m-0 p-0 ld-fh-element relative">
													<span class="text-black">Hotline: <span class="text-primary">(733)
															860-2906</span></span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="w-30percent p-0 sm:w-full"></div>
						</div>
					</div>
				</section>
				<!-- End Banner -->

				<!-- Start Clients -->
				<!-- <section class="lqd-section clients pb-40" id="clients">
					<div class="container">
						<div class="row items-center text-center">
							<div class="col col-12 p-0">
								<div class="ld-fancy-heading relative">
									<p
										class="ld-fh-element relative text-11 font-bold uppercase mb-3/5em tracking-0/1 text-blue-900">
										Join the 10.000+ companies trusting HUB</p>
								</div>
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-dropcam.svg" alt="clients">
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-amazon.svg" alt="clients">
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-cisco.svg" alt="clients">
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-amd-logo.svg" alt="clients">
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-logitech.svg" alt="clients">
							</div>
							<div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
								<img src="./assets/images/demo/modern-agency/client-spotify.svg" alt="clients">
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Clients -->

				<!-- Start About -->
				<section class="lqd-section about pt-40" id="about">
					<div class="container">
						<div class="row text-center">
							<div class="col col-md-10 offset-md-1 mb-60 p-0 module-first">
								<div class="w-full flex flex-col items-center">
									<div class="ld-fancy-heading relative">
										<h6 class="mb-1em ld-fh-element relative">Why Choose US Filers?</h6>
									</div>
									<div class="ld-fancy-heading relative">
										<h2 class="ld-fh-element mb-0/5em inline-block relative">We Make Starting Your
											LLC Easy</h2>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-4">
								<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default mb-30">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container inline-flex mb-55 text-86">
											<svg class="w-1em" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="86.895" height="87"
												viewbox="0 0 86.895 87">
												<defs>
													<lineargradient id="fill-1" x1="0.5" x2="0.5" y2="1"
														gradientunits="objectBoundingBox">
														<stop offset="0" stop-color="#fb9e44"></stop>
														<stop offset="1" stop-color="#f57452"></stop>
													</lineargradient>
												</defs>
												<g transform="translate(-1 -0.895)">
													<path
														d="M15.008,47.621v-2.8h4.2v-4.2a4.21,4.21,0,0,0-4.2-4.2H12.2a1.4,1.4,0,0,1-1.4-1.4v-1.4h4.2a1.4,1.4,0,0,1,1.4,1.4h2.8a4.21,4.21,0,0,0-4.2-4.2V28H12.2v2.8H8v4.2a4.21,4.21,0,0,0,4.2,4.2h2.8a1.4,1.4,0,0,1,1.4,1.4v1.4H12.2a1.4,1.4,0,0,1-1.4-1.4H8a4.21,4.21,0,0,0,4.2,4.2v2.8Z"
														transform="translate(2.811 10.841)" fill="url(#fill-1)"></path>
													<path
														d="M75.281,20.621a12.6,12.6,0,0,0-1.77.137,23.8,23.8,0,0,0-45.4-5.176,9.785,9.785,0,0,0-12.231,5.254,12.6,12.6,0,0,0-12.548,19.7A15.374,15.374,0,0,0,14.558,63.945L3.223,75.281l7.588,7.588L26.227,67.452l7.008,7.008,28.03-28.03,6.6,6.6,1.026-7.177h6.392a12.614,12.614,0,0,0,0-25.227ZM3.8,48.652A12.614,12.614,0,1,1,16.417,61.266,12.628,12.628,0,0,1,3.8,48.652Zm27.763-2.8h15.1L33.235,59.284,29.961,56.01a15.234,15.234,0,0,0,1.6-10.161Zm29.7-3.383L33.235,70.5l-7.008-7.008L10.811,78.905,7.186,75.281,18.567,63.9a15.4,15.4,0,0,0,9.8-5.523l4.87,4.87L57.641,38.841l-4.615-4.615,15-2.142-2.142,15Zm14.015.58H69.288L71.326,28.78,47.079,32.244l6.6,6.6-4.2,4.2H30.763a15.374,15.374,0,0,0-25.62-4.875,9.808,9.808,0,1,1,18.281-4.936h2.8a12.631,12.631,0,0,0-7.636-11.586,6.989,6.989,0,0,1,9.62-2.956l1.456.806.547-1.571a21,21,0,0,1,40.57,3.523,12.6,12.6,0,0,0-3.847,2.324l1.856,2.1a9.811,9.811,0,1,1,6.488,17.17Z"
														transform="translate(0 -0.105)" fill="url(#fill-1)"></path>
													<path d="M1,61H3.8v2.8H1Z" transform="translate(0 24.091)"
														fill="url(#fill-1)"></path>
													<path d="M61,61h2.8v2.8H61Z" transform="translate(24.091 24.091)"
														fill="url(#fill-1)"></path>
													<path
														d="M62.463,41H54.053V69.03h-2.8V52.212H42.841V69.03h-2.8V60.621H31.629V69.03h-2.8V57.818H20.417V69.03H5v2.8H80.682v-2.8H62.463Zm-5.606,2.8h2.8V69.03h-2.8ZM45.644,55.015h2.8V69.03h-2.8ZM34.432,63.424h2.8V69.03h-2.8Zm-11.212-2.8h2.8V69.03h-2.8Z"
														transform="translate(1.606 16.061)" fill="url(#fill-1)"></path>
													<path
														d="M40.923,5A18.251,18.251,0,0,0,23.74,17.147l2.642.935A15.445,15.445,0,0,1,40.923,7.8Z"
														transform="translate(9.131 1.606)" fill="url(#fill-1)"></path>
													<path
														d="M41.336,5.965A18.126,18.126,0,0,0,38.3,5.179l-.463,2.765a15.293,15.293,0,0,1,2.568.664Z"
														transform="translate(14.79 1.678)" fill="url(#fill-1)"></path>
													<path
														d="M58.2,24A4.21,4.21,0,0,1,54,28.2v2.8A7.016,7.016,0,0,0,61.008,24Z"
														transform="translate(21.281 9.235)" fill="url(#fill-1)"></path>
													<path
														d="M5,26.008H7.8a4.21,4.21,0,0,1,4.2-4.2V19A7.016,7.016,0,0,0,5,26.008Z"
														transform="translate(1.606 7.227)" fill="url(#fill-1)"></path>
													<path d="M35,17h2.8v2.8H35Z" transform="translate(13.652 6.424)"
														fill="url(#fill-1)"></path>
													<path d="M27,17h2.8v2.8H27Z" transform="translate(10.44 6.424)"
														fill="url(#fill-1)"></path>
													<path d="M23,17h2.8v2.8H23Z" transform="translate(8.834 6.424)"
														fill="url(#fill-1)"></path>
													<path d="M39,17h2.8v2.8H39Z" transform="translate(15.258 6.424)"
														fill="url(#fill-1)"></path>
													<path d="M31,17h2.8v2.8H31Z" transform="translate(12.046 6.424)"
														fill="url(#fill-1)"></path>
												</g>
											</svg>
										</div>
									</div>
									<div class="contents">
										<h3 class="lqd-iconbox-heading text-20 mb-20">Simple System </h3>
										<p>Our proprietary filing system makes everything simple. From company name
											availability verification and preparation of documents to filing and
											industry-leading customer support.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-4">
								<div class="mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container inline-flex mb-55 text-86">
											<svg class="w-1em" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="81.895"
												height="81.895" viewbox="0 0 81.895 81.895">
												<defs>
													<lineargradient id="fill-2" x1="0.5" x2="0.5" y2="1"
														gradientunits="objectBoundingBox">
														<stop offset="0" stop-color="#fb9e44"></stop>
														<stop offset="1" stop-color="#f57452"></stop>
													</lineargradient>
												</defs>
												<path
													d="M53.276,43.748,54.4,46.14q-1.339.626-2.708,1.18l-.988-2.45q1.3-.527,2.576-1.121ZM37.826,48.177l.317,2.623a53.68,53.68,0,0,0,10.834-2.475l-.852-2.5a50.88,50.88,0,0,1-10.3,2.353ZM82.9,12.888V57.8a6.612,6.612,0,0,1-6.6,6.6H64.4v5.284H57.456l-.3-.166c-1.09-.6-2.207-1.31-3.286-1.992a40.646,40.646,0,0,0-5.546-3.119A3.971,3.971,0,0,1,46.7,66.421a3.911,3.911,0,0,1,.531,1.944,3.954,3.954,0,0,1-1.851,3.341,3.9,3.9,0,0,1-1.321,5.284,3.919,3.919,0,0,1,.53,1.943A3.968,3.968,0,0,1,40.627,82.9H21.454a9.187,9.187,0,0,1-6.538-2.709l-1.254-1.254H11.567V82.9H1V53.836H11.567V57.8h2.2l.44-.33V7.6a6.612,6.612,0,0,1,6.6-6.6H33.154a6.563,6.563,0,0,1,4.671,1.935l3.348,3.348H76.291A6.612,6.612,0,0,1,82.9,12.888ZM16.851,7.6v3.963H80.01a3.957,3.957,0,0,0-3.72-2.642H40.08L35.957,4.8a3.942,3.942,0,0,0-2.8-1.161H20.813A3.968,3.968,0,0,0,16.851,7.6ZM8.925,56.477H3.642V80.253H8.925ZM41.948,78.932a1.321,1.321,0,0,0-1.321-1.321h-6.6V74.97h7.925a1.321,1.321,0,1,0,0-2.642H34.022V69.686h9.246a1.321,1.321,0,1,0,0-2.642H34.022V64.4H44.589a1.321,1.321,0,1,0,0-2.642H31.38a9.25,9.25,0,0,1-8.341-5.284h-.9A6.635,6.635,0,0,0,18.173,57.8L14.649,60.44H11.567V76.291h3.189l2.028,2.028a6.563,6.563,0,0,0,4.671,1.935H40.627A1.321,1.321,0,0,0,41.948,78.932ZM32.7,59.119V45.871c-.361.009-.717.04-1.078.04H31.38a6.6,6.6,0,0,0,0,13.209Zm22.581,6.175c.408.258.8.5,1.2.749V39.023a48.287,48.287,0,0,1-21.134,6.739V59.119h9.246a3.97,3.97,0,0,1,3.654,2.426,35.614,35.614,0,0,1,7.039,3.749Zm.594-29c.395-.247.8-.472,1.189-.732l.333-.221h1.721v-12.7L73.961,30.06,63.394,35.343H64.4v5.284A10.576,10.576,0,1,0,55.876,36.3ZM68.054,30.06l-6.293-3.146v6.293Zm-6.293,7.925H59.119v29.06h2.642ZM80.253,57.8V14.209h-63.4V55.52a9.274,9.274,0,0,1,5.284-1.684h.106A9.177,9.177,0,0,1,31.38,43.268h.243A45.693,45.693,0,0,0,53.6,37.641a13.2,13.2,0,1,1,10.8,5.627V61.761H76.291A3.968,3.968,0,0,0,80.253,57.8ZM27.418,6.284H24.776V8.925h2.642Zm-5.284,0H19.492V8.925h2.642Zm10.567,0H30.06V8.925H32.7ZM67.044,59.119H77.612V56.477H67.044Zm0-5.284H77.612V51.194H67.044Zm0-5.284H77.612V45.91H67.044Zm-47.552-31.7h29.06V32.7H19.492ZM22.134,30.06H45.91V19.492H22.134Zm-2.642,7.925h2.642V35.343H19.492Zm5.284,0H48.552V35.343H24.776Z"
													transform="translate(-1 -1)" fill="url(#fill-2)"></path>
											</svg>
										</div>
									</div>
									<div class="contents">
										<h3 class="lqd-iconbox-heading text-20 mb-20">Affordable </h3>
										<p>Our basic filing is affordable, with plans starting at $0 plus your state
											filing fee. We believe that starting your company shouldn't drain the bank
											before you even get started.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-4">
								<div class="mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container inline-flex mb-55 text-86">
											<svg class="w-1em" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="89" height="89"
												viewbox="0 0 89 89">
												<defs>
													<lineargradient id="fill-3" x1="0.5" x2="0.5" y2="1"
														gradientunits="objectBoundingBox">
														<stop offset="0" stop-color="#fb9e44"></stop>
														<stop offset="1" stop-color="#f57452"></stop>
													</lineargradient>
												</defs>
												<g transform="translate(0 0.001)">
													<g transform="translate(35.536 20.729)">
														<path
															d="M200.884,112a8.884,8.884,0,1,0,8.884,8.884A8.884,8.884,0,0,0,200.884,112Zm0,14.807a5.923,5.923,0,1,1,5.923-5.923A5.923,5.923,0,0,1,200.884,126.808Z"
															transform="translate(-192 -112.001)" fill="url(#fill-3)">
														</path>
													</g>
													<g transform="translate(23.019 -0.001)">
														<g transform="translate(0 0)">
															<path
																d="M161.644,42.421a18.905,18.905,0,0,0-1.544-1.385l.015-.043A36.245,36.245,0,0,0,146.631.275a1.481,1.481,0,0,0-1.721,0,36.245,36.245,0,0,0-13.484,40.718l.015.043a18.9,18.9,0,0,0-1.524,28.121,1.48,1.48,0,0,0,1.047.434,1.5,1.5,0,0,0,.468-.076,1.481,1.481,0,0,0,1-1.195l1.118-7.824a1.481,1.481,0,0,1,1.464-1.27h4.51L138.4,64.852a1.481,1.481,0,0,0,1.451,1.777h11.845a1.48,1.48,0,0,0,1.451-1.777l-1.125-5.627h4.51a1.481,1.481,0,0,1,1.464,1.272l1.118,7.822a1.481,1.481,0,0,0,1,1.195,1.5,1.5,0,0,0,.468.076,1.48,1.48,0,0,0,1.047-.434A18.9,18.9,0,0,0,161.644,42.421ZM145.77,3.321a33.408,33.408,0,0,1,8.754,10H137.017A33.409,33.409,0,0,1,145.77,3.321ZM135.012,56.265a4.463,4.463,0,0,0-4.4,3.814l-.641,4.491a15.912,15.912,0,0,1-2.59-10.123h0a15.966,15.966,0,0,1,5.034-10.379l3.918,12.2Zm6.642,7.4.888-4.442H149l.888,4.442Zm-2.208-7.4L134.572,41.1l-.326-1.014a33.293,33.293,0,0,1,1.281-23.8h20.486a33.292,33.292,0,0,1,1.281,23.8l-.326,1.014-4.874,15.165Zm22.12,8.305-.641-4.491a4.463,4.463,0,0,0-4.4-3.814h-1.324l3.921-12.2a15.993,15.993,0,0,1,2.44,20.5Z"
																transform="translate(-124.369 0.001)"
																fill="url(#fill-3)"></path>
														</g>
													</g>
													<g transform="translate(0 60.706)">
														<path
															d="M38.5,336.766v4.827a10.267,10.267,0,0,0-10.187,2.49,11.882,11.882,0,0,0-9.062-4.238,11.663,11.663,0,0,0-3.188.444A14.731,14.731,0,0,0,1.481,328H0v2.961H1.481a11.777,11.777,0,0,1,11.752,10.575,11.867,11.867,0,0,0-3.659,3.321A14.732,14.732,0,0,0,0,341.327v2.961a11.859,11.859,0,0,1,11.845,11.845h2.961A14.711,14.711,0,0,0,11.7,347.08a8.913,8.913,0,0,1,3.681-3.385.057.057,0,0,0,.046-.015,8.785,8.785,0,0,1,3.825-.874,8.9,8.9,0,0,1,7.218,3.749,11.06,11.06,0,0,0-1.3,5.135h2.961a8.012,8.012,0,0,1,1.233-4.278h-.009c.021-.028.049-.049.07-.078a7.378,7.378,0,0,1,9.071-2.6v3.879h2.961V336.766Z"
															transform="translate(0 -328)" fill="url(#fill-3)"></path>
													</g>
													<g transform="translate(47.381 60.706)">
														<path
															d="M295.978,330.962h1.481V328h-1.481A14.731,14.731,0,0,0,281.4,340.29a11.663,11.663,0,0,0-3.188-.444,11.882,11.882,0,0,0-9.062,4.233,10.267,10.267,0,0,0-10.187-2.49v-4.827H256v11.845h2.961v-3.875a7.378,7.378,0,0,1,9.071,2.6c.021.03.049.05.07.078h-.009a8.011,8.011,0,0,1,1.233,4.279h2.961a11.059,11.059,0,0,0-1.3-5.135,8.9,8.9,0,0,1,7.218-3.749,8.787,8.787,0,0,1,3.825.877c.015.007.031.009.046.015a8.914,8.914,0,0,1,3.688,3.382,14.709,14.709,0,0,0-3.117,9.053h2.961a11.859,11.859,0,0,1,11.845-11.845v-2.961a14.735,14.735,0,0,0-9.574,3.531,11.867,11.867,0,0,0-3.659-3.321A11.777,11.777,0,0,1,295.978,330.962Z"
															transform="translate(-256 -328.001)" fill="url(#fill-3)">
														</path>
													</g>
													<g transform="translate(37.016 42.939)">
														<rect width="3" height="3" transform="translate(-0.016 0.061)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(42.939 42.939)">
														<rect width="3" height="3" transform="translate(0.061 0.061)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(48.862 42.939)">
														<rect width="3" height="3" transform="translate(0.138 0.061)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(16.287 78.475)">
														<rect width="3" height="3" transform="translate(-0.287 -0.475)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(0 54.784)">
														<rect width="3" height="3" transform="translate(0 0.215)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(82.917 68.11)">
														<rect width="3" height="3" transform="translate(0.083 -0.111)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(71.072 62.187)">
														<rect width="3" height="3" transform="translate(-0.072 -0.188)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(54.784 85.878)">
														<rect width="3" height="3" transform="translate(0.216 0.121)"
															fill="url(#fill-3)"></rect>
													</g>
													<g transform="translate(85.878 51.823)">
														<rect width="3" height="3" transform="translate(0.122 0.177)"
															fill="url(#fill-3)"></rect>
													</g>
												</g>
											</svg>
										</div>
									</div>
									<div class="contents">
										<h3 class="lqd-iconbox-heading text-20 mb-20">Ongoing Support </h3>
										<p>We make registering a company as easy as possible. Beyond that, we have a
											full suite of startup services,
											Bizee not only helps you get started but supports you in your continued
											success. We're your one-stop shop.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End About -->

				<!-- Start Contact -->
				<section class="lqd-section contact pb-100" id="contact" data-parallax="true"
					data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
					data-parallax-from='{"y": "100px", "scaleX" : 1.2, "scaleY" : 1.2}'
					data-parallax-to='{"y": "0px", "scaleX" : 1, "scaleY" : 1}'>
					<div class="container">
						<div class="row">
							<div class="col col-12 p-0" data-custom-animations="false"
								data-ca-options='{"animationTarget": ".animation-element-wrap, .animation-element-wrap > .animation-element-inner .animation-element , :scope > .animation-element-wrap > .animation-element-inner .animation-element .lqd-split-lines .lqd-lines .split-inner, :scope > .animation-element-wrap > .animation-element-inner .animation-element .lqd-split-words .lqd-words .split-inner, :scope > .animation-element-wrap > .animation-element-inner .animation-element .lqd-split-chars .lqd-chars .split-inner", "ease": "power4.out", "initValues": {"y": "100px", "z": "100px", "rotationX" : -65, "opacity" : 0} , "animations": {"y": "0px", "z": "0px", "rotationX" : 0, "opacity" : 1}}'>

								<div
									class="w-full flex flex-wrap bg-white py-40 px-45 transition-all box-shadow-bottom rounded-16 module-content animation-element-wrap">
									<div
										class="w-30percent relative flex items-center justify-end p-10 lg:w-full lg:justify-center lg:text-center animation-element-inner">
										<div
											class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
											<figure class="w-full relative">
												<img src="./asset/images/llc/inc5000_x2.png" alt="shape">
											</figure>
										</div>
										<div class="absolute w-auto top-25percent right-30 module-shape">
											<div class="lqd-imggrp-single block relative animation-element">
											</div>
										</div>
										<!-- <div class="animation-element">
									<a href="#contact-modal"
										class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-solid btn-xl btn-hover-txt-liquid-y-alt text-white rounded-100 bg-primary hover:bg-accent"
										data-lity="#contact-modal">
										<span class="btn-txt" data-text="Get started now" data-split-text="true"
											data-split-options='{"type":  "chars, words"}'>Get started
											now</span>
									</a>
								</div> -->
									</div>
									<div class="w-60percent p-10 lg:w-full animation-element-inner">
										<div
											class="w-full flex flex-col justify-start lg:justify-center lg:text-center">
											<div class="ld-fancy-heading relative animation-element">
												<h3 class="mb-0/75em ld-fh-element relative">Join 1,000,000+
													Entrepreneurs like you</h3>
											</div>
											<div class="ld-fancy-heading relative animation-element">
												<p class="text-20 leading-1/5em m-0 ld-fh-element relative">
													Entrepreneurship is booming – and we're happy to be one of America's
													fastest growing companies.</p>
											</div>

										</div>
										<a href="#about"
												class="btn font-bold text-14 mt-30 uppercase tracking-1/5 whitespace-nowrap btn-solid btn-xl btn-icon-right btn-hover-reveal mr-40 rounded-100 text-white bg-primary hover:bg-accent"
												data-localscroll="true">
												<span class="btn-txt" data-text="Get Started">Get Started</span>
												<span class="btn-icon">
													<i aria-hidden="true"
														class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
												</span>
											</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Contact -->

				<!-- Start Digital Experience -->
				<section class="lqd-section digital-experience py-100 px-30">
					<div class="container">
						<div class="row items-center">
							<div
								class="w-55percent relative flex items-center justify-center lg:w-full sm:hidden ml-100">
								<div class="absolute w-auto -bottom-20 module-img-1" data-parallax="true"
									data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
									data-parallax-from='{"y": "50px"}' data-parallax-to='{"y": "0px"}'>
									<div class="lqd-imggrp-single block relative">
										<div
											class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
											<figure class="w-full relative">
												<img class="rounded-8" src="./asset/images/llc/shape-dots.svg"
													alt="digital experience">
											</figure>
										</div>
									</div>
								</div>
								<div class="absolute w-260 -top-5percent module-img-2" data-parallax="true"
									data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
									data-parallax-from='{"y": "110px"}' data-parallax-to='{"y": "-50px"}'>
									<div class="lqd-imggrp-single block relative" data-shadow-style="4"
										data-inview="true" data-animate-shadow="true">
										<div
											class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
											<figure class="w-full relative">
												<img class="rounded-8"
													src="./asset/images/llc/digital-experience-1.jpg"
													alt="digital experience">
											</figure>
										</div>
									</div>
								</div>
								<div class="absolute w-400 -top-5percent module-img-3" data-parallax="true"
									data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
									data-parallax-from='{"y": "150px"}' data-parallax-to='{"y": "-120px"}'>
									<div class="lqd-imggrp-single block relative" data-shadow-style="4"
										data-inview="true" data-animate-shadow="true">
										<div
											class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
											<figure class="w-full relative">
												<img class="rounded-8"
													src="./asset/images/llc/home-official-family.jpg"
													alt="digital experience">
											</figure>
										</div>
									</div>
								</div>
								<div class="relative w-400 module-img-4" data-parallax="true"
									data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
									data-parallax-from='{"y": "80px"}' data-parallax-to='{"y": "-70px"}'>
									<div class="lqd-imggrp-single block relative mt-50percent" data-shadow-style="4"
										data-inview="true" data-animate-shadow="true">
										<div
											class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
											<figure class="w-full relative">
												<img class="rounded-8" width="393"
													src="./asset/images/llc/home-official-business.jpg"
													alt="digital experience">
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div class="w-35percent flex flex-col items-start lg:w-full lg:items-center lg:text-center"
								data-custom-animations="true"
								data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
								<div
									class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
									<h6 class="ld-fh-element relative lowercase m-0 py-10 px-20"> Digital Experience
									</h6>
								</div>
								<div class="ld-fancy-heading relative">
									<h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover h2"
										data-inview="true" data-transition-delay="true"
										data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
										<span>For you and your </span>
										<mark class="lqd-highlight">
											<span class="lqd-highlight-txt">business</span>
											<span class="lqd-highlight-inner"></span>
										</mark>
									</h2>
								</div>
								<!-- <div class="ld-fancy-heading relative">
									<p class="text-20 font-bold leading-1/5em mb-1/5em ld-fh-element relative">More than
										just an ad agency, we harness the tools of traditional and digital.</p>
								</div> -->
								<div class="ld-fancy-heading relative">
									<p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">Whether you need to
										form a company, apply for licenses and permits, or get a tax ID, we'll set your
										business up for success. From wills to powers of attorney, the right estate
										planning documents can safeguard you and your loved ones—both now, and later.


									</p>
								</div>
								<a href="#counter"
									class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-solid btn-xl btn-hover-txt-switch btn-hover-txt-switch-x bg-primary text-white rounded-100 hover:bg-accent"
									data-localscroll=" true">
									<span class="btn-txt" data-text="More about us" data-split-text="true"
										data-split-options='{"type":  "chars, words"}'>More about us</span>
								</a>
							</div>
						</div>
					</div>
				</section>
				<!-- End Digital Experience -->
<!-- Start Text Box Image -->
<section class="lqd-section text-box-image pt-100">
	<div class="container">
		<div class="row items-center">
			<div class="col col-12 col-md-6">
				<div class="flex flex-wrap mr-120 ml-40 lg:m-0">
					<!-- <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle w-full mb-20">
			  <div class="-mb-35 iconbox-icon-wrap">
				  <div class="iconbox-icon-container inline-flex relative module-iconbox z-1 rounded-full w-60 h-60 mb-20 text-24 bg-blue-100">
					  <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="22" height="34.232" viewbox="0 0 27 34.232">
						  <g transform="translate(-6.75 -4.277)">
							  <path d="M8,7.542,20.878,5.128a3.375,3.375,0,0,1,1.244,0L35,7.542V23.207a14.362,14.362,0,0,1-6.75,12.179l-5.856,3.66a1.687,1.687,0,0,1-1.789,0l-5.856-3.66A14.362,14.362,0,0,1,8,23.207Z" transform="translate(-1.25 -0.792)" fill="#3750e0" fill-rule="evenodd" opacity="0.3"></path>
							  <path d="M21.937,32.562l7.875-11.137H25.875V14L18,25.137h3.937Z" transform="translate(-2.813 -2.188)" fill="#3750e0" fill-rule="evenodd"></path>
						  </g>
					  </svg>
				  </div>
			  </div>
		  </div> -->
					<div class="mb-20 ld-fancy-heading relative">
						<!-- <a href="#tab-items"
							class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-blue-100 text-primary hover:currentColor module-btn-xs"
							data-localscroll="true">
							<span class="btn-txt" data-text="Support">INDEPENDENT STUDY</span>
						</a> -->
						<h2 class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left mt-0/5em mb-0"
							data-inview="true" data-transition-delay="true"
							data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
							<span> We Take Care
								Of Everything For You!</span>
							<!-- <mark class="lqd-highlight">
								<span class="lqd-highlight-txt">Scale.</span>
								<span class="left-0 bottom-0 bg-blue-100 lqd-highlight-inner"></span>
							</mark> -->
						</h2>
					</div>
					<div class="mb-20 ld-fancy-heading relative">
						<p class="leading-25 ld-fh-element inline-block relative mb-0/5em">
							There's a reason over 1,000,000 businesses have started with Bizee. We include many amazing benefits with all packages.
						</p>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Company name verification
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Free first year registered agent
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Preparation and filing of articles
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Free business tax consult
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Next business day processing
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Lifetime company alerts
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Online order status tracking
							</h3>
						</div>
					</div>
					<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
						<div
							class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
							<div class="iconbox-icon-wrap">
								<div
									class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
									<i aria-hidden="true"
										class="lqd-icn-ess icon-ion-ios-checkmark"></i>
								</div>
							</div>
							<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">
								Lifetime customer support
							</h3>
						</div>
					</div>
					<!--
		  <div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
			  <div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
				  <div class="iconbox-icon-wrap">
					  <div class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
						  <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
					  </div>
				  </div>
				  <h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Unlimited Photos and Videos </h3>
			  </div>
		  </div>
		  <div class="w-full lqd-iconbox-scale transition-all hover:scale-1/1">
			  <div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
				  <div class="iconbox-icon-wrap">
					  <div class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
						  <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
					  </div>
				  </div>
				  <h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Exclusive Support </h3>
			  </div>
		  </div> -->
				</div>
			</div>
			<div class="col col-12 col-md-6 p-0">
				<div class="module-section flex items-center justify-center transition-all p-20 lg:p-0">
					<div class="flex items-center justify-center bg-center bg-no-repeat bg-contain"
						style="
			  background-image: url('./asset/images/demo/start-hub-1/shape-ellipse.png');
			">
						<div class="lqd-imggrp-single block relative -mt-70 -mb-90"
							data-float="ease-in-out">
							<div
								class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
								<figure class="w-full relative">
									<img width="1102" height="1440px"
										src="./asset/images/business-formation-1.webp" alt="text box image" />
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Start Text Box Image -->


				<!-- Start Digital Experience Counter -->
				<section class="lqd-section digital-experience-counter py-100" id="counter">
					<div class="container">
						<div class="row algin-items-center">
							<div class="col col-12 col-xl-5">
								<div class="w-full flex flex-col items-start lg:text-center lg:items-center"
									data-custom-animations="true"
									data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
									<div
										class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
										<h6 class="ld-fh-element relative m-0 py-10 px-20"> Completed Work
										</h6>
									</div>
									<div class="ld-fancy-heading relative">
										<h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover"
											data-inview="true" data-transition-delay="true"
											data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
											<span>The hundred of completed works still</span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">counting</span>
												<span class="lqd-highlight-inner"></span>
											</mark>
										</h2>
									</div>
									<div class="ld-fancy-heading relative">
										<p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">Through
											strategy, design, and planning we build brand identities that connect with
											your Nesi. We then fine-tune a marketing plan that allows us to laser focus
											and target your audience through the right channels.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-6 offset-xl-1 p-0">
								<div
									class="px-10percent flex items-center align-content-center h-full relative module-counter">
									<section
										class="lqd-section counter-boxes bg-white text-center box-shadow-bottom transition-all rounded-16 z-2 relative w-full">
										<div class="container-fluid p-0">
											<div class="row m-0">
												<div class="col col-12 col-md-6 p-0">
													<div
														class="flex flex-col w-full h-full align-contents-center justify-center border-right border-black-10 sm:border-right-0">
														<div
															class="counter-box text-title m-0 py-35 border-bottom border-black-10">
															<div
																class="lqd-counter relative center lqd-counter-default">
																<div class="text-48 font-bold mb-15 lqd-counter-element relative"
																	data-enable-counter="true"
																	data-counter-options='{"targetNumber": "19+"}'>
																	<span class="block">19+</span>
																</div>
																<span class="lqd-counter-text text-text">Total Top
																	Services</span>
															</div>
														</div>
														<div class="counter-box text-title m-0 py-35">
															<div
																class="lqd-counter relative center lqd-counter-default">
																<div class="text-48 font-bold mb-15 lqd-counter-element relative "
																	data-enable-counter="true"
																	data-counter-options='{"targetNumber": "98%"}'>
																	<span class="block">98%</span>
																</div>
																<span class="lqd-counter-text text-text">Positive
																	Feedback</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col col-12 col-md-6 p-0">
													<div
														class="flex flex-col w-full h-full align-contents-center justify-center">
														<div
															class="counter-box text-title m-0 py-35 border-bottom border-black-10">
															<div
																class="lqd-counter relative center lqd-counter-default">
																<div class="text-48 font-bold mb-15 lqd-counter-element relative "
																	data-enable-counter="true"
																	data-counter-options='{"targetNumber": "27+"}'>
																	<span class="block">27+</span>
																</div>
																<span
																	class="lqd-counter-text text-text">Countries</span>
															</div>
														</div>
														<div class="counter-box text-title m-0 py-35">
															<div
																class="lqd-counter relative center lqd-counter-default">
																<div class="text-48 font-bold mb-15 lqd-counter-element relative "
																	data-enable-counter="true"
																	data-counter-options='{"targetNumber": "2,663"}'>
																	<span class="block">2,663</span>
																</div>
																<span class="lqd-counter-text text-text">Usual
																	Users</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<div class="absolute ltr-left-0 bottom-0 w-auto  z-1">
										<div class="lqd-imggrp-single block relative">
											<div
												class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
												<figure class="w-full relative">
													<img src="./asset/images/demo/modern-agency/shape-dots.svg"
														alt="shape">
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Digital Experience Counter -->



				<!-- Start Banner -->
				<section class="lqd-section banner min-h-100vh w-full flex flex-column items-center justify-center" id="banner">
					<div class="absolute w-full h-full">
						<div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-vh-100">
							<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 14, "density" : 1} , "color": {"value" : ["#F27E3F", "#0FBBB4", "#48BB0F", "#3FF292", "#899BFF"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 6, "random": true, "anim": {"enable": true, "size_min" : 1, "speed" : 1}} , "move": {"enable": true, "direction": "right", "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'></div>
						</div>
					</div>
					<div class="container">
						<div class="row items-center">
							<div class="col col-12 col-xl-5" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, h6, p, .btn", "duration" : 1800, "delay" : 170, "ease": "power4.out", "initValues": {"y": "65px", "rotationY" : 65, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
								<!-- <div class="ld-fancy-heading relative">
									<h6 class="ld-fh-element inline-block relative mb-2em text-12 uppercase font-bold tracking-1/5 text-gray-900">Creative solutions for everyone</h6>
								</div> -->
								<div class="ld-fancy-heading relative">
									<h4 class="ld-fh-element inline-block relative text-rotator-activated mb-0/25em text-72 leading-1/05em tracking-0" data-text-rotator="true"> Ready to Start <span class="txt-rotate-keywords">
											<!-- <span class="txt-rotate-keyword lqd-keyword-slide-out is-next">Ready</span> -->
											<span class="txt-rotate-keyword lqd-keyword-slide-out">?</span>
											<span class="txt-rotate-keyword lqd-keyword-slide-in active">?</span>
										</span>
									</h4>
								</div>
								<div class="ld-fancy-heading relative">
									<p class="ld-fh-element relative mb-2em text-20 leading-32">Getting started is easy. Click the Get Started button below. Fill out the basic form steps, and just minutes from now, you will have your new LLC.</p>
								</div>
								<div class="flex flex-row flex-wrap items-center justify-start">
									<div class="fancy-button mr-15 module-btn sm:w-full">
										<a href="#contact-modal" class="btn btn-solid btn-xlg btn-icon-right btn-hover-reveal font-bold uppercase tracking-1/5 leading-1/4em whitespace-nowrap bg-transparent rounded-100 text-white" data-lity="#contact-modal">
											<span class="btn-txt" data-text="Get Started">Get Started</span>
											<span class="btn-icon text-16">
												<i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
											</span>
										</a>
									</div>
									<!-- <div class="fancy-button text-left sm:w-full">
										<a href="#services" class="btn btn-naked btn-icon-right btn-hover-reveal btn-has-label font-bold uppercase tracking-1/5 leading-1/4em whitespace-nowrap text-blue-700" data-localscroll="true">
											<span class="btn-txt" data-text="Discover Hub">Discover Hub</span>
											<span class="btn-icon">
												<i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-down"></i>
											</span>
										</a>
									</div> -->
								</div>
							</div>
							<div class="col col-12 col-md-6 p-0">
								<div class="module-section flex items-center justify-center transition-all p-20 lg:p-0">
									<div class="flex items-center justify-center bg-center bg-no-repeat bg-contain"
										style="
							  background-image: url('./asset/images/demo/start-hub-1/shape-ellipse.png');
							">
										<div class="lqd-imggrp-single block relative -mt-70 -mb-90"
											data-float="ease-in-out">
											<div
												class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
												<figure class="w-full relative">
													<img width="1102" height="1440px" style="border-radius: 40px;"
														src="./asset/images/a.jpg" alt="text box image" />
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End banner -->

				<!-- Start Services -->
				<!-- <section class="lqd-section icon-box-colored pt-30 pb-60" id="services">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-xl-4 pt-110 px-30 lg:p-0" data-parallax="true"
								data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
								data-parallax-from='{"y": "60px"}' data-parallax-to='{"y": "-150px"}'>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-pink-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62"
													height="62" viewbox="0 0 62 62">
													<path
														d="M5,41v8a2,2,0,0,0,2,2H9a2,2,0,0,0,2-2V41a2,2,0,0,0-2-2H7A2,2,0,0,0,5,41Zm2,0H9v8H7Zm52,0H57V39h2Zm0,10H57V43h2ZM15,59H53a2,2,0,0,0,2-2V33a2,2,0,0,0-2-2H15a2,2,0,0,0-2,2V57A2,2,0,0,0,15,59Zm0-26H53V57H15Zm23.553,2.1A18.023,18.023,0,0,1,30.528,37H29a5,5,0,0,0-1,9.9v5.687A2.417,2.417,0,0,0,30.414,55h3.172a2.414,2.414,0,0,0,1.707-4.121l-1.172-1.172A.417.417,0,0,1,34,49.414V47.349A17.973,17.973,0,0,1,38.553,48.9l.211.1H44V35H38.764ZM26,42a3,3,0,0,1,3-3h1.528A20.043,20.043,0,0,0,38,37.541v8.918A20.043,20.043,0,0,0,30.528,45H29A3,3,0,0,1,26,42Zm6.707,9.121,1.172,1.172a.414.414,0,0,1-.293.707H30.414A.415.415,0,0,1,30,52.586V47h.528c.491,0,.982.028,1.472.069v2.345a2.4,2.4,0,0,0,.707,1.707ZM42,47H40V37h2ZM54,15V14a1,1,0,0,0-1-1H51a3,3,0,0,1-3-3V7h3V5h2V7a3,3,0,0,1,3,3H54a1,1,0,0,0-1-1H50v1a1,1,0,0,0,1,1h2a3,3,0,0,1,3,3v3H53v2H51V17a3,3,0,0,1-3-3h2a1,1,0,0,0,1,1ZM37,13h4.051a11,11,0,1,0,0-2H37a3,3,0,0,0-3,3V27H30V26a3,3,0,0,0-3-3H16a1,1,0,0,1-1-1V21h8V18a9.01,9.01,0,0,0-5.623-8.337,5,5,0,1,0-6.754,0A9.01,9.01,0,0,0,5,18v3h8v1a3,3,0,0,0,3,3H27a1,1,0,0,1,1,1v1H6a5.006,5.006,0,0,0-5,5V58a5.006,5.006,0,0,0,5,5H58a5.006,5.006,0,0,0,5-5V32a5.006,5.006,0,0,0-5-5H36V14A1,1,0,0,1,37,13ZM52,3a9,9,0,1,1-9,9A9.011,9.011,0,0,1,52,3ZM11,6a3,3,0,1,1,3,3A3,3,0,0,1,11,6ZM7,18a7,7,0,1,1,14,0v1H7ZM61,32V58a3,3,0,0,1-3,3H6a3,3,0,0,1-3-3V32a3,3,0,0,1,3-3H58A3,3,0,0,1,61,32ZM17,43h2v2H17Zm0-4h2v2H17Zm0-4h2v2H17ZM49,49h2v2H49Zm0-4h2v2H49Zm0,8h2v2H49Z"
														transform="translate(-1 -1)" fill="#7e0a5d"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">
											<span>Mobile App</span>
											<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">We use the Mobile Apps feature of Azure App Service to
												rapidly build engaging cross-platforms and native apps for iOS, Android,
												Windows, or Mac; store app data in the cloud or onpremises; or add your
												custom back-end logic.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon mr-10">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-purple-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62"
													height="62" viewbox="0 0 62 62">
													<path
														d="M60,1H10A3,3,0,0,0,7,4V19.586L6.414,19H6a5.006,5.006,0,0,0-5,5v.414l5.178,5.178a5.783,5.783,0,0,0,.794,4.633,3.116,3.116,0,0,0-1.058,5.1l9.758,9.758a3.117,3.117,0,0,0,5.056-.944l8.749,8.749,7.055,2.016L41.649,63H42a3,3,0,0,0,3-3v-.351l-4.094-5.118L38.89,47.476,38.415,47H60a3,3,0,0,0,3-3V4a3,3,0,0,0-3-3ZM10,3H60a1,1,0,0,1,1,1V9H9V4A1,1,0,0,1,10,3ZM3.025,23.611a3.008,3.008,0,0,1,2.586-2.586l4.041,4.041a5.768,5.768,0,0,0-.773.641L7.707,26.879a5.868,5.868,0,0,0-.643.771ZM30,54.586,28.414,53,35,46.414,36.586,48Zm-3-3-6.913-6.913h0l-9.758-9.758L9.121,33.707a3.829,3.829,0,0,1,0-5.414l1.172-1.172a3.829,3.829,0,0,1,5.414,0L33.586,45ZM17.879,48a1.133,1.133,0,0,1-.793-.328L7.328,37.914A1.121,1.121,0,0,1,8.121,36a1.133,1.133,0,0,1,.793.328l9.758,9.758A1.121,1.121,0,0,1,17.879,48Zm22.038,8.5,3.038,3.8a1,1,0,0,1-.66.66l-3.8-3.039Zm-3.208.38-4.8-1.371,5.6-5.6,1.372,4.8ZM60,45H36.414L17.121,25.707A5.761,5.761,0,0,0,11.6,24.181L9,21.586V11H61V44A1,1,0,0,1,60,45ZM17,7H15V5h2ZM13,7H11V5h2Zm8,0H19V5h2ZM31,33H59V13H31Zm2-2V29h6.293a7.482,7.482,0,0,0,5.328-2.208l2.172-2.171a5.536,5.536,0,0,1,7.372-.408L57,26.481V31ZM57,15v8.919l-1.585-1.268A7.558,7.558,0,0,0,50.707,21a7.482,7.482,0,0,0-5.328,2.208l-2.172,2.171A5.5,5.5,0,0,1,39.293,27H33V15ZM38,23a3,3,0,1,0-3-3A3,3,0,0,0,38,23Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,38,19ZM13,15H11V13h2Zm2-2H29v2H15Zm-4,4H29v2H11Zm0,4H29v2H11ZM37,35H59v2H37Zm20,4h2v2H57ZM37,39H55v2H37Z"
														transform="translate(-1 -1)"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">
											<span>Strategy</span>
											<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">We're consultants, guides, and partners for brands on
												digital transformation journeys. Wherever you're going, we bring ideas
												and excitement to help you get there.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-4 p-30 lg:p-0" data-parallax="true"
								data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
								data-parallax-from='{"y": "-50px"}' data-parallax-to='{"y": "80px"}'>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-red-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<span
											class="iconbox-label inline-block absolute top-0 right-0 bg-gray-100 rounded-full font-bold uppercase tracking-0/1em text-black">Exclusive</span>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="55.605"
													height="55.605" viewbox="0 0 55.605 55.605">
													<path
														d="M7.175,44.843H8.969v1.794H7.175ZM3.587,46.637H5.381V44.843H3.587Zm7.175,0h1.794V44.843H10.762Zm44.843-29.6v28.7a4.49,4.49,0,0,1-4.484,4.484H39.462v3.587h3.587v1.794H12.556V53.812h3.587V50.224H4.484A4.49,4.49,0,0,1,0,45.74V17.04a4.49,4.49,0,0,1,4.484-4.484H7.175V37.668H48.431V16.144h1.794V39.462H5.381V14.35h-.9A2.694,2.694,0,0,0,1.794,17.04V41.256H14.561l3.587,1.794H53.812V17.04a2.694,2.694,0,0,0-2.691-2.691H48.431V8.969H7.175v1.794H5.381V0H50.224V12.556h.9A4.49,4.49,0,0,1,55.605,17.04ZM48.431,7.175V1.794H7.175V7.175ZM37.668,50.224H17.937v3.587H37.668ZM53.812,45.74v-.9H17.726l-3.587-1.794H1.794V45.74a2.694,2.694,0,0,0,2.691,2.691H51.121A2.694,2.694,0,0,0,53.812,45.74ZM8.969,5.381h1.794V3.587H8.969Zm3.587,0H14.35V3.587H12.556Zm3.587-1.794V5.381h1.794V3.587ZM14.35,35.874V24.267a4.335,4.335,0,0,1-1.794-3.5v-.474a4.338,4.338,0,0,1,.223-1.375L15.5,10.762H40.108l2.717,8.153a4.314,4.314,0,0,1,.224,1.375v.474a4.333,4.333,0,0,1-1.794,3.5V35.874ZM29.6,28.7H26.009v5.381H29.6Zm9.865-3.665A4.226,4.226,0,0,1,35.123,23.2,4.34,4.34,0,0,1,27.8,23a4.34,4.34,0,0,1-7.32.2,4.226,4.226,0,0,1-4.339,1.831v9.046h8.072V26.906H31.39v7.175h8.072ZM34.3,12.556l1.562,7.175h.01v.043l.324,1.492a2.553,2.553,0,0,0,5.057-.5v-.474a2.535,2.535,0,0,0-.131-.807l-2.31-6.927Zm-1.838,0H28.7v7.086l.324,1.623a2.553,2.553,0,0,0,5.057-.5v-.937Zm-9.324,0-1.616,7.411v.8a2.553,2.553,0,0,0,5.057.5l.325-1.624V12.556ZM14.35,20.765a2.553,2.553,0,0,0,5.057.5l.342-1.711,1.554-7H16.79l-2.31,6.927a2.535,2.535,0,0,0-.131.807Zm0,0"
														fill="#9500ff"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">
											<span>eCommerce</span>
											<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">In order to safeguard the success of your ecommerce site,
												Clickworker offers specialty services and solutions. We optimize your
												online presence to help your business rank in the best possible
												position, ensuring your customers can easily find.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon mr-10">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-slate-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="81.895"
													height="81.895" viewbox="0 0 81.895 81.895">
													<defs>
														<lineargradient id="a" x1="0.5" x2="0.5" y2="1"
															gradientunits="objectBoundingBox">
															<stop offset="0" stop-color="#fb9e44"></stop>
															<stop offset="1" stop-color="#f57452"></stop>
														</lineargradient>
													</defs>
													<path
														d="M53.276,43.748,54.4,46.14q-1.339.626-2.708,1.18l-.988-2.45q1.3-.527,2.576-1.121ZM37.826,48.177l.317,2.623a53.68,53.68,0,0,0,10.834-2.475l-.852-2.5a50.88,50.88,0,0,1-10.3,2.353ZM82.9,12.888V57.8a6.612,6.612,0,0,1-6.6,6.6H64.4v5.284H57.456l-.3-.166c-1.09-.6-2.207-1.31-3.286-1.992a40.646,40.646,0,0,0-5.546-3.119A3.971,3.971,0,0,1,46.7,66.421a3.911,3.911,0,0,1,.531,1.944,3.954,3.954,0,0,1-1.851,3.341,3.9,3.9,0,0,1-1.321,5.284,3.919,3.919,0,0,1,.53,1.943A3.968,3.968,0,0,1,40.627,82.9H21.454a9.187,9.187,0,0,1-6.538-2.709l-1.254-1.254H11.567V82.9H1V53.836H11.567V57.8h2.2l.44-.33V7.6a6.612,6.612,0,0,1,6.6-6.6H33.154a6.563,6.563,0,0,1,4.671,1.935l3.348,3.348H76.291A6.612,6.612,0,0,1,82.9,12.888ZM16.851,7.6v3.963H80.01a3.957,3.957,0,0,0-3.72-2.642H40.08L35.957,4.8a3.942,3.942,0,0,0-2.8-1.161H20.813A3.968,3.968,0,0,0,16.851,7.6ZM8.925,56.477H3.642V80.253H8.925ZM41.948,78.932a1.321,1.321,0,0,0-1.321-1.321h-6.6V74.97h7.925a1.321,1.321,0,1,0,0-2.642H34.022V69.686h9.246a1.321,1.321,0,1,0,0-2.642H34.022V64.4H44.589a1.321,1.321,0,1,0,0-2.642H31.38a9.25,9.25,0,0,1-8.341-5.284h-.9A6.635,6.635,0,0,0,18.173,57.8L14.649,60.44H11.567V76.291h3.189l2.028,2.028a6.563,6.563,0,0,0,4.671,1.935H40.627A1.321,1.321,0,0,0,41.948,78.932ZM32.7,59.119V45.871c-.361.009-.717.04-1.078.04H31.38a6.6,6.6,0,0,0,0,13.209Zm22.581,6.175c.408.258.8.5,1.2.749V39.023a48.287,48.287,0,0,1-21.134,6.739V59.119h9.246a3.97,3.97,0,0,1,3.654,2.426,35.614,35.614,0,0,1,7.039,3.749Zm.594-29c.395-.247.8-.472,1.189-.732l.333-.221h1.721v-12.7L73.961,30.06,63.394,35.343H64.4v5.284A10.576,10.576,0,1,0,55.876,36.3ZM68.054,30.06l-6.293-3.146v6.293Zm-6.293,7.925H59.119v29.06h2.642ZM80.253,57.8V14.209h-63.4V55.52a9.274,9.274,0,0,1,5.284-1.684h.106A9.177,9.177,0,0,1,31.38,43.268h.243A45.693,45.693,0,0,0,53.6,37.641a13.2,13.2,0,1,1,10.8,5.627V61.761H76.291A3.968,3.968,0,0,0,80.253,57.8ZM27.418,6.284H24.776V8.925h2.642Zm-5.284,0H19.492V8.925h2.642Zm10.567,0H30.06V8.925H32.7ZM67.044,59.119H77.612V56.477H67.044Zm0-5.284H77.612V51.194H67.044Zm0-5.284H77.612V45.91H67.044Zm-47.552-31.7h29.06V32.7H19.492ZM22.134,30.06H45.91V19.492H22.134Zm-2.642,7.925h2.642V35.343H19.492Zm5.284,0H48.552V35.343H24.776Z"
														transform="translate(-1 -1)" fill="url(#a)"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">
											<span>Branding</span>
											<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">Our center of excellence for branding, BFM Brand Lab,
												shapes brand identities that define the story, guiding vision, and
												market positioning of human-centered brands.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon mr-10">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-4 pt-160 px-30 lg:p-0" data-parallax="true"
								data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
								data-parallax-from='{"y": "110px"}' data-parallax-to='{"y": "-110px"}'>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-yellow-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62"
													height="62" viewbox="0 0 62 62">
													<path
														d="M60,1H16a3,3,0,0,0-3,3V21.082A8,8,0,0,0,9,28a11.95,11.95,0,0,0,4.054,8.969A9.011,9.011,0,0,0,18,44.051v2.158l-6.978,1.642A12.948,12.948,0,0,0,1,60.5V63H43V60.5A12.943,12.943,0,0,0,36.065,49H49v9a5,5,0,0,0,10,0V49h1a3,3,0,0,0,3-3V4A3,3,0,0,0,60,1ZM16,3H60a1,1,0,0,1,1,1V9H15V4A1,1,0,0,1,16,3ZM11,28a6.006,6.006,0,0,1,6-6h3.544a8.034,8.034,0,0,0,5-1.753l2.192-1.754A8.789,8.789,0,0,1,29,22c0,1.491-1.717,3-5,3v2c3.912,0,6.091-1.715,6.768-3.651A6.023,6.023,0,0,1,33,28a9.958,9.958,0,0,1-2,5.987V31.515a3.517,3.517,0,0,0-4.822-3.264,11.2,11.2,0,0,1-8.358,0A3.515,3.515,0,0,0,13,31.516v2.472A9.963,9.963,0,0,1,11,28Zm4,8V31.516a1.517,1.517,0,0,1,2.079-1.408,13.186,13.186,0,0,0,9.843,0A1.516,1.516,0,0,1,29,31.516V36a7,7,0,0,1-14,0ZM25.482,48.141l.376.088-.622,5.593-1.977-1.977ZM22,45a8.971,8.971,0,0,0,2-.232v1.955l-2,3.333-2-3.333V44.768A8.971,8.971,0,0,0,22,45Zm-3.482,3.141,2.223,3.705-1.977,1.977-.622-5.593ZM41,60.5V61H35V57H33v4H11V57H9v4H3v-.5A10.958,10.958,0,0,1,11.48,49.8l4.7-1.106,1.054,9.488L22,53.414l4.764,4.764,1.054-9.488,4.7,1.106A10.959,10.959,0,0,1,41,60.5ZM57,37V53H55V37Zm-5.132-2L54,31.8,56.132,35ZM51,37h2V53H51Zm3,24a3,3,0,0,1-3-3V55h6v3A3,3,0,0,1,54,61Zm6-14H59V35.7l-5-7.5-5,7.5V47H29.366L26,46.208V44.05a9.013,9.013,0,0,0,4.946-7.082A11.946,11.946,0,0,0,35,28a8.027,8.027,0,0,0-4.1-6.965,15.056,15.056,0,0,0-2.063-4.589l-.6-.908-3.934,3.148A6.027,6.027,0,0,1,20.544,20H17a7.953,7.953,0,0,0-2,.263V11H61V46a1,1,0,0,1-1,1ZM21,57h2v2H21ZM19,7H17V5h2Zm4,0H21V5h2Zm4,0H25V5h2Zm-6,6h2v2H21Zm4,0h2v2H25Zm-8,0h2v2H17ZM37,27H59V13H37Zm2-12H57V25H39Zm2,2H55v2H41Zm0,4H55v2H41Zm-4,8H47v2H37Zm0,4H47v2H37Zm-4,4H47v2H33Zm0,4H43v2H33Zm12,0h2v2H45Z"
														transform="translate(-1 -1)" fill="#F55C6D"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">
											<span>Experience Design</span>
											<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">Great brand experiences persuade, convert, and inspire
												–and they're built on a foundation of brilliant, strategic design.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon mr-10">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div
									class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-blue-100">
									<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
										data-slideelement-onhover="true"
										data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
										<span
											class="iconbox-label inline-block absolute top-0 right-0 bg-gray-100 rounded-full font-bold uppercase tracking-0/1em text-black">New</span>
										<div class="iconbox-icon-wrap">
											<div class="mb-20 text-65 iconbox-icon-container inline-flex">
												<svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62"
													height="62" viewbox="0 0 62 62">
													<path
														d="M49.3,32.5l-1.73-1,5.224-9.023,1.73,1Zm-2.316,4,1.156-2-1.73-1-1.156,2ZM16,11a5,5,0,1,1-5-5A5.006,5.006,0,0,1,16,11Zm-2,0a3,3,0,1,0-3,3A3,3,0,0,0,14,11Zm37,3v1H61a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2h-.424l-1.158,2H60a3,3,0,0,1,3,3V60a3,3,0,0,1-3,3H4a3,3,0,0,1-3-3V26a3,3,0,0,1,3-3H32.582l-1.158-2H31a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H41V13a1,1,0,0,0-1-1H21v1.716l-1.617.551c-.046.117-.095.233-.146.35l.755,1.534-3.84,3.841-1.535-.755c-.116.052-.232.1-.35.146L13.716,21H8.284l-.551-1.617c-.117-.046-.233-.095-.35-.146l-1.535.755-3.84-3.841.755-1.534c-.052-.116-.1-.233-.146-.35L1,13.716V8.284l1.617-.551c.046-.116.1-.233.147-.349L2.009,5.85l3.84-3.841,1.535.755c.116-.052.232-.1.349-.147L8.284,1h5.432l.551,1.617c.117.046.233.1.35.146l1.535-.755,3.84,3.841-.755,1.534c.052.116.1.233.146.35L21,8.284V10H40a3,3,0,0,1,3,3v2h2V6.816a3,3,0,1,1,2,0V15h2V14a3,3,0,0,1,3-3h6a1,1,0,0,0,1-1V8.816a3,3,0,1,1,2,0V10a3,3,0,0,1-3,3H52a1,1,0,0,0-1,1Zm8-8a1,1,0,1,0,1-1A1,1,0,0,0,59,6ZM45,4a1,1,0,1,0,1-1A1,1,0,0,0,45,4ZM19,9.716l-1.19-.4-.155-.476a7.039,7.039,0,0,0-.419-1.006l-.228-.446.558-1.133L15.75,4.434l-1.133.558-.447-.228a7.044,7.044,0,0,0-1-.42l-.477-.154L12.284,3H9.716l-.4,1.19-.476.155a6.93,6.93,0,0,0-1,.42l-.447.228L6.251,4.435,4.435,6.251l.558,1.133-.228.446a6.98,6.98,0,0,0-.419,1l-.156.476L3,9.716v2.568l1.19.4.155.476a7.039,7.039,0,0,0,.419,1.006l.228.446L4.434,15.75,6.25,17.566l1.133-.558.447.228a7.043,7.043,0,0,0,1,.42l.476.155L9.716,19h2.568l.4-1.19.476-.155a6.93,6.93,0,0,0,1-.42l.447-.228,1.133.558,1.816-1.816-.558-1.133.228-.446a6.991,6.991,0,0,0,.419-1.006l.155-.476,1.191-.4ZM3,26v5H37.213l-3.474-6H4a1,1,0,0,0-1,1ZM61,60V33H53.629L50,39.269v5.409L44.192,47H42V39.269L38.371,33H3V60a1,1,0,0,0,1,1H60A1,1,0,0,0,61,60ZM44,40v4.923l4-1.6V40ZM58.261,25l-3.474,6H61V26a1,1,0,0,0-1-1Zm.005-4H33.734l9.842,17h4.847ZM61,17H31v2H61ZM7,27H5v2H7Zm4,0H9v2h2Zm4,0H13v2h2ZM5,35H33V51H5ZM7,49H31V37H7ZM5,53h8v6H5Zm2,4h4V55H7Zm8-4h8v6H15Zm2,4h4V55H17Zm8-4h8v6H25Zm2,4h4V55H27Zm10-8H35v2h2Zm2,2H59V49H39Zm-4,4H59V53H35Zm0,4H59V57H35Z"
														transform="translate(-1 -1)" fill="#0056be"></path>
												</svg>
											</div>
										</div>
										<h3 class="lqd-iconbox-heading mb-0/7em text-24">Mobile App <svg
												class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12"
												height="32" viewbox="0 0 12 32">
												<path fill="currentColor"
													d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
												</path>
											</svg>
										</h3>
										<div class="contents">
											<p class="text-16">We always focus on technical excellence &amp; strategic
												partnership, while remaining the platform-agnostic.</p>
											<a href="./page-company-services.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
												<span class="btn-txt" data-text="Explore Landing"
													data-transition-delay="true"
													data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
													data-split-text="true"
													data-split-options='{"type":  "chars, words"}'>Explore
													Landing</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon mr-10">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Services -->

				<!-- Start Case Studies -->
				<!-- <section class="lqd-section case-studies py-100" id="works">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-xl-6">
								<div class="w-full flex flex-col items-start lg:items-center lg:text-center"
									data-custom-animations="true"
									data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
									<div
										class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
										<h6 class="ld-fh-element relative lowercase m-0 py-10 px-20">Digital Experience
										</h6>
									</div>
									<div class="ld-fancy-heading relative">
										<h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover"
											data-inview="true" data-transition-delay="true"
											data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
											<span>Some</span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">recent</span>
												<span class="lqd-highlight-inner"></span>
											</mark>
											<span>works we really proud of</span>
										</h2>
									</div>
								</div>
							</div>
							<div class="col col-12" data-custom-animations="true"
								data-ca-options='{"animationTarget": ".lqd-pf-grid", "ease": "power4.out", "initValues": {"y": "-55px", "rotationX" : 25} , "animations": {"y": "0px", "rotationX" : 0}}'>
								<div class="lqd-pf-grid">
									<div class="liquid-filter-items items-center justify-between mb-50">
										<div class="liquid-filter-items-inner flex-grow-1">
											<span class="liquid-filter-items-label">Filter</span>
											<ul class="filter-list filter-list-inline items-center text-0/8em md:hidden"
												id="lqd-pf-filter-case-studies">
												<li class="active" data-filter="*"><span>All</span></li>
												<li data-filter=".branding"><span>Branding</span></li>
												<li data-filter=".custom-print"><span>Custom Print</span></li>
												<li data-filter=".digital-design"><span>Digital Design</span></li>
												<li data-filter=".ecommerce"><span>Ecommerce</span></li>
												<li data-filter=".masonry"><span>Masonry</span></li>
												<li data-filter=".portfolio-single"><span>Portfolio Single</span></li>
											</ul>
											<div class="lqd-filter-dropdown hidden md:block"
												data-form-options='{ "dropdownAppendTo":  "self" }'>
												<select name="lqd-filter-dropdown-lqd-pf-filter-case-studies"
													id="lqd-filter-dropdown-lqd-pf-filter-case-studies">
													<option selected data-filter="*" value="*">All</option>
													<option data-filter=".branding" value=".branding">Branding</option>
													<option data-filter=".custom-print" value=".custom-print">Custom
														Print</option>
													<option data-filter=".digital-design" value=".digital-design">
														Digital Design</option>
													<option data-filter=".ecommerce" value=".ecommerce">Ecommerce
													</option>
													<option data-filter=".masonry" value=".masonry">Masonry</option>
													<option data-filter=".portfolio-single" value=".portfolio-single">
														Portfolio Single</option>
												</select>
											</div>
											<a href="./page-modern-agency-projects.html"
												class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-icon-shaped btn-has-label"
												target="_blank">
												<span class="btn-txt" data-text="See More">See More</span>
											</a>
										</div>
									</div>
									<div class="lqd-pf-row row flex flex-wrap -mx-25" data-liquid-masonry="true"
										data-masonry-options='{"filtersID": "#lqd-pf-filter-case-studies"}'>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item digital-design ecommerce portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="460"
																	src="./assets/images/demo/modern-agency/case-studies-1.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">Nexa Mobile</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Digital Design</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item ecommerce masonry portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="1000"
																	src="./assets/images/demo/modern-agency/case-studies-2.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">Aliens do 3D Automobile
														</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Ecommerce</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item branding custom-print masonry portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="460"
																	src="./assets/images/demo/modern-agency/case-studies-3.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">Photo Retouching</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Branding</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item branding digital-design masonry portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="1000"
																	src="./assets/images/demo/modern-agency/case-studies-4.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">Kontrast</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Branding</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item custom-print ecommerce masonry portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="1000"
																	src="./assets/images/demo/modern-agency/case-studies-5.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">The Portraits</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Custom Print</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
										<div
											class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item custom-print masonry portfolio-single">
											<article
												class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
												<div class="lqd-pf-item-inner">
													<div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
														<figure>
															<figure class="w-full">
																<img width="720" height="462"
																	src="./assets/images/demo/modern-agency/case-studies-6.jpg"
																	class="w-full" alt="portfilio">
															</figure>
														</figure>
														<span
															class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent"
															style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
															<i class="lqd-icn-ess icon-md-arrow-forward"></i>
														</span>
													</div>
													<div class="lqd-pf-details">
														<h5 class="lqd-pf-title mt-0 mb-0/2em">Artboard Studio</h5>
														<ul
															class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
															<li>
																<a href="#">Custom Print</a>
															</li>
														</ul>
													</div>
													<a href="./page-modern-agency-projects.html"
														class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger"
														target="_blank"></a>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Case Studies -->

				<!-- Start Testimonials -->
				<section class="lqd-section testimonials pt-60 pb-50">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-xl-6">
								<div class="w-full flex flex-col items-start text-start lg:items-center lg:text-center"
									data-custom-animations="true"
									data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
									<div
										class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
										<h6 class="ld-fh-element relative m-0 py-10 px-20"> Testimonials
										</h6>
									</div>
									<div class="mb-0/75em ld-fancy-heading relative">
										<h2 class="mb-0/75em ld-fh-element relative">Why Do Our Customers Love Us?</h2>
									</div>
									<div
										class="w-full carousel-container relative carousel-nav-left carousel-nav-lg carousel-nav-left carousel-dots-mobile-outside carousel-dots-mobile-center yes">
										<div class="-mr-15 -ml-15 carousel-items relative"
											data-lqd-flickity='{"prevNextButtons": true, "groupCells": true, "navArrow": "6", "addSlideNumbersToArrows": true, "cellAlign": "left", "buttonsAppendTo": "self", "pageDots": false}'
											tabindex="0">
											<div class="carousel-item flex flex-col justify-center w-full px-15">
												<div class="carousel-item-inner relative w-full">
													<div
														class="text-24 leading-1/6em carousel-item-content relative w-full">
														<p class="mb-1/5em">“Greatest appreciation to you &amp; your
															team for the awesome and outstanding job you did for us. The
															website is just what we wanted, and we were thrilled with
															the speed your team exercised. We feel privileged to have
															Hub Coporation as our online marketing partner!”</p>
														<h5>Ray Sanchez</h5>
														<span class="text-15">CEO &amp; Co-Founder, Sen Group</span>
													</div>
												</div>
											</div>
											<div class="carousel-item flex flex-col justify-center w-full px-15"
												aria-hidden="true">
												<div class="carousel-item-inner relative w-full">
													<div
														class="text-24 leading-1/6em carousel-item-content relative w-full">
														<p class="mb-1/5em">“Greatest appreciation to you &amp; your
															team for the awesome and outstanding job you did for us. The
															website is just what we wanted, and we were thrilled with
															the speed your team exercised. We feel privileged to have
															Hub Coporation as our online marketing partner!”</p>
														<h5>Ray Sanchez</h5>
														<span class="text-15">CEO &amp; Co-Founder, Sen Group</span>
													</div>
												</div>
											</div>
											<div class="carousel-item flex flex-col justify-center w-full px-15"
												aria-hidden="true">
												<div class="carousel-item-inner relative w-full">
													<div
														class="text-24 leading-1/6em carousel-item-content relative w-full">
														<p class="mb-1/5em">“Greatest appreciation to you &amp; your
															team for the awesome and outstanding job you did for us. The
															website is just what we wanted, and we were thrilled with
															the speed your team exercised. We feel privileged to have
															Hub Coporation as our online marketing partner!”</p>
														<h5>Ray Sanchez</h5>
														<span class="text-15">CEO &amp; Co-Founder, Sen Group</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-6 lg:order-first module-last">
								<div class="flex align-content-center items-center relative w-full h-full">
									<div class="module-shape-1 absolute top-65 left-20" data-parallax="true"
										data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
										data-parallax-from='{"x": "80px", "y": "80px"}'
										data-parallax-to='{"x": "0px", "y": "-110px"}'>
										<div class="lqd-imggrp-single block relative">
											<div
												class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
												<figure class="w-full relative">
													<img src="./asset/images/demo/modern-agency/shape-quote.svg"
														alt="quote">
												</figure>
											</div>
										</div>
									</div>
									<div data-parallax="true" class="z-2 w-auto -mr-15percent">
										<div class="lqd-imggrp-single block relative">
											<div
												class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
												<figure class="w-full relative">
													<img width="1650" height="972"
														src='./asset/images/llc/testimonials.png' alt="testimonials">
												</figure>
											</div>
										</div>
									</div>
									<div class="module-shape-2 absolute bottom-10percent" data-parallax="true"
										data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
										data-parallax-from='{"y": "60px"}' data-parallax-to='{"y": "0px"}'>
										<div class="lqd-imggrp-single block relative">
											<div
												class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
												<figure class="w-full relative">
													<img src="./asset/images/demo/modern-agency/shape-dots.svg"
														alt="shape">
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Testimonials -->

				<!-- Start Global Companies -->
				<!-- <section class="lqd-section global-companies py-100">
					<div class="container">
						<div class="row items-center justify-center">
							<div class="col col-12 col-xl-6">
								<div class="lqd-imggrp-single block relative mr-5percent -ml-25percent">
									<div
										class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
										<figure class="w-full relative">
											<img width="1834" height="1552"
												src="./assets/images/demo/modern-agency/global-companies.jpg"
												alt="global companies">
										</figure>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-5 lg:order-first lg:text-center">
								<div class="w-full flex flex-col items-start lg:items-center lg:text-center">
									<div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element"
										data-custom-animations="true"
										data-ca-options='{"animationTarget": ".animation-element, .lqd-split-lines .lqd-lines .split-inner", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
										<h6 class="ld-fh-element relative lowercase m-0 py-10 px-20"> Digital Experience
										</h6>
									</div>
									<div class="mb-0/65em ld-fancy-heading relative">
										<h2 class="mb-0/65em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover"
											data-inview="true" data-transition-delay="true"
											data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
											<span>Trusted by top</span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">global</span>
												<span class="lqd-highlight-inner"></span>
											</mark>
											<span>companies And orginizations</span>
										</h2>
									</div>
									<div class="ld-fancy-heading relative">
										<p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">From bold
											start-ups to big names, Blue Fountain Media is proud of our clients' success
											and passionate about helping them accelerate growth through digital.</p>
									</div>
									<a href="#contact-modal"
										class="btn btn-solid btn-md btn-hover-txt-switch btn-hover-txt-switch-y btn-xl font-bold text-14 uppercase tracking-0/5 whitespace-nowrap bg-primary text-white rounded-100 hover:bg-accent"
										data-lity="#contact-modal">
										<span class="btn-txt" data-text="Learn more" data-split-text="true"
											data-split-options='{"type":  "chars, words"}'>Learn more</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Global Companies -->

				<!-- Start Blog -->
				<!-- <section class="lqd-section blog pt-100 pb-55" id="blog">
					<div class="container">
						<div class="row">
							<div class="col col-12 mb-40">
								<div class="w-full flex flex-col items-center text-center">
									<div class="ld-fancy-heading relative w-full">
										<h6 class="mb-1em ld-fh-element relative lowercase">We're Hub Agency</h6>
									</div>
									<div class="ld-fancy-heading relative w-full">
										<h2 class="ld-fh-element mb-0/5em inline-block relative">Articles daily updated
										</h2>
									</div>
								</div>
							</div>
							<div class="col col-12">
								<div class="row -mr-15 -ml-15">
									<div class="col col-sm-6 col-lg-4 mb-30 px-15 py-0">
										<article
											class="lqd-lp relative lqd-lp-style-6 lqd-lp-hover-img-zoom lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post type-post status-publish format-standard has-post-thumbnail hentry category-blog-single tag-beauty tag-travel">
											<div class="lqd-lp-img overflow-hidden">
												<figure>
													<img width="720" height="510"
														src="./assets/images/demo/modern-agency/blog-1.jpeg"
														alt="modernagencywp">
												</figure>
												<div class="lqd-lp-meta uppercase font-bold relative z-3">
													<span class="screen-reader-text">Tags </span>
													<ul
														class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
														<li>
															<a class="rounded-full" href="#" rel="category">Blog
																Single</a>
														</li>
													</ul>
												</div>
											</div>
											<header class="lqd-lp-header p-2rem">
												<div
													class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center uppercase tracking-0/1em font-bold">
													<div class="lqd-lp-author relative z-3">
														<div class="lqd-lp-author-info">
															<h3 class="mt-0 mb-0 h5">
																<a href="#">modernagencywp</a>
															</h3>
														</div>
													</div>
													<time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">1
														year ago</time>
												</div>
												<h2 class="entry-title lqd-lp-title mt-0/75em mb-0 h5">5 reasons to
													purchase desktop computers</h2>
											</header>
										</article>
									</div>
									<div class="col col-sm-6 col-lg-4 mb-30 px-15 py-0">
										<article
											class="lqd-lp relative lqd-lp-style-6 lqd-lp-hover-img-zoom lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post type-post status-publish format-standard has-post-thumbnail hentry category-blog-single tag-beauty tag-travel">
											<div class="lqd-lp-img overflow-hidden">
												<figure>
													<img width="720" height="510"
														src="./assets/images/demo/modern-agency/blog-2.jpeg"
														alt="modernagencywp">
												</figure>
												<div class="lqd-lp-meta uppercase font-bold relative z-3">
													<span class="screen-reader-text">Tags </span>
													<ul
														class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
														<li>
															<a class="rounded-full" href="#" rel="category">Blog
																Single</a>
														</li>
													</ul>
												</div>
											</div>
											<header class="lqd-lp-header p-2rem">
												<div
													class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center uppercase tracking-0/1em font-bold">
													<div class="lqd-lp-author relative z-3">
														<div class="lqd-lp-author-info">
															<h3 class="mt-0 mb-0 h5">
																<a href="#">modernagencywp</a>
															</h3>
														</div>
													</div>
													<time class="lqd-lp-date" datetime="2020-09-24T06:00:29+00:00">2
														years ago</time>
												</div>
												<h2 class="entry-title lqd-lp-title mt-0/75em mb-0 h5">Utilizing mobile
													technology in the field</h2>
											</header>
										</article>
									</div>
									<div class="col col-sm-6 col-lg-4 mb-30 px-15 py-0">
										<article
											class="lqd-lp relative lqd-lp-style-6 lqd-lp-hover-img-zoom lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post type-post status-publish format-standard has-post-thumbnail hentry category-blog-single tag-spain tag-travel">
											<div class="lqd-lp-img overflow-hidden">
												<figure>
													<img width="720" height="510"
														src="./assets/images/demo/modern-agency/blog-3.jpeg"
														alt="modernagencywp">
												</figure>
												<div class="lqd-lp-meta uppercase font-bold relative z-3">
													<span class="screen-reader-text">Tags </span>
													<ul
														class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
														<li>
															<a class="rounded-full" href="#" rel="category">Blog
																Single</a>
														</li>
													</ul>
												</div>
											</div>
											<header class="lqd-lp-header p-2rem">
												<div
													class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center uppercase tracking-0/1em font-bold">
													<div class="lqd-lp-author relative z-3">
														<div class="lqd-lp-author-info">
															<h3 class="mt-0 mb-0 h5">
																<a href="#">modernagencywp</a>
															</h3>
														</div>
													</div>
													<time class="lqd-lp-date" datetime="2020-09-23T12:14:11+00:00">2
														years ago</time>
												</div>
												<h2 class="entry-title lqd-lp-title mt-0/75em mb-0 h5">Success Story:
													Businessman in Harlem</h2>
											</header>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Blog -->

			</div>
		</main>
@endsection
