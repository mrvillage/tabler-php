<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSailboat extends \Tabler\Icon {
    public static function getName(): string {
        return 'sailboat';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" />   <path d="M4 18l-1 -3h18l-1 3" />   <path d="M11 12h7l-7 -9v9" />   <path d="M8 7l-2 5" />
        SVG;
    }
}