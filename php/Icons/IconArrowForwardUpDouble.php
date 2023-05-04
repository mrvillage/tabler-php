<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowForwardUpDouble extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-forward-up-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 14l4 -4l-4 -4" />   <path d="M16 14l4 -4l-4 -4" />   <path d="M15 10h-7a4 4 0 1 0 0 8h1" />
        SVG;
    }
}