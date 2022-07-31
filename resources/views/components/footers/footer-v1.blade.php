

<footer class="w-full py-10 bg-gray-100">
    <div class="md:px-12 lg:px-28">
        <div class="container m-auto space-y-6 text-gray-600">
            <x-application-logo class="h-12 sm:h-16 m-auto" type="light"/>

            {{--            <img src="images/logo.svg" alt="logo tailus" class="w-40 m-auto" />--}}
            <ul role="list" class="py-4 flex flex-col gap-4 items-center justify-center sm:flex-row sm:gap-8">
                <li role="listitem"><a href="#" class="hover:text-primary">About us</a></li>
                <li role="listitem"><a href="#" class="hover:text-primary">Contact Us</a></li>
                <li role="listitem"><a href="#" class="hover:text-primary">Privacy Policy</a></li>
                <li role="listitem"><a href="#" class="hover:text-primary">Terms and conditions</a></li>
            </ul>
            <div class="max-w-max m-auto flex items-center justify-between space-x-4">
                <a href="{{ setting('social_facebook') }}" target="_blank" title="facebook" target="blank" aria-label="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg>
                </a>
                <a href="{{ setting('social_twitter') }}" target="_blank" aria-label="twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                </a>

                <a href="{{ setting('social_telegram') }}" target="_blank" aria-label="telegram">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto" viewBox="0 0 496 512"><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>
                </a>

                <a href="{{ setting('social_instagram') }}" target="_blank" aria-label="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>
            </div>

            <div class="text-center">
                <span class="text-sm tracking-wide">Copyright © {{ setting('site_name') }} <span id="year">{{date('Y')}}</span> | All right reserved</span>
            </div>
        </div>
    </div>
</footer>



<div class="fixed top-1/4 -right-1 z-3">
    <span class="relative inline-block rotate-90">
        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
        <label class="theme-toggle label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8  dark:flex-row-reverse" for="chk">
{{--            <i class="uil uil-moon text-[20px] text-yellow-500"></i>--}}
{{--            <i class="uil uil-sun text-[20px] text-yellow-500"></i>--}}

            <svg id="theme-toggle-dark-icon"
                 xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 width="24"
                 height="24"
                 class="theme-toggle-dark-icon fill-yellow-500 text-yellow-500 dark-mode-light h-5 w-5 transition-colors group-hover:fill-yellow-500 group-focus:fill-yellow-500 dark:hidden ">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M11.38 2.019a7.5 7.5 0 1 0 10.6 10.6C21.662 17.854 17.316 22 12.001 22 6.477 22 2 17.523 2 12c0-5.315 4.146-9.661 9.38-9.981z"/>
                    </svg>

                    <svg id="theme-toggle-light-icon"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         width="24"
                         height="24"
                         class="theme-toggle-light-icon fill-yellow-500 dark-mode-dark h-4 w-4 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-yellow-500 hidden dark:block ">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"/>
                    </svg>
            <span class="ball bg-white dark:bg-gray-900 rounded-full dark:trans w-6 h-6 dark:order-1"></span>
{{--            <span class="ball dark:bg-gray-900 rounded-full absolute bottom-[2px] translate-x-3/4 hidden dark:block left-[2px] w-7 h-7"></span>--}}
        </label>
    </span>
</div>
