<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowsCross extends Icon {
    public static function getName(): string {
        return 'arrows-cross';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 4h4v4" />   <path d="M15 9l5 -5" />   <path d="M4 20l5 -5" />   <path d="M16 20h4v-4" />   <path d="M4 4l16 16" />
        SVG;
    }
}