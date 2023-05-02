<?php
require_once(__DIR__ . '../Icon.php');

class IconSquareRoundedChevronUp extends Icon {
    public static function getName(): string {
        return 'square-rounded-chevron-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 13l3 -3l3 3" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}