<!-- FOOTER
    ================================================== -->
    <footer class="bg-secondary pt-6 pt-lg-7">
        <div class="container pb-0">
            <div class="row mb-6 mt-n2-9">
                <div class="col-md-6 col-lg-5 mt-2-9">
                    <div class="pe-md-5">
                        <h3 class="h4 text-white mb-1-9">About Walksey Logistics</h3>
                        <p class="text-white mb-1-6">We deliver freight and last-mile services with precision, transparency, and real-time visibility.</p>
                        <ul class="social-icon-style4 list-unstyled mb-0 ps-0">
                            <!-- <li><a href="#"><i class="ti-facebook"></i></a></li> -->
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 mt-2-9">
                    <div class="ps-md-1-9 ps-xxl-7 pe-lg-1-9 pe-xl-6">
                        <h3 class="h4 text-white mb-1-9">Contact Us</h3>
                        <ul class="list-unstyled list-style04 mb-0">
                            <li><span>Address: </span>Grays, Essex, United Kingdom </li>
                            <li><span>Mail: </span>info@walkseylogistics.com</li>
                            <li><span>Phone: </span>07729 358786</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row border-top border-color-light-white align-items-center pt-1-6 pb-1-9">
                <div class="col-md-4 order-2 order-md-1 text-center text-md-start">
                    <div class="footer-logo text-center text-md-start mx-auto mx-lg-0">
                        <a href="index.php"><img src="img/logos/footer-light-logo.png" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-8 order-1 order-md-2">
                    <div class="text-center text-md-end mb-4 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li class="d-inline-block mx-2 ms-sm-0 me-sm-3"><a href="about.php" class="text-white text-primary-hover">About Us</a></li>
                            <li class="d-inline-block mx-2 ms-sm-0 me-sm-3"><a href="#services" class="text-white text-primary-hover">Services</a></li>
                            <li class="d-inline-block mx-2 mx-sm-0"><a href="contact.php" class="text-white text-primary-hover">Get In Touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<div class="scroll-top-percentage"><span id="scroll-value"></span></div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/core.min.js"></script>
<script src="search/search.js"></script>
<script src="js/main.js"></script>
<script src="quform/js/plugins.js"></script>
<script src="quform/js/scripts.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const boxes = document.querySelectorAll(".portfolio-style01 .portfolio-box");

  // Make the 3rd box active by default (optional — remove if you don't want it)
  if (boxes.length >= 3) {
    boxes[2].classList.add("active");
  }

  boxes.forEach((box) => {
    // When mouse enters, make this one active
    box.addEventListener("mouseenter", () => {
      boxes.forEach((b) => b.classList.remove("active"));
      box.classList.add("active");
    });

    // When mouse leaves, remove the active class
    box.addEventListener("mouseleave", () => {
      box.classList.remove("active");
    });
  });
});
</script>


</body>

</html>