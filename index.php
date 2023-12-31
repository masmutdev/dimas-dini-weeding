<?php
// Konfigurasi database
$host = "localhost"; // Ganti dengan nama host database Anda
$database = "db_dimas_dina"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda

try {
    // Membuat koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set mode error untuk PDO ke Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Jika koneksi sukses, Anda bisa melakukan operasi database di sini
} catch (PDOException $e) {
    // Tangani kesalahan jika koneksi gagal
    echo "Koneksi database gagal: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
		        <style type="text/css">
            .cui-comment-text img {
                max-width: 100% !important;
            }
        </style>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v21.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Dimas & Dini - WEDDING PAGE</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="description" content="Undangan Pernikahan Dimas & Dini" />
	<link rel="canonical" href="../g2a_2.html" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Dimas & Dini" />
	<meta property="og:description" content="Undangan Pernikahan Dimas & Dini" />
	<meta property="og:url" content="https://masmutdev.github.io/dimas-dini-weeding" />
	<meta property="og:site_name" content="Dimas_dini" />
	<meta property="article:published_time" content="2023-06-04T10:51:47+00:00" />
	<meta property="article:modified_time" content="2023-09-11T17:08:59+00:00" />
	<meta property="og:image" content="favicon.ico" />
	<meta name="author" content="nawy" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:image" content="favicon.ico" />
	<meta name="twitter:label1" content="Written by masmutdev" />
	<meta name="twitter:data1" content="nawy" />
	<meta name="twitter:label2" content="Est. reading time" />
	<meta name="twitter:data2" content="10 minutes" />
	<!-- <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://eninvitation.com/g2a/","url":"https://eninvitation.com/g2a/","name":"G 2 A - EN_Invitation","isPartOf":{"@id":"https://eninvitation.com/#website"},"primaryImageOfPage":{"@id":"https://eninvitation.com/g2a/#primaryimage"},"image":{"@id":"https://eninvitation.com/g2a/#primaryimage"},"thumbnailUrl":"https://eninvitation.com/wp-content/uploads/2023/07/cover-2-1.jpg","datePublished":"2023-06-04T10:51:47+00:00","dateModified":"2023-09-11T17:08:59+00:00","author":{"@id":"https://eninvitation.com/#/schema/person/ec737733f23d406f065b39786c233edd"},"description":"G 2 A","breadcrumb":{"@id":"https://eninvitation.com/g2a/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://eninvitation.com/g2a/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://eninvitation.com/g2a/#primaryimage","url":"https://eninvitation.com/wp-content/uploads/2023/07/cover-2-1.jpg","contentUrl":"https://eninvitation.com/wp-content/uploads/2023/07/cover-2-1.jpg","width":"1081","height":"608"},{"@type":"BreadcrumbList","@id":"https://eninvitation.com/g2a/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://eninvitation.com/"},{"@type":"ListItem","position":2,"name":"G 2 A"}]},{"@type":"WebSite","@id":"https://eninvitation.com/#website","url":"https://eninvitation.com/","name":"EN_Invitation","description":"EN_Invitation Website","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://eninvitation.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Person","@id":"https://eninvitation.com/#/schema/person/ec737733f23d406f065b39786c233edd","name":"nawy","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://eninvitation.com/#/schema/person/image/","url":"https://secure.gravatar.com/avatar/55bd9a4a08f01123354f9d86331cc69f?s=96&d=mm&r=g","contentUrl":"https://secure.gravatar.com/avatar/55bd9a4a08f01123354f9d86331cc69f?s=96&d=mm&r=g","caption":"nawy"},"url":"https://eninvitation.com/author/nawy/"}]}</script> -->
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='https://www.googletagmanager.com/' />
<link rel="alternate" type="application/rss+xml" title="EN_Invitation &raquo; Feed" href="../feed/feed.html" />
<link rel="alternate" type="application/rss+xml" title="EN_Invitation &raquo; Comments Feed" href="../comments/feed/feed.html" />
<link rel="alternate" type="application/rss+xml" title="EN_Invitation &raquo; G 2 A Comments Feed" href="feed/feed.html" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/eninvitation.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='bdt-uikit-css' href='assets/plugins/weddingpress/assets/css/modules/bdt-uikit.css' type='text/css' media='all' />
<link rel='stylesheet' id='ep-helper-css' href='assets/plugins/weddingpress/assets/css/modules/ep-helper.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='assets/css/dist/block-library/style.min.css' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
	@font-face {
		font-family: 'GreatVibes';
		src: url('assets/webfonts/GreatVibes-Regular.woff2') format('woff2');
	  }
	  
	  @font-face {
		font-family: 'Parisienne';
		src: url('assets/webfonts/Parisienne-Regular.woff2') format('woff2');
	  }
	  
	  @font-face {
		font-family: 'Tangerine';
		src: url('assets/webfonts/Tangerine_Regular.woff2') format('woff2');
	  }

/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wdp-centered-css-css' href='assets/plugins/weddingpress/assets/css/wdp-centered-timeline.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wdp-horizontal-css-css' href='assets/plugins/weddingpress/assets/css/wdp-horizontal-styles.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wdp-fontello-css-css' href='assets/plugins/weddingpress/assets/css/wdp-fontello.css' type='text/css' media='all' />
<link rel='stylesheet' id='exad-main-style-css' href='assets/plugins/weddingpress/assets/css/exad-styles.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='cui_style-css' href='assets/plugins/weddingpress/addons/comment-kit2/css/cui_style.css' type='text/css' media='screen' />
<style id='cui_style-inline-css' type='text/css'>

		.cui-wrapper {
		  font-size: 14px
		}
	.cui-post-author {
	color: white !important;
	background: #777 !important;
}
	.cui-wrapper ul.cui-container-comments li.cui-item-comment .cui-comment-avatar img {
		max-width: 28px;
		max-height: 28px;
	}
	.cui-wrapper ul.cui-container-comments li.cui-item-comment .cui-comment-content {
		margin-left: 38px;
	}
	.cui-wrapper ul.cui-container-comments li.cui-item-comment ul .cui-comment-avatar img {
		max-width: 24px;
		max-height: 24px;
	}
	.cui-wrapper ul.cui-container-comments li.cui-item-comment ul ul .cui-comment-avatar img {
		max-width: 21px;
		max-height: 21px;
	}
    .cui_comment_count_card.cui_card-tidak_hadir {
    background-color: #d90a11;
    }
    .cui_comment_count_card.cui_card-hadir {
    background-color: #3D9A62;
    }
    .cui_comment_count_card.cui_card-masih_ragu {
    background-color: #d7a916;
    }

	.great{
		font-family: 'GreatVibes', sans-serif;
	}
	.parr{
		font-family: 'Parisienne', sans-serif;
	}
	.tangerine{
		font-family: 'Tangerine', sans-serif;
	}
	
</style>
<link rel='stylesheet' id='elementor-icons-css' href='assets/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='assets/plugins/elementor/assets/css/frontend.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='assets/plugins/elementor/assets/lib/swiper/css/swiper.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-11403-css' href='assets/uploads/elementor/css/post-11403.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='assets/plugins/elementor-pro/assets/css/frontend.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='weddingpress-wdp-css' href='assets/plugins/weddingpress/assets/css/wdp.css' type='text/css' media='all' />
<link rel='stylesheet' id='kirim-kit-css' href='assets/plugins/weddingpress/assets/css/guest-book.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-44645-css' href='assets/uploads/elementor/css/post-44645.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='../fonts.googleapis.com/css.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/brands.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/solid.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='assets/plugins/elementor/assets/lib/font-awesome/css/regular.min.css' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type='text/javascript' src='assets/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='assets/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>

<!-- Google Analytics snippet added by Site Kit -->
<script type='text/javascript' src='../www.googletagmanager.com/gtag/js' id='google_gtagjs-js' async></script>
<script id="google_gtagjs-js-after" type="text/javascript">
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["eninvitation.com"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "UA-177011933-1", {"anonymize_ip":true});
gtag("config", "G-R30WMHF2H3");
</script>

<!-- End Google Analytics snippet added by Site Kit -->
<script type='text/javascript' src='assets/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js' id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="../wp-json/wp-json.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/posts/44645.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.xml" />
<meta name="generator" content="WordPress 6.3.1" />
<link rel='shortlink' href='https://eninvitation.com/?p=44645' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed.json" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed.xml" />
<meta name="generator" content="Site Kit by Google 1.109.0" /><meta name="generator" content="Elementor 3.15.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<link rel="icon" href="assets/uploads/2022/04/cropped-logo-baru-en-invitation-32x32.png" sizes="32x32" />
<link rel="icon" href="assets/uploads/2022/04/cropped-logo-baru-en-invitation-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="assets/uploads/2022/04/cropped-logo-baru-en-invitation-180x180.png" />
<meta name="msapplication-TileImage" content="https://eninvitation.com/wp-content/uploads/2022/04/cropped-logo-baru-en-invitation-270x270.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /></head>
<body class="post-template post-template-elementor_canvas single single-post postid-44645 single-format-standard elementor-default elementor-template-canvas elementor-kit-11403 elementor-page elementor-page-44645">
			<div data-elementor-type="wp-post" data-elementor-id="44645" class="elementor elementor-44645" data-elementor-post-type="post">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-b3b74ec hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="b3b74ec" data-element_type="section" id="sect5" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;shape_divider_bottom&quot;:&quot;mountains&quot;}">
<!--					<div class="elementor-shape elementor-shape-bottom" data-negative="false">-->
<!--			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">-->
<!--	<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"/>-->
<!--	<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"/>-->
<!--	<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"/>-->
<!--</svg>		</div>-->
					<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7aa01311 wdp-sticky-section--no" data-id="7aa01311" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-690dace wdp-sticky-section--no elementor-widget elementor-widget-menu-anchor" data-id="690dace" data-element_type="widget" data-widget_type="menu-anchor.default">
				<div class="elementor-widget-container">
					<div id="home" class="elementor-menu-anchor"></div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-38783311 elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="38783311" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7afcc671 wdp-sticky-section--no" data-id="7afcc671" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6695d58 wdp-sticky-section--no elementor-widget elementor-widget-video" data-id="6695d58" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="e-hosted-video elementor-wrapper elementor-open-inline">
						<video class="elementor-video" id="myVideo" src="assets/videos/video-dimas-dina.mp4" loop="" muted playsinline=""></video>
					</div>
				</div>
				</div>
				<!--<div class="elementor-element elementor-element-3378ac8e elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="3378ac8e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">-->
				<!--<div class="elementor-widget-container">-->
				<!--											<img decoding="async" fetchpriority="high" width="450" height="367" src="assets/uploads/2022/07/Picture1.webp" class="attachment-large size-large wp-image-21024" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/Picture1.webp 450w, https://eninvitation.com/wp-content/uploads/2022/07/Picture1-300x245.webp 300w" sizes="(max-width: 450px) 100vw, 450px" />															</div>-->
				<!--</div>-->
				<div class="elementor-element elementor-element-71c47c70 e-transform elementor-absolute goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="71c47c70" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<!-- <div class="elementor-widget-container">
					<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-60092b1d elementor-absolute goyang-4 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="60092b1d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div> -->
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-2a893d2f elementor-section-height-min-height elementor-section-items-top hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="2a893d2f" data-element_type="section" id="sect1" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;shape_divider_top&quot;:&quot;mountains&quot;}">
					<div class="elementor-shape elementor-shape-top" data-negative="false">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"/>
	<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"/>
	<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"/>
</svg>		</div>
					<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-400d2c18 wdp-sticky-section--no" data-id="400d2c18" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-33f12feb elementor-section-height-min-height elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="33f12feb" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6616017c wdp-sticky-section--no" data-id="6616017c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-1190ba6b elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wdp-sticky-section--no" data-id="1190ba6b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2dc14404 wdp-sticky-section--no" data-id="2dc14404" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8a4629f wdp-sticky-section--no elementor-widget elementor-widget-spacer" data-id="8a4629f" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-d89a002 wdp-sticky-section--no elementor-widget elementor-widget-image" data-id="d89a002" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="654" height="555" src="assets/images/Ilustrasi2.webp" class="attachment-large size-large wp-image-44673" alt="" srcset="assets/images/Ilustrasi2.webp 654w, assets/images/Ilustrasi2.webp 300w" sizes="(max-width: 654px) 100vw, 654px" />															</div>
				</div>
				<div class="elementor-element elementor-element-308892db wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="308892db" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-family:'Parisienne',sans-serif !important;">The Wedding Of </h2>		</div>
				</div>
				<div class="elementor-element elementor-element-1010d21c wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="1010d21c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-size: 40px; font-family:'GreatVibes',sans-serif">Dimas & Dini</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-21061372 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="21061372" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">24 | 09 | 2023</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-9fc58f6 zoom-1 elementor-align-center wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-datekit" data-id="9fc58f6" data-element_type="widget" data-widget_type="weddingpress-datekit.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://www.google.com/calendar/render?action=TEMPLATE&text=The+Wedding+of+Dimas+%26+Dini&dates=20230924T120000Z/20230924T160000Z" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" rel="nofollow" role="button">
				<span class="elementor-button-content-wrapper wdp-flexbox">
							<span class="elementor-button-text">Save the Date</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<!--<div class="elementor-element elementor-element-d2f13c4 goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="d2f13c4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">-->
				<!--<div class="elementor-widget-container">-->
				<!--											<img decoding="async" loading="lazy" width="677" height="369" src="assets/uploads/2022/07/WC16-04.png" class="attachment-large size-large wp-image-21128" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-04.png 677w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-04-300x164.png 300w" sizes="(max-width: 677px) 100vw, 677px" />															</div>-->
				<!--</div>-->
			<!--	<div class="elementor-element elementor-element-5c457f95 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="5c457f95" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">-->
			<!--	<div class="elementor-widget-container">-->
			<!--<h2 class="elementor-heading-title elementor-size-default">Kepada Yth.</h2>		</div>-->
			<!--	</div>-->
			<!--	<div class="elementor-element elementor-element-33b805b9 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="33b805b9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">-->
			<!--	<div class="elementor-widget-container">-->
			<!--<h2 class="elementor-heading-title elementor-size-default">Bapak/Ibu/Saudara/i</h2>		</div>-->
			<!--	</div>-->
			<!--	<div class="elementor-element elementor-element-5dabc9c1 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="5dabc9c1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">-->
			<!--	<div class="elementor-widget-container">-->
			<!--<h2 class="elementor-heading-title elementor-size-default">Nama Tamu</h2>		</div>-->
			<!--	</div>-->
			<!--	<div class="elementor-element elementor-element-72c2b980 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="72c2b980" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">-->
			<!--	<div class="elementor-widget-container">-->
			<!--<h2 class="elementor-heading-title elementor-size-default">Di Tempat</h2>		</div>-->
			<!--	</div>-->
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-24c869aa elementor-absolute goyang-3 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="24c869aa" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-66ef0062 elementor-absolute goyang-2 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="66ef0062" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-48,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:1800,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-22bbf78f elementor-absolute goyang-1 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="22bbf78f" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-5581c92b e-transform elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="5581c92b" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-95,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-18608ca4 elementor-absolute goyang-2 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="18608ca4" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:163,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4f024a85 elementor-section-height-min-height elementor-section-items-top hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="4f024a85" data-element_type="section" id="sect3" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a2f4b8d wdp-sticky-section--no" data-id="3a2f4b8d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7a636a2 wdp-sticky-section--no elementor-widget elementor-widget-menu-anchor" data-id="7a636a2" data-element_type="widget" data-widget_type="menu-anchor.default">
				<div class="elementor-widget-container">
					<div id="event" class="elementor-menu-anchor"></div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-5e3a9d31 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="5e3a9d31" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d4f0ccd wdp-sticky-section--no" data-id="3d4f0ccd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-2b51a8ad elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wdp-sticky-section--no" data-id="2b51a8ad" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6d5b0653 wdp-sticky-section--no" data-id="6d5b0653" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-128c60a6 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="128c60a6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Lokasi</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2b94ca4 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="2b94ca4" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6c25d8ba wdp-sticky-section--no" data-id="6c25d8ba" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-18e9719d naik-turun elementor-view-default wdp-sticky-section--no elementor-widget elementor-widget-icon" data-id="18e9719d" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 371.137 371.137" style="enable-background:new 0 0 371.137 371.137;" xml:space="preserve"> <g> <g> <path d="M278.71,257.014c-1.209-2.154-3.4-3.574-5.861-3.797c-7.23-0.658-14.15-0.992-20.563-0.992    c-26.504,0-46.094,5.623-58.395,16.725v-69.205c1.643,0.094,3.301,0.148,4.973,0.148c21.566,0,40.996-7.604,53.303-20.859    c11.082-11.936,16.197-28.24,14.793-47.152c-1.668-22.441-7.867-33.361-13.336-42.996c-2.457-4.326-4.777-8.414-6.533-13.359    c-8.797-24.748,9.123-48.604,9.293-48.826c2.01-2.596,2.096-6.197,0.213-8.889c-1.883-2.689-5.297-3.842-8.424-2.846    c-1.029,0.328-8.627,2.801-19.43,7.52L205.548,1.891c-1.879-1.668-4.471-2.283-6.896-1.643    c-34.541,9.127-50.49,19.084-56.113,23.295c-1.664-0.685-16.861-6.146-20.303-7.141c-6.756-1.951-8.365-2.416-11.193-0.967    c-2.092,1.072-3.559,3.062-3.967,5.375c-0.406,2.314,0.295,4.686,1.895,6.406c0.172,0.186,17.047,18.717,8.842,42.725    c-0.912,2.67-2.262,5.783-3.824,9.391c-5.393,12.449-12.779,29.498-12.832,52.51c-0.043,18.402,5.838,33.604,17.475,45.18    c18.912,18.813,46.525,21.932,60.262,22.225v46.678c-12.164-12.135-32.324-18.279-60.039-18.279    c-6.414,0-13.332,0.334-20.564,0.992c-2.459,0.225-4.65,1.644-5.859,3.799c-1.209,2.152-1.281,4.764-0.191,6.98    c19.918,40.506,42.416,61.045,66.871,61.049c0.004,0,0.006,0,0.008,0c8.037,0,14.775-2.352,19.775-4.953v68.125    c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-42.729c4.797,2.256,10.947,4.137,18.135,4.137    c24.455,0,46.955-20.541,66.873-61.051C279.989,261.778,279.919,259.168,278.71,257.014z M176.307,279.493    c-2.834,2.133-9.061,5.973-17.191,5.973c-0.002,0-0.004,0-0.004,0c-16.17-0.002-32.715-14.695-48.191-42.648    c2.727-0.113,5.375-0.172,7.932-0.172c25.262,0,43.123,5.656,51.648,16.357C176.714,266.799,176.714,275.532,176.307,279.493z     M198.618,15.797l15.391,13.664c-9.154,4.684-19.225,10.527-29.018,17.564c-0.121-0.098-0.238-0.199-0.367-0.293    c-8.836-6.357-17.699-11.539-25.816-15.693 M129.208,166.387c-8.693-8.649-13.086-20.26-13.053-34.51    c0.045-19.92,6.449-34.703,11.596-46.582c1.619-3.738,3.148-7.268,4.254-10.502c5.365-15.697,2.928-29.51-1.121-39.693    c11.277,4.219,26.525,11.098,41.82,21.592c-14.566,12.596-27.182,28.147-33.248,46.799c-10.314,31.723-4.131,53.391,2.873,65.98    c1.926,3.465,4.021,6.436,6.094,8.979C141.575,175.793,134.804,171.954,129.208,166.387z M169.18,177.329    c-0.156-0.107-0.27-0.18-0.434-0.275c-1.279-0.768-31.145-19.352-15.025-68.924c11.875-36.523,55.395-60.484,80.609-71.627    c-4.385,11.609-7.295,27.391-1.375,44.047c2.197,6.184,4.955,11.043,7.623,15.742c5.145,9.063,10.004,17.621,11.422,36.701    c1.104,14.854-2.539,26.91-10.826,35.836c-9.479,10.209-24.9,16.064-42.311,16.064    C187.184,184.893,176.089,182.065,169.18,177.329z M212.026,310.045c-8.143,0-14.379-3.852-17.191-5.969    c-0.412-3.992-0.4-12.709,5.803-20.494c8.525-10.701,26.385-16.357,51.648-16.357c2.557,0,5.205,0.057,7.932,0.172    C244.739,295.352,228.194,310.045,212.026,310.045z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>			</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-115dc476 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="115dc476" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Lihat Maps</h2>		</div>
				</div>

				<div class="elementor-element elementor-element-3dafb4f8 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="3dafb4f8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3983.0920906463152!2d114.5967373!3d-3.3274225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423dd598ea6b5%3A0x3f0fb065d8844ab5!2sHotel%20Roditha%20Banjarmasin!5e0!3m2!1sid!2sid!4v1694765186365!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h2>		
				</div>
				</div>
				<div class="elementor-element elementor-element-7c1ba16c wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="7c1ba16c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Hotel Rodhita Banjarmasin (Lt. 1)</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-269f7bb1 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="269f7bb1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Jl. P. Antasari No.41, Kelayan Luar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-55fe5340 elementor-align-center zoom-1 wdp-sticky-section--no elementor-widget elementor-widget-button" data-id="55fe5340" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://www.google.com/maps/place/Hotel+Roditha+Banjarmasin/@-3.3274225,114.5967373,17z/data=!4m21!1m11!3m10!1s0x2de423dd598ea6b5:0x3f0fb065d8844ab5!2sHotel+Roditha+Banjarmasin!5m2!4m1!1i2!8m2!3d-3.3274225!4d114.5967373!10e1!16s%2Fg%2F11cfbjv8s!3m8!1s0x2de423dd598ea6b5:0x3f0fb065d8844ab5!5m2!4m1!1i2!8m2!3d-3.3274225!4d114.5967373!16s%2Fg%2F11cfbjv8s?hl=id-ID&entry=ttu" class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fas fa-map-marker-alt"></i>			</span>
						<span class="elementor-button-text">Lihat Lokasi</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3ba1bc5 wdp-sticky-section--no elementor-widget elementor-widget-spacer" data-id="3ba1bc5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-4cdb2fbb elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="4cdb2fbb" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" fetchpriority="high" width="450" height="367" src="assets/uploads/2022/07/Picture1.webp" class="attachment-large size-large wp-image-21024" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/Picture1.webp 450w, https://eninvitation.com/wp-content/uploads/2022/07/Picture1-300x245.webp 300w" sizes="(max-width: 450px) 100vw, 450px" />															</div>
				</div>
				<div class="elementor-element elementor-element-544e0e7a e-transform elementor-absolute goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="544e0e7a" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-3190013f elementor-absolute goyang-4 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="3190013f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8e6ce0f elementor-section-height-min-height elementor-section-items-top hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="8e6ce0f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65eadf4 wdp-sticky-section--no" data-id="65eadf4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4ac4b9a wdp-sticky-section--no elementor-widget elementor-widget-menu-anchor" data-id="4ac4b9a" data-element_type="widget" data-widget_type="menu-anchor.default">
				<div class="elementor-widget-container">
					<div id="gift" class="elementor-menu-anchor"></div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-0713491 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="0713491" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8a3cc08 wdp-sticky-section--no" data-id="8a3cc08" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-0c3a5a7 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wdp-sticky-section--no" data-id="0c3a5a7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bfb76a8 wdp-sticky-section--no" data-id="bfb76a8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f557b1d wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="f557b1d" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"  style="font-family:'Parisienne', sans-serif !important">Love Gift</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-74ad6a2 wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="74ad6a2" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<div class="elementor-heading-title elementor-size-default" style="font-size: 27px;font-family:'Tangerine', sans-serif !important">Tanpa mengurangi rasa hormat, 
<br>bagi anda yang ingin memberikan tanda kasih untuk kami, dapat melalui</div>		</div>
				</div>
				<div class="elementor-element elementor-element-58de733 wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="58de733" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default"><b>BANK MANDIRI</b>
<br>No. Rekening 310015827358
<br> a.n <b>Dimas Naufal Sholahuddin</b></p>		</div>
				</div>
				<div class="elementor-element elementor-element-12d08ec elementor-align-center elementor-mobile-align-center wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-copy-text" data-id="12d08ec" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;}" data-widget_type="weddingpress-copy-text.default">
				<div class="elementor-widget-container">
					
		<div class="elementor-image img"></div>

		<meta name="format-detection" content="telephone=no">
		<div class="head-title"></div>
		<div class="elementor-button-wrapper">
						<div class="copy-content spancontent" style="display: none;">310015827358</div>
				
			<a style="cursor:pointer;" onclick="copyText(this)" data-message="rekening tersimpan" class="elementor-button" role="button">
				
		<div class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="far fa-copy"></i>			</span>
						<span class="elementor-button-text">copy rekening</span>
		</div>
					</a>
			
		</div>

		<style type="text/css">
			.spancontent {
				padding-bottom: 20px;
			}
			.copy-content {
				color: #6EC1E4;
				text-align: center;
			}
			.head-title {
				color: #6EC1E4;
				text-align: center;
			}
		</style>

		<script>
		function copyText(el) {
		    var content = jQuery(el).siblings('div.copy-content').html()
		    var temp = jQuery("<textarea>");
		    jQuery("body").append(temp);
		    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
		    document.execCommand("copy");
		    temp.remove();
		    var text = jQuery(el).html()
		    jQuery(el).html(jQuery(el).data('message'))
		    var counter = 0;
		    var interval = setInterval(function() {
		        counter++;
		        if (counter == 1) {
		            jQuery(el).html(text)
		        }
		    }, 500);
		}

		</script>

				</div>
				</div>
				<div class="elementor-element elementor-element-58de733 wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="58de733" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
					<div class="elementor-widget-container">
				<p class="elementor-heading-title elementor-size-default"><b>BANK BSI</b>
	<br>No. Rekening 9056064130
	<br> a.n <b>Dini Amalia</b></p>		</div>
					</div>
					<div class="elementor-element elementor-element-12d08ec elementor-align-center elementor-mobile-align-center wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-copy-text" data-id="12d08ec" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;}" data-widget_type="weddingpress-copy-text.default">
					<div class="elementor-widget-container">
						
			<div class="elementor-image img"></div>
	
			<meta name="format-detection" content="telephone=no">
			<div class="head-title"></div>
			<div class="elementor-button-wrapper">
							<div class="copy-content spancontent" style="display: none;">9056064130</div>
					
				<a style="cursor:pointer;" onclick="copyText2(this)" data-message="rekening tersimpan" class="elementor-button" role="button">
					
			<div class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
					<i aria-hidden="true" class="far fa-copy"></i>			</span>
							<span class="elementor-button-text">copy rekening</span>
			</div>
						</a>
				
			</div>
	
			<style type="text/css">
				.spancontent {
					padding-bottom: 20px;
				}
				.copy-content {
					color: #6EC1E4;
					text-align: center;
				}
				.head-title {
					color: #6EC1E4;
					text-align: center;
				}
			</style>
	
			<script>
			function copyText2(el) {
				var content = jQuery(el).siblings('div.copy-content').html()
				var temp = jQuery("<textarea>");
				jQuery("body").append(temp);
				temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
				document.execCommand("copy");
				temp.remove();
				var text = jQuery(el).html()
				jQuery(el).html(jQuery(el).data('message'))
				var counter = 0;
				var interval = setInterval(function() {
					counter++;
					if (counter == 1) {
						jQuery(el).html(text)
					}
				}, 500);
			}
	
			</script>
	
					</div>
					</div>
				
				<div class="elementor-element elementor-element-2ecc273 wdp-sticky-section--no elementor-widget elementor-widget-spacer" data-id="2ecc273" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b5da44b wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="b5da44b" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default"  style="font-size:27px;font-family:'Tangerine', sans-serif !important">“And of His signs is that He created for you from yourselves mates that you may find tranquillity in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.” </p>		</div>
				</div>
				<div class="elementor-element elementor-element-95bc4e9 wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="95bc4e9" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default" style="font-size:37px;font-family:'Tangerine', sans-serif !important">( QS. Ar- Rum 21 )</p>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-8e6360b elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="8e6360b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" fetchpriority="high" width="450" height="367" src="assets/uploads/2022/07/Picture1.webp" class="attachment-large size-large wp-image-21024" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/Picture1.webp 450w, https://eninvitation.com/wp-content/uploads/2022/07/Picture1-300x245.webp 300w" sizes="(max-width: 450px) 100vw, 450px" />															</div>
				</div>
				<div class="elementor-element elementor-element-e9a0d68 e-transform elementor-absolute goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="e9a0d68" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-36aa9a2 elementor-absolute goyang-4 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="36aa9a2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-33e3564d elementor-section-height-min-height elementor-section-items-top hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="33e3564d" data-element_type="section" id="sect6" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-212678a1 wdp-sticky-section--no" data-id="212678a1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-393ce3d wdp-sticky-section--no elementor-widget elementor-widget-menu-anchor" data-id="393ce3d" data-element_type="widget" data-widget_type="menu-anchor.default">
				<div class="elementor-widget-container">
					<div id="wish" class="elementor-menu-anchor"></div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1588fa8d elementor-section-height-min-height elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="1588fa8d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-252e56ee wdp-sticky-section--no" data-id="252e56ee" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-49f1015a elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wdp-sticky-section--no" data-id="49f1015a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-23cade95 wdp-sticky-section--no" data-id="23cade95" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4a485c38 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="4a485c38" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-family: 'Parisienne', sans-serif !important;">Ucapan & Doa</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-688282f5 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="688282f5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-size:27px; font-family: 'Tangerine', sans-serif !important;">Berikan ucapan terbaik untuk kedua mempelai</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-f86ab23 wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-kit2" data-id="f86ab23" data-element_type="widget" data-settings="{&quot;attendence&quot;:&quot;yes&quot;}" data-widget_type="weddingpress-kit2.default">
				<div class="elementor-widget-container">
			<div class='cui-wrapper cui-golden cui-border' style='overflow: hidden;'>
				<div class='cui-wrap-link'>
					<div class='header-cui'>
						<a id='cui-link-44645' class='cui-link cui-icon-link cui-icon-link-true auto-load-true' title='1 Comment'>
							<span>1</span> Comment
						</a>
					</div>
				</div><!--.cui-wrap-link-->
				<div class='cui-wrap-comments' style='display:block;'>
					<div class='cui-clearfix'>
						<div class="cui-comment-attendence">
							<div class="cui_comment_count_card_wrap">
								<div class="cui_comment_count_card_row">
									<div class="cui_comment_count_card cui_card-hadir">
										<span id="jumlahHadir" >0</span>
										<span>Hadir</span>
									</div>
									<div class="cui_comment_count_card cui_card-tidak_hadir">
										<span id="jumlahTidakHadir" >0</span>
										<span>Tidak hadir</span>
									</div>
									<div class="cui_comment_count_card cui_card-masih_ragu">
										<span id="jumlahMasihRagu" >0</span>
										<span>Masih Ragu</span>
									</div>
								</div>
							</div>
						</div>
						<div class="cui-clearfix cui-wrap-form ">
							<div class='cui-container-form cui-no-login'>
								<div class='respond cui-clearfix'>
									<div id="pesanMasuk"></div>
								<form id="kirimUcapan">
									<p class="comment-form-author cui-field-1">
										<input id="nama" name="nama" type="text" required class="cui-input" placeholder="Nama" />
										<span class="cui-required">*</span>
										<span class="cui-error-info cui-error-info-name">Mohon maaf! Hanya untuk tamu undangan</span>
									</p>
									<div class="cui-wrap-textarea">
										<textarea class="waci_comment cui-textarea autosize-textarea" id="ucapan" name="ucapan" required placeholder="Ucapan" rows="2"></textarea>
										<span class="cui-required">*</span>
										<span class="cui-error-info cui-error-info-text">Minimal 2 Karakter.</span>
									</div>
									<div class="nm-wrap-comments">
										<div class="row">
										</div>
									</div>
									<div class="cui-clearfix cui-wrap-select cui-field-wrap cui-select-attending">
										<select class="waci_comment cui-select" name="konfirmasi" id="konfirmasi" required>
											<option value="" disabled selected>Konfirmasi Kehadiran</option>
											<option value="Hadir">Hadir</option>
											<option value="Tidak hadir">Tidak hadir</option>
											<option value="Masih Ragu">Masih Ragu</option>
										</select>
										<span class="cui-required"></span>
										<span class="cui-error-info cui-error-info-confirm">Harap pilih salah satu</span>
									</div>
									<button class="btn btn-primary" id="KirimData">Kirim</button>
								</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	// Fungsi untuk mengubah waktu menjadi format yang lebih deskriptif
function formatTimeAgo(timestamp) {
    const now = new Date();
    const commentTime = new Date(timestamp);
    const timeDifference = now - commentTime;
    
    if (timeDifference < 1000) {
        return 'baru saja';
    } else if (timeDifference < 60000) {
        const seconds = Math.floor(timeDifference / 1000);
        return `${seconds} detik yang lalu`;
    } else if (timeDifference < 3600000) {
        const minutes = Math.floor(timeDifference / 60000);
        return `${minutes} menit yang lalu`;
    } else if (timeDifference < 86400000) {
        const hours = Math.floor(timeDifference / 3600000);
        return `${hours} jam yang lalu`;
    } else if (timeDifference < 604800000) {
        const days = Math.floor(timeDifference / 86400000);
        return `${days} hari yang lalu`;
    } else if (timeDifference < 2419200000) {
        const weeks = Math.floor(timeDifference / 604800000);
        return `${weeks} minggu yang lalu`;
    } else if (timeDifference < 29030400000) {
        const months = Math.floor(timeDifference / 2419200000);
        return `${months} bulan yang lalu`;
    } else {
        const years = Math.floor(timeDifference / 29030400000);
        return `${years} tahun yang lalu`;
    }
}

    $(document).ready(function () {
		// Fungsi untuk memperbarui jumlah ucapan
        function updateJumlahUcapan() {
            // Mengirim permintaan AJAX ke server
            $.ajax({
                type: "GET",
                url: "ambil_jumlah_ucapan.php", // Ganti dengan URL endpoint yang sesuai
                dataType: "json", // Mengharapkan respons dalam format JSON
                success: function (data) {
					// Memperbarui jumlah ucapan pada masing-masing kategori
					$("#jumlahHadir").text(data.hadir || 0);
					$("#jumlahTidakHadir").text(data.tidak_hadir || 0);
					$("#jumlahMasihRagu").text(data.masih_ragu || 0);
                },
				error: function (xhr, status, error) {
					// Menampilkan pesan kesalahan yang lebih informatif
					console.log("Status: " + status);
					console.log("Error: " + error);
				}
            });
        }

        // Memanggil fungsi updateJumlahUcapan saat halaman dimuat
        updateJumlahUcapan();

		    // Fungsi untuk memuat dan menampilkan komentar
		function loadComments() {
        // Mengirim permintaan AJAX ke server
        $.ajax({
            type: "GET",
            url: "ambil_komentar.php", // Ganti dengan URL endpoint server Anda
            dataType: "json",
            success: function (data) {
                // Mengosongkan daftar komentar
                $("#TampilKomentar").empty();

                // Loop melalui data komentar
                for (var i = 0; i < data.length; i++) {
                    var comment = data[i];
                    var konfirmasi = comment.konfirmasi;
                    var svgIcon = "";

                    // Memilih ikon sesuai dengan konfirmasi
                    if (konfirmasi === "Masih Ragu") {
                        svgIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" ...></svg>';
                    } else if (konfirmasi === "Hadir") {
                        svgIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" ...></svg>';
                    } else if (konfirmasi === "Tidak Hadir") {
                        svgIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" ...></svg>';
                    }

                    // Membangun tampilan komentar
                    var commentHtml = '<li class="comment odd alt thread-odd thread-alt depth-1 cui-item-comment animated fadeIn">';
                    commentHtml += '<div class="cui-comment">';
                    commentHtml += '<div class="cui-comment-avatar">';
                    commentHtml += '<img src="">';
                    commentHtml += '</div>';
                    commentHtml += '<div class="cui-comment-content">';
                    commentHtml += '<div class="cui-comment-info">';
                    commentHtml += '<a class="cui-commenter-name" title="' + comment.nama + '">' + comment.nama + '</a>';
                    commentHtml += '<span class="cui-post-author-mark cui-post-author-' + konfirmasi.toLowerCase() + '">' + svgIcon + '</span>';
                    commentHtml += '</div>';
                    commentHtml += '<div class="cui-comment-text">';
                    commentHtml += '<p>' + comment.ucapan + '</p>';
                    commentHtml += '</div>';
                    commentHtml += '<div class="cui-comment-actions">';
					commentHtml += '<span class="cui-comment-time"><i class="far fa-clock"></i> ' + formatTimeAgo(comment.waktu) + '</span>';
                    commentHtml += '</div>';
                    commentHtml += '</div>';
                    commentHtml += '</div>';
                    commentHtml += '</li>';

                    // Menambahkan komentar ke daftar komentar
                    $("#TampilKomentar").append(commentHtml);
                }
            },
            error: function (error) {
                console.log("Error: " + error);
            }
        });
    }
	loadComments();

        $("#KirimData").click(function (e) {
            e.preventDefault();
            // Mengambil nilai-nilai dari formulir
            var nama = $("#nama").val();
            var ucapan = $("#ucapan").val();
            var konfirmasi = $("#konfirmasi").val();

            // Membuat objek data yang akan dikirim
            var data = {
                nama: nama,
                ucapan: ucapan,
                konfirmasi: konfirmasi
			};

            // Mengirim data menggunakan AJAX
            $.ajax({
                type: "POST",
                url: "simpan_tamu_undangan.php",
                data: data,
                success: function (response) {
                    // Menampilkan pesan sukses di konsol
                    $("#pesanMasuk").html("<p>Terima kasih atas komentarnya ya...</p>");
					updateJumlahUcapan();
					loadComments();
                }
            });
        });
    });
</script>
								</div>
							</div>
						</div>
						<div id="cui-comment-status-44645" class="cui-comment-status" style="display: none;"></div>
						<div id="cui-box" class="cui-box">
							<ul id="TampilKomentar" class="cui-container-comments cui-order-DESC  cui-has-13-comments cui-multiple-comments" data-order="DESC" style="display: block;"></ul>
						</div>
						<div class="cui-holder-44645 cui-holder"></div>
						
<style>
                .cui-wrapper .cui-holder {
                    display: block !important;
                }
            </style>

            
        
        		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-a72362 elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="a72362" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" fetchpriority="high" width="450" height="367" src="assets/uploads/2022/07/Picture1.webp" class="attachment-large size-large wp-image-21024" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/Picture1.webp 450w, https://eninvitation.com/wp-content/uploads/2022/07/Picture1-300x245.webp 300w" sizes="(max-width: 450px) 100vw, 450px" />															</div>
				</div>
				<div class="elementor-element elementor-element-11c1d25e e-transform elementor-absolute goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="11c1d25e" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-6d1d2b1e elementor-absolute goyang-4 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="6d1d2b1e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6c12029b elementor-section-height-min-height elementor-section-items-top hidden elementor-section-stretched elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="6c12029b" data-element_type="section" id="sect7" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f063163 wdp-sticky-section--no" data-id="3f063163" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d4e1d6b wdp-sticky-section--no elementor-widget elementor-widget-menu-anchor" data-id="d4e1d6b" data-element_type="widget" data-widget_type="menu-anchor.default">
				<div class="elementor-widget-container">
					<div id="closing" class="elementor-menu-anchor"></div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1846bd9b elementor-section-height-min-height elementor-section-full_width elementor-section-height-default wdp-sticky-section--no" data-id="1846bd9b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<article class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5d00a2e7 wdp-sticky-section--no" data-id="5d00a2e7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-48aa6ac9 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wdp-sticky-section--no" data-id="48aa6ac9" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d7bbebd wdp-sticky-section--no" data-id="3d7bbebd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-462d9dc wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="462d9dc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"style="font-size:27px;font-family: 'Tangerine', sans-serif !important;">Atas kehadiran dan do’a restu dari Bapak/Ibu/Saudara/i sekalian, kami mengucapkan Terima Kasih.</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-aefdff8 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="aefdff8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-size:25px;font-family: 'Parisienne', sans-serif !important;">Wassalamu’alaikum Wr. Wb.
</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-13d65be2 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="13d65be2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-element elementor-element-1dcbdc14 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="1dcbdc14" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container" style="margin-top: 50px;margin-bottom:20px;">
							<cite style="font-size:27px;font-family: 'Parisienne', sans-serif !important;" class="elementor-heading-title elementor-size-default" >Wedding Filter</cite>
						</div>
					</div>
					<img style="-webkit-mask-image:none!important;margin-top: 30px;margin-bottom:20px;" decoding="async" loading="lazy" width="555" height="520" src="assets/images/WeddFilter.png" class="attachment-full size-full wp-image-20748" alt="" srcset="assets/images/WeddFilter.png 555w, assets/images/WeddFilter.png 300w" sizes="(max-width: 555px) 100vw, 555px" />															</div>
				</div>

				<div class="elementor-element elementor-element-1dcbdc14 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="1dcbdc14" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
					<div class="elementor-widget-container" style="margin-top: 0px;margin-bottom:50px;">
						<cite style="color: blue;font-size:20px;font-family: 'Parisienne', sans-serif !important;" class="elementor-heading-title elementor-size-default"  href="http://bit.ly/Dimas-Dini">bit.ly/Dimas-Dini</cite>
					</div>
				</div>

				<div class="elementor-element elementor-element-1dcbdc14 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="1dcbdc14" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-size:25px;font-family: 'Parisienne', sans-serif !important;">Kami yang berbahagia</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-4802351f wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-heading" data-id="4802351f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="font-size:40px;font-family: 'GreatVibes', sans-serif !important;">Dimas & Dini</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-1e8ad9f2 elementor-absolute goyang-1 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="1e8ad9f2" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" fetchpriority="high" width="450" height="367" src="assets/uploads/2022/07/Picture1.webp" class="attachment-large size-large wp-image-21024" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/Picture1.webp 450w, https://eninvitation.com/wp-content/uploads/2022/07/Picture1-300x245.webp 300w" sizes="(max-width: 450px) 100vw, 450px" />															</div>
				</div>
				<div class="elementor-element elementor-element-7df23d46 e-transform elementor-absolute goyang-4 wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="7df23d46" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
				<div class="elementor-element elementor-element-3acac428 elementor-absolute goyang-4 e-transform wdp-sticky-section--no elementor-invisible elementor-widget elementor-widget-image" data-id="3acac428" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="500" height="500" src="assets/uploads/2022/07/WC16-01.png" class="attachment-large size-large wp-image-21127" alt="" srcset="https://eninvitation.com/wp-content/uploads/2022/07/WC16-01.png 500w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-300x300.png 300w, https://eninvitation.com/wp-content/uploads/2022/07/WC16-01-150x150.png 150w" sizes="(max-width: 500px) 100vw, 500px" />															</div>
				</div>
					</div>
		</article>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1adacef elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="1adacef" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3beaef9 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile wdp-sticky-section--no" data-id="3beaef9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-9ab2730 wdp-sticky-section--no elementor-widget elementor-widget-heading" data-id="9ab2730" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;bounceIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default"><a href="../eninvitation_default.html">Design with ❤️ <br>by EN_Invitation </a></p>		</div>
				</div>
				<div class="elementor-element elementor-element-2ca545c elementor-shape-circle e-grid-align-mobile-center elementor-grid-0 e-grid-align-center wdp-sticky-section--no elementor-widget elementor-widget-social-icons" data-id="2ca545c" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;bounceIn&quot;}" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
					<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-grow elementor-repeater-item-6154405" href="../www.instagram.com/en_invitation/en_invitation.html" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<i class="fab fa-instagram"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-grow elementor-repeater-item-542b481" href="../www.instagram.com/en_invitationwebsite/en_invitationwebsite.html" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<i class="fab fa-instagram"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-tiktok elementor-animation-grow elementor-repeater-item-8191b41" href="../www.tiktok.com/@en_invitation.htm" target="_blank">
						<span class="elementor-screen-only">Tiktok</span>
						<i class="fab fa-tiktok"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-animation-grow elementor-repeater-item-aad9fe4" href="https://wa.me/+6285782137404?text=Halo%20kak%2C%20saya%20mau%20tanya%20undangan%20websitenya" target="_blank">
						<span class="elementor-screen-only">Whatsapp</span>
						<i class="fab fa-whatsapp"></i>					</a>
				</span>
					</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-184bf1b wdp-sticky-section--no elementor-widget elementor-widget-spacer" data-id="184bf1b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6891c194 wdp-sticky-section--yes elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-positon--bottom" data-id="6891c194" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1cd7198f wdp-sticky-section--no" data-id="1cd7198f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-4220d4c elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="4220d4c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c3895ba wdp-sticky-section--no" data-id="c3895ba" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0a4afb2 wdp-sticky-section--no" data-id="0a4afb2" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1da0dc91 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default wdp-sticky-section--no" data-id="1da0dc91" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c4a6a69 wdp-sticky-section--no" data-id="5c4a6a69" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-10b60adb elementor-view-stacked elementor-shape-circle wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-audio" data-id="10b60adb" data-element_type="widget" data-settings="{&quot;sticky&quot;:&quot;bottom&quot;,&quot;sticky_offset&quot;:80,&quot;sticky_offset_mobile&quot;:100,&quot;loop&quot;:&quot;yes&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}" data-widget_type="weddingpress-audio.default">
				<div class="elementor-widget-container">
						<script>
				var settingAutoplay = 'yes';
				window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
			</script>

			<div id="audio-container" class="audio-box">

				

		<audio  controlsList="nodownload" id="song" loop>
			<source src="assets/audio/new_audio.mp3"
			type="audio/mp3">
		</audio>  
			

					
			<div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
				<div class="elementor-icon">
				<i aria-hidden="true" class="fas fa-volume-mute"></i>				</div>
			</div> 

			<div class="elementor-icon-wrapper" id="mute-sound" style="display: none;">
				<div class="elementor-icon">
				<i aria-hidden="true" class="fas fa-volume-up"></i>				</div>
			</div>
			
		</div>
		
				</div>
				</div>
				<div class="elementor-element elementor-element-56359fcb elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon" data-id="56359fcb" data-element_type="widget" id="btnFullscreen" data-settings="{&quot;sticky&quot;:&quot;bottom&quot;,&quot;sticky_offset&quot;:120,&quot;sticky_offset_mobile&quot;:140,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fas fa-expand-arrows-alt"></i>			</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8a3f3ab wdp-sticky-section--no" data-id="8a3f3ab" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7e1af522 wdp-sticky-section--no elementor-widget elementor-widget-weddingpress-wellcome" data-id="7e1af522" data-element_type="widget" data-widget_type="weddingpress-wellcome.default">
				<div class="elementor-widget-container">
			        
        <div class="modalx" data-sampul='https://eninvitation.com/wp-content/uploads/2022/07/BG-ULT-001.jpg'>
        
                        <div class="overlayy"></div>
                            <div class="content-modalx">
                                <div class="info_modalx">
                                     
                                           <div class="elementor-image img"><img decoding="async" src="assets/images/Ilustrasi1.webp" title="9" alt="9" loading="lazy" /></div>

                                                                        
                                    

                                    
                                            <div class="wdp-mempelai" style="width: auto !important;font-family:'GreatVibes',sans-serif !important;font-size:40px;" >Dimas &amp; Dini
                                            </div>

                                    

                                    
                                                                                <div class="wdp-dear" style="width: auto !important;font-family:'Tangerine',sans-serif !important" >Bapak/Ibu/Saudara/i</div>
																				<div class="wdp-name namatamu" style="width: auto !important; font-family: 'GreatVibes', sans-serif !important;font-size:27px;">
        <?php
        // Mengambil nilai dari parameter GET "to"
        $tamu = $_GET['to'] ?? '';

        // Memeriksa apakah ada nilai "to" yang diberikan
        if (!empty($tamu)) {
            echo $tamu;
        } else {
            echo "Tamu Undangan";
        }
        ?>
    </div>                                                                                    <div class="wdp-text" style="width: auto !important;font-family:'Tangerine',sans-serif !important;font-size:27px;" >Tanpa mengurangi rasa hormat, kami bermaksud mengundang Anda untuk menghadiri acara pernikahan kami.</div>
                                        
                                    <div class="wdp-button-wrapper" id="wdp-button-wrapper">
										<button class="elementor-button" style="font-family:'Tangerine',sans-serif !important" onclick="startVideo()">
                                            <span >
                                                <i aria-hidden="true" class="far fa-envelope-open"></i>
											</span>
                                            Buka Undangan
										</button>
                                    </div>
                                                                    
                                                                        
                                    


                                </div>
                            </div>
                   </div>
        
     

        <script>
            const sampul = jQuery('.modalx').data('sampul');
            jQuery('.modalx').css('background-image','url('+sampul+')');
            jQuery('body').css('overflow','hidden');
            jQuery('.wdp-button-wrapper button').on('click',function(){
                jQuery('.modalx').addClass('removeModals');
                jQuery('body').css('overflow','auto');

            });
        </script>

         
           
        <script>
            //var z = document.querySelector('#wdp-button-wrapper');
            //z.addEventListener("click", function(event) {

            //Neo - Added New Conditional Statement for select Audio or Youtube
            var isYT = false;
			jQuery( "#wdp-button-wrapper" ).on( "click", "button", function() {
                // var isYT = false;
                playAudio();
				if(document.body.contains(document.getElementById("song"))) {
					document.getElementById("song").play();
					isYT = false;
				} else {
					isYT = true;
					player.playVideo();
				}
                function playAudio(){
                    var isYT = false;
                    if(document.body.contains(document.getElementById("song"))) {
                        document.getElementById("song").play();
                        isYT = false;
                    } else {
                        isYT = true;
                        player.playVideo();
                    }
                }
            });
        </script>
        <script>
			// decode &amp; and \'
			if(jQuery('.namatamu').length  >= 1){
				let tmpHtmlNamatamu = document.querySelectorAll('.namatamu')
				tmpHtmlNamatamu.forEach((tamuTexts) => {
					tamuTexts.innerHTML = cleanIts(tamuTexts.innerHTML); 
				});
			}
			function cleanIts(str){

				return jQuery("<textarea></textarea>").html(str.replace(/\\/g,"")).text();
			}
		</script>
		<script>
    var video = document.getElementById("myVideo");

    function startVideo() {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }
</script>

        <style type="text/css">
            .elementor-button-qr {
                display: inline-block;
                line-height: 1;
                background-color: #818a91;
                font-size: 15px;
                padding: 12px 24px;
                border-radius: 3px;
                color: #fff;
                fill: #fff;
                text-align: center;
                -webkit-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s;
            }
        </style>

        		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-7a65678a wdp-sticky-section--no elementor-widget elementor-widget-html" data-id="7a65678a" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<script>
function toggleFullscreen(elem) {
  elem = elem || document.documentElement;

  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

document.getElementById('btnFullscreen').addEventListener('click', function() {
  toggleFullscreen();
});

document.getElementsByClassName("wdp-button-wrapper").addEventListener('click', function() {
  toggleFullscreen();
});


</script>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
							</div>
		<link rel='stylesheet' id='elementor-gallery-css' href='assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='assets/plugins/elementor/assets/lib/animations/animations.min.css' type='text/css' media='all' />
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/wdp-swiper.min.js' id='wdp-swiper-js-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/qr-code.js' id='weddingpress-qr-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/wdp-horizontal.js' id='wdp-horizontal-js-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/exad-scripts.min.js' id='exad-main-script-js'></script>
<script type='text/javascript' id='cui_js_script-js-extra'>
</script>
<script type='text/javascript' src='assets/plugins/weddingpress/addons/comment-kit2/js/cui_script.js' id='cui_js_script-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.jPages.min.js' id='cui_jPages-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.textareaCounter.js' id='cui_textCounter-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.placeholder.min.js' id='cui_placeholder-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/addons/comment-kit2/js/libs/autosize.min.js' id='cui_autosize-js'></script>
<script type='text/javascript' src='assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js' id='elementor-gallery-js'></script>
<script type='text/javascript' src='assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='assets/plugins/elementor/assets/js/webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='assets/plugins/elementor/assets/js/frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='assets/js/dist/vendor/wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='assets/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='assets/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' src='assets/js/dist/hooks.min.js' id='wp-hooks-js'></script>
<script type='text/javascript' src='assets/js/dist/i18n.min.js' id='wp-i18n-js'></script>
<script id="wp-i18n-js-after" type="text/javascript">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before" type="text/javascript">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/eninvitation.com\/wp-admin\/admin-ajax.php","nonce":"f232c64c63","urls":{"assets":"https:\/\/eninvitation.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/eninvitation.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/eninvitation.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type='text/javascript' src='assets/plugins/elementor-pro/assets/js/frontend.min.js' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='assets/plugins/elementor/assets/lib/waypoints/waypoints.min.js' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='assets/js/jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
<script id="elementor-frontend-js-before" type="text/javascript">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},
"version":"3.15.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"landing-pages":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/eninvitation.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":44645,"title":"G%202%20A%20-%20EN_Invitation","excerpt":"","featuredImage":"https:\/\/eninvitation.com\/wp-content\/uploads\/2023\/07\/cover-2-1.jpg"}};
</script>
<script type='text/javascript' src='assets/plugins/elementor/assets/js/frontend.min.js' id='elementor-frontend-js'></script>
<script type='text/javascript' src='assets/plugins/elementor-pro/assets/js/elements-handlers.min.js' id='pro-elements-handlers-js'></script>
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/modules/bdt-uikit.js' id='bdt-uikit-js'></script>
<script type='text/javascript' src='assets/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js' id='e-sticky-js'></script>
<script type='text/javascript' id='weddingpress-wdp-js-extra'>
/* <![CDATA[ */
var cevar = {"ajax_url":"https:\/\/eninvitation.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/eninvitation.com\/wp-content\/plugins\/weddingpress\/"};
/* ]]> */
</script>
<script type='text/javascript' src='assets/plugins/weddingpress/assets/js/wdp.min.js' id='weddingpress-wdp-js'></script>
	</body>
</html>
