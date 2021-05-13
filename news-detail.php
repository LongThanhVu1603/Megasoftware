<?php 
    $page = 'six';
    include'header.php';
?>

    <!-- Container -->

        <!-- Section 1 -->
            <div class="container-fluid bg-intro-section-one">
                    <div class="intro-head">
                        <h1> Tin Tức Từ Megasoft </h1>
                        <h3> Trang chủ / Tin Tức </h3>
                        <h3><a href="./news.php">👈 Quay Lại</a></h3>
                    </div>
            </div>
        <!-- End Section 1 -->
        
        <!-- Content -->
        
        <!-- End Content -->

        <!-- Share and Comment -->
        <div class="container">
            <hr class="my">
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8888%2FDoan%2Fnews-detail.html&layout=button&size=large&width=87&height=28&appId" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <hr class="my">

            <div class="be-comment-block">
                <h1 class="comments-title"> Bình Luận </h1>

                <form class="form-block">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input class="form-input" type="text" placeholder="Nhập Tên Của Bạn...">
                        </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <input class="form-input" type="text" placeholder="Nhập Email Của Bạn...">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="Nhập Ý Kiến Của Bạn..."></textarea>
                        </div>
                        </div>
                        <a class="btn btn-primary pull-right">Gửi</a>
                    </div>
                </form>

                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        
                            <span class="be-comment-name">
                                <a href="blog-detail-2.html">Ravi Sah</a>
                                </span>
                            <span class="be-comment-time">
                                <i class="fa fa-clock-o"></i>
                                May 27, 2015 at 3:14am
                            </span>
            
                        <p class="be-comment-text">
                            Pellentesque gravida tristique ultrices. 
                            Sed blandit varius mauris, vel volutpat urna hendrerit id. 
                            Curabitur rutrum dolor gravida turpis tristique efficitur.
                        </p>
                    </div>
                </div>

                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            May 27, 2015 at 3:14am
                        </span>
                        <p class="be-comment-text">
                            Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
                        </p>
                    </div>
                </div>

                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">Cüneyt ŞEN</a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            May 27, 2015 at 3:14am
                        </span>
                        <p class="be-comment-text">
                            Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- End Share and Comment  -->

<?php include 'footer.php'; ?>