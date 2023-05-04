<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsExchange extends Icon {
    public static function getName(): string {
        return 'arrows-exchange';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 10h14l-4 -4" />   <path d="M17 14h-14l4 4" />
        SVG;
    }
}