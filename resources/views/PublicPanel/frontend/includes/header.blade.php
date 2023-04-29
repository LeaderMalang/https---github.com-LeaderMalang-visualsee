<!-- Navbar -->
<div class="container sticky-top  ">
    <header class="header">
        <nav id="navbar">
            <div class="row pt-2">
                <div class="col-3 px-5  ">
                    <a href="{{route('index')}}"><img src="PublicAssets/images/logo.png" width="150px" alt=""></a>
                </div>
                <div class="col"></div>
                <div class="col-7 ">
                    <ul class="list-item right-aligned pt-3">
                        <div class="dropdown">
                            <button class="dropbtn">PHOTO &#9660</button>
                            <div class="dropdown-content">
                                <a href="#">Ecommerce </a>
                                <a href="#">Fashion</a>
                                <a href="#">Documentery</a>
                            </div>
                        </div>
                        <li><a href="">FILMS</a></li>
                        <li><a href="{{route('collaborators')}}">COLLABORATORS</a></li>
                        <!-- <li><a href="{{route('studio')}}">ENDORSEMENT</a></li> -->
                        <li><a href="{{route('about')}}">ABOUT</a></li>
                        <li><a href="{{route('contact')}}">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>