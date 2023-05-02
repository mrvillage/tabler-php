<?php
require_once('../Icon.php');

class IconWindowOff extends Icon {
    public static function getName(): string {
        return 'window-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.166 6.19a6.903 6.903 0 0 0 -1.166 3.81v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1 -1v-1m0 -4v-5c0 -3.728 -3.134 -7 -7 -7a6.86 6.86 0 0 0 -3.804 1.158" />   <path d="M5 13h8m4 0h2" />   <path d="M12 3v5m0 4v9" />   <path d="M3 3l18 18" />
        SVG;
    }
}