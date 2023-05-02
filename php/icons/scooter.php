<?php
require_once('../Icon.php');

class IconScooter extends Icon {
    public static function getName(): string {
        return 'scooter';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 17h5a6 6 0 0 1 5 -5v-5a2 2 0 0 0 -2 -2h-1" />
        SVG;
    }
}