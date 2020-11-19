<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 

<!-- Mobile Menu JS --> 
<script src="{{asset('js/jquery.slicknav.js')}}"></script> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>

<!-- Custom JS  --> 
<script src="js/custom.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
 <script src="{{asset('js/all.js')}}"></script>
 <script>
              new WOW().init();
</script>
<script>
              AOS.init();
</script>
<script>
$(document).ready(function() {
  $(".gallery a").fancybox();
});
</script>
<script>
  // define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  // navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
</script>
<script>
   function setCountry(code){
        if(code || code==''){
            var text = jQuery('a[cunt_code="'+code+'"]').html();
            $(".dropdown dt a span").html(text);
        }
    }
    $(document).ready(function() {
        $(".dropdown img.flag").addClass("flagvisibility");

        $(".dropdown dt a").click(function() {
            $(".dropdown dd ul").toggle();
        });

        $(".dropdown dd ul li a").click(function() {
            //console.log($(this).html())
            var text = $(this).html();
            $(".dropdown dt a span").html(text);
            $(".dropdown dd ul").hide();
            $("#result").html("Selected value is: " + getSelectedValue("country-select"));
        });

        function getSelectedValue(id) {
            //console.log(id,$("#" + id).find("dt a span.value").html())
            return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (! $clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });


        $("#flagSwitcher").click(function() {
            $(".dropdown img.flag").toggleClass("flagvisibility");
        });
    });
</script>
<script>
  $(document).ready(function () {

    // Mobile Navigation JS START

    $(".navigation-list ul").each(function () {
        var $this = $(this);
        $this.clone().attr("class", "mobile-nav-items").appendTo(".mobile-body");
    });

    $(".hamburger").on("click", function (e) {
        e.preventDefault();
        var body_element = $("body");

        if ((body_element).hasClass("mobile-view")) {
            body_element.removeClass("mobile-view");
        } else {
            body_element.addClass("mobile-view");
        }
    });

    $(".mobile-close").on("click", function (e) {
        e.preventDefault();
        var body_element = $("body");

        if ((body_element).hasClass("mobile-view")) {
            body_element.removeClass("mobile-view");
        }
    });

    $(document).mouseup(function (e) {
        var container = $(".mobile-nav");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($("body").hasClass("mobile-view")) {
                $("body").removeClass("mobile-view");
            }
        }
    });

    $(window).resize(function () {
        var $this = $(this),
            win_width = $this.width();

        if (win_width > 990) {
            if ($("body").hasClass("mobile-view")) {
                $("body").removeClass("mobile-view");
            }
        }
    });

    // Mobile Navigation JS END


    // WOW JS

    new WOW().init();

});
</script>


  <!-- Notification JS Below  -->

  <script src="{{ asset('/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>

  <script>

       $(document).ready(function () {

             @if(\Session::has('message')) 
                  $.toast({
                      heading: 'Success!',
                      position: 'bottom-right',
                      text:  '{{session()->get('message')}}',
                      loaderBg: '#ff6849',
                      icon: 'success',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif
              
              
              @if(\Session::has('flash_message')) 
                  $.toast({
                      heading: 'Error!',
                      position: 'bottom-right',
                      text:  '{{session()->get('flash_message')}}',
                      loaderBg: '#ff6849',
                      icon: 'error',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif

              
          })
      
  </script>
