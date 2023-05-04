<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'bell-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 17h-11a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v1.5" />   <path d="M9 17v1a3 3 0 0 0 6 0v-1" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}