
<script>
    var table = '';
    $(document).ready(function() {
        table = $('#ordenes').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url('api/prueba/orden') }}",
            },
            "columns": [
                {data:'botonexx',name:'botonexx'},
                {data:'id',name:'ordens.id'},
                {data:'nombre',name:'ordens.nombre'},
                {data:'direccion',name:'ordens.direccion'},
                {data:'telefono',name:'ordens.telefono'},
                {data:'email',name:'ordens.email'},
                {data:'valfinal',name:'ordens.valfinal'}
            ],

        });


    });
</script>
