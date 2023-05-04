<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconKarate extends Icon {
    public static function getName(): string {
        return 'karate';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M3 9l4.5 1l3 2.5" />   <path d="M13 21v-8l3 -5.5" />   <path d="M8 4.5l4 2l4 1l4 3.5l-2 3.5" />
        SVG;
    }
}