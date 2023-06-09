<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAtom2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'atom-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 21l0 .01" />   <path d="M3 9l0 .01" />   <path d="M21 9l0 .01" />   <path d="M8 20.1a9 9 0 0 1 -5 -7.1" />   <path d="M16 20.1a9 9 0 0 0 5 -7.1" />   <path d="M6.2 5a9 9 0 0 1 11.4 0" />
        SVG;
    }
}