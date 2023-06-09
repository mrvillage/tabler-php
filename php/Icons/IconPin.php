<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPin extends \Tabler\Icon {
    public static function getName(): string {
        return 'pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />   <path d="M9 15l-4.5 4.5" />   <path d="M14.5 4l5.5 5.5" />
        SVG;
    }
}