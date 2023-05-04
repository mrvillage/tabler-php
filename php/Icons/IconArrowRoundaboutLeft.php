<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRoundaboutLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-roundabout-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 9h8a5 5 0 1 1 5 5v7" />   <path d="M7 5l-4 4l4 4" />
        SVG;
    }
}