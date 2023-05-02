<?php
require_once('../Icon.php');

class IconEye extends Icon {
    public static function getName(): string {
        return 'eye';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
        SVG;
    }
}