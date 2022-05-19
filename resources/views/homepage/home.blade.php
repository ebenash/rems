@extends('layouts.homepage')

@section('title', 'Home')

@section('content')
    <div class="slider-container light rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'arrows': {'enable': true, 'left':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':-80},'right':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':80}}}}">
            <div class="slides-number d-none d-sm-block">
                <span class="atual">1</span>
                <span class="total">3</span>
            </div>
            <ul>
                <li data-transition="fade">
                    <img src="{{asset('homepage/assets/img/demos/real-estate/slides/slide-real-estate-1.jpg')}}"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                        id="slide-529-layer-2"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="0"
                        data-width="360"
                        data-height="360"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-start="500"
                        data-responsive_offset="on"
                        style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50" style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
                                FEATURED
                            </span>
                        </div>

                    <div class="tp-caption main-label"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-50"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[-100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">PORTO DRIVE</div>

                    <div class="tp-caption"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="0"
                        data-start="1500"
                        data-height="44"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">$975,000</div>

                    <a class="tp-caption slide-button btn"
                        href="demo-real-estate-properties-detail.html"
                        data-x="left" data-hoffset="108"
                        data-y="center" data-voffset="60"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                        data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('homepage/assets/img/demos/real-estate/slides/slide-real-estate-2.jpg')}}"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                        id="slide-529-layer-2"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="0"
                        data-width="360"
                        data-height="360"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-start="500"
                        data-responsive_offset="on"
                        style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50" style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
                                FEATURED
                            </span>
                        </div>

                    <div class="tp-caption main-label"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-50"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[-100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">SOUTH MIAMI</div>

                    <div class="tp-caption"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="0"
                        data-start="1500"
                        data-height="44"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">$790,000</div>

                    <a class="tp-caption slide-button btn"
                        href="demo-real-estate-properties-detail.html"
                        data-x="left" data-hoffset="108"
                        data-y="center" data-voffset="60"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                        data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('homepage/assets/img/demos/real-estate/slides/slide-real-estate-3.jpg')}}"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                        id="slide-529-layer-1"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="0"
                        data-width="360"
                        data-height="360"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-start="500"
                        data-responsive_offset="on"
                        style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50" style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
                                FEATURED
                            </span>
                        </div>

                    <div class="tp-caption main-label"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-50"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[-100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">MIAMI AVE</div>

                    <div class="tp-caption"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="0"
                        data-start="1500"
                        data-height="44"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                        data-textAlign="center"
                        style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                        data-mask_in="x:0px;y:0px;">$625,000</div>

                    <a class="tp-caption slide-button btn"
                        href="demo-real-estate-properties-detail.html"
                        data-x="left" data-hoffset="108"
                        data-y="center" data-voffset="60"
                        data-start="1500"
                        data-whitespace="nowrap"
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                        data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-normal mb-2">
                            Listing for <strong class="text-color-secondary font-weight-extra-bold">Sale</strong> <span class="font-weight-light">or</span> <strong class="text-color-secondary font-weight-extra-bold">Rent</strong>
                        </h2>
                    </div>
                </div>
                <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-1.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for sale
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 530,000
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">South Miami</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-2.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for sale
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 320,000
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">Sunny Isles Beach</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-3.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for rent
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 3000 / month
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">Miami</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-4.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for sale
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 730,000
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">Lawe Worth, Florida</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-5.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for sale
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 435,000
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">Isles Beach, Florida</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-6.jpg')}}" class="img-fluid" alt="">
                                        <div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            for sale
                                        </div>
                                    </div>
                                    <div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        $ 490,000
                                        <i class="fa fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">Miami Ave</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                            <li>
                                                <span class="accomodation-title">
                                                    Beds:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Baths:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Sq Ft:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    500
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="listingLoadMoreBtnWrapper" class="row align-items-center" style="min-height: 140px;">
                    <div class="col text-center">
                        <div id="listingLoadMoreLoader" class="listing-load-more-loader">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>

                        <button id="listingLoadMore" type="button" class="btn btn-secondary btn-xs text-3 text-uppercase outline-none custom-padding-1">Load More...</button>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col">
                        <h2 class="font-weight-normal mt-1 mb-0">Exclusive Locations</h2>
                    </div>
                </div>
                <div class="row pb-4 mb-4">
                    <div class="col-md-4 mt-3">
                        <div class="special-offer-item text-center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                <span class="special-offer-wrapper">
                                    <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-exclusive-location-1.jpg')}}" class="img-fluid" alt="">
                                    <span class="special-offer-infos text-color-light">
                                        <span class="special-offer-title font-weight-normal text-5 p-1 mb-2">
                                            Palm Beach
                                        </span>
                                        <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">11 Properties</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="special-offer-item text-center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                <span class="special-offer-wrapper">
                                    <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-exclusive-location-2.jpg')}}" class="img-fluid" alt="">
                                    <span class="special-offer-infos text-color-light">
                                        <span class="special-offer-title font-weight-normal text-5 p-1 mb-2">
                                            Fischer Island
                                        </span>
                                        <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">2 Properties</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="special-offer-item text-center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                <span class="special-offer-wrapper">
                                    <img src="{{asset('homepage/assets/img/demos/real-estate/listings/listing-exclusive-location-3.jpg')}}" class="img-fluid" alt="">
                                    <span class="special-offer-infos text-color-light">
                                        <span class="special-offer-title font-weight-normal text-5 p-1 mb-2">
                                            South Miami
                                        </span>
                                        <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">25 Properties</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-normal mb-4">
                                Special offers
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="special-offer-item text-center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/offers/special-offer-1.jpg')}}" class="img-fluid" alt="">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-description font-weight-light text-5">
                                                Amazing Houses <br>Collection
                                            </span>
                                            <span class="special-offer-title font-weight-bold text-uppercase text-3 pb-5 mb-3">
                                                from: $100,000
                                            </span>
                                            <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">view more</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="special-offer-item text-center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="{{asset('homepage/assets/img/demos/real-estate/offers/special-offer-2.jpg')}}" class="img-fluid" alt="">
                                        <span class="special-offer-infos text-color-light pt-4">
                                            <span class="special-offer-description font-weight-light text-5">
                                                Exclusive Comdominium
                                            </span>
                                            <span class="special-offer-title font-weight-bold text-uppercase text-3 mb-3">
                                                Miami Beach
                                            </span>
                                            <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">view more</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="agents text-color-light text-center">
                                <h4 class="text-light pt-4 m-0">Our Agents</h4>
                                <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                                    <div class="pr-2 pl-2">
                                        <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid rounded-circle" src="{{asset('homepage/assets/img/team/team-11.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">bruno@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="pr-2 pl-2">
                                        <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid rounded-circle" src="{{asset('homepage/assets/img/team/team-12.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Jeff doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">jeffdoe@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="pr-2 pl-2">
                                        <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid rounded-circle" src="{{asset('homepage/assets/img/team/team-13.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Jessica Doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">jessicadoe@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="newsletter box-shadow-custom p-4 text-center">
                                <i class="icon-envelope-letter icons"></i>
                                <h4 class="mt-1 mb-1">
                                    Newsletter
                                </h4>
                                <p>
                                    Subscribe and be the first to know about our best offers
                                </p>

                                <div class="alert alert-success d-none" id="newsletterSuccess">
                                    <strong>Success!</strong> You've been added to our email list.
                                </div>

                                <div class="alert alert-danger d-none" id="newsletterError"></div>

                                <form id="newsletterForm" class="text-black pt-2" action="php/newsletter-subscribe.php" method="POST">
                                    <input class="form-control" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
                                    <input class="form-control" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="text">
                                    <button class="btn btn-light btn-block text-uppercase background-color-secondary mt-4 text-light custom-padding-1" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection


@push('script_after')

@endpush

