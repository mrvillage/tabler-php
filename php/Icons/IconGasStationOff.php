<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGasStationOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'gas-station-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 11a2 2 0 0 1 2 2m3 3v-7l-3 -3" />   <path d="M4 20v-14c0 -.548 .22 -1.044 .577 -1.405m3.423 -.595h4a2 2 0 0 1 2 2v4m0 4v6" />   <path d="M3 20h12" />   <path d="M18 7v1a1 1 0 0 0 1 1h1" />   <path d="M4 11h7" />   <path d="M3 3l18 18" />
        SVG;
    }
}