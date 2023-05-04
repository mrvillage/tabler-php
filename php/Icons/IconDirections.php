<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDirections extends \Tabler\Icon {
    public static function getName(): string {
        return 'directions';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21v-4" />   <path d="M12 13v-4" />   <path d="M12 5v-2" />   <path d="M10 21h4" />   <path d="M8 5v4h11l2 -2l-2 -2z" />   <path d="M14 13v4h-8l-2 -2l2 -2z" />
        SVG;
    }
}