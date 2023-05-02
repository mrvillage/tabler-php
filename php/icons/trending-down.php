<?php
require_once(__DIR__ . '/../Icon.php');

class IconTrendingDown extends Icon {
    public static function getName(): string {
        return 'trending-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7l6 6l4 -4l8 8" />   <path d="M21 10l0 7l-7 0" />
        SVG;
    }
}