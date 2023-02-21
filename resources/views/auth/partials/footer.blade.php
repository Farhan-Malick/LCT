
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
<div class="footer  mt-5">
    <div class="container foot__con">
        <div class="row  pt-5 ">
            <div class="col-md-3 ">
                <ul>
                        <h4 class="text-dark">COMPANY INFO</h4>
                       
                        <li class=" mt-5"> <a type="button" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            About Us
                        </a> 
                        </li>
                        <li class=" mt-3"> <a href="{{URL('/contact-us')}}" class="text-dark">
                            Contact Us
                        </a> </li>
                        <li class=" mt-3"><a href=""
                                class="text-dark">Connect</a>
                        </li>
                    <div class="__social d-flex mt-3">
                        <li class=""><i class="bi bi-facebook"></i></li>
                        <li class="pl-4"><i class="bi bi-twitter"></i></li>
                        <li class="pl-4"><i class="bi bi-linkedin"></i></li>
                        <li class="pl-4"><i class="bi bi-instagram"></i></li>
                    </div>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <h4 class="text-dark">SAFE AND SECURE</h4>
                    <li class=" mt-5"><p  class="ml-3 text-dark" style="align-content: justify"><i class="fa fa-check " style="font-size: 18px"></i> Buying 100% safe, Only from approvals sellers.</p>
                    </li>
                    <li class=" mt-3"> <p  class="text-dark"><i class="fa-dark fa fa-circle-info" style="font-size: 18px"></i> Best Customer service before and after purchasing.</p>
                    </li>
                    <li class=" mt-3"><p  class="text-dark"><i class="fa-regular fa-credit-card"  style="font-size: 18px"></i> 100% Secure Payment System</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <h4 class="text-dark mb-5">POPULAR EVENTS</h4>
                    @foreach ($Footerevents as $event)
                        @if ($event->Footerapprove === 1)
                            <li class="mt-3"><a href="#" class="text-dark">{{$event->title}}</a>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 foot__iconss ">
                <ul>
                    <h4 class="text-dark mb-5">HOT TICKETS</h4>
                    @foreach ($FooterEventListing as $ticket)
                        @if ($ticket->Footerapprove === 1)
                            <li class="mt-3"><a href="#" class="text-dark">{{$ticket->event_name}}</a>
                        @endif
                    @endforeach
                   
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.25); font-size: 13px;">
        <div class="row px-0 mx-0">
            <div class="col-6">
                <p style="font-size: 13px;" class="text-dark"> Copyright © 2022 LastChanceTicket - All rights reserved</p>
            </div>
            <div class="col-md-6 ul__class">
                <ul class="d-flex">
                    <li><a type="button" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Terms & Conditions
                    </a> </li>
                    <li class="text-dark"> Careers </li>
                    <li><a type="button" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2">
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
          <h5 class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Terms & Conditions</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
            <p align="justify">These Terms and Conditions ("Terms") govern the use of the Last Chance Ticket ("LCT") website and
                services, a ticket marketplace based in Wyoming, United States. By using our website and services, you
                agree to be bound by these Terms. If you do not agree to these Terms, please do not use our website and
                services.
            </p>
            <h5>Ticket Sales</h5>
            <p align="justify">
                LCT acts as a marketplace to connect ticket sellers and buyers. LCT is not the seller or producer of the
                tickets, but rather a facilitator. LCT does not guarantee the authenticity, accuracy, or reliability of the
                tickets offered for sale on our website.
            </p>
            <p align="justify">LCT reserves the right to refuse any ticket purchase for any reason. All ticket sales are final and no refunds
                or exchanges will be provided, except as required by law.</p>
            <p align="justify">
                LCT is not responsible for any delay, cancellation, or other changes to the event or ticket. LCT is not
                    responsible for any loss, damage, or theft of the tickets
            </p>
            <h5>Payments</h5>
            <p align="justify">LCT uses a third-party payment processor to process payments for ticket purchases. By making a payment
                through our website, you agree to the terms and conditions of the payment processor, as well as the terms
                of any applicable credit card or other payment provider.</p>
            <p align="justify">
                LCT is not responsible for any errors or unauthorized transactions made through the payment processor.
            </p>
            <h5>
                User Conduct
            </h5>
            <p align="justify">
                By using our website and services, you agree not to:
            </p>
            <ul>
                <p align="justify">• Violate any laws or regulations.</p>
                <p align="justify">• Infringe any third-party rights, including but not limited to intellectual property rights and privacy rights.</p>
                <p align="justify">• Use our website and services for any unauthorized or fraudulent purposes.</p>
                <p align="justify">• Transmit or upload any viruses, malware, or other harmful code.</p>
                <p align="justify">• Interfere with the operation or security of our website and services.</p>
                <p align="justify">• Modify, reverse engineer, or otherwise alter any aspect of our website and services</p>
            </ul>
            <h5>Intellectual Property</h5>
            <p align="justify">
                The content and design of our website and services, including but not limited to text, graphics, logos, icons,
                and images, are the property of LCT or our licensors and are protected by applicable intellectual property
                laws. You may not use any of our intellectual property without our express written consent.
            </p>
            <h5>
                Warranty Disclaimer </h5>
            <p align="justify">
                LCT provides our website and services on an "as is" and "as available" basis. LCT makes no representations
                or warranties of any kind, express or implied, as to the operation of our website and services or the
                information, content, or materials included on our website and services. LCT does not warrant that our
                website and services will be uninterrupted or error-free.
            </p>
            <h5>
                Limitation of Liability </h5>
            <p align="justify">
                LCT will not be liable for any damages of any kind arising from the use of our website and services,
                including but not limited to direct, indirect, incidental, punitive, and consequential damages.
            </p>
            <h5>Changes to Terms </h5>
            <p align="justify">LCT reserves the right to modify these Terms at any time without prior notice. Your continued use of our
                website and services after any changes to these Terms constitutes your acceptance of the revised Terms.</p>
            <h5>Governing Law </h5>
            <p align="justify">
                These Terms will be governed by and construed in accordance with the laws of the State of Wyoming,
                United States, without giving effect to any principles of conflicts of law.
                </p>

                <h5> Entire Agreement </h5>
                <p align="justify">
                These Terms constitute the entire agreement between you and LCT with respect to the use of our website
                and services. If any provision of these Terms is found to be invalid, the remaining provisions will remain in
                full force and effect.
                </p>
                <h5> Contact Information </h5>
                <p align="justify"> 
                   
                    If you have any questions or concerns about these Terms, please contact us at <a href="#">info@lastchanceticket.com</a>
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
          <h5 class="modal-title text-center" id="exampleModalLabel"><span>Last Chance Ticket Privacy Policy</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
            <p align="justify">Last Chance Ticket ("LCT") is committed to protecting the privacy of our users. This Privacy Policy applies to
                all users of our website and services, including ticket sellers and buyers, located in the state of Wyoming in
                the United States</p>
            <h5>Information Collection and Use </h5>
            <p align="justify">
                
                LCT collects personal information from our users in order to provide our ticket marketplace services. This
                personal information may include your name, email address, billing and shipping information, and other
                information related to your ticket purchases.

            </p>
            <p align="justify">LCT also collects information related to your use of our website and services, including your IP address,
                browser type, and pages visited. This information is used to improve our website and services and to
                prevent fraud.
                </p>
            <p align="justify">
                LCT does not sell or rent personal information to third parties for their marketing purposes without your
                explicit consent.
            </p>
            <h5>
                Payment Information </h5>
            <p align="justify">
                LCT uses a third-party payment processor to process payments for ticket purchases. The payment
                processor is responsible for securely storing and processing your payment information. LCT does not store
                or have access to your full payment information.
            </p>
            <h5>Cookies </h5>
            <p align="justify">
                
                LCT uses cookies to store information about your use of our website and services. Cookies are small text
                files stored on your device that help us provide a more personalized experience. You can choose to disable
                cookies in your browser, but this may limit your ability to use our website and services.
            </p>
            <h5>Security </h5>
            <p align="justify">
                LCT takes reasonable precautions to protect personal information from unauthorized access, alteration, or
                destruction. However, no security measures are foolproof, and LCT cannot guarantee the security of your
                personal information.
                </p>
            <h5>   International Users</h5>
            <p align="justify">
              
                LCT is based in the United States and personal information may be transferred to, processed, and stored in
                the United States. By using our website and services, you consent to the transfer of your personal
                information to the United States and its storage and processing in accordance with this Privacy Policy.
            </p>
            <h5> Changes to Privacy Policy
            </h5>
            <p align="justify">LCT reserves the right to modify this Privacy Policy at any time without prior notice. Your continued use of
                our website and services after any changes to this Privacy Policy constitutes your acceptance of the revised
                Privacy Policy.</p>
           <h5> Contact Information</h5>
            <p align="justify">If you have any questions or concerns about this Privacy Policy, please contact us at 
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
          <h5 class="modal-title text-center" id="exampleModalLabel"><span>About Last Chance Ticket</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
                <p align="justify">Last Chance Ticket (LCT) is a ticket marketplace based in the state of Wyoming in the United States. Our
                    mission is to provide a safe and secure platform for ticket buyers and sellers to exchange tickets for events.</p>
                <p align="justify">With LCT, you can buy and sell tickets for concerts, sporting events, theater shows, and more. Our userfriendly platform and commitment to customer service make buying and selling tickets easier and more
                    convenient than ever.</p>
                <p align="justify">At LCT, we are committed to following all applicable laws and regulations in Wyoming and the United
                    States. We take the privacy and security of our users seriously, and have implemented measures to protect
                    personal information and prevent fraud.</p>
                <p align="justify">Whether you're a seasoned ticket buyer or seller, or new to the ticket marketplace, LCT is here to help. We
                    are dedicated to providing a seamless ticket buying and selling experience, and look forward to serving
                    you.</p>
                
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
          <h5 class="modal-title text-center" id="exampleModalLabel"><span>  Contact Information</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container">
                <p align="justify">
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