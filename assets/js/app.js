

if( document.getElementById("v_app") ) {
    var v = new Vue({
        el: '#v_app',
        data: {
           clientes:[], 
           url:'',
           buscar:'',
    
        },
        created() {
            //alert("ol")
            this.url = window.location.origin + '/examn_php/app/?controller=public&action=';
            this.allClientes();
        },computed:{

            datosFiltrados(){//metodo para hacer las busquedas
                return this.clientes.filter((filtro)=>{
                    return filtro.nombre.toUpperCase().match(this.buscar.toUpperCase()) || filtro.username.toUpperCase().match(this.buscar.toUpperCase())
                })
            }
        },
           
        methods: {
            allClientes(){//metodos para dar de alta un post
                axios.get(this.url + "getClientes")
                    .then(res => {
                        this.clientes = res.data;
                        //this.clientes=res.data;

                       
                    })
            },
        }
    });

}


if( document.getElementById("v_registro") ) {

    var tab = new Vue({
        el: '#v_registro',
        data: {
            activeItem: 'home',
            respuesta:'',
            url:''
    
        },
        created() {
            this.url = window.location.origin + '/examn_php/app/?controller=public&action=insert_registro';
         
        },
        methods: {
            alta(){//metodos para dar de alta un post
                const form = document.getElementById('altaPost')
                axios.post(this.url, new FormData(form))
                .then( res =>{//ajax para hacer el insert
                this.respuesta = res.data
                    if (res.data == 'success') {//si la respuesta fue exitosa resetea el form
                        Swal.fire({
                            title:'buen trabajo',
                            text:"Post Guardado",
                            icon:'success',
                            button:"ok",
                        })
                        form.reset()
                    } else {
                        Swal.fire('Post no guardado')
                    }
                })
            },
        }
    });

}



