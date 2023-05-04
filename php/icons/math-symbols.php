<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathSymbols extends Tabler\Icon {
    public static function getName(): string {
        return 'math-symbols';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l18 0" />   <path d="M12 3l0 18" />   <path d="M16.5 4.5l3 3" />   <path d="M19.5 4.5l-3 3" />   <path d="M6 4l0 4" />   <path d="M4 6l4 0" />   <path d="M18 16l.01 0" />   <path d="M18 20l.01 0" />   <path d="M4 18l4 0" />
        SVG;
    }
}