<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPerspectiveOff extends Icon {
    public static function getName(): string {
        return 'perspective-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.511 4.502l9.63 1.375a1 1 0 0 1 .859 .99v8.133m-.859 3.123l-12 1.714a1 1 0 0 1 -1.141 -.99v-13.694a1 1 0 0 1 .01 -.137" />   <path d="M3 3l18 18" />
        SVG;
    }
}