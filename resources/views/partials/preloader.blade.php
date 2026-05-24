<!-- Simple Preloader -->
<div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white">

    <div class="flex flex-col items-center">

        <!-- Logo -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-14 h-14 object-contain animate-pulse">

        <!-- Loading Line -->
        <div class="mt-5 w-20 h-[2px] bg-gray-200 overflow-hidden rounded-full">

            <div class="h-full w-1/2 bg-[#29357A] animate-loading"></div>
        </div>
    </div>
</div>

<style>
    @keyframes loading {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(220%);
        }
    }

    .animate-loading {
        animation: loading 1s infinite ease-in-out;
    }
</style>

<script>
    window.addEventListener('load', () => {

        const preloader = document.getElementById('preloader');

        setTimeout(() => {

            preloader.style.opacity = '0';
            preloader.style.transition = '0.4s';

            setTimeout(() => {
                preloader.remove();
            }, 400);

        }, 700);
    });
</script>
