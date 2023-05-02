<?php
require_once(__DIR__ . '/../Icon.php');

class IconLogicXnor extends Icon {
    public static function getName(): string {
        return 'logic-xnor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-2" />   <path d="M2 9h4" />   <path d="M2 15h4" />   <path d="M5 19c1.778 -4.667 1.778 -9.333 0 -14" />   <path d="M8 5c10.667 2.1 10.667 12.6 0 14c1.806 -4.667 1.806 -9.333 0 -14z" />   <path d="M18 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}