
<div id="footer">
        <div class="bg-gray-900">
            <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                    <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Apple</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Iphone 12 pro</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Iphone 12</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Iphone 11</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Iphone 7</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">SamSung</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Galaxy S7</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Galaxy s8</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Galaxy S9</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">S20 Ultra</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Samsung S7</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Oppo</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">F1s</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">A37</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">R17</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Reno 2</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">s7</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Infinix</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Note 8i</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Note 10</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Hot 8</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Hot 9</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:max-w-md lg:col-span-2">
                        <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
                        <form class="flex flex-col mt-4 md:flex-row">
                            <input placeholder="Email" required="" type="text" class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                            />
                            <button type="submit" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white bg-red-600 transition duration-200 rounded shadow-md hover:bg-red-900 focus:shadow-outline focus:outline-none">
                      Subscribe
                    </button>
                        </form>
                        <p class="mt-4 text-sm text-gray-500">
                            This is Hamza Mobiles. Here you find your desired mobile phone at low price.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                    <p class="text-sm text-gray-500">
                        © Copyright 2023 Hamza Mob. All rights reserved.
                    </p>
                    <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                    <?php 
                        foreach ($socialMedia as $keyname => $keyUrl){
                        ?>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?= $keyUrl ?>"><i class="fab fa-fw <?= $keyname ?>"></i></a>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
