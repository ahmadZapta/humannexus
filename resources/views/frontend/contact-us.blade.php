@extends('frontend.layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.css">

    <style>
        .contact-wizard {
            border: none;
            padding-top: 3.8rem;
        }

        .contact-wizard .nav {
            display: none;
        }

        .detail-top-border {
            border: 1px solid var(--primaryblue4);
            margin-top: 5.1rem;
            margin-bottom: 2rem;
        }

        .btn.sw-btn-next{
            margin-top: 3.2rem !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered{
            font-size: 1.8rem !important;
            line-height: 3.6rem !important;
        }
       .detail-form {
            border: none !important;
            padding-left: 0 !important;
        }

        .need-expert:hover {
            cursor: pointer;
        }

        .swal2-title{
            font-size: 2rem;
            line-height: 3rem;
            font-weight: 400;
            color: #000;
          }

          .swal2-popup{
            max-width: 440px !important;
            width: 100% !important;
            padding-top: 2rem !important; 
            padding-bottom: 4rem !important; 
            padding-left: 2rem;
            padding-right: 2rem;
          }

          .swal2-confirm.swal2-styled{
            padding: 1rem 2.5rem;
            background-color: #005BAA;
            border: 1px solid #005BAA;
            box-shadow: none !important;
            outline: none;
            font-size: 1.8rem;
            line-height: 2.4rem;
            font-weight: 400;
            color: #FFF;
            transition: all .5s ease;
            transition-property: background-color, color;
          }

          .swal2-confirm.swal2-styled:hover{
            background-color: #ffffff !important;
            color: #005BAA;
            background-image: none !important;
          }

          /* .sw>.tab-content{
            min-height: 510px !important;
            position: relative;
            height: auto;
          } */
          .tab-content .tab-pane{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            transition: all 0s ease;
            transition-property: left;
            background: #f2f7fb !important;
            /* display: block !important; */
          }

          /* .tab-pane:nth-child(2){
            min-height: 580px !important;
          } */

          /* .tab-content .tab-pane:last-child{
            min-height: 1016px;
          } */

          .shedular-col .custom-book-consultation {
                width: fit-content;
                border: none;
                outline: 0;
                background: var(--primaryblue4);
                border-radius: 4px;
                box-shadow: none;
                font-weight: 600;
                font-size: 1.8rem;
                line-height: 2.8rem;
                color: #fff;
                padding-top: 0.9rem;
                padding-bottom: 0.9rem;
                padding-left: 3.2rem;
                padding-right: 6rem;
                position: relative;
            }

            .shedular-col .custom-book-consultation::after {
                position: absolute;
                content: "";
                width: 14.5px;
                height: 12.5px;
                right: 3.2rem;
                top: 1.7rem;
                background-image: url(frontend-assets/images/icons/chirvan-down.svg);
                background-repeat: no-repeat;
                transition: .5s;
                transform: rotate(-90deg);
            }

            .accordion-collapse.collapse{
                display: block !important;
                transition: unset !important;
            }

            .collapse {
                transition: none !important;
            }

            .collapsing{
                all: unset !important;
            }

            .getInTouch-sec .contect-detail {
                display: grid;
                grid-template-columns: minmax(300px, 487px) minmax(350px, 624px) !important;
            }

            .shedular-col{
                padding: 8rem 3.1rem !important;
                max-width: 624px !important;
                background: white !important;
                max-height: 675px !important;
                overflow: hidden !important;
                z-index: 0 !important;
            }
/* 
            .calender-container .meet-header, .meet-header{
                margin-bottom: 2.4rem !important;
            } */

            .tab-pane{
                background-color: transparent;
            }

            .shedular-col .let-shedule-call{
                font-size: 3.6rem !important;
                line-height: 4.6rem !important;
            }

            .tab-pane:nth-child(2){
                min-height: 600px;
            }

            .shedular-col .calender-container::before{
                /* height: 80% !important; */
                top: 12.5rem !important;
            }

            .smart-wizard .swiper-slide{
                max-width: 100% !important;
                height: fit-content !important;
                padding-left: 3.9rem;
                padding-right: 3.9rem;
                max-height: 515px !important;
                overflow-y: auto !important;
            }

            .smart-wizard .swiper-slide::-webkit-scrollbar {
                width: 7.646px;
                border-radius: 19px;
            }


            .smart-wizard .swiper-slide::-webkit-scrollbar-thumb {
                background: #B0D0E7 !important;
            }
            .smart-wizard .swiper-slide::-webkit-scrollbar-track {
                background: transparent; 
            }

            .smart-wizard .swiper-slide:nth-child(2){
                min-height: 570px
            }

            .smart-wizard .swiper-slide:nth-child(3){
                min-height: 570px
            }
            .get-in-touch{
                background-color: #f0f8ff;
                padding: 5.4rem;
            }

            .get-in-touch .in-touch-h2{
                font-size: 3.6rem !important;
                line-height: 4.6rem !important; 
            }

            .select2-container .select2-selection--single .select2-selection__rendered {
                transform: translateY(-2px) !important;
            }
            .get-in-touch .form-detail{
                padding-top: 3rem !important; 
                gap: 3rem !important;
            }

            .shedule-a-call .offcanvas-body .shedular-col{
                padding: 0 !important;
            }

            .getInTouch-sec{
                margin-top: -5px !important;
            }

            .getInTouch-sec .contect-detail{
                justify-content: start !important;
                gap: 13.7rem !important;
                align-items: center !important;
            }

            .getInTouch-sec .contect-detail .offices{
                min-height: 581px !important;
                height: fit-content !important;
            }

            .form-control {
                display: block;
                width: 100%;
                height: auto;
                padding: 0;
                padding-top: 2px;
                font-size: 1.6rem;
                line-height: 3rem;
                color: #475F7B;
                background-color: #FFF;
                border: 1px solid #DFE3E7;
                border-radius: .267rem;
                -webkit-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .clientsSwiper {
                transform: translate3d(0, 0, 0);
                backface-visibility: hidden;
            }

            .clientsSwiper .swiper-wrapper {
                -webkit-transition-timing-function:linear !important; 
                -o-transition-timing-function:linear !important;
                transition-timing-function:linear !important;
            }

            .clientsSwiper .swiper-wrapper .swiper-slide{
                width: fit-content !important;
            }

            .contact-links{
                display: flex;
                align-items: center;
                column-gap: 2.156rem;
                margin-top: 2.043rem;
                justify-content: center;
                position: relative;
                z-index: 4;
            }

            .iti-mobile .intl-tel-input .country-list{
                background: white !important;
            }

            .contact-links .contact-link{
                width: 5.45rem;
                height: 5.45rem;
                border-radius: 50%;
                text-decoration: none;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(255, 255, 255, 0.16);
            }

            /* .contact-detail-section{
                padding: 8rem 0 !important;
            } */

            .we-doHeading{
                margin-bottom: 3rem !important;
            }

            .detail-grid .iframe-col img{
                border-radius: 0.8rem;
                max-width: 625px !important;
            }

            .get-in-touch{
                height: fit-content !important;
            }

            .get-in-touch .submit-button{
                margin-top: 4.4rem !important;
            }

            .shedular-col .shedule-consultation{
                margin-bottom: 6.7rem !important;
            }

            .upload-document{
                position: relative;
                overflow: hidden;
                height: fit-content;
                margin-top: 1rem;
            }

            .upload-document .form-control{
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
            }

            .uploadDocument{
                display: grid;
                grid-template-columns: 1fr 119px;
                border: 1px solid #BEC8DD;
                border-radius: 0.2rem;
                overflow: hidden;
            }

            .upload-label,
            .upload-label-browse{
                display: block;
                padding: 0.7rem 1.4rem;
                background: white;
                color: #A0A0A0;
                font-size: 1.6rem;
                line-height: 2.6rem;
                font-weight: 400;
            }

            .upload-label-browse{
                color: #232323;
                font-weight: 600;
                /* border-radius: 0px 2px 2px 0px; */
                background: #DCE3E8;
            }

            .getInTouch-sec{
                padding: 6.1rem 0 !important;
            }

          @media screen and (max-width: 1270px){
            .getInTouch-sec .contect-detail{
                gap: 3rem !important;   
                justify-content: space-between !important;
            }
          }
          @media screen and (max-width: 991px){

            .getInTouch-sec .contect-detail{
                grid-template-columns: 1fr !important;
            }

            .getInTouch-sec::before{
                height: 627px !important;
            }

            .select2-container .select2-selection--single .select2-selection__rendered {
                transform: translateY(0px) !important;
            }

            .contact-detail-section, .pr-key-features-sec{
                padding-bottom: 0 !important;
            }

            .detail-grid .iframe-col{
                order: 2;
            }

            .get-in-touch{
                order: 1;
            }

            .shedular-col,
            .smart-wizard .swiper-slide{
                max-height: unset !important;
                /* overflow-y: auto !important; */
            }

          }

          @media screen and (max-width: 768px){
            .shedular-col{
                padding: 1.6rem 0.6rem !important;
                border-bottom: none !important;
                border-radius: 0.8rem !important;
            }

        }

        @media screen and (max-width: 520px){

            .uploadDocument{
                border-radius: 0.4rem;
            }

            .upload-document{
                margin-top: 0.2rem;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered{
                font-size: 1.2rem !important;
                line-height: 1.6rem !important;
            }
            .get-in-touch .form-detail .contact-field{
                font-size: 1.6rem !important;
                line-height: 2.4rem !important;
            }
            .shedular-col .calender-container::before{
                width: 287px !important;
                height: 85% !important;
                top: 9rem !important;
            }

            .shedular-col .custom-book-consultation {
                font-size: 1.4rem !important;
                line-height: 2rem !important;
                white-space: nowrap !important;
                padding: 1.2rem 3rem 1.2rem 2rem !important;
            }

            .shedular-col .custom-book-consultation::after {
                right: 1rem;
                top: 1.6rem;
            }

            .get-in-touch{
                padding-left: 1.6rem;
                padding-right: 1.6rem;
            }

            .get-in-touch .submit-button{
                margin-top: 6rem !important;
            }

            .get-in-touch .in-touch-h2 {
                font-size: 2rem !important;
                line-height: 3rem !important;
                font-weight: 700 !important;
            }

            .smart-wizard .swiper-slide{
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .smart-wizard .swiper-slide:nth-child(2){
                min-height: 486px
            }

            .smart-wizard .swiper-slide:nth-child(3){
                min-height: 494px
            }
    

            .contact-detail-section, .pr-key-features-sec .container{
                max-width: 100% !important;
            }
            .calender-container{
                padding-bottom: 0 !important;
            }

            .shedular-col {
                padding: 5rem 0.6rem;
            }

            .contact-links .contact-link{
                width: 2.5rem;
                height: 2.5rem;
            }

            .contact-links .contact-link svg{
                transform: scale(0.5);
            }

            .contact-links{
                margin-top: 1rem;
                gap: 0.968rem;
            }

            .we-doHeading{
                padding-bottom: 0 !important;
                margin-bottom: 1.7rem !important;
            }

            .contact-detail-section{
                padding-top: 2rem !important;
                padding-bottom: 1.7rem !important; 
            }

            .get-in-touch{
                border-radius: 0 !important;
            }

            .get-in-touch{
                padding: 2rem 1.6rem !important;
            }

            .getInTouch-sec{
                padding-top: 1.6rem !important;
                padding-bottom: 5rem !important;
            }

            .shedular-col .let-shedule-call{
                font-size: 2rem !important;
                line-height: 3rem !important;
            }

            .shedular-col .shedule-consultation{
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .get-in-touch .form-detail{
                padding-top: 2rem !important;
                gap: 2rem !important;
            }


            .get-in-touch .submit-button{
                margin-top: 2rem !important;
            }

            .detail-grid{
                gap: 1.6rem !important;
            }

            .shedular-col .custom-book-consultation::after{
                transform: rotate(-90deg) scale(0.8);
            }

            .shedular-col .we-take-meeting{
                margin-top: 1.6rem !important;
            }

            .shedular-col .mail-us .mail-span svg{
                transform: scale(0.7) !important;
            }

            .getInTouch-sec::before{
                height: 656px !important;
            }

            .getInTouch-sec .contect-detail{
                gap: 6.2rem !important;
            }

            .upload-label,
            .upload-label-browse{
                font-size: 1.4rem;
                line-height: 2.4rem;
            }

        }

    </style>
@endsection
@section('content')
    <section class="service-section d-flex mt-90">
        <div class="content">
            <div id="particles-js"></div>
            <h1 class="service">Contact Us</h1>
            <div class="breadcrums">
                <a href="{{ url('/') }}" class="home-page">Home</a>
                <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.47216 16.3381L0.830078 14.7995L7.03394 8.19075L1.01902 2.17583L2.60712 0.583252L10.1696 8.14577L2.47216 16.3381Z"
                        fill="#EAEAEA" />
                </svg>
                <span class="current-page">Contact Us</span>
            </div>
            <p class="introductory-text mx-auto" style="max-width: 1035px;">Have questions or want to get in touch? We're here to listen and assist. Feel free to reach out to us through the provided contact information; we look forward to connecting with you.</p>
                <div class="contact-links">
                    <a href="https://wa.me/923045179551" target="_blank" class="contact-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                            <path d="M24.7935 4.72809C23.4751 3.3964 21.9048 2.34055 20.1741 1.62211C18.4434 0.903664 16.587 0.537015 14.7132 0.543543C6.86174 0.543543 0.462696 6.94259 0.462696 14.794C0.462696 17.3105 1.12417 19.7551 2.36084 21.912L0.347656 29.3033L7.89709 27.3189C9.98218 28.4549 12.3261 29.0588 14.7132 29.0588C22.5646 29.0588 28.9636 22.6598 28.9636 14.8084C28.9636 10.9977 27.4825 7.41713 24.7935 4.72809ZM14.7132 26.643C12.5849 26.643 10.4999 26.0678 8.67361 24.9893L8.24221 24.7305L3.75569 25.9097L4.94922 21.5382L4.66162 21.0924C3.47923 19.2043 2.8514 17.0218 2.84976 14.794C2.84976 8.26554 8.17031 2.94498 14.6988 2.94498C17.8624 2.94498 20.839 4.18165 23.0679 6.42491C24.1715 7.52349 25.0461 8.83018 25.641 10.2693C26.2359 11.7084 26.5392 13.2512 26.5334 14.8084C26.5622 21.3369 21.2416 26.643 14.7132 26.643ZM21.2129 17.785C20.8534 17.6125 19.099 16.7497 18.7827 16.6203C18.4519 16.5052 18.2219 16.4477 17.9774 16.7928C17.7329 17.1523 17.0571 17.9576 16.8558 18.1877C16.6544 18.4321 16.4387 18.4609 16.0792 18.2739C15.7198 18.1014 14.5694 17.7131 13.2177 16.5052C12.1535 15.5561 11.4489 14.3914 11.2332 14.0319C11.0319 13.6724 11.2045 13.4854 11.3914 13.2985C11.5496 13.1403 11.7509 12.8815 11.9235 12.6802C12.096 12.4788 12.1679 12.3207 12.283 12.0906C12.398 11.8461 12.3405 11.6448 12.2542 11.4723C12.1679 11.2997 11.4489 9.54535 11.1613 8.82636C10.8737 8.13612 10.5718 8.2224 10.3561 8.20802H9.66582C9.42136 8.20802 9.04749 8.2943 8.71675 8.6538C8.40039 9.01329 7.48008 9.87609 7.48008 11.6304C7.48008 13.3848 8.75989 15.0816 8.93245 15.3117C9.10501 15.5561 11.4489 19.1511 15.0151 20.6898C15.8635 21.0636 16.525 21.2793 17.0427 21.4375C17.8911 21.7107 18.6676 21.6676 19.286 21.5813C19.9762 21.4806 21.3998 20.7185 21.6874 19.8845C21.9894 19.0505 21.9894 18.3458 21.8887 18.1877C21.7881 18.0295 21.5724 17.9576 21.2129 17.785Z" fill="white"/>
                        </svg>
                    </a>

                    <a href="https://join.skype.com/invite/rZWRiX9yihIk" target="_blank" class="contact-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M28.2317 18.0626C30.3147 8.7252 22.1265 0.24974 12.5019 1.86582C7.29448 -1.36634 0.363281 2.29678 0.363281 8.50972C0.363281 9.94624 0.758324 11.3109 1.44067 12.4601C-0.462717 21.8334 7.76135 30.2012 17.386 28.4414C24.1736 32.0327 31.6435 24.886 28.2317 18.0626ZM19.1098 23.7009C16.5959 24.7424 12.43 24.7424 9.91613 23.4136C6.32483 21.5102 5.71431 17.2007 8.80283 17.2007C11.1372 17.2007 10.383 19.93 12.7533 21.0074C13.8306 21.5102 16.165 21.5461 17.4938 20.6483C18.8225 19.7505 18.7148 18.3499 17.9965 17.7034C16.0932 15.9437 10.5985 16.626 8.08457 13.5375C7.00718 12.2088 6.7917 9.8385 8.12048 8.11468C10.4548 5.09799 17.3142 4.91842 20.2591 7.18094C22.9884 9.29981 22.2343 12.0651 20.0436 12.0651C17.4219 12.0651 18.7866 8.61746 14.513 8.61746C11.4245 8.61746 10.2034 10.8082 12.3941 11.8855C15.339 13.3939 22.8448 12.8911 22.8448 18.6372C22.8448 21.0074 21.3724 22.7672 19.1098 23.7009Z" fill="white"/>
                        </svg>
                    </a>

                    <a href="mailto:example@charity.com" class="contact-link">
                        <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.2363 0.427379C25.1272 0.416134 25.0172 0.416134 24.9081 0.427379H2.49073C2.34706 0.429593 2.20433 0.451136 2.06641 0.491428L13.6353 12.0123L25.2363 0.427379Z" fill="white"/>
                            <path d="M26.4202 1.53931L14.7632 13.1483C14.4632 13.4465 14.0573 13.6139 13.6343 13.6139C13.2113 13.6139 12.8055 13.4465 12.5055 13.1483L0.952528 1.62737C0.917012 1.75791 0.898181 1.89242 0.896484 2.02768V18.0401C0.896484 18.4647 1.06519 18.872 1.36548 19.1723C1.66577 19.4726 2.07305 19.6413 2.49772 19.6413H24.915C25.3397 19.6413 25.747 19.4726 26.0473 19.1723C26.3476 18.872 26.5163 18.4647 26.5163 18.0401V2.02768C26.5099 1.86088 26.4775 1.6961 26.4202 1.53931ZM3.59457 18.0401H2.48171V16.8952L8.30221 11.1227L9.43108 12.2516L3.59457 18.0401ZM24.899 18.0401H23.7782L17.9417 12.2516L19.0705 11.1227L24.891 16.8952L24.899 18.0401Z" fill="white"/>
                        </svg>
                    </a>

                    <a href="tel:923045179551" class="contact-link">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0596 15.9177C18.2747 15.1423 17.2949 15.1423 16.515 15.9177C15.9201 16.5079 15.3252 17.0982 14.7403 17.6985C14.5803 17.8636 14.4453 17.8986 14.2503 17.7885C13.8654 17.5784 13.4554 17.4084 13.0855 17.1783C11.3608 16.0927 9.91598 14.6971 8.63617 13.1263C8.00126 12.3459 7.43635 11.5105 7.0414 10.5701C6.96142 10.38 6.97641 10.2549 7.13139 10.0999C7.7263 9.52458 8.30622 8.9343 8.89113 8.34402C9.70601 7.52362 9.70601 6.56316 8.88613 5.73776C8.4212 5.26754 7.95627 4.80732 7.49134 4.33709C7.01141 3.85686 6.53648 3.37163 6.05155 2.8964C5.26667 2.13103 4.28681 2.13103 3.50693 2.9014C2.90702 3.49169 2.33211 4.09698 1.7222 4.67725C1.15728 5.21251 0.872323 5.86783 0.812332 6.63319C0.717347 7.87879 1.0223 9.05436 1.45224 10.1999C2.33211 12.571 3.67191 14.6771 5.29666 16.608C7.49134 19.2192 10.1109 21.2852 13.1755 22.7759C14.5553 23.4463 15.9851 23.9615 17.5398 24.0466C18.6097 24.1066 19.5395 23.8365 20.2844 23.0011C20.7944 22.4308 21.3693 21.9105 21.9092 21.3653C22.7091 20.5549 22.7141 19.5744 21.9192 18.774C20.9693 17.8186 20.0145 16.8681 19.0596 15.9177Z" fill="white"/>
                            <path d="M18.1034 11.9308L19.9477 11.6157C19.6578 9.91984 18.8581 8.3841 17.6436 7.16351C16.3591 5.87789 14.7347 5.0675 12.9454 4.81738L12.6855 6.67328C14.07 6.86837 15.3295 7.49367 16.3241 8.48915C17.2637 9.4296 17.8785 10.6202 18.1034 11.9308Z" fill="white"/>
                            <path d="M20.9838 3.90701C18.8543 1.77598 16.16 0.430336 13.1857 0.0151367L12.9258 1.87103C15.4952 2.2312 17.8246 3.39676 19.6641 5.23265C21.4087 6.97848 22.5534 9.18454 22.9683 11.6107L24.8129 11.2956C24.328 8.48421 23.0033 5.93298 20.9838 3.90701Z" fill="white"/>
                        </svg>
                            
                    </a>
                </div>
        </div>
    </section>

    <section class="contact-detail-section scrolled-section">
        <div class="container">
            <h2 class="we-doHeading">Contact <span>Details</span></h2>
            <div class="detail-grid">
                <div class="iframe-col">
                    {{-- <iframe class="iframe" src="https://www.youtube.com/embed/KI5akPLaR-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                    <img id="responsiveImage" width="625" height="410" src="{{ asset('frontend-assets/images/humanity.webp') }}"
                        alt='A team of software developers working in the ZAPTA Technologies office building in Lahore, Pakistan. The developers are working on a custom software development project, using various tools and technologies to create a high-quality software solution. The image is relevant to the keywords "about us," "custom software development company," "web development company," "mobile app development company," "application development company," "IT consulting company," "IT services company," "IT solutions company," "IT outsourcing company," "quality assurance," "mobile apps," "data analytics," "artificial intelligence," "machine learning," "MVP builder," "dedicated teams," "history of ZAPTA," and "ZAPTA office building."'>
                    <h2 class="learn-from-meeting">Contact Us – Here's What <span>You Can Expect:</span></h2>
                    <ul class="learning-list">
                        <li class="learning-point">Prompt and helpful responses to your inquiries, ensuring your questions are addressed.</li>
                        <li class="learning-point">Assistance with any concerns or feedback you wish to share.</li>
                        <li class="learning-point">A welcoming and supportive environment for open communication and engagement.</li>
                    </ul>
                </div>
                
                <form action="" class="get-in-touch global-ajax-submit"
                    id="contactForm" data-success-fn='InviteLearnerSignupSuccess' data-recaptcha-id="contact"
                    data-error-fn='LearnerSignupError' data-check-validate="false">
                    <h2 class="in-touch-h2">We’re just a <span>message away!</span></h2>
                    <div class="form-detail">
                        <div class="fields-wrap">
                            <label for="c_name" class="contact-label">Full Name<span class="steric">*</span></label>
                            <input class="contact-field" type="text" id="c_name" placeholder="John Deo"
                                name="name" minlength="2" maxlength="50" required>
                        </div>

                        <div class="fields-wrap">
                            <label for="c_email" class="contact-label">Email<span class="steric">*</span></label>
                            <input class="contact-field" type="email" id="c_email" placeholder="example@xyz.com"
                                name="email" required>
                        </div>

                        <div class="fields-wrap">
                            <label for="c_comments" class="contact-label">Your comments<span class="steric">*</span></label>
                            <textarea class="contact-field txtarea" name="message" placeholder="Tell us what you’re looking for" id="c_comments" required></textarea>
                        </div>
                        <div class="fields-wrap">
                            <label for="document" class="contact-label">Upload Document</label>
                            <div class="upload-document">
                                <div class="uploadDocument">
                                    <span class="upload-label" id="file-name">Choose file to upload</span>
                                    <span class="upload-label-browse">Browse File</span>
                                </div>
                                <input class="form-control" type="file" id="document_file" name="document" accept=".doc, .docx, .xls, .xlsx, .pdf, .jpg, .jpeg, .png">
                            </div>
                        </div>
                    </div>
                    {{-- {!! RecaptchaV3::field('contact','contact-recaptcha-response') !!} --}}
                    <button type="submit" class="btn btndanger loader-btn mt-5">Send us a message!</button>
                </form>
            </div>
        </div>
    </section>

    <section class="clients-section" style="background-color: #44525d;">
        <div class="container">
            <h2 class="our-clients" style="color: var(--primaryColor)">Registered Users</h2>
            <div class="swiper clientsSwiper">
                <div class="swiper-wrapper">

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>

                    <a href="#" target="_blank" class="swiper-slide">
                        <img width="230" height="70" src="{{ asset('frontend-assets/images/icon/logo.svg') }}" alt="logo">
                    </a>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.js"></script>

    <script>

        $(document).ready(function() {

         
        });
    </script>

@endsection
@section('schema')
 
@endsection
