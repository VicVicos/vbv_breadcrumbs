<?php
/**
 * Активация и деактивация плагина NdlBooking
 */
class BreadcrumbsAction
{
    /**
     * Активация плагина
     * @return bool
     */
    static function BreadcrumbsActivate ()
    {
        return true;
    }
    /**
     * Деактивация плагина
     * @return bool
     */
    static function BreadcrumbsDeactivate ()
    {
        return true;
    }
}