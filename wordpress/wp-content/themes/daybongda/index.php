<?php
get_header();
?>

                <div  class="cbp-row cbp_widget_row ch-slider " >
                        <ul class="sliders">
                            <?php
                            $i = 0;
                            $args = array(
                                'post_type' 	 => 'slider',
                                'posts_per_page' => -1
                            );
                            $queryRows = get_posts($args);

                            foreach ($queryRows as $row) {
                                $i++;
                                $url_image = get_the_post_thumbnail_url($row->ID, 'custom-size');
                                $url_link = get_permalink($row->ID);
                                $name = $row->post_title;
                                $postcontent = strip_tags ($row->post_content);

                                ?>
                                <li style="background: url('<?=$url_image?>') no-repeat center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                                    <a href="<?=$url_link?>"></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>



                                                            <div  class="cbp-row cbp_widget_row ch-content ch-content-top " >
                                                                <div class="ch-content-top-edge"></div>
                        <div class="cbp-container">
                                            <div class="cbp_widget_box one third double-padded "   >
        <div class="cbp-row chp_widget_feature_box  ">

            <div class="two fifths mobile ch-feature-box-icon-wrapper">


                                    <span class="ch-feature-box-icon">
                        <i class="fa fa-user fa-3x"></i>                    </span>
                            </div>

            <div class="one half mobile align-left ch-feature-box-text-wrapper">


                                            <h2>Giáo viên</h2>

<p>Tận tâm</p>
            </div>
        </div>

        </div>

                                            <div class="cbp_widget_box one third double-padded "   >
        <div class="cbp-row chp_widget_feature_box  ">

            <div class="two fifths mobile ch-feature-box-icon-wrapper">


                                    <span class="ch-feature-box-icon">
                        <i class="fa fa-rocket fa-3x"></i>                    </span>
                            </div>

            <div class="one half mobile align-left ch-feature-box-text-wrapper">


                                            <h2>Phương pháp</h2>

<p>Chuyên nghiệp</p>
            </div>
        </div>

        </div>

                                            <div class="cbp_widget_box one third double-padded "   >
        <div class="cbp-row chp_widget_feature_box  ">

            <div class="two fifths mobile ch-feature-box-icon-wrapper">


                                    <span class="ch-feature-box-icon">
                        <i class="fa fa-book fa-3x"></i>                    </span>
                            </div>

            <div class="one half mobile align-left ch-feature-box-text-wrapper">


                                            <h2>Chương trình</h2>

<p>Có lợi cho bé</p>
            </div>
        </div>

        </div>
                        </div>
                    </div>


<?php
$aboutid = get_page_id_by_slug('gioi-thieu');
$about = get_post($aboutid);
$aboutContent = $about->post_content;
?>
                                                            <div  class="cbp-row cbp_widget_row ch-content " >
                        <div class="cbp-container">
                                            <div class="cbp_widget_box two thirds double-padded "   >            <div class="cbp_brick cbp_widget_link_to_page ">
                <h2><?php echo $about->post_title; ?></h2>
                                <div class="cbp-widget-post-content">
                    <div class="ch-shortcode ch-border-title"><span> </span></div>
                    <?php echo $aboutContent; ?>
                </div>

            </div>

            </div>

                            <div class="cbp_widget_box one third double-padded ">

                                <div class="cbp_brick cbp_widget_text align-left ">
                                    <h3>HLV Chủ nhiệm</h3>
                                </div>
                                <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto 30px;"><div class="bx-viewport" style="width: 100%; position: relative; height: auto;">
                                        <ul id="cbp-slider-559a05c00d34e" class="cbp_brick cbp_widget_slider ch-quote-testimonials " style="width: auto; position: relative; ">
                                <li style="float: none; list-style: none; position: relative; width: 287px;" class="bx-clone">
                                    <img src="images/hlv.jpg" width="100%">
                                    <p><cite class="ch-shortcode ch-cite">Thạc Sỹ PHẠM HỮU LỘC</cite> </p>
                                </li>

                                        </ul>
                                    </div></div>


                            </div>
                        </div>
                    </div>



<?php
    get_footer();
?>


</body>
</html>