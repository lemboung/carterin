<script>
    $(document).ready(function()
    { 
        /* validation */
        $("#login-form").validate({
        rules:
        {
                password: {
                    required: true,
                },
                user_email: {
                    required: true,
                    email: true,
                },
        },
        messages:
        {
                password:{
                        required: "please enter your password"
                        },
                user_email:{
                    required: "please enter your email address",
                    email: "please enter valid email address",
                },
        },
        submitHandler: submitFormlogin	
        });  
      
        function submitFormlogin()
        {		
            $.ajaxSetup({
                type:"POST",
                url: "<?php echo base_url('user/login') ?>",
                cache: false,
            });

            var data = $("#login-form").serialize();
                
            $.ajax({
                
            type : 'POST',
            data : data,
            beforeSend: function()
            {	
                $("#error").fadeOut();
                $("#btn-login").html('<span class="fa fa-exchange"></span> &nbsp; sending ...');
            },
            success :  function(response)
            {						
                    if(response=="admin"){
                                    
                        $("#btn-login").html('<span class="fa fa-spinner"></span> &nbsp; Signing In ...');
                        setTimeout(' window.location= "<?php echo base_url("admin") ?>"; ',4000);
                    }
                    else if(response == "ok"){
                                    
                        $("#btn-login").html('<span class="fa fa-spinner"></span> &nbsp; Signing In ...');
                        setTimeout(' window.location= "<?php echo base_url("home") ?>"; ',4000);
                    }else if(response == "inactive"){
                                    
                        $("#error").fadeIn(1000, function(){						
                        $("#error").html('<div class="alert alert-danger"> <span class="fa fa-exclamation-circle"></span> &nbsp; akun belum diaktifkan, silahkan periksa email verifikasi dan klik link untuk melakukan aktivasi !</div>');
                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                        });
                    }else{
                                    
                        $("#error").fadeIn(1000, function(){						
                        $("#error").html('<div class="alert alert-danger"> <span class="fa fa-exclamation-circle"></span> &nbsp; '+response+' !</div>');
                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                        });
                    }
            }
            });
                return false;
        }
  
        $("#regform").validate({
        rules:
        {
                password: {
                    required: true,
                },
                email1: {
                    required: true,
                    email: true,
                    remote:{
                        url: "<?php echo base_url('User/emailunique') ?>",
                        type: "POST",
                        data: {
                            email: function(){
                                return $("#email1").val();
                            }
                        }
                    }
                }
        },
        messages:
        {
                password:{
                        required: "please enter your password"
                        },
                email1:{
                    required: "please enter your email address",
                    email: "please enter valid email address",
                    remote: "Email telah terdaftar"
                }
        },
        submitHandler: submitFormreg	
            });  
  
        function submitFormreg()
        {		
            $.ajaxSetup({
                type:"POST",
                url: "<?php echo base_url('User/register') ?>",
                cache: false,
            });

            var data = $("#regform").serialize();
                
            $.ajax({
                
            type : 'POST',
            data : data,
            beforeSend: function()
            {	
                $("#regmessage").fadeOut();
                $("#btn-reg").html('<span class="fa fa-exchange"></span> &nbsp; sending ...');
            },
            success :  function(response)
            {						
                    if(response=="ok"){
                        $("#regmessage").fadeIn(1000, function(){            
                        $("#btn-reg").html('<span class="fa fa-spinner"></span> &nbsp; Registered');
                        $("#regmessage").html('<div class="alert alert-success"> <span class="fa fa-check-circle"></span> &nbsp; berhasil daftar, silahkan periksa email verifikasi dan klik link untuk melakukan aktivasi !</div>');
                        });
                        setTimeout(' $("#btn-reg").html("<span class="fa fa-spinner"></span> &nbsp; Register"); ',3000);
                    }else{
                                    
                        $("#regmessage").fadeIn(1000, function(){						
                        $("#regmessage").html('<div class="alert alert-danger"> <span class="fa fa-exclamation-circle"></span> &nbsp; gagal melakukan pendaftaran !</div>');
                        $("#btn-reg").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                        });
                    }
            }
            });
                return false;
        }
    });

    <?php 
    $act = $this->uri->segment(3,0);
    if ($act==="process") {
        echo "$(\"#process\").modal('show');";
    } ?>
    $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('User/register') ?>",
        cache: false,
    });
    $("#registform").submit(function(e){
        e.preventDefault();
        $.ajax({
            type : 'POST',
            data: $("#registform").serialize(),
            success : function(message){
                $("#message").html(message)
                $("#emailsent").modal('show');
            }
        });
        return false;
    });
    // $("#regform").submit(function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         type : 'POST',
    //         data: $("#regform").serialize(),
    //         success : function(message){
    //             $("#message").html(message)
    //             $("#emailsent").modal('show');
    //         }
    //     });
    //     return false;
    // });
</script>