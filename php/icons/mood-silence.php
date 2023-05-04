<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodSilence extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-silence';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M9 10h-.01" />   <path d="M15 10h-.01" />   <path d="M8 15h8" />   <path d="M9 14v2" />   <path d="M12 14v2" />   <path d="M15 14v2" />
        SVG;
    }
}