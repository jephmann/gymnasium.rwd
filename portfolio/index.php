<?php
    
    class Portfolio {
        
        public $name_first  = NULL;
        public $name_middle = NULL;
        public $name_last   = NULL;
        public $description = NULL;
        public $projects    = array();
        public $resume      = array();
        public $skillset    = array();
        
        function getName_first() {
            return $this->name_first;
        }

        function getName_middle() {
            return $this->name_middle;
        }

        function getName_last() {
            return $this->name_last;
        }

        function setName_first($name_first) {
            $this->name_first = $name_first;
        }

        function setName_middle($name_middle) {
            $this->name_middle = $name_middle;
        }

        function setName_last($name_last) {
            $this->name_last = $name_last;
        }
        
        function getDescription() {
            return $this->description;
        }

        function setDescription($description) {
            $this->description = $description;
        }
        
        function getProjects() {
            return $this->projects;
        }

        function getResume() {
            return $this->resume;
        }

        function getSkillset() {
            return $this->skillset;
        }

        function setProjects($projects) {
            $this->projects = $projects;
        }

        function setResume($resume) {
            $this->resume = $resume;
        }

        function setSkillset($skillset) {
            $this->skillset = $skillset;
        }
        
        public function name_full()
        {
            $name_full = NULL;
            if ($this->name_last) {
                $name_full = $this->name_last;
            }
            if ($this->name_middle) {
                $name_full = ("{$this->name_middle} {$name_full}");
            }
            if ($this->name_first) {
                $name_full = ("{$this->name_first} {$name_full}");
            }
            return trim($name_full);
        }
        
    }
    
    $projects = array(
        array(
            "title" => "Vitamin T Homepage",
            "image" => "vitamin-t.png"
        ),
        array(
            "title" => "RoboHead iPad App",
            "image" => "robohead.png"
        ),
        array(
            "title" => "Shareist Homepage",
            "image" => "shareist.png"
        ),
    );
    
    $resume = array(
        array(
            "when"          => "Currently",
            "what"          => "Designer/Developer",
            "where"         => "Self-employed",
            "description"   => "Design and development for a two-person studio in Boston, MA.
                    Clients include Boston Red Sox, Sam Adams and Aerosmith",
        ),
        array(
            "when"          => "Previously",
            "what"          => "Lead UI Designer",
            "where"         => "Aquent University",
            "description"   => "Lead designer and theme developer for AU's home-built CMS.
                    Worked with several other groups at the university as well.",
        ),
    );
    
    $skillset = array (
        "Photoshop, Fireworks and Illustrator",
        "HTML5 &amp; CSS3",
        "Responsive Web Design",
        "Mobile App (Native and Web) Design",
    );
    
    $objPortfolio = new Portfolio;
    $objPortfolio->name_first = "Jeffrey";
    $objPortfolio->name_middle = "Peter";
    $objPortfolio->name_last = "Hartmann";
    $objPortfolio->description = "A Chicago-based designer/developer hybrid with a passion for user experience and the web";
    $objPortfolio->projects = $projects;
    $objPortfolio->resume = $resume;
    $objPortfolio->skillset = $skillset;
            
?>

<!DOCTYPE html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if !IE]><html><![endif]-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $objPortfolio->name_full(); ?>'s portfolio</title>
        
        <!-- Viewport meta tag to prevent iPhone from scaling our page -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <link rel="stylesheet" href="./css/style.css"/>
        
        <!-- Normalize hide address bar for iOS and Android -->
        <script src="./js/hideaddressbar.js"></script>
		
        <!-- Add media query support for IE8 and under. Must place media queries in external stylesheet -->
        <script src=".js/respond.min.js"></script>
		
        <!-- Using picturefill to load conditional images and matchmedia to provide support for IE8 and below + older browsers -->
        <script src="js/picturefill.js"></script>
        <script src="js/matchmedia.js"></script>
        
        <!--[if lt IE 9]>
            <script src="./js/html5.js"></script>
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <![endif]-->

        <!--[if IE 8]>
            <script src="./js/checkbox.js"></script>
        <![endif]-->

        <!--[if IE 6]>
            <script src="./js/selectivizr-min.js"></script>
        <![endif]-->
        
    </head>
    
    <body lang="en">
        
        <div id="container-nav">
            <section id="nav" class="group wrapper">
                <h3><?php echo $objPortfolio->name_full(); ?></h3>
                <!-- Checkbox Hack markup -->
                <input type="checkbox" id="toggle" />
                <label for="toggle" onclick>Menu</label>
                <!-- /Checkbox Hack markup -->
                <nav>
                    <ul>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#resume">Resume</a></li>
                        <li><a href="./">LinkedIn Profile</a></li> <!-- No destination yet -->
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </section>
        </div>
        
        <div id="container-header">
            <header id="masthead" class="wrapper">
                <figure id="headshot"> <!-- formerly ID "maya" -->
                    <div data-picture data-alt="<?php echo $objPortfolio->name_full(); ?>">
                        <div data-src="img/headshot_me-s.jpg"></div>
                        <div data-src="img/headshot_me-m.jpg" data-media="(min-width: 45em)"></div>
                        <div data-src="img/headshot_me-l.jpg" data-media="(min-width: 60em)"></div>
                        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                        <noscript>
                            <img src="./img/headshot_me-s.jpg" alt="<?php echo $objPortfolio->name_full(); ?>">
                        </noscript>
                    </div>
                </figure>
                <h1>Hello, I am <?php echo $objPortfolio->name_first; ?></h1>
                <h2><?php echo $objPortfolio->description; ?></h2>
            </header>
        </div>
        
        <div id="container-content">
            <article id="content">
            
                <section id="portfolio" class="group">
                    <header class="wrapper">
                        <h3>My Portfolio</h3>
                        <p>Some of the things I've been working on lately</p>
                    </header>
                    <?php foreach($objPortfolio->projects as $project) : ?>
                    <article class="group wrapper">
                        <h4><?php echo $project["title"]; ?></h4>
                        <figure>
                            <img src="./img/<?php echo $project["image"]; ?>"
                                 alt="Screenshot of <?php echo $project["title"]; ?>"
                                 title="Screenshot of <?php echo $project["title"]; ?>">
                        </figure>
                    </article>
                    <?php endforeach; ?>
                </section>
            
                <section id="resume" class="group">
                    <header class="wrapper">
                        <h3>My Resume</h3>
                        <p>Current/previous positions and skill set</p>
                    </header>
                    <?php foreach ($objPortfolio->resume as $job) : ?>
                    <article class="wrapper">
                        <div class="box">
                            <h4><?php echo $job["when"]; ?></h4>
                            <h5><?php echo $job["what"]; ?></h5>
                            <h6><?php echo $job["where"]; ?></h6>
                            <p><?php echo $job["description"]; ?></p>                    
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <article class="wrapper">
                        <div class="box">
                            <h4>Skills</h4>
                            <ul>
                                <?php foreach ($objPortfolio->skillset as $skill) : ?>
                                <li><?php echo $skill ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                    <footer class="wrapper">
                        <p>For a full work history, have a look at my LinkedIn Profile</p>
                    </footer>
                </section>
            
            </article>
        </div>
        <div id="container-footer">
            <form id="contact">
                <fieldset class="wrapper">
                    <legend>Contact</legend>
                        <ul class="group">
                            <li class="name">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" />
                            </li>
                            <li class="email">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" />
                            </li>
                            <li class="message">
                                <label for="message">Say Hello</label>
                                <textarea id="message" name="message"></textarea>
                            </li>
                        </ul>
                    <input class="send" type="submit" name="submit" value="Send" />
                </fieldset>
            </form>
            <footer id="colorphon" class="wrapper">
                <p>
                    &copy; 2013-<?php echo date("Y") ?> all rights reserved.
                    Fill out a form here to get in touch.
                </p>
            </footer>
        </div>
    </body>
</html>
