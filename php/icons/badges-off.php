<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBadgesOff extends Tabler\Icon {
    public static function getName(): string {
        return 'badges-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.505 14.497l-2.505 1.503l-5 -3v4l5 3l5 -3" />   <path d="M13.873 9.876l3.127 -1.876v-4l-5 3l-2.492 -1.495m-2.508 1.495v1l2.492 1.495" />   <path d="M3 3l18 18" />
        SVG;
    }
}