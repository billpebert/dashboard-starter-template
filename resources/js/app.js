import './bootstrap';
import jQuery from 'jquery';
import 'preline';
import '/node_modules/overlayscrollbars/styles/overlayscrollbars.css';
import {OverlayScrollbars} from 'overlayscrollbars';

// Initialize OverlayScrollbars in your script
document.addEventListener('DOMContentLoaded', () => {
    const overlayScrollConfig = {
        scrollbars: {
            theme: 'os-theme-dark',
            visibility: 'auto',
            autoHide: 'never',
            autoHideDelay: 700,
            autoHideSuspend: false,
            dragScroll: true,
            clickScroll: true,
            pointers: ['mouse', 'touch', 'pen'],
        },
        overflow: {
            x: 'visible'
        }
    }
    OverlayScrollbars(document.querySelector('#sidebaroverlay__'), {
        ...overlayScrollConfig,
        scrollbars: {
            autoHide: 'leave'
        }
    });

    OverlayScrollbars(document.querySelector('#globalSearchModalList'), overlayScrollConfig)
});

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
