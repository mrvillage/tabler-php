<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChecks extends \Tabler\Icon {
    public static function getName(): string {
        return 'checks';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12l5 5l10 -10" />   <path d="M2 12l5 5m5 -5l5 -5" />
        SVG;
    }
}