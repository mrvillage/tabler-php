<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlag3 extends Tabler\Icon {
    public static function getName(): string {
        return 'flag-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 14h14l-4.5 -4.5l4.5 -4.5h-14v16" />
        SVG;
    }
}