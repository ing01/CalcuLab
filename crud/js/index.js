function createGlitter() {
    const glitterContainer = document.querySelector('.glitter');
    const numberOfGlitters = 100;

    for (let i = 0; i < numberOfGlitters; i++) {
        const glitter = document.createElement('span');
        glitter.style.top = `${Math.random() * 100}vh`;
        glitter.style.left = `${Math.random() * 100}vw`;
        glitter.style.animationDelay = `${Math.random() * 2}s`;
        glitter.style.animationDuration = `${Math.random() * 2 + 1}s`;
        glitterContainer.appendChild(glitter);
    }
}

createGlitter();
