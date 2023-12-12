<header class="nav-bar {{ request()->routeIs('home') ? '' : 'bg-isChange'; }}">
    <div class="container" style="position: relative;">
      <div class="zapta-navbar">
        <a href="{{ url('/') }}" aria-label="navigation">
          <img width="250" height="50" src="{{asset('frontend-assets/images/icon/logo.svg')}}" alt="logo">
        </a>

        <div class="nav-items">
          <a href="{{ route('home') }}" class="nav-link">Home</a>
          <a href="{{ route('aboutUs') }}" class="nav-link">About Us</a>
          <a href="{{ route('organizations') }}" class="nav-link">Organizations</a>
          <a href="{{ route('contactUs') }}" class="nav-link">Contact</a>
          <a href="{{ route('blogs') }}" class="nav-link">Blogs</a>
          <a href="{{route('login')}}" class="btn btndanger">Login</a>

        <svg id="nav-toggler" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"  data-bs-toggle="offcanvas" data-bs-target="#navTogglerCanvas" aria-controls="navTogglerCanvas">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00012 8.67188V6.67188H21.0001V8.67188H3.00012ZM3.00012 13.6719H21.0001V11.6719H3.00012V13.6719ZM3.00012 18.6719H21.0001V16.6719H3.00012V18.6719Z" fill="#005BAA"/>
        </svg>
      </div>
    </div>
  </header>

<div class="offcanvas offcanvas-end" id="navTogglerCanvas" aria-labelledby="navTogglerCanvasLabel" style="width: fit-content;">
  <div class="mobile-menu">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <a href="{{ route('home') }}" class="nav-link">Home</a>
      <a href="{{ route('aboutUs') }}" class="nav-link">About Us</a>
      <a href="{{ route('organizations') }}" class="nav-link">Organizations</a>
      <a href="{{ route('contactUs') }}" class="nav-link">Contact</a>
      <a href="{{ route('blogs') }}" class="nav-link">Blogs</a>
      <a href="{{route('login')}}" class="nav-link nav-btn component-btn">Login</a>
  </div>
</div>

<a href="{{route('chatify')}}" class="chat-icon">
  <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z" fill="#FFFFFF"/></svg>
</a>