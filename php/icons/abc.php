<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAbc extends Tabler\Icon {
    public static function getName(): string {
        return 'abc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 16v-6a2 2 0 1 1 4 0v6" />   <path d="M3 13h4" />   <path d="M10 8v6a2 2 0 1 0 4 0v-1a2 2 0 1 0 -4 0v1" />   <path d="M20.732 12a2 2 0 0 0 -3.732 1v1a2 2 0 0 0 3.726 1.01" />
        SVG;
    }
}