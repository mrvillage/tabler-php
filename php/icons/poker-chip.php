<?php
require_once(__DIR__ . '/../Icon.php');

class IconPokerChip extends Icon {
    public static function getName(): string {
        return 'poker-chip';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M12 3v4" />   <path d="M12 17v4" />   <path d="M3 12h4" />   <path d="M17 12h4" />   <path d="M18.364 5.636l-2.828 2.828" />   <path d="M8.464 15.536l-2.828 2.828" />   <path d="M5.636 5.636l2.828 2.828" />   <path d="M15.536 15.536l2.828 2.828" />
        SVG;
    }
}