@extends('layout.app')

@section('content')


<a href="https://wa.me/+60146544724" class="whatsapp-button" target="_blank">
    <img src="images/whatsapp.png" alt="WhatsApp" />
</a>


<div class="row section-light post-details">
    <div class="container ">
        <div class="header-title-breadcrumb-overlay text-center no-padding mt_blog_align_fist_section">
            <div class="container mt_margin_bottom_0">
                <div class="row no-padding mt_margin_top_55">
                    <div class="col-md-7 text-left">
                        <h1>Products</h1>
                    </div>
                    <div class="col-md-5">
                        <ol class="breadcrumb text-right">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">Products
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <h2 class="blog_heading heading-bottom high-padding ">Cellulose</h2>
        <div class="row">
            <!-- <div class="container mt_blog_align_sticky_posts">
                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/carboxymethyl.webp" class="img-responsive" alt="carboxymethyl">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="">
                                <h4 class="post-name mt_stick_blog_title">Sodium carboxymethyl Cellulose CMC</h4>
                            </a>

                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, pH level: 6-8, Purity: 99%</a></div>
                            <div class="post-author">Recommended Use: <a href="#">For industrial applications</a></div>
                            <div class="post-author">Safety: <a href="#">Handle with care, wear protective gear</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/hydroxy.webp" class="img-responsive" alt="Hydroxyethyl cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Hydroxyethyl Cellulose HEC</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">30kg/bag, Viscosity: 1000-2000 mPa·s</a></div>
                            <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/poly.png" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Polyanionic Cellulose PAC</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">30kg/bag, Soluble in wate, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/propyl.webp" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Hydroxypropyl Methylcellulose</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/methyle.jpg" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Methyl Hydroxyethyl Cellulose</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <style>
                .img-responsive {
                    width: 100%;
                    /* Ensures images take full width of the container */
                    height: 200px;
                    /* Set a fixed height for uniformity */
                    object-fit: cover;
                    /* Ensures the image covers the area without distortion */
                }
            </style>
            <div class="container mt_blog_align_sticky_posts">
                <div class="row">
                    <div class="col-md-4 post mb-4"> <!-- Added mb-4 for margin-bottom -->
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/carboxymethyl.webp" class="img-responsive img-fluid" alt="carboxymethyl">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="">
                                    <h4 class="post-name mt_stick_blog_title">Sodium carboxymethyl Cellulose </h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, pH level: 6-8, Purity: 99%</a></div>
                                <div class="post-author">Recommended Use: <a href="#">For industrial applications</a></div>
                                <div class="post-author">Safety: <a href="#">Handle with care, wear protective gear</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/hydroxy.webp" class="img-responsive img-fluid" alt="Hydroxyethyl cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Hydroxyethyl Cellulose HEC</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">30kg/bag, Viscosity: 1000-2000 mPa·s</a></div>
                                <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/poly.png" class="img-responsive img-fluid" alt="Polyanionic Cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Polyanionic Cellulose PAC</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">30kg/bag, Soluble in water, 1000-2000 mPa·s </a></div>
                                <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/propyl.webp" class="img-responsive img-fluid" alt="Hydroxypropyl Methylcellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Hydroxypropyl Methylcellulose</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                                <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/methyle.jpg" class="img-responsive img-fluid" alt="Methyl Hydroxyethyl Cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Methyl Hydroxyethyl Cellulose</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                                <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <h2 class="blog_heading heading-bottom high-padding ">Construction Chemicals</h2>
        <div class="row">
            <!-- <div class="container mt_blog_align_sticky_posts">
                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/carboxymethyl.webp" class="img-responsive" alt="carboxymethyl">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="">
                                <h4 class="post-name mt_stick_blog_title">Sodium carboxymethyl Cellulose CMC</h4>
                            </a>

                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, pH level: 6-8, Purity: 99%</a></div>
                            <div class="post-author">Recommended Use: <a href="#">For industrial applications</a></div>
                            <div class="post-author">Safety: <a href="#">Handle with care, wear protective gear</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/hydroxy.webp" class="img-responsive" alt="Hydroxyethyl cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Hydroxyethyl Cellulose HEC</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">30kg/bag, Viscosity: 1000-2000 mPa·s</a></div>
                            <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/poly.png" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Polyanionic Cellulose PAC</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">30kg/bag, Soluble in wate, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/propyl.webp" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Hydroxypropyl Methylcellulose</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post">
                    <div class="sticky_post_text_container">
                        <a href="" class="relative">
                            <img src="images/methyle.jpg" class="img-responsive" alt="Polyaionic Cellulose">
                        </a>
                        <div class="sticky_post_blog_details">
                            <a href="#">
                                <h4 class="post-name mt_stick_blog_title">Methyl Hydroxyethyl Cellulose</h4>
                            </a>
                            <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                            <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in cold water, 1000-2000 mPa·s </a></div>
                            <div class="post-author">Recommended Use: <a href="#">For film-forming and thickening</a></div>
                            <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <style>
                .img-responsive {
                    width: 100%;
                    /* Ensures images take full width of the container */
                    height: 200px;
                    /* Set a fixed height for uniformity */
                    object-fit: cover;
                    /* Ensures the image covers the area without distortion */
                }
            </style>
            <div class="container mt_blog_align_sticky_posts">
                <div class="row">
                    <div class="col-md-4 post mb-4"> <!-- Added mb-4 for margin-bottom -->
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/gluconate.png" class="img-responsive img-fluid" alt="carboxymethyl">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="">
                                    <h4 class="post-name mt_stick_blog_title">Sodium Gluconate </h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, White to yellowish crystalline</a></div>
                                <div class="post-author">Recommended Use: <a href="#">set retarder in construction</a></div>
                                <div class="post-author">Safety: <a href="#">Generally recognized as safe (GRAS);</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/ligno.jpg" class="img-responsive img-fluid" alt="Hydroxyethyl cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Sodium Lignosulfonate</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, Viscosity: 1000-2000 mPa·s</a></div>
                                <div class="post-author">Recommended Use: <a href="#">Used as a dispersant, binder</a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/calcium.jpg" class="img-responsive img-fluid" alt="Polyanionic Cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Calcium Lignosulfonate</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">30kg/bag, Soluble in water, 1000-2000 mPa·s </a></div>
                                <div class="post-author">Recommended Use: <a href="#">For thickening and stabilizing </a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/superplastic.jpg" class="img-responsive img-fluid" alt="Hydroxypropyl Methylcellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Polycarboxylate superplasticizer</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">1000L, Light yellow to brown liquid</a></div>
                                <div class="post-author">Recommended Use: <a href="#">To improve the workability and fluidity of concrete</a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with skin</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 post mb-4">
                        <div class="sticky_post_text_container">
                            <a href="" class="relative">
                                <img src="images/sulfonate.webp" class="img-responsive img-fluid" alt="Methyl Hydroxyethyl Cellulose">
                            </a>
                            <div class="sticky_post_blog_details">
                                <a href="#">
                                    <h4 class="post-name mt_stick_blog_title">Sodium Naphthalene Sulfonate</h4>
                                </a>
                                <div class="post-author">Manufactured by: <a href="#">Quintus</a></div>
                                <div class="post-author">Specifications: <a href="#">25kg/bag, Soluble in water, 1000-2000 mPa·s </a></div>
                                <div class="post-author">Recommended Use: <a href="#">Used as a superplasticizer in concrete</a></div>
                                <div class="post-author">Safety: <a href="#"> Avoid inhalation and contact with eyes and skin</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="clearfix"></div>
        <!-- BLOCK: TITLE/SUBTITLE -->
        <div class="title-subtile-holder">
            <div class="row">
                <div class="container">
                    <h2 class="blog_heading heading-bottom high-padding">All Blog Posts </h2>
                </div>
            </div>
        </div>
        <!-- BLOCK: BLOG POSTS -->
        <div class="blog-posts wow">
            <!-- BLOG POSTS -->
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-1.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">New Wellhead Design Speeds Up Operations</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Understanding the cost of quality</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-17.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-22.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Making an Industrial Powerhouse Again </a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Engineering smart factories of the future</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-21.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-2.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Corrosion—The Longest War</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Movability Quicklook for Heavy Oils</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-3.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-4.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">4 Surprisingly Simple Ways to Cut Your Energy Costs Today </a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">When Opportunity Knocks</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-5.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-13.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Companies Search for Efficient, Economic Artificial Lift Solutions </a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Machinery automation: A double edged sword</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-6.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html">
                            <img class="blog_post_image" src="images/blog_post-7.jpg" alt="Post Image">
                        </a>
                    </div>
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Testing, Inspection, and Certification: A question of benchmarks </a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="single-post list-view">
                <div class="blog_custom">
                    <div class="post-details col-md-6">
                        <h3 class="post-name row">
                            <a href="https://modeltheme.com/html-templates/quintus/single.html" title="Article Page">Scope for sustainable technologies is huge</a>
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
                            <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                            <a class="more-link" href="https://modeltheme.com/html-templates/quintus/single.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 post-thumbnail">
                        <a class="relative" href="https://modeltheme.com/html-templates/quintus/single.html#">
                            <img class="blog_post_image" src="images/blog_post-8.jpg" alt="Post Image">
                        </a>
                    </div>
                </div>
                <div class="modeltheme-pagination-holder col-md-12 high-padding">
                    <div class="modeltheme-pagination pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="next page-numbers" href="#">»</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>


@endsection
