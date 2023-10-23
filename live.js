$(document).ready(function(){

    $(document).on("change", "#faculty", function(){
        var option = $(this).find('option:selected');
        // var selected =$(this).attr("select")
        var values= option.val();
        // var text = option.text();
        // alert(values);

        if(values != ""){
            // alert(values)

            $.ajax({
                url:"category-search",
                method:"POST",
                data:{searchSub:1, id:values},
                success:function(data){
                   $("#sub").html(data);
                }
    
            });

        }





    
        
    });

    $(document).on("keyup", "#pass", function(){
        var pass = $("#pass").val()
        // var conpass= $("#conpass").val()
      
    
        if(pass.length <= 5){
                $("#errorxx").html("<p style='color:red;'>Password must be more than six characters.</p>");
                $("#btnreg").prop("disabled", true);      
    }else{
        $("#errorxx").html("");
        $("#err").html("");
        $("#btnreg").prop("disabled", false);
    
    }
    
    
    
    })

    $(document).on("keyup", "#conpass", function(){
        var pass = $("#pass").val()
        var conpass= $("#conpass").val()
      
    
        if(conpass.length >= 3){
         
            if(pass != conpass){
                $("#error").html("<p>Incorrect password, try again.</p>");
              
                $("#btnreg").prop("disabled", true);
            }else{
                $("#error").html("");
                $("#btnreg").prop("disabled", false);
            
            }
    }else{
        $("#error").html("");
        $("#errxx").html("");
        $("#btnreg").prop("disabled", false);
    
    }
    
    
    
    })






})