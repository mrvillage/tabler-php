<?php
require_once(__DIR__ . '/../Icon.php');

class IconBarrel extends Icon {
    public static function getName(): string {
        return 'barrel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7.278 4h9.444a2 2 0 0 1 1.841 1.22c.958 2.26 1.437 4.52 1.437 6.78c0 2.26 -.479 4.52 -1.437 6.78a2 2 0 0 1 -1.841 1.22h-9.444a2 2 0 0 1 -1.841 -1.22c-.958 -2.26 -1.437 -4.52 -1.437 -6.78c0 -2.26 .479 -4.52 1.437 -6.78a2 2 0 0 1 1.841 -1.22z" />   <path d="M14 4c.667 2.667 1 5.333 1 8s-.333 5.333 -1 8" />   <path d="M10 4c-.667 2.667 -1 5.333 -1 8s.333 5.333 1 8" />   <path d="M4.5 16h15" />   <path d="M19.5 8h-15" />
        SVG;
    }
}