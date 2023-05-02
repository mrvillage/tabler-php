<?php
require_once(__DIR__ . '../Icon.php');

class IconBookmark extends Icon {
    public static function getName(): string {
        return 'bookmark';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2" />
        SVG;
    }
}