<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPerspective extends \Tabler\Icon {
    public static function getName(): string {
        return 'perspective';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.141 4.163l12 1.714a1 1 0 0 1 .859 .99v10.266a1 1 0 0 1 -.859 .99l-12 1.714a1 1 0 0 1 -1.141 -.99v-13.694a1 1 0 0 1 1.141 -.99z" />
        SVG;
    }
}