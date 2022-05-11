</div>
</div>
</div>
<footer class="bg-dark text-white">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4">
                <div class="aboutConent">
                    <h3 class="achivpFont h5 position-relative mb-5">About Us</h3>
                    <p class="mb-0 achivpFont mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industre y of type and scras been the industry's make a type specimen book. </p>
                </div>
                <div class="socailIcons">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>

            </div>
            <div class="col-md-2">
                <h3 class="achivpFont h5 position-relative mb-5">Quick Links</h3>
                <ul>
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Contact Us</a></li>
                    <li><a href="#" class="text-white">My Account</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3 class="achivpFont h5 position-relative mb-5">Explore</h3>
                <ul>
                    <li><a href="#" class="text-white">FAQ'S</a></li>
                    <li><a href="#" class="text-white">Video</a></li>
                    <li><a href="#" class="text-white">Mission</a></li>
                    <li><a href="#" class="text-white">Vision</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="achivpFont h5 position-relative mb-5">Newsletter</h3>
                <div class="input-group w-auto">
                    <input class="form-control py-2 border-right-0 border" type="email" value="" id="example-search-input" placeholder="Enter Your Email">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border-secondary bg-theme-primary text-white" type="button">
                            <i class="bi bi-send-fill"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row border-top py-3 border-secondary">
            <div class="col-md-12 text-center">
                <p class="mb-0">Copyright © 2022. Puleo Education. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/question.png" alt="Icon">
                </figure>
                <p class="achivpFont">Are you sure you want to <br> logout?</p>
            </div>
            <div class="modal-footers text-center ">
                <button type="button" class="px-5 py-2 btn bg-theme-primary text-white" data-dismiss="modal" data-toggle="modal" data-target="#logoutSuccess">Yes</button>
                <button type="button" class="px-5 btn bg-theme-primary-outline text-white" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<!-- confirmaition -->

<div class="modal fade" id="logoutSuccess" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/check.png" alt="Icon">
                </figure>
                <p class="achivpFont">You have been successfully <br>logged out</p>
            </div>
            <div class="modal-footers text-center">
                <button type="button" onclick="location.href='./../login-pages/login.php'" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "iwBG9WUTdg");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript> -->
<script src="../../js/main.js"></script>
<script>
    jQuery(window).scroll(function(event) {
        var scroll = jQuery(window).scrollTop();
        if (scroll > 2) {
            jQuery('header').addClass('bg-white');
            jQuery('div#navbarNav li a').addClass('text-dark');
        } else {
            jQuery('header').removeClass('bg-white');
            jQuery('div#navbarNav li a').removeClass('text-dark');
        }
    });
</script>
</body>

</html>