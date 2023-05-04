<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuilding extends Tabler\Icon {
    public static function getName(): string {
        return 'building';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 0" />   <path d="M9 8l1 0" />   <path d="M9 12l1 0" />   <path d="M9 16l1 0" />   <path d="M14 8l1 0" />   <path d="M14 12l1 0" />   <path d="M14 16l1 0" />   <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
        SVG;
    }
}