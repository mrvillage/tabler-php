<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandAppgallery extends Icon {
    public static function getName(): string {
        return 'brand-appgallery';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />   <path d="M9 8a3 3 0 0 0 6 0" />
        SVG;
    }
}