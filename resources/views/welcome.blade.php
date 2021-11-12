<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

  <title>PhyDiags || Usaha Dan Energi</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap');

:root{
  --color:#6C5CE7;
}

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  transition: all .2s linear;
  text-decoration: none;
}

html{
  font-size: 62.5%;
}

body{
  overflow-x: hidden;
}

.heading{
  margin:2rem;
  padding-top: 6rem;
  display: inline-block;
  font-size: 3.5rem;
  color:var(--color);
  position: relative;
  letter-spacing: .2rem;
}

.heading::before, .heading::after{
  content: '';
  position: absolute;
  height: 2.5rem;
  width: 2.5rem;
  border-top:.4rem solid var(--color);
  border-left:.4rem solid var(--color);
}

.heading::before{
  top:5.8rem; left: -2rem;
}

.heading::after{
  bottom:-.5rem; right: -2rem;
  transform: rotate(180deg);
}

.btn{
  outline: none;
  border: none;
  border-radius: 5rem;
  background: var(--color);
  color:#fff;
  cursor: pointer;
  height:3.5rem;
  width: 15rem;
  font-size: 1.7rem;
  box-shadow: 0 .2rem .5rem rgba(0,0,0,.3);
}

.btn:hover{
  letter-spacing: .1rem;
  opacity: .8;
}













.header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding:1rem 2rem;
  position: fixed;
  top:0; left: 0;
  z-index: 100;
}

.header .logo{
  font-size: 2.5rem;
  color:#fff;
}

.header .logo i{
  padding:0 .5rem;
}

.header .navbar ul{
  list-style-type: none;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.header .navbar ul li{
  margin:0 1.5rem;
}

.header .navbar ul li a{
  font-size: 2rem;
  color:#fff;
}

.header .navbar ul li a:hover{
  color:#ccc;
}

.header .fa-bars{
  color:#fff;
  cursor: pointer;
  font-size: 3rem;
  display: none;
}







.home{
  min-height: 100vh;
  width: 100vw;
  background:linear-gradient(blue, var(--color));
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  text-align: center;
  padding:0 1rem;
  position: relative;
  overflow: hidden !important;
}

.home .banner{
  color:#fff;
  font-size: 5rem;
  text-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
}

.home .slogan{
  color:#eee;
  font-size: 2.5rem;
  font-weight: 400;
}

.home button{
  height: 4rem;
  width: 18rem;
  background:#fff;
  color: #444;
  cursor: pointer;
  border:none;
  outline: none;
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: 400;
  box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
}

.home button:hover{
  letter-spacing: .1rem;
}

.home .wave{
  position: absolute;
  bottom: -.5rem;
  left: 0;
  height:11rem;
  width: 100%;
  background: url('Front_Home/assets/img/wave.png'); 
  background-size: 100rem 11rem;
  background-repeat: repeat-x;
  animation:waves 10s linear infinite;
}

.home .wave2{
  animation-direction: reverse;
  opacity: .2;
}

.home .wave3{
  animation-duration: 4s;
  opacity: .5;
}

@keyframes waves{
  0%{
    background-position-x: 0;
  }
  100%{
    background-position-x: 100rem;
  }
}

.home .fa-cog{
  position: absolute;
  font-size: 30rem;
  opacity: .15;
  color:#fff;
  animation: rotate 10s linear infinite;
}

.home .nut1{
  top:10%; left: -15rem;
}

.home .nut2{
  bottom:23%; right: -13rem;
  animation-direction: reverse;
}

@keyframes rotate{
  100%{
    transform: rotate(360deg);
  }
}

.about{
  min-height: 100vh;
  width: 100vw;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.about .row{
  display: flex;
  align-items: center;
  justify-content: space-around;
  padding:0 4rem;
}

.about .row .content{
  text-align: left;
}

.about .row .image img{
  width: 50vw;
}

.about .row .content h3{
  font-size: 3rem;
  color: var(--color);
}

.about .row .content p{
  font-size: 1.5rem;
  color: #333;
  padding:1rem 0;
}

.about::before, .about::after{
  content: '';
  position: absolute;
  z-index: -1;
  opacity:.2;
  border-radius: 50%;
}

.about::before{
  height:50rem;
  width:50rem;
  background:#ccc;
  bottom:-10rem; left:-10rem;
}

.about::after{
  height:60rem;
  width:60rem;
  background:var(--color);
  top:-10rem; right:-10rem;
}

.service{
  width: 100vw;
  text-align: center;
}

.service .row{
  margin:2rem 0;
  padding:0 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.service .row .image img{
  width:50vw;
  height:55vh;
}

.service .row .content{
  text-align: left;
  padding:0 3rem;
}

.service .row .content h3{
  font-size: 3rem;
  color:var(--color);
}

.service .row .content p{
  font-size: 1.5rem;
  color:#333;
  padding:1rem 0;
}

.team{
  min-height: 100vh;
  width:100vw;
  text-align: center;
  background-color: #222;;
}

.team .heading{
  color:#fff;
}

.team .heading::before, .team .heading::after{
  border-color:#fff;
}

.team .row{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.team .row .card{
  height:35rem;
  width:25rem;
  background:#fff;
  text-align: center;
  margin:7rem 2rem;
  position: relative;
  overflow: hidden;
  -webkit-box-reflect: below .2rem linear-gradient(transparent 70%, #0004);
}

.team .row .card .image{
  margin:1rem 0;
  padding-top: 4rem;
}

.team .row .card .image img{
  height:13rem;
  width:13rem;
  border-radius: 50%;
  border:.5rem solid #fff;
  box-shadow: 0 0 .5rem rgba(0,0,0,.3);
  object-fit: cover;
}

.team .row .card .info h3{
  font-size: 2rem;
  color:#333;
}

.team .row .card .info span{
  font-size: 1.8rem;
  color:var(--color);
}

.team .row .card .info .icons a{
  margin-top: 4rem;
  padding:0 1rem;
  font-size: 2rem;
  color:#333;
}

.team .row .card .info .icons a:hover{
  color:var(--color);
}

.team .row .card::before, .team .row .card::after{
  content: '';
  position: absolute;
  border-radius: 50%;
  height:15rem;
  width:15rem;
  z-index: -1;
}

.team .row .card::before{
  background:var(--color);
  top:-3rem; right: -4rem;
}

.team .row .card::after{
  background:#ccc;
  bottom:-3rem; left: -4rem;
}

.contact{
  min-height: 100vh;
  width: 100vw;
  text-align: center;
}

.contact .row{
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact .row .image img{
  height: 70vh;
  width:50vw;
}

.contact .row .form-container{
  width: 50%;
  text-align: left;
  padding:0 5rem;
}

.contact .row .form-container input, textarea{
  outline: none;
  border:none;
  height:4rem;
  background: none;
  border-radius: .5rem;
  box-shadow: .2rem .2rem .5rem rgba(0,0,0,.2);
  padding:0 1rem;
  margin:1rem 0;
  font-size: 1.6rem;
}

.contact .row .form-container .inputBox{
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.contact .row .form-container .inputBox input[type="text"]{
  width: 49%;
}

.contact .row .form-container input[type="email"]{
  width: 100%;
}

.contact .row .form-container textarea{
  width: 100%;
  height:20rem;
  padding:1rem; 
  resize: none;
}

.contact .row .form-container input[type="submit"]{
  background-color: var(--color);
  color:#fff;
  cursor: pointer;
  height:4rem; 
  width: 10rem;;
}

.contact .row .form-container input[type="submit"]:hover{
  opacity: .8;
}

.faq{
  min-height: 100vh;
  width: 100vw;
  text-align: center;
  padding:0 2rem;
}

.faq .row{
  display: flex;
  align-items: center;
  justify-content: center;
  padding:0 2rem;
}

.faq .row .image img{
  height:70vh;
  width:50vw;
}

.faq .row .accordion-container{
  width: 50%;
  text-align: left;
}

.faq .row .accordion-container .accordion .accordion-header{
  background-color: var(--color);
  margin:1rem 0;
  box-shadow: .1rem .1rem .3rem rgba(0,0,0,.3);
  cursor: pointer;
}

.faq .row .accordion-container .accordion .accordion-header span{
  display: inline-block;
  text-align: center;
  height:4rem;
  width:5rem;
  line-height: 4rem;
  font-size: 2rem;
  background:#fff;
  color:#333;
  clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
}

.faq .row .accordion-container .accordion .accordion-header h3{
  display: inline;
  color: #fff;
  font-weight: 400;
  padding-left: .5rem;
  font-size: 1.5rem;
}

.faq .row .accordion-container .accordion .accordion-body{
  padding:1rem;
  color:#444;
  box-shadow: .1rem .1rem .3rem rgba(0,0,0,.3);
  font-size: 1.3rem;
  display: none;
}

.faq .row .accordion-container .accordion:nth-child(1) .accordion-body{
  display: block;
}

.footer{
  width:100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:1rem 2rem;
  margin-top: 1rem;
  background:var(--color);
}

.footer h1{
  color:#fff;
  letter-spacing: .1rem;
  font-weight: 400;
}

.footer .icons a{
  color:#fff;
  font-size: 1.8rem;
  padding:0 1rem;
}














/* media queries  */

@media (max-width:768px){

  html{
    font-size: 50%;
  }

  .header .fa-bars{
    display: block;
  }

  .header .navbar{
    position: fixed;
    top:-120%; left: 0;
    height: auto;
    width: 100%;
    background-color: #fff;
    z-index: 1000;
    border-top: .1rem solid rgba(0,0,0,.3);
  }

  .header .navbar ul{
    height: 100%;
    width: 100%;
    flex-flow: column;
  }

  .header .navbar ul li{
    margin:1rem 0;
  }

  .header .navbar ul li a{
    color: #444;
    font-size: 2.4rem;
  }

  .header .fa-times{
    transform: rotate(180deg);
  }

  .header .nav-toggle{
    top:5.8rem;
  }

  .home .banner{
    font-size: 4rem;
  }

  .home .slogan{
    font-size: 1.7rem;
  }

  .about .row{
    flex-flow: column-reverse;
    padding:0 2rem;
  }

  .about .row .image img{
    width: 100vw;
  }

  .service .row{
    flex-flow: column-reverse;
  }

  .service .row:nth-child(even){
    flex-flow: column;
  }

  .service .row .image img{
    width: 100vw;
  }

  .service .row .content{
    padding:0;
  }

  .contact .row{
    flex-flow: column;
  }

  .contact .row .image img{
    width: 100vw;
  }

  .contact .row .form-container{
    width: 100%;
    padding:0 1.5rem;
  }

  .faq{
    padding:0;
  }

  .faq .row{
    padding:0 1rem;
    flex-flow: column;
  }

  .faq .row .image img{
    width:100vw;
  }

  .faq .row .accordion-container{
    width:100%;
  }

}

@media (max-width:550px){
  .footer{
    flex-flow: column;
  }
  .footer h1{
    text-align: center;
  }
  .footer .icons{
    padding:2rem 0;
  }
}

</style>


<body>

<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"><i class="fas fa-university"></i>Universitas Jambi</a>


<div class="fas fa-bars"></div>


<nav class="navbar">
  <ul>
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

<section id="home" class="home">

<h1 class="banner">E Diagnostic Four Tier Test</h1>
<center><h3 class="slogan" style="font-size: 18px;"> <p>Aplikasi Berbasis Web Yang Bertujuan Untuk Mengembangkan Test Diagnostik </p>
<p>Dalam Bentuk Four-Tier Yang Berguna Dalam Mengidentifikasi</p>
<p> Profil Konsepsi Mahasiswa Pada Materi Usaha Dan Energi</p></h3></center>

<p style="padding: 16px;"><a href="{{ route('login') }}"><button>Masuk</button></a></p>


<div class="wave wave1"></div>
<div class="wave wave2"></div>
<div class="wave wave3"></div>

<div class="fas fa-cog nut1"></div>
<div class="fas fa-cog nut2"></div>


</section>


<!-- home section ends -->


<!-- abuout section starts  -->

<section id="service" class="service">

<h1 class="heading">Fungsi Four-Tier Test</h1>

<div class="row">

  <div class="image">
    <img src="{{asset('Front_Home/assets/img/fungsi.png')}}" alt="">
  </div>
  <div class="content">
    <h3>Fungsi Four-Tier Test</h3>
    <p>Mengidentifikasi masalah atau kesulitan yang dialami siswa dengan cepat karna soal four-tier test dirancang dalam website yang dapat menganalisis jawaban siswa tersebut dengan cepat.</p>
    <a href="{{route('fungsiPhy')}}"><button class="btn">Selengkapnya</button></a>
  </div>

</div>

</section>




<section id="about" class="about">

<h1 class="heading">Tentang PhyDiags</h1>

<div class="row">

  <div class="content">
    <h3>Tentang Four-Tier Test</h3>
    <p>Four Tier Test merupakan tes diagnostik dengan empat tingkat pilihan. Four Tier Test ini merupakan pengembangan dari tes diagnostik pilihan ganda tiga tingkat, yaitu dengan menambah tingkat keyakinan pada masing-masing jawaban dan alasan. Penambahan tingkat keyakinan pada masing-masing jawaban dan alasan dapat mengukur perbedaan tingkat pengetahuan siswa sehingga akan membantu dalam mendeteksi tingkat miskonsepsi siswa.</p>
    <a href="{{route('tentangPhy')}}"><button class="btn">Selengkapnya</button></a>
  </div>

  <div class="image">
    <img src="{{asset('Front_Home/assets/img/perancang.png')}}" alt="">
  </div>

</div>


</section>











<section id="faq" class="faq">

<h1 class="heading">FAQ</h1>

<div class="row">

<div class="image">
  <img src="{{asset('Front_Home/assets/img/tentang.png')}}" alt="">
</div>

<div class="accordion-container">

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>Apa itu Four-Tier Test?</h3>
    </div>
    <div class="accordion-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt deleniti!</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>Apa Manfaat dari E-diagnostic four-tier test ini?</h3>
    </div>
    <div class="accordion-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt deleniti!</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>Apa fungsi dari Four-Tier test?</h3>
    </div>
    <div class="accordion-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt deleniti!</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>Materi Yang digunakan untuk web ini?</h3>
    </div>
    <div class="accordion-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt deleniti!</p>
    </div>
  </div>

 

</div>

</div>


</section>


<!-- FAQ section ends -->


<!-- footer section starts  -->

<section class="footer">

<h1>Copyright ©2021 All Rights Reserved | Pendidikan Fisika Universitas Jambi</h1>

<div class="icons">
  <a href="#" class="fab fa-facebook-f"></a>
  <a href="#" class="fab fa-twitter"></a>
  <a href="#" class="fab fa-instagram"></a>
</div>

</section>


<!-- footer section ends -->






  
</body>

<!-- jquery file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- custom js file link  -->

<script src="js/main.js"></script>
<script type="text/javascript">$(document).ready(function(){


  $('.fa-bars').click(function(){
    $(this).toggleClass('fa-times');
    $('.navbar').toggleClass('nav-toggle');
  });

  $(window).on('load scroll',function(){
    $('.fa-bars').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    if($(window).scrollTop() > 30){
      $('.header').css({'background':'#6C5CE7','box-shadow':'0 .2rem .5rem rgba(0,0,0,.4)'});
    }else{
      $('.header').css({'background':'none','box-shadow':'none'});
    }
  });


  $('.accordion-header').click(function(){
    $('.accordion .accordion-body').slideUp();
    $(this).next('.accordion-body').slideDown();
    $('.accordion .accordion-header span').text('+');
    $(this).children('span').text('-');
  });



});</script>
</html>