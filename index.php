<?php
  $theme = $_COOKIE['theme'] === 'light' || $_COOKIE['theme'] === null;

  if(isset($_POST['theme'])){
    setcookie('theme', $_POST['theme']);
    $theme = $_POST['theme'] === 'light' || $_POST['theme'] === null;
  }

  $stylesheet = $theme ? 'main.css' : 'main-dark.css' ;
  $experienceBlockTextColor = $theme ? 'accent-text' : 'white-text';
  $pikaCardStyle = $theme ? 'blue-grey lighten-4' : 'grey darken-4';
  $pikaCardText = $theme ? 'grey-text text-darken-4' : 'white-text';
  $icon = !$theme ? 'wb_sunny' : 'brightness_2';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>me.site</title>
  <meta property="og:title" content=me.site />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://me.lukas-bownik.net/" />
  <meta property="og:description" content="Arkasian's Portfolio" />
  <meta property="og:image" content="https://me.lukas-bownik.net/img/claude_e_shannon.gif" />
  <meta name="theme-color" content="#607FBA">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/<?php echo $stylesheet ?>">
  <link rel="stylesheet" href="css/material-icons.css">
  <link type="text/plain" rel="author" href="humans.txt" />
  <link rel="stylesheet" href="css/materialize.min.css">
  <script src="js/vendor/materialize.min.js" defer></script>
  <script src="js/vendor/modernizr-3.7.1.min.js" defer></script>
  <script src="js/vendor/jquery-3.4.1.min.js" crossorigin="anonymous" defer></script>
  <script src="js/plugins.js" defer></script>
  <script src="js/site.js" defer></script>
</head>

<body  class="fullscreen">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<header>
  <div class="fullscreen-container">
    <div class="row">
      <div class="container center white-text">
        <h1>
          <a class="white-text">
            <img src="img/pikacloud.svg" alt="Pika Cloud" class="img-responsive img-fit hide-on-med-and-down"/>
            <img src="img/pikacloud.png" alt="Pika Portfolio" class="img-responsive img-fit hide-on-small-only hide-on-large-only grey-text" />
            <img src="img/pikacloud-phone.png" alt="Pika Portfolio" class="img-responsive img-fit hide-on-med-and-up grey-text" />
          </a>
        </h1>
      </div>
    </div>
  </div>
</header>
<main class="pt-5">
  <div class="row dark">
    <div class="center-align row white-text" style="padding-left: 35px; padding-right: 35px; padding-bottom: 15px;">
      <section class="col s12 m12 l12" id="aboutme">
        <div class="caption center-align light white-text">
          <h3>About me</h3>
        </div>
        <p class="container flow-text justify-text-block">
          Hi, I'm Arkasian - a young programmer from Poland passionate about IT who aims to work as a cloud system engineer working with Cloud Native development.
          <b class="accent-text">C#</b>, <b class="accent-text">php</b> and <b class="accent-text">Java</b> are my favourite technologies however I am keen on writing in Python, C or Kotlin too.
          Web development is my favourite, actually more back-end than front-end, however I can build desktop and mobile apps too.
        </p>
        <p class="container flow-text justify-text-block">
          I am a freelance developer (mainly for <a href="https://cyberghosts.pl/" class="accent-text">CyberGhosts Sp.z.o.o</a>), an ICT technician and a Fullstack Web Developer at <a href="https://sidnet.pl/" class="accent-text">Sidnet Sp.z.o.o</a> at the moment.
          I like to be identified as a typical techie. DevOps is in my way of interests too - in a professional way as well as a hobby. I have my own homelab server where I use such technologies as:
          <b class="accent-text">Portainer</b>,
          <b class="accent-text">Docker and Docker Compose</b>,
          <b class="accent-text">Kibana, Filebeat and Elasticsearch</b>,
          <b class="accent-text">.NET Core</b>.
          <b class="accent-text">And some classics such as: Samba, SSH or WWW server</b>.
          I am also keen on learning technologies such as <b class="accent-text">Azure Cloud and Azure DevOps</b>.
        </p>
        <p class="container flow-text justify-text-block">
          Next to IT I like learning to history, listen to music and learn about how to analyze it in digital manner (thus I mean Digital Signal Processing).
          I like long walks, riding a bike and skiing.
        </p>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="row row-margins align-items-center center">
      <section id="experience" class="section">
        <div class="caption center-align <?php echo $experienceBlockTextColor?>">
          <h3>Experience</h3>
        </div>
        <p class="container flow-text justify-text-block <?php echo $experienceBlockTextColor?>">
          My experience mainly consists of working on my own, private projects, however I have worked in teams with other people, so I totally know what a teamwork is.
        </p>
        <section id="projects" class="<?php echo $experienceBlockTextColor?>" style="padding-top: 15px;">
          <div class="caption center-align">
            <h4>Projects</h4>
          </div>
          <div class="row" id="amelia">
            <div class="col s12 m6" id="pika-cloud">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Pika Cloud</span>
                  <p>
                    Pika Cloud consists of following web apps for now: <a class="accent-text" href="https://core.lukas-bownik.net">Pika Core</a>,
                    <a class="accent-text" href="https://infra.lukas-bownik.net">Pika Status</a> and <a class="accent-text" href="https://note.lukas-bownik.net">PikaNote</a>.
                    All of them are written using ASP.NET Core 3.1 and hosted using ASP.NET Core 3.1 runtime with built-in features such as Template Engine, Entitiy Framework and Identity Framework.
                    While most of apps are hosted on my private server, PikaNote's REST API is hosted on Azure Cloud. Each backend system uses PostgreSQL RDBMS for persistence, Redis for highly available distributed cache and EFK for logs management - each of mentioned services is Dockerized.
                    For more information and the code, click the link below.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/pika-cloud" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Amelia</span>
                  <p>
                    Amelia is a simple server application which collects data from all <a href="https://www.github.com/Obsidiam/ameliaclient" class="accent-text">clients</a> in the LAN so it can view data as state of monitors of hosts connected, IP address, host name, OS name. For more information, click the link below.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/amelia" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6" id="www-ldap-gui">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Rose</span>
                  <p>
                    This is one of my first web apps ever and my very first project written in pure php with JS and HTML.
                    It's main purpose is to manage users of OpenLDAP server such as: their logins, passwords, roles. It can be easily set up on any Linux machine.
                    It does not use any kind of database to store its information.
                    Application was tested with php7.2 and Apache 2.4 server on CentOS 7.
                    Rose is my first project I've completed for a bigger company: infinite. For more information, click the link below.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/www-ldap-gui" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
            <div class="col s12 m6" id="prcrec">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Victoria</span>
                  <p>
                    Victoria is a desktop application which allows to record all user behaviors while using keyboard and mouse on Windows NT system.
                    It is written in C# with WPF using Win32 API. For more information, click the link below.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/prcrec" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6" id="gabriele">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Gabriele</span>
                  <p>
                    Gabriele is the project I have almost finished for both of platforms: MS Windows and GNU/Linux distros. It is written in Java 7 using Processing 3 environment. It's main functionality is just to show the spectrum of sound signal computed by your sound card in real time. Take a look at the code if you are into it.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/gabriele" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
            <div class="col s12 m6" id="poolval2">
              <div class="card small dark">
                <div class="card-content white-text">
                  <span class="card-title">Poolval2</span>
                  <p>
                    Poolval2 is a simple, CLI-based written in pure Java 8 PostgreSQL benchmark. I've done it while working in infinite.
                    It uses JDBC to communicate with single node. It does not support pooled RDBMS node. Application is easily extendable - just add your command in InputController and attach
                    your own classes via ClassLoader or a JAR as a dependency and you can add totally new functionality to it.
                  </p>
                </div>
                <div class="card-action">
                  <a href="https://www.github.com/Obsidiam/gabriele" class="btn btn-large btn-flat">
                    <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48">
                  </a>
                </div>
              </div>
            </div>
            <div class="col s12 m6" id="julia">
              <div class="card dark">
                <div class="card-content white-text">
                  <span class="card-title">Julia</span>
                  <p>
                    Julia is a web application written in C# using ASP.NET Core 2.2 with Razor Engine.
                    Its main functionality is to send SMSs stored in single PostgreSQL node.
                    Application uses <a href="https://wammu.eu/gammu/" class="accent-text">gammu</a> software and Python 3.7 - scripts, bash scripts and exectuables are modules loaded from json file.
                    TSL SMS Web App is efficient - it managed to send 1400 SMS in just few hours, thanks to gammu!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="cv">
          <div class="row dark">
            <div class="center-align row white-text" style="padding-top: 15px;">
              <div class="caption center-align light white-text">
                <h4>My CV</h4>
              </div>
              <p class="container flow-text text-block-paragraph">
                I don't think there is a need to write down my whole experience where, instead you would better take a look at my
                <a href="https://core.lukas-bownik.net/Storage/PermanentDownload/SGRNQUlEVi5LUHJMOVQ2dEdWNTdaZVFmdi54V0lGSDdqT3E1QU1TOUZ5SS0=" class="accent-text" download>CV</a>.
              </p>
            </div>
          </div>
        </section>
      </section>
    </div>
    <section id="pika-cloud-landing">
      <div class="row dark" style="padding-top: 15px;">
        <div class="caption center-align light white-text">
          <h3>Pika Cloud</h3>
        </div>
        <div class="container">
          <p class="flow-text text-block-paragraph white-text">
            This page itself is not a part of Pika Cloud despite its name is "Pika Portfolio". However, Pika Cloud is the biggest and the best project I have ever done.
            This is why I gathered all existing and non-existing, but in engineering phase, systems at my portfolio site, so you can easily reach each of them from here.
          </p>
          <p class="flow-text text-block-paragraph white-text center">
            <i>From creativity comes immersion</i>
          </p>
          <div class="row">
            <div class="col s12 m6">
              <div class="card <?php echo $pikaCardStyle; ?> lighten-5 pika-card-padding">
                <div class="card-image">
                  <img class="activator" src="img/logos/pikacloud_core.svg" alt="PikaCore logo">
                </div>
                <div class="card-content <?php echo $pikaCardText ?>  center">
                  <span class="card-title">A core of whole Pika Cloud</span>
                </div>
                <div class="card-reveal <?php echo $pikaCardStyle; ?>">
                  <span class="card-title <?php echo $pikaCardText ?> ">About<i class="material-icons right">close</i></span>
                  <p>
                    Pika Core is the very first app. At first it was named File Management System,
                    but after some time and hours and hours of redesigning architecture it happened to be a core of
                    Pika Cloud. More about it at my blog.</p>
                </div>
                <div class="card-action center">
                  <a href="https://core.lukas-bownik.net/" class="<?php echo $pikaCardText ?> ">Production</a>
                  <a href="https://blog.lukas-bownik.net/2020/07/28/a-few-words-about-pika-core-web-system/" class="<?php echo $pikaCardText ?> ">Blog post</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card <?php echo $pikaCardStyle; ?> pika-card-padding">
                <div class="card-image">
                  <img class="activator" src="img/logos/pikacloud_note.svg" alt="PikaNote logo">
                </div>
                <div class="card-content <?php echo $pikaCardText ?> center">
                  <span class="card-title">A note app of Pika Cloud</span>
                </div>
                <div class="card-reveal <?php echo $pikaCardStyle; ?>">
                  <span class="card-title <?php echo $pikaCardText ?> ">About<i class="material-icons right">close</i></span>
                  <p>
                    Pika Note is my first fully CSR application built in Vue.js. It uses REST API built with .NET Core hosted on Azure App Services with Azure Database for PGSQL.
                    Its main purpose was to start with Vue.js, however I am going to use it for taking down notes and managing permalinks generated in PikaCore.
                    More about it at my blog.
                  </p>
                </div>
                <div class="card-action center">
                  <a href="https://note.lukas-bownik.net/" class="<?php echo $pikaCardText ?> ">Production</a>
                  <a href="https://blog.lukas-bownik.net/2020/08/15/pikanote-how-i-started-with-azure/" class="<?php echo $pikaCardText ?> ">Blog post</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card <?php echo $pikaCardStyle; ?> lighten-5 pika-card-padding">
                <div class="card-image">
                  <img class="activator" src="img/logos/pikacloud_player.svg" alt="PikaPlayer logo">
                </div>
                <div class="card-content <?php echo $pikaCardText ?>  center">
                  <span class="card-title">A media player app of Pika Cloud</span>
                </div>
                <div class="card-reveal <?php echo $pikaCardStyle; ?>">
                  <span class="card-title <?php echo $pikaCardText ?> ">About<i class="material-icons right">close</i></span>
                  <p>
                    Pika Player is an app which does not exist at the moment.
                    This app is going to be a media player for PikaCloud, thus it will be strictly connected to PikaCore and its file browser.
                    User will be able to open any media file stored on server using this app without downloading it.
                  </p>
                </div>
                <div class="card-action center">
                  <a href="https://player.lukas-bownik.net/" class="<?php echo $pikaCardText ?> ">Production</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card <?php echo $pikaCardStyle; ?> pika-card-padding">
                <div class="card-image">
                  <img class="activator" src="img/logos/pikacloud_status.svg" alt="PikaStatus logo">
                </div>
                <div class="card-content <?php echo $pikaCardText ?>  center">
                  <span class="card-title">A status app of Pika Cloud</span>
                </div>
                <div class="card-reveal <?php echo $pikaCardStyle; ?>">
                  <span class="card-title <?php echo $pikaCardText ?>">About<i class="material-icons right">close</i></span>
                  <p>
                    Pika Status is my first ever CSR web app, but as of the fact it is a Blazor app it is partially rendered on the server side.
                    It was just an experiment to have fun and to learn Blazor a little bit.
                    I have built simple REST API for it, but it is not a standalone system, it is a part of Api Area in PikaCore.
                  </p>
                </div>
                <div class="card-action center">
                  <a href="https://infra.lukas-bownik.net/" class="<?php echo $pikaCardText ?> ">Production</a>
                </div>
              </div>
            </div>
            <div class="col l12 s12">
              <h5 class="white-text center">Pika Cloud Status</h5>
              <p class="white-text center">Any problems with connecting to Pika Cloud apps? Check its status on Pika Status, link is above.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row pt-5 dark">
      <div class="container center light white-text  pt-4" style="padding-top: 15px;">
        <section id="my-media">
          <h3>My media</h3>
          <p class="section__paragraph">
            If you want to get know me better or keep in touch with me, you can choose one of these ways:
          </p>
          <div class="row center-align">
            <div class="col s6 m3 l3 center-align">
              <a href="https://t.me/arkasian ">
                <img class="element-margins img-fit" src="img/t_logo.svg" alt="Telegram" width="48" height="48"></a>
              <p>arkasian</p>
            </div>
            <div class="col s6 m3 l3 center-align">
              <a href="https://discord.com/">
                <img class="element-margins img-fit" src="img/Discord-Logo-White.svg" alt="Discord" width="48" height="48"></a>
              <p>Arkasian#0661</p>
            </div>
            <div class="col s6 m3 l3 center-align">
              <a href="https://www.linkedin.com/in/%C5%82ukasz-bownik-9a7470187/">
                <img class="element-margins img-fit" src="img/LI-In-Bug.png" alt="linkedin" width="48" height="48"/>
              </a>
              <p>Łukasz Bownik</p>
            </div>
            <div class="col s6 m3 l3 center-align">
              <a href="https://github.com/Arkasian">
                <img class="element-margins img-fit" src="img/GitHub-Mark-Light-64px.png" alt="GitHub" width="48" height="48"></a>
              <p>Arkasian</p>
            </div>
          </div>
          <hr class="grey lighten-1"/>

        </section>
        <div class="col s12 m12 l12">
          <h6>Accepted payment methods</h6>
          <p>I accept payments via standard bank transfer or via PayPal.</p>
          <address>
            Mail: <a href="mailto:lukasbownik99@gmail.com" class="accent-text">lukasbownik99@gmail.com</a>
          </address>
          <br>
        </div>
      </div>
    </div>
  </div>
</main>
<footer class="page-footer dark">
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://blog.lukas-bownik.net/">IntoIT - From Young Dev's View blog</a></li>
          <li><a class="grey-text text-lighten-3" href="https://core.lukas-bownik.net/Core/Policy">PikaCloud Policies</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright grey darken-4">
    <div class="container">
      © <span id="date"></span> Copyright Łukasz Bownik
    </div>
  </div>
</footer>
<div class="fixed-action-btn">
  <form method="post" action="/">
  <button class="btn-floating btn-large dark" type="submit" name="theme" value="<?php echo !$theme ? 'light' : 'dark' ?>">
    <i class="material-icons">
      <?php echo $icon; ?>
    </i>
  </button>
  </form>
</div>
</body>
</html>
