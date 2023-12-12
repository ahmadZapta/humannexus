
@if (request()->route()->getName() == 'frontend.organizationDetail')
 
        <section class="contact-section section-padding" id="section_6" style="background: #fbfbfc;">
          <div class="container">
              <div class="row">
        
                  <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                      <div class="contact-info-wrap">
                          <h2 class="contact-h2">Get in touch</h2>
        
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54493.45938054079!2d74.16957532167967!3d31.390941599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919018a8ea548c1%3A0x4a52db69c2c814f!2sThe%20University%20of%20Lahore!5e0!3m2!1sen!2s!4v1699393296336!5m2!1sen!2s" width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                          <div class="contact-info mt-2">
                              <h5 class="mb-3">Contact Infomation</h5>
        
                              <p class="d-flex mb-2 align-items-center gap-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" fill="#717275"/></svg>
                                  Defence Road, Lahore, Pakistan
                              </p>
        
                              <p class="d-flex mt-3 align-items-center gap-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                      <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" fill="#717275"></path>
                                  </svg>
        
                                  <a href="tel: 304 5179 551">
                                      304 5179 551
                                  </a>
                              </p>
        
                              <p class="d-flex align-items-center gap-2 mt-3">
                                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" fill="#717275"></path></svg>
        
                                  <a href="mailto:example@charity.com">
                                      example@charity.com
                                  </a>
                              </p>
        
                              <a href="#" class="btn btndanger mt-3" style="width: fit-content">Get Direction</a>
                          </div>
                      </div>
                  </div>
        
                  <div class="col-lg-5 col-12 mx-auto">
                      <form class="custom-form contact-form" action="#" method="post" role="form">
                          <h2 class="contact-h2">Get Information</h2>
        
                          <div class="row mt-4">
                              <div class="col-lg-6 col-md-6 col-12">
                                  <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required="">
                              </div>
        
                              <div class="col-lg-6 col-md-6 col-12">
                                  <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required="">
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="organization" id="organization" class="form-control" placeholder="Organization" required="">
                            </div>
      
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required="">
                            </div>
                        </div>
        
                          <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required="">
        
                          <textarea name="message" rows="5" class="form-control" id="message" placeholder="Type your query here."></textarea>
        
                          <button type="" class="btn btndanger w-100">Submit</button>
                      </form>
                  </div>
        
              </div>
          </div>
        </section>

        <section class="contact-section section-padding" id="section_6" style="background: #f0f8ff;">
            <div class="container">
                <div class="row">
        
          
                    <h2 class="contact-h2 text-center">Make a payment</h2>
                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
          
                            <div class="row mt-4">

                                <h2 class="contact-h2">Account Details</h2>
                                <div class="col-12">

                                    <p class="mb-2">Allied Bank</p>
                                    <p class="mb-2">Account No: 1303001005465655554</p>
                                    <p class="mb-2">Account Name: Humanity Nexus</p>

                                    <div class="input-group input-group-file bg-white mt-5">
                                        <input type="file" class="form-control" id="attachScreenShot">
        
                                        <label class="input-group-text d-block w-100" for="attachScreenShot" style="font-size: 15px;text-align:left;cursor:pointer;">Attach Screenshot</label>
        
                                        <i class="bi-cloud-arrow-up ms-auto"></i>
                                    </div>
                                </div>
                            </div>
  
                            <button type="" class="btn btndanger w-100">Submit</button>
                        </form>
                    </div>
          
                </div>
            </div>
          </section>
@else
<section class="contact-section section-padding" id="section_6" style="background: #fbfbfc;">
    <div class="container">
        <div class="row">
  
            <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                <div class="contact-info-wrap">
                    <h2 class="contact-h2">Get in touch</h2>
  
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54493.45938054079!2d74.16957532167967!3d31.390941599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919018a8ea548c1%3A0x4a52db69c2c814f!2sThe%20University%20of%20Lahore!5e0!3m2!1sen!2s!4v1699393296336!5m2!1sen!2s" width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
                    <div class="contact-info mt-2">
                        <h5 class="mb-3">Contact Infomation</h5>
  
                        <p class="d-flex mb-2 align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" fill="#717275"/></svg>
                            Defence Road, Lahore, Pakistan
                        </p>
  
                        <p class="d-flex mt-3 align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" fill="#717275"></path>
                            </svg>
  
                            <a href="tel: 304 5179 551">
                                304 5179 551
                            </a>
                        </p>
  
                        <p class="d-flex align-items-center gap-2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" fill="#717275"></path></svg>
  
                            <a href="mailto:example@charity.com">
                                example@charity.com
                            </a>
                        </p>
  
                        <a href="#" class="btn btndanger mt-3" style="width: fit-content">Get Direction</a>
                    </div>
                </div>
            </div>
  
            <div class="col-lg-5 col-12 mx-auto">
                <form class="custom-form contact-form" action="#" method="post" role="form">
                    <h2 class="contact-h2">Contact form</h2>
  
                    <p class="mb-4">Or, you can just send an email:
                        <a href="mailto:example@charity.com" style="display: inline">example@charity.com</a>
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required="">
                        </div>
  
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required="">
                        </div>
                    </div>
  
                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required="">
  
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>
  
                    <button type="" class="btn btndanger w-100">Send Message</button>
                </form>
            </div>
  
        </div>
    </div>
  </section>
@endif


<footer class="site-footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-12 mb-4">
              <img src="{{asset('frontend-assets/images/icon/logo.svg')}}" alt="logo">
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-4">
              <h5 class="site-footer-title mb-3">Quick Links</h5>

              <ul class="footer-menu">
                  <li class="footer-menu-item"><a href="#" class="footer-menu-link">Home</a></li>

                  <li class="footer-menu-item"><a href="#" class="footer-menu-link">About</a></li>

                  <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blogs</a></li>

                  <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>

                  <li class="footer-menu-item"><a href="#" class="footer-menu-link">Organizations</a></li>
              </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mx-auto">
              <h5 class="site-footer-title mb-3">Contact Infomation</h5>

              <p class="text-white d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                      <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" fill="#FFF"/>
                  </svg>

                  <a href="tel: 304 5179 551" class="site-footer-link">
                      304 5179 551
                  </a>
              </p>

              <p class="text-white d-flex align-items-center gap-2 mt-2">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" fill="#FFF"/></svg>

                  <a href="mailto:example@charity.com" class="site-footer-link">
                      example@charity.com
                  </a>
              </p>

              <p class="text-white d-flex align-items-center gap-2 mt-2">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" fill="#FFF"/></svg>
                  Defence Road, Lahore, Pakistan
              </p>

              <a href="#" class="btn btndanger d-inline-flex mt-3">Get Direction</a>
          </div>
      </div>
  </div>

  <div class="site-footer-bottom">
      <div class="container">
          <div class="row">

              <div class="col-lg-6 col-md-7 col-12">
                  <p class="copyright-text mb-0">Copyright © 2023 <a href="#">Humanity Nexus</a> Plateform<br>Powered by Humanity Nexus
                  </p>
              </div>

              <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                  <ul class="social-icon">
                      <li class="social-icon-item">
                          <a href="https://www.facebook.com" target="_blank" class="social-icon-link">
                              <svg width="10" height="17" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.82765 3.78265H10.6442V0.6149C10.3308 0.571734 9.25298 0.474609 7.99771 0.474609C5.37856 0.474609 3.58437 2.12406 3.58437 5.15567V7.94571H0.694092V11.487H3.58437V20.3975H7.12798V11.4878H9.90135L10.3416 7.94654H7.12715V5.50681C7.12798 4.48327 7.40324 3.78265 8.82765 3.78265Z" fill="#FFF"></path>
                              </svg>
                          </a>
                      </li>

                      <li class="social-icon-item">
                          <a href="https://www.twitter.com" target="_blank" class="social-icon-link">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 20 19" fill="#FFF">
                                  <path d="M0.78734 0.973206L7.9275 10.5224L0.742188 18.2829H2.35933L8.65032 11.4873L13.7347 18.2833H19.2365L11.6941 8.19874L18.3824 0.973206H16.7652L10.9717 7.23081L6.29025 0.973206H0.78734ZM3.16562 2.16462H5.69378L16.8571 17.0915H14.3297L3.16562 2.16462Z" fill="#FFF"></path>
                              </svg>
                          </a>
                      </li>

                      <li class="social-icon-item">
                          <a href="https://www.instagram.com" target="_blank" class="social-icon-link">
                              <svg width="14" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.67097 6.38428C7.86107 6.38428 7.08435 6.70601 6.51166 7.27869C5.93898 7.85137 5.61725 8.6281 5.61725 9.43799C5.61725 10.2479 5.93898 11.0246 6.51166 11.5973C7.08435 12.17 7.86107 12.4917 8.67097 12.4917C9.48086 12.4917 10.2576 12.17 10.8303 11.5973C11.403 11.0246 11.7247 10.2479 11.7247 9.43799C11.7247 8.6281 11.403 7.85137 10.8303 7.27869C10.2576 6.70601 9.48086 6.38428 8.67097 6.38428Z" fill="#FFF"></path>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75684 1.05863C7.02293 0.696602 10.319 0.696602 13.5851 1.05863C15.3694 1.25783 16.808 2.66254 17.0175 4.45343C17.4048 7.76521 17.4048 11.1109 17.0175 14.4226C16.808 16.2135 15.3694 17.6182 13.5861 17.8184C10.3197 18.1805 7.02324 18.1805 3.75684 17.8184C1.97253 17.6182 0.533997 16.2135 0.324465 14.4236C-0.0629077 11.1115 -0.0629077 7.76552 0.324465 4.45343C0.533997 2.66254 1.97253 1.25783 3.75684 1.05863ZM13.369 3.8004C13.1198 3.8004 12.8808 3.89939 12.7046 4.0756C12.5284 4.25181 12.4294 4.49081 12.4294 4.74001C12.4294 4.9892 12.5284 5.2282 12.7046 5.40441C12.8808 5.58062 13.1198 5.67961 13.369 5.67961C13.6182 5.67961 13.8572 5.58062 14.0334 5.40441C14.2096 5.2282 14.3086 4.9892 14.3086 4.74001C14.3086 4.49081 14.2096 4.25181 14.0334 4.0756C13.8572 3.89939 13.6182 3.8004 13.369 3.8004ZM4.20785 9.43803C4.20785 8.25434 4.67808 7.11912 5.51507 6.28213C6.35207 5.44513 7.48729 4.97491 8.67098 4.97491C9.85468 4.97491 10.9899 5.44513 11.8269 6.28213C12.6639 7.11912 13.1341 8.25434 13.1341 9.43803C13.1341 10.6217 12.6639 11.7569 11.8269 12.5939C10.9899 13.4309 9.85468 13.9012 8.67098 13.9012C7.48729 13.9012 6.35207 13.4309 5.51507 12.5939C4.67808 11.7569 4.20785 10.6217 4.20785 9.43803Z" fill="#FFF"></path>
                              </svg>
                          </a>
                      </li>

                      <li class="social-icon-item">
                          <a href="https://www.linkedin.com" target="_blank" class="social-icon-link">
                              <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" viewBox="0 0 448 512">
                                  <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" fill="#FFF"></path>
                              </svg>
                          </a>
                      </li>

                      <li class="social-icon-item">
                          <a href="https://youtube.com/" target="_blank" class="social-icon-link">
                              <svg width="17" height="12" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19.12 2.93766C19.0136 2.5426 18.8054 2.1824 18.5161 1.89311C18.2268 1.60382 17.8666 1.39559 17.4716 1.28926C16.0167 0.895508 10.1706 0.895508 10.1706 0.895508C10.1706 0.895508 4.32442 0.895508 2.86955 1.28926C2.4745 1.39559 2.1143 1.60382 1.82501 1.89311C1.53572 2.1824 1.32749 2.5426 1.22115 2.93766C0.949498 4.42139 0.817672 5.92735 0.827406 7.43572C0.817672 8.94409 0.949498 10.45 1.22115 11.9338C1.32749 12.3288 1.53572 12.689 1.82501 12.9783C2.1143 13.2676 2.4745 13.4758 2.86955 13.5822C4.32442 13.9759 10.1706 13.9759 10.1706 13.9759C10.1706 13.9759 16.0167 13.9759 17.4716 13.5822C17.8666 13.4758 18.2268 13.2676 18.5161 12.9783C18.8054 12.689 19.0136 12.3288 19.12 11.9338C19.3916 10.45 19.5235 8.94409 19.5137 7.43572C19.5235 5.92735 19.3916 4.42139 19.12 2.93766ZM8.30193 10.2387V4.63277L13.1537 7.43572L8.30193 10.2387Z" fill="#FFF"></path>
                                  <path d="M8.31012 4.62988V10.2472L13.1588 7.4386L8.31012 4.62988Z" fill="transparent"></path>
                              </svg>
                          </a>
                      </li>
                  </ul>
              </div>

          </div>
      </div>
  </div>
</footer>