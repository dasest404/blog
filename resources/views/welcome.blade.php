<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/layouts/header')
  </head>
  <body class="home blog">
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="index.html#content">Skip to content</a>

      <!-- topbar featured slider -->
      <div class="topbar-slider">
        <div id="slider-thumbnail" class="owl-carousel owl-theme slider-thumbnail">
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-01.jpg')}}" alt="featured slider 01">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">Cook</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">Learn how to make nasi goreng seafood pedas</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-02.jpg')}}" alt="featured slider 02">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">appetizer</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">fruit salad made from Black Autumn Royal grapes</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-03.jpg')}}" alt="featured slider 03">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">Fruit</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">Red cherry is the raw material for making cake</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-04.jpg')}}" alt="featured slider 04">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">Food</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">Yummy dragon beef with delicious sauce</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-05.jpg')}}" alt="featured slider 05">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">Dessert</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">All you need is gelato, Yeey!</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
          <div class="item">
            <img src="{{ asset('user/img/astrif-featured-slider-06.jpg')}}" alt="featured slider 06">
            <div class="item-caption">
              <div class="caption-description">
                <a href="category.html" class="caption-cat-links">Dessert</a>
                <span class="caption-title">
                  <a href="single.html" class="caption-title-link">Sweet pancake fruity cream, favorite!</a>
                  <a href="single.html" class="button caption-more-link">Read More</a>
                </span><!-- .caption-title -->
              </div><!-- .caption-description -->
            </div><!-- .item-caption -->
          </div><!-- .item -->
        </div><!-- #slider-thumbnail -->
      </div><!-- .topbar-slider -->

      <!-- site branding -->
      <div class="site-branding">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <ul class="social-icon">
                <li><a href="" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="" class="icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="" class="icon-youtube"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div><!-- .col-md-3 -->

            <div class="col-md-6">
              <!-- <h1 class="site-title"><a href="index.html" rel="home">Astrif.</a></h1> -->
              <h1 class="site-title title-image"><a href="index.html" rel="home"><img src="{{ asset('user/img/astrif-logo.png')}}" alt="astrif."></a></h1>
              <p class="site-description">- Good Food Lovers -</p>
            </div><!-- .col-md-6 -->

            <div class="col-md-3">
              <form class="search-form">
                <div class="form-group">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control search-field" placeholder="Search...">
                </div><!-- .form-group -->
                <button type="submit" class="btn btn-default search-submit"><i class="fa fa-search"></i></button>
              </form><!-- .search-form -->
            </div><!-- .col-md-3 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .site-branding -->

      <!-- main navigation -->
      <div class="site-navigation-sticky-wrapper">
        <header id="masthead" class="site-header" role="banner">
          <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i><span class="sr-only">Primary Menu</span></button>
                  <div class="menu-container">
                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                      <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                      <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="index.html#">Features</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="single.html">Single Post</a></li>
                          <li class="menu-item"><a href="single-sidebar.html">Single Post With Sidebar</a></li>
                          <li class="menu-item"><a href="page-fullwidth.html">Page Full Width</a></li>
                          <li class="menu-item"><a href="page-sidebar.html">Page With Sidebar</a></li>
                          <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                          <li class="menu-item"><a href="typography.html">Typography</a></li>
                          <li class="menu-item"><a href="404.html">Not Found</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="category.html">Food</a></li>
                      <li class="menu-item"><a href="category.html">Cook</a></li>
                      <li class="menu-item"><a href="about.html">About Me</a></li>
                      <li class="menu-item"><a href="contact.html">Contact</a></li>
                    </ul>
                  </div><!-- .menu-container -->
                </div><!-- .col-md-12 -->
              </div><!-- .row -->
            </div><!-- .container -->
          </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
      </div><!-- .site-header-affix-wrapper -->

      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <!-- article -->
                <div class="col-md-8">
                  <div class="site-entry">
                    <article class="post first-post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-01.jpg')}}" alt="How to make mak-nyuss baked potatoes stick recipes from Deanda">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">How to make mak-nyuss baked potatoes stick recipes from Deanda</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-08-14">Aug 14, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Cook</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 172</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->
                        
                        <div class="entry-content">
                          <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine...
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">How to make mak-nyuss baked potatoes stick recipes from Deanda</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-02.jpg')}}" alt="Healthy Breakfast For Cute Girl">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">Healthy Breakfast For Cute Girl</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-10-26">Okt 26, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Food</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 15</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->
                        
                        <div class="entry-content">
                          <p class="text-center">Balancing a composition involves arranging both positive elements and negative space in such a way that no one area of the design overpowers other areas. Everything works together and fits together in a seamless whole...
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">Healthy Breakfast For Cute Girl</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-03.jpg') }}" alt="Just eat healthy food, for your better life">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">Just eat healthy food, for your better life</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-09-07">Sept 07, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Tips</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 42</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->

                        <div class="entry-content">
                          <p class="text-center">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows...
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">Just eat healthy food, for your better life</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-04.jpg')}}" alt="Best beef burger in this city, I had met">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">Best beef burger in this city, I had met</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-08-14">Aug 14, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">diary</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 5</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->

                        <div class="entry-content">
                          <p class="text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly...
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">Best beef burger in this city, I had met</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div>
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-05.jpg')}}" alt="7 sweet hat for hangout that you should know">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">All I need is puff pastry and choco ball</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-08-02">Aug 02, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Dessert</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 36</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->
                        
                        <div class="entry-content">
                          <p class="text-center">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder... 
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">All I need is puff pastry and choco ball</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-06.jpg')}}" alt="King donut never had a queen">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">King donut never had a queen. Love it!</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-03-11">March 11, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Dessert</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 36</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->
                        
                        <div class="entry-content">
                          <p class="text-center">He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment... 
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">King donut never had a queen</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <article class="post format-standard hentry">
                      <div class="entry-featured-image">
                        <img src="{{ asset('user/img/astrif-post-entry-07.jpg')}}" alt="Gelato in 'omah gelato' will punch you hard!">
                      </div><!-- .entry-featured-image -->

                      <div class="entry-area">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="single.html" rel="bookmark">Gelato in 'omah gelato' will punch you hard!</a></h2>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="single.html" rel="bookmark"> <time class="entry-date" datetime="2016-03-11">January 07, 2016</time> </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link"><a href="category.html">Dessert</a></span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 98</a></span>
                          </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->
                        
                        <div class="entry-content">
                          <p class="text-center">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls... 
                            <a href="single.html" class="more-link">
                              <span class="moretext">Read more</span> <span class="screen-reader-text">Gelato in 'omah gelato' will punch you hard!</span>
                            </a><!-- .more-link -->
                          </p>
                        </div><!-- .entry-content -->
                      </div><!-- .entry-area -->
                    </article><!-- .post -->

                    <nav class="navigation posts-navigation" role="navigation">
                      <h2 class="screen-reader-text">Posts navigation</h2>
                      <div class="nav-links">
                        <div class="nav-previous"><a href="index.html#">Older posts</a></div>
                        <div class="nav-next"><a href="index.html#">Newer posts</a></div>
                      </div>
                    </nav> <!-- .navigation -->
                  </div>
                </div><!-- .col-md-8 -->

                <!-- sidebar -->
                <div class="col-md-4">
                  <div class="site-sidebar">
                    <section class="widget widget_search">
                      <form class="search-form">
                        <div class="form-group">
                          <label for="search" class="sr-only">Search</label>
                          <input type="text" class="form-control search-field" placeholder="Search...">
                        </div><!-- .form-group -->
                        <button type="submit" class="btn btn-default search-submit"><i class="fa fa-search"></i></button>
                      </form><!-- .search-form -->
                    </section><!-- .widget_search -->

                    <section class="widget astrif_widget_about">
                      <h2 class="widget-title"><span>About</span></h2>
                      <div class="about-author-container">
                        <div class="author-avatar">
                          <img src="{{ asset('user/img/astrif-about.jpg')}}" alt="astrif fifth">
                        </div>
                        <div class="author-info">
                          <p>Hi, glad to know you were here. I'm Astrif, newbie food blogger. I like to go anywhere to hunting some food and share with other. About taste, benefit, and where you can findout a good place to eat.</p>
                        </div>
                        <div class="author-signature" style="background-image: url('assets/img/astrif-signature.png');"></div>
                      </div><!-- .about-author-container -->
                    </section><!-- .astrif_widget_about -->

                    <section class="widget astrif_widget_follow_me">
                      <h2 class="widget-title"><span>Follow me</span></h2>
                      <div class="follow-me">
                        <ul class="social-icon social-icon-color">
                          <li><a href="" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="" class="icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="" class="icon-youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div><!-- .follow-me -->
                    </section><!-- .astrif_widget_follow_me -->

                    <section class="widget astrif_widget_popular_entries">
                      <h2 class="widget-title"><span>Popular Posts</span></h2>
                      <ul>
                        <li>
                          <a href="single.html" class="popular-entry-thumbnail">
                            <img src="{{ asset('user/img/astrif-popular-01.jpg')}}" alt="10 Easy Breakfast that can try in home">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.html" rel="bookmark" class="popular-entry-title-link">10 Easy Breakfast that can try in home</a>
                            <span class="popular-entry-date">August 17, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.html" class="popular-entry-thumbnail">
                            <img src="{{ asset('user/img/astrif-popular-02.jpg')}}" alt="My Daily healthy food">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.html" rel="bookmark" class="popular-entry-title-link">My Daily healthy food</a>
                            <span class="popular-entry-date">July 23, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.html" class="popular-entry-thumbnail">
                            <img src="{{ asset('user/img/astrif-popular-03.jpg')}}" alt="Not drink a coke is good">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.html" rel="bookmark" class="popular-entry-title-link">Not drink a coke is better, i think</a>
                            <span class="popular-entry-date">May 8, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.html" class="popular-entry-thumbnail">
                            <img src="{{ asset('user/img/astrif-popular-04.jpg') }}" alt="This pancake as sweet as you">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.html" rel="bookmark" class="popular-entry-title-link">This pancake as sweet as you :')</a>
                            <span class="popular-entry-date">January 27, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.html" class="popular-entry-thumbnail">
                            <img src="{{ asset('user/img/astrif-popular-05.jpg')}}" alt="My daily drink in the morn">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.html" rel="bookmark" class="popular-entry-title-link">My daily drink in the morn</a>
                            <span class="popular-entry-date">March 11, 2015</span>
                          </span>
                        </li>
                      </ul>
                    </section><!-- .astrif_widget_popular_entries -->

                    <section class="widget widget_text">
                      <h2 class="widget-title"><span>Advertisement</span></h2>
                      <div class="textwidget">
                        <a href="index.html"><img src="{{asset('user/img/astrif-sidebar-banner.jpg')}}" alt="buy astrif now"></a>
                      </div>
                    </section><!-- .astrif_widget_text -->

                    <section class="widget widget_recent_entries">    
                      <h2 class="widget-title"><span>Recent Posts</span></h2>
                      <ul>
                        <li>
                          <a href="single.html">Best beef burger in this city, I had met</a>
                          <span class="post-date">August 14, 2016</span>
                        </li>
                        <li>
                          <a href="single.html">Fruit salad made from Black Autumn Royal grapes</a>
                          <span class="post-date">September 25, 2016</span>
                        </li>
                        <li>
                          <a href="single.html">How to make nasi goreng seafood pedas</a>
                          <span class="post-date">June 16, 2016</span>
                        </li>
                        <li>
                          <a href="single.html">All you need is gelato, yeey!</a>
                          <span class="post-date">May 8, 2016</span>
                        </li>
                        <li>
                          <a href="single.html">Healthy breakfast for cute girl</a>
                          <span class="post-date">April 27, 2016</span>
                        </li>
                      </ul>
                    </section><!-- .widget_recent_entries -->

                    <section class="widget widget_categories">
                      <h2 class="widget-title"><span>Categories</span></h2>
                      <ul>
                        <li><a href="category.html">Appetizer</a></li>
                        <li><a href="category.html">Cook</a></li>
                        <li><a href="category.html">Dessert</a></li>
                        <li><a href="category.html">Food</a></li>
                        <li><a href="category.html">Healthy</a></li>
                        <li><a href="category.html">Tips</a></li>
                      </ul>
                    </section><!-- .widget_categories -->

                    <section class="widget widget_tag_cloud">
                      <h2 class="widget-title"><span>Tags</span></h2>
                      <div class="tagcloud">
                        <a href="index.html#">food <span>52</span></a> <a href="index.html#">dessert <span>86</span></a>
                        <a href="index.html#">thoughts <span>13</span></a> <a href="index.html#">inspiring <span>7</span></a>
                        <a href="index.html#">tips <span>64</span></a> <a href="index.html#">cook <span>9</span></a> <a href="index.html#">healthy <span>29</span></a>
                      </div>
                    </section><!-- .widget_tag_cloud -->
                  </div><!-- .site-sidebar -->
                </div><!-- .col-md-4 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
    @include('user/layouts/footer')
  </body>
</html>