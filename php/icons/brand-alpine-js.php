<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandAlpineJs extends Icon {
    public static function getName(): string {
        return 'brand-alpine-js';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 11.5l4.5 4.5h9l-9 -9z" />   <path d="M16.5 16l4.5 -4.5l-4.5 -4.5l-4.5 4.5" />
        SVG;
    }
}