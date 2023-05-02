<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandPepsi extends Icon {
    public static function getName(): string {
        return 'brand-pepsi';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M4 16c5.713 -2.973 11 -3.5 13.449 -11.162" />   <path d="M5 17.5c5.118 -2.859 15 0 14 -11" />
        SVG;
    }
}