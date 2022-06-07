</li>
                        </ul>
                    </div>
                </div>
            </nav>
            <header class="bg-primary py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Paws need houses too...</h1>
                                <p class="lead fw-normal text-white-50 mb-4">We offer to give a chance to a little and nice puppy with an extremely wide and open heart. He or she will love you more than anybody else in the world, you will see!</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <?php
                                        if(isset($_SESSION["ID"]))
                                        {
                                            echo "<a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=../Controllers/Logout.php>Logout</a>";
                                        }
                                        else
                                        {
                                            echo "<a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=Login.php>Login</a>";
                                        }
                                    ?>
                                    <a class="btn btn-outline-light btn-lg px-4" href="about.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="../assets/cover.png" alt="buddy" /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Our shelter's services...</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Capture and Deliver </h2>
                                    <p class="mb-0">We offer pet collection and relocation to our care unit.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Animal Grooming</h2>
                                    <p class="mb-0">When your pet gets too dirty and you can’t find the time to handle the messy situation, it’s time to send them to the groomer! For a nail clipping, hair trimming, fun and exciting experience for your pet.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Trained Specialists</h2>
                                    <p class="mb-0">staffed by trained specialists dedicated to the safe recovery of your lost pet. Enroll your pet's microchip with HomeAgain and your contact information will be tied to the microchip's unique ID code. If your pet becomes lost, veterinarians and shelters can use a microchip scanner to find out how to contact you.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Rehoming</h2>
                                    <p class="mb-0">They try in extremely adverse conditions in a country where routine cruelty is the norm-to save dogs and cats struggling to survive. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">“I am a huge animal lover. Growing up, my mother and I rescued countless animals – dogs, cats, birds, rabbits, even a turtle. I have been accused of caring more about animals than I do about people.” —</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        Tom Ato
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, Yasmine Khaled
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">From our blog</h2>
                                <p class="lead fw-normal text-muted mb-5">We care about those creatures, do you?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="../Assets/Dog1.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Spark</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Kids Unite !</h5></a>
                                    <p class="card-text mb-0">Surprise Visit from GPIS! </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="../Assets/Boy1.jpg" alt="..." width="40px"/>
                                            <div class="small">
                                                <div class="fw-bold">Ahmed Adel</div>
                                                <div class="text-muted">March 12, 2021 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="../Assets/Dog2.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Lilly Meets Her New Owner</h5></a>
                                    <p class="card-text mb-0">There are some things we can do to help them settle and feel safe in those first few days. Keep in mind though, that it generally takes about three weeks for a dog or puppy to start to feel 'at home' and to show their true nature. </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="../Assets/Boy2.jpg" alt="..." width="40px" />
                                            <div class="small">
                                                <div class="fw-bold">Emad Khaled</div>
                                                <div class="text-muted">April 2, 2019 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="../Assets/Dog3.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Making friends</h5></a>
                                    <p class="card-text mb-0">Jana feeds her paw friends</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="../Assets/boy3.jpg" alt="..." width="40px"/>
                                            <div class="small">
                                                <div class="fw-bold">Ahmad Saed</div>
                                                <div class="text-muted">June 16, 2020 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <form  action:"https://formcarry.com/s/6VO9i8J2N8m" method="POST" accept-charset="UTF-8">
                                        <input  class="form-control" type="email" name="email" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                    </form>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; ASU 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
