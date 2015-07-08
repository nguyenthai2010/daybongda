<?php
    get_header();
?>

<?php
    $query_object = get_queried_object();
    //$query_object->post_title;
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
                    <h1><?=$query_object->post_title;?></h1>
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
                            <p>All children have a right to free public education. Children with special needs may have one or more of the following difficulties: physical, intellectual, emotional, behavioural, speech, vision, hearing or language.Even children who are intellectually gifted can have special needs. Special education programs may be provided for these students. Classes for special needs students are often held within the regular schools. However, some schools are designed specially for students with special needs.</p>
                            <p>Extra-curricular activities are activities that take place outside of school hours—before school, after school or during lunch. These activities may include sports, hobbies, travel, leadership, arts or volunteer work. Each school has different extra-curricular activities for students. Taking part in these activities will help your child make friends, adjust to being in a school and develop new interests.</p>
                        </div>
                    </div>
                </div>
            </div>







        </div>
        <div class="one third double-padded">
            <div id="archives-2" class="widget widget_archive"><h3 class="widget_title">Archives</h3>		<ul>
                    <li><a href="http://showcase.aislinthemes.com/carry-hill/2014/04/">April 2014</a></li>
                    <li><a href="http://showcase.aislinthemes.com/carry-hill/2014/03/">March 2014</a></li>
                    <li><a href="http://showcase.aislinthemes.com/carry-hill/2013/12/">December 2013</a></li>
                    <li><a href="http://showcase.aislinthemes.com/carry-hill/2013/11/">November 2013</a></li>
                </ul>
            </div><div id="categories-2" class="widget widget_categories"><h3 class="widget_title">Categories</h3>		<ul>
                    <li class="cat-item cat-item-2"><a href="http://showcase.aislinthemes.com/carry-hill/category/blog/">Blog</a>
                    </li>
                    <li class="cat-item cat-item-3"><a href="http://showcase.aislinthemes.com/carry-hill/category/news/">News</a>
                    </li>
                    <li class="cat-item cat-item-1"><a href="http://showcase.aislinthemes.com/carry-hill/category/uncategorized/">Uncategorized</a>
                    </li>
                </ul>
            </div><div id="chp_latest_posts-3" class="widget widget-latest-posts">                    <h3 class="widget_title">Latest Posts</h3>
                <div class="one whole pad-bottom cbp-widget-post-list-item">
                    <div class="ch-border-title">
                        <a title="School Begins - Welcome back!" href="http://showcase.aislinthemes.com/carry-hill/2014/04/05/news-item-3/">School Begins - Welcome back!</a>
                    </div>
                    <div class="cbp-widget-post-meta-data">

                    <span class="cbp-widget-post-meta-date">
                        5 Apr, 2014                    </span>
                    <span class="cbp-widget-post-meta-author">
                        by <a href="http://showcase.aislinthemes.com/carry-hill/author/aislin/">
                            aislin                        </a>
                    </span>

                    </div>

                    <div class="cbp-widget-post-content">
                        <p>Worked with the grade 6-8 students at school to raise…</p>                        </div>
                </div>


                <div class="one whole pad-bottom cbp-widget-post-list-item">
                    <div class="ch-border-title">
                        <a title="Bus Route Finder" href="http://showcase.aislinthemes.com/carry-hill/2013/11/21/news-item-2/">Bus Route Finder</a>
                    </div>
                    <div class="cbp-widget-post-meta-data">

                    <span class="cbp-widget-post-meta-date">
                        21 Nov, 2013                    </span>
                    <span class="cbp-widget-post-meta-author">
                        by <a href="http://showcase.aislinthemes.com/carry-hill/author/aislin/">
                            aislin                        </a>
                    </span>

                    </div>

                    <div class="cbp-widget-post-content">
                        <p>Find out if school bus transportation is available in your…</p>                        </div>
                </div>



                <a class="cbp_widget_link cbp_widget_button" href="http://showcase.aislinthemes.com/carry-hill/category/news/">View All</a>
            </div><div id="eme_list-2" class="widget widget_eme_list"><div class="ch-event-list"><div id="events-no-events">No events</div></div></div>        </div>
    </div>
    <div class="ch-content-bottom-edge"></div></div>

<?php
    get_footer();
?>


</body>
</html>