<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodTongueWink2 extends Tabler\Icon {
    public static function getName(): string {
        return 'mood-tongue-wink-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M15 10h-.01" />   <path d="M10 14v2a2 2 0 1 0 4 0v-2m1.5 0h-7" />   <path d="M7 10c.5 -1 2.5 -1 3 0" />
        SVG;
    }
}