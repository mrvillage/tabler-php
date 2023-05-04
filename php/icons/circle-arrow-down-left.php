<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleArrowDownLeft extends Icon {
    public static function getName(): string {
        return 'circle-arrow-down-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />   <path d="M15 9l-6 6" />   <path d="M15 15h-6v-6" />
        SVG;
    }
}