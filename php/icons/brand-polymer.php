<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandPolymer extends Icon {
    public static function getName(): string {
        return 'brand-polymer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.706 6l-3.706 6l3.706 6h1.059l8.47 -12h1.06l3.705 6l-3.706 6" />
        SVG;
    }
}