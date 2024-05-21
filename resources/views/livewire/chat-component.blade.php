<div>
    <div style="overscroll-behavior: none;">
        <div class="fixed flex justify-between w-full h-16 pt-2 text-white bg-green-400 shadow-md"
            style="top:0px; overscroll-behavior: none;">
            <!-- back button -->
            <a href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 my-1 ml-2 text-green-100">
                    <path class="text-green-100 fill-current"
                        d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
                </svg>
            </a>
            <div class="my-3 text-lg font-bold tracking-wide text-green-100">{{ $user->name }}</div>
            <!-- 3 dots -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mt-2 mr-2 icon-dots-vertical">
                <path class="text-green-100 fill-current" fill-rule="evenodd"
                    d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
            </svg>
        </div>

        <div class="mt-20 mb-16">
            <div class="clearfix">
                <div class="w-3/4 p-2 mx-4 my-2 bg-gray-300 rounded-lg">this is a basic mobile chat layout, build with
                    tailwind css</div>
            </div>

            <div class="clearfix">
                <div class="clearfix w-3/4 p-2 mx-4 my-2 bg-gray-300 rounded-lg">It will be used for a full tutorial
                    about building a chat app with vue, tailwind and firebase.</div>
            </div>
            <div class="clearfix">
                <div class="clearfix float-right w-3/4 p-2 mx-4 my-2 bg-green-300 rounded-lg">check my twitter to see
                    when it will be released.</div>
            </div>
        </div>
    </div>

    <div class="fixed flex justify-between w-full bg-green-100" style="bottom: 0px;">
        <textarea class="flex-grow px-4 py-2 m-2 mr-1 bg-gray-200 border border-gray-300 rounded-full resize-none"
            rows="1" placeholder="Message..." style="outline: none;"></textarea>
        <button class="m-2" style="outline: none;">
            <svg class="w-12 h-12 py-2 mr-2 text-green-400 svg-inline--fa fa-paper-plane fa-w-16" aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="paper-plane" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z" />
            </svg>
        </button>
    </div>
</div>
