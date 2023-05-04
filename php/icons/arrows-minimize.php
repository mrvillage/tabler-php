<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsMinimize extends Icon {
    public static function getName(): string {
        return 'arrows-minimize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 9l4 0l0 -4" />   <path d="M3 3l6 6" />   <path d="M5 15l4 0l0 4" />   <path d="M3 21l6 -6" />   <path d="M19 9l-4 0l0 -4" />   <path d="M15 9l6 -6" />   <path d="M19 15l-4 0l0 4" />   <path d="M15 15l6 6" />
        SVG;
    }
}