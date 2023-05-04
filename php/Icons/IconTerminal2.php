<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTerminal2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'terminal-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9l3 3l-3 3" />   <path d="M13 15l3 0" />   <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}