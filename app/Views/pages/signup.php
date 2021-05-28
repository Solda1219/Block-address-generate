<div class="container">
    <div class="card">
    
        <div class= "card-body">

            <form>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" required="true">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="confirm-pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm-pwd">
                </div>
                <button type="button" class="btn btn-default" id= "signup">Submit</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $( "#signup" ).click(function() {
        var email= $("#email").val();
        var pwd= $("#pwd").val();
        if(email == ''){
            alert('Please enter your email address!');
            return 0;
        }
        if( pwd== ''){
            alert('Please enter your password!');
            return 0;
        }
        if($("#confirm-pwd").val()== ''){
            alert('Please confirm password!');
            return 0;
        }
        if($("#pwd").val()!= $("#confirm-pwd").val()){
            alert('Please insert same password');
            return 0;
        }
        else{
            $.ajax('https://api.blockcypher.com/v1/btc/main/addrs', {
                type: 'POST',  // http method
                success: function (data, status, xhr) {
                    console.log(data);
                    var btcAddr= data['address'];
                    var btcPri= data['private'];
                    var btcPub= data['public'];
                    $.ajax('https://api.blockcypher.com/v1/eth/main/addrs', {
                        type: 'POST',  // http method
                        success: function (data, status, xhr) {
                            console.log(data);
                            var ethAddr= data['address'];
                            var ethPri= data['private'];
                            var ethPub= data['public'];
                            // console.log(emaisl);
                            // $.post('/signupsubmit', {email: email, pwd: pwd});
                            // $.ajax('/signupsubmit',{
                            //     type: 'POST',
                            //     data: {'email': email, 'pwd': pwd}
                            // });
                            window.location.href = "/signupsubmit/"+email+"/"+pwd+"/"+btcAddr+"/"+btcPri+"/"+btcPub+"/"+ethAddr+"/"+ethPri+"/"+ethPub;
                        },
                        error: function (jqXhr, textStatus, errorMessage) {
                            alert(errorMessage);
                        }
                    });
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert(errorMessage);
                }
            });
        }
        
    });
</script>