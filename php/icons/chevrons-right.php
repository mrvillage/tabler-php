<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsRight extends Icon {
    public static function getName(): string {
        return 'chevrons-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 7l5 5l-5 5" />   <path d="M13 7l5 5l-5 5" />
        SVG;
    }
}