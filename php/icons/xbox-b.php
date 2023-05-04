<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconXboxB extends Icon {
    public static function getName(): string {
        return 'xbox-b';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />   <path d="M13 12a2 2 0 1 1 0 4h-3v-4" />   <path d="M13 12h-3" />   <path d="M13 12a2 2 0 1 0 0 -4h-3v4" />
        SVG;
    }
}