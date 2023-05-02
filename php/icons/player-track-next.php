<?php
require_once(__DIR__ . '/../Icon.php');

class IconPlayerTrackNext extends Icon {
    public static function getName(): string {
        return 'player-track-next';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5v14l8 -7z" />   <path d="M14 5v14l8 -7z" />
        SVG;
    }
}