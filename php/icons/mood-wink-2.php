<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodWink2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-wink-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M9 10h-.01" />   <path d="M14.5 15a3.5 3.5 0 0 1 -5 0" />   <path d="M15.5 8.5l-1.5 1.5l1.5 1.5" />
        SVG;
    }
}