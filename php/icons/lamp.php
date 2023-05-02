<?php
require_once(__DIR__ . '/../Icon.php');

class IconLamp extends Icon {
    public static function getName(): string {
        return 'lamp';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 20h6" />   <path d="M12 20v-8" />   <path d="M5 12h14l-4 -8h-6z" />
        SVG;
    }
}