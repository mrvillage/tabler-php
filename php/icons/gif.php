<?php
require_once('../Icon.php');

class IconGif extends Icon {
    public static function getName(): string {
        return 'gif';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8h-3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h3v-4h-1" />   <path d="M12 8v8" />   <path d="M16 16v-8h5" />   <path d="M20 12h-4" />
        SVG;
    }
}