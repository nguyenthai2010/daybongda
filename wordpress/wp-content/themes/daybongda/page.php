<?php
    get_header();
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
                    <h1><?php the_title(); ?></h1>
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

                        <div class="cbp_brick cbp_widget_text align-left ">
                            <?php
                                // TO SHOW THE PAGE CONTENTS
                                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

                                        <?php the_content(); ?> <!-- Page Content -->

                                <?php
                                endwhile; //resetting the page loop
                                wp_reset_query(); //resetting the page query
                            ?>

                        </div>
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