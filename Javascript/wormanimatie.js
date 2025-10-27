let worm = document.getElementById("worm");
let container = worm.parentElement;

function moveRandom() {
    
    // met behulp van Math.random kiest hij een willekeurige plek uit om te verplaatsen
    let maxWidth = container.clientWidth - worm.clientWidth;
    let maxHeight = container.clientHeight - worm.clientWidth;
    let randomX = Math.floor(Math.random() * maxWidth);
    let randomY = Math.floor(Math.random() * maxHeight);

    worm.style.left = randomX + "px";
    worm.style.top = randomY + "px";

    setTimeout(moveRandom, 2000);
}

moveRandom();