<?php
require_once(__DIR__ . '../Icon.php');

class IconOlympics extends Icon {
    public static function getName(): string {
        return 'olympics';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 9m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M18 9m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 9m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}