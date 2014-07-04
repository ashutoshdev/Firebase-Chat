<html lang="en">
    <head>
        <title>Firebase Chat</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdn.firebase.com/js/client/1.0.15/firebase.js"></script>
    </head>
    <body>
        <div id="chatlist" class="hm-chatlist">
            <!-- ko foreach: userslist -->
            <div class="ls-item" data-bind="click:$root.openChatBox">
                <img data-bind="attr:{'src':img}" style="height: 40px; width: 40px;" />
                <div class="hm-lsitem">
                    <table width="100%">
                        <tr>
                            <td width="98%" data-bind="text:name"></td>
                            <td width="2%">
                                <div style=" float: right; width:10px; height: 10px; background: green; border-radius:5px;" data-bind="visible:$root.isAlive($data)"></div>
                            </td>
                        </tr>
                    </table>
                    <p></p>
                </div>
            </div>
            <!-- /ko -->
       </div>
        
        
        
        <?php
         $list = array(
             array(
                 "id" => 1,
                 "name" => "Ajay Pratap",
                 "img" => "data:image/jpeg;base64,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"
             ),
             array(
                 "id" => 2,
                 "name" => "Himanshu Verma",
                 "img" => "data:image/jpeg;base64,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"
             ),
             array(
                 "id" => 3,
                 "name" => "Vinai Katiyar",
                 "img" => "data:image/jpeg;base64,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"
             ),
             array(
                 "id" => 4,
                 "name" => "Anshu Verma",
                 "img" => "data:image/jpeg;base64,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"
             ),
         );
         $me = $list[rand(0, 3)];
        ?>
        <h1><?php echo $me['id']; ?></h1>
        <h1><?php echo $me['name']; ?></h1>
        <script type="text/javascript">
            var user = {
                id:<?php echo $me['id']; ?>,
                name: "<?php echo $me['name']; ?>",
                img: "<?php echo $me['img']; ?>"
            }
            // 
            var ChatViewModel = function(user){
                var me = this;
                me.fbaseUsrlist = null;
                me.fbaseCurrentUsr = null;
                me.userslist = ko.observableArray([]);
                me.isAlive = function(d){
                    if(d.time){
                        var now = new Date();
                        var dt = new Date(d.time);
                        if((now - dt) < 1000 * 30)
                            return true;
                    }
                    return false;
                }
                me.openChatBox = function(d,e){
                    console.log(d);
                    console.log(e);
                }
                me.timer = null
                me.startTimer = function(){
                  var c = new Date();
                  try{clearInterval(me.timer)}catch(e){}
                  me.timer = setInterval(function(){
                        me.fbaseCurrentUsr.update({time:c.toISOString()});  
                    },1000);
                };
                me._setup = function(u){
                    me.fbaseUsrlist = new Firebase("https://boiling-fire-4249.firebaseio.com/userlist/");
                    me.fbaseUsrlist.on("value",function(snap){
                        var data = snap.val();
                        //console.log(data);
                        if(data == null ){
                            me.fbaseCurrentUsr = me.fbaseUsrlist.push(u);
                            me.startTimer();
                        }else{
                            var flag = true;
                            for(i in data){
                                if(data[i].id == u.id){
                                    flag = false;
                                    me.fbaseCurrentUsr = new Firebase("https://boiling-fire-4249.firebaseio.com/userlist/"+i);
                                    me.startTimer();
                                }
                            }
                            if(flag){
                                me.fbaseCurrentUsr = me.fbaseUsrlist.push(u);
                                me.startTimer();
                            }
                        }
                        var dlist =  [];
                        for(i in data){
                            dlist.push(data[i]);
                        }
                        me.userslist(dlist);
                    });
                }
                me._setup(user);
            } 
            var ChatBoxViewModel = function(){
                var me = this;
                me.msg = ko.observable("");
                me.sendMsg = function(){
                    
                };
            }
            var clist = new ChatViewModel(user);
            $(document).ready(function(){
                ko.applyBindings(clist,$('#chatlist')[0]);
            });
            
        </script>
        <style type="text/css">
            .hm-chatlist{
                font-family: Arial, Tahoma;
                font-size: 10px;
                width: 280px;
                position: fixed;
                right: 0;
                bottom: 0;
                height: 400px;
                overflow: auto;
                border: 1px solid;
            }
            .ls-item {
                border: 1px solid #ccc;
                border-radius: 4px;
                margin: 4px;
                height: 40px;
            }
            .ls-item img {
                display: inline-block;
                width: 40px;
            }
            .ls-item:hover{
                cursor: pointer;
                background: oldlace;
            }
            .ls-item .hm-lsitem{
                display: inline-block;
                width: 200px;
            }
        </style>
    </body>
</html>