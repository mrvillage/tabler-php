<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSignal4gPlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'signal-4g-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 12h4" />   <path d="M3 8v3a1 1 0 0 0 1 1h3" />   <path d="M7 8v8" />   <path d="M19 10v4" />   <path d="M14 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />
        SVG;
    }
}