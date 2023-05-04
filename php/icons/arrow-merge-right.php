<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowMergeRight extends Icon {
    public static function getName(): string {
        return 'arrow-merge-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 8l-4 -4l-4 4" />   <path d="M12 20v-16" />   <path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" />
        SVG;
    }
}