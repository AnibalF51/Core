function callc() {
    let elementos = document.getElementsByClassName('calcu');
    let total = 0;
    for (let i of elementos) {
        total = parseFloat(total) + parseFloat(i.value);

        //console.log(i.value);
    }
    console.log(total);
    document.getElementById('cal').value = total;
}