<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleLetterK extends Icon {
    public static function getName(): string {
        return 'circle-letter-k';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 8v8" />   <path d="M14 8l-2.5 4l2.5 4" />   <path d="M10 12h1.5" />
        SVG;
    }
}