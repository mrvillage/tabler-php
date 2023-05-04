<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLineHeight extends Icon {
    public static function getName(): string {
        return 'line-height';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 8l3 -3l3 3" />   <path d="M3 16l3 3l3 -3" />   <path d="M6 5l0 14" />   <path d="M13 6l7 0" />   <path d="M13 12l7 0" />   <path d="M13 18l7 0" />
        SVG;
    }
}