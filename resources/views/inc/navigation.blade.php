<nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img
            src="https://psmyoga.ca/wp-content/uploads/2021/02/LogoT-e1621667004612-150x150.png"
            alt="Image"
            />
        </a>
    </div>
    <!-- end logo -->
    <div class="custom-menu">
    <!-- <ul>
        <li><a href="#">Eng</a></li>
        <li><a href="#">Rus</a></li>
    </ul> -->
    </div>
    <!-- end custom-menu -->
    <div class="site-menu">
    <ul>
        <li><a href="visit.html">Siddhamahayog</a></li>
        <li><a href="exhibitions.html">Gallery</a></li>
        <li><a href="collections.html">Events</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="{{ route('contact.contact-us-form') }}">Contact</a></li>
    </ul>
    </div>
    <!-- end site-menu -->
    <!-- <div class="search-button"><i class="far fa-search"></i></div> -->
    <!-- end search-button -->
    <div class="hamburger-menu">
        <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30" />
            <path class="line line-center" d="M0,15h30" />
            <path class="line line-bottom" d="M0,21h30" />
        </svg>
    </div>
    <!-- end hamburger-menu -->
    <div class="navbar-button">
    <a href="https://sadhak.siddhamahayog.org" target="_new"
        >Sadhak Login</a
    >
    </div>
    <!-- end navbar-button -->
</nav>
