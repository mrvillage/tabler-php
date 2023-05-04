<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSvg extends \Tabler\Icon {
    public static function getName(): string {
        return 'svg';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />   <path d="M7 8h-3a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-3" />   <path d="M10 8l1.5 8h1l1.5 -8" />
        SVG;
    }
}