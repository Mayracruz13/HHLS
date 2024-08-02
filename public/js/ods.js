
function asignarAnimacion(tarjeta, claseActual, claseSiguiente){
            tarjeta.style.animation = claseActual.toUpperCase() + 'to' + claseSiguiente.toUpperCase() + ' 1s linear forwards';
            tarjeta.className = 'tarjeta ' + claseSiguiente.toLowerCase();
        }

        var $prev = document.getElementById('prev');
        var $next = document.getElementById('next');

        $prev.addEventListener('click', function(){
            const $tarjetas = Array.from( document.getElementsByClassName('tarjeta') )
            $tarjetas.forEach(function($tarjeta){
                switch ($tarjeta.className.toString().substr(8, 1)){
                    case 'a':
                        asignarAnimacion($tarjeta, 'a', 'e');
                        break;
                    case 'b':
                        asignarAnimacion($tarjeta, 'b', 'a');
                        break;
                    case 'c':
                        asignarAnimacion($tarjeta, 'c', 'b');
                        break;
                    case 'd':
                        asignarAnimacion($tarjeta, 'd', 'c');
                        break;
                    case 'e':
                        asignarAnimacion($tarjeta, 'e', 'd');
                        break;
                }
            })
        })

        $next.addEventListener('click', function(){
            const $tarjetas = Array.from( document.getElementsByClassName('tarjeta') )
            $tarjetas.forEach(function($tarjeta){
                switch ($tarjeta.className.toString().substr(8, 1)){
                    case 'a':
                        asignarAnimacion($tarjeta, 'a', 'b');
                        break;
                    case 'b':
                        asignarAnimacion($tarjeta, 'b', 'c');
                        break;
                    case 'c':
                        asignarAnimacion($tarjeta, 'c', 'd');
                        break;
                    case 'd':
                        asignarAnimacion($tarjeta, 'd', 'e');
                        break;
                    case 'e':
                        asignarAnimacion($tarjeta, 'e', 'a');
                        break;
                }
            })
        })
