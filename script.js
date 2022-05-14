/* SIDEBAR */
const sidebar = document.getElementById('sidebar')
function toggleSidebar(){
    sidebar.classList.toggle('active');
}

function gotoRosca(){
    const rendimento = document.getElementById('rosca_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `/pages/rosca.php?quant=${rendimento}`;
    }
}
function gotoQueijo(){
    const rendimento = document.getElementById('queijo_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `/pages/queijo.php?quant=${rendimento}`;
    }
}
function gotoCacetinho(){
    const rendimento = document.getElementById('cacetinho_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `/pages/cacetinho.php?quant=${rendimento}`;
    }
}
function gotoSonho(){
    const rendimento = document.getElementById('sonho_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `/pages/sonho.php?quant=${rendimento}`;
    }
}
function gotoDoce(){
    const rendimento = document.getElementById('doce_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `/pages/doce.php?quant=${rendimento}`;
    }
}