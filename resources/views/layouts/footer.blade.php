<!-- nav bar -->
<nav class="main-menu ">
    <ul class="menu-area-main">
        <li class="active"> <a href="/">Home</a> </li>

        <li> <a href="concerts.html">upcoming movies</a> </li>
        <li> <a href="gallery.html">Gallery</a> </li>
        <li> <a href="about.html">About</a> </li>
        <li> <a href="contact.html">Contact</a> </li>

        {{-- if user not logged in --}}
        @if(!Auth::check())
        <li> <a href="/login">Login</a> </li>
        
        {{-- if user logged in --}}
        @else
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </li>
        
        
        @endif
        <li></li>
        <!-- search bar -->
        <!-- <li> <a class="last_manu" href="#"><img src="images/search_icon.png" alt="#" /></a> </li> -->

    </ul>
</nav>
<!-- nav bar end -->


@yield('content')

<!-- footer -->
<footer>
    <div class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="address">
                                <ul class="loca pt-5">
                                    <li>
                                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Islamabad

                                    <li>

                                        <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775
                                    </li>
                                    <li>
                                        <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pt-10">
                            <ul class="social_link">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="container">
            <div class="copyright">

                <p>Copyright 2022 All Rights Reserved By BitSmith Tech</p>
            </div>
        </div>
    </div>

</footer>
<!-- end footer -->