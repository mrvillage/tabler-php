<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerEject extends \Tabler\Icon {
    public static function getName(): string {
        return 'player-eject';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12h14l-7 -8z" />   <path d="M5 16m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}