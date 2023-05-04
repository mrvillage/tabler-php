<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrendingUp2 extends Tabler\Icon {
    public static function getName(): string {
        return 'trending-up-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 5l3 3l-3 3" />   <path d="M3 18h5l7 -10h6" />
        SVG;
    }
}