<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandAndroid extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-android';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10l0 6" />   <path d="M20 10l0 6" />   <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />   <path d="M8 3l1 2" />   <path d="M16 3l-1 2" />   <path d="M9 18l0 3" />   <path d="M15 18l0 3" />
        SVG;
    }
}