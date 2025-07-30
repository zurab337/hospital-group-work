<?php
function headerSection($navs, $botnavs) {
  foreach ($navs as $nav) foreach ($botnavs as $botnav) {
    echo "<div class='hero_area'>
    <header class='header_section'>
        <div class='header_top'>
            <div class='container'>
                <div class='contact_nav'>
                    <a href='#'>
                        <i class='fa fa-phone' aria-hidden='true'></i>
                        <span>Call : {$nav['number']}</span>
                    </a>
                    <a href='#'>
                        <i class='fa fa-envelope' aria-hidden='true'></i>
                        <span>Email : {$nav['email']}</span>
                    </a>
                    <a href='#'>
                        <i class='fa fa-map-marker' aria-hidden='true'></i>
                        <span>{$nav['location']}</span>
                    </a>
                </div>
            </div>
        </div>

        <div class='header_bottom'>
            <div class='container-fluid'>
                <nav class='navbar navbar-expand-lg custom_nav-container'>
                    <a class='navbar-brand' href='index.php'>
                        <img src='{$botnav['logo']}' alt='Logo'>
                    </a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class=''></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <div class='d-flex mr-auto flex-column flex-lg-row align-items-center'>
                            <ul class='navbar-nav'>
                                <li class='nav-item active'><a class='nav-link' href='index.php'>{$botnav['firstnav']} <span class='sr-only'>(current)</span></a></li>
                                <li class='nav-item'><a class='nav-link' href='about.php'>{$botnav['secondnav']}</a></li>
                                <li class='nav-item'><a class='nav-link' href='treatment.php'>{$botnav['thirdnav']}</a></li>
                                <li class='nav-item'><a class='nav-link' href='doctor.php'>{$botnav['fourthnav']}</a></li>
                                <li class='nav-item'><a class='nav-link' href='testimonial.php'>{$botnav['fifthnav']}</a></li>
                                <li class='nav-item'><a class='nav-link' href='contact.php'>{$botnav['sixthnav']}</a></li>
                            </ul>
                        </div>
                        <div class='quote_btn-container'>
                            <a href='#'><i class='fa fa-user' aria-hidden='true'></i><span>{$botnav['login']}</span></a>
                            <a href='#'><i class='fa fa-user' aria-hidden='true'></i><span>{$botnav['signup']}</span></a>
                            <form class='form-inline'>
                                <button class='btn my-2 my-sm-0 nav_search-btn' type='submit'>
                                    <i class='fa fa-search' aria-hidden='true'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>";
}
};


function slider($slides) {
    foreach ($slides as $slide) {
        echo ' <div class="hero_area">
            <section class="slider_section ">
                <div class="dot_design">';
        echo '<img src="' . $slide["dot_desing"] . '" alt="Contact Image">';
        echo '</div>
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <div class="play_btn">
                                                <button>
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                </button>
                                            </div>' .
                                            '<h1>' .
                                                $slide["firsttext"] . '<br>' .
                                                '<span>' .
                                                    $slide["secondtext"] .
                                                '</span>' .
                                            '</h1>' .
                                            '<p>' .
                                                $slide["thirdtext"] .
                                            '</p>' .
                                            '<a href="">' .
                                                $slide["button"] .
                                            '</a>' .
                                        '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-box">' .
                                            ' <img src="'. $slide["sliderimg"] .'" alt="">' .
                                        '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <div class="play_btn">
                                                <button>
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                </button>
                                            </div>' .
                                            '<h1>' .
                                                $slide["firsttext"] . '<br>' .
                                                '<span>' .
                                                    $slide["secondtext"] .
                                                '</span>' .
                                            '</h1>' .
                                            '<p>' .
                                                $slide["thirdtext"] .
                                            '</p>' .
                                            '<a href="">' .
                                                $slide["button"] .
                                            '</a>' .
                                        '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-box">' .
                                            ' <img src="'. $slide["sliderimg"] .'" alt="">' .
                                        '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <div class="play_btn">
                                                <button>
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                </button>
                                            </div>' .
                                            '<h1>' .
                                                $slide["firsttext"] . '<br>' .
                                                '<span>' .
                                                    $slide["secondtext"] .
                                                '</span>' .
                                            '</h1>' .
                                            '<p>' .
                                                $slide["thirdtext"] .
                                            '</p>' .
                                            '<a href="">' .
                                                $slide["button"] .
                                            '</a>' .
                                        '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-box">' .
                                            ' <img src="'. $slide["sliderimg"] .'" alt="">' .
                                        '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_btn-box">
                        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">' .
                            '<img src="' .$slide["prevpng"] .'" alt="">' .
                            '<span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">' .
                            '<img src="' .$slide["nextpng"] .'" alt="">' .
                            '<span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>';
        echo "</div>";
    }
};


?>