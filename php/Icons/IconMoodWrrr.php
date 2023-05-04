<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodWrrr extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-wrrr';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M8 16l1 -1l1.5 1l1.5 -1l1.5 1l1.5 -1l1 1" />   <path d="M8.5 11.5l1.5 -1.5l-1.5 -1.5" />   <path d="M15.5 11.5l-1.5 -1.5l1.5 -1.5" />
        SVG;
    }
}