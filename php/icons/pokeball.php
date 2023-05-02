<?php
require_once('../Icon.php');

class IconPokeball extends Icon {
    public static function getName(): string {
        return 'pokeball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M3 12h6" />   <path d="M15 12h6" />
        SVG;
    }
}