import './bootstrap';
import jQuery from 'jquery';
import 'preline';
import 'overlayscrollbars/overlayscrollbars.css';

window.$ = window.jQuery = jQuery;

$('[data-tw-theme]').on('click', function () {
    $('[data-tw-theme]').removeClass('active')
    let theme = $(this).data('tw-theme')
    $(this).addClass('active')

    if (theme == 'system') {
        // Whenever the user explicitly chooses to respect the OS preference
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            $('html').addClass('dark')
            $('html').removeClass('light')
        } else {
            $('html').removeClass('dark')
            $('html').addClass('light')
        }
        localStorage.removeItem('theme')
    }

    // Whenever the user explicitly chooses light mode
    if (theme == 'light') {
        $('html').removeClass('dark')
        $('html').addClass(theme)
        localStorage.setItem('theme', theme)
    }

    // Whenever the user explicitly chooses dark mode
    if (theme == 'dark') {
        $('html').removeClass('light')
        $('html').addClass(theme)
        localStorage.setItem('theme', theme)
    }
})
