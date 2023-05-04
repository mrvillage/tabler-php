<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRoundaboutRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-roundabout-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 9h-8a5 5 0 1 0 -5 5v7" />   <path d="M17 5l4 4l-4 4" />
        SVG;
    }
}