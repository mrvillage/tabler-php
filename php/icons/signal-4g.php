<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSignal4g extends Icon {
    public static function getName(): string {
        return 'signal-4g';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 8v3a1 1 0 0 0 1 1h3" />   <path d="M10 8v8" />   <path d="M17 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />
        SVG;
    }
}