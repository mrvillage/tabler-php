<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTransitionLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'transition-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3" />   <path d="M21 6v12a3 3 0 0 1 -6 0v-12a3 3 0 0 1 6 0z" />   <path d="M15 12h-8" />   <path d="M10 9l-3 3l3 3" />
        SVG;
    }
}