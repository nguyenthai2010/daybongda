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
        <div class="two thirds double-padded">
            <div class="cbp-container cbp_widget_row ">
                <div class="cbp-row">
                    <div class="cbp_widget_box one whole double-pad-right ">

                        <div class="chp_widget_post_list ">
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
                                <div class="one whole  double-pad-bottom cbp-widget-post-list-item">
                                    <h3> <?php echo (get_the_title($row->ID)); ?> </h3>
                                    <div class="cbp-widget-post-image double-pad-bottom">
                                        <a href="<?php echo get_the_permalink($row->ID); ?>" title="<?php echo get_the_title($row->ID); ?>"><img src="<?= $url[0] ?>" alt="<?php echo (get_the_title($row->ID)); ?>" class="Thumbnail thumbnail ch-featured-image"></a>
                                    </div>
                                    <div class="cbp-widget-post-content">
                                        <?php echo $description?>
                                    </div>
                                    <div class="cbp-widget-post-link double-pad-top">
                                        <a class="cbp_widget_link" href="<?php echo get_the_permalink($row->ID); ?>">Xem thêm</a>
                                    </div>
                                </div>

                            <?php
                            }


                            //wp_reset_query(); //resetting the page query
                            ?>
                            <!--<div class="one whole  double-pad-bottom cbp-widget-post-list-item">
                                <h3> Blog Post 3 Blog Post 3 </h3>
                                <div class="cbp-widget-post-image double-pad-bottom">
                                    <a href="#" title="Blog Post 3"><img src="http://showcase.aislinthemes.com/carry-hill/wp-content/uploads/sites/2/2013/12/03.jpg" alt="Blog Post 3" class="Thumbnail thumbnail ch-featured-image"></a>
                                </div>
                                <div class="cbp-widget-post-content">
                                    Lorem ipsum dolor sit Amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet metus ngồi Amet urna porttitor, eu Mattis ante condimentum. Suspendisse aliquet metus sit amet urna porttitor, eu mattis ante condimentum.

                                </div>
                                <div class="cbp-widget-post-link double-pad-top">
                                    <a class="cbp_widget_link" href="#">Xem thêm</a>
                                </div>
                            </div>-->
                        </div>
                        <?php
                        wp_pagenavi();
                        ?>

                    </div>
                </div>
            </div>


        </div>
        <?php get_sidebar(); ?>

    </div>
    <div class="ch-content-bottom-edge"></div></div>

<?php
get_footer();
?>


</body>
</html>