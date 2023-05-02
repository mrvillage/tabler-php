<?php
require_once(__DIR__ . '../Icon.php');

class IconBadges extends Icon {
    public static function getName(): string {
        return 'badges';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 17v-4l-5 3l-5 -3v4l5 3z" />   <path d="M17 8v-4l-5 3l-5 -3v4l5 3z" />
        SVG;
    }
}