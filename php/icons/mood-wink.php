<?php
require_once('../Icon.php');

class IconMoodWink extends Icon {
    public static function getName(): string {
        return 'mood-wink';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M15 10h.01" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />   <path d="M8.5 8.5l1.5 1.5l-1.5 1.5" />
        SVG;
    }
}