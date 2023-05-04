<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconH3 extends Icon {
    public static function getName(): string {
        return 'h-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 14a2 2 0 1 0 -2 -2" />   <path d="M17 16a2 2 0 1 0 2 -2" />   <path d="M4 6v12" />   <path d="M12 6v12" />   <path d="M11 18h2" />   <path d="M3 18h2" />   <path d="M4 12h8" />   <path d="M3 6h2" />   <path d="M11 6h2" />
        SVG;
    }
}