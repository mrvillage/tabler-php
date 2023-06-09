<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSteeringWheel extends \Tabler\Icon {
    public static function getName(): string {
        return 'steering-wheel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 14l0 7" />   <path d="M10 12l-6.75 -2" />   <path d="M14 12l6.75 -2" />
        SVG;
    }
}