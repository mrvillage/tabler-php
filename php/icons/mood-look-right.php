<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodLookRight extends Tabler\Icon {
    public static function getName(): string {
        return 'mood-look-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M15 9h-.01" />   <path d="M20 15h-4" />
        SVG;
    }
}