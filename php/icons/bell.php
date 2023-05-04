<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBell extends \Tabler\Icon {
    public static function getName(): string {
        return 'bell';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />   <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
        SVG;
    }
}