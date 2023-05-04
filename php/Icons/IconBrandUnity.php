<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandUnity extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-unity';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3l6 4v7" />   <path d="M18 17l-6 4l-6 -4" />   <path d="M4 14v-7l6 -4" />   <path d="M4 7l8 5v9" />   <path d="M20 7l-8 5" />
        SVG;
    }
}