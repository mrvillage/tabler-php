<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircuitBattery extends Tabler\Icon {
    public static function getName(): string {
        return 'circuit-battery';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h4" />   <path d="M18 12h4" />   <path d="M18 5v14" />   <path d="M14 9v6" />   <path d="M10 5v14" />   <path d="M6 9v6" />
        SVG;
    }
}