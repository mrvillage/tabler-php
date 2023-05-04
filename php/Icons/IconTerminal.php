<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTerminal extends \Tabler\Icon {
    public static function getName(): string {
        return 'terminal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7l5 5l-5 5" />   <path d="M12 19l7 0" />
        SVG;
    }
}