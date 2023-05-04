<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerSkipBack extends Icon {
    public static function getName(): string {
        return 'player-skip-back';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 5v14l-12 -7z" />   <path d="M4 5l0 14" />
        SVG;
    }
}