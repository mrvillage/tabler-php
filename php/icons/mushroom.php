<?php
require_once(__DIR__ . '../Icon.php');

class IconMushroom extends Icon {
    public static function getName(): string {
        return 'mushroom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11.1c0 -4.474 -3.582 -8.1 -8 -8.1s-8 3.626 -8 8.1a.9 .9 0 0 0 .9 .9h14.2a.9 .9 0 0 0 .9 -.9z" />   <path d="M10 12v7a2 2 0 1 0 4 0v-7" />
        SVG;
    }
}