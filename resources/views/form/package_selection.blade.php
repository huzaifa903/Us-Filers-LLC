@extends('usfiler_layout.master')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Start Pricing -->
    <section class="lqd-section pricing pt-60 pb-360 bg-transparent transition-all" id="pricing"
        data-section-luminosity="dark" data-parallax="true"
        data-parallax-options='{ "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "120px"}'
        data-parallax-to='{"y": "0"}'>
        <div class="background-overlay bg-bottom-center bg-no-repeat opacity-100 transition-all"
            style="background-image: url(./asset/images/demo/start-hub-1/bubbles-bg.svg);"></div>
        <div class="lqd-shape lqd-shape-top" data-negative="false">
            <svg class="w-1em h-1em left-50percent -translatex-50percent" xmlns="http://www.w3.org/2000/svg"
                viewbox="0 0 1000 100" preserveaspectratio="none">
                <path class="lqd-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"
                    fill="#fff"></path>
            </svg>
        </div>
        <form method="POST" action="{{ url('/select-package') }}">
            @csrf
            <div class="container">
                <div class="row justify-center">
                    <div class="col col-12 col-md-6 col-lg-7 col-xl-6 relative h-full text-center" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
                        <div class="absolute w-auto top-20 module-shape">
                            <div class="lqd-imggrp-single block relative">
                                {{-- <div class="w-50percent lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
                                <figure class="w-full relative">
                                    <img width="368" height="374" src="./asset/images/demo/start-hub-1/shape-pricing.png" alt="pricing">
                                </figure>
                            </div> --}}
                            </div>
                        </div>
                        <div class="mb-20 ld-fancy-heading relative animation-element">
                            <h2 class="mt-0/5em mb-0 ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left"
                                data-inview="true" data-transition-delay="true"
                                data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                <span>Start your business with </span>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">confidence</span>
                                    <span class="lqd-highlight-inner bg-blue-100 left-0 bottom-0"></span>
                                </mark>
                            </h2>
                        </div>
                        <div class="ld-fancy-heading relative px-20 xl:px-0 animation-element">
                            <p class="mb-2/5em leading-25 ld-fh-element inline-block relative">Join over 1,000,000 happy
                                business owners. Get started by choosing your entity type and state of formation.</p>
                        </div>
                        <div class="d-flex">
                            <select id="entity_type" name="entity_type" class="form-select" data-allow-clear="true">
                                <option value="">Select Entity Type</option>
                                <option selected value="LLC">LLC</option>
                            </select>
                            <select id="state" name="state" class="form-select ms-4" data-allow-clear="true">
                                <option value="">Select State</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                            </select>
                        </div>
                        <div class="ld-fancy-heading relative px-20 xl:px-0 animation-element">
                            <p class="mb-2/5em leading-25 ld-fh-element inline-block relative">State-specific pricing will
                                display below once your selection has been made.</p>
                        </div>
                    </div>
                    <div class="col col-12 p-0" data-parallax="true"
                        data-parallax-options='{ "start": "top bottom", "end": "bottom+=0px top"}'
                        data-parallax-from='{"y": "-60px"}' data-parallax-to='{"y": "0px"}'>
                        <div class="module-pricing -mb-340 pt-15 pb-10 sm:m-0">
                            <div class="lqd-tabs lqd-tabs-style-9 lqd-tabs-style-9-alt2 flex flex-col lqd-nav-underline- lqd-tabs-nav-items-not-expanded"
                                data-tabs-options='{"trigger": "click"}'>
                                {{-- <nav class="lqd-tabs-nav-wrap mb-2/5em">
                                <ul class="reset-ul lqd-tabs-nav flex items-center flex-wrap justify-center relative" role="tablist">
                                    <li data-controls="lqd-tab-pricing-monthly" role="presentation">
                                        <a class="text-13 font-medium tracking-0 block active" href="#lqd-tab-pricing-monthly" aria-expanded="false" aria-controls="lqd-tab-pricing-monthly" role="tab" data-bs-toggle="tab">
                                            <span class="lqd-tabs-nav-txt">Monthly Pricing</span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-pricing-annual" role="presentation">
                                        <a class="text-13 font-medium tracking-0 block" href="#lqd-tab-pricing-annual" aria-expanded="false" aria-controls="lqd-tab-pricing-annual" role="tab" data-bs-toggle="tab">
                                            <span class="lqd-tabs-nav-txt">Annual Pricing - Save 30%</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav> --}}
                                <div class="lqd-tabs-content relative">
                                    <div id="lqd-tab-pricing-monthly" role="tabpanel" class="lqd-tabs-pane fade active show">
                                        <div class="pt-50 pb-20 px-20 lg:p-0 module-sections">
                                            <div class="container p-0">
                                                <div class="row m-0">
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-amber-600 ld-fh-element inline-block relative">
                                                                        Platinum</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $
                                                                        535 <small class="font-bold text-13 text-sky-900">One
                                                                            time payment</small></h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Full service features
                                                                        at the best value</p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-amber iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-amber-800 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                {{-- <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal module-btn-1 text-15 mt-15 rounded-6 font-medium leading-2em bg-red-100 text-amber-600"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Simple Plan">Get The
                                                                        Platinum Package</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-blue-800 ld-fh-element inline-block relative">
                                                                        Gold</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $435 <small class="font-bold text-13 text-sky-900">one
                                                                            time payement</small></h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Use customer data to build great and solid product </p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>

                                                                {{-- <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal  text-15 mt-15 rounded-6 font-medium leading-2em bg-blue-100 text-amber-600"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Simple Plan">Get The
                                                                        Platinum Package</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-emerlad-500 ld-fh-element inline-block relative">
                                                                        Silver</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $236 <small class="font-bold text-13 text-sky-900">One
                                                                            time payment</small></h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Use customer data to build great and solid product </p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                {{-- <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal text-15 mt-15 rounded-6 font-medium leading-2em bg-green-100 text-emerlad-500 module-btn-3"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Premium Plan">Get
                                                                        the Silver Package</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lqd-tab-pricing-annual" role=" tabpanel" class="lqd-tabs-pane fade">
                                        <div class="pt-50 pb-20 px-20 lg:p-0 module-sections">
                                            <div class="container p-0">
                                                <div class="row m-0">
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-amber-600 ld-fh-element inline-block relative">
                                                                        Simple Plan</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $10 <small
                                                                            class="font-bold text-13 text-sky-900">/yr</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Use customer data to build great and solid product </p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal text-15 mt-15 rounded-6 font-medium leading-2em bg-red-100 text-amber-600 module-btn-1"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Simple Plan">Join
                                                                        Simple Plan</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-blue-800 ld-fh-element inline-block relative">
                                                                        Standard Plan</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $30 <small
                                                                            class="font-bold text-13 text-sky-900">/yr</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Use customer data to build great and solid product </p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-blue iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-800 bg-blue-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal text-15 mt-15 rounded-6 font-medium leading-2em text-white bg-blue-500 module-btn-2"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Standard Plan">Join
                                                                        Standard Plan</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="co-12 col-md-4 p-0">
                                                        <div
                                                            class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                                            <div
                                                                class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                                                <div class="mb-20 ld-fancy-heading relative">
                                                                    <p
                                                                        class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-emerlad-500 ld-fh-element inline-block relative">
                                                                        Premium Plan</p>
                                                                </div>
                                                                <div class="ld-fancy-heading relative">
                                                                    <h3
                                                                        class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                                        $40 <small
                                                                            class="font-bold text-13 text-sky-900">/yr</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                                                <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                                    <p
                                                                        class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                                        Use customer data to build great and solid product </p>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        99.9 Uptime Guarantee </h3>
                                                                </div>
                                                                <div
                                                                    class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                                    <div class="iconbox-icon-wrap mr-15">
                                                                        <div
                                                                            class="w-25 h-25 icon-green iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-emerlad-500 bg-green-100">
                                                                            <i aria-hidden="true"
                                                                                class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                                        </div>
                                                                    </div>
                                                                    <h3
                                                                        class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                                        Unlimited Storage </h3>
                                                                </div>
                                                                <a href="{{ url('/form-details') }}"
                                                                    class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal text-15 mt-15 rounded-6 font-medium leading-2em bg-green-100 text-emerlad-500 module-btn-3"
                                                                    rel="nofollow">
                                                                    <span class="btn-txt" data-text="Join Premium Plan">Join
                                                                        Premium Plan</span>
                                                                    <span class="btn-icon">
                                                                        <i aria-hidden="true"
                                                                            class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal module-btn-1 text-15 mt-15 rounded-6 font-medium leading-2em bg-red-100 text-amber-600"
                rel="nofollow">
                <span class="btn-txt" data-text="Join Simple Plan">Get ThePlatinum Package</span>
                    <span class="btn-icon">
                        <i aria-hidden="true"
                        class="lqd-icn-ess icon-md-arrow-forward"></i>
                    </span>
            </button>
        </form>
    </section>
    <!-- End Pricing -->


    <!-- Start Faq -->
    <section class="lqd-section faq bg-white transition-all pt-50 pb-90" id="faq">
        <div class="container">
            <div class="row">
                <div class="col col-12 text-center">
                    {{-- <div class="mb-25 lqd-imggrp-single block relative">
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="54" height="54" src="./assets/images/demo/start-hub-3/shape-Message-1.svg" alt="message icon">
                        </figure>
                    </div>
                </div> --}}
                    <div class="ld-fancy-heading relative">
                        <h2 class="ld-fh-element mb-0/5em inline-block relative text-slate-600">Frequently Asked Questions
                        </h2>
                    </div>
                    {{-- <div class="ld-fancy-heading relative">
                    <p class="ld-fh-element mb-0/5em inline-block relative text-18 text-text">Use customer data to build great and solid product experiences that convert.</p>
                </div> --}}
                </div>
                <div class="col col-12 p-0">
                    <section class="lqd-section mt-60">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 col-md-6 p-30">
                                    <div class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill"
                                        id="accordion-question-parent-1" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item panel mb-20 active">
                                            <div class="accordion-heading" role="tab" id="heading-tab-1">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button"
                                                        data-bs-toggle="collapse" href="#collapse-question-tab-1"
                                                        aria-expanded="true" aria-controls="collapse-question-tab-1">
                                                        <span class="accordion-title-txt">
                                                            Does the price quoted include the state filing fee?</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-1" class="accordion-collapse collapse show"
                                                role="tabpanel" aria-labelledby="heading-tab-1"
                                                data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Yes, the price you see at the bottom
                                                    of the page includes the prescribed state fee required to file the
                                                    Articles of Incorporation/Organization. </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-3">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button"
                                                        data-bs-toggle="collapse" href="#collapse-question-tab-3"
                                                        aria-expanded="false" aria-controls="collapse-question-tab-3">
                                                        <span class="accordion-title-txt">
                                                            Will I have the option to act as my own Registered Agent?</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-3" class="accordion-collapse collapse "
                                                role="tabpanel" aria-labelledby="heading-tab-3"
                                                data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Yes, you can act as your own
                                                    Registered Agent. However, we offer the Registered Agent Service free of
                                                    charge for the first year.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 p-30">
                                    <div class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill"
                                        id="accordion-question-parent-2" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-2">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button"
                                                        data-bs-toggle="collapse" href="#collapse-question-tab-2"
                                                        aria-expanded="false" aria-controls="collapse-question-tab-2">
                                                        <span class="accordion-title-txt">Should I reserve my company name
                                                            before placing an order?</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-2" class="accordion-collapse collapse "
                                                role="tabpanel" aria-labelledby="heading-tab-2"
                                                data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Absolutely not. In most cases, we
                                                    file the company within one day of receiving an order. Reserving the
                                                    name can delay the filing. If you have already reserved the name, please
                                                    contact us immediately upon placing an order to submit the filing with
                                                    the name reservation attached to the articles of formation. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel">
                                            <div class="accordion-heading" role="tab" id="heading-tab-4">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button"
                                                        data-bs-toggle="collapse" href="#collapse-question-tab-4"
                                                        aria-expanded="false" aria-controls="collapse-question-tab-4">
                                                        <span class="accordion-title-txt">Will I need to sign
                                                            anything?</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-4" class="accordion-collapse collapse "
                                                role="tabpanel" aria-labelledby="heading-tab-4"
                                                data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">No, documents requiring signatures
                                                    will be signed by our staff. We will sign as the incorporator for
                                                    Corporations, and for LLCs, we will sign as the organizer</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
    </section>
    <!-- End Faq -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
