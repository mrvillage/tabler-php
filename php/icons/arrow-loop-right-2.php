<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowLoopRight2 extends Icon {
    public static function getName(): string {
        return 'arrow-loop-right-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21v-6m0 -6v-1a4 4 0 1 0 -4 4h13" />   <path d="M17 16l4 -4l-4 -4" />
        SVG;
    }
}