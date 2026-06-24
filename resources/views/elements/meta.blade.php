<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')">
<?php 

    $global_seo = !empty(config('dz.site_level.seo.meta')) ? config('dz.site_level.seo.meta') : array() ;
    $seo = !empty(config('dz.pagelevel.'.$action.'.seo.meta')) ? config('dz.pagelevel.'.$action.'.seo.meta') : $global_seo;
    if (!empty($seo)) {
        foreach ($seo as $tag) {
            if (isset($tag['name'])){
                echo '<meta name="'.$tag['name'].'" content="'.$tag['content'].'">',PHP_EOL;
            }
            elseif (isset($tag['property'])){
                echo '<meta name="'.$tag['property'].'" content="'.$tag['content'].'">',PHP_EOL;
            }
        }
    }
 ?>
<meta name="csrf-token" content="{{ csrf_token() }}">