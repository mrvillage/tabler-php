<?php
require_once('../Icon.php');

class IconContainer extends Icon {
    public static function getName(): string {
        return 'container';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 4v.01" />   <path d="M20 20v.01" />   <path d="M20 16v.01" />   <path d="M20 12v.01" />   <path d="M20 8v.01" />   <path d="M8 4m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />   <path d="M4 4v.01" />   <path d="M4 20v.01" />   <path d="M4 16v.01" />   <path d="M4 12v.01" />   <path d="M4 8v.01" />
        SVG;
    }
}