<!--FOOTER-->
<footer class="footer">
    <div class="top_header">
    <section>
    <span><i class="fa fa-map-marker"></i></span>
    <span>Street, full address, state/province, country, pincode</span>
    </section>
    <section>
    <span><i class="fa fa-phone"></i></span>
    <span>(00) 0000 0000</span>
    </section>
    <section>
    <span><i class="fa fa-envelope"></i></span>
    <span>info@websitename.com</span>
    </section>
    </div>
    <span class="border-shape"></span>
    <div class="bottom_content">
    <section>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-telegram"></i></a>
    </section>
    <section>
    <a href="#">Home</a>
    <a href="#">About us</a>
    <a href="#">Order</a>
    <a href="#">Retail</a>
    <a href="#">Member</a>
    <a href="#">Contact Us</a>
    </section>
    </div>
    <div class="copyright">
    Copyright © 2021 websitename - All rights reserved
    </div>
    </footer>
    <script src="script.js"></script>
    <script>(function($) { // Begin jQuery
      $(function() { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function(e) {
          $(this).siblings('.nav-dropdown').toggle();
          // Close one dropdown when selecting another
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function() {
          $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function() {
          $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function() {
          this.classList.toggle('active');
        });
      }); // end DOM ready
    })(jQuery); // end jQuery</script>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
