@extends('layouts.master')

@section('bar')
<section class="breadcrumb-main">
    <div class="custom-container">
        <h2>FAQs</h2>
        <ul>
            <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('faqs') }}" class="text-white">FAQs</a></li>
        </ul>
    </div>
</section>
@endsection

@section('content')
<section class="section-py-space faq-section">
    <ul class="page-decore">
        <li class="top"><img class="img-fluid inner2" src="../assets/images/landing/footer/2.png" alt="footer-back-img"></li>
        <li class="bottom"><img class="img-fluid inner2" src="../assets/images/landing/footer/2.png" alt="footer-back-img"></li>
    </ul>
    <div class="container">
        <div class="row faq-block">
            <div class="col-md-12">
                <div class="accordion theme-accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What can you say about the stability of the company and service?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>Our service has been online since – DATE --. We are a profitable company and are constantly improving our system</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Please tell me about your technology.
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>Our server-side software is written in Laravel/Node/Vuejs. This allows us to achieve scalability and excellent reliability. Client side is standard Dynamic HTML and the JavaScript built into browsers by browser vendors. This allows us to avoid downloading of custom plug-ins and Java applets into visitor's browser.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you provide customer support representatives along with the software?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>We do not provide customer support representatives, only the technical infrastructure for your operators. This includes server-side software running on our servers and operator consoles that can be downloaded and installed on operators' workstations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I download the software and install it on my server?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>No. At this time we offer this live help system only as a hosted solution running on our servers, as it requires a complex server-side infrastructure that needs to be maintained by our administrators. If you are a reseller of our service and expect large number of users, we can set up additional servers to handle the load.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I use Vestra Verto chat on more than one website at the same time?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>Yes. Our service can be used on any number of web pages or sites. The subscription package defines only the number of operators.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do I sign up?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>To sign up please click Signup link on our home page <a href="{{ route('register') }}">www.vestraverto.co.uk/signup</a> then enter your preferred account name, email and password and press 'Sign Up' button.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    I forgot my password. How can I recover it?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>To recover your account Control Panel password, click the <a href="{{ route('password.request') }}">Forgot your password?</a> link on our home <a href="{{ route('register') }}">www.vestraverto.co.uk/signup</a> below the login form. The password will be sent to the e-mail, specified in your Account Settings / Account Profile page. If you get the following message: 'Your password has not been sent because email address was not entered in your account' please contact our support chat to recover your password.</p><br>
                                    <p>To recover your operator password, please click the <a href="{{ route('password.request') }}">Forgot your password?</a> link on the Operator Login Form. The password will be sent to the e-mail specified in your operator profile.</p><br>
                                    <p>If you get the following message: 'Your password has not been sent because email address was not entered in your account' please contact your account administrator to recover your password.</p><br>
                                    <p>If you don't remember your Account Name or your Operator Login for password recovery, please contact your account administrator. This information can be retrieved by the account administrator within the Control Panel on our website, on the Operators and Departments page.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can I remove the 'Powered by Vestraverto' link in the bottom right corner of my chat window?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>"Powered by Vestraverto" link can be removed for free on Active accounts on your demand. To request this please contact our support chat. Please note that the link contains your affiliate link and could bring you some referrals. This link cannot be removed if your account is in Trial or Expired Trial status.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Can I have the chat system translated into my language?
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionExample">
                            <div class="card-body">
                                <div>
                                    <img class="img-fluid faq-decor" src="{{ asset('theme/assets/images/landing/chitchat/2.png') }}">
                                    <p>The live chat window can be fully translated into any language. You can choose the language for all Messenger buttons, hints, titles in your account Control Panel, Account Settings / Regional Settings page. If the required language is not listed on the Regional Settings page, please call to our live support chat.</p><br>
                                    <p>You can also translate System Messages, Pre-chat Survey and Offline Form from the account Control Panel.</p><br>
                                    <p>Native agent app is currently available in English, German, Chinese and Russian.</p><br>
                                    <p>The account Control Panel is available in English, German, French, Spanish, Brazilian Portuguese, Japanese, Chinese and Russian.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection