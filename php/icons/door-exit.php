<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDoorExit extends Tabler\Icon {
    public static function getName(): string {
        return 'door-exit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 12v.01" />   <path d="M3 21h18" />   <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5" />   <path d="M14 7h7m-3 -3l3 3l-3 3" />
        SVG;
    }
}