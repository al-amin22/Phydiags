<?php  use App\Guru;
    $guru = Guru::where('user_id', Auth::user()->id )->first();
?>

<style>

#a-ku:hover{
    background-color :#000000;
    display:block;
    color:#000000;
    border-radius:5px;

};
.merah{
  background-color: red;
}
/* .btn {box-shadow:2px 5px grey;} */
</style>
<div class="app-sidebar sidebar-shadow " style="background: linear-gradient(180deg, #000000 0%, #353131 100%); box-shadow: 10px 0px 10px rgba(0, 0, 0, 0.25);">
    <div class="app-header__logo">
        <img src="{{('Front_Home/s/img/logo/logo2.png')}}" alt="" width="170px">
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
            <center>
            @if( Guru::where('user_id', Auth::user()->id )->first() != null )
                <li class="app-sidebar__heading">
                <img src="{{ url('images/' . $guru->foto) }}" class="rounded-circle" style="width: 90px; height: 90px; display: block; margin: auto;" alt="{{ $guru->foto }}">
                </li>
            @else
            <li class="app-sidebar__heading"> <img style="width: 50px; height: 50px; display: block; margin: auto;" class="rounded-circle" src="{{asset('assets/images/1.png')}}" alt=""></li>
            @endif
            <li class="app-sidebar__heading">{{auth()->user()->name}}</li>

                <a  id="a-ku" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button type="button" class="btn" style="color:white;">
                    Logout

                    </button>
                </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </center>

                <li>
                    <a id="a-ku" href="{{ url('/home') }}" >
                        <i class="metismenu-icon pe-7s-home" style="color:white;"></i>
                        <b style="color:white;">Beranda</b>
                    </a>
                </li>
                <li>
                    <a id="a-ku" href="{{route('profilGuru')}}" class="mb-2">
                        <i class="metismenu-icon pe-7s-user" style="color:white;"></i>
                        <b style="color:white;" style="color:white;">Profil</b>
                    </a>
                </li>

                <li>
                <a id="a-ku" href="#" class="mb-2">
                     <i class="pe-7s-monitor" style="color:white;"></i>
                        <b style="color:white;">Kelas</b>
                     <i class="metismenu-state-icon pe-7s-angle-down caret-left" style="color:white;"></i>
                </a>
                <ul>
                    <li>
                        <a  id="a-ku"href="{{route('createKelas')}}">
                          <b style="color:white;">Buat Kelas Baru</b>
                            <i class="metismenu-icon" style="color:white;"></i>
                        </a>
                    </li>
                    <li>
                        <a id="a-ku" href="{{route('getKelas')}}">
                            <b style="color:white;">Daftar Kelas</b>
                            <i class="metismenu-icon pe-7s-monitor" style="color:white;"></i>
                        </a>
                    </li>

                </ul>
                </li>

                <li>
                    <a id="a-ku" href="#" class="mb-2">
                        <i class="metismenu-icon pe-7s-bookmarks" style="color:white;"></i>
                        <b style="color:white;">Paket Soal</b>
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left" style="color:white;"></i>
                    </a>
                    <ul>
                    <li>
                        <a id="a-ku" href="{{route('createPaketSoal')}}">
                          <b>Buat Paket Soal</b>
                            <i class="metismenu-icon" style="color:white;"></i>
                        </a>
                    </li>
                    <li>
                        <a id="a-ku" href="{{route('getPaketSoal')}}">
                            <b style="color:white;">Daftar Paket Soal</b>
                            <i class="metismenu-icon pe-7s-monitor" style="color:white;"></i>
                        </a>
                    </li>

                </ul>
                </li>
                <li>
                <a id="a-ku" href="#" class="md-2">
                     <i class="metismenu-icon pe-7s-display2" style="color:white;"></i>
                     <i class="metismenu-state-icon pe-7s-angle-down caret-left" style="color:white;"></i>
                     <b style="color:white;">Kelola Test</b>
                </a>
                <ul>
                    <li>
                        <a id="a-ku" href="{{route('createUjian')}}">
                          <b style="color:white;">Buat Test</b>
                            <i class="metismenu-icon" style="color:white;"></i>
                        </a>
                    </li>
                    <li>
                        <a id="a-ku" href="{{route('getUjian')}}">
                          <b style="color:white;">Daftar Riwayat Test</b>
                            <i class="metismenu-icon" style="color:white;"></i>
                        </a>
                    </li>



                </ul>
                </li>

                <li>
                <a id="a-ku" href="{{route('reduksi')}}" class="md-2">
                     <i class="metismenu-icon pe-7s-display2" style="color:white;"></i>
                     
                     <b style="color:white;">Reduksi</b>
                </a>
              

                </ul>
                </li>

               







        </div>
    </div>
</div>
<div class="app-main__outer">
