<?php
require_once('../Icon.php');

class IconCircleLetterH extends Icon {
    public static function getName(): string {
        return 'circle-letter-h';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 16v-8m4 0v8" />   <path d="M10 12h4" />
        SVG;
    }
}