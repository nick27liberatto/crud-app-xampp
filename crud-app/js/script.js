const table = document.getElementById("table")
if (table) {
    console.log("deu")
const del = document.getElementById("delete");
del.addEventListener('click', (evt) => {
    if (!confirm('Tem certeza que deseja deletar este cadastro?')){
        evt.preventDefault();
    }
})
}