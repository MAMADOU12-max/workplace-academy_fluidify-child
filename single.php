<?php get_header();?>

<?php
global $post;

$posttags = get_the_tags();

 //Image
 $image = get_the_post_thumbnail_url($post->ID);
 if(!$image)
     $image = get_stylesheet_directory_uri() . 'img/blog/2.jpg';
 
 $author = get_field('profile_img',  'user_' . $post->post_author);
 if(!$author)
     $author = get_stylesheet_directory_uri() . 'img/blog/blog-author.jpg';

 $biographical = get_field('biographical_info',  'user_' . $post->post_author);

 $functie = get_field('role',  'user_' . $post->post_author);

?>

<div class="main-wrapper ">

    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="<?php echo $image; ?>" alt="" class="img-fluid rounded">

                                <div class="blog-item-content bg-white blogPadding">
                                    <div class="blog-item-meta bg-gray py-1 px-2">
                                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?php echo $posttags[0]->name; ?></span>
                                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>0 Comments</span>
                                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?php echo get_the_date('d F'); ?></span>
                                    </div> 

                                    <h2 class="mt-3 mb-4"><?php echo the_title();?></h2>
                                    <?php the_content();?>

                                    <div class="tag-option mt-5 clearfix">
                                        <ul class="float-left list-inline"> 
                                            <li>Tags:</li> 
                                            <?php foreach($posttags as $posttag) { ?>
                                                <li class="list-inline-item"><a href="#" rel="tag"><?php echo $posttag->name; ?></a></li>
                                            <?php } ?>
                                        </ul>        

                                        <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 mb-5">
                            <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">

                                <?php
                                $prev = get_previous_post();

                                $prev_link = get_permalink($prev);

                                ?>
                                <a class="post-prev align-items-center" href="<?php echo $prev_link;?>">
                                    <div class="posts-prev-item mb-4 mb-lg-0">
                                        <span class="nav-posts-desc text-color">- Previous Post</span>

                                        <h6 class="nav-posts-title mt-1">
                                            <?php echo get_the_title($prev);?>
                                        </h6>
                                    </div>
                                </a>
                                <div class="border"></div>

                                <?php
                                $next = get_next_post();

                                $next_link = get_permalink($next);

                                ?>
                                <a class="posts-next" href="<?php echo $next_link;?>">
                                    <div class="posts-next-item pt-4 pt-lg-0">
                                        <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
                                        <h6 class="nav-posts-title mt-1">
                                            <?php echo get_the_title($next);?>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--
<div class="col-lg-12 mb-5">
<div class="comment-area card border-0 p-5">
<h4 class="mb-4">2 Comments</h4>
<ul class="comment-tree list-unstyled">
<li class="mb-5">
<div class="comment-area-box">
<img alt="" src="img/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2">

<h5 class="mb-1">Philip W</h5>
<span>United Kingdom</span>

<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
<span class="date-comm">Posted October 7, 2018 </span>
</div>

<div class="comment-content mt-3">
<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
</div>
</div>
</li>

<li>
<div class="comment-area-box">
<img alt="" src="img/blog/test2.jpg" class="mt-2 img-fluid float-left mr-3">

<h5 class="mb-1">Philip W</h5>
<span>United Kingdom</span>

<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
<span class="date-comm">Posted October 7, 2018</span>
</div>

<div class="comment-content mt-3">
<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
</div>
</div>
</li>
</ul>
</div>
</div>

<div class="col-lg-12">
<form class="contact-form bg-white rounded p-5" id="comment-form">
<h4 class="mb-4">Write a comment</h4>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
</div>
</div>
</div>

<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
</form>
</div>
-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        <div class="sidebar-widget card border-0 mb-3">
                            <img src="<?php echo $author; ?>" alt="" class="img-fluid">
                            <div class="card-body p-4 text-center">
                                <h5 class="mb-0 mt-4"><?php echo(get_userdata($post->post_author)->data->display_name); ?></h5>
                                <p><?php echo $functie; ?></p>
                                <p><?php echo $biographical; ?></p>

                                <ul class="list-inline author-socials">
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                            <h5>Latest Posts</h5>
                            
                            <?php
                            $latests = wp_get_recent_posts(array('numberposts' => 3));
                            
                            foreach($latests as $latest){
                            ?>
                            
                            <div class="media border-bottom py-3">
                                <a href="<?php echo get_the_permalink($latest['ID']);?>"><img class="mr-4" src="img/blog/bt-3.jpg" alt=""></a>
                                <div class="media-body">
                                    <h6 class="my-2"><a href="#"><?php echo get_the_title($latest['ID']);?></a></h6>
                                    <span class="text-sm text-muted"><?php echo get_the_date('d-m-Y',$latest['ID']);?></span>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                        <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                            <h5 class="mb-4">Tags</h5>

                            <?php
                            if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo '<a href=#">'.$tag->name . '</a>'; 
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>

</div>


<?php get_footer();?>