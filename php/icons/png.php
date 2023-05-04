<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPng extends Icon {
    public static function getName(): string {
        return 'png';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />   <path d="M3 16v-8h2a2 2 0 1 1 0 4h-2" />   <path d="M10 16v-8l4 8v-8" />
        SVG;
    }
}