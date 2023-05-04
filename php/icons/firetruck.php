<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFiretruck extends Icon {
    public static function getName(): string {
        return 'firetruck';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5" />   <path d="M12 18v-11h3" />   <path d="M3 17l0 -5l9 0" />   <path d="M3 9l18 -6" />   <path d="M6 12l0 -4" />
        SVG;
    }
}