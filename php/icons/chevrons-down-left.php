<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsDownLeft extends Icon {
    public static function getName(): string {
        return 'chevrons-down-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 5v8h8" />   <path d="M7 9v8h8" />
        SVG;
    }
}