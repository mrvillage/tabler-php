<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrendingDown2 extends Tabler\Icon {
    public static function getName(): string {
        return 'trending-down-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6h5l7 10h6" />   <path d="M18 19l3 -3l-3 -3" />
        SVG;
    }
}