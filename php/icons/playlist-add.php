<?php
require_once(__DIR__ . '../Icon.php');

class IconPlaylistAdd extends Icon {
    public static function getName(): string {
        return 'playlist-add';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 8h-14" />   <path d="M5 12h9" />   <path d="M11 16h-6" />   <path d="M15 16h6" />   <path d="M18 13v6" />
        SVG;
    }
}