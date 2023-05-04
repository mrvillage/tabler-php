<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsUpLeft extends Icon {
    public static function getName(): string {
        return 'chevrons-up-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 15v-8h8" />   <path d="M11 19v-8h8" />
        SVG;
    }
}