<?php
require_once(__DIR__ . '../Icon.php');

class IconPlayerPlay extends Icon {
    public static function getName(): string {
        return 'player-play';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4v16l13 -8z" />
        SVG;
    }
}