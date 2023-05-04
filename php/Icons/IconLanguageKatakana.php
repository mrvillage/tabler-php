<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLanguageKatakana extends \Tabler\Icon {
    public static function getName(): string {
        return 'language-katakana';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5h6.586a1 1 0 0 1 .707 1.707l-1.293 1.293" />   <path d="M8 8c0 1.5 .5 3 -2 5" />   <path d="M12 20l4 -9l4 9" />   <path d="M19.1 18h-6.2" />
        SVG;
    }
}