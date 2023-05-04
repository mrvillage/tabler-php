<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandNpm extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-npm';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M1 8h22v7h-12v2h-4v-2h-6z" />   <path d="M7 8v7" />   <path d="M14 8v7" />   <path d="M17 11v4" />   <path d="M4 11v4" />   <path d="M11 11v1" />   <path d="M20 11v4" />
        SVG;
    }
}