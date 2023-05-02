<?php
require_once(__DIR__ . '/../Icon.php');

class IconMicrowave extends Icon {
    public static function getName(): string {
        return 'microwave';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M15 6v12" />   <path d="M18 12h.01" />   <path d="M18 15h.01" />   <path d="M18 9h.01" />   <path d="M6.5 10.5c1 -.667 1.5 -.667 2.5 0c.833 .347 1.667 .926 2.5 0" />   <path d="M6.5 13.5c1 -.667 1.5 -.667 2.5 0c.833 .347 1.667 .926 2.5 0" />
        SVG;
    }
}