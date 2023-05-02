<?php
require_once(__DIR__ . '/../Icon.php');

class IconSignalLte extends Icon {
    public static function getName(): string {
        return 'signal-lte';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 8h-4v8h4" />   <path d="M17 12h2.5" />   <path d="M4 8v8h4" />   <path d="M10 8h4" />   <path d="M12 8v8" />
        SVG;
    }
}