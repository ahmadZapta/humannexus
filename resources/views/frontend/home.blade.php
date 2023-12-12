@extends('frontend.layouts.app')
@section('styles')

<style id="custom-style">


.select2-container--default .select2-results>.select2-results__options{
    scrollbar-width: none;
}

.select2-container--default .select2-results>.select2-results__options::-webkit-scrollbar {
    width: 0;
    height: 0;
}

.hero-section {
    padding-top: 10rem;
    padding-bottom:10rem;
    background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("/frontend-assets/images/bg-masthead.jpg");
    /* background-image: url("../images/bg-masthead.jpg"); */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    width: 100%;
}

.hero-content{
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 700px;
    gap: 2rem;
}

.hero-content .hello{
    font-size: 4rem;
    line-height: 4.5rem;
    font-weight: 500;
    color: var(--white);
}

.hero-content .main-heading{
    font-size: 5rem;
    line-height: 5rem;
    font-weight: 700;
    color: var(--white);
    text-align: center;
}

.hero-content .hero-text{
    font-size: 1.8rem;
    line-height: 2.5rem;
    font-weight: 400;
    color: var(--white);
    text-align: center;
    margin-top: 1rem;
}

</style>
@endsection
@section('content')

    <header class="hero-section d-flex align-items-center">
        <div class="container h-100">
            <div class="hero-content mx-auto">
                <span class="hello">Hello</span>
                <h1 class="main-heading">Welcome To Human Nexus</h1>
                <p class="hero-text">The standard Lorem Ipsum passage is: Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a href="{{route('register')}}" class="btn btndanger mt-5" type="button">Contact Us</a>
            </div>
        </div>
    </header>
    <section class="do-cards-sec">
        <div class="container">
            <h1 class="we-doHeading mx-auto text-center" style="max-width:800px;">Connecting Charities for a <span>Better World, Humanity Nexus</span></h1>
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

@endsection