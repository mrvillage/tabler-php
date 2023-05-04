<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTournament extends Icon {
    public static function getName(): string {
        return 'tournament';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M4 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M4 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 12h3a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-3" />   <path d="M6 4h7a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-2" />   <path d="M14 10h4" />
        SVG;
    }
}