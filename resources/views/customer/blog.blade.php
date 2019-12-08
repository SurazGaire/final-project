@extends('customer.master')
@section('content')
@include('customer.partials.header')

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Recent Blogs</h1>
    </div>
</div>


<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Latest News</h1>
        <div class="breadcrumbs-description">
            Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#"><i class="icofont-ui-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Latest News</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">
    <section class="sidebar-overflow">
        <div class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="single-content-gap">
                            <!-- Blog Items -->
                            <div class="col-md-12">
                                <div class="text-left single-content">
                                    <div class="about-img mt-0">
                                        <img src="images/services_img_2.jpg" alt="" class="mb-5">
                                    </div>
                                    <div class="meta-box mb-2">
                                        <span>Jan 16, 2019</span>
                                        <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                    </div>
                                    <h4 class="h4-md mb-3">Preparing Your Pipes for the Winter</h4>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

                                    <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>

                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                                </div>

                                <!-- Tags & Share Box -->
                                <div class="row align-items-center mt-5">
                                    <div class="col-md-auto">
                                        <div class="tags">
                                            <a href="#">Outstanding</a>
                                            <a href="#">Lifestyle</a>
                                            <a href="#">Travel</a>
                                        </div>
                                    </div>
                                    <div class="col-md-auto ml-auto">
                                        <div class="share-this">
                                            <div class="d-inline-flex align-items-center">
                                                Share it:
                                                <a href="#" class="rounded-circle tw" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="rounded-circle ff" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="icofont-facebook"></i></a>
                                                <a href="#" class="rounded-circle ln" data-toggle="tooltip" title="" data-original-title="Linkedin"><i class="icofont-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tags & Share Box -->

                                <!-- Author Single Box -->
                                <div class="wide-tb-70">
                                    <div class="author-box rounded">
                                        <div class="media">
                                            <div class="thumb">
                                                <img src="images/team_1.jpg" alt="" class="rounded-circle thumb">
                                            </div>
                                            <div class="service-inner-content media-body">
                                                <h4 class="h4-xs txt-blue">Author: Brad Thomas</h4>
                                                Explain to you how all this mistaken idea of hovered link and praising pain was born and I will give you a complete account of the system expound the actual teachings
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Author Single Box -->

                                <!-- Comments List -->
                                <div class="commnets-reply">
                                    <div class="heading-left-border">
                                        3 COMMENTS
                                    </div>
                                    <div class="media pb-5">
                                        <img class="thumb rounded-circle" src="images/team_2.jpg" alt="">
                                        <div class="media-body">
                                            <div class="border-style d-md-flex justify-content-between">
                                                <h4 class="h4-xs txt-orange">Anonymous</h4>
                                                <div class=""><small>September 11, 2018 at 7:33 am</small></div>
                                            </div>
                                            <p>Hi, this is a comment.</p>
                                            <p>To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                            <p><a href="#" class="btn-theme bg-navy-blue mt-3 small">Reply</a></p>
                                        </div>
                                    </div>
                                    <div class="media pb-5">
                                        <img class="thumb rounded-circle" src="images/team_3.jpg" alt="">
                                        <div class="media-body">
                                            <div class="border-style d-md-flex justify-content-between">
                                                <h4 class="h4-xs txt-orange">Mr WordPress</h4>
                                                <div class=""><small>September 11, 2018 at 7:33 am</small></div>
                                            </div>
                                            <p>Hi, this is a comment.</p>
                                            <p>To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                            <p><a href="#" class="btn-theme bg-navy-blue mt-3 small">Reply</a></p>
                                            <div class="media mt-5">
                                                <a class="pr-3" href="#">
                                                    <img src="images/team_2.jpg" alt="" class="thumb rounded-circle ">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="h4-xs txt-orange">Mr WordPress</h4>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media pb-5">
                                        <img class="thumb rounded-circle" src="images/team_1.jpg" alt="">
                                        <div class="media-body">
                                            <div class="border-style d-md-flex justify-content-between">
                                                <h4 class="h4-xs txt-orange">Anonymous</h4>
                                                <div class=""><small>September 11, 2018 at 7:33 am</small></div>
                                            </div>
                                            <p>Hi, this is a comment.</p>
                                            <p>To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                            <p><a href="#" class="btn-theme bg-navy-blue mt-3 small">Reply</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comments List -->

                                <!-- Reply Comment Form -->
                                <div class="heading-left-border">
                                    Leave a reply
                                </div>
                                <form action="#" method="post" novalidate="novalidate" class="rounded-field gray-field">
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit" class="form-btn btn-theme bg-pink">Post Comment</button>
                                    </div>
                                </form>
                                <!-- Reply Comment Form -->

                                <!-- Spacer For Medium -->
                                <div class="w-100 d-none d-sm-block spacer-70"></div>
                                <!-- Spacer For Medium -->

                                <!-- Related Post -->
                                <div class="heading-left-border">
                                    You May Also Like
                                </div>
                                <div class="row">
                                    <!-- Blog Items -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="blog-wrap-light">
                                            <a href="blog-single.html"><img src="images/blog/blog_post_1.jpg" alt=""></a>
                                            <div class="blog-content">
                                                <div class="meta-box">
                                                    <span>Jan 16, 2019</span>
                                                    <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                </div>
                                                <h4 class="h4-md mb-3"><a href="blog-single.html">Mandating Solar Panels on New Homes</a></h4>
                                                <a href="blog-single.html" class="link-blue">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Blog Items -->

                                    <!-- Blog Items -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="blog-wrap-light">
                                            <a href="blog-single.html"><img src="images/blog/blog_post_2.jpg" alt=""></a>
                                            <div class="blog-content">
                                                <div class="meta-box">
                                                    <span>Jan 16, 2019</span>
                                                    <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                </div>
                                                <h4 class="h4-md mb-3"><a href="blog-single.html">Radiant Heating Systems For Homes</a></h4>

                                                <a href="blog-single.html" class="link-blue">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Blog Items -->
                                </div>
                                <!-- Related Post -->
                            </div>
                            <!-- Blog Items -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 sidebar-right">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Search Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Search</h3>
                                    <form class="flex-nowrap col ml-auto sidebar-search p-0">
                                        <input type="text" class="form-control" placeholder="Search …">
                                        <button type="submit" class="btn"><i class="icofont-search p-0"></i></button>
                                    </form>
                                </div>
                                <!-- Search Widget End -->

                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                                    <div class="blog-list-footer">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_1.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Do Plumbers Install Gas Lines?</a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_2.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Plumbing Tips For Summer</a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_3.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Know Your Plumbing Pipe </a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center">
                                    <div class="emergency-service">
                                        <h3 class="h3-md fw-5 txt-orange mb-4 fw-6">Emergency Service</h3>
                                        <p>A team of plumbing professionals who are there when you need them, Just call.</p>
                                        <a href="#" class="btn-theme bg-pink oval mt-3">Call Us Now</a>
                                    </div>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Catagories</h3>
                                    <div class="blog-sidebar-links">
                                        <ul class="list-unstyled">
                                            <li class="active"><a href="href.html"><i class="icofont-rounded-right"></i> Business</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> Web Design</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> Graphics Design</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> E-Commerce</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> WordPress Theme</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> HTML5/CSS3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Photostream Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Customer Testimonials</h3>
                                    <div class="owl-carousel owl-theme rounded-top-arrow" id="client-testimonials-sidebar">

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_1.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_2.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_3.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_1.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                    </div>
                                </div>
                                <!-- Photostream Widget End -->

                                <!-- Text Widget Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Text Widget</h3>
                                    <p>Explain to you how all this mistaken idea of hovered link and praising pain was born and I will give you a complete count of the system expound</p>
                                </div>
                                <!-- Text Widget Widget End -->
                            </div>
                            <!-- Sidebar Secondary Start -->
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>






@include('customer.partials.footer')
@endsection