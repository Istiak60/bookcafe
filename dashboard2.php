<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard2</title>
        <link rel="stylesheet" href="style1.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

        <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <section class="header">
            <nav>
                <div class="book_icon">
                    <i class="fas fa-book-open"></i>
                    <h2>Book Cafee</h2>
                </div>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">CONTACT</a></li>
                        <li><a href="">PROFILE</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                        <li>
                            <a
                                class="btn btn-secondary dropdown-toggle"
                                href="#"
                                role="button"
                                id="dropdownMenuLink"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="
                                    background-color: rgba(0, 0, 0, 0.01);
                                    border: 0px;
                                "
                                >CATEGORIES
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-dark"
                                aria-labelledby="dropdownMenuLink"
                            >
                                 <li><a class="dropdown-item"  href="#">Bangla Literature</a></li>
    <li><a class="dropdown-item" href="#">Nobels</a></li>
    <li><a class="dropdown-item" href="#">Poems</a></li>
    <li><a class="dropdown-item" href="#">Story</a></li>
    <li><a class="dropdown-item"  href="#">Fantasy</a></li>
    <li><a class="dropdown-item" href="#">Horror</a></li>
    <li><a class="dropdown-item" href="#">Advanture</a></li>
    <li><a class="dropdown-item" href="#">Comics</a></li>
    <li><a class="dropdown-item" href="#">Cookings</a></li>
    <li><a class="dropdown-item" href="#">Journals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Book Cafee</h1>
                <h4>Bangali Literature</h4>
            </div>
        </section>

        <!-- DEMO BOOK -->
        <div class="row-2">
            <h2>Books</h2>
            <select>
                <option>Default Sorting</option>
                <option>Short by Author</option>
                <option>Short by Popularity</option>
                <option>Short by Rating</option>
                <option>Short by Sale</option>
            </select>
        </div>
        <section class="books">
            <h1>Bangla Literature</h1>
            <p>Some of Best Selling & Reviewed Books</p>
            <div class="row1">
                <div class="book-col">
                    <img src="img/1.jpg" />
                    <h3>Desh Bideshe</h3>
                    <p>Sayed Muztaba Ali</p>
                </div>
                <div class="book-col">
                    <img src="img/2.jpeg" />
                    <h3>Chander Pahar</h3>
                    <p>Bivutivushan Bandhapadhay</p>
                </div>
                <div class="book-col">
                    <img src="img/3.jpg" />
                    <h3>Duniyar Ghonada</h3>
                    <p>Premedra Mitra</p>
                </div>
                <div class="book-col">
                    <img src="img/4.jpg" />
                    <h3>Bener Meye</h3>
                    <p>Haraprasad Shasri</p>
                </div>
                <div class="book-col">
                    <img src="img/5.jpg" />
                    <h3>Chawthupir Charjapad</h3>
                    <p>Pritom Basu</p>
                </div>
            </div>
            <div class="row1">
                <div class="book-col">
                    <img src="img/6.jpg" />
                    <h3>History of Bangali Literature</h3>
                    <p>Sushil Kumar De</p>
                </div>
                <div class="book-col">
                    <img src="img/7.jpg" />
                    <h3>Bangla Rangalayer Itihas</h3>
                    <p>Shankar Bhattachariya</p>
                </div>
                <div class="book-col">
                    <img src="img/8.jpg" />
                    <h3>Ekjon Mayabati</h3>
                    <p>Humayum Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/humaun-2.jpg" />
                    <h3>Himu Samagera</h3>
                    <p>Humayun Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/rabindra-3.jpg" />
                    <h3>Kabuliwala</h3>
                    <p>Rabindranath Tagore</p>
                </div>
            </div>

            <div class="row1">
                <div class="book-col">
                    <img src="img/9.jpg" />
                    <h3>UralPankhi</h3>
                    <p>Humayum Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/10.jpg" />
                    <h3>Mahapurush</h3>
                    <p>Humayum Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/11.jpg" />
                    <h3>Duniyar Ghonada</h3>
                    <p>Humayum Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/12.jpg" />
                    <h3>Himur Nil Jochona</h3>
                    <p>Humayum Ahmed</p>
                </div>
                <div class="book-col">
                    <img src="img/16.jpeg" />
                    <h3>Pather Panchali</h3>
                    <p>Bivutivushan Bandhapadhay</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>
                We are trying to give books from our book cafe very easily and
                at low cost.<br />
                Since people are not interested in reading books now, we have
                taken this initiative.<br />
                Hopefully we will be able to deliver books to everyone's
                doorsteps
            </p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <p>made with <i class="fa fa-heart-o"></i> by BOOKS & SOULS</p>
        </section>
    </body>
</html>
