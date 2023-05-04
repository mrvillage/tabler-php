<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandIntercom extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-intercom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M7 8v3" />   <path d="M10 7v6" />   <path d="M14 7v6" />   <path d="M17 8v3" />   <path d="M7 15c4 2.667 6 2.667 10 0" />
        SVG;
    }
}