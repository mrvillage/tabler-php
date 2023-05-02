<?php
require_once(__DIR__ . '../Icon.php');

class IconRefreshAlert extends Icon {
    public static function getName(): string {
        return 'refresh-alert';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />   <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />   <path d="M12 9l0 3" />   <path d="M12 15l.01 0" />
        SVG;
    }
}