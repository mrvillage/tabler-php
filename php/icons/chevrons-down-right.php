<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsDownRight extends Tabler\Icon {
    public static function getName(): string {
        return 'chevrons-down-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 5v8h-8" />   <path d="M17 9v8h-8" />
        SVG;
    }
}