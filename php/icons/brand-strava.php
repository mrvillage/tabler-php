<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandStrava extends Icon {
    public static function getName(): string {
        return 'brand-strava';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 13l-5 -10l-5 10m6 0l4 8l4 -8" />
        SVG;
    }
}