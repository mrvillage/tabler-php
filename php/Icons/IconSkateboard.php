<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSkateboard extends \Tabler\Icon {
    public static function getName(): string {
        return 'skateboard';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M3 9a2 1 0 0 0 2 1h14a2 1 0 0 0 2 -1" />
        SVG;
    }
}