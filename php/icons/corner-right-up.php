<?php
require_once('../Icon.php');

class IconCornerRightUp extends Icon {
    public static function getName(): string {
        return 'corner-right-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18h6a3 3 0 0 0 3 -3v-10l-4 4m8 0l-4 -4" />
        SVG;
    }
}