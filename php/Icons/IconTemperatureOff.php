<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTemperatureOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'temperature-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 10v3.5a4 4 0 1 0 5.836 2.33m-1.836 -5.83v-5a2 2 0 1 0 -4 0v1" />   <path d="M13 9h1" />   <path d="M3 3l18 18" />
        SVG;
    }
}