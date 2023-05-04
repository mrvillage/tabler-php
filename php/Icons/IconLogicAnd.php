<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLogicAnd extends \Tabler\Icon {
    public static function getName(): string {
        return 'logic-and';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-5" />   <path d="M2 9h5" />   <path d="M2 15h5" />   <path d="M9 5c6 0 8 3.5 8 7s-2 7 -8 7h-2v-14h2z" />
        SVG;
    }
}