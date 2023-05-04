<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUxCircle extends Tabler\Icon {
    public static function getName(): string {
        return 'ux-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M7 10v2a2 2 0 1 0 4 0v-2" />   <path d="M14 10l3 4" />   <path d="M14 14l3 -4" />
        SVG;
    }
}