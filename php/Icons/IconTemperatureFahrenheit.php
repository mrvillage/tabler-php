<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTemperatureFahrenheit extends \Tabler\Icon {
    public static function getName(): string {
        return 'temperature-fahrenheit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13 12l5 0" />   <path d="M20 6h-6a1 1 0 0 0 -1 1v11" />
        SVG;
    }
}