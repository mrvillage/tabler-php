<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTvOld extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-tv-old';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M16 3l-4 4l-4 -4" />   <path d="M15 7v13" />   <path d="M18 15v.01" />   <path d="M18 12v.01" />
        SVG;
    }
}