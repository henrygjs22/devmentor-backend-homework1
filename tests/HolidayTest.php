<?php

namespace Tests;

use DateTime;
use App\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    public function test_today_is_not_xmas() //會自動抓test開頭
    {
        $holiday = new class extends Holiday {            
            protected function getDateTime()
            {
                return new DateTime('2023-12-05');
            }
        };
        $actual = $holiday->say();
        $expected = "Today is not X'mas";
        $this->assertEquals($expected, $actual);
    }

    public function test_today_is_xmas()
    {
        $holiday = new class extends Holiday {            
            protected function getDateTime()
            {
                return new DateTime('2023-12-25');
            }
        };
        $actual = $holiday->say();
        $expected = "Merry X'mas";
        $this->assertEquals($expected, $actual);
    }
}