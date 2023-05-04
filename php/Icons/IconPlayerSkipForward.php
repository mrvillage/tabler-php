<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerSkipForward extends \Tabler\Icon {
    public static function getName(): string {
        return 'player-skip-forward';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 5v14l12 -7z" />   <path d="M20 5l0 14" />
        SVG;
    }
}