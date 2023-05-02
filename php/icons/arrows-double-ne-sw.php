<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowsDoubleNeSw extends Icon {
    public static function getName(): string {
        return 'arrows-double-ne-sw';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 14l11 -11" />   <path d="M10 3h4v4" />   <path d="M10 17v4h4" />   <path d="M21 10l-11 11" />
        SVG;
    }
}