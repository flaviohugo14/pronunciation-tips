var campos = [
    document.querySelector("#a"),
    document.querySelector("#b"),
    document.querySelector("#c"),
    document.querySelector("#d"),
    document.querySelector("#e"),
    document.querySelector("#f"),
    document.querySelector("#g"),
    document.querySelector("#h"),
    document.querySelector("#i"),
    document.querySelector("#j"),
    document.querySelector("#k"),
    document.querySelector("#l")
            ];
var resposta = [
    'seat',
    'rush',
    'derail',
    'tough',
    'bored',
    'seeker',
    'reach',
    'meow',
    'fruit',
    'through',
    'task',
    'busy'
];

console.log(campos);

var tbody = document.querySelector('table tbody');
var cf = document.querySelector('.card-footer');

document.querySelector(".form").addEventListener('submit', function(event){

    localStorage.setItem('acesso', '1');

    event.preventDefault();

    var tr = document.createElement('tr');

    var x = 0;
    campos.forEach(function(campo, i){
        if(resposta[i] == campo.value.toLowerCase()){
            x = x+1;
            var span = document.createElement('span');
            span.setAttribute("class", "badge badge-success");
            span.textContent = "Correct!"
            var td = document.createElement('td');
            td.appendChild(span);
            tr.appendChild(td);
            campo.setAttribute("disabled", "true");
        }
        else{
            var span = document.createElement('span');
            span.setAttribute("class", "badge badge-danger");
            span.textContent = "Incorrect"
            var td = document.createElement('td');
            td.appendChild(span);
            tr.appendChild(td);
            campo.setAttribute("disabled", "true");
        }
    });

    var send = document.querySelector('#send');
    send.setAttribute("disabled", "true");
    console.log(x);
    tbody.appendChild(tr);
    label1 = document.querySelector('#label1');
    label2 = document.querySelector('#label2');
    label1.textContent = x;
    label2.textContent = campos.length - x;
    var btn = document.createElement('button');
    btn.setAttribute("class", "btn btn-lg btn-outline-info btn-block");
    btn.setAttribute("type", "submit");
    btn.textContent = "Save";
    cf.appendChild(btn);
});