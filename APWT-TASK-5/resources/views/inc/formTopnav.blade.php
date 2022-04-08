


<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light" style="background-color: orange">
 <div class="container">
 	 <a class="navbar-brand" href="/">TBC</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        navbar_width = document.querySelector('.navbar').offsetWidth;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
         document.body.style.paddingTop = '0';
      } 
  });
});
</script>