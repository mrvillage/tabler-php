<?php
require_once('../Icon.php');

class IconBrandBinance extends Icon {
    public static function getName(): string {
        return 'brand-binance';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 8l2 2l4 -4l4 4l2 -2l-6 -6z" />   <path d="M6 16l2 -2l4 4l3.5 -3.5l2 2l-5.5 5.5z" />   <path d="M20 10l2 2l-2 2l-2 -2z" />   <path d="M4 10l2 2l-2 2l-2 -2z" />   <path d="M12 10l2 2l-2 2l-2 -2z" />
        SVG;
    }
}