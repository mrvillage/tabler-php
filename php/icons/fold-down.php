<?php
require_once(__DIR__ . '/../Icon.php');

class IconFoldDown extends Icon {
    public static function getName(): string {
        return 'fold-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 11v8l3 -3m-6 0l3 3" />   <path d="M9 7l1 0" />   <path d="M14 7l1 0" />   <path d="M19 7l1 0" />   <path d="M4 7l1 0" />
        SVG;
    }
}