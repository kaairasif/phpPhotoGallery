
<div class="container  p_m_f">
     <div class="innerShapeBottom"></div>
</div>
<footer class="footer">  
   <div class="parabolic_container_footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="footerNav">
          <li><a href="terms.php" title="">TERMS &amp; CONDITIONS</a></li>
          <li><a href="privacy.php" title="">PRIVACY &amp; COOKIES</a></li>
          <li><a href="contact.php" title="">CONTACT US</a></li>
          <li><a href="blog.php" title="">BLOG</a></li>
          <li><a href="sitemap.php" title="">SITE MAP</a></li>                    
        </ul>       
      </div>
      <div class="col-md-12">
          <ul class="socilaNav">
            <li><span>FOLLOW US:</span></li>
            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title=""><i class="fa fa-youtube"></i></a></li>
          </ul> 
          <p class="copyright">&copy; BEXIMCO <?php echo date("Y", time()); ?></p>           
      </div>    
    </div>
  </div><!-- / END CONTAINER -->
   </div>
</footer><!-- / END FOOTER -->

<a id="top" class="visible-lg" href="#subheader">
  <i class="fa fa-arrow-circle-o-up"></i>
</a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>   
<script src="js/jquery.nav.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/jquery.mixitup.js"></script>

<script src="js/jquery.custom-file-input.js"></script>

<script type="text/javascript" src="js/slick.min.js"></script>


<!-- gallery filter -->
<script src="js/jquery.isotope.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- initial scripts -->
<script src="js/init.js"></script>

<script src="js/classie.js"></script>
<script>
      (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();
</script>

</body>
</html>


<?php if(isset($database)) { $database->close_connection(); } ?>