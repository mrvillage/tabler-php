<?php
require_once('../Icon.php');

class IconZzz extends Icon {
    public static function getName(): string {
        return 'zzz';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12h6l-6 8h6" />   <path d="M14 4h6l-6 8h6" />
        SVG;
    }
}