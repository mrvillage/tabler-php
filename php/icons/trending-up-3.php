<?php
require_once(__DIR__ . '/../Icon.php');

class IconTrendingUp3 extends Icon {
    public static function getName(): string {
        return 'trending-up-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 5l3 3l-3 3" />   <path d="M3 18h2.397a5 5 0 0 0 4.096 -2.133l4.014 -5.734a5 5 0 0 1 4.096 -2.133h3.397" />
        SVG;
    }
}