@include('layouts.app')

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_content">
                        <h2>Welcome to <span class="typed-words"></span></h2>

                        <div class="search_course_wrap">
                            <form action="search-teacher.php" class="form_box d-flex justify-content-between w-100" method="post" name="search">
                                <input type="text" placeholder="Search by Position" class="form-control" name="searchteacher">
                                <button type="submit" class="btn search_course_btn" name="search" id="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->


<!--================ Start Footer Menu Area =================-->
<footer class="footer-area section_gap">
    <div class="container" align="center">
        <h3 class="mb-0 site-logo"><a href="/" style="color:#fff h2 mb-0"> E -<span
        class="text-white h2 mb-0"> Management System</span></a></h3>

        <span style="color:#fff" >&copy; <p class="copyright ">copyright <a href="/">TG-MAN </a>© 2019</p></span>
    </div>
</footer>
<!--================ End Footer Menu Area =================-->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

        <script>
            var typed = new Typed('.typed-words', {
            strings: ["Employee Management System"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 5000,
            startDelay: 200,
            loop: true,
            showCursor: false
            });
        </script>
