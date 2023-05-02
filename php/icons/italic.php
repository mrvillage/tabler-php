<?php
require_once('../Icon.php');

class IconItalic extends Icon {
    public static function getName(): string {
        return 'italic';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 5l6 0" />   <path d="M7 19l6 0" />   <path d="M14 5l-4 14" />
        SVG;
    }
}