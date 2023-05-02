<?php
require_once('../Icon.php');

class IconNumber8 extends Icon {
    public static function getName(): string {
        return 'number-8';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M12 16m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
        SVG;
    }
}