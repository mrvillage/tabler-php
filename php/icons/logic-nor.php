<?php
require_once(__DIR__ . '../Icon.php');

class IconLogicNor extends Icon {
    public static function getName(): string {
        return 'logic-nor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-4" />   <path d="M2 9h5" />   <path d="M2 15h5" />   <path d="M6 5c10.667 2.1 10.667 12.6 0 14c1.806 -4.667 1.806 -9.333 0 -14z" />   <path d="M16 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}