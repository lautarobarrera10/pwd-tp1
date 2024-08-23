document.querySelector("#year").addEventListener("input", event => {
    if (event.target.value.length > 4) {
        event.target.value = event.target.value.slice(0, 4);
    }
});

document.querySelector("#duracion").addEventListener("input", event => {
    if (event.target.value.length > 3) {
        event.target.value = event.target.value.slice(0, 3);
    }
});

document.querySelector("#reset-button").addEventListener("click", () => {
    document.querySelector("#formulario").reset();
})