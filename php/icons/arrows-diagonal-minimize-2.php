<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowsDiagonalMinimize2 extends Icon {
    public static function getName(): string {
        return 'arrows-diagonal-minimize-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 10h-4v-4" />   <path d="M20 4l-6 6" />   <path d="M6 14h4v4" />   <path d="M10 14l-6 6" />
        SVG;
    }
}