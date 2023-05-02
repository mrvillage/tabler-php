<?php
require_once(__DIR__ . '/../Icon.php');

class IconMoodSadSquint extends Icon {
    public static function getName(): string {
        return 'mood-sad-squint';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M14.5 16.05a3.5 3.5 0 0 0 -5 0" />   <path d="M8.5 11.5l1.5 -1.5l-1.5 -1.5" />   <path d="M15.5 11.5l-1.5 -1.5l1.5 -1.5" />
        SVG;
    }
}