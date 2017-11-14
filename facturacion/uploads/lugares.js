/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var baseurl = window.location;
$.post(baseurl+"/Cempresa/getCiudades",
        {
        "ubicado": 0
        },
        function(data){
             var c = JSON.parse(data);
                $.each(c,function(i,item){
                    $('#Pais').append('<option value="'+item.id+'">'+item.nombre+'</option>');
                });
        });

        
        
$('#Departamentos').change(function(){
    $('#Departamentos option:selected').each(function (){
        var id= $('#Departamentos').val();
        
            $.post(baseurl+"/Cempresa/getCiudades",
            {
            "ubicado": id
            },
            function(data){
                var c = JSON.parse(data);
                $.each(c,function(i,item){
                    $('#Ciudades').append('<option value="'+item.id+'">'+item.nombre+'</option>');
                });
            });
         
       });
});

$('#Pais').change(function(){
    $('#Pais option:selected').each(function (){
        var id= $('#Pais').val();
        
            $.post(baseurl+"/Cempresa/getCiudades",
            {
            "ubicado": id
            },
            function(data){
                
                var c = JSON.parse(data);
                $.each(c,function(i,item){
                    $('#Departamentos').append('<option value="'+item.id+'">'+item.nombre+'</option>');
                });
            });
           
       });
});