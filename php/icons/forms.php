<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconForms extends \Tabler\Icon {
    public static function getName(): string {
        return 'forms';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3" />   <path d="M6 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3" />   <path d="M13 7h7a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-7" />   <path d="M5 7h-1a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1" />   <path d="M17 12h.01" />   <path d="M13 12h.01" />
        SVG;
    }
}