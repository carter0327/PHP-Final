
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>PHP Final</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">

  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>

<?php include ('nav.php');?>
    <!-- End Navigation -->
  
    </div>
  </div>


  <!-- First Band (Image) -->
 
  <div class="row">
    <div class="large-12 columns">
      <img src="img/miami_project.png">
 
      <hr>
    </div>
  </div>
  <!-- Second Band (Image Left with Text) -->
 
  <div class="row">
    <div class="large-4 columns">
      
	  <img src="img/miami_logo.png">
    </div>
    <div class="large-8 columns">
      <h4>This is a content section.</h4>
      <div class="row">
        <div class="large-6 columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
        </div>
        <div class="large-6 columns">
          <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
        </div>
      </div>
    </div>
  </div>
 
 
  <!-- Third Band (Image Right with Text) -->
 
  <div class="row">
    <div class="large-8 columns">
      <h4>This is a content section.</h4>
 
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 
      <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
 
    </div>
    <div class="large-4 columns">
      <img src="img/miami3.png">
    </div>
  </div>
 
 
  <!-- Footer -->
 
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<!-- Included JS Files -->
  <!-- Included JS Files (Uncompressed) -->

  <script src="js/vendor/zepto.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <!-- Application Javascript, safe to override -->

  <script src="js/foundation/index.js"></script>
  <script>
    $(document).foundation().foundation('joyride', 'start');
  </script>
  <script>
  (function($) {
    
  var allPanels = $('.accordion > dd').hide();
    
  $('.accordion > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
  });

})(jQuery);
   </script>
</body>
</html>
