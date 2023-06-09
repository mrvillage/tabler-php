<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWallpaper extends \Tabler\Icon {
    public static function getName(): string {
        return 'wallpaper';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 6h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-12" />   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 18v-12a2 2 0 1 0 -4 0v12" />
        SVG;
    }
}