<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandTed extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-ted';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 8h4" />   <path d="M4 8v8" />   <path d="M13 8h-4v8h4" />   <path d="M9 12h2.5" />   <path d="M16 8v8h2a3 3 0 0 0 3 -3v-2a3 3 0 0 0 -3 -3h-2z" />
        SVG;
    }
}