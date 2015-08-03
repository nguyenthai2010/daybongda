<?php
get_header();
?>

<?php
$category = get_queried_object();
//print_r($category);
?>

<div class="cbp-row cbp_widget_row ch-content ch-content-top ch-content-bottom ch-content-top-rainbow"><div class="ch-content-top-rainbow-edge"></div><div class="ch-content-top-edge"></div>
    <div class="ch-content-top-rainbow-edge"></div>
    <div class="ch-content-top-edge"></div>    <div class="cbp-container">
        <div class="cbp_widget_box ch_title_container one whole double-padded">
            <div class="chp_widget_page_title ">
                <div class="one eighth">
                    <div class="chp-page-title-icon">
                        <i class="fa fa-pencil fa-4x"></i>
                    </div>
                </div>
                <div class="seven eighths">
                    <h1><?php echo $category->cat_name; ?></h1>
                    <hr>

                    <div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-container">

        <div class="one whole double-padded thuvien">
            <?php

            global $paged;
            if( get_query_var( 'paged' ) )
                $my_page = get_query_var( 'paged' );
            else {
                if( get_query_var( 'page' ) )
                    $my_page = get_query_var( 'page' );
                else
                    $my_page = 1;
                set_query_var( 'paged', $my_page );
                $paged = $my_page;
            }
            $args_cat = array(
                'post_type' 	 => 'post',
                'order'			 => 'asc',
                'paged' => $paged,
                'category_name'  => $category->slug,
            );

            $query_projects = query_posts($args_cat);
            foreach ($query_projects as $row) {
                $url = wp_get_attachment_image_src(get_post_thumbnail_id($row->ID), 'large');
                $description = get_field('description', $row->ID);
                ?>
                <div class="one third double-gap-top double-pad-right">
                    <a href="<?php echo get_the_permalink($row->ID); ?>" title="<?php echo (get_the_title($row->ID)); ?>">
                        <img src="<?= $url[0] ?>" alt="Portfolio Item 5" class="Thumbnail thumbnail ch-gallery-thumb-third ch-portfolio-image">
                        <p class="text"><?php echo (get_the_title($row->ID)); ?></p>
                    </a>
                </div>

            <?php
            }//end for
            ?>


        </div>

    </div>
    <div class="ch-content-bottom-edge"></div></div>

<?php
get_footer();
?>


</body>
</html>