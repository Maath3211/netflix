let select = document.getElementById("tri");
let p = document.getElementById("tri2");
select.addEventListener("change", (event) => {
    if (select.value != 0) window.location.assign("actor?tri=" + select.value);
    else window.location.assign("actor")
    p.innerText = select.value;
});
