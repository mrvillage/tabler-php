<?php
require_once('../Icon.php');

class IconTrophyOff extends Icon {
    public static function getName(): string {
        return 'trophy-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21h8" />   <path d="M12 17v4" />   <path d="M8 4h9" />   <path d="M17 4v8c0 .31 -.028 .612 -.082 .905m-1.384 2.632a5 5 0 0 1 -8.534 -3.537v-5" />   <path d="M5 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}