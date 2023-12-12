@extends('frontend.layouts.app')
@section('title', 'Organization Details | Human Nexys')
@section('meta')
   
@endsection
@section('styles')
<style>

</style>
@endsection
@section('content')

<section class="hero-section hero-section-full-height mt-90">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('frontend-assets/images/volunteer-helping-with-donation-box.jpg')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>be a Kind Heart</h1>

                                <p>Professional charity theme based on Bootstrap 5.2.2</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('frontend-assets/images/volunteer-selecting-organizing-clothes-donations-charity.jpg')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>Non-profit</h1>

                                <p>You can support us to grow more</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('frontend-assets/images/medium-shot-people-collecting-donations.jpg')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>Humanity</h1>

                                <p>Please tell your friends about our website</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Welcome to Kind Heart Charity</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <img src="{{asset('frontend-assets/images/icon/hands.png')}}" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <img src="{{asset('frontend-assets/images/icon/heart.png')}}" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <img src="{{asset('frontend-assets/images/icon/receive.png')}}" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Make a <strong>Donation</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <img src="{{asset('frontend-assets/images/icon/scholarship.png')}}" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding section-bg" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{asset('frontend-assets/images/group-people-volunteering-foodbank-poor-people.jpg')}}"
                    class="custom-text-box-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-box">
                    <h2 class="mb-2">Our Story</h2>

                    <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5>

                    <p class="mb-0">This is a Bootstrap 5.2.2 CSS template for charity organization websites.
                        You can feel free to use it. Please tell your friends about TemplateMo website. Thank
                        you.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box mb-lg-0">
                            <h5 class="mb-3">Our Mission</h5>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                            <ul class="custom-list mt-2">
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Charity Theme
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Semantic HTML
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                            <div class="counter-thumb">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="2009"
                                        data-speed="1000"></span>
                                    <span class="counter-number-text"></span>
                                </div>

                                <span class="counter-text">Founded</span>
                            </div>

                            <div class="counter-thumb mt-4">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="120"
                                        data-speed="1000"></span>
                                    <span class="counter-number-text">B</span>
                                </div>

                                <span class="counter-text">Donations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="{{asset('frontend-assets/images/portrait-volunteer-who-organized-donations-charity.jpg')}}"
                    class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0">Sandy Chan</h2>

                    <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                        charity theme based</p>

                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 20 19" fill="#FFF">
                                    <path d="M0.78734 0.973206L7.9275 10.5224L0.742188 18.2829H2.35933L8.65032 11.4873L13.7347 18.2833H19.2365L11.6941 8.19874L18.3824 0.973206H16.7652L10.9717 7.23081L6.29025 0.973206H0.78734ZM3.16562 2.16462H5.69378L16.8571 17.0915H14.3297L3.16562 2.16462Z" fill="#FFF"></path>
                                </svg>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" viewBox="0 0 448 512">
                                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" fill="#FFF"></path>
                                </svg>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <svg width="14" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.67097 6.38428C7.86107 6.38428 7.08435 6.70601 6.51166 7.27869C5.93898 7.85137 5.61725 8.6281 5.61725 9.43799C5.61725 10.2479 5.93898 11.0246 6.51166 11.5973C7.08435 12.17 7.86107 12.4917 8.67097 12.4917C9.48086 12.4917 10.2576 12.17 10.8303 11.5973C11.403 11.0246 11.7247 10.2479 11.7247 9.43799C11.7247 8.6281 11.403 7.85137 10.8303 7.27869C10.2576 6.70601 9.48086 6.38428 8.67097 6.38428Z" fill="#FFF"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75684 1.05863C7.02293 0.696602 10.319 0.696602 13.5851 1.05863C15.3694 1.25783 16.808 2.66254 17.0175 4.45343C17.4048 7.76521 17.4048 11.1109 17.0175 14.4226C16.808 16.2135 15.3694 17.6182 13.5861 17.8184C10.3197 18.1805 7.02324 18.1805 3.75684 17.8184C1.97253 17.6182 0.533997 16.2135 0.324465 14.4236C-0.0629077 11.1115 -0.0629077 7.76552 0.324465 4.45343C0.533997 2.66254 1.97253 1.25783 3.75684 1.05863ZM13.369 3.8004C13.1198 3.8004 12.8808 3.89939 12.7046 4.0756C12.5284 4.25181 12.4294 4.49081 12.4294 4.74001C12.4294 4.9892 12.5284 5.2282 12.7046 5.40441C12.8808 5.58062 13.1198 5.67961 13.369 5.67961C13.6182 5.67961 13.8572 5.58062 14.0334 5.40441C14.2096 5.2282 14.3086 4.9892 14.3086 4.74001C14.3086 4.49081 14.2096 4.25181 14.0334 4.0756C13.8572 3.89939 13.6182 3.8004 13.369 3.8004ZM4.20785 9.43803C4.20785 8.25434 4.67808 7.11912 5.51507 6.28213C6.35207 5.44513 7.48729 4.97491 8.67098 4.97491C9.85468 4.97491 10.9899 5.44513 11.8269 6.28213C12.6639 7.11912 13.1341 8.25434 13.1341 9.43803C13.1341 10.6217 12.6639 11.7569 11.8269 12.5939C10.9899 13.4309 9.85468 13.9012 8.67098 13.9012C7.48729 13.9012 6.35207 13.4309 5.51507 12.5939C4.67808 11.7569 4.20785 10.6217 4.20785 9.43803Z" fill="#FFF"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 ms-auto">
                <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
            </div>

            <div class="col-lg-5 col-12">
                <p><a href="#" class="me-4">Make a donation</a></p>

                <a href="#section_4" class="d-inline-flex btn btndanger mt-3">Become a volunteer</a>
            </div>

        </div>
    </div>
</section>


<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>Our Causes</h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{asset('frontend-assets/images/group-african-kids-paying-attention-class.jpg')}}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Children Education</h5>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0">
                                    <strong>Raised:</strong>
                                    $18,500
                                </p>

                                <p class="ms-auto mb-0">
                                    <strong>Goal:</strong>
                                    $32,000
                                </p>
                            </div>
                        </div>

                        <a href="#" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{asset('frontend-assets/images/poor-child-landfill-looks-forward-with-hope.jpg')}}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Poverty Development</h5>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                tempor</p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0">
                                    <strong>Raised:</strong>
                                    $27,600
                                </p>

                                <p class="ms-auto mb-0">
                                    <strong>Goal:</strong>
                                    $60,000
                                </p>
                            </div>
                        </div>

                        <a href="#" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-block-wrap">
                    <img src="{{asset('frontend-assets/images/african-woman-pouring-water-recipient-outdoors.jpg')}}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Supply drinking water</h5>

                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            </p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0">
                                    <strong>Raised:</strong>
                                    $84,600
                                </p>

                                <p class="ms-auto mb-0">
                                    <strong>Goal:</strong>
                                    $100,000
                                </p>
                            </div>
                        </div>

                        <a href="#" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="text-white mb-4">Volunteer</h2>

                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h3 class="mb-4">Become a volunteer today</h3>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                placeholder="Jack Doe" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="email" name="volunteer-email" id="volunteer-email"
                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com"
                                required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-subject" id="volunteer-subject"
                                class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="input-group input-group-file">
                                <input type="file" class="form-control" id="inputGroupFile02">

                                <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                <i class="bi-cloud-arrow-up ms-auto"></i>
                            </div>
                        </div>
                    </div>

                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                        placeholder="Comment (Optional)"></textarea>

                    <button type="submit" class="btn btndanger w-100">Submit</button>
                </form>
            </div>

            <div class="col-lg-6 col-12">
                <img src="{{asset('frontend-assets/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg')}}"
                    class="volunteer-image img-fluid" alt="">

                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                    <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                        tokito Professional charity theme based</p>
                </div>
            </div>

        </div>
    </div>
</section>

</section>

@endsection
@push('js')
<script>

</script>

@endpush
