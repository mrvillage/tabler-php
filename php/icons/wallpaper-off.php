<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWallpaperOff extends Icon {
    public static function getName(): string {
        return 'wallpaper-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6h8a2 2 0 0 1 2 2v8m-.58 3.409a2 2 0 0 1 -1.42 .591h-12" />   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 18v-10m-3.427 -3.402c-.353 .362 -.573 .856 -.573 1.402v12" />   <path d="M3 3l18 18" />
        SVG;
    }
}