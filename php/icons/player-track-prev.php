<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerTrackPrev extends Tabler\Icon {
    public static function getName(): string {
        return 'player-track-prev';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 5v14l-8 -7z" />   <path d="M10 5v14l-8 -7z" />
        SVG;
    }
}