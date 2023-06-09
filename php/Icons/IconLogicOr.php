<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLogicOr extends \Tabler\Icon {
    public static function getName(): string {
        return 'logic-or';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-6" />   <path d="M2 9h7" />   <path d="M2 15h7" />   <path d="M8 5c10.667 2.1 10.667 12.6 0 14c1.806 -4.667 1.806 -9.333 0 -14z" />
        SVG;
    }
}