<?php
require_once(__DIR__ . '../Icon.php');

class IconPlayerEjectFilled extends Icon {
    public static function getName(): string {
        return 'player-eject-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.247 3.341l-7 8c-.565 .647 -.106 1.659 .753 1.659h14c.86 0 1.318 -1.012 .753 -1.659l-7 -8a1 1 0 0 0 -1.506 0z" stroke-width="0" fill="currentColor" />   <path d="M18 15h-12a2 2 0 0 0 -2 2v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}