function LoginModalWindowVM (){
    $('#loginModalWindow').modal('toggle');
    var self = this;
    self.isLogIn = ko.observable(false);
    self.username = ko.observable('root');
    self.password = ko.observable('');
    self.submitHandler = function(){
    var data = ko.toJS({"user":"root", "password":""});
        $.ajax({
            url:"components/loginModalWindow/model.php",
            type:"post",
            data: {data},
            success: function(data){console.log(data);$('#loginModalWindow').modal('hide');}
        })
    }
}
