<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextSpellcheck extends Tabler\Icon {
    public static function getName(): string {
        return 'text-spellcheck';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 15v-7.5a3.5 3.5 0 0 1 7 0v7.5" />   <path d="M5 10h7" />   <path d="M10 18l3 3l7 -7" />
        SVG;
    }
}