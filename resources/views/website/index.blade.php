
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from md-shefat-masum.github.io/beatles/?fbclid=IwAR1jn-l6QnOoK4kPOfqjCh0h5iavY0ijQgdgqMFzXMpUQ-FzYuuSSoE4Jwg by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:45:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>beatles psd to html</title>
    <link rel="stylesheet" href=" {{ asset('contents/website') }}/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('contents/website') }}/css/style.css">
</head>
<body>
    <!-- -------------------------------->
    <!-- top header part start-->
    <!-- -------------------------------->
    <div class="contentwrapper topheaderpartbg">
        <div class="content topheaderpartbody">
            <div class="sitedetails">
                <p>Welcome to Beatles</p>
            </div>
            <div class="linkicons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- -------------------------------->
    <!-- top header part end-->
    <!-- -------------------------------->

    <!-- -------------------------------->
    <!-- header part start -->
    <!-- -------------------------------->
    <div class="contentwrapper headerpartbg">
        <div class="content headerpartbody">
            <div class="logo">
                <a href="#"><img src=" {{ asset('contents/website')}}/images/Beatles.png" alt=""></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">testimonial</a></li>
                    <li><a href="#">blogs</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--     header part end -->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--     banner part start -->
    <!--    -------------------------------->

    <div class="contentwrapper banenrbg" style="background-image: url('{{ $data->image }}')">
        <div class="banneroverlay">
            <div class="content bannerbody">
                <div class="bannercontent">

                    <h4>{{ $data->p_header }}</h4>
                    <h2>{{ $data->header }}</h2>
                    <p>{{ $data->description }}</p>
                    <a href="#">hire us</a>
                    <a href="#">contact</a>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <!--    -------------------------------->
    <!--    banner part end -->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--    about us part start-->
    <!--    -------------------------------->
    <div class="contentwrapper aboutbg">
        <div class="content aboutbody">
            <div class="commonheading">
                <h3>about us</h3>
                <div class="underline">
                    <img src=" {{ asset('contents/website')}}/images/under-line.png" alt="">
                </div>
            </div>
            <div class="leftimage">
                {{-- <img src=" {{ asset }} url('{{ $data->image }}')/images/about-us-left-image.png" alt="aboutus"> --}}
                <img src="/{{$data->image }}">
            </div>
            <div class="rightcontens">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--    about us part end-->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--     our services start -->
    <!--    -------------------------------->
    <div class="contentwrapper aboutuspartbg">
        <div class="content aboutuspartbody">
            <div class="commonheading">
                <h3>our services</h3>
                <div class="underline">
                    <img src=" {{ asset('contents/website')}}/images/under-line.png" alt="">
                </div>
            </div>

            <div class="aboutuscontentbg ">
                <div class="aboutuscontentbody">
                    <div class="abouticon">
                        <div class="abouticoninnercircle">
                            <img src=" {{ asset('contents/website')}}/images/graphics.png" alt=""></div>
                    </div>
                    <h4>graphic design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetpisg elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="aboutuscontentbg marginleft">
                <div class="aboutuscontentbody">
                    <div class="abouticon">
                        <div class="abouticoninnercircle">
                            <img src=" {{ asset('contents/website')}}/images/graphic2.png" alt=""></div>
                    </div>
                    <h4>graphic design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetpisg elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="aboutuscontentbg marginleft">
                <div class="aboutuscontentbody">
                    <div class="abouticon">
                        <div class="abouticoninnercircle">
                            <img src=" {{ asset('contents/website')}}/images/graphic3.png" alt=""></div>
                    </div>
                    <h4>graphic design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetpisg elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- -------------------------------->
    <!-- our services part end -->
    <!-- -------------------------------->

    <!-- -------------------------------->
    <!-- port port folio part start -->
    <!-- -------------------------------->
    <div class="contentwrapper portfoliopartbg">
        <div class="content portfoliopartbody">
            <div class="commonheading">
                <h3>our portfolio</h3>
                <div class="underline">
                    <img src=" {{ asset('contents/website')}}/images/under-line.png" alt="">
                </div>
            </div>

            <div class="imagerow">
                <div class="small marginbottom margin">
                    <img src=" {{ asset('contents/website')}}/images/firstrow-up.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="big">
                    <img src=" {{ asset('contents/website')}}/images/firstrow-bottom.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="imagerow marginleft">
                <div class="big marginbottom">
                    <img src=" {{ asset('contents/website')}}/images/secondrow-up.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="small">
                    <img src=" {{ asset('contents/website')}}/images/secondrow-bottom.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="imagerow marginleft">
                <div class="small marginbottom">
                    <img src=" {{ asset('contents/website')}}/images/thirdrow-up.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="big">
                    <img src=" {{ asset('contents/website')}}/images/thirdrow-bottom.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="imagerow marginleft">
                <div class="big marginbottom">
                    <img src=" {{ asset('contents/website')}}/images/fourthrow-up.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="small">
                    <img src=" {{ asset('contents/website')}}/images/fourthrow-bottom.png" alt="">
                    <div class="overlayimage">
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--     port port folio part end -->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--     Our team part-->
    <!--    -------------------------------->
    <div class="contentwrapper ourteampartbg">
        <div class="content ourteampartbody">
            <div class="commonheading">
                <h3>our team</h3>
                <div class="underline">
                    <img src=" {{ asset('contents/website')}}/images/under-line.png" alt="">
                </div>
            </div>

            <div class="teamdetails">
                <div class="teamimage">
                    <img src=" {{ asset('contents/website')}}/images/memberpic1.png" alt="memberpic1">
                    <div class="overlayteam">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <h5>Sajal Sarder</h5>
                <h6>Web Designer</h6>
            </div>

            <div class="teamdetails marginleft">
                <div class="teamimage">
                    <img src=" {{ asset('contents/website')}}/images/memberpic2.png" alt="memberpic1">
                    <div class="overlayteam">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <h5>sakeba aney</h5>
                <h6>Web Designer</h6>
            </div>

            <div class="teamdetails marginleft">
                <div class="teamimage">
                    <img src=" {{ asset('contents/website')}}/images/memberpic3.png" alt="memberpic1">
                    <div class="overlayteam">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <h5>abs ujjal</h5>
                <h6>Web Designer</h6>
            </div>

            <div class="teamdetails marginleft">
                <div class="teamimage">
                    <img src=" {{ asset('contents/website')}}/images/memberpic4.png" alt="memberpic1">
                    <div class="overlayteam">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <h5>aney irin</h5>
                <h6>Web Designer</h6>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--     Our team part end-->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--     testimonial part-->
    <!--    -------------------------------->
    <div class="contentwrapper testimonialbg">
        <div class="content testimonialbody">
            <div class="commonheading">
                <h3>testimonial</h3>
                <div class="underline">
                    <img src=" {{ asset('contents/website')}}/images/under-line.png" alt="">
                </div>
            </div>
            <div class="testimonialdetails">
                <div class="testimonalimage">
                    <img src=" {{ asset('contents/website')}}/images/testimonialleft.png" alt="">
                </div>
                <div class="testimonialdescription">
                    <h4>Shahin alom</h4>
                    <p><i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </p>
                    <h5>Chairman</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="testimonialdetails marginleft">
                <div class="testimonalimage">
                    <img src=" {{ asset('contents/website')}}/images/testimonialright.png" alt="">
                </div>
                <div class="testimonialdescription">
                    <h4>mahadi tahsan</h4>
                    <p><i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </p>
                    <h5>exicutive director</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--    testi monial part end-->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--    detail footer-->
    <!--    -------------------------------->
    <div class="contentwrapper upperfooterbg">
        <div class="content upperfooterbody">
            <div class="column1">
                <div class="flogo">
                    <img src=" {{ asset('contents/website')}}/images/footerlogo.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, conser adipisicing elit, sed do eiumod apor incididunt ut labore et dolore magna aliqua.</p>
                <p>Lorem ipsum dolor sit amet, conser adipisicing elit.</p>
            </div>

            <div class="column2 marginleft">
                <div class="footerheading">
                    <h5>Contact us</h5>
                </div>
                <div class="contact">
                    <div class="logo">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="details">
                        <p>+018 123456789</p>
                        <p>+018 123456789</p>
                    </div>
                </div>
                <div class="contact">
                    <div class="logo">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="details">
                        <p>beatlsinfo@gmail.com</p>
                        <p>beatlsinfo@gmail.com</p>
                    </div>
                </div>
                <div class="contact">
                    <div class="logo">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <p>www.beatlsinformation.com</p>
                        <p>www.beatlsinformation.com</p>
                    </div>
                </div>
            </div>

            <div class="column3 marginleft">
                <div class="footerheading">
                    <h5>Important Links</h5>
                </div>
                <div class="leftnavs">
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">about us</a> </li>
                        <li><a href="#">portfolio</a></li>
                        <li><a href="#">our team</a></li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
                <div class="rightnavs marginleft">
                    <ul>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">feedback</a></li>
                    </ul>
                </div>
            </div>

            <div class="column4 marginleft">
                <div class="footerheading">
                    <h5>Flickr photos</h5>
                </div>
                <div class="footergallery fgmarginbottom">
                    <div class="gpart">
                        <div class="fgimage">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr1.png" alt=""></a>
                        </div>
                        <div class="fgimage fgmarginleft">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr2.png" alt=""></a>
                        </div>
                        <div class="fgimage fgmarginleft">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="footergallery">
                    <div class="gpart">
                        <div class="fgimage">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr4.png" alt=""></a>
                        </div>
                        <div class="fgimage fgmarginleft">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr5.png" alt=""></a>
                        </div>
                        <div class="fgimage fgmarginleft">
                            <a href="#"><img src=" {{ asset('contents/website')}}/images/flikr6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--    detail footer end-->
    <!--    -------------------------------->

    <!--    -------------------------------->
    <!--    footer part --->
    <!--    -------------------------------->
    <div class="contentwrapper footerbg">
        <div class="content footerbody">
            <p>Copyright &copy; 2017. All rights reserved by <span>BEATLS</span></p>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--    -------------------------------->
    <!--    footer part end --->
    <!--    -------------------------------->
</body>


<!-- Mirrored from md-shefat-masum.github.io/beatles/?fbclid=IwAR1jn-l6QnOoK4kPOfqjCh0h5iavY0ijQgdgqMFzXMpUQ-FzYuuSSoE4Jwg by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:45:33 GMT -->
</html>
