<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBorderStyle2 extends Icon {
    public static function getName(): string {
        return 'border-style-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18v.01" />   <path d="M8 18v.01" />   <path d="M12 18v.01" />   <path d="M16 18v.01" />   <path d="M20 18v.01" />   <path d="M18 12h2" />   <path d="M11 12h2" />   <path d="M4 12h2" />   <path d="M4 6h16" />
        SVG;
    }
}