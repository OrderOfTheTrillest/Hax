<?php
return (object) array(
    "crow" => (object) array(
        "players" => array(
            "Eddie Betts" => (object) array(
                "kickMajor" => function () {
                    if (!isset($goal)) {
                        $goal = (int) 6;
                    }
                    return $goal;
                }
            ),
            "Sam Jacobs" => (object) array(
                "alias" => "The Big Sauce",
                "ruck" => ruck(
                    new class
                    {
                        public $hitouts;
                        public function __construct()
                        {
                            echo "You built a new Sauce!<br>";
                            $this->hitouts = (int) 0;
                        }

                        public function hitoutToAdvantage()
                        {
                            echo "Big Sauce fed Sloaney 
                            like a five star resturant.<br>";
                            $this->hitouts++;
                        }
                    }
                )
            ),
            "Rory Sloane" => (object) array(
                "tagHim" => function ($tagged = false) {
                    $disposals = (int) 30;
                    if ($tagged === true) {
                        $disposals - 25;
                    }
                    return $disposals;
                }

            ),
            "Tex" => tex(
                new class
                {
                    public const CAPTAIN = true;

                    public static function goalAssist()
                    {
                        echo "Eddie snaps from the boundary!<br>";
                    }
                }
            )
        ),
        "past" => array(
            "Modra" => function ($bag) {
                if (is_int($bag) && $bag > 7) {
                    echo "A true bag<br>";
                } else {
                    echo "That's not a real bag!";
                }
            },
            "Andrew Mcleod" => (object) array(
                "fightLleyton" => function () {
                    if (isset($lleyton)) {
                        unset($lleyton);
                        echo "You have defeated Lleyton!<br>";
                    } else {
                        echo "Lleyton has already been defeated!<br>";
                    }
                },
                "norms" => (int) 2
            )

        )
    ),
    "lion" => (object) array(
        "players" => array(
            "Zorko" => function () {
                echo "Zorko'd!<br>";
                return (bool) true;
            },
            "Daniel Rich" => (object) array(
                "risingStar" => (bool) true,
                "brokenLeg" => (string) "Not anymore"
            ),
            "Lewis Taylor" => (object) array(
                "position" => (string) "Dunno"
            ),
            "Dayne Beams" => function ($na_pre = "Da", $na_suf = "ne") {
                $name = (string) $na_pre."y".$na_suf;
                return $name;
            }
        )
    ),
    "blue" => (object) array(
        "players" => array(
            "Levi Casboult" => (object) array(
                "mitts" => function () {
                    echo "Grabbed it with sure mitts!<br>";
                }
            ),
            "Ed Curnow" => (object) array(
                "grab" => function () {
                    if (!isset($grabs)) {
                        $grabs = (string) "many";
                    }
                    return $grabs;
                },
                "haveBrother" => (bool) true
            ),
            "Bryce Gibbs" => (object) array(
                "goToAdelaide" => function () {
                    $traded = (bool) false;
                    return $traded;
                }
            )
        ),
        "past" => array(
            "Sticks" => function () {
                echo "Sticks kicks it through the sticks<br>";
            },
            "Craig Bradley" => (object) array(
                "age" => function ($age = 50000) {
                    if (is_int($age) && $age < 50000) {
                        $age = (int) 50000;
                        echo "Age must be accurate";
                    }
                    return $age;
                }
            ),
            "Jezza" => function () {
                echo "Jezza you are beauty<br>";
            }
        )
    ),
    "pie" => (object) array(
        "players" => array(
            "Pendlebury" => captain(
                new class{
                    public $normSmith = 2010;
                    public const MEDIA_PENDLES = "I support Nathan Buckley";
                }
            ),
            "DeGoey" => function () {
                $hand = (bool) true;
                echo "I played with my dog ";
                $hand = (bool) false;
                echo "but then I had too many drinks<br>";
                return $hand;
            },
            "Travis Cloke's Ghost" => (object) array(
                "theDream" => (int) 2008
            ),
            "Brodie Grundy" => function () {
                if (!isset($manbun)) {
                    $manbun = (bool) true;
                }
                return $manbun;
            }

        ),
        "Eddie" => McGuire(
            new class
            {
                public function __construct()
                {

                }
                public function giveQuest()
                {
                    echo "Who wants to be the millionaire?<br>";
                }
                public function tuneIn()
                {
                    echo "Adam Goodes is a King Kong<br>";
                }
            }
        ),
        "Bucks" => (object) array(
            "hof" => (bool) true,
            "coach" => (bool) true,
            "bucks" => (bool) true,
            "premiership" => (bool) false,
            "notes" => (string) "Bucks"
        )
    ),
    "bomber" => (object) array(
        "asada" => function () {
            if (isset($bombers)) {
                echo "Not anymore!<br>";
                unset($bombers);
            }
        },
        "players" => array(
            "Joe Danniher" => (object) array(
                "goals" => function ($bag = 7) {
                    $goals = (int) 0;
                    while ($goals >= $bag) {
                        $goals++;
                    }
                    return $goals;
                }
            ),
            "Jobe Watson" => (object) array(
                "love" => (bool) false,
                "retire" => function () {
                    echo "I broke up with my girlfriend";
                },
                "brownlow" => function () {
                    $winner = (bool) true;
                    echo "Whoops<br>";
                    unset($winner);
                }
            )
        ),
        "Hirdy" => function () {
            echo "It wasn't me<br>";
        },
        "Sheedy" => function () {
            echo "Kangaroos are marshmallows<br>";
        }
    ),
    "docker" => (object) array(
        "players" => array(
            "Mundy" => function() {
                echo "I love Bono<br>";
            },
            "Sandilands" => (object) array(
                "weight" => (int) 40000,
                "height" => (int) 40000,
                "hitouts" => (int) 40000
            ),
            "Nat Fyfe" => (object) array(
                "winBrownlow" => function () {
                    $leg = (bool) false;
                }
            )
        ),
        "Pavlich" => function () {
            $dockers = (bool) true;
            if (empty($pavlich)) {
                unset($dockers);
            }
        }
    )

);
