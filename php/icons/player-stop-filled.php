<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerStopFilled extends Icon {
    public static function getName(): string {
        return 'player-stop-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 4h-10a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3 -3v-10a3 3 0 0 0 -3 -3z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}