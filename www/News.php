<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
</head>

<body>
    <section id="main">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="Home.php">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="About.php">About</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="Contact.php">Contact</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="News.php">News</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SignUp">
                                Sign Up
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SignIn">
                                Sign In
                            </button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-center">News</h1>
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">Culture, careers and a world-class <a href="https://twitter.com/hashtag/education?src=hash&amp;ref_src=twsrc%5Etfw">#education</a>. Read more: <a href="https://t.co/FdFFyb1zYe">https://t.co/FdFFyb1zYe</a> <a href="https://t.co/UYFvzsq1Fo">pic.twitter.com/UYFvzsq1Fo</a></p>&mdash;
                        World Economic Forum (@wef) <a href="https://twitter.com/wef/status/1036540333625147392?ref_src=twsrc%5Etfw">September 3, 2018</a></blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">To all Black students returning 2 school or starting post secondary, you are your ancestors&#39; wildest dreams. Our ancestors were persecuted or killed if they attempted to pursue knowledge via reading and writing.<a href="https://twitter.com/hashtag/Education?src=hash&amp;ref_src=twsrc%5Etfw">#Education</a>                            was illegal for our ancestors. <a href="https://t.co/kZiSN5wIwu">https://t.co/kZiSN5wIwu</a> <a href="https://t.co/sPhTJ1opmg">pic.twitter.com/sPhTJ1opmg</a></p>&mdash; @PAACEonthemove (@PAACEonthemove) <a href="https://twitter.com/PAACEonthemove/status/1036746932331241472?ref_src=twsrc%5Etfw">September 3, 2018</a></blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

               

    </section>
    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="Home.php">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="About.php">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="Contact.php">Contact</a>
                </li>
                <li class="list-inline-item">
                    <a href="News.php">News</a>
                </li>
                <li>
                    <button type="button" class="btn btn-link " data-toggle="modal" data-target="#PolicyDocument">
                        Policy Document
                    </button>
                </li>
            </ul>
            <p class="copyright">Edu © 2017</p>
        </footer>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="email">
                            <b>Email</b>
                        </label>
                        <br>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <br>

                        <label for="psw">
                            <b>Password</b>
                        </label>
                        <br>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>

                        <label for="psw-repeat">
                            <b>Repeat Password</b>
                        </label>
                        <br>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                        <label>
                            <input type="radio" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <p>By creating an account you agree to our
                            <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h1>Sign In</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="email">
                            <b>Email</b>
                        </label>
                        <br>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <br>

                        <label for="psw">
                            <b>Password</b>
                        </label>
                        <br>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>


                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="PolicyDocument" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service. If you choose to use our Service, then you agree to the collection and use of information
                    in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy. The terms used
                    in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at , unless otherwise defined in this Privacy Policy. Information Collection and Use For a better experience while using our Service,
                    we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you. Log
                    Data We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer’s Internet Protocol (“IP”) address,
                    browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics. Cookies Cookies are files with small amount of data that is commonly used an anonymous unique
                    identifier. These are sent to your browser from the website that you visit and are stored on your computer’s hard drive. Our website uses these “cookies” to collection information and to improve our Service. You have the option to
                    either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service. Service Providers We may employ third-party
                    companies and individuals due to the following reasons: To facilitate our Service; To provide the Service on our behalf; To perform Service-related services; or To assist us in analyzing how our Service is used. We want to inform our
                    Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.
                    Security We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic
                    storage is 100% secure and reliable, and we cannot guarantee its absolute security. Links to Other Sites Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that
                    these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of
                    any third-party sites or services. Children’s Privacy Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child
                    under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that
                    we will be able to do necessary actions. Changes to This Privacy Policy We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by
                    posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page. Contact Us If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>