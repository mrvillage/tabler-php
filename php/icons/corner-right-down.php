<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerRightDown extends Icon {
    public static function getName(): string {
        return 'corner-right-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6h6a3 3 0 0 1 3 3v10l-4 -4m8 0l-4 4" />
        SVG;
    }
}