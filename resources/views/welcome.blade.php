<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flyte Pos</title>
    <!-- Tailwind CDN -->
    <script src="{{asset('assets')}}/js/tailwindcss.js"></script>
    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <!-- Swiper JS CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/css/index.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header>
      <!-- top nav -->
      <div class="bg-[#E7EDFF]">
        <div class="container font-roboto flex justify-end items-center gap-8">
          <div class="relative cursor-pointer group">
            <span class="flex items-center gap-2">
              <i class="fa-solid fa-globe"></i>
              EN
            </span>

            <div class="absolute pt-1 hidden group-hover:block w-max z-50">
              <p
                class="bg-white flex items-center gap-2 border border-black p-2"
              >
                Bengali
              </p>
              <p
                class="bg-white flex items-center gap-2 border border-black border-t-0 p-2"
              >
                English
              </p>
            </div>
          </div>

          <a href="#" class="hover:text-[#0E51FF]">Support</a>

          <a href="https://flytepos.com/login" class="flex items-center gap-2 hover:text-[#0E51FF]">
            Sign in
          </a>
        </div>
      </div>

      <!-- Bottom nav  -->
      <div
        class="relative container flex justify-between lg:items-center gap-2 mt-2"
      >
        <a
          href="https://www.flytepos.com"
          class="font-poppins text-[24px] font-semibold"
        >
          flyte<span class="text-[30px] font-bold">POS</span>.com
        </a>

        <!-- nav for small device -->
        <div class="lg:hidden" id="header-nav-menu">
          <button type="button" onclick="handleToggleNav()">
            <i class="fa-solid fa-bars text-3xl"></i>
          </button>
          <nav
            id="nav-for-SM"
            class="lg:hidden absolute top-16 bg-white p-3 z-10 h-screen w-full ease-in-out duration-500 -left-full"
          >
            <ul
              class="flex flex-col gap-5 lg:gap-14 font-inter font-medium text-[18px]"
            >
              <div
                class="relative group overflow-hidden hover:overflow-visible cursor-pointer w-fit"
              >
                <a
                  href="#resource"
                  class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
                >
                  Products
                  <i
                    class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                  ></i>
                </a>
                <ul
                  class="absolute left-2 flex flex-col pt-2 pe-2 opacity-0 group-hover:opacity-100 group-hover:relative"
                >
                  <div
                    class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                  ></div>
                  <a
                    href="#resource"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Small Business ERP</a
                  >
                  <a
                    href="#resource"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >POS System</a
                  >
                </ul>
              </div>
              <div
                class="relative group overflow-hidden hover:overflow-visible cursor-pointer w-fit"
              >
                <a
                  href="#serviceToIndustries"
                  class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
                >
                  Industry
                  <i
                    class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                  ></i>
                </a>
                <ul
                  class="absolute left-2 flex flex-col pt-2 pe-2 opacity-0 group-hover:opacity-100 group-hover:relative"
                >
                  <div
                    class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                  ></div>
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Industrial Manufacturing</a
                  >
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Hight Tech & Electronics</a
                  >
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Food & Beverage</a
                  >
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Furnitures & Fixtures</a
                  >
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Rubber & Plastics</a
                  >
                </ul>
              </div>
              <a
                href="#"
                class="hover:text-[#0E51FF] font-semibold cursor-pointer"
              >
                Pricing
              </a>
              <div
                class="relative group overflow-hidden hover:overflow-visible cursor-pointer w-fit"
              >
                <a
                  href="#serviceToIndustries"
                  class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
                >
                  Company
                  <i
                    class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                  ></i>
                </a>
                <ul
                  class="absolute left-2 flex flex-col pt-2 pe-2 opacity-0 group-hover:opacity-100 group-hover:relative"
                >
                  <div
                    class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                  ></div>
                  <a
                    href="#review"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Company OVerview</a
                  >
                  <a
                    href="#serviceToIndustries"
                    class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                    >Company Profile</a
                  >
                </ul>
              </div>
            </ul>
            <div class="flex lg:hidden gap-2 mt-5">
              <button
                class="w-[135px] whitespace-nowrap tracking-wider font-roboto font-semibold border-2 border-black px-4 py-2 mr-4 hover:bg-[#00000015] duration-300"
              >
                Free Demo
              </button>
              <button
                class="w-[135px] flex items-center gap-2 font-roboto font-semibold whitespace-nowrap tracking-wider border-2 border-black px-4 py-2 bg-black text-white hover:border-[#0E51FF] hover:bg-white hover:text-[#0E51FF] duration-300"
              >
                <IoCallOutline />
                Call Now
              </button>
            </div>
          </nav>
        </div>

        <!-- Menu  -->
        <!-- nav for large device  -->
        <nav class="hidden lg:block">
          <ul class="flex gap-5 lg:gap-14 font-inter font-medium text-[18px]">
            <div
              class="relative group overflow-hidden hover:overflow-visible cursor-pointer"
            >
              <a
                href="#resource"
                class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
              >
                Products
                <i
                  class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                ></i>
              </a>
              <ul
                class="absolute left-0 flex flex-col pt-2 opacity-0 group-hover:opacity-100"
              >
                <div
                  class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                ></div>
                <a
                  href="#resource"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Small Business ERP</a
                >
                <a
                  href="#resource"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >POS System</a
                >
              </ul>
            </div>
            <div
              class="relative group overflow-hidden hover:overflow-visible cursor-pointer"
            >
              <a
                href="#serviceToIndustries"
                class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
              >
                Industry
                <i
                  class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                ></i>
              </a>
              <ul
                class="absolute left-0 flex flex-col pt-2 opacity-0 group-hover:opacity-100"
              >
                <div
                  class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                ></div>
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Industrial Manufacturing</a
                >
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Hight Tech & Electronics</a
                >
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Food & Beverage</a
                >
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Furnitures & Fixtures</a
                >
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Rubber & Plastics</a
                >
              </ul>
            </div>
            <a
              href="#pricing"
              class="hover:text-[#0E51FF] font-semibold cursor-pointer"
            >
              Pricing
            </a>
            <div
              class="relative group overflow-hidden hover:overflow-visible cursor-pointer"
            >
              <a
                href="#serviceToIndustries"
                class="flex items-center gap-1 font-semibold group hover:text-[#0E51FF]"
              >
                Company
                <i
                  class="fa-solid fa-chevron-down group-hover:rotate-180 duration-500 text-xs"
                ></i>
              </a>
              <ul
                class="absolute left-0 flex flex-col pt-2 opacity-0 group-hover:opacity-100"
              >
                <div
                  class="absolute w-full h-full bg-white z-10 top-0 group-hover:top-full duration-1000 group-hover:h-0"
                ></div>
                <a
                  href="#review"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Company OVerview</a
                >
                <a
                  href="#serviceToIndustries"
                  class="bg-black text-white py-3 px-2 mb-2 text-xs tracking-wider whitespace-nowrap hover:bg-white hover:text-[#0E51FF]"
                  >Company Profile</a
                >
              </ul>
            </div>
          </ul>
        </nav>
        <div class="hidden lg:flex gap-2">
          <button
            class="w-[135px] whitespace-nowrap tracking-wider font-roboto font-semibold border-2 border-black px-4 py-2 mr-4 hover:bg-[#00000015] duration-300"
          >
            Free Demo
          </button>
          <button
            class="w-[135px] flex items-center gap-2 font-roboto font-semibold whitespace-nowrap tracking-wider border-2 border-black px-4 py-2 bg-black text-white hover:border-[#0E51FF] hover:bg-white hover:text-[#0E51FF] duration-300"
          >
            <i class="fa-solid fa-phone"></i>
            Call Now
          </button>
        </div>
      </div>
    </header>

    <!-- Banner -->
    <section class="container lg:mb-20">
      <div class="grid lg:grid-cols-2 items-center">
        <div class="pb-10 lg:py-[70px] lg:w-3/4">
          <h2 class="font-poppins font-medium text-[40px]">
            <span class="relative">
              Empowering
              <img
                src="{{asset('assets')}}/images/Ellipse1.png"
                alt=""
                class="absolute top-[44px] -z-10"
              />
            </span>
            <br />
            every facet of your
            <br />
            <span class="font-bold" id="typewriter"></span>
          </h2>
          <p class="font-poppins my-5">
            Integrated Accounting, CRM & HR Software for Business Growth.
            Integrated Accounting, CRM & HR Software for Business Growth.
          </p>
          <div class="flex gap-2">
            <button
              class="font-roboto font-medium whitespace-nowrap tracking-wider border-2 border-black px-4 py-2 w-[130px] mr-4 bg-black text-white hover:bg-transparent hover:text-[#0E51FF] hover:border-[#0E51FF] duration-300 active:scale-95"
            >
              Get Started
            </button>
            <button
              class="font-roboto font-medium whitespace-nowrap tracking-wider border-2 border-black px-4 py-2 w-[130px] hover:text-[#0E51FF] hover:border-[#0E51FF] duration-300 active:scale-95"
            >
              Explore
            </button>
          </div>
        </div>
        <div class="hidden lg:block">
          <img src="{{asset('assets')}}/images/bannerImg.png" alt="" class="w-full h-full" />
        </div>
      </div>

      <div class="flex gap-5 lg:gap-24">
        <div class="font-poppins">
          <img src="{{asset('assets')}}/images/groupreview.png" alt="" />
          <h5 class="font-semibol text-[18px] my-2">
            Friendly Customer Services
          </h5>
          <p>Integrated Accounting, CRM & HR Software.</p>
        </div>
        <div class="font-poppins">
          <img src="{{asset('assets')}}/images/Google.png" alt="" />
          <img src="{{asset('assets')}}/images/Frame 9.png" alt="" class="my-2" />
          <p>Integrated Accounting, CRM & HR Software.</p>
        </div>
      </div>
    </section>

    <!-- Tab Resource Planning -->
    <section id="resource" class="mb-5 mt-8 lg:mb-20">
      <!-- Tab Title -->
      <div class="container pb-0">
        <div
          class="font-poppins flex flex-wrap justify-center lg:grid lg:grid-cols-3 w-full lg:w-[1040px]"
        >
          <button
            onclick="handleShowTab('1')"
            id="tab_btn_1"
            class="relative flex items-center gap-3 text-sm font-medium lg:w-[300px] text-start border-4 border-b-0 border-[#0E51FF] rounded-t-2xl px-5 py-2 duration-200 border-8 bg-[#F2F6FF] text-[#0E51FF]"
          >
            <div
              id="tab_btn_1-border_remover"
              class="absolute -bottom-[2px] h-1 w-full bg-[#F2F6FF] -left-0"
            ></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="24"
              viewBox="0 0 26 24"
              fill="none"
            >
              <path
                id="svg_icon_1"
                d="M23.4 5.33333H18.2V2.66667L15.6 0H10.4L7.8 2.66667V5.33333H2.6C1.17 5.33333 0 6.53333 0 8V14.6667C0 15.6667 0.52 16.5067 1.3 16.9733V21.3333C1.3 22.8133 2.457 24 3.9 24H22.1C23.543 24 24.7 22.8133 24.7 21.3333V16.96C25.467 16.4933 26 15.64 26 14.6667V8C26 6.53333 24.83 5.33333 23.4 5.33333ZM10.4 2.66667H15.6V5.33333H10.4V2.66667ZM2.6 8H23.4V14.6667H16.9V10.6667H9.1V14.6667H2.6V8ZM14.3 16H11.7V13.3333H14.3V16ZM22.1 21.3333H3.9V17.3333H9.1V18.6667H16.9V17.3333H22.1V21.3333Z"
                fill="#0E51FF"
              />
            </svg>
            Small Business ERP
          </button>
          <button
            onclick="handleShowTab('2')"
            id="tab_btn_2"
            class="relative flex items-center gap-3 text-sm font-medium lg:w-[300px] text-start border-4 border-b-0 border-[#521A9B] rounded-t-2xl px-5 py-2 duration-200 bg-[#521A9B] text-white"
          >
            <div
              id="tab_btn_2-border_remover"
              class="absolute -bottom-[2px] h-1 w-full -left-0"
            ></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="24"
              viewBox="0 0 26 24"
              fill="none"
            >
              <path
                id="svg_icon_2"
                d="M23.4 5.33333H18.2V2.66667L15.6 0H10.4L7.8 2.66667V5.33333H2.6C1.17 5.33333 0 6.53333 0 8V14.6667C0 15.6667 0.52 16.5067 1.3 16.9733V21.3333C1.3 22.8133 2.457 24 3.9 24H22.1C23.543 24 24.7 22.8133 24.7 21.3333V16.96C25.467 16.4933 26 15.64 26 14.6667V8C26 6.53333 24.83 5.33333 23.4 5.33333ZM10.4 2.66667H15.6V5.33333H10.4V2.66667ZM2.6 8H23.4V14.6667H16.9V10.6667H9.1V14.6667H2.6V8ZM14.3 16H11.7V13.3333H14.3V16ZM22.1 21.3333H3.9V17.3333H9.1V18.6667H16.9V17.3333H22.1V21.3333Z"
                fill="#fff"
              />
            </svg>
            Retail POS
          </button>
          <button
            onclick="handleShowTab('3')"
            id="tab_btn_3"
            class="relative flex items-center gap-3 text-sm font-medium lg:w-[300px] text-start border-4 border-b-0 border-[#20B15A] rounded-t-2xl px-5 py-2 duration-200 bg-[#20B15A] text-white"
          >
            <div
              id="tab_btn_3-border_remover"
              class="absolute -bottom-[2px] h-1 w-full -left-0"
            ></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="24"
              viewBox="0 0 26 24"
              fill="none"
            >
              <path
                id="svg_icon_3"
                d="M23.4 5.33333H18.2V2.66667L15.6 0H10.4L7.8 2.66667V5.33333H2.6C1.17 5.33333 0 6.53333 0 8V14.6667C0 15.6667 0.52 16.5067 1.3 16.9733V21.3333C1.3 22.8133 2.457 24 3.9 24H22.1C23.543 24 24.7 22.8133 24.7 21.3333V16.96C25.467 16.4933 26 15.64 26 14.6667V8C26 6.53333 24.83 5.33333 23.4 5.33333ZM10.4 2.66667H15.6V5.33333H10.4V2.66667ZM2.6 8H23.4V14.6667H16.9V10.6667H9.1V14.6667H2.6V8ZM14.3 16H11.7V13.3333H14.3V16ZM22.1 21.3333H3.9V17.3333H9.1V18.6667H16.9V17.3333H22.1V21.3333Z"
                fill="#fff"
              />
            </svg>
            Restaurant
          </button>
        </div>
      </div>

      <!-- Tab Description  -->
      <!-- tab 1 -->
      <div id="resource_planing-tab_description">
        <div
          id="1"
          class="tab-description bg-[#F2F6FF] border-y-2 border-[#0E51FF] duration-200"
        >
          <div class="container grid lg:grid-cols-2 gap-14">
            <div class="font-poppins">
              <h5 class="my-10 font-semibold text-[22px] text-[#0E51FF]">
                Small Business Enterprise Resource.
              </h5>
              <ul class="space-y-4">
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
              </ul>
              <button
                type="button"
                class="bg-black text-white font-roboto tracking-wider flex items-center capitalize rounded-xl p-3 active:scale-95 duration-300 my-12"
              >
                start demo
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="19"
                  height="16"
                  viewBox="0 0 19 16"
                  fill="none"
                >
                  <path
                    d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z"
                    fill="#fff"
                  />
                </svg>
              </button>
            </div>
            <div class="hidden lg:block">
              <img src="{{asset('assets')}}/images/tab1.png" alt="" class="w-full my-10" />
            </div>
          </div>
        </div>

        <!-- tab 2 -->
        <div
          id="2"
          class="tab-description bg-[#F5EDFF] border-y-2 border-[#521A9B] duration-200 hidden"
        >
          <div class="container grid lg:grid-cols-2 gap-14">
            <div class="font-poppins">
              <h5 class="my-10 font-semibold text-[22px] text-[#0E51FF]">
                Small Business Enterprise Resource.
              </h5>
              <ul class="space-y-4">
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
              </ul>
              <button
                type="button"
                class="bg-black text-white font-roboto tracking-wider flex items-center capitalize rounded-xl p-3 active:scale-95 duration-300 my-12"
              >
                start demo
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="19"
                  height="16"
                  viewBox="0 0 19 16"
                  fill="none"
                >
                  <path
                    d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z"
                    fill="#fff"
                  />
                </svg>
              </button>
            </div>
            <div class="hidden lg:block">
              <img src="{{asset('assets')}}/images/tab2.png" alt="" class="w-full my-10" />
            </div>
          </div>
        </div>

        <!-- tab 2 -->
        <div
          id="3"
          class="tab-description bg-[#ECFBF2] border-y-2 border-[#20B15A] duration-200 hidden"
        >
          <div class="container grid lg:grid-cols-2 gap-14">
            <div class="font-poppins">
              <h5 class="my-10 font-semibold text-[22px] text-[#0E51FF]">
                Small Business Enterprise Resource.
              </h5>
              <ul class="space-y-4">
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
                <li class="flex gap-2 font-light text-sm">
                  <i
                    class="fa-solid fa-circle-check text-[#0E51FF] text-lg"
                  ></i>
                  Configure your sales and purchase cycles and provide
                  controlled access to your teams to manage daily transactions
                </li>
              </ul>
              <button
                type="button"
                class="bg-black text-white font-roboto tracking-wider flex items-center capitalize rounded-xl p-3 active:scale-95 duration-300 my-12"
              >
                start demo
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="19"
                  height="16"
                  viewBox="0 0 19 16"
                  fill="none"
                >
                  <path
                    d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z"
                    fill="#fff"
                  />
                </svg>
              </button>
            </div>
            <div class="hidden lg:block">
              <img src="{{asset('assets')}}/images/tab3.png" alt="" class="w-full my-10" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Service To Industries -->
    <section id="serviceToIndustries" class="container mb-5 lg:mb-20">
      <div class="font-poppins space-y-1 text-center">
        <h5 class="font-semibold text-3xl">INDUSTRIES WE SERVE</h5>
        <p class="text-sm">TRANSFORMING YOUR IDEAS INTO DIGITAL REVOLUTION.</p>
      </div>
      <div
        class="flex items-center justify-center lg:justify-between flex-wrap gap-8 mt-10"
      >
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="startups"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 62 57"
          >
            <rect
              id="_0"
              data-name="0"
              fillOpacity="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2578bc"
              fillRule="evenodd"
              d="M18.535,24.033c0.182-.228.364-0.471,0.561-0.7,0,0,5.1-6,6.794-8C32.863,7.088,41.259,1.2,52.355.416c1.062-.075,2.108-0.152,3.17-0.289a2.817,2.817,0,0,1,2.335.73,2.9,2.9,0,0,1,.971,2.266s-0.059,1.2-.046,1.6a33.575,33.575,0,0,1-5.133,17.857c-3.008,4.783-7.465,8.45-11.762,12.04-2.275,1.9-4.565,3.8-6.87,5.672l-0.015,8.486a2.87,2.87,0,0,1-1.3,2.433s-5.429,3.65-5.718,3.832a3.913,3.913,0,0,1-2.487.943,2.852,2.852,0,0,1-2.624-1.733c-0.243-.532-1.319-4.821-1.4-5.14a4.054,4.054,0,0,1-3.579,0,30.425,30.425,0,0,1-4.626-3.482S7.742,40.6,9.92,37.81a0.871,0.871,0,0,0,.076-0.2c-0.03,0-4.247-1.065-4.929-1.308a2.924,2.924,0,0,1-1.911-3.087c0.152-1.4,4.777-7.877,4.777-7.877a2.837,2.837,0,0,1,2.305-1.293c1.456-.061,6.992-0.015,8.3-0.015h0Zm-8.053,3.148s-3.943,5.84-4.155,6.235c0.516,0.167,6.992,1.734,7.219,2.068a0.031,0.031,0,0,0,.015.031,3.605,3.605,0,0,1,.227,1.368,9.1,9.1,0,0,1-.516,1.11c-0.152.35-.334,0.7-0.485,1.065-0.3.73,0.941,2.3,1.38,2.828,0,0,3.346,3.826,4.914,4.319a2.159,2.159,0,0,0,.728.168,5.945,5.945,0,0,0,1.365-.578,3.27,3.27,0,0,1,1.744-.578s0.713,0.228.728,0.243c0.216,0.224,1.911,7.026,2.017,7.345,0.2-.091,6.218-4.151,6.218-4.151L31.9,38.875a0.169,0.169,0,0,1,.076-0.152c2.654-2.144,5.3-4.33,7.917-6.524a67.017,67.017,0,0,0,8.974-8.344A31.242,31.242,0,0,0,54.827,11.2a35.666,35.666,0,0,0,.864-7.923c-0.94.107-1.881,0.164-2.821,0.228-10.4.714-18.038,6.173-24.6,13.854-1.7,2-8.114,9.672-8.341,9.763-0.258.106-8.084,0-9.449,0.061h0ZM39.919,11.974a6.63,6.63,0,1,1-6.6,6.63,6.617,6.617,0,0,1,6.6-6.63h0Zm0,2.844A3.787,3.787,0,1,0,43.7,18.6a3.769,3.769,0,0,0-3.776-3.787h0Z"
            ></path>
            <path
              id="_1-2"
              data-name="1"
              fill="#5a636e"
              fillRule="evenodd"
              d="M2.157,54.6v2.252h2.29a18.941,18.941,0,0,1,2.11-.255,19.138,19.138,0,0,0,3.787-.826A15.016,15.016,0,0,0,14.909,53.4a11.55,11.55,0,0,0,2.23-2.4,6.028,6.028,0,0,0-1.018-.586c-0.389.2-.644,0.45-1.018,0.661a15.043,15.043,0,0,1-6.151,1.967,10.754,10.754,0,0,1-3.083.09,10.864,10.864,0,0,1,.09-3.093,20.433,20.433,0,0,1,.509-2.763,16.089,16.089,0,0,1,.883-2.358c0.165-.345.374-0.736,0.584-1.081,0.224-.375.464-0.616,0.673-1.006L7.995,41.826a10.58,10.58,0,0,0-1.3,1.036,12.8,12.8,0,0,0-2.829,4.159A19.837,19.837,0,0,0,2.726,50.55c-0.165.571-.539,3.994-0.569,4.054h0Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Startup</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="enterprise"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 54 64"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2678bd"
              fillRule="evenodd"
              d="M19.449,41.856h3.937V45.8H19.449V41.856Zm-6.078,0h3.942V45.8H13.37V41.856Zm-6.074,0h3.942V45.8H7.3V41.856Zm12.152-6.247h3.937v3.946H19.449V35.609Zm-6.078,0h3.942v3.946H13.37V35.609Zm-6.074,0h3.942v3.946H7.3V35.609ZM19.449,29.53h3.937v3.941H19.449V29.53Zm-6.078,0h3.942v3.941H13.37V29.53Zm-6.074,0h3.942v3.941H7.3V29.53ZM19.449,23.45h3.937v3.941H19.449V23.45Zm-6.078,0h3.942v3.941H13.37V23.45Zm-6.074,0h3.942v3.941H7.3V23.45ZM19.449,17.2h3.937v3.946H19.449V17.2Zm-6.078,0h3.942v3.946H13.37V17.2ZM7.3,17.2h3.942v3.946H7.3V17.2Zm12.152-6.079h3.937v3.941H19.449V11.124Zm-6.078,0h3.942v3.941H13.37V11.124Zm-6.074,0h3.942v3.941H7.3V11.124ZM5,54.014H25.685V8.986H5V54.014ZM42.761,41.856H46.7V45.8H42.761V41.856Zm-6.074,0h3.937V45.8H36.688V41.856Zm-6.078,0h3.942V45.8H30.609V41.856Zm12.152-6.247H46.7v3.946H42.761V35.609Zm-6.074,0h3.937v3.946H36.688V35.609Zm-6.078,0h3.942v3.946H30.609V35.609ZM42.761,29.53H46.7v3.941H42.761V29.53Zm-6.074,0h3.937v3.941H36.688V29.53Zm-6.078,0h3.942v3.941H30.609V29.53ZM42.761,23.45H46.7v3.941H42.761V23.45Zm-6.074,0h3.937v3.941H36.688V23.45Zm-6.078,0h3.942v3.941H30.609V23.45ZM28.315,54.014H49V21.149H28.315V54.014Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Enterprise</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="financial"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 112 89"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2578bc"
              fillRule="evenodd"
              d="M9.891,79C7.675,79,7,78.325,7,76.126V27.631c0-2.113.518-2.862,2.582-3.011A369.3,369.3,0,0,0,78.145,13.3a118.739,118.739,0,0,0,15.922-5A3.645,3.645,0,0,1,95.4,8c0.569,0,1.9.242,1.927,2.48,0.016,1.136.02,5.871,0.035,6.077a7.7,7.7,0,0,1,1.282-.134,1.889,1.889,0,0,1,1.395.478c0.518,0.525.613,1.382,0.607,2.78,0,1.23,0,4.973,0,4.973s0.75,0,.912,0A2.226,2.226,0,0,1,104,27.144c0,0.07,0,.14,0,0.211v48.86c0,2.056-.707,2.785-2.7,2.785Zm2.115-4.173H99.091a1.015,1.015,0,0,0,.738-0.745V64.615c0-11.519,0-23.43.016-35.145a0.544,0.544,0,0,0-.606-0.62c-10.358.017-77.8,0.017-87.468,0H11.764a0.541,0.541,0,0,0-.61.612c0.018,11.8.013,44.515,0.013,44.515A1.136,1.136,0,0,0,12.006,74.822ZM96.434,24.578V21.151A205.311,205.311,0,0,1,75.51,24.578H96.434ZM93.152,13.2c-11.933,4.2-24.3,6.686-36.448,8.851,23.338-.185,35.554-4.334,36.2-4.451a0.683,0.683,0,0,0,.222-0.188C93.163,16.224,93.153,13.387,93.152,13.2ZM28.979,57.258a5.171,5.171,0,0,1-5.366-5.428,5.384,5.384,0,1,1,10.768.015A5.271,5.271,0,0,1,29,57.258H28.979ZM29,50.6a1.138,1.138,0,0,0-1.2,1.172,1.225,1.225,0,0,0,1.151,1.288,1.19,1.19,0,0,0,1.277-1.186A1.235,1.235,0,0,0,29,50.6Zm52.983,6.66a5.171,5.171,0,0,1-5.366-5.428,5.384,5.384,0,1,1,10.768.015A5.271,5.271,0,0,1,82,57.258H81.979ZM82,50.6a1.138,1.138,0,0,0-1.2,1.172,1.225,1.225,0,0,0,1.151,1.288,1.19,1.19,0,0,0,1.277-1.186A1.235,1.235,0,0,0,82,50.6Z"
            ></path>
            <path
              id="_1-2"
              data-name="1"
              fill="#5a636e"
              d="M55.007,72.01v0H23.4c-2.007,0-2.561-.475-2.825-2.418a4.508,4.508,0,0,0-4.116-4.1c-2.057-.295-2.446-0.739-2.446-2.793,0,0-.006-15.168,0-21.456,0-1.988.405-2.447,2.4-2.726a4.618,4.618,0,0,0,4.181-4.345c0.149-1.595.8-2.161,2.5-2.166,3.912-.009,64.73-0.01,64.877-0.006,1.709,0.044,2.308.6,2.463,2.287a4.611,4.611,0,0,0,4.352,4.25c1.631,0.159,2.209.772,2.212,2.343,0.011,7.113.011,14.4,0,22.289,0,1.447-.586,2.084-2.081,2.273-2.851.359-4.237,1.775-4.494,4.592A2.075,2.075,0,0,1,88.077,72C86.143,72.009,55.007,72.01,55.007,72.01ZM86.115,67.9h0c0.357,0,.447-0.044.593-0.51a8.162,8.162,0,0,1,5.595-5.6,0.635,0.635,0,0,0,.559-0.821c-0.019-4.556-.014-18.575-0.014-18.575-2.725-.453-5.241-3.056-6.1-5.7a0.637,0.637,0,0,0-.787-0.592c-4.041.018-20.934,0.022-20.934,0.022a21.917,21.917,0,0,1,6.067,15.784,22,22,0,0,1-6.105,15.974C66.782,67.882,81.525,67.883,86.115,67.9Zm-61.8-31.341a8.373,8.373,0,0,1-5.687,5.651,0.541,0.541,0,0,0-.481.693c0.023,6.112.023,12.242,0,18.221a0.48,0.48,0,0,0,.443.623,8.248,8.248,0,0,1,5.7,5.628,0.55,0.55,0,0,0,.671.518c3.1-.009,21.05-0.008,21.057-0.008A21.986,21.986,0,0,1,39.911,52a21.983,21.983,0,0,1,6.058-15.874s-16.86,0-21.227-.018A0.528,0.528,0,0,0,24.314,36.556ZM48.6,62.908a9.44,9.44,0,0,0,6.929,3.26h0a8.946,8.946,0,0,0,6.828-3.285c-0.187-.084-2.145-0.977-2.951-1.219-1.876-.563-2.55-1.443-2.578-3.364a8.033,8.033,0,0,1,.9-3.668c1.131-2.358,1.154-4.8,1.231-7.362a1.669,1.669,0,0,0-1.375-1.919c-1.009-.317-3.274-2.215-4.523.26-0.343.679-1.007,0.762-1,1.308,0,0.259.027,3.392,0.2,4.66a9.776,9.776,0,0,0,.993,2.973,8.572,8.572,0,0,1,.925,3.759c0.059,2.859-5.383,4.508-5.579,4.6C50.542,65.016,48.792,62.821,48.6,62.908Zm7.048-26.827c-9.35,0-12.537,11.967-11.338,19.364,0.191,1.178,1.114,4.2,1.216,4.544,0.3-.16,4.432-2.235,4.519-2.326,0-.131-1.447-4.022-1.925-5.548-0.126-.4-0.053-2.871-0.092-3.18-0.268-2.141-.245-4.345,1.713-5.958a2.893,2.893,0,0,0,1.227-1.9c0.168-1.04,1.936-1.929,3.1-1.436,1.289,0.548,4.393,1.664,4.682,1.746a5.611,5.611,0,0,1,4.337,5.536,18.172,18.172,0,0,1-.732,6.74c-0.387,1.085-.787,2.207-1.136,3.319a2.253,2.253,0,0,0-.067.834c1.129,0.614,4.021,1.97,4.276,2.09a20.567,20.567,0,0,0,.242-15.369C64.1,40.4,60.424,36.082,55.644,36.082Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">FinTech</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="healcare"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 91 85"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2678bd"
              fillRule="evenodd"
              d="M60.36,47.12h12.2C68.571,51.89,46.76,72,46.76,72a2.511,2.511,0,0,1-3.52,0S24.072,53.557,17.44,47.12H32.2a2.546,2.546,0,0,0,2.48-1.92l2.8-11.24,7.6,26.68A2.552,2.552,0,0,0,46,61.96c2.772,2.119,4.108-1.679,4-1.32l5.84-19.4,2.24,4.48A2.4,2.4,0,0,0,60.36,47.12ZM76.72,42H61.96l-4.44-8.84a2.542,2.542,0,0,0-4.72.44L47.64,50.8,39.8,23.36c-0.525-2.471-3.328-4.909-4.96.08L30.2,42H13.28c-3.881-5.841-7.425-17.573.96-25.76q5.08-4.96,14.04-4.96c9.92,0,20.986,12.907,16.72,8.64,9.224-9.227,16.3-8.64,16.72-8.64q8.96,0,14.04,4.96C84.145,24.427,80.6,36.159,76.72,42Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Healthcare</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="elearning"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 112 89"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2578bc"
              fillRule="evenodd"
              d="M53.3,33.645c-3.6,1.874-11.485,6.132-11.98,6.5-1.391-.659-10.1-4.8-12.876-6.13a1.619,1.619,0,0,1,.008-1.962q12.991-6.207,25.985-12.407a4.5,4.5,0,0,1,4.042,0Q71.5,25.856,84.519,32.077c0.017,0.008.035,0.014,0.052,0.022a1.6,1.6,0,0,1,.013,1.874q-13.093,6.254-26.192,12.5a4.319,4.319,0,0,1-3.832.01c-3.394-1.6-10.706-5.264-10.978-5.473,0.275-.228,7.513-4.173,10.87-5.893a1.759,1.759,0,0,1,1-.132c2.15,0.745,7.142-1.487,3.122-3.435a4.505,4.505,0,0,0-4.092-.072A1.8,1.8,0,0,0,53.3,33.645Zm-8.967,9.7c0.666,0.316,7.282,3.491,9.975,4.806a4.644,4.644,0,0,0,4.3,0C63.7,45.673,74.252,40.59,74.515,40.47c0,0.931-.042,5.234.009,6.537a4.724,4.724,0,0,1-1.013,3.108,15.355,15.355,0,0,1-5.2,4.295,24.288,24.288,0,0,1-21.96.988,1,1,0,0,1-.68-0.958C45.258,50.932,44.349,43.59,44.338,43.341ZM44.415,58c0.356,2.4-4.425,2.989-4.113-.013,0.537-3.893,1.853-14.044,2.01-15.222C42.344,42.766,44.063,55.528,44.415,58Zm-4.9-7.466a4.82,4.82,0,0,1-1.324-2.912c-0.014-2.307.016-7.068,0.039-7.236,0.777,0.376,1.519.724,2.245,1.1a0.475,0.475,0,0,1,.112.388C40.241,44.7,39.886,47.526,39.511,50.531Z"
            ></path>
            <path
              id="_2"
              data-name="2"
              fill="#58626c"
              fillRule="evenodd"
              d="M67.612,75.705H44.39c-1.22.237-2.483-2.69-4.6-2.626l-22.43-.129c0.385-6.607,9.524-4.476,22.408-4.476H72.235c12.884,0,22.023-2.131,22.408,4.476l-22.43.129c-2.119-.065-3.382,2.863-4.6,2.626h0Zm-47.171-63L20.462,64.04H91.711l-0.171-51.4S28.353,12.536,20.441,12.708Zm69.9-4.714c3.7,0.129,5.8,1.1,5.971,6.844L96.034,66.214a50.471,50.471,0,0,1,6.185,7.232c2.376,3.4-1.519,6.586-2.161,6.543H11.944c-0.642.043-4.537-3.142-2.162-6.543a50.513,50.513,0,0,1,6.185-7.232L15.925,58.4h0q0-16.3.021-32.628c0-18.531-2.889-17.735,15.324-17.735C35.08,8.038,90.341,7.995,90.341,7.995Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Education</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="manufacturing"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 91 85"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2678bd"
              fillRule="evenodd"
              d="M9.5,84.875V80.909l1.794-.266c0.741-14.467,1.48-28.911,2.226-43.5h10.3q0.777,15.38,1.556,30.8h3.991c-0.256-5.369-.5-10.565-0.757-15.868H75.987v2.284c0,8.181.024,16.363-.027,24.543-0.008,1.248.174,2.082,1.68,1.966v4H9.5ZM39.332,67.469h9.342V58.081H39.332v9.388ZM65.8,67.476V58.125h-9.4v9.351h9.4ZM45.368,23.448c-4.25,0-8.5.07-12.749-.018-5.182-.108-9.261,2.008-12.7,5.746-0.6.652-1.729,0.817-2.613,1.207-0.395-.895-1.143-1.8-1.129-2.684,0.123-7.686,2.5-14.331,9.238-18.792a11.063,11.063,0,0,1,2.128-1.168A56.518,56.518,0,0,0,36.192,4c1.45-.845,3.616-0.442,5.453-0.655a5.16,5.16,0,0,0,2.313-.518,10.682,10.682,0,0,1,12.765-.186,3.861,3.861,0,0,0,2.2.592c5.921-.314,10.473,3.6,10.86,9.423a9.946,9.946,0,0,1-9.8,10.743c-4.871.138-9.748,0.028-14.623,0.028v0.019ZM20.536,23.27a4.581,4.581,0,0,0,.679-0.309,20.625,20.625,0,0,1,12.249-3.348c8.436,0.1,16.875.033,25.312,0.021a12.471,12.471,0,0,0,2.421-.184,6.25,6.25,0,0,0,4.6-7.62A5.721,5.721,0,0,0,58.5,7.27a3.038,3.038,0,0,1-3.224-.756c-3.174-2.979-6.959-2.848-9.9.33a2.483,2.483,0,0,1-3.293.693c-2.436-1.14-4.571-.521-6.53,1.252a4.935,4.935,0,0,1-2.4,1.183A15.24,15.24,0,0,0,20.536,23.27Zm16.652,3.668L35.351,31.51c4.435-2.578,9.136-2.359,13.816-2.338,7.371,0.032,14.742.009,22.113,0.009,3.25,0,5.141-1.493,5.353-4.218,0.235-3.018-1.356-4.863-4.7-5.388l1.184-3.487C79,16.256,82.5,23.634,79.261,28.948a8.154,8.154,0,0,1-7.509,4.073c-8.87-.037-17.741.031-26.611-0.026a13.311,13.311,0,0,0-10.435,4.588c-0.567.623-1.957,1.3-2.428,1.024a3.163,3.163,0,0,1-1.285-2.514c0.2-2.4.8-4.771,1.214-7.156,0.292-1.675,1.276-2.264,2.914-2.014A15.038,15.038,0,0,0,37.188,26.938ZM28.379,48.08V41.568h7.695c0.136,2.1.275,4.239,0.422,6.512H28.379Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Manufacturing</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            id="social_marketing"
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 112 79"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2578bc"
              fillRule="evenodd"
              d="M87.566,68.1a4.922,4.922,0,0,1-2.217-.538,3.786,3.786,0,0,1-2.2-2.724,10.389,10.389,0,0,0-3.492-5.651A42.2,42.2,0,0,0,67.967,51.73a58.524,58.524,0,0,0-13.7-4.543c-0.1-.018-0.193-0.041-0.289-0.066A3.1,3.1,0,0,0,53.215,47L53.14,47l-0.73.041V42.463l0.942,0.368a1.429,1.429,0,0,0,.268.028c0.1,0.006.223,0.012,0.347,0.03a55.514,55.514,0,0,1,13.608,4.046c6.233,2.654,10.856,5.471,14.549,8.866,2.112,1.941,4.368,4.393,5.117,7.875a0.7,0.7,0,0,0,.252.16,0.721,0.721,0,0,0,.166.023,0.79,0.79,0,0,0,.227-0.716q0-6.137,0-12.274l0-8.758c0-1.613.368-2.13,1.872-2.633A5.467,5.467,0,0,0,93.611,34.1,5.449,5.449,0,0,0,89.8,28.712c-1.55-.53-1.906-1.033-1.906-2.693q0-10.433,0-20.866c0-.08,0-0.167.01-0.255,0-.057.008-0.134,0.008-0.191a1.534,1.534,0,0,0-.393-0.339,0.882,0.882,0,0,0-.268.169,12.363,12.363,0,0,1-3.337,5.87A41.882,41.882,0,0,1,71.95,18.878a65.286,65.286,0,0,1-18.733,6.5l-0.806.137V21.243l0.573-.1a60.181,60.181,0,0,0,16.057-5.517A41.375,41.375,0,0,0,79.725,8.7a21.889,21.889,0,0,0,2.642-3.2,4.955,4.955,0,0,0,.648-1.733A4.563,4.563,0,0,1,87.482.055c0.134,0,.27.006,0.405,0.017A4.384,4.384,0,0,1,92.078,4.6c0.011,5.954.018,12.982-.011,19.962a0.647,0.647,0,0,0,.469.757,9.32,9.32,0,0,1,5.291,8.811,9.3,9.3,0,0,1-5.374,8.758,0.523,0.523,0,0,0-.379.633c0.023,6.587.026,13.3,0.008,19.962A4.532,4.532,0,0,1,87.566,68.1h0ZM23.958,46.731a1,1,0,0,0-.282-0.1A12.755,12.755,0,0,1,15.153,26.9a12.474,12.474,0,0,1,8.288-5.29,1.23,1.23,0,0,0,.468-0.155l1.068-.7V25.84l-0.715-.025-0.15,0c-3.449,0-6.813,3.991-6.922,8.212a8.72,8.72,0,0,0,2.479,6.105,6.657,6.657,0,0,0,4.626,2.224l0.682,0.009v4.919Z"
            ></path>
            <path
              id="_2"
              data-name="2"
              fill="#5a636e"
              fillRule="evenodd"
              d="M42.066,78.945a4.8,4.8,0,0,1-4.674-3.828C36.4,71.44,31.824,54.373,30.7,50.2l-0.655,0c-0.5,0-.9-0.006-1.271-0.021a5.6,5.6,0,0,1-5.643-5.868c-0.007-8-.007-15.114,0-21.744a5.659,5.659,0,0,1,5.912-5.9q4.639-.005,9.278-0.005,5.034,0,10.067.007a5.637,5.637,0,0,1,5.933,5.948q0.008,3.819,0,7.638v6.365q0,3.786,0,7.572a5.707,5.707,0,0,1-5.953,6q-0.652.007-1.3,0.007H46.479q1.1,4.105,2.2,8.209l1.908,7.1q0.784,2.92,1.559,5.843a4.735,4.735,0,0,1-3.455,6.013c-1.879.522-3.561,0.971-5.14,1.375a6.031,6.031,0,0,1-1.488.2h0ZM31.494,46.058c1.854,0.006,2.527.521,3,2.3q1.78,6.627,3.558,13.255,1.669,6.218,3.338,12.435c0.2,0.76.464,0.76,0.672,0.76a1.941,1.941,0,0,0,.462-0.068c1.562-.4,3.216-0.842,5.056-1.353a0.647,0.647,0,0,0,.557-0.969q-0.767-2.913-1.553-5.822l-1.9-7.074q-1.35-5.024-2.7-10.049a2.726,2.726,0,0,1,.28-2.479,2.764,2.764,0,0,1,2.347-.927h0.616l1.834,0q0.626,0,1.255-.006a1.609,1.609,0,0,0,1.856-1.866q0.005-3.783,0-7.566V30.27q0-3.82,0-7.639a1.564,1.564,0,0,0-1.794-1.815q-5.013-.008-10.025-0.007-4.654,0-9.31.005a1.569,1.569,0,0,0-1.773,1.762c-0.007,6.666-.008,13.776,0,21.736a1.542,1.542,0,0,0,1.661,1.734c0.322,0.012.663,0.018,1.1,0.018l0.642,0,0.654,0h0.155Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">Marketing</p>
        </div>
        <div
          class="flex flex-col items-center gap-2 text-center space-y-2 group"
        >
          <svg
            class="group-hover:scale-110 duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            viewBox="0 0 119 80"
          >
            <rect
              id="_0"
              data-name="0"
              opacity="0"
              width="80"
              height="80"
            ></rect>
            <path
              id="_1"
              data-name="1"
              fill="#2578bc"
              fillRule="evenodd"
              d="M34.995,14.1a2.633,2.633,0,0,1-1.2,1c-4.342,2.882-2.608,2.126-4.189,3.485,0.083,1.347.094,1.725,0.944,2.41,4.484,3.638,11.446-1.819,16.721-3.485,2.95-.933,8-2.114,11.328-1.288,6.49,1.606,18.951,11.529,23.954,15.191,2.608,1.9,4.755,3.9,7.056,5.918,5.239,4.607,4.779,5.339,6.242,6.851l4.213-1.76c-2.695-10.822-6.98-23.537-8.047-29.9-3.838.071-1.566,0.555-12.579-3.579C84.3,10.778,65.252,3.252,59.126,4.185L45.037,7.091C40.458,8.437,37.827,12.844,34.995,14.1Zm72.983,26.567c4.437-1.547,6.148,5.091,2.183,6.462C105.948,48.577,103.565,42.21,107.978,40.662ZM94.4,10.422c1.829,6.78,3.564,13.4,5.381,20.093,0.767,2.871,4.661,18.7,5.487,19.964,2.643-.413,10.431-3.674,12.154-3.579l0.566-.449c-3.591-14.078-9.068-37.643-11.044-40.518L95.022,9.725C93.983,10.209,94.526,9.583,94.4,10.422ZM7.878,40.651c4.26-1.488,6.337,5.056,2.195,6.473C5.861,48.577,3.418,42.222,7.878,40.651Zm-7.894,5.895,12.7,4.016c0.826-1.382,4.083-14.766,4.791-17.4L23.655,9.949,11.041,5.9C11.853,6.413,3.86,23.57-.016,46.545ZM36.269,60.567c-0.23,6.562,4.2,6.712,7.009,6.131,0.649,1.606.814,3.6,3.988,4.831,2.336,0.9,5.723.555,7.08-1.016a14.7,14.7,0,0,0-2.218-1.736c-1.4-1.11.224-3.426-3.127-5.245-1.475-.8-2.254-0.354-3.752-0.023,1.09-8.655-3.929-8.92-7.788-6.036-0.78-7.2-5.262-7.2-8.3-3.839,0.224-10.147-12.5-3.083-5.983,1.973,2.5,1.949,4.637-.154,5.31-0.425C26.448,65.891,35.089,61.638,36.269,60.567ZM17.9,42.423l4.437,3.568c1.853,1.429,3.3-2.965,8.59,2.977,4.219-.8,7.687.759,8.555,3.993,7.717-.012,7.434,3.567,8.756,7.548,5.31,1.051,5.546,5.989,6.136,6.651,0.248,0.284,1.935,1.488,2.384,1.807,6.22,4.489,9.239-.354,8.744-3.036,6.191,3.405,11.81-1.4,7.859-6.556,7.048,4.81,14.96-.815,9.617-7.04,9.815,5.536,13.944-2.844,9.747-8.056a109.254,109.254,0,0,0-10.372-9.745c-2.525-1.984-5.121-3.91-7.753-5.847a85.058,85.058,0,0,0-7.918-5.493c-1.971-1.146-6.726-4.04-9.074-4.5-2.915-.591-8.791.874-11.21,1.9-11.961,9.6-27.759,1.084-14.113-7.8L25.9,12.418S18.852,38.053,17.9,42.423Z"
            ></path>
          </svg>
          <p class="font-medium tracking-widest">NGO</p>
        </div>
      </div>
    </section>
            
    <!-- Price and Plan -->
    
    <section id="pricing" class="mb-5 lg:mb-20">
        <div class="container" >
            <div class="row">
                <div class="box">
                    <div class="font-poppins space-y-1 box-header">
                        <h5 class="font-semibold text-3xl">Pick a Plan & Get Started</h5>
                        <p class="text-sm">
                          Integrated Accounting, CRM & HR Software for Business Growth.
                        </p>
                  </div>
                  <div class="box-body">
                      @include('superadmin::subscription.partials.packages', ['action_type' => 'register'])
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Review -->
    <section id="review" class="mb-20 bg-[#EFE3FF] py-7">
      <div class="font-poppins space-y-1 text-center">
        <h5 class="font-semibold text-3xl">Client.Satifactions</h5>
        <p class="text-sm">
          Integrated Accounting, CRM & HR Software for Business Growth
        </p>
      </div>

      <div class="container flex gap-5 justify-end items-center mt-2">
        <button
          id="prevButton"
          class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-lg p-1"
        >
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button
          id="nextButton"
          class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-lg p-1"
        >
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>

      <div class="container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- ********** index % 2 === 0 ? 'bg-[#F2F6FF]' : 'bg-[#FAFAFC]'
               * The Background Color will change according this formula **********
            * -->
            <div class="swiper-slide h-full">
              <div
                class="bg-[#F2F6FF] px-[50px] py-14 rounded-s-[30px] rounded-tr-[30px] rounded-br-[70px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="21"
                  viewBox="0 0 32 21"
                  fill="none"
                >
                  <path
                    d="M12.6232 6.1949e-07C13.1242 6.63292e-07 13.5537 0.178944 13.9116 0.53683C14.1979 0.894716 14.341 1.32418 14.341 1.82522C14.341 2.39784 14.2337 2.97046 14.0189 3.54308L8.32853 18.2522C7.97064 18.968 7.61276 19.5406 7.25487 19.9701C6.82541 20.4711 6.14542 20.7216 5.21492 20.7216L1.67184 20.7216C1.09922 20.7216 0.669759 20.5069 0.383449 20.0774C0.0255629 19.648 -0.0818027 19.0754 0.0613523 18.3596L2.4234 3.11361C2.49498 2.25469 2.78129 1.50313 3.28233 0.858929C3.78337 0.28631 4.53494 -8.76048e-08 5.53702 0L12.6232 6.1949e-07ZM29.8017 2.12129e-06C30.3028 2.16509e-06 30.7322 0.178945 31.0901 0.536832C31.3764 0.894718 31.5196 1.32418 31.5196 1.82523C31.5196 2.39785 31.4122 2.97046 31.1975 3.54308L25.5071 18.2522C25.1492 18.968 24.7555 19.5406 24.3261 19.9701C23.8966 20.4711 23.2524 20.7216 22.3935 20.7216H18.8504C18.2778 20.7216 17.8483 20.5069 17.562 20.0774C17.2041 19.648 17.0968 19.0754 17.2399 18.3596L19.602 3.11361C19.6735 2.25469 19.9598 1.50313 20.4609 0.858931C20.9619 0.286311 21.6777 1.41106e-06 22.6082 1.49241e-06L29.8017 2.12129e-06Z"
                    fill="#0E51FF"
                  />
                </svg>
                <p class="text-[#484747] italic my-7">
                  Committed gift you digital environment also make e digital
                  world for you. Committed gift you digital environment also
                  make e digital world for you. Committed gift you digital
                  environment also make e digital world for you.
                </p>
                <div class="border border-[#7A86FF] mb-6"></div>
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14">
                    <img
                      src="{{asset('assets')}}/images/reviewImg1.png"
                      alt=""
                      class="rounded-full w-full h-full"
                    />
                  </div>
                  <div>
                    <h6
                      class="text-[#272626] text-lg font-semibold whitespace-nowrap"
                    >
                      Lionel Messi
                    </h6>
                    <p class="text-[#484747] font-semibold whitespace-nowrap">
                      Rome, Italy, Europe
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-full">
              <div
                class="bg-[#FAFAFC] px-[50px] py-14 rounded-s-[30px] rounded-tr-[30px] rounded-br-[70px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="21"
                  viewBox="0 0 32 21"
                  fill="none"
                >
                  <path
                    d="M12.6232 6.1949e-07C13.1242 6.63292e-07 13.5537 0.178944 13.9116 0.53683C14.1979 0.894716 14.341 1.32418 14.341 1.82522C14.341 2.39784 14.2337 2.97046 14.0189 3.54308L8.32853 18.2522C7.97064 18.968 7.61276 19.5406 7.25487 19.9701C6.82541 20.4711 6.14542 20.7216 5.21492 20.7216L1.67184 20.7216C1.09922 20.7216 0.669759 20.5069 0.383449 20.0774C0.0255629 19.648 -0.0818027 19.0754 0.0613523 18.3596L2.4234 3.11361C2.49498 2.25469 2.78129 1.50313 3.28233 0.858929C3.78337 0.28631 4.53494 -8.76048e-08 5.53702 0L12.6232 6.1949e-07ZM29.8017 2.12129e-06C30.3028 2.16509e-06 30.7322 0.178945 31.0901 0.536832C31.3764 0.894718 31.5196 1.32418 31.5196 1.82523C31.5196 2.39785 31.4122 2.97046 31.1975 3.54308L25.5071 18.2522C25.1492 18.968 24.7555 19.5406 24.3261 19.9701C23.8966 20.4711 23.2524 20.7216 22.3935 20.7216H18.8504C18.2778 20.7216 17.8483 20.5069 17.562 20.0774C17.2041 19.648 17.0968 19.0754 17.2399 18.3596L19.602 3.11361C19.6735 2.25469 19.9598 1.50313 20.4609 0.858931C20.9619 0.286311 21.6777 1.41106e-06 22.6082 1.49241e-06L29.8017 2.12129e-06Z"
                    fill="#0E51FF"
                  />
                </svg>
                <p class="text-[#484747] italic my-7">
                  Committed gift you digital environment also make e digital
                  world for you. Committed gift you digital environment also
                  make e digital world for you. Committed gift you digital
                  environment also make e digital world for you.
                </p>
                <div class="border border-[#7A86FF] mb-6"></div>
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14">
                    <img
                      src="{{asset('assets')}}/images/reviewImg2.png"
                      alt=""
                      class="rounded-full w-full h-full"
                    />
                  </div>
                  <div>
                    <h6
                      class="text-[#272626] text-lg font-semibold whitespace-nowrap"
                    >
                      Lionel Messi
                    </h6>
                    <p class="text-[#484747] font-semibold whitespace-nowrap">
                      Rome, Italy, Europe
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-full">
              <div
                class="bg-[#F2F6FF] px-[50px] py-14 rounded-s-[30px] rounded-tr-[30px] rounded-br-[70px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="21"
                  viewBox="0 0 32 21"
                  fill="none"
                >
                  <path
                    d="M12.6232 6.1949e-07C13.1242 6.63292e-07 13.5537 0.178944 13.9116 0.53683C14.1979 0.894716 14.341 1.32418 14.341 1.82522C14.341 2.39784 14.2337 2.97046 14.0189 3.54308L8.32853 18.2522C7.97064 18.968 7.61276 19.5406 7.25487 19.9701C6.82541 20.4711 6.14542 20.7216 5.21492 20.7216L1.67184 20.7216C1.09922 20.7216 0.669759 20.5069 0.383449 20.0774C0.0255629 19.648 -0.0818027 19.0754 0.0613523 18.3596L2.4234 3.11361C2.49498 2.25469 2.78129 1.50313 3.28233 0.858929C3.78337 0.28631 4.53494 -8.76048e-08 5.53702 0L12.6232 6.1949e-07ZM29.8017 2.12129e-06C30.3028 2.16509e-06 30.7322 0.178945 31.0901 0.536832C31.3764 0.894718 31.5196 1.32418 31.5196 1.82523C31.5196 2.39785 31.4122 2.97046 31.1975 3.54308L25.5071 18.2522C25.1492 18.968 24.7555 19.5406 24.3261 19.9701C23.8966 20.4711 23.2524 20.7216 22.3935 20.7216H18.8504C18.2778 20.7216 17.8483 20.5069 17.562 20.0774C17.2041 19.648 17.0968 19.0754 17.2399 18.3596L19.602 3.11361C19.6735 2.25469 19.9598 1.50313 20.4609 0.858931C20.9619 0.286311 21.6777 1.41106e-06 22.6082 1.49241e-06L29.8017 2.12129e-06Z"
                    fill="#0E51FF"
                  />
                </svg>
                <p class="text-[#484747] italic my-7">
                  Committed gift you digital environment also make e digital
                  world for you. Committed gift you digital environment also
                  make e digital world for you. Committed gift you digital
                  environment also make e digital world for you.
                </p>
                <div class="border border-[#7A86FF] mb-6"></div>
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14">
                    <img
                      src="{{asset('assets')}}/images/reviewImg3.png"
                      alt=""
                      class="rounded-full w-14 h-14"
                    />
                  </div>
                  <div>
                    <h6
                      class="text-[#272626] text-lg font-semibold whitespace-nowrap"
                    >
                      Lionel Messi
                    </h6>
                    <p class="text-[#484747] font-semibold whitespace-nowrap">
                      Rome, Italy, Europe
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-full">
              <div
                class="bg-[#FAFAFC] px-[50px] py-14 rounded-s-[30px] rounded-tr-[30px] rounded-br-[70px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="21"
                  viewBox="0 0 32 21"
                  fill="none"
                >
                  <path
                    d="M12.6232 6.1949e-07C13.1242 6.63292e-07 13.5537 0.178944 13.9116 0.53683C14.1979 0.894716 14.341 1.32418 14.341 1.82522C14.341 2.39784 14.2337 2.97046 14.0189 3.54308L8.32853 18.2522C7.97064 18.968 7.61276 19.5406 7.25487 19.9701C6.82541 20.4711 6.14542 20.7216 5.21492 20.7216L1.67184 20.7216C1.09922 20.7216 0.669759 20.5069 0.383449 20.0774C0.0255629 19.648 -0.0818027 19.0754 0.0613523 18.3596L2.4234 3.11361C2.49498 2.25469 2.78129 1.50313 3.28233 0.858929C3.78337 0.28631 4.53494 -8.76048e-08 5.53702 0L12.6232 6.1949e-07ZM29.8017 2.12129e-06C30.3028 2.16509e-06 30.7322 0.178945 31.0901 0.536832C31.3764 0.894718 31.5196 1.32418 31.5196 1.82523C31.5196 2.39785 31.4122 2.97046 31.1975 3.54308L25.5071 18.2522C25.1492 18.968 24.7555 19.5406 24.3261 19.9701C23.8966 20.4711 23.2524 20.7216 22.3935 20.7216H18.8504C18.2778 20.7216 17.8483 20.5069 17.562 20.0774C17.2041 19.648 17.0968 19.0754 17.2399 18.3596L19.602 3.11361C19.6735 2.25469 19.9598 1.50313 20.4609 0.858931C20.9619 0.286311 21.6777 1.41106e-06 22.6082 1.49241e-06L29.8017 2.12129e-06Z"
                    fill="#0E51FF"
                  />
                </svg>
                <p class="text-[#484747] italic my-7">
                  Committed gift you digital environment also make e digital
                  world for you. Committed gift you digital environment also
                  make e digital world for you. Committed gift you digital
                  environment also make e digital world for you.
                </p>
                <div class="border border-[#7A86FF] mb-6"></div>
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14">
                    <img
                      src="{{asset('assets')}}/images/reviewImg1.png"
                      alt=""
                      class="rounded-full w-14 h-14"
                    />
                  </div>
                  <div>
                    <h6
                      class="text-[#272626] text-lg font-semibold whitespace-nowrap"
                    >
                      Lionel Messi
                    </h6>
                    <p class="text-[#484747] font-semibold whitespace-nowrap">
                      Rome, Italy, Europe
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-full">
              <div
                class="bg-[#FAFAFC] px-[50px] py-14 rounded-s-[30px] rounded-tr-[30px] rounded-br-[70px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="21"
                  viewBox="0 0 32 21"
                  fill="none"
                >
                  <path
                    d="M12.6232 6.1949e-07C13.1242 6.63292e-07 13.5537 0.178944 13.9116 0.53683C14.1979 0.894716 14.341 1.32418 14.341 1.82522C14.341 2.39784 14.2337 2.97046 14.0189 3.54308L8.32853 18.2522C7.97064 18.968 7.61276 19.5406 7.25487 19.9701C6.82541 20.4711 6.14542 20.7216 5.21492 20.7216L1.67184 20.7216C1.09922 20.7216 0.669759 20.5069 0.383449 20.0774C0.0255629 19.648 -0.0818027 19.0754 0.0613523 18.3596L2.4234 3.11361C2.49498 2.25469 2.78129 1.50313 3.28233 0.858929C3.78337 0.28631 4.53494 -8.76048e-08 5.53702 0L12.6232 6.1949e-07ZM29.8017 2.12129e-06C30.3028 2.16509e-06 30.7322 0.178945 31.0901 0.536832C31.3764 0.894718 31.5196 1.32418 31.5196 1.82523C31.5196 2.39785 31.4122 2.97046 31.1975 3.54308L25.5071 18.2522C25.1492 18.968 24.7555 19.5406 24.3261 19.9701C23.8966 20.4711 23.2524 20.7216 22.3935 20.7216H18.8504C18.2778 20.7216 17.8483 20.5069 17.562 20.0774C17.2041 19.648 17.0968 19.0754 17.2399 18.3596L19.602 3.11361C19.6735 2.25469 19.9598 1.50313 20.4609 0.858931C20.9619 0.286311 21.6777 1.41106e-06 22.6082 1.49241e-06L29.8017 2.12129e-06Z"
                    fill="#0E51FF"
                  />
                </svg>
                <p class="text-[#484747] italic my-7">
                  Committed gift you digital environment also make e digital
                  world for you. Committed gift you digital environment also
                  make e digital world for you. Committed gift you digital
                  environment also make e digital world for you.
                </p>
                <div class="border border-[#7A86FF] mb-6"></div>
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14">
                    <img
                      src="{{asset('assets')}}/images/reviewImg3.png"
                      alt=""
                      class="rounded-full w-14 h-14"
                    />
                  </div>
                  <div>
                    <h6
                      class="text-[#272626] text-lg font-semibold whitespace-nowrap"
                    >
                      Lionel Messi
                    </h6>
                    <p class="text-[#484747] font-semibold whitespace-nowrap">
                      Rome, Italy, Europe
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Clients -->
    <section class="container mb-24">
      <SectionTitle
        title="Engaged by 10+ Brands"
        subTitle="Integrated Accounting, CRM & HR Software for Business Growth"
        boxPosition="text-center"
      />
      <div class="font-poppins space-y-1 text-center">
        <h5 class="font-semibold text-3xl">Engaged by 10+ Brands</h5>
        <p class="text-sm">
          Integrated Accounting, CRM & HR Software for Business Growth
        </p>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-12 mt-10">
        <div>
          <img src="{{asset('assets')}}/images/pepsi.png" alt="" class="w-20 lg:w-fit" />
        </div>
        <div>
          <img src="{{asset('assets')}}/images/dominos.png" alt="" class="w-20 lg:w-fit" />
        </div>
        <div>
          <img src="{{asset('assets')}}/images/casio.png" alt="" class="w-20 lg:w-fit" />
        </div>
        <div>
          <img src="{{asset('assets')}}/images/michelin.png" alt="" class="w-20 lg:w-fit" />
        </div>
        <div>
          <img src="{{asset('assets')}}/images/comcast.png" alt="" class="w-20 lg:w-fit" />
        </div>
      </div>
    </section>

    <!-- Find Demo -->
    <section class="bg-black mb-20 py-10 px-5">
      <div class="relative container grid lg:grid-cols-2 items-center">
        <div class="space-y-4">
          <h5 class="text-white font-poppins font-medium text-2xl">
            Didn’t find what you are looking for?
          </h5>
          <div class="flex group">
            <input
              type="email"
              placeholder="Email Address"
              class="rounded-l-md py-3 ps-5 w-full outline-none border-2 border-[#0E51FF] group-hover:border-[#20B15A] duration-200 text-black placeholder:font-poppins placeholder:text-black"
            />
            <button
              class="bg-[#0E51FF] text-white font-roboto text-lg font-medium tracking-wider whitespace-nowrap px-7 py-2 rounded-r-md group-hover:bg-[#20B15A] duration-200"
            >
              Free Demo
            </button>
          </div>
        </div>
        <div class="absolute right-0 hidden lg:block">
          <img src="{{asset('assets')}}/images/findDemo.png" alt="" />
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="container mb-28">
      <div class="font-poppins space-y-1">
        <h5 class="font-semibold text-3xl">Pick a Plan & Get Started</h5>
        <p class="text-sm">
          Integrated Accounting, CRM & HR Software for Business Growth.
        </p>
      </div>

      <div id="FAQ" class="mt-8 space-y-5">
        <div class="faq-content rounded-lg border border-s-[5px] border-black">
          <button
            class="faq-question-button mb-0 font-semibold font-poppins group relative flex w-full lg:items-center border-0 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
            type="button"
          >
            How does the 15 day trial work?
            <span
              class="ml-auto h-5 w-5 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <path
                  d="M7 0C10.866 0 14 3.13403 14 7C14 10.8662 10.866 14 7 14C3.13381 14 0 10.8662 0 7C0 3.13403 3.13381 0 7 0ZM7 13.1388C10.3773 13.1388 13.125 10.3773 13.125 6.99997C13.125 3.62269 10.3773 0.874973 7 0.874973C3.62272 0.874973 0.875 3.6227 0.875 6.99997C0.875 10.3772 3.62272 13.1388 7 13.1388ZM3.9375 6.5625H6.5625V3.9375C6.5625 3.696 6.7585 3.5 7 3.5C7.2415 3.5 7.4375 3.696 7.4375 3.9375V6.5625H10.0625C10.304 6.5625 10.5 6.7585 10.5 7C10.5 7.2415 10.304 7.4375 10.0625 7.4375H7.4375V10.0625C7.4375 10.304 7.2415 10.5 7 10.5C6.7585 10.5 6.5625 10.304 6.5625 10.0625V7.4375H3.9375C3.696 7.4375 3.5 7.2415 3.5 7C3.5 6.7585 3.696 6.5625 3.9375 6.5625Z"
                  fill="#000"
                />
              </svg>
            </span>
          </button>

          <ul class="faq-answer px-5 pb-4 mt-5 lg:mt-0 hidden">
            <li class="text-sm font-poppins list-disc ml-5">
              The perfect choice for your new business. Setup integrated
              Accounting, CRM and Payroll in minutes.
            </li>
          </ul>
        </div>

        <div class="faq-content rounded-lg border border-s-[5px] border-black">
          <button
            class="faq-question-button mb-0 font-semibold font-poppins group relative flex w-full lg:items-center border-0 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
            type="button"
          >
            How does the 15 day trial work?
            <span
              class="ml-auto h-5 w-5 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <path
                  d="M7 0C10.866 0 14 3.13403 14 7C14 10.8662 10.866 14 7 14C3.13381 14 0 10.8662 0 7C0 3.13403 3.13381 0 7 0ZM7 13.1388C10.3773 13.1388 13.125 10.3773 13.125 6.99997C13.125 3.62269 10.3773 0.874973 7 0.874973C3.62272 0.874973 0.875 3.6227 0.875 6.99997C0.875 10.3772 3.62272 13.1388 7 13.1388ZM3.9375 6.5625H6.5625V3.9375C6.5625 3.696 6.7585 3.5 7 3.5C7.2415 3.5 7.4375 3.696 7.4375 3.9375V6.5625H10.0625C10.304 6.5625 10.5 6.7585 10.5 7C10.5 7.2415 10.304 7.4375 10.0625 7.4375H7.4375V10.0625C7.4375 10.304 7.2415 10.5 7 10.5C6.7585 10.5 6.5625 10.304 6.5625 10.0625V7.4375H3.9375C3.696 7.4375 3.5 7.2415 3.5 7C3.5 6.7585 3.696 6.5625 3.9375 6.5625Z"
                  fill="#000"
                />
              </svg>
            </span>
          </button>

          <ul class="faq-answer px-5 pb-4 mt-5 lg:mt-0 hidden">
            <li class="text-sm font-poppins list-disc ml-5">
              The perfect choice for your new business. Setup integrated
              Accounting, CRM and Payroll in minutes.
            </li>
          </ul>
        </div>

        <div class="faq-content rounded-lg border border-s-[5px] border-black">
          <button
            class="faq-question-button mb-0 font-semibold font-poppins group relative flex w-full lg:items-center border-0 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
            type="button"
          >
            How does the 15 day trial work?
            <span
              class="ml-auto h-5 w-5 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <path
                  d="M7 0C10.866 0 14 3.13403 14 7C14 10.8662 10.866 14 7 14C3.13381 14 0 10.8662 0 7C0 3.13403 3.13381 0 7 0ZM7 13.1388C10.3773 13.1388 13.125 10.3773 13.125 6.99997C13.125 3.62269 10.3773 0.874973 7 0.874973C3.62272 0.874973 0.875 3.6227 0.875 6.99997C0.875 10.3772 3.62272 13.1388 7 13.1388ZM3.9375 6.5625H6.5625V3.9375C6.5625 3.696 6.7585 3.5 7 3.5C7.2415 3.5 7.4375 3.696 7.4375 3.9375V6.5625H10.0625C10.304 6.5625 10.5 6.7585 10.5 7C10.5 7.2415 10.304 7.4375 10.0625 7.4375H7.4375V10.0625C7.4375 10.304 7.2415 10.5 7 10.5C6.7585 10.5 6.5625 10.304 6.5625 10.0625V7.4375H3.9375C3.696 7.4375 3.5 7.2415 3.5 7C3.5 6.7585 3.696 6.5625 3.9375 6.5625Z"
                  fill="#000"
                />
              </svg>
            </span>
          </button>

          <ul class="faq-answer px-5 pb-4 mt-5 lg:mt-0 hidden">
            <li class="text-sm font-poppins list-disc ml-5">
              The perfect choice for your new business. Setup integrated
              Accounting, CRM and Payroll in minutes.
            </li>
          </ul>
        </div>

        <div class="faq-content rounded-lg border border-s-[5px] border-black">
          <button
            class="faq-question-button mb-0 font-semibold font-poppins group relative flex w-full lg:items-center border-0 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
            type="button"
          >
            How does the 15 day trial work?
            <span
              class="ml-auto h-5 w-5 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <path
                  d="M7 0C10.866 0 14 3.13403 14 7C14 10.8662 10.866 14 7 14C3.13381 14 0 10.8662 0 7C0 3.13403 3.13381 0 7 0ZM7 13.1388C10.3773 13.1388 13.125 10.3773 13.125 6.99997C13.125 3.62269 10.3773 0.874973 7 0.874973C3.62272 0.874973 0.875 3.6227 0.875 6.99997C0.875 10.3772 3.62272 13.1388 7 13.1388ZM3.9375 6.5625H6.5625V3.9375C6.5625 3.696 6.7585 3.5 7 3.5C7.2415 3.5 7.4375 3.696 7.4375 3.9375V6.5625H10.0625C10.304 6.5625 10.5 6.7585 10.5 7C10.5 7.2415 10.304 7.4375 10.0625 7.4375H7.4375V10.0625C7.4375 10.304 7.2415 10.5 7 10.5C6.7585 10.5 6.5625 10.304 6.5625 10.0625V7.4375H3.9375C3.696 7.4375 3.5 7.2415 3.5 7C3.5 6.7585 3.696 6.5625 3.9375 6.5625Z"
                  fill="#000"
                />
              </svg>
            </span>
          </button>

          <ul class="faq-answer px-5 pb-4 mt-5 lg:mt-0 hidden">
            <li class="text-sm font-poppins list-disc ml-5">
              The perfect choice for your new business. Setup integrated
              Accounting, CRM and Payroll in minutes.
            </li>
          </ul>
        </div>

        <div class="faq-content rounded-lg border border-s-[5px] border-black">
          <button
            class="faq-question-button mb-0 font-semibold font-poppins group relative flex w-full lg:items-center border-0 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
            type="button"
          >
            How does the 15 day trial work?
            <span
              class="ml-auto h-5 w-5 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <path
                  d="M7 0C10.866 0 14 3.13403 14 7C14 10.8662 10.866 14 7 14C3.13381 14 0 10.8662 0 7C0 3.13403 3.13381 0 7 0ZM7 13.1388C10.3773 13.1388 13.125 10.3773 13.125 6.99997C13.125 3.62269 10.3773 0.874973 7 0.874973C3.62272 0.874973 0.875 3.6227 0.875 6.99997C0.875 10.3772 3.62272 13.1388 7 13.1388ZM3.9375 6.5625H6.5625V3.9375C6.5625 3.696 6.7585 3.5 7 3.5C7.2415 3.5 7.4375 3.696 7.4375 3.9375V6.5625H10.0625C10.304 6.5625 10.5 6.7585 10.5 7C10.5 7.2415 10.304 7.4375 10.0625 7.4375H7.4375V10.0625C7.4375 10.304 7.2415 10.5 7 10.5C6.7585 10.5 6.5625 10.304 6.5625 10.0625V7.4375H3.9375C3.696 7.4375 3.5 7.2415 3.5 7C3.5 6.7585 3.696 6.5625 3.9375 6.5625Z"
                  fill="#000"
                />
              </svg>
            </span>
          </button>

          <ul class="faq-answer px-5 pb-4 mt-5 lg:mt-0 hidden">
            <li class="text-sm font-poppins list-disc ml-5">
              The perfect choice for your new business. Setup integrated
              Accounting, CRM and Payroll in minutes.
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-7">
      <div class="container">
        <div class="flex flex-col lg:flex-row gap-5">
          <a href="#" class="font-poppins text-[24px] font-semibold">
            flyte<span class="text-[30px] font-bold">POS</span>.com
          </a>
          <div class="lg:w-1/2 lg:ml-auto space-y-2">
            <p class="font-poppins font-medium tracking-wide">
              Don't miss to contact
            </p>
            <div class="flex group">
              <input
                type="email"
                placeholder="Email Address"
                class="rounded-l-md py-3 ps-5 w-full outline-none border-2 border-[#0E51FF] group-hover:border-[#20B15A] duration-200 placeholder:font-poppins placeholder:text-black text-black"
              />
              <button
                class="bg-[#0E51FF] text-white font-roboto text-lg font-medium tracking-wider whitespace-nowrap px-7 py-2 rounded-r-md group-hover:bg-[#20B15A] duration-200"
              >
                Free Demo
              </button>
            </div>
          </div>
        </div>
        <div class="mt-4 border-b border-[#ffffff83]">
          <p class="font-poppins font-medium border-b-2 border-[#0E51FF] w-48">
            Industries We Served
          </p>
        </div>
        <div class="mt-7 grid grid-cols-2 lg:grid-cols-4">
          <ul class="flex flex-col gap-4 font-poppins tracking-wide text-sm">
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Cafes</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Shopify Seller</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Franchises</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >eCommerce</a
            >
          </ul>
          <ul class="flex flex-col gap-4 font-poppins tracking-wide text-sm">
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Creative Agencies</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Manufacturing</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Tourism</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >IT Reseller</a
            >
          </ul>
          <ul class="flex flex-col gap-4 font-poppins tracking-wide text-sm">
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Retails</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Regional Business</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Startups</a
            >
          </ul>
          <ul class="flex flex-col gap-4 font-poppins tracking-wide text-sm">
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Wholesale trading</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Information Technology</a
            >
            <a href="#" class="w-fit hover:text-[#0E51FF] duration-200"
              >Healthcare</a
            >
          </ul>
        </div>
        <div
          class="mt-14 flex flex-col lg:flex-row lg:justify-between items-center gap-5"
        >
          <div class="flex flex-wrap justify-center gap-2">
            <a
              href="#"
              class="font-poppins text-sm lg:border-r lg:border-white pr-2 lg:pr-5 hover:text-[#0E51FF] duration-200"
              >Terms of Service</a
            >
            <a
              href="#"
              class="font-poppins text-sm lg:border-r lg:border-white lg:px-5 hover:text-[#0E51FF] duration-200"
              >Privacy Policy</a
            >
            <a
              href="#"
              class="font-poppins text-sm lg:border-r lg:border-white lg:px-5 hover:text-[#0E51FF] duration-200"
              >© flytePOS.com</a
            >
            <p class="font-poppins text-sm lg:px-5">All rights reserved.</p>
          </div>
          <div class="flex gap-5 text-2xl">
            <a href="#" class="hover:text-[#0E51FF] duration-200">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="hover:text-[#0E51FF] duration-200">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#" class="hover:text-[#0E51FF] duration-200">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="#" class="hover:text-[#0E51FF] duration-200">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="mt-16 flex justify-center">
          <div class="flex flex-col lg:flex-row gap-5 items-center">
            <p class="font-poppins">Payment Method:</p>
            <div class="flex gap-2">
              <img
                src="{{asset('assets')}}/images/mastercard.png"
                alt=""
                class="bg-white px-4 py-2 h-[44px] w-[85px] rounded border-2 border-[#0E51FF]"
              />
              <img
                src="{{asset('assets')}}/images/visacard.png"
                alt=""
                class="bg-white px-4 py-2 h-[44px] w-[85px] rounded border-2 border-[#0E51FF]"
              />
              <img
                src="{{asset('assets')}}/images/paypal.png"
                alt=""
                class="bg-white px-4 py-2 h-[44px] w-[85px] rounded border-2 border-[#0E51FF]"
              />
              <img
                src="{{asset('assets')}}/images/skrill.png"
                alt=""
                class="bg-white px-4 py-2 h-[44px] w-[85px] rounded border-2 border-[#0E51FF]"
              />
            </div>
          </div>
        </div>
        <p class="font-poppins text-sm text-center mt-8">
          Developed by: Flyte Solutions Ltd.
        </p>
      </div>
    </footer>

    <!-- * ----------------------Script---------------------- * -->
    <!-- Swiper Script Start -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        spaceBetween: 80,
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          668: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
        coverflowEffect: {
          rotate: 0,
          stretch: -30,
          depth: 100,
          modifier: 1.7,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });

      document
        .getElementById("prevButton")
        .addEventListener("click", function () {
          swiper.slidePrev();
        });

      document
        .getElementById("nextButton")
        .addEventListener("click", function () {
          swiper.slideNext();
        });
    </script>
    <!-- Swiper Script End -->

    <script src="{{asset('assets')}}/js/index.js"></script>
  </body>
</html>
