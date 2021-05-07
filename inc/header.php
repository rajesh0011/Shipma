
<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/header.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="mobile_nav">
	        <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
	        </ul> -->
		        <ul class="navbar-nav navbar-light">
		            <li class="nav-item dropdown"><a class="nav-link" href="about-us.php">About Us</a></li>
		            <li class="nav-item dmenu dropdown">
		                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                Services <i class=""></i><span></a>
		                <div class="dropdown-menu sm-menu border-top" aria-labelledby="navbarDropdown">
		                    <a class="dropdown-item" href="parcel.php"> Parcel</a>
		                    <a class="dropdown-item" href="part-load.php"> Part Load</a>
		                    <a class="dropdown-item" href="full-load.php"> Full Load</a>
		                    <a class="dropdown-item" href="on-demand.php"> On Demand</a>
		                    <a class="dropdown-item" href="warehousing-and-storage.php"> Warehousing & Storage</a>
		                    <a class="dropdown-item" href="bike-transport.php"> Bike Transport</a>
		                    <a class="dropdown-item" href="car-transport.php"> Car Transport</a>
		                    <a class="dropdown-item" href="house-shifting.php">Domestic House Shifting</a>
		                    <a class="dropdown-item" href="office-shifting.php"> Office Shifting</a>
		                    <a class="dropdown-item" href="international-moving.php"> International Moving</a>
		                </div>
		            </li>
		            <li class="nav-item dropdown"><a class="nav-link" href="tracking.php">Tracking</a></li>
		            <li class="nav-item dropdown"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
		            <li class="nav-item dropdown"><a class="nav-link" href="terms-and-condithions.php">T&C</a></li>
		            <li class="nav-item dropdown mt-4"><a class="call-btn" href="#">Login</a></li>
		   
		        </ul>
	        
        </div>
    </div>
</nav>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



