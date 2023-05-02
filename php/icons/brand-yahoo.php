<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandYahoo extends Icon {
    public static function getName(): string {
        return 'brand-yahoo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6l5 0" />   <path d="M7 18l7 0" />   <path d="M4.5 6l5.5 7v5" />   <path d="M10 13l6 -5" />   <path d="M12.5 8l5 0" />   <path d="M20 11l0 4" />   <path d="M20 18l0 .01" />
        SVG;
    }
}