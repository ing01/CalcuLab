function createSymbol() {
    const symbols = ['+', '#', '/', '$', '%'];
    const symbol = document.createElement("span");
    symbol.innerHTML = symbols[Math.floor(Math.random() * symbols.length)];
    symbol.classList.add("symbol");

    symbol.style.left = Math.random() * window.innerWidth + "px";
    symbol.style.top = Math.random() * -50 + "px";
    symbol.style.fontSize = Math.random() * 20 + 20 + "px";
    symbol.style.animationDuration = Math.random() * 15 + 5 + "s";
    
    document.querySelector(".background").appendChild(symbol);

    setTimeout(() => symbol.remove(), 10000);
}

setInterval(createSymbol, 500);
