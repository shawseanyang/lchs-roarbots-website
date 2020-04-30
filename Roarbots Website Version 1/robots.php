<!doctype html>
    <html lang="en">
        <head>
            <!-- META -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Lake Creek High School VEX Robotics Team 2854">
            <meta name="keywords" content="Lake, Creek, High, School, VEX, Robotics, 2854">
            <title>2854 Roarbots</title>
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

            <!-- Stylesheets -->
            
            <!-- font awesome icons -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <!-- variables -->
            <link rel="stylesheet" type="text/css" href="styles/variables.css">
            <!-- classes -->
            <link rel="stylesheet" type="text/css" href="styles/classes.css">

            <style>
            </style>
            <script>
                // on window scroll
                window.onscroll = function() {NavBarScrollFunction();};
            </script>
        </head>
        <body>
            <div class="page-header" style="background-image:url('images/xray-competing1.jpg');">
                <p class="title text-white">
                    Our Robots
                </p>
                <p class="subtitle text-white">
                    <span class="avoid-wrapping">Or Should We Say</span>, Roarbots!
                </p>
            </div>
            <?php include "navbar.php" ?>
            <div class="page-body">
                <div class="table-of-contents">
                    <p class="toc-item">
                        <a class="link" href="#what-is-vex-vrc">
                            What is VEX VRC?
                        </a>
                    </p>
                    <p class="toc-item">
                        <a class="link" href="#game-analysis">
                            Game Analysis
                        </a>
                    </p>
                    <p class="toc-item">
                        <a class="link" href="#current-robots">
                            Current Robots
                        </a>
                    </p>
                    <p class="toc-item">
                        <a class="link" href="#past-robots">
                            Past Robots
                        </a>
                    </p>
                    <p class="toc-item">
                        <a class="link" href="#code">
                            Code Repository
                        </a>
                    </p>
                </div>
                <div class="container container-white">
                    <a class="bookmark" id="what-is-vex-vrc"></a>
                    <p class="title text-center">What is VEX VRC?</p>
                    <p class="subtitle text-center">The Premiere International High School Robotics Competition</p>
                         The VEX Robotics Competition (VRC) is organized by the REC (Robotics Education Competition) Foundation. High school students are tasked with designing and building a robot to compete against other teams in a yearly, game-based engineering challenge. Through the design process, we hone our teamwork, communication, and technical skills.
                    <div class="flex-row-stretch">
                        <a class="button" href="https://www.vexrobotics.com/vexedr/competition">
                            VEX VRC Official Site
                        </a>
                    </div>
                </div>
                <div class="container container-blue slant-blue-left">
                    <a class="bookmark" id="game-analysis"></a>
                    <p class="title">Our Game Strategy: Impose a Scarcity of Cubes</p>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="subtitle">2019-20 Tower Takeover Game</p>
                            This year's game is all about stacking and dunking. Two alliances of red and blue, consisting of two teams each, compete in 15-second autonomous and 1-minute, 45-second driver-controlled periods. Points are gained by stacking colored cubes in the goals on the corners of the field and cubes that are dunked in the towers multiply the stacked points. 
                        </div>
                        <div class="image-medium">
                            <img src="images/tower-takeover-field.png" alt="image">
                            <fig-caption>
                                Image credit: <a class="link" href="https://www.vexrobotics.com/tt-fullfield.html">VEX Robotics website</a>
                            </caption>
                        </div>
                    </div>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="subtitle">The Winning Numbers</p>
                            Since there are only <span class="bold">66 cubes</span> on the field, our strategy is to stack cubes of any color as quickly as possible to <span class="bold">impose a scarcity of cubes</span> on the opposing alliance. During autonomous, our preprogrammed routine stacks <span class="bold">10 cubes</span>. During the first few seconds of the driver period, our driver will stack <span class="bold">another 10 cubes</span> or hold them inside the robot. Since there are two teams each alliance, that is <span class="bold">10*2</span> (autonomous) <span class="bold">+ 10*2</span> (beginning of driver) <span class="bold">= 40 cubes</span>. By <span class="bold">hoarding</span> the cubes, this strategy leaves the opposing team only <span class="bold">26 (66-40) cubes</span> shortly after the beginning of the driver period. This dearth deprives them of the ability to create tall stacks. In the remainder of the driver period, we use our arms to wrestle control of the dunking towers and secure or prevent multipliers. To gather more cubes faster than the other alliance, <span class="bold">speed is key</span>.
                        </div>
                    </div>
                </div>
                <div class="container container-gray slant-gray-right">
                    <div class="flex-row-center">
                        <div class="image-medium">
                            <img src="images/lift-detail.jpg" alt="image">
                            <fig-caption>The high gear-ratio ramp lift system on the Yankee bot</caption>
                        </div>
                        <div class="column">
                            <p class="title">As Swift as a Lionness</p>
                            With the need for speed, we have optimized the components of our robots: 
                            <ul>
                                <li>Omniwheel drive bases for immediate, on-spot turning</li>
                                <li>(The Team Zulu bot even has an X-drive base for omnidirectional strafing)</li>
                                <li>Three-layer to (on the newest editions of the bots) four-layer folding ramps that can hoard or stack a maximum of 10 cubes</li>
                                <li>Folding wheelies that extend out of the back of the bots to ensure stability while holding large stacks and moving quickly</li>
                                <li>Ramp lifting gear trains with the highest gear-ratio possible to power the high torque lifting arm that places stacks down</li>
                                <li>Dual layer sprocket chains on the intakes for strength, reliability, and speedy cube intaking</li>
                                <li>Reinforced arms to lift blocks up to the mid-height towers</li>
                                <li>New v5 motors loaded with an 18:1 gear ratio</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container container-light-gray slant-light-gray-left">
                    <a class="bookmark" id="current-robots"></a>
                    <div class="flex-row-stretch">
                        <div class="column">
                            <p class="title">Current Robots</p>
                            Our X-Ray, Yankee, and Zulu Roarbot teams have constructed, revised, and improved their designs for the Tower Takeover season game. 
                        </div>
                    </div>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">X-Ray III</p>
                            The folding and nesting 3-layer ramp enables us to stack 8 cubes currently and — with the addition of a fourth nesting layer — 10 cubes total. With our larger base we can easily block smaller opponents.
                        </div>
                        <div class="image-medium">
                            <img src="images/xray-stack.jpg" alt="image">
                            <fig-caption>X-Ray bot during practice with cubes on the ramp</caption>
                        </div>
                    </div>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">Yankee II</p>
                            Our smaller base gives us more agility navigating around cubes and our folding intakes allow the robot to fold up at the start of each round to stay within the size parameters.
                        </div>
                        <div class="image-medium">
                            <img src="images/yankee-bot.jpg" alt="image">
                            <fig-caption>Yankee bot in the workshop</caption>
                        </div>
                    </div>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">Zulu II</p>
                            The unique x-drive base allows us to strafe easily in any direction, facilitating easy stacking and navigation.
                        </div>
                        <div class="image-medium">
                            <img src="images/zulu-bot.jpg" alt="image">
                            <fig-caption>Zulu bot with two Zulu Team roarboticists</caption>
                        </div>
                    </div>
                </div>
                <div class="container container-gold slant-gold-right">
                    <a class="bookmark" id="past-robots"></a>
                    <div class="flex-row-stretch">
                        <div class="column">
                            <p class="title">Past Robots</p>
                            Last season, we had two registered teams, Alpha and Beta. The Beta team competed at the World Championships playing the 2018-19 game, Turning Point, where two alliances compete to flip flags, turn caps, and mount the center platform.
                        </div>
                    </div>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">Alpha & Beta</p>
                            The Alpha and Beta robots were equiped with robust, six-wheel drive-bases to easily conquer the center platform, flexible intakes to retrieve spheres, punch-shooters to flip flags with launched spheres, and arms to overturn caps.
                        </div>
                        <div class="image-medium">
                            <img src="images/regionals.jpg" alt="image">
                            <fig-caption>Alpha bot holding the center platform during a Turning Point round</caption>
                        </div>
                    </div>
                </div>
                <div class="container container-gray slant-gray-left">
                    <a class="bookmark" id="code"></a>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">Dancing To The Direction of Code</p>
                            <p class="subtitle">Making Things Move</p>
                            A robot without programming is a lion without claws. That's why our software team develops code in close conjunction with our mechanics. We pride ourselves on scalable, readable, and efficient programs that sense their environment and respond accordingly. During the autonomous period, the code is king, directing all robot movements with PID controllers and odometry. During the driver-controlled period, the driver is assisted with pre-programmed commands to streamline the operation of the robot by lessening their mental burden and improving accuracy.
                            <a class="button" href="https://github.com/shawseanyang/lchs-roarbots">
                                Github Repository
                            </a>
                        </div>
                        <div class="image-medium">
                            <img src="images/code.jpg" alt="image">
                            <fig-caption>A section of X-Ray III bot's autocorrecting linear movement code</caption>
                        </div>
                    </div>
                </div>
                <div class="container container-white">
                    <a class="button" href="/outreach.php">
                        Next Up: Our Outreach Connections
                    </a>
                </div>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>