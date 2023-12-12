@extends('frontend.layouts.app')
@section('content')
<section class="service-section mt-90">
    <div id="particles-js" class="height-436"></div>
    <div class="content">
        <h2 class="service">Blogs</h2>
        <div class="breadcrums">
            <a href="index.php" class="home-page">Home</a> 
            <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.47216 16.3381L0.830078 14.7995L7.03394 8.19075L1.01902 2.17583L2.60712 0.583252L10.1696 8.14577L2.47216 16.3381Z" fill="#EAEAEA"/>
            </svg>
            <span class="current-page">Blogs</span>
        </div>
        <p class="introductory-text mx-auto" style="max-width: 740px;">Explore informative and engaging blog articles on a wide range of topics, written by experts and curated for your reading pleasure.</p>
    </div>
</section>

 <section class="latest-blog-section">
    <div class="container">
    
        <div class="outsourcing">
            <h2 class="we-doHeading latest-item">Latest <span>Blogs</span></h2>
            <div class="outsourcing-img">
                <div class="outsourcing1">
                    <div class="image-container">
                        <img src="assets/images/outstanding-coutries.webp" alt="" width="100%">
                    </div>
                    <div class="blog-content">
                        <div class="software-time">
                            <p class="software-p">Software Development</p>
                            <p class="Reading-time">Reading Time: 12 mins</p>
                        </div>
                        <h3 class="outsourcing-h3">The Best outsourcing countries for software development in 2023</h3>
                        <p class="largest-india-p">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                        <div class="main-john-doe">
                            <div class="Posted-at">
                                <div class="john">
                                    <img src="assets/images/icons/john-de.svg" alt="john-img">
                                    <p class="john-p">John Doe</p>
                                </div>
                                <p class="posted-p">Posted on: 12 May 2023</p>
                            </div>
                            <a class="share-btn" data-bs-toggle="modal" data-bs-target="#shareBlogModal"><span><img src="assets/images/icons/share-2.svg" alt="share-img">Share </span></a>
                        </div>
                    </div>
                </div>
                <!--  2-->
                <div class="outsourcing1 mt-30">
                    <div class="image-container">
                        <img src="assets/images/coputer-on-table.webp" alt="" width="100%">
                    </div>
                    <div class="blog-content">
                        <div class="software-time">
                            <p class="software-p">Software Development</p>
                            <p class="Reading-time">Reading Time: 12 mins</p>
                        </div>
                        <h3 class="outsourcing-h3">The Best outsourcing countries for software development in 2023</h3>
                        <p class="largest-india-p">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                        <div class="main-john-doe">
                            <div class="Posted-at">
                                <div class="john">
                                    <img src="assets/images/icons/john-de.svg" alt="john-img">
                                    <p class="john-p">John Doe</p>
                                </div>
                                <p class="posted-p">Posted on: 12 May 2023</p>
                            </div>
                            <a class="share-btn" data-bs-toggle="modal" data-bs-target="#shareBlogModal"><span><img src="assets/images/icons/share-2.svg" alt="share-img">Share </span></a>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>

            <!-- Header Search -->
            <div class="header-search-wrapper">
                <label>Search</label>
                <input type="search" class="search-field" placeholder="Search..." >
                <div class="search-result-container">
                    <ul class="main-results">
                        <li class="result-item">
                            <a class="result-link" href="#">
                                <img class="search-image" src="assets/images/icons/john-de.svg"
                                    alt="result image" />
                                <div class="info">
                                    <h2>The English Master course: English Grammar</h2>
                                    <p><strong class="course-name">Course:</strong>
                                        <span class="auther-name">David Moris</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a class="result-link" href="#">
                                <img class="search-image" src="assets/images/icons/john-de.svg"
                                    alt="result image" />
                                <div class="info">
                                    <h2>Learn English: Beginner Grammar</h2>
                                    <p><strong class="course-name">Course:</strong>
                                        <span class="auther-name">David Moris</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a class="result-link" href="#">
                                <img class="search-image" src="assets/images/icons/john-de.svg"
                                    alt="result image" />
                                <div class="info">
                                    <h2>English Speaking Complete: Master Your Skill</h2>
                                    <p><strong class="course-name">Course:</strong>
                                        <span class="auther-name">David Moris</span>
                                    </p>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <ul class="popular-searches">
                        <li class="popular-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.3508 10.446L16 15.0953L15.0953 16L10.446 11.3508C9.34322 12.2532 7.93351 12.7947 6.39734 12.7947C2.86419 12.7947 0 9.93049 0 6.39734C0 2.86419 2.86419 0 6.39734 0C9.93049 0 12.7947 2.86419 12.7947 6.39734C12.7947 7.93351 12.2532 9.34322 11.3508 10.446ZM6.39734 11.5152C9.22386 11.5152 11.5152 9.22386 11.5152 6.39734C11.5152 3.57082 9.22386 1.27947 6.39734 1.27947C3.57082 1.27947 1.27947 3.57082 1.27947 6.39734C1.27947 9.22386 3.57082 11.5152 6.39734 11.5152Z"
                                    fill="#3B1B7C" />
                            </svg>
                            <h2 class="popular-title">learn english with ani</h2>
                        </li>
                        <li class="popular-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.3508 10.446L16 15.0953L15.0953 16L10.446 11.3508C9.34322 12.2532 7.93351 12.7947 6.39734 12.7947C2.86419 12.7947 0 9.93049 0 6.39734C0 2.86419 2.86419 0 6.39734 0C9.93049 0 12.7947 2.86419 12.7947 6.39734C12.7947 7.93351 12.2532 9.34322 11.3508 10.446ZM6.39734 11.5152C9.22386 11.5152 11.5152 9.22386 11.5152 6.39734C11.5152 3.57082 9.22386 1.27947 6.39734 1.27947C3.57082 1.27947 1.27947 3.57082 1.27947 6.39734C1.27947 9.22386 3.57082 11.5152 6.39734 11.5152Z"
                                    fill="#3B1B7C" />
                            </svg>
                            <h2 class="popular-title">learn english with eric</h2>
                        </li>
                        <li class="popular-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.3508 10.446L16 15.0953L15.0953 16L10.446 11.3508C9.34322 12.2532 7.93351 12.7947 6.39734 12.7947C2.86419 12.7947 0 9.93049 0 6.39734C0 2.86419 2.86419 0 6.39734 0C9.93049 0 12.7947 2.86419 12.7947 6.39734C12.7947 7.93351 12.2532 9.34322 11.3508 10.446ZM6.39734 11.5152C9.22386 11.5152 11.5152 9.22386 11.5152 6.39734C11.5152 3.57082 9.22386 1.27947 6.39734 1.27947C3.57082 1.27947 1.27947 3.57082 1.27947 6.39734C1.27947 9.22386 3.57082 11.5152 6.39734 11.5152Z"
                                    fill="#3B1B7C" />
                            </svg>
                            <h2 class="popular-title">learn english with smith</h2>
                        </li>
                        <li class="popular-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.3508 10.446L16 15.0953L15.0953 16L10.446 11.3508C9.34322 12.2532 7.93351 12.7947 6.39734 12.7947C2.86419 12.7947 0 9.93049 0 6.39734C0 2.86419 2.86419 0 6.39734 0C9.93049 0 12.7947 2.86419 12.7947 6.39734C12.7947 7.93351 12.2532 9.34322 11.3508 10.446ZM6.39734 11.5152C9.22386 11.5152 11.5152 9.22386 11.5152 6.39734C11.5152 3.57082 9.22386 1.27947 6.39734 1.27947C3.57082 1.27947 1.27947 3.57082 1.27947 6.39734C1.27947 9.22386 3.57082 11.5152 6.39734 11.5152Z"
                                    fill="#3B1B7C" />
                            </svg>
                            <h2 class="popular-title">learn english julia</h2>
                        </li>
                        <li class="popular-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.3508 10.446L16 15.0953L15.0953 16L10.446 11.3508C9.34322 12.2532 7.93351 12.7947 6.39734 12.7947C2.86419 12.7947 0 9.93049 0 6.39734C0 2.86419 2.86419 0 6.39734 0C9.93049 0 12.7947 2.86419 12.7947 6.39734C12.7947 7.93351 12.2532 9.34322 11.3508 10.446ZM6.39734 11.5152C9.22386 11.5152 11.5152 9.22386 11.5152 6.39734C11.5152 3.57082 9.22386 1.27947 6.39734 1.27947C3.57082 1.27947 1.27947 3.57082 1.27947 6.39734C1.27947 9.22386 3.57082 11.5152 6.39734 11.5152Z"
                                    fill="#3B1B7C" />
                            </svg>
                            <h2 class="popular-title">learn english</h2>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Search -->

            <form class="outsourcing2">
                
                <h3 class="trend-blogs-hd">Trending Blogs</h3>
                <div class="ensure-cards">
                    <!-- 1 -->
                <div class="ensure-card1">
                    <p class=" startup-p">4 Steps to Ensure yours startup’s UX UI Design Delights your users</p>
                    <div class="Posted-at">
                        <p class="posted-p f-12">Posted on: 12 May 2023</p>
                        <div class="john">
                            <img src="assets/images/icons/john-de.svg" alt="john-img">
                            <p class="john-p">John Doe</p>
                        </div>
                    </div>
                 </div>
                    <!-- 2 -->
                <div class="ensure-card1">
                    <p class=" startup-p">4 Steps to Ensure yours startup’s UX UI Design Delights your users</p>
                    <div class="Posted-at">
                        <p class="posted-p f-12">Posted on: 12 May 2023</p>
                        <div class="john">
                            <img src="assets/images/icons/john-de.svg" alt="john-img">
                            <p class="john-p">John Doe</p>
                        </div>
                    </div>
                 </div>
                    <!-- 3 -->
                <div class="ensure-card1">
                    <p class=" startup-p">4 Steps to Ensure yours startup’s UX UI Design Delights your users</p>
                    <div class="Posted-at">
                        <p class="posted-p f-12">Posted on: 12 May 2023</p>
                        <div class="john">
                            <img src="assets/images/icons/john-de.svg" alt="john-img">
                            <p class="john-p">John Doe</p>
                        </div>
                    </div>
                 </div>
                    <!-- 4 -->
                <div class="ensure-card1">
                    <p class=" startup-p">4 Steps to Ensure yours startup’s UX UI Design Delights your users</p>
                    <div class="Posted-at">
                        <p class="posted-p f-12">Posted on: 12 May 2023</p>
                        <div class="john">
                            <img src="assets/images/icons/john-de.svg" alt="john-img">
                            <p class="john-p">John Doe</p>
                        </div>
                    </div>
                 </div>

                </div>

                <h3 style="padding-bottom: 16px;" class="trend-blogs-hd">Categories</h3>
                <div class="main-fields">
                    <!-- 1 -->
                    <div class="field-wraper">
                        <input class="category-field" type="radio" id="btn1" name="catogeris_selecter">
                        <label for="btn1" class="category-label">IT Services</label>
                    </div>
                    <!-- 2 -->
                    <div class="field-wraper">
                        <input class="category-field" type="radio" id="btn2" name="catogeris_selecter">
                        <label for="btn2" class="category-label">Software Development</label>
                    </div>
                    <!-- 3 -->
                    <div class="field-wraper">
                        <input class="category-field" type="radio" id="btn3" name="catogeris_selecter">
                        <label for="btn3" class="category-label">Outsourcing</label>
                    </div>
                    <!-- 4 -->
                    <div class="field-wraper">
                        <input class="category-field" type="radio" id="btn4" name="catogeris_selecter">
                        <label for="btn4" class="category-label">UX UI Design</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </section>
 <!-- -----------------section-blogs-cards -->
 <section class="blogs-cards-section">
    <div class="container">
    <h2 class="we-doHeading">Previous <span>Blogs</span></h2>
        <div class="blogs-cards">
            <!-- card-1 -->
            <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-1.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-2 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-2.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-3 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-3.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-4 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-2.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-5 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-3.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-6 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-1.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-7 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-3.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-8 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-1.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>
             <!-- card-9 -->
             <div class="blog-card-1">
                <div class="img-card-1">
                   <img src="assets//images/blog-card-2.webp" alt="blog-card-1" width="100%"> 
                </div>
                <div class="text-card-1">
                    <div class="software-time">
                        <p class="software-p">Software Development</p>
                        <p class="Reading-time">Reading Time: 12 mins</p>
                    </div>
                    <h2 class="blog-title">The Best outsourcing countries for software development in 2023</h2>
                    <p class="blogs-description">China, Pakistan, and India, three of Asia's largest software development countries, are among the top seven outsourcing countries for software development in 2023.</p>
                    <div class="main-john-doe">
                        <div class="Posted-at">
                            <div class="john">
                                <img src="assets/images/icons/john-de.svg" alt="john-img">
                                <p class="john-p">John Doe</p>
                            </div>
                        </div>
                        <p class="john-date">12 May 2023</p>
                        <a data-bs-toggle="modal" data-bs-target="#shareBlogModal" class="share-btn"><span><img src="assets/images/icons/share-2.svg" alt="share-img"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
 </section>



<!-- Share BLog Modal -->
<div class="modal fade share-blog" id="shareBlogModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="shareBlogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h2 class="share-blog">Share your Blog</h2>
        <p class="small-description">Feel free to distribute this blog through social media channels or by copying and sharing the link.</p>
        <div class="share-on">
            <a href="#" target="_blank" class="plate-form">
                <img src="assets/images/icons/share-on-fb.svg" alt="facebook">
                <span class="plateform-title">Facebook</span>
            </a>

            <a href="#" target="_blank" class="plate-form">
                <img src="assets/images/icons/share-on-whatsapp.svg" alt="whatsapp">
                <span class="plateform-title">WhatsApp</span>
            </a>

            <a href="#" target="_blank" class="plate-form">
                <img src="assets/images/icons/share-on-linkedin.svg" alt="linkedin">
                <span class="plateform-title">LinkedIn</span>
            </a>

            <a href="#" target="_blank" class="plate-form">
                <img src="assets/images/icons/share-on-twitter.svg" alt="twitter">
                <span class="plateform-title">Twitter</span>
            </a>

            <a href="#" target="_blank" class="plate-form">
                <img src="assets/images/icons/share-on-inst.svg" alt="instagram">
                <span class="plateform-title">Instagram</span>
            </a>

            <span class="appended" >Copied</span></span>
            <a href="#" class="plate-form" id="copy-link">
                <img src="assets/images/icons/share-on-link.svg" alt="link icon">
                <span class="plateform-title">Copy Link</span>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>

<input id="clipboard" value="https://zaptatecth.com/" style="display:none; border: none;outline:none;color:transparent;transform: translateX(-400px);"/>

 

@endsection
@push('js')

<script>

</script>
@endpush
