<?php
require_once(__DIR__ . '/../Icon.php');

class IconPlaylistX extends Icon {
    public static function getName(): string {
        return 'playlist-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 8h-14" />   <path d="M5 12h7" />   <path d="M12 16h-7" />   <path d="M16 14l4 4" />   <path d="M20 14l-4 4" />
        SVG;
    }
}