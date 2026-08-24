<!-- BAGIAN PHP -->

<!-- BAGIAN HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#" class="font-bold text-primary block py-6">My Portfolio</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 
                        ease-in-out  origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 
                        ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 
                        ease-in-out origin-bottom-left "></span>
                    </button>
                    <nav id="menu" class="hidden absolute py-5 
                    bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text base-text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text base-text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text base-text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#client" class="text base-text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                            </li>
                            <li class="group">
                                <a href="games" class="text base-text-dark py-2 mx-8 flex group-hover:text-primary">Games</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->
    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="sohardto text-base font-semibold text-primary md:text-xl"> </h1>
                    <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Muhammad Rizky Fauzan</span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Freelance | <span class="text-dark">Frontend Developer</span></h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">this is Fauzan you can call me Zan <span class="text-dark font-bold"> i am Frontend Developer and UI/UX DESIGN.</span></p>

                    <a href="cv.pdf" class="text-base bg-primary py-3 px-8 rounded-full button" download>Download CV</a>
                    <a href="#about" class="text-base bg-primary py-3 px-8 rounded-full button">Read More</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2" data-aos="fade-up" data-aos-duration="1300">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                         <img src="dist/img/profilee.png"
                             style="width:300px;height:300px;border-radius:50%;object-fit:cover;"
                              class="mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2" data-aos="fade-right" data-aos-duration="1400">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">About Me!</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Hello World!</h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Halo! Saya Muhammad Rizky Fauzan, pemuda berusia 18 tahun asal Jakarta Selatan yang 
        memiliki minat besar di bidang teknologi. Saya tertarik pada pengembangan website, pemrograman, dan desain antarmuka 
        (UI/UX), serta senang mempelajari hal-hal baru yang dapat meningkatkan kemampuan saya di dunia digital.
        Saya bercita-cita menjadi pribadi yang sukses melalui karya dan inovasi teknologi yang bermanfaat bagi banyak orang. Di waktu 
        luang, saya senang bermain game untuk melatih fokus dan kerja sama tim, serta rutin 
        berolahraga seperti workout dan jogging untuk menjaga kesehatan dan kebugaran tubuh.
        Dengan semangat belajar dan berkembang, saya terus berusaha meningkatkan keterampilan serta menciptakan karya digital 
        yang kreatif dan berdampak positif.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2" data-aos="fade-left" data-aos-duration="1500">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg-text-3xl lg:pt-10">Apa yang saya lakukan</h3>
                    <p class="font-medium text-base text-slate-500 mb-6 md:text-lg">Saya biasa berfokus pada pembuatan website yang modern dan responsif. Saya senang mengubah ide menjadi produk digital yang bermanfaat.</p>
                    <div class="flex item-center">
                        <!-- Angular -->
                        <a href="https://github.com/Yourmind5235" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 text-dark
                            hover:border-primary hover:bg-primary hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Github</title>
                                <path data-name="layer2" d="M32 0a32.021 32.021 0 0 0-10.1 62.4c1.6.3 2.2-.7 2.2-1.5v-6c-8.9 1.9-10.8-3.8-10.8-3.8-1.5-3.7-3.6-4.7-3.6-4.7-2.9-2 .2-1.9.2-1.9 3.2.2 4.9 3.3 4.9 3.3 2.9 4.9 7.5 3.5 9.3 2.7a6.93 6.93 0 0 1 2-4.3c-7.1-.8-14.6-3.6-14.6-15.8a12.27 12.27 0 0 1 3.3-8.6 11.965 11.965 0 0 1 .3-8.5s2.7-.9 8.8 3.3a30.873 30.873 0 0 1 8-1.1 30.292 30.292 0 0 1 8 1.1c6.1-4.1 8.8-3.3 8.8-3.3a11.965 11.965 0 0 1 .3 8.5 12.1 12.1 0 0 1 3.3 8.6c0 12.3-7.5 15-14.6 15.8a7.746 7.746 0 0 1 2.2 5.9v8.8c0 .9.6 1.8 2.2 1.5A32.021 32.021 0 0 0 32 0z" fill="#202020"></path>
                                <path data-name="layer1" d="M12.1 45.9c-.1.2-.3.2-.5.1s-.4-.3-.3-.5.3-.2.6-.1c.2.2.3.4.2.5zm1.3 1.5a.589.589 0 0 1-.8-.8.631.631 0 0 1 .7.1.494.494 0 0 1 .1.7zm1.3 1.8a.585.585 0 0 1-.7-.3.6.6 0 0 1 0-.8.585.585 0 0 1 .7.3c.2.3.2.7 0 .8zm1.7 1.8c-.2.2-.5.1-.8-.1-.3-.3-.4-.6-.2-.8a.619.619 0 0 1 .8.1.554.554 0 0 1 .2.8zm2.4 1c-.1.3-.4.4-.8.3s-.6-.4-.5-.7.4-.4.8-.3c.3.2.6.5.5.7zm2.6.2c0 .3-.3.5-.7.5s-.7-.2-.7-.5.3-.5.7-.5c.4.1.7.3.7.5zm2.4-.4q0 .45-.6.6a.691.691 0 0 1-.8-.3q0-.45.6-.6c.5-.1.8.1.8.3z" fill="#202020"></path>
                            </svg></a>

                        <!-- React -->
                        <a href="https://reactjs.org/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 text-dark
                            hover:border-primary hover:bg-primary hover:text-white"><svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>React</title>
                                <path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
                            </svg></a>

                        <!-- discord -->
                        <a href="https://discord.gg/BHT49YR4tf" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 text-dark
                            hover:border-primary hover:bg-primary hover:text-white"><svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Discord</title>
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z" />
                            </svg></a>

                        <!-- Selengkapnya -->
                        <a href="#" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 text-dark
                            hover:border-primary hover:bg-primary hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <title>Read More</title>
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z " />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Project</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">These are projects I've worked on. You can scroll down and see the results of all the projects I've worked on</p>


                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/projectpt.png" alt="none" srcset="" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><a href="#" class="hover:text-primary">My WordPress Project</a></h3>
                    <p class="font-medium text-base text-secondary md:text-lg">Project website PT Tenma Agung Lestari, perusahaan yang menyediakan solusi energi surya dan instalasi solar panel untuk kebutuhan rumah tangga maupun industri.</p>

                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/project2.png" alt="Mobil" srcset="" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><a href="#" class="hover:text-primary">My WordPress Project</a></h3>
                    <p class="font-medium text-base text-secondary md:text-lg">Website toko kacamata Noor Optical yang saya buat untuk menampilkan produk, layanan pemeriksaan mata, dan memudahkan pelanggan melakukan pemesanan kacamata.</p>

                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/image.png" alt="Mobil" srcset="" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><a href="https://birohmatika.com/alif/" target="_blank" class="hover:text-primary">ENCTAUNTY WEB (Personal Web)</a></h3>
                    <p class="font-medium text-base text-secondary md:text-lg">I made this website because I was confused and wanted to make a project. At first I made this website around 2021 and at that time I was confused about what to do and finally I decided to make a website.</p>

                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/image (2).png" alt="Mobil" srcset="" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><a href="javascript:;" target="_blank" class="hover:text-primary">Quiz</a></h3>
                    <p class="font-medium text-base text-secondary md:text-lg hover:text-pri">what is quiz? According to <a class="text-primary hover:text-secondary" href="https://id.wikipedia.org/wiki/Kuis" target="_blank" rel="noopener noreferrer">Wikipedia</a> Quiz Is an equivalent word or synonym for a puzzle game, which usually has prizes. In general, quizzes are known through television shows which are broadcast regularly every week or every day. And I made this quiz Very Random</p>

                </div>
            </div>
    </section>
    <!-- Portfolio End -->

    <!-- Client Section -->
    <section id="client" class="pt-36 pb-32 bg-slate-700">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Follow Me!</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl
                    lg:text-5xl">My Social Media</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">LLOOLL</p>


                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="https://www.tiktok.com/@janelovgames" 
                         target="_blank" 
                         rel="noopener noreferrer" 
                         class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                         <img src="dist/img/clients/tiktok-icon.svg" width="74" title="TikTok" alt="TikTok" />
                    <a href="https://open.spotify.com/user/31vf73qyzoamfssgvwsk5ib7yrrm?si=187acdad53644568" 
                         target="_blank" 
                         rel="noopener noreferrer" 
                         class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                         <img src="dist/img/clients/Spotify_icon.svg.png" width="65" title="Spotify" alt="Spotify" />
                    </a>
                    <a href="https://github.com/Zetaa-W2E" 
                         target="_blank" 
                         rel="noopener noreferrer" 
                         class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                         <img src="dist/img/clients/960px-Octicons-mark-github.svg.webp" width="60" title="Github" alt="Github" />
                    </a>
                    <a href="https://www.instagram.com/zo__janeee/" 
                         target="_blank" 
                         rel="noopener noreferrer" 
                         class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                         <img src="dist/img/clients/Instagram.svg.webp" width="65" title="Instagram" alt="Instagram" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->

    <!-- CONTACT SECTION  -->
    <section id="contact" class="pt-36 pb-32">
        
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Contact Me At Here!</h2>
                </div>
            </div>
            <form method="post">
                <div class="w-full lg:w-2/3 lg:m-auto">

                    <div class="w-full px-4 mb-8 field-text field-middle">
                        <label for="name" class="text-base font-bold text-primary">
                            Name </label>
                        <input type="text" name="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">
                            Email</label>
                        <input type="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label class="text-base font-bold text-primary">
                            Message</label>
                        <textarea name="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" required></textarea>
                        <div class="w-full px-4">

                            <button type="submit" class="w-full text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:opacity-80 hover:shadow-lg transition duration-500 btn-kirim">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT SECTION ENDS -->

    <!-- FOOTER SECTION -->
    <section class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">CONTACT US</h2>
                    <h3 class="font-bold text-xl mb-2">You can contact me with these!</h3>
                    <p>mrizkyfauzan088@gmail.com</p>
                    <p>+62 88973175400</a></p>
                    <p>I Live in South Jakarta</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">
                        Kategori Tulisan
                    </h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- FOOTER SECTION ENDS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            once: true

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.sohardto', {
            duration: 5,
            delay: 0.5,
            text: ' Hello, Welcome! I am '
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="dist/js/script.js"></script>

</body>

</html>