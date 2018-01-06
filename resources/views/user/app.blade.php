<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.layouts.header')
  </head>
  <body class="home blog">
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="index.html#content">Skip to content</a>
        @include('user.layouts.slider') 
        @include('user.layouts.nav')
      
        <!-- content -->
      
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div class="container">
              <div class="row">
       
                  <!-- article -->
                @include('user.layouts.posts')        
                @include('user.layouts.sidebar')        
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
    @include('user.layouts.footer')
  </body>
</html>