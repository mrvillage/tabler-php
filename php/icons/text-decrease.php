<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextDecrease extends Tabler\Icon {
    public static function getName(): string {
        return 'text-decrease';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19v-10.5a3.5 3.5 0 1 1 7 0v10.5" />   <path d="M4 13h7" />   <path d="M21 12h-6" />
        SVG;
    }
}