<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerPlayFilled extends \Tabler\Icon {
    public static function getName(): string {
        return 'player-play-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}