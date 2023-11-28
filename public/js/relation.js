let relSelect1 = document.getElementById("selectRel1");
let imgRel1 = document.getElementById("relationPer");
let relSelect2 = document.getElementById("selectRel2");
let imgRel2 = document.getElementById("relationFilm");

relSelect1.addEventListener("change", (event) => {
    fetch('/get-linkPer/' + relSelect1.value)
    .then(response => response.json())
    .then(data => {
        imgRel1.src = data.link;
    });
});

relSelect2.addEventListener("change", (event) => {
    fetch('/get-linkFilm/' + relSelect2.value)
    .then(response => response.json())
    .then(data => {
        imgRel2.src = data.link;
    });
    
});