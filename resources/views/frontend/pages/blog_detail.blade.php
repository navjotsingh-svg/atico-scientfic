@extends('frontend.layouts.app')
@section('content')
<style>
    #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
.wpb_wrapper {
    border: 6px solid #f3f3f3;
    padding: 10px 5px;
    text-align: center;
    min-height: 275px;
}

.explore_now, .category_name{
    color: #0530AD;
    margin-top:10px;
}
.support_team{
    background-color: #0046AE;
    color: #FFFFFF;
    padding: 50px;
}
.tenders{
    background-color: #00398E;
    color: #FFFFFF;
    padding: 50px;
}
.dealership{
    background-color: #002761;
    color: #FFFFFF;
    padding: 50px;
}
.contact_us{
    background-color: #01193D;
    color: #FFFFFF;
    padding: 50px;
}
.ref_icons {
    border-radius: 50%;
    border: 1px solid #E8E8E8;
    width: 80px;
    height: 80px;
    padding: 6px;
    position: absolute;
    margin-top: -15px;
    margin-left: 70px;
}
#contact_details{
    margin-top: 30px;
}
#arrows{
    margin-top:30px;
}
.aboutus{
    display: inline-grid;
    margin-left: 16px;
    vertical-align: middle;
}
.li-icon{
    list-style-image: url({{ asset('assets/images/li.png') }})
}
.info {
    border: 1px solid #D0D0D0;
    padding: 10px;
    margin-top: 30px;
}
.brd-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 501px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 590px;
}
.desktop_view{
        display: none;
    }
    .related_product{
           text-align: center;
            
        }
@media only screen and (max-width: 600px) {
    .brd-heading{
    margin-top: 120px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 80px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 90px;
}
    .mobile_view{
        display: none;
    }
    .desktop_view{
        display: contents;
    }
    .product_name{
        text-align:left !important;
    }
    .related_product{
           text-align: center;
            flex:40%;
            
        }
}
.about_scientific.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg.png') }});
    min-height:300px;
    background-color:#000;
}
@media only screen and (max-width: 600px) {
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg_mob.png') }}) no-repeat;
    min-height:300px;
    background-color:#000;
    background-size: cover;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: baseline;
     text-align: unset; 
    letter-spacing: 0.01em;
    color: #515151;
}
}
.col-md-4.blog {
    border: 1px solid lightgray;
    margin-bottom: 10px;
    width: 32%;
    margin-right: 1%;
}

.site-content #sidebar-right.sidebar {
    padding-right: 0;
    padding-left: 10px;
}
.site-content #sidebar-left.sidebar, .site-content #sidebar-right.sidebar {
    padding-top: 20px;
    padding-bottom: 40px;
    position: relative;
}
.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
.form-group {
    margin-bottom: 1rem;
}
.sidebar .widget:not(.widget_search) {
    border: 1px solid #e1eeff;
    padding: 25px 30px;
    margin-bottom: 30px;
    font-size: 14px;
}

.widget, .wpb_row .wpb_widgetised_column .widget {
    margin: 45px 0 35px;
    word-wrap: break-word;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

ul.ts-recent-post-list {
    list-style: none;
    padding: 0;
}
.widget ul, .widget ol {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
ul.ts-recent-post-list>li img {
    display: block;
    width: 80px;
    height: 80px;
    float: left;
    margin-right: 15px;
    padding: 3px;
    border: 1px solid rgba(255, 255, 255, .24);
}

.ts-noimg, img.size-full, img.size-large, img.wp-post-image {
    height: auto;
    max-width: 100%;
}
.widget.themestek_widget_recent_entries ul:not(.slides):not(.cart_list):not(.labtechco_contact_widget_wrapper)>li:first-child, .widget_shopping_cart .cart_list li:first-child, .widget>ul:not(.slides):not(.cart_list)>li:first-child, .widget.widget_nav_menu>div>ul:first-child>li:first-child {
    border-top: none;
    padding-top: 0;
}

.widget.themestek_widget_recent_entries ul:not(.slides):not(.cart_list)>li {
    padding: 15px 0;
}
.widget ul:not(.slides):not(.cart_list):not(.labtechco_contact_widget_wrapper)>li {
    font-weight: 400;
}
ul.product_list_widget>li:first-child, ul.ts-recent-post-list>li:first-child {
    border-top: 0;
    padding-top: 0;
}
.widget ul>li {
    padding: 0 0 15px 0;
}
.ts-col-bgcolor-darkgrey .ts-ihbox-style-5.ts-ihbox i, .ts-servicebox-style-2.themestek-box h3 a:hover, .ts-servicebox-style-1.themestek-box .themestek-box-category a, .themestek-pre-header-wrapper .top-contact li a:hover, footer a:hover, blockquote:after, section.error-404 .ts-big-icon, .ts-ptablebox-style-1 .ts-ihbox-icon-wrapper, .themestek-boxes-row-wrapper .slick-arrow:not(.slick-disabled):hover:before, .ts-icolor-skincolor, .ts-bgcolor-darkgrey ul.labtechco_contact_widget_wrapper li a:hover, .ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-skincolor.ts-vc_cta3-style-classic .ts-vc_cta3-content-header, .ts-vc_icon_element-color-skincolor, .ts-bgcolor-skincolor .themestek-pagination .page-numbers.current, .ts-bgcolor-skincolor .themestek-pagination .page-numbers:hover, .ts-dcap-txt-color-skincolor, .ts-vc_general.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-white:hover, article.post .entry-title a:hover, .comment-reply-link, .ts-skincolor-strong strong, .ts-skincolor, .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h4.ts-skincolor, .ts-list-style-disc.ts-list-icon-color-skincolor li, .ts-list-style-circle.ts-list-icon-color-skincolor li, .ts-list-style-square.ts-list-icon-color-skincolor li, .ts-list-style-decimal.ts-list-icon-color-skincolor li, .ts-list-style-upper-alpha.ts-list-icon-color-skincolor li, .ts-list-style-roman.ts-list-icon-color-skincolor li, .ts-list.ts-skincolor li .ts-list-li-content, .ts-search-results-pages-w .ts-list-li-content a:hover, .ts-textcolor-white a:hover, .ts-fid-icon-wrapper i, .ts-textcolor-skincolor, .ts-textcolor-skincolor a, .themestek-box-title h4 a:hover, .ts-background-image.ts-row-textcolor-skin h1, .ts-background-image.ts-row-textcolor-skin h2, .ts-background-image.ts-row-textcolor-skin h3, .ts-background-image.ts-row-textcolor-skin h4, .ts-background-image.ts-row-textcolor-skin h5, .ts-background-image.ts-row-textcolor-skin h6, .ts-background-image.ts-row-textcolor-skin .ts-element-heading-wrapper h2, .ts-background-image.ts-row-textcolor-skin .themestek-testimonial-title, .ts-background-image.ts-row-textcolor-skin a, .ts-background-image.ts-row-textcolor-skin .item-content a:hover, .ts-row-textcolor-skin h1, .ts-row-textcolor-skin h2, .ts-row-textcolor-skin h3, .ts-row-textcolor-skin h4, .ts-row-textcolor-skin h5, .ts-row-textcolor-skin h6, .ts-row-textcolor-skin .ts-element-heading-wrapper h2, .ts-row-textcolor-skin .themestek-testimonial-title, .ts-row-textcolor-skin a, .ts-row-textcolor-skin .item-content a:hover, .sidebar .widget_recent_comments li.recentcomments a:hover, .sidebar .themestek_widget_recent_entries a:hover, .sidebar .widget_recent_entries a:hover, .sidebar .widget_meta a:hover, .sidebar .widget_categories a:hover, .sidebar .widget_archive li a:hover, .sidebar .widget_pages li a:hover, .sidebar .widget_nav_menu li a:hover, ul.ts-recent-post-list > li .post-date, .single-ts-portfolio .navlinks a:hover, .author-info .ts-author-social-links-wrapper ul li a:hover, .ts-ptablebox-style-1 .ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat, .ts-ptablebox-featured-col .ts-ptablebox-style-1 .ts-sbox-icon-wrapper, .ts-team-details-line .ts-team-list-value a:hover, .ts-team-details-line i, .ts-pf-details-heading i, .ts-pf-single-content-wrapper .ts-social-share-links ul li a:hover, .ts-custom-bt .ts-vc_general.ts-vc_btn3:hover, .ts-custom-bt .ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon, ul.labtechco_contact_widget_wrapper li:before, .ts-featured-meta-wrapper .ts-metaline .ts-meta-line:not(.cat-links) a:hover, .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover:before, .ts-col-bgcolor-darkgrey .ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content:after, .ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content .themestek-box-title:after, .ts-testimonialbox-style-1.themestek-box-testimonial .themestek-box-content:after, .ts-testimonialbox-style-2.themestek-box-testimonial .themestek-author-name a:hover, .ts-testimonialbox-style-1.themestek-box-testimonial .themestek-author-name a:hover, .ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content:after, .ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name, .ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name a, .themestek-box-team-style-3 .themestek-box-team-position, .themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email i, .themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email a:hover, body .appointment input[type="submit"], .themestek-box-blog.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line a, .ts-vc_general.ts-vc_btn3-color-skincolor, .ts-icon-skincolor-strong strong, .ts-icon-skincolor i, .ts-ihbox-style-4 .ts-ihbox-icon-type-text, .ts-team-social-links li a:hover, .ts-skincolor h3, .themestek-box-testimonial .themestek-author-name, .themestek-box-testimonial .themestek-author-name a, h3.ts-fid-inner span:first-child, .ts-portfoliobox-style-1.themestek-box h3 a:hover, .ts-portfoliobox-style-3.themestek-box h3 a:hover, .themestek-box.ts-portfoliobox-style-1 .themestek-box-category a, .ts-featured-meta-wrapper .ts-meta-line i, .themestek-box-blog .themestek-box-title h4 a:hover, .themestek-box-blog .themestek-blogbox-footer-readmore a:hover, .themestek-blogbox-footer-readmore a:hover, .ts-featured-meta-wrapper .ts-meta-line a:hover {
    color: #3368c6;
}
ul.ts-recent-post-list>li .post-date {
    display: block;
    font-size: 13px;
}
.sidebar .themestek_widget_list_all_posts li a, .sidebar .widget_recent_comments li.recentcomments a, .sidebar .themestek_widget_recent_entries a, .sidebar .widget_recent_entries a, .sidebar .widget_meta a, .sidebar .widget_categories a, .sidebar .widget_archive li a, .sidebar .widget_pages li a, .sidebar .widget_nav_menu li a {
    color: #7884ac;
}

ul.ts-recent-post-list>li>a {
    font-size: 15px;
}
.sidebar h3.widget-title {
    margin-top: 0;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}
.widget .widget-title {
    margin-bottom: 20px;
    position: relative;
    margin-top: 0;
}
.entry-content {
    color: black;
}

.site-content-wrapper {
    position: relative;
    z-index: 7
}

.main-holder {
    overflow: hidden
}

.site-main {
    position: relative;
    padding-top: 82px;
    z-index: 10
}

.ts-letterspacing-3px {
    letter-spacing: 3px
}

.ts-letterspacing-5px {
    letter-spacing: 5px
}

.ts-lead {
    font-size: 16px
}

footer a,.entry-content a,.site-content-wrapper a {
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

.ts-equal-height-image,.themestek-hide,.ts-hide {
    display: none
}

.ts-table {
    display: table;
    width: 100%
}

.ts-table-cell {
    display: table-cell;
    vertical-align: middle
}

.ts-align-right {
    text-align: right
}

iframe {
    width: 100%
}

.ts-bg.ts-bgcolor-darkgrey>.ts-bg-layer {
    background-color: #031b4e
}

.ts-col-bgcolor-darkgrey,.ts-col-bgcolor-darkgrey .ts-bg-layer-inner,.site-header-menu.ts-sticky-bgcolor-darkgrey.is_stuck,.ts-bgcolor-darkgrey {
    background-color: #031b4e
}

.ts-col-bgcolor-grey>.ts-bg-layer-inner,.ts-bg.ts-bgcolor-grey>.ts-bg-layer,.ts-col-bgcolor-grey .ts-bg-layer-inner,.ts-bgcolor-grey,.site-header.ts-sticky-bgcolor-grey.is_stuck,.site-header-menu.ts-sticky-bgcolor-grey.is_stuck,.ts-header-overlay .site-header.ts-sticky-bgcolor-grey.is_stuck {
    background-color: #f6faff
}

.ts-bg.ts-bgcolor-white>.ts-bg-layer,.ts-col-bgcolor-white .ts-bg-layer-inner,.ts-bgcolor-white,.ts-col-bgcolor-white,.site-header.ts-sticky-bgcolor-white.is_stuck,.ts-header-overlay .site-header.ts-sticky-bgcolor-white.is_stuck,.site-header-menu.ts-sticky-bgcolor-white.is_stuck {
    background-color: #fff;
}

.ts-bgcolor-skincolor h1,.ts-bgcolor-skincolor h2,.ts-bgcolor-skincolor h3,.ts-bgcolor-skincolor h4,.ts-bgcolor-skincolor h5,.ts-bgcolor-skincolor h6,.ts-bgcolor-darkgrey h1,.ts-bgcolor-darkgrey h2,.ts-bgcolor-darkgrey h3,.ts-bgcolor-darkgrey h4,.ts-bgcolor-darkgrey h5,.ts-bgcolor-darkgrey h6,.ts-col-bgcolor-darkgrey .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h2.ts-custom-heading,.ts-col-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h2.ts-custom-heading,.ts-vc_general.ts-vc_btn3.ts-vc_btn3-color-skincolor.ts-vc_btn3-style-outline:hover,.ts-vc_general.ts-vc_btn3.ts-vc_btn3-color-skincolor:not(.ts-vc_btn3-style-text):not(.ts-vc_btn3-style-outline),.ts-bgcolor-skincolor a,.ts-bgcolor-dark a {
    color: #fff
}

.ts-bgcolor-darkgrey .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p,.ts-col-bgcolor-darkgrey .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p,.ts-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p,.ts-col-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p {
    color: rgba(255,255,255,.85)
}

.sidebar .themestek_widget_list_all_posts li a,.sidebar .widget_recent_comments li.recentcomments a,.sidebar .themestek_widget_recent_entries a,.sidebar .widget_recent_entries a,.sidebar .widget_meta a,.sidebar .widget_categories a,.sidebar .widget_archive li a,.sidebar .widget_pages li a,.sidebar .widget_nav_menu li a {
    color: #7884ac
}

.ts-textcolor-dark,.ts-textcolor-dark .social-icons li a,.ts-textcolor-dark .vc_tta-panel-body,.ts-textcolor-dark .vc_tta-panel-body .wpb_text_column {
    color: rgba(0,0,0,.6)
}

.ts-col-bgimage-yes .ts-bg-layer-inner,.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .9
}

.ts-bgcolor-white.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .8
}

.ts-col-bgcolor-darkgrey.ts-col-bgimage-yes .ts-bg-layer-inner,.ts-bgcolor-darkgrey.ts-bg.ts-bgimage-yes>.ts-bg-layer-inner {
    background-color: #031b4e
}

.ts-col-bgcolor-grey.ts-col-bgimage-yes .ts-bg-layer-inner,.ts-col-bgcolor-darkgrey.ts-col-bgimage-yes .ts-bg-layer-inner,.ts-bgcolor-darkgrey.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .85
}

.site-footer .ts-bgcolor-darkgrey.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .95
}

.ts-titlebar-wrapper.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .75
}

.vc_video-bg-container .ts-col-bgcolor-yes,.vc_video-bg-container.ts-bg.ts-bgimage-yes>.ts-bg-layer {
    opacity: .8
}

.widget_product_categories ul li,.widget_nav_menu ul li,.widget_archive ul li,.widget_pages ul li,.widget_categories ul li,.widget_recent_entries ul li,.widget_meta ul li,.widget_recent_comments ul li {
    position: relative;
    list-style: none;
    font-weight: 400
}

.widget_recent_entries ul li span {
    display: block;
    font-style: italic
}

/*.main-holder .site #content table.cart td.actions .input-text,textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],.uneditable-input,select {
    font-family: inherit;
    -webkit-transition: border linear .2s,box-shadow linear .2s;
    -moz-transition: border linear .2s,box-shadow linear .2s;
    -o-transition: border linear .2s,box-shadow linear .2s;
    transition: border linear .2s,box-shadow linear .2s;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    vertical-align: middle;
    width: 100%;
    color: #999;
    padding: 10px 20px;
    font-weight: 400;
    background-color: #fff;
    text-transform: inherit;
    border: 1px solid #e1eeff;
    font-size: 14px;
    outline: none;
    line-height: inherit
}*/

input[type="text"]:focus,input[type="password"]:focus,input[type="email"]:focus,input[type="tel"]:focus,textarea:focus {
    color: #666;
    outline: none!important
}

button,input[type="submit"],input[type="button"],input[type="reset"] {
    display: inline-block;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    padding: 11px 34px 11px;
    border-radius: 0;
    text-transform: uppercase;
    border: none;
    color: #fff;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    cursor: pointer;
    outline: none!important;
    -webkit-font-smoothing: antialiased
}

.ts-full-bt {
    width: 100%
}

.ts-textarea-con textarea {
    height: 178px
}

.appointment input[type="text"],.appointment input[type="email"],.appointment textarea {
    border: none;
    background-color: rgba(255,255,255,.2);
    padding: 15px 20px;
    color: #fff
}

body .appointment input[type="submit"] {
    background: #fff;
    display: block;
    width: 100%;
    padding: 15px
}

body .appointment input[type="submit"]:hover {
    color: #fff!important;
    background: #031b4e
}

.appointment textarea::placeholder,.appointment input[type="email"]::placeholder,.appointment input[type="text"]::placeholder {
    color: rgba(255,255,255,.5);
    opacity: 1
}

.appointment textarea::placeholder,.appointment input[type="email"]::placeholder,.appointment input[type="text"]:-ms-input-placeholder {
    color: rgba(255,255,255,.5)
}

.appointment textarea::placeholder,.appointment input[type="email"]::placeholder,.appointment input[type="text"]::-ms-input-placeholde {
    color: rgba(255,255,255,.5)
}

.select2-container .select2-choice {
    padding: 6px 0 6px 10px;
    border: 1px solid #e1eeff;
    background-color: rgba(0,0,0,.03)
}

.select2-drop-active {
    border: 1px solid #e1eeff
}

.ts-col-bg,.ts-bg {
    position: relative
}

.ts-bgimage-layer,.ts-bg-layer,.ts-titlebar-wrapper .ts-titlebar-wrapper-bg-layer {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0
}

.vc_column-inner.ts-col-bgimage-yes.ts-col-bgcolor-,.ts-bgcolor-transparent>.ts-bg-layer,.ts-bgcolor-transparent {
    background-color: transparent!important
}

.vc_column-inner>.wpb_wrapper {
    position: relative
}

.vc_column-inner.ts-col-bgimage-yes.ts-col-bgcolor-.ts-bg-layer-inner {
    opacity: 1
}

#totop {
    font-weight: 900;
    color: #fff;
    background: rgb(126,186,3);
    position: fixed;
    display: none;
    right: 34px;
    bottom: 34px;
    z-index: 999;
    height: 0;
    width: 0;
    font-size: 0;
    text-align: center;
    padding-top: 5px;
    line-height: 36px;
    border-radius: 50%;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

#totop:hover {
    background-color: #333
}

#totop.top-visible {
    height: 50px;
    width: 50px;
    font-size: 25px
}

.themestek-pre-header-wrapper.container-full,.container-fullwide .site-content-inner.row,.footer .container-fullwide {
    padding-left: 15px;
    padding-right: 15px
}

.themestek-item-thumbnail,.themestek-item-thumbnail-inner {
    display: block
}

.ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h4 {
    margin-bottom: 13px
}

.site header,.ts-header-block,.site-header,.site-header-main {
    position: relative
}

.themestek-logo-img.standard {
    max-height: 100px;
    width: auto
}

.site-branding {
    float: left
}

.headerlogo img {
    max-height: 35px;
    width: auto
}

.headerlogo img,.ts-stickylogo-yes .standardlogo,.is-sticky .ts-stickylogo-yes .stickylogo {
    display: inline-block
}

.is_stuck .ts-stickylogo-yes .standardlogo,.headerlogo .stickylogo,.ts-slider-yes .is_stuck .headerlogo.ts-stickylogo-yes .standardlogo,.ts-slider-yes .is_stuck .headerlogo .crosslogo,.ts-slider-yes .headerlogo .standardlogo,.headerlogo .crosslogo {
    display: none
}

.is_stuck .headerlogo .stickylogo,.ts-slider-yes .is_stuck .headerlogo .standardlogo,.ts-slider-yes .headerlogo .crosslogo {
    display: inline-block
}

.site-title a.home-link:hover,a.home-link:hover {
    text-decoration: none
}

.site-title {
    font-size: 33px;
    font-weight: 700;
    line-height: 1;
    margin: 0;
    color: #fff;
    display: table;
    vertical-align: middle;
    text-align: center;
    width: 100%;
    height: 100%
}

.site-title a {
    display: table-cell;
    vertical-align: middle
}

.site-description {
    display: none
}

.ts-header-style-classic-box.ts-header-overlay .site-header.is_stuck .container {
    background-color: transparent!important
}

#site-header-menu #site-navigation .ts-header-icon a {
    font-size: 17px
}

.ts-header-icons .ts-header-wc-cart-link a {
    position: relative;
    color: #031b4e;
    margin: 6px 15px;
    border-radius: 5px
}

.ts-header-block .ts-vc_btn3.ts-vc_btn3-size-md {
    padding: 12px 24px;
    font-size: 15px;
    font-weight: 500!important
}

.themestek-pre-header-wrapper {
    position: relative;
    font-weight: 500
}

.themestek-pre-header-wrapper .top-contact li a,.themestek-pre-header-wrapper .social-icons li>a {
    transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out
}

.ts-pre-header-content .ts-table-cell div {
    display: inline-block;
    vertical-align: top
}

.site-header .themestek-topbar {
    position: relative;
    z-index: 10
}

.themestek-pre-header-inner {
    line-height: 50px
}

.ts-headerstyle-classic.ts-slider-yes .themestek-pre-header-wrapper {
    position: relative;
    z-index: 1
}

.ts-header-style-classic-2 .themestek-pre-header-wrapper .top-contact li {
    padding-left: 10px;
    padding-right: 10px
}

.ts-header-style-classic-2 .ts-header-icons .ts-header-icon:last-child {
    margin-right: 0
}

.themestek-pre-header-wrapper.ts-textcolor-dark .top-contact li,.themestek-pre-header-wrapper.ts-textcolor-dark .top-contact li a {
    color: #8893b9
}

.ts-header-style-classic-2 .themestek-pre-header-wrapper .top-contact li,.ts-header-style-classic-2 .themestek-pre-header-wrapper .top-contact li a {
    font-family: "Roboto Condensed",Arial,Helvetica,sans-serif
}

.ts-header-style-classic-2 .themestek-pre-header-wrapper.ts-textcolor-dark .top-contact li strong {
    color: #031b4e
}

.ts-header-style-classic-2 .themestek-pre-header-wrapper .top-contact li:first-child {
    padding-left: 0
}

.ts-header-style-classic-2 .themestek-pre-header-wrapper .social-icons li>a {
    color: #031b4e;
    width: 45px
}

.themestek-pre-header-wrapper.ts-bgcolor-white {
    border-bottom: 1px solid #e1eeff
}

.themestek-pre-header-wrapper .social-icons {
    padding-top: 0;
    padding-bottom: 0
}

.themestek-pre-header-wrapper .social-icons li {
    padding-left: 0;
    padding-right: 0
}

.themestek-pre-header-wrapper .social-icons li>a {
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 16px;
    border-radius: 0
}

.themestek-pre-header-wrapper,.themestek-pre-header-wrapper .top-contact li a,.themestek-pre-header-wrapper .social-icons li>a,.themestek-pre-header-wrapper .social-icons li>a:hover {
    color: #fff
}

.themestek-pre-header-wrapper .social-icons li,.top-contact li {
    position: relative
}

.top-contact li:before,.top-contact li:last-child:after,.themestek-pre-header-wrapper .social-icons li:first-child:after,.themestek-pre-header-wrapper .social-icons li:before {
    top: 0;
    content: '';
    height: 50px;
    width: 1px;
    background-color: rgba(255,255,255,.2);
    z-index: 1;
    position: absolute
}

.top-contact li:before,.themestek-pre-header-wrapper .social-icons li:first-child:after {
    left: 0
}

.top-contact li:last-child:after {
    right: 0
}

.top-contact:after,.themestek-pre-header-wrapper .social-icons:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.top-contact li,.themestek-pre-header-wrapper .social-icons li {
    float: left
}

.topbar-nav-menu {
    display: inline-block;
    list-style: none;
    margin: 0;
    padding: 0
}

.topbar-nav-menu li {
    display: inline;
    padding-left: 5px;
    padding-right: 5px
}

.top-contact {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 14px;
    position: relative
}

.top-contact i {
    margin-right: 8px
}

.top-contact li {
    display: inline-block;
    padding-left: 25px;
    padding-right: 25px;
    letter-spacing: 1px;
    position: relative;
    z-index: 1
}

.ts-headerstyle-classic-overlay .themestek-pre-header-inner {
    line-height: 40px
}

.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper.ts-bgcolor-darkgrey {
    border-bottom: 1px solid #e1eeff
}

.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper .social-icons li>a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 14px
}

.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper,.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper .top-contact li a,.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper .social-icons li>a {
    color: #031b4e
}

.themestek-pre-header-wrapper .social-icons li>a:hover {
    color: #fff
}

.ts-headerstyle-classic-overlay .top-contact li:before,.ts-headerstyle-classic-overlay .top-contact li:last-child:after,.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper .social-icons li:first-child:after,.ts-headerstyle-classic-overlay .themestek-pre-header-wrapper .social-icons li:before {
    height: 40px;
    background-color: rgba(0,0,0,.13)
}

.topbar-nav-menu {
    display: inline-block;
    list-style: none;
    margin: 0;
    padding: 0
}

.topbar-nav-menu li {
    display: inline;
    padding-left: 5px;
    padding-right: 5px
}

.top-contact {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 14px;
    position: relative
}

.top-contact i {
    margin-right: 8px
}

.top-contact li {
    display: inline-block;
    padding-left: 25px;
    padding-right: 25px;
    letter-spacing: 1px;
    position: relative;
    z-index: 1
}

.ts-titlebar-wrapper .ts-titlebar-inner-wrapper {
    padding: 0;
    display: table;
    width: 100%
}

.ts-titlebar-main {
    text-align: center;
    vertical-align: middle;
    display: table-cell
}

.ts-titlebar-wrapper {
    position: relative;
    z-index: 1
}

.ts-header-style-classic2 .ts-classicheader-text-area .ts-header-text .ts-titlebar-wrapper {
    margin-top: 70px
}

.ts-titlebar-wrapper.entry-header {
    margin-bottom: 0
}

.ts-titlebar-align-right .ts-titlebar-main {
    text-align: right
}

.ts-titlebar-align-left .ts-titlebar-main {
    text-align: left
}

.ts-titlebar-wrapper .entry-header {
    margin-bottom: 0;
    position: relative
}

.themestek-titlebar-main {
    text-align: center
}

.ts-titlebar-wrapper .entry-title-wrapper a {
    color: rgba(255,255,255,.9);
    font-weight: 700
}

.ts-titlebar-wrapper .entry-title-wrapper a:hover {
    color: #fff
}

.ts-titlebar-main .breadcrumb-wrapper span:last-child {
    padding-right: 0
}

.ts-titlebar-wrapper .entry-title .ts-subtitle {
    font-size: 17px;
    opacity: .8;
    font-weight: 300
}

.ts-titlebar-wrapper .breadcrumb-wrapper a {
    color: #888
}

.ts-bread-sep {
    position: relative;
    top: -1px;
    padding-right: 1px
}

.ts-titlebar-wrapper .breadcrumb-wrapper a:hover {
    text-decoration: none
}

.themestek-titlebar-main .breadcrumb-wrapper {
    color: #999;
    vertical-align: middle
}

.breadcrumb-wrapper .ts-pf-navbars-wrapper i {
    font-size: 24px;
    opacity: .8;
    transition: all 0.2s ease
}

.breadcrumb-wrapper .ts-pf-navbars-wrapper a {
    margin: 2px;
    display: inline-block
}

.breadcrumb-wrapper .ts-pf-navbars-wrapper a,.breadcrumb-wrapper .ts-pf-navbars-wrapper .ts-dim {
    margin: 5px;
    display: inline-block
}

.ts-titlebar-wrapper {
    background-size: 100%;
    background-position: 50% 0;
    background-repeat: repeat repeat
}

.themestek-header-style-3 .themestek-slider-wrapper,.themestek-header-style-3 .ts-titlebar-wrapper {
    position: relative;
    z-index: 1
}

.themestek-titlebar-main .entry-title {
    line-height: 27px;
    color: #2d2d2d;
    font-weight: 400;
    font-size: 28px
}

.ts-titlebar-align-right .ts-titlebar-main-inner,.ts-titlebar-align-left .ts-titlebar-main-inner {
    display: table;
    width: 100%
}

.ts-titlebar-align-right .entry-title-wrapper,.ts-titlebar-align-left .entry-title-wrapper,.ts-titlebar-align-right .breadcrumb-wrapper,.ts-titlebar-align-left .breadcrumb-wrapper {
    display: table-cell
}

.ts-titlebar-align-left .breadcrumb-wrapper {
    text-align: right;
    vertical-align: middle
}

.ts-titlebar-align-right .breadcrumb-wrapper {
    text-align: left;
    vertical-align: middle
}

.ts-titlebar-wrapper .breadcrumb-wrapper {
    font-size: 13px;
    color: #999
}

.ts-titlebar-align-allleft .ts-titlebar-main {
    text-align: left
}

.ts-titlebar-align-allright .ts-titlebar-main {
    text-align: right
}

.entry-title-wrapper .entry-title {
    margin: 0;
    margin-bottom: 10px
}

.ts-titlebar-align-allleft .ts-titlebar-main .breadcrumb-wrapper .container,.ts-titlebar-align-allright .ts-titlebar-main .breadcrumb-wrapper .container {
    padding-left: 0;
    padding-right: 0
}

.ts-textcolor-white .ts-titlebar-main .breadcrumb-wrapper a {
    color: rgba(255,255,255,.72)
}

.ts-textcolor-white .ts-titlebar-main .breadcrumb-wrapper,.ts-textcolor-white .ts-titlebar-main .breadcrumb-wrapper a:hover {
    color: rgba(255,255,255,1)
}

.ts-textcolor-white .ts-titlebar-main .entry-title,.ts-textcolor-white .ts-titlebar-main .entry-subtitle {
    color: #fff
}

.ts-textcolor-dark .ts-titlebar-main .breadcrumb-wrapper a {
    color: rgba(0,0,0,.6)
}

.ts-textcolor-dark .ts-titlebar-main .breadcrumb-wrapper,.ts-textcolor-dark .ts-titlebar-main .breadcrumb-wrapper a:hover {
    color: rgba(0,0,0,.8)
}

.ts-textcolor-dark .ts-titlebar-main .entry-title,.ts-textcolor-dark .ts-titlebar-main .entry-subtitle {
    color: rgba(0,0,0,.9)
}

.themestek-titlebar-main .breadcrumb-wrapper a {
    color: #999
}

.ts-titlebar-textcolor-custom .ts-titlebar .breadcrumb-wrapper a {
    opacity: .8
}

.ts-titlebar-textcolor-custom .ts-titlebar .breadcrumb-wrapper a:hover {
    opacity: 1
}

.ts-titlebar-wrapper.ts-bgimage-no .ts-titlebar-wrapper-bg-layer {
    opacity: 1
}

.ts-titlebar-main h3.ts-subtitle {
    opacity: .8
}

.ts-titlebar-wrapper.ts-breadcrumb-on-bottom .ts-titlebar-main>.container {
    padding: 0;
    position: relative;
    vertical-align: middle;
    display: table;
    height: 100%
}

.ts-titlebar-wrapper.ts-breadcrumb-on-bottom .ts-titlebar-main>.container .ts-titlebar-main-inner {
    vertical-align: middle;
    display: table-cell
}

.ts-titlebar-wrapper:not(.ts-breadcrumb-on-bottom) .ts-titlebar-main .breadcrumb-wrapper .container,.ts-titlebar-wrapper:not(.ts-breadcrumb-on-bottom) .ts-titlebar-main .entry-title-wrapper .container {
    width: auto
}

.ts-titlebar-wrapper:not(.ts-breadcrumb-on-bottom) .ts-titlebar-main .entry-title-wrapper .container {
    padding-left: 0
}

hr.ts-titlebar-border {
    margin-top: 0;
    margin-bottom: 0;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.05);
    background-color: transparent
}

.ts-titlebar-wrapper.ts-breadcrumb-on-bottom {
    position: relative;
    z-index: 9
}

.ts-titlebar-wrapper.ts-breadcrumb-on-bottom .ts-titlebar .breadcrumb-wrapper .container {
    background-color: #7eba03;
    padding: 17px 64px;
    display: inline-block;
    width: auto
}

.ts-bgcolor-skincolor.ts-titlebar-wrapper.ts-breadcrumb-on-bottom .ts-titlebar .breadcrumb-wrapper .container {
    background-color: #3d3d3d
}

.themestek-wide.themestek-sticky-footer .site-content-wrapper {
    z-index: 1
}

ul.footer-nav-menu li:last-child:after {
    content: ""
}

.footer-nav-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    float: right
}

.footer-nav-menu>li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 18px;
    vertical-align: top;
    position: relative
}

.footer-nav-menu>li:last-child {
    padding-right: 0
}

.footer-nav-menu li ul {
    display: none!important
}

.bottom-footer-inner,.second-footer-inner {
    position: relative
}

.ts-footer2-left,.ts-footer2-right {
    padding-top: 50px;
    padding-bottom: 50px
}

.ts-footer2-right {
    text-align: left
}

.col-sm-12.ts-footer2-left,.col-sm-12.ts-footer2-right {
    text-align: center;
    line-height: 30px
}

.second-footer-inner:before {
    content: "";
    height: 1px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%
}

.footer .ts-footer2-right .themestek-social-links-wrapper {
    margin-top: 0;
    text-align: right
}

.footer #second-footer .widget_nav_menu {
    float: left;
    width: 50%
}

.footerlogo {
    margin-bottom: 30px
}

.footerlogo img {
    max-height: 55px
}

.enhanced-text-widget p {
    margin-bottom: 30px
}

.footer .themestek-social-links-wrapper {
    margin-top: 30px
}

.footer .social-icons li {
    padding-top: 0!important
}

.footer .social-icons li>a {
    width: 30px;
    height: 30px;
    line-height: 30px;
    color: rgba(0,0,0,.35);
    margin-right: 8px;
    background-color: transparent;
    font-size: 16px
}

.footer .social-icons li>a:hover {
    color: #031b4e
}

footer a {
    color: #8893b9
}

.footer .first-footer-inner .widget.ts-footer-cta {
    margin: 0
}

.footer .first-footer-inner .widget .ts-vc_btn3-container,.footer .first-footer-inner .widget .ts-vc_cta3-container {
    margin-bottom: 0
}

.footer .first-footer-inner .ts-vc_general.ts-vc_cta3 h2 {
    color: #fff!important;
    font-size: 26px;
    line-height: 36px;
    margin-bottom: 0;
    margin-top: 3px
}

.footer .first-footer-inner .ts-vc_cta3_content-container {
    width: 100%;
    display: table
}

.footer .first-footer-inner .ts-vc_general.ts-vc_cta3 h2 {
    font-weight: 400
}

.footer .first-footer-inner .ts-vc_general.ts-vc_cta3 strong {
    display: block;
    font-size: 26px
}

.footer .first-footer-inner .ts-vc_cta3_content-container {
    position: relative
}

.site-footer .sidebar-container.ts-textcolor-dark .ts-vc_cta3_content-container a {
    color: #fff
}

.site-footer .sidebar-container.ts-textcolor-white .tagcloud a,.site-footer .ts-bgcolor-skincolor .tagcloud a {
    border-color: rgba(255,255,255,1);
    color: rgba(255,255,255,.9)
}

.footer .ts-bgcolor-skincolor .widget-title:after {
    background-color: #fff
}

.site-footer .sidebar-container.ts-textcolor-white .widget_calendar caption,.site-footer .ts-bgcolor-skincolor .widget_calendar caption,.site-footer .ts-bgcolor-skincolor .wp-caption .wp-caption-text {
    color: rgba(255,255,255,.9)
}

.site-footer-w .ts-textcolor-white a,.site-footer-w .ts-textcolor-white a:hover,.site-footer-w .ts-textcolor-white .widget .widget-title {
    color: #fff
}

.site-footer-w .ts-textcolor-white .bottom-footer-inner {
    border-top-color: rgba(255,255,255,.18)
}

.site-footer-w .ts-textcolor-white .social-icons li>a {
    border-color: rgba(255,255,255,.18);
    color: rgba(255,255,255,.8)
}

.site-footer-w .ts-textcolor-white .social-icons li>a:hover {
    border-color: rgba(255,255,255,.5)
}

.site-footer-w .ts-textcolor-white {
    color: rgba(255,255,255,.7)
}

.footer .ts-textcolor-dark {
    color: #8893b9
}

.footer .ts-bgcolor-skincolor.ts-textcolor-dark .widget-title:after {
    background-color: rgba(0,0,0,.3)
}

.site-footer .sidebar-container.ts-textcolor-dark .tagcloud a {
    border-color: #eee;
    color: #333
}

.site-footer .sidebar-container.ts-textcolor-dark .tagcloud a:hover {
    color: #fff;
    border-color: transparent
}

.footer .ts-bgcolor-skincolor .search-form .search-field::placeholder {
    color: rgba(255,255,255,.9);
    opacity: 1
}

.footer .ts-bgcolor-skincolor .search-form .search-field:-ms-input-placeholder {
    color: rgba(255,255,255,.9)
}

.footer .ts-bgcolor-skincolor .search-form .search-field::-ms-input-placeholde {
    color: rgba(255,255,255,.9)
}

.footer .ts-bgcolor-skincolor .select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent transparent
}

.footer .ts-bgcolor-skincolor .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #fff transparent
}

.ts-footer-cta-wrapper {
    padding-top: 40px;
    padding-bottom: 40px
}

.ts-footer-cta-wrapper .ts-vc_cta3-content {
    margin-right: 180px
}

.ts-footer-cta-wrapper .ts-vc_cta3_content-container {
    position: relative;
    width: 100%
}

.ts-footer-cta-wrapper .ts-vc_cta3-actions {
    max-width: 100%;
    position: absolute;
    top: 0;
    right: 0
}

.ts-footer-cta-wrapper .ts-vc_btn3-container,.ts-footer-cta-wrapper .ts-vc_general.ts-vc_cta3 h2 {
    margin-bottom: 0
}

.ts-footer-cta-wrapper .ts-vc_general.ts-vc_cta3 h2 {
    font-weight: 500
}

.ts-footer-cta-wrapper .ts-vc_btn3-container .ts-vc_general.ts-vc_btn3 {
    background-color: transparent!important;
    border: 3px solid #fff;
    border-radius: 0
}

.ts-footer-cta-wrapper .ts-vc_btn3-container .ts-vc_general.ts-vc_btn3:hover {
    background-color: #fff!important;
    color: #031b4e
}

.sidebar h3.widget-title {
    margin-top: 0;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px
}

.sidebar h3.widget-title:after {
    content: '';
    position: absolute;
    height: 2px;
    width: 50px;
    left: 0;
    bottom: 0
}

.widget ul,.widget ol {
    list-style-type: none;
    margin: 0;
    padding: 0
}

.widget,.wpb_row .wpb_widgetised_column .widget {
    margin: 45px 0 35px;
    word-wrap: break-word
}

.footer-rows-inner .sidebar-container:not(.ts-footer-cta-wrapper):last-child .container>div {
    border-bottom: 1px solid #e5e5e5
}

.footer .widget {
    margin: 75px 0 60px
}

.footer .ts-newsletter-margin {
    margin-top: -23px
}

.widget ul>li {
    padding: 0 0 15px 0
}

.sidebar .widget ul:not(.slides):not(.cart_list):not(.labtechco_contact_widget_wrapper)>li:last-child,.widget ul>li ul>li:last-child {
    border-bottom: 0;
    padding-bottom: 0
}

.widget .widget-title {
    margin-bottom: 20px;
    position: relative;
    margin-top: 0
}

.sidebar .widget:not(.widget_search) {
    border: 1px solid #e1eeff;
    padding: 25px 30px;
    margin-bottom: 30px;
    font-size: 14px
}

.widget ul:not(.slides):not(.cart_list):not(.labtechco_contact_widget_wrapper)>li {
    font-weight: 400
}

.sidebar .widget ul:not(.slides):not(.cart_list):not(.optico_contact_widget_wrapper)>li:last-child,.widget ul>li ul>li:last-child {
    border-bottom: 0;
    padding-bottom: 0
}

.widget.labtechco_category_list_widget li {
    padding: 0!important;
    border-top: none!important
}

.widget.themestek_widget_recent_entries ul:not(.slides):not(.cart_list)>li {
    padding: 15px 0
}

.widget.themestek_widget_recent_entries ul:not(.slides):not(.cart_list):not(.labtechco_contact_widget_wrapper)>li:first-child,.widget_shopping_cart .cart_list li:first-child,.widget>ul:not(.slides):not(.cart_list)>li:first-child,.widget.widget_nav_menu>div>ul:first-child>li:first-child {
    border-top: none;
    padding-top: 0
}

.labtechco_flicker_widget_wrapper a {
    overflow: hidden;
    display: block;
    margin: 0 8px 0 0;
    width: 80px;
    height: 80px;
    display: inline-block;
    background: none
}

.footer .labtechco_flicker_widget_wrapper a {
    width: 80px;
    height: 80px
}

.labtechco_flicker_widget_wrapper a img {
    width: 100%;
    height: 100%
}

.footercontactinfo .social-icons {
    margin-left: 0!important
}

.footercontactinfo>.contactinfo {
    font-size: 19px;
    line-height: 29px;
    color: #fff;
    border-bottom: 1px solid rgba(255,255,255,.18);
    margin-bottom: 22px;
    padding-bottom: 18px!important
}

.footercontactinfo>.contactinfo:last-child {
    margin-bottom: 0;
    padding-bottom: 0px!important;
    border-bottom: none
}

.footercontactinfo .contactinfo span {
    font-size: 13px
}

ul.labtechco_contact_widget_wrapper {
    list-style: none;
    margin-left: 0;
    padding-left: 0
}

ul.labtechco_contact_widget_wrapper li {
    padding-left: 35px;
    position: relative;
    padding-top: 0;
    padding-bottom: 18px
}

ul.labtechco_contact_widget_wrapper li:before {
    position: absolute;
    left: 0;
    top: 3px;
    font-weight: 700;
    font-size: 18px
}

ul.ts-recent-post-list {
    list-style: none;
    padding: 0
}

ul.ts-recent-post-list>li img {
    display: block;
    width: 80px;
    height: 80px;
    float: left;
    margin-right: 15px;
    padding: 3px;
    border: 1px solid rgba(255,255,255,.24)
}

ul.ts-recent-post-list>li>a {
    font-size: 15px
}

ul.ts-recent-post-list li:after {
    content: " ";
    display: table;
    clear: both
}

ul.ts-recent-post-list>li .post-date {
    display: block;
    font-size: 13px
}

.main-holder ul.product_list_widget>li {
    padding: 15px 0
}

ul.product_list_widget>li:first-child,ul.ts-recent-post-list>li:first-child {
    border-top: 0;
    padding-top: 0
}

.tagcloud a {
    font-size: 14px!important;
    margin-bottom: 10px;
    display: inline-block;
    font-weight: 600;
    position: relative;
    display: inline-block;
    color: #7884ac;
    font-weight: 500;
    padding: 5px 11px;
    margin-bottom: 6px;
    margin-right: 6px;
    background: #f6faff
}

.tagcloud a:hover {
    color: #fff;
    border-color: transparent
}

.ts-textcolor-white .tagcloud a:hover {
    color: #fff
}

.widget_recent_comments li.recentcomments,.widget_recent_entries a,.widget_meta a,.widget_categories a,.widget_archive li a,.widget_pages li a,.widget_nav_menu li a {
    position: relative
}

.sidebar .widget_recent_comments li.recentcomments:before {
    top: 13px
}

.sidebar .widget_recent_comments li.recentcomments:first-child:before {
    top: 5px
}

.sidebar .widget_categories li {
    padding-bottom: 0;
    position: relative;
    margin: 12px 0;
    padding: 0!important
}

.sidebar .widget_categories li span {
    position: absolute;
    right: 0;
    top: 0;
    width: 28px;
    height: 28px;
    line-height: 28px;
    background-color: #fff;
    text-align: center;
    border-radius: 50%;
    display: block;
    font-size: 12px;
    font-weight: 400
}

.widget .menu-main-menu-container {
    float: none
}

.widget ul>li ul {
    margin-left: 15px;
    margin-top: 15px
}

.themestek-sidebar-both .widget ul>li ul,.themestek-sidebar-bothleft .widget ul>li ul,.themestek-sidebar-bothright .widget ul>li ul {
    margin-left: 8px
}

.flexslider {
    border: none;
    background: none;
    box-shadow: none;
    margin-bottom: 0
}

.wpb_gallery .wpb_flexslider .flex-control-nav {
    margin-top: -25px
}

.sidebar .wpb_gallery .flex-direction-nav {
    display: none
}

.sidebar .wpb_gallery.wpb_content_element {
    margin-bottom: 0
}

.widget_calendar table td#today {
    font-weight: 700
}

.widget_calendar table {
    border-collapse: separate;
    border-color: #e1eeff;
    border-spacing: 0;
    border-style: solid;
    border-width: 1px 0 0 1px;
    margin-bottom: 24px;
    width: 100%
}

.widget_calendar table th,.widget_calendar table td {
    border-bottom: 1px solid #e1eeff;
    border-right: 1px solid #e1eeff;
    padding: 10px
}

.widget_calendar caption {
    padding: 0;
    margin: 0;
    margin-bottom: 5px;
    letter-spacing: .04em;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 700
}

.widget_calendar tbody a {
    display: block;
    font-weight: 700
}

.ts-textcolor-dark .widget_calendar table {
    border-color: rgba(0,0,0,.07)
}

.ts-textcolor-dark .widget_calendar table th,.ts-textcolor-dark .widget_calendar table td {
    border-bottom-color: rgba(0,0,0,.07);
    border-right-color: rgba(0,0,0,.07)
}

.ts-textcolor-white .widget_calendar table th,.ts-textcolor-white .widget_calendar table td,.ts-textcolor-white .widget_calendar table {
    border-color: rgba(229,229,229,.12)
}

.ts-textcolor-white .newsletter-widget .newsletter-email {
    color: rgba(255,255,255,.34)
}

.ts-textcolor-white .mc_form_inside .mc_merge_var:after,.ts-textcolor-white .newsletter-widget:after {
    color: rgba(255,255,255,.4)
}

.ts-textcolor-dark .mc_form_inside .mc_merge_var,.ts-textcolor-dark .newsletter-submit,.ts-textcolor-dark .newsletter-widget {
    border-color: rgba(0,0,0,.07)
}

.widget.themestek_widget_list_all_posts h3.widget-title {
    display: none
}

.widget.themestek_widget_list_all_posts ul>li {
    border: none;
    padding: 0!important;
    margin-bottom: 10px
}

.widget.themestek_widget_list_all_posts ul>li a {
    background-color: #fff;
    padding: 13px 20px;
    display: block;
    position: relative;
    text-transform: uppercase
}

.widget.themestek_widget_list_all_posts ul>li a:after {
    content: '\e809';
    font-family: "ts-labtechco-icons";
    font-style: normal;
    font-weight: 400;
    position: absolute;
    top: 15px;
    right: 20px
}

.widget.themestek_widget_list_all_posts ul>li.ts-post-active a,.widget.themestek_widget_list_all_posts ul>li a:hover {
    color: #fff
}

.widget .download .item-download {
    background-color: #031b4e;
    margin-bottom: 5px;
    position: relative
}

.widget .download .item-download a {
    display: block;
    padding: 20px;
    color: #fff
}

.widget .download .item-download .fa {
    color: #fff;
    font-size: 18px;
    padding-right: 20px
}

.single-service-contact {
    padding: 25px;
    background: #fff;
    position: relative;
    overflow: hidden
}

.single-service-contact-inner {
    position: relative;
    z-index: 2
}

.single-service-contact:after {
    content: '\e832';
    font-family: "ts-labtechco-icons";
    font-size: 137px;
    font-style: normal;
    font-weight: 400;
    position: absolute;
    bottom: 26px;
    right: -22px;
    transform: rotate(-30deg);
    z-index: 1;
    opacity: .15
}

.single-service-contact h3 {
    text-transform: uppercase;
    font-size: 22px;
    color: #3e3e3e;
    margin: 0;
    font-weight: 700;
    margin: 0 0 20px 0
}

.single-service-contact p {
    font-size: 15px;
    color: #5b5b5b;
    margin: 0 0 25px 0
}

.single-service-contact a {
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    text-decoration: none!important
}

.single-service-contact a i {
    margin: 0 0 0 10px
}

.ts-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap {
    background: none
}

#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-item.mega-menu-megamenu ul.mega-sub-menu li.mega-menu-item .calendar_wrap a {
    padding: 0;
    text-align: left;
    border-bottom: 0
}

#site-header-menu #site-navigation div.nav-menu>ul {
    margin: 0;
    padding: 0
}

#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-item>a:after {
    margin: 0;
    padding-left: 2px;
    opacity: .7
}

#site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a,#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li.mega-menu-item a:focus {
    background: none
}

.righticon,#site-header-menu #site-navigation .mega-menu-toggle:after {
    display: none
}

.header-controls .search_box a>.ti-close,.header-controls .search_box a>.ti-search,.header-controls .ti-bag {
    height: 33px;
    width: 33px;
    line-height: 33px;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 15px
}

.ts-post-featured-outer-wrapper,.themestek-box-blog,article.post,.themestek-post-item-thumbnail,.ts-featured-wrapper {
    position: relative
}

.themestek-box-blog.themestek-blogbox-format-audio .ts-blogbox-audio-mp3player-w,article.post_format-post-format-video .ts-post-format-video,article.themestek-blogbox-format-video .ts-post-format-video {
    position: relative;
    overflow: hidden;
    padding-bottom: 60%;
    padding-top: 25px;
    height: 0
}

.themestek-blog-box-lr.themestek-box-blog.themestek-blogbox-format-video .ts-post-format-video {
    padding-bottom: 78%
}

.themestek-box-blog.themestek-blogbox-format-audio iframe,article.post_format-post-format-video .ts-post-format-video iframe,article.themestek-blogbox-format-video .ts-post-format-video iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none
}

.ts-blog-classic-featured-wrapper {
    position: relative
}

.themestek-box-blog-classic .ts-blog-classic-datebox-overlay .ts-blog-classic-dbox-date,.themestek-box-blog-classic .ts-blog-classic-datebox-overlay .ts-blog-classic-dbox-month {
    display: block;
    text-align: center;
    font-family: 'Roboto',sans-serif
}

.themestek-box-blog-classic .ts-blog-classic-datebox-overlay .ts-blog-classic-dbox-date {
    font-size: 28px;
    line-height: 28px;
    font-weight: 700;
    margin-top: 5px;
    letter-spacing: 2px
}

.themestek-box-blog-classic .ts-blog-classic-datebox-overlay .ts-blog-classic-dbox-month {
    font-size: 16px;
    line-height: 24px;
    font-weight: 700;
    text-transform: uppercase
}

.themestek-box-blog-classic .ts-blog-classic-datebox-overlay {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 76px;
    z-index: 9;
    padding: 12px 0;
    text-align: center;
    color: #fff
}

.blog .entry-content,.ts-blog-classic-box-content {
    -ms-word-wrap: break-word;
    word-wrap: break-word
}

.themestek-box-blog-classic .themestek-box-title h4 {
    margin-top: 10px;
    font-size: 28px;
    line-height: 38px
}

.themestek-box-blog-classic .themestek-box-title a {
    color: #031b4e
}

.themestek-box-blog-classic .ts-featured-outer-wrapper {
    margin-bottom: 25px
}

.themestek-box-blog-classic .ts-blog-classic-box-content .entry-header {
    margin-bottom: 10px
}

.themestek-box-blog-classic .ts-blog-classic-box-content {
    margin-bottom: 65px;
    padding-bottom: 60px;
    border-bottom: 1px solid #e1eeff;
    font-size: 14px;
    line-height: 22px;
    position: relative
}

.themestek-box-blog-classic .ts-blog-classic-box-content:not(.ts-blog-classic-no-footer-meta) .themestek-box-desc-text {
    padding-bottom: 60px
}

.themestek-box-blog-classic .ts-blog-classic-box-content .entry-content {
    position: relative
}

body:not(.search-results) .site-main article.themestek-box-blog-classic:last-of-type .ts-blog-classic-box-content {
    border: 0
}

.themestek-box-blog-classic .more-link-wrapper {
    margin-top: 30px;
    display: inline-block;
    position: absolute;
    bottom: 0
}

.themestek-box-blog-classic .ts-blog-classic-box-content.ts-blog-classic-no-footer-meta .more-link-wrapper {
    position: relative
}

.blog .entry-content,.ts-blog-classic-box-content,.themestek-box-blog-classic .entry-header,.ts-titlebar-main-inner .entry-title {
    -ms-word-wrap: break-word;
    word-wrap: break-word
}

.ts-blog-classic-box-content .entry-content p:last-of-type:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.ts-blog-classic-box-content .entry-content p:last-of-type {
    margin-bottom: 0
}

.themestek-box-blog-classic .ts-meta-line.posted-on a {
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    text-align: center
}

.themestek-box-blog-classic .ts-featured-meta-wrapper {
    margin-bottom: 10px
}

.themestek-box-blog-classic .ts-featured-wrapper {
    margin-bottom: 25px
}

.themestek-box-blog-classic .ts-meta-line,.themestek-box-blog-classic .ts-footer-meta-line-w {
    margin-right: 15px;
    font-size: 12px;
    font-family: 'Roboto',sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px
}

.themestek-box-blog-classic .ts-footer-meta-line-w:last-child {
    margin-right: 0
}

.themestek-box-blog-classic .ts-footer-meta-wrapper {
    position: absolute;
    right: 0;
    bottom: 0
}

.themestek-box-blog-classic.format-quote .ts-blog-classic-datebox-overlay,.themestek-box-blog-classic.format-link .ts-blog-classic-datebox-overlay,.themestek-box-blog-classic.ts-no-featured-content .ts-blog-classic-datebox-overlay,.themestek-box-blog-classic .ts-featured-meta-wrapper .ts-blog-post-date,.single .themestek-box-blog-classic .ts-footer-meta-wrapper {
    display: none
}

.themestek-box-blog-classic.ts-no-featured-content .ts-featured-meta-wrapper .ts-blog-post-cat,.themestek-box-blog-classic.ts-no-featured-content .ts-featured-meta-wrapper .ts-blog-post-date {
    display: inline-block
}

.ts-blogbox-style-1 .themestek-blogbox-footer-left a,.themestek-box-blog-classic .more-link-wrapper a {
    font-weight: 500;
    padding-right: 22px;
    position: relative;
    display: inline-block;
    color: #031b4e;
    text-transform: uppercase;
    font-size: 14px
}

.ts-blogbox-style-1 .themestek-blogbox-footer-left a:after,.themestek-box-blog-classic .more-link-wrapper a:after {
    position: absolute;
    font-family: "ts-labtechco-icons";
    content: "\e850";
    top: 0;
    right: 0
}

.themestek-box-blog-classic .ts-blog-classic-footer {
    margin-top: 35px
}

.ts-blog-classic-footer:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.themestek-box-blog-classic .themestek-blog-classic-footer-readmore {
    float: left
}

.themestek-box-blog-classic .ts-social-share-post-wrapper,.themestek-box-blog-classic .ts-blog-classic-footer .ts-featured-meta-wrapper {
    float: right
}

.themestek-box-blog-classic .ts-blog-classic-footer .ts-featured-meta-wrapper a i {
    font-size: 13px;
    padding-right: 5px;
    vertical-align: middle
}

.post-password-form input[type="submit"] {
    padding: 10px 34px 13px
}

.themestek-box-blog-classic.sticky {
    padding: 30px;
    margin-bottom: 60px;
    border: 3px solid rgba(0,0,0,.05)
}

.themestek-box-blog-classic.sticky .ts-blog-classic-box-content {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none
}

.ts-entry-meta-wrapper {
    margin-bottom: 5px;
    color: #7884ac;
    text-transform: uppercase;
    font-size: 12px;
    font-family: 'Roboto',sans-serif;
    letter-spacing: 1px
}

.ts-entry-meta-wrapper .ts-meta-line a {
    color: #7884ac;
    font-size: 12px;
    text-transform: uppercase
}

.ts-entry-meta-wrapper .ts-meta-line:last-child {
    margin-right: 0
}

.ts-entry-meta-wrapper .ts-meta-line:last-child:after {
    display: none
}

.ts-entry-meta-wrapper .ts-meta-line {
    margin-bottom: 10px
}

.ts-entry-meta-wrapper .ts-meta-line {
    margin-right: 15px;
    position: relative
}

.ts-entry-meta-wrapper .ts-meta-line:after {
    position: absolute;
    content: "|";
    right: -7px;
    top: -6px
}

.ts-entry-meta-wrapper .ts-meta-line:last-child:after {
    display: none
}

.themestek-box-blog .themestek-box-content {
    padding: 25px 0
}

.themestek-box-blog .ts-featured-meta-wrapper .ts-meta-line i {
    color: #fff
}

.themestek-box-blog .themestek-box-title h4 a {
    color: #031b4e
}

.themestek-box-blog .themestek-box-title h4 {
    font-size: 23px;
    font-weight: 700;
    line-height: 33px
}

.ts-col-bgcolor-darkgrey .themestek-box-blog .themestek-box-title h4 a {
    color: #fff
}

.themestek-box-blog .themestek-box-desc {
    margin-top: 10px;
    margin-bottom: 0
}

.themestek-box-blog .themestek-box-desc-footer {
    margin-top: 25px
}

.themestek-box-blog .ts-flexslider ul li img {
    max-width: 100%
}

.themestek-box-blog .ts-flexslider .flex-control-nav {
    bottom: auto;
    left: auto;
    top: 15px;
    right: 15px;
    width: auto
}

.themestek-box.themestek-blog-box-lr .themestek-box-content,.themestek-box.themestek-blog-box-lr .themestek-box-content-inner {
    padding: 0
}

.themestek-box.themestek-blog-box-lr .themestek-box-content-inner {
    text-align: left;
    padding-left: 15px
}

.themestek-box-blog.themestek-blog-box-view-left-image .col-md-4.themestek-box-img-left,.themestek-box-blog.themestek-blog-box-view-left-image .ts-box-col-wrapper,.themestek-box-blog.themestek-blog-box-view-left-image .post-item {
    padding-left: 0
}

.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line.cat-links {
    display: inline-block;
    background-color: #fd972e;
    padding: 2px 6px
}

.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line.cat-links,.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line.cat-links a {
    color: #fff
}

.themestek-box-blog.ts-blogbox-style-2 .post-item {
    background: #fff;
    display: flex;
    align-items: center
}

.themestek-box-blog.ts-blogbox-style-2 .themestek-box-title h4 {
    margin-bottom: 0;
    font-size: 18px
}

.themestek-box-blog.ts-blogbox-style-2 .themestek-box-desc {
    margin-bottom: 0
}

body.blog .ts-blogbox-style-2 {
    margin-bottom: 30px
}

.ts-blogbox-style-1.themestek-box-blog {
    background-color: #fff
}

.ts-blogbox-style-1 .ts-featured-meta-wrapper {
    padding: 0
}

.ts-blogbox-style-1 .themestek-box-content {
    padding: 25px 25px;
    border: 1px solid #f2f2f2
}

.ts-blogbox-style-1 .ts-bottom-meta-wrapper {
    border-top: 1px solid #f2f2f2;
    padding-top: 25px;
    margin-top: 25px
}

.ts-blogbox-style-1 .ts-blogbox-comment-w a {
    color: #031b4e
}

.ts-blogbox-style-1 .ts-blogbox-comment-w a span,.ts-blogbox-style-1 .ts-blogbox-comment-w a i {
    display: inline-block;
    vertical-align: middle;
    line-height: 11px
}

.ts-blogbox-style-1 .ts-blogbox-comment-w a i {
    margin-right: 10px
}

.ts-blogbox-style-1 .ts-post-format-icon-w {
    position: absolute;
    z-index: 1;
    width: 55px;
    height: 55px;
    font-size: 30px;
    line-height: 55px;
    text-align: center;
    width: 0;
    height: 0;
    border-top: 60px solid #fff;
    border-right: 60px solid transparent;
    left: 5px;
    top: 5px
}

.ts-blogbox-style-1 .ts-post-format-icon-w i {
    position: absolute;
    top: -70px;
    color: #3368c6;
    left: 6px;
    font-size: 17px
}

.ts-blogbox-style-1 .ts-post-format-icon-w {
    border-top: 60px solid #3368c6
}

.ts-blogbox-style-1 .ts-post-format-icon-w i {
    color: #fff
}

.ts-bgcolor-skincolor .ts-blogbox-style-1 .ts-post-format-icon-w {
    border-top-color: #fff
}

.single-post .comments-area .comments-title {
    font-size: 30px;
    text-transform: uppercase;
    font-weight: 600;
    line-height: 40px
}

.comment-list .children {
    margin-left: 35px
}

.comment-meta .ts-comment-owner a,.ts-comment-owner {
    display: block;
    font-size: 18px;
    font-style: normal;
    color: #031b4e
}

.comment-list,.comment-list .children {
    list-style-type: none;
    padding: 0
}

.comment-list>li:last-child:after {
    display: none
}

.comment-body .reply a {
    font-size: 13px;
    line-height: 30px;
    padding: 2px 30px 2px 18px;
    color: #fff;
    margin-right: 5px;
    border-radius: 0
}

.comment-body {
    margin-left: 105px;
    margin-top: 35px;
    margin-bottom: 30px;
    padding: 20px;
    position: relative;
    background-color: #f6faff;
    border: 1px solid #f6faff
}

.comment-body:after,.comment-body:before {
    content: "";
    position: absolute;
    top: 14px;
    left: -8px;
    z-index: 10;
    width: 0;
    height: 0;
    border-style: solid solid outset;
    border-width: 8px 10px 8px 0;
    border-color: transparent #f6faff transparent transparent
}

.comment-body:before {
    z-index: 9;
    left: -10px;
    border-color: transparent #f6faff transparent transparent
}

.comment-body .comment-reply-link:after {
    position: absolute;
    top: 12px
}

.pingback .comment-author {
    display: none
}

.pingback .comment-body {
    margin-left: 0
}

.pingback .comment-body:after,.pingback .comment-body:before {
    display: none
}

.pingback .ts-comment-owner a {
    font-weight: 600;
    font-size: 16px;
    color: #031b4e
}

.comment-author {
    float: left;
    text-align: center;
    width: 80px;
    height: 80px;
    display: block;
    margin-right: 25px;
    overflow: hidden;
    margin-left: -127px;
    margin-top: -20px
}

.comment-author img {
    max-width: 100%;
    height: auto
}

.comment-author .fn {
    word-wrap: break-word
}

.comment-author .fn,.comment-author .url,.comment-reply-link,.comment-reply-login {
    color: #838383;
    font-size: 14px;
    font-style: normal;
    font-weight: 400
}

.comment-author .fn {
    color: rgba(0,0,0,.6)
}

.comment-reply-link:after {
    font-family: 'ts-labtechco-icons';
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    margin-right: .2em;
    text-align: center;
    opacity: .8;
    font-variant: normal;
    text-transform: none;
    line-height: 22px;
    font-size: 14px;
    content: "\e809";
    margin-left: 7px;
    vertical-align: bottom
}

.comment-reply-link:before,.comment-reply-login:before {
    margin-right: 7px
}

.says {
    display: none
}

.no-avatars .comment-author {
    margin: 0 0 5px;
    max-width: 100%;
    position: relative
}

.no-avatars .comment-metadata,.no-avatars .comment-content,.no-avatars .comment-list .reply {
    width: 100%
}

.comment-list .edit-link {
    margin-top: 5px;
    display: block;
    padding-left: 105px
}

.comment-meta,.comment-meta a {
    color: #a2a2a2;
    font-size: 14px
}

.ping-meta {
    color: #a2a2a2;
    font-size: 13px;
    line-height: 1
}

.comment-awaiting-moderation {
    color: #a2a2a2
}

.comment-form p:not(.comment-notes) {
    margin-bottom: 20px
}

.themestek-page-full-width.themestek-boxed .comments-area {
    margin: 30px 15px 60px 15px
}

.comments-area {
    margin-top: 60px;
    margin-bottom: 60px
}

.comment-form {
    margin-bottom: 20px
}

.comment .comment-respond {
    margin-bottom: 20px;
    padding: 20px
}

.comment-reply-title small a {
    color: #131310;
    display: inline-block;
    float: right;
    height: 16px;
    overflow: hidden;
    width: 16px;
    margin-top: 10px
}

ol.comment-list li #respond {
    width: calc(100% - 100px);
    padding: 20px 0;
    margin-left: 100px
}

.comment-reply-title small a:hover {
    color: #ed331c;
    text-decoration: none
}

.comment-reply-title small a:before {
    font-family: FontAwesome;
    content: "\f00d";
    vertical-align: top
}

.sidebar .comment-list .comment-reply-title,.sidebar .comment-list .comment-respond .comment-form {
    padding: 0
}

.comment-form .comment-notes {
    margin-bottom: 25px;
    font-style: italic
}

.ts-comment-date-link {
    float: right
}

.ts-fn {
    font-size: 17px;
    color: #212121;
    font-weight: 700
}

.comment-body .ts-fn a {
    font-size: 17px;
    color: #212121
}

.comment-body .ts-fn {
    color: #a2a2a2
}

.comment-reply-link {
    font-size: 14px;
    margin-top: 5px;
    display: inline-block
}

.ts-comment-date-link:before {
    font-family: "FontAwesome";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    margin-right: .2em;
    text-align: center;
    opacity: .8;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    font-size: 13px;
    content: "\f017"
}

.comment-body p {
    margin-top: 30px;
    display: block
}

.comment-reply-title {
    font-size: 30px;
    line-height: 40px;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 10px;
    margin-top: 0
}

.comment-body blockquote p {
    margin-top: 0
}

.ts-post-prev-next-buttons {
    padding-top: 45px;
    border-top: 1px solid rgba(51,51,51,.07);
    margin-top: 60px;
    margin-bottom: 30px
}

.themestek-box-blog-classic .ts-blog-classic-box-content,.ts-post-prev-next-buttons {
    border-color: #e1eeff
}

.ts-post-prev-next-buttons .ts-right-align-btn {
    float: right
}

.ts-post-prev-next-buttons:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.themestek-pagination {
    display: block;
    margin-bottom: 60px;
    margin-top: 30px;
    text-align: center
}

.themestek-pagination .page-numbers {
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    display: inline-block;
    background-color: #fff;
    color: #313131;
    font-weight: 700;
    border: 1px solid #e0e0e0;
    border-radius: 0;
    margin: 0 5px;
    padding: 0;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

.main-holder .site-content nav.woocommerce-pagination ul li .page-numbers.current,.main-holder .site-content nav.woocommerce-pagination ul li a:hover,.themestek-pagination .page-numbers.current,.themestek-pagination .page-numbers:hover {
    border-color: transparent;
    color: #fff
}

.ts-bgcolor-skincolor .themestek-pagination .page-numbers.current,.ts-bgcolor-skincolor .themestek-pagination .page-numbers:hover {
    background-color: #f5f5f5
}

.page-links {
    font-style: normal
}

.entry-content .format-status .entry-content .page-links a,.entry-content .format-gallery .entry-content .page-links a,.entry-content .format-chat .entry-content .page-links a,.entry-content .format-quote .entry-content .page-links a,.entry-content .page-links a {
    padding: 0;
    border: none;
    display: inline-block
}

.page .entry-content .page-links a {
    padding: 0 5px
}

.entry-content .format-status .entry-content .page-links span,.entry-content .format-gallery .entry-content .page-links span,.entry-content .format-chat .entry-content .page-links span,.entry-content .format-quote .entry-content .page-links span,.entry-content .page-links span:not(.page-links-title),.entry-content .format-status .entry-content .page-links a span,.entry-content .format-gallery .entry-content .page-links a span,.entry-content .format-chat .entry-content .page-links a span,.entry-content .format-quote .entry-content .page-links a span,.entry-content .page-links a span {
    border: 1px solid #e0e0e0;
    border-radius: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    padding: 0;
    display: inline-block;
    text-align: center;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    font-style: normal;
    font-size: 15px;
    color: #031b4e
}

.entry-content .format-status .entry-content .page-links span,.entry-content .format-gallery .entry-content .page-links span,.entry-content .format-chat .entry-content .page-links span,.entry-content .format-quote .entry-content .page-links span,.entry-content .page-links>span:not(.page-links-title) {
    background-color: #031b4e;
    color: #fff;
    border-color: transparent
}

.themestek-blogbox-format-quote blockquote {
    margin-top: 0
}

.ts-post-tag-cat {
    margin-top: 30px
}

.ts-post-tag-cat:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.ts-post-tag-cat .ts-post-tag,.ts-post-tag-cat .ts-post-cat {
    display: inline-block;
    float: left;
    line-height: 20px;
    margin-top: 10px;
    text-align: left;
    margin-right: 50px
}

.single-post article.post .entry-content {
    margin-bottom: 20px
}

.ts-social-share-wrapper .ts-social-share-title,.ts-social-share-wrapper .ts-social-share-links,.ts-social-share-wrapper .ts-single-top-btn {
    float: left
}

.ts-social-share-wrapper:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.ts-social-share-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
    padding-right: 0
}

.ts-social-share-links ul li {
    display: inline-block;
    padding-right: 10px;
    padding-top: 6px
}

.ts-social-share-links ul li a {
    border: 2px solid #e1eeff;
    border-radius: 50%;
    display: block;
    height: 45px;
    width: 45px;
    line-height: 45px;
    text-align: center;
    font-size: 16px
}

.ts-social-share-links ul li a:hover {
    color: #fff;
    border-color: transparent
}

.themestek-pf-detailbox-list {
    list-style: none;
    padding-left: 0;
    overflow: hidden
}

.ts-social-share-title {
    padding-right: 10px;
    position: relative;
    margin-right: 9px;
    margin-top: 16px;
    font-weight: 500;
    font-size: 17px
}

.author-info {
    padding: 40px;
    background-color: #f8f8f8;
    position: relative;
    margin-top: 30px
}

.author-avatar {
    position: absolute
}

.author-description,.ts-author-social-links-wrapper {
    margin-left: 135px
}

.author-info .author-title {
    font-size: 22px;
    line-height: 32px
}

.author-info .ts-author-social-links-wrapper ul {
    list-style: none;
    padding: 0;
    margin: 0;
    padding-right: 15px;
    padding-top: 0
}

.author-info .ts-author-social-links-wrapper ul li {
    display: inline-block;
    padding-right: 10px;
    padding-top: 6px
}

.author-info .ts-author-social-links-wrapper ul li a {
    display: block;
    height: 35px;
    width: 35px;
    line-height: 35px;
    text-align: center;
    color: #031b4e
}

.themestek-box .themestek-static-box-image,.themestek-box .themestek-post-item {
    position: relative;
    overflow: hidden
}

.themestek-box .themestek-box-content-inner .ts-vc_btn3-container {
    margin-bottom: 0
}

.themestek-box .themestek-box-content-inner {
    padding-top: 20px
}

.entry-content .themestek-box h3 {
    font-size: 16px;
    line-height: 20px;
    font-weight: 700;
    text-transform: uppercase;
    ;margin-top: 0
}

.themestek-box .themestek-pf-box-title h3 {
    margin-bottom: 5px
}

.themestek-box h3 a {
    color: #031b4e
}

.themestek-box .themestek-box-category a {
    color: #8893b9;
    text-transform: uppercase;
    font-size: 12px
}

.themestek-box .ts-box-title,.themestek-box .themestek-box-desc {
    margin-bottom: 15px
}

.themestek-box-team .themestek-box-team-position,.themestek-box.ts-hover-style-2 .themestek-teambox-short-desc,.themestek-box.ts-hover-style-2 h4 a,.themestek-box.ts-hover-style-2 h3 a,.themestek-box.ts-hover-style-2 .themestek-box-desc,.themestek-box,.themestek-blog-classic-footer-readmore a:after,.themestek-box img,.themestek-box .themestek-item-thumbnail-inner {
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out
}

.ts-portfoliobox-style-1.themestek-box .themestek-box-desc {
    margin-bottom: 0;
    margin-top: 10px
}

.ts-portfoliobox-style-1 .themestek-box-content-inner {
    padding: 25px 25px 5px 25px
}

.ts-portfoliobox-style-1.themestek-box {
    border: 1px solid #e1eeff
}

.ts-portfoliobox-style-1.themestek-box:hover {
    border-color: #e1eeff
}

.ts-portfoliobox-style-1.themestek-box .themestek-pf-box-title h3 {
    margin-bottom: 0
}

.ts-portfoliobox-style-2 .themestek-item-thumbnail-inner {
    overflow: hidden;
    position: relative
}

.ts-portfoliobox-style-2 .themestek-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: '';
    text-align: left;
    opacity: 0;
    -webkit-transition: opacity .5s;
    transition: opacity .5s;
    background: rgba(80,173,255,.7)
}

.ts-portfoliobox-style-2:hover .themestek-overlay {
    opacity: 1;
    transition: all 500ms ease
}

.ts-portfoliobox-style-2 .themestek-overlay:before,.ts-portfoliobox-style-2 .themestek-overlay:after {
    position: absolute;
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;
    content: '';
    opacity: 0;
    -webkit-transition: opacity 0.55s,-webkit-transform 0.55s;
    transition: opacity 0.55s,transform 0.55s
}

.ts-portfoliobox-style-2 .themestek-overlay:before {
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    -webkit-transform: scale(0,1);
    transform: scale(0,1)
}

.ts-portfoliobox-style-2 .themestek-overlay:after {
    border-right: 1px solid #fff;
    border-left: 1px solid #fff;
    -webkit-transform: scale(1,0);
    transform: scale(1,0)
}

.ts-portfoliobox-style-2 .themestek-overlay:hover:before,.ts-portfoliobox-style-2 .themestek-overlay:hover:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1)
}

.themestek-box.ts-portfoliobox-style-3 {
    text-align: center;
    padding-bottom: 20px;
    background: #fff
}

.themestek-box.ts-portfoliobox-style-4 .themestek-box-category a {
    font-size: 14px;
    line-height: 18px;
    font-weight: 600
}

.entry-content .themestek-box.ts-portfoliobox-style-4 h3 {
    font-size: 20px;
    line-height: 26px;
    text-transform: inherit
}

.themestek-box.ts-hover-style-1 img {
    position: relative;
    filter: none
}

.themestek-box.ts-hover-style-1:hover img {
    -webkit-transform: scale(1.01)
}

.themestek-box.ts-hover-style-2 img {
    position: relative;
    filter: gray
}

.themestek-box.ts-hover-style-2:hover img {
    filter: none;
    -webkit-transform: scale(1.01)
}

.themestek-box.ts-hover-style-3 {
    position: relative;
    filter: none
}

.themestek-box.ts-hover-style-3:hover img {
    transform: scale(1.05);
    -webkit-transform: scale(1.01)
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-box-content-inner {
    padding: 0
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-pf-box-title * {
    color: #fff
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-box-content-inner {
    padding: 0;
    display: table;
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-box-content-inner .themestek-pf-box-title {
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-pf-box-title h3 {
    margin-bottom: 5px;
    font-size: 24px;
    line-height: 36px;
    font-weight: 500;
    text-transform: capitalize
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-icon-box,.themestek-box-portfolio.themestek-box-view-overlay .themestek-pf-box-title .themestek-box-category,.themestek-box-portfolio.themestek-box-view-overlay .themestek-pf-box-title h3 {
    opacity: 0;
    -webkit-transform: translate3d(0,20px,0) scale(1,1);
    -moz-transform: translate3d(0,20px,0) scale(1,1);
    -ms-transform: translate3d(0,20px,0) scale(1,1);
    transform: translate3d(0,20px,0) scale(1,1);
    -webkit-perspective: 1000;
    -moz-perspective: 1000;
    -ms-perspective: 1000;
    perspective: 1000;
    -webkit-font-smoothing: subpixel-antialiased;
    -webkit-transition: opacity 0.25s ease-in-out,-webkit-transform 0.25s ease-in-out;
    -moz-transition: opacity 0.25s ease-in-out,-moz-transform 0.25s ease-in-out;
    -o-transition: opacity 0.25s ease-in-out,-o-transform 0.25s ease-in-out;
    transition: opacity 0.25s ease-in-out,-webkit-transform 0.25s ease-in-out,-moz-transform 0.25s ease-in-out,-o-transform 0.25s ease-in-out,transform 0.2s ease-in-out
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-pf-box-title .themestek-box-category {
    -webkit-transform: translate3d(0,-20px,0) scale(1,1);
    -moz-transform: translate3d(0,-20px,0) scale(1,1);
    -ms-transform: translate3d(0,-20px,0) scale(1,1);
    transform: translate3d(0,-20px,0) scale(1,1)
}

.themestek-box-portfolio.themestek-box-view-overlay:hover .themestek-icon-box,.themestek-box-portfolio.themestek-box-view-overlay:hover .themestek-pf-box-title .themestek-box-category,.themestek-box-portfolio.themestek-box-view-overlay:hover .themestek-pf-box-title h3 {
    opacity: 1;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -webkit-transition-delay: 200ms;
    -moz-transition-delay: 200ms;
    -o-transition-delay: 200ms;
    transition-delay: 200ms
}

.themestek-box-portfolio.themestek-box-view-overlay:hover .themestek-pf-box-title .themestek-box-category {
    -webkit-transition-delay: 300ms;
    -moz-transition-delay: 300ms;
    -o-transition-delay: 300ms;
    transition-delay: 300ms
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-icon-box {
    text-align: center;
    position: absolute;
    right: 15px;
    top: 15px
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-icon-box a {
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #fff;
    display: block;
    color: #fff;
    font-size: 16px
}

.themestek-box-portfolio.themestek-box-view-overlay .themestek-icon-box a:hover {
    color: #fff;
    border-color: transparent
}

.themestek-item-thumbnail {
    overflow: hidden
}

.ts-hover-effect-1:hover .themestek-item-thumbnail img,.ts-hover-effect-2:hover .themestek-item-thumbnail img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1)
}

.ts-hover-effect-2:hover .ts-box-content {
    background: #7ec53e
}

.ts-hover-effect-2:hover .ts-box-content h4 a,.ts-hover-effect-2:hover .ts-box-content .ts-box-footer,.ts-hover-effect-2:hover .ts-box-content ul li a {
    color: #fff
}

.ts-hover-effect-3:hover .themestek-item-thumbnail img {
    -webkit-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg)
}

.ts-hover-effect-3 .themestek-item-thumbnail {
    position: relative
}

.ts-hover-effect-3 .themestek-item-thumbnail:before {
    content: "";
    position: absolute;
    z-index: 9;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #7ec53e;
    opacity: 0
}

.ts-hover-effect-3:hover .themestek-item-thumbnail:before {
    opacity: .75
}

.ts-hover-effect-4 .ts-box-content {
    background: none!important;
    position: absolute;
    width: 100%;
    z-index: 999;
    bottom: 0;
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -moz-transform: translateY(100%);
    transform: translateY(100%)
}

.ts-hover-effect-4:hover .ts-box-content {
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    transform: translateY(-50%)
}

.ts-hover-effect-4:hover .ts-box-content h4 a,.ts-hover-effect-4:hover .ts-box-content .ts-box-footer,.ts-hover-effect-4:hover .ts-box-content ul li a {
    color: #fff
}

.themestek-pf-detailbox {
    margin-top: 60px;
    margin-bottom: 40px;
    border-top: 1px solid #f0f2f7;
    border-bottom: 1px solid #f0f2f7
}

.ts-pf-details-heading {
    font-size: 14px;
    line-height: 1.6;
    font-weight: 600;
    text-transform: uppercase;
    padding-bottom: 8px;
    display: block
}

.ts-pf-details-heading i {
    margin-right: 5px
}

.themestek-pf-detailbox-list .col-lg-20percent {
    padding: 15px
}

.themestek-pf-single-content-area {
    margin-bottom: 40px
}

.themestek-pf-single-content-area .container {
    width: auto;
    margin: 0 -15px
}

.ts-pf-view-style-2 .site-main {
    padding-top: 0
}

.ts-pf-view-style-2 .site-content.container {
    width: 100%;
    padding: 0
}

.ts-pf-top-content .themestek-pf-detailbox {
    border: none
}

.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-single-short-desc,.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-single-details-area {
    margin-top: 70px
}

.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-single-short-desc {
    padding-right: 30px
}

.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-detailbox-list {
    padding-left: 0
}

.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-detailbox-list li {
    margin-bottom: 10px
}

.ts-pf-view-style-2 .ts-pf-top-content .ts-pf-details-heading {
    padding-bottom: 0;
    font-size: 13px;
    display: inline-block;
    color: #031b4e;
    font-weight: 500
}

.ts-pf-top-content .ts-pf-details-content {
    font-size: 13px
}

.ts-pf-view-style-2 .themestek-pf-detailbox {
    margin-top: 0
}

.ts-pf-view-style-2 .ts-pf-top-content .themestek-pf-single-details-area h5 {
    font-weight: 600
}

.ts-pf-view-style-2 .ts-portfolio-description .ts-row,.ts-pf-view-style-3 .ts-portfolio-description .ts-row {
    padding-top: 50px;
    padding-bottom: 30px
}

.ts-pf-view-style-4 .ts-portfolio-description .ts-row,.ts-pf-view-style-1 .ts-portfolio-description .ts-row,.ts-pf-view-style-3 .site-main {
    padding-top: 0
}

.ts-pf-single-np-nav {
    position: relative;
    margin-bottom: 80px;
    margin-top: 40px
}

.ts-pf-single-np-nav:after {
    background-color: #e1eeff;
    content: "";
    width: 100%;
    height: 1px;
    z-index: 11;
    position: absolute;
    top: -30px
}

.single-ts-portfolio .navlinks:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.single-ts-portfolio .navlinks .nav-previous {
    float: left
}

.single-ts-portfolio .navlinks .nav-next {
    float: right
}

.themestek-pf-single-content-bottom {
    margin-bottom: 20px
}

.themestek-pf-single-content-bottom .ts-pf-single-category-w {
    float: left
}

.themestek-pf-single-content-bottom .ts-social-share-portfolio-wrapper {
    float: right;
    margin-top: -15px
}

.themestek-pf-single-content-bottom .ts-pf-single-category-w,.themestek-pf-single-content-bottom .ts-social-share-portfolio-wrapper {
    width: 50%
}

.ts-pf-view-style-3 .themestek-pf-single-content-bottom.container,.ts-pf-view-style-1 .themestek-pf-single-content-bottom.container {
    padding: 0
}

.ts-pf-view-style-4 .themestek-pf-detailbox-list li {
    float: left;
    width: 20%
}

.themestek-pf-single-content-bottom .ts-pf-single-category-w * {
    display: none
}

.themestek-pf-single-content-bottom .ts-pf-single-category-w a {
    display: inline-block;
    background-color: #f8f8f8;
    color: #4d4d4d;
    font-size: 12px;
    padding: 3px 10px
}

.themestek-pf-single-content-bottom .ts-pf-single-category-w a:hover {
    color: #fff
}

.navlinks a {
    font-size: 18px;
    font-weight: 600;
    color: #031b4e;
    position: relative;
    display: inline-block
}

.navlinks .nav-previous a {
    padding-left: 20px
}

.navlinks .nav-next a {
    padding-right: 20px
}

.navlinks .nav-previous a:after,.navlinks .nav-next a:before {
    font-family: "ts-labtechco-icons";
    content: '\e808';
    position: absolute;
    top: 0;
    left: 0
}

.navlinks .nav-next a:before {
    content: '\e809';
    left: auto;
    right: 0
}

.navlinks .nav-next,.navlinks .nav-previous {
    position: relative
}

.navlinks .nav-next:before,.navlinks .nav-previous:before {
    position: absolute;
    z-index: 1;
    display: block;
    bottom: 0;
    content: '';
    border-bottom: 1px solid;
    width: 0%;
    right: 0;
    left: auto;
    -webkit-transition: width 0.3s linear 0s,right 0s linear 0.3s,left 0s linear 0.3s;
    -o-transition: width 0.3s linear 0s,right 0s linear 0.3s,left 0s linear 0.3s;
    -moz-transition: width 0.3s linear 0s,right 0s linear 0.3s,left 0s linear 0.3s;
    transition: width 0.3s linear 0s,right 0s linear 0.3s,left 0s linear 0.3s
}

.navlinks .nav-next:hover:before,.navlinks .nav-previous:hover:before {
    width: 100%;
    right: 0;
    left: auto
}

.navlinks .nav-next:before {
    right: auto;
    left: 0
}

.navlinks .nav-next:hover:before {
    left: 0;
    right: auto
}

.single-ts-portfolio .ts-social-share-links {
    float: none
}

.single-ts-portfolio .ts-social-share-links ul li a {
    border: none;
    color: #282828
}

.single-ts-portfolio .ts-social-share-links ul li a:hover {
    background-color: transparent
}

.single-ts-portfolio .ts-social-share-links ul {
    text-align: right;
    padding-right: 0
}

.ts-pf-single-related-wrapper h3 {
    font-size: 22px;
    line-height: 32px;
    margin-bottom: 30px
}

.ts-pf-single-related-wrapper {
    padding-bottom: 60px
}

.ts-pf-single-related-wrapper .ts-social-share-title {
    display: none
}

.themestek-related-wrapper.container {
    padding: 0
}

.ts-pf-view-style-2 .themestek-related-wrapper.container {
    padding: 0 15px
}

.ts-pf-view-left-image .themestek-pf-detailbox {
    margin-top: 0;
    margin-bottom: 0;
    border: none
}

.ts-pf-view-left-image .ts-pf-details-heading {
    display: inline-block;
    margin-right: 5px
}

.ts-pf-view-left-image .themestek-pf-detailbox-list li {
    margin-bottom: 15px;
    border-bottom: 1px solid #f0f2f7;
    padding-bottom: 10px
}

.ts-pf-view-left-image .themestek-pf-detailbox-list li:last-child {
    margin-bottom: 0
}

.ts-pf-view-left-image .themestek-pf-detailbox-list {
    padding-top: 0;
    padding-bottom: 20px;
    margin: 0
}

.ts-pf-view-left-image .themestek-pf-single-content-area {
    margin-top: 60px
}

.vc_row.container blockquote {
    margin: 0
}

.themestek-box-team .themestek-box-title h4 {
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 5px;
    line-height: 20px;
    margin-top: 0
}

.themestek-box-team .themestek-box-title h4 a {
    color: #031b4e
}

.themestek-box-team .themestek-pf-box-title {
    margin-bottom: 0
}

.themestek-box-team .themestek-box-team-position {
    margin-bottom: 15px
}

.themestek-box-team .themestek-box-content-inner {
    padding: 15px 0;
    text-align: left;
    padding-top: 20px
}

.themestek-box-team .themestek-box-team-position {
    font-size: 13px
}

.ts-teambox-style-1 .themestek-boxes-team-inner .ts-box-col-wrapper:nth-child(even) {
    margin-top: 20px
}

.ts-teambox-style-1.themestek-box-team .themestek-box-team-position {
    margin-bottom: 5px
}

.ts-teambox-style-2 {
    border: 1px solid #e1eeff
}

.ts-teambox-style-2 .themestek-box-content-inner {
    padding: 20px 20px
}

.ts-teambox-style-2.themestek-box-team .themestek-box-team-position {
    margin-bottom: 5px
}

.themestek-box-team-style-3 .themestek-box-img-left,.themestek-box-team-style-3 .themestek-box-content {
    padding-right: 0;
    padding-left: 0
}

.themestek-box-team-style-3 .themestek-post-item {
    background: #fff
}

.themestek-box-team-style-3 .themestek-box-content-inner {
    padding: 40px 30px 25px;
    text-align: left
}

.themestek-boxes-team.ts-team-alt .themestek-boxes-row-wrapper .col-md-6:nth-child(3) .themestek-box-img-left,.themestek-boxes-team.ts-team-alt .themestek-boxes-row-wrapper .col-md-6:nth-child(4) .themestek-box-img-left {
    float: right
}

.themestek-box-team-style-3 .themestek-box-title h4 {
    margin-bottom: 0;
    font-size: 28px;
    line-height: 38px
}

.themestek-box-team-style-3 .themestek-teambox-social-links,.themestek-box-team-style-3 .themestek-teambox-short-desc {
    border-top: 1px solid #ebebe9
}

.themestek-box-team-style-3 .themestek-teambox-short-desc {
    margin-top: 20px;
    padding-top: 20px
}

.themestek-box-team-style-3 .themestek-teambox-social-links {
    margin-top: 25px;
    padding-top: 10px
}

.themestek-box-team-style-3.themestek-box .ts-team-social-links li {
    margin-right: 10px
}

.themestek-box-team-style-3.themestek-box .ts-team-social-links li a {
    background-color: #42464f;
    color: #fff;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    padding: 0
}

.themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email i {
    margin-right: 5px
}

.themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email a {
    color: #031b4e
}

.themestek-box-team-style-3 .themestek-teambox-email {
    margin-top: 10px
}

.ts-teambox-style-4 {
    position: relative;
    overflow: hidden
}

.themestek-box.ts-teambox-style-4:hover img {
    transform: scale(1.05);
    filter: gray;
    -webkit-filter: grayscale(1)
}

.ts-teambox-style-4 .themestek-box-content {
    padding: 0;
    position: absolute;
    top: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.3s 0.1s ease-out;
    -moz-transition: all 0.3s 0.1s ease-out;
    -o-transition: all 0.3s 0.1s ease-out;
    transition: all 0.3s 0.1s ease-out
}

.ts-teambox-style-4.themestek-box-team:hover .themestek-box-content {
    opacity: 1
}

.ts-teambox-style-4.themestek-box .themestek-box-desc {
    text-align: center;
    position: absolute;
    width: 100%;
    top: 50%;
    z-index: 11;
    padding: 20px;
    text-align: center;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

.ts-teambox-style-4.themestek-box .ts-team-social-links {
    margin-top: 0
}

.ts-teambox-style-4.themestek-box-team .ts-team-social-links li a,.ts-teambox-style-4.themestek-box-team .themestek-box-title h4,.ts-teambox-style-4.themestek-box-team .themestek-box-title h4 a {
    color: #fff
}

.ts-teambox-style-4.themestek-box-team .ts-team-social-links li a:hover {
    color: #42464f
}

.ts-teambox-style-4.themestek-box-team .themestek-box-team-position {
    color: #fff
}

.ts-teambox-style-4.themestek-box-team .ts-team-hover-mask {
    position: absolute;
    z-index: 8;
    overflow: hidden;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    border: 10px solid;
    background-color: rgba(239,167,88,.8);
    -webkit-transition: all 0.3s 0.1s ease-out;
    -ms-transition: all 0.3s 0.1s ease-out;
    transition: all 0.3s 0.1s ease-out
}

.ts-teambox-style-4.themestek-box-team:hover .ts-team-hover-mask {
    border-color: #fd972e;
    background: rgba(0,0,0,.5);
    opacity: 1
}

.ts-team-member-single-content-innner .ts-custom-heading {
    margin-bottom: 20px
}

.single-ts_team_member .themestek-box-blog-classic .ts-featured-outer-wrapper {
    padding: 0 15px
}

.ts-team-details-wrapper ul {
    padding: 0;
    margin: 0;
    list-style: none
}

.ts-team-details-line * {
    display: block
}

.ts-featured-outer-wrapper.ts-post-featured-outer-wrapper {
    z-index: 9
}

.ts-team-member-single-content-wrapper .ts-team-des {
    padding: 50px;
    position: relative;
    margin-left: -100px;
    z-index: 0;
    padding-bottom: 30px;
    padding-left: 115px;
    margin-top: 50px
}

.ts-team-details-line .ts-team-list-title {
    position: relative;
    font-size: 16px;
    line-height: 30px;
    float: left;
    font-weight: 500;
    text-transform: uppercase;
    padding-bottom: 5px
}

.ts-team-details-line .ts-team-list-value {
    color: #5f656d;
    font-size: 15px;
    line-height: 32px;
    padding-left: 12px;
    float: left
}

.ts-team-details-line .ts-team-list-title,.ts-team-details-line .ts-team-list-value a {
    color: #031b4e
}

.ts-team-details-line {
    margin-bottom: 25px;
    clear: both
}

.ts-team-details-line i {
    margin-right: 5px;
    font-size: 20px;
    position: absolute;
    left: 0
}

.ts-team-details-line i:before {
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: .2em;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    margin-left: .2em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.ts-team-social-links-wrapper {
    clear: both
}

.ts-team-social-links-wrapper ul {
    margin-top: 0
}

.single-ts_team_member .ts-team-member-single-position {
    font-size: 15px;
    color: #999;
    font-weight: 400;
    font-family: "Roboto",Tahoma,Geneva,sans-serif
}

.ts-team-member-single-content-innner {
    margin-top: 50px
}

.ts-team-member-single-content-wrapper .themestek-box-content h3 {
    font-size: 30px;
    margin-bottom: 0
}

.ts-team-member-single-content-wrapper .themestek-box-team-position h5 {
    font-size: 18px;
    font-weight: 400;
    color: #989898
}

.ts-team-member-single-content-wrapper .ts-team-social-links-wrapper {
    position: absolute;
    right: 50px;
    top: 59px
}

.ts-team-member-single-content-wrapper .ts-team-social-links li {
    margin-right: 5px
}

.ts-team-member-single-content-wrapper .ts-team-social-links li a {
    font-size: 15px;
    color: #fff;
    background-color: #3368c6;
    padding: 5px 8px
}

.ts-team-member-single-content-wrapper .ts-team-social-links li a:hover {
    color: #fff
}

.ts-team-member-single-content-wrapper .themestek-box-content hr {
    margin-top: 25px;
    margin-bottom: 40px
}

.ts-team-social-links {
    padding: 0;
    margin-bottom: 0;
    display: inline-block
}

.ts-team-social-links li {
    float: left;
    list-style-type: none
}

.ts-team-social-links li a {
    display: inline-block;
    padding: 7px;
    color: #031b4e;
    background: #efeef3
}

.themestek-box .ts-team-social-links li a {
    background: none
}

.archive.themestek-sidebar-true .site-main {
    margin-bottom: 50px
}

.ts-term-featured-img img {
    width: 100%
}

.ts-term-featured-img {
    margin-bottom: 30px
}

.ts-term-desc {
    margin-bottom: 50px
}

.widget.labtechco_category_list_widget .widget-title {
    display: none
}

.widget.labtechco_category_list_widget ul {
    width: 100%;
    float: none;
    margin: 0;
    padding: 0;
    border-left: 0
}

.widget.labtechco_category_list_widget li {
    list-style: none;
    float: none;
    width: 100%;
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 10px
}

.widget.labtechco_category_list_widget li a {
    color: #031b4e;
    text-decoration: none;
    background-color: #fff;
    border-left: 3px solid #e4e4e4;
    padding: 14px 20px 14px;
    display: block;
    text-transform: uppercase;
    position: relative
}

.widget.labtechco_category_list_widget li a:after {
    content: '\e809';
    font-family: "ts-labtechco-icons";
    position: absolute;
    right: 16px;
    top: 14px;
    font-size: 15px;
    font-weight: 400
}

.widget.labtechco_category_list_widget li:last-child a {
    border-bottom: none
}

.widget.labtechco_category_list_widget li.current-cat a,.widget.labtechco_category_list_widget li a:hover {
    color: #fff;
    border-color: transparent
}

.widget.labtechco_category_list_widget li:hover a,.widget.labtechco_category_list_widget li.current-cat a {
    border-left-color: rgba(0,0,0,.2)
}

.ts-circle-overlay {
    position: absolute;
    top: 50%;
    -khtml-transform: translateX(0%) translateY(-50%);
    -moz-transform: translateX(0%) translateY(-50%);
    -ms-transform: translateX(0%) translateY(-50%);
    -o-transform: translateX(0%) translateY(-50%);
    transform: translateX(0%) translateY(-50%);
    left: 0;
    width: 100%;
    text-align: center
}

.ts-fidbox-style-2 .ts-circle-w {
    position: relative;
    text-align: center
}

.ts-fidbox-style-2 .ts-fid-title {
    text-align: center;
    color: #fff;
    font-size: 14px;
    font-weight: 600
}

.ts-fidbox-style-2 .ts-circle-number sub,.ts-fidbox-style-2 .ts-circle-number {
    font-size: 20px;
    color: #fff;
    font-weight: 700
}

.ts-fidbox-style-2 .ts-circle-number sub {
    bottom: 0
}

.ts-fidbox-style-1 .ts-fid-title {
    font-size: 18px;
    line-height: 20px
}

.ts-fidbox-style-1 .ts-fid-title-w,.ts-fidbox-style-1 .ts-circle-w {
    display: inline-block
}

.ts-fidbox-style-1 .ts-fid-title-w {
    width: 43%;
    margin-left: 20px
}

.ts-fidbox-style-1 .ts-circle-w {
    width: 122px;
    position: relative;
    vertical-align: top
}

.ts-fidbox-style-1 .ts-circle-number sub,.ts-fidbox-style-1 .ts-circle-number {
    font-size: 20px;
    font-weight: 700
}

.ts-fidbox-style-1 .ts-circle-number sub {
    bottom: 0
}

.ts-fidbox-style-1 .ts-fid-title-w {
    position: absolute;
    top: 50%;
    -khtml-transform: translateX(0%) translateY(-50%);
    -moz-transform: translateX(0%) translateY(-50%);
    -ms-transform: translateX(0%) translateY(-50%);
    -o-transform: translateX(0%) translateY(-50%);
    transform: translateX(0%) translateY(-50%)
}

.ts-fidbox-style-1 .ts-fid-title-w h3 {
    margin-bottom: 0
}

.ts-circle canvas {
    image-rendering: optimizeSpeed;
    image-rendering: -moz-crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: -o-crisp-edges;
    image-rendering: pixelated;
    -ms-interpolation-mode: nearest-neighbor
}

.ts-circle canvas {
    max-width: 100%;
    height: auto!important
}

.ts-zindex-0,.ts-zindex-1,.ts-zindex-2 {
    position: relative
}

.ts-zindex-0 {
    z-index: unset
}

.ts-zindex-1 {
    z-index: 1
}

.ts-zindex-2 {
    z-index: 2
}

.ts-overlap-row-section {
    position: relative;
    z-index: 2
}

.vc_column_container>.vc_column-inner {
    position: relative
}

.vc_column-inner.ts-col-bgimage-yes {
    background-image: none!important
}

.ts-row .ts-column .vc_column-inner,.ts-row .wpb_column .ts-col-wrapper-bg-layer {
    background-color: transparent!important
}

body.themestek-page-full-width.header-classic-vertical #content .site-main .entry-content>.wpb_row.vc_row-fluid[data-vc-stretch-content="true"],.ts-vc-width-auto {
    left: 0!important;
    width: auto!important
}

body.themestek-page-full-width #content .site-main .ts-team-member-content>.wpb_row.vc_row-fluid,body.themestek-page-full-width #content .site-main .entry-content>.wpb_row.vc_row-fluid {
    padding-top: 90px;
    padding-bottom: 70px;
    margin-bottom: 0
}

body.themestek-page-full-width #content .site-main .entry-content>.wpb_row.vc_row-fluid .vc_row.vc_row-no-padding {
    margin: 0
}

body.themestek-page-full-width #content .site-main .entry-content>.wpb_row.vc_row-fluid.vc_row-no-padding {
    overflow: hidden
}

body.themestek-page-full-width #content .site-main .entry-content>.wpb_row:first-child {
    margin-top: -82px
}

.vc_row.container {
    padding: 0
}

.ts-team-member-single-content .vc_row.container {
    padding-right: 15px;
    padding-left: 15px
}

body.themestek-page-full-width #content .site-main .entry-content>.wpb_row .vc_row.container {
    margin: auto
}

.themestek-sidebar-true .vc_row.container {
    width: auto;
    margin: 0 -15px
}

body.themestek-page-full-width.ts-all-row-20px #content .site-main .entry-content>.wpb_row.vc_row-fluid {
    padding-top: 20px;
    padding-bottom: 10px
}

body.themestek-page-full-width.ts-all-row-20px #content .site-main .entry-content>.wpb_row:first-child {
    margin-top: -22px
}

body.themestek-page-full-width.ts-all-row-20px .site-main {
    padding-top: 22px
}

.ts-bg-img-top>.vc_column-inner>.ts-col-wrapper-bg-layer {
    background-position: 0 top!important
}

.wpb_single_image .vc_figure {
    position: relative
}

.ts_prettyphoto .vc_single_image-wrapper:after {
    color: #fff;
    font-size: 26px;
    font-family: "ts-labtechco-icons";
    content: '\e804';
    background-color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -30px;
    margin-top: -30px;
    z-index: 99;
    text-align: center;
    line-height: 60px;
    transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out
}

.ts_prettyphoto .vc_single_image-wrapper:hover:after {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    opacity: .8
}

.columgap-0 .vc_column_container .vc_column-inner {
    padding-left: 0;
    padding-right: 0
}

.ts-col-auto .vc_column_container {
    width: auto
}

.ts-row.ts-bgimage-position-left_top {
    background-position: left top!important
}

.ts-row.ts-bgimage-position-left_center {
    background-position: left center!important
}

.ts-row.ts-bgimage-position-left_bottom {
    background-position: left bottom!important
}

.ts-row.ts-bgimage-position-right_top {
    background-position: right top!important
}

.ts-row.ts-bgimage-position-right_center {
    background-position: right center!important
}

.ts-row.ts-bgimage-position-right_bottom {
    background-position: right bottom!important
}

.ts-row.ts-bgimage-position-center_top {
    background-position: center top!important
}

.ts-row.ts-bgimage-position-center_center {
    background-position: center center!important
}

.ts-row.ts-bgimage-position-center_bottom {
    background-position: center bottom!important
}

.ts-row {
    position: relative
}

.ts-stretched-bg.ts-stretched-bg-first-col,.ts-stretched-bg.ts-stretched-bg-last-col {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.ts-stretched-bg-col {
    height: 100%;
    background-position: center center;
    background-size: cover
}

.themestek-sidebar-true.page #primary .site-main {
    padding-bottom: 40px
}

.themestek-sidebar-true .site-main {
    padding-top: 65px
}

body.themestek-sidebar-left .site-content #primary.content-area {
    float: right
}

.site-content #sidebar-left.sidebar,.site-content #sidebar-right.sidebar {
    padding-top: 20px;
    padding-bottom: 40px;
    position: relative
}

.site-content #sidebar-right.sidebar {
    padding-right: 0;
    padding-left: 10px
}

.site-content #sidebar-left.sidebar {
    float: left;
    padding-left: 0;
    padding-right: 40px
}

body.themestek-sidebar-both .site-content #sidebar-left.sidebar {
    margin-left: -74.8%
}

body.themestek-sidebar-both .site-content #primary.content-area {
    margin-left: 25%!important
}

body.themestek-sidebar-bothleft .site-content #primary.content-area {
    float: right
}

body.themestek-sidebar-bothleft .site-content #sidebar-right.sidebar {
    margin-top: -40px;
    padding-top: 60px;
    padding-bottom: 70px
}

body.themestek-sidebar-bothleft .site-content #sidebar-left.sidebar {
    border: none;
    float: left
}

body.themestek-sidebar-bothleft .site-content #sidebar-right.sidebar {
    border-left: 0;
    float: right
}

body.themestek-sidebar-bothleft .site-content #sidebar-right .widget {
    padding-left: 0;
    padding-right: 0
}

body.themestek-sidebar-bothleft .site-content #sidebar-left .widget {
    padding-right: 0
}

body.themestek-sidebar-bothright .site-content #sidebar-right.sidebar {
    border: none
}

body.themestek-sidebar-bothright .site-content #sidebar-left.sidebar {
    border-right: 0
}

.widget .search-form {
    position: relative
}

.widget .search-form label {
    display: block
}

.widget .search-form .search-field {
    border: none;
    border: 1px solid #e1eeff;
    background-color: #fff
}

.widget .search-form .search-submit {
    position: absolute;
    top: 0;
    right: 0;
    box-shadow: none;
    border-bottom: none;
    text-indent: -999px;
    padding: 0;
    width: 46px;
    height: 46px;
    z-index: 1;
    border-radius: 0 3px 3px 0;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 16px 16px;
    opacity: .3
}

.ts-textcolor-dark .widget .search-form .search-field {
    border-color: rgba(0,0,0,.07)
}

.search-form:after {
    font-family: "ts-labtechco-icons";
    content: '\e825';
    position: absolute;
    right: 14px;
    top: 13px;
    font-weight: 700;
    opacity: .5
}

.ts-search-form-wrapper .search-form:after {
    display: none
}

.social-icons {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 15px;
    padding-top: 2px;
    padding-bottom: 3px
}

.social-icons li:first-child {
    border: none
}

.social-icons li {
    display: inline-block!important;
    padding-left: 2px;
    padding-right: 2px;
    min-width: 34px;
    border: none
}

.social-icons li>a {
    display: block;
    width: 26px;
    height: 26px;
    line-height: 25px;
    border-radius: 26px;
    font-size: 14px;
    text-align: center
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-twitter {
    background-color: #2cbfd9
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-youtube {
    background-color: red
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-flickr {
    background-color: #ED1384
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-facebook {
    background-color: #4583bc
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-linkedin {
    background-color: #0b84b3
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-gplus {
    background-color: #d3452b
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-yelp {
    background-color: #c41200
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-dribbble {
    background-color: #de588b
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-pinterest {
    background-color: #cd1f29
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-podcast {
    background-color: #803aac
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-xing {
    background-color: #006464
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vimeo {
    background-color: #07C0ED
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vk {
    background-color: #44678d
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-houzz {
    background-color: #98c742
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-issuu {
    background-color: #ea4925
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-google-drive {
    background-color: #f9cb2f
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-rss {
    background-color: #fb7200
}

.themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-instagram {
    background-color: #125688
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link:hover {
    background-color: #fff!important
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-twitter:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-twitter:hover {
    color: #2cbfd9
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-youtube:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-youtube:hover {
    color: red
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-flickr:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-flickr:hover {
    color: #ED1384
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-facebook:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-facebook:hover {
    color: #4583bc
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-linkedin:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-linkedin:hover {
    color: #0b84b3
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-gplus:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-gplus:hover {
    color: #d3452b
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-yelp:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-yelp:hover {
    color: #c41200
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-dribbble:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-dribbble:hover {
    color: #de588b
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-pinterest:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-pinterest:hover {
    color: #cd1f29
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-podcast:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-podcast:hover {
    color: #803aac
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-xing:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-xing:hover {
    color: #006464
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vimeo:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vimeo:hover {
    color: #07C0ED
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vk:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-vk:hover {
    color: #44678d
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-houzz:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-houzz:hover {
    color: #98c742
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-issuu:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-issuu:hover {
    color: #ea4925
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-google-drive:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-google-drive:hover {
    color: #f9cb2f
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-rss:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-rss:hover {
    color: #fb7200
}

.ts-row-bgtype-skin .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-instagram:hover,.ts-row-bgtype-dark .themestek-socialbox-wrapper .ts-socialbox-i-wrapper a.ts-socialbox-icon-link.ts-socialbox-icon-link-instagram:hover {
    color: #125688
}

.ts-list-style-none {
    list-style: none;
    margin: 0;
    padding: 0
}

.ts-list.ts-list-style-icon {
    list-style: none;
    padding: 0;
    padding-left: 4px
}

.ts-list.ts-list-style-icon .ts-list-li-content {
    display: inline-block;
    padding-left: 25px
}

.ts-list.ts-list-style-icon li {
    position: relative;
    margin-bottom: 10px
}

.ts-list.ts-list-style-icon li i {
    position: absolute;
    left: 2px;
    top: 4px
}

.ts-list.ts-list-textsize-small li {
    font-size: 12px
}

.ts-list.ts-list-style-icon.ts-list-textsize-small li i {
    top: 7px
}

.ts-list.ts-list-style-icon.ts-list-textsize-small .ts-list-li-content {
    padding-left: 16px
}

.ts-list.ts-list-textsize-medium li {
    font-size: 15px;
    padding-bottom: 5px
}

.ts-list.ts-list-style-icon.ts-list-textsize-medium li {
    padding-bottom: 0
}

.ts-list.ts-list-style-icon.ts-list-textsize-medium li i {
    top: 5px
}

.ts-list.ts-list-textsize-medium.ts-list-style-icon .ts-list-li-content {
    padding-left: 25px;
    font-size: 14px
}

.ts-list.ts-list-textsize-large li {
    padding-bottom: 8px;
    font-size: 17px
}

.ts-list.ts-list-style-icon.ts-list-textsize-large li i {
    top: 4px
}

.ts-list.ts-list-textsize-large.ts-list-style-icon .ts-list-li-content {
    padding-left: 25px
}

.lightfont .ts-list.ts-list-textsize-xlarge li {
    font-weight: 300
}

.ts-list.ts-list-textsize-xlarge li {
    font-size: 19px
}

.ts-list.ts-list-style-icon.ts-list-textsize-xlarge li i {
    top: 0;
    font-size: 23px
}

.ts-list.ts-list-style-icon.ts-list-textsize-xlarge .ts-list-li-content {
    padding-left: 37px
}

.ts-list.ts-list-style-icon.ts-list-textsize-xlarge li {
    padding-bottom: 15px
}

.ts-list.ts-list-textsize-xlarge li {
    padding-bottom: 5px
}

article.post .ts-list.ts-list-textsize-xlarge li {
    font-size: 17px
}

article.post .ts-list.ts-list-style-icon.ts-list-textsize-xlarge li i {
    top: 2px;
    font-size: 20px
}

article.post .ts-list.ts-list-style-icon.ts-list-textsize-xlarge .ts-list-li-content {
    padding-left: 30px
}

.ts-list.ts-list-sep li {
    border-bottom: 1px solid #f3f3f3;
    padding-bottom: 10px;
    margin-bottom: 10px
}

.ts-list.ts-list-sep li:last-child {
    border-bottom: none
}

.ts-map .wpb_gmaps_widget.vc_map_responsive .wpb_map_wraper {
    height: 100%;
    position: inherit
}

.select2-container.select2-container--below {
    width: 100%!important
}

.select2-container--default .select2-selection--single {
    border-radius: 0
}

.select2-container .select2-selection--single {
    height: 41px;
    outline: none
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 41px;
    padding-left: 10px
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    margin-left: -20px
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 41px;
    right: 5px
}

.ts-textcolor-white .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff
}

.ts-textcolor-white .select2-container--default .select2-selection--single {
    background-color: rgba(255,255,255,.03);
    border-color: rgba(255,255,255,.07)
}

.select2-container--default .select2-selection--single {
    background-color: rgba(0,0,0,.03)
}

.select2-container--default .select2-selection--single,.select2-dropdown {
    border: 1px solid #e1eeff
}

.ts-textcolor-dark .select2-container--default .select2-selection--single,.ts-textcolor-dark .select2-dropdown {
    border-color: rgba(0,0,0,.07)
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 {
    padding: 0;
    border: none;
    background-color: transparent
}

.ts-element-heading-wrapper:not(.ts-seperator-none) .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header {
    position: relative;
    padding-bottom: 25px
}

.ts-element-heading-wrapper:not(.ts-heading-style-horizontal):not(.ts-seperator-none) .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-headers.ts-table-cell {
    margin-bottom: 35px
}

.ts-element-heading-wrapper.ts-seperator-none .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-headers.ts-table-cell {
    margin-bottom: 15px
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-headers.ts-table-cell {
    display: block
}

.ts-element-heading-wrapper .ts-vc_cta3-headers h4 strong {
    font-weight: inherit!important
}

.ts-element-heading-wrapper .ts-vc_cta3-headers h2 strong {
    font-weight: 900
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-justify .ts-vc_cta3-content {
    text-align: center
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content {
    margin-bottom: 35px
}

.ts-element-heading-wrapper.ts-seperator-solid .ts-vc_general.ts-vc_cta3.ts-cta3-without-desc .ts-vc_cta3-content {
    margin-bottom: 0
}

.ts-element-heading-wrapper.ts-seperator-none .ts-vc_general.ts-vc_cta3.ts-cta3-without-desc .ts-vc_cta3-content {
    margin-bottom: 50px
}

.ts-vc_cta3-container {
    margin-bottom: 0
}

.ts-element-heading-wrapper .ts-cta3-only.ts-vc_general.ts-vc_cta3 .ts-cta3-content-wrapper {
    margin-top: 20px
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content,.ts-element-heading-wrapper.ts-seperator-none .ts-vc_general.ts-vc_cta3.ts-cta3-without-desc .ts-vc_cta3-content,.ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h2 {
    margin-bottom: 0
}

.ts-element-heading-wrapper {
    margin-bottom: 35px
}

.ts-textcolor-white,.ts-col-bgcolor-darkgrey .ts-custom-heading,.ts-col-bgcolor-skincolor .ts-custom-heading,.ts-col-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h4,.ts-col-bgcolor-skincolor .ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-transparent.ts-cta3-only .ts-vc_cta3-content .ts-vc_cta3-headers h4,.ts-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h4,.ts-bgcolor-skincolor .ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-transparent.ts-cta3-only .ts-vc_cta3-content .ts-vc_cta3-headers h4,.ts-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h2,.ts-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_cta3-headers h2 strong {
    color: rgba(255,255,255,1)
}

.ts-bgcolor-skincolor .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p,.ts-col-bgcolor-darkgrey .wpb_text_column,.ts-col-bgcolor-skincolor .wpb_text_column,.ts-bgcolor-darkgrey .wpb_text_column,.ts-bgcolor-skincolor .wpb_text_column {
    color: rgba(255,255,255,.8)
}

.ts-seperator-solid .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before {
    content: "";
    left: 50%;
    position: absolute;
    bottom: 36px;
    width: 65px;
    margin-left: 0;
    border-bottom-width: 1px;
    border-bottom-color: #dbdbdb;
    border-bottom-style: solid
}

.ts-element-align-left .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before {
    left: 0
}

.ts-element-align-right .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before {
    left: auto;
    right: 0
}

.ts-element-align-justify .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before,.ts-element-align-center .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before {
    margin-left: -35px
}

.ts-bgcolor-skincolor .ts-seperator-solid .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:before {
    border-bottom-color: #fff
}

.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-justify .ts-vc_cta3-content .ts-cta3-content-wrapper,.ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-center .ts-vc_cta3-content .ts-cta3-content-wrapper {
    width: 60%;
    margin: 0 auto;
    margin-top: 20px
}

.ts-row[data-vc-stretch-content="true"] .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-justify .ts-vc_cta3-content .ts-cta3-content-wrapper,.ts-row[data-vc-stretch-content="true"] .ts-element-heading-wrapper .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-center .ts-vc_cta3-content .ts-cta3-content-wrapper {
    width: 37%
}

.ts-seperator-solid .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after {
    border-bottom-style: solid
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content .ts-vc_cta3-content-header:after {
    content: "";
    right: 40px;
    height: 100%;
    position: absolute;
    top: 0;
    width: 1px;
    border-right-width: 1px;
    border-right-color: #7a7a7a
}

.ts-heading-style-horizontal.ts-seperator-solid .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after {
    border-right-style: solid
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content {
    display: table;
    width: 85%;
    margin: 0 auto
}

.ts-heading-style-horizontal.ts-element-align-right .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content {
    float: right
}

.ts-heading-style-horizontal.ts-element-align-right .ts-vc_general.ts-vc_cta3:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content p {
    text-align: left
}

.ts-heading-style-horizontal.ts-element-align-left .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content {
    margin: 0
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content .ts-vc_cta3-content-header,.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content .ts-cta3-content-wrapper {
    display: table-cell;
    padding-bottom: 0;
    vertical-align: middle
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content .ts-cta3-content-wrapper p:last-child {
    margin-bottom: 0
}

.ts-heading-style-horizontal .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content .ts-vc_cta3-content-header {
    width: 32%;
    text-align: right;
    padding-right: 80px;
    position: relative
}

.ts-element-align-left .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after {
    left: 20px;
    margin-left: 0
}

.ts-element-align-justify .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after,.ts-element-align-center .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after {
    left: 50%;
    margin-left: -14px
}

.ts-element-align-right .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content-header:after {
    left: auto;
    right: 18px
}

.entry-header:not(.ts-titlebar) .entry-title {
    margin-bottom: 8px;
    font-size: 28px;
    line-height: 36px;
    font-weight: 700;
    margin-top: 0
}

.wpb_heading,.entry-header .entry-title {
    font-size: 22px
}

.ts-team-member-single-title,.vc_tta-container h2,.wpb_heading {
    font-size: 28px;
    font-weight: 400
}

.wpb_heading {
    margin-bottom: 30px
}

.ts-vc_general.ts-vc_btn3-color-skincolor:hover {
    color: #40444d
}

.ts-vc_general.ts-vc_btn3.ts-vc_btn3-weight-yes {
    font-weight: 700
}

.ts-vc_btn3.ts-vc_btn3-size-lg {
    font-size: 18px
}

.ts-vc_btn3.ts-vc_btn3-style-text {
    padding: 0;
    margin-top: 0px!important;
    background-color: transparent!important
}

.ts-vc_btn3.ts-vc_btn3-style-text.active,.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-style-text:active,.ts-vc_btn3.ts-vc_btn3-style-text:hover {
    background-color: transparent!important
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 0
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 30px
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 0
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 30px
}

.ts-post-prev-next-buttons .ts-vc_btn3.ts-vc_btn3-shape-square,.comment-respond .ts-vc_btn3.ts-vc_btn3-shape-square,.ts-single-top-btn .ts-vc_btn3.ts-vc_btn3-shape-square {
    border-radius: 1px;
    border-width: 1px;
    border-style: solid;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    padding: 12px 34px
}

.ts-post-prev-next-buttons .ts-left-align-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 44px;
    padding-right: 22px
}

.ts-post-prev-next-buttons .ts-left-align-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 21px
}

.ts-single-top-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty),.ts-post-prev-next-buttons .ts-right-align-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 44px;
    padding-left: 22px
}

.ts-single-top-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon,.ts-post-prev-next-buttons .ts-right-align-btn .ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 21px
}

.ts-vc_btn3.ts-vc_btn3-style-outline,.ts-vc_btn3.ts-vc_btn3-style-outline-custom,.ts-vc_btn3.ts-vc_btn3-style-outline-custom:focus,.ts-vc_btn3.ts-vc_btn3-style-outline-custom:hover,.ts-vc_btn3.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-style-outline:hover {
    border-width: 2px
}

.ts-center-button {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

button,input[type="submit"]:hover,input[type="button"]:hover,input[type="reset"]:hover,.ts-vc_btn3.ts-vc_btn3-color-black,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat,.ts-vc_general.ts-vc_btn3.ts-vc_btn3-color-skincolor:not(.ts-vc_btn3-style-text):not(.ts-vc_btn3-style-outline):hover,.ts-sresults-title small .label-default[href]:hover,.themestek-box-blog-style2 .themestek-blog-classic-footer-readmore a:hover,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat:hover {
    background-color: #031b4e;
    color: #fff
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-default {
    color: #2a2a2a
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-primary {
    color: #08c
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-info {
    color: #3fafd4
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-success {
    color: #6ab165
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-warning {
    color: #f90
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-danger {
    color: #ff675b
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-inverse {
    color: #555
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-blue {
    color: #5472d2
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-turquoise {
    color: #00c1cf
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-pink {
    color: #fe6c61
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-violet {
    color: #8d6dc4
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-peacoc {
    color: #4cadc9
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-chino {
    color: #cec2ab
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-mulled-wine {
    color: #50485b
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-vista-blue {
    color: #75d69c
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-black {
    color: #2a2a2a
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-grey {
    color: #ebebeb
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-orange {
    color: #f7be68
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-sky {
    color: #5aa1e3
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-green {
    color: #6dab3c
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-juicy-pink {
    color: #f4524d
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-sandy-brown {
    color: #f79468
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-purple {
    color: #b97ebb
}

.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-white {
    color: #fff
}

.themestek-boxes-view-carousel .ts-box-col-wrapper {
    padding-left: 17px;
    padding-right: 17px
}

.themestek-boxes-row-wrapper.row:not(.slick-slider) .ts-box-col-wrapper {
    margin-bottom: 30px
}

.themestek-boxes-spacing-0px .themestek-boxes-row-wrapper.row .ts-box-col-wrapper {
    padding-right: 0;
    padding-left: 0;
    margin-bottom: 0
}

.themestek-boxes-spacing-5px .themestek-boxes-row-wrapper.row .ts-box-col-wrapper {
    padding-left: 2.5px;
    padding-right: 2.5px;
    margin-bottom: 5px
}

.themestek-boxes-spacing-10px .themestek-boxes-row-wrapper.row .ts-box-col-wrapper {
    padding-right: 5px;
    padding-left: 5px;
    margin-bottom: 10px
}

.themestek-boxes-spacing-0px .themestek-boxes-row-wrapper.row {
    margin-left: 0;
    margin-right: 0
}

.themestek-boxes-spacing-5px .themestek-boxes-row-wrapper.row {
    margin-left: -2.5px;
    margin-right: -2.5px
}

.themestek-boxes-spacing-10px .themestek-boxes-row-wrapper.row {
    margin-left: -5px;
    margin-right: -5px
}

.themestek-boxes-portfolio .col-xs-12 {
    margin-bottom: 30px
}

.themestek-boxes-portfolio.themestek-boxes-sortable-yes .col-lg-4 {
    margin-left: -1px
}

.tooltip-top:after,.tooltip:after,[data-tooltip]:after {
    letter-spacing: 1px
}

.themestek-slider-wrapper {
    position: relative;
    z-index: 1
}

.themestek-boxes-blog.themestek-boxes-view-carousel .ts-post-format-icon-wrapper:before {
    display: none
}

.slick-slide {
    outline: none
}

.themestek-boxes-row-wrapper .slick-arrow {
    padding: 0;
    border: none;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    color: #bbb;
    margin: 0 3px;
    z-index: 1
}

.slick-prev:before,.slick-next:before {
    opacity: 1
}

.themestek-boxes-row-wrapper .slick-prev:before,.themestek-boxes-row-wrapper .slick-next:before {
    font-family: "ts-labtechco-icons";
    content: '\e809';
    color: #ccc;
    font-size: 34px;
    position: relative
}

.themestek-boxes-row-wrapper .slick-prev:before {
    content: '\e808';
    left: 3px
}

.themestek-boxes-row-wrapper .slick-next:before {
    right: -3px
}

.themestek-boxes-row-wrapper .slick-next {
    right: -40px
}

.themestek-boxes-row-wrapper .slick-prev {
    left: -40px
}

.themestek-boxes-view-slickview-leftimg .themestek-boxes-row-wrapper .slick-next:before {
    right: -14px
}

.themestek-boxes-view-slickview-leftimg .themestek-boxes-row-wrapper .slick-prev {
    left: -12px
}

.themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-prev:before,.themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-next:before {
    font-size: 30px;
    color: #031b4e;
    opacity: 1
}

.ts-dark-slick-bt .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover:before {
    color: #031b4e
}

.themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover {
    border-color: transparent
}

.ts-bgcolor-darkgrey .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow,.ts-bgcolor-skincolor .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow {
    border-color: #fff
}

.ts-bgcolor-skincolor .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-prev:before,.ts-bgcolor-skincolor .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-next:before,.ts-bgcolor-darkgrey .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-prev:before,.ts-bgcolor-darkgrey .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow.slick-next:before {
    color: #fff
}

.ts-bgcolor-skincolor .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover,.ts-bgcolor-darkgrey .themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover {
    background-color: #fff
}

.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-left,.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-right {
    position: relative
}

.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-left .ts-element-heading-wrapper {
    padding-right: 60px
}

.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-right .ts-element-heading-wrapper {
    padding-left: 60px
}

.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-left .ts-heading-carousel-arrows,.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-right .ts-heading-carousel-arrows {
    position: absolute;
    right: 0;
    top: 7px
}

.themestek-boxes-view-carousel .themestek-box-heading-wrapper.ts-element-align-right .ts-heading-carousel-arrows {
    right: auto;
    left: 0
}

.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-prev,.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-prev {
    left: 50%;
    margin-left: -35px
}

.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-next,.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-next {
    right: 50%;
    margin-right: -30px
}

.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-next,.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-prev {
    bottom: -80px;
    top: auto
}

.ts-boxes-carousel-arrows-below.themestek-boxes {
    padding-bottom: 60px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-prev,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-next {
    top: -50px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-prev,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-prev {
    left: 50%;
    margin-left: -35px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-next,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-boxes-row-wrapper .slick-next {
    right: 50%;
    margin-right: -30px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-justify .themestek-box-heading-wrapper,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center .themestek-box-heading-wrapper {
    padding-bottom: 60px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left .slick-slider,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right .slick-slider {
    position: static
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right {
    position: relative
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left .themestek-boxes-row-wrapper .slick-next,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left .themestek-boxes-row-wrapper .slick-prev,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right .themestek-boxes-row-wrapper .slick-next,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right .themestek-boxes-row-wrapper .slick-prev {
    top: 24px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left .themestek-boxes-row-wrapper .slick-prev {
    right: 35px!important;
    left: auto
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left .themestek-boxes-row-wrapper .slick-next {
    right: 0
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right .themestek-boxes-row-wrapper .slick-prev {
    left: 0;
    right: auto
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right .themestek-boxes-row-wrapper .slick-next {
    left: 35px
}

.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-left,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-right,.ts-boxes-carousel-arrows-above.ts-boxes-txtalign-center {
    overflow: hidden
}

.slick-list {
    padding: 0!important
}

.slick-dotted.slick-slider {
    margin-bottom: 60px
}

.slick-dots {
    bottom: -50px
}

.slick-dots li {
    width: 15px;
    height: 15px
}

.slick-dots li button {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 10px;
    box-shadow: inset 0 0 0 2px #cbcbcb;
    cursor: pointer;
    margin: 0 10px 0 0;
    position: relative;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease
}

.slick-dots li button:before {
    display: none
}

.ts-col-bgcolor-darkgrey .slick-dots li button,.ts-col-bgcolor-skincolor .slick-dots li button,.ts-bgcolor-darkgrey .slick-dots li button,.ts-bgcolor-skincolor .slick-dots li button {
    box-shadow: inset 0 0 0 2px rgba(255,255,255,.73)
}

.ts-col-bgcolor-darkgrey .slick-dots li.slick-active button,.ts-col-bgcolor-skincolor .slick-dots li.slick-active button,.ts-bgcolor-darkgrey .slick-dots li.slick-active button,.ts-bgcolor-skincolor .slick-dots li.slick-active button {
    box-shadow: inset 0 0 0 2px #fff
}

.ts-boxes-carousel-arrows-side .themestek-boxes-row-wrapper .slick-prev {
    left: -40px;
    right: auto
}

.ts-boxes-carousel-arrows-side .themestek-boxes-row-wrapper .slick-next {
    right: -40px;
    left: auto
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-0 .slick-dots {
    bottom: 25px;
    right: 30px;
    width: auto
}

body .vc_images_carousel .vc_carousel-indicators li,.flex-control-paging li a {
    background-color: transparent;
    -o-box-shadow: none;
    box-shadow: none;
    background: none;
    border: 2px solid #fff
}

.flex-control-paging li a:hover {
    background: none
}

body .vc_images_carousel .vc_carousel-indicators .vc_active,.flex-control-paging li a.flex-active {
    border-color: transparent;
    background-color: #fff
}

.flex-direction-nav a:before,.flex-direction-nav a.flex-next:before {
    font-family: "ts-labtechco-icons"
}

.flex-direction-nav a:before {
    content: '\e808'
}

.flex-direction-nav a.flex-next:before {
    content: '\e809'
}

.ts-row .vc_column-inner.ts-col-bgcolor-darkgrey .themestek-boxes-row-wrapper .slick-arrow,.ts-row .vc_column-inner.ts-col-bgcolor-skincolor .themestek-boxes-row-wrapper .slick-arrow,.ts-bgcolor-skincolor .themestek-boxes-row-wrapper .slick-arrow,.ts-bgcolor-darkgrey .themestek-boxes-row-wrapper .slick-arrow {
    border-color: rgba(255,255,255,.3)
}

.ts-row .vc_column-inner.ts-col-bgcolor-darkgrey .themestek-boxes-row-wrapper .slick-arrow:before,.ts-row .vc_column-inner.ts-col-bgcolor-skincolor .themestek-boxes-row-wrapper .slick-arrow:before,.ts-bgcolor-darkgrey .themestek-boxes-row-wrapper .slick-prev:before,.ts-bgcolor-darkgrey .themestek-boxes-row-wrapper .slick-next:before,.ts-bgcolor-skincolor .themestek-boxes-row-wrapper .slick-prev:before,.ts-bgcolor-skincolor .themestek-boxes-row-wrapper .slick-next:before {
    color: rgba(255,255,255,1)
}

.ts-flexslider ul li {
    display: none;
    float: left
}

.ts-flexslider ul li:first-child {
    display: block
}

.ts-flexslider .flex-control-nav {
    bottom: 5px;
    z-index: 1
}

.ts-flexslider .flex-control-paging li a {
    border: 1px solid #fff;
    background: none;
    -o-box-shadow: none;
    box-shadow: none
}

.ts-flexslider .flex-control-paging li a.flex-active {
    background-color: #fff
}

.ts-dropcap {
    float: left;
    text-align: center;
    overflow: hidden;
    font-weight: 400;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 34px;
    margin: 7px 8px -5px 0
}

.ts-dcap-style-rounded {
    border-radius: 5px
}

.ts-dcap-style-round {
    border-radius: 50%
}

.ts-dropcap.ts-bgcolor-dark,.ts-dropcap.ts-bgcolor-skincolor {
    color: #fff
}

.ts-dropcap.ts-bgcolor-dark {
    background-color: #202020
}

.ts-dropcap.ts-bgcolor-grey {
    background-color: #E2E2E2
}

.ts-dropcap.ts-bgcolor-grey,.ts-dcap-txt-color-dark {
    color: #313131
}

.ts-dcap-style-rounded {
    border-radius: 5px
}

.ts-dcap-style-round {
    border-radius: 50%
}

.wpb_gmaps_widget .wpb_wrapper {
    background-color: transparent;
    padding: 0
}

.themestek-boxes-textalign-center .ts-sortable-wrapper {
    text-align: center
}

.themestek-boxes-textalign-left .ts-sortable-wrapper {
    text-align: left
}

.themestek-boxes-textalign-right .ts-sortable-wrapper {
    text-align: right
}

.ts-sortable-list ul {
    margin: 0;
    padding: 0;
    margin-bottom: 50px;
    margin-top: 20px
}

.ts-sortable-list .ts-sortable-link {
    display: inline-block;
    padding-right: 30px;
    position: relative
}

.ts-sortable-list .ts-sortable-link:after {
    content: "";
    height: 5px;
    width: 5px;
    background-color: rgba(0,0,0,.16);
    position: absolute;
    top: 18px;
    right: 12px;
    z-index: 1
}

.ts-sortable-list .ts-sortable-link a {
    display: block;
    cursor: pointer;
    padding: 8px 18px;
    line-height: 22px;
    width: auto;
    position: relative;
    z-index: 3;
    color: #212121;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    background-color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase
}

.ts-sortable-list .ts-sortable-link a:hover,.ts-sortable-list .ts-sortable-link a.selected {
    color: #fff;
    border-color: transparent
}

.ts-sortable-list .ts-sortable-link:last-child:after {
    display: none
}

.error404 .ts-titlebar-wrapper {
    display: none
}

.error404 .site-main {
    background-color: transparent!important
}

.error404 .search-form:after {
    opacity: .8;
    color: #3368c6
}

.error404 .site-main {
    padding-top: 0
}

section.error-404 {
    padding: 200px 0;
    text-align: center
}

section.error-404 .ts-big-icon {
    font-size: 150px
}

section.error-404 .page-header {
    border-bottom: none;
    margin-bottom: 0
}

section.error-404 h1 {
    font-size: 95px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 100%;
    line-height: 105px
}

section.error-404 .page-content p {
    font-size: 18px;
    margin-bottom: 30px
}

section.error-404 .search-form {
    position: relative;
    max-width: 390px;
    margin: 0 auto
}

section.error-404 .search-form label {
    display: block
}

section.error-404 .search-form .search-field {
    border-width: 2px;
    background-color: transparent;
    color: #fff
}

section.error-404 .search-form .search-field::placeholder {
    color: rgba(255,255,255,.5);
    opacity: 1
}

section.error-404 .search-form .search-field:-ms-input-placeholder {
    color: rgba(255,255,255,.5)
}

section.error-404 .search-form .search-field::-ms-input-placeholde {
    color: rgba(255,255,255,.5)
}

section.error-404 .search-form .search-submit {
    position: absolute;
    top: 0;
    right: 0;
    box-shadow: none;
    border-bottom: none;
    text-indent: -999px;
    padding: 0;
    width: 46px;
    height: 46px;
    z-index: 1;
    border-radius: 0 3px 3px 0;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 16px 16px;
    opacity: .3
}

.ts-sresults-no-content-w {
    padding-bottom: 60px;
    padding-top: 30px
}

.ts-sresults-no-content-w h3 {
    font-size: 30px;
    line-height: 35px
}

.search-results .ts-search-results-contents img {
    max-width: 100%
}

.ts-search-results-pages-w li {
    font-size: 15px
}

.ts-search-results-pages-w .ts-list.ts-list-style-icon .ts-list-li-content {
    padding-left: 22px
}

.ts-search-results-pages-w .ts-list.ts-list-style-icon li i {
    left: 2px;
    top: 0
}

.ts-search-results-pages-w {
    margin-bottom: 60px;
    margin-top: 30px
}

.ts-search-results-pages-w .ts-list:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.ts-search-results-pages-w .ts-list-li-content a {
    color: #031b4e
}

.search-results .ts-hover-style-2.themestek-box {
    margin-bottom: 30px
}

.search-results .themestek-box:not(.ts-portfoliobox-style-1) .themestek-box-content-inner {
    padding-bottom: 0
}

.search-results .themestek-box.themestek-box-team {
    padding-bottom: 40px
}

.ts-search-form-wrapper {
    padding: 30px 30px 0 30px;
    border-radius: 0;
    position: relative;
    background-color: #ebecf0
}

.ts-search-form-tabs-w .ts-search-form-tab {
    float: left;
    list-style: none;
    font-size: 14px;
    font-weight: 600;
    margin: 0 5px 0 0
}

.ts-search-form-tabs-w .ts-search-form-tab a {
    color: #031b4e;
    padding: 12px 20px;
    display: inline-block;
    position: relative
}

.ts-search-form-tab-disabled>a {
    cursor: no-drop
}

li.ts-search-form-tab span {
    background: #fff;
    font-size: 9px;
    border-radius: 10px;
    padding: 3px 7px;
    line-height: 9px;
    color: #717379;
    top: -7px;
    right: -7px
}

ul.ts-search-form-tabs:after {
    content: " ";
    clear: both;
    display: block
}

.ts-search-form-tab-current {
    background-color: #fff
}

.ts-search-form-tabs-w .ts-search-form-tab.ts-search-form-tab-current a {
    color: #031b4e
}

.ts-search-form-big-icon {
    position: absolute;
    right: 10px;
    bottom: 10px;
    color: rgba(0,0,0,.05);
    font-size: 115px
}

.ts-search-form-tabs-w .ts-search-form-tab.ts-search-form-tab-current {
    border-radius: 0
}

.ts-search-form-tabs-w .ts-search-form-tab.ts-search-form-tab-current a span {
    background-color: #031b4e;
    color: #fff
}

.ts-search-form-wrapper.ts-search-result-without-tab {
    padding: 50px 30px 40px 30px
}

.ts-search-results-no-content {
    margin-top: 0;
    margin-bottom: 40px;
    padding: 50px 40px 0 40px;
    border: 1px solid #ebecf0;
    border-top: 0
}

.ts-search-form-tabs {
    margin: 0;
    padding: 0;
    margin-top: 30px
}

.ts-search-form-tabs-w .ts-search-form-tab {
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

.ts-search-form-wrapper input[type="search"] {
    background-color: #fff;
    border-radius: 5px 0 0 5px;
    border: none;
    width: 300px;
    margin: 0;
    margin-top: -2px
}

.ts-search-form-wrapper input[type="submit"] {
    background-color: #031b4e;
    margin-left: 0;
    border-radius: 0 5px 5px 0;
    border: none;
    margin-left: -3px
}

.ts-search-results-contents {
    margin-top: 0;
    margin-bottom: 40px;
    padding: 50px 40px 0 40px;
    border: 1px solid #ebecf0;
    border-top: 0
}

.ts-search-results-no-content {
    margin-top: 0;
    margin-bottom: 100px;
    text-align: center;
    font-size: 17px;
    padding: 150px 40px 150px 40px
}

.ts-search-form-tabs-w .ts-search-form-tab:not(.ts-search-form-tab-current):hover {
    background-color: rgba(0,0,0,.05);
    border-radius: 5px 5px 0 0
}

body.search-results .ts-other-cpt-boxstyle .ts-product-featured-wrapper img {
    max-width: 100px
}

body.search-results .ts-other-cpt-boxstyle .ts-featured-wrapper {
    float: left;
    margin-right: 20px
}

body.search-results .ts-other-cpt-boxstyle {
    margin-bottom: 25px
}

body.search-results .ts-other-cpt-boxstyle .ts-cpt-title {
    padding-top: 5px;
    font-size: 17px
}

.ts-search-no-results {
    padding: 0 100px
}

.ts-search-no-results ul {
    list-style: none;
    display: inline-block
}

.ts-search-no-results ul li {
    text-align: left;
    line-height: 30px;
    font-size: 16px
}

.ts-search-results-contents .col-sm-12:nth-last-child(1) .themestek-box-blog-classic .ts-blog-classic-box-content {
    border-bottom: 0;
    padding-bottom: 0
}

.ts-search-results-contents .themestek-box .themestek-box-content-inner {
    padding: 20px
}

.box-top-pos {
    transform: translateY(-25%)
}

.box-top-pos-half {
    transform: translateY(-50%)
}

.box-bot-pos {
    transform: translateY(15%)
}

.box-bot-row {
    z-index: -1
}

.ts-img-shadow img {
    box-shadow: 0 60px 135px rgba(0,0,0,.14),0 15px 65px rgba(0,0,0,.14);
    border-radius: 10px
}

.ts-ihbox-icon i {
    font-weight: 400
}

.ts-small-icon i:before {
    font-size: 18px;
    line-height: 18px
}

.ts-medium-icon i:before {
    font-size: 30px;
    line-height: 30px
}

.ts-large-icon i:before {
    font-size: 60px;
    line-height: 60px
}

.ts-box-seprator .vc_column_container {
    border-right: 1px solid #e1eeff
}

.ts-box-seprator .vc_column_container:last-child {
    border-right: none
}

.ts-no-gutter .vc_column_container>.vc_column-inner {
    padding-left: 0;
    padding-right: 0
}

.ts-box-left-fullbg {
    position: relative
}

.ts-box-left-fullbg:after {
    width: 500%;
    height: 100%;
    display: block!important;
    position: absolute;
    top: 0;
    content: ' ';
    background: #fff;
    left: 100%
}

.box-shadow-1 {
    box-shadow: 0 0 30px rgba(115,128,157,.1)
}

.box-shadow-2 {
    box-shadow: 0 20px 25px -12px rgba(0,0,0,.09)
}

.box-shadow-3 {
    box-shadow: 0 60px 135px rgba(0,0,0,.14),0 15px 65px rgba(0,0,0,.14)
}

.box-shadow-4 {
    box-shadow: 0 30px 70px rgba(0,0,0,.14),0 7px 30px rgba(0,0,0,.14)
}

.imagebox-shadow img {
    border-radius: 8px;
    box-shadow: 0 0 30px rgba(0,0,0,.13)
}

.ts-box-seprator.vc_row-flex>.vc_column_container>.vc_column-inner>.wpb_wrapper,.ts-box-seprator.vc_row-flex>.vc_column_container>.vc_column-inner>.wpb_wrapper .ts-ihbox {
    height: 100%
}

.ts-vc_general.ts-vc_cta3 {
    padding: 0
}

.ts-ihbox .ts-vc_general.ts-vc_cta3 .ts-custom-heading {
    font-size: 18px;
    line-height: 24px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 8px 0 10px 0
}

.ts-ihbox .ts-vc_general.ts-vc_cta3 h4.ts-custom-heading {
    font-family: "Roboto",Tahoma,Geneva,sans-serif!important;
    text-transform: inherit;
    font-size: 13px!important;
    font-weight: 400;
    line-height: 15px!important;
    margin-bottom: 15px;
    color: #031b4e
}

.ts-ihbox i {
    color: #333
}

.ts-ihbox-style-1 {
    padding: 30px 25px;
    background: #fff;
    padding-bottom: 0
}

.ts-ihbox-style-1 .ts-cta3-content-wrapper {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 20px
}

.ts-ihbox-style-1 .ts-ihbox-icon-wrapper {
    margin-bottom: 15px
}

.ts-ihbox.ts-ihbox-style-2 .ts-ihbox-heading-with-icon {
    display: table
}

.ts-ihbox.ts-ihbox-style-2 .ts-ihbox-icon,.ts-ihbox.ts-ihbox-style-2 .ts-ihbox-contents {
    display: table-cell;
    vertical-align: top
}

.ts-ihbox.ts-ihbox-style-2 .ts-vc_general.ts-vc_cta3 .ts-custom-heading {
    margin: 0!important
}

.ts-ihbox.ts-ihbox-style-2 .ts-large-icon i:before {
    font-size: 44px;
    line-height: 44px
}

.ts-ihbox-style-2 .ts-ihbox-contents {
    padding-left: 20px
}

.ts-ihbox .ts-ihbox-number {
    font-size: 72px;
    opacity: .1;
    position: absolute;
    left: 80px;
    font-weight: 700;
    top: 12px
}

.ts-ihbox .ts-vc_general.ts-vc_btn3,.ts-ihbox .ts-vc_general.ts-vc_btn3 i,.ts-ihbox .ts-bg-layer,.ts-link-button a.ts-vc_btn3.ts-vc_btn3-size-md:before,.ts-ihbox-style-4 .ts-ihbox-big-number-text:after,.ts-ihbox-style-3.ts-ihbox:hover {
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out
}

.ts-ihbox,.ts-ihbox .ts-ihbox-inner {
    position: relative;
    z-index: 1
}

.ts-ihbox .ts-vc_general.ts-vc_cta3 h4.ts-custom-heading {
    text-transform: none!important
}

.ts-ihbox-style-3.ts-ihbox {
    padding: 45px;
    margin-bottom: 30px
}

.ts-ihbox-style-3.ts-ihbox:hover,.ts-ihbox-style-3.ts-ihbox:hover h2.ts-custom-heading,.ts-ihbox-style-3.ts-ihbox:hover .ts-icon-skincolor i {
    color: #fff!important
}

.ts-ihbox-style-6,.ts-ihbox-style-6 .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-left .ts-vc_cta3-content,.ts-ihbox-style-3,.ts-ihbox-style-3 .ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-left .ts-vc_cta3-content {
    text-align: center
}

.ts-ihbox-style-6 .ts-table-cell,.ts-ihbox-style-3 .ts-table-cell {
    display: inline-block
}

.ts-ihbox-style-6 .ts-ihbox-icon-wrapper,.ts-ihbox-style-3 .ts-ihbox-icon-wrapper {
    margin-bottom: 15px
}

.ts-ihbox-style-6 .ts-ihbox-icon-wrapper {
    display: inline-block;
    width: 100px;
    height: 100px;
    line-height: 106px;
    text-align: center;
    font-size: 45px;
    border-radius: 50%
}

.ts-ihbox-style-6 .ts-ihbox-icon-wrapper i {
    color: #fff
}

.ts-ihbox-style-6 .ts-ihbox-icon-wrapper i:before {
    font-size: unset;
    line-height: unset
}

.ts-ihbox-style-4 .ts-ihbox-big-number-text {
    color: #c5c5c5;
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 28px;
    position: relative
}

.ts-ihbox-style-4 .ts-ihbox-big-number-text:after {
    content: '';
    height: 2px;
    width: 15%;
    z-index: 1;
    position: absolute;
    bottom: 0;
    left: 0
}

.ts-ihbox-style-4:hover .ts-ihbox-big-number-text:after {
    width: 30%
}

.ts-ihbox-style-4.ts-ihbox .ts-vc_general.ts-vc_cta3 .ts-custom-heading {
    margin-bottom: 5px
}

.ts-ihbox-style-4.ts-ihbox .ts-cta3-content-wrapper {
    padding-right: 20px
}

.ts-ihbox-style-5 {
    margin-bottom: 10px
}

.ts-ihbox-style-5 .ts-ihbox-icon-type-text {
    font-size: 24px;
    font-weight: 700
}

.ts-ihbox-style-5 .ts-ihbox-heading-with-icon {
    display: table
}

.ts-ihbox-style-5 .ts-ihbox-icon,.ts-ihbox-style-5 .ts-ihbox-heading {
    display: table-cell;
    vertical-align: middle
}

.ts-ihbox-style-5 .ts-ihbox-heading {
    padding-left: 15px
}

.ts-ihbox-style-5 .ts-ihbox-heading h2 {
    margin: 0!important;
    margin-bottom: 5px!important
}

.ts-ihbox-style-5 .ts-ihbox-heading h4 {
    margin-bottom: 0!important;
    color: rgba(255,255,255,.9)
}

.ts-ihbox-style-5 .ts-cta3-content-wrapper {
    margin-top: 15px
}

.ts-ihbox-style-5 .ts-ihbox-heading h4 {
    color: rgba(255,255,255,.8)!important
}

.ts-ihbox.ts-ihbox-style-5 i {
    color: #fff
}

.ts-ihbox-style-6 .ts-ihbox-style-3.ts-ihbox {
    padding: 0
}

.ts-ihbox .ts-vc_general.ts-vc_btn3 {
    font-weight: 500;
    text-transform: uppercase;
    font-size: 14px
}

.ts-ihbox .ts-vc_general.ts-vc_btn3.ts-vc_btn3-icon-right .ti-arrow-circle-right:before {
    font-family: "ts-labtechco-icons";
    content: "\e850"
}

.ts-ihbox .ts-vc_general.ts-vc_btn3.ts-vc_btn3-icon-right .ti-arrow-circle-right {
    font-size: 13px
}

.ts-ihbox .ts-vc_btn3-container {
    margin-top: 15px
}

.ts-ihbox .ts-vc_general.ts-vc_btn3 {
    color: #031b4e!important
}

ul.ts-pricelist-block {
    padding: 0;
    margin: 0;
    font-size: 14px
}

ul.ts-pricelist-block li {
    font-size: 14px;
    line-height: 24px;
    color: rgba(0,0,0,.6);
    list-style: none;
    border-bottom: 1px solid rgba(0,0,0,.2);
    padding: 13px 0
}

ul.ts-pricelist-block li:last-child {
    border-bottom: none
}

ul.ts-pricelist-block li .service-price {
    float: right
}

.ts-row-bgtype-skincolor ul.ts-pricelist-block li,.ts-bgcolor-skincolor ul.ts-pricelist-block li,.ts-col-bgcolor-skincolor ul.ts-pricelist-block li,.ts-row-bgtype-darkgrey ul.ts-pricelist-block li,.ts-col-bgcolor-darkgrey ul.ts-pricelist-block li {
    color: #fff;
    border-bottom-color: #66b023
}

.themestek-box-testimonial blockquote:after {
    display: none!important
}

.themestek-box-testimonial .themestek-icon-box {
    height: 100%;
    width: 100%;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.1);
    text-align: center;
    font-size: 34px;
    display: inline-block;
    line-height: 100px;
    border-radius: 50%
}

.themestek-box-testimonial .themestek-testimonial-text {
    border-left: none;
    margin: 0;
    padding: 0;
    background-color: transparent;
    font-size: 24px;
    font-style: italic;
    line-height: 36px;
    margin-top: 0;
    font-weight: 500;
    color: #031b4e
}

.themestek-box-testimonial .themestek-author-name {
    margin-bottom: 0
}

.themestek-box-testimonial .themestek-author-name,.entry-content .themestek-box-testimonial h3.themestek-author-name,.themestek-box-testimonial .themestek-author-name a {
    font-size: 14px;
    line-height: 24px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .5px
}

.themestek-box-testimonial .themestek-box-footer {
    font-size: 13px
}

.ts-testimonialbox-style-1 .themestek-box-desc {
    margin-bottom: 30px
}

.ts-col-bgcolor-skincolor .ts-testimonialbox-style-2.themestek-box-testimonial .themestek-author-name a:hover,.ts-col-bgcolor-skincolor .ts-testimonialbox-style-1.themestek-box-testimonial .themestek-author-name a:hover,.ts-col-bgcolor-skincolor .themestek-box-testimonial .themestek-author-name,.ts-col-bgcolor-skincolor .themestek-box-testimonial .themestek-author-name a,.ts-col-bgcolor-darkgrey .themestek-box-testimonial .themestek-author-name,.ts-col-bgcolor-darkgrey .themestek-box-testimonial .themestek-author-name a {
    color: #fff
}

.themestek-box-testimonial .themestek-box-content {
    position: relative
}

.ts-testimonialbox-style-1.themestek-box-testimonial .themestek-box-content:after {
    position: absolute;
    font-family: "ts-labtechco-icons";
    content: "\e84a";
    font-size: 74px;
    line-height: 74px;
    top: 0;
    left: 0;
    opacity: .1
}

.ts-testimonialbox-style-1.themestek-box-testimonial .themestek-testimonial-text {
    font-style: italic
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below:not(.ts-boxes-txtalign-center) {
    padding-bottom: 0
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below:not(.ts-boxes-txtalign-center) .themestek-boxes-row-wrapper .slick-next,.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below:not(.ts-boxes-txtalign-center) .themestek-boxes-row-wrapper .slick-prev {
    bottom: -165px;
    top: auto;
    left: 54px!important
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-next,.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-prev {
    left: auto;
    right: 47px;
    bottom: -60px;
    background-color: #3368c6;
    border-radius: 0;
    color: #fff;
    height: 40px;
    width: 40px;
    line-height: 40px
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-prev {
    right: 60px
}

.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-prev:before,.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-next:before {
    color: #fff;
    font-size: 24px;
    line-height: 40px
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-item-thumbnail {
    text-align: center
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-item-thumbnail img {
    display: inline-block;
    border-radius: 50%
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content {
    text-align: center;
    width: 60%;
    margin: 0 auto
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content:after {
    display: none
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content {
    padding-top: 40px
}

.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-testimonial-text {
    font-family: initial
}

.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content {
    padding-top: 0;
    padding-bottom: 0
}

.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-testimonial-text {
    font-size: 18px;
    font-style: normal;
    line-height: 28px;
    font-weight: 500
}

.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-box-img {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: -80px;
    margin-top: 15px
}

.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content:after {
    display: none
}

.ts-arrow-right.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-prev,.ts-arrow-right.ts-boxes-carousel-arrows-below .themestek-boxes-row-wrapper .slick-next {
    right: 35px;
    left: auto;
    bottom: 30px
}

.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content {
    padding: 40px 30px
}

.ts-testimonialbox-style-3.themestek-box .themestek-post-item {
    overflow: visible;
    display: flex;
    align-items: center;
    background: #fff
}

.ts-testimonialbox-style-3 .themestek-box-desc {
    margin-bottom: 30px
}

.ts-testimonialbox-style-3 .themestek-box-img {
    padding-bottom: 0;
    min-width: 260px
}

.ts-col-bgcolor-skincolor .ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name,.ts-bgcolor-skincolor .ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name {
    color: #fff
}

.ts-testimonialbox-style-4 .themestek-box-author {
    display: flex;
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important
}

.ts-testimonialbox-style-4 .themestek-box-img img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-right: 20px
}

.ts-testimonialbox-style-4 blockquote.themestek-testimonial-text {
    background-color: transparent;
    padding: 29px 30px 0 50px;
    font-style: normal;
    font-weight: 400;
    color: #8893b9;
    font-size: 18px;
    line-height: 26px
}

.ts-testimonialbox-style-4 .ts-labtechco-icon-star:before {
    margin: 0
}

.ts-testimonialbox-style-4.themestek-box-testimonial .themestek-box-desc {
    position: relative
}

.ts-testimonialbox-style-4.themestek-box-testimonial .themestek-box-desc:after {
    position: absolute;
    font-family: "ts-labtechco-icons";
    content: "\e84a";
    font-size: 30px;
    line-height: 34px;
    top: 35px;
    left: 0;
    opacity: .2
}

.entry-content .ts-testimonialbox-style-4.themestek-box-testimonial h3.themestek-author-name {
    font-size: 16px
}

.themestek-boxes-testimonial .slick-dots {
    bottom: -30px
}

.ts-testimonialbox-style-4 .themestek-box-img .themestek-icon-box {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-right: 20px
}

.ts-clientbox-style-1 {
    padding: 0 15px
}

.themestek-boxes-client.themestek-boxes-view-carousel .ts-client-logo-box-w .tooltip,.themestek-boxes-client.themestek-boxes-view-carousel .ts-client-logo-box-w [data-tooltip] {
    margin: 44px 0
}

.ts-clientbox-style-2 .themestek-item-thumbnail {
    border: 2px solid #e9e9e9;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    -ms-transition: all 0.3s;
    transition: all 0.3s;
    padding: 0 15px;
    display: table;
    width: 100%
}

.ts-clientbox-style-2 .themestek-item-thumbnail .themestek-item-thumbnail-inner {
    height: 100px;
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panel {
    margin-bottom: 10px
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panel:last-child {
    margin-bottom: 0
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panel-title,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline .vc_tta-panel-title {
    font-size: 14px;
    line-height: 20px;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: .5px
}

.wpb-js-composer .vc_tta.vc_general .vc_tta-title-text:not(:empty):not(:first-child),.wpb-js-composer .vc_tta.vc_general .vc_tta-title-text:not(:empty)~* {
    margin-left: 0
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-title>a {
    color: #031b4e
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading {
    background-color: #f6faff;
    border-radius: 0
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:focus a,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover a,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover a {
    color: #fff
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-controls-icon::after,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-controls-icon::before {
    border-color: #031b4e
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::after,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::before {
    border-color: #fff
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover .vc_tta-controls-icon:before,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover .vc_tta-controls-icon:after {
    border-color: #fff
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a {
    border-color: #031b4e;
    color: #031b4e
}

.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover,.vc_tta.vc_general.vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a {
    border-color: #031b4e;
    color: #fff;
    background: #031b4e
}

.vc_tta-accordion .wpb_content_element {
    margin-bottom: 0
}

.wpb-js-composer .vc_tta.vc_tta-shape-rounded.vc_tta-o-shape-group.vc_tta-o-no-fill .vc_tta-panel.vc_active+.vc_tta-panel:last-child:not(:first-child) .vc_tta-panel-heading,.wpb-js-composer .vc_tta.vc_tta-shape-rounded.vc_tta-o-shape-group.vc_tta-o-no-fill .vc_tta-panel.vc_active+.vc_tta-panel:not(:first-child):not(:last-child) .vc_tta-panel-heading {
    border-top-left-radius: 0!important;
    border-top-right-radius: 0!important
}

.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab {
    margin-right: 7px
}

.wpb-js-composer .vc_tta-color-skincolor .vc_tta-tab>a,.wpb-js-composer .vc_tta-panel-title {
    font-size: 14px
}

.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a,.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel-title,.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab>a {
    border: none;
    color: #031b4e
}

.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab>a {
    background-color: #f6faff
}

.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab.vc_active>a,.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a,.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab.vc_active>a,.wpb-js-composer .vc_tta.vc_tta-style-classic.vc_general.vc_tta-color-skincolor .vc_tta-tab.vc_active>a,.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab>a {
    background-color: #f6faff;
    color: #031b4e
}

.wpb-js-composer .vc_tta-container .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab>a:focus,.wpb-js-composer .vc_tta-container .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab>a:hover {
    color: #fff
}

.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-classic.vc_tta-tabs:not(.vc_tta-o-no-fill) .vc_tta-panel .vc_tta-panel-body {
    background-color: #f8f8f8
}

.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-classic.vc_tta-tabs:not(.vc_tta-o-no-fill) .vc_tta-panels .vc_tta-panel-body {
    border-color: #f0f0f0
}

.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-tab.vc_active>a {
    border-color: #f0f0f0;
    background-color: #f8f8f8;
    color: #666
}

.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-tab>a {
    border-color: #031b4e;
    background-color: #2A2A2A;
    color: #fff
}

.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor:not(.vc_tta-o-no-fill) .vc_tta-panel .vc_tta-panel-body,.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-heading {
    border-color: #f0f0f0;
    background-color: #f8f8f8
}

.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a {
    color: #666
}

.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-title>a {
    color: #fff
}

.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-tab>a {
    background-color: #031b4e;
    color: #fff
}

.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-flat:not(.vc_tta-o-no-fill) .vc_tta-panel-body,.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-panel .vc_tta-panel-title>a,.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-flat .vc_tta-tab.vc_active>a {
    color: #fff
}

.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab.vc_active>a {
    border-color: #2A2A2A;
    color: #2A2A2A
}

.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading,.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a {
    border-color: #2A2A2A;
    background-color: transparent;
    color: #2A2A2A
}

.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-title>a:hover,.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a:focus,.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a:hover {
    color: #fff
}

.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab.vc_active>a {
    border-color: #2A2A2A;
    background-color: transparent!important;
    color: #2A2A2A
}

.wpb-js-composer .vc_tta-color-white.vc_tta-style-classic.vc_tta-tabs-position-top.vc_tta-shape-round .vc_tta-tab>a {
    border-color: #efefef;
    background-color: #FFF;
    color: #212121;
    -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,.07);
    -moz-box-shadow: 0 0 15px 0 rgba(0,0,0,.07);
    box-shadow: 0 0 15px 0 rgba(0,0,0,.07)
}

.wpb-js-composer .vc_tta-color-white.vc_tta-style-classic.vc_tta-tabs-position-top.vc_tta-shape-round .vc_tta-tab {
    margin: 1px 10px 0 10px
}

.wpb-js-composer .vc_tta-color-white.vc_tta-style-classic.vc_tta-tabs-position-top.vc_tta-shape-round .vc_tta-tab.vc_active>a {
    border-color: transparent;
    color: #fff
}

.wpb-js-composer .vc_tta-color-white.vc_tta-style-classic.vc_tta-tabs-position-top.vc_tta-shape-round .vc_tta-tab.vc_active>a i {
    color: #fff
}

.wpb-js-composer .vc_tta-color-white.vc_tta-style-classic.vc_tta-tabs-position-top.vc_tta-shape-round .vc_tta-tabs-container {
    margin-bottom: 30px
}

.wpb-js-composer .ts-nutrition-menu .vc_row.vc_inner {
    padding-bottom: 30px;
    margin-bottom: 30px;
    background-color: #f9f9f8;
    padding-top: 30px;
    padding-left: 30px;
    -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,.07);
    -moz-box-shadow: 0 0 15px 0 rgba(0,0,0,.07);
    box-shadow: 0 0 15px 0 rgba(0,0,0,.15);
    margin: 0 16px 35px
}

.wpb-js-composer .ts-nutrition-menu .vc_row-o-equal-height.vc_row-flex>.vc_column_container>.vc_column-inner>.wpb_wrapper {
    display: block
}

.wpb-js-composer .ts-nutrition-menu .vc_row.vc_row-flex>.vc_column_container.vc_col-sm-3>.vc_column-inner {
    padding-left: 0
}

.wpb-js-composer .ts-nutrition-menu .wpb_content_element {
    margin-bottom: 10px
}

.wpb-js-composer .ts-nutrition-menu .ts-vc_btn3-container.ts-vc_btn3-inline {
    margin: 0 5px 5px
}

.wpb-js-composer .ts-nutrition-menu .ts-vc_btn3.ts-vc_btn3-color-white:hover {
    background-color: #333;
    color: #fff
}

span.ts-vc_label_units.vc_label_units {
    position: absolute;
    right: -6px;
    z-index: 3;
    margin-top: -25px;
    text-shadow: none;
    font-size: 14px;
    padding: 1px 9px;
    border-radius: 0;
    position: absolute;
    font-weight: 600;
    letter-spacing: .5px;
    top: 0;
    color: #031b4e
}

.ts-pbar-single-bar-w {
    position: relative;
    margin-top: 55px;
    margin-right: 16px
}

.themestek-progress-bar.vc_progress_bar .vc_single_bar {
    background-color: #f4f4f4;
    border-radius: 0;
    box-shadow: none;
    height: 6px
}

.themestek-progress-bar .vc_single_bar .vc_bar {
    border-radius: 0
}

.themestek-progress-bar .vc_single_bar .vc_label {
    display: block;
    margin: 14px auto 75px;
    width: 100%;
    background: transparent;
    height: 5px;
    border-radius: 6px;
    transition-property: width,background-color;
    padding: 0;
    top: -36px;
    left: 0;
    font-size: 15px;
    color: #0a0c0e;
    font-weight: 500;
    text-shadow: none
}

.themestek-progress-bar.vc_progress_bar .vc_general.vc_single_bar .vc_label {
    top: -25px;
    left: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 700
}

.ts-bgcolor-darkgrey .themestek-progress-bar.vc_progress_bar .vc_general.vc_single_bar .vc_label,.ts-col-bgcolor-darkgrey .themestek-progress-bar.vc_progress_bar .vc_general.vc_single_bar .vc_label {
    color: #fff
}

.vc_progress-bar-color-white.themestek-progress-bar.vc_progress_bar .vc_general.vc_single_bar .vc_label {
    color: #fff;
    text-shadow: none
}

.themestek-progress-bar.vc_progress_bar .vc_single_bar {
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #e8f1fb
}

.themestek-progress-bar.vc_progress_bar .ts-pbar-icon-w {
    position: absolute;
    top: 48px
}

.themestek-progress-bar.vc_progress_bar .ts-vc_icon_element-inner {
    width: 30px;
    height: 40px;
    font-size: 15px
}

.themestek-progress-bar.vc_progress_bar .ts-pbar-single-bar-w .ts-pbar-icon-w {
    position: absolute;
    top: -42px
}

.ts-pbar-icon-true .ts-vc_icon_element {
    margin-bottom: 0
}

.ts-pbar-icon-true .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner {
    width: 46px;
    height: 45px
}

.ts-pbar-icon-true .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-md .ts-vc_icon_element-icon {
    font-size: 21px!important
}

.vc_progress_bar .ts-pbar-icon-true .vc_single_bar {
    margin-left: 60px
}

.ts-pbar-single-bar-w {
    position: relative;
    margin-top: 70px;
    margin-right: 16px
}

.themestek-progress-bar .ts-pbar-single-bar-w:first-child {
    margin-top: 45px
}

.ts-pbar-icon-w {
    position: absolute;
    top: -34px
}

.input-group {
    position: relative;
    display: table;
    border-collapse: separate
}

.wpcf7-form .input-group {
    margin-bottom: 25px!important
}

.wpcf7-form .input-group {
    display: block
}

.ts-fid.ts-fidbox-style-3 {
    text-align: center
}

h3.ts-fid-inner {
    font-size: 60px;
    line-height: 70px;
    font-weight: 700
}

h6.ts-fid-title {
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase
}

.ts-bgcolor-darkgrey .ts-fid-boxstyle-without-icon h6.ts-fid-title,.ts-bgcolor-darkgrey .ts-fid-boxstyle-without-icon h3.ts-fid-inner,.ts-bgcolor-skincolor .ts-fid-boxstyle-without-icon h6.ts-fid-title,.ts-bgcolor-skincolor .ts-fid-boxstyle-without-icon h3.ts-fid-inner,.ts-bgcolor-skincolor .ts-fid-boxstyle-without-icon h3.ts-fid-inner span {
    color: #fff
}

.ts-fidbox-style-4 .ts-sbox-icon-wrapper {
    margin-bottom: 20px;
    color: #031b4e
}

.ts-fidbox-style-4 .ts-large-icon i:before {
    font-size: 50px;
    line-height: 50px
}

.ts-fidbox-style-4 .themestek-fid-inner {
    font-size: 60px;
    font-weight: 600;
    line-height: 60px;
    color: #3368c6;
    font-family: "Roboto Condensed",Arial,Helvetica,sans-serif
}

.ts-fidbox-style-4 h6.ts-fid-title {
    font-size: 18px;
    font-weight: 700;
    text-transform: none
}

.ts-span>.vc_column-inner {
    z-index: 3
}

.ts-col-bg .wpb_wrapper {
    position: relative
}

.ts-left-span .ts-col-wrapper-bg-layer {
    width: auto;
    margin-left: -300px;
    right: 0
}

.ts-right-span .ts-col-wrapper-bg-layer {
    width: auto;
    margin-right: -300px;
    left: 0;
    right: 0
}

.ts-right-span .ts-bg-layer-inner,.ts-left-span .ts-bg-layer-inner {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0
}

.ts-col-bgimage-yes .ts-bg-layer-inner,.ts-col-bgcolor-yes .ts-bg-layer-inner {
    position: absolute;
    width: 100%;
    height: 100%
}

.ts-discount-box .vc_column_container>.vc_column-inner>.wpb_wrapper {
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(115,128,157,.1);
    background-color: #fff;
    height: 100%
}

.ts-ptable-lines-w {
    margin-top: 15px
}

.ts-ptable-line {
    position: relative;
    margin-bottom: 10px
}

.ts-ptable-line .ts-vc_icon_element.ts-vc_icon_element-outer {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 0
}

.ts-ptable-line .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner {
    margin: 0;
    height: auto;
    width: auto;
    top: -3px
}

.ts-ptablebox-colum.ts-ptablebox-featurebox {
    background-color: #fff;
    padding: 30px 0 37px 0;
    margin-top: 0;
    overflow: hidden
}

.ts-ptablebox-style-1 {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    padding: 0;
    text-align: center;
    overflow: hidden;
    background: #fff;
    border: 1px solid #eef1f5
}

.ts-ptablebox-style-1 .themestek-ptable-main {
    padding-top: 40px;
    padding-bottom: 30px;
    border-bottom: 1px solid #eef1f5
}

.ts-ptablebox-style-1 .ts-sbox-icon-wrapper {
    background: #3368c6;
    display: inline-block;
    margin-bottom: 16px;
    width: 90px;
    height: 90px;
    line-height: 90px;
    border-radius: 50%;
    color: #fff
}

.ts-ptablebox-featured-col .ts-ptablebox-style-1 .ts-sbox-icon-wrapper {
    background: #fff!important
}

.ts-ptablebox-style-1 [class^="ts-labtechco-business-icon-"]:before,.ts-ptablebox-style-1 [class*=" ts-labtechco-business-icon-"]:before {
    font-size: 30px
}

.ts-ptablebox-featured-col .ts-ptablebox-style-1 .themestek-ptable-cur-symbol-after,.ts-ptablebox-featured-col .ts-ptablebox-style-1 .themestek-ptable-frequency,.ts-ptablebox-featured-col .ts-ptablebox-style-1 .themestek-ptable-price,.ts-ptablebox-featured-col .ts-ptablebox-style-1 .themestek-ptable-heading,.ts-ptablebox-featured-col .ts-ptablebox-style-1 .ts-ihbox-icon-wrapper {
    color: #fff
}

.ts-ptablebox-style-1 .ts-ihbox-icon-wrapper {
    font-size: 60px;
    line-height: 70px;
    margin-bottom: 15px
}

.ts-ptablebox-style-1 .themestek-ptable-heading {
    font-size: 20px;
    line-height: 32px;
    color: #031b4e;
    font-weight: 600;
    position: relative;
    margin: 0 30px 10px 30px
}

.ts-ptablebox-style-1 .themestek-ptable-price {
    font-size: 60px;
    line-height: 70px;
    font-weight: 700
}

.ts-ptablebox-style-1 .themestek-ptable-price,.ts-ptablebox-style-1 .themestek-ptable-cur-symbol-after {
    color: #031b4e
}

.ts-ptablebox-style-1 .ts-vc_btn3-container {
    margin: 0;
    background-color: #fff;
    width: 100%;
    padding-bottom: 40px
}

.ts-ptablebox-style-1 .themestek-ptable-cur-symbol-after,.ts-ptablebox-style-1 .themestek-ptable-frequency {
    font-size: 20px
}

.ts-ptablebox-style-1 .ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat {
    border-radius: 0;
    background: transparent;
    border-width: 2px
}

.ts-ptablebox-style-1 .ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat:hover {
    color: #fff!important
}

.ts-ptablebox-style-1 .themestek-ptable-cur-symbol-after,.ts-ptablebox-style-1 .themestek-ptable-price {
    display: inline-block
}

.ts-ptablebox-style-1 .themestek-ptable-price-w {
    display: inline-block;
    position: relative
}

.ts-ptablebox-style-1 .themestek-ptable-cur-symbol-after {
    position: absolute;
    top: 10px;
    left: -19px
}

.ts-ptablebox-style-1 .themestek-ptable-frequency {
    display: inline-block;
    color: #737373;
    font-size: 16px;
    margin-left: 5px
}

.ts-search-overlay {
    opacity: 0;
    visibility: hidden;
    position: fixed;
    z-index: 100001;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(9,22,42,.9);
    -webkit-transition: all 300ms;
    -o-transition: all 300ms;
    -moz-transition: all 300ms;
    transition: all 300ms;
    -webkit-transform: translateY(-30%);
    -moz-transform: translateY(-30%);
    -ms-transform: translateY(-30%);
    -o-transform: translateY(-30%);
    transform: translateY(-30%)
}

.ts-search-overlay.st-show {
    display: block;
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0)
}

.ts-search-outer {
    max-width: 970px;
    margin: 0 auto;
    position: relative;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    transform: translateY(-50%)
}

.ts-search-outer .ts-search-logo {
    margin-bottom: 60px;
    position: absolute;
    margin-top: -125px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

.ts-search-outer .ts-search-logo img {
    max-height: 65px
}

.ts-search-overlay .ts-site-searchform {
    position: relative
}

.ts-search-overlay .ts-site-searchform button {
    position: absolute;
    top: 5px;
    right: 5px;
    padding: 10px;
    background-color: #031b4e;
    font-size: 20px;
    height: 60px;
    line-height: 60px;
    padding: 0;
    width: 60px
}

.ts-search-overlay input[type="search"] {
    border: none;
    font-size: 25px;
    color: #09162a;
    padding: 0;
    padding-left: 16px;
    text-align: left;
    height: 70px;
    line-height: 70px
}

.ts-search-overlay input[type="search"]::placeholder {
    color: rgba(0,0,0,.4);
    opacity: 1
}

.ts-search-overlay input[type="search"]:-ms-input-placeholder {
    color: rgba(0,0,0,.4)
}

.ts-search-overlay input[type="search"]::-ms-input-placeholde {
    color: rgba(0,0,0,.4)
}

.ts-header-logo-wrap {
    margin-bottom: 80px
}

.ts-icon-close {
    position: absolute;
    color: #fff;
    right: 25px;
    top: 25px;
    cursor: pointer
}

.ts-icon-close:before {
    content: '\e82d';
    font-family: "ts-labtechco-icons";
    font-size: 30px;
    font-weight: 700;
    opacity: .5;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    display: block;
    opacity: .6
}

.ts-icon-close:hover:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
    opacity: 1
}

.ts-pre-loader-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999999;
    background-color: #fff;
    text-align: center
}

.ts-pre-loader-container img {
    max-width: 100px;
    height: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

.ts-img-shadow .vc_single_image-wrapper img {
    overflow: hidden;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 16px 16px 30px 0 rgba(15,8,49,.2);
    box-shadow: 16px 16px 30px 0 rgba(15,8,49,.2)
}

.themestek-static-box-wrapper .themestek-static-box-content {
    padding: 42px 45px 55px 45px;
    text-align: center
}

.themestek-static-box-wrapper .themestek-static-box-content h4 {
    font-size: 20px
}

.themestek-boxes-static .themestek-boxes-row-wrapper {
    margin: 0
}

.themestek-boxes-static .themestek-boxes-row-wrapper .ts-box-col-wrapper {
    padding: 0;
    margin-bottom: 0!important
}

.themestek-static-box-wrapper:hover .themestek-static-box-desc {
    color: rgba(255,255,255,.9)
}

.wpdevart-booking-form-container,.booking_calendar_container,.booking_calendar_main_container {
    max-width: 100%!important
}

[class^="flaticon-"]:before,[class*=" flaticon-"]:before,[class^="flaticon-"]:after,[class*=" flaticon-"]:after {
    font-size: inherit
}

.menu-toggle,.mega-menu-toggle {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    cursor: pointer;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 40px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 40px;
    background: transparent;
    outline: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-tap-highlight-color: transparent
}

.menu-toggle>*,.mega-menu-toggle>* {
    display: block
}

.menu-toggle:hover,.menu-toggle:focus,.mega-menu-toggle:hover,.mega-menu-toggle:focus {
    outline: none
}

.menu-toggle::-moz-focus-inner,.mega-menu-toggle::-moz-focus-inner {
    border: 0
}

.ts-labtechco-icon-bars,.mega-toggle-label {
    display: inline-block;
    height: 2.71429px;
    width: 25px;
    border-radius: 2.85714px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: black;
    position: relative
}

.ts-labtechco-icon-bars:before,.ts-labtechco-icon-bars:after,.mega-toggle-label:before,.mega-toggle-label:after {
    display: inline-block;
    height: 2.71429px;
    width: 25px;
    border-radius: 2.85714px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: black;
    content: '';
    position: absolute;
    left: 0;
    -webkit-transform-origin: 2.85714px center;
    transform-origin: 2.85714px center;
    width: 100%;
    margin: 0
}

.ts-labtechco-icon-bars:before,.mega-toggle-label:before {
    top: 8px
}

.ts-labtechco-icon-bars:after,.mega-toggle-label:after {
    top: -8px
}

.toggled-on .ts-labtechco-icon-bars,.mega-menu-open .mega-toggle-label {
    -webkit-transform: scale3d(.8,.8,.8);
    transform: scale3d(.8,.8,.8)
}

.mega-menu-toggle {
    width: auto
}

.ts-labtechco-icon-bars:before,.ts-labtechco-icon-bars:after,.mega-menu-toggle .mega-toggle-label:before,.mega-menu-toggle .mega-toggle-label:after {
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    -webkit-transition: top .3s .6s ease,-webkit-transform .3s ease;
    transition: top .3s .6s ease,-webkit-transform .3s ease;
    transition: top .3s .6s ease,transform .3s ease;
    transition: top .3s .6s ease,transform .3s ease,-webkit-transform .3s ease
}

.toggled-on .ts-labtechco-icon-bars,.mega-menu-toggle.mega-menu-open .mega-toggle-label {
    background: transparent
}

.toggled-on .ts-labtechco-icon-bars:before,.toggled-on .ts-labtechco-icon-bars:after,.mega-menu-toggle.mega-menu-open .mega-toggle-label:before,.mega-menu-toggle.mega-menu-open .mega-toggle-label:after {
    top: 0;
    -webkit-transition: top .3s ease,-webkit-transform .3s .5s ease;
    transition: top .3s ease,-webkit-transform .3s .5s ease;
    transition: top .3s ease,transform .3s .5s ease;
    transition: top .3s ease,transform .3s .5s ease,-webkit-transform .3s .5s ease;
    width: 25px
}

.toggled-on .ts-labtechco-icon-bars:before,.mega-menu-toggle.mega-menu-open .mega-toggle-label:before {
    -webkit-transform: rotate3d(0,0,1,45deg);
    transform: rotate3d(0,0,1,45deg)
}

.toggled-on .ts-labtechco-icon-bars:after,.mega-menu-toggle.mega-menu-open .mega-toggle-label:after {
    -webkit-transform: rotate3d(0,0,1,-45deg);
    transform: rotate3d(0,0,1,-45deg)
}

.ts-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,.ts-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1 .mega-toggle-label-open,.ts-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-toggle-label .mega-toggle-label-closed {
    display: none
}

#site-header-menu #site-navigation .menu-toggle .ts-hide {
    display: none!important
}

.ts-responsive-icon-white .ts-optico-icon-bars,.ts-responsive-icon-white .mega-toggle-label,.ts-responsive-icon-white .ts-optico-icon-bars:before,.ts-responsive-icon-white .ts-optico-icon-bars:after,.ts-responsive-icon-white .mega-toggle-label:before,.ts-responsive-icon-white .mega-toggle-label:after {
    background-color: #fff
}

.single-ts-service .site-content #sidebar-left.sidebar {
    padding-left: 30px;
    padding-right: 30px;
    margin-top: 65px;
    padding-top: 0;
    padding-bottom: 0;
    background: #f6faff
}

.single-ts-service .sidebar .widget {
    border: none;
    padding: 0
}

.single-ts-service #primary.content-area {
    margin-bottom: 50px
}

.ts-mail-chimp.widget {
    margin: -40px 0 50px
}

.mc4wp-form p {
    margin-bottom: 15px
}

.mc4wp-form-fields {
    position: relative;
    width: 80%
}

.mc4wp-form-fields .btn[type="submit"] {
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 0;
    height: 45px;
    width: 48px;
    padding: 0;
    font-size: 16px
}

.mc4wp-form-fields .btn[type="submit"] {
    color: #fff
}

.rev_slider .rev-btn {
    -webkit-transition: all .2s ease-in-out!important;
    transition: all .2s ease-in-out!important
}

.rev_slider a.ts-link-button {
    color: #fff
}

.ts-bgcolor-grey .ts-servicebox-style-1 {
    background-color: #fff
}

.ts-servicebox-style-1.themestek-box .themestek-box-desc {
    margin-bottom: 0
}

.ts-servicebox-style-1.themestek-box .themestek-box-content-inner {
    padding: 20px 30px
}

.ts-servicebox-style-1.themestek-box .themestek-pf-box-title h3 {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 15px
}

.ts-servicebox-style-1 {
    background-color: #f6faff
}

.ts-servicebox-style-2 .themestek-serviceimagebox {
    position: relative;
    border-bottom: 3px solid #031b4e
}

.ts-servicebox-style-2 .themestek-pf-box-title {
    padding-top: 15px
}

.ts-servicebox-style-2 {
    margin-bottom: 30px
}

.ts-servicebox-style-2 .themestek-box-content-inner {
    position: absolute;
    top: 50%;
    left: 50%;
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

.ts-servicebox-style-2 .themestek-box-content-inner a {
    border: 2px solid #fff;
    color: #fff;
    padding: 12px 28px;
    font-weight: 500;
    font-size: 16px;
    text-transform: uppercase
}

.ts-servicebox-style-2 .themestek-box-content-inner a:hover {
    color: #031b4e;
    background-color: #fff
}

.ts-servicebox-style-2 .themestek-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #000;
    opacity: 0;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

.ts-servicebox-style-2:hover .themestek-overlay {
    opacity: 1
}

.ts-servicebox-style-3.themestek-box {
    border: 1px solid #e1eeff
}

.ts-servicebox-style-3 .themestek-box-content-inner {
    padding: 35px 25px;
    padding-bottom: 15px;
    text-align: center
}

.ts-servicebox-style-3 .ts-large-icon {
    margin-bottom: 20px
}

.ts-servicebox-style-3 .ts-large-icon i:before {
    font-size: 40px;
    line-height: 46px
}

.entry-content .ts-servicebox-style-3.themestek-box h3 {
    font-size: 20px;
    line-height: 20px;
    margin-bottom: 15px
}

.ts-servicebox-style-4,.ts-servicebox-style-4 .themestek-box-content .ts-ihbox-icon,.ts-servicebox-style-4 .themestek-box-content {
    -webkit-transition: all 0.5s cubic-bezier(.645,.045,.355,1);
    -o-transition: all 0.5s cubic-bezier(.645,.045,.355,1);
    transition: all 0.5s cubic-bezier(.645,.045,.355,1)
}

.ts-servicebox-style-4 {
    position: relative
}

.ts-servicebox-style-4 .themestek-box-content {
    position: absolute;
    bottom: 0;
    background-color: #fff;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border: 1px solid #e1eeff;
    border-right: none
}

.ts-servicebox-style-4 .themestek-box-content .themestek-box-content-inner {
    padding: 40px 25px 0;
    height: 100%;
    position: relative
}

.ts-servicebox-style-4 .themestek-box-content .ts-ihbox-icon {
    font-size: 55px;
    line-height: 60px;
    height: 160px
}

.themestek-box.ts-servicebox-style-4 .themestek-box-category a {
    font-size: 15px
}

.entry-content .ts-servicebox-style-4.themestek-box h3 {
    font-size: 23px;
    line-height: 30px;
    margin-bottom: 0;
    text-transform: inherit
}

body .ts-servicebox-style-4 .themestek-box-link {
    position: absolute;
    width: calc(100% - 60px);
    bottom: 15px;
    left: 30px;
    border-top: 1px solid #e1eeff;
    padding-top: 20px
}

body .ts-servicebox-style-4 .themestek-box-link a {
    color: #031b4e;
    text-align: left;
    font-size: 13px;
    line-height: 16px;
    padding-right: 0;
    font-weight: 600;
    text-transform: uppercase;
    position: relative;
    display: block
}

body .ts-servicebox-style-4 .themestek-box-link a:after {
    content: "\e850";
    font-family: "ts-labtechco-icons";
    font-size: 20px;
    padding-left: 10px;
    background: none!important;
    font-weight: 400;
    line-height: 22px;
    vertical-align: middle;
    float: right
}

.themestek-box.ts-servicebox-style-4:hover .themestek-box-category a,body .ts-servicebox-style-4:hover .themestek-box-content .ts-ihbox-icon i,.ts-servicebox-style-4.themestek-box:hover h3 a,body .ts-servicebox-style-4:hover .themestek-box-link a {
    color: #fff
}

.ts-joincompany {
    display: table
}

.ts-joincompany>.vc_column-inner {
    height: 120px;
    vertical-align: middle;
    display: table-cell
}

.ts-joincompany>.vc_column-inner h3 {
    margin: 0
}

.ts-joincompany.ts-left-span .ts-col-wrapper-bg-layer {
    margin-right: -15px
}

.ts-knowmore {
    position: absolute;
    margin: 0;
    width: 100%;
    text-align: center
}

.ts-knowmore .vc_column_container {
    display: inline-block;
    width: auto;
    float: none;
    vertical-align: middle
}

.ts-knowmore .vc_column_container>.vc_column-inner {
    padding: 0
}

@-webkit-keyframes craneanimation {
    0%,100% {
        -webkit-transform: translateY(0) translateX(0)
    }

    50% {
        -webkit-transform: translateY(10px) translateX(10px)
    }
}

@-moz-keyframes craneanimation {
    0%,100% {
        -moz-transform: translateY(0) translateX(0)
    }

    50% {
        -moz-transform: translateY(10px) translateX(10px)
    }
}

@-o-keyframes craneanimation {
    0%,100% {
        -o-transform: translateY(0) translateX(0)
    }

    50% {
        -o-transform: translateY(10px) translateX(10px)
    }
}

@keyframes craneanimation {
    0%,100% {
        transform: translateY(0) translateX(0)
    }

    50% {
        transform: translateY(10px) translateX(10px)
    }
}

.ts-stretched-icon-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

.ts-stretched-icon-wrapper i {
    font-size: 100px
}

.ts-icon-play-after-bg .vc_single_image-wrapper:after {
    color: #031b4e;
    font-size: 26px;
    font-family: "ts-labtechco-icons";
    content: '\e84f';
    background-color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -30px;
    margin-top: -30px;
    z-index: 99;
    text-align: center;
    line-height: 60px;
    transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out
}

.ts-skincolor-wrapper-after-bg:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0
}

.ts-video-icon.ts-vc_icon_element {
    position: absolute;
    top: 50%;
    -khtml-transform: translateX(0%) translateY(-50%);
    -moz-transform: translateX(0%) translateY(-50%);
    -ms-transform: translateX(0%) translateY(-50%);
    -o-transform: translateX(0%) translateY(-50%);
    transform: translateX(0%) translateY(-50%)
}

.ts-video-icon.ts-vc_icon_element .ts-vc_icon_element-icon.empty:before {
    content: '\e84f';
    font-family: "ts-labtechco-icons";
    font-size: 80px!important
}

.ts-abs-img {
    position: absolute;
    top: -50px;
    left: -200px
}

.ts-link-button a.ts-vc_btn3.ts-vc_btn3-size-md {
    font-size: 14px;
    font-weight: 600px;
    letter-spacing: .5px;
    position: relative;
    padding-bottom: 3px
}

.ts-link-button a.ts-vc_btn3.ts-vc_btn3-size-md:before {
    content: '';
    height: 1px;
    width: 100%;
    z-index: 1;
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fff
}

.ts-link-button a.ts-vc_btn3.ts-vc_btn3-size-md:hover:before {
    width: 1%
}

.ts-link-button a.ts-vc_btn3.ts-vc_btn3-size-md:hover {
    color: #fff!important
}

.ts-play-text-box {
    text-align: center
}

.ts-play-text-box p {
    padding: 0;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    left: 50%;
    top: 45%;
    -khtml-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    position: absolute
}

.ts-play-text-box p,.ts-play-text-box p a {
    border-radius: 50%;
    height: 100px;
    line-height: 100px!important;
    width: 100px;
    display: inline-block;
    transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out
}

.ts-play-text-box p a {
    background-color: #fff
}

.ts-play-text-box p a:hover {
    transform: scale(1.1);
    -webkit-transform: scale(1.1)
}

.ts-play-text-box p a {
    color: #031b4e
}

.ts-play-text-box .wpb_wrapper {
    height: 100%;
    position: relative
}

.edit-link a {
    display: inline-block;
    padding: 5px 10px;
    background-color: #f7f7f9;
    margin: 12px 0 12px 6px;
    border-radius: 5px;
    font-size: 12px;
    color: #031b4e
}

.edit-link a:hover {
    color: #fff
}

.page-id-6476 #slide-2-layer-2,.page-id-6476 #slide-1-layer-2 {
    background-color: #fff!important
}

.ts-bgcolor-white.ts-bg.ts-bgimage-yes.ts-map-bg>.ts-bg-layer {
    opacity: 0
}

.ts-row.ts-map-bg {
    background-size: contain!important
}

body.wpb-js-composer .vc_tta-color-white.vc_tta-style-flat.vc_tta-tabs .vc_tta-panels {
    background-color: inherit
}

body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-flat .vc_tta-panel-body {
    padding: 30px 0 0
}

body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-flat .vc_tta-tab>a {
    background-color: inherit;
    color: rgba(255,255,255,.8);
    padding: 10px 20px 15px 0;
    font-size: 15px;
    font-weight: 500;
    border: none;
    position: relative
}

body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-flat .vc_tta-tab {
    margin-right: 20px
}

body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-flat .vc_tta-tab>a:after {
    position: absolute;
    height: 2px!important;
    bottom: -1px;
    width: 100%;
    content: '';
    left: 0!important;
    background: transparent;
    top: inherit!important
}

body.wpb-js-composer .vc_tta-color-white.vc_tta-style-flat .vc_tta-tab.vc_active>a {
    background-color: inherit;
    color: #fff
}

body.wpb-js-composer .vc_tta-color-white.vc_tta-style-flat .vc_tta-tab.vc_active>a:after {
    background-color: #fff
}

body.wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top .vc_tta-tabs-list {
    border-bottom: 1px solid rgba(255,255,255,.5)
}

.vc_tta-tabs .ts-list.ts-icon-white li,.vc_tta-tabs .ts-list.ts-white li .ts-list-li-content,.vc_tta-tabs .ts-list.ts-icon-white li i,body .wpb_row .vc_tta.vc_general.vc_tta-color-white:not(.vc_tta-o-no-fill) .vc_tta-panel-body .wpb_text_column {
    color: rgba(255,255,255,.8)
}

body .wpb_row .vc_tta.vc_general.vc_tta-color-white:not(.vc_tta-o-no-fill) .vc_tta-panel-body .wpb_text_column {
    margin-bottom: 10px
}

.ts-header-icons .ts-header-wc-cart-link span.number-cart {
    position: absolute;
    top: -16px;
    right: 0;
    padding: 0 4px;
    min-width: 18px;
    height: 18px;
    border-radius: 100%;
    color: #fff;
    font-weight: 500;
    font-size: 11px;
    line-height: 18px;
    text-align: center;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease
}

.ts-header-overlay .site-header:not(.is_stuck) .ts-header-icons .ts-header-wc-cart-link a {
    color: #fff
}

.ts-header-overlay .site-header:not(.is_stuck) .ts-header-icons .ts-header-wc-cart-link span.number-cart {
    background: #fff!important;
    color: #031b4e!important
}

.ts-header-style-classic-2 .ts-header-icons .ts-header-icon {
    margin-right: 15px;
    margin-left: 0
}

.ts-header-style-infostack .ts-header-icons .ts-header-wc-cart-link span.number-cart {
    background: #fff;
    color: #222
}

.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover {
    background-color: #222;
    color: #fff
}

.entry-content .woocommerce h2,.single-product h2 {
    font-size: 20px;
    line-height: 36px;
    font-weight: 600
}

.woocommerce a.button.add_to_cart_button,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600!important;
    border-radius: 0;
    padding: 12px 16px;
    color: #fff;
    border-radius: 0;
    letter-spacing: 1px
}

.woocommerce ul.products li.product,.woocommerce-page ul.products li.product {
    text-align: center
}

.woocommerce .products .star-rating {
    display: inline-block
}

.woocommerce ul.products li.product .woocommerce-loop-category__title,.woocommerce ul.products li.product .woocommerce-loop-product__title,.woocommerce ul.products li.product h3 {
    font-size: 20px;
    line-height: 24px
}

.woocommerce ul.products li.product .button {
    margin-top: 0
}

.woocommerce ul.products li.product .button:hover {
    background: #031b4e;
    color: #fff
}

.woocommerce ul.products li.product .button.loading {
    padding-right: 30px;
    opacity: .7
}

.woocommerce #respond input#submit.loading::after,.woocommerce a.button.loading::after,.woocommerce button.button.loading::after,.woocommerce input.button.loading::after {
    top: 12px;
    right: 10px
}

.woocommerce a.added_to_cart {
    display: block
}

.woocommerce ul.products li.product .price {
    color: #313131;
    font-size: 16px
}

.woocommerce ul.products li.product .price ins {
    color: #313131;
    font-weight: 400
}

.woocommerce nav.woocommerce-pagination ul {
    border: none!important;
    margin-bottom: 50px
}

.woocommerce nav.woocommerce-pagination ul li {
    border: none;
    margin: 0 4px!important
}

.woocommerce-pagination ul li a,.woocommerce-pagination ul li span {
    position: relative;
    display: inline-block;
    line-height: 26px!important;
    height: 44px;
    border-radius: 5px;
    font-size: 18px;
    min-width: 45px!important;
    color: #242424;
    font-weight: 600!important;
    text-align: center;
    background: #fff;
    border: 2px solid #d4d4d4;
    text-transform: capitalize;
    transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    -moz-transition: all 500ms ease
}

.woocommerce .woocommerce-result-count {
    font-weight: 700
}

.woocommerce-ordering .select2-container.select2-container--below {
    width: 234px!important
}

.woocommerce div.product .product_title {
    font-size: 26px;
    line-height: 40px
}

.woocommerce div.product .woocommerce-tabs ul.tabs li {
    margin-right: 8px
}

.woocommerce div.product .woocommerce-tabs ul.tabs li a {
    position: relative;
    top: 1px;
    display: block;
    float: left;
    font-size: 16px;
    color: #fff;
    border: 1px solid #e2e2e2;
    text-transform: capitalize;
    font-weight: 600;
    line-height: 24px;
    cursor: pointer;
    padding: 12px 30px 10px;
    transition: all 500ms ease;
    border-radius: 0
}

.woocommerce div.product .woocommerce-tabs ul.tabs li {
    background: none;
    border-radius: 0;
    margin: 0;
    padding: 0;
    border: none
}

.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
    color: #242424;
    background: #ffffff!important
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:before {
    opacity: 1
}

.woocommerce div.product .woocommerce-tabs ul.tabs li a:before {
    position: absolute;
    content: '';
    left: 0;
    top: -1px;
    width: 100%;
    height: 3px;
    opacity: 0;
    background-color: #f7bd00
}

.woocommerce div.product .woocommerce-tabs ul.tabs {
    padding: 0px!important;
    margin: 0 0 0px!important;
    border: none!important;
    line-height: 0
}

.woocommerce div.product .woocommerce-tabs ul.tabs li:before,.woocommerce div.product .woocommerce-tabs ul.tabs li:after,.woocommerce div.product .woocommerce-tabs ul.tabs:before {
    display: none;
    border: none
}

.woocommerce div.product .woocommerce-tabs .panel {
    background: #fff!important;
    margin-top: 0;
    padding: 30px;
    border: 1px solid #ececec;
    border-radius: 0;
    margin-top: -1px
}

.woocommerce-Tabs-panel h2 {
    font-size: 20px;
    margin-top: 0;
    line-height: 28px
}

.woocommerce div.product div.images .flex-control-thumbs li {
    width: 22%;
    margin-right: 4%
}

.woocommerce div.product .woocommerce-product-gallery .flex-viewport,.woocommerce div.product div.images .woocommerce-product-gallery__image:first-child {
    margin-bottom: 20px
}

.woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2) {
    width: 22%;
    margin-right: 4%
}

.woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(5) {
    margin: 0
}

.woocommerce .quantity .qty {
    width: 5em;
    text-align: center;
    background: 0;
    padding: 10px 0
}

.woocommerce div.product form.cart .button {
    padding: 16px 40px;
    font-weight: 600
}

.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover {
    background-color: #222;
    color: #fff
}

.woocommerce ul.products li.product .onsale {
    min-height: auto;
    min-width: auto;
    line-height: normal;
    border-radius: 0;
    padding: 4px 10px;
    background-color: #313437;
    top: 12px;
    right: 12px;
    font-size: 12px
}

.woocommerce ul.products li.product .onsale {
    top: 0;
    right: 0;
    left: auto;
    margin: -.5em -.5em 0 0
}

.single.woocommerce span.onsale {
    min-height: auto;
    min-width: auto;
    line-height: normal;
    border-radius: 0;
    padding: 8px 16px;
    background-color: #313437;
    top: 12px;
    font-size: 13px;
    left: 12px
}

.woocommerce span.onsale {
    min-height: 4em;
    min-width: 4em;
    line-height: 4em
}

.woocommerce .woocommerce-message .button {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 600;
    border-radius: 0;
    padding: 12px 16px;
    color: #fff;
    border-radius: 0
}

.woocommerce-error,.woocommerce-info,.woocommerce-message {
    line-height: 36px;
    background-color: #f6faff
}

.woocommerce div.product form.cart .variations td.label {
    padding-right: 1em
}

.woocommerce div.product form.cart table.variations tbody tr,.woocommerce div.product form.cart table.variations thead tr {
    border: none
}

.woocommerce div.product form.cart .variations label {
    padding-top: 10px
}

.woocommerce #review_form #respond {
    margin-top: 30px
}

.comment-form .select2-container {
    width: 200px!important
}

#review_form .comment-reply-title {
    font-size: 20px;
    text-transform: inherit;
    line-height: 28px
}

.woocommerce div.product form.cart .variations .select2-container {
    max-width: 100%;
    min-width: 100%;
    width: 100%!important
}

.woocommerce table.shop_attributes td {
    padding: 5px 10px
}

.woocommerce ul.cart_list li .star-rating,.woocommerce ul.product_list_widget li .star-rating {
    float: none;
    margin-bottom: 13px
}

.woocommerce ul.cart_list li img,.woocommerce ul.product_list_widget li img {
    width: 80px;
    float: left;
    margin-left: 0;
    margin-right: 15px
}

.woocommerce ul.product_list_widget li a {
    font-size: 14px;
    font-weight: 500;
    padding-bottom: 6px
}

.widget.woocommerce li a {
    color: #313131
}

.woocommerce div.product form.cart .reset_variations {
    float: right
}

.woocommerce div.product form.cart .variations .label,.woocommerce div.product form.cart .variations label {
    font-weight: 500;
    font-size: 14px;
    color: #222
}

.woocommerce div.product form.cart table.variations td {
    padding-left: 0
}

.woocommerce .cart.shop_table {
    margin-bottom: 40px;
    border: 0;
    border-collapse: collapse
}

.woocommerce .cart.shop_table thead {
    border-radius: 0
}

.woocommerce table.shop_table thead tr,.woocommerce table.shop_table tbody tr,.woocommerce table.shop_table tfoot tr {
    border: 0;
    border-bottom: 1px solid #ededed
}

.woocommerce .cart.shop_table th {
    padding: 20px 0;
    text-transform: uppercase;
    letter-spacing: 1.75px;
    font-weight: 700;
    font-size: 14px;
    line-height: 1.2
}

.woocommerce .cart.shop_table td {
    padding: 30px 0
}

.woocommerce #coupon_code {
    margin: 0 10px 0 0;
    width: 270px!important
}

.woocommerce .cart .button,.woocommerce .cart input.button,.woocommerce button.button:disabled,.woocommerce button.button:disabled[disabled],.woocommerce .coupon .button {
    padding: 15px 16px;
    color: #fff
}

.woocommerce .cart_totals .shop_table {
    border: 0
}

.woocommerce .cart_totals .shop_table td {
    padding: 15px 0
}

.widget_product_categories li.cat-item a {
    position: relative;
    padding-left: 15px
}

.widget_product_categories li.cat-item a:before {
    font-family: "ts-optico-icons";
    content: "\e809";
    position: absolute;
    top: 4px;
    left: 0;
    line-height: 1em;
    font-size: 14px
}

.widget_product_categories li.cat-item ul.children {
    display: none
}

.woocommerce form.woocommerce-form-coupon .form-row-last {
    float: left
}

.woocommerce form.woocommerce-form-coupon .form-row-first {
    width: 37%
}

.woocommerce form.woocommerce-form-coupon button.button {
    padding: 15px 16px
}

.woocommerce #review_form #respond p {
    margin: 10px 0 10px
}

.woocommerce-checkout h3 {
    font-size: 18px;
    line-height: 32px
}

.woocommerce-checkout h3 label {
    font-size: 16px
}

.woocommerce-checkout label {
    font-weight: 500
}

.woocommerce form .form-row {
    padding: 0 3px;
    margin: 0 0 15px
}

.woocommerce .woocommerce-order-details table.shop_table,.woocommerce .woocommerce-checkout-review-order table.shop_table {
    border: 0
}

.woocommerce .woocommerce-order-details table.shop_table th,.woocommerce .woocommerce-order-details table.shop_table td,.woocommerce .woocommerce-checkout-review-order table.shop_table th,.woocommerce .woocommerce-checkout-review-order table.shop_table td {
    padding: 12px 10px
}

.woocommerce .woocommerce-order-details table.shop_table th,.woocommerce .woocommerce-checkout-review-order table.shop_table th,#add_payment_method #payment,.woocommerce-cart #payment,.woocommerce-checkout #payment {
    background: #f6faff
}

.woocommerce .woocommerce-order-details table.shop_table thead th {
    background: #f6faff;
    color: #031b4e
}

.woocommerce ul.order_details {
    padding: 24px 30px;
    background: #42474d;
    color: #fff
}

.woocommerce ul.order_details li {
    font-size: 12px;
    line-height: 22px;
    border-right: 1px dashed #fff;
    padding-right: 4em
}

.logged-in .woocommerce ul.order_details li {
    padding-right: 1em;
    margin-right: 1em
}

.woocommerce-shipping-fields .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0
}

.ts-header-style-classic .ts-header-icons .ts-header-icon.ts-header-wc-cart-link {
    margin-left: 0
}

.widget .woocommerce-product-search {
    position: relative
}

.widget .woocommerce-product-search .search-field {
    border-width: 1px;
    background-color: rgba(220,220,220,.22)
}

.widget .woocommerce-product-search button {
    position: absolute;
    top: 0;
    right: 0;
    box-shadow: none;
    border-bottom: none;
    text-indent: -999px;
    padding: 0;
    width: 46px;
    height: 46px;
    z-index: 1;
    border-radius: 0 3px 3px 0;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 16px 16px;
    opacity: .3
}

.widget .woocommerce-product-search:after {
    font-family: "ts-labtechco-icons";
    content: '\e825';
    position: absolute;
    right: 14px;
    top: 13px;
    font-weight: 700;
    opacity: .5
}

.widget.widget_layered_nav_filters li.chosen {
    padding: 0!important;
    padding-right: 10px!important
}

.woocommerce .widget_price_filter .price_slider_amount {
    line-height: 40px;
    font-size: 14px
}

.woocommerce .widget_price_filter .price_slider_amount .button {
    font-size: 14px
}

.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
    background-color: #f6faff
}

.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
    background-color: #031b4e
}

.woocommerce ul.cart_list li .star-rating,.woocommerce ul.product_list_widget li .star-rating {
    margin-bottom: 5px
}

.widget.widget_display_search .button {
    position: absolute;
    top: 0;
    right: 0;
    box-shadow: none;
    border-bottom: none;
    text-indent: -999px;
    padding: 0;
    width: 46px;
    height: 46px;
    z-index: 1;
    border-radius: 0 3px 3px 0;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 16px 16px;
    opacity: .3
}

.widget.widget_display_search form>div {
    position: relative
}

.widget.widget_display_search form>div:after {
    font-family: "ts-labtechco-icons";
    content: '\e825';
    position: absolute;
    right: 14px;
    top: 12px;
    font-weight: 700;
    opacity: .5
}

.bbp_widget_login .bbp-logged-in {
    padding-left: 60px;
    position: relative
}

.bbp-logged-in h4 {
    margin-bottom: 0;
    margin-top: 0
}

.bbp-forums {
    margin-top: 50px
}

#bbpress-forums div.bbp-search-form {
    margin-bottom: 30px
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,#bbpress-forums p.bbp-topic-meta {
    font-size: 14px;
    margin: 15px 0;
    line-height: 24px
}

#bbpress-forums li.bbp-header,#bbpress-forums li.bbp-footer {
    padding: 20px 35px!important
}

#bbpress-forums li.bbp-body ul.forum,#bbpress-forums li.bbp-body ul.topic {
    padding: 25px 35px!important;
    line-height: 1
}

.forum-titles {
    line-height: 18px;
    font-weight: 500;
    font-style: normal;
    color: #fff;
    font-size: 16px
}

.bbp-topic-permalink,a.bbp-forum-title {
    color: #7884ac;
    font-size: 14px;
    font-weight: 400
}

#bbpress-forums a.bbp-forum-title {
    font-size: 18px;
    font-weight: 600;
    color: #031b4e
}

#bbpress-forums .bbp-topic-title a.bbp-topic-permalink {
    font-weight: 500;
    font-size: 16px;
    color: #031b4e
}

.bbp-remember-me input#rememberme {
    vertical-align: middle;
    margin: 0
}

#bbpress-forums ul.bbp-lead-topic,#bbpress-forums ul.bbp-topics,#bbpress-forums ul.bbp-forums,#bbpress-forums ul.bbp-replies,#bbpress-forums ul.bbp-search-results {
    font-size: 14px
}

dl[role=main] {
    border: 1px solid rgba(153,153,153,.1);
    padding: 20px;
    overflow: hidden;
    background: rgba(255,255,255,.1)
}

dl[role=main] dt {
    border: none;
    width: 80%;
    float: left
}

dl[role=main] dd {
    border: none;
    width: 20%;
    float: left;
    text-align: center
}

dl[role=main] dt:last-of-type,dl[role=main] dd:last-child {
    display: none
}

.widget_display_forums li a {
    font-weight: 400;
    font-size: 14px
}

#bbpress-forums fieldset.bbp-form {
    padding-bottom: 30px
}

div.bbp-template-notice p {
    padding: 10px 8px!important
}

#bbpress-forums p.bbp-topic-meta img.avatar,#bbpress-forums ul.bbp-reply-revision-log img.avatar,#bbpress-forums ul.bbp-topic-revision-log img.avatar,#bbpress-forums div.bbp-template-notice img.avatar,#bbpress-forums .widget_display_topics img.avatar,#bbpress-forums .widget_display_replies img.avatar {
    margin-bottom: 0
}

#bbpress-forums li.bbp-header .bbp-search-content,#bbpress-forums li.bbp-header .bbp-forum-content,#bbpress-forums li.bbp-header .bbp-topic-content,#bbpress-forums li.bbp-header .bbp-reply-content,#bbpress-forums div.bbp-topic-content a,#bbpress-forums div.bbp-reply-content a,#bbpress-forums li.bbp-header .bbp-search-author,#bbpress-forums li.bbp-header .bbp-forum-author,#bbpress-forums li.bbp-header .bbp-topic-author,#bbpress-forums li.bbp-header .bbp-reply-author {
    color: #fff
}

#bbpress-forums #bbp-search-form {
    margin-top: 2px
}

#bbpress-forums #bbp-search-form #bbp_search {
    margin-top: -2px
}

#bbpress-forums .bbp-search-form input[type="submit"] {
    background-color: #031b4e
}

#bbpress-forums div.odd,#bbpress-forums ul.odd {
    background-color: #f6faff
}

#bbpress-forums .bbp-forums-list li {
    font-size: 15px;
    line-height: 24px
}

div.bbp-breadcrumb,div.bbp-topic-tags {
    font-size: 14px
}

div.bbp-forum-header,div.bbp-topic-header,div.bbp-reply-header,li.bbp-body div.hentry {
    margin-bottom: 0;
    overflow: hidden;
    padding: 10px 15px
}

span.bbp-admin-links a {
    color: #031b4e;
    font-size: 11px
}

#bbpress-forums {
    font-size: 14px
}

.bbpress dl[role=main] dt,.bbpress dl[role=main] dd strong {
    font-weight: 400
}

.bbp_widget_login fieldset {
    border: 0;
    padding: 0;
    margin: 0
}

.widget_display_forums li a,.widget_display_views li a,.widget_display_replies li a,.widget_display_topics li a {
    position: relative;
    padding-left: 15px
}

.widget_display_forums li a:before,.widget_display_views li a:before,.widget_display_replies li a:before,.widget_display_topics li a:before {
    font-family: "ts-labtechco-icons";
    content: "\e809";
    position: absolute;
    top: 2px;
    left: 0;
    line-height: 1em;
    font-size: 14px
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

body {
    margin: 0
}

p {
    margin: 0 0 20px
}

article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary {
    display: block
}

audio,canvas,progress,video {
    display: inline-block;
    vertical-align: baseline
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],template {
    display: none
}

a {
    background-color: transparent
}

abbr[title] {
    border-bottom: 1px dotted
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -.5em
}

sub {
    bottom: -.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 0
}

hr {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

code,kbd,pre,samp {
    font-size: 1em
}

button,input,optgroup,select,textarea {
    color: inherit;
    font: inherit;
    margin: 0
}

select {
    text-transform: none
}

button {
    overflow: visible
}

button,input,select,textarea {
    max-width: 98%
}

button,html input[type="button"],input[type="reset"],input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled],html input[disabled] {
    cursor: default;
    opacity: .5
}

button::-moz-focus-inner,input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input[type="checkbox"],input[type="radio"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-right: .4375em;
    padding: 0
}

input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button {
    height: auto
}

input[type="search"] {
    -webkit-appearance: textfield
}

input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    border: 1px solid #d1d1d1;
    margin: 0 0 1.75em;
    padding: .875em
}

fieldset>:last-child {
    margin-bottom: 0
}

legend {
    border: 0;
    padding: 0
}

textarea {
    overflow: auto;
    vertical-align: top
}

optgroup {
    font-weight: 700
}

.ps-container>.ps-scrollbar-y-rail {
    z-index: 9999
}



.attachment .attachment-meta {
    font-size: 13px
}

.attachment .entry-meta {
    text-align: left;
    padding: 14px 12px;
    background: #f5f5f5;
    text-align: left
}

.attachment .image-navigation .navlinks:after,.attachment .image-navigation:before {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

.attachment footer.entry-meta {
    display: none
}

.attachment-meta .entry-date {
    font-weight: 700
}

.full-size-link:before {
    content: none
}

.attachment .full-size-link {
    float: right
}

.attachment .full-size-link a {
    background-color: #fff;
    padding: 5px 8px;
    margin-top: -5px
}

.attachment .entry-content {
    background-color: #fff;
    max-width: 100%;
    padding: 40px 0
}

.image-navigation {
    margin: 0 auto;
    max-width: 1040px;
    position: relative;
    padding-top: 30px
}

.image-navigation a:hover {
    text-decoration: none
}

.navlinks .nav-next,.navlinks .nav-previous {
    display: inline-block
}

.image-navigation .nav-next,.image-navigation .nav-previous {
    position: absolute!important
}

.image-navigation .nav-previous {
    left: 0
}

.image-navigation .nav-next {
    right: 0
}

.image-navigation .meta-nav {
    font-size: 32px;
    font-weight: 300;
    vertical-align: -4px
}

.attachment .entry-attachment,.attachment .type-attachment p {
    margin: 0 auto;
    max-width: 724px;
    text-align: center
}

.attachment .entry-attachment .attachment {
    display: inline-block
}

.attachment .entry-caption {
    text-align: left;
    margin-top: 5px
}

.attachment .entry-description {
    margin: 20px auto 0;
    max-width: 604px
}

.attachment .entry-caption p:last-child,.attachment .entry-description p:last-child {
    margin: 0
}

.attachment .entry-caption p {
    font-size: 12px;
    color: #ADACAC
}

.attachment .site-main .sidebar-container {
    display: none
}

.attachment .site-main article.type-attachment .entry-attachment {
    border: none;
    background: none;
    padding: 0
}

body,button,input,select,textarea {
    color: #1a1a1a;
    font-family: Merriweather,Georgia,serif;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.75
}

h1,h2,h3,h4,h5,h6 {
    clear: both;
    font-weight: 700;
    margin: 0;
    text-rendering: optimizeLegibility
}

dfn,cite,em,i {
    font-style: italic
}

blockquote {
    border: none;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
    quotes: none;
    color: #686868;
    font-size: 18px;
    line-height: 28px;
    font-style: italic;
    font-weight: 300;
    margin: 25px 20px;
    background-color: #f8f8f8;
    padding: 30px 75px 30px 90px;
    position: relative
}

blockquote:after {
    position: absolute;
    content: "\f10e"!important;
    font-family: "ts-labtechco-icons";
    font-size: 37px;
    line-height: 37px;
    top: 31px;
    left: 21px
}

blockquote,q {
    quotes: none
}

blockquote:before,blockquote:after,q:before,q:after {
    content: ""
}

blockquote p {
    margin-bottom: 1.4736842105em
}

blockquote cite,blockquote small {
    color: #1a1a1a;
    display: block;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.75
}

blockquote cite:before,blockquote small:before {
    content: "\2014\00a0"
}

blockquote em,blockquote i,blockquote cite {
    font-style: normal
}

blockquote h3 {
    font-size: 22px;
    line-height: 27px;
    font-weight: 400
}

blockquote strong,blockquote b {
    font-weight: 400
}

blockquote>:last-child {
    margin-bottom: 0
}

address {
    font-style: italic;
    margin: 0 0 1.75em
}

code,kbd,tt,var,samp,pre {
    font-family: Inconsolata,monospace
}

pre {
    border: 1px solid #d1d1d1;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.3125;
    margin: 0 0 1.75em;
    max-width: 100%;
    overflow: auto;
    padding: 1.75em;
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word
}

code {
    background-color: #d1d1d1;
    padding: .125em .25em
}

abbr,acronym {
    border-bottom: 1px dotted #d1d1d1;
    cursor: help
}

mark,ins {
    background: #007acc;
    color: #fff;
    padding: .125em .35em;
    text-decoration: none;
    border-radius: 3px
}

big {
    font-size: 125%
}

menu,ol,ul {
    margin: 16px 0;
    padding: 0 0 0 25px
}

ul li ul {
    list-style-type: circle
}

nav ul,nav ol {
    list-style: none;
    list-style-image: none
}

li>ul,li>ol {
    margin: 0
}

.clear:before,.clear:after,blockquote:before,blockquote:after,.entry-content:before,.entry-content:after,.entry-summary:before,.entry-summary:after,.comment-content:before,.comment-content:after,.site-content:before,.site-content:after,.site-main>article:before,.site-main>article:after,.primary-menu:before,.primary-menu:after,.social-links-menu:before,.social-links-menu:after,.textwidget:before,.textwidget:after,.content-bottom-widgets:before,.content-bottom-widgets:after {
    content: "";
    display: table
}

.clear:after,blockquote:after,.entry-content:after,.entry-summary:after,.comment-content:after,.site-content:after,.site-main>article:after,.primary-menu:after,.social-links-menu:after,.textwidget:after,.content-bottom-widgets:after {
    clear: both
}

.gallery {
    margin: 0
}

.gallery-item {
    max-width: 33.33%;
    display: inline-block;
    text-align: center;
    vertical-align: top;
    width: 100%;
    margin: 0;
    padding: 2px
}

.gallery-columns-1 .gallery-item {
    max-width: 100%
}

.gallery-columns-2 .gallery-item {
    max-width: 50%
}

.gallery-columns-4 .gallery-item {
    max-width: 25%
}

.gallery-columns-5 .gallery-item {
    max-width: 20%
}

.gallery-columns-6 .gallery-item {
    max-width: 16.66%
}

.gallery-columns-7 .gallery-item {
    max-width: 14.28%
}

.gallery-columns-8 .gallery-item {
    max-width: 12.5%
}

.gallery-columns-9 .gallery-item {
    max-width: 11.11%
}

.gallery-icon img {
    margin: 0 auto
}

.gallery-caption {
    color: #686868;
    display: block;
    font-size: 16px;
    font-size: 1.6rem;
    font-style: italic;
    line-height: 1.6153846154;
    padding-top: .5384615385em
}

.gallery-columns-6 .gallery-caption,.gallery-columns-7 .gallery-caption,.gallery-columns-8 .gallery-caption,.gallery-columns-9 .gallery-caption {
    display: none
}

@media print {
    form,button,input,select,textarea,.navigation,.main-navigation,.social-navigation,.sidebar,.content-bottom-widgets,.header-image,.page-links,.edit-link,.comment-respond,.comment-edit-link,.comment-reply-link,.comment-metadata .edit-link,.pingback .edit-link {
        display: none
    }

    body,blockquote cite,blockquote small,pre,.entry-content h4,.entry-content h5,.entry-content h6,.entry-summary h4,.entry-summary h5,.entry-summary h6,.comment-content h4,.comment-content h5,.comment-content h6,.entry-content .author-title {
        font-size: 12pt
    }

    blockquote {
        font-size: 14.25pt
    }

    .site-title,.page-title,.comments-title,.entry-content h2,.entry-summary h2,.comment-content h2,.widecolumn h2 {
        font-size: 17.25pt
    }

    .site-description {
        display: block
    }

    .entry-title {
        font-size: 24.75pt;
        line-height: 1.2727272727;
        margin-bottom: 1.696969697em
    }

    .format-aside .entry-title,.format-image .entry-title,.format-video .entry-title,.format-quote .entry-title,.format-gallery .entry-title,.format-status .entry-title,.format-link .entry-title,.format-audio .entry-title,.format-chat .entry-title {
        font-size: 17.25pt;
        line-height: 1.304347826;
        margin-bottom: 1.826086957em
    }

    .entry-content h1,.entry-summary h1,.comment-content h1 {
        font-size: 21pt
    }

    .entry-content h3,.entry-summary h3,.comment-content h3,body:not(.search-results) .entry-summary {
        font-size: 14.25pt
    }

    .site-description,.author-bio,.entry-footer,.sticky-post,.taxonomy-description,.entry-caption,.comment-metadata,.comment-notes,.comment-awaiting-moderation,.site-info,.wp-caption .wp-caption-text,.gallery-caption {
        font-size: 9.75pt
    }

    body,.site {
        background: none!important
    }

    body,blockquote cite,blockquote small,.site-branding .site-title a,.entry-title a,.comment-author {
        color: #1a1a1a!important
    }

    blockquote,.page-header,.comments-title {
        border-color: #1a1a1a!important
    }

    blockquote,.site-description,body:not(.search-results) .entry-summary,body:not(.search-results) .entry-summary blockquote,.author-bio,.entry-footer,.entry-footer a,.sticky-post,.taxonomy-description,.entry-caption,.comment-author,.comment-metadata a,.comment-notes,.comment-awaiting-moderation,.site-info,.site-info a,.wp-caption .wp-caption-text,.gallery-caption {
        color: #686868!important
    }

    code,hr {
        background-color: #d1d1d1!important
    }

    pre,abbr,acronym,table,th,td,.author-info,.comment-list article,.comment-list .pingback,.comment-list .trackback,.no-comments {
        border-color: #d1d1d1!important
    }

    a {
        color: #007acc!important
    }

    .entry-content a,.entry-summary a,.taxonomy-description a,.comment-content a,.pingback .comment-body>a {
        box-shadow: none;
        border-bottom: 1px solid #007acc!important
    }

    .site {
        margin: 5%
    }

    .site-inner {
        max-width: none
    }

    .site-header {
        padding: 0 0 1.75em
    }

    .site-branding {
        margin-top: 0;
        margin-bottom: 1.75em
    }

    .site-main {
        margin-bottom: 3.5em
    }

    .entry-header,.entry-footer,.page-header,.page-content,.entry-content,.entry-summary,.post-thumbnail,.comments-area {
        margin-right: 0;
        margin-left: 0
    }

    .post-thumbnail,.site-main>article {
        margin-bottom: 3.5em
    }

    .entry-content blockquote.alignleft,.entry-content blockquote.alignright {
        border-width: 4px 0 0 0;
        padding: .9473684211em 0 0;
        width: -webkit-calc(50% - .736842105em);
        width: calc(50% - .736842105em)
    }

    body:not(.search-results) .entry-header+.entry-summary {
        margin-top: -1.473684211em
    }

    .site-footer,.widecolumn {
        padding: 0
    }
}

.isotope,.isotope .isotope-item {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -ms-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s
}

.isotope {
    -webkit-transition-property: height,width;
    -moz-transition-property: height,width;
    -ms-transition-property: height,width;
    -o-transition-property: height,width;
    transition-property: height,width
}

.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform,opacity;
    -moz-transition-property: -moz-transform,opacity;
    -ms-transition-property: -ms-transform,opacity;
    -o-transition-property: -o-transform,opacity;
    transition-property: transform,opacity
}

.isotope.no-transition,.isotope.no-transition .isotope-item,.isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -ms-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s
}

.entry-content img,.entry-summary img,.comment-content img,.widget img,.wp-caption,.site-content img {
    max-width: 100%;
    height: auto
}

.entry-content img,.entry-summary img,.comment-content img[height],img[class*="align"],img[class*="wp-image-"],img[class*="attachment-"] {
    height: auto
}

.ts-noimg,img.size-full,img.size-large,img.wp-post-image {
    height: auto;
    max-width: 100%
}

embed,iframe,object,video {
    max-width: 100%;
    border: 0
}

.entry-content .twitter-tweet-rendered {
    max-width: 100%!important
}

a,a:hover,a:active,a:focus {
    text-decoration: none;
    color: inherit;
    outline: none
}

.screen-reader-text {
    clip: rect(1px,1px,1px,1px);
    position: absolute!important;
    height: 1px;
    width: 1px;
    overflow: hidden
}

.ts-vc_icon_element {
    line-height: 0;
    font-size: 14px;
    margin-bottom: 35px
}

.ts-vc_icon_element.ts-vc_icon_element-outer {
    box-sizing: border-box;
    text-align: center
}

.ts-vc_icon_element.ts-vc_icon_element-outer.ts-vc_icon_element-align-left {
    text-align: left
}

.ts-vc_icon_element.ts-vc_icon_element-outer.ts-vc_icon_element-align-center {
    text-align: center
}

.ts-vc_icon_element.ts-vc_icon_element-outer.ts-vc_icon_element-align-right {
    text-align: right
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner {
    text-align: center;
    display: inline-block;
    border: 2px solid transparent;
    width: 4em;
    height: 4em;
    box-sizing: content-box;
    position: relative
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon {
    font-size: 2.15em;
    font-style: normal;
    font-weight: 400;
    line-height: 1!important;
    font-size-adjust: none;
    font-stretch: normal;
    -webkit-font-feature-settings: normal;
    font-feature-settings: normal;
    -webkit-font-language-override: normal;
    font-language-override: normal;
    -webkit-font-kerning: auto;
    font-kerning: auto;
    font-synthesis: weight style;
    font-variant: normal;
    text-rendering: auto;
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%)
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon:before {
    font-style: normal;
    font-weight: 400;
    display: inline-block;
    text-decoration: inherit;
    width: inherit;
    height: inherit;
    font-size: 1em;
    text-align: center;
    text-rendering: optimizelegibility
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .vc_gitem-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-link {
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    top: 0;
    box-sizing: content-box;
    border: none
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xs {
    max-width: 100%!important;
    line-height: 1.2em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xs.ts-vc_icon_element-have-style-inner {
    width: 2.5em!important;
    height: 2.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xs .ts-vc_icon_element-icon {
    font-size: 1em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-sm {
    max-width: 100%!important;
    line-height: 1.6em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-sm.ts-vc_icon_element-have-style-inner {
    width: 3.5em!important;
    height: 3.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-sm .ts-vc_icon_element-icon {
    font-size: 1.8em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-md {
    max-width: 100%!important;
    line-height: 2.15em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-md .ts-vc_icon_element-icon {
    font-size: 2.8em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-md.ts-vc_icon_element-have-style-inner {
    width: 4.5em!important;
    height: 4.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-lg {
    max-width: 100%!important;
    line-height: 2.85em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-lg.ts-vc_icon_element-have-style-inner {
    width: 5.5em!important;
    height: 5.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-lg .ts-vc_icon_element-icon {
    font-size: 3.8em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xl {
    max-width: 100%!important;
    line-height: 5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xl .ts-vc_icon_element-icon {
    font-size: 4.8em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xl.ts-vc_icon_element-have-style-inner {
    width: 6.5em!important;
    height: 6.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xl .ts-vc_icon_element-icon {
    font-size: 4.5em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-size-xl:not(.ts-vc_icon_element-style-) .ts-vc_icon_element-icon {
    font-size: 3.4em!important
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded .vc_gitem-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded .ts-vc_icon_element-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-outline,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-outline .vc_gitem-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-outline .ts-vc_icon_element-link {
    border-radius: 50%
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less .vc_gitem-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less .ts-vc_icon_element-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less-outline,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less-outline .vc_gitem-link,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-style-rounded-less-outline .ts-vc_icon_element-link {
    border-radius: 5px
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-blue .ts-vc_icon_element-icon {
    color: #5472D2
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-turquoise .ts-vc_icon_element-icon {
    color: #00C1CF
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-pink .ts-vc_icon_element-icon {
    color: #FE6C61
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-violet .ts-vc_icon_element-icon {
    color: #8D6DC4
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-peacoc .ts-vc_icon_element-icon {
    color: #4CADC9
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-chino .ts-vc_icon_element-icon {
    color: #CEC2AB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-mulled_wine .ts-vc_icon_element-icon {
    color: #50485B
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-vista_blue .ts-vc_icon_element-icon {
    color: #75D69C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-black .ts-vc_icon_element-icon {
    color: #2A2A2A
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-grey .ts-vc_icon_element-icon {
    color: #EBEBEB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-orange .ts-vc_icon_element-icon {
    color: #F7BE68
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-sky .ts-vc_icon_element-icon {
    color: #5AA1E3
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-green .ts-vc_icon_element-icon {
    color: #6DAB3C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-juicy_pink .ts-vc_icon_element-icon {
    color: #F4524D
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-sandy_brown .ts-vc_icon_element-icon {
    color: #F79468
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-purple .ts-vc_icon_element-icon {
    color: #B97EBB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-color-white .ts-vc_icon_element-icon {
    color: #FFF
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-blue.ts-vc_icon_element-outline {
    border-color: #5472D2
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-blue.ts-vc_icon_element-background {
    background-color: #5472D2
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-turquoise.ts-vc_icon_element-outline {
    border-color: #00C1CF
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-turquoise.ts-vc_icon_element-background {
    background-color: #00C1CF
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-pink.ts-vc_icon_element-outline {
    border-color: #FE6C61
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-pink.ts-vc_icon_element-background {
    background-color: #FE6C61
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-violet.ts-vc_icon_element-outline {
    border-color: #8D6DC4
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-violet.ts-vc_icon_element-background {
    background-color: #8D6DC4
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-peacoc.ts-vc_icon_element-outline {
    border-color: #4CADC9
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-peacoc.ts-vc_icon_element-background {
    background-color: #4CADC9
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-chino.ts-vc_icon_element-outline {
    border-color: #CEC2AB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-chino.ts-vc_icon_element-background {
    background-color: #CEC2AB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-mulled_wine.ts-vc_icon_element-outline {
    border-color: #50485B
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-mulled_wine.ts-vc_icon_element-background {
    background-color: #50485B
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-vista_blue.ts-vc_icon_element-outline {
    border-color: #75D69C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-vista_blue.ts-vc_icon_element-background {
    background-color: #75D69C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-black.ts-vc_icon_element-outline {
    border-color: #2A2A2A
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-black.ts-vc_icon_element-background {
    background-color: #2A2A2A
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-grey.ts-vc_icon_element-outline {
    border-color: #EBEBEB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-grey.ts-vc_icon_element-background {
    background-color: #EBEBEB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-orange.ts-vc_icon_element-outline {
    border-color: #F7BE68
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-orange.ts-vc_icon_element-background {
    background-color: #F7BE68
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-sky.ts-vc_icon_element-outline {
    border-color: #5AA1E3
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-sky.ts-vc_icon_element-background {
    background-color: #5AA1E3
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-green.ts-vc_icon_element-outline {
    border-color: #6DAB3C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-green.ts-vc_icon_element-background {
    background-color: #6DAB3C
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-juicy_pink.ts-vc_icon_element-outline {
    border-color: #F4524D
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-juicy_pink.ts-vc_icon_element-background {
    background-color: #F4524D
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-sandy_brown.ts-vc_icon_element-outline {
    border-color: #F79468
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-sandy_brown.ts-vc_icon_element-background {
    background-color: #F79468
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-purple.ts-vc_icon_element-outline {
    border-color: #B97EBB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-purple.ts-vc_icon_element-background {
    background-color: #B97EBB
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-white.ts-vc_icon_element-outline {
    border-color: #FFF
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner.ts-vc_icon_element-background-color-white.ts-vc_icon_element-background {
    background-color: #FFF
}

.ts-vc_btn3-container {
    display: block;
    margin-bottom: 21.74px;
    max-width: 100%
}

.ts-vc_btn3-container.ts-vc_btn3-inline {
    display: inline-block;
    vertical-align: top
}

.ts-vc_general.ts-vc_btn3 {
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    background-color: transparent;
    color: #5472D2;
    border: 1px solid transparent;
    box-sizing: border-box;
    word-wrap: break-word;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    position: relative;
    top: 0;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    line-height: normal;
    font-size: 14px;
    padding: 14px 20px;
    letter-spacing: 1px
}

.ts-vc_btn3.ts-vc_btn3-style-modern,.vc_tta.vc_tta-style-modern .vc_tta-panel-body,.vc_tta.vc_tta-style-modern .vc_tta-panel-heading {
    background-image: -webkit-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
    background-image: -o-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%)
}

.ts-vc_general.ts-vc_btn3.active,.ts-vc_general.ts-vc_btn3:active,.ts-vc_general.ts-vc_btn3:focus {
    outline: 0
}

.ts-vc_general.ts-vc_btn3:focus,.ts-vc_general.ts-vc_btn3:hover {
    border: 1px solid transparent;
    text-decoration: none
}

.ts-vc_general.ts-vc_btn3 .ts-vc_btn3-icon {
    vertical-align: top;
    height: 14px;
    line-height: 1;
    font-size: 16px
}

.ts-vc_general.ts-vc_btn3 .ts-vc_btn3-icon-inner {
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    -webkit-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    transform: translate(0,-50%)
}

.ts-vc_general.ts-vc_btn3 .ts-vc_btn3-placeholder {
    display: inline-block;
    vertical-align: top;
    width: 0
}

.ts-vc_btn3.ts-vc_btn3-icon-left,.ts-vc_btn3.ts-vc_btn3-icon-right {
    position: relative
}

.ts-vc_btn3.ts-vc_btn3-icon-left .ts-vc_btn3-icon,.ts-vc_btn3.ts-vc_btn3-icon-right .ts-vc_btn3-icon {
    display: block;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%)
}

.ts-vc_btn3.ts-vc_btn3-icon-left {
    text-align: left
}

.ts-vc_btn3.ts-vc_btn3-icon-right {
    text-align: right
}

.ts-vc_btn3.ts-vc_btn3-icon-right:not(.ts-vc_btn3-block) .ts-vc_btn3-icon-inner {
    -webkit-transform: translate(-75%,-50%);
    -ms-transform: translate(-75%,-50%);
    transform: translate(-75%,-50%)
}

.ts-vc_btn3.ts-vc_btn3-o-empty .ts-vc_btn3-icon {
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%)
}

.ts-vc_btn3.ts-vc_btn3-o-empty:not(.ts-vc_btn3-block) .ts-vc_btn3-icon-inner {
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%)
}

.ts-vc_btn3.ts-vc_btn3-style-classic {
    border-color: rgba(0,0,0,.1)
}

.ts-vc_btn3.ts-vc_btn3-style-modern {
    background-image: linear-gradient(to bottom,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33ffffff',endColorstr='#03ffffff',GradientType=0)
}

.ts-vc_btn3.ts-vc_btn3-style-outline,.ts-vc_btn3.ts-vc_btn3-style-outline-custom,.ts-vc_btn3.ts-vc_btn3-style-outline-custom:focus,.ts-vc_btn3.ts-vc_btn3-style-outline-custom:hover,.ts-vc_btn3.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-style-outline:hover {
    border-width: 1px
}

.ts-vc_btn3.ts-vc_btn3-style-custom {
    background-image: -webkit-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
    background-image: -o-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
    background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#1a000000',GradientType=0);
    background-repeat: repeat-x;
    background-size: 200%;
    background-position: 0 -100%
}

.ts-vc_btn3.ts-vc_btn3-style-custom:focus,.ts-vc_btn3.ts-vc_btn3-style-custom:hover {
    background-position: 0 100%
}

.ts-vc_btn3.ts-vc_btn3-block {
    text-align: inherit
}

.ts-vc_btn3.ts-vc_btn3-shape-square {
    border-radius: 0
}

.ts-vc_btn3.ts-vc_btn3-shape-rounded {
    border-radius: 5px
}

.ts-vc_btn3.ts-vc_btn3-shape-round {
    border-radius: 2em
}

.ts-vc_btn3.ts-vc_btn3-size-xs {
    font-size: 11px;
    padding: 8px 20px
}

.ts-vc_btn3.ts-vc_btn3-size-xs .ts-vc_btn3-icon {
    font-size: 14px;
    height: 11px;
    line-height: 11px
}

.ts-vc_btn3.ts-vc_btn3-size-xs.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 31px
}

.ts-vc_btn3.ts-vc_btn3-size-xs.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 12px
}

.ts-vc_btn3.ts-vc_btn3-size-xs.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 31px
}

.ts-vc_btn3.ts-vc_btn3-size-xs.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 12px
}

.ts-vc_btn3.ts-vc_btn3-size-sm {
    font-size: 12px;
    padding: 12px 30px
}

.ts-vc_btn3.ts-vc_btn3-size-sm .ts-vc_btn3-icon {
    font-size: 14px;
    height: 12px;
    line-height: 12px
}

.ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-left.ts-vc_btn3-style-text:not(.ts-vc_btn3-o-empty) {
    padding-left: 25px
}

.ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 39px
}

.ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 16px
}

.ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 39px
}

.ts-vc_btn3.ts-vc_btn3-size-sm.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 16px
}

.ts-vc_btn3.ts-vc_btn3-size-md {
    font-size: 14px;
    padding: 12px 40px
}

.ts-vc_btn3.ts-vc_btn3-size-md .ts-vc_btn3-icon {
    font-size: 16px;
    height: 14px;
    line-height: 14px
}

.ts-vc_btn3.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 48px
}

.ts-vc_btn3.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 20px
}

.ts-vc_btn3.ts-vc_btn3-size-md.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 46px
}

.ts-vc_btn3.ts-vc_btn3-size-md.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 20px
}

.ts-vc_btn3.ts-vc_btn3-size-lg {
    font-size: 16px;
    padding: 16px 50px
}

.ts-vc_btn3.ts-vc_btn3-size-lg .ts-vc_btn3-icon {
    font-size: 20px;
    height: 16px;
    line-height: 16px
}

.ts-vc_btn3.ts-vc_btn3-size-lg.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) {
    padding-left: 60px
}

.ts-vc_btn3.ts-vc_btn3-size-lg.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    left: 25px
}

.ts-vc_btn3.ts-vc_btn3-size-lg.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) {
    padding-right: 60px
}

.ts-vc_btn3.ts-vc_btn3-size-lg.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    right: 25px
}

.ts-vc_btn3.ts-vc_btn3-color-blue,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #5472D2
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-blue:focus,.ts-vc_btn3.ts-vc_btn3-color-blue:hover {
    color: #f7f7f7;
    background-color: #3c5ecc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-blue:active {
    color: #f2f2f2;
    background-color: #3558c8
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-outline {
    color: #5472D2;
    border-color: #5472D2;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #5472D2;
    background-color: #5472D2
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #5472D2;
    box-shadow: 0 5px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #5472D2;
    top: 3px;
    box-shadow: 0 2px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #5472D2
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #3253bc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #5472D2;
    background-color: #5472D2
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #3c5ecc;
    background-color: #3c5ecc
}

.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-blue.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #3558c8;
    background-color: #3558c8
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #00C1CF
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-turquoise:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise:hover {
    color: #f7f7f7;
    background-color: #00a4b0
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-turquoise:active {
    color: #f2f2f2;
    background-color: #009ba6
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-outline {
    color: #00C1CF;
    border-color: #00C1CF;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #00C1CF;
    background-color: #00C1CF
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #00C1CF;
    box-shadow: 0 5px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #00C1CF;
    top: 3px;
    box-shadow: 0 2px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #00C1CF
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #008d97
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #00C1CF;
    background-color: #00C1CF
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #00a4b0;
    background-color: #00a4b0
}

.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-turquoise.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #009ba6;
    background-color: #009ba6
}

.ts-vc_btn3.ts-vc_btn3-color-pink,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #FE6C61
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-pink:focus,.ts-vc_btn3.ts-vc_btn3-color-pink:hover {
    color: #f7f7f7;
    background-color: #fe5043
}

.ts-vc_btn3.ts-vc_btn3-color-pink.active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-pink:active {
    color: #f2f2f2;
    background-color: #fe4638
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-outline {
    color: #FE6C61;
    border-color: #FE6C61;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #FE6C61;
    background-color: #FE6C61
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #FE6C61;
    box-shadow: 0 5px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #FE6C61;
    top: 3px;
    box-shadow: 0 2px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #FE6C61
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #fe3829
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #FE6C61;
    background-color: #FE6C61
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #fe5043;
    background-color: #fe5043
}

.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-pink.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #fe4638;
    background-color: #fe4638
}

.ts-vc_btn3.ts-vc_btn3-color-violet,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #8D6DC4
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-violet:focus,.ts-vc_btn3.ts-vc_btn3-color-violet:hover {
    color: #f7f7f7;
    background-color: #7c57bb
}

.ts-vc_btn3.ts-vc_btn3-color-violet.active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-violet:active {
    color: #f2f2f2;
    background-color: #7650b8
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-outline {
    color: #8D6DC4;
    border-color: #8D6DC4;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #8D6DC4;
    background-color: #8D6DC4
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #8D6DC4;
    box-shadow: 0 5px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #8D6DC4;
    top: 3px;
    box-shadow: 0 2px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #8D6DC4
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #6e48b1
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #8D6DC4;
    background-color: #8D6DC4
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #7c57bb;
    background-color: #7c57bb
}

.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-violet.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #7650b8;
    background-color: #7650b8
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #4CADC9
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-peacoc:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc:hover {
    color: #f7f7f7;
    background-color: #39a0bd
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-peacoc:active {
    color: #f2f2f2;
    background-color: #3799b5
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-outline {
    color: #4CADC9;
    border-color: #4CADC9;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #4CADC9;
    background-color: #4CADC9
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #4CADC9;
    box-shadow: 0 5px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #4CADC9;
    top: 3px;
    box-shadow: 0 2px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #4CADC9
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #338faa
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #4CADC9;
    background-color: #4CADC9
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #39a0bd;
    background-color: #39a0bd
}

.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-peacoc.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #3799b5;
    background-color: #3799b5
}

.ts-vc_btn3.ts-vc_btn3-color-chino,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #CEC2AB
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-chino:focus,.ts-vc_btn3.ts-vc_btn3-color-chino:hover {
    color: #f7f7f7;
    background-color: #c3b498
}

.ts-vc_btn3.ts-vc_btn3-color-chino.active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-chino:active {
    color: #f2f2f2;
    background-color: #bfaf91
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-outline {
    color: #CEC2AB;
    border-color: #CEC2AB;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #CEC2AB;
    background-color: #CEC2AB
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #CEC2AB;
    box-shadow: 0 5px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #CEC2AB;
    top: 3px;
    box-shadow: 0 2px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #CEC2AB
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #b9a888
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #CEC2AB;
    background-color: #CEC2AB
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #c3b498;
    background-color: #c3b498
}

.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-chino.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #bfaf91;
    background-color: #bfaf91
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #50485B
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine:hover {
    color: #f7f7f7;
    background-color: #413a4a
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine:active {
    color: #f2f2f2;
    background-color: #3c3644
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-outline {
    color: #50485B;
    border-color: #50485B;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #50485B;
    background-color: #50485B
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #50485B;
    box-shadow: 0 5px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #50485B;
    top: 3px;
    box-shadow: 0 2px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #50485B
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #342f3c
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #50485B;
    background-color: #50485B
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #413a4a;
    background-color: #413a4a
}

.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-mulled-wine.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #3c3644;
    background-color: #3c3644
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #75D69C
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-vista-blue:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue:hover {
    color: #f7f7f7;
    background-color: #5dcf8b
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue:active {
    color: #f2f2f2;
    background-color: #56cd85
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-outline {
    color: #75D69C;
    border-color: #75D69C;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #75D69C;
    background-color: #75D69C
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #75D69C;
    box-shadow: 0 5px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #75D69C;
    top: 3px;
    box-shadow: 0 2px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #75D69C
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #4ac97d
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #75D69C;
    background-color: #75D69C
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #5dcf8b;
    background-color: #5dcf8b
}

.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-vista-blue.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #56cd85;
    background-color: #56cd85
}

.ts-vc_btn3.ts-vc_btn3-color-orange,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #F7BE68
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-orange:focus,.ts-vc_btn3.ts-vc_btn3-color-orange:hover {
    color: #f7f7f7;
    background-color: #f5b14b
}

.ts-vc_btn3.ts-vc_btn3-color-orange.active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-orange:active {
    color: #f2f2f2;
    background-color: #f5ad41
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-outline {
    color: #F7BE68;
    border-color: #F7BE68;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #F7BE68;
    background-color: #F7BE68
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #F7BE68;
    box-shadow: 0 5px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #F7BE68;
    top: 3px;
    box-shadow: 0 2px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #F7BE68
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #f4a733
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #F7BE68;
    background-color: #F7BE68
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #f5b14b;
    background-color: #f5b14b
}

.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-orange.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #f5ad41;
    background-color: #f5ad41
}

.ts-vc_btn3.ts-vc_btn3-color-sky,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #5AA1E3
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-sky:focus,.ts-vc_btn3.ts-vc_btn3-color-sky:hover {
    color: #f7f7f7;
    background-color: #4092df
}

.ts-vc_btn3.ts-vc_btn3-color-sky.active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-sky:active {
    color: #f2f2f2;
    background-color: #378ddd
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-outline {
    color: #5AA1E3;
    border-color: #5AA1E3;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #5AA1E3;
    background-color: #5AA1E3
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #5AA1E3;
    box-shadow: 0 5px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #5AA1E3;
    top: 3px;
    box-shadow: 0 2px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #5AA1E3
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #2a86db
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #5AA1E3;
    background-color: #5AA1E3
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #4092df;
    background-color: #4092df
}

.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-sky.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #378ddd;
    background-color: #378ddd
}

.ts-vc_btn3.ts-vc_btn3-color-green,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #6DAB3C
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-green:focus,.ts-vc_btn3.ts-vc_btn3-color-green:hover {
    color: #f7f7f7;
    background-color: #5f9434
}

.ts-vc_btn3.ts-vc_btn3-color-green.active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-green:active {
    color: #f2f2f2;
    background-color: #5a8d31
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-outline {
    color: #6DAB3C;
    border-color: #6DAB3C;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #6DAB3C;
    background-color: #6DAB3C
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #6DAB3C;
    box-shadow: 0 5px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #6DAB3C;
    top: 3px;
    box-shadow: 0 2px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #6DAB3C
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #53812d
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #6DAB3C;
    background-color: #6DAB3C
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #5f9434;
    background-color: #5f9434
}

.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-green.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #5a8d31;
    background-color: #5a8d31
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #F4524D
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink:hover {
    color: #f7f7f7;
    background-color: #f23630
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink:active {
    color: #f2f2f2;
    background-color: #f22d27
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-outline {
    color: #F4524D;
    border-color: #F4524D;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #F4524D;
    background-color: #F4524D
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #F4524D;
    box-shadow: 0 5px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #F4524D;
    top: 3px;
    box-shadow: 0 2px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #F4524D
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #f11f18
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #F4524D;
    background-color: #F4524D
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #f23630;
    background-color: #f23630
}

.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-juicy-pink.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #f22d27;
    background-color: #f22d27
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #F79468
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown:hover {
    color: #f7f7f7;
    background-color: #f57f4b
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown:active {
    color: #f2f2f2;
    background-color: #f57941
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-outline {
    color: #F79468;
    border-color: #F79468;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #F79468;
    background-color: #F79468
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #F79468;
    box-shadow: 0 5px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #F79468;
    top: 3px;
    box-shadow: 0 2px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #F79468
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #f46e33
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #F79468;
    background-color: #F79468
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #f57f4b;
    background-color: #f57f4b
}

.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-sandy-brown.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #f57941;
    background-color: #f57941
}

.ts-vc_btn3.ts-vc_btn3-color-purple,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #B97EBB
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-purple:focus,.ts-vc_btn3.ts-vc_btn3-color-purple:hover {
    color: #f7f7f7;
    background-color: #ae6ab0
}

.ts-vc_btn3.ts-vc_btn3-color-purple.active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-purple:active {
    color: #f2f2f2;
    background-color: #ab63ad
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-outline {
    color: #B97EBB;
    border-color: #B97EBB;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #B97EBB;
    background-color: #B97EBB
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #B97EBB;
    box-shadow: 0 5px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #B97EBB;
    top: 3px;
    box-shadow: 0 2px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #B97EBB
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #a559a8
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #B97EBB;
    background-color: #B97EBB
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #ae6ab0;
    background-color: #ae6ab0
}

.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-purple.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #ab63ad;
    background-color: #ab63ad
}

.ts-vc_btn3.ts-vc_btn3-color-black,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #333
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-black:focus,.ts-vc_btn3.ts-vc_btn3-color-black:hover {
    color: #f7f7f7;
    background-color: #1b1b1b
}

.ts-vc_btn3.ts-vc_btn3-color-black.active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-black:active {
    color: #f2f2f2;
    background-color: #161616
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline {
    border-color: #2A2A2A;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #2A2A2A;
    background-color: #2A2A2A
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #2A2A2A;
    box-shadow: 0 5px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #2A2A2A;
    top: 3px;
    box-shadow: 0 2px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #2A2A2A
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #0e0e0e
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #2A2A2A;
    background-color: #2A2A2A
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #1b1b1b;
    background-color: #1b1b1b
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #161616;
    background-color: #161616
}

.ts-vc_btn3.ts-vc_btn3-color-grey,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-flat {
    color: #666;
    background-color: #EBEBEB
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-grey:focus,.ts-vc_btn3.ts-vc_btn3-color-grey:hover {
    color: #5e5e5e;
    background-color: #dcdcdc
}

.ts-vc_btn3.ts-vc_btn3-color-grey.active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-grey:active {
    color: #595959;
    background-color: #d7d7d7
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline {
    border-color: #EBEBEB;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline:hover {
    color: #666;
    border-color: #EBEBEB;
    background-color: #EBEBEB
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d {
    color: #666;
    background-color: #EBEBEB;
    box-shadow: 0 5px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d:hover {
    color: #5e5e5e;
    background-color: #EBEBEB;
    top: 3px;
    box-shadow: 0 2px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d:active {
    color: #595959;
    background-color: #EBEBEB
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #cfcfcf
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-modern {
    color: #666;
    border-color: #EBEBEB;
    background-color: #EBEBEB
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-modern:hover {
    color: #5e5e5e;
    border-color: #dcdcdc;
    background-color: #dcdcdc
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-modern:active {
    color: #595959;
    border-color: #d7d7d7;
    background-color: #d7d7d7
}

.ts-vc_btn3.ts-vc_btn3-color-white,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat {
    color: #0a0c0e;
    background-color: #FFF
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-white:focus,.ts-vc_btn3.ts-vc_btn3-color-white:hover {
    color: #5e5e5e;
    background-color: #f0f0f0
}

.ts-vc_btn3.ts-vc_btn3-color-white.active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-white:active {
    color: #595959;
    background-color: #ebebeb
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline {
    border-color: #FFF;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline:hover {
    color: #0a0c0e;
    border-color: #FFF;
    background-color: #FFF
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d {
    color: #666;
    background-color: #FFF;
    box-shadow: 0 5px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d:hover {
    color: #5e5e5e;
    background-color: #FFF;
    top: 3px;
    box-shadow: 0 2px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d:active {
    color: #595959;
    background-color: #FFF
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-modern {
    color: #666;
    border-color: #FFF;
    background-color: #FFF;
    background-image: -webkit-linear-gradient(top,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
    background-image: -o-linear-gradient(top,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
    background-image: linear-gradient(to bottom,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#03000000',endColorstr='#05000000',GradientType=0)
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-modern:hover {
    color: #5e5e5e;
    border-color: #f0f0f0;
    background-color: #f0f0f0
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-modern:active {
    color: #595959;
    border-color: #ebebeb;
    background-color: #ebebeb
}

.ts-vc_btn3.ts-vc_btn3-color-default,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat {
    color: #333;
    background-color: #f7f7f7
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-default:focus,.ts-vc_btn3.ts-vc_btn3-color-default:hover {
    color: #2b2b2b;
    background-color: #e8e8e8
}

.ts-vc_btn3.ts-vc_btn3-color-default.active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-default:active {
    color: #262626;
    background-color: #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-outline {
    color: #f7f7f7;
    border-color: #f7f7f7;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-outline:hover {
    color: #333;
    border-color: #f7f7f7;
    background-color: #f7f7f7
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d {
    color: #333;
    background-color: #f7f7f7;
    box-shadow: 0 5px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d:hover {
    color: #2b2b2b;
    background-color: #f7f7f7;
    top: 3px;
    box-shadow: 0 2px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d:active {
    color: #262626;
    background-color: #f7f7f7
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #dbdbdb
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-modern {
    color: #333;
    border-color: #f7f7f7;
    background-color: #f7f7f7
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-modern:hover {
    color: #2b2b2b;
    border-color: #e8e8e8;
    background-color: #e8e8e8
}

.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-default.ts-vc_btn3-style-modern:active {
    color: #262626;
    border-color: #e3e3e3;
    background-color: #e3e3e3
}

.ts-vc_btn3.ts-vc_btn3-color-primary,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-flat {
    color: #FFF;
    background-color: #08c
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-primary:focus,.ts-vc_btn3.ts-vc_btn3-color-primary:hover {
    color: #f7f7f7;
    background-color: #0074ad
}

.ts-vc_btn3.ts-vc_btn3-color-primary.active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-primary:active {
    color: #f2f2f2;
    background-color: #006da3
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-outline {
    color: #08c;
    border-color: #08c;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-outline:hover {
    color: #FFF;
    border-color: #08c;
    background-color: #08c
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d {
    color: #FFF;
    background-color: #08c;
    box-shadow: 0 5px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #08c;
    top: 3px;
    box-shadow: 0 2px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #08c
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #006394
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-modern {
    color: #FFF;
    border-color: #08c;
    background-color: #08c
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #0074ad;
    background-color: #0074ad
}

.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-primary.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #006da3;
    background-color: #006da3
}

.ts-vc_btn3.ts-vc_btn3-color-info,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-flat {
    color: #FFF;
    background-color: #58B9DA
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-info:focus,.ts-vc_btn3.ts-vc_btn3-color-info:hover {
    color: #f7f7f7;
    background-color: #3fafd4
}

.ts-vc_btn3.ts-vc_btn3-color-info.active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-info:active {
    color: #f2f2f2;
    background-color: #37abd3
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-outline {
    color: #58B9DA;
    border-color: #58B9DA;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-outline:hover {
    color: #FFF;
    border-color: #58B9DA;
    background-color: #58B9DA
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d {
    color: #FFF;
    background-color: #58B9DA;
    box-shadow: 0 5px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #58B9DA;
    top: 3px;
    box-shadow: 0 2px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #58B9DA
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #2da4cd
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-modern {
    color: #FFF;
    border-color: #58B9DA;
    background-color: #58B9DA
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #3fafd4;
    background-color: #3fafd4
}

.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-info.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #37abd3;
    background-color: #37abd3
}

.ts-vc_btn3.ts-vc_btn3-color-success,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-flat {
    color: #fff;
    background-color: #6AB165
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-success:focus,.ts-vc_btn3.ts-vc_btn3-color-success:hover {
    color: #f7f7f7;
    background-color: #59a453
}

.ts-vc_btn3.ts-vc_btn3-color-success.active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-success:active {
    color: #f2f2f2;
    background-color: #559d50
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-outline {
    color: #6AB165;
    border-color: #6AB165;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-outline:hover {
    color: #fff;
    border-color: #6AB165;
    background-color: #6AB165
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d {
    color: #fff;
    background-color: #6AB165;
    box-shadow: 0 5px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #6AB165;
    top: 3px;
    box-shadow: 0 2px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #6AB165
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #4f934b
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-modern {
    color: #fff;
    border-color: #6AB165;
    background-color: #6AB165
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #59a453;
    background-color: #59a453
}

.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-success.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #559d50;
    background-color: #559d50
}

.ts-vc_btn3.ts-vc_btn3-color-warning,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-flat {
    color: #FFF;
    background-color: #F90
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-warning:focus,.ts-vc_btn3.ts-vc_btn3-color-warning:hover {
    color: #f7f7f7;
    background-color: #e08700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-warning:active {
    color: #f2f2f2;
    background-color: #d68100
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-outline {
    color: #F90;
    border-color: #F90;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-outline:hover {
    color: #FFF;
    border-color: #F90;
    background-color: #F90
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d {
    color: #FFF;
    background-color: #F90;
    box-shadow: 0 5px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #F90;
    top: 3px;
    box-shadow: 0 2px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #F90
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #c77700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-modern {
    color: #FFF;
    border-color: #F90;
    background-color: #F90
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #e08700;
    background-color: #e08700
}

.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-warning.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #d68100;
    background-color: #d68100
}

.ts-vc_btn3.ts-vc_btn3-color-danger,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-flat {
    color: #FFF;
    background-color: #FF675B
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-danger:focus,.ts-vc_btn3.ts-vc_btn3-color-danger:hover {
    color: #f7f7f7;
    background-color: #ff4b3c
}

.ts-vc_btn3.ts-vc_btn3-color-danger.active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-danger:active {
    color: #f2f2f2;
    background-color: #ff4132
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-outline {
    color: #FF675B;
    border-color: #FF675B;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-outline:hover {
    color: #FFF;
    border-color: #FF675B;
    background-color: #FF675B
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d {
    color: #FFF;
    background-color: #FF675B;
    box-shadow: 0 5px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #FF675B;
    top: 3px;
    box-shadow: 0 2px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #FF675B
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #ff3323
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-modern {
    color: #FFF;
    border-color: #FF675B;
    background-color: #FF675B
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #ff4b3c;
    background-color: #ff4b3c
}

.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-danger.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #ff4132;
    background-color: #ff4132
}

.ts-vc_btn3.ts-vc_btn3-color-inverse,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat {
    color: #FFF;
    background-color: #555
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat:hover,.ts-vc_btn3.ts-vc_btn3-color-inverse:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse:hover {
    color: #f7f7f7;
    background-color: #464646
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat.active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat:active,.ts-vc_btn3.ts-vc_btn3-color-inverse:active {
    color: #f2f2f2;
    background-color: #414141
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-outline {
    color: #555;
    border-color: #555;
    background-color: transparent
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-outline.active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-outline:active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-outline:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-outline:hover {
    color: #FFF;
    border-color: #555;
    background-color: #555
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d {
    color: #FFF;
    background-color: #555;
    box-shadow: 0 5px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d:hover {
    color: #f7f7f7;
    background-color: #555;
    top: 3px;
    box-shadow: 0 2px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d:active {
    color: #f2f2f2;
    background-color: #555
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs {
    box-shadow: 0 3px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-xs:hover {
    top: 1px;
    box-shadow: 0 2px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm {
    box-shadow: 0 4px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-sm:hover {
    top: 2px;
    box-shadow: 0 2px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg {
    box-shadow: 0 5px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-3d.ts-vc_btn3-size-lg:hover {
    top: 3px;
    box-shadow: 0 2px 0 #393939
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-modern {
    color: #FFF;
    border-color: #555;
    background-color: #555
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-modern:focus,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-modern:hover {
    color: #f7f7f7;
    border-color: #464646;
    background-color: #464646
}

.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-modern.active,.ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-modern:active {
    color: #f2f2f2;
    border-color: #414141;
    background-color: #414141
}

.ts-vc_btn3.ts-vc_btn3-color-black.ts-vc_btn3-style-outline {
    color: #2A2A2A
}

.ts-vc_btn3.ts-vc_btn3-color-grey.ts-vc_btn3-style-outline {
    color: #EBEBEB
}

.ts-vc_btn3.ts-vc_btn3-color-white.ts-vc_btn3-style-outline {
    color: #FFF
}

.ts-vc_btn3-container.ts-vc_btn3-center {
    text-align: center
}

.ts-vc_btn3-container.ts-vc_btn3-left {
    text-align: left
}

.ts-vc_btn3-container.ts-vc_btn3-right {
    text-align: right
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-icon-left .ts-vc_btn3-icon,.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-icon-right .ts-vc_btn3-icon {
    display: inline-block;
    position: static;
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    transform: translate(0,0);
    min-width: 1em
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    margin-right: .5em
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-icon-right:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon {
    margin-left: .5em
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-xs {
    font-size: 11px;
    padding: 8px 12px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-xs.ts-vc_btn3-style-outline,.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-xs.ts-vc_btn3-style-outline-custom {
    padding: 7px 11px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-sm {
    font-size: 12px;
    padding: 11px 16px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-sm.ts-vc_btn3-style-outline,.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-sm.ts-vc_btn3-style-outline-custom {
    padding: 10px 15px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-md {
    font-size: 14px;
    padding: 14px 20px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-md.ts-vc_btn3-style-outline,.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-md.ts-vc_btn3-style-outline-custom {
    padding: 13px 23px
}

.ts-vc_btn3-container.ts-vc_btn3-center .ts-vc_btn3-block.ts-vc_btn3-size-lg {
    font-size: 16px;
    padding: 18px 25px
}

.ts-vc_btn3.ts-vc_btn3-color-skincolor.ts-vc_btn3-style-3d:focus,.ts-vc_btn3.ts-vc_btn3-color-skincolor.ts-vc_btn3-style-3d:hover {
    top: 3px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-transparent.ts-cta3-only {
    background-color: transparent;
    border-color: transparent
}

.ts-vc_cta3-container {
    margin-bottom: 35px;
    margin-left: auto;
    margin-right: auto
}

.ts-vc_cta3-container::after,.ts-vc_cta3-container::before {
    display: table;
    content: ' '
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-bottom .ts-vc_cta3-icons .ts-vc_icon_element,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-top .ts-vc_cta3-icons .ts-vc_icon_element {
    display: inline-block
}

.ts-vc_cta3-container.ts-vc_cta3-size-xs {
    width: 50%
}

.ts-vc_cta3-container.ts-vc_cta3-size-sm {
    width: 60%
}

.ts-vc_cta3-container.ts-vc_cta3-size-md {
    width: 70%
}

.ts-vc_cta3-container.ts-vc_cta3-size-lg {
    width: 80%
}

.ts-vc_cta3-container.ts-vc_cta3-size-xl {
    width: 90%
}

.ts-vc_general.ts-vc_cta3 {
    border: 1px solid transparent;
    font-size: 1em;
    padding: 28px;
    word-wrap: break-word
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-style-classic,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-style-custom {
    border-color: #F0F0F0;
    background-color: #f7f7f7
}

.ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content {
    vertical-align: top
}

.ts-vc_general.ts-vc_cta3 .ts-vc_cta3-content>:last-child,.ts-vc_general.ts-vc_cta3 .ts-vc_cta3-icons>:last-child {
    margin-bottom: 0
}

.ts-vc_general.ts-vc_cta3 .ts-vc_cta3-actions {
    vertical-align: middle;
    white-space: nowrap
}

@media (min-width: 768px) {
    .ts-vc_general.ts-vc_cta3 .ts-vc_cta3-actions .vc_btn3-container {
        margin:0
    }
}

.ts-vc_general.ts-vc_cta3 .ts-vc_cta3-icons {
    vertical-align: middle
}

.ts-vc_general.ts-vc_cta3 h2,.ts-vc_general.ts-vc_cta3 h4 {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-left .ts-vc_cta3-content {
    text-align: left
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-right .ts-vc_cta3-content {
    text-align: right
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-center .ts-vc_cta3-content {
    text-align: center
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-align-justify .ts-vc_cta3-content {
    text-align: justify
}

.separator_align_center,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-bottom .ts-vc_cta3-icons,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-top .ts-vc_cta3-icons,.vc_pie_chart {
    text-align: center
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-top .ts-vc_cta3_content-container {
    padding-top: 1em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-bottom .ts-vc_cta3_content-container {
    padding-bottom: 1em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-left .ts-vc_cta3-icons {
    display: table-cell
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-left .ts-vc_cta3_content-container {
    display: table-cell;
    padding-left: 1em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-right .ts-vc_cta3-icons {
    display: table-cell
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-right .ts-vc_cta3_content-container {
    display: table-cell;
    padding-right: 1em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border {
    position: relative
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border .ts-vc_cta3-icons {
    position: absolute
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right .ts-vc_cta3-icons {
    right: 0;
    top: 50%;
    -webkit-transform: translate(50%,-50%);
    -ms-transform: translate(50%,-50%);
    transform: translate(50%,-50%)
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xs {
    margin-right: 17px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xs .ts-vc_cta3_content-container {
    padding-right: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-sm .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xs.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-right: 7px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-sm {
    margin-right: 22px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-md .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-sm.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-right: 14px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-md {
    margin-right: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-lg .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-md.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-right: 21px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-lg {
    margin-right: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-lg.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xl .ts-vc_cta3_content-container {
    padding-right: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xl {
    margin-right: 50px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-right.ts-vc_cta3-icon-size-xl.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-right: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left .ts-vc_cta3-icons {
    left: 0;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%)
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xs {
    margin-left: 17px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xs .ts-vc_cta3_content-container {
    padding-left: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-sm .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xs.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-left: 7px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-sm {
    margin-left: 22px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-md .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-sm.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-left: 14px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-md {
    margin-left: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-lg .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-md.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-left: 21px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-lg {
    margin-left: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-lg.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-left: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xl .ts-vc_cta3_content-container {
    padding-left: 50px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xl {
    margin-left: 50px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-left.ts-vc_cta3-icon-size-xl.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-left: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top .ts-vc_cta3-icons {
    left: 50%;
    top: 0;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%)
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xs {
    margin-top: 17px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xs .ts-vc_cta3_content-container {
    padding-top: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-sm .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xs.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-top: 7px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-sm {
    margin-top: 22px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-md .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-sm.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-top: 14px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-md {
    margin-top: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-lg .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-md.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-top: 21px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-lg {
    margin-top: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-lg.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xl .ts-vc_cta3_content-container {
    padding-top: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xl {
    margin-top: 50px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-top.ts-vc_cta3-icon-size-xl.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-top: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom .ts-vc_cta3-icons {
    left: 50%;
    bottom: 0;
    -webkit-transform: translate(-50%,50%);
    -ms-transform: translate(-50%,50%);
    transform: translate(-50%,50%)
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xs {
    margin-bottom: 17px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xs .ts-vc_cta3_content-container {
    padding-bottom: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-sm .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xs.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-bottom: 7px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-sm {
    margin-bottom: 22px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-md .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-sm.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-bottom: 14px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-md {
    margin-bottom: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-lg .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-md.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-bottom: 21px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-lg {
    margin-bottom: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-lg.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xl .ts-vc_cta3_content-container {
    padding-bottom: 28px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xl {
    margin-bottom: 50px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-on-border.ts-vc_cta3-icons-bottom.ts-vc_cta3-icon-size-xl.ts-vc_cta3-icons-in-box .ts-vc_cta3_content-container {
    padding-bottom: 35px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-top .ts-vc_cta3-content {
    margin-top: 1em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-bottom .ts-vc_cta3-content {
    margin-bottom: 1em
}

@media (min-width: 768px) {
    .ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-left .ts-vc_cta3-actions,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-right .ts-vc_cta3-actions {
        max-width:30%;
        display: table-cell
    }

    .ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-left .ts-vc_cta3-content {
        padding-left: 28px;
        display: table-cell
    }

    .ts-vc_general.ts-vc_cta3.ts-vc_cta3-actions-right .ts-vc_cta3-content {
        padding-right: 28px;
        display: table-cell
    }
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-style-outline {
    border-width: 3px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-shape-square {
    border-radius: 0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-shape-rounded {
    border-radius: 5px
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-shape-round {
    border-radius: 4em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #5472D2
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-flat {
    color: #c9d2f0;
    border-color: transparent;
    background-color: #5472D2
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #3253bc;
    color: #c9d2f0;
    border-color: transparent;
    background-color: #5472D2
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-outline {
    border-color: #5472D2;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-blue.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #5472D2
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #00C1CF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-flat {
    color: #d3f5f1;
    border-color: transparent;
    background-color: #00C1CF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #008d97;
    color: #d3f5f1;
    border-color: transparent;
    background-color: #00C1CF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-outline {
    border-color: #00C1CF;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-turquoise.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #00C1CF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #FE6C61
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-flat {
    color: #fcdbd7;
    border-color: transparent;
    background-color: #FE6C61
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #fe3829;
    color: #fcdbd7;
    border-color: transparent;
    background-color: #FE6C61
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-outline {
    border-color: #FE6C61;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-pink.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #FE6C61
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #8D6DC4
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-flat {
    color: #e1d5f5;
    border-color: transparent;
    background-color: #8D6DC4
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #6e48b1;
    color: #e1d5f5;
    border-color: transparent;
    background-color: #8D6DC4
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-outline {
    border-color: #8D6DC4;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-violet.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #8D6DC4
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #4CADC9
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-flat {
    color: #d0edf5;
    border-color: transparent;
    background-color: #4CADC9
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #338faa;
    color: #d0edf5;
    border-color: transparent;
    background-color: #4CADC9
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-outline {
    border-color: #4CADC9;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-peacoc.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #4CADC9
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #CEC2AB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-flat {
    color: #f7f3eb;
    border-color: transparent;
    background-color: #CEC2AB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #b9a888;
    color: #f7f3eb;
    border-color: transparent;
    background-color: #CEC2AB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-outline {
    border-color: #CEC2AB;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-chino.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #CEC2AB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #50485B
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-flat {
    color: #e2ddeb;
    border-color: transparent;
    background-color: #50485B
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #342f3c;
    color: #e2ddeb;
    border-color: transparent;
    background-color: #50485B
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-outline {
    border-color: #50485B;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-mulled-wine.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #50485B
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #75D69C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-flat {
    color: #e1f5e9;
    border-color: transparent;
    background-color: #75D69C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #4ac97d;
    color: #e1f5e9;
    border-color: transparent;
    background-color: #75D69C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-outline {
    border-color: #75D69C;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-vista-blue.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #75D69C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #F7BE68
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-flat {
    color: #faf0e1;
    border-color: transparent;
    background-color: #F7BE68
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #f4a733;
    color: #faf0e1;
    border-color: transparent;
    background-color: #F7BE68
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-outline {
    border-color: #F7BE68;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-orange.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #F7BE68
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #5AA1E3
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-flat {
    color: #dce9f5;
    border-color: transparent;
    background-color: #5AA1E3
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #2a86db;
    color: #dce9f5;
    border-color: transparent;
    background-color: #5AA1E3
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-outline {
    border-color: #5AA1E3;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sky.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #5AA1E3
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #6DAB3C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-flat {
    color: #e5f2da;
    border-color: transparent;
    background-color: #6DAB3C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #53812d;
    color: #e5f2da;
    border-color: transparent;
    background-color: #6DAB3C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-outline {
    border-color: #6DAB3C;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-green.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #6DAB3C
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #F4524D
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-flat {
    color: #fce2e1;
    border-color: transparent;
    background-color: #F4524D
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #f11f18;
    color: #fce2e1;
    border-color: transparent;
    background-color: #F4524D
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-outline {
    border-color: #F4524D;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-juicy-pink.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #F4524D
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #F79468
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-flat {
    color: #f7e1d7;
    border-color: transparent;
    background-color: #F79468
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #f46e33;
    color: #f7e1d7;
    border-color: transparent;
    background-color: #F79468
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-outline {
    border-color: #F79468;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-sandy-brown.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #F79468
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #B97EBB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-flat {
    color: #f4dff5;
    border-color: transparent;
    background-color: #B97EBB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #a559a8;
    color: #f4dff5;
    border-color: transparent;
    background-color: #B97EBB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-outline {
    border-color: #B97EBB;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-purple.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #B97EBB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #2A2A2A
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-flat {
    color: #d9d9d9;
    border-color: transparent;
    background-color: #2A2A2A
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #0e0e0e;
    color: #d9d9d9;
    border-color: transparent;
    background-color: #2A2A2A
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #fff
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-outline {
    border-color: #2A2A2A;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-black.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #2A2A2A
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #EBEBEB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-flat {
    color: #9d9d9e;
    border-color: transparent;
    background-color: #EBEBEB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #cfcfcf;
    color: #9d9d9e;
    border-color: transparent;
    background-color: #EBEBEB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-outline {
    border-color: #EBEBEB;
    background-color: transparent
}

.wpb_wrapper div:not(.ts-sbox) .ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-grey.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #EBEBEB
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-classic .ts-vc_cta3-content-header {
    color: #FFF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-flat {
    color: #9d9d9e;
    border-color: transparent;
    background-color: #FFF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #e3e3e3;
    color: #9d9d9e;
    border-color: transparent;
    background-color: #FFF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-outline {
    border-color: #FFF;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-white.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #FFF
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-flat {
    color: #9d9d9e;
    border-color: transparent;
    background-color: #F0F0F0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-flat .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-3d {
    box-shadow: 0 5px 0 #d4d4d4;
    color: #9d9d9e;
    border-color: transparent;
    background-color: #F0F0F0
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-3d .ts-vc_cta3-content-header {
    color: #666
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-outline {
    border-color: #F0F0F0;
    background-color: transparent
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-classic.ts-vc_cta3-style-outline .ts-vc_cta3-content-header {
    color: #F0F0F0
}

.ts-vc_cta3.ts-vc_cta3-icon-size-xs .ts-vc_icon_element .ts-vc_icon_element-inner {
    height: 1em;
    width: 1em
}

.ts-vc_cta3.ts-vc_cta3-icon-size-sm .ts-vc_icon_element .ts-vc_icon_element-inner {
    height: 2em;
    width: 2em
}

.ts-vc_cta3.ts-vc_cta3-icon-size-md .ts-vc_icon_element .ts-vc_icon_element-inner {
    height: 3em;
    width: 3em
}

.ts-vc_cta3.ts-vc_cta3-icon-size-lg .ts-vc_icon_element .ts-vc_icon_element-inner {
    height: 4em;
    width: 4em
}

.ts-vc_cta3.ts-vc_cta3-icon-size-xl .ts-vc_icon_element .ts-vc_icon_element-inner {
    height: 5em;
    width: 5em
}

.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-bottom .ts-vc_cta3-icons .ts-vc_icon_element,.ts-vc_general.ts-vc_cta3.ts-vc_cta3-icons-top .ts-vc_cta3-icons .ts-vc_icon_element {
    display: inline-block
}

.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner {
    transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out
}

.vc_col-has-fill>.vc_column-inner,.vc_row-has-fill+.vc_row-full-width+.vc_row>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_row>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_vc_row>.vc_row>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_vc_row_inner>.vc_row>.vc_vc_column_inner>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_row>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_vc_column_inner>.vc_column_container>.vc_column-inner {
    padding-top: 0
}

.ts-vc_icon_element-color-bar_green {
    color: #5bb75b
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_green span.ts-vc_label_units.vc_label_units {
    background-color: #5bb75b
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_green span.ts-vc_label_units.vc_label_units:before {
    border-color: #5bb75b transparent
}

.ts-vc_icon_element-color-bar_red {
    color: #da4f49
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_red span.ts-vc_label_units.vc_label_units {
    background-color: #da4f49
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_red span.ts-vc_label_units.vc_label_units:before {
    border-color: #da4f49 transparent
}

.ts-vc_icon_element-color-bar_blue {
    color: #0074CC
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_blue span.ts-vc_label_units.vc_label_units {
    background-color: #0074CC
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_blue span.ts-vc_label_units.vc_label_units:before {
    border-color: #0074CC transparent
}

.vc_progress-bar-color-white.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-white.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #fff
}

.vc_progress-bar-color-white.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #fff transparent
}

.vc_progress-bar-color-white.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-white.vc_progress_bar.themestek-progress-bar .vc_single_bar {
    background-color: rgba(255,255,255,.5)
}

.vc_progress-bar-color-bar_blue.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_blue.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #0074CC
}

.vc_progress-bar-color-bar_blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #0074CC
}

.vc_progress-bar-color-bar_blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #0074CC transparent
}

.vc_progress-bar-color-bar_blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-bar_turquoise.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_turquoise.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #49afcd
}

.vc_progress-bar-color-bar_turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #49afcd
}

.vc_progress-bar-color-bar_turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #49afcd transparent
}

.vc_progress-bar-color-bar_turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-bar_green.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_green.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #5bb75b
}

.vc_progress-bar-color-bar_green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #5bb75b
}

.vc_progress-bar-color-bar_green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #5bb75b transparent
}

.vc_progress-bar-color-bar_green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.ts-vc_icon_element-color-bar_orange,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_orange .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_orange.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_orange.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #faa732
}

.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_orange span.ts-vc_label_units.vc_label_units,.vc_progress-bar-color-bar_orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #faa732
}

.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_orange span.ts-vc_label_units.vc_label_units:before,.vc_progress-bar-color-bar_orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #faa732 transparent
}

.vc_progress-bar-color-bar_orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-bar_red.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-bar_red.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #da4f49
}

.vc_progress-bar-color-bar_red.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #da4f49
}

.vc_progress-bar-color-bar_red.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #da4f49 transparent
}

.vc_progress-bar-color-bar_red.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.ts-vc_icon_element-color-bar_black,.vc_progress-bar-color-bar_black.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #414141
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_black span.ts-vc_label_units.vc_label_units,.vc_progress-bar-color-bar_black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #414141
}

.vc_progress_bar.themestek-progress-bar .vc_progress-bar-color-bar_black span.ts-vc_label_units.vc_label_units:before,.vc_progress-bar-color-bar_black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #414141 transparent
}

.vc_progress-bar-color-bar_black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-blue.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-blue.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #5472D2
}

.vc_progress-bar-color-blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #5472D2
}

.vc_progress-bar-color-blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #5472D2 transparent
}

.vc_progress-bar-color-blue.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-turquoise.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-turquoise.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #00C1CF
}

.vc_progress-bar-color-turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #00C1CF
}

.vc_progress-bar-color-turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #00C1CF transparent
}

.vc_progress-bar-color-turquoise.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-pink.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-pink.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #FE6C61
}

.vc_progress-bar-color-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #FE6C61
}

.vc_progress-bar-color-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #FE6C61 transparent
}

.vc_progress-bar-color-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-violet.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-violet.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #8D6DC4
}

.vc_progress-bar-color-violet.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #8D6DC4
}

.vc_progress-bar-color-violet.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #8D6DC4 transparent
}

.vc_progress-bar-color-violet.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-peacoc.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-peacoc.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #4CADC9
}

.vc_progress-bar-color-peacoc.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #4CADC9
}

.vc_progress-bar-color-peacoc.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #4CADC9 transparent
}

.vc_progress-bar-color-peacoc.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-chino.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-chino.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #CEC2AB
}

.vc_progress-bar-color-chino.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #CEC2AB
}

.vc_progress-bar-color-chino.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #CEC2AB transparent
}

.vc_progress-bar-color-chino.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-mulled_wine.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-mulled_wine.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #50485B
}

.vc_progress-bar-color-mulled_wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #50485B
}

.vc_progress-bar-color-mulled_wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #50485B transparent
}

.vc_progress-bar-color-mulled_wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-black.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-black.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #2A2A2A
}

.vc_progress-bar-color-black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #2A2A2A
}

.vc_progress-bar-color-black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #2A2A2A transparent
}

.vc_progress-bar-color-black.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-skincolor span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-grey.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-grey.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #EBEBEB
}

.vc_progress-bar-color-grey.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #EBEBEB
}

.vc_progress-bar-color-grey.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #EBEBEB transparent
}

.vc_progress-bar-color-grey.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #202020
}

.vc_progress-bar-color-orange.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-orange.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #F7BE68
}

.vc_progress-bar-color-orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #F7BE68
}

.vc_progress-bar-color-orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #F7BE68 transparent
}

.vc_progress-bar-color-orange.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-sky.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-sky.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #5AA1E3
}

.vc_progress-bar-color-sky.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #5AA1E3
}

.vc_progress-bar-color-sky.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #5AA1E3 transparent
}

.vc_progress-bar-color-sky.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-green.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-green.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #6DAB3C
}

.vc_progress-bar-color-green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #6DAB3C
}

.vc_progress-bar-color-green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #6DAB3C transparent
}

.vc_progress-bar-color-green.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-juicy-pink.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-juicy-pink.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #F4524D
}

.vc_progress-bar-color-juicy-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #F4524D
}

.vc_progress-bar-color-juicy-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #F4524D transparent
}

.vc_progress-bar-color-juicy-pink.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-sandy_brown.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-sandy_brown.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #F79468
}

.vc_progress-bar-color-sandy_brown.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #F79468
}

.vc_progress-bar-color-sandy_brown.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #F79468 transparent
}

.vc_progress-bar-color-sandy_brown.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-purple.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-purple.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #B97EBB
}

.vc_progress-bar-color-purple.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #B97EBB
}

.vc_progress-bar-color-purple.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #B97EBB transparent
}

.vc_progress-bar-color-purple.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.vc_progress-bar-color-mulled-wine.vc_progress_bar.themestek-progress-bar .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner .ts-vc_icon_element-icon,.vc_progress-bar-color-mulled-wine.vc_progress_bar.themestek-progress-bar .vc_general.vc_single_bar .vc_label {
    color: #50485B
}

.vc_progress-bar-color-mulled-wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    background-color: #50485B
}

.vc_progress-bar-color-mulled-wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units:before {
    border-color: #50485B transparent
}

.vc_progress-bar-color-mulled-wine.vc_progress_bar.themestek-progress-bar span.ts-vc_label_units.vc_label_units {
    color: #fff
}

.ts-list.ts-icon-blue li,.ts-list.ts-blue li .ts-list-li-content,.ts-list.ts-icon-blue li i,.ts-blue {
    color: #5472D2
}

.ts-list.ts-icon-turquoise li,.ts-list.ts-turquoise li .ts-list-li-content,.ts-list.ts-icon-turquoise li i,.ts-turquoise {
    color: #00C1CF
}

.ts-list.ts-icon-pink li,.ts-list.ts-pink li .ts-list-li-content,.ts-list.ts-icon-pink li i,.ts-pink {
    color: #FE6C61
}

.ts-list.ts-icon-violet li,.ts-list.ts-violet li .ts-list-li-content,.ts-list.ts-icon-violet li i,.ts-violet {
    color: #8D6DC4
}

.ts-list.ts-icon-peacoc li,.ts-list.ts-peacoc li .ts-list-li-content,.ts-list.ts-icon-peacoc li i,.ts-peacoc {
    color: #4CADC9
}

.ts-list.ts-icon-chino li,.ts-list.ts-chino li .ts-list-li-content,.ts-list.ts-icon-chino li i,.ts-chino {
    color: #CEC2AB
}

.ts-list.ts-icon-mulled_wine li,.ts-list.ts-mulled_wine li .ts-list-li-content,.ts-list.ts-icon-mulled_wine li i,.ts-mulled_wine {
    color: #50485B
}

.ts-list.ts-icon-black li,.ts-list.ts-black li .ts-list-li-content,.ts-list.ts-icon-black li i,.ts-black {
    color: #2A2A2A
}

.ts-list.ts-icon-grey li,.ts-list.ts-grey li .ts-list-li-content,.ts-list.ts-icon-grey li i,.ts-grey {
    color: #EBEBEB
}

.ts-list.ts-icon-orange li,.ts-list.ts-orange li .ts-list-li-content,.ts-list.ts-icon-orange li i,.ts-orange {
    color: #F7BE68
}

.ts-list.ts-icon-sky li,.ts-list.ts-sky li .ts-list-li-content,.ts-list.ts-icon-sky li i,.ts-sky {
    color: #5AA1E3
}

.ts-list.ts-icon-green li,.ts-list.ts-green li .ts-list-li-content,.ts-list.ts-icon-green li i,.ts-green {
    color: #6DAB3C
}

.ts-list.ts-icon-juicy_pink li,.ts-list.ts-juicy_pink li .ts-list-li-content,.ts-list.ts-icon-juicy_pink li i,.ts-juicy_pink {
    color: #F4524D
}

.ts-list.ts-icon-sandy_brown li,.ts-list.ts-sandy_brown li .ts-list-li-content,.ts-list.ts-icon-sandy_brown li i,.ts-sandy_brown {
    color: #F79468
}

.ts-list.ts-icon-purple li,.ts-list.ts-purple li .ts-list-li-content,.ts-list.ts-icon-purple li i,.ts-purple {
    color: #B97EBB
}

.ts-list.ts-icon-white li,.ts-list.ts-white li .ts-list-li-content,.ts-list.ts-icon-white li i,.ts-white {
    color: #fff
}

.ts-icolor-dark {
    color: #202020
}

.ts-icolor-white {
    color: #fff
}

.ts-icolor-grey {
    color: #e7e7e7
}

body .pp_social {
    display: none
}

body div.pp_default .pp_top .pp_left,body div.pp_default .pp_top .pp_middle,body div.pp_default .pp_top .pp_right,body div.pp_default .pp_content_container .pp_left,body div.pp_default .pp_content_container .pp_right,body div.pp_default .pp_bottom .pp_left,body div.pp_default .pp_bottom .pp_middle,body div.pp_default .pp_bottom .pp_right {
    background-image: none
}

body div.pp_default .pp_description {
    margin-left: 10px
}

body div.pp_default .pp_close {
    right: 3px
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    vertical-align: middle;
    width: 100%;
    margin: 0 0 1.75em
}

table th {
    border: 0;
    padding: 5px 7px
}

table td {
    padding: 5px 10px
}

table tbody tr,table thead tr {
    border: 1px solid #e6e6e6
}

table tbody th {
    border-right: 1px solid #e6e6e6
}

.alignleft {
    float: left;
    margin: .375em 1.75em 1.75em 0
}

.alignright {
    float: right;
    margin: .375em 0 1.75em 1.75em
}

.aligncenter {
    clear: both;
    display: block;
    margin: 0 auto 1.75em
}

.wp-caption .wp-caption-text {
    font-style: italic;
    color: #b3b3b3;
    font-size: 12px;
    line-height: 1.6153846154;
    padding-top: .5384615385em
}

.wp-caption {
    margin-bottom: 1.75em;
    max-width: 100%
}

dl {
    margin: 0 0 1.75em
}

dt {
    font-weight: 700
}

dd {
    margin: 0 0 1.75em
}

h1,h2,h3,h4,h5,h6 {
    line-height: 1.3;
    margin-bottom: 10px;
    margin-top: 30px
}

.themestek-box .themestek-pf-box-title h3,.ts-post-featured-link .ts-format-link-title,.ts-infostack-right-content h1,.ts-infostack-right-content h2,.ts-infostack-right-content h3,.ts-infostack-right-content h4,.ts-infostack-right-content h5,.ts-infostack-right-content h6,.vc_custom_heading,.ts-custom-heading,.ts-fid-title,h3.ts-fid-inner,.themestek-box-blog .themestek-box-title h4,.single-ts-portfolio h1,.single-ts-portfolio h2,.single-ts-portfolio h3,.single-ts-portfolio h4,.single-ts-portfolio h5,.single-ts-portfolio h6,.single-ts-team-member h1,.single-ts-team-member h2,.single-ts-team-member h3,.single-ts-team-member h4,.single-ts-team-member h5,.single-ts-team-member h6,.single-ts-service h1,.single-ts-service h2,.single-ts-service h3,.single-ts-service h4,.single-ts-service h5,.single-ts-service h6 {
    margin-top: 0
}

address {
    font-style: italic;
    margin: 0 0 24px
}

abbr[title] {
    border-bottom: 1px dotted
}

b,strong {
    font-weight: 700
}

dfn {
    font-style: italic
}

mark {
    background: #ff0;
    color: #000
}

code,kbd,pre,samp {
    font-family: monospace,serif;
    font-size: 14px;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none
}

cite,dfn,em {
    font-style: italic
}

pre {
    background: #f5f5f5;
    color: #666;
    font-family: monospace;
    font-size: 14px;
    margin: 20px 0;
    overflow: auto;
    padding: 20px;
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word
}

.ts-text-align-center {
    text-align: center
}

.ts-underline-dotted {
    border-bottom: 1px dotted
}

.ts-underline-link a,.ts-underline {
    border-bottom: 1px solid
}

.ts-underline-link a:hover {
    border-bottom: none
}

.page-links {
    clear: both;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    line-height: 2.2;
    margin: 20px 0;
    text-transform: uppercase
}

.page-links a,.page-links>span {
    padding: 5px 10px;
    text-decoration: none
}

.page-links a {
    background: #fff;
    border: 1px solid #fff
}

.entry-content .format-status .entry-content .page-links a,.entry-content .format-gallery .entry-content .page-links a,.entry-content .format-chat .entry-content .page-links a,.entry-content .format-quote .entry-content .page-links a,.entry-content .page-links a {
    border: 1px solid #eaeaea;
    color: #333;
    font-style: normal;
    font-size: 13px
}

.format-gallery .entry-content .page-links a:hover,.format-audio .entry-content .page-links a:hover,.format-status .entry-content .page-links a:hover,.format-video .entry-content .page-links a:hover,.format-chat .entry-content .page-links a:hover,.format-quote .entry-content .page-links a:hover,.page-links a:hover {
    color: #fff
}

.format-status .entry-content .page-links>span,.format-quote .entry-content .page-links>span {
    background: none
}

.page-links .page-links-title {
    background: transparent;
    border: none;
    margin-right: 20px;
    padding: 0
}

[class^="flaticon-"]:before,[class*=" flaticon-"]:before,[class^="flaticon-"]:after,[class*=" flaticon-"]:after {
    margin-left: 0
}

.ts-font-size-16 {
    font-size: 16px;
    line-height: 26px
}

.ts-font-size-18 {
    font-size: 18px;
    line-height: 28px
}

.ts-font-size-20 {
    font-size: 20px;
    line-height: 30px
}

.ts-font-size-22 {
    font-size: 22px;
    line-height: 32px
}

.ts-font-size-24 {
    font-size: 24px;
    line-height: 34px
}

.ts-blog-classic-box-content  span, .ts-blog-classic-box-content  p, .ts-blog-classic-box-content  b{
font-family: 'Inter' !important;
font-style: normal !important;
font-weight: 400 !important;
/*font-size: 13px !important;*/
line-height: 139% !important;
/* or 17px */
letter-spacing: 0.01em !important;

color: #575757 !important;
}
</style>

<div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Blog / {!! $blog->name !!}</span></a></span>
                                    
                                </div>
                            </div>
                        </div>


<style type="text/css">
   .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 25;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<div id="content-wrapper" class="site-content-wrapper">
   <div id="content" class="site-content container">
      <div id="content-inner" class="site-content-inner row multi-columns-row">
         <div id="primary" class="content-area col-md-8 col-lg-8 col-xs-12">
                <h1 class="entry-title" style="color:#000;"> {!! $blog->name !!}</h1>
                    <div>By Admin | {{ $blog->created_at->format('F d, Y') }}
                        <div class="dropdown">
                        <i class="fa fa-upload ms-5 dropbtn" title="Share" style="cursor: pointer;"></i>
                        
                           <div class="dropdown-content">
                             <a target="_blank" href="http://twitter.com/share?text=text goes here&url=https://aticoscientific.com/blog/{{$blog->slug}}">Twitter</a>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://aticoscientific.com/blog/{{$blog->slug}}">Facebook</a>
                            
                            <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=https://aticoscientific.com/blog/{{$blog->slug}}">LinkedIn</a>
                          </div>  
                            </div> 
                    </div>
            <main id="main" class="site-main">
               <div class="themestek-common-box-shadow">

                  <article id="post-140" class="themestek-box-blog-classic post-140 post type-post status-publish format-standard has-post-thumbnail hentry category-scientific-laboratory tag-chemistry tag-physics" >
                     <div class="ts-blog-classic-featured-wrapper">

                        <div class="ts-blog-classic-datebox-overlay">
                           <div class="ts-blog-classic-dbox-date">{{ $blog->created_at->format('F d, Y') }}</div>
                        </div>
                        <div class="ts-featured-wrapper ts-post-featured-wrapper ts-post-format-"><img width="500" height="500" src="{{ asset('uploads/blog_images/'.$blog->image) }}" class="attachment-full size-full wp-post-image" alt=""></div>
                     </div>
                     <div class="ts-blog-classic-box-content ">
                        <!-- Blog classic meta Start -->
                        <div class="ts-featured-meta-wrapper ts-featured-overlay">
                           <div class="ts-blog-post-date">
                              <span class="ts-meta-line"><span class="screen-reader-text ts-hide">Date </span> <i class="ts-labtechco-icon-clock"></i> <a href="index.html">{{ $blog->created_at->format('F d, Y') }}</a></span>
                           </div>
                         
                           <div class="themestek-box-title">
                              <h4>{!! $blog->name !!}</h4>
                           </div>
                        </div>
                        <!-- Blog classic meta End -->
                        <div class="entry-content" style="color: black;">
                           {!! $blog->description !!}
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- .ts-blog-classic-box-content -->
                  </article>
                  <!-- #post-## -->





                  <div class="ts-blog-classic-box-content">
                     <div id="comments" class="comments-area">
                        <h2 class="comments-title">
                           {{ count($blog_comments) }} Replies to &ldquo;Methods of the recruitment&rdquo;    
                        </h2>
                        <ol class="comment-list">


                           @if(count($blog_comments)>0)
                           @foreach($blog_comments as $key => $blog_comment)
                           <li class="comment even thread-even depth-1" id="comment-3">
                              <div id="div-comment-3" class="comment-body">
                                 <div class="comment-author vcard">
                                    <img alt='' src="{{ asset('assets/frontend/images/user-img1.png') }}" class='avatar avatar-100 photo' />      
                                 </div>
                                 <div class="comment-meta commentsetadata">
                                    <cite class="ts-comment-owner fn">{!! $blog_comment->name !!}</cite> <span class="says">says:</span>
                                    <a href="index.html#comment-3">
                                    {{ $blog_comment->created_at->format('F d, Y') }}</a>      
                                 </div>
                                 <p>{!! $blog_comment->comment !!}</p>
                                 
                              </div>
                           </li>
                           @endforeach
                           @endif


                        </ol>
                        <!-- .comment-list -->
                      <div class="blog-comment-area col-md-12 p-0 mt-xl-5">
                     <div id="leave-comment" class="nd-post-comment">
                        <div id="respond" class="comment-respond">
                           <h3 class="comment-title">Leave a Reply </h3>

                           <form action="{{ route('blog_comment.store') }}" method="post" class="validate-form formcomment-box">
                              {!! csrf_field() !!}
                              <div class="form-group">
                                 <textarea id="message" class="form-control rounded-0" name="comment" rows="6" cols="30" placeholder="Comment" required>{{ old('comment') }}</textarea>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <input id="author" class="form-control rounded-0"  required name="name" value="{{ old('name') }}" type="text" placeholder="Name *" size="30"/>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <input id="email" class="form-control rounded-0"  required name="email" type="email" value="{{ old('email') }}" placeholder="Email *" size="30"/>
                                 </div>
                              </div>
                             
                              <input type="hidden" name="blog_id" value="{{ $blog['id'] }}">
                              <button type="submit" class="btn btn-primary">Post Comment</button>
                           </form>
                        </div>
                        <!-- #respond -->
                     </div>
                     <!-- #comments -->
                  </div>
                        <!-- #respond -->
                     </div>
                     <!-- .comments-area -->
                  </div>
                  <!-- .ts-blog-classic-box-content -->
               </div>
               <!-- .themestek-common-box-shadow-->
            </main>
            <!-- .site-main -->
         </div>
         <!-- .content-area -->
         <aside id="sidebar-right" class="widget-area col-md-4 col-lg-4 col-xs-12 sidebar">
             <div class="row">
          <div class="col-md-12">
            <h2 class="anek-bangla category_name">DROP US A MESSAGE</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
          </div>
        </div>
         <form action="{{ route('enquiry.store') }}" method="post" class="wpcf7-form" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="contact-feedback-block">
            <div class="form-row">
              <div class="form-group col-md-6 pr-lg-3"><span class="wpcf7-form-control-wrap your-name"><input type="text" required="true" name="name" value="{{ old('name') }}" class="wpcf7-form-control wpcf7-text form-control rounded-0" placeholder="First Name*" /></span></div>
              <div class="form-group col-md-6">
                <span class="wpcf7-form-control-wrap your-email"><input type="email" required="true" name="email" value="{{ old('email') }}" class="wpcf7-form-control wpcf7-text wpcf7-email form-control rounded-0" placeholder="Email*"/></span>
              </div>
              <div class="form-group col-md-6 pr-lg-3">
                <span class="wpcf7-form-control-wrap your-email"><input type="number" min="0" required="true" name="mobile_no" value="{{ old('mobile_no') }}" class="wpcf7-form-control wpcf7-text wpcf7-email form-control rounded-0" placeholder="Mobile Number" /></span>
              </div>
              <div class="form-group col-md-6">
                <span class="wpcf7-form-control-wrap your-email">
                  <select required="true" name="country" class="wpcf7-form-control wpcf7-text wpcf7-email form-control rounded-0" aria-invalid="false" >
                    <option value="">Select Country</option>
                    @foreach(getCountries() as $key => $country)
                    <option value="{!! $country->name !!}">{!! $country->name !!}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <?php
$min  = 1;
$max  = 300;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>
              <div class="form-group">
                <span class="wpcf7-form-control-wrap your-message"><textarea required="true" name="message" cols="80" rows="5" class="wpcf7-form-control wpcf7-textarea form-control rounded-0" placeholder="How can we help?" >{!! old('message') !!}</textarea></span>
              </div>
              <div class="form-group">
              <input type="file" name="file_name" id="file_name" accept=".xls,.xlsx,.pdf">
                                          </div>
               <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LdxTXQoAAAAALx5i79u3FVOWj-Rgh0XguRBmwM_"></div>
</div>
              <p><button data-res="<?php echo $sum; ?>" type="submit" style='background: #F99E00;color:#fff;' class="get_quote_btn">send message</button>
              </div>
            </form>
            <aside id="themestek-recent-posts-2" class="widget themestek_widget_recent_entries">
               <h3 class="widget-title">Recent Posts</h3>
               <ul class="ts-recent-post-list">
                  
                  @if(count($latest_blogs)>0)
                  @foreach($latest_blogs as $key => $latest_blog)
                  <li class="ts-recent-post-list-li"><a href="{{ route('blog_detail', $latest_blog->slug) }}"><img width="150" height="150" src="{{ asset('uploads/blog_images/'.$latest_blog->image) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" ></a><a href="{{ route('blog_detail', $latest_blog->slug) }}">{!! $latest_blog->name !!}</a><span class="post-date">{{ $latest_blog->created_at->format('F d, Y') }}</span></li>
                  @endforeach
                  @endif
               </ul>
            </aside>
           
          
         </aside>
         <!-- #sidebar-right -->
      </div>
      <!-- .site-content-inner -->
   </div>
   <!-- .site-content -->
</div>
<!-- .site-content-wrapper -->

<div id="successModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
              <i class="material-icons">&#xE876;</i>
            </div>
            <h4 class="modal-title">Success!</h4>
          </div>
          <div class="modal-body">
            <p class="text-center mb-0" id="modal_success_message"> Success </p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
<script>
    const submitButton = document.querySelector('[type="submit"]');
const quizInput = document.querySelector(".quiz-control");
quizInput.addEventListener("input", function(e) {
    const res = submitButton.getAttribute("data-res");
    if ( this.value == res ) {
        submitButton.removeAttribute("disabled");
    } else {
        submitButton.setAttribute("disabled", "");
    }
});
</script>
@endsection
@section('script')
<!-- Image Zoom Close -->
<script type="text/javascript">
   @if (Session::has('success'))
   $("#modal_success_message").html( "{!! Session::get('success') !!}" );
   $('#successModal').modal('show');
   //swal('Success!', "{{ Session::get('success') }}", 'success');
   @endif
</script>
@endsection