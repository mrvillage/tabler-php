<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCast extends \Tabler\Icon {
    public static function getName(): string {
        return 'cast';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19l.01 0" />   <path d="M7 19a4 4 0 0 0 -4 -4" />   <path d="M11 19a8 8 0 0 0 -8 -8" />   <path d="M15 19h3a3 3 0 0 0 3 -3v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -2.8 2" />
        SVG;
    }
}