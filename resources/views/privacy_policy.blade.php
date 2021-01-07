@extends('layouts.master')

@section('bar')
<section class="breadcrumb-main">
    <div class="custom-container">
        <h2>Privacy Policy</h2>
        <ul>
            <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('privacy_policy') }}" class="text-white">Privacy Policy</a></li>
        </ul>
    </div>
</section>
@endsection

@section('content')
<section class="counter-sec section-py-space counter-main about-page">
    <div class="container">
        <div class="counter-title text-center">
            <h4 class="title-line">Privacy Policy</h4>
        </div>
        <p>At Vestra Verto, we respect your need for online privacy and protect any personal information that you may share with us when using Vestra Verto Services, in an appropriate manner. Our Privacy Policy is designed to explain how we collect, store, use, disclose, process, and transfer this personal information. For the purposes of this Policy, the term "Services" shall refer collectively to applications provided by Vestra Verto, website <a href="{{ route('home') }}">https://www.vestraverto.co.uk/</a>, localized domains, successor URLs and all subdomains.</p><br>
        <p>If you are visiting a third-party website or service that uses Vestra Verto chat widget and communicate with this third party while being on messenger.vestraverto.co.uk subdomain, Vestra Verto will temporary collect and process personal data on behalf of this third party, with subsequent forwarding of the data to the third party. In this case Vestra Verto acts as a mere conduit for data transmitted between third parties, without determining the purposes and means of processing such data. We encourage you to review privacy policies of each specific third party prior to providing your personal information to them through Vestra Verto chat widget. We are not responsible for and do not control the privacy practices of any of our customers. In this Privacy Policy we list the types of data that may be collected while you are using a third-party website that is using Vestra Verto Services.</p><br>
        
        <br><br>
        <h3>Types of Data We Collect</h3><br>
        <p><strong>Account registration data</strong> - names and e-mail addresses of yourself and your colleagues, as well as your company name, address, phone number and other contact details that you provide when signing up or customizing your account.</p><br>
        <p><strong>Payment details</strong> - credit/debit card information if you select this payment option among others.</p><br>
        <p><strong>History of your communication with us</strong> - chat transcripts, e-mails, phone calls.</p><br>
        <p><strong>Automatic technical data</strong> - IP, location, your browser/operating system/device details, pages viewed, items clicked, time spent at any part of our Services.</p><br>
        <p><strong>Information from third-party platforms (Vestra Verto Blog only)</strong> – public profile information gathered from social media sites, any interactions with our content on these sites, such as “Likes”, views and shares.</p><br>
        <p><strong>Information shared on our blog</strong> – your name and e-mail required to leave a comment on a blog post or to subscribe to our blog, as well as any other information you explicitly make public when submitting a comment.</p><br>
        <p><strong>Other data</strong> that are necessary for the operation of the Services and are not specifically listed there. Any collection and usage of such information is done in accordance to this Privacy Policy and The Privacy Shield Principles.</p><br><br>
        <p><strong>Data shared through Vestra Verto Services on third-party websites or applications</strong></p><br>
        <p>If you are visiting a third-party website that is using Vestra Verto Services, Vestra Verto will temporarily store and process automatic technical data, such as IP, location, browser/OS/device details, pages viewed, time spent on the third-party website and any other details the third party had collected before and decided to pass to Vestra Verto. This data will be stored by Vestra Verto only while you are staying on the third-party website and will be automatically destroyed when you leave.</p><br>
        <p>If you use the chat widget provided by Vestra Verto on a third-party website, all the technical data mentioned above, as well as any information shared by you during the chat, will be temporarily stored by Vestra Verto for the duration of the chat session as a part of the chat transcript. After the chat is over, the transcript with all the details will be e-mailed to the owner of the third-party website (optionally, according to their preference) and removed from Vestra Verto system.</p><br>
        <p>If you send an offline message on a third-party website through Vestra Verto widget, all the technical data along with the contents of the message will be stored by Vestra Verto for a very short period of time and solely for the purpose of dispatching these data to the receiving third party. After that all the data will be removed from Vestra Verto system.</p><br><br>
        <p><strong>Cookies</strong></p><br>
        <p>Our system creates cookie files on your computer to help provide you with certain features of the Services.</p><br>
        <p>One type of cookie files created by our system is a performance cookie. It is a temporary file that is created when a visitor enters our website or any part of our Services and is removed once the visitor leaves it. The cookie is used to track the visitor navigation through the site and handle a chat session if needed.</p><br>
        <p>Another type of cookie files we use is a functionality cookie. If you come to our website through a referral link, such a cookie file will be created to help us identify which affiliate referred you. It is a persistent cookie that is stored for a prolonged amount of time even after you leave the website. Such a cookie file can be deleted through web browser options.</p><br>
        <p>Third-party cookies and other tracking technologies like web beacons (also known as pixel tags or clear gifs) may also be created by our partners with our permission for the purposes of analytics, marketing campaigns, certain social media functionality in our Services, etc.</p><br>
        <p>All these cookies and other tracking technologies don’t allow us or our partners to collect any personally identifiable information about you. You may choose to deny our own or third party cookies through your web browser settings, but certain features of our Services may become unavailable or non-functional after that.</p><br>
        
        <br><br>
        <h3>Data Usage</h3><br>
        <p>We use your personal information:</p><br>
        <ul>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To operate, maintain, and provide you with the functionality of the Services</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To provide customer support to you</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To send updates and marketing communications (newsletters) for which you will have the ability to opt-out by following the directions in the email</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; For billing, identification and authentication, and fraud prevention</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To process payments and refunds</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; Aggregated anonymous and pseudonymous data are used for analytics and marketing research</li>
        </ul>
        <p>We do not use your email address to send commercial messages without your consent.</p><br>

        <br><br>
        <h3>Sharing of Information with Third Parties</h3><br>
        <p>Under no circumstances will Vestra Verto sell or trade your personal information to third parties. We may share or transfer your personal information to third parties in the following cases:</p><br>
        <ul>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To companies that provide services to help us with our business activities, such as our payment processor. These companies are bound by privacy restrictions at least as restrictive as those set forth in this Privacy Policy and authorized to use your personal information only as necessity to provide their services to us.</li>
            <li class="pb-3"><strong><i class="fa fa-circle-o"></i></strong>&nbsp; To respond to subpoenas, court orders, or legal process, to prevent fraud or imminent harm, or to establish or exercise our legal rights or defend against legal claims; or in response to a lawful request by public authorities, including to meet national security or law enforcement requirements.</li>
        </ul>

        <br><br>
        <h3>Children Personal Data</h3><br>
        <p>We do not knowingly collect personal information from children under 13 years of age. If you are under the age of 13, please do not submit any personal information through our Services.</p><br>

        <br><br>
        <h3>Links to Third Party Websites</h3><br>
        <p>Some pages of our website contain external links. You are advised to verify the privacy practices of such other websites. We are not responsible for the manner of use or misuse of information made available by you at such other websites. We encourage you to carefully read the privacy policy of any website you visit.</p><br>

        <br><br>
        <h3>Accessing, Updating and Removing Personal Information</h3><br>
        <p>Upon request, we will provide you with information about whether we hold any of your personal data. Users who wish to correct, update or remove any personal details including those from a testimonial or a case study throughout our Services may do so either by accessing their user account or by contacting us at <a href="mailto:support@vestraverto.co.uk">support@vestraverto.co.uk</a>.</p><br>

        <br><br>
        <h3>Opt-Out of Communications</h3><br>
        <p>You may opt-out of receiving communications from us, remove your information from our database, and choose not to receive future communications from Vestra Verto by using the 'unsubscribe' option in the email received from us or by contacting us at <a href="mailto:support@vestraverto.co.uk">support@vestraverto.co.uk</a>. However, for as long as you are subscribed to our paid service, you will still be receiving billing-related messages and password recovery emails from us.</p><br>
        
        <br><br>
        <h3>International Data Transfer</h3><br>
        <p>If you reside outside of the United States, please note that we may transfer your personal data outside your country. By submitting your personal data or making this data available while using our Services, you consent to such transfer.</p><br>

        <br><br>
        <h3>Security</h3><br>
        <p>Data privacy and security is the highest priority for Vestra Verto. We take all reasonable and appropriate measures to protect your personal data from loss, misuse, unauthorized access, disclosure, alteration, or destruction. Our servers are located in the top quality US data centers with 24/7/365 multiple-layer security access, infrastructure and perimeter monitoring. We offer a secure connection option in our system. We use the latest TLS protocol with industry-strength AES-256 encryption. If the confidentiality of your chat sessions is important, this feature should be used. If you decide not to use the secure connection, your conversations may be unlawfully intercepted by third parties during transmission over the Internet.</p><br>

        <br><br>
        <h3>Privacy Policy Changes</h3><br>
        <p>We reserve the right to modify this privacy policy at any time, without prior notice. We encourage you to periodically review this page for the latest information on our privacy practices. Your continued use of this site following changes to this privacy policy constitutes your acceptance of the changes.</p><br>
    </div>
</section>
@endsection