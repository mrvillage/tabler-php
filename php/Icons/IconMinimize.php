<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMinimize extends \Tabler\Icon {
    public static function getName(): string {
        return 'minimize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 19v-2a2 2 0 0 1 2 -2h2" />   <path d="M15 5v2a2 2 0 0 0 2 2h2" />   <path d="M5 15h2a2 2 0 0 1 2 2v2" />   <path d="M5 9h2a2 2 0 0 0 2 -2v-2" />
        SVG;
    }
}