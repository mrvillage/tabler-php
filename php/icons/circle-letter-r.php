<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircleLetterR extends Icon {
    public static function getName(): string {
        return 'circle-letter-r';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 12h2a2 2 0 1 0 0 -4h-2v8m4 0l-3 -4" />
        SVG;
    }
}