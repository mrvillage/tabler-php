<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandZeit extends Icon {
    public static function getName(): string {
        return 'brand-zeit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20h18l-9 -16z" />
        SVG;
    }
}