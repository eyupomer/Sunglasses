<?php require('header.php') ?>

<div class="contact">
    <div class="container mx-auto">
        <div class="head text-center" data-aos="fade-up" data-aos-duration="1200">
            <h5>Bizimle İletişime Geçin</h5>
        </div>
        <div class="contact-area flex flex-col md:flex-row">
            <div class="contact-img mb-8 md:mb-o w-full md:w-1/2" data-aos="fade-right" data-aos-duration="1200">
                <img src="./assets/images/login.png" alt="">
            </div>
            <div class="contact-form w-full md:w-1/2
            " data-aos="fade-left" data-aos-duration="1200">
                <form class="w-full" id="offer-form" data-href="" action="">
                    <div class="input-group flex flex-wrap">
                        <div class="flex items-center justify-between w-full">
                            <div class="input-element w-1/2">
                                <label class="block" for="">Yetkili Adı</label>
                                <div class="icon-input-element relative">
                                    <div class="input-icon absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 288c-154 0-239 73-239 205 0 11 9 19 19 19h440c10 0 19-8 19-19 0-132-85-205-239-205zM55 475c8-99 75-149 201-149s193 50 201 149H55zM256 0c-71 0-124 54-124 126 0 75 56 135 124 135s124-60 124-135C380 54 327 0 256 0zm0 224c-48 0-87-44-87-98 0-51 37-89 87-89 49 0 87 39 87 89 0 54-39 98-87 98z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="text" id="authorized-name" name="authorized-name" placeholder="">
                                    <input type="hidden" id="type" value="offer">
                                </div>
                            </div>
                            <div class="input-element w-1/2">
                                <label class="block" for="">Kurum Adı</label>
                                <div class="icon-input-element relative">
                                    <div class="input-icon absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M282 166h46c6 0 10-4 10-10v-46c0-5-4-10-10-10h-46c-6 0-10 5-10 10v46c0 6 4 10 10 10zm10-46h26v26h-26zm-101 46h46c6 0 10-4 10-10v-46c0-5-4-10-10-10h-46c-5 0-10 5-10 10v46c0 6 5 10 10 10zm10-46h26v26h-26zm81 148h46c6 0 10-4 10-10v-46c0-6-4-10-10-10h-46c-6 0-10 4-10 10v46c0 6 4 10 10 10zm10-46h26v26h-26zm-101 46h46c6 0 10-4 10-10v-46c0-6-4-10-10-10h-46c-5 0-10 4-10 10v46c0 6 5 10 10 10zm10-46h26v26h-26zm81 148h46c6 0 10-5 10-10v-47c0-5-4-10-10-10h-46c-6 0-10 5-10 10v47c0 5 4 10 10 10zm10-47h26v27h-26zm-55 47c6 0 10-5 10-10v-47c0-5-4-10-10-10h-46c-5 0-10 5-10 10v47c0 5 5 10 10 10zm-36-47h26v27h-26z">
                                            </path>
                                            <path
                                                d="M464 492h-9V190c0-6-5-10-10-10h-65V56c0-6-5-10-10-10h-22V10c0-6-4-10-10-10H181c-5 0-10 4-10 10v36h-21c-6 0-10 4-10 10v192H85c-6 0-10 5-10 10v234H48a10 10 0 1 0 0 20h416a10 10 0 1 0 0-20zM191 20h137v26H191zM95 268h45v224H95zm65-202h200v426h-50v-66c0-6-5-10-10-10h-80c-6 0-10 4-10 10v66h-50zm70 426v-56h60v56zm150 0V200h55v292z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="text" id="company-name" name="company-name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="input-element w-full">
                            <label class="block" for="">Telefon</label>
                            <div class="icon-input-element relative">
                                <div class="input-icon absolute">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M368 512c-17 0-33-3-49-9A522 522 0 0 1 9 193 142 142 0 0 1 26 62 146 146 0 0 1 144 0a16 16 0 0 1 16 13l25 117a16 16 0 0 1-4 15l-43 42c40 81 106 147 187 187l43-43a16 16 0 0 1 14-4l117 25a16 16 0 0 1 13 16 143 143 0 0 1-62 118c-18 13-39 21-61 25a142 142 0 0 1-21 1zM132 33c-32 3-61 20-80 47-21 30-26 67-13 102a485 485 0 0 0 291 291 111 111 0 0 0 149-93l-95-20-45 45a16 16 0 0 1-18 3 453 453 0 0 1-217-217 16 16 0 0 1 3-18l45-45z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" id="phone" name="phone" placeholder="">
                            </div>
                        </div>
                        <div class="input-element w-full">
                            <label class="block" for="">E-posta</label>
                            <div class="icon-input-element relative">
                                <div class="input-icon absolute">
                                    <svg viewBox="0 0 479 479" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M434 60H45C20 60 0 80 0 105v269c0 25 20 45 45 45h389c25 0 45-20 45-45V105c0-25-20-45-45-45zm0 30 6 1-200 174L39 91a15 15 0 0 1 6-1zm0 299H45c-8 0-15-6-15-15V123l200 173a15 15 0 0 0 19 0l200-173v251c0 9-7 15-15 15z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" id="mail" name="mail" placeholder="">
                            </div>
                        </div>
                        <div class="input-element w-full">
                            <label class="block" for="">Mesajınız</label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                        <div class="input-element w-full">
                            <button type="button" id="offer-submit"
                                class="focus:outline-none engintag_contact">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require('footer.php') ?>