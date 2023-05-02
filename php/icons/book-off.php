<?php
require_once(__DIR__ . '/../Icon.php');

class IconBookOff extends Icon {
    public static function getName(): string {
        return 'book-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 5.899 -1.096" />   <path d="M3 6a9 9 0 0 1 2.114 -.884m3.8 -.21c1.07 .17 2.116 .534 3.086 1.094a9 9 0 0 1 9 0" />   <path d="M3 6v13" />   <path d="M12 6v2m0 4v7" />   <path d="M21 6v11" />   <path d="M3 3l18 18" />
        SVG;
    }
}