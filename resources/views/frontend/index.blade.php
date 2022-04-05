@extends('frontend.layout')

@section('content')

<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
           <li style="background-image: url(frontend/images/img_bg_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center slider-text">
                           <div class="slider-text-inner">
                               <h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
                                <h2>Happy Learning</h2>
                                <p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(frontend/images/img_bg_2.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center slider-text">
                           <div class="slider-text-inner">
                               <h1>The Great Aim of Education is not Knowledge, But Action</h1>
                               <h2>Happy Learning</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(frontend/images/img_bg_3.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center slider-text">
                           <div class="slider-text-inner">
                               <h1>We Help You to Learn New Things</h1>
                               <h2>Happy Learning</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>		   	
          </ul>
      </div>
</aside>

<div id="fh5co-course-categories">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Course categories</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">

            @foreach ($categoris as $categori)
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-shop"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">{{$categori->title}}</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-world"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Foreign Followers</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-study"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Students Enrolled</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-bulb"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Classes Complete</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-head"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Certified Teachers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-course">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Our Course</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-md-6 animate-box">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url({{asset('images')}}/{{$course->image}});">
                    </a>
                    <div class="desc">
                        <h3><a href="#">{{$course->title}}</a></h3>
                        <p>{{$course->description}}</p>
                        <span><a href="{{url('/course/'.$course->id)}}" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div id="fh5co-testimonial" style="background-image: url(frontend/images/school.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2><span>Testimonials</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(frontend/images/person1.jpg);"></div>
                                <span>Mary Walker<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(frontend/images/person2.jpg);"></div>
                                <span>Mike Smith<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(frontend/images/person3.jpg);"></div>
                                <span>Rita Jones<br><small>Teacher</small></span>
                                <blockquote>
                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Blog &amp; Events</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row row-padded-mb">
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">New Device Develope by Microsoft</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(frontend/images/project-1.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(frontend/images/project-2.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(frontend/images/project-3.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>



<div id="fh5co-register" style="background-image: url(frontend/images/img_bg_2.jpg);">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 animate-box">
            <div class="date-counter text-center">
                <h2>Get 400 of Online Courses for Free</h2>
                <h3>By Mike Smith</h3>
                <div class="simply-countdown simply-countdown-one"></div>
                <p><strong>Limited Offer, Hurry Up!</strong></p>
                <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-gallery" class="fh5co-bg-section">
    <div class="row text-center">
        <h2><span>Instagram Gallery</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(frontend/images/project-5.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(frontend/images/project-2.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(frontend/images/project-3.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(frontend/images/project-4.jpg);"></a>
        </div>
    </div>
</div>


</div>
@endsection