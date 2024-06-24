alert(1)
function showblog(block_main) {
    document.querySelectorAll('.main').forEach(function (main) {
        main.classList.add('d-none')
    })
    document.getElementById(`${block_main}`).classList.remove('d-none')

    document.getElementById('mobile-nav').classList.remove('active')
}

window.addEventListener('DOMContentLoaded', (event) => {
    // Check if the Telegram Web App object is available
    if (window.Telegram.WebApp) {
        // Expand the web app to full height
        Telegram.WebApp.expand();

        // Optional: you can also set the background color, header color, etc.
        Telegram.WebApp.setBackgroundColor('#ffffff');
        Telegram.WebApp.setHeaderColor('black');
    } else {
        console.log("Telegram Web App object not found.");
    }
});


window.addEventListener('DOMContentLoaded', (event) => {
    // Check if the Telegram Web App object is available
    if (window.Telegram.WebApp) {
        const webApp = Telegram.WebApp;

        // Expand the web app to full height
        webApp.expand();

    } else {
        console.log("Telegram Web App object not found.");
    }
});