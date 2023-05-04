<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronsUpRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'chevrons-up-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 7h8v8" />   <path d="M5 11h8v8" />
        SVG;
    }
}