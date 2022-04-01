<?php
if (get_field('fdfd_category')){
    if(file_exists(get_template_part('template-parts/slider', get_field('fdfd_category')))){
        echo get_template_part('template-parts/slider', get_field('fdfd_category'));
    }
}
?>