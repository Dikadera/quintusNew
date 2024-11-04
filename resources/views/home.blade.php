@extends('layout.app')

@section('content')



<!-- STARTING PRIMARY / PAGE FIRST CONTENT -->
<div class="mt_site_slider mt_margin_left_15">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slider1_background.jpg" alt="" class="mt_about_images" />
                <div class="carousel-caption  flex">
                    <div class="carousel-caption-inner align-center">
                        <h3>Quintus Construction Chemicals</h3>
                        <p> Our specialized chemical products used in the construction industry to enhance the performance, durability, and safety of building materials and structures. These chemicals include a wide range of products such as adhesives, sealants, coatings, concrete additives, and curing compounds.</p>
                        <!-- <button class="mt_button_first_section mt_fond_bold dark_title mt_transition_buttons">PRODUCTS</button> -->
                        <button style="  color: white; font-size: 16px;  cursor: pointer" class="mt_button_bottom_contact mt_transition_buttons mt_contact_button_align"  onclick="window.location.href='/products'">PRODUCTS</button>
                    </div>
                </div>
            </div>
<style>
    /* Mobile Styles for Hero Section */
@media (max-width: 767px) { /* For mobile screens */
    .mt_site_slider {
        height: 100vh; /* Set a full height for the hero section */
        
    }

    .carousel-inner > .item > img {
        width: 100%; /* Ensure the image fills the width */
        height: auto; /* Maintain aspect ratio */
        min-height: 400px; /* Set a minimum height to keep it visually appealing */
    }

    .carousel-caption {
        bottom: 20%; /* Position caption higher to fit in the view */
        padding: 10px; /* Add some padding */
        text-align: center; /* Center the caption text */
    }

    .carousel-caption h3 {
        font-size: 1.5em; /* Make heading size appropriate for mobile */
        margin-bottom: 10px; /* Add space below the heading */
    }

    .carousel-caption p {
        font-size: 0.9em; /* Adjust paragraph text size */
        line-height: 1.4; /* Improve readability with line height */
        margin-bottom: 15px; /* Add space below the paragraph */
    }

    .mt_button_bottom_contact {
        font-size: 14px; /* Adjust button text size */
        padding: 10px 20px; /* Adequate padding for touch targets */
        border-radius: 5px; /* Optional: add slight rounding to the button */
    }
}
</style>
            <!-- <div class="item">
                <img src="images/Slide3_Bg-1.jpg" alt="" class="mt_about_images" />
                <div class="carousel-caption flex">
                    <div class="carousel-caption-inner align-center">
                        <h3>Los Angeles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> incididunt ut labore et dolore magna aliqua.</p>
                        <button class="mt_button_first_section mt_fond_bold mt_transition_buttons">OUR SERVICES</button>
                    </div>
                </div>
            </div>

            <div class="item mt_white_style">
                <img src="images/slider3_background.jpg" alt="" class="mt_about_images" />
                <div class="carousel-caption flex">
                    <div class="carousel-caption-inner align-center">
                        <h3>Los Angeles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> incididunt ut labore et dolore magna aliqua.</p>
                        <button class="mt_button_first_section mt_fond_bold mt_transition_buttons">OUR SERVICES</button>
                    </div>
                </div>
            </div>
        </div>

         Left and right controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left my_white_color"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right my_white_color"></span>
        </a> -->
    </div>
</div>





<!-- STARTING PRIMARY / PAGE CONTENT -->
<div id="primary" class="no-padding content-area no-sidebar">
    <main id="main" class="col-md-12 site-main main-content">

        <!-- SECTION: OUR SERVICES FIRST -->
        <div class="clearfix"></div>
        <div class="row high-padding section-coloredbg-semitransparent">
            <div class="container mt_padding_top_15">
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_nasa-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">SPACE INDUSTRY</h4>
                    <p class="light-paragraph">This includes spacecraft, satellite, and launch vehicle operations, plus services like satellite communications and space tourism.</p>
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_depository-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">STORAGE FACTORY</h4>
                    <p class="light-paragraph">Designed for efficient management and storage of goods, these facilities optimize space and streamline operations, crucial for supply chain logistics.</p>
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_extracting-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">EXTRACTIVE INDUSTRY</h4>
                    <p class="light-paragraph">Extracts natural resources like minerals, oil, and gas, supplying industries and driving economic growth, while raising environmental concerns.</p>
                </div>
            </div>
        </div>


        <!-- SECTION: ABOUT -->
        <div class="clearfix"></div>
        <div class="row section-light section-about flex ">
            <div class="container col-sm-12 col-md-12 col-sm-6 col-md-6 align-center">
                <div class="row mt_align_text_about_quintus">
                    <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2 block-about">
                        <h1 class="custom_heading text-left dark-heading mt_fond_bold">ABOUT QUINTUS</h1>
                        <p class="dark-paragraph">At Quintus, we specialize in producing high-quality construction chemicals that enhance the durability and performance of building materials.</p>
                        <p>With a commitment to innovation and sustainability, our products are designed to meet the diverse needs of the construction industry. Our experienced team is dedicated to delivering reliable solutions that support safe and efficient construction practices, ensuring that every project is built to last</p>

                        <div class="mt_spacer mt_spacer_15"></div>
                        <a href="#" class="btn btn-info mt-btn-custom mt_button mt_transition_buttons" role="button">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-sm-6 col-md-6 mt_padding_left mt_left_15">
                <div class="row mt_full_size mt_pic_1">
                    <img class="size-full aligncenter mt_about_images mt_full_size mt_margin_left_15" src="images/quintus_pic1.jpg" width="1920" height="1024" alt="" />
                </div>
            </div>
        </div>


        <!-- SECTION: SKILLS PROGRESS BARS -->
        <div class="clearfix"></div>
        <div class="row background_orange">
            <div class="row flex mt_no_mobile_flex">
                <div class="post-deflextails col-md-6 mt_padding_right_0 mt_left_15">
                    <div class="row mt_full_size">
                        <img class="aligncenter size-full mt_about_images mt_full_size mt_test mt_margin_left_15" src="images/quintus_pic2.jpg" width="1920" height="1024" alt="" />
                    </div>
                </div>
                <div class="col-md-6 align-center">
                    <div class="post-details col-md-9 padding_bar mt_padder_left_80">
                        <h3 class="custom_heading text-left light-heading no-margin-top">CERTIFIED RESOURCES</h3>
                        <div class="progress">
                            <div class="progress-bar mt_width_70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                        <h3 class="custom_heading text-left light-heading ">SATISFIED CLIENTS</h3>
                        <div class="progress">
                            <div class="progress-bar mt_width_95 " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">95% Complete</span>
                            </div>
                        </div>

                        <h3 class="custom_heading text-left light-heading">PROFIT GROWTH PER YEAR</h3>
                        <div class="progress">
                            <div class="progress-bar mt_width_85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">85% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION: OUR BLOG -->
        <div class="clearfix"></div>
        <div class="row section-light high-padding">
            <div class="container">
                <!-- BLOCK: TITLE/SUBTITLE -->
                <div class="title-subtile-holder">
                    <h1 class="section-title dark_title"><b>BLOG POSTS</b></h1>
                    <!-- <div class="section-border dark_border"></div> -->
                    <div class="section-subtitle dark_subtitle"><b>INDUSTRIAL NEWS</b></div>
                </div>
                <!-- BLOCK: BLOG POSTS -->
                <div class="blog-posts wow fadeInUp">
                    <article class="single-post list-view">
                        <div class="blog_custom">
                            <div class="post-details col-md-6">
                                <h3 class="post-name row">
                                    <a href="#" title="Article Page">New Wellhead Design Speeds Up Operations</a>
                                </h3>
                                <div class="post-category-comment-date row">
                                    <div class="post-date">
                                        <a href="#">
                                            <span class="blog_date blog_day">18</span>
                                            <span class="blog_date blog_month">Feb</span>
                                        </a>
                                    </div>
                                    <span class="post-tags">
                                        <i class="icon-tag"></i>
                                        <a href="#" rel="tag">Industrial</a>
                                    </span>
                                    <span class="post-author">
                                        <i class="icon-user icons"></i>
                                        <a href="#">James Colies</a>
                                    </span>
                                </div>
                                <div class="post-excerpt row">
                                    <p>With a commitment to innovation and sustainability, our products are designed to meet the diverse needs of the construction industry.</p>
                                    <a class="more-link" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 post-thumbnail">
                                <a class="relative mt_full_size" href="#">
                                    <img class="blog_post_image mt_full_size" src="images/blog_post-1.jpg" alt="Post Image" />
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="single-post list-view">
                        <div class="blog_custom">
                            <div class="post-details col-md-6">
                                <h3 class="post-name row ">
                                    <a href="#" title="Article Page">Corrosion—The Longest War</a>
                                </h3>
                                <div class="post-category-comment-date row">
                                    <div class="post-date">
                                        <a href="#">
                                            <span class="blog_date blog_day">18</span>
                                            <span class="blog_date blog_month">Feb</span>
                                        </a>
                                    </div>
                                    <span class="post-tags">
                                        <i class="icon-tag"></i>
                                        <a href="#" rel="tag">Industrial</a>
                                    </span>
                                    <span class="post-author">
                                        <i class="icon-user icons"></i>
                                        <a href="#">James Colies</a>
                                    </span>
                                </div>
                                <div class="post-excerpt row">
                                    <p>The design, manufacturing, and operation of spacecraft, satellites, and launch vehicles, as well as services such as satellite communications, Earth observation, and space tourism</p>
                                    <a class="more-link" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 post-thumbnail">
                                <a class="relative mt_full_size" href="#">
                                    <img class="blog_post_image mt_full_size" src="images/blog_post-2.jpg" alt="Post Image" />
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- asfd -->
        <!-- SECTION: PRICING TABLES -->
        <div class="clearfix"></div>
        <section id="parallax_pricing" class="parallax">
            <div class="row high-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing-section wow bounce">
                                <div class="pricing pricing--pema">
                                    <div class="pricing__item pricing__item--nofeatured">
                                        <h3 class="pricing__title">Starter Package</h3>
                                        <p class="pricing__sentence">Start Deal</p>
                                        <div class="pricing__price mt_font_size_50">
                                            <span class="pricing__currency">$</span><span>450</span>
                                            <span class="pricing__period">/ month</span>
                                        </div>
                                        <ul class="pricing__feature-list">
                                            <li class="pricing__feature">
                                                <i class="icon-bubble icons"></i>Machine installation
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-support icons"></i>Control systems
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-pie-chart icons"></i>Maintence
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-bulb icons"></i>Insurance
                                            </li>
                                        </ul>
                                        <a class="pricing__action" href="#">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing-section wow bounce">
                                <div class="pricing pricing--pema">
                                    <div class="pricing__item pricing__item--nofeatured">
                                        <h3 class="pricing__title">PRO Package</h3>
                                        <p class="pricing__sentence">Best Deal</p>
                                        <div class="pricing__price mt_font_size_52">
                                            <span class="pricing__currency">$</span>950
                                            <span class="pricing__period">/ month</span>
                                        </div>
                                        <ul class="pricing__feature-list">
                                            <li class="pricing__feature">
                                                <i class="icon-bubble icons"></i>Machine &amp; cable installation
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-support icons"></i>Control &amp; testing systems
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-pie-chart icons"></i>Maintence
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-bulb icons"></i>Insurance
                                            </li>
                                        </ul>
                                        <a class="pricing__action" href="#">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing-section wow bounce">
                                <div class="pricing pricing--pema">
                                    <div class="pricing__item pricing__item--nofeatured">
                                        <h3 class="pricing__title">Business Package</h3>
                                        <p class="pricing__sentence">Business Package</p>
                                        <div class="pricing__price mt_font_size_52">
                                            <span class="pricing__currency">$</span>1,500
                                            <span class="pricing__period">/ month</span>
                                        </div>
                                        <ul class="pricing__feature-list">
                                            <li class="pricing__feature">
                                                <i class="icon-bubble icons"></i>Machine &amp; cable installation
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-support icons"></i>Control &amp; testing systems
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-pie-chart icons"></i>Maintence &amp; repairs
                                            </li>
                                            <li class="pricing__feature">
                                                <i class="icon-bulb icons"></i>Unlimited insurence
                                            </li>
                                        </ul>
                                        <a class="pricing__action" href="#">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: COMPLEX FEATURES -->
        <div class="clearfix"></div>
        <div class="row high-padding section-light">
            <div class="container">
                <div class="col-sm-12 col-md-12">
                    <!-- BLOCK: TITLE/SUBTITLE -->
                    <div class="title-subtile-holder">
                        <h1 class="section-title dark_title mt_fond_bold">FEATURE</h1>
                        <!-- <div class="section-border dark_border"></div> -->
                        <div class="section-subtitle dark_title mt_fond_bold">
                            <h4>FEATURE AND SKILLS</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <img class="aligncenter" width="100" src="images/industrial_car_service.png" alt="" />
                            <h3 class="section-title dark_title mt_fond_bold">Construction Industry</h3>
                            <p class="text-center dark-paragraph">These products are essential for various industries, including manufacturing, construction, and engineering. </p>
                            <div class="mt_spacer mt_spacer_30"></div>
                            <img class="aligncenter" width="100" src="images/industrial_port.png" alt="" />
                            <h3 class="custom_heading text-center dark-heading mt_fond_bold">Harbor Industry</h3>
                            <p class="text-center dark-paragraph">They encompass a wide range of items, such as machinery, tools, equipment, raw materials.</p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <img class="aligncenter" src="images/mt_quintus_image1.png" alt="" width="413" />
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img class="aligncenter" width="100" src="images/industrial_electricity.png" alt="" />
                            <h3 class="section-title dark_title mt_fond_bold">Electric Industry</h3>
                            <p class="text-center dark-paragraph">Safety in industrial operations, playing a crucial role in the supply chain and overall economic development.</p>

                            <div class="mt_spacer mt_spacer_30"></div>

                            <img class="aligncenter" width="100" src="images/industrial_chimic.png" alt="" />
                            <h3 class="custom_heading text-center dark-heading mt_fond_bold">Chemical Industry</h3>
                            <p class="text-center dark-paragraph">The rise of private companies in the space sector, focusing on activities like space tourism, asteroid mining, and commercial satellite services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION: OUR SERVICES -->
        <div class="clearfix"></div>
        <div class="row high-padding section-blackbg-semitransparent">
            <div class="container">
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_factory-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">INDUSTRIAL AND FACTORY</h4>
                    <p class="light-paragraph"> Development and deployment of satellites for communication, navigation, weather monitoring, and scientific research. </p>
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_cargo-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">CHEMICAL INDUSTRY</h4>
                    <p class="light-paragraph">Companies that provide the infrastructure and technology to launch payloads into space, including rockets and spaceports.</p>
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_delivery-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">DISTRIBUTOR INDUSTRY</h4>
                    <p class="light-paragraph">Missions aimed at exploring celestial bodies, such as Mars, the Moon, and beyond, often conducted by government space agencies like NASA and ESA, as well as private companies.</p>
                </div>
            </div>
        </div>


        <!-- SECTION: CLIENTS -->
        <div class="clearfix"></div>
        <section id="parallax_clients" class="parallax_clients">
            <div class="row medium-padding section-coloredbg-semitransparent">
                <div class="container  post-details">
                    <div class="row">
                        <div class="wow fadeInUp mt_clients_slider clients_container_shortcode-4 owl-carousel owl-theme">
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_client4.png" alt="Client7" />
                                    </div>
                                </div>
                            </div>
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_client1.png" alt="Client8" />
                                    </div>
                                </div>
                            </div>
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_client3.png" alt="Client6" />
                                    </div>
                                </div>
                            </div>
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_client4.png" alt="Client5" />
                                    </div>
                                </div>
                            </div>
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_clients.png" alt="Client4" />
                                    </div>
                                </div>
                            </div>
                            <div class="clients_image_holder post">
                                <div class="item col-md-12">
                                    <div class="clients_image_holder_inside post">
                                        <img class="client_image" src="images/mt_eagle_client1.png" alt="Client3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: TESTIMONIALS -->
        <div class="clearfix"></div>
        <div class="row section-light high-padding">
            <div class="container">
                <!-- BLOCK: TITLE/SUBTITLE -->
                <div class="title-subtile-holder">
                    <h1 class="section-title dark_title mt_fond_bold">TESTIMONIALS</h1>
                    <!-- <div class="section-border dark_border"></div> -->
                    <div class="section-subtitle dark_title">
                        <h4>TESTIMONIALS ARE ENOUGH TO CONVINCE PEOPLE FOR NOW</h4>
                    </div>
                </div>
                <!-- BLOCK: TESTIMONIALS -->
                <div class="testimonials02-container wow fadeInUp testimonials_all_holder">
                    <div class="item flex col-md-12 relative">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 testimonial02-img-holder">
                                <div class="row data-vc-full-width">
                                    <img class="testimonial02-img" src="images/mt_quintus_member2.png" alt="Mark Binneton">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 testimonial02-text-holder">
                                <div class="testimonial02-content">
                                    <div class="testimonial02_text">
                                        <div class="testimonial02_text_content">
                                            <p>We’ve partnered with Quintus for years, and their reliability is what keeps us coming back. Their customer service is exceptional, and they truly understand the needs of the construction industry</p>
                                        </div>
                                        <h4 class="testimonial02_title">Jules Rackon</h4>
                                        <h4 class="testimonial02_position">ARCHITECT</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item flex col-md-12 relative">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 testimonial02-img-holder">
                                <div class="row">
                                    <img class="testimonial02-img" src="images/mt_quintus_member3.png" alt="Mark Binneton">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 testimonial02-text-holder">
                                <div class="testimonial02-content">
                                    <div class="testimonial02_text">
                                        <div class="testimonial02_text_content">
                                            <p>The quality of Quintus's chemicals is unmatched. We’ve conducted extensive testing, and their products consistently perform well under various conditions. Highly recommend</p>
                                        </div>
                                        <h4 class="testimonial02_title">Mark Binneton</h4>
                                        <h4 class="testimonial02_position">WELDER</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item flex col-md-12 relative">
                        <div class="row size-full">
                            <div class="col-sm-3 col-o col-md-3 testimonial02-img-holder">
                                <div class="row">
                                    <img class="testimonial02-img" src="images/mt_quintus_member4.png" alt="Mark Binneton">
                                </div>
                            </div>
                            <div class="col-sm-9 col-md-9 testimonial02-text-holder">
                                <div class="testimonial02-content">
                                    <div class="testimonial02_text">
                                        <div class="testimonial02_text_content">
                                            <p>I trust Quintus for all my construction chemical needs. Their products are easy to work with and deliver consistent results. Plus, their commitment to sustainability aligns perfectly with our values.</p>
                                        </div>
                                        <h4 class="testimonial02_title">John Christian</h4>
                                        <h4 class="testimonial02_position">CEO</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION: CONTACT -->
        <div class="clearfix"></div>
        <section id="parallax_contact" class="parallax_contact_effect">
            <div class="row high-padding section-coloredbg-semitransparent_gray">
                <div class="container">
                    <div class="row mt_align_contact_area">
                        <div class="col-sm-12 col-md-12">
                            <div class="column-inner">

                                <!-- BLOCK: TITLE/SUBTITLE -->
                                <div class="title-subtile-holder">
                                    <h1 class="section-title light_title mt_fond_bold">CONTACT</h1>
                                    <!-- <div class="section-border dark_border"></div> -->
                                    <div class="section-subtitle light_subtitle mt_fond_bold">YOU KNOW YOU CAN ASK US EVERYTHING</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- CONTACT DETAILS / ABOVE CONTACT FORM -->
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <h4 class="custom_heading text-center light-heading mt_fond_bold">ADDRESS</h4>
                            <p class="text-center light-paragraph"> lot 1 -4, wisma satok, 221, Jalan Satok, Kampung Bandarshah, 93400 Kuching Sarawak, Malaysia</p>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <h4 class="custom_heading text-center light-heading mt_fond_bold">PHONE</h4>
                            <p class="text-center light-paragraph">+60(18)776-85-36</p>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <h4 class="custom_heading text-center light-heading mt_fond_bold">EMAIL</h4>
                            <p class="text-center light-paragraph"><a href="info@quintus.com">aishachemicals@gmail.com</a></p>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <h4 class="custom_heading text-center light-heading mt_fond_bold">SOCIAL</h4>
                            <div class="sidebar-social-networks social-networks widget_social_icons row" data-animate="pulse">
                                <ul class="col-md-12 text-center">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="" class="container wow fadeInUp animated mt_contact_animated" id="contact01_form" novalidate="novalidate">
                    <div class="content mt_margin_left_30_negativ mt_margin_right_0 mt_contact_align_center row">
                        <div class="col-md-6 first_set_inputs">
                            <div class="first_name_input">
                                <span class="input input--kohana">
                                    <label for="input-4" class="input__label input__label--kohana">
                                        <i class="fa fa-user icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana light-paragraph">First Name</span>
                                    </label>
                                    <input autocomplete="off" type="text" id="user_first_name" class="input__field textarea__field input__field--kohana textarea__field--kohana focus-me" name="user_first_name">
                                </span>
                            </div>
                            <div class="last_name_input">
                                <span class="input input--kohana">
                                    <label for="input-8" class="input__label input__label--kohana">
                                        <i class="fa fa fa-user icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana light-paragraph">Last Name</span>
                                    </label>
                                    <input autocomplete="off" type="text" id="user_last_name" class="input__field textarea__field input__field--kohana textarea__field--kohana focus-me" name="user_last_name">
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 first_set_inputs">
                            <div class="email_input">
                                <span class="input input--kohana">
                                    <label for="input-5" class="input__label input__label--kohana">
                                        <i class="fa fa-envelope icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana light-paragraph">Email Address</span>
                                    </label>
                                    <input autocomplete="off" type="email" id="user_email" class="input__field textarea__field input__field--kohana textarea__field--kohana focus-me" name="user_email">
                                </span>
                            </div>
                            <div class="subject_input">
                                <span class="input input--kohana">
                                    <label for="input-6" class="input__label input__label--kohana">
                                        <i class="fa fa-pencil-square-o icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana light-paragraph">Subject</span>
                                    </label>
                                    <input autocomplete="off" type="text" id="user_subject" class="input__field textarea__field input__field--kohana textarea__field--kohana focus-me" name="user_subject">
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 second_set_inputs">
                            <div class="message_input">
                                <span class="input input--kohana">
                                    <label for="input-7" class="input__label textarea__label input__label--kohana textarea__label--kohana">
                                        <i class="fa fa-comments icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana light-paragraph">
                                            Message</span>
                                    </label>
                                    <input autocomplete="off" type="text" id="user_message" class="input__field textarea__field input__field--kohana textarea__field--kohana focus-me" name="user_message">
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 contact_button text-center">
                            <button name="contact_me" type="submit" class="mt_button_bottom_contact mt_transition_buttons mt_contact_button_align">Contact us</button>

                            <p class="success_message">Thank you! We will get back to you as soon as possible!</p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>

<a href="https://wa.me/+60187768536" class="whatsapp-button" target="_blank">
    <img src="images/whatsapp.png" alt="WhatsApp" />
</a>

<style>
    /* CSS goes here */
</style>

<!-- FOOTER -->

@endsection
