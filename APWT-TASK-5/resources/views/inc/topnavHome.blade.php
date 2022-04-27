


<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light" style="background-color: orange">
 <div class="container">
 	 <a class="navbar-brand" href="/">TBC</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a style=" color: black; font-size:20px; text-decoration: none" class="fa" class="nav-link" href="{{route('productlist')}}"> Product</a></li>
	</ul>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav ms-auto">
        
		<li class="nav-item"><a style=" color: black; font-size:20px; text-decoration: none" class="fa" class="nav-link" href="{{route('product.mycart')}}"> &#xf07a;</a></li>
        &nbsp
        &nbsp
        <li class="nav-item"><a style=" color: black; font-size:20px; text-decoration: none" class="fa" class="nav-link" href="{{route('login')}}">&#xf090; login</a></li>
	</ul>
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