<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDna2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'dna-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3v1c-.01 3.352 -1.68 6.023 -5.008 8.014c-3.328 1.99 3.336 -2 .008 -.014c-3.328 1.99 -5 4.662 -5.008 8.014v1" />   <path d="M17 21.014v-1c-.01 -3.352 -1.68 -6.023 -5.008 -8.014c-3.328 -1.99 3.336 2 .008 .014c-3.328 -1.991 -5 -4.662 -5.008 -8.014v-1" />   <path d="M7 4h10" />   <path d="M7 20h10" />   <path d="M8 8h8" />   <path d="M8 16h8" />
        SVG;
    }
}