@extends('pages.layout.app')
@section('content')

    <div id="page" class="site">
        @include('pages.layout.header')

        <main id="primary" class="site-main">


            <article id="post-27029" class="post-27029 page type-page status-publish hentry">

                <header id="hero" class="hero hero-type__color hero-template__other"
                        style="background-image: none; background-color:#ffffff;">
                    <div class="hero-overlay"></div>
                    <div class="container above-overlay" id="gf_3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Hero Title</h1>
                                <h5 class="secondary">Hero Subtitle</h5>
                                <p>Hero Caption</p>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </main>
    </div>


    <div class="entry-content">


        <script src="https://www.google.com/recaptcha/api.js?render=6LfhFyMqAAAAAD7pyXqkz7wKFScFhrcTuqYMv86i"></script>

        <style>
            #belayHireMe {
                margin-top: 40px;
            }

            body {
                overflow-x: hidden;
            }

            #checkbox-container {
                display: flex;
                align-items: flex-start;
                margin-bottom: 2em;
            }

            .form-field-container {
                margin-top: 40px;
                padding: 32px;
                border: solid 1px #12D678;
                border-radius: 8px;
                transition: all 0.5s ease-in-out;
            }

            .form-field-container input {
                border: none;
                border-bottom: 2px solid #939596;
                color: #767676;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 18px;
                font-weight: 400;
                margin-bottom: 2em;
                padding: 8px 16px 8px 16px;
                width: 90%;
            }

            .form-field-container input.error, .form-field-container select.error {
                border-bottom: 2px solid red;
            }

            .form-field-container label, #terms {
                display: block;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 14px;
                font-weight: 700;
                margin-bottom: 5px;
                color: #02293D;
            }

            .form-field-container select {
                appearance: none;
                background-color: transparent;
                border: none;
                border-bottom: 2px solid #939596;
                color: #767676;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 18px;
                font-weight: 400;
                padding: 8px 16px 8px 16px;
                padding-right: 30px; /* Space for the SVG */
                -webkit-appearance: none;
                -moz-appearance: none;
                width: 100%;
                margin-bottom: 2em;
            }

            .form-field-container svg, .multi-select-container svg {
                left: 425px;
                pointer-events: none;
                position: relative;
                top: 0%;
                transform: translateY(-600%);
            }

            .form-page {
                margin: auto;
                opacity: 0;
                position: relative;
                left: 100%; /* Hide them by default */
                transition: opacity 0.5s ease-in-out, left 0.5s ease-in-out; /* Combine transitions */
            }

            .form-page.active {
                opacity: 1;
                left: 0px; /* Show it */
            }

            .form-page.done {
                opacity: 0;
                left: -200%; /* Slide out to the left */
            }

            .form-page button {
                margin-bottom: 20px;
                margin-top: 1em;
            }

            .form-page h2 {
                color: #02293D;
                font-family: 'Roboto Slab', serif;
                font-size: 32px;
                font-style: normal;
                font-weight: 600;
                line-height: 36px;
                margin-bottom: 10px;
                text-align: center;
            }

            .form-page h2, .form-field-container, .gsf-subhead, .post-form-container, .option-field {
                max-width: 530px;
                margin-left: auto;
                margin-right: auto;
            }

            #gsf-title {
                color: #fff;
                font-size: 3.375rem;
                font-family: "Roboto Slab", serif;
                margin-bottom: 1em;
                text-align: center;
                transition: color 0.45s ease-in-out;
            }

            #hero {
                display: none;
            }

            .hidden {
                display: none;
            }

            .input:focus, select:focus {
                outline: none !important;
            }

            .last-field {
                margin-bottom: 0 !important;
            }

            .msgsf-container {
                margin: 0 auto;
                text-align: left;
                min-height: 900px;
                overflow: hidden;
                background: linear-gradient(90deg, #12D678 0%, #377DA1 100%);
            }

            #msgsf-inner-container {
                padding: 34px 44px 34px 44px;
                width: 688px;
                height: 1000px;
                background: #FFFFFF;
                border-radius: 10px;
                margin: auto;
                overflow: hidden;
                position: relative;
            }

            #msgsf-white-background {
                padding: 97px 44px;
                background-color: rgba(255, 255, 255, 0);
                transition: background-color 0.25s ease-in-out;
                padding-top: 10em;
            }

            .multi-select-box {
                appearance: none;
                background-color: transparent;
                border-bottom: 1px solid #E2E4E5;
                color: #767676;
                cursor: pointer;
                display: none;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 18px;
                font-weight: 400;
                padding: 8px 16px 8px 16px;
                -webkit-appearance: none;
                -moz-appearance: none;
                display: block;
            }

            .multi-select-container {
                margin-bottom: 2em;
                position: relative;
                width: 100%;
            }

            .multi-select-container select {
                display: none;
            }

            .multi-select-option {
                cursor: pointer;
                padding: 10px;
            }

            .multi-select-option:hover {
                background-color: #f0f0f0;
            }

            .multi-select-option.selected {
                background-color: #e0e0e0;
            }

            .multi-select-options {
                background-color: white;
                border: 1px solid #E2E4E5;
                display: none;
                max-height: 200px;
                overflow-y: auto;
                position: absolute;
                width: 100%;
                z-index: 1000;
            }

            .navbar-blue {
                background: rgb(2, 41, 61) !important;
            }

            .next-step-button, .option-field {
                background: #12D678;
                border: solid 1px #12D678;
                border-radius: 4px;
                color: #02293D;
                cursor: pointer;
                font-family: 'Roboto Condensed', 'Noto Sans Symbols', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                height: 48px;
                letter-spacing: 0.1em;
                line-height: 24px;
                padding: 0px 24px 0px 32px;
                text-transform: uppercase;
            }

            .option {
                align-items: center;
                background-color: white;
                border: 1px solid #12D678;
                border-radius: 8px;
                color: #767676;
                cursor: pointer;
                display: flex;
                font-family: 'Source Sans Pro';
                font-size: 18px;
                font-style: normal;
                font-weight: 700;
                height: 50px;
                justify-content: center;
                line-height: 28px;
                width: 50%;
            }

            .option-container {
                display: flex;
                gap: 10px;
                margin-bottom: 20px;
            }

            .option-field {
                align-items: center;
                cursor: pointer;
                display: flex;
                height: 75px;
                justify-content: center;
                line-height: 28px;
                max-width: 425px;
                padding-left: 20px;
                font-size: 24px;
            }

            .option-field strong {
                margin-left: 5px;
            }

            .option-field.selected, .option.selected {
                background-color: #12D678;
                color: #02293D;
            }

            .post-form-container {
                max-width: 480px;
            }

            #post-form-container-4, .gsf-subhead {
                text-align: center;
            }

            .progress-indicator {
                display: flex;
                justify-content: center;
            }

            .progress-indicator .dot {
                background-color: #fff;
                border-radius: 50%;
                border: solid 1px #02293D;
                height: 12px;
                transition: background-color 0.5s ease-in-out;
                width: 12px;
                cursor: pointer;
            }

            .progress-indicator .dot.active {
                background-color: #12d678;
                border-color: #12d678;
            }

            .progress-indicator-container {
                margin: 1em auto 5em auto;
                margin-bottom: 20px;
                max-width: 425px;
                justify-content: center;
            }

            .progress-indicator-line {
                bottom: 11px;
                border: 1px solid #02293D;
                height: 0px;
                position: relative;
                width: 85px;
                margin-left: 8px;
                margin-right: 8px;
            }

            #may_we_text_you_at_this_number__c {
                width: 5%;
                margin: 10px;
                transform: scale(1.75);
            }

            #navbar-middle, #belay-hire-btn {
                display: none !important;
            }

            #promotional-messages-text {
                width: 95%;
                font-weight: normal;
                font-size: 12px;
            }

            #terms {
                margin-top: 1em;
            }

            .text-message-opt-in-text {
                color: #02293D;
                font-family: 'Source Sans Pro';
                font-size: 14px;
                font-style: normal;
                font-weight: 700;
                line-height: 20px;
            }

            .text-message-opt-in-text-disc {
                color: #02293D;
                font-family: 'Source Sans Pro';
                font-size: 10px;
                font-style: normal;
                font-weight: 400;
                line-height: 140%;
            }

            @media only screen and (max-width: 800px) {
                #belayHireMe {
                    margin-top: 15px;
                }

                .form-field-container svg, .multi-select-container svg {
                    display: none;
                }

                #gsf-title {
                    font-size: 2.5em;
                }

                #msgsf-inner-container {
                    padding: 34px 44px 34px 44px;
                    width: 98%;
                    height: 1000px;
                    margin-left: 1%;
                    margin-right: 1%;
                }

                #msgsf-white-background {
                    padding: 97px 0px;
                }

                .option-field {
                    font-size: 15px;
                }
            }

            @media only screen and (max-width: 400px) {
                .option-field {
                    font-size: 12px;
                }
            }
        </style>


        <div class="msgsf-container" id="msgsf-outer-container">
            <div id="msgsf-white-background">
                <h1 id="gsf-title">Getting Started Is The Easiest <br>Thing You'll Do Today</h1>
                <div id="msgsf-inner-container">
                    <div class="progress-indicator-container">
                        <div class="progress-indicator">
                            <div class="dot active" id="dot-1"></div>
                            <hr class="progress-indicator-line">
                            <div class="dot" id="dot-2"></div>
                            <hr class="progress-indicator-line">
                            <div class="dot" id="dot-3"></div>
                            <hr class="progress-indicator-line">
                            <div class="dot" id="dot-4"></div>
                        </div>
                    </div>

                    <form id="multiStepForm" action="{{ route('store.contact') }}" method="POST"
                          data-hs-cf-bound="true">

                        <!-- Capture msclkid from Microsoft Ads -->
                        <input type="hidden" name="msclkid" id="msclkid-field" value="">

                        <!-- Page 1 -->
                        <div class="form-page active" id="form-page-1" style="transform: translateY(0px);">
                            <div class="form-page-text">
                                <h2>Ready to make a move?</h2>
                                <p class="gsf-subhead">Tell us about yourself in the form below.</p>
                            </div>
                            <div class="form-field-container">
                                <label for="firstname">First Name*</label>
                                <input type="text" id="firstname" name="f_name" required="">
                                <label for="lastname">Last Name*</label>
                                <input type="text" id="lastname" name="l_name" required="">
                                <label for="email">Email Address*</label>
                                <input type="email" id="email" name="email" required="" class="last-field">
                                <!-- Hidden fields for tracking unique user sessions, BookIt, Recapcha, and UTM codes -->
{{--                                <input type="hidden" id="form_submission_id" name="form_submission_id"--}}
{{--                                       value="6841abb82bde3">--}}
{{--                                <input type="ld_bookit_log_id" id="ld_bookit_log_id" name="ld_bookit_log_id" required=""--}}
{{--                                       class="hidden">--}}
{{--                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">--}}
{{--                                <input type="hidden" id="utm_campaign" name="input_18" value="">--}}
{{--                                <input type="hidden" id="utm_source" name="input_17" value="">--}}
{{--                                <input type="hidden" id="utm_medium" name="input_34" value="">--}}
                            </div>
                            <div class="post-form-container">
                                <label id="terms">By clicking SUBMIT you agree to {{ env('APP_NAME') }}'s <a
                                        href="../terms-conditions/index.html">Terms of Service</a> and the use of
                                    personal data as explained in {{ env('APP_NAME') }}'s <a href="../privacy-policy/index.html">Privacy
                                        Policy</a></label>
                                <button type="button" class="next-step-button" id="ns1" onclick="nextPage(0, 1)">
                                    Submit <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>

                        <!-- Page 2 (Potential Redirect) -->
                        <div class="form-page" id="form-page-2" style="transform: translateY(-620px);">
                            <div class="form-page-text">
                                <h2>Before we get started, <br>we just need to know what brings you here</h2>
                            </div>
                            <div class="form-field-container">
                                <div class="option-field" id="hireBelay" onclick="nextPage(1, 2)">I want to hire
                                    <strong>{{ env('APP_NAME') }}</strong></div>
                                <div class="option-field" id="belayHireMe"
                                     onclick="location.href = '../work-with-us/index.html'">I want {{ env('APP_NAME') }} to hire
                                    <strong>me</strong></div>
                            </div>
                        </div>

                        <!-- Page 3 -->
                        <div class="form-page" id="form-page-3" style="transform: translateY(-1024px);">
                            <div class="form-page-text">
                                <h2>Tell us about your organization</h2>
                                <p class="gsf-subhead"></p>
                            </div>
                            <div class="form-field-container">
                                <label for="company">Organization Name*</label>
                                <input type="text" id="company" name="company" required="">
                                <label for="phone">Phone Number*</label>
                                <input type="text" id="phone" name="phone" required="">
                                <div id="checkbox-container">
                                    <input type="checkbox" id="may_we_text_you_at_this_number__c"
                                           name="promotional-messages" value="1">
                                    <label for="promotional-messages" id="promotional-messages-text">By checking this
                                        box I agree to receive automated promotional messages. This agreement is not a
                                        condition of purchase. Up to 4 msgs/month. Reply STOP to opt out or HELP for
                                        help. Message &amp; data rates apply. Terms and privacy policy found at
                                        slicktext.com/tc.php
                                    </label>
                                </div>
                            </div>
                            <div class="post-form-container">
                                <button type="button" class="next-step-button" id="ns3" onclick="nextPage(2, 3)">Next
                                    Step <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>

                        <!-- Page 4 -->
                        <div class="form-page" id="form-page-4" style="transform: translateY(-1603px);">
                            <div class="form-page-text">
                                <h2>Almost done...</h2>
                                <p class="gsf-subhead"></p>
                            </div>
                            <div class="form-field-container">
                                <label for="what_service_line_are_you_interested_in_">What service are you most
                                    interested in?*</label>
                                <select id="what_service_line_are_you_interested_in_" required=""
                                        name="what_service_line_are_you_interested_in_"
                                        onchange="showServicesConditionalField()">
                                    <option value="" selected="selected" class="gf_placeholder"></option>
                                    <option value="Virtual Assistant">Virtual Assistants</option>
                                    <option value="Bookkeeper">Accounting Services</option>
                                    <option value="Social Media Manager">Marketing Assistant / Social Media Manager
                                    </option>
                                </select>
                                <svg width="17" height="11" viewBox="0 0 17 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.27771 10.5378C8.87747 11.033 8.12253 11.033 7.72229 10.5378L0.72313 1.87862C0.194556 1.22468 0.659993 0.250002 1.50084 0.250002L15.4992 0.25C16.34 0.25 16.8054 1.22468 16.2769 1.87862L9.27771 10.5378Z"
                                        fill="#12D678"></path>
                                </svg>
                                <div id="services-conditional-field" class="hidden">
                                    <label id="services-conditional-label" for="accounting_service_interest">Which area
                                        of Accounting Services are you interested?*</label>
                                    <select name="accounting_service_interest" id="accounting_service_interest">
                                        <option value="" selected="selected" class="gf_placeholder"></option>
                                        <option value="CFO">CFO/Controller</option>
                                        <option value="Bookkeeper">Bookkeeper</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="Enterprise Solutions">Enterprise Solutions</option>
                                        <option value="I don't know yet">I don't know yet</option>
                                    </select>
                                    <svg width="17" height="11" viewBox="0 0 17 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.27771 10.5378C8.87747 11.033 8.12253 11.033 7.72229 10.5378L0.72313 1.87862C0.194556 1.22468 0.659993 0.250002 1.50084 0.250002L15.4992 0.25C16.34 0.25 16.8054 1.22468 16.2769 1.87862L9.27771 10.5378Z"
                                            fill="#12D678"></path>
                                    </svg>
                                </div>
                                <div id="services-conditional-field-2" class="hidden">
                                    <label id="services-conditional-label-2" for="revenue_range">Annual Revenue*</label>
                                    <select name="revenue_range" id="revenue_range">
                                        <option value="" selected="selected" class="gf_placeholder"></option>
                                        <option value="$0 - $250K">$0 - $250k</option>
                                        <option value="$250K - $750K">$250K - $750K</option>
                                        <option value="$750K - $1.5M">$750K - $1.5M</option>
                                        <option value="$1.5M - $10M">$1.5M - $10M</option>
                                        <option value="$10M - $50M">$10M - $50M</option>
                                    </select>
                                    <svg width="17" height="11" viewBox="0 0 17 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.27771 10.5378C8.87747 11.033 8.12253 11.033 7.72229 10.5378L0.72313 1.87862C0.194556 1.22468 0.659993 0.250002 1.50084 0.250002L15.4992 0.25C16.34 0.25 16.8054 1.22468 16.2769 1.87862L9.27771 10.5378Z"
                                            fill="#12D678"></path>
                                    </svg>
                                </div>
                                <label for="source">How did you hear about us?*</label>
                                <select name="source" id="source" required="" onchange="showConditionalField()">
                                    <option value="" selected="selected" class="gf_placeholder"></option>
                                    <option value="Advertisement">Advertisement (podcast, newsletter ads, etc)</option>
                                    <option value="Carey Nieuwhof">Carey Nieuwhof</option>
                                    <option value="Donald Miller">Don Miller</option>
                                    <option value="Entreleadership/ Dave Ramsey">Entreleadership/ Dave Ramsey</option>
                                    <option value="Event / Conference">Event/Conference</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Online Search">Online Search</option>
                                    <option value="John Maxwell">Maxwell Leadership</option>
                                    <option value="Michael Hyatt">Michael Hyatt/Full Focus</option>
                                    <option value="Referral">Referral</option>
                                    <option value="The Perfect RIA">The Perfect RIA</option>
                                    <option value="Other">Other</option>
                                </select>
                                <svg width="17" height="11" viewBox="0 0 17 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.27771 10.5378C8.87747 11.033 8.12253 11.033 7.72229 10.5378L0.72313 1.87862C0.194556 1.22468 0.659993 0.250002 1.50084 0.250002L15.4992 0.25C16.34 0.25 16.8054 1.22468 16.2769 1.87862L9.27771 10.5378Z"
                                        fill="#12D678"></path>
                                </svg>
                                <div id="conditional-field" class="hidden">
                                    <label id="conditional-label" for="lead_source___details__referral_"></label>
                                    <input type="text" name="lead_source___details__referral_"
                                           id="lead_source___details__referral_">
                                </div>
                                <!-- ZI hidden fields -->
                                <input type="hidden" id="ZI_Contact_ID" name="ZI_Contact_ID" value="">
                                <input type="hidden" id="ZI_First_Name" name="ZI_First_Name" value="">
                                <input type="hidden" id="ZI_Middle_Name" name="ZI_Middle_Name" value="">
                                <input type="hidden" id="ZI_Last_Name" name="ZI_Last_Name" value="">
                                <input type="hidden" id="ZI_Full_Name" name="ZI_Full_Name" value="">
                                <input type="hidden" id="ZI_Job_Title" name="ZI_Job_Title" value="">
                                <input type="hidden" id="ZI_Direct_Phone_Number" name="ZI_Direct_Phone_Number" value="">
                                <input type="hidden" id="ZI_Business_Email" name="ZI_Business_Email" value="">
                                <input type="hidden" id="ZI_Gender" name="ZI_Gender" value="">
                                <input type="hidden" id="ZI_Job_Function" name="ZI_Job_Function" value="">
                                <input type="hidden" id="ZI_Management_Level" name="ZI_Management_Level" value="">
                                <input type="hidden" id="ZI_Department" name="ZI_Department" value="">
                                <input type="hidden" id="ZI_Supplemental_Email" name="ZI_Supplemental_Email" value="">
                                <input type="hidden" id="ZI_Mobile_Phone_Number" name="ZI_Mobile_Phone_Number" value="">
                                <input type="hidden" id="ZI_Contact_Accuracy_Score" name="ZI_Contact_Accuracy_Score"
                                       value="">
                                <input type="hidden" id="ZI_Contact_Accuracy_Grade" name="ZI_Contact_Accuracy_Grade"
                                       value="">
                                <input type="hidden" id="ZI_Contact_Street" name="ZI_Contact_Street" value="">
                                <input type="hidden" id="ZI_Contact_City" name="ZI_Contact_City" value="">
                                <input type="hidden" id="ZI_Contact_State" name="ZI_Contact_State" value="">
                                <input type="hidden" id="ZI_Contact_Country" name="ZI_Contact_Country" value="">
                                <input type="hidden" id="ZI_Contact_Zip" name="ZI_Contact_Zip" value="">
                                <input type="hidden" id="ZI_ZoomInfo_Company_ID" name="ZI_ZoomInfo_Company_ID" value="">
                                <input type="hidden" id="ZI_Company_Name" name="ZI_Company_Name" value="">
                                <input type="hidden" id="ZI_Company_Website" name="ZI_Company_Website" value="">
                                <input type="hidden" id="ZI_Company_LinkedIn_URL" name="ZI_Company_LinkedIn_URL"
                                       value="">
                                <input type="hidden" id="ZI_Company_Phone" name="ZI_Company_Phone" value="">
                                <input type="hidden" id="ZI_Company_Revenue" name="ZI_Company_Revenue" value="">
                                <input type="hidden" id="ZI_Company_Number_of_Employees"
                                       name="ZI_Company_Number_of_Employees" value="">
                                <input type="hidden" id="ZI_Company_SIC" name="ZI_Company_SIC" value="">
                                <input type="hidden" id="ZI_Company_NAICS" name="ZI_Company_NAICS" value="">
                                <input type="hidden" id="ZI_Company_Street" name="ZI_Company_Street" value="">
                                <input type="hidden" id="ZI_Company_City" name="ZI_Company_City" value="">
                                <input type="hidden" id="ZI_Company_State" name="ZI_Company_State" value="">
                                <input type="hidden" id="ZI_Company_Country" name="ZI_Company_Country" value="">
                                <input type="hidden" id="ZI_Company_Zip_Code" name="ZI_Company_Zip_Code" value="">
                                <input type="hidden" id="ZI_Primary_Industry" name="ZI_Primary_Industry" value="">
                                <input type="hidden" id="ZI_Industry_Hierarchical_Category"
                                       name="ZI_Industry_Hierarchical_Category" value="">
                                <input type="hidden" id="ZI_Marketing_Budget" name="ZI_Marketing_Budget" value="">
                                <input type="hidden" id="ZI_IT_Budget" name="ZI_IT_Budget" value="">
                                <input type="hidden" id="ZI_Finance_Budget" name="ZI_Finance_Budget" value="">
                                <input type="hidden" id="ZI_HR_Budget" name="ZI_HR_Budget" value="">
                                <input type="hidden" id="ZI_IsCanada" name="ZI_IsCanada" value="">
                                <input type="hidden" id="ZI_IsCalifornia" name="ZI_IsCalifornia" value="">
                                <input type="hidden" id="ZI_Looks_Like_EU" name="ZI_Looks_Like_EU" value="">
                                <input type="hidden" id="ZI_Looks_Like_Canada" name="ZI_Looks_Like_Canada" value="">
                                <input type="hidden" id="ZI_Match_Source" name="ZI_Match_Source" value="">
                                <input type="hidden" id="ZI_Match_Type" name="ZI_Match_Type" value="">
                                <input type="hidden" id="ZI_Free_Email" name="ZI_Free_Email" value="">
                                <input type="hidden" id="ZI_Generic_Email" name="ZI_Generic_Email" value="">
                                <input type="hidden" id="ZI_Malformed_Email" name="ZI_Malformed_Email" value="">
                                <input type="hidden" id="ZI_NeverBounce_Status" name="ZI_NeverBounce_Status" value="">
                                <input type="hidden" id="amb_short_code" name="amb_short_code" value="">
                                <input type="hidden" id="amb_campaign_uid" name="amb_campaign_uid" value="">
                            </div>
                            <div class="post-form-container" id="post-form-container-4">
                                <button type="button" class="next-step-button" id="ns4"
                                        onclick="nextPage(3, 4); firePixel();">Submit
                                </button>
                            </div>
                        </div>

                        <!-- Page 5 -->
                        <div class="form-page" id="form-page-5" style="transform: translateY(-2101px);">
                            <div class="form-page-text">
                                <h2>Thank you for your submission. One of our Solutions Consultants will be in touch
                                    shortly.</h2>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            // Fire ADSRVR pixel
            function firePixel() {
                var pixel = document.createElement("img");
                pixel.src = "https://insight.adsrvr.org/track/pxl/?adv=a5fb0tf&amp;ct=0:4wg84fm&amp;fmt=3";
                pixel.style = "display:none;";
                document.body.appendChild(pixel);
            }

            // Mobile keyboard enter button behavior
            document.querySelectorAll('.form-page').forEach((page, index) => {
                const inputs = page.querySelectorAll('input, select');
                const nextButton = page.querySelector('.next-step-button');

                inputs.forEach(input => {
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            event.preventDefault();
                            if (nextButton) {
                                nextButton.click();
                            }
                        }
                    });
                });
            });

            // Bookit / Leandata
            var _ld_scriptEl = document.createElement('script');
            _ld_scriptEl.src = 'https://cdn.leandata.com/js-snippet/ld-book-v2.js';
            _ld_scriptEl.addEventListener('load', function () {
                LDBookItV2.initialize('00D1U000000EKWSUA4', 'New Prospect', true);
                var BIID = LDBookItV2.getUniqueId();
                // Set the value of the input field with ID 'ld_bookit_log_id' to BIID
                document.getElementById('ld_bookit_log_id').value = BIID;
                console.log(document.getElementById('ld_bookit_log_id').value);
            });
            document.body.appendChild(_ld_scriptEl);

            function showConditionalField() {
                var selectElement = document.getElementById('source');
                var selectedValue = selectElement.value;
                var conditionalField = document.getElementById('conditional-field');
                var conditionalLabel = document.getElementById('conditional-label');
                var conditionalReferralInput = document.getElementById('lead_source___details__referral_');

                if (selectedValue === 'Advertisement') {
                    conditionalLabel.textContent = 'What advertisement?*';
                    conditionalField.classList.remove('hidden');
                    conditionalReferralInput.setAttribute('required', 'true'); // Add required
                } else if (selectedValue === 'Event / Conference') {
                    conditionalLabel.textContent = 'What event did you attend?*';
                    conditionalField.classList.remove('hidden');
                    conditionalReferralInput.setAttribute('required', 'true'); // Add required
                } else if (selectedValue === 'Referral') {
                    conditionalLabel.textContent = 'Who may we thank for referring you?*';
                    conditionalField.classList.remove('hidden');
                    conditionalReferralInput.setAttribute('required', 'true'); // Add required
                } else if (selectedValue === 'Other') {
                    conditionalLabel.textContent = 'How did you hear about BELAY?*';
                    conditionalField.classList.remove('hidden');
                    conditionalReferralInput.setAttribute('required', 'true'); // Add required
                } else {
                    conditionalField.classList.add('hidden');
                    conditionalReferralInput.removeAttribute('required'); // Remove required
                }
            }

            function showServicesConditionalField() {
                var selectElement = document.getElementById('what_service_line_are_you_interested_in_');
                var selectedValue = selectElement.value;
                var conditionalField = document.getElementById('services-conditional-field');
                var conditionalServicesSelect = document.getElementById('accounting_service_interest');
                var conditionalField2 = document.getElementById('services-conditional-field-2');
                var conditionalServicesInput = document.getElementById('revenue_range');

                if (selectedValue === 'Bookkeeper') {
                    conditionalField.classList.remove('hidden');
                    conditionalServicesSelect.setAttribute('required', 'true'); // Add required
                    conditionalField2.classList.remove('hidden');
                    conditionalServicesInput.setAttribute('required', 'true'); // Add required
                } else {
                    conditionalField.classList.add('hidden');
                    conditionalServicesSelect.removeAttribute('required'); // Remove required
                    conditionalField2.classList.add('hidden');
                    conditionalServicesInput.removeAttribute('required'); // Remove required
                }
            }

            function selectYesNoOption(option) {
                const yesOption = document.getElementById('yesOption');
                const noOption = document.getElementById('noOption');

                if (option === 'yes') {
                    yesOption.classList.add('selected');
                    noOption.classList.remove('selected');
                } else {
                    noOption.classList.add('selected');
                    yesOption.classList.remove('selected');
                }
            }

            function nextPage(currentPage, destinationPage) {
                const form = document.getElementById('multiStepForm');
                var inputs = form.querySelectorAll('.form-page.active input[required], .form-page.active select[required]');
                let valid = true;
                let errorMessages = [];
                var zBResponse = "";

                if (destinationPage > currentPage) {
                    const phoneRegex = /^\(?\d{3}\)?[-\s]?\d{3}[-\s]?\d{4}$/;
                    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                    inputs.forEach(input => {
                        if (!input.value) {
                            input.classList.add('error');

                            // Get the label associated with the input
                            const label = document.querySelector(`label[for="${input.id}"]`);
                            const labelText = label ? label.textContent : input.name; // Fallback to input name if label not found

                            errorMessages.push(`Please fill out ${labelText}`);
                            valid = false;
                        } else {
                            input.classList.remove('error');

                            // Check if the input value exceeds 255 characters
                            if (input.value.length > 255) {
                                input.classList.add('error');
                                errorMessages.push(`The ${input.name} field must not exceed 255 characters.`);
                                valid = false;
                            }

                            // Phone number validation
                            if (input.id === 'phone' && !phoneRegex.test(input.value)) {
                                input.classList.add('error');
                                errorMessages.push('Please enter a valid phone number.');
                                valid = false;
                            }

                            // Email validation
                            if (input.id === 'email' && !emailRegex.test(input.value)) {
                                input.classList.add('error');
                                errorMessages.push('Please enter a valid email address.');
                                valid = false;
                            }
                        }
                    });

                    if (!valid) {
                        alert(errorMessages.join('\n'));
                        return;
                    }

                    // ZeroBounce API call
                    const emailInput = document.getElementById('email');
                    if (emailInput && emailInput.value) {
                        const apiUrl = `https://api.zerobounce.net/v2/validate?api_key=7a1c566286754e089fe8c29e30a04361&email=${encodeURIComponent(emailInput.value)}`;

                        fetch(apiUrl)
                            .then(response => response.json())
                            .then(data => {
                                zBResponse = data.status;
                                console.log(zBResponse);
                                if (['invalid', 'spamtrap', 'abuse', 'do_not_mail'].includes(data.status)) {
                                    emailInput.classList.add('error');
                                    errorMessages.push('The email entered may be invalid. Please enter a valid email address.');
                                    valid = false;
                                    alert(errorMessages.join('\n'));
                                } else {
                                    // Proceed with form submission
                                    submitFormData();
                                }
                            })
                            .catch(error => {
                                console.error('Error validating email:', error);
                                // Proceed with form submission if API call fails
                                submitFormData();
                            });
                    } else {
                        // If no email input, proceed with form submission
                        submitFormData();
                    }
                } else {
                    // Moving to a previous page, no validation needed
                    updateFormDisplay();
                }

                async function submitFormData() {
                    var hs_response = "";
                    var hs_recapcha_response = "";
                    var bi_response = "";
                    var bi_recapcha_response = "";

                    function submitToWPDB(includeAPI) {
                        // Gather form data for WP storage
                        var WPFormData = new FormData();
                        WPFormData.append('action', 'save_form_data');
                        WPFormData.append('form_submission_id', document.getElementById('form_submission_id').value);
                        WPFormData.append('firstname', document.getElementById('firstname').value);
                        WPFormData.append('lastname', document.getElementById('lastname').value);
                        WPFormData.append('email', document.getElementById('email').value);
                        WPFormData.append('ld_bookit_log_id', document.getElementById('ld_bookit_log_id').value);
                        WPFormData.append('input_18', document.getElementById('utm_campaign').value);
                        WPFormData.append('input_17', document.getElementById('utm_source').value);
                        WPFormData.append('input_34', document.getElementById('utm_medium').value);
                        WPFormData.append('company', document.getElementById('company').value);
                        WPFormData.append('phone', document.getElementById('phone').value);
                        WPFormData.append('promotional-messages', document.getElementById('may_we_text_you_at_this_number__c').value);
                        WPFormData.append('what_service_line_are_you_interested_in_', document.getElementById('what_service_line_are_you_interested_in_').value);
                        WPFormData.append('accounting_service_interest', document.getElementById('accounting_service_interest').value);
                        WPFormData.append('source', document.getElementById('source').value);
                        WPFormData.append('lead_source___details__referral_', document.getElementById('lead_source___details__referral_').value);
                        WPFormData.append('ZI_Contact_ID', document.getElementById('ZI_Contact_ID').value);
                        WPFormData.append('ZI_First_Name', document.getElementById('ZI_First_Name').value);
                        WPFormData.append('ZI_Middle_Name', document.getElementById('ZI_Middle_Name').value);
                        WPFormData.append('ZI_Last_Name', document.getElementById('ZI_Last_Name').value);
                        WPFormData.append('ZI_Full_Name', document.getElementById('ZI_Full_Name').value);
                        WPFormData.append('ZI_Job_Title', document.getElementById('ZI_Job_Title').value);
                        WPFormData.append('ZI_Direct_Phone_Number', document.getElementById('ZI_Direct_Phone_Number').value);
                        WPFormData.append('ZI_Business_Email', document.getElementById('ZI_Business_Email').value);
                        WPFormData.append('ZI_Gender', document.getElementById('ZI_Gender').value);
                        WPFormData.append('ZI_Job_Function', document.getElementById('ZI_Job_Function').value);
                        WPFormData.append('ZI_Management_Level', document.getElementById('ZI_Management_Level').value);
                        WPFormData.append('ZI_Department', document.getElementById('ZI_Department').value);
                        WPFormData.append('ZI_Supplemental_Email', document.getElementById('ZI_Supplemental_Email').value);
                        WPFormData.append('ZI_Mobile_Phone_Number', document.getElementById('ZI_Mobile_Phone_Number').value);
                        WPFormData.append('ZI_Contact_Accuracy_Score', document.getElementById('ZI_Contact_Accuracy_Score').value);
                        WPFormData.append('ZI_Contact_Accuracy_Grade', document.getElementById('ZI_Contact_Accuracy_Grade').value);
                        WPFormData.append('ZI_Contact_Street', document.getElementById('ZI_Contact_Street').value);
                        WPFormData.append('ZI_Contact_City', document.getElementById('ZI_Contact_City').value);
                        WPFormData.append('ZI_Contact_State', document.getElementById('ZI_Contact_State').value);
                        WPFormData.append('ZI_Contact_Country', document.getElementById('ZI_Contact_Country').value);
                        WPFormData.append('ZI_Contact_Zip', document.getElementById('ZI_Contact_Zip').value);
                        WPFormData.append('ZI_ZoomInfo_Company_ID', document.getElementById('ZI_ZoomInfo_Company_ID').value);
                        WPFormData.append('ZI_Company_Name', document.getElementById('ZI_Company_Name').value);
                        WPFormData.append('ZI_Company_Website', document.getElementById('ZI_Company_Website').value);
                        WPFormData.append('ZI_Company_LinkedIn_URL', document.getElementById('ZI_Company_LinkedIn_URL').value);
                        WPFormData.append('ZI_Company_Phone', document.getElementById('ZI_Company_Phone').value);
                        WPFormData.append('ZI_Company_Revenue', document.getElementById('ZI_Company_Revenue').value);
                        WPFormData.append('ZI_Company_Number_of_Employees', document.getElementById('ZI_Company_Number_of_Employees').value);
                        WPFormData.append('ZI_Company_SIC', document.getElementById('ZI_Company_SIC').value);
                        WPFormData.append('ZI_Company_NAICS', document.getElementById('ZI_Company_NAICS').value);
                        WPFormData.append('ZI_Company_Street', document.getElementById('ZI_Company_Street').value);
                        WPFormData.append('ZI_Company_City', document.getElementById('ZI_Company_City').value);
                        WPFormData.append('ZI_Company_State', document.getElementById('ZI_Company_State').value);
                        WPFormData.append('ZI_Company_Country', document.getElementById('ZI_Company_Country').value);
                        WPFormData.append('ZI_Company_Zip_Code', document.getElementById('ZI_Company_Zip_Code').value);
                        WPFormData.append('ZI_Primary_Industry', document.getElementById('ZI_Primary_Industry').value);
                        WPFormData.append('ZI_Industry_Hierarchical_Category', document.getElementById('ZI_Industry_Hierarchical_Category').value);
                        WPFormData.append('ZI_Marketing_Budget', document.getElementById('ZI_Marketing_Budget').value);
                        WPFormData.append('ZI_IT_Budget', document.getElementById('ZI_IT_Budget').value);
                        WPFormData.append('ZI_Finance_Budget', document.getElementById('ZI_Finance_Budget').value);
                        WPFormData.append('ZI_HR_Budget', document.getElementById('ZI_HR_Budget').value);
                        WPFormData.append('ZI_IsCanada', document.getElementById('ZI_IsCanada').value);
                        WPFormData.append('ZI_IsCalifornia', document.getElementById('ZI_IsCalifornia').value);
                        WPFormData.append('ZI_Looks_Like_EU', document.getElementById('ZI_Looks_Like_EU').value);
                        WPFormData.append('ZI_Looks_Like_Canada', document.getElementById('ZI_Looks_Like_Canada').value);
                        WPFormData.append('ZI_Match_Source', document.getElementById('ZI_Match_Source').value);
                        WPFormData.append('ZI_Match_Type', document.getElementById('ZI_Match_Type').value);
                        WPFormData.append('ZI_Free_Email', document.getElementById('ZI_Free_Email').value);
                        WPFormData.append('ZI_Generic_Email', document.getElementById('ZI_Generic_Email').value);
                        WPFormData.append('ZI_Malformed_Email', document.getElementById('ZI_Malformed_Email').value);
                        WPFormData.append('ZI_NeverBounce_Status', document.getElementById('ZI_NeverBounce_Status').value);
                        WPFormData.append('ZeroBounce_Reponse', zBResponse);
                        if (includeAPI === 1) {
                            WPFormData.append('submission_status_log', `HS: ${hs_response} | HS Recapcha: ${hs_recapcha_response} | BI: ${bi_response} | BI Recapcha: ${bi_recapcha_response}`);
                        } else {
                            WPFormData.append('submission_status_log', '');
                        }
                        for (let [key, value] of WPFormData.entries()) {
                            console.log(`${key}: ${value}`);
                        }
                        ;

                        // Send AJAX request for WP storage
                        var xhr = new XMLHttpRequest();
                        xhr.open('post.html', my_ajax_object.ajax_url, true);
                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText);
                                updateFormDisplay();
                            }
                        };
                        xhr.send(WPFormData);
                    }

                    if (destinationPage == 4) {
                        // Function to get a new reCAPTCHA token
                        function getRecaptchaToken(action, callback) {
                            grecaptcha.ready(function () {
                                grecaptcha.execute('6LfhFyMqAAAAAD7pyXqkz7wKFScFhrcTuqYMv86i', {action: action}).then(function (token) {
                                    callback(token);
                                });
                            });
                        }

                        // Get recapcha token before submitting to HubSpot
                        grecaptcha.ready(function () {
                            grecaptcha.execute('6LfhFyMqAAAAAD7pyXqkz7wKFScFhrcTuqYMv86i', {action: 'submit'}).then(function (token) {
                                var formData = {
                                    fields: [
                                        {name: "firstname", value: $("#firstname").val()},
                                        {name: "lastname", value: $("#lastname").val()},
                                        {name: "email", value: $("#email").val()},
                                        {name: "ld_bookit_log_id", value: $("#ld_bookit_log_id").val()},
                                        {name: "utm_source", value: $("#utm_source").val()},
                                        {name: "utm_campaign", value: $("#utm_campaign").val()},
                                        {name: "utm_medium", value: $("#utm_medium").val()},
                                        {name: "company", value: $("#company").val()},
                                        {name: "phone", value: $("#phone").val()},
                                        {
                                            name: "smsmarketingpermission",
                                            value: $("#may_we_text_you_at_this_number__c").is(':checked') ? "1" : "0"
                                        },
                                        {
                                            name: "services_interested_in_pick__c",
                                            value: $("#what_service_line_are_you_interested_in_").val()
                                        },
                                        {
                                            name: "service_line_sub_family",
                                            value: $("#accounting_service_interest").val()
                                        },
                                        {name: "revenue_range", value: $("#revenue_range").val()},
                                        {name: "source", value: $("#source").val()},
                                        {
                                            name: "other_lead_source__c",
                                            value: $("#lead_source___details__referral_").val()
                                        },
                                        {name: "ZI_Contact_ID", value: $("#ZI_Contact_ID").val()},
                                        {name: "ZI_First_Name", value: $("#ZI_First_Name").val()},
                                        {name: "ZI_Middle_Name", value: $("#ZI_Middle_Name").val()},
                                        {name: "ZI_Last_Name", value: $("#ZI_Last_Name").val()},
                                        {name: "ZI_Full_Name", value: $("#ZI_Full_Name").val()},
                                        {name: "ZI_Job_Title", value: $("#ZI_Job_Title").val()},
                                        {name: "ZI_Direct_Phone_Number", value: $("#ZI_Direct_Phone_Number").val()},
                                        {name: "ZI_Business_Email", value: $("#ZI_Business_Email").val()},
                                        {name: "ZI_Gender", value: $("#ZI_Gender").val()},
                                        {name: "ZI_Job_Function", value: $("#ZI_Job_Function").val()},
                                        {name: "ZI_Management_Level", value: $("#ZI_Management_Level").val()},
                                        {name: "ZI_Department", value: $("#ZI_Department").val()},
                                        {name: "ZI_Supplemental_Email", value: $("#ZI_Supplemental_Email").val()},
                                        {name: "ZI_Mobile_Phone_Number", value: $("#ZI_Mobile_Phone_Number").val()},
                                        {
                                            name: "ZI_Contact_Accuracy_Score",
                                            value: $("#ZI_Contact_Accuracy_Score").val()
                                        },
                                        {
                                            name: "ZI_Contact_Accuracy_Grade",
                                            value: $("#ZI_Contact_Accuracy_Grade").val()
                                        },
                                        {name: "ZI_Contact_Street", value: $("#ZI_Contact_Street").val()},
                                        {name: "ZI_Contact_City", value: $("#ZI_Contact_City").val()},
                                        {name: "ZI_Contact_State", value: $("#ZI_Contact_State").val()},
                                        {name: "ZI_Contact_Country", value: $("#ZI_Contact_Country").val()},
                                        {name: "ZI_Contact_Zip", value: $("#ZI_Contact_Zip").val()},
                                        {name: "ZI_ZoomInfo_Company_ID", value: $("#ZI_ZoomInfo_Company_ID").val()},
                                        {name: "ZI_Company_Name", value: $("#ZI_Company_Name").val()},
                                        {name: "ZI_Company_Website", value: $("#ZI_Company_Website").val()},
                                        {name: "ZI_Company_LinkedIn_URL", value: $("#ZI_Company_LinkedIn_URL").val()},
                                        {name: "ZI_Company_Phone", value: $("#ZI_Company_Phone").val()},
                                        {name: "ZI_Company_Revenue", value: $("#ZI_Company_Revenue").val()},
                                        {
                                            name: "ZI_Company_Number_of_Employees",
                                            value: $("#ZI_Company_Number_of_Employees").val()
                                        },
                                        {name: "ZI_Company_SIC", value: $("#ZI_Company_SIC").val()},
                                        {name: "ZI_Company_NAICS", value: $("#ZI_Company_NAICS").val()},
                                        {name: "ZI_Company_Street", value: $("#ZI_Company_Street").val()},
                                        {name: "ZI_Company_City", value: $("#ZI_Company_City").val()},
                                        {name: "ZI_Company_State", value: $("#ZI_Company_State").val()},
                                        {name: "ZI_Company_Country", value: $("#ZI_Company_Country").val()},
                                        {name: "ZI_Company_Zip_Code", value: $("#ZI_Company_Zip_Code").val()},
                                        {name: "ZI_Primary_Industry", value: $("#ZI_Primary_Industry").val()},
                                        {
                                            name: "ZI_Industry_Hierarchical_Category",
                                            value: $("#ZI_Industry_Hierarchical_Category").val()
                                        },
                                        {name: "ZI_Marketing_Budget", value: $("#ZI_Marketing_Budget").val()},
                                        {name: "ZI_IT_Budget", value: $("#ZI_IT_Budget").val()},
                                        {name: "ZI_Finance_Budget", value: $("#ZI_Finance_Budget").val()},
                                        {name: "ZI_HR_Budget", value: $("#ZI_HR_Budget").val()},
                                        {name: "ZI_IsCanada", value: $("#ZI_IsCanada").val()},
                                        {name: "ZI_IsCalifornia", value: $("#ZI_IsCalifornia").val()},
                                        {name: "ZI_Looks_Like_EU", value: $("#ZI_Looks_Like_EU").val()},
                                        {name: "ZI_Looks_Like_Canada", value: $("#ZI_Looks_Like_Canada").val()},
                                        {name: "ZI_Match_Source", value: $("#ZI_Match_Source").val()},
                                        {name: "ZI_Match_Type", value: $("#ZI_Match_Type").val()},
                                        {name: "ZI_Free_Email", value: $("#ZI_Free_Email").val()},
                                        {name: "ZI_Generic_Email", value: $("#ZI_Generic_Email").val()},
                                        {name: "ZI_Malformed_Email", value: $("#ZI_Malformed_Email").val()},
                                        {name: "ZI_NeverBounce_Status", value: $("#ZI_NeverBounce_Status").val()},
                                        {name: "GetAmbassador__Short_Code__c", value: $("#amb_short_code").val()},
                                        {name: "msclkid", value: $("#msclkid-field").val()}
                                    ],
                                    context: {
                                        pageUri: window.location.href,
                                        pageName: document.title
                                    },
                                    recaptchaToken: token // Include the reCAPTCHA token
                                };

                                // First AJAX request to verify reCAPTCHA
                                $.ajax({
                                    url: '/recapcha.php',
                                    type: 'POST',
                                    data: formData,
                                    success: function (response) {
                                        var result = JSON.parse(response);
                                        if (result.status === 'success') {
                                            hs_recapcha_response = 'reCAPTCHA verified successfully';
                                            console.log('reCAPTCHA verified successfully');

                                            // Second AJAX request to submit data to HubSpot
                                            $.ajax({
                                                url: 'https://api.hsforms.com/submissions/v3/integration/submit/4611466/efccb9dc-d08b-4abf-8ffb-f93ff205fd1e',
                                                // url: 'https://api.hsforms.com/submissions/v3/integration/submit/4611466/3bb15a58-937d-4541-9940-3f401707a8d2',
                                                type: 'POST',
                                                data: JSON.stringify({
                                                    fields: formData.fields,
                                                    context: formData.context
                                                }),
                                                contentType: 'application/json',
                                                success: function (result) {
                                                    hs_response = 'Form data sent to HubSpot';
                                                    console.log('Form data sent to HubSpot');
                                                    submitToWPDB(1)
                                                },
                                                error: function (err) {
                                                    hs_response = `Error sending form data to HubSpot ${err}`;
                                                    console.error('Error sending form data to HubSpot', err);
                                                    submitToWPDB(1)
                                                }
                                            });
                                        } else {
                                            hs_recapcha_response = `Error sending form data to HubSpot ${result.message}`;
                                            console.error('reCAPTCHA verification failed:', result.message);
                                        }
                                    },
                                    error: function (error) {
                                        hs_recapcha_response = `Error verifying reCAPTCHA ${error}`;
                                        console.error('Error verifying reCAPTCHA', error);
                                    }
                                });
                            });
                        });

                        // Refresh BI ID in case of change on BI side
                        var BIID = LDBookItV2.getUniqueId();
                        // Set the value of the input field with ID 'ld_bookit_log_id' to BIID
                        document.getElementById('ld_bookit_log_id').value = BIID;
                        console.log(`Refreshed BI ID: ${document.getElementById('ld_bookit_log_id').value}`);

                        // Get a reCAPTCHA token before submitting to BookIt
                        getRecaptchaToken('submit', function (token) {
                            // Gather form data for BookIt
                            var formDataBI = {
                                "input_1": $("#firstname").val(),
                                "input_3": $("#lastname").val(),
                                "input_4": $("#email").val(),
                                "ld_bookit_log_id": $("#ld_bookit_log_id").val(),
                                "input_5": $("#company").val(),
                                "input_6": $("#phone").val(),
                                "smsmarketingpermission": $("#may_we_text_you_at_this_number__c").is(':checked') ? "1" : "0",
                                "input_13": $("#what_service_line_are_you_interested_in_").val(),
                                "input_37": $("#accounting_service_interest").val(),
                                "input_14": $("#source").val(),
                                "other_lead_source__c": $("#lead_source___details__referral_").val(),
                                "recaptchaToken": token // Include the reCAPTCHA token
                            };

                            // First AJAX request to verify reCAPTCHA
                            $.ajax({
                                url: '/recapcha.php',
                                type: 'POST',
                                data: formDataBI,
                                success: function (response) {
                                    var result = JSON.parse(response);
                                    if (result.status === 'success') {
                                        bi_recapcha_response = 'reCAPTCHA verified successfully';
                                        console.log('reCAPTCHA verified successfully');

                                        // Proceed with BookIt Submission
                                        console.log('The raw BI data is: ' + formDataBI);
                                        var formDataFormatted = JSON.stringify(formDataBI);
                                        console.log('The formatted BI data is: ' + formDataFormatted);
                                        LDBookItV2.saveFormData(formDataBI);
                                        LDBookItV2.submit();

                                        bi_response = "Data sent to BI successfully";

                                        // Redirect
                                        // window.location.href = 'https://belaysolutions.com/get-started/thanks/';

                                        submitToWPDB(1)
                                    } else {
                                        bi_recapcha_response = `reCAPTCHA verification failed prior to BI submission ${result.message}`;
                                        console.error('reCAPTCHA verification failed prior to BI submission:', result.message);
                                        submitToWPDB(1)
                                    }
                                },
                                error: function (error) {
                                    bi_recapcha_response = `reCAPTCHA error ${error}`;
                                    console.error('Error verifying reCAPTCHA prior to BI submission', error);
                                }
                            });
                        });
                    }

                    submitToWPDB(0);
                }

                function updateFormDisplay() {
                    const pages = document.querySelectorAll('.form-page');
                    const dots = document.querySelectorAll('.progress-indicator .dot');

                    // Add 'done' class to the previous page
                    pages[currentPage].classList.add('done');

                    // Remove 'active' class from all pages and dots
                    pages.forEach(page => page.classList.remove('active'));
                    dots.forEach(dot => dot.classList.remove('active'));

                    // Add 'active' class to the current page
                    if (destinationPage < pages.length) {
                        setTimeout(() => {
                            const currentPageElement = pages[destinationPage];
                            currentPageElement.classList.add('active');
                            currentPageElement.classList.remove('done');
                        }, 510);

                        // Determine which dot to activate based on the current page
                        let dotIndex;
                        if (destinationPage === 0) dotIndex = 0;
                        else if (destinationPage === 1) dotIndex = 1;
                        else if (destinationPage === 2) dotIndex = 2;
                        else if (destinationPage >= 3 && destinationPage <= 4) dotIndex = 3;

                        // Add 'active' class to the corresponding dot
                        if (dotIndex !== undefined && dotIndex < dots.length) {
                            setTimeout(() => {
                                dots[dotIndex].classList.add('active');
                            }, 500);
                        }
                    }
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                const container = document.querySelector('.multi-select-container');
                const select = container.querySelector('select');
                const box = container.querySelector('.multi-select-box');
                const options = container.querySelector('.multi-select-options');
                const optionDivs = options.querySelectorAll('.multi-select-option');

                box.addEventListener('click', function () {
                    options.style.display = options.style.display === 'block' ? 'none' : 'block';
                });

                optionDivs.forEach(function (option) {
                    option.addEventListener('click', function () {
                        this.classList.toggle('selected');
                        updateSelectBox();
                        updateSelectElement();
                    });
                });

                document.addEventListener('click', function (event) {
                    if (!container.contains(event.target)) {
                        options.style.display = 'none';
                    }
                });

                function updateSelectBox() {
                    const selectedOptions = Array.from(optionDivs).filter(opt => opt.classList.contains('selected'));
                    if (selectedOptions.length === 0) {
                        box.textContent = 'Select all that apply';
                    } else {
                        box.textContent = selectedOptions.map(opt => opt.textContent).join(', ');
                    }
                }

                function updateSelectElement() {
                    const selectedOptions = Array.from(optionDivs).filter(opt => opt.classList.contains('selected'));
                    Array.from(select.options).forEach(function (option) {
                        option.selected = selectedOptions.some(opt => opt.dataset.value === option.value);
                    });
                }
            });

            window.addEventListener('DOMContentLoaded', (event) => {
                // Get the first form-page div
                const firstFormPage = document.querySelector('.form-page');
                if (firstFormPage) {
                    // Get the top offset of the first form-page div
                    const topOffset = firstFormPage.offsetTop;

                    // Get all form-page divs
                    const formPages = document.querySelectorAll('.form-page');

                    // Loop through each form-page div and set its top position to match the first one
                    formPages.forEach((formPage) => {
                        const yOffset = formPage.offsetTop - topOffset;
                        formPage.style.transform = `translateY(-${yOffset}px)`;
                    });
                }
            });

            document.addEventListener('DOMContentLoaded', function () {
                // Get all dots
                const dots = document.querySelectorAll('.progress-indicator .dot');

                // Add click event listeners to each dot
                dots.forEach(dot => {
                    dot.addEventListener('click', function () {
                        // Get the current active form page
                        const activeFormPage = document.querySelector('.form-page.active');
                        if (activeFormPage) {
                            // Extract the current page number from the active form page ID
                            const currentPage = parseInt(activeFormPage.id.split('-')[2]) - 1;

                            // Extract the destination page number from the dot ID
                            const destinationPage = parseInt(dot.id.split('-')[1]) - 1;

                            // Call the nextPage function with currentPage and destinationPage
                            nextPage(currentPage, destinationPage);
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Parse the URL parameters
                const urlParams = new URLSearchParams(window.location.search);

                // Get the values for mbsy_source and campaignid
                const mbsy = urlParams.get('mbsy');
                const campaignId = urlParams.get('campaignid');

                // Set the values in the input fields if they exist
                if (mbsy) {
                    document.getElementById('amb_short_code').value = mbsy;
                }

                if (campaignId) {
                    document.getElementById('amb_campaign_uid').value = campaignId;
                }
            });
        </script>
        <script>
            function getCookie(name) {
                var m = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                return m ? m[2] : '';
            }

            document.addEventListener('DOMContentLoaded', function () {
                // Pull the msclkid value from the cookie set by Microsoft
                var msclk = getCookie('_uetmsclkid');
                if (msclk) {
                    document.getElementById('msclkid-field').value = msclk;
                }
            });
        </script>

    </div>

@endsection
