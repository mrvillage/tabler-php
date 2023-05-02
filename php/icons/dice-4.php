<?php
require_once('../Icon.php');

class IconDice4 extends Icon {
    public static function getName(): string {
        return 'dice-4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <circle cx="8.5" cy="8.5" r=".5" fill="currentColor" />   <circle cx="15.5" cy="8.5" r=".5" fill="currentColor" />   <circle cx="15.5" cy="15.5" r=".5" fill="currentColor" />   <circle cx="8.5" cy="15.5" r=".5" fill="currentColor" />
        SVG;
    }
}