<head>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type='text/javascript' src='/unitegallery/js/unitegallery.min.js'></script> 

    <link rel='stylesheet' href='/unitegallery/css/unite-gallery.css' type='text/css' /> 
    <link rel='stylesheet' href='/unitegallery/themes/default/ug-theme-default.css' type='text/css' /> 
    <script src='/unitegallery/themes/carousel/ug-theme-carousel.js' type='text/javascript'></script>
</head>
<div class="large-9 columns" role="content">
    <h2>Galer&iacute;a</h2>
    <div id="gallery" style="display:none;">
        <?php foreach ($gallery as $photo) { ?> 
            <img alt="<?= $photo->title ?>" src="/files/Gallery/photo/<?= $photo->photo ?>"
                data-image="/files/Gallery/photo/<?= $photo->photo ?>"
                data-description="<?= $photo->description ?>" 
            />
        <?php } ?>
    </div>
</div>
<script type="text/javascript"> 
    jQuery(document).ready(function(){ 
        jQuery("#gallery").unitegallery({
            gallery_theme: "carousel",
            carousel_autoplay_timeout: 4000,
            tile_width: 300,
            tile_height: 360,
            carousel_space_between_tiles: 10,
            tile_enable_textpanel: true,
            tile_textpanel_always_on: true,
            tile_textpanel_position: "bottom",
            tile_textpanel_bg_color: "#cdcdcd",
            tile_textpanel_title_color:"#0071bc",
            lightbox_overlay_color:"#cdcdcd",
            lightbox_textpanel_enable_title: true,
            lightbox_textpanel_enable_description: true,
            lightbox_arrows_offset: 60,
            lightbox_textpanel_padding_top: 10,
            lightbox_textpanel_title_font_size: 28,
            lightbox_textpanel_desc_font_size: 16,
        }); 
    }); 
</script>
