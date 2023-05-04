<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrendingUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'trending-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17l6 -6l4 4l8 -8" />   <path d="M14 7l7 0l0 7" />
        SVG;
    }
}