<?php
require_once('../Icon.php');

class IconLetterH extends Icon {
    public static function getName(): string {
        return 'letter-h';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 4l0 16" />   <path d="M7 12l10 0" />   <path d="M7 4l0 16" />
        SVG;
    }
}