<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsDown extends Icon {
    public static function getName(): string {
        return 'chevrons-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 7l5 5l5 -5" />   <path d="M7 13l5 5l5 -5" />
        SVG;
    }
}