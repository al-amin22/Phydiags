<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PhyDiags | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Front_Home/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/style.css')}}">
    
</head>

</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  text-transform: capitalize;
  text-decoration: none;
  outline: none;
  border: none;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
}

section {
  padding: 3rem 9%;
}

.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: 1rem 3rem;
  background: #e9edfb;
  color: #000000;
  cursor: pointer;
  border-radius: .5rem;
  font-size: 1.7rem;
}

.btn:hover {
  color: #fff;
  background: white;
}

.heading {
  background: url(../images/heading-bg.png) no-repeat;
  background-size: cover;
  background-position: center;
}

.heading h3 {
  font-size: 3.5rem;
  color: #302851;
}

.heading p {
  font-size: 1.6rem;
  color: #666;
  padding-top: .5rem;
}

.heading p a {
  padding-right: .5rem;
  color: #fa1d86;
}

.heading p a:hover {
  color: #224bcf;
}

.header {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 9%;
  background: blue;
}

.header .logo {
  font-size: 2.5rem;
  font-weight: bolder;
  color: #fff;
}

.header .logo i {
  color: #fa1d86;
}

.header .navbar ul {
  list-style: none;
}

.header .navbar ul li {
  position: relative;
  float: left;
}

.header .navbar ul li:hover ul {
  display: block;
}

.header .navbar ul li a {
  padding: 2rem;
  display: block;
  font-size: 1.7rem;
  color: #fff;
}

.header .navbar ul li a:hover {
  background: #ffffff;
  color:#000000;

}

.header .navbar ul li ul {
  position: absolute;
  left: 0;
  width: 20rem;
  background: #224bcf;
  display: none;
}

.header .navbar ul li ul li {
  width: 100%;
}

#menu-btn {
  cursor: pointer;
  color: #fff;
  font-size: 2.5rem;
  display: none;
}

.home {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.home .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.home .image img {
  width: 100%;
}

.home .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.home .content h3 {
  color: #302851;
  font-size: 5rem;
}

.home .content p {
  font-size: 1.4rem;
  color: #666;
  padding: 1rem 0;
  line-height: 2.5;
}

.category {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(16rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
  gap: 1.5rem;
}

.category .box {
  border-radius: 1rem;
  background: #F0F1F1;
  padding: 4rem 3rem;
  text-align: center;
}

.category .box img {
  height: 7rem;
  margin-bottom: 2rem;
}

.category .box h3 {
  font-size: 1.7rem;
  color: #302851;
}

.about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .image img {
  width: 100%;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .content h3 {
  color: #302851;
  font-size: 4.5rem;
}

.about .content p {
  font-size: 1.4rem;
  padding: 1rem 0;
  color: #666;
  line-height: 2.5;
}

.course-1 {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 1.5rem;
}

.course-1 .box {
  background: #f5f5f5;
  border-radius: 1rem;
  text-align: center;
  padding: 3rem 2rem;
}

.course-1 .box img {
  margin-bottom: 1rem;
  height: 8rem;
}

.course-1 .box h3 {
  font-size: 2rem;
  color: #302851;
  padding: .5rem 0;
}

.course-1 .box p {
  font-size: 1.4rem;
  color: #666;
  line-height: 2.5;
  padding: 1rem 0;
}

.course-2 {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 1.5rem;
}

.course-2 .box {
  padding: 2rem;
  border-radius: 1rem;
  background: #f5f5f5;
}

.course-2 .box .image {
  margin-bottom: 2rem;
  text-align: center;
}

.course-2 .box .image img {
  height: 22rem;
}

.course-2 .box .content span {
  font-size: 1.4rem;
  color: #fa1d86;
  background: #ffeaf4;
  padding: .5rem 1rem;
}

.course-2 .box .content h3 {
  color: #302851;
  line-height: 2;
  margin-top: 1.5rem;
  font-size: 2rem;
}

.course-2 .box .content p {
  font-size: 1.4rem;
  color: #666;
  line-height: 2.5;
  padding: 1rem 0;
}

.course-2 .box .content .icons {
  margin-top: 2rem;
  padding-top: 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
}

.course-2 .box .content .icons a {
  font-size: 1.4rem;
  color: #666;
}

.course-2 .box .content .icons a:hover {
  color: #fa1d86;
}

.course-2 .box .content .icons a i {
  padding-right: .5rem;
  color: #fa1d86;
}

.course-3 {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 1.5rem;
}

.course-3 .box {
  text-align: center;
  overflow: hidden;
}

.course-3 .box:hover .video video {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.course-3 .box .video {
  height: 25rem;
  width: 100%;
  overflow: hidden;
  border-radius: .5rem;
  position: relative;
}

.course-3 .box .video video {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  cursor: pointer;
}

.course-3 .box .video i {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-size: 2rem;
  height: 5rem;
  width: 5rem;
  line-height: 5rem;
  border-radius: 50%;
  background: #fff;
  color: #302851;
  pointer-events: none;
  z-index: 10;
}

.course-3 .box .content {
  padding-top: 1rem;
}

.course-3 .box .content h3 {
  font-size: 1.7rem;
  color: #302851;
  padding: .5rem 0;
}

.course-3 .box .content p {
  font-size: 1.5rem;
  color: #666;
}

.main-video {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10000;
  background: rgba(0, 0, 0, 0.7);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
  width: 100%;
  display: none;
}

.main-video.active {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.main-video #close-vid {
  position: absolute;
  top: 1.5rem;
  right: 2.5rem;
  font-size: 6rem;
  color: #fff;
  cursor: pointer;
}

.main-video video {
  width: 80%;
  border: 0.5rem solid #fff;
  border-radius: .5rem;
}

.teachers {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(27rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
  gap: 1.5rem;
}

.teachers .box {
  text-align: center;
  overflow: hidden;
}

.teachers .box:hover .image .share {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.teachers .box:hover .image .share a {
  -webkit-transform: translateY(-1rem);
          transform: translateY(-1rem);
  opacity: 1;
  -webkit-transition: -webkit-transform .2s .2s;
  transition: -webkit-transform .2s .2s;
  transition: transform .2s .2s;
  transition: transform .2s .2s, -webkit-transform .2s .2s;
}

.teachers .box .image {
  overflow: hidden;
  height: 32rem;
  width: 100%;
  position: relative;
  border-radius: 1rem;
}

.teachers .box .image .share {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  z-index: 10;
  overflow: hidden;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}

.teachers .box .image .share a {
  font-size: 2.5rem;
  margin: 2rem 1.5rem;
  color: #fff;
  -webkit-transform: translateY(5rem);
          transform: translateY(5rem);
  opacity: 0;
}

.teachers .box .image .share a:hover {
  color: #fa1d86;
}

.teachers .box .image img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.teachers .box .content {
  padding-top: 1rem;
}

.teachers .box .content h3 {
  font-size: 2rem;
  color: #302851;
}

.teachers .box .content span {
  color: #666;
  font-size: 1.5rem;
}

.blog {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 1.5rem;
}

.blog .box .image {
  height: 25rem;
  width: 100%;
  overflow: hidden;
}

.blog .box .image img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: .5rem;
}

.blog .box .content {
  padding: 2rem;
  background: #f5f5f5;
}

.blog .box .content .icons {
  padding: 1.5rem 0;
  margin-bottom: 1rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.blog .box .content .icons a {
  font-size: 1.4rem;
  color: #666;
}

.blog .box .content .icons a:hover {
  color: #224bcf;
}

.blog .box .content .icons a i {
  padding-right: .5rem;
  color: #224bcf;
}

.blog .box .content h3 {
  font-size: 1.7rem;
  padding: .5rem 0;
  color: #302851;
}

.blog .box .content p {
  padding: 1rem 0;
  font-size: 1.4rem;
  line-height: 2.5;
  color: #666;
}

.contact .icons-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(30rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 1.5rem;
}

.contact .icons-container .icons {
  text-align: center;
  padding: 2rem;
  border-radius: 1rem;
  background: #f5f5f5;
  margin-bottom: 2rem;
}

.contact .icons-container .icons i {
  height: 6.5rem;
  width: 6.5rem;
  line-height: 6.5rem;
  font-size: 2.5rem;
  color: #224bcf;
  background: #e9edfb;
  border-radius: 50%;
  text-align: center;
  margin-bottom: .5rem;
}

.contact .icons-container .icons h3 {
  font-size: 2rem;
  color: #302851;
  padding: .7rem 0;
}

.contact .icons-container .icons p {
  line-height: 2;
  font-size: 1.4rem;
  color: #666;
}

.contact .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1.5rem;
}

.contact .row form {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  border-radius: 1rem;
  background: #f5f5f5;
  padding: 2rem;
}

.contact .row form h3 {
  font-size: 2.5rem;
  color: #302851;
  margin-bottom: .5rem;
}

.contact .row form .box, .contact .row form textarea {
  width: 100%;
  padding: 1rem 1.2rem;
  font-size: 1.6rem;
  color: #666;
  text-transform: none;
  margin: 1rem 0;
  border-radius: .5rem;
  background: #fff;
}

.contact .row form textarea {
  height: 15rem;
  resize: none;
}

.contact .row .map {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  width: 100%;
  border-radius: 1rem;
}

.footer {
  background: #f5f5f5;
}

.footer .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 1.5rem;
}

.footer .box-container .box h3 {
  font-size: 2.2rem;
  padding: 1rem 0;
  color: #302851;
}

.footer .box-container .box a {
  display: block;
  font-size: 1.4rem;
  padding: 1rem 0;
  color: #666;
}

.footer .box-container .box a:hover {
  color: #fa1d86;
}

.footer .box-container .box a:hover i {
  padding-right: 2rem;
}

.footer .box-container .box a i {
  color: #fa1d86;
  padding-right: .5rem;
}

.footer .credit {
  text-align: center;
  margin-top: 2rem;
  padding: 1rem;
  padding-top: 2.5rem;
  font-size: 2rem;
  color: #666;
  border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
}

.footer .credit span {
  color: #fa1d86;
}

@media (max-width: 1200px) {
  html {
    font-size: 55%;
  }
  section {
    padding: 3rem 2rem;
  }
}

@media (max-width: 768px) {
  #menu-btn {
    display: inline-block;
  }
  .header {
    padding: 2rem;
  }
  .header .navbar {
    position: absolute;
    top: 99%;
    left: 0;
    right: 0;
    background: #224bcf;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  }
  .header .navbar.active {
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
  .header .navbar ul li {
    width: 100%;
  }
  .header .navbar ul li ul {
    width: 100%;
    position: relative;
  }
  .about .content h3 {
    font-size: 3rem;
  }
  .main-video video {
    width: 95%;
    border-width: .2rem;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
}
/*# sourceMappingURL=style.css.map */


</style>
<body>
    
<!-- header section starts  -->

<header class="header" >

    <a href="home.html" class="logo"> <i class="fas fa-graduation-cap"></i>Universitas Jambi</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul id="navigation">  
                                            @if (Route::has('login'))
                                            @auth
                                                <li class="" ><a href="/">Beranda</a></li>
                                               
                                             
                                                <li><a href="https://api.whatsapp.com/send?phone=6282184952624">Kontak</a></li>
                                                <li ><a href="{{ url('/home') }}" >Dashboard</a></li>
                                                <li ><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                                      style="display: none;">
                                                    @csrf
                                                    </form>
                                            @else
                                                <li  ><a href="/">Beranda</a></li>
                                                
                                                <li><a href="https://api.whatsapp.com/send?phone=6282184952624">Kontak</a></li>
                                                <li class="button-header"><a href="{{ route('login') }}" >Masuk</a></li>
                                            @if (Route::has('register'))
                                                <li ><a href="{{ route('register') }}">Daftar</a></li>
                                            @endif
                                            @endauth
                                            @endif                                                                                        
                                               
                                            </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">



    

</section>
<div class="content">
        <div id="panduan" class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-6">
                        <div class="section-tittle text-center mb-55">
                            <h2>Panduan Penggunaan</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-10">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <!-- <a href="#"><img src="{{asset('Front_Home/assets/img/gallery/featured1.png')}}" alt=""></a> -->
                                <iframe width="350" height="210" src="https://www.youtube.com/embed/aHdDLLO9z6w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="properties__caption">
                                <p>Panduan</p>
                                <h3><a href="#">Guru</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">  
                                  &nbsp;
                                </div>
                                <a href="#" class="border-btn border-btn2">Download</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('Front_Home/assets/img/gallery/featured2.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Panduan</p>
                                <h3><a href="#">Siswa</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                </div>
                                <a href="#" class="border-btn border-btn2">Download</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                   
                </div>
            </div>
        </div>
        
    </div>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="category" >

    <a href="{{route('fungsiPhy')}}" class="box"  >
        <img src="images/category-1.png" alt="">
        <h3>Fungsi PhyDiags</h3>
    </a>

    <a href="{{route('tentangPhy')}}" class="box">
        <img src="images/category-2.png" alt="">
        <h3>Tentang Four-Tier Test</h3>
    </a>

    <a href="{{route('panduanPhy')}}" class="box">
        <img src="images/category-3.png" alt="">
        <h3>Panduan Penggunaan</h3>
    </a>

    <a href="{{route('perancangPhy')}}" class="box">
        <img src="images/category-4.png" alt="">
        <h3>Perancang PhyDiags</h3>
    </a>

    

</section>


<section class="footer">

    

    <div class="credit" style="font-size:12px"> Copyright ©2021 All rights reserved | Pendidikan Fisika Universitas Jambi </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script >
    let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}

let mainVid = document.querySelector('.main-video');

document.querySelectorAll('.course-3 .box .video video').forEach(vid =>{

    vid.onclick = () =>{
        let src = vid.getAttribute('src');
        mainVid.classList.add('active');
        mainVid.querySelector('video').src = src;
    }

});

document.querySelector('#close-vid').onclick = () =>{
    mainVid.classList.remove('active');
}
</script>
<script src="{{asset('Front_Home/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('Front_Home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/popper.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('Front_Home/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('Front_Home/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('Front_Home/assets/js/wow.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('Front_Home/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('Front_Home/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('Front_Home/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('Front_Home/ssets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('Front_Home/assets/js/contact.js')}}"></script>
<script src="{{asset('Front_Home//assets/js/jquery.form.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/mail-script.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->  
<script src="{{asset('Front_Home/assets/js/plugins.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/main.js')}}"></script>

</body>
</html>