<?php
get_header();
?>

<div class="cbp-row cbp_widget_row ch-content ch-content-top ch-content-bottom ch-content-top-rainbow">
    <div class="ch-content-top-rainbow-edge"></div>
    <div class="ch-content-top-edge"></div>
                <div class="cbp-container">
        <div class="cbp_widget_box ch_title_container one whole double-padded">
            <div class="chp_widget_page_title ">
                                                        <div class="one eighth">
                        <div class="chp-page-title-icon">
                                                                                                                                <i class="fa fa-phone fa-4x"></i>
                                                                                    </div>
                    </div>
                                <div class="seven eighths">
                                            <h1>Liên hệ</h1>
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
        <div class="one whole double-padded">
                                                                                                <div id="cbp-row-559cc14142b30" class="cbp-row cbp_widget_row ch-content ch-content-bottom " >
                        <div class="cbp-container">
                                            <div class="cbp_widget_box two thirds double-pad-right "   >    
            <div class="cbp_widget_map_wrapper">
                <div id="cbp-map-559cc1414187b" class="cbp_brick cbp_widget_map "style="height: 400px"></div>
            </div>
             

                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                <script src="js/gmaps.js"></script>

                                    <script type="text/javascript">
                                                                                                                                                                                                                                                                                
                                var content = '';
                                                                                                                                                                                                                                                                                            
                var markerLat = '48.85796700338155';
                var markerLng = '2.2944045066833496';

                var map = new GMaps({
                    div: '#cbp-map-559cc1414187b',
                    lat: markerLat,
                    lng: markerLng,
                    zoom: parseInt('3')
                });

                if (markerLat && markerLng) {
                                                                                                                                    
                    var markerOptions = {
                        lat: markerLat,
                        lng: markerLng,
                        infoWindow: {
                            content : content
                        }
                    }
                                                                                                                                    
                                    var customMarker = new google.maps.MarkerImage();
                    customMarker.url = 'img/pin-grey.png';
                    markerOptions.icon = customMarker;
                 
                                                                                                                                                        
                    map.addMarker(markerOptions);       
                }

            </script>
  

            <div class="cbp_brick cbp_widget_text triple-gap-top align-left " >
                <?php echo do_shortcode( '[contact-form-7 id="374" title="Liên hệ"]' ); ?>

            </div> 
            </div>
                        
                                            <div class="cbp_widget_box one third double-pad-left "   >  

            <div class="cbp_brick cbp_widget_text cbp-unbold align-left " >
                                <div class="ch-shortcode ch-border-title"><span>Thông tin chi tiết</span></div>

<div class="ch-shortcode ch-icon-bullet-text">
<div class="one eighth mobile align-center ch-icon-bullet-text-icon">
            <i class="fa fa-phone "></i>
        </div>
<div class="seven eighths mobile pad-left">
<h5>Phone</h5>
<p>Description goes here</p>
</div></div>
<div class="ch-shortcode ch-icon-bullet-text">
<div class="one eighth mobile align-center ch-icon-bullet-text-icon">
            <i class="fa fa-envelope "></i>
        </div>
<div class="seven eighths mobile pad-left">
<h5>Email</h5>
<p>Description goes here</p>
</div></div>
            </div> 
            </div>
                        </div>
                    </div>
                            

            
            
                                    </div>
    </div>
</div>

<?php
get_footer();
?>


</body>
</html>