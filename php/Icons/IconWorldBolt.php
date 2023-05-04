<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldBolt extends \Tabler\Icon {
    public static function getName(): string {
        return 'world-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.985 12.52a9 9 0 1 0 -7.52 8.36" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h10.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3c2.313 3.706 3.07 7.856 2.27 12" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}