<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandSublimeText extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-sublime-text';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 8l-14 4.5v-5.5l14 -4.5z" />   <path d="M19 17l-14 4.5v-5.5l14 -4.5z" />   <path d="M19 11.5l-14 -4.5" />   <path d="M5 12.5l14 4.5" />
        SVG;
    }
}