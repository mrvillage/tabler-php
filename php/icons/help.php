<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHelp extends \Tabler\Icon {
    public static function getName(): string {
        return 'help';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 17l0 .01" />   <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
        SVG;
    }
}