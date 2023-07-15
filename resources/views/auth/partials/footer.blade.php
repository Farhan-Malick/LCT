
<style>

    .footer {

    background-color: #22b3c1;
    margin-top: auto;
    /* height: 270px; */
    font-size: 13px;
}

.ul__class ul {
    float: right;
    font-size: 13px;
}

.ul__class ul li {
    padding-left: 20px;
    font-size: 13px;
}

.foot__con {
    margin-top: 50px;
    margin-bottom: -48px;
    font-size: 13px;
}
.foot {
    height: 45px;
    font-size: 13px;
}
.footer ul li {
    list-style: none;
    color: #000;
    font-size: 13px;
}

.foot__con i {
    /* color: #324bae; */
    /* font-size: 13px; */
}
</style>
<div class="footer  mt-5" >
    <div class="container foot__con">
        <div class="row  pt-5 ">
            <div class="col-md-3 ">
                <ul style="  ">
                        <h4 class="text-dark mt-3">COMPANY INFO</h4>

                        <li class=" mt-3"> <a type="button" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            About Us
                        </a>
                        </li>
                        <li class=" mt-3"> <a href="{{URL('/contact-us')}}" class="text-dark">
                            Contact Us
                        </a> </li>
                        <li class=" mt-3"><a href=""
                                class="text-dark">Connect</a>
                        </li>
                        {{-- <li class=" mt-3">
                            <a href="#" class="text-dark">    +1 276 329 3991</a><br>
                            <a href="#" class="text-dark">30 N Gould St Ste R Sheridan,<br> Wyoming 82801, United States</a>
                        </li> --}}
                    <div class="__social d-flex mt-3">
                        <li class=""><a href="https://www.facebook.com/profile.php?id=100091981194183&mibextid=LQQJ4d" target="_blank"><i class="bi bi-facebook"></i></a></li>&nbsp;&nbsp;&nbsp;

                        {{-- <li class=""><a href="https://www.facebook.com/profile.php?id=100091981194183&mibextid=LQQJ4d"><i class="bi bi-facebook "></i> </a></li>&nbsp;&nbsp;&nbsp; --}}
                        <li class="pl-4"><i class="bi bi-twitter"></i></li>&nbsp;&nbsp;&nbsp;
                        <li class="pl-4"><i class="bi bi-linkedin"></i></li>&nbsp;&nbsp;&nbsp;
                        <li class="pl-4"><i class="bi bi-instagram"></i></li>
                    </div>
                </ul>
            </div>
            <div class="col-md-3 mt-3">
                <ul>
                    <h4 class="text-dark">SAFE AND SECURE</h4>
                    <li class="mt-3"><p style="font-size: 12px;line-height: 25px;color: #afafaf;"  class="ml-3 text-dark" style="align-content: left-indent">
                        <!--<i class="fa fa-check " style="font-size: 18px"></i>-->
                        Buying 100% safe, Only from approved sellers.</p>
                    </li>
                    <li class="mt-3"> <p style="font-size: 12px;line-height: 25px;color: #afafaf;"  class="text-dark">
                        <!--<i class="fa-dark fa fa-circle-info" style="font-size: 18px"></i>-->
                        Best Customer service before and after Purchase.</p>
                    </li>
                    <li class="mt-3"><p style="font-size: 12px;line-height: 25px;color: #afafaf;"  class="text-dark">
                        <!--<i class="fa-regular fa-credit-card"  style="font-size: 18px"></i>-->
                        100% Secure Payment System</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mt-3">
                <ul>
                    <h4 class="text-dark mb-3">POPULAR EVENTS</h4>
                    @foreach ($Footerevents as $event)
                        @if ($event->Footerapprove == 1)
                            <li class="mt-3"><a href="#" class="text-dark">{{$event->title}}</a>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 mt-3 foot__iconss ">
                <ul>
                    <h4 class="text-dark mb-3">HOT TICKETS</h4>
                    @foreach ($FooterEventListing as $ticket)
                        @if ($ticket->Footerapprove == 1)
                            <li class="mt-3"><a href="#" class="text-dark">{{$ticket->event_name}}</a>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.25); font-size: 13px;">
        <div class="row px-0 mx-0">
            <div class="col-md-4">
                <p style="font-size: 11px;" class="text-dark"> Copyright © 2023 LastChanceTicket - All rights reserved</p>
            </div>
            <div class="col-md-8 ul__class">
                <ul class="d-flex">
                    <li><a type="button"  style="font-size: 11px;" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Terms & Conditions
                    </a> </li>
                    <li><a type="button" style="font-size: 11px;" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModalDisclaimer">
                        Disclaimer
                    </a> </li>
                    <li><a type="button"  style="font-size: 11px;"class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModalPaymentPolicy">
                        Payment Policy
                    </a> </li>
                    <li><a type="button" style="font-size: 11px;" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Privacy Policy
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Terms & Conditions</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <p align="" style="margin-bottom: 2px;">Welcome to Last Chance Ticket LLC ("Last Chance Ticket", "we", "our", “LCT” or "us"). These terms and conditions ("Terms and Conditions") govern your use of our website, located at www.lastchanceticket.com ("Site") and our services, which are collectively referred to as the "Services". By using our Services, you agree to be bound by these Terms and Conditions.</p>
            <h5 class="mb-2 mt-2">Registration and Eligibility</h5>
            <p align="" style="margin-bottom: 2px;">To use the Services, you must register and create an account with us. You represent and warrant that all information provided during registration is accurate, complete, and up to date. You must be at least 18 years old to use our Services. If you are under 18 years old, you may only use the Services with the consent and supervision of a parent or legal guardian.</p>
            <h5 class="mb-2 mt-2">Ticket Listings</h5>
            <p align="" style="margin-bottom: 2px;">As a registered user, you may list tickets for sale on our Site. You are responsible for ensuring that the tickets you list for sale are valid and transferable. In case if you cannot provide the tickets that you have sold in Last Chance Ticket LLC, we have the right to charge the additional fee required to provide the sold ticket to the customer. We also reserve the right to reject or remove any ticket listings in our sole discretion.</p>
            <h5 class="mb-2 mt-2">Ticket Purchases</h5>
            <p align="" style="margin-bottom: 2px;">As a registered user, you may purchase tickets from other sellers through our Site. All sales are final, and we do not offer refunds or exchanges. We do not guarantee the accuracy of any information provided by sellers, including but not limited to ticket availability, seating locations, and prices. The prices set by sellers may be above or below face value.</p>
            <h5 class="mb-2 mt-2">Fees</h5>
            <p align="" style="margin-bottom: 2px;">We charge fees for the use of our Services, which are outlined in our Fee Schedule. We reserve the right to change our fees at any time without notice. You are responsible for paying all applicable fees associated with your use of our Services.</p>
            <h5 class="mb-2 mt-2" style="margin-bottom: 10px;">Payment</h5>
            <p><b class="text-dark">a) Payment Gateway:</b></p><p align="" style="margin-bottom: 2px;">The Company uses Stripe as the payment gateway. By using our website or mobile application, you agree to comply with the Stripe terms of service, which can be found at https://stripe.com/us/terms.</p>
            <p><b class="text-dark">b) Payment Processing:</b></p><p align="" style="margin-bottom: 2px;">All payments made on our platform will be processed by Stripe. The Company does not store any credit card information on our servers.</p>
            <p><b class="text-dark">c) Payment Methods:</b></p><p align="" style="margin-bottom: 2px;">We accept all major credit cards and debit cards that are supported by Stripe.</p>
            <p><b class="text-dark">d) Payment Authorization:</b></p><p align="" style="margin-bottom: 2px;">By making a payment on our platform, you authorize us to charge your credit card or debit card for the total amount of your purchase, including any applicable taxes and fees.</p>
            <p><b class="text-dark">e) Payment Confirmation:</b></p><p align="" style="margin-bottom: 2px;">Upon completion of your payment, you will receive an email confirmation that includes the details of your purchase.</p>
            <p><b class="text-dark">f) Payment Refunds:</b></p><p align="" style="margin-bottom: 2px;">All sales are final and non-refundable. Refunds will only be issued to the buyer if the event is completely cancelled. No refund will be issued in case if the event is postponed to another date. The Company reserves the right to withhold or cancel refunds for any reason. In case of a refund, the transaction charge or currency adjustment rate should be borne by the buyer.</p>
            <p><b class="text-dark">g) Payment Security:</b></p><p align="" style="margin-bottom: 2px;">The Company takes the security of your payment information seriously. We use industry-standard encryption and security protocols to protect your personal and payment information.</p>
            <p><b class="text-dark">h) Payment Errors:</b></p><p align="" style="margin-bottom: 2px;">The Company reserves the right to correct any errors in pricing or payment processing. If an error is discovered after you have made a payment, we will notify you and give you the option to cancel your order or pay the correct amount.</p>
            <p><b class="text-dark">i) Payment Terms:</b></p><p align="" style="margin-bottom: 2px;">By making a payment on our platform, you agree to these Payment Terms and Conditions, as well as our Terms of Service and Privacy Policy.</p>
            <h5 class="mb-2 mt-2">Payment to Sellers</h5>
            <p align="" style="margin-bottom: 2px;">We will initiate payment within five business days after the completion of the event for the tickets the seller successfully sold. If the buyer raises any complaints regarding the tickets sold by the seller, we will only release the payment after completing our investigation.</p>
            <h5 class="mb-2 mt-2">Dispute Resolution Process</h5>
            <p align="" style="margin-bottom: 2px;">If a dispute arises between a seller and a buyer on the Marketplace regarding the ticket or any service provided, the buyer or seller may initiate a dispute resolution request by contacting our customer support team at support@lastchanceticket.com. If you want to raise a complaint regarding a completed event, the buyer or seller should raise them inside 24 hrs from the event date. The complaint received after 24 hrs of the event date will not be considered.</p>
            <p><b class="text-dark">a) Investigation:</b></p><p align="" style="margin-bottom: 2px;">Once a dispute resolution request has been initiated, we will investigate the dispute and request relevant information from the seller and buyer. We may also request additional information or documentation from the parties as needed.</p>
            <p><b class="text-dark">b) Resolution:</b></p><p align="" style="margin-bottom: 2px;">After our investigation, we will make a determination on the dispute and provide a resolution. Our determination will be based on the information and documentation provided by the parties, as well as our policies and procedures.</p>
            <p><b class="text-dark">c) Refunds:</b></p><p align="" style="margin-bottom: 2px;">If we determine that a refund is appropriate, we will initiate the refund process on behalf of the buyer. The seller may be required to provide the funds for the refund. We also have the right to suspend or terminate sellers' and buyers' accounts at any time if we find anything suspicious.</p>
            <p><b class="text-dark">d) Fees:</b></p><p align="" style="margin-bottom: 2px;">If we determine that the seller is responsible for the dispute, we may charge the seller a fee for our dispute resolution services. The fee will be deducted from the seller's account balance or may be charged to the seller's payment method on file.</p>
            <p><b class="text-dark">e) Outcome:</b></p><p align="" style="margin-bottom: 2px;">Our determination of the dispute is final and binding on the seller and buyer. Both the seller and buyer are obligated to accept our final decision.</p>

            <h5 class="mb-2 mt-2">Prohibited Conduct</h5>
            <p align="" style="margin-bottom: 2px;">You agree not to use our Services for any unlawful or prohibited purpose, including but not limited to: (a) using our Services to engage in fraud or other illegal activities; (b) interfering with or disrupting our Services or servers; (c) violating any applicable laws, regulations, or third-party rights; (d) using our Services to harass, threaten, or harm other users; and (e) impersonating another person or entity.</p>

            <h5 class="mb-2 mt-2">Intellectual Property</h5>
            <p align="" style="margin-bottom: 2px;">The content and materials on our Site, including but not limited to text, graphics, logos, images, and software, are the property of Last Chance Ticket or our licensors and are protected by copyright, trademark, and other intellectual property laws. You may not use our content or materials for any commercial purpose without our prior written consent.</p>

            <h5 class="mb-2 mt-2">Disclaimer of Warranties</h5>
            <p align="" style="margin-bottom: 2px;">We provide our Services "as is" and without any warranty or guarantee. We do not guarantee the accuracy, reliability, or completeness of any information provided through our Services. We do not guarantee that our Services will be uninterrupted or error-free, and we do not make any warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>

            <h5 class="mb-2 mt-2">Limitation of Liability</h5>
            <p align="" style="margin-bottom: 2px;">To the maximum extent permitted by law, we shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of our Services, including but not limited to: (a) any errors or omissions in our Services; (b) any loss or damage to your data; (c) any unauthorized access to or alteration of your data; (d) any interruption or cessation of our Services; (e) any viruses or other harmful components transmitted through our Services; and (f) any third-party content, products, or services accessed through our Services. Our total liability in connection with these Terms and Conditions shall not exceed the amount of fees paid by you to us in the six months preceding the event giving rise to the liability.</p>

            <h5 class="mb-2 mt-2">Indemnification</h5>
            <p align="" style="margin-bottom: 2px;">You agree to indemnify, defend, and hold harmless Last Chance Ticket, its affiliates, and their respective officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, costs, and expenses, including reasonable attorneys' fees, arising out of or in connection with your use of our Services or your violation of these Terms and Conditions.</p>

            <h5 class="mb-2 mt-2">Modification of Terms and Conditions</h5>
            <p align="" style="margin-bottom: 2px;">We reserve the right to modify or update these Terms and Conditions at any time without prior notice. The updated version of the Terms and Conditions will be posted on our Site. Your continued use of our Services after the posting of the updated Terms and Conditions constitutes your acceptance of the changes.</p>

            <h5 class="mb-2 mt-2">Governing Law and Jurisdiction</h5>
            <p align="" style="margin-bottom: 2px;">These Terms and Conditions shall be governed by and construed in accordance with the laws of the United States. Any disputes arising out of or in connection with these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts located in the United States.</p>

            <h5 class="mb-2 mt-2">Contact Us</h5>
            <p>If you have any questions or concerns about these Terms and Conditions, please contact us at support@lastchanceticket.com.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-lg" id="exampleModalDisclaimer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="mb-2 mt-2" class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Disclaimer</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
            <p align="">Welcome to Last Chance Ticket LLC's website. By accessing and using this website, you agree to the terms and conditions outlined in this disclaimer. Please read this disclaimer carefully before proceeding. If you do not agree with any part of this disclaimer, please refrain from using this website.
            </p>
            <h5 class="mt-2 mb-2">Accuracy of Information </h5>
            <p align="">

                Last Chance Ticket LLC (referred to as "the Company") makes every effort to provide accurate and up-to-date information on this website. However, the Company does not guarantee the accuracy, completeness, reliability, or timeliness of the information presented. The information provided on this website is for general informational purposes only and should not be relied upon for making any financial, legal, or other decisions. Users are advised to seek professional advice or verify information before taking any actions based on the content of this website.


            </p>
            <h5 class="mt-2 mb-2">
                Ticket Sales </h5>
            <p align="">This website may provide information and services related to ticket sales for various events. The Company does not guarantee the availability of tickets or the accuracy of the ticket pricing, seating arrangements, event schedules, or any other details related to the events. The Company is not responsible for any errors, omissions, or discrepancies regarding ticket availability, pricing, or event information. Users are encouraged to independently verify all details and terms related to ticket purchases before making any transactions.

            </p>
            <h5 class="mt-2 mb-2">Liability Limitation </h5>
            <p align="">
                The Company shall not be held liable for any direct, indirect, incidental, consequential, or punitive damages arising out of the use or inability to use this website or the information provided herein. This includes, but is not limited to, damages for loss of profits, business interruption, loss of data, or any other tangible or intangible losses. Users acknowledge that they use this website and its content at their own risk.
            </p>
            <h5 class="mt-2 mb-2">External Links </h5>
            <p align="">
                This website may contain links to external websites or resources that are not owned or controlled by the Company. The Company does not endorse, guarantee, or have control over the content, products, or services offered on these external sites. The inclusion of any external links does not imply endorsement or responsibility by the Company. Users are advised to review the terms and policies of these external sites before engaging with them.

                </p>
            <h5 class="mt-2 mb-2">  Intellectual Property</h5>
            <p align="">

                All content, including but not limited to text, images, logos, trademarks, and other materials displayed on this website, are the property of the Company or its respective owners. Users are prohibited from using, reproducing, distributing, or modifying any content from this website without prior written permission from the Company.

            </p>
            <h5 class="mt-2 mb-2"> Governing Law and Jurisdiction
            </h5>
            <p align="">This disclaimer shall be governed by and construed in accordance with the laws of the jurisdiction in which the Company operates. Any legal actions or disputes arising out of the use of this website shall be subject to the exclusive jurisdiction of the courts in that jurisdiction.
            </p>
        <h5 class="mt-2 mb-2">By using this website</h5>
            <p align="">you acknowledge that you have read, understood, and agreed to the terms and conditions of this disclaimer. This disclaimer may be updated or modified at any time without prior notice. It is your responsibility to review this disclaimer periodically for any changes. If you continue to use this website after any modifications to this disclaimer, it will signify your acceptance of the updated terms.

            </p>
            <p align="">If you have any questions or concerns regarding this disclaimer, please contact Last Chance Ticket LLC using the contact information provided on the website.
            </p>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-lg" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Privacy Policy</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
            <p align="">Last Chance Ticket ("LCT") is committed to protecting the privacy of our users. This Privacy Policy applies to
                all users of our website and services, including ticket sellers and buyers, located in the state of Wyoming in
                the United States</p>
            <h5 class="mt-2 mb-2">Information Collection and Use </h5>
            <p align="">

                LCT collects personal information from our users in order to provide our ticket marketplace services. This
                personal information may include your name, email address, billing and shipping information, and other
                information related to your ticket purchases.

            </p>
            <p align="">LCT also collects information related to your use of our website and services, including your IP address,
                browser type, and pages visited. This information is used to improve our website and services and to
                prevent fraud.
                </p>
            <p align="">
                LCT does not sell or rent personal information to third parties for their marketing purposes without your
                explicit consent.
            </p>
            <h5 class="mt-2 mb-2">
                Payment Information </h5>
            <p align="">
                LCT uses a third-party payment processor to process payments for ticket purchases. The payment
                processor is responsible for securely storing and processing your payment information. LCT does not store
                or have access to your full payment information.
            </p>
            <h5 class="mt-2 mb-2">Cookies </h5>
            <p align="">

                LCT uses cookies to store information about your use of our website and services. Cookies are small text
                files stored on your device that help us provide a more personalized experience. You can choose to disable
                cookies in your browser, but this may limit your ability to use our website and services.
            </p>
            <h5 class="mt-2 mb-2">Security </h5>
            <p align="">
                LCT takes reasonable precautions to protect personal information from unauthorized access, alteration, or
                destruction. However, no security measures are foolproof, and LCT cannot guarantee the security of your
                personal information.
                </p>
            <h5 class="mt-2 mb-2">   International Users</h5>
            <p align="">

                LCT is based in the United States and personal information may be transferred to, processed, and stored in
                the United States. By using our website and services, you consent to the transfer of your personal
                information to the United States and its storage and processing in accordance with this Privacy Policy.
            </p>
            <h5 class="mt-2 mb-2"> Changes to Privacy Policy
            </h5>
            <p align="">LCT reserves the right to modify this Privacy Policy at any time without prior notice. Your continued use of
                our website and services after any changes to this Privacy Policy constitutes your acceptance of the revised
                Privacy Policy.</p>
           <h5 class="mt-2 mb-2"> Contact Information</h5>
            <p align="">If you have any questions or concerns about this Privacy Policy, please contact us at
                <a href="#">info@lastchanceticket.com</a>
            </p>

           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-lg" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="exampleModalLabel"><span>About Last Chance Ticket</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
                <p align="">Last Chance Ticket (LCT) is a ticket marketplace based in the state of Wyoming in the United States. Our
                    mission is to provide a safe and secure platform for ticket buyers and sellers to exchange tickets for events.</p>
                <p align="">With LCT, you can buy and sell tickets for concerts, sporting events, theater shows, and more. Our userfriendly platform and commitment to customer service make buying and selling tickets easier and more
                    convenient than ever.</p>
                <p align="">At LCT, we are committed to following all applicable laws and regulations in Wyoming and the United
                    States. We take the privacy and security of our users seriously, and have implemented measures to protect
                    personal information and prevent fraud.</p>
                <p align="">Whether you're a seasoned ticket buyer or seller, or new to the ticket marketplace, LCT is here to help. We
                    are dedicated to providing a seamless ticket buying and selling experience, and look forward to serving
                    you.</p>
                    <p><b>Email : </b>info@lastchanceticket.com</p>
                    <p><b>Address : </b>30 N Gould St Ste R Sheridan, Wyoming 82801, United States</p>
                    <p><b>Contact Us : </b>+1 276 329 3991</p>
                    <p><b>Facebook : </b><a href="https://www.facebook.com/profile.php?id=100091981194183&mibextid=LQQJ4d" target="_blank"><i class="bi bi-facebook"></i> Last Chance Ticket</a></p>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-lg" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="exampleModalLabel"><span>  Contact Information</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
                <p align="">
                  If you have any questions or concerns about this Privacy Policy, please contact us at
                <a href="#">info@lastchanceticket.com</a>
                </p>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade modal-lg" id="exampleModalPaymentPolicy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Payment Policy</span></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">

            <h5 class="mb-2 mt-2" style="margin-bottom: 10px;">Payment</h5>
            <p><b class="text-dark">a) Payment Gateway:</b></p><p align="" style="margin-bottom: 2px;">The Company uses Stripe as the payment gateway. By using our website or mobile application, you agree to comply with the Stripe terms of service, which can be found at https://stripe.com/us/terms.</p>
            <p><b class="text-dark">b) Payment Processing:</b></p><p align="" style="margin-bottom: 2px;">All payments made on our platform will be processed by Stripe. The Company does not store any credit card information on our servers.</p>
            <p><b class="text-dark">c) Payment Methods:</b></p><p align="" style="margin-bottom: 2px;">We accept all major credit cards and debit cards that are supported by Stripe.</p>
            <p><b class="text-dark">d) Payment Authorization:</b></p><p align="" style="margin-bottom: 2px;">By making a payment on our platform, you authorize us to charge your credit card or debit card for the total amount of your purchase, including any applicable taxes and fees.</p>
            <p><b class="text-dark">e) Payment Confirmation:</b></p><p align="" style="margin-bottom: 2px;">Upon completion of your payment, you will receive an email confirmation that includes the details of your purchase.</p>
            <p><b class="text-dark">f) Payment Refunds:</b></p><p align="" style="margin-bottom: 2px;">All sales are final and non-refundable. Refunds will only be issued to the buyer if the event is completely cancelled. No refund will be issued in case if the event is postponed to another date. The Company reserves the right to withhold or cancel refunds for any reason. In case of a refund, the transaction charge or currency adjustment rate should be borne by the buyer.</p>
            <p><b class="text-dark">g) Payment Security:</b></p><p align="" style="margin-bottom: 2px;">The Company takes the security of your payment information seriously. We use industry-standard encryption and security protocols to protect your personal and payment information.</p>
            <p><b class="text-dark">h) Payment Errors:</b></p><p align="" style="margin-bottom: 2px;">The Company reserves the right to correct any errors in pricing or payment processing. If an error is discovered after you have made a payment, we will notify you and give you the option to cancel your order or pay the correct amount.</p>
            <p><b class="text-dark">i) Payment Terms:</b></p><p align="" style="margin-bottom: 2px;">By making a payment on our platform, you agree to these Payment Terms and Conditions, as well as our Terms of Service and Privacy Policy.</p>
            <h5 class="mb-2 mt-2">Payment to Sellers</h5>
            <p align="" style="margin-bottom: 2px;">We will initiate payment within five business days after the completion of the event for the tickets the seller successfully sold. If the buyer raises any complaints regarding the tickets sold by the seller, we will only release the payment after completing our investigation.</p>
            <h5 class="mb-2 mt-2">Dispute Resolution Process</h5>
            <p align="" style="margin-bottom: 2px;">If a dispute arises between a seller and a buyer on the Marketplace regarding the ticket or any service provided, the buyer or seller may initiate a dispute resolution request by contacting our customer support team at support@lastchanceticket.com. If you want to raise a complaint regarding a completed event, the buyer or seller should raise them inside 24 hrs from the event date. The complaint received after 24 hrs of the event date will not be considered.</p>
            <p><b class="text-dark">a) Investigation:</b></p><p align="" style="margin-bottom: 2px;">Once a dispute resolution request has been initiated, we will investigate the dispute and request relevant information from the seller and buyer. We may also request additional information or documentation from the parties as needed.</p>
            <p><b class="text-dark">b) Resolution:</b></p><p align="" style="margin-bottom: 2px;">After our investigation, we will make a determination on the dispute and provide a resolution. Our determination will be based on the information and documentation provided by the parties, as well as our policies and procedures.</p>
            <p><b class="text-dark">c) Refunds:</b></p><p align="" style="margin-bottom: 2px;">If we determine that a refund is appropriate, we will initiate the refund process on behalf of the buyer. The seller may be required to provide the funds for the refund. We also have the right to suspend or terminate sellers' and buyers' accounts at any time if we find anything suspicious.</p>
            <p><b class="text-dark">d) Fees:</b></p><p align="" style="margin-bottom: 2px;">If we determine that the seller is responsible for the dispute, we may charge the seller a fee for our dispute resolution services. The fee will be deducted from the seller's account balance or may be charged to the seller's payment method on file.</p>
            <p><b class="text-dark">e) Outcome:</b></p><p align="" style="margin-bottom: 2px;">Our determination of the dispute is final and binding on the seller and buyer. Both the seller and buyer are obligated to accept our final decision.</p>


           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
