<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Exhibition Name</title>
    <link rel="stylesheet" href="/assets/css/Responsive-footer.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="/assets/css/--mp---Masonry-Gallery-with-Loader.css">
    <link rel="stylesheet" href="/assets/css/-Filterable-Gallery-with-Lightbox-BS4-.css">
    <link rel="stylesheet" href="/assets/css/Bootstrap-Image-Uploader.css">
    <link rel="stylesheet" href="/assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="/assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="/assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="/assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/Image_center.css">
    <link rel="stylesheet" href="/assets/css/Image-Tab-Gallery-Vertical.css">
    <link rel="stylesheet" href="/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="/assets/css/Masonry-gallery-cards-responsive.css">
    <link rel="stylesheet" href="/assets/css/Panel-Element-1.css">
    <link rel="stylesheet" href="/assets/css/Panel-Element-2.css">
    <link rel="stylesheet" href="/assets/css/Panel-Element-3.css">
    <link rel="stylesheet" href="/assets/css/Panel-Element.css">
    <link rel="stylesheet" href="/assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="/assets/css/Simple-Side-Nav.css">
    <link rel="stylesheet" href="/assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="/assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="/assets/css/hide-and-show.css">
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 11%;width: 100%;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><i class="fa fa-th-list"></i></button><img data-aos="fade" data-aos-delay="100" data-aos-once="true" src="/assets/img/logo.png"
                style="width: 90px;height: 70px;margin: -20px;padding: 0px;font-size: 17px;"><img src="/assets/img/EMSITE.png" style="height: 41px;width: 153px;margin: 1px 0px;padding: 0px 0px;">
            <div class="collapse navbar-collapse" id="navcol-1" style="height: 40px;width: 979.7px;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('Merch.create')}}" style="width: 43px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('Contact.create')}}">Contact - us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('Exhibtions.create')}}">Live exhibitions</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.rawgit.com/digistate/resouces/master/multipleFilterMasonry.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js"></script>
    <script src="/assets/js/vanilla-zoom.js"></script>
    <script src="/assets/js/--mp---Masonry-Gallery-with-Loader.js"></script>
    <script src="/assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/Bootstrap-Image-Uploader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="/assets/js/Image-Tab-Gallery-Vertical.js"></script>
    <script src="/assets/js/Panel-Element-1.js"></script>
    <script src="/assets/js/Panel-Element.js"></script>
    <script src="/assets/js/Simple-Side-Nav.js"></script>
    <script src="/assets/js/Simple-Slider.js"></script>
    <section>



@yield('content')



 <div id="footer" class="flex-wrap">
        <div id="image-box" class="col"><img id="footer-img" src="/assets/img/unnamed.png"></div>
        <div id="end-box" class="col">
            <div id="end-content">
                <a href="/live.html"><h1 style="color: rgb(255,255,255);">Our works</h1></a>
                <ul class="list-unstyled">
                    <li style="color: rgb(255,255,255);font-size: 19px;">Phone:&nbsp;<a href="tel:+963932895825"><span style="color: rgb(69,73,78);">+963932895825</span></a><br></li>
                    <li style="color: rgb(255,255,255);font-size: 19px;">E-Mail:&nbsp;<a href="mailto:Syrjara@gmail.com"><span style="color: rgb(69,73,78);">syrjara@gmail.com</span></a><br></li>
                </ul> <a href="/contact-us.html"> <button class="btn btn-primary" id="form-btn" type="button"><i class="fa fa-envelope-o"></i>&nbsp;Contact-us</button></a>
                <div id="info-some-buttons" class="some" style="display: flex;justify-content: center;">
                    <ul class="some-list">
                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                        <li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                        <li class="whatsapp"><a href="https://wa.link/"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="itemModal" aria-labelledby="itemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><i class="material-icons icon-dashboard" style="width: 66px;height: 53px;margin: -10px;padding: 5px;font-size: 40px;color: rgb(0,0,0);">filter_frames</i>
                    <h4 style="color: rgb(0,0,0);">Item Name</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label class="form-label">Brand:</label> <br>
                            
                            <label class="form-label">Model:</label> <br>
                            
                            <label class="form-label">Price:</label> <br>
                    
                            <label class="form-label">Warranty:</label> <br>
                    
                            <div>
                            <label class="form-label">Available colors:</label>
                            
                            </div>
                        </div>  
                        <div class="row img-row" style="padding-right: 10px;padding-left: 10px;">
                            <div class="col column"><img class="img-thumbnail img-fluid" src="/assets/img/img1-min.jpg" onclick="myFunction(this);" alt="image 1"></div>
                            <div class="col column"><img class="img-thumbnail img-fluid" src="/assets/img/img2-min.jpg" onclick="myFunction(this);" alt="image 2"></div>
                            <div class="col column"><img class="img-thumbnail img-fluid" src="/assets/img/img3-min.jpg" onclick="myFunction(this);" alt="image 3"></div>
                            <div class="col column"><img class="img-thumbnail img-fluid" src="/assets/img/img4-min.jpg" onclick="myFunction(this);" alt="image 4"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" id="btnSaveModalitem" type="button" data-bs-dismiss="modal" style="background: var(--bs-cyan);" onclick="location.href='/buy.html' ">Buy</button></a></div>
            </div>
        </div>
    </div>
    <script src="/assets/bootstrap/js/bootstrap.min.js "></script>
    <script src="/assets/js/bs-init.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js "></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js "></script>
    <script src="https://cdn.rawgit.com/digistate/resouces/master/multipleFilterMasonry.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js "></script>
    <script src="https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js "></script>
    <script src="/assets/js/vanilla-zoom.js "></script>
    <script src="/assets/js/--mp---Masonry-Gallery-with-Loader.js "></script>
    <script src="/assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js "></script>
    <script src="/assets/js/theme.js "></script>
    <script src="/assets/js/Bootstrap-Image-Uploader.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js "></script>
    <script src="/assets/js/Image-Tab-Gallery-Vertical.js "></script>
    <script src="/assets/js/Panel-Element-1.js "></script>
    <script src="/assets/js/Panel-Element.js "></script>
    <script src="/assets/js/Simple-Side-Nav.js "></script>
    <script src="/assets/js/Simple-Slider.js "></script>
    <script src="/assets/js/raphael-min.js "></script>
    <script src="/assets/js/move.js "></script>
    <script src="//assets/js/zoommap.js"></script>
    <script src="//assets/js/hideshow.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="jquery.zoomooz.min.js"></script>


    <script>
        function openTab(tabName) {
        var i, x;
        x = document.getElementsByClassName("containerTab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>
</body>

</html>