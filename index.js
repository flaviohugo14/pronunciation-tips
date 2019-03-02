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

            console.log(campos);

            var tbody = document.querySelector('table tbody');

            document.querySelector(".form").addEventListener('submit', function(event){

                event.preventDefault();
                
                var tr = document.createElement('tr');

                campos.forEach(function(campo){

                    var td = document.createElement('td');
                    td.textContent = campo.value;
                    tr.appendChild(td);
                });

                tbody.appendChild(tr);

            });