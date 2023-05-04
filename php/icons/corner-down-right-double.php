<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerDownRightDouble extends Tabler\Icon {
    public static function getName(): string {
        return 'corner-down-right-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 5v6a3 3 0 0 0 3 3h7" />   <path d="M10 10l4 4l-4 4m5 -8l4 4l-4 4" />
        SVG;
    }
}