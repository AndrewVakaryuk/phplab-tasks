<?php


use PHPUnit\Framework\TestCase;

class GetUniqueFirstLetterTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provideDataForGetUniqueFirstLetter
     */
    public function testGetUniqueFirstLetter($input, $expected){
    $this->assertEquals($expected, getUniqueFirstLetters($input));
    }
    public function provideDataForGetUniqueFirstLetter(){
        return [
            [[
                [
                "name" => "Albuquerque Sunport International Airport",
                "code" => "ABQ",
                "city" => "Albuquerque",
                "state" => "New Mexico",
                "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                "timezone" => "America/Los_Angeles",
            ],
            [
                "name" => "Washington Ronald Reagan National Airport",
                "code" => "DCA",
                "city" => "Washington - DCA",
                "state" => "Virginia",
                "address" => "Arlington, VA 22202, USA",
                "timezone" => "America/New_York",
            ],
            [
                "name" => "Denver International",
                "code" => "DEN",
                "city" => "Denver",
                "state" => "Colorado",
                "address" => "8500 Peña Blvd, Denver, CO 80249, USA",
                "timezone" => "America/Denver",
            ]],
            ['A', 'D', 'W']
            ],
        [
            [
                [
                    "name" => "Detroit Metro Airport",
                    "code" => "DTW",
                    "city" => "Detroit",
                    "state" => "Michigan",
                    "address" => "Detroit, MI 48242, USA",
                    "timezone" => "America/New_York",
                ],
                [
                    "name" => "Indianapolis International Airport",
                    "code" => "IND",
                    "city" => "Indianapolis",
                    "state" => "Indiana",
                    "address" => "7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241, USA",
                    "timezone" => "America/Indianapolis",
                ],
                [
                    "name" => "Las Vegas McCarran International Airport",
                    "code" => "LAS",
                    "city" => "Las Vegas",
                    "state" => "Nevada",
                    "address" => "5757 Wayne Newton Blvd, Las Vegas, NV 89119, USA",
                    "timezone" => "America/Los_Angeles",
                ]
            ],
            ['D', 'I', 'L']
        ]
        ];
    }
}
