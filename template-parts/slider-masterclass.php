<?php
    $blog=array();
    $loop_blog = new WP_Query( 'posts_per_page=3' ); 
    while ( $loop_blog->have_posts() ) : $loop_blog->the_post();
    $blog[]=array(
        'title'=>the_title_attribute( 'echo=0' ),
        'content'=>get_the_content(),
        'image'=>get_the_post_thumbnail_url(),
        'link'=>get_field('link'),
        'except'=>get_the_excerpt(),
        'id'=>get_the_ID()
    );
    // the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
    // the_content();
    // the_post_thumbnail('thumbnail');
    endwhile;
   // var_dump($blog);
?>
<style>
    .limit-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        line-height: 21px;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
    }
    .limit-title {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        /* line-height: 21px; */
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>

<div class="theme-section pt-1  bg__lightblue">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5">
                <div class="row ">
                    <?php
                        foreach ($blog as $key => $value) {
                    ?>           
                      
                        <div class="col-md-4 d-flex justify-content-center px-md-2 px-1">
                            <a href="<?php echo get_the_permalink($value['id']);?>">
                                <div class="card my-md-2 my-3 mx-0" style="max-width: 25rem;">
                                    <img src="<?php echo $value["image"];?>"
                                    class="card-img-top" alt="Fissure in Sandstone" style="height:14rem"/>
                                    <div class="card-body text-dark " style="height:16rem">
                                        <h5 class="card-title limit-title"> <?php echo $value["title"] ?> </h5>
                                        <p class="card-text limit-text"> <?php echo $value["except"] ?> </p>
                                    </div>
                                </div>
                            </a>        
                        </div>
                        
                    <?php
                        }             
                    ?>
                </div>

            </div>
        </div> 

        <div class="row">
            <div class="col-12 d-flex justify-content-center my-4">
                <a type="button" class="btn background__secondary text-white mt-3 px-5" href="/blog">
                    <strong>Alle artikelen</strong>  
                </a>
            </div>
        </div>

    </div>
</div>