<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'chevrons-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 7l-5 5l5 5" />   <path d="M17 7l-5 5l5 5" />
        SVG;
    }
}