<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlug extends \Tabler\Icon {
    public static function getName(): string {
        return 'plug';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z" />   <path d="M4 20l3.5 -3.5" />   <path d="M15 4l-3.5 3.5" />   <path d="M20 9l-3.5 3.5" />
        SVG;
    }
}