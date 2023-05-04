<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircuitDiodeZener extends \Tabler\Icon {
    public static function getName(): string {
        return 'circuit-diode-zener';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-6" />   <path d="M2 12h6" />   <path d="M8 7l8 5l-8 5z" />   <path d="M14 7h2v10h2" />
        SVG;
    }
}