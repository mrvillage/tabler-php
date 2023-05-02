<?php
require_once('../Icon.php');

class IconLine extends Icon {
    public static function getName(): string {
        return 'line';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7.5 16.5l9 -9" />
        SVG;
    }
}