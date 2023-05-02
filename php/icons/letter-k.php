<?php
require_once('../Icon.php');

class IconLetterK extends Icon {
    public static function getName(): string {
        return 'letter-k';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4l0 16" />   <path d="M7 12h2l8 -8" />   <path d="M9 12l8 8" />
        SVG;
    }
}