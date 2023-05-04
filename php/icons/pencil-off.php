<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPencilOff extends Tabler\Icon {
    public static function getName(): string {
        return 'pencil-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 10l-6 6v4h4l6 -6m1.99 -1.99l2.504 -2.504a2.828 2.828 0 1 0 -4 -4l-2.5 2.5" />   <path d="M13.5 6.5l4 4" />   <path d="M3 3l18 18" />
        SVG;
    }
}