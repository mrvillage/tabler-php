<?php
require_once(__DIR__ . '../Icon.php');

class IconShiJumping extends Icon {
    public static function getName(): string {
        return 'shi-jumping';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 3a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M17 17.5l-5 -4.5v-6l5 4" />   <path d="M7 17.5l5 -4.5" />   <path d="M15.103 21.58l6.762 -14.502a2 2 0 0 0 -.968 -2.657" />   <path d="M8.897 21.58l-6.762 -14.503a2 2 0 0 1 .968 -2.657" />   <path d="M7 11l5 -4" />
        SVG;
    }
}