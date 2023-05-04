<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandFlickr extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-flickr';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}