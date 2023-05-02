<?php
require_once(__DIR__ . '/../Icon.php');

class IconIdOff extends Icon {
    public static function getName(): string {
        return 'id-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a3 3 0 0 1 3 3v10m-1.437 2.561c-.455 .279 -.99 .439 -1.563 .439h-12a3 3 0 0 1 -3 -3v-10c0 -1.083 .573 -2.031 1.433 -2.559" />   <path d="M8.175 8.178a2 2 0 1 0 2.646 2.65" />   <path d="M15 8h2" />   <path d="M16 12h1" />   <path d="M7 16h9" />   <path d="M3 3l18 18" />
        SVG;
    }
}