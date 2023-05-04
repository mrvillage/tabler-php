<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconParachute extends Tabler\Icon {
    public static function getName(): string {
        return 'parachute';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12a10 10 0 1 0 -20 0" />   <path d="M22 12c0 -1.66 -1.46 -3 -3.25 -3c-1.8 0 -3.25 1.34 -3.25 3c0 -1.66 -1.57 -3 -3.5 -3s-3.5 1.34 -3.5 3c0 -1.66 -1.46 -3 -3.25 -3c-1.8 0 -3.25 1.34 -3.25 3" />   <path d="M2 12l10 10l-3.5 -10" />   <path d="M15.5 12l-3.5 10l10 -10" />
        SVG;
    }
}