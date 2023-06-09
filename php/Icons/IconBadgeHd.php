<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBadgeHd extends \Tabler\Icon {
    public static function getName(): string {
        return 'badge-hd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M14 9v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />   <path d="M7 15v-6" />   <path d="M10 15v-6" />   <path d="M7 12h3" />
        SVG;
    }
}