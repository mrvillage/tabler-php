<?php
require_once(__DIR__ . '../Icon.php');

class IconSticker extends Icon {
    public static function getName(): string {
        return 'sticker';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 12l-2 .5a6 6 0 0 1 -6.5 -6.5l.5 -2l8 8" />   <path d="M20 12a8 8 0 1 1 -8 -8" />
        SVG;
    }
}