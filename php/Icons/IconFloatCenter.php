<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFloatCenter extends \Tabler\Icon {
    public static function getName(): string {
        return 'float-center';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M4 7l1 0" />   <path d="M4 11l1 0" />   <path d="M19 7l1 0" />   <path d="M19 11l1 0" />   <path d="M4 15l16 0" />   <path d="M4 19l16 0" />
        SVG;
    }
}