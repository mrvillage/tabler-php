<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceSim1 extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-sim-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3h8.5l4.5 4.5v12.5a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1z" />   <path d="M10 11l2 -2v8" />
        SVG;
    }
}