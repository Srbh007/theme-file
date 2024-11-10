<?php
function nasa_elm_glasses_2() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-shop-men.jpg', '3094', array(
        'post_title' => 'glasses-v2-shop-men',
        'post_name' => 'glasses-v2-shop-men',
    ));
    $imgs_1_src = $imgs_1 ? wp_get_attachment_image_url($imgs_1, 'full') : 'https://via.placeholder.com/520x590?text=520x590';
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-shop-woman.jpg', '3094', array(
        'post_title' => 'glasses-v2-shop-woman',
        'post_name' => 'glasses-v2-shop-woman',
    ));
    $imgs_2_src = $imgs_2 ? wp_get_attachment_image_url($imgs_2, 'full') : 'https://via.placeholder.com/520x590?text=520x590';
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-shop-kid.jpg', '3094', array(
        'post_title' => 'glasses-v2-shop-kid',
        'post_name' => 'glasses-v2-shop-kid',
    ));
    $imgs_3_src = $imgs_3 ? wp_get_attachment_image_url($imgs_3, 'full') : 'https://via.placeholder.com/520x590?text=520x590';
    
    $imgs_4 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-banner-1.jpg', '3117', array(
        'post_title' => 'glasses-v2-banner-1',
        'post_name' => 'glasses-v2-banner-1',
    ));
    $imgs_4_src = $imgs_4 ? wp_get_attachment_image_url($imgs_4, 'full') : 'https://via.placeholder.com/520x260?text=520x260';
    
    $imgs_5 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-banner-2.jpg', '3117', array(
        'post_title' => 'glasses-v2-banner-2',
        'post_name' => 'glasses-v2-banner-2',
    ));
    $imgs_5_src = $imgs_5 ? wp_get_attachment_image_url($imgs_5, 'full') : 'https://via.placeholder.com/520x260?text=520x260';
    
    $imgs_6 = elessi_import_upload('/wp-content/uploads/2023/10/glasses-2-banner-3.jpg', '3117', array(
        'post_title' => 'glasses-v2-banner-3',
        'post_name' => 'glasses-v2-banner-3',
    ));
    $imgs_6_src = $imgs_6 ? wp_get_attachment_image_url($imgs_6, 'full') : 'https://via.placeholder.com/520x260?text=520x260';
    
    $brand_1 = elessi_import_upload('/wp-content/uploads/2023/10/brand-ver.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 1',
        'post_name' => 'brand-v2-1',
    ));
    $brand_2 = elessi_import_upload('/wp-content/uploads/2023/10/brand-rb.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 2',
        'post_name' => 'brand-v2-2',
    ));
    $brand_3 = elessi_import_upload('/wp-content/uploads/2023/10/brand-prada.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 3',
        'post_name' => 'brand-v2-3',
    ));
    $brand_4 = elessi_import_upload('/wp-content/uploads/2023/10/brand-pola.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 4',
        'post_name' => 'brand-v2-4',
    ));
    $brand_5 = elessi_import_upload('/wp-content/uploads/2023/10/brand-persol.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 5',
        'post_name' => 'brand-v2-5',
    ));
    $brand_6 = elessi_import_upload('/wp-content/uploads/2023/10/brand-ceni.jpg', '3074', array(
        'post_title' => 'Brand v2 IMG 6',
        'post_name' => 'brand-v2-6',
    ));
    
    return array(
        'post' => array(
            'post_title' => 'ELM Glasses V2',
            'post_name' => 'elm-glasses-v2'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"3309dbce","elType":"section","settings":{"structure":"30","content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"43804cb6","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"6611800c","elType":"widget","settings":{"img_src":{"id":' . $imgs_1 . ',"url":' . json_encode($imgs_1_src) . ',"alt":"","source":"library","size":""},"align":"center","valign":"middle","text_align":"text-center","content_banner":"<div class=\"fs-30 tablet-fs-25 mobile-fs-20 margin-top-10 margin-bottom-10\" style=\"line-height: 1.2; color: #fff;\">MEN\nSUNGLASSES<\/div>\n<a class=\"button ns-baner_btn_zoom small fs-16 force-radius-20\" style=\"height: 40px; text-transform: capitalize; letter-spacing: 0; background: transparent; color: #fff; border: 2px #FFF solid; margin-top: 10px; padding: 15px;\" tabindex=\"0\" title=\"Shop now\" href=\"#\">Shop Now <span class=\"fs-20 margin-left-5\">\u2192<\/span><\/a>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false},{"id":"353e4f3c","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"2c43b93f","elType":"widget","settings":{"img_src":{"id":' . $imgs_2 . ',"url":' . json_encode($imgs_2_src) . ',"alt":"","source":"library","size":""},"align":"center","valign":"middle","text_align":"text-center","content_banner":"<div class=\"fs-30 tablet-fs-25 mobile-fs-20 margin-top-10 margin-bottom-10\" style=\"line-height: 1.2; color: #fff;\">WOMEN\nSUNGLASSES<\/div>\n<a class=\"button small ns-baner_btn_zoom fs-16 force-radius-20\" style=\"height: 40px; text-transform: capitalize; letter-spacing: 0; background: transparent; color: #fff; border: 2px #FFF solid; margin-top: 10px; padding: 15px;\" tabindex=\"0\" title=\"Shop now\" href=\"#\">Shop Now <span class=\"fs-20 margin-left-5\">\u2192<\/span><\/a>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false},{"id":"79fedb55","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"6c3e0823","elType":"widget","settings":{"img_src":{"id":' . $imgs_3 . ',"url":' . json_encode($imgs_3_src) . ',"alt":"","source":"library","size":""},"align":"center","valign":"middle","text_align":"text-center","content_banner":"<div class=\"fs-30 tablet-fs-25 mobile-fs-20 margin-top-10 margin-bottom-10\" style=\"line-height: 1.2; color: #fff;\">KID\nSUNGLASSES<\/div>\n<a class=\"button ns-baner_btn_zoom small fs-16 force-radius-20\" style=\"height: 40px; text-transform: capitalize; letter-spacing: 0; background: transparent; color: #fff; border: 2px #FFF solid; margin-top: 10px; padding: 15px;\" tabindex=\"0\" title=\"Shop now\" href=\"#\">Shop Now <span class=\"fs-20 margin-left-5\">\u2192<\/span><\/a>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false}],"isInner":false},{"id":"16697b11","elType":"section","settings":{"structure":"50","margin":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"20","left":0,"isLinked":false},"content_width":{"unit":"px","size":1600,"sizes":[]},"css_classes":"margin-top-50 mobile-margin-top-35"},"elements":[{"id":"af48cd3","elType":"column","settings":{"_column_size":20,"_inline_size":null,"_inline_size_mobile":50,"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[{"id":"4dbfcc7","elType":"widget","settings":{"wp":{"service_title":"Free Shipping","service_desc":"Free Shipping for all US order","service_icon":"pe-7s-plane","service_link":"#","service_blank":"","service_style":"style-3","service_hover":"buzz_effect","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_service_box"}],"isInner":false},{"id":"28c5f808","elType":"column","settings":{"_column_size":20,"_inline_size":null,"_inline_size_mobile":50,"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[{"id":"36fbef09","elType":"widget","settings":{"wp":{"service_title":"Support 24\/7","service_desc":"We support 24h a day","service_icon":"pe-7s-headphones","service_link":"#","service_blank":"","service_style":"style-3","service_hover":"buzz_effect","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_service_box"}],"isInner":false},{"id":"20aa404b","elType":"column","settings":{"_column_size":20,"_inline_size":null,"_inline_size_mobile":50,"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[{"id":"3607583e","elType":"widget","settings":{"wp":{"service_title":"100% Money Back","service_desc":"You have 30 days to Return","service_icon":"pe-7s-refresh-2","service_link":"#","service_blank":"","service_style":"style-3","service_hover":"buzz_effect","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_service_box"}],"isInner":false},{"id":"7f9689d9","elType":"column","settings":{"_column_size":20,"_inline_size":null,"_inline_size_mobile":50,"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[{"id":"67dbb67d","elType":"widget","settings":{"wp":{"service_title":"Payment Secure","service_desc":"We ensure secure payment","service_icon":"pe-7s-gift","service_link":"#","service_blank":"","service_style":"style-3","service_hover":"buzz_effect","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_service_box"}],"isInner":false},{"id":"218aac76","elType":"column","settings":{"_column_size":20,"_inline_size":null,"_inline_size_mobile":100,"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"css_classes":"hide-for-small"},"elements":[{"id":"4f78c4ae","elType":"widget","settings":{"wp":{"service_title":"Discount","service_desc":"Up to 40% for member","service_icon":"pe-7s-piggy","service_link":"#","service_blank":"","service_style":"style-3","service_hover":"buzz_effect","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_service_box"}],"isInner":false}],"isInner":false},{"id":"2f465a03","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"5a2a40ca","elType":"column","settings":{"_column_size":100,"_inline_size":null,"margin":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"1bda87a8","elType":"widget","settings":{"editor":"<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\">Shop by frame<\/h3>\n<p class=\"nasa-title-desc\">Discover your perfect pair with our curated categories<\/p>","align":"center","_margin":{"unit":"px","top":"30","right":"0","bottom":"0","left":"0","isLinked":false},"_margin_mobile":{"unit":"px","top":"10","right":"0","bottom":"0","left":"0","isLinked":false},"_css_classes":"margin-bottom-0"},"elements":[],"widgetType":"text-editor"},{"id":"7ced7d6e","elType":"widget","settings":{"list_cats":"grooming-men, shoes-men, clothing-woman, jewelry-woman, beauty, kid, accessories-men","disp_type":"Horizontal6","columns_number":"7","el_class":"items-r50 items-padding-20px hover-box-sd"},"elements":[],"widgetType":"nasa-product-categories"}],"isInner":false}],"isInner":false},{"id":"617f1711","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"0","right":0,"bottom":"10","left":0,"isLinked":false}},"elements":[{"id":"6f53e7c5","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"7877b4b7","elType":"widget","settings":{"editor":"<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\">Best sellers, ooh la la<\/h3>","align":"center","_margin":{"unit":"px","top":"10","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[],"widgetType":"text-editor"},{"id":"50959969","elType":"widget","settings":{"style":"carousel","columns_number":"5","number":6},"elements":[],"widgetType":"nasa-products"}],"isInner":false}],"isInner":false},{"id":"63847bb3","elType":"section","settings":{"structure":"30","content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"7b942022","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"719beb94","elType":"widget","settings":{"img_src":{"id":' . $imgs_4 . ',"url":' . json_encode($imgs_4_src) . ',"alt":"","source":"library","size":""},"valign":"middle","content_banner":"<div class=\"fs-25 tablet-fs-20 mobile-fs-20 margin-bottom-10\" style=\"line-height: 1.2; color: #333333;\">Classic\nEye Glasses<\/div>\n<a class=\"button ns-baner_btn_zoom small  fs-16 force-radius-20\" style=\"text-transform: capitalize; height: 40px; letter-spacing: 0; background: transparent; color: #000; border: 2px #000 solid; margin-top: 10px; padding: 0 12px;\" title=\"Shop now\" href=\"#\">Shop Now <span class=\"fs-20 margin-left-5\">\u2192<\/span><\/a>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false},{"id":"3abe6f00","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"7c9fb680","elType":"widget","settings":{"img_src":{"id":' . $imgs_5 . ',"url":' . json_encode($imgs_5_src) . ',"alt":"","source":"library","size":""},"valign":"middle","content_banner":"<div class=\"fs-25 tablet-fs-20 mobile-fs-20 margin-bottom-10\" style=\"line-height: 1.2; color: #fff;\">Summer\nCollection<\/div>\n<div class=\"fs-15 tablet-fs-25 mobile-fs-20 margin-top-10 \" style=\"line-height: 1.2; color: #fff;\">Sale off<span class=\"fs-25 hide-for-medium nasa-bold-500 primary-color\" style=\"position: relative; margin-left: 5px;\">25%<\/span><\/div>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false},{"id":"13c1887a","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"396dcf03","elType":"widget","settings":{"img_src":{"id":' . $imgs_6 . ',"url":' . json_encode($imgs_6_src) . ',"alt":"","source":"library","size":""},"align":"right","valign":"middle","text_align":"text-right","content_banner":"<div class=\"fs-25 tablet-fs-20 mobile-fs-20 margin-bottom-10\" style=\"line-height: 1.2; color: #333333;\">Glasses\n&amp; Sunglasses<\/div>\n<div class=\"fs-15 tablet-fs-25 mobile-fs-20 nasa-flex je margin-top-10 \" style=\"line-height: 1.2; color: #333333;\">Sale off<span class=\"fs-25 hide-for-medium nasa-bold-500 primary-color\" style=\"position: relative; margin-left: 5px;\">25%<\/span><\/div>","hover":"zoom","el_class":"nasa-bold-500","effect_text":"fadeIn"},"elements":[],"widgetType":"nasa-banner-v2"}],"isInner":false}],"isInner":false},{"id":"3303ae7f","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"35","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"589899cd","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"39e600ec","elType":"widget","settings":{"editor":"<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\">Best sellers, ooh la la<\/h3>","align":"center"},"elements":[],"widgetType":"text-editor"},{"id":"6fa6e844","elType":"widget","settings":{"style":"carousel","columns_number":"5","type":"featured_product","number":6},"elements":[],"widgetType":"nasa-products"}],"isInner":false}],"isInner":false},{"id":"76665ded","elType":"section","settings":{"background_background":"classic","background_color":"#F1F1F1","content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"20","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"74e0ef6","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"2c27225a","elType":"widget","settings":{"editor":"<p class=\"nasa-title-desc margin-bottom-0 margin-top-30\" style=\"line-height: 1;\">LOREM IP SUM LORAM<\/p>\n\n<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\" style=\"line-height: 1.2;\">Shop by Brands<\/h3>","align":"center"},"elements":[],"widgetType":"text-editor"},{"id":"7bb0d5c0","elType":"widget","settings":{"wp":{"title":"","align":"left","bullets":"false","bullets_pos":"","bullets_align":"center","navigation":"false","column_number":"6","column_number_small":"2","column_number_tablet":"2","gap_items":"yes","padding_item":"20px","padding_item_small":"","padding_item_medium":"","force":"true","autoplay":"false","loop_slide":"false","paginationspeed":"800","el_class":"","sliders":{"1697512968613":{"img_src":"' . $brand_1 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1697513004121":{"img_src":"' . $brand_2 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1697513015812":{"img_src":"' . $brand_3 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1697513026777":{"img_src":"' . $brand_4 . '","link":"","content_width":"","align":"center","move_x":"","valign":"middle","text_align":"text-center","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1697513157124":{"img_src":"' . $brand_5 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1697513193889":{"img_src":"' . $brand_6 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1698923566439":{"img_src":"' . $brand_1 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"},"1698923573252":{"img_src":"' . $brand_2 . '","link":"","content_width":"","align":"left","move_x":"","valign":"top","text_align":"text-left","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"bg-item-white"}}}},"elements":[],"widgetType":"wp-widget-nasa_sliders_2_sc"},{"id":"6f19b49d","elType":"widget","settings":{"editor":"<a class=\"button ns-baner_btn_zoom small fs-14 tablet-fs-14\" style=\"height: 50px; text-transform: capitalize; letter-spacing: 0; background: transparent; border-radius: 100px; color: #000; border: 2px #000 solid; padding: 10px 50px; margin: 0px 0px 30px 0px;\" title=\"See all\" href=\"#\">See all <span class=\"fs-20 margin-left-5\">\u2192<\/span><\/a>","align":"center"},"elements":[],"widgetType":"text-editor"}],"isInner":false}],"isInner":false},{"id":"59bd8cb8","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"45","right":0,"bottom":"015","left":0,"isLinked":false}},"elements":[{"id":"41cfb113","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"6b0ccb01","elType":"widget","settings":{"editor":"<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\">Best sellers, ooh la la<\/h3>","align":"center"},"elements":[],"widgetType":"text-editor"},{"id":"499f246d","elType":"widget","settings":{"style":"carousel","columns_number":"5","type":"best_selling","number":6},"elements":[],"widgetType":"nasa-products"}],"isInner":false}],"isInner":false},{"id":"54959e7a","elType":"section","settings":{"background_background":"classic","background_color":"#F1F1F1","content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"0","right":0,"bottom":"180","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"110","left":0,"isLinked":false}},"elements":[{"id":"1da149f5","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"1128828e","elType":"widget","settings":{"editor":"<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\">@glasses<\/h3>\n<p class=\"nasa-title-desc\">Follow us on social for the latest trends<\/p>","align":"center","_margin":{"unit":"px","top":"30","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[],"widgetType":"text-editor"},{"id":"5e86b3e7","elType":"widget","settings":{"wp":{"username_show":"NasaTheme Style","instagram_link":"#","img_size":"full","disp_type":"slide","auto_slide":"false","loop_slide":"false","limit_items":"6","columns_number":"6","columns_number_tablet":"3","columns_number_small":"2","el_class_img":"padding-left-5 padding-right-5 skip-lazy","el_class":"nasa-relative top-30"},"_margin":{"unit":"px","top":"0","right":"0","bottom":"-100","left":"0","isLinked":false},"_margin_mobile":{"unit":"px","top":"-20","right":"0","bottom":"-40","left":"0","isLinked":false}},"elements":[],"widgetType":"wp-widget-nasa_instagram_feed_sc"}],"isInner":false}],"isInner":false},{"id":"5ca31215","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"0","right":0,"bottom":"35","left":0,"isLinked":false},"css_classes":" text-center"},"elements":[{"id":"14f25209","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"29b1a3f4","elType":"widget","settings":{"editor":"<p class=\"nasa-title-desc margin-bottom-0\" style=\"line-height:1\">WHAT BUYERS SAY<\/p>\n<h3 class=\"fs-29 tablet-fs-28 mobile-fs-27 margin-bottom-0\" style=\"line-height:1\">Customers Review<\/h3>","align":"center","_margin":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"_css_classes":"margin-bottom-0"},"elements":[],"widgetType":"text-editor"},{"id":"b7ab900","elType":"widget","settings":{"clien_content":"<div class=\"nasa-flex jc  flex-column\" ><h3 class=\"text-center margin-bottom-0 margin-bottom-15\" style=\"line-height:1.5;\" >\"Given wherein. Does not called also and air sea to make first subdue beginning. \nAppear seasons the it after whose beginning. Hath can not good life. \"<\/h3>\n<p class=\"text-center nasa-title-desc margin-bottom-0\">Darrell Baker, 18 May 2019<\/p><\/div>\n","_element_custom_width":{"unit":"%","size":80,"sizes":[]},"_element_vertical_align":"center","style":"simple","el_class":"nasa-flex jc flex-column","img_src":{"url":"","id":"","size":""}},"elements":[],"widgetType":"nasa-client"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => '',
            '_elementor_css' => 'a:6:{s:4:"time";i:1699255149;s:5:"fonts";a:0:{}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
        ),
        
        'globals' => array(
            'header-type' => '1',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-2-width-1600'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            'plus_wide_width' => '400',
            'color_primary' => '#d89701',
            
            // 'category_sidebar' => 'left',
            
            'product_detail_layout' => 'modern-2',
            'sp_bgl' => '#f4f4f4',
            // 'product_image_layout' => 'single',
            // 'product_image_style' => 'scroll',
            // 'tab_style_info' => 'ver-2',
            
            'loop_layout_buttons' => 'modern-5',
            
            // 'animated_products' => 'hover-carousel',
            
            // 'nasa_attr_image_style' => 'square',
            // 'nasa_attr_image_single_style' => 'extends',
            // 'nasa_attr_color_style' => 'round',
            // 'nasa_attr_label_style' => 'round',
            
            'breadcrumb_row' => 'single',
            'breadcrumb_type' => 'default',
            'breadcrumb_bg_color' => '#f4f4f4',
            'breadcrumb_align' => 'text-left',
            'breadcrumb_height' => '60'
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-3309dbce > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-16697b11 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-16697b11{margin-top:0px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-2f465a03 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-5a2a40ca > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-1bda87a8{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-1bda87a8 > .elementor-widget-container{margin:30px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-617f1711 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-617f1711{margin-top:0px;margin-bottom:10px;}.elementor-[inserted_id] .elementor-element.elementor-element-7877b4b7{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-7877b4b7 > .elementor-widget-container{margin:10px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-63847bb3 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-3303ae7f > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-3303ae7f{margin-top:35px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-39e600ec{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-76665ded > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-76665ded:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-76665ded > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F1F1F1;}.elementor-[inserted_id] .elementor-element.elementor-element-76665ded{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:20px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-76665ded > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-2c27225a{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-6f19b49d{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-59bd8cb8 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-59bd8cb8{margin-top:45px;margin-bottom:015px;}.elementor-[inserted_id] .elementor-element.elementor-element-6b0ccb01{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-54959e7a > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-54959e7a:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-54959e7a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F1F1F1;}.elementor-[inserted_id] .elementor-element.elementor-element-54959e7a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:180px;}.elementor-[inserted_id] .elementor-element.elementor-element-54959e7a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-1128828e{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-1128828e > .elementor-widget-container{margin:30px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-5e86b3e7 > .elementor-widget-container{margin:0px 0px -100px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-5ca31215 > .elementor-container{max-width:1600px;}.elementor-[inserted_id] .elementor-element.elementor-element-5ca31215{margin-top:0px;margin-bottom:35px;}.elementor-[inserted_id] .elementor-element.elementor-element-29b1a3f4{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-29b1a3f4 > .elementor-widget-container{margin:0px 0px 0px 0px;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-353e4f3c > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-16697b11{margin-top:0px;margin-bottom:20px;}.elementor-[inserted_id] .elementor-element.elementor-element-af48cd3{width:50%;}.elementor-[inserted_id] .elementor-element.elementor-element-af48cd3 > .elementor-element-populated{margin:0px 0px 10px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-28c5f808{width:50%;}.elementor-[inserted_id] .elementor-element.elementor-element-28c5f808 > .elementor-element-populated{margin:0px 0px 10px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-20aa404b{width:50%;}.elementor-[inserted_id] .elementor-element.elementor-element-20aa404b > .elementor-element-populated{margin:0px 0px 10px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7f9689d9{width:50%;}.elementor-[inserted_id] .elementor-element.elementor-element-7f9689d9 > .elementor-element-populated{margin:0px 0px 10px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-218aac76{width:100%;}.elementor-[inserted_id] .elementor-element.elementor-element-218aac76 > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-1bda87a8 > .elementor-widget-container{margin:10px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7b942022 > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-13c1887a > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-54959e7a{margin-top:0px;margin-bottom:110px;}.elementor-[inserted_id] .elementor-element.elementor-element-5e86b3e7 > .elementor-widget-container{margin:-20px 0px -40px 0px;}}'
    );
}
