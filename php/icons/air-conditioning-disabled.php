<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAirConditioningDisabled extends Tabler\Icon {
    public static function getName(): string {
        return 'air-conditioning-disabled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 8m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 16v-3a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v3" />
        SVG;
    }
}