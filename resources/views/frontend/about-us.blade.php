@extends('frontend.layouts.app')

@section('content')

<section class="service-section d-flex mt-90">
    <div class="content">
        <div id="particles-js"></div>
        <h1 class="service">About Us</h1>
        <div class="breadcrums">
            <a href="{{route('home')}}" class="home-page">Home</a>
            <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.47216 16.3381L0.830078 14.7995L7.03394 8.19075L1.01902 2.17583L2.60712 0.583252L10.1696 8.14577L2.47216 16.3381Z" fill="#EAEAEA"/>
            </svg>
            <span class="current-page">About Us</span>
        </div>
        <p class="introductory-text mx-auto" style="max-width: 1122px;">At Humanity Nexus, we connect charitable organizations and individuals dedicated to core humanity values. Our platform enables collaboration, resource sharing, and global impact. Join us in fostering positive change and building a more compassionate, inclusive world.</p>
    </div>
</section>

<section class="zapta-intro-sec">
    <div class="container">
        <div class="zapta-grid">
            <h2 class="we-doHeading grid-item1 pb-16 mb-0" style="padding-bottom: 30px;">What is Humanity <span>Nexus?</span></h2>
            <div class="what-we-are grid-item2">
                <p class="about-us">At Humanity Nexus, our mission is to connect and empower charitable organizations. We believe in the strength of unity to address global challenges. Our platform fosters collaboration, allowing charities to combine resources and expertise for a more compassionate and inclusive world.</p><br>
                <p class="about-us">Humanity Nexus is more than a platform; it's a community dedicated to core humanity values. We're here to inspire positive change and foster a culture of giving. Join us, whether you're a charity seeking partners, a donor, or an individual eager to make a difference. Together, we can create a world where humanity's potential knows no bounds.</p><br>
                <p class="about-us">Our commitment is to make a lasting impact, where compassion and cooperation thrive, and where kindness and inclusivity define the path to a better world</p>
                {{-- <p class="about-zapta">Choose ZAPTA Technologies as your trusted partner.</p> --}}
            </div>
            <div class="zapta-building grid-item3">
                <img width="625" height="482" src="{{ asset('frontend-assets/images/about-us.webp')}}" alt="About us">
            </div>
        </div>
    </div>
</section>

<section class="our-mission-section">
    <div class="container">
        <h2 class="our-misson">Our Mission</h2>
        <div class="mission-container">
            {{-- <img src="{{ asset('frontend-assets/images/icons/up-comas.svg')}}" alt="inverted comas" width="57" height="44"> --}}
            <p class="misson-content">"Our mission at Humanity Nexus is to unite and empower charities for a kinder, more inclusive world. Together, we inspire positive change, fostering a lasting impact."</p>
            {{-- <img src="{{ asset('frontend-assets/images/icons/up-comas-2.svg')}}" alt="inverted comas" width="57" height="44"> --}}
        </div>
    </div>
</section>

<section class="do-cards-sec card-shadow content-fix">
    <div class="container">
        <h2 class="we-doHeading">Our <span>Core Values</span></h2>
        <div class="do-card-wraper">
            
<!-- Card 1 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/ui-icon.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Compassion</h2>
                    <p class="card-text">Extending a helping hand and showing empathy towards those facing hardship and suffering.</p>
                </div>

                <!-- Card 2 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/web-icon.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Empathy</h2>
                    <p class="card-text">Putting yourself in another's shoes, understanding their pain, and providing support.</p>
                </div>

                <!-- Card 3 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/mobile-icon.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Inclusivity</h2>
                    <p class="card-text">Welcoming people from all walks of life, embracing diversity, and promoting unity.</p>
                </div>

                <!-- Card 4 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/Quality.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Kindness</h2>
                    <p class="card-text">Acts of love, generosity, and goodwill that make the world a better place for everyone.</p>
                </div>

                <!-- Card 5 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/mvp-builder.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Cooperation</h2>
                    <p class="card-text">Joining forces to tackle global challenges and create a brighter future for humanity.</p>
                </div>

                <!-- Card 6 -->
                <div class="do-card">
                    <img width="60" height="60" src="{{ asset('frontend-assets/images/icons/teams.svg') }}" alt="UI icon">
                    <h2 class="cardTitle">Integrity</h2>
                    <p class="card-text">Upholding unwavering honesty, ethical principles, and moral values in all our actions and interactions.</p>
                </div>

        </div>
    </div>
</section>

<section class="our-vision-section">
    <div class="container">
        <div class="vision-main">
            <h2 class="our-misson t-left grid-item1">Our Vision</h2>
            <div class="vision-content grid-item2">
                <p class="vision-content">Our vision at Humanity Nexus is a world where unity among charities leads to global compassion, inclusivity, and meaningful change. We aspire to be the driving force behind this transformative shift.</strong></p>
            </div>
            <div class="vision-image grid-item3">
                <img width="453" height="426" src="{{ asset('frontend-assets/images/vision.webp')}}" alt="vision">
            </div>
        </div>
    </div>
</section>

<section class="zapta-intro-sec">
    <div class="container">
        <div class="zapta-grid">
            <h2 class="we-doHeading grid-item1 max-w-546 pb-30 mb-0">What <span>We Do!</span></h2>
            <div class="what-we-are max-w-546 grid-item2">
                <p class="about-us">At Humanity Nexus, we connect and empower charitable organizations. Our platform is a central hub for collaboration, enabling them to share resources, coordinate projects, and amplify their collective impact. We streamline communication and provide the tools for efficient cooperation, helping charities address global challenges more effectively.</p><br>
                <p class="about-us">Beyond the digital realm, we foster a culture of giving and inspire positive change. Whether you're a charity looking for partnerships, a donor seeking impactful causes, or an individual eager to contribute, Humanity Nexus guides and facilitates your journey to create a more compassionate and inclusive world.</p><br>
                {{-- <p class="about-zapta">We excel in custom website and mobile app development, ensuring that your digital presence is not just functional but truly exceptional.</p> --}}
                    {{-- Our project management, team ensures that your projects are executed seamlessly and on schedule. And with our DevOps experts at your side, you can harness the full potential of agile, efficient, and scalable software deployment.</p><br> --}}
                {{-- <p class="about-zapta">With a deep understanding of blending cutting-edge technology and human potential, our ultimate mission is to create a meaningful global impact through our digital services and solutions.</p> --}}
            </div>
            <div class="zapta-building grid-item3 text-right">
                <img width="625" height="468" src="{{ asset('frontend-assets/images/what-we-do.webp')}}" alt="What we do">
            </div>
        </div>
    </div>
</section>


@endsection

