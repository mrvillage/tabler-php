<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBed extends \Tabler\Icon {
    public static function getName(): string {
        return 'bed';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6" />   <path d="M7 10m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}