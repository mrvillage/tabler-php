<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRotateClockwise extends \Tabler\Icon {
    public static function getName(): string {
        return 'rotate-clockwise';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.05 11a8 8 0 1 1 .5 4m-.5 5v-5h5" />
        SVG;
    }
}