<?php
require_once('../Icon.php');

class IconLetterV extends Icon {
    public static function getName(): string {
        return 'letter-v';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4l6 16l6 -16" />
        SVG;
    }
}