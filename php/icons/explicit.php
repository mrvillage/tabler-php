<?php
require_once('../Icon.php');

class IconExplicit extends Icon {
    public static function getName(): string {
        return 'explicit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M14 8h-4v8h4" />   <path d="M14 12h-4" />
        SVG;
    }
}