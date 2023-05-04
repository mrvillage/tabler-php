<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHomeStats extends \Tabler\Icon {
    public static function getName(): string {
        return 'home-stats';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 13v-1h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h2.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" />   <path d="M13 22l3 -3l2 2l4 -4" />   <path d="M19 17h3v3" />
        SVG;
    }
}