<script src="{{ mix('js/app.js') }}"></script>

var formulario = document.getElementById('todo');
var respuesta = document.getElementById('respuesta');



 formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log('HOLA');

    let datos =new FormData(formulario);
    console.log(datos);
    console.log(datos.get('nombre'));

  
    fetch(route('ventas.guardar'),{
        method: 'POST',
        body:  datos
        //body: {datos, tabla: myTableArray}
    }) 
    
    let myTableArray = [];

    $("table#tableexample1 tr").each(function () {
        let arrayOfThisRow = [];
        let tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function () {
                arrayOfThisRow.push($(this).text());
            });
            myTableArray.push(arrayOfThisRow);
        }
    });


});  

