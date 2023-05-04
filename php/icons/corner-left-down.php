<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerLeftDown extends Icon {
    public static function getName(): string {
        return 'corner-left-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 6h-6a3 3 0 0 0 -3 3v10l-4 -4m8 0l-4 4" />
        SVG;
    }
}