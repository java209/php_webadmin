<?php 

$title = 'index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

?>

  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>Our Website</span></h2>
            <p>“To serve our Clients and the community in a way that is second to none.”</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>We are the best at what we do!</h2>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Apache HTTP Section ======= -->
    <section id="apachehttp" class="apachehttp">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Apache HTTP Server</h2>
          <p>
            In 1995, the Apache HTTP Server (often known as httpd or simply Apache) was released. Apache is the most common web server in the world, powering 52 percent of all websites.
            <br>
            <br>
            While Apache httpd is most commonly used on Linux, it can also be used on Mac OS X and Windows. The Apache License version 2 is, predictably, used to license Apache. The web server is built on a modular architecture that allows other modules to be loaded to expand its capabilities. For example, installing mod proxy on your server will enable a proxy/gateway, whereas installing mod proxy balancer will enable load balancing for all supported protocols. Apache 2.4 now has a new module, mod http2, that supports HTTP/2.
            <br>
            <br>
            Apache has many features, many of which are implemented as built modules that enhance the basic functionality. Authentication systems and server-side programming languages like Perl, Python, Tcl, and PHP are just a few examples.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/apache.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              Features of Apache HTTP Server:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Loadable Dynamic Modules.</li>
              <li><i class="icofont-check-circled"></i> Handling of static files, index files, auto-indexing, and content negotiation.</li>
              <li><i class="icofont-check-circled"></i> .htaccess per-directory configuration support.</li>
              <li><i class="icofont-check-circled"></i> Apache is compatible with IPv6.</li>
              <li><i class="icofont-check-circled"></i> Apache Server supports HTTP/2.</li>
              <li><i class="icofont-check-circled"></i> gzip compression and decompression.</li>
              <li><i class="icofont-check-circled"></i> FTP connections are possible with proper modules.</li>
              <li><i class="icofont-check-circled"></i> Perl, PHP and Lua scripts are already build.</li>
            </ul>
            <a href="https://opensource.com/business/16/8/top-5-open-source-web-servers" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End Apache HTTP Section -->

    <!-- ======= NGINX Section ======= -->
    <section id="nginx" class="nginx">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>NGINX Web Server</h2>
          <p>
            NGINX was created by Igor Sysoev in 2002 and first released in 2004. The C10K challenge, which is shorthand for "how do you construct a web server that can handle ten thousand concurrent connections?" was the inspiration for NGINX. NGINX is the second most popular open-source web server, powering about 30% of all websites.
            <br>
            <br>
            To achieve its goal of handling huge concurrent sessions, NGINX uses an asynchronous event-driven architecture. Because of its low resource usage and ease of scaling, it has become a very popular web server among administrators.
            <br>
            <br>
            NGINX is distributed under a BSD-like license, and it can be used as a web server, proxy server, or load balancer. More information is available on the NGINX community site.
            NGINX is supported by a variety of operating systems, such as: BSD variants, HP-UX, IBM AIX, Linux, macOS, Solaris and Microsoft Windows. It currently supports seven languages – Go, Node.js, Perl, PHP, Python, Ruby, and Java Servlet Containers (the last as an experimental module).
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/naginx.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              Features of Nginx Web Server:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i>Reverse proxy with caching.</li>
              <li><i class="icofont-check-circled"></i>Nginx is compatible with IPv6.</li>
              <li><i class="icofont-check-circled"></i>Load balancing.</li>
              <li><i class="icofont-check-circled"></i>FastCGI support with caching.</li>
              <li><i class="icofont-check-circled"></i>Nginx Server supports WebSockets.</li>
              <li><i class="icofont-check-circled"></i>Handling of static files, index files, and auto-indexing.</li>
              <li><i class="icofont-check-circled"></i>TLS/SSL with SNI.</li>
            </ul>
            <a href="https://opensource.com/business/16/8/top-5-open-source-web-servers" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End NGINX Section -->

    <!-- ======= Apache Tomcat Section ======= -->
    <section id="apachetomcat" class="apachetomcat">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Apache Tomcat Server</h2>
          <p>
            Apache Tomcat is a web server that runs on an open-source Java servlet container. A Java servlet is a Java program that enhances a server's capabilities. Although servlets can reply to any sort of request, they are most typically used to construct Web-based applications. Other dynamic online content platforms, such as PHP and ASP.NET, have Java counterparts in the form of web servlets. Sun Microsystems contributed Tomcat's codebase to the Apache Software Foundation in 1999, and it was designated as a top-level Apache project in 2005. It is now used by less than 1% of all websites.
            <br>
            <br>
            Apache Tomcat is a Java application server that is distributed under the Apache License version 2. It may, however, be enhanced with Coyote to act as a traditional web server, serving local files as HTTP documents.
            <br>
            <br>
            Among various open-source Java application servers, Apache Tomcat is frequently mentioned. JBoss, Wildfly, and Glassfish are some examples.
            <br>
            <br>
            Several common languages are used in the creation of a typical Web application that runs on Tomcat. All apps and algorithms must be written in Java to begin with. The user's browser is used to view the application interface, which is coded in HTML. Any difficulties with the application's setup must be described in XML in the project's configuration folder's "web.xml" file. Both the Tomcat environment and the application can make use of the configuration data.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/apachetomcat.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              Features of Apache Tomcat Web Server:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> The Tomcat application is well documented which provides comprehensive information to the developer.</li>
              <li><i class="icofont-check-circled"></i> Provides an extra level of security to the use.</li>
              <li><i class="icofont-check-circled"></i> Provides a stable platforms to run applications smoothly..</li>
              <li><i class="icofont-check-circled"></i> Tomcat server comes with built-in customization options.</li>
              <li><i class="icofont-check-circled"></i> It is lightweight to support application running smoothly .</li>
              <li><i class="icofont-check-circled"></i> Open source application.</li>
            </ul>
            <a href="https://opensource.com/business/16/8/top-5-open-source-web-servers" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End Apache Tomcat Section -->

    <!-- ======= Group Member Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Group Members</h2>
          <p>Please see group members below who assisted in the completion of this website</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/groupmember/dpm.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Javannie Wright</h4>
                <span>ID# 1817002656</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/groupmember/dpm.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dwayne Richards</h4>
                <span>ID# 1817004052</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/groupmember/dpm.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Cian Walters</h4>
                <span>ID# 1817001437</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/groupmember/dpf.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Xania Richards</h4>
                <span>ID# 1817001524</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/groupmember/dpm.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Israel Palmer</h4>
                <span>ID# 1817003110</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Group Members Section -->

    <!-- ======= FTP Section ======= -->
    <section id="FTP" class="FTP">
      <div class="container">
      
        <div class="section-title">
          <h1>What is FTP?</h1>
          <br>
          <p>
            The word FTP stands for File Transfer Protocol. FTP is a file transfer protocol that is used to move files between computers on a network. FTP can be used to transfer files between accounts, exchange files between accounts and desktop computers, and access online software archives. However, keep in mind that many FTP sites are actively used and require multiple attempts to join.
          </p>
          <br>
          <h2>How Does FTP Works?</h2>
          <p>FTP is a client-server protocol that uses two channels of communication between the client and the server: a command channel for managing the discussion and a data channel for sending file information.
            <br>
            <br>
            <h5>This is how a FTP works</h5>
            <ul>  
              <li>Most FTP servers require a user to log in, some servers make some or all of their content available without requiring a login, a concept known as anonymous FTP.</li>
              <br>
              <li>When a user wishes to download a file, the client starts a discussion with the server.</li>
              <br>
              <li>A client can upload, download, delete, rename, move, and copy files to and from a server via FTP.</li>
            </ul>
            <br>
            <h5>FTP sessions work in active or passive modes:</h5>
            <br>
            Active mode: After a client initiates a session via a command channel request, the server creates a data connection back to the client and begins transferring data.
            <br>
            Passive mode: The server uses the command channel to send the client the information it needs to open a data channel. Because passive mode has the client initiating all connections, it works well across firewalls and network address translation gateways
          </p>
          <br>
          <div class="active">
            <img src="assets/img/active.jpg" class="img-fluid" alt="">
          </div>
          <a href="https://www.techtarget.com/searchnetworking/definition/File-Transfer-Protocol-FTP" class="btn-get-started scrollto">Read More</a>
          <br>
          <br>
          <h2>FileZilla®</h2>
          <p>
            FileZilla® is a feature-rich cross-platform FTP, SFTP, and FTPS client that runs on Windows, Mac OS X, Linux, and other platforms. The dynamic utilities in FileZilla make it simple to move files between your local system and your Web site's server. To manage file syncing, Filezilla, for example, allows you to compare your files with in-directory server files. You may also tab between servers and transfer files to them at the same time, as well as update server files while you're on the move. Filezilla is also accessible in 47 other languages throughout the world!
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/filezilla.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              Features of FileZilla:
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> FTP client and server.</li>
            <li><i class="icofont-check-circled"></i> Supports FTP, FTPS and SFTP.</li>
            <li><i class="icofont-check-circled"></i> Built-in file management.</li>
            <li><i class="icofont-check-circled"></i> Advanced file settings.</li>
            <li><i class="icofont-check-circled"></i> Reduces timeout errors.</li>
            <li><i class="icofont-check-circled"></i> Multi-language support.</li>
          </ul>
          </div>
        </div>

      </div>

        <br>
          <br>
          <div class="container">
          <h2 class="section-title">Transmit</h2>
          <p>
            Transmit is a powerful FTP client developed specifically for Mac OS that supports SFTP, S3, and iDisk/WebDAV protocols for uploading, downloading, and deleting files over the internet. The fact that it features one of the most Mac-like interfaces available on the market is the first thing that impresses you about this file transfer companion. With folders on the left and transfers on the right, everything is neatly laid out. Any type of file can be transferred quickly and effortlessly, and you can readily alter whatever you want to send.
          <br>
          <br>
          Furthermore it allows you to build drag and droplets for objects you frequently use. This allows you to easily move files across folders or examine them in several tabs. This handy sharing server now adds Panic Sync, the safest and fastest way to sync with sites, as well as Finder integration. As a result, you can mount an FTP volume on your desktop like any other external disk.
          </p>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/transmit.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              Transmit offers a number of features built off of technologies provided by Apple.:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Manage and generate SSH keys within the Transmit application.</li>
              <li><i class="icofont-check-circled"></i> Remote-remote sync options.</li>
              <li><i class="icofont-check-circled"></i> Can be opened in Terminal.</li>
              <li><i class="icofont-check-circled"></i> Supports file tags.</li>
              <li><i class="icofont-check-circled"></i> Copy and paste options for files.</li>
              <li><i class="icofont-check-circled"></i> Technical support.</li>
            </ul>
          </div>
        </div>
      </div>
  
        <br>
          <br>
          <h2 class="section-title">WinSCP</h2>
          <div class="container">
          <p>
            WinSCP is a free SFTP, FTP, WebDAV, S3 client, and SCP client for Windows that is open source. Its primary purpose is to transfer files between a local and remote computer. WinSCP also has scripting and basic file manager features.
          </p>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/wins.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="font-italic">
              WinSCP Features:
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Support for password, keyboard-interactive, public key and Kerberos (GSS) authentication.</li>
            <li><i class="icofont-check-circled"></i> Directory synchronization in several semi or fully automatic ways.</li>
            <li><i class="icofont-check-circled"></i> Support for SFTP and SCP protocols over SSH and FTP and WebDAV and S3 protocols.</li>
            <li><i class="icofont-check-circled"></i> Integration with Windows (drag&drop, URL, shortcut icons, jump list).</li>
            <li><i class="icofont-check-circled"></i> Optionally protects stored site information with master password.</li>
            <li><i class="icofont-check-circled"></i> Optionally supports portable operation using a configuration file in place of registry entries, suitable for operation from removable media.</li>
          </ul>
          </div>
        </div>
        
      </div>
      
    </section><!-- End FTP Section -->
    <div class="container">
      <h2>Website View Tracker</h2>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-24fb1bf5-5470-4c6d-a298-a98356933a80"></div>
    </div>

    <div style="float: left;">
      <script>
        window['CboxReady'] = function (Cbox) {
          Cbox('button', '3-3514832-OL0XZn');
        }
        </script>
        <script src="https://static.cbox.ws/embed/2.js" async></script>
      </div>  

  </main><!-- End #main -->
  <br>
  <br>
  <?php require_once 'includes/footer.php';?>