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

function books($books) {
    foreach ($books as $book) {
        echo '
        <section class="book_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <form action="answer.php" method="POST">
                  <h4>' . htmlspecialchars($book['firsttext']) . '<span>' . htmlspecialchars($book['secondtext']) . '</span></h4>
                  
                  <div class="form-row">
                    <div class="form-group col-lg-4">
                      <label for="inputPatientName">' . htmlspecialchars($book['firstlabel']) . '</label>
                      <input type="text" class="form-control" id="inputPatientName" placeholder="" name="patient_name">
                    </div>

                    <div class="form-group col-lg-4">
                      <label for="inputDoctorName">' . htmlspecialchars($book['secondlabel']) . '</label>
                      <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                        <option value="' . htmlspecialchars($book['firstinput']) . '">' . htmlspecialchars($book['firstinput']) . '</option>
                        <option value="' . htmlspecialchars($book['secondinput']) . '">' . htmlspecialchars($book['secondinput']) . '</option>
                        <option value="' . htmlspecialchars($book['thirdinput']) . '">' . htmlspecialchars($book['thirdinput']) . '</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4">
                      <label for="inputDepartmentName">' . htmlspecialchars($book['thirdlabel']) . '</label>
                      <select class="form-control wide" id="inputDepartmentName" name="department_name">
                        <option value="' . htmlspecialchars($book['depname1']) . '">' . htmlspecialchars($book['depname1']) . '</option>
                        <option value="' . htmlspecialchars($book['depname2']) . '">' . htmlspecialchars($book['depname2']) . '</option>
                        <option value="' . htmlspecialchars($book['depname3']) . '">' . htmlspecialchars($book['depname3']) . '</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-lg-4">
                      <label for="inputPhone">' . htmlspecialchars($book['fourthlabel']) . '</label>
                      <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX">
                    </div>

                    <div class="form-group col-lg-4">
                      <label for="inputSymptoms">' . htmlspecialchars($book['fifthlabel']) . '</label>
                      <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="">
                    </div>

                    <div class="form-group col-lg-4">
                      <label for="inputDate">' . htmlspecialchars($book['sixthlabel']) . '</label>
                      <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                        <input type="text" class="form-control" name="date" readonly>
                        <span class="input-group-addon date_icon">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="btn-box">
                    <button type="submit" class="btn">' . htmlspecialchars($book['seventhlabel']) . '</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>';
    }
}

function about($abouts){
    foreach($abouts as $about){
    echo    '<section class="about_section">' .
    '<div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">' .
            '<img src="'.$about['image'].'" alt="">' .
          '</div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>' .
                $about['firsttext'] . '<span>' . $about['secondtext'] .'</span>' .
              '</h2>
            </div>
            <p>' .
             $about['thirdtext'] .
            '</p>' .
            '<a href="">' .
              $about['fourthtext'] .
            '</a>
          </div>
        </div>
      </div>
    </div>
  </section>';
   }
};

function treatment($treatments){
    foreach($treatments as $treatment) {
    echo    '<section class="treatment_section layout_padding">
    <div class="side_img">
      <img src=" ' . $treatment['img'] . '" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>' .
          $treatment['firsttext'] . '<span>' .$treatment['secondtext']. '</span>' .
        '</h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src=" ' . $treatment['img2'] . ' " alt="">
            </div>
            <div class="detail-box">
              <h4>' .
                $treatment['thirdtext'] .
              '</h4>
              <p>' .
              $treatment['fourthtext']  .
              '</p>
              <a href="">'.
                $treatment['fifthtext'].
              '</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src=" ' . $treatment['img3'] . ' " alt="">
            </div>
            <div class="detail-box">
              <h4>' .
                $treatment['sixthtext'] .
              '</h4>
              <p>' .
                $treatment['seventhtext'] .
                '</p>
              <a href="">'.
                $treatment['eighttext']. 
              '</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src=" ' . $treatment['img4'] . ' " alt="">
            </div>
            <div class="detail-box">
              <h4>' .
                $treatment['tenthtext'] .
              '</h4>
              <p>' .
               $treatment['eleventhtext'] .
              '</p>
              <a href=""> '.
                $treatment['twelvetext'] .
              '</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src=" ' . $treatment['img5'] . '" alt="">
            </div>
            <div class="detail-box">
              <h4> ' .
                $treatment['therteentext'].
              '</h4>
              <p>' .
                $treatment['fourthteenthtext'] .
              '</p>
              <a href="">'.
                $treatment['fifthteentext'] .
              '</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
    }
};

function doctors($doctors) {
  foreach ($doctors as $doctor) {
echo    '<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>'.
          $doctor['firsttext'] .'<span>' . $doctor['secondtext'] . '</span>' .
        '</h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src=" ' . $doctor['img1']. ' " alt="" />
              </div>
              <div class="detail-box">
                <h5>' .
                  $doctor['thirdtext'] .
                '</h5>
                <h6>' .
                  $doctor['fourthtext']. 
                '</h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src=" ' . $doctor['img2'] . ' " alt="" />
              </div>
              <div class="detail-box">
                <h5>'.
                  $doctor['fifthtext'] .
                '</h5>
                <h6>' .
                  $doctor['fourthtext'] .
                '</h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src=" ' . $doctor['img3'] . ' " alt="" />
              </div>
              <div class="detail-box">
                <h5>' .
                  $doctor['sixthtext'] .
                '</h5>
                <h6>' .
                  $doctor['fourthtext'] .
                '</h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
  }
};

function client($clients){
    foreach ($clients as $client){
     echo '<section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            <span>' . $client['firsttext'] . '</span>
          </h2>
        </div>
      </div>
      <div class="container px-0">
        <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>'.
                      $client['secondtext'] .
                    '</h5>
                    <h6>' .
                      $client['thirdtext'] .
                    '</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>' .
                 $client['fourthtext'] .
                '</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5> ' .
                      $client['fifthtext'] .
                    ' </h5>
                    <h6>' .
                      $client['thirdtext'] .
                    '</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>' .
                 $client['sixthtext'] .
                '</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>'.
                      $client['seventhtext'] .
                    '</h5>
                    <h6>'.
                      $client['thirdtext'] .
                    '</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>' .
                 $client['eighttext'] .
                '</p>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>';
    }
  };


function getintouch($getintouchs) {
   foreach ($getintouchs as $getintouch) {
     echo '
  <section class="contact_section layout_padding-bottom">
   <div class="container">
  <div class="heading_container">' .
   '<h2>' . $getintouch['text'] . '</h2>' .
   '</div>
   <div class="row">
   <div class="col-md-7">
   <div class="form_container">
   <form action="submitted.php">
   <div>
   <input type="text" placeholder="'.$getintouch['fullname'].'" />
   </div>
   <div>
   <input type="email" placeholder="'.$getintouch['Email'].'" />
   </div>
   <div>
   <input type="text" placeholder="'.$getintouch['number'].'" />
   </div>
   <div>
   <input type="text" class="message-box" placeholder="'.$getintouch['message'].'" />
   </div>
   <div class="btn_box">' .
  '<button>' .$getintouch['button'] . '</button>' .
  '</div>
   </form>
   </div>
   </div>
  <div class="col-md-5">
   <div class="img-box">
   <img src="' . $getintouch['image'] . '" alt="Contact Image">
  </div>
   </div>
  </div>
   </div>
  </section>';
   }
};
  
function infoinfo($infos){
  foreach ($infos as $info) {
   echo '<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">' .
           '<img src=" ' . $info['img1'] . ' " alt="">' .
          '</a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>'.
              $info['firsttext'] .
            '</button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>'.
              $info['secondtext'] .
            '</h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>'.
                  $info['thirdtext'] .
                '</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> ' .
                  $info['fourthtext'] .
                '</span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span> ' .
                  $info['gmail'] .
                '</span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5> ' .
                $info['fifthtext'] .
              '</h5>
              <div class="info_links_menu">
                <a class="active" href="index.html"> ' .
                  $info['sixthtext'] .
                '</a>
                <a href="about.php">'.
                  $info['seventhtext'] .
                '</a>
                <a href="treatment.php">'.
                  $info['eighttext'] .
                '</a>
                <a href="doctor.php">'.
                  $info['ninthtext'] .
                '</a>
                <a href="testimonial.php"> '.
                  $info['tenthtext'] .
                '</a>
                <a href="contact.php">'.
                  $info['eleventhtext'] .
                '</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>'.
                $info['twevethtext'] .
              '</h5>
              <div class="post_box">
                <div class="img-box">
                  <img src=" ' . $info['img2'] . ' " alt="">
                </div>
                <p>' .
                 $info['mecametetext'] .
                '</p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src=" ' . $info['img3'] . ' " alt="">
                </div>
                <p> ' .
                  $info['mecametetext'] .
                '</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>'.
                $info['metotxmetetext'] .
              '</h5>
              <div class="post_box">
                <div class="img-box">
                  <img src=" ' . $info['img4'] . ' " alt="">
                </div>
                <p>'.
                  $info['mecametetext'] .
                '</p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src=" ' . $info['img5']. ' " alt="">
                </div>
                <p>'.
                  $info['mecametetext'].
                '</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
  }
};

function footer($footers) {
  foreach ($footers as $footer) {
    echo '<footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span>' . $footer['firsttext'] .
        '<a href="https://html.design/">'. $footer['secondtext'] . '</a>
      </p>
    </div>
  </footer>';
  }
};


?>