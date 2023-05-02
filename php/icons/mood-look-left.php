<?php
require_once(__DIR__ . '../Icon.php');

class IconMoodLookLeft extends Icon {
    public static function getName(): string {
        return 'mood-look-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 9h.01" />   <path d="M4 15h4" />
        SVG;
    }
}