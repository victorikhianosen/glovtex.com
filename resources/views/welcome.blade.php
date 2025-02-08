<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <title>Glovtex Telecommunication Limited is an engineering company</title>

    <script>
        tailwind.config = {
            theme: {
                screens: {
                    sm: "480px",
                    md: "768px",
                    lg: "1020px",
                    xl: "1440px",
                },
                extend: {
                    fontFamily: {
                        sans: ["Lora", "serif"],
                    },
                },
            },
            plugins: [],
        };
    </script>
</head>

<body>




    <div class="relative">

        <div id="mobileMenu"
            class="absolute top-0 left-0 w-1/5 h-screen z-10 bg-white transform -translate-x-full transition-transform duration-300">

            <div class="px-12 py-44 space-y-8">
                <a href="" class="text-[#F58220] block uppercase font-bold text-base">
                    Glovtex Oil & Gas
                </a>

                <a href="" class="text-[#F58220] block uppercase font-bold text-base">
                    Glovtex Telecommunication
                </a>
            </div>
        </div>



        <section>
            <div class="container mx-auto p-6 xl:px-16 bg-white">
                <div class="flex justify-between">
                    <div>
                        <img class="w-38" src="{{ asset('assets/images/double-logo.png') }}" alt="" />
                    </div>

                    {{-- Hambuger menu --}}
                    <div>
                        <img id="menuIcon" class="w-10 cursor-pointer" src="{{ asset('assets/images/menu.svg') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="h-[80vh] w-screen">
            <div class="swiper mySwiper h-full w-full">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide min-h-[80vh] w-screen bg-[url('/assets/images/pipe.jpg')] bg-cover bg-center bg-no-repeat flex items-center justify-center">
                        <div class="text-center flex flex-col items-center justify-center mx-auto pt-24">
                            <h1 class="text-white text-[48px] font-bold">OIL AND GAS</h1>
                            <p class="text-white text-[24px] max-w-[40%] italic">
                                At Glovtex Oil and Gas limited, we offer services in various engineering constructions
                                with
                                our preventive and corrective operations and maintenance.
                            </p>
                            <a href="{{ url('https://staging.glovtex.com/') }}"
                                class="bg-[#f58220] text-white px-12
                        text-[20px] tracking-wider py-2 mt-12 transition-all duration-200 hover:opacity-90">
                                Visit Glovtex Oil & Gas Limited</a>
                        </div>
                    </div>
                    <div
                        class="swiper-slide min-h-[80vh] w-screen bg-[url('/assets/images/tele.png')] bg-cover bg-center bg-no-repeat flex items-center justify-center">
                        <div class="text-center flex flex-col items-center justify-center mx-auto pt-24">
                            <h1 class="text-white text-[48px] font-bold">TELECOMMUNICATION</h1>
                            <p class="text-white text-[24px] max-w-[40%] italic">
                                Glovtex Telecommunication Limited is an engineering company specializing in the
                                development
                                of Telco (Core/IN, Rollout and Maintenance) solutions for the GSM and wireless
                                communication
                                industry


                            </p>
                            <a href="{{ url('https://staging.glovtex.com/') }}"
                                class="bg-[#f58220] text-white px-12
                        text-[20px] tracking-wider py-2 mt-12 transition-all duration-200 hover:opacity-90">
                                Visit Glovtex Telecommunication Limited</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section>
            <div class="bg-[#f58220] text-white text-center text-[12px] py-4">
                Copyright &copy; {{ date('Y') }} Glovtex.
            </div>
        </section>
    </div>






    <script>
        document.getElementById('menuIcon').addEventListener('click', function() {
            let menu = document.getElementById('mobileMenu');
            menu.classList.toggle('-translate-x-full');
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


</body>

</html>
