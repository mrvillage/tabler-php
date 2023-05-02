<?php
require_once(__DIR__ . '../Icon.php');

class IconDna extends Icon {
    public static function getName(): string {
        return 'dna';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z" />   <path d="M9.172 20.485a4 4 0 1 0 -5.657 -5.657" />   <path d="M14.828 3.515a4 4 0 0 0 5.657 5.657" />
        SVG;
    }
}