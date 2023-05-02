<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowDownLeftCircle extends Icon {
    public static function getName(): string {
        return 'arrow-down-left-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.536 8.464l-9.536 9.536" />   <path d="M6 14v4h4" />   <path d="M15.586 8.414a2 2 0 1 0 2.828 -2.828a2 2 0 0 0 -2.828 2.828" />
        SVG;
    }
}