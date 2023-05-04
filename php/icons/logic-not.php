<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLogicNot extends Tabler\Icon {
    public static function getName(): string {
        return 'logic-not';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-3" />   <path d="M2 9h3" />   <path d="M2 15h3" />   <path d="M5 5l10 7l-10 7z" />   <path d="M17 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}