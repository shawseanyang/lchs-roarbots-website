<!doctype html>
    <html lang="en">
        <head>
            <!-- META -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Team 2854 Roarbots, Lake Creek High School VEX Robotics Organization">
            <meta name="keywords" content="Roarbots, Lake, Creek, High, School, VEX, Robotics, 2854">
            <title>2854 Roarbots</title>
            
            <!-- favicon -->
            <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">

            <!-- image thumbnails -->
            <meta property="og:image" content="http://roarbots.org/images/roarbots-logo.png">
            <meta property="og:image:type" content="image/png">
            <meta property="og:image:width" content="1024">
            <meta property="og:image:height" content="1024">

            <!-- Stylesheets -->
            
            <!-- font awesome icons -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <!-- variables -->
            <link rel="stylesheet" type="text/css" href="styles/variables.css">
            <!-- classes -->
            <link rel="stylesheet" type="text/css" href="styles/classes.css">

            <style>
                .page-header::before {
                    display:none;
                }
                #header-background {
                    content:"";
                    position: absolute;
                    top: 0; 
                    left: 0;
                    width: 100%; 
                    height: 100%;  
                    opacity: 0; 
                    z-index: 1;
                    transition:var(--long-transition-time);
                    background-image: url("/images/worlds-team.jpg");
                    background-attachment:fixed;
                    background-position:top center;
                    background-repeat:no-repeat;
                    background-size:cover;
                }
                #header-background::before {
                    display:none;
                }
                
                @media screen and (max-width: 1000px), (orientation:portrait) { /* Phones */
                    #header-background {
                        background-imaage:none;
                    }
                    #header-background::before {
                        content: "";
                        display: block;
                        position: fixed;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        z-index: -10;
                        background-image: url(images/worlds-team.jpg);
                        background-attachment:scroll;
                        background-position:top center;
                        background-repeat:no-repeat;
                        background-size: cover;
                    }
                }
            </style>
            <script>
                // on window scroll
                window.onscroll = function() {runParallax(); NavBarScrollFunction();};
            
                // Parallax
                function runParallax() {
                    var scroll = window.pageYOffset;
                    var height = document.documentElement.clientHeight;
                    var percentvh = scroll / height;
                    var parallaxElement = document.getElementById("header-background");
                
                    if (scroll < 1*height) { //while the screen hasnt been scrolled for more than 1 vh
                        parallaxElement.style.opacity = percentvh*4;
                    }  
                }
            </script>
        </head>
        <body>
            <div class="page-header container-light-gray">
                <div id="header-background"></div>
                <div class="title text-white" style="z-index:2">
                    <span class="avoid-wrapping text-gold">2854</span><span class="avoid-wrapping text-blue"><span class="avoid-wrapping">Roar</span><span class="avoid-wrapping">bots</span></span>
                </div>
                <div class="subtitle text-gray" style="z-index:2">
                    <span class="avoid-wrapping"><span class="avoid-wrapping">Lake Creek</span> <span class="avoid-wrapping">High School</span>
                </div>
            </div>
            <?php include "navbar.php" ?>
            <div class="page-body">
                <div class="container container-white">
                    <a class="bookmark" id="who-we-are"></a>
                    <p class="title text-center">Roar! We are Team 2854, the Roarbots!</p>
                    The internationally-recognized robotics organization of Lake Creek High School from Houston, Texas. As a diverse but tight-knit team of high-schoolers, we compete in the <a class="link" href="#what-is-vex">VEX Robotics</a> Competition and encourage STEM education in the next generation through our <a class="link" href="outreach.php#rookie-roarboticists">Rookie Roarboticists</a> program. This is our second season as a program, growing from 10 members and two teams to 32 members and five teams. Having been to the VEX World Championships last year, our sights are set on returning!
                    <div class="flex-row-stretch">
                        <a class="button" href="/about.php">
                            The Team, Our Pride
                        </a>
                    </div>
                </div>
                <div class="container container-blue slant-blue-right">
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title"><span class="avoid-wrapping">Founded in 2018</p>
                            <p class="subtitle">we dreamed big right from the start</p>
                                We started with no experience, no materials, but lots of motivation. In our inaugural season, we clawed our way to the top, earning a spot at the VEX World Championships. Now we are entering our second successful season.
                            <a class="button" href="/story.php">
                                More About Our Story
                            </a>
                        </div>
                        <div class="image-medium">
                            <img src="images/worlds-team.jpg" alt="image">
                            <fig-caption>At the VEX World Championships</caption>
                        </div>
                    </div>
                </div>
                <div class="container container-gray slant-gray-left">
                    <a class="bookmark" id="what-is-vex"></a>
                    <div class="flex-row-center">
                        <div class="image-medium">
                            <img src="images/team-full.jpg" alt="image">
                            <fig-caption>The Roarbots team, or as we like to call it, our Roarboticists! <a class="link" href="about.php">Learn more about each Roarboticist</a></caption>
                        </div>
                        <div class="column">
                            <p class="title"><span class="avoid-wrapping">What is VEX VRC?</p>
                                An international robotics competition where high school students are tasked with designing and building a robot to compete against other teams in a yearly, game-based engineering challenge. Through the design process, we hone our teamwork, communication, and technical skills.
                            <a class="button" href="https://www.vexrobotics.com/vexedr/competition">
                                VEX Official Site
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container container-light-gray slant-light-gray-right">
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title"><span class="avoid-wrapping">The Game:</span> <span class="avoid-wrapping">Tower Takeover</span></p>
                            <p class="subtitle">2019-20 VEX Competition</p>
                                This year's game is all about stacking and dunking. Two alliances of red and blue, consisting of two teams each, compete in 15-second autonomous and 1-minute, 45-second driver-controlled periods. Points are gained by stacking colored cubes in the goals on the corners of the field and cubes that are dunked in the towers multiply the stacked points. Our strategy is to stack cubes of any color as quickly as possible to impose a scarcity of cubes on the opposing alliance.
                            <a class="button" href="/robots.php#game-analysis">
                                Game Analysis & Strategy
                            </a>
                        </div>
                        <div class="image-medium">
                            <img src="images/tower-takeover-field.png" alt="image">
                            <fig-caption>
                                The arena setup for this year's game, Tower Takeover. 
                                <br>
                                Image credit: <a class="link" href="https://www.vexrobotics.com/tt-fullfield.html">VEX Robotics website</a>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class="container container-blue slant-blue-left">
                    <div class="flex-row-stretch">
                        <div class="column">
                            <p class="title">Our Robots</p>
                            To implement our strategy for speed, we've optimized this year's robots for agility and maneuverability — light aluminum frames, omnidirectional wheels, and code-assisted driver controls make our bots as swift as a lioness. The robots share the basic elements of an intake to recieve cubes, mounted on a movable arm for dunking, an extending ramp to hold stacks, and a lifting system to place stacks in the goals. With each robot going through many editions, our mechanical team envisions, prototypes, and iterates designs to improve efficiency and function.
                        </div>
                    </div>
                    <div class="flex-row-stretch flex-allow-wrap text-center">
                        <div class="column">
                            <div class="image-small">
                                <img src="images/xray-stack.jpg" alt="image">
                                <fig-caption>X-Ray III, one of the 2019-20 season robots</caption>
                            </div>
                        </div>
                        <div class="column">
                            <div class="image-small">
                                <img src="images/beta-bot.jpg" alt="image">
                                <fig-caption>Beta II, the 2018-19 world championships robot</caption>
                            </div>
                        </div>
                    </div>
                    <a class="button" href="/robots.php">
                        See All Robots
                    </a>
                </div>
                <div class="container container-gold slant-gold-right">
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
                <div class="container container-white slant-white-left">
                    <div class="flex-row-center">
                        <div class="image-medium">
                            <img src="images/oakhills.jpg" alt="image">
                            <fig-caption>Oak Hills Junior High, one of our outreach locations</caption>
                        </div>
                        <div class="column">
                            <p class="title">Connecting With The Community</p>
                            <p class="subtitle">Outreach, Mentorship, & Training</p>
                                The circle of life, it moves us all. Through our <a class="link" href="/outreach.php#rookie-roarboticists">"Rookie Roarboticists"</a> training program, we mentor lowerclassmen in the magic of robotics, preparing the next generation of Roarboticists! Extending a paw to our cubs, we have several upcoming events lined up to speak, present, and inspire at our middle school campuses.
                            <a class="button" href="/outreach.php">
                                Explore Our Connections
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container container-gray slant-gray-right">
                    <a class="bookmark" id="thank-you"></a>
                    <div class="flex-row-center">
                        <div class="column">
                            <p class="title">A Special Thank You &#128153</p>
                            <p class="subtitle">To our teachers, mentors, sponsors, and our school</p>
                            <p>
                                To <span class="bold">Mr. Phil Eaton</span>, our principal, for his warm generosity in always doing what’s best for his students, funding our robotics program, and reminding us that, “It's a great day to be a Lake Creek Lion.”
                            </p>
                            <p>
                                To <span class="bold">Mr. David Herman</span>, our PLTW engineering mentor, for his steadfast commitment to our education and for always cheering us on at competitions.
                            </p>
                            <p>
                                To all our <span class="bold">Lake Creek High School faculty</span>, for training us in the foundational skills that we use everyday in the workshop and on the competition field.
                            </p>
                            <p>
                                To our school, <span class="bold">Lake Creek High School</span>, for providing us the workspace, technical tools, and computers to implement our visions for success into reality.
                            </p>
                            <p>
                                To the <span class="bold">REC (Robotics Education Competition) Foundation</span>, for organizing the VEX Robotics Competition and enabling us to apply our skills to real design challenges.
                            </p>
                            <p>
                                To <span class="bold">First Financial Bank and Buckalew Chevrolet</span>, for donating the funds we need to acquire the materials we use in bringing our robots to life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container container-blue slant-blue-left">
                    <div class="flex-row-center">
                        <div class="column">
                            <p>
                                <p class="title">But most of all, thank you Mr. Moons</p>
                                Our program mentor and coach — <span class="italic">and robotics teacher and computer science teacher and everything in between</span> — for all his crazy hard work in making sure we have the resources we need to <span class="italic">roar!</span> Through thick and thin, he has inspired and taught us how to quickly analyze a situation, address the circumstances, and respond with the most effective decision. We wouldn’t be here as the Lake Creek Roarbots without him.
                            </p>
                        </div>
                        <div class="image-medium">
                            <img src="images/team-field2.jpg" alt="image">
                            <fig-caption>Thanks, from the whole team!</caption>
                        </div>
                    </div>
                </div>
                <div class="container container-white slant-white-right">
                    <a class="button" href="/about.php">
                        Next Up: The Team
                    </a>
                </div>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>