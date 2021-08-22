@extends('layou.app')
@section('content')

    <section class="projects-clean" style="height: 1070px;margin: 52px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: var(--bs-green);">Live Exhibition<i class="material-icons" style="font-size: 42px;color: var(--bs-red);margin: 1px;">live_tv</i></h2>
                <p class="text-center"> Browse the following exhibitions and book your purchases or visit and buy yourself </p>
            </div>
            <div class="row Exhibition">
                @foreach($exhibtions as $exhibtion)
                <div class="col item">
                    <a href="{{route('Exhibtions.index', ['id' => $exhibtion->id])}}"> <img class="img-fluid" src="/assets/img/desk.jpg"></a>
                        <h3 class="name">Exhibition Name Is : </h3><span>{{$exhibtion->Exhibition_Name}}</span>
                    <h5>Date </h5> <span>{{$exhibtion->created_at}}</span>               
            </div>
            @endforeach
        </div>
    </section>

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

@endsection