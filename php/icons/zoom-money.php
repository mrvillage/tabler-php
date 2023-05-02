<?php
require_once(__DIR__ . '../Icon.php');

class IconZoomMoney extends Icon {
    public static function getName(): string {
        return 'zoom-money';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M21 21l-6 -6" />   <path d="M12 7h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M10 13v1m0 -8v1" />
        SVG;
    }
}