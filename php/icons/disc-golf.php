<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDiscGolf extends Tabler\Icon {
    public static function getName(): string {
        return 'disc-golf';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5h14" />   <path d="M6 5c.32 6.744 2.74 9.246 6 10" />   <path d="M18 5c-.32 6.744 -2.74 9.246 -6 10" />   <path d="M10 5c0 4.915 .552 7.082 2 10" />   <path d="M14 5c0 4.915 -.552 7.082 -2 10" />   <path d="M12 15v6" />   <path d="M12 3v2" />   <path d="M7 16c.64 .64 1.509 1 2.414 1h5.172c.905 0 1.774 -.36 2.414 -1" />   <path d="M11 21h2" />
        SVG;
    }
}