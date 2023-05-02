<?php
require_once('../Icon.php');

class IconLetterW extends Icon {
    public static function getName(): string {
        return 'letter-w';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4l4 16l4 -14l4 14l4 -16" />
        SVG;
    }
}