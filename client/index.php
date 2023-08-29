<?php
include "../admin/dbconnect.php";
include "./login-check.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookMyTrip</title>
    <link rel="stylesheet" href="./main.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <div style="position: relative">
        <header>
            <nav class="innerWidth paddings flexCenter header">
                <div class="navlogo"><img src="./companies/logo.jpeg" alt=""></div>
                <div class="flexCenter navlinks">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#hotels">Hotels</a>
                    <a href="#faq">Services</a>
                    <a href="#contact">Contact Us</a>
                    <a href="<?php echo SITEURL ?>client/client-logout.php"><button>Logout</button> </a>
                </div>
                <div class="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>
        <div class="white" style="
                    height: 20rem;
                    width: 20rem;
                    border-radius: 50%;
                    position: absolute;
                    background-color: white;
                    filter: blur(150px);
                "></div>
        <section class="hero-container">
            <div class="innerWidth paddings flexCenter hero">
                <div class="flexColStart hero-left">
                    <div class="hero-title">
                        <h1 class="flexColStart">
                            <span> Discover </span>
                            <span> Most Suitable </span>
                            <span> Rooms For you</span>
                        </h1>
                    </div>
                    <div class="hero-desc flexColStart">
                        <span className="secondaryText">
                            Find a variety of rooms that suit you very
                            easily
                        </span>
                        <span className="secondaryText">
                            Forget all difficulties in finding a hotel rooms
                            for you
                        </span>
                    </div>
                    <div class="flexCenter search-bar">
                        <i class="fa-solid fa-location-pin"></i>
                        <input type="text" placeholder="Search for room and hotels" />
                        <button class="btn">Search</button>
                    </div>

                    <div class="flexCenter stats">
                        <div class="flexColStart stat">
                            <span class="premium">8</span>

                            <span class="secondaryText">Premium Hotels</span>
                        </div>
                        <div class="flexColStart stat">
                            <span class="hotels">100+</span>
                            <span class="secondaryText">Hotels</span>
                        </div>
                        <div class="flexColStart stat">
                            <span class="costumer">10K+</span>
                            <span class="secondaryText">Happy Costumers</span>
                        </div>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2467285/pexels-photo-2467285.jpeg?cs=srgb&dl=pexels-julie-aagaard-2467285.jpg&fm=jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="c-wrapper">
        <div class="paddings innerwidth flexCenter c-container">
            <img src="./companies/prologis.png" alt="" />
            <img src="./companies/tower.png" alt="" />
            <img src="./companies/equinix.png" alt="" />
            <img src="./companies/realty.png" alt="" />
        </div>
    </section>

    <section class="value" id="hotels">
        <div class="paddings innerWidth flexColStart v-container">
            <h1 style="
                        color: white;
                        margin-bottom: 2rem;
                        font-weight: bold;
                        font-size: 2rem;
                    ">
                Our Premium Hotels
            </h1>

            <div class="swiper innerWidth" style="position: relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r1.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r2.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r3.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r1.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r2.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r3.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>47,024</span>
                            </span>
                            <span class="primaryText">
                                Aliva Priva Jardin
                            </span>
                            <span class="secondaryText">
                                Jakarta Garden City Street, Cakung. Pulo
                                Gadung, Jakarta Timur, DKI Jakarta
                            </span>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <a href="" class="showmore"><button class="btn">
                    Show more
                    <ion-icon name="caret-down-outline"></ion-icon></button></a>
        </div>
    </section>

    <section class="hotels">
        <div class="paddings innerWidth flexColStart v-container">
            <h1 style="
                        color: white;
                        margin-bottom: 2rem;
                        font-weight: bold;
                        font-size: 2rem;
                    ">
                Our Other Availables
            </h1>

            <div class="swiper innerWidth" style="position: relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r2.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r3.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r1.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r2.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r3.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r1.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flexColStart r-card">
                            <img src="./hotels/r2.png" alt="home" />

                            <span class="secondaryText r-price">
                                <span style="color: orangered"> Rs </span>
                                <span>15,999</span>
                            </span>
                            <span class="primaryText">
                                Citralan Puri Serang
                            </span>
                            <span class="secondaryText">
                                Ruko Puri Indah Residence Block A7, Lingkar
                                Street, Ciracas, Serang, Banten
                            </span>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <a href="" class="showmore"><button class="btn ">
                    Show more
                    <ion-icon name="caret-down-outline"></ion-icon></button></a>
        </div>
    </section>

    <section class="paddings innerWidth flexCenter frequently" id="faq">
        <div class="faq-left">
            <div class="image-container">
                <img src="https://images.pexels.com/photos/2467285/pexels-photo-2467285.jpeg?cs=srgb&dl=pexels-julie-aagaard-2467285.jpg&fm=jpg" alt="" />
            </div>
        </div>
        <div class="faq-right">
            <div class="faq">
                <h1>Frequently Asked Questions</h1>
                <div class="question">
                    <p>What is BookMyTrip?</p>
                    <ion-icon name="add-outline" class="md hydrated active"></ion-icon>
                </div>
                <p class="faqanswer active">
                    BookMyTrip is a premier online platform dedicated to
                    hotel bookings, offering an extensive range of options
                    for customers seeking the best hotel accommodations for
                    their travel needs. Ensuring utmost privacy and
                    security, BookMyTrip guarantees the confidentiality of
                    customer bookings, safeguarding sensitive information.
                    Discover a diverse selection of hotels and enjoy a
                    seamless booking experience.
                </p>
                <div class="question">
                    <p>
                        How does BookMyTrip prioritize security for hotel
                        bookings?
                    </p>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <p class="faqanswer">
                    At BookMyTrip, the security of customer bookings is
                    paramount. Rigorous security measures are implemented to
                    protect personal and payment data. The platform employs
                    cutting-edge encryption protocols to secure sensitive
                    information and provides secure payment gateways for
                    safe transactions. Rest assured, your hotel bookings on
                    BookMyTrip are secure and worry-free.
                </p>
                <div class="question">
                    <p>Why choose BookMyTrip for hotel bookings?</p>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <p class="faqanswer">
                    BookMyTrip stands out with its vast network of hotels
                    spanning multiple destinations, ensuring a perfect
                    lodging choice for every traveler. The platform offers
                    user reviews, ratings, and detailed hotel descriptions
                    to facilitate well-informed decisions. With
                    round-the-clock customer support, convenient booking
                    options, and an intuitive interface, BookMyTrip is the
                    ideal platform for hassle-free hotel bookings.
                </p>
                <div class="question">
                    <p>How can I ensure the privacy of my hotel booking?</p>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <p class="faqanswer">
                    Privacy is a top priority at BookMyTrip. Your hotel
                    booking information remains confidential and will never
                    be shared without your consent. Advanced security
                    protocols are in place to safeguard your personal
                    details. Feel confident making hotel bookings on Trip
                    Server, knowing your privacy is safeguarded.
                </p>
                <div class="question">
                    <p>
                        What additional features does BookMyTrip provide?
                    </p>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <p class="faqanswer">
                    In addition to hotel bookings, BookMyTrip offers a
                    comprehensive range of travel-related services,
                    including flight bookings, vacation packages, and more.
                    Explore curated travel options, access exclusive deals,
                    and easily manage your bookings through the BookMyTrip
                    website and app.
                </p>
                <div class="question last">
                    <p>
                        Is BookMyTrip suitable for both leisure and
                        business travelers?
                    </p>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <p class="faqanswer">
                    Absolutely! BookMyTrip caters to the needs of both
                    leisure and business travelers, offering a diverse
                    collection of hotels suitable for various preferences
                    and budgets. Whether you're planning a relaxing escape
                    or a business trip, BookMyTrip has you covered with its
                    wide array of options.
                </p>
            </div>
        </div>
    </section>

    <section class="paddings innerWidth flexCenter contact" id="contact">
        <div class="contact-left flexColStart">
            <h1>Feel free to contact us</h1>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }

            ?>
            <form action="" method="post">
                <div class="contact-form">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input autocomplete="off" type="text" id="name" name="name" placeholder="Full name" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input autocomplete="off" type="email" id="email" name="email" placeholder="Email address" required />
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="6" placeholder="Enter your queries here" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="contact-right">
            <div class="image-container">
                <img src="https://images.pexels.com/photos/2467285/pexels-photo-2467285.jpeg?cs=srgb&dl=pexels-julie-aagaard-2467285.jpg&fm=jpg" alt="" />
            </div>
        </div>
    </section>

    <section class="innerWidth footer">
        <footer>
            <div class="contactus">
                <a href="#contact">Have Questions? Contact Us</a>
            </div>
            <div class="footerlinks">
                <div><a href="#faq">FAQ</a></div>
                <div><a href="#help-center">Help Center</a></div>
                <div><a href="#account">Account</a></div>
                <div><a href="#media-center">Media Center</a></div>
                <div>
                    <a href="#investor-relations">Investor Relations</a>
                </div>
                <div><a href="#jobs">Jobs</a></div>
                <div><a href="#ways-to-book">Ways to Book</a></div>
                <div><a href="#terms-of-use">Terms of Use</a></div>
                <div><a href="#privacy">Privacy</a></div>
                <div>
                    <a href="#cookie-preferences">Cookie Preferences</a>
                </div>
                <div>
                    <a href="#corporate-info">Corporate Information</a>
                </div>
                <div><a href="#speed-test">Speed Test</a></div>
                <div><a href="#legal-notices">Legal Notices</a></div>
                <div>
                    <a href="#explore-destinations">Explore Destinations</a>
                </div>
            </div>
            <div id="country">
                <ion-icon name="globe-outline"></ion-icon>
                <select name="">
                    <option value="">English</option>
                    <option value="">Spanish</option>
                </select>
            </div>
            <p style="
                        letter-spacing: '3px';
                        color: rgb(218, 23, 23);
                        font-size: 20px;
                        text-align: center;
                    ">
                BookMyTrip &copy; Since 2020
            </p>
        </footer>
    </section>

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/0e6b598a65.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            speed: 400,
            spaceBetween: 10,
            slidesPerView: 4,
            allowSlideNext: true,
            allowSlidePrev: true,
            pagination: {
                el: ".swiper-pagination",
                type: "bullet",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>

</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO tbl_message(name, email, message)
    VALUES('$name', '$email', '$message')
    ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['message'] = "<div class='success'>Thank You for sending message. We have received your message</div>";
        // header("location:" . SITEURL . "client/index.php");
        echo "
        <script>
        window.location.href = 'http://localhost/pro/client/index.php#contact' 
        </script>
        ";
    } else {
        $_SESSION['message'] = "<div class='failed'>Message didn't sent. Try again later</div>";
        // header("location:" . SITEURL . "client/index.php");
        echo "
        <script>
        window.location.href = " . SITEURL . "'client/index.php#contact' 
        </script>
        ";
    }
}

?>