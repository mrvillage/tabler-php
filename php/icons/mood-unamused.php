<?php
require_once(__DIR__ . '/../Icon.php');

class IconMoodUnamused extends Icon {
    public static function getName(): string {
        return 'mood-unamused';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M11 16l4 -1.5" />   <path d="M10 10c-.5 -1 -2.5 -1 -3 0" />   <path d="M17 10c-.5 -1 -2.5 -1 -3 0" />
        SVG;
    }
}