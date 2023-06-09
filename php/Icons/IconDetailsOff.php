<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDetailsOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'details-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h14" />   <path d="M20.986 16.984a2 2 0 0 0 -.146 -.734l-7.1 -12.25a2 2 0 0 0 -3.5 0l-.821 1.417m-1.469 2.534l-4.81 8.299a2 2 0 0 0 1.75 2.75" />   <path d="M12 3v5m0 4v7" />   <path d="M3 3l18 18" />
        SVG;
    }
}