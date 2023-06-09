<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFloatLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'float-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 5m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M14 7l6 0" />   <path d="M14 11l6 0" />   <path d="M4 15l16 0" />   <path d="M4 19l16 0" />
        SVG;
    }
}