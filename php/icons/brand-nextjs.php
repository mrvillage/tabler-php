<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandNextjs extends Icon {
    public static function getName(): string {
        return 'brand-nextjs';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15v-6l7.745 10.65a9 9 0 1 1 2.255 -1.993" />   <path d="M15 12v-3" />
        SVG;
    }
}