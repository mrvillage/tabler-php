<?php
require_once(__DIR__ . '/../Icon.php');

class IconNotificationOff extends Icon {
    public static function getName(): string {
        return 'notification-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.154 6.187a2 2 0 0 0 -1.154 1.813v9a2 2 0 0 0 2 2h9a2 2 0 0 0 1.811 -1.151" />   <path d="M17 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}