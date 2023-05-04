<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsRightDown extends Tabler\Icon {
    public static function getName(): string {
        return 'arrows-right-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17l4 4l4 -4" />   <path d="M7 21v-11a3 3 0 0 1 3 -3h11" />   <path d="M17 11l4 -4l-4 -4" />
        SVG;
    }
}