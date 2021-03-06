<?php
    // Message Vars
    $msg = '';
    $msgClass = '';

    // Check For Submit
    if (filter_has_var(INPUT_POST, 'submit')) {
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if (!empty($email) && !empty($name) && !empty($message)) {
            // Passed
            // Check Email is valid or not
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Please use a valid email';
            } else {
                // Passed
                $toEmail = 'hello@noobarmy.org';
                $subject = 'VULNCON 2021 Contact Request From '.$name;
                $body = '<h2>Vulncon Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " .$name.' '.$name2. "<".$email.">". "\r\n";

                if (mail($toEmail, $subject, $body, $headers)) {
                    // Email Sent
                    $msg = 'Your message has been sent';
                } else {
                    // Failed
                    $msg = 'Your message was not sent';
                }
            }
        } else {
            // Failed
            $msg = 'Please fill in all fields';
        }
    }
    $cfp_msg='';
    $cfp_msgClass='';
    if (filter_has_var(INPUT_POST, 'cfp_submit')) {
        // Get Form Data
        $name = htmlspecialchars($_POST['cfp_name']);
        $email = htmlspecialchars($_POST['cfp_email']);
        $jobTItle = htmlspecialchars($_POST['jobTitle']);
        $organisation = htmlspecialchars($_POST['organisation']);
        $speakerBio = htmlspecialchars($_POST['speakerBio']);
        $topicTitle = htmlspecialchars($_POST['topicTitle']);
        $linkedin = htmlspecialchars($_POST['linkedin']);
        $Twitter = htmlspecialchars($_POST['Twitter']);
        $sessionAbstract = htmlspecialchars($_POST['sessionAbstract']);

        // Check Required Fields
        if (!empty($email) && !empty($name) && !empty($jobTItle) && !empty($speakerBio) && !empty($organisation) && !empty($topicTitle) && !empty($sessionAbstract) && !empty($linkedin) && !empty($Twitter)) {
            // Passed
            // Check Email is valid or not
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $cfp_msg = 'Please use a valid email';
            } else {
                // Passed
                $toEmail = 'hello@noobarmy.org';
                $subject = 'VULNCON 2021 CFP From '.$name;
                $body = '<h2>Vulncon CFP Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
                    <h4>Job Title</h4><p>'.$jobTItle.'</p>
                    <h4>Organisation</h4><p>'.$organisation.'</p>
                    <h4>Speaker Bio</h4><p>'.$speakerBio.'</p>
                    <h4>Topic Title</h4><p>'.$topicTitle.'</p>
                    <h4>Linkedin</h4><p>'.$linkedin.'</p>
                    <h4>Twitter</h4><p>'.$Twitter.'</p>
					<h4>Abstract</h4><p>'.$sessionAbstract.'</p>
				';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " .$name.' '.$name2. "<".$email.">". "\r\n";

                if (mail($toEmail, $subject, $body, $headers)) {
                    // Email Sent
                    $cfp_msg = 'Your request has been submitted successfully';
                } else {
                    // Failed
                    $cfp_msg = 'Your message was not sent';
                }
            }
        } else {
            // Failed
            $cfp_msg = 'Please fill all the fields';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180386787-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-180386787-1');
    </script>
    <meta charset="UTF-8" />
    <meta name="description" p content="VULNCON is a two days conference after 24 hours live CTF. The conference will include talks from various security researchers.">
    <meta content='vulncon, vulncon 2021, CTF Events, Workshop, Ethical Hacking,noob army' name='keywords' />
    <meta content='VULNCON | VULNCON 2021| NOOB ARMY | noobarmy' name='title' />
    <meta content='2 days' name='revisit-after' />
    <meta content='NOOB ARMY' name='author' />
    <meta content='English' name='language' />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://noobarmy.org/vulncon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="./css/contact.css">
<link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="https://noobarmy.org/vulncon/css/style.css" />
    <link rel="stylesheet" href="https://noobarmy.org/vulncon/css/contact.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/ba8127bac3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.logwork.com/widget/countdown.js"></script>
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="noobarmy" data-description="Support me on Buy me a coffee!" data-message="" data-color="#FFDD00" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

    <title>VULNCON 2021</title>

</head>

<body>
    <section>
        <!-- Navbar -->
        <div class="navbar" id="navbar">
            <div class="menu-bar">
                <div class="logo">
                    <a style="height: 18.75px;" href="https://noobarmy.org/"><img src="./images/nav-logo-2.png" /></a>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="https://noobarmy.org/vulncon#Home">Home</a></li>
                        <li><a href="https://noobarmy.org/vulncon/#About">About Us</a></li>
                        <li><a href="https://noobarmy.org/vulncon/#Speakers">Speakers</a></li>
                        <li><a href="https://noobarmy.org/vulncon/#Schedule">Schedule</a></li>
                        <li><a href="https://ctf.noobarmy.org/">VULNCON CTF</a></li>
                        <li><a href="https://noobarmy.org/vulncon/#Contact">Contact</a></li>
                        <li><a href="https://noobarmy.org/vulncon/team.html">Team</a></li>
                        <li><a href="https://forms.gle/6B4RSJXzudAaRM4y9" class="glow-on-hover">Register</a></li>
                    </ul>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                </nav>
            </div>

        </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section id="Home">
        <div class="banner">
            <div class="banner-content">
                <div class="home_center_img">
                    <img class="home_center_logo" src="images/home_logo.png" alt="" srcset="">
                    <img class="home_vulcon" src="images/logo/VULNCON.png" alt="" srcset="">
                    <img class="home_2021" src="images/logo/2021.png" alt="" srcset="">
                </div>
                <!-- <p class="text">Explore.Learn.Implement</p> -->


                <span style="color: #fff; margin-top: 100px;  margin-bottom: -20px; "> VULNCON Starts in</span>
                <a href="https://logwork.com/countdown-qdb8"
                    style="pointer-events: none; font-family: 'Press Start 2P', cursive;" class="countdown-timer"
                    data-timezone="Asia/Kolkata" data-textcolor="#f0f8ff" data-date="2021-12-04 16:00"
                    data-background="#0d0303" data-width="400" data-digitscolor="#f2dcdc" data-unitscolor="#faf2f2">.
                </a>

            </div>
        </div>
        </div>
    </section>


    <!-- About section -->

    <section id="About">
        <div class="about_bg">
            <br>
            <div style="height: 100px;"></div>

            <h1 class="headings" data-aos-anchor-placement="center-bottom" data-aos='zoom-in'>About Us</h1>

            <div class="nuke">
                <div class="image" data-aos-anchor-placement="center-bottom" data-aos="fade-left">
                    <img class="About" src="https://noobarmy.org/vulncon/images/group.png" alt="Image Loading" />
                </div>
                <div class="Content" data-aos-anchor-placement="center-bottom" data-aos="fade-right">
                    <h3 class="head">VULNCON 2021</h3>

                    <p class="tuned" style="font-size: 17px; line-height: 30px;">We present you the second edition of
                        VULNCON, a four-day virtual hacking conference with lots of exciting security talks, and a 24
                        hour live jeopardy-style CTF for our beloved CTF community!</p> <br>

                    <p class="tuned">Stay tuned for any updates, and be sure to checkout our YouTube & Discord :)</p>

                    <!-- <button class="btn">Register</button> -->
                    <a href="https://bit.ly/noob4rmy" target="_blank"><button class="glow-on-hover discord"><b>Join
                                Discord</b></button></a>

                </div>
            </div>
        </div>
    </section>










    <!-- Speakers Section -->
    <section class="speaker_section" id="Speakers">
        <div>
            <div class="speaker_heading">
                <h1 class="headings" data-aos-anchor-placement="center-bottom" data-aos='zoom-in'>Our Speakers</h1>
            </div>
            <div class="speaker_container">



                <!-- <div class="speaker_card " data-aos="fade-up">
                    <div class="speaker_imgbox">
                        <img style="height: auto; margin-top: 20%;" src="images/coming-soon.png" alt="Coming Soon">
                    </div>
                </div> -->
                
                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/adhokshaj.jpg" alt="Mr. Adhokshaj">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Adhokshaj Mishra</h3>
                            <p>Security Researcher at Uptycs</p>
                            <div class="speaker_social-media">
                                <a href="https://twitter.com/adhokshajmishra" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/adhokshajmishra/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/aseem.jpg" alt="Mr. Aseem">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Aseem Shrey</h3>
                            <p>Security Engineer at Gojek Tech</p>
                            <div class="speaker_social-media">
                                <a href="https://twitter.com/AseemShrey" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://github.com/LuD1161" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://linkedin.com/in/AseemShrey" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/youssef.jpg" alt="Mr. Youssef">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Youssef Sammouda</h3>
                            <p>Security Researcher, Facebook Top Hacker</p>
                            <div class="speaker_social-media">
                                <a href="https://twitter.com/Samm0uda" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://github.com/samm0uda" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/ysammouda" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                






                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/sagar.jpg" alt="Mr. Sagar">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Sagar Patra</h3>
                            <p>Security Analyst at TCS, Chapter Leader at OWASP Jamshedpur</p>
                            <div class="speaker_social-media">
                                <a href="https://www.linkedin.com/in/sagar-patra-2aa975166/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/donavan.jpg" alt="Mr. Donavan">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Donavan Cheah</h3>
                            <p>Senior Cybersecurity Consultant(OSCP, OSCE, OSWE, OSEP, OSWP, CRT, CRTP) and Author of the digitalworld.local series on Vulnhub</p>
                            <div class="speaker_social-media">
                                <a href="https://www.facebook.com/donavancheah" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/in/donavan-cheah-90548977" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/praful.jpg" alt="Mr. Praful">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Praful Kalla</h3>
                            <p>Consultant at KPMG</p>
                            <div class="speaker_social-media">
                                <a href="https://www.linkedin.com/in/prafulkalla/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="speaker_card " data-aos="fade-up" >
                    <div class="speaker_imgbox">
                        <img  src="./images/speaker/vansh.jpg" alt="Mr. Vansh">
                    </div>
                    <div class="speaker_contentbox">
                        <div class="speaker_content">
                            <h3>Vansh Devgan</h3>
                            <p>Synack Red Teamer</p>
                            <div class="speaker_social-media">
                                <a href="https://twitter.com/Th3Pr0xyB0y" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/vanshdevgan/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Vulncon Schedule  -->
    <section>

        <div id="Schedule" style="height: 40px;"></div>
        <div class="scheduleheading">
            <h1 class="headings" data-aos-anchor-placement="center-bottom" data-aos='zoom-in'>SCHEDULE PLAN</h1>
            <span class="span_time">OUR FIXTURES</span>
        </div>
        <div class="tabsbtn">
            <button class="tablink" onclick="openPage('day1', this, '#009bfd')" id="defaultOpen"> <h3>SATURDAY</h3> <p>December 04, 2021</p> </button>
            <!-- <button class="tablink" onclick="openPage('day1', this, '#009bfd')" id="defaultOpen"> <h3>SATURDAY</h3> <p>December 04, 2021</p> </button> -->
            <button class="tablink" onclick="openPage('day2', this, '#009bfd')" > <h3>SUNDAY</h3> <p>December 05, 2021</p></button>
            <button class="tablink" onclick="openPage('day3', this, '#009bfd')"> <h3>TUESDAY</h3> <p>December 07, 2021</p></button>
            <button class="tablink" onclick="openPage('day4', this, '#009bfd')"> <h3>WEDNESDAY</h3> <p>December 08, 2021</p></button>
        </div>
        <div id="day1" class="tabcontent">

            <!-- <div class="innercontents" style="width: 100%;">
                <div>
                    <img src="./images/coming-soon.png" style="margin-left: 20px;" height="auto" width="130px" alt="">
                </div>
                <h3>VULNCON 2021</h3>
            </div> -->

            <div class="innercontents">
           <div>
               <img src="./images/nav-logo-2.png" style="margin-left: 20px;" height="30px" width="130px" alt="">
               <h3>VULNCON CTF Starts</h3>
           </div>
           <div>
            <span><i class="fas fa-clock"> 4 PM IST</i></span>
            </div>
        </div>
        </div>

        <div id="day2" class="tabcontent">

        <div class="innercontents">
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 20px;" height="30px" width="130px" alt="">
                <h3>VULNCON CTF Ends</h3>
            </div>
            <div>
                <span><i class="fas fa-clock"> 4 PM IST</i></span>
             </div>
         </div>
      </div>
      
      <div id="day3" class="tabcontent">
       
         <div class="innercontents">
             <div>
                 <img src="./images/speaker/aseem.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
             </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Getting Started with Android<br> Pentesting </h3>
                <h5>by Aseem Shrey / Security Engineer<br>at Gojek Tech</h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 6 PM IST</i></span>
             </div>
         </div>


         <div class="innercontents">
            <div>
                <img src="./images/speaker/youssef.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Hunting for uncommon bugs<br> in Client Side Applications </h3>
                <h5>by Youssef Sammouda / Security Researcher</h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 7 PM IST</i></span>
             </div>
         </div>



         <div class="innercontents">
            <div>
                <img src="./images/speaker/adhokshaj.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>The Art of Anti-Debugging </h3>
                <h5>by Adhokshaj Mishra / Security Researcher<br> - Malware - Linux</h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 8 PM IST</i></span>
             </div>
         </div>



      </div>
      
      <div id="day4" class="tabcontent">

        <div class="innercontents">
            <div>
                <img src="./images/speaker/donavan.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Basics of AV Evasion</h3>
                <h5>by Donavan Cheah / Senior Cybersecurity Consultant </h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 6 PM IST</i></span>
             </div>
         </div>



         <div class="innercontents">
            <div>
                <img src="./images/speaker/praful.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Scada Security </h3>
                <h5>by Praful Kalla / Consultant at KPMG </h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 7 PM IST</i></span>
             </div>
         </div>


 
 
        <div class="innercontents">
            <div>
                <img src="./images/speaker/vansh.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Power Of Automation &<br>Data In Cyber Security</h3>
                <h5>by Vansh Devgan / Synack Red Teamer</h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 8 PM IST</i></span>
             </div>
         </div>

         <div class="innercontents">
            <div>
                <img src="./images/speaker/sagar.jpg" height="110px" style="border-radius: 50%;" width="110px" alt="speaker-image">
            </div>
            <div>
                <img src="./images/nav-logo-2.png" style="margin-left: 0px;" height="30px" width="130px" alt="">
                <h3>Hacking into Cloud</h3>
                <h5>by Sagar Patra / Security analyst at TCS </h5>
            </div>
            <div>
                <span><i class="fas fa-clock"> 9 PM IST</i></span>
             </div>
         </div>

        </div>
        <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
    </section>








    <!-- Sponsors section  -->

    <section>
        <h1 class="sponsor-heading" data-aos="fade-up">Our Sponsors</h1>
        <div class="brand-carousel section-padding owl-carousel" data-aos="fade-right">
            <div class="single-logo">
                <a href="https://burpbounty.net/" target="_blank"><img src="./images/sponsor/burpbounty.png" alt="burpbounty"></a>
            </div>
            <div class="single-logo">
            <a href="https://www.yeswehack.com/" target="_blank"> <img src="./images/sponsor/yeswehack.png" alt="yeswehack"></a>
            </div>
            <div class="single-logo">
            <a href="https://www.bugcrowd.com/" target="_blank"> <img src="https://noobarmy.org/vulncon2020/img/bugcrowd.png" alt="bugcrowd"></a>
            </div>
            <div class="single-logo">
               <a href="http://hackthebox.eu/" target="_blank"><img src="https://noobarmy.org/vulncon2020/img/htb.png" alt="HackTheBox" style="height:120px; width:80%;"></a> 
            </div>
            <div class="single-logo">
            <a href="https://www.offensive-security.com/" target="_blank"> <img src="https://noobarmy.org/vulncon2020/img/offsec.png" alt="Offensive_Security"></a>
            </div>
            <div class="single-logo">
                <a href="https://www.hackerone.com/" target="_blank"><img src="https://noobarmy.org/vulncon2020/img/hackerone.png" alt="Hackerone"></a>
            </div>
            <div class="single-logo">
                <a href="https://edu.cyberxplore.com/" target="_blank"><img src="./images/sponsor/cyberxplore.png" alt="Cyberxplore"></a>
            </div>
            <div class="single-logo">
                <a href="https://www.digitalocean.com/" target="_blank"><img src="./images/sponsor/do.png" alt="DigitalOcean"></a>
            </div>
            
        </div>
        <div class="sponsor_button"><a href="mailto:hello@noobarmy.org"><button class="glow-on-hover submit_btn " >Be a Sponsor</button></a></div>
    </section>




    <!-- contact form -->
    <section class="contact_section" id="Contact">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="contact_nav_block"></div>
            <div class="contact_header headings" data-aos-anchor-placement="center-bottom" data-aos='zoom-in'>CONTACT US
            </div>
            <div class="contact_form_body">
                <div class="contact_form" data-aos="fade-right">
                    <input type="text" name="name" id="name" class="input_field" placeholder="Full Name" required />

                    <input type="text" name="email" id="email" class="input_field" placeholder="E-mail" required />
                    <textarea name="message" id="message" rows="10" placeholder="Message" required></textarea>
                    <button class="glow-on-hover send_btn " name="submit">SEND</button>
                    <div id="success_fail_info"><?php if ($msg != '') : ?>
                        <div><?php echo $msg; ?></div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="contact_right" data-aos="fade-left">
                    <div class="contact_right_group">
                        <div class="fas ">Website</div>
                        <div class="contact_right_item">https://noobarmy.org</div>
                    </div>
                    <div class="contact_right_group">
                        <div class="fas">Phone</div>

                        <div class="contact_right_item">(+91) 8249172314</div>
                    </div>
                    <div class="contact_right_group">
                        <div class="fas">Email</div>

                        <div class="contact_right_item">hello@noobarmy.org</div>
                    </div>
                    <div class="contact_social_group">
                        <hr>
                        <div style="display: flex;
                align-items: center;
                justify-content: center;">
                            <a target="_blank" href="https://instagram.com/noobarmy__" class="contact_social"><i
                                    class="fab fa-instagram fa-3x contact_social_instagram"></i></a>
                            <a target="_blank" href="https://twitter.com/noobarmy_" class="contact_social"><i
                                    class="fab fa-twitter fa-3x contact_social_twitter"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCg68gduaRROMjQGRJoIAjYg"
                                class="contact_social"><i class="fab fa-youtube fa-3x contact_social_youtube "></i></a>
                        </div>
                        <hr>
                    </div>

                </div>
            </div>
        </form>
    </section>

    <!--  FOOTER SECTION -->

    <div class="footer">
        <div class="inner-footer">

            <div class="footer-items">
                <h1>N00B_4rMY</h1>
                <p>N00B_4rMY is an Information Security Open Source Community. We help each other to learn security
                    stuff and be the best version of ourselves as well as others.</p>
            </div>



            <!--  for contact us info -->
            <div class="footer-items">
                <h3>Contact us</h3>
                <div class="border1"></div>
                <ul>
                    <li><i class="fa fa-globe" aria-hidden="true"></i>https://noobarmy.org</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> (+91) 8249172314</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>hello@noobarmy.org</li>
                </ul>

                <!--   for social links -->
                <div class="social-media">
                    <a href="https://instagram.com/noobarmy__" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/noobarmy_" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCg68gduaRROMjQGRJoIAjYg" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            Copyright &copy; N00B_4rMY 2021
        </div>
    </div>





    <script>
    // const text = document.querySelector('.text');
    // text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>")
    // const element = document.querySelectorAll('span');
    // for (let i = 0; i < element.length; i++) {
    //     element[i].style.animationDelay = i * 0.05 + 's';
    // }

    $('.brand-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://noobarmy.org/vulncon/js/index.js"></script>

</body>

</html>
