

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
    <div class="header-body background-color-primary pt-0 pb-0">
        <div class="header-top header-top-style-3 header-top-custom background-color-primary">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="d-none d-md-block">
                                        <span class="ws-nowrap"><i class="icon-location-pin icons"></i> 1234 Street Name, City Name</span>
                                    </li>
                                    <li>
                                        <span class="ws-nowrap"><i class="icon-call-out icons"></i> (800) 123-4567</span>
                                    </li>
                                    <li class="d-none d-md-block">
                                        <span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="mailto:mail@example.com">mail@example.com</a></span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top langs mr-0">
                                <ul class="nav nav-pills">
                                    <li>
                                        <a href="#" class="nav-link dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            English
                                            <i class="fa fa-sort-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                            <li>
                                                <a class="dropdown-item" href="#english"><img src="img/blank.gif" class="flag flag-us" alt="English"> English</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#espanol"><img src="img/blank.gif" class="flag flag-es" alt="Español"> Español</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#francaise"><img src="img/blank.gif" class="flag flag-fr" alt="Française"> Française</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="blog">
                                        <a class="nav-link" href="#">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container custom-position-initial">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="demo-real-estate.html">
                                <img alt="Ash" width="143" src="{{asset('homepage/assets/logo-white.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 m-0">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="nav-link @if(Request::url() === route('home.index')) active @endif" href="{{route('home.index')}}">Home</a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="nav-link" href="demo-real-estate-properties.html">
                                                Properties
                                            </a>
                                        </li>

                                        <li class="dropdown dropdown-full-color dropdown-quaternary">
                                            <a class="nav-link @if(Request::url() === route('home.about')) active @endif" href="{{route('home.about')}}">About</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="demo-real-estate-agents.html">Agents</a></li>
                                                <li><a class="dropdown-item" href="demo-real-estate-who-we-are.html">Who We Are</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="nav-link @if(Request::url() === route('home.contact')) active @endif" href="{{route('home.contact')}}">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
                                            <a class="nav-link dropdown-toggle" href="#">
                                                Search <i class="fa fa-search"></i>
                                            </a>
                                            <ul class="dropdown-menu custom-fullwidth-dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <form id="propertiesFormHeader" action="demo-real-estate-properties.html" method="POST">
                                                            <div class="container p-0">
                                                                <div class="form-row">
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesPropertyType" data-msg-required="This field is required." id="propertiesPropertyType" required="">
                                                                                <option value="">Property Type</option>
                                                                                <option value="1">Apartment</option>
                                                                                <option value="2">House</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesLocation" data-msg-required="This field is required." id="propertiesLocation" required="">
                                                                                <option value="">Location</option>
                                                                                <option value="1">Miami</option>
                                                                                <option value="2">New York</option>
                                                                                <option value="3">Houston</option>
                                                                                <option value="4">Los Angeles</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMinBeds" data-msg-required="This field is required." id="propertiesMinBeds" required="">
                                                                                <option value="">Min Beds</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMinPrice" data-msg-required="This field is required." id="propertiesMinPrice" required="">
                                                                                <option value="">Min Price</option>
                                                                                <option value="150000">$150,000</option>
                                                                                <option value="200000">$200,000</option>
                                                                                <option value="250000">$250,000</option>
                                                                                <option value="300000">$300,000</option>
                                                                                <option value="350000">$350,000</option>
                                                                                <option value="400000">$400,000</option>
                                                                                <option value="450000">$450,000</option>
                                                                                <option value="500000">$500,000</option>
                                                                                <option value="550000">$550,000</option>
                                                                                <option value="600000">$600,000</option>
                                                                                <option value="650000">$650,000</option>
                                                                                <option value="700000">$700,000</option>
                                                                                <option value="750000">$750,000</option>
                                                                                <option value="800000">$800,000</option>
                                                                                <option value="850000">$850,000</option>
                                                                                <option value="900000">$900,000</option>
                                                                                <option value="950000">$950,000</option>
                                                                                <option value="1000000">$1,000,000</option>
                                                                                <option value="1250000">$1,250,000</option>
                                                                                <option value="1500000">$1,500,000</option>
                                                                                <option value="1750000">$1,750,000</option>
                                                                                <option value="2000000">$2,000,000</option>
                                                                                <option value="2250000">$2,250,000</option>
                                                                                <option value="2500000">$2,500,000</option>
                                                                                <option value="2750000">$2,750,000</option>
                                                                                <option value="3000000">$3,000,000</option>
                                                                                <option value="3250000">$3,250,000</option>
                                                                                <option value="3500000">$3,500,000</option>
                                                                                <option value="3750000">$3,750,000</option>
                                                                                <option value="4000000">$4,000,000</option>
                                                                                <option value="4250000">$4,250,000</option>
                                                                                <option value="4500000">$4,500,000</option>
                                                                                <option value="4750000">$4,750,000</option>
                                                                                <option value="5000000">$5,000,000</option>
                                                                                <option value="6000000">$6,000,000</option>
                                                                                <option value="7000000">$7,000,000</option>
                                                                                <option value="8000000">$8,000,000</option>
                                                                                <option value="9000000">$9,000,000</option>
                                                                                <option value="10000000">$10,000,000</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMaxPrice" data-msg-required="This field is required." id="propertiesMaxPrice" required="">
                                                                                <option value="">Max Price</option>
                                                                                <option value="150000">$150,000</option>
                                                                                <option value="200000">$200,000</option>
                                                                                <option value="250000">$250,000</option>
                                                                                <option value="300000">$300,000</option>
                                                                                <option value="350000">$350,000</option>
                                                                                <option value="400000">$400,000</option>
                                                                                <option value="450000">$450,000</option>
                                                                                <option value="500000">$500,000</option>
                                                                                <option value="550000">$550,000</option>
                                                                                <option value="600000">$600,000</option>
                                                                                <option value="650000">$650,000</option>
                                                                                <option value="700000">$700,000</option>
                                                                                <option value="750000">$750,000</option>
                                                                                <option value="800000">$800,000</option>
                                                                                <option value="850000">$850,000</option>
                                                                                <option value="900000">$900,000</option>
                                                                                <option value="950000">$950,000</option>
                                                                                <option value="1000000">$1,000,000</option>
                                                                                <option value="1250000">$1,250,000</option>
                                                                                <option value="1500000">$1,500,000</option>
                                                                                <option value="1750000">$1,750,000</option>
                                                                                <option value="2000000">$2,000,000</option>
                                                                                <option value="2250000">$2,250,000</option>
                                                                                <option value="2500000">$2,500,000</option>
                                                                                <option value="2750000">$2,750,000</option>
                                                                                <option value="3000000">$3,000,000</option>
                                                                                <option value="3250000">$3,250,000</option>
                                                                                <option value="3500000">$3,500,000</option>
                                                                                <option value="3750000">$3,750,000</option>
                                                                                <option value="4000000">$4,000,000</option>
                                                                                <option value="4250000">$4,250,000</option>
                                                                                <option value="4500000">$4,500,000</option>
                                                                                <option value="4750000">$4,750,000</option>
                                                                                <option value="5000000">$5,000,000</option>
                                                                                <option value="6000000">$6,000,000</option>
                                                                                <option value="7000000">$7,000,000</option>
                                                                                <option value="8000000">$8,000,000</option>
                                                                                <option value="9000000">$9,000,000</option>
                                                                                <option value="10000000">$10,000,000</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-0">
                                                                        <input type="submit" value="Search Now" class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
