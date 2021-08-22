<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
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
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 11%;width: 100%;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><i class="fa fa-th-list"></i></button><img data-aos="fade" data-aos-delay="100" data-aos-once="true" src="/assets/img/logo.png"
                style="width: 90px;height: 70px;margin: -20px;padding: 0px;font-size: 17px;"><img src="/assets/img/EMSITE.png" style="height: 41px;width: 153px;margin: 1px 0px;padding: 0px 0px;">
            <div class="collapse navbar-collapse" id="navcol-1" style="height: 40px;width: 979.7px;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html" style="width: 43px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact - us</a></li>
                    <li class="nav-item"><a class="nav-link" href="finished.html">our works</a></li>
                    <li class="nav-item"><a class="nav-link" href="live.html">Live exhibitions</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="border rounded-pill login-clean" style="background: url(&quot;/assets/img/exhibitions-gl-events.jpg&quot;);">
        <form data-aos="zoom-in" data-aos-duration="500" data-aos-delay="50" action="{{route('Merch.store')}}" method="post" style="height: 60%;" enctype="multipart/form-data">
            @csrf
            <div class="illustration">
                <img src="/assets/img/f29a1ebaf6ba41c8871ee1ace3098555.png">
            </div>

           <select name="id_Exhibtion">
            @foreach($merches as $exhibtioins)
            <option name="id_Exhibtion">{{$exhibtioins->id}}.{{ $exhibtioins->Exhibition_Name }}</option>
            @endforeach
          </select>

            <div class="mb-3">
                <input class="form-control form-control-lg" type="text" name="Full_Name" placeholder="Full_Name" style="padding-top: 0px;">
            </div>

            <div>
                <input class="form-control form-control-lg" type="text" name="Company_Name" placeholder="Company_Name" style="padding-top: 0px;"  required>
            </div>

            <div class="mb-3">
                <input class="form-control" type="email" name="Email" placeholder="Email" style="padding-top: 0px;" required>
            </div>

            <div class="mb-3">
                <input class="form-control" type="password" name="Password" placeholder="Password" style="padding-top: 0px;" required>
            </div>

            <div>
                <input class="form-control form-control-lg" type="text" name="Type_of_goods" placeholder="Type_of_goods" required>
            </div>

            <div>
                <select class="form-select" name="Space_Required">
                    <optgroup label="Space_Required">
                        <option name="4 x 4">4 x 4</option>
                        <option name="10 x 10">10 x 10</option>
                        <option name="50 x 50">50 x 50</option>
                    </optgroup>
                </select>
            </div>

            <div class="files color form-group mb-3"><label class="form-label" style="color: var(--bs-green);">
                <strong>Upload Company logo </strong>
            </label>
            <input type="file" name="image" class="form-control" multiple accept=".png, .jpg, .jpeg" style="width: auto;height: auto;margin: 0px;padding: 121px 0px 85px 118.1px;"
                />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-green);">SignUp and upload!</button>
            </div><a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </section>
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
    <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/0b51cec2d899412ea501d9269bffcda03dbf932c25e343a4b206a355923ba199.js"></script>


</body>

</html>
