@extends('frontend.layouts.app')
@section('styles')

<style>
    .bs-pagination nav{
        top: 101%
    }

    @media screen and (max-width:991px){
        .bs-pagination nav{
            top: 100%;
        }
    }

    @media screen and (max-width:520px){
        .bs-pagination{
            margin-bottom: 4.5rem;
        }
    }
</style>

@endsection
@section('content')

<section class="service-section d-flex mt-90">
    <div class="content">
        <div id="particles-js"></div>
        <h1 class="service">Organizations</h1>
        <div class="breadcrums">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.47216 16.3381L0.830078 14.7995L7.03394 8.19075L1.01902 2.17583L2.60712 0.583252L10.1696 8.14577L2.47216 16.3381Z" fill="#EAEAEA"/>
            </svg>
            <span class="current-page">Organizations</span>
        </div>
        <p class="introductory-text mx-auto" style="max-width: 740px;">Our registered organizations are the heart of our mission, dedicated to making a positive impact on humanity. Explore their work and be part of the change.</p>
    </div>
</section>

<section class="projects-section">
    <div class="container">

        <div class="project-container">
            <!-- Organization 1 -->


            <a href="{{ route('organizationDetail') }}" class="project-card">
                <div class="project-thumbnail">
                    <img class="thumbnail-img" width="407" height="424" src="{{asset('frontend-assets/images/organizations.webp')}}" alt="organization">
                </div>
                <div class="project-description">
                    <h2 class="project-title">dsasdasd as d sad sad</h2>
                    <p class="project-intro">sadas as d as d as d sa d as dsa d saa sd  sa d sa asd sa as  d as asd</p>
                </div>
            </a>

            
        </div>
        {{-- {{$portfolios->links('pagination::bootstrap-5')}} --}}
    </div>
</section>

@endsection
@push('js')

<script>

</script>
@endpush
