<?php
require_once('../Icon.php');

class IconMoodSing extends Icon {
    public static function getName(): string {
        return 'mood-sing';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 9h.01" />   <path d="M15 9h.01" />   <path d="M15 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}