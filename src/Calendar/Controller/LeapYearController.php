<?php
// example.com/src/Calendar/Controller/LeapYearController.php
namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;

class LeapYearController
{
    public function indexAction(Request $request, $year)
    {
        $leapyear = new LeapYear();
        if ($leapyear->is_leap_year($year)) {
            $response = new Response('Yep, this is a leap year!');
        } else {
          $response = new Response('Nope, this is not a leap year.');
        }

        return $response;
    }
}
