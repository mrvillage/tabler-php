<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconToggleRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'toggle-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M2 6m0 6a6 6 0 0 1 6 -6h8a6 6 0 0 1 6 6v0a6 6 0 0 1 -6 6h-8a6 6 0 0 1 -6 -6z" />
        SVG;
    }
}