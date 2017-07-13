<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voyager - The Missing Laravel Admin</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">    
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--[if IE 9]>
      <link href="css/ie9.css" rel="stylesheet">
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Homepage loading animation -->
    <div id="loader-wrapper">
      <img src="images/helm.png">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <!-- Hero -->
    <div class="hero" id="home">
      <div id="bgdim"></div>
      <!-- Navigation -->
      <?php include('partials/nav.php'); ?>

      <!-- Hero content -->
      <div class="container">
          <div class="row blurb">
            <div class="col-md-10 col-md-offset-1">
              <h1>The Missing Laravel Admin</h1>
            </div>
            <div class="col-md-8 col-md-offset-2">
              <p>Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations,<br> a media manager, menu builder, and much more.</p>
              <a type="button" class="btn btn-default" href="https://github.com/the-control-group/voyager" target="_blank">View on Github</a> 
              <a type="button" class="btn btn-primary" href="docs/" target="_blank">Documentation</a>
            </div>
          </div>
          <div class="row preview">
            <div class="col-md-10 col-md-offset-1">
              <img src="images/hero-app.jpg" alt="Voyager Admin Package" class="img-responsive animated slideInUp">
            </div>
          </div>
      </div>
    </div>
    <!-- Content -->
    <div class="container" id="features">
      <!-- Section -->
      <div class="section">
        <h2>Just a few of Voyagers Features</h2>
        <!-- Tabs  -->
        <div id="tabs">
          <ul>
            <li>
              <h3><a href="#tabs-1">
                <span>^</span>
                Media Manager
              </a></h3>
            </li>
            <li>
              <h3><a href="#tabs-2">
                <span>&#xe027;</span>
                Menu Builder
              </a></h3>
            </li>
            <li>
              <h3><a href="#tabs-3">
                <span>&#xe001;</span>
                Database Manager
              </a></h3>
            </li>
            <li>
              <h3><a href="#tabs-4">
                <span>&#xe025;</span>
                BREAD/CRUD Builder
              </a></h3>
            </li>
          </ul>

          <!-- Tab 1 -->
          <div class="indv-tab scrollme" id="tabs-1">
             <div class="col-md-6 img-preview animateme" data-when="enter" data-from="1" data-to="0.15" data-translatex="-400">
              <img src="images/mock.png" alt="Voyager Perspective Mockup">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-6">
                  <h4 class="left">Fully Functional Media Manager</h4>
                  <p>Voyager has an amazing fully functional media manager which allows you to view/edit/delete files from your storage. All files in your application will be easily accessible and will live in a single place. Compatible with local or s3 file storage.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Tab 2 -->
          <div class="indv-tab scrollme" id="tabs-2">
             <div class="col-md-6 img-preview animateme" data-when="enter" data-from="1" data-to="0.15" data-translatex="-400">
              <img src="images/mock2.png" alt="Voyager page">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-6">
                  <h4 class="left">Menu Builder</h4>
                  <p>You can easily build as many menus for your site. In fact the menu in the voyager admin is built using the menu builder. You can add/edit/delete menu items from as many menus as you would like. Then it's super easy to display your menu on the front-end of your app <code>Menu::display('main')</code></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Tab 3 -->
          <div class="indv-tab scrollme" id="tabs-3">
             <div class="col-md-6 img-preview animateme" data-when="enter" data-from="1" data-to="0.15" data-translatex="-400">
              <img src="images/mock3.png" alt="Voyager page">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-6">
                  <h4 class="left">Database Manager</h4>
                  <p>That's right! You can actually manipulate your database directly from Voyager. You can add, edit, or delete tables. When creating a new table you can also specify if you would like voyager to create your Model for you... How cool is that.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Tab 4 -->
          <div class="indv-tab scrollme" id="tabs-4">
             <div class="col-md-6 img-preview animateme" data-when="enter" data-from="1" data-to="0.15" data-translatex="-400">
              <img src="images/mock4.png" alt="Voyager page">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-6">
                  <h4 class="left">BREAD/CRUD Builder</h4>
                  <p>Similar to CRUD, Voyager has a system called BREAD which is Browse, Read, Edit, Add, and Delete. You can easily add any BREAD views and functionality to any table in your database. Have a products table, easily add the Browse Read Edit Add & Delete functionality in seconds!</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Section -->
      <div class="section" id="demo" style="margin-top:0px;">
        <h2>See it in action</h2>
        <div class="row">
          <div class="col-md-10 col-md-push-1 scrollme">
            <p class="italic centered">Checkout this short video where you can get a quick glimpse of Voyager and how easy it is to install.</p>
            <a type="button" class="btn btn-primary centered" style="max-width:300px;" href="https://www.youtube.com/watch?v=RSAnupACbhg&list=PL_UnIDIwT95PEQFNdgXZGo5SYU5V_TQvc" target="_blank">View On Youtube</a>
            <p class="centered margin-top no-margin-bottom animateme" data-when="enter" data-from="1" data-to="0.15" data-translatey="600"><iframe id="video" src="https://www.youtube.com/embed/RSAnupACbhg?list=PL_UnIDIwT95PEQFNdgXZGo5SYU5V_TQvc" frameborder="0" allowfullscreen></iframe></p>
          </div>
        </div>
      </div>

    </div>


    <!-- Section -->
    <div class="grey">
      <div class="container">
        <div class="row">
          <!-- Icon block -->
          <div class="col-md-4 col-sm-6 icon scrollme animateme" data-when="enter" data-from=".7" data-to="0.15" data-opacity="0" data-scale="0" data-translatey="100">
            <span class="animateme" data-when="enter" data-from="1" data-to="0.15" data-rotatez="-90">c</span>
            <h5 class="no-underline">Add Custom Data Types</h5>
            <p>You can add custom Data Types to work with in your Laravel App.</p>
          </div>
          <!-- Icon block -->
          <div class="col-md-4 col-sm-6 icon scrollme animateme" data-when="enter" data-from=".7" data-to="0.15" data-opacity="0" data-scale="0" data-translatey="100">
            <span class="animateme" data-when="enter" data-from="1" data-to="0.15" data-rotatez="-90">&#xe005;</span>
            <h5 class="no-underline">Add Custom Settings</h5>
            <p>You can easily add custom settings in Voyager and use them on the front-end of your site.</p>
          </div>
          <!-- Icon block -->
          <div class="col-md-4 col-sm-6 icon scrollme animateme" data-when="enter" data-from=".7" data-to="0.15" data-opacity="0" data-scale="0" data-translatey="100">
            <span class="animateme" data-when="enter" data-from="1" data-to="0.15" data-rotatez="-90">&#xe013;</span>
            <h5 class="no-underline">Awesome Features</h5>
            <p>And just a whole bunch of awesome features you'll have to checkout for yourself!</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Section -->
    <div class="section footer no-margin-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-5 copyright">
            <p>&copy; Voyager 2017. All rights reserved.<br />
            <a href="https://www.thecontrolgroup.com/" title="Voyager Package Built by The Control Group">Voyager Package Built by The Control Group</a></p>
          </div>
          <!-- Social icons -->
          <div class="col-md-6 col-sm-7 social-icons">
            <ul>
              <li><a href="http://twitter.com/ControlGroup_SD" target="_blank" class="socicon">a</a></li>
              <li><a href="http://facebook.com/TheControlGroup" target="_blank" class="socicon">b</a></li>
              <li><a href="https://plus.google.com/+TheControlGroupSanDiego" target="_blank" class="socicon">c</a></li>
              <li><a href="https://www.linkedin.com/company/the-control-group-media-company-inc-" target="_blank" class="socicon">j</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/headhesive.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/scrollme.min.js"></script>
    <script src="/js/matchHeight.min.js"></script>
    <script src="/js/flickity.js"></script>
    <script src="/js/bootstrap-dropdown-on-hover.js"></script>
    <script src="/js/custom.js"></script>
    <script>
      $(document).on('click', '#menu-primary a.scroll', function(event){
          event.preventDefault();

          $('html, body').animate({
              scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
      });
    </script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-98460600-1', 'auto');
    ga('send', 'pageview');

    </script>

  </body>
</html>
