<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowUpTail extends Icon {
    public static function getName(): string {
        return 'arrow-up-tail';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18l0 -15" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M15 21l-3 -3l-3 3" />
        SVG;
    }
}