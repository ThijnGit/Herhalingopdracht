// Koppel de worm aan de foto en verstuur als er op wordt geklikt.
document.getElementById('worm').addEventListener('click', function() {
    fetch('../Php/scoreteller.php', { method: 'POST' })
});
