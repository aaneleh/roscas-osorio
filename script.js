function gotoRosca(){
    const rendimento = document.getElementById('rosca_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `rosca.php?quant=${rendimento}`;
    }
}
function gotoQueijo(){
    const rendimento = document.getElementById('queijo_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `queijo.php?quant=${rendimento}`;
    }
}
function gotoCacetinho(){
    const rendimento = document.getElementById('cacetinho_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `cacetinho.php?quant=${rendimento}`;
    }
}
function gotoSonho(){
    const rendimento = document.getElementById('sonho_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `sonho.php?quant=${rendimento}`;
    }
}
function gotoVirada(){
    const rendimento = document.getElementById('virada_quant').value;
    if(rendimento == ""){
        alert('valor inválido');
    } else {
        window.location = `virada.php?quant=${rendimento}`;
    }
}