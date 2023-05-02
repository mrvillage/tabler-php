<?php
require_once('../Icon.php');

class IconBrowserX extends Icon {
    public static function getName(): string {
        return 'browser-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M4 8h16" />   <path d="M8 4v4" />   <path d="M10 16l4 -4" />   <path d="M14 16l-4 -4" />
        SVG;
    }
}