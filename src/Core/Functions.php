<?php

namespace Core;

use DateTime;

class Functions {


    function getStartAndEndDate($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('Y-m-d');
        $dto->modify('+7 days');
        $ret['week_end'] = $dto->format('Y-m-d');
        return $ret;
    }
    

    static function dureeSecToTime($time) {
        $tabTemps = array("j" => 86400,
            "h" => 3600,
            "m" => 60,
            "s" => 1);
        $result = "";
        foreach ($tabTemps as $uniteTemps => $nombreSecondesDansUnite) {
            $$uniteTemps = floor($time / $nombreSecondesDansUnite);
            $time = $time % $nombreSecondesDansUnite;
            if ($$uniteTemps > 0 || !empty($result))
                $result .= $$uniteTemps . "$uniteTemps ";
        }
        return $result;
    }

    /**
     * retournera un tableau des jours fériés en France
     * 
     * @param in $year
     * @return array
     */
    static function getHolidays($year = null) {
        if ($year === null) {
            $year = intval(date('Y'));
        }
        date_default_timezone_set('Europe/Paris');
        $easterDate = easter_date($year);
        $easterDay = date('j', $easterDate);
        $easterMonth = date('n', $easterDate);
        $easterYear = date('Y', $easterDate);

        $holidays = array(
            // Dates fixes
            date('Y-m-j', mktime(0, 0, 0, 1, 01, $year)), // 1er janvier
            date('Y-m-j', mktime(0, 0, 0, 5, 01, $year)), // Fête du travail
            date('Y-m-j', mktime(0, 0, 0, 5, 08, $year)), // Victoire des alliés
            date('Y-m-j', mktime(0, 0, 0, 7, 14, $year)), // Fête nationale
            date('Y-m-j', mktime(0, 0, 0, 8, 15, $year)), // Assomption
            date('Y-m-j', mktime(0, 0, 0, 11, 01, $year)), // Toussaint
            date('Y-m-j', mktime(0, 0, 0, 11, 11, $year)), // Armistice
            date('Y-m-j', mktime(0, 0, 0, 12, 25, $year)), // Noel
            // Dates variables
            date('Y-m-j', mktime(0, 0, 0, $easterMonth, $easterDay + 1, $easterYear)), //Lundi de Pâques
            date('Y-m-j', mktime(0, 0, 0, $easterMonth, $easterDay + 39, $easterYear)), //Jeudi de l'Ascension
            date('Y-m-j', mktime(0, 0, 0, $easterMonth, $easterDay + 50, $easterYear)), //Lundi de Pentecôte
        );

        sort($holidays);

        return $holidays;
    }
    
    /**
     * 
     * @param string $phoneNumber
     * @param bool $international
     * @return type
     */
    static function formatFrenchPhoneNumber($phoneNumber, $international = false) {
	$phoneNumber = preg_replace('/[^0-9]+/', '', $phoneNumber);
	$phoneNumber = substr($phoneNumber, -9);
	$motif = $international ? '+33 (\1) \2 \3 \4 \5' : '0\1 \2 \3 \4 \5';
	$phoneNumber = preg_replace('/(\d{1})(\d{2})(\d{2})(\d{2})(\d{2})/', $motif, $phoneNumber);
	return $phoneNumber;
    }

}
