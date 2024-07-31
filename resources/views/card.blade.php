<!DOCTYPE html>
<html>

<head>
    <title>Livewire CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <main>
        <div class="common left-0 relative max550 mx-auto bg-slate-50">
            <nav class="z-10 absolute w-full">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="protokol.svg" class="h-[20px]" alt="Protokol Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-hamburger" type="button"
                        class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100"
                        aria-controls="navbar-hamburger" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>

                </div>
            </nav>
            <div class="hero image-container">
                <img src="speaker.png" alt="speaker-img">
                <div class="content relative">
                    <h2 class="text-base font-bold text-slate-800 pb-2">Portable
                        Wireless Speaker</h2>
                    <p class="text-sm text-slate-800 font-normal pb-4">
                        Immerse yourself in a state of auditory calm, where the
                        cutting-edge tech and sustainability are merged for the
                        modern, mindful listener.
                    </p>

                    <div class="flex flex-col gap-4">
                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(1)">
                                <span class="text-sm font-bold text-slate-800">GENERAL</span>
                                <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>
                            <div id="accordion-1" class="pt-4 hidden">
                                <div class="flex flex-col gap-4">
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">MANUFACTURER</dt>
                                        <dd class="text-sm text-slate-800 font-normal">Dimension Audio</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">LOCATION</dt>
                                        <dd class="text-sm text-slate-800 font-normal">Netherlands</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">SERIAL NUMBER</dt>
                                        <dd class="text-sm text-slate-800 font-normal">D1M3N-510N-2024</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">PRODUCT ID</dt>
                                        <dd class="text-sm text-slate-800 font-normal">DPP20240202</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">BATCH NUMBER</dt>
                                        <dd class="text-sm text-slate-800 font-normal">20240123A</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">WEIGHT</dt>
                                        <dd class="text-sm text-slate-800 font-normal">1.2kg</dd>
                                    </dl>
                                    <dl class="flex flex-col g-two">
                                        <dt class="text-xs font-normal text-slate-400">COLOR</dt>
                                        <dd class="text-sm text-slate-800 font-normal">White</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(2)">
                                <span class="text-sm font-bold text-slate-800">PRODUCT
                                    SOURCE</span>
                                    <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="accordion-2" class="pt-4 hidden">
                                <div class="pt-4 flex flex-col gap-5">
                                    <div class="flex flex-col gap-4">
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">PRODUCT
                                                SUSTAINABILITY SCORE</dt>
                                            <dd>
                                                <div class="w-full rounded-full h-4 bg-slate-100">
                                                    <div class="green-001 text-xs font-medium text-blue-100 text-center h-4 rounded-tl-full rounded-bl-full"
                                                        style="width: 92%">
                                                        92%</div>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">PACKAGING
                                                SUSTAINABILITY SCORE</dt>
                                            <dd>
                                                <div class="w-full rounded-full h-4 bg-slate-100">
                                                    <div class="green-001 text-xs font-medium text-blue-100 text-center h-4 rounded-tl-full rounded-bl-full"
                                                        style="width: 50%">
                                                        50%</div>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">RENEWABLE
                                                ENERGY SCORE</dt>
                                            <dd>
                                                <div class="w-full rounded-full h-4 bg-slate-100">
                                                    <div class="green-001 text-xs font-medium text-blue-100 text-center h-4 rounded-tl-full rounded-bl-full"
                                                        style="width: 75%">
                                                        75%</div>
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h2 class="text-sm font-bold text-slate-800">PRODUCT
                                            AUTHENTICITY</h2>
                                        <a href="#"
                                            class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M8.66667 11.4666V4.79997C8.66667 4.43178 8.36819 4.1333 8 4.1333H2.66667C2.29848 4.1333 2 4.43178 2 4.79997V11.4666C2 11.8348 2.29848 12.1333 2.66667 12.1333H3.33333M8.66667 11.4666C8.66667 11.8348 8.36819 12.1333 8 12.1333H6M8.66667 11.4666L8.66667 6.1333C8.66667 5.76511 8.96514 5.46663 9.33333 5.46663H11.0572C11.234 5.46663 11.4036 5.53687 11.5286 5.6619L13.8047 7.93804C13.9298 8.06306 14 8.23263 14 8.40944V11.4666C14 11.8348 13.7015 12.1333 13.3333 12.1333H12.6667M8.66667 11.4666C8.66667 11.8348 8.96514 12.1333 9.33333 12.1333H10M3.33333 12.1333C3.33333 12.8697 3.93029 13.4666 4.66667 13.4666C5.40305 13.4666 6 12.8697 6 12.1333M3.33333 12.1333C3.33333 11.3969 3.93029 10.8 4.66667 10.8C5.40305 10.8 6 11.3969 6 12.1333M10 12.1333C10 12.8697 10.597 13.4666 11.3333 13.4666C12.0697 13.4666 12.6667 12.8697 12.6667 12.1333M10 12.1333C10 11.3969 10.597 10.8 11.3333 10.8C12.0697 10.8 12.6667 11.3969 12.6667 12.1333"
                                                    stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                            Explore chain-of-custody
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(3)">
                                <span class="text-sm font-bold text-slate-800">WARRANTY
                                    DETAILS</span>
                                    <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="accordion-3" class="pt-4 hidden">
                                <div class="pt-4 flex flex-col gap-5">
                                    <div class="flex flex-col gap-4">
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">STATUS</dt>
                                            <dd>
                                                <span
                                                    class="inline-flex items-center justify-center text-xs text-white gap-1 green-001 valid-btn rounded-xl">
                                                    <svg width="12" height="12" viewBox="0 0 16 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="svelte-mg2y6f">
                                                        <path d="M1 7L5 11L15 1" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" class="element svelte-mg2y6f">
                                                        </path>
                                                    </svg>
                                                    Valid
                                                </span>
                                            </dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">EXPIRATION
                                                DATE</dt>
                                            <dd class="text-sm text-slate-800 font-normal">2.
                                                Feb., 2026</dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">DOCUMENT</dt>
                                            <dd>
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 7.2002L6.33333 8.53353L9 5.86686M4.22316 2.33156C4.70151 2.29339 5.15564 2.10528 5.52088 1.79403C6.3732 1.06768 7.6268 1.06768 8.47912 1.79403C8.84436 2.10528 9.29849 2.29339 9.77684 2.33156C10.8931 2.42064 11.7796 3.30707 11.8686 4.42335C11.9068 4.90171 12.0949 5.35583 12.4062 5.72107C13.1325 6.5734 13.1325 7.82699 12.4062 8.67932C12.0949 9.04456 11.9068 9.49868 11.8686 9.97704C11.7796 11.0933 10.8931 11.9798 9.77684 12.0688C9.29849 12.107 8.84436 12.2951 8.47912 12.6064C7.6268 13.3327 6.3732 13.3327 5.52088 12.6064C5.15564 12.2951 4.70151 12.107 4.22316 12.0688C3.10687 11.9798 2.22045 11.0933 2.13136 9.97704C2.09319 9.49868 1.90509 9.04456 1.59383 8.67932C0.867486 7.82699 0.867486 6.5734 1.59383 5.72107C1.90509 5.35583 2.09319 4.90171 2.13136 4.42335C2.22045 3.30707 3.10687 2.42064 4.22316 2.33156Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    View warranty
                                                </a>
                                            </dd>

                                        </dl>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(4)">
                                <span class="text-sm font-bold text-slate-800">DIGITAL
                                    RECEIPT</span>
                                    <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="accordion-4" class="pt-4 hidden">
                                <div class="pt-4 flex flex-col gap-5">
                                    <div class="flex flex-col gap-4">
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">DATE
                                                ISSUED</dt>
                                            <dd class="text-sm text-slate-800 font-normal">2.
                                                Feb, 2024; 12:34</dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">LOCATION</dt>
                                            <dd class="text-sm text-slate-800 font-normal">Netherlands</dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">AUTHORIZED
                                                SELLER</dt>
                                            <dd class="text-sm text-slate-800 font-normal">Protokol</dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">DOCUMENT</dt>
                                            <dd>
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="12" height="14" viewBox="0 0 12 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.66671 13H9.33337C10.0698 13 10.6667 12.403 10.6667 11.6667V5.27614C10.6667 5.09933 10.5965 4.92976 10.4714 4.80474L6.86197 1.19526C6.73695 1.07024 6.56738 1 6.39057 1H2.66671C1.93033 1 1.33337 1.59695 1.33337 2.33333V11.6667C1.33337 12.403 1.93033 13 2.66671 13Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    receipt02022024.pdf
                                                </a>
                                            </dd>

                                        </dl>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(5)">
                                <span class="text-sm font-bold text-slate-800">PRODUCT
                                    HISTORY</span>
                                    <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="accordion-5" class="pt-4 hidden">
                                <div class="pt-4 flex flex-col gap-4">
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">PRODUCT
                                                CONCEPTUALIZED</span>
                                            <span class="text-xs text-slate-800 font-normal">31.
                                                Aug., 2022 - London (UK)</span>
                                        </dl>
                                        <img src="step-0.png" alt="Step-0" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">DESIGN
                                                PHASE</span>
                                            <span class="text-xs text-slate-800 font-normal">23.
                                                Oct., 2022 - London (UK)</span>
                                        </dl>
                                        <img src="step-01.png" alt="Step-1" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">PROTOTYPE
                                                DEVELOPMENT</span>
                                            <span class="text-xs text-slate-800 font-normal">7.
                                                Nov., 2022 - Leicester (UK)</span>
                                        </dl>
                                        <img src="step-02.png" alt="Step-2" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">REGULATIONS
                                                COMPLIANCE</span>
                                            <span class="text-xs text-slate-800 font-normal">12.
                                                Dec., 2022 - Maribor (SI)</span>
                                        </dl>
                                        <img src="step-03.png" alt="Step-3" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">MANUFACTURING
                                                PREPARATION</span>
                                            <span class="text-xs text-slate-800 font-normal">17.
                                                Jan., 2023 - Maribor (SI)</span>
                                        </dl>
                                        <img src="step-04.png" alt="Step-4" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">PRODUCTION</span>
                                            <span class="text-xs text-slate-800 font-normal">23.
                                                Mar., 2023 - Maribor (SI)</span>
                                        </dl>
                                        <img src="step-05.png" alt="Step-5" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">TESTING
                                                & QA</span>
                                            <span class="text-xs text-slate-800 font-normal">6.
                                                Sep., 2023 - Maribor (SI)</span>
                                        </dl>
                                        <img src="step-06.png" alt="Step-6" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">DISTRIBUTION</span>
                                            <span class="text-xs text-slate-800 font-normal">12.
                                                Dec., 2023 - Rotterdam (NL)</span>
                                        </dl>
                                        <img src="step-07.png" alt="Step-7" width="40" height="40">
                                    </div>
                                    <div class="timeline-dot flex items-center ps-8 relative gap-2">
                                        <dl class="flex flex-col g-two w-full">
                                            <span class="text-xs font-normal text-slate-400">ARRIVED
                                                AT STORE</span>
                                            <span class="text-xs text-slate-800 font-normal">5.
                                                Jan., 2024 - Amsterdam (NL)</span>
                                        </dl>
                                        <img src="step-08.png" alt="Step-8" width="40" height="40">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-lg">
                            <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-900 gap-3"
                                onclick="toggleAccordion(6)">
                                <span class="text-sm font-bold text-slate-800">DOCUMENTS
                                    & DATA</span>
                                    <svg class="icon-closed hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path d="M5.5 14.25L12.5 7.6L19.5 14.25" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="23"
                                    viewBox="0 0 25 23" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="accordion-6" class="pt-4 hidden">
                                <div class="pt-4 flex flex-col gap-5">
                                    <div class="flex flex-col gap-4">
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">MANUALS</dt>
                                            <dd>
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="12" height="14" viewBox="0 0 12 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.99992 7H7.99992M3.99992 9.66667H7.99992M9.33325 13H2.66659C1.93021 13 1.33325 12.403 1.33325 11.6667V2.33333C1.33325 1.59695 1.93021 1 2.66659 1H6.39044C6.56725 1 6.73682 1.07024 6.86185 1.19526L10.4713 4.80474C10.5963 4.92976 10.6666 5.09933 10.6666 5.27614V11.6667C10.6666 12.403 10.0696 13 9.33325 13Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    Quick Start Guide.pdf
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">CERTIFICATIONS</dt>
                                            <dd class="flex flex-col g-two">
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 7.2002L6.33333 8.53353L9 5.86686M4.22316 2.33156C4.70151 2.29339 5.15564 2.10528 5.52088 1.79403C6.3732 1.06768 7.6268 1.06768 8.47912 1.79403C8.84436 2.10528 9.29849 2.29339 9.77684 2.33156C10.8931 2.42064 11.7796 3.30707 11.8686 4.42335C11.9068 4.90171 12.0949 5.35583 12.4062 5.72107C13.1325 6.5734 13.1325 7.82699 12.4062 8.67932C12.0949 9.04456 11.9068 9.49868 11.8686 9.97704C11.7796 11.0933 10.8931 11.9798 9.77684 12.0688C9.29849 12.107 8.84436 12.2951 8.47912 12.6064C7.6268 13.3327 6.3732 13.3327 5.52088 12.6064C5.15564 12.2951 4.70151 12.107 4.22316 12.0688C3.10687 11.9798 2.22045 11.0933 2.13136 9.97704C2.09319 9.49868 1.90509 9.04456 1.59383 8.67932C0.867486 7.82699 0.867486 6.5734 1.59383 5.72107C1.90509 5.35583 2.09319 4.90171 2.13136 4.42335C2.22045 3.30707 3.10687 2.42064 4.22316 2.33156Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    Declaration of Conformity.pdf
                                                </a>
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 7.2002L6.33333 8.53353L9 5.86686M4.22316 2.33156C4.70151 2.29339 5.15564 2.10528 5.52088 1.79403C6.3732 1.06768 7.6268 1.06768 8.47912 1.79403C8.84436 2.10528 9.29849 2.29339 9.77684 2.33156C10.8931 2.42064 11.7796 3.30707 11.8686 4.42335C11.9068 4.90171 12.0949 5.35583 12.4062 5.72107C13.1325 6.5734 13.1325 7.82699 12.4062 8.67932C12.0949 9.04456 11.9068 9.49868 11.8686 9.97704C11.7796 11.0933 10.8931 11.9798 9.77684 12.0688C9.29849 12.107 8.84436 12.2951 8.47912 12.6064C7.6268 13.3327 6.3732 13.3327 5.52088 12.6064C5.15564 12.2951 4.70151 12.107 4.22316 12.0688C3.10687 11.9798 2.22045 11.0933 2.13136 9.97704C2.09319 9.49868 1.90509 9.04456 1.59383 8.67932C0.867486 7.82699 0.867486 6.5734 1.59383 5.72107C1.90509 5.35583 2.09319 4.90171 2.13136 4.42335C2.22045 3.30707 3.10687 2.42064 4.22316 2.33156Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    TCO Certified
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl class="flex flex-col g-two">
                                            <dt class="text-xs font-normal text-slate-400">OTHER</dt>
                                            <dd>
                                                <a href="#"
                                                    class="flex gap-1 underline items-center text-slate-800 font-normal text-sm">
                                                    <svg width="12" height="14" viewBox="0 0 12 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.99992 7H7.99992M3.99992 9.66667H7.99992M9.33325 13H2.66659C1.93021 13 1.33325 12.403 1.33325 11.6667V2.33333C1.33325 1.59695 1.93021 1 2.66659 1H6.39044C6.56725 1 6.73682 1.07024 6.86185 1.19526L10.4713 4.80474C10.5963 4.92976 10.6666 5.09933 10.6666 5.27614V11.6667C10.6666 12.403 10.0696 13 9.33325 13Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    Global warranty Card.pdf
                                                </a>
                                            </dd>

                                        </dl>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="green-001 flex items-center justify-center gap-2 p-3 text-white rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 25 24" fill="none">
                                <path
                                    d="M12.5 2.97754C12.0895 2.97707 11.6854 3.07986 11.325 3.27645C10.9646 3.47304 10.6594 3.75712 10.4375 4.10254L8.32776 7.57054L9.61776 8.34304L11.7268 4.89829C12.1318 4.29454 12.899 4.28104 13.2958 4.89829L15.6395 8.64829L14.5145 9.30529L17.9848 11.25V7.26529L16.907 7.89829L14.5633 4.10329C14.3414 3.75787 14.0362 3.47379 13.6758 3.2772C13.3154 3.08061 12.9113 2.97782 12.5008 2.97829L12.5 2.97754ZM8.30451 9.07054L4.92951 11.016L5.86701 11.5785L3.94551 14.742L3.92151 14.7195C3.91251 14.7323 3.93051 14.7525 3.92151 14.7645C2.81901 16.437 4.09101 18.75 6.12501 18.75H10.25V17.25H6.12501C5.17476 17.25 4.66551 16.3125 5.16501 15.585L5.18751 15.5625V15.54L7.15626 12.3525L8.30376 13.0545V9.07054H8.30451ZM19.2965 11.742L18.008 12.5393L19.883 15.5393C20.363 16.3545 19.8178 17.2493 18.9455 17.2493H14.75V15.7493L11.0705 17.9993L14.75 20.25V18.75H18.9455C20.9233 18.75 22.1915 16.5 21.1715 14.7653V14.7428L19.2965 11.742Z"
                                    fill="currentColor"></path>
                            </svg>
                            Recycle product
                        </a>

                        <a href="#"
                            class="blue-001 flex items-center justify-center gap-2 p-3 text-white rounded-lg">
                            <svg width="16" height="16" viewBox="0 0 19 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M 12.6477,2.81091 15.8321,8.35687 12.6477,13.90279 9.71647,8.7984 C 9.55957,8.52575 9.2693,8.35687 8.9555,8.35687 H 3.0931 L 6.27748,2.81091 Z M 0.117676,8.7984 4.40964,16.27289 c 0.1569,0.2734 0.44717,0.4423 0.76097,0.4423 h 8.58389 c 0.3138,0 0.6041,-0.1689 0.761,-0.4423 l 4.292,-7.47378 c 0.1569,-0.27336 0.1569,-0.60969 0,-0.88306 L 14.5155,0.44153 C 14.3586,0.168168 14.0683,0 13.7545,0 H 5.17061 C 4.85681,0 4.56725,0.168168 4.40964,0.44153 L 0.117676,7.91462 c -0.1569013,0.27337 -0.1569013,0.61113 0,0.88378 z"
                                    fill="currentColor"></path>
                            </svg>
                            Request Full Demo
                        </a>
                    </div>
                </div>
            </div>
            <ul class="flex justify-around z-10 fixed w-full bg-white bottom-0 max550 boxShadow">
                <li class="inline-flex">
                    <a href="#" class="p-5 block active:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <path
                                d="M3.5 12L5.5 10M5.5 10L12.5 3L19.5 10M5.5 10V20C5.5 20.5523 5.94772 21 6.5 21H9.5M19.5 10L21.5 12M19.5 10V20C19.5 20.5523 19.0523 21 18.5 21H15.5M9.5 21C10.0523 21 10.5 20.5523 10.5 20V16C10.5 15.4477 10.9477 15 11.5 15H13.5C14.0523 15 14.5 15.4477 14.5 16V20C14.5 20.5523 14.9477 21 15.5 21M9.5 21H15.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </li>

                <li class="inline-flex">
                    <a href="#" class="p-5 block active:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <path d="M13.5 10V3L4.5 14H11.5L11.5 21L20.5 10L13.5 10Z" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </li>

                <li class="inline-flex">
                    <a href="#" class="p-5 block active:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <path
                                d="M13.25 4C13.25 3.58579 12.9142 3.25 12.5 3.25C12.0858 3.25 11.75 3.58579 11.75 4H13.25ZM11.75 5C11.75 5.41421 12.0858 5.75 12.5 5.75C12.9142 5.75 13.25 5.41421 13.25 5H11.75ZM18.5 15.25C18.0858 15.25 17.75 15.5858 17.75 16C17.75 16.4142 18.0858 16.75 18.5 16.75V15.25ZM20.5 16.75C20.9142 16.75 21.25 16.4142 21.25 16C21.25 15.5858 20.9142 15.25 20.5 15.25V16.75ZM12.5 16V15.25C12.0858 15.25 11.75 15.5858 11.75 16H12.5ZM14.5 16.75C14.9142 16.75 15.25 16.4142 15.25 16C15.25 15.5858 14.9142 15.25 14.5 15.25V16.75ZM11.75 20C11.75 20.4142 12.0858 20.75 12.5 20.75C12.9142 20.75 13.25 20.4142 13.25 20H11.75ZM13.25 9C13.25 8.58579 12.9142 8.25 12.5 8.25C12.0858 8.25 11.75 8.58579 11.75 9H13.25ZM12.5 12H11.75C11.75 12.4142 12.0858 12.75 12.5 12.75V12ZM16.5 19.25C16.0858 19.25 15.75 19.5858 15.75 20C15.75 20.4142 16.0858 20.75 16.5 20.75V19.25ZM20.5 20.75C20.9142 20.75 21.25 20.4142 21.25 20C21.25 19.5858 20.9142 19.25 20.5 19.25V20.75ZM4.5 11.25C4.08579 11.25 3.75 11.5858 3.75 12C3.75 12.4142 4.08579 12.75 4.5 12.75V11.25ZM8.5 12.75C8.91421 12.75 9.25 12.4142 9.25 12C9.25 11.5858 8.91421 11.25 8.5 11.25V12.75ZM12.51 12.75C12.9242 12.75 13.26 12.4142 13.26 12C13.26 11.5858 12.9242 11.25 12.51 11.25V12.75ZM16.51 12.75C16.9242 12.75 17.26 12.4142 17.26 12C17.26 11.5858 16.9242 11.25 16.51 11.25V12.75ZM20.5 11.25C20.0858 11.25 19.75 11.5858 19.75 12C19.75 12.4142 20.0858 12.75 20.5 12.75V11.25ZM20.51 12.75C20.9242 12.75 21.26 12.4142 21.26 12C21.26 11.5858 20.9242 11.25 20.51 11.25V12.75ZM5.5 4.75H7.5V3.25H5.5V4.75ZM7.75 5V7H9.25V5H7.75ZM7.5 7.25H5.5V8.75H7.5V7.25ZM5.25 7V5H3.75V7H5.25ZM5.5 7.25C5.36193 7.25 5.25 7.13807 5.25 7H3.75C3.75 7.9665 4.5335 8.75 5.5 8.75V7.25ZM7.75 7C7.75 7.13807 7.63807 7.25 7.5 7.25V8.75C8.4665 8.75 9.25 7.9665 9.25 7H7.75ZM7.5 4.75C7.63807 4.75 7.75 4.86193 7.75 5H9.25C9.25 4.0335 8.4665 3.25 7.5 3.25V4.75ZM5.5 3.25C4.5335 3.25 3.75 4.0335 3.75 5H5.25C5.25 4.86193 5.36193 4.75 5.5 4.75V3.25ZM17.5 4.75H19.5V3.25H17.5V4.75ZM19.75 5V7H21.25V5H19.75ZM19.5 7.25H17.5V8.75H19.5V7.25ZM17.25 7V5H15.75V7H17.25ZM17.5 7.25C17.3619 7.25 17.25 7.13807 17.25 7H15.75C15.75 7.9665 16.5335 8.75 17.5 8.75V7.25ZM19.75 7C19.75 7.13807 19.6381 7.25 19.5 7.25V8.75C20.4665 8.75 21.25 7.9665 21.25 7H19.75ZM19.5 4.75C19.6381 4.75 19.75 4.86193 19.75 5H21.25C21.25 4.0335 20.4665 3.25 19.5 3.25V4.75ZM17.5 3.25C16.5335 3.25 15.75 4.0335 15.75 5H17.25C17.25 4.86193 17.3619 4.75 17.5 4.75V3.25ZM5.5 16.75H7.5V15.25H5.5V16.75ZM7.75 17V19H9.25V17H7.75ZM7.5 19.25H5.5V20.75H7.5V19.25ZM5.25 19V17H3.75V19H5.25ZM5.5 19.25C5.36193 19.25 5.25 19.1381 5.25 19H3.75C3.75 19.9665 4.5335 20.75 5.5 20.75V19.25ZM7.75 19C7.75 19.1381 7.63807 19.25 7.5 19.25V20.75C8.4665 20.75 9.25 19.9665 9.25 19H7.75ZM7.5 16.75C7.63807 16.75 7.75 16.8619 7.75 17H9.25C9.25 16.0335 8.4665 15.25 7.5 15.25V16.75ZM5.5 15.25C4.5335 15.25 3.75 16.0335 3.75 17H5.25C5.25 16.8619 5.36193 16.75 5.5 16.75V15.25ZM11.75 4V5H13.25V4H11.75ZM18.5 16.75H20.5V15.25H18.5V16.75ZM12.5 16.75H14.5V15.25H12.5V16.75ZM11.75 16V20H13.25V16H11.75ZM11.75 9V12H13.25V9H11.75ZM16.5 20.75H20.5V19.25H16.5V20.75ZM4.5 12.75H8.5V11.25H4.5V12.75ZM12.5 12.75H12.51V11.25H12.5V12.75ZM20.5 12.75H20.51V11.25H20.5V12.75ZM12.5 12.75H16.51V11.25H12.5V12.75Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </li>

                <li class="inline-flex">
                    <a href="#" class="p-5 block active:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <path
                                d="M12.5 2.97754C12.0895 2.97707 11.6854 3.07986 11.325 3.27645C10.9646 3.47304 10.6594 3.75712 10.4375 4.10254L8.32776 7.57054L9.61776 8.34304L11.7268 4.89829C12.1318 4.29454 12.899 4.28104 13.2958 4.89829L15.6395 8.64829L14.5145 9.30529L17.9848 11.25V7.26529L16.907 7.89829L14.5633 4.10329C14.3414 3.75787 14.0362 3.47379 13.6758 3.2772C13.3154 3.08061 12.9113 2.97782 12.5008 2.97829L12.5 2.97754ZM8.30451 9.07054L4.92951 11.016L5.86701 11.5785L3.94551 14.742L3.92151 14.7195C3.91251 14.7323 3.93051 14.7525 3.92151 14.7645C2.81901 16.437 4.09101 18.75 6.12501 18.75H10.25V17.25H6.12501C5.17476 17.25 4.66551 16.3125 5.16501 15.585L5.18751 15.5625V15.54L7.15626 12.3525L8.30376 13.0545V9.07054H8.30451ZM19.2965 11.742L18.008 12.5393L19.883 15.5393C20.363 16.3545 19.8178 17.2493 18.9455 17.2493H14.75V15.7493L11.0705 17.9993L14.75 20.25V18.75H18.9455C20.9233 18.75 22.1915 16.5 21.1715 14.7653V14.7428L19.2965 11.742Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </li>

                <li class="inline-flex">
                    <a href="#" class="p-5 block active:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <path
                                d="M16.5 7C16.5 9.20914 14.7091 11 12.5 11C10.2909 11 8.5 9.20914 8.5 7C8.5 4.79086 10.2909 3 12.5 3C14.7091 3 16.5 4.79086 16.5 7Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M12.5 14C8.63401 14 5.5 17.134 5.5 21H19.5C19.5 17.134 16.366 14 12.5 14Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>
    </main>
    @livewireScripts
    <script>
        function toggleAccordion(id) {
            const accordion = document.getElementById(`accordion-${id}`);
            const button = accordion.previousElementSibling;
            const isOpen = !accordion.classList.toggle('hidden');
            button.querySelector('.icon-closed').classList.toggle('hidden', !isOpen);
            button.querySelector('.icon-open').classList.toggle('hidden', isOpen);
        }

        const maxScroll = 300;

        window.addEventListener('scroll', function() {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const image = document.querySelector('.image-container img');

            if (image) {
                const opacity = Math.max(1 - scrollTop / maxScroll, 0.1);
                const blur = Math.min(scrollTop / maxScroll * 7.7, 7.7);

                image.style.opacity = opacity.toString();
                image.style.filter = `blur(${blur}px)`;
            }
        });
    </script>
</body>

</html>
