<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowMergeLeft extends Icon {
    public static function getName(): string {
        return 'arrow-merge-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8l4 -4l4 4" />   <path d="M12 20v-16" />   <path d="M6 18c4 -1.333 6 -4.667 6 -10" />
        SVG;
    }
}