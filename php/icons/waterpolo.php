<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWaterpolo extends Icon {
    public static function getName(): string {
        return 'waterpolo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M5 8l3 4l4.5 1l7.5 -1" />   <path d="M3 18.75a2.4 2.4 0 0 0 1 .25a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 1 -.25" />   <path d="M12 16l.5 -3" />   <path d="M6.5 5a.5 .5 0 1 0 0 -1a.5 .5 0 0 0 0 1z" fill="currentColor" />
        SVG;
    }
}