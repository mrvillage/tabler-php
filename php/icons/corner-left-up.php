<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerLeftUp extends Icon {
    public static function getName(): string {
        return 'corner-left-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 18h-6a3 3 0 0 1 -3 -3v-10l-4 4m8 0l-4 -4" />
        SVG;
    }
}