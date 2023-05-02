<?php
require_once(__DIR__ . '/../Icon.php');

class IconTicTac extends Icon {
    public static function getName(): string {
        return 'tic-tac';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M3 12h18" />   <path d="M12 3v18" />   <path d="M4 16l4 4" />   <path d="M4 20l4 -4" />   <path d="M16 4l4 4" />   <path d="M16 8l4 -4" />   <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}